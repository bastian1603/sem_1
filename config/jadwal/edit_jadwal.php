<?php 

include '../koneksi.php';
include '../session.php';

if($_SERVER['REQUEST_METHOD'] === "POST") {
    $judul = $_POST['judul'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_berakhir = $_POST['tanggal_berakhir'];
    $waktu_pengingat = $_POST['waktu_pengingat'];
    $id_user = $_SESSION['id_user'];

    $data_jadwal = $_POST['list_hari'];
    $list_hari = [0, 0, 0, 0, 0, 0, 0];
    $i = 0;
    
    foreach($data_jadwal as $hari) {
        $list_hari[$i] = isset($hari);
        $i++;
    }

    $execute = "UPDATE jadwal(judul_jadwal, tanggal_mulai, ) WHERE id_jadwal = "

}

?>