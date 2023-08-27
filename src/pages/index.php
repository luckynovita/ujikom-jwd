<?php
// menyertakan file function.php ke dalam skrip php saat dieksekusi
require 'functions.php';

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beasiswa</title>
  <!-- my style -->
  <link rel="stylesheet" href="../../assets/css/index.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- font google -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet" />

</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="../../assets/img/logo.png" alt="" width="50" height="50"></a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-4">
          <li class="nav-item">
            <a class="nav-link btn text-white" aria-current="page" href="pilihanBeasiswa.php">Pilihan Beasiswa</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="btn text-white" aria-current="page" href="daftar.php">Daftar</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="btn text-white" aria-current="page" href="hasil.php">Hasil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- content -->
  <!-- section awal -->
  <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12 mb-5 pb-5 pb-lg-0 mb-lg-0">
          <h5 class="text-secondary">MILESTONE</h5>
          <h2>Beasiswa Juara
            <br>
            Tahun 2023 telah dibuka
          </h2>
          <p>Selamat Datang, Para Calon Penerima Beasiswa!
          </p>
          <p>
            Kami sangat gembira untuk mengumumkan bahwa pintu peluang pendidikan sedang terbuka lebar untuk Anda. Program beasiswa kami telah dibuka, memberikan Anda kesempatan luar biasa untuk meraih impian akademik Anda tanpa batasan finansial. Sekaranglah saat yang tepat untuk melangkah maju. Jangan ragu untuk menjelajahi detail setiap beasiswa yang kami tawarkan, memeriksa persyaratan, dan mulai merencanakan langkah Anda menuju pendidikan yang sukses.
          </p>
        </div>
        <div class="hero-image-wrap col-lg-6 col-12 mt-3 mt-lg-0">
          <img src="../../assets/img/beasiswa.png" class="hero-image img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>

  <!-- footer -->

  <footer class="text-white text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">BPI Juara</h5>
          <p>
            Salah satu semangat yang terus kami usung dalam Merdeka Belajar adalah memberikan hak untuk mendapatkan pendidikan berkualitas kepada seluruh masyarakat Indonesia melalui berbagai dukungan pendanaan pendidikan, salah satunya melalui Beasiswa Pendidikan Indonesia (BPI) Juara yang telah diselenggarakan sejak tahun 2021.
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Alamat Organisasi</h5>
          <ul class="list-unstyled mb-0">
            <li>
              Gedung Selatan B Lantai 13 Jl. Jenderal Sudirman Senayan Jakarta Pusat 10270
            </li>
            <br>
            <li>
              <i class="bi bi-telephone"> Call Center : 081111111111</i>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <div class="card" style="width: 15rem;">
            <div class="card-body">
              <h4 class="card-title">TAUTAN TERKAIT</h4>
              <a href="https://www.kemdikbud.go.id/">kemendikbud</a>
              <br>
              <a href="https://bnsp.go.id/lsp.php">bnsp</a>
            </div>
          </div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-white" href="index.php">kampusakuaja.ac.id</a>
    </div>
    <!-- Copyright -->
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>