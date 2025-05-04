<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Materi | SmartOffice</title>

    <!-- Favicons -->
    <link href="/assets/img/favicon.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="/assets/css/main.css" rel="stylesheet">
</head>

<body>

    <header id="header" class="header d-flex align-items-center fixed-top shadow-sm" style="background-color: #ffffff;">
        <div class="container d-flex justify-content-center align-items-center">
            <a href="/" class="logo d-flex align-items-center text-decoration-none">
                <img src="/assets/img/logo.png" alt="SmartOffice Logo" style="height: 40px;">
                <h1 class="ms-2 mb-0 fs-4 fw-bold text-dark">SmartOffice</h1>
            </a>
        </div>
    </header>

    <main id="main" class="pt-5">
        <section class="dashboard-section py-5">
            <div class="container">

                <h1 class="section-title text-center mb-4 animate__animated animate__fadeInDown" style="font-family: 'Roboto', sans-serif; font-size: 2.5rem; font-weight: 600; color: #1e3a8a;">
                    <span style="color: #74b9ff;">Tambah</span> Materi Baru
                </h1>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card shadow-lg border-0">
                            <div class="card-body p-4">

                                <form id="materiForm" action="/admin/save" method="post" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>

                                    <div class="mb-3">
                                        <label for="judul" class="form-label">Judul</label>
                                        <input type="text" id="judul" name="judul" class="form-control <?= session('errors.judul') ? 'is-invalid' : ''; ?>" placeholder="Masukkan Judul" value="<?= old('judul'); ?>">
                                        <div class="invalid-feedback">
                                            <?= session('errors.judul'); ?>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="subjudul" class="form-label">Sub Judul</label>
                                        <input type="text" id="subjudul" name="subjudul" class="form-control <?= session('errors.subjudul') ? 'is-invalid' : ''; ?>" placeholder="Masukkan Sub Judul" value="<?= old('subjudul'); ?>">
                                        <div class="invalid-feedback">
                                            <?= session('errors.subjudul'); ?>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="kategori" class="form-label">Kategori</label>
                                        <select id="kategori" name="kategori" class="form-control <?= session('errors.kategori') ? 'is-invalid' : ''; ?>">
                                            <option value="" disabled selected>Pilih Kategori</option>
                                            <option value="Word" <?= old('kategori') == 'Word' ? 'selected' : ''; ?>>Word</option>
                                            <option value="Excel" <?= old('kategori') == 'Excel' ? 'selected' : ''; ?>>Excel</option>
                                            <option value="PowerPoint" <?= old('kategori') == 'PowerPoint' ? 'selected' : ''; ?>>PowerPoint</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= session('errors.kategori'); ?>
                                        </div>
                                    </div>


                                    <div class="mb-3">
                                        <label for="deskripsi" class="form-label">Deskripsi</label>
                                        <textarea id="deskripsi" name="deskripsi" class="form-control <?= session('errors.deskripsi') ? 'is-invalid' : ''; ?>" rows="4" placeholder="Masukkan Deskripsi"><?= old('deskripsi'); ?></textarea>
                                        <div class="invalid-feedback">
                                            <?= session('errors.deskripsi'); ?>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="tips" class="form-label">Tips</label>
                                        <textarea id="tips" name="tips" class="form-control <?= session('errors.tips') ? 'is-invalid' : ''; ?>" rows="3" placeholder="Tips Penggunaan"><?= old('tips'); ?></textarea>
                                        <div class="invalid-feedback">
                                            <?= session('errors.tips'); ?>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="video_url" class="form-label">Video URL (YouTube ID)</label>
                                        <input type="text" id="video_url" name="video_url" class="form-control <?= session('errors.video_url') ? 'is-invalid' : ''; ?>" placeholder="Contoh: dQw4w9WgXcQ" value="<?= old('video_url'); ?>">
                                        <div class="invalid-feedback">
                                            <?= session('errors.video_url'); ?>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="gambar" class="form-label">Upload Gambar</label>
                                        <div class="d-flex align-items-center">
                                            <img id="preview-img" src="/assets/img/default.jpg" class="img-thumbnail me-3" style="width: 100px; height: 100px; object-fit: cover;">
                                            <input type="file" id="gambar" name="gambar" class="form-control <?= session('errors.gambar') ? 'is-invalid' : ''; ?>" onchange="previewImg()">
                                        </div>
                                        <div class="invalid-feedback">
                                            <?= session('errors.gambar'); ?>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between mt-4">
                                        <a href="/office" class="btn btn-outline-secondary">
                                            <i class="bi bi-arrow-left"></i> Kembali
                                        </a>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="bi bi-save"></i> Simpan Materi
                                        </button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <footer class="footer pt-4 pb-4" style="background-color: #f9f9f9; box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.1);">
        <div class="container text-center">
            <p class="mb-0 small text-muted">&copy; 2025 SmartOffice. Semua Hak Dilindungi.</p>
        </div>
    </footer>

    <!-- Vendor JS -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>

    <script>
        AOS.init({
            once: true,
            duration: 1000,
        });

        function previewImg() {
            const gambar = document.getElementById('gambar');
            const preview = document.getElementById('preview-img');

            if (gambar.files.length > 0) {
                const fileReader = new FileReader();
                fileReader.readAsDataURL(gambar.files[0]);
                fileReader.onload = function(e) {
                    preview.src = e.target.result;
                };
            }
        }
    </script>

</body>

</html>