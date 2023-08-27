<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ujikom";

//  mengkoneksi database
$db_connection = mysqli_connect($servername, $username, $password, $dbname);
if ($db_connection->connect_error) {
    die("connection failed: " . $db_connection->connect_error);
}

// fungsi menyimpan data donasi
function save($data){
    global $db_connection;

    // mengambil nilai array dari dengan keyword
    $nama = $data["nama"];
    $email = $data["email"];
    $nohp = $data["nohp"];
    $semester =$data["semester"];
    $IPK =$data["IPK"];
    $beasiswa =$data["beasiswa"];

    // mengupload file
    $file = upload();
    if (!$file) {
        $status = null;
    }

    // membangun kueri SQL yang akan menginsert kedalam tabel donasi pada database
    $sql = "INSERT INTO beasiswa (id, nama, email, nohp, semester, ipk, jenis_beasiswa, berkas, status_pengajuan) VALUES ('', '$nama', '$email', '$nohp', '$semester', '$IPK', '$beasiswa', '$file', 0)";

    // mengakses database mysql dengan php
    mysqli_query($db_connection, $sql);
    $status = mysqli_affected_rows($db_connection);
    if ($status > 0) {
        $data = mysqli_query($db_connection, "SELECT * FROM beasiswa ORDER BY id DESC");
        $item = mysqli_fetch_assoc($data);
        echo "<script>alert('Data berhasil disimpan!'); window.location.href='detail-pendaftar.php?id=" . $item['id'] . "';</script>";
    } else {
        echo "<script>alert('Data gagal disimpan!'); window.location.href='daftar.php';</script>";
    }
    
}

// fungsi untuk upload file
function upload(){
    $namaFile = $_FILES['file']["name"];
    $ukuranFile = $_FILES['file']["size"];
    $error = $_FILES['file']["error"];
    $tmpName = $_FILES['file']["tmp_name"];

    $formatFile = explode(".", $namaFile);
    $formatFile = strtolower(end($formatFile));

    $encNamaFile = uniqid() . '.' . $formatFile;
    move_uploaded_file($tmpName, '../../files/' . $encNamaFile);
    return $encNamaFile;
}

?>