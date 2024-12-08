<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul_jadwal = $_POST['judul_jadwal'];
    $isi_jadwal = $_POST['isi_jadwal'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_berakhir = $_POST['tanggal_berakhir'];
    // $id_user = $_SESSION['id'];
    
    $list_hari = $_POST['list_hari'];

    $i = 0;
    foreach ($list_hari as $hari) {
        $list_hari[$i] = isset($hari) ? true : false;
        $i++;
    } 

    $execute = "INSERT INTO jadwal
    (judul_jadwal, isi_jadwal, tanggal_mulai, tanggal_berakhir, senin, selasa, rabu, kamis, jumat, sabtu, minggu) VALUES 
    ('$judul_jadwal', '$isi_jadwal', '$tanggal_mulai', '$tanggal_berakhir', '$list_hari[0]', '$list_hari[1]', '$list_hari[2]', '$list_hari[3]', '$list_hari[4]', '$list_hari[5]', '$list_hari[6]')";

    if($execute) {
        echo "<script>alert('Jadwal berhasil dibuat');
        window.location = '../../dashboard;</script>";
    }else {
        echo "<script>alert('Jadwal berhasil dibuat');
        window.location = '../../dashboard;</script>";
    }

}

?>