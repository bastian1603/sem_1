<?php 
    include "../koneksi.php";

    $id_catatan = $_POST['idCatatan'];

    $execute = mysqli_query($conn, "DELETE FROM catatan WHERE id_catatan = '$id_catatan'");

    if($execute) {
        echo "<script>
                    alert('Catatan Berhasil Dihapus');
                    window.location.href = '../../dashboard';
            </script>";
    }else{
        echo "<script>
                    alert('Catatan Gagal Dihapus');
                    window.location.href = '../../dashboard';
            </script>";
    }
?>