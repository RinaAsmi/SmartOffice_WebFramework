<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Materi - SmartOffice</title>
    <meta name="description" content="Materi pembelajaran Microsoft Office: Word, Excel, PowerPoint">
    <meta name="keywords" content="Microsoft Office, Materi, Word, Excel, PowerPoint">

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
                <img src="assets/img/logo.png" alt="SmartOffice Logo" style="height: 40px;">
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
    <section class="d-flex align-items-center justify-content-center" style="background: #f8f9fa; height: 40vh; margin-top: 70px;">
        <div class="text-center" data-aos="fade-up">
            <h1>Materi Pembelajaran</h1>
            <p>Belajar Microsoft Office jadi lebih mudah</p>
        </div>
    </section><!-- End Hero -->

    <!-- ======= Materi Section ======= -->
    <section id="materi" class="py-5">
        <div class="container" data-aos="fade-up">
            <div class="row g-4">

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-file-earmark-word-fill text-primary" style="font-size: 4rem;"></i>
                            </div>
                            <h5 class="card-title mb-3">Microsoft Word</h5>
                            <p class="card-text">Belajar membuat dokumen, format surat, laporan, hingga skripsi.</p>
                            <a href="<?= base_url('/materi-detail/Word') ?>" class="btn btn-outline-primary shadow-sm custom-hover-primary mt-2">Lihat Materi</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-file-earmark-excel-fill text-success" style="font-size: 4rem;"></i>
                            </div>
                            <h5 class="card-title mb-3">Microsoft Excel</h5>
                            <p class="card-text">Belajar membuat tabel, rumus, grafik, dan analisis data dengan mudah.</p>
                            <a href="<?= base_url('/materi-detail/Excel') ?>" class="btn btn-outline-success shadow-sm custom-hover-success mt-2">Lihat Materi</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-file-earmark-ppt-fill text-danger" style="font-size: 4rem;"></i>
                            </div>
                            <h5 class="card-title mb-3">Microsoft PowerPoint</h5>
                            <p class="card-text">Belajar membuat presentasi yang menarik dan interaktif.</p>
                            <a href="<?= base_url('/materi-detail/PowerPoint') ?>" class="btn btn-outline-danger shadow-sm custom-hover-danger mt-2">Lihat Materi</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Materi Section -->

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