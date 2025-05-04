<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Pelajari Materi - Microsoft Word | SmartOffice</title>
    <meta name="description" content="Penjelasan lengkap materi Microsoft Word - SmartOffice">
    <meta name="keywords" content="Microsoft Word, Materi, SmartOffice, Belajar Office">

    <!-- Favicons -->
    <link href="/assets/img/favicon.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts & Vendor CSS -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

    <!-- Header -->
    <header id="header" class="header d-flex align-items-center fixed-top shadow-sm" style="background-color: #fff;">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center text-decoration-none">
                <img src="/assets/img/logo.png" alt="Logo SmartOffice" style="height: 40px;">
                <h1 class="ms-2 mb-0 fs-4 fw-bold text-dark">SmartOffice</h1>
            </a>
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
            <a href="/materi" class="btn btn-outline-primary d-none d-lg-inline-block">Kembali ke Materi</a>
        </div>
    </header>

    <!-- Hero -->
    <section class="d-flex align-items-center justify-content-center" style="background-color:#eef1f5; height: 30vh; margin-top: 70px;">
        <div class="text-center" data-aos="fade-up">
            <h1 class="fw-bold">Microsoft <?= $materi['kategori']; ?></h1>
            <p class="lead text-secondary"><?= $materi['judul']; ?></p>
        </div>
    </section>

    <!-- Detail Section -->
    <section class="py-5">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="blog-post-thumb">
                        <img src="/assets/img/<?= $materi['gambar']; ?>" alt="img" class="img-fluid rounded-3 shadow-sm" style="max-width: 100%; height: auto; object-fit: cover;">
                    </div>
                </div>


                <div class="bg-white shadow-sm p-4 rounded-4">
                    <h2 class="mb-4 fw-bold text-center"><?= $materi['subjudul']; ?></h2>
                    <p class="text-secondary"><?= $materi['deskripsi']; ?></p>

                    <div class="alert alert-info d-flex align-items-center" role="alert">
                        <i class="bi bi-lightbulb me-2"></i>
                        <div>
                            <strong>Tips Cepat:</strong> <?= $materi['tips']; ?>
                        </div>
                    </div>

                    <div class="mt-5">
                        <h4 class="fw-semibold mb-3">Ilustrasi Penggunaan</h4>
                        <div class="ratio ratio-16x9 rounded overflow-hidden shadow-sm">
                            <iframe src="https://www.youtube.com/embed/<?= $materi['video_url']; ?>" title="Tutorial Word" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="text-center mt-5">
                        <a href="/materi" class="btn btn-primary px-4 py-2">← Kembali ke Daftar Materi</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-black pt-4 pb-4 border-top" style="background-color: #f0f0f0;">
        <div class="container text-center small">
            <p class="mb-1 fw-semibold">SmartOffice &copy; 2025</p>
            <p class="mb-2">Semua hak dilindungi. Belajar Microsoft Office jadi lebih mudah.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="#" class="text-dark"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-dark"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-dark"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </footer>

    <!-- JS Files -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>