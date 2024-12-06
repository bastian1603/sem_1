<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "akademik";

    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn){
        echo "Tidak berhasil terkoneksi" . die(mysqli_error($conn));
    }

?>