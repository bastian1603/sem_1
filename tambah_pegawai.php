<?php 

    include "koneksi.php";

    $nama = $_POST["nama_pegawai"];
    $nik = $_POST["nik"];
    $bagian = $_POST["bagian"];

    $input = mysqli_query($conn, "INSERT INTO pegawai(nama, nik, bagian) VALUES ('$nama', '$nik', '$bagian')");

?>