<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        echo "<script>alert('Silahkan login terlebih dahulue');
        window.location = '../login/'</script>";
    }
?>