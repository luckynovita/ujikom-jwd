<?php
// menyertakan file function.php ke dalam skrip php saat dieksekusi
require 'functions.php';

// Instruksi Kerja 5.1:    Program Menulis Data ke File menggunakan PHP

// $data = "Ini adalah contoh data yang akan ditulis ke dalam file.";

// $namaFile = "data.txt";
// $handle = fopen($namaFile, "w");
// fwrite($handle, $data);
// fclose($handle);

// echo "Data telah berhasil ditulis ke dalam file.";

// Instruksi Kerja 5.2: Program Membaca Data dari File menggunakan PHP

// $namaFile = "data.txt";
// $handle = fopen($namaFile, "r");
// $data = fread($handle, filesize($namaFile));
// fclose($handle);

// echo "Data yang dibaca dari file:<br>";
// echo $data;

$beasiswa = mysqli_query($db_connection, "SELECT * FROM beasiswa ORDER BY id DESC");
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
  <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.6/datatables.min.css" rel="stylesheet">
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
            <a class="btn btn-dark text-white active" aria-current="page" href="hasil.php">Hasil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- content -->
  <!-- section awal -->
  <section id="section_2" class="d-flex justify-content-center align-items-center">
    <div class="container text-center">
      <table id="beasiswa" class="table table-responsive" style="width:100%">
        <thead>
          <!-- elemen yang diguanakan untuk membuat tabel -->
          <!-- tabel row -->
          <tr>
            <!-- tabel header -->
            <th>No. </th>
            <th>Nama</th>
            <th>E-mail</th>
            <th>No.Hp</th>
            <th>Semester</th>
            <th>Beasiswa</th>
            <th>Tindakan</th>
          </tr>
        </thead>
        <tbody>
          <!-- funsgi perulangan untuk mengambil satu baris data di tabel relawan -->
          <?php $i = 1;
          while ($data = mysqli_fetch_assoc($beasiswa)) : ?>
            <tr>
              <!-- proses data dari setiap baris hasil kueri -->
              <td><?= $i++ ?></td>
              <td><?= $data['nama'] ?></td>
              <td><?= $data['email'] ?></td>
              <td><?= $data['nohp'] ?></td>
              <td><?= $data['semester'] ?></td>
              <td><?= $data['jenis_beasiswa'] ?></td>
              <td>
              <a class="btn btn-primary btn-sm" href="detail-pendaftar.php?id=<?= $data['id'] ?>">Lihat Detail</a>
              </td>
            </tr>
          <?php endwhile ?>
        </tbody>
        <tfoot>
          <tr>
            <!-- tabel header -->
            <th>No. </th>
            <th>Nama</th>
            <th>E-mail</th>
            <th>No.Hp</th>
            <th>Semester</th>
            <th>Beasiswa</th>
            <th>Tindakan</th>
          </tr>
        </tfoot>
      </table>
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

  <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.6/datatables.min.js"></script>
  <script src="../../assets/js/code.jquery.com_jquery-3.7.0.js"></script>
  <script>
    $(function() {
      $('#beasiswa').DataTable({
        dom: 'Bf' + "l" + 'rtip',
      });
    });
  </script>
</body>

</html>