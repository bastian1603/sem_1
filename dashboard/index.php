<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nyoba side bar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../asset/css/sidebar.css">
    <link rel="stylesheet" href="../asset/css/dashboard.css">
</head>
<body>

    <?php 
        include '../config/koneksi.php';
    ?>
    
    <div class="wrapper">
      
        <section class="sidebar">

            <div class="profile-container">
                <div class="profile">
                    <img src="../asset/image/temporary-profile-placeholder-1.jpg" alt="" class="profile-pic"> <div>Username</div>
                </div>
            </div>
    
            <hr>
    
            <ul>
                <li class="flex-start li-fitur" data-bs-toggle="modal" data-bs-target="#modal_catatan"><img src="../asset/image/square-list-svgrepo-com.svg" alt="icon" class="icon"> <div class="fitur">Catatan</div></li>
                <li class="flex-start li-fitur" data-bs-toggle="modal" data-bs-target="#modal_jadwal"><img src="../asset/image/table-alt-svgrepo-com.svg" alt="icon" class="icon"> <div class="fitur">Jadwal</div></li>
                <li class="flex-start li-fitur" data-bs-toggle="modal" data-bs-target="#modal_tugas"><img src="../asset/image/clock-svgrepo-com.svg" alt="icon" class="icon"> <div class="fitur">Tugas</div></li>
                <li class="flex-start li-fitur" data-bs-toggle="modal" data-bs-target="#modal_tantangan"><img src="../asset/image/hexagon-svgrepo-com.svg" alt="icon" class="icon"> <div class="fitur">Tantangan</div></li>
            </ul>
    
            <hr>
    
            <div class="setting-container flex-start">
                <hr>
    
                <div class="flex-start setting">
                    <img src="../asset/hexagon-svgrepo-com.svg" alt="icon" class="icon"> <div class="fitur">Pengaturan</div>
                </div>

                <hr>
            </div>
    
        </section>
        
        
        <section class="konten">
            <div class="isi_catatan">
                <h2 class="content-title">Catatan</h2>

                <?php 
                
                    $data_catatan = mysqli_query($conn, "SELECT * FROM catatan");

                    foreach($data_catatan as $data) {
                ?>                    

                <div class="tampil-catatan">
                    <div class="judul-catatan"><?= $data['judul_catatan'] ?></div>
                    <div class="isi-catatan"><?= $data['isi_catatan'] ?></div>
                </div>
                    


                <?php } ?>

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

        <div class="tampil-tugas">
            <div class="judul-tugas">[Judul Tugas 1]</div>
            <div class="tanggal-tugas">25 Nov 2024 | 14:00</div>
            <div class="isi-tugas">[Isi Tugas 1]</div>
        </div>

        <div class="tampil-tugas">
            <div class="judul-tugas">[Judul Tugas 2]</div>
            <div class="tanggal-tugas">26 Nov 2024 | 16:30</div>
            <div class="isi-tugas">[Isi Tugas 2]</div>
        </div>
    </div>

</section>


  

    </div>

    
    <!-- bagian yang tidak langsung muncul di web -->

    <!-- modal input catatan -->
    <div class="modal fade" id="modal_catatan" tabindex="1" aria-labelledby="modal_catatan" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modal_catatan_label">Input Catatan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>

                <form action="../config/inp" method="POST">

                    <div class="modal-body">
                            <label for="catatan_judul" class="form-label">Judul</label>
                            <input type="text" name="catatan_judul" id="catatan_judul" class="form-control">
                            
                            <label for="catatan_isi" class="form-label">Isi</label>
                            <textarea name="catatan_isi" id="catatan_isi" class="form-control"></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- modal input tugas -->
    <div class="modal fade" id="modal_tugas" tabindex="1" aria-labelledby="modal_tugas" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modal_catatan_label">Input Tugas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>

                <form action="input_tugas.php" method="POST">

                    <div class="modal-body">
                            <label for="tugas_judul" class="form-label">Judul</label>
                            <input type="text" name="tugas_judul" id="tugas_judul" class="form-control">
                            
                            <label for="hari_tenggat" class="form-label">Hari tenggat</label>
                            <input type="date" name="hari_tenggat" id="hari_tenggat" class="form-control">

                            <label for="waktu_tenggat" class="form-label">Jam tenggat</label>
                            <input type="time" name="waktu_tenggat" id="waktu_tenggat" class="form-control">

                            <label for="catatan_isi" class="form-label">Isi</label>
                            <textarea name="catatan_isi" id="catatan_isi" class="form-control"></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
                </form>

            </div>
        </div>
    </div>

    <!-- modal input jadwal -->
    <div class="modal fade" id="modal_jadwal" tabindex="1" aria-labelledby="modal_jadwal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modal_catatan_label">Input jadwal</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>

                <form action="" method="POST">

                    <div class="modal-body">
                            <label for="tantangan_judul" class="form-label">Judul</label>
                            <input type="text" name="tantangan_judul" id="tantangan_judul" class="form-control">
                            
                            <label for="tanggal_mulai" class="form-label">Tanggal mulai</label>
                            <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control">

                            <label for="tanggal_berakhir" class="form-label">Tanggal berakhir</label>
                            <input type="date" name="tanggal_berakhir" id="tanggal_berakhir" class="form-control">

                            <label for="waktu_pengingat">Waktu</label>
                            <input type="time" name="waktu_pengingat" id="waaktu_pengingat" class="form-control">

                            <label for="hari_melakukan">dilakukan pada hari</label>
                            
                            <div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" value="senin" id="senin" class="form-check-input">
                                    <label for="senin">Senin</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="checkbox" value="selasa" id="selasa" class="form-check-input">
                                    <label for="senin">Selasa</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="checkbox" value="rabu" id="rabu" class="form-check-input">
                                    <label for="senin">Rabu</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="checkbox" value="kamis" id="kamis" class="form-check-input">
                                    <label for="senin">Kamis</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="checkbox" value="jumat" id="jumat" class="form-check-input">
                                    <label for="senin">Jumat</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="checkbox" value="sabtu" id="sabtu" class="form-check-input">
                                    <label for="senin">Sabtu</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="checkbox" value="minggu" id="minggu" class="form-check-input">
                                    <label for="senin">Minggu</label>
                                </div>
                            </div>


                            <label for="catatan_isi" class="form-label">Isi</label>
                            <textarea name="catatan_isi" id="catatan_isi" class="form-control"></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </form>


            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_tantangan" tabindex="1" aria-labelledby="modal_catatan" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modal_catatan_label">Input Kode Tantangan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>

                <form action="" method="POST">

                    <div class="modal-body">
                            <label for="kode_tantangan" class="form-label">Masukkan kode tantangan</label>
                            <input type="text" name="kode_tantangan" id="kode_tantangan" class="form-control">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </form>


            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>