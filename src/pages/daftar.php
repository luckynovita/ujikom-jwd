<?php
// menyertakan file function.php ke dalam skrip php saat dieksekusi
require 'functions.php';

// Memeriksa apakah data 'beasiswa' telah dikirimkan melalui metode POST.
if (empty($_POST['beasiswa'])) {
  // Jika data 'beasiswa' kosong, menginisialisasi variabel $beasiswa dengan string kosong.
  $beasiswa = '';
} else {
  // Jika data 'beasiswa' tidak kosong, mengisi variabel $beasiswa dengan nilai dari input 'beasiswa'.
  $beasiswa = $_POST['beasiswa'];
}

if (isset($_POST['submit'])) {
  //Pengecekan format email dengan filter validasi email dari php
  if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    save($_POST);
  }
  echo "<script>alert('Format Email Salah!'); window.location.href='daftar.php';</script>";
}

const IPK = '3.4';
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
            <a class="nav-link btn  text-white" aria-current="page" href="pilihanBeasiswa.php">Pilihan Beasiswa</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="btn btn-dark text-white active" aria-current="page" href="daftar.php">Daftar</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="btn  text-white" aria-current="page" href="hasil.php">Hasil</a>
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
        <!-- card inputan data beasiswa -->
        <h2>Daftar Beasiswa</h2>
        <center>
          <div class="card" style="width: 70%;">
            <form action="" method="post" enctype="multipart/form-data">
              <h5 class="text-left mt-2 mb-3">Registrasi Beasiswa</h5>
              <div class="p-3 row">
                <label class="col-sm-4 col-form-label">Masukkan Nama </label>
                <div class="col-sm-8">
                  <!-- meminta pengguna memasukkan nama -->
                  <input type="text" class="form-control" id="nama" name="nama" require>
                </div>
              </div>
              <div class="p-3 row">
                <label for="email" class="col-sm-4 col-form-label">Masukkan E-mail </label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" id="email" name="email">
                </div>
              </div>
              <div class="p-3 row">
                <label class="col-sm-4 col-form-label">Nomor Hp </label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" id="nohp" name="nohp" require>
                </div>
              </div>
              <div class="p-3 row">
                <label class="col-sm-4 col-form-label">Semester Saat Ini </label>
                <div class="col-sm-8">
                  <select class="form-select" name="semester" require>
                    <option selected disabled>-- Pilih Semester --</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                  </select>
                </div>
              </div>
              <div class="p-3 row">
                <label class="col-sm-4 col-form-label">IPK Terakhir </label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="IPK" name="IPK" value="<?= IPK ?>" readonly require>
                </div>
              </div>
              <div class="p-3 row">
                <label class="col-sm-4 col-form-label">Pilihan Beasiswa </label>
                <div class="col-sm-8">
                  <select class="form-select" id="beasiswa" name="beasiswa" require>
                    <option selected disabled>-- Pilih Beasiswa --</option>
                    <?php if ($beasiswa == 'akademik') : ?>
                      <option value="Beasiswa Prestasi Akademik" selected>Beasiswa Prestasi Akademik</option>
                      <option value="Beasiswa Riset dan Inovasi">Beasiswa Riset dan Inovasi</option>
                      <option value="Beasiswa Merit Sosial">Beasiswa Merit Sosial</option>
                    <?php elseif ($beasiswa == 'riset') : ?>
                      <option value="Beasiswa Prestasi Akademik">Beasiswa Prestasi Akademik</option>
                      <option value="Beasiswa Riset dan Inovasi" selected>Beasiswa Riset dan Inovasi</option>
                      <option value="Beasiswa Merit Sosial">Beasiswa Merit Sosial</option>
                    <?php elseif ($beasiswa == 'sosial') : ?>
                      <option value="Beasiswa Prestasi Akademik">Beasiswa Prestasi Akademik</option>
                      <option value="Beasiswa Riset dan Inovasi">Beasiswa Riset dan Inovasi</option>
                      <option value="Beasiswa Merit Sosial" selected>Beasiswa Merit Sosial</option>
                    <?php else : ?>
                      <option value="Beasiswa Prestasi Akademik">Beasiswa Prestasi Akademik</option>
                      <option value="Beasiswa Riset dan Inovasi">Beasiswa Riset dan Inovasi</option>
                      <option value="Beasiswa Merit Sosial">Beasiswa Merit Sosial</option>
                    <?php endif ?>
                  </select>
                </div>
              </div>
              <div class="p-3 row">
                <label for="file" class="col-sm-4 col-form-label">Upload Berkas</label>
                <div class="col-sm-8">
                  <input class="form-control" type="file" id="file" name="file" require>
                </div>
              </div>
              <div class="mt-4 pb-3">
                <button type="submit" class="btn btn-primary" id="submit" name="submit">Daftar</button>
                <button type="button" class="btn btn-danger">Batal</button>
              </div>
            </form>
          </div>
          <br>
        </center>
      </div>
    </div>
    </div>
  </section>
  <!-- footer -->

  <footer class="text-white text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-white" href="index.php">kampusakuaja.ac.id</a>
    </div>
    <!-- Copyright -->
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="../../assets/js/code.jquery.com_jquery-3.7.0.js"></script>
  <script>
    $(function() {
      let IPK = $('#IPK').val();
      if (IPK < 3) {
        $('#beasiswa').attr('disabled', 'disabled');
        $('#file').attr('disabled', 'disabled');
        $('#submit').attr('disabled', 'disabled');
      }

      $('#beasiswa').focus();
    });
  </script>
</body>

</html>