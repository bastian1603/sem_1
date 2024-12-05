<?php 

    include 'koneksi.php';

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $angkatan = $_POST['angakatan'];

    $result = mysqli_query($conn, "UPDATE mahasiswa nama='$nama', 
    jurusan='$jurusan',
    angkatan='$angkatan' WHERE nim = '$nim'");

    header("Location: mahasiswa.php");


?>