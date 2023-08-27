<?php
// menyertakan file function.php ke dalam skrip php saat dieksekusi
require 'functions.php';

// Instruksi Kerja 5.1: Program Menulis Data ke File menggunakan PHP

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
$ID = $_GET['id'];
$data = mysqli_query($db_connection, "SELECT * FROM beasiswa WHERE id LIKE '$ID'");
$item = mysqli_fetch_assoc($data);
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../../assets/css/index.css">

    <style>
    @media print {
      @page {
        margin-top: 0;
        margin-bottom: 0;
      }

      body {
        -webkit-print-color-adjust: exact;
      }

      #print {
        display: none !important;
      }
    }
  </style>
  </head>
  <body>
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
                    <label class="col-sm-4 col-form-label">Nama </label>
                    <div class="col-sm-8">
                      <!-- meminta pengguna memasukkan nama -->
                      <input type="text" class="form-control" id="nama" name="nama" value="<?= $item['nama'] ?>" readonly>
                    </div>
                  </div>
                  <div class="p-3 row">
                    <label for="email" class="col-sm-4 col-form-label">E-mail </label>
                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="email" name="email" value="<?= $item['email'] ?>" readonly>
                    </div>
                  </div>
                  <div class="p-3 row">
                    <label class="col-sm-4 col-form-label">Nomor Hp </label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" id="nohp" name="nohp" value="<?= $item['nohp'] ?>" readonly>
                    </div>
                  </div>
                  <div class="p-3 row">
                    <label class="col-sm-4 col-form-label">Semester Saat Ini </label>
                    <div class="col-sm-8">
                        <select class="form-select" name="semester" readonly>
                            <option disabled>-- Pilih Semester --</option>
                            <option value="<?= $item['semester'] ?>" selected><?= $item['semester'] ?></option>
                    </select>
                    </div>
                  </div>
                  <div class="p-3 row">
                    <label class="col-sm-4 col-form-label">IPK Terakhir </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="IPK" name="IPK" value="<?= $item['ipk'] ?>" readonly>
                    </div>
                  </div>
                  <div class="p-3 row">
                    <label class="col-sm-4 col-form-label">Pilihan Beasiswa </label>
                    <div class="col-sm-8">
                    <select class="form-select" id="beasiswa" name="beasiswa" readonly>
                        <option disabled>-- Pilih Beasiswa --</option>
                        <option value="<?= $item['jenis_beasiswa'] ?>" selected><?= $item['jenis_beasiswa'] ?></option>
                    </select>
                    </div>
                  </div>
                  <div class="p-3 row">
                    <label for="file" class="col-sm-4 col-form-label">Upload Berkas</label>
                    <div class="col-sm-8">
                    <a href="../../files/<?= $item['berkas'] ?>"><?= $item['berkas'] ?></a>
                    </div>
                  </div>
                  <div class="p-3 row">
                    <label class="col-sm-4 col-form-label">Status Ajuan </label>
                    <div class="col-sm-8">
                    <button class="btn btn-warning btn-sm" >Belum di verifikasi</button>
                    </div>
                  </div>
                  <div class="mt-4 pb-3">
                    <a href="hasil.php" type="button" class="btn btn-info"><i class="bi bi-skip-backward-fill"></i> Kembali</a>
                    <button class="btn btn-danger" onClick="window.print()" id="print">Cetak PDF</button>
                  </div>
                </form>
            </div>
            <br>
            </center>
          </div>         
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>