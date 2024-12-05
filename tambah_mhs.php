<?php

include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$angkatan = $_POST['angkatan'];

$input = mysqli_query($conn, "INSERT INTO mahasiswa (nim, nama, jurusan, angkatan) VALUES ('$nim', '$nama', '$jurusan', '$angkatan')");



?>