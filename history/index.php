<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nyoba side bar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    
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

            <!-- <p align="center">Today Tasks</p>

            <div class="task">

                <ul class="task-list">
                    <li class="task-item flex-start">
                        <p class="judul-task">Judul Tugas</p>
                        <p>25/12/2024</p>
                    </li>

                    <li class="task-item flex-start">
                        <p class="judul-task">Judul Tugas</p>
                        <p>25/12/2024</p>
                    </li>
                    
                    <li class="task-item flex-start">
                        <p class="judul-task">Judul Tugas</p>
                        <p>25/12/2024</p>
                    </li>
                    
                    <li class="task-item flex-start">
                        <p class="judul-task">Judul Tugas</p>
                        <p>25/12/2024</p>
                    </li>
                    
                    <li class="task-item flex-start">
                        <p class="judul-task">Judul Tugas</p>
                        <p>25/12/2024</p>
                    </li>
                    <li class="task-item flex-start">
                        <p class="judul-task">Judul Tugas</p>
                        <p>25/12/2024</p>
                    </li>

                    <li class="task-item flex-start">
                        <p class="judul-task">Judul Tugas</p>
                        <p>25/12/2024</p>
                    </li>
                    
                    <li class="task-item flex-start">
                        <p class="judul-task">Judul Tugas</p>
                        <p>25/12/2024</p>
                    </li>
                    
                    <li class="task-item flex-start">
                        <p class="judul-task">Judul Tugas</p>
                        <p>25/12/2024</p>
                    </li>
                    
                    <li class="task-item flex-start">
                        <p class="judul-task">Judul Tugas</p>
                        <p>25/12/2024</p>
                    </li>
                    <li class="task-item flex-start">
                        <p class="judul-task">Judul Tugas</p>
                        <p>25/12/2024</p>
                    </li>

                    <li class="task-item flex-start">
                        <p class="judul-task">Judul Tugas</p>
                        <p>25/12/2024</p>
                    </li>
                    
                    <li class="task-item flex-start">
                        <p class="judul-task">Judul Tugas</p>
                        <p>25/12/2024</p>
                    </li>
                    
                    <li class="task-item flex-start">
                        <p class="judul-task">Judul Tugas</p>
                        <p>25/12/2024</p>
                    </li>
                    
                    <li class="task-item flex-start">
                        <p class="judul-task">Judul Tugas</p>
                        <p>25/12/2024</p>
                    </li>
                </ul>

            </div> -->
    
            <div class="setting-container flex-start">
                <hr>
    
                <div class="flex-start setting">
                    <img src="asset/hexagon-svgrepo-com.svg" alt="icon" class="icon"> <div class="fitur">Pengaturan</div>
                </div>

                <hr>
            </div>
    
        </section>

        
        <section class="">
            <div class="">
        
                <div class="search-container">
                    <form action="#">
                      <input type="text" id="search-input" placeholder="Cari tugas mu...">
                      <button type="submit" id="search-btn">
                        <i class="fa fa-search"></i>
                      </button>
                    </form>
                </div>
            
                
                <table class="table table-light table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tenggat</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="col"># 1</th>
                            <th scope="col">Matematika</th>
                            <th scope="col">25 / 11 / 2024</th>
                            <th scope="col">Sudah Dikerjakan</th>
                            <td><button>:</button></td>
                        </tr>
                        <tr>
                            <th scope="col"># 2</th>
                            <th scope="col">Pendidikan Pancasila</th>
                            <th scope="col">29 / 11 / 2024</th>
                            <th scope="col">Sedang Dikerjakan</th>
                            <td><button>:</button></td>
                        </tr>
                        <tr>
                            <th scope="col"># 3</th>
                            <th scope="col">Dasar Pemrograman</th>
                            <th scope="col">01 / 12 / 2024</th>
                            <th scope="col">Belum Dikerjakan</th>
                            <td><button>:</button></td>
                        </tr>
                        <tr>
                            <th scope="col"># 4</th>
                            <th scope="col">Sistem Komputer</th>
                            <th scope="col">10 / 12 / 2024</th>
                            <th scope="col">Belum Dikerjakan</th>
                            <td><button>:</button></td>
                        </tr>
                        <tr>
                            <th scope="col"># 5</th>
                            <th scope="col">Dasar Pemrograman Web</th>
                            <th scope="col">15 / 12 / 2024</th>
                            <th scope="col">Belum Dikerjakan</th>
                            <td><button>:</button></td>
                        </tr>
                    </tbody>
                </table>
                
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

                <div class="modal-body">
                    <form action="../config/catatan/input_catatan.php" method="POST">
                        <label for="catatan_judul" class="form-label">Judul</label>
                        <input type="text" name="catatan_judul" id="catatan_judul" class="form-control">
                        
                        <label for="catatan_isi" class="form-label">Isi</label>
                        <textarea name="catatan_isi" id="catatan_isi" class="form-control"></textarea>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
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

                <div class="modal-body">
                    <form action="" method="POST">
                        <label for="catatan_judul" class="form-label">Judul</label>
                        <input type="text" name="catatan_judul" id="catatan_judul" class="form-control">
                        
                        <label for="hari_tenggat" class="form-label">Hari tenggat</label>
                        <input type="date" name="hari_tenggat" id="hari_tenggat" class="form-control">

                        <label for="waktu_tenggat" class="form-label">Jam tenggat</label>
                        <input type="time" name="waktu_tenggat" id="waktu_tenggat" class="form-control">

                        <label for="catatan_isi" class="form-label">Isi</label>
                        <textarea name="catatan_isi" id="catatan_isi" class="form-control"></textarea>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
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

                <div class="modal-body">
                    <form action="" method="POST">
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
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
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

                <div class="modal-body">
                    <form action="" method="POST">
                        <label for="kode_tantangan" class="form-label">Masukkan kode tantangan</label>
                        <input type="text" name="kode_tantangan" id="kode_tantangan" class="form-control">

                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>


