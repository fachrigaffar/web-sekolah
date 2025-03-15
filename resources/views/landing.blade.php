<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - Web Sekolah</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        /* Memastikan konten minimal setinggi layar */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Web Sekolah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/login">Login Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <main class="flex-grow-1">
        <header class="text-center py-5 bg-primary text-white">
            <h1>Selamat Datang di Sistem Manajemen Sekolah</h1>
            <p class="lead">Kelola siswa, guru, dan kelas dengan mudah.</p>
        </header>

        <!-- Fitur Utama -->
        <section class="container my-5">
            <h2 class="text-center mb-4">Fitur Utama</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <h4>Manajemen Siswa</h4>
                    <p>Tambah, edit, dan hapus data siswa dengan mudah.</p>
                </div>
                <div class="col-md-4 text-center">
                    <h4>Manajemen Guru</h4>
                    <p>Kelola data guru dan lihat daftar kelas yang diampu.</p>
                </div>
                <div class="col-md-4 text-center">
                    <h4>Manajemen Kelas</h4>
                    <p>Atur kelas dan hubungkan dengan siswa serta guru.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-center text-white py-3 mt-auto">
        &copy; 2025 Web Sekolah. Semua Hak Cipta Dilindungi.
    </footer>
</body>
</html>
