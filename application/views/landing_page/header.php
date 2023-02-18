<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/landingpage.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<style>

</style>

<body>
    <nav class="navbar fixed-top navbar-expand-lg border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand pb-2" href="#">
                <img src="<?= base_url(); ?>assets/image/logo.png" alt="" width="60" height="60">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="mx-auto"></div>
                <ul class="navbar-nav me-3 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active fw-semibold text-white" href="<?= base_url('landing_page'); ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold text-white" href="<?= base_url('landing_page/seminar'); ?>">Seminar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold text-white" href="#tentangkami">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold text-white" href="#galeri">Galeri</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>