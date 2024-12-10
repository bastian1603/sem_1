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

                <a href="../config/catatan/hapus_catatan.php?id_catatan=<?= $data['id_catatan'] ?>" data-id-catatan="<?= $data["id_catatan"];?>" class="btn btn-danger">Hapus</a>                
                <button class="btn btn-success btn-sm me-1 edit-button edit-catatan"
                        data-bs-toggle="modal"
                        data-bs-target="#modal_edit_catatan"
                        data-id-catatan="<?= $data['id_catatan'] ?>"
                        data-judul-catatan="<?= $data['judul_catatan'] ?>"
                        data-isi-catatan="<?= $data['isi_catatan'] ?>">
                    <i class="fas fas-edit"></i>Edit                
                </button>

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

    <?php 

        $get_jadwal = mysqli_query($conn, "SELECT judul_jadwal, isi_jadwal, tanggal_mulai, tanggal_selesai FROM jadwal");
        
        if(mysqli_num_rows($get_jadwal) > 0) {
            $data_jadwal = mysqli_fetch_all($get_jadwal, MYSQLI_ASSOC);

            foreach($data_jadwal as $data) {

    ?>

        <div class="tampil-jadwal">
            <div class="judul-jadwal"><?= $data["judul_jadwal"]; ?></div>
            <div class="tanggal-jadwal"><?= $data["tanggal_mulai"] ?> - <?= $data["tanggal_selesai"] ?></div>
            <div class="isi-jadwal"><?= $data["isi_jadwal"] ?></div>
        </div>

    <?php 
                }
            } else {
                echo "Belum ada jadwal dibuat :)";
            }
    ?>

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

                <button class="btn btn-success btn-sm me-1 edit-button edit-tugas"
                        data-bs-toggle="modal"
                        data-bs-target="#modal_edit_tugas"
                        data-id-tugas="<?= $data['id_tugas'] ?>"
                        data-judul-tugas="<?= $data['judul_tugas'] ?>"
                        data-tanggal-pengingat="<?= $data['tanggal_pengingat'] ?>"
                        data-waktu-pengingat="<?= $data['waktu_pengingat'] ?>"
                        data-isi-tugas="<?= $data['isi_tugas'] ?>">
                    <i class="fas fas-edit"></i>Edit                
                </button>
                
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