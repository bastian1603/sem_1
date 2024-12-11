<?php
include '../session.php';

include "../koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul_jadwal = $_POST['judul_jadwal'];
    $isi_jadwal = $_POST['isi_jadwal'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_berakhir = $_POST['tanggal_berakhir'];
    $id_user = $_SESSION['id_user'];
    
    $data_hari = $_POST['list_hari'];
    $list_hari = [0, 0, 0, 0, 0, 0, 0];

    $i = 0;
    foreach ($data_hari as $hari) {
        $list_hari[$i] = isset($hari) ? 1 : 0;
        $i++;
    } 

    $execute = mysqli_query($conn, "INSERT INTO jadwal
    (judul_jadwal, isi_jadwal, tanggal_mulai, tanggal_selesai, senin, selasa, rabu, kamis, jumat, sabtu, minggu, id_user) VALUES 
    ('$judul_jadwal', '$isi_jadwal', '$tanggal_mulai', '$tanggal_berakhir', '$list_hari[0]', '$list_hari[1]', '$list_hari[2]', '$list_hari[3]', '$list_hari[4]', '$list_hari[5]', '$list_hari[6]', '$id_user')");

    if($execute) {
        echo "<script>alert('Jadwal Berhasil Dibuat');
        window.location = '../../dashboard';
        </script>";
        // header("Location: ../../dashboard");
        // exit();
    }else {
        echo "<script>alert('Jadwal Gagal Dibuat');
        window.location = '../../dashboard';
        </script>";
        // header("Location: ../../dashboard");
        // exit();
    }

}

?>