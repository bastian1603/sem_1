<?php 

    include "../koneksi.php";

    $id_tugas = $_POST["id_tugas"];

    $execute = mysqli_query($conn, "DELETE FROM tugas WHERE id = '$id_tugas'")

?>