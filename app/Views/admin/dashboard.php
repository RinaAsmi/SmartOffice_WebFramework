<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Admin | SmartOffice</title>

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
    <div class="container d-flex justify-content-between align-items-center">
      <a href="/admin" class="logo d-flex align-items-center text-decoration-none">
        <img src="/assets/img/logo.png" alt="SmartOffice Logo" style="height: 40px;">
        <h1 class="ms-2 mb-0 fs-4 fw-bold text-dark">SmartOffice</h1>
      </a>

      <a href="/logout" class="btn btn-outline-danger shadow-sm custom-hover-danger shadow-sm px-4 py-2 hover-shadow" style="border-radius: 5px; padding: 8px 16px;">
        Logout
      </a>
    </div>
  </header>


  <main id="main" class="pt-5">
    <section class="dashboard-section py-5">
      <div class="container">
        <h1 class="section-title text-center mb-4 animate__animated animate__fadeInDown" style="font-family: 'Poppins', sans-serif; font-size: 2.5rem; font-weight: 600; color: #1e3a8a; text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);">
          <span style="color: #74b9ff;">Dashboard</span> Materi
        </h1>
        <div class="d-flex justify-content-start mb-3">
          <a href="/admin/create" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Materi Baru
          </a>
        </div>

        <?php if (session()->getFlashdata('pesan')): ?>
          <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
          </div>
        <?php endif ?>

        <div class="table-responsive animate__animated animate__fadeInUp">
          <table class="table table-bordered table-hover align-middle shadow-lg rounded" style="border-collapse: separate; border-spacing: 0 15px;">
            <thead>
              <tr>
                <th class="text-center font-weight-bold text-black py-3">No</th>
                <th class="text-center font-weight-bold text-black py-3">Kategori</th>
                <th class="text-center font-weight-bold text-black py-3">Judul</th>
                <th class="text-center font-weight-bold text-black py-3">Deskripsi</th>
                <th class="text-center font-weight-bold text-black py-3">Gambar</th>
                <th class="text-center font-weight-bold text-black py-3">Tips</th>
                <th class="text-center font-weight-bold text-black py-3">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 + (5 * ($currentPage - 1)); ?>
              <?php $counter = 0;
              // Membalik urutan data agar yang terbaru tampil pertama
              $materi = array_reverse($materi);
              foreach ($materi as $m): ?>
                <tr class="animate__animated animate__fadeIn" style="background-color: #f9f9f9; border-radius: 8px; transition: all 0.3s ease;">
                  <td><?= $i++; ?></td>
                  <td><?= htmlspecialchars($m['kategori']); ?></td>
                  <td><?= htmlspecialchars($m['judul']); ?></td>
                  <td><?= htmlspecialchars($m['deskripsi']); ?></td>
                  <td class="text-center" style="text-align: center;">
                    <?php if (!empty($m['gambar'])) : ?>
                      <img src="/assets/img/<?= $m['gambar']; ?>" alt="Gambar Materi" style="height: 60px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;">
                    <?php else : ?>
                      <span class="badge bg-secondary">Tidak Ada</span>
                    <?php endif; ?>
                  </td>

                  <td><?= htmlspecialchars($m['tips']); ?></td>
                  <td>
                    <a href="admin/detail/<?= $m['slug']; ?>" class="btn btn-outline-primary shadow-sm custom-hover-primary shadow-sm px-4 py-2 hover-shadow bi bi-eye">Detail</a>
                  </td>
                </tr>
              <?php endforeach; ?>

              <?php if (empty($materi)) : ?>
                <tr>
                  <td colspan="7" class="text-center text-muted">Belum ada materi tersedia.</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
          <div class="pagination">
            <?= $pager->links('office', 'office_page') ?>
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