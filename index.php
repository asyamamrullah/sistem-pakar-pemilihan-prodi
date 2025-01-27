<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Website Sistem Pakar Pemilihan Program Studi">
    <meta name="author" content="Asyam Amrullah AR">
    <link rel="icon" href="image/icon.png">

    <title>Sistem Pakar</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Custom styles -->
    <style>
    body {
        font-family: Arial, sans-serif;
        color: #333;
        margin: 0;
        padding: 0;
    }

    .navbar {
        background-color: #0056b3;
    }

    .navbar-brand img {
        max-height: 50px;
    }

    .navbar-dark .navbar-nav .nav-link {
        color: #fff;
        transition: color 0.3s ease;
    }

    .navbar-dark .navbar-nav .nav-link:hover {
        color: #ffcc00;
    }

    .btn-login {
        background-color: #ffc107;
        color: #000;
        font-weight: bold;
    }

    .btn-login:hover {
        background-color: #ffcc00;
    }

    .carousel-inner img {
        height: 450px;
        object-fit: cover;
    }

    .carousel-caption {
        background: rgba(0, 0, 0, 0.6);
        padding: 20px;
        border-radius: 10px;
    }

    .features-section {
        background-color: #e3f2fd;
        padding: 60px 0;
    }

    .feature-item {
        margin-bottom: 30px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .feature-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .feature-icon {
        font-size: 50px;
        color: #0056b3;
    }

    .developer-section {
        background-color: #f8f9fa;
        padding: 60px 0;
    }

    .developer-card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .developer-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .developer-card img {
        border-radius: 50%;
        width: 120px;
        height: 120px;
        margin: auto;
    }

    footer {
        background-color: #0056b3;
        color: #fff;
        padding: 20px 0;
        text-align: center;
    }

    .modal-header {
        background-color: #0056b3;
        color: #fff;
    }

    .modal-header .close {
        color: #fff;
        opacity: 1;
    }

    .modal-content {
        border: 2px solid #0056b3;
        border-radius: 10px;
        overflow: hidden;
    }

    .modal-body {
        background-color: #e3f2fd;
    }

    .modal-footer {
        background-color: #e3f2fd;
        border-top: 1px solid #b3e5fc;
    }

    .btn-info {
        background-color: #007bff;
        border-color: #0056b3;
        color: #fff;
    }

    .btn-info:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .form-control {
        border: 1px solid #0056b3;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px #007bff;
    }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="#">
            <img src="image/logoft.png" alt="Logo"> Sistem Pakar Pemilihan Prodi
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#home">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#team">Tim</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                <li class="nav-item">
                    <a href="loginpakar.php">
                        <button class="btn btn-login ml-3">Login</button>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="image/bg-1.gif" alt="Slide 1">
                <div class="carousel-caption">
                    <h1>Selamat Datang di Sistem Pakar</h1>
                    <p>Solusi pakar untuk pemilihan program studi di kampus Anda.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="image/bg-2.jpg" alt="Slide 2">
                <div class="carousel-caption">
                    <h1>Bimbingan Tepat Sasaran</h1>
                    <p>Temukan program studi yang sesuai dengan minat dan potensi Anda.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="image/bg-3.jpeg" alt="Slide 3">
                <div class="carousel-caption">
                    <h1>Memaksimalkan Potensi</h1>
                    <p>Kami membantu Anda memilih jalur pendidikan yang terbaik.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Section Tombol Mulai -->
    <section class="start-section py-5 bg-light">
        <div class="container text-center">
            <h4 class="font-weight-bold">Mulai Pemilihan Program Studi</h4>
            <p class="mb-4">
                Temukan program studi terbaik yang sesuai dengan minat dan potensi Anda dengan sistem pakar ini.
                Klik tombol di bawah untuk memulai proses.
            </p>
            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#startModal">
                Mulai Sekarang
            </button>
        </div>
    </section>

    <!-- Modal with Blue Palette -->
    <div class="modal fade" id="startModal" tabindex="-1" role="dialog" aria-labelledby="startModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="startModalLabel">Mulai Proses Pemilihan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="simpan-session.php" method="post" enctype="multipart/form-data" role="form">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nama:</label>
                            <input type="text" name="nama" class="form-control" id="input-name"
                                placeholder="Isikan nama Anda" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Umur:</label>
                            <input type="number" name="umur" class="form-control col-sm-8"
                                placeholder="Isikan umur Anda" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info">Lanjut</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <section class="features-section" id="about">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="font-weight-bold">Tentang Sistem Pakar</h2>
                <p>Sistem Pakar ini dirancang untuk membantu calon mahasiswa dalam memilih program studi yang sesuai di
                    perguruan tinggi.</p>
            </div>
            <div class="row">
                <div class="col-md-4 text-center feature-item">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-search"></i>
                    </div>
                    <h4>Rekomendasi Tepat</h4>
                    <p>Berikan rekomendasi berdasarkan potensi akademik dan minat pengguna.</p>
                </div>
                <div class="col-md-4 text-center feature-item">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h4>Bimbingan Karier</h4>
                    <p>Membantu Anda memilih program studi untuk mencapai kesuksesan karier.</p>
                </div>
                <div class="col-md-4 text-center feature-item">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h4>Metode Pakar</h4>
                    <p>Menggunakan pendekatan berbasis pengetahuan dan teknologi terkini.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Developer Section -->
    <section class="developer-section" id="team">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="font-weight-bold">Pengembang</h2>
                <p>Sistem ini dikembangkan oleh individu yang berdedikasi dan profesional.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 text-center">
                    <div class="card developer-card"><br>
                        <img src="image/profil.jpg" alt="Developer">
                        <div class="card-body">
                            <h5>Asyam Amrullah AR, S.Inf</h5>
                            <p>Pengembang Sistem Pakar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; FT UGP - Sistem Pakar Pemilihan Prodi - Asyam Amrullah AR.</p>
    </footer>

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
</body>

</html>