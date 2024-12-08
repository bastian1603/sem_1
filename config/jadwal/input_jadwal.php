<?php 

if ($_SERVER['REQUEEST_METHOD'] === 'POST') {
    $judul_jadwal = $_POST['judul_jadwal'];
    $isi_jadwal = $_POST['isi_jadwal'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_berakhir = $_POST['tanggal_berakhir'];
    $id_user = $_SESSION['id'];
    
    $hari = $_POST['hari'];


}

?>