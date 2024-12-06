<?php 
    include 'is_login.php';
    include 'koneksi.php';

    $nim = $_GET['nim'];
    $result = mysqli_query($conn, "DELETE FROM mahasiswa WHERE nim='$nim'");
    
    header("Location: mahasiswa.php");



?>