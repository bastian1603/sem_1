<?php 

include '../koneksi.php';
include '../session.php';

if($_SERVER['REQUEST_METHOD'] === "POST") {
    $judul_jadwal = $_POST['judul_jadwal'];
    $id_jadwal = $_POST['id_jadwal'];
    $isi_jadwal = $_POST['isi_jadwal'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_selesai = $_POST['tanggal_selesai'];
    $waktu_pengingat = $_POST['waktu_pengingat'];

    $data_jadwal = $_POST['list_hari'];
    $list_hari = [0, 0, 0, 0, 0, 0, 0];
    $i = 0;
    
    foreach($data_jadwal as $hari) {
        $list_hari[$i] = isset($hari);
        $i++;
    }

    $execute = mysqli_query($conn, "UPDATE jadwal SET judul_jadwal = '$judul_jadwal', tanggal_mulai = '$tanggal_mulai', tanggal_selesai = $tanggal_selesai, waktu_pengingat = '$waktu_pengingat', 
    senin = '$list_hari[0]', selasa = '$list_hari[1]', rabu = '$list_hari[2]', kamis = '$list_hari[3]', jumat = '$list_hari[4]', sabtu = '$list_hari[5]', minggu = '$list_hari[6]' WHERE id_jadwal = '$id_jadwal' ");

    if($execute){
        echo "<script>alert('tugas berhasil di edit');
        </script>";
    }else{
        echo "<script>alert('tugas gagal di edit');

        </script>";
    }
}
?>