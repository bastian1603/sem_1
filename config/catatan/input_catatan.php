<?php 
    include '../koneksi.php';

    $judul_catatan = $_POST['catatan_judul'];
    $isi_catatan = $_POST['catatan_isi'];
    // $id_user = $_SESSION['username'];

    $execute = mysqli_query($conn, "INSERT INTO catatan(judul_catatan, isi_catatan) values ('$judul_catatan', '$isi_catatan')");

    if($execute) {
        echo "<script>
                    alert('Data Berhasil Disimpan');
                    
            </script>";
    }else{
        echo "<script>
                    alert('Data Gagal Disimpan');
                    
            </script>";
    }

    header("Location: ../../dashboard");

?>
