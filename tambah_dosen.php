<?php 

    include "koneksi.php";

    $nama = $_POST["nama_dosen"];
    $nidn = $_POST["nidn"];
    $alamat = $_POST["alamat"];
    $jabatan = $_POST["jabatan"];

    mysqli_query($conn, "INSERT INTO dosen(nama, nidn, alamat, jabatan) VALUES ('$nama', '$nidn', '$alamat', '$jabatan')");

?>