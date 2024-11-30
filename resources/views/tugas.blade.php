<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS RENATA BOOSTRAP</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/sass/app.scss')
</head>
<body>
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span style="color: var(--pink-primary);">♥</span> ★
                <span style="color: var(--blue-primary);">♦</span> 
                
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <div class="gradient-header">
        <div class="container">
            <h1 class="display-4 fw-bold">PINK AND BLUE</h1>
            <p class="lead mb-4">I like the color combination</p>
            <a href="#" class="btn btn-pink-blue btn-lg">Pelajari Lebih Lanjut</a>
        </div>
    </div>

    <!-- Divider -->
    <div class="section-divider"></div>

    <!-- Main -->
    <div class="container mt-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card card-custom h-100">
                    <div class="card-body text-center">
                        <div class="mb-3" style="color: var(--pink-primary); font-size: 3rem;">
                            ♥
                        </div>
                        <h3 class="card-title" style="color: var(--pink-primary);">Pink</h3>
                        <p class="card-text">Kelembutan, kebahagian,kehangatan dan keindahan warna pink yang membawa sifat postif untuk perempuan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom h-100">
                    <div class="card-body text-center">
                        <div class="mb-3" style="color: var(--blue-primary); font-size: 3rem;">
                            ♦
                        </div>
                        <h3 class="card-title" style="color: var(--blue-primary);">Biru</h3>
                        <p class="card-text">Ketenangan, keberanian. kepercayaan dan kebebasan yang biasa dikaikat dengan Langit dan Air</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom h-100">
                    <div class="card-body text-center">
                        <div class="mb-3" style="color: var(--pink-light); font-size: 3rem;">
                            ★
                        </div>
                        <h3 class="card-title" style="color: var(--blue-light);">Harmoni Warna</h3>
                        <p class="card-text">Perpaduan sempurna antara pink dan biru.</p>
                        <a href="#" class="btn btn-pink-blue mt-3">Jelajahi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-pink py-3 text-center mt-5">
        <small>@rena</small>
    </footer>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>