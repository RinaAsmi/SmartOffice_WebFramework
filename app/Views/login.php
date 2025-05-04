<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | DigiSphere</title>
    <meta name="description" content="Login ke DigiSphere - Dunia teknologi digital dan wawasan pribadi">

    <!-- Favicon -->
    <link rel="icon" href="/assets/img/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="/assets/css/main.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to right, #e0eafc, #cfdef3);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .login-card {
            background: #fff;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-card h1 {
            font-weight: 700;
            margin-bottom: 1rem;
            font-size: 2rem;
        }

        .btn-primary {
            background-color: #0d6efd;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
        }
    </style>
</head>

<body>

    <div class="login-card" data-aos="fade-up">
        <div class="text-center mb-4">
            <img src="/assets/img/logo.png" alt="DigiSphere Logo" style="height: 50px;">
            <h1>Login</h1>
            <p class="text-muted">Masuk ke akun SmartOffice Anda</p>
        </div>

        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger text-center">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form method="post" action="/login/auth">
            <div class="mb-3">
                <label for="identifier" class="form-label">Username atau Email</label>
                <input type="text" class="form-control" id="identifier" name="username" placeholder="Masukkan username atau email" required>
            </div>
            <div class="form-group mb-3 position-relative">
                <label for="password">Password</label>
                <div class="position-relative">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                    <button type="button" id="togglePassword" class="btn position-absolute p-0" style="top: 50%; right: 15px; transform: translateY(-50%); background: transparent; border: none;">
                        <i class="bi bi-eye-slash" id="toggleIcon" style="font-size: 1.2rem;"></i>
                    </button>
                </div>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>

    <!-- Vendor JS -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>

    <!-- Init AOS -->
    <script>
        AOS.init();
    </script>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        const toggleIcon = document.querySelector('#toggleIcon');

        togglePassword.addEventListener('click', function() {
            // Toggle type input
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // Toggle icon
            if (type === 'text') {
                toggleIcon.classList.remove('bi-eye-slash');
                toggleIcon.classList.add('bi-eye');
            } else {
                toggleIcon.classList.remove('bi-eye');
                toggleIcon.classList.add('bi-eye-slash');
            }
        });
    </script>

</body>

</html>