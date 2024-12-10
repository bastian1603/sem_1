<?php 
    include "../asset/component/sidebar.php";
    $id_user = $_SESSION['id_user'];

?>

<div class="isi_catatan">
    <h2 class="content-title">Catatan</h2>

    <?php 
        
        $get_catatan = mysqli_query($conn, "SELECT id_catatan, judul_catatan, isi_catatan FROM catatan WHERE id_user = '$id_user'");
        
        if(mysqli_num_rows($get_catatan)){
            $data_catatan = mysqli_fetch_all($get_catatan, MYSQLI_ASSOC);
            
            foreach($data_catatan as $data) {
    ?>

        <div class="tampil-catatan">
            <div class="judul-catatan"><?= $data['judul_catatan'] ?></div>
            <div class="isi-catatan"><?= $data['isi_catatan'] ?></div>
            
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <form action="../config/catatan/hapus_catatan.php" method="post">
                    <input type="hidden" name="id_catatan">

                </form>

                <a href="../config/catatan/hapus_catatan.php" data-id-catatan="<?= $data["id_catatan"];?>" class="btn btn-danger">Hapus</a>
                <a href="../config/catatan/hapus_catatan.php" data-id-catatan="<?= $data["id_catatan"];?>" class="btn btn-warning">Edit</a>
            </div>


        </div>

    <?php
            } 
        } else {
            echo "Belum ada catatans sama sekali";
        }
    ?>

</div>


<!-- Bagian Jadwal -->
<div class="isi_jadwal">
    <h2 class="content-title">Jadwal</h2>

    <div class="tampil-jadwal">
        <div class="judul-jadwal">[Judul Jadwal 1]</div>
        <div class="tanggal-jadwal">20 Nov 2024 - 27 Nov 2024</div>
        <div class="isi-jadwal">[Isi Jadwal 1]</div>
    </div>

    <div class="tampil-jadwal">
        <div class="judul-jadwal">[Judul Jadwal 2]</div>
        <div class="tanggal-jadwal">28 Nov 2024 - 5 Des 2024</div>
        <div class="isi-jadwal">[Isi Jadwal 2]</div>
    </div>
</div>

<!-- Bagian Tugas -->
<div class="isi_tugas">
    <h2 class="content-title">Tugas</h2>

    <?php 
        $get_tugas = mysqli_query($conn, "SELECT id_tugas, judul_tugas, isi_tugas, tanggal_pengingat, waktu_pengingat FROM tugas");
        
        if(mysqli_num_rows($get_tugas)){
            $data_tugas = mysqli_fetch_all($get_tugas, MYSQLI_ASSOC);
            
            foreach($data_tugas as $data) {
    ?>

        <div class="tampil-tugas">
            <div class="judul-tugas"><?= $data['judul_tugas'];?></div>
            <div class="tanggal-tugas"><?= $data['tanggal_pengingat'];?> <?= $data['waktu_pengingat'];?></div>
            <div class="isi-tugas"><?= $data['isi_tugas'];?> </div>
            
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <a href="../config/tugas/hapus_tugas.php?id_tugas=<?= $data['id_tugas'] ?>" class="btn btn-danger">Hapus</a>
                <a href="../config/tugas/hapus_tugas.php?id_tugas=<?= $data['id_tugas'] ?>" class="btn btn-warning">Edit</a>
            </div>

        </div>


    <?php 
            }
        }else {
            echo "tidak ada tugas sama sekali";
        }
    ?>

</div>


<?php 
    include "../asset/component/footer.php";
?>