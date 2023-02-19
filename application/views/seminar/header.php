<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title><?= $title; ?></title>


   <!-- fontawesome -->
   <script src="https://kit.fontawesome.com/b20261a34a.js" crossorigin="anonymous"></script>

   <link rel="stylesheet" href="<?= base_url(); ?>assets/css/mycss/style.css">
   <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">

</head>

<body>
   <nav class="navbar navbar-expand-lg fixed-top shadow">
      <div class="container">
         <a class="navbar-brand" href="#">
            <img src="<?= base_url(); ?>assets/img/logo.png" width="50px" alt="">
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
               <a class="nav-link active" aria-current="page" href="#">Home</a>
               <a class="nav-link active" href="#">About</a>
               <a class="nav-link active" href="#">Activity</a>
               <a class="nav-link active" href="#">Gallery</a>
               <a class="nav-link active" href="#">Seminar & Workshop</a>
            </div>
         </div>
      </div>
   </nav>