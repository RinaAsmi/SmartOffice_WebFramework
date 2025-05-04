<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Materi | SmartOffice</title>

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

  <!-- Header -->
  <header id="header" class="header d-flex align-items-center fixed-top shadow-sm" style="background-color: #ffffff;">
    <div class="container d-flex justify-content-center align-items-center">
      <a href="#" class="logo d-flex align-items-center text-decoration-none">
        <img src="/assets/img/logo.png" alt="SmartOffice Logo" style="height: 40px;">
        <h1 class="ms-2 mb-0 fs-4 fw-bold text-dark">SmartOffice</h1>
      </a>
    </div>
  </header>

  <main id="main" class="pt-5">
    <section class="detail-section py-5">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card shadow-lg rounded-4 animate__animated animate__fadeInUp" style="overflow: hidden;">
              <div class="card-header text-white text-center py-4" style="background: linear-gradient(135deg, #74b9ff, #3498db);">
                <h2 class="fw-bold mb-0"><?= htmlspecialchars($materi['judul']); ?></h2>
              </div>

              <?php if (!empty($materi['gambar'])) : ?>
                <div class="overflow-hidden mt-5">
                  <div class="text-center">
                    <img src="/assets/img/<?= $materi['gambar']; ?>"
                      alt="Gambar Materi"
                      class="img-fluid rounded-3 shadow-sm"
                      style="max-width: 100%; height: auto; max-height: 300px; object-fit: contain;">
                  </div>
                </div>
              <?php endif; ?>


              <div class="card-body p-5">
                <div class="mb-4">
                  <h4 class="text-primary fw-bold mb-3">Sub Judul</h4>
                  <p class="text-muted" style="font-size: 1.1rem;"><?= $materi['subjudul']; ?></p>
                </div>

                <div class="mb-4">
                  <h4 class="text-primary fw-bold mb-3">Slug</h4>
                  <p class="text-muted" style="font-size: 1.1rem;"><?= $materi['slug']; ?></p>
                </div>

                <div class="mb-4">
                  <h4 class="text-primary fw-bold mb-3">Kategori</h4>
                  <p class="text-muted" style="font-size: 1.1rem;"><?= $materi['kategori']; ?></p>
                </div>

                <div class="mb-4">
                  <h4 class="text-primary fw-bold mb-3">Deskripsi</h4>
                  <p class="text-muted" style="font-size: 1.1rem;"><?= $materi['deskripsi']; ?></p>
                </div>

                <div class="mb-4">
                  <h4 class="text-primary fw-bold mb-3">Tips</h4>
                  <p class="text-muted" style="font-size: 1.1rem;"><?= $materi['tips']; ?></p>
                </div>

                <div class="mt-4 mb-5">
                  <h4 class="text-primary fw-bold mb-3">Video URL</h4>
                  <div class="ratio ratio-16x9 rounded overflow-hidden shadow-sm">
                    <iframe src="https://www.youtube.com/embed/<?= $materi['video_url']; ?>" title="Tutorial Word" allowfullscreen></iframe>
                  </div>
                </div>

                <div class="text-center d-flex justify-content-center gap-3 mt-4 flex-wrap">
                  <a href="/admin" class="btn btn-outline-primary btn-lg rounded-pill shadow-sm custom-hover-primary">
                    <i class="bi bi-arrow-left"></i> Kembali
                  </a>

                  <a href="/admin/edit/<?= $materi['slug']; ?>" class="btn btn-outline-success btn-lg rounded-pill shadow-sm custom-hover-success">
                    <i class="bi bi-pencil-square"></i> Edit
                  </a>

                  <form action="/admin/delete/<?= $materi['id']; ?>" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus materi ini?');" style="display: inline;">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-outline-danger btn-lg rounded-pill shadow-sm custom-hover-danger">
                      <i class="bi bi-trash"></i> Hapus
                    </button>
                  </form>
                </div>
              </div>

              <div class="card-footer text-muted text-center small py-3" style="background-color: #f8f9fa;">
                Diperbarui pada <?= date('d M Y', strtotime($materi['updated_at'])); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer pt-4 pb-4" style="background-color: #f9f9f9; box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.1);">
    <div class="container">
      <div class="row align-items-center gy-4">
        <!-- Brand & Copyright -->
        <div class="col-md-6 text-center text-md-start">
          <h5 class="fw-bold mb-2 text-dark">SmartOffice</h5>
          <p class="mb-0 small text-muted">&copy; 2025 SmartOffice. Semua Hak Dilindungi.</p>
        </div>

        <!-- Links -->
        <div class="col-md-6 text-center text-md-end">
          <ul class="list-inline mb-2">
            <li class="list-inline-item mx-2">
              <a href="#" class="footer-link text-dark">Kontak</a>
            </li>
            <li class="list-inline-item mx-2">
              <a href="#" class="footer-link text-dark">Kebijakan Privasi</a>
            </li>
            <li class="list-inline-item mx-2">
              <a href="#" class="footer-link text-dark">Syarat & Ketentuan</a>
            </li>
          </ul>
          <!-- Social Icons (optional) -->
          <div>
            <a href="#" class="social-icon mx-2" style="font-size: 1.5rem;">
              <i class="bi bi-facebook text-primary"></i>
            </a>
            <a href="#" class="social-icon mx-2" style="font-size: 1.5rem;">
              <i class="bi bi-instagram text-danger"></i>
            </a>
            <a href="#" class="social-icon mx-2" style="font-size: 1.5rem;">
              <i class="bi bi-linkedin text-primary"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Vendor JS -->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS -->
  <script src="/assets/js/main.js"></script>

  <!-- Initialize AOS -->
  <script>
    AOS.init({
      once: true,
      duration: 1000,
    });
  </script>

</body>

</html>