<?php 
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "lifetivity";

    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn) {
        echo "Gagal terkoneksi : " . die(mysqli_error($conn));
    }

?>