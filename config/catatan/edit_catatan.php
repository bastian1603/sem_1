<?php 

    include "../koneksi.php";

    $id_catatan = $_POST['id_catatan'];
    $judul_catatan = $_POST['judul_catatan'];
    $isi_catatan = $_POST['isi_catatan'];

    $execute = mysqli_query($conn, "UPDATE catatan SET 
    judul_catatan = '$judul_catatan', isi_catatan = '$isi_catatan' WHERE id_catatan = '$id_catatan'");

    if($execute) {
        echo "<script>
                    alert('Data Berhasil Diubah');
                    window.location.href = '../../dashboard.php';
            </script>";
    }else{
        echo "<script>
                    alert('Data Berhasil Disimpan');
                    window.location.href = '../../dashboard';
            </script>";
    }

?>