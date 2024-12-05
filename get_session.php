<?php 

    session_start();

    if(isset($_SESSION['nama'])) {
        echo "Nama: " . $_SESSION['nama'] . "<br>";
        echo "role: " . $_SESSION['role'] . "<br>";
    } else {
        echo "Session belum diset. <a href='set_session.php'>Set Ulang Session</a>";
    }

?>
