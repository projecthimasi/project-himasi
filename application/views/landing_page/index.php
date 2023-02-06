<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
</head>

<style>
    #beranda {
        background-image: url('assets/image/banner.jpg');
        background-size: cover;
        background-attachment: fixed;
    }

    nav {
        background-color: midnightblue;
    }

    footer  {
        background-color: midnightblue;
    }

    .nav-link {
        position: relative;
    }

    .nav-link::after {
        content: '';
        opacity: 0;
        transition: all 0.2s;
        height: 2px;
        width: 100%;
        background-color: white;
        position: absolute;
        bottom: 0;
        left: 0;
    }

    .nav-link:hover::after {
        opacity: 1;
    }

    .btn {
        border: none;
        background: midnightblue;
        padding: 5px 15px;
        transition: .2s;
    }

    .btn:hover {
        transform: scale(1.1);
        cursor: pointer;
        background: midnightblue;
    }

    .card-header {
        background-color: midnightblue;
    }
</style>

<body>
    <section id="beranda">
        <nav class="navbar fixed-top navbar-expand-lg border-bottom">
            <div class="container-fluid">
                <a class="navbar-brand pb-2" href="#">
                    <img src="assets/image/logo.png" alt="Bootstrap" width="60" height="60">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="mx-auto"></div>
                    <ul class="navbar-nav me-3 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active fw-semibold text-white" href="#beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold text-white" href="<?= base_url('seminar/'); ?>">Seminar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold text-white" href="#tentangkami">Tentang Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <div class="container-fluid">
            <br>
            <div class="p-5 mt-5 text-center text-white">
                <h1>SELAMAT DATANG DI WEBSITE HIMASI</h1>
                <p>- HIMPUNAN MAHASISWA SISTEM INFORMASI UBSI -</p>
                <img src="assets/image/logo.png" class="img-fluid" alt="" width="300" height="300">
            </div>
            <br>
        </div>
    </section>
    <section id="seminar">
        <div class="container">
            <div class="p-5 mt-5 text-center">
                <h1 class="border-bottom">Daftar Seminar</h1>
            </div>
            <div class="card text-center">
                <div class="card-header fw-semibold text-white">
                    Seminar 1
                </div>
                <div class="card-body">
                    <h6 class="p-2">JADWAL</h6>
                    <p><i class="far fa-clock"> : 09:00 AM</i></p>
                    <p><i class="far fa-calendar-alt"> : 09-03-2023</i></p>
                    <div class="border-bottom"></div>
                    <br>
                    <h6 class="p-2">DESKRIPSI</h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="border-bottom"></div>
                    <br>
                    <h6>PEMBICARA</h6>
                    <p class="card-text">Agus</p>
                    <h6>MODERATOR</h6>
                    <p class="card-text">Bayu</p>
                    <div class="border-bottom"></div>
                    <br>
                    <h6>BIAYA</h6>
                    <p class="card-text">Rp. 50.000,00</p>
                    <a href="#" class="btn text-white">Daftar</a>
                </div>
                <br>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
            </div>
            <br>
            <div class="card text-center">
                <div class="card-header fw-semibold text-white">
                    Seminar 2
                </div>
                <div class="card-body">
                    <h6 class="p-2">JADWAL</h6>
                    <p><i class="far fa-clock"> : 13:00 AM</i></p>
                    <p><i class="far fa-calendar-alt"> : 14-03-2023</i></p>
                    <div class="border-bottom"></div>
                    <br>
                    <h6 class="p-2">DESKRIPSI</h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="border-bottom"></div>
                    <br>
                    <h6>PEMBICARA</h6>
                    <p class="card-text">Anton</p>
                    <h6>MODERATOR</h6>
                    <p class="card-text">Lia</p>
                    <div class="border-bottom"></div>
                    <br>
                    <h6>BIAYA</h6>
                    <p class="card-text">Rp. 50.000,00</p>
                    <a href="#" class="btn text-white">Daftar</a>
                </div>
                <br>
                <div class="card-footer text-muted">
                    4 days ago
                </div>
            </div>
        </div>
    </section>
    <section id="tentangkami">

    </section>
    <div class="border-top">
        <footer class="footer py-3">
            <div class="container">
                <div class="copyright text-center text-white my-auto">
                    <span>Copyright &copy; HIMASI UBSI <?= date('Y'); ?></span>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>