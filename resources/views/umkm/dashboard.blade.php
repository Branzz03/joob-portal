<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard UMKM - Messari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #263341;
        }
        .card-header {
            background-color: #f97316;
            color: white;
            font-weight: bold;
        }
        .btn-orange {
            background-color: #f97316;
            color: white;
            border: none;
        }
        .btn-orange:hover {
            background-color: #fb923c;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Messari UMKM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profil Saya</a>
                    </li>
                    <li class="nav-item">
                        <!-- Form untuk Logout -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link text-danger">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <i class="bi bi-speedometer2"></i> Dashboard UMKM
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Selamat Datang, {{ $profile->nama_pemilik }}!</h4>
                        <p class="card-text">Anda telah login sebagai pemilik dari <strong>{{ $profile->nama_usaha }}</strong>.</p>
                        <p>Dari sini, Anda dapat mengelola informasi usaha Anda, melihat pelamar, dan banyak lagi.</p>
                        <a href="#" class="btn btn-orange">Kelola Profil Usaha</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="bi bi-people-fill fs-1 text-primary"></i>
                        <h5 class="card-title mt-2">Pelamar</h5>
                        <p class="card-text">Lihat dan kelola kandidat yang melamar ke usaha Anda.</p>
                        <a href="#" class="btn btn-primary">Lihat Pelamar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="bi bi-megaphone-fill fs-1 text-success"></i>
                        <h5 class="card-title mt-2">Buat Lowongan</h5>
                        <p class="card-text">Pasang lowongan pekerjaan baru untuk mencari kandidat terbaik.</p>
                        <a href="#" class="btn btn-success">Buat Lowongan Baru</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
