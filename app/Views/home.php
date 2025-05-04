<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmartOffice - Belajar Microsoft Office</title>
  <meta name="description" content="Belajar Microsoft Word, Excel, dan PowerPoint dengan mudah.">
  <meta name="keywords" content="Microsoft Office, Word, Excel, PowerPoint, Belajar">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>

  <!-- Header -->
  <header id="header" class="header d-flex align-items-center fixed-top shadow-sm" style="background-color: #ffffff;">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center text-decoration-none">
        <img src="assets/img/logo.png" alt="SmartOffice Logo" style="height: 40px;">
        <h1 class="ms-2 mb-0 fs-4 fw-bold text-dark">SmartOffice</h1>
      </a>

      <!-- Navbar -->
      <nav class="d-none d-lg-block">
        <ul class="d-flex list-unstyled gap-4 mb-0 align-items-center">
          <li><a href="/" class="text-dark text-decoration-none fw-medium">Home</a></li>
          <li><a href="#about" class="text-dark text-decoration-none fw-medium">About</a></li>
          <li><a href="#tutorial" class="text-dark text-decoration-none fw-medium">Tutorial</a></li>
          <li><a href="#contact" class="text-dark text-decoration-none fw-medium">Contact</a></li>
          <li class="dropdown">
            <a href="materi" class="text-dark text-decoration-none fw-medium" aria-expanded="false">
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
      <ul class="list-unstyled p-3 mb-0">
        <li><a href="#hero" class="d-block py-2 text-dark text-decoration-none">Home</a></li>
        <li><a href="#about" class="d-block py-2 text-dark text-decoration-none">About</a></li>
        <li><a href="#tutorial" class="d-block py-2 text-dark text-decoration-none">Tutorial</a></li>
        <li><a href="#contact" class="d-block py-2 text-dark text-decoration-none">Contact</a></li>
        <li class="py-2">
          <strong class="text-dark">Materi</strong>
          <ul class="list-unstyled ps-3">
            <li><a href="#word" class="text-dark text-decoration-none">Microsoft Word</a></li>
            <li><a href="#excel" class="text-dark text-decoration-none">Microsoft Excel</a></li>
            <li><a href="#powerpoint" class="text-dark text-decoration-none">Microsoft PowerPoint</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </header>

  <!-- Hero Section -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="hero-bg position-absolute w-100 h-100" style="z-index: -1;">
      <img src="assets/img/hero-bg-light.webp" class="w-100 h-100" style="object-fit: cover;" alt="Background">
    </div>
    <div class="container text-center">
      <h1 data-aos="fade-up">Welcome to <span class="text-primary">SmartOffice</span></h1>
      <p data-aos="fade-up" data-aos-delay="100">Belajar Microsoft Office dengan mudah dan cepat</p>
      <img src="assets/img/hero-services-img.webp" class="img-fluid mt-0" alt="Services" data-aos="zoom-out" data-aos-delay="300" style="max-width: 400px; height: auto;">
      <div class="d-flex justify-content-center mt-4" data-aos="fade-up" data-aos-delay="200">
        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn btn-outline-primary">
          <i class="bi bi-play-circle"></i> Watch Video
        </a>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-5 bg-light">
    <div class="container" data-aos="fade-up">
      <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
          <img src="assets/img/smartofficer.png" alt="Tentang SmartOffice" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
          <h2 class="mb-3">Tentang <span class="text-primary">SmartOffice</span></h2>
          <p class="lead">SmartOffice adalah platform pembelajaran modern untuk menguasai <strong>Microsoft Word</strong>, <strong>Excel</strong>, dan <strong>PowerPoint</strong>. Kami hadir dengan materi interaktif, panduan langkah demi langkah, dan video tutorial berkualitas.</p>
          <ul class="list-unstyled mt-4">
            <li><i class="bi bi-check-circle text-success me-2"></i> Materi Lengkap & Praktis</li>
            <li><i class="bi bi-check-circle text-success me-2"></i> Belajar Kapan Saja, di Mana Saja</li>
            <li><i class="bi bi-check-circle text-success me-2"></i> Desain Modern & User Friendly</li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <!-- Tutorial Section -->
  <section id="tutorial" class="py-5 bg-light">
    <div class="container" data-aos="fade-up">
      <h2 class="text-center mb-5 fw-bold">Tutorial <span class="text-primary">Microsoft Office</span></h2>
      <div class="row g-4">
        <!-- Word -->
        <div class="col-md-4" id="excel">
          <div class="card h-70 border-0 shadow-lg rounded-4 hover-shadow transition">
            <div class="card-body d-flex flex-column">
              <img src="assets/img/word.png" class="img-fluid rounded-4 mb-3 d-block mx-auto" alt="Microsoft Excel" style="max-height: 200px;">
              <h5 class="card-title fw-semibold">Microsoft Word</h5>
              <p class="card-text flex-grow-1">Pelajari membuat dokumen profesional dan manfaatkan fitur-fitur Word secara maksimal.</p>
              <a href="<?= base_url('materi-detail/Word') ?>" class="btn btn-outline-primary mt-auto">Pelajari</a>
            </div>
          </div>
        </div>

        <!-- Excel -->
        <div class="col-md-4" id="excel">
          <div class="card h-70 border-0 shadow-lg rounded-4 hover-shadow transition">
            <div class="card-body d-flex flex-column">
              <img src="assets/img/excel.png" class="img-fluid rounded-4 mb-3 d-block mx-auto" alt="Microsoft Excel" style="max-height: 200px;">
              <h5 class="card-title fw-semibold">Microsoft Excel</h5>
              <p class="card-text flex-grow-1">Pelajari rumus, pivot table, visualisasi data, dan tips Excel untuk produktivitas maksimal.</p>
              <a href="<?= base_url('materi-detail/Excel') ?>" class="btn btn-outline-success mt-auto">Pelajari</a>
            </div>
          </div>
        </div>
        <!-- PowerPoint -->
        <div class="col-md-4" id="excel">
          <div class="card h-70 border-0 shadow-lg rounded-4 hover-shadow transition">
            <div class="card-body d-flex flex-column">
              <img src="assets/img/ppt.png" class="img-fluid rounded-4 mb-3 d-block mx-auto" alt="Microsoft Excel" style="max-height: 200px;">
              <h5 class="card-title fw-semibold">Microsoft PowerPoint</h5>
              <p class="card-text flex-grow-1">Pelajari teknik desain presentasi, animasi, dan storytelling visual dengan PowerPoint.</p>
              <a href="<?= base_url('materi-detail/PowerPoint') ?>" class="btn btn-outline-danger mt-auto">Pelajari</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Contact Section -->
  <section id="contact" class="py-5 bg-gradient" style="background: linear-gradient(to right, #e0eafc, #cfdef3);">
    <div class="container" data-aos="fade-up">
      <div class="text-center mb-5">
        <h2 class="fw-bold display-6">Terhubung dengan <span class="text-primary">SmartOffice</span></h2>
        <p class="lead text-muted">Kami senang mendengar dari Anda! Hubungi kami kapan saja melalui platform di bawah ini.</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-10 d-flex justify-content-center flex-wrap gap-4">
          <!-- Social Link Card -->
          <a href="mailto:smartoffice@gmail.com" target="_blank" class="contact-card text-decoration-none text-dark">
            <i class="bi bi-envelope-fill fs-1 mb-2"></i>
            <div>Email</div>
          </a>
          <a href="https://wa.me/6281234567890" target="_blank" class="contact-card text-success text-decoration-none">
            <i class="bi bi-whatsapp fs-1 mb-2"></i>
            <div>WhatsApp</div>
          </a>
          <a href="https://instagram.com/smartoffice" target="_blank" class="contact-card text-danger text-decoration-none">
            <i class="bi bi-instagram fs-1 mb-2"></i>
            <div>Instagram</div>
          </a>
          <a href="https://facebook.com/smartoffice" target="_blank" class="contact-card text-primary text-decoration-none">
            <i class="bi bi-facebook fs-1 mb-2"></i>
            <div>Facebook</div>
          </a>
          <a href="https://youtube.com/@smartoffice" target="_blank" class="contact-card text-danger text-decoration-none">
            <i class="bi bi-youtube fs-1 mb-2"></i>
            <div>YouTube</div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-black pt-3 pb-3 border-top" style="background-color:rgb(219, 233, 255); box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);">
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


  <!-- Vendor JS -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS -->
  <script src="assets/js/main.js"></script>

  <!-- Initialize AOS -->
  <script>
    AOS.init({
      once: true,
      duration: 1000,
    });
  </script>

</body>

</html>