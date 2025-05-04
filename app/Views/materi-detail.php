<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Detail Materi - SmartOffice</title>
  <meta name="description" content="Detail materi pembelajaran Microsoft Office">
  <meta name="keywords" content="Microsoft Office, Materi, Word, Excel, PowerPoint">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="/assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">
  <!-- Header -->
  <header id="header" class="header d-flex align-items-center fixed-top shadow-sm" style="background-color: #ffffff;">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center text-decoration-none">
        <img src="/assets/img/logo.png" alt="SmartOffice Logo" style="height: 40px;">
        <h1 class="ms-2 mb-0 fs-4 fw-bold text-dark">SmartOffice</h1>
      </a>

      <!-- Navbar -->
      <nav class="d-none d-lg-block">
        <ul class="d-flex list-unstyled gap-4 mb-0 align-items-center">
          <li><a href="/" class="text-dark text-decoration-none fw-medium">Home</a></li>
          <li><a href="/#about" class="text-dark text-decoration-none fw-medium">About</a></li>
          <li><a href="/#tutorial" class="text-dark text-decoration-none fw-medium">Tutorial</a></li>
          <li><a href="/#contact" class="text-dark text-decoration-none fw-medium">Contact</a></li>
          <li class="dropdown">
            <a href="/materi" class="text-dark text-decoration-none fw-medium" aria-expanded="false">
              Materi
            </a>
          </li>
        </ul>
      </nav>

      <!-- Call to Action -->
      <a href="/admin" class="btn btn-primary ms-3 d-none d-lg-inline-block">Get Started</a>

      <!-- Mobile toggle -->
      <button class="navbar-toggler d-lg-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mobileNav" aria-controls="mobileNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <!-- Mobile Menu -->
    <div class="collapse d-lg-none bg-white shadow-sm" id="mobileNav">
      <ul class="navigation p-3 mb-0">
        <li><a href="/" class="d-block py-2 text-dark text-decoration-none">Home</a></li>
        <li><a href="/#about" class="d-block py-2 text-dark text-decoration-none">About</a></li>
        <li><a href="/#tutorial" class="d-block py-2 text-dark text-decoration-none">Tutorial</a></li>
        <li><a href="/#contact" class="d-block py-2 text-dark text-decoration-none">Contact</a></li>
        <li class="py-2">
          <strong class="text-dark">Materi</strong>
        </li>
      </ul>
    </div>
  </header>

  <!-- ======= Hero Section ======= -->
  <section class="d-flex align-items-center justify-content-center" style="background: #eef1f5; height: 30vh; margin-top: 70px;">
    <div class="text-center" data-aos="fade-up">
      <h1>Microsoft <?= $materi[0]['kategori']; ?></h1> <!-- Mengakses kategori materi pertama -->
      <p>Belajar membuat dokumen profesional dengan mudah</p>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Materi Detail Section ======= -->
  <section id="materi-detail" class="py-5">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center mb-4">
        <?php
        // Menentukan gambar, judul, dan deskripsi berdasarkan kategori
        switch ($kategori) {
          case 'Word':
            $gambar = 'word.png';
            $judul = 'Pengenalan Microsoft Word';
            $deskripsi = 'Microsoft Word adalah aplikasi pengolah kata yang digunakan untuk membuat berbagai dokumen, seperti surat, laporan, proposal, skripsi, dan lainnya. Dengan fitur-fitur yang lengkap, Word memudahkan pengguna dalam mengelola teks, gambar, tabel, grafik, dan elemen-elemen lainnya.';
            break;
          case 'Excel':
            $gambar = 'excel.png';
            $judul = 'Pengenalan Microsoft Excel';
            $deskripsi = 'Microsoft Excel adalah aplikasi spreadsheet yang digunakan untuk mengelola data numerik, membuat grafik, dan melakukan analisis data dengan rumus-rumus yang kuat. Excel banyak digunakan dalam berbagai bidang seperti keuangan, akuntansi, dan analisis data.';
            break;
          case 'PowerPoint':
            $gambar = 'ppt.png';
            $judul = 'Pengenalan Microsoft PowerPoint';
            $deskripsi = 'Microsoft PowerPoint adalah aplikasi presentasi yang digunakan untuk membuat slide presentasi yang menarik dengan berbagai fitur visual seperti animasi, gambar, dan video. PowerPoint sering digunakan untuk presentasi bisnis, pendidikan, dan seminar.';
            break;
          default:
            $gambar = 'default.png';
            $judul = 'Pilih Kategori';
            $deskripsi = 'Pilih kategori untuk memulai belajar Microsoft Office. Kami menyediakan materi tentang Word, Excel, dan PowerPoint untuk membantu Anda memahami aplikasi-aplikasi penting dalam dunia profesional.';
        }
        ?>
        <div class="col-md-8 text-center">
          <img src="/assets/img/<?= $gambar; ?>" alt="Microsoft <?= $kategori; ?>" class="img-fluid mb-4" style="max-width: 200px;">
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-10">
          <h2 class="mb-4"><?= $judul; ?></h2> <!-- Judul Dinamis -->
          <p><?= $deskripsi; ?></p> <!-- Deskripsi Dinamis -->
          <h3 class="mt-5 mb-3">Materi yang Dipelajari:</h3>
          <ul class="list-group list-group-flush mb-4">
            <?php foreach ($materi as $m): ?>
              <li class="list-group-item rounded mb-3 shadow-sm bg-light">
                <a href="/pelajari-materi/<?= $m['slug']; ?>" class="d-flex align-items-center p-3 text-decoration-none text-dark transition-all duration-300 ease-in-out hover:bg-primary hover-text-white">
                  <i class="fas fa-file-alt me-3 fs-4 text-primary"></i> <!-- Ikon untuk setiap materi -->
                  <span class="fw-bold"><?= $m['judul']; ?></span> <!-- Judul Materi -->
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
          <h3 class="mt-5 mb-3">Tips Praktis:</h3>
          <p>Gunakan shortcut keyboard untuk mempercepat pekerjaan, seperti <strong>Ctrl + B</strong> untuk bold, <strong>Ctrl + I</strong> untuk italic, dan <strong>Ctrl + S</strong> untuk menyimpan dokumen.</p>
          <div class="text-center mt-5">
            <a href="/materi" class="btn btn-primary">Kembali ke Materi</a>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Materi Detail Section -->

  <!-- Footer -->
  <footer class="text-black pt-3 pb-3 border-top" style="background-color:rgb(207, 207, 207); box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);">
    <div class="container">
      <div class="row align-items-center gy-4">
        <!-- Brand & Copyright -->
        <div class="col-md-6 text-center text-md-start">
          <h5 class="fw-bold mb-2">SmartOffice</h5>
          <p class="mb-0 small">&copy; 2025 SmartOffice. Semua Hak Dilindungi.</p>
        </div>

        <!-- Links -->
        <div class="col-md-6 text-center text-md-end">
          <ul class="list-inline mb-2">
            <li class="list-inline-item mx-2">
              <a href="#" class="footer-link">Kontak</a>
            </li>
            <li class="list-inline-item mx-2">
              <a href="#" class="footer-link">Kebijakan Privasi</a>
            </li>
            <li class="list-inline-item mx-2">
              <a href="#" class="footer-link">Syarat & Ketentuan</a>
            </li>
          </ul>
          <!-- Social Icons (optional) -->
          <div>
            <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
            <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
            <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="/assets/js/main.js"></script>

  <script>
    AOS.init();
  </script>

</body>

</html>