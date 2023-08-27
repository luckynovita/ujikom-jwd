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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="../../assets/css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet" />

  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="../../assets/img/logo.png" alt="" width="50" height="50"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-4">
              <li class="nav-item">
                <a class="nav-link btn btn-dark text-white active" aria-current="page" href="index.php">Pilihan Beasiswa</a>
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
    <section id="section_2" class="d-flex justify-content-center align-items-center">
      <div class="container text-center">
        <div class="row">
          <h2>Pilihan Beasiswa Yang Tersedia</h2>
          <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="../../assets/img/image3.svg" class="img-fluid" alt="..." style="object-fit: contain; width: 250px;height: 250px">
                <div class="card-body">
                  <h5 class="card-title">Beasiswa Prestasi Akademik</h5>
                  <p class="card-text">Beasiswa untuk mahasiswa dengan IPK tinggi.</p>
                  <ul>
                    <li>Syarat: IPK Minimal 3,4. Transkrip nilai dan rekomendasi dari dosen.</li>
                  </ul>
                </div>
                <div>
                    <form action="daftar.php" method="post">
                        <button type="submit" class="btn btn-primary" value="akademik" name="beasiswa">Daftar</button>
                    </form>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
            <img src="../../assets/img/image2.svg" class="img-fluid" alt="..." style="object-fit: contain; width: 225px;height: 225px">
                <div class="card-body">
                  <h5 class="card-title">Beasiswa Riset dan Inovasi</h5>
                  <p class="card-text">Beasiswa untuk mahasiswa yang tertarik dengan riset dan pengembangan inovasi.</p>
                  <ul>
                    <li>Syarat: Proposal penelitian, rekomendasi dari dosen pembimbing.</li>
                  </ul>
                </div>
                <div>
                <form action="daftar.php" method="post">
                        <button type="submit" class="btn btn-primary" value="riset" name="beasiswa">Daftar</button>
                    </form>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
            <img src="../../assets/img/image1.svg" class="img-fluid" alt="..." style="object-fit: contain; width: 250px;height: 200px">
                <div class="card-body">
                  <h5 class="card-title">Beasiswa Merit Sosial</h5>
                  <p class="card-text">Beasiswa untuk mahasiswa dari latar belakang kurang mampu secara finansial.</p>
                  <ul>
                    <li>Syarat: Surat keterangan ekonomi, rekomendasi dari lembaga yang bersangkutan.</li>
                  </ul>
                </div>
                <div>
                <form action="daftar.php" method="post">
                        <button type="submit" class="btn btn-primary" value="sosial" name="beasiswa">Daftar</button>
                    </form>
                </div>
            </div>
          </div>
          
        </div>
      </div>

      
    </section>
    <!-- footer -->

    <footer class="text-white text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center mt-5 p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2023 Copyright:
          <a class="text-white" href="index.php">kampusakuaja.ac.id</a>
        </div>
        <!-- Copyright -->
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>