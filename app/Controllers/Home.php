<?php

namespace App\Controllers;

use App\Models\OfficeModel;

class Home extends BaseController
{
    protected $materiModel;

    public function __construct()
    {
        $this->materiModel = new OfficeModel();
    }

    // Halaman utama
    public function index()
    {
        return view('home');
    }

    // Halaman materi - menampilkan materi berdasarkan kategori
    public function materi($kategori = null)
    {
        if ($kategori) {
            // Ambil materi berdasarkan kategori
            $data['materi'] = $this->materiModel->where('kategori', $kategori)->findAll();
            $data['judulKategori'] = $kategori;
        } else {
            // Ambil semua materi jika tidak ada kategori yang dipilih
            $data['materi'] = $this->materiModel->findAll();
            $data['judulKategori'] = 'Semua Materi';
        }

        return view('materi', $data);
    }

    // Halaman detail materi berdasarkan slug
    public function materi_detail($kategori)
    {
        $model = new OfficeModel();

        // Validasi kategori yang diizinkan
        $allowed = ['Word', 'Excel', 'PowerPoint'];
        if (!in_array($kategori, $allowed)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Ambil semua materi berdasarkan kategori
        $materi = $model->where('kategori', $kategori)->findAll();  // Menggunakan findAll()

        // Pastikan materi ditemukan
        if (!$materi) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'kategori' => $kategori,
            'materi'   => $materi
        ];

        return view('materi-detail', $data);
    }



    public function pelajari_materi($slug)
    {
        // dd($this->materiModel->select('slug')->findAll());

        // Mengambil data berdasarkan slug
        $materi = $this->materiModel->getOffice($slug);

        $data = [
            'materi' => $materi,
            'recent_materi' => $this->materiModel->getOffice()
        ];

        return view('pelajari-materi', $data);
    }
}
