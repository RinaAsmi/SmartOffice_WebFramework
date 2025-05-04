<?php

namespace App\Controllers;

use App\Models\OfficeModel;

class Office extends BaseController
{

    protected $officeModel;

    public function __construct()
    {
        $this->officeModel = new OfficeModel();
    }

    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login'); // Cek apakah sudah login
        }

        $currentPage = $this->request->getVar('page_office') ?: 1;

        $materi = $this->officeModel->paginate(5, 'office', $currentPage);

        $data = [
            'materi' => $materi,
            'pager' => $this->officeModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/dashboard', $data);
    }


    public function detail($slug)
    {
        $model = new OfficeModel();
        $materi = $model->where('slug', $slug)->first();

        if (!$materi) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Materi tidak ditemukan");
        }

        $data = [
            'materi' => $materi
        ];

        return view('admin/detail', $data);
    }

    public function create()
    {
        $data = [
            'validation' => session('validation') ?? \Config\Services::validation()
        ];

        return view('admin/create', $data); // View form create.php yang kita buat tadi
    }

    public function save()
    {
        // Validasi Input
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[office.judul]',
                'errors' => [
                    'required' => 'Judul harus diisi',
                    'is_unique' => 'Judul sudah terdaftar'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori harus diisi'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi'
                ]
            ],
            'tips' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tips harus diisi'
                ]
            ],
            'gambar' => [
                'rules' => 'is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'is_image' => 'File harus berupa gambar',
                    'mime_in' => 'File harus berformat JPG, JPEG, atau PNG'
                ]
            ]
        ])) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        // Upload Gambar
        $gambar = $this->request->getFile('gambar');
        $namaGambar = $gambar->getError() == 4 ? 'default.jpg' : $gambar->getRandomName();
        if ($gambar->getError() != 4) {
            $gambar->move(ROOTPATH . 'public/assets/img/', $namaGambar);
        }

        // Simpan data ke database
        $this->officeModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => url_title($this->request->getVar('judul'), '-', true),
            'subjudul' => $this->request->getVar('subjudul'),
            'kategori' => $this->request->getVar('kategori'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'tips' => $this->request->getVar('tips'),
            'video_url' => $this->request->getVar('video_url'),
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Materi berhasil ditambahkan');
        return redirect()->to('admin');
    }

    public function delete($id)
    {
        // Cari materi berdasarkan ID
        $materi = $this->officeModel->find($id);

        // Hapus gambar jika ada
        if ($materi['gambar'] != 'default.jpg') {
            $path = FCPATH . 'assets/img/' . $materi['gambar'];
            if (file_exists($path) && is_file($path)) {
                unlink($path);
            }
        }

        // Hapus materi
        $this->officeModel->delete($id);
        session()->setFlashdata('pesan', 'Materi berhasil dihapus');
        return redirect()->to('/admin');
    }

    public function edit($slug)
    {
        $data = [
            'validation' => session('validation') ?? \Config\Services::validation(),
            'materi' => $this->officeModel->asArray()->where('slug', $slug)->first()
        ];

        return view('admin/edit', $data);
    }

    public function update($id)
    {
        // Ambil slug lama untuk cari data
        $slug = $this->request->getVar('slug');
        $materiLama = $this->officeModel->getOffice($slug);

        if (!$materiLama) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Materi tidak ditemukan');
        }

        // Cek apakah judul diubah atau tidak
        $rule_judul = ($materiLama['judul'] == $this->request->getVar('judul'))
            ? 'required'
            : 'required|is_unique[office.judul]';
        // Validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => 'Judul harus diisi',
                    'is_unique' => 'Judul sudah terdaftar'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori harus diisi'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi'
                ]
            ],
            'tips' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tips harus diisi'
                ]
            ],
            'gambar' => [
                'rules' => 'is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'is_image' => 'File harus berupa gambar',
                    'mime_in' => 'File harus berformat JPG, JPEG, atau PNG'
                ]
            ]
        ])) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        // Proses gambar
        $fileGambar = $this->request->getFile('gambar');
        $namaGambar = $fileGambar && $fileGambar->isValid() && !$fileGambar->hasMoved()
            ? $fileGambar->getRandomName()
            : $this->request->getVar('gambarLama');

        if ($fileGambar && $fileGambar->isValid() && !$fileGambar->hasMoved()) {
            $fileGambar->move(ROOTPATH . '/public/assets/img/', $namaGambar);
            $materi = $this->officeModel->find($id);
            if ($materi['gambar'] != 'default.jpg') {
                $path = FCPATH . '/assets/img/' . $materi['gambar'];
                if (file_exists($path) && is_file($path)) {
                    unlink($path);
                }
            }
        }

        // Buat slug baru dari judul
        $slugBaru = url_title($this->request->getVar('judul'), '-', true);

        // Update data
        $data = [
            'judul' => $this->request->getVar('judul'),
            'slug' => $slugBaru,
            'subjudul' => $this->request->getVar('subjudul'),
            'kategori' => $this->request->getVar('kategori'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'tips' => $this->request->getVar('tips'),
            'video_url' => $this->request->getVar('video_url'),
            'gambar' => $namaGambar
        ];

        // Cek perubahan
        $adaPerubahan = false;
        foreach ($data as $key => $value) {
            if ($materiLama[$key] != $value) {
                $adaPerubahan = true;
                break;
            }
        }

        if ($adaPerubahan) {
            $this->officeModel->update($id, $data);
            session()->setFlashdata('pesan', 'Materi berhasil diperbarui');
        } else {
            session()->setFlashdata('pesan', 'Tidak ada perubahan data');
        }
        return redirect()->to('/admin');
    }
}
