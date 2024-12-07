<?php 

    include "../koneksi.php";

    $judul_tugas = $_POST["judul_tugas"] ;
    $isi_tugas = $_POST["isi_tugas"];

    $tanggal_pengingat = $_POST["tanggal_pengingat"];
    $jam_pengingat = $_POST["waktu_pengingat"];
    $id_tugas = $_POST["id_tugas"];

    // $id_pengguna = $_SESSION['id_pengguna']; -> diambil dari session user

    $execute = mysqli_query($conn, "UPDATE tugas(judul_tugas, isi_tugas, tanggal_pengingat, waktu_pengingat) 
    VALUES ('$judul_tugas', '$isi_tugas', '$tanggal_pengingat', '$jam_pengingat' WHERE id_tugas = '$id_tugas')");

    if($execute){
        echo "<script>alert('tugas berhasil di input');</script>";
        header("Location: ../../dashboard/");
    }else{
        echo "<script>alert('tugas gagal di input');</script>";
        header("Location: ../../dashboard/");
    }

?>