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

            <form action="../config/catatan/input_catatan.php" method="POST">

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

            <form action="../config/tugas/input_tugas.php" method="POST">

                <div class="modal-body">
                    <label for="tugas_judul" class="form-label">Judul</label>
                    <input type="text" name="judul_tugas" id="judul_tugas" class="form-control">

                    <label for="hari_tenggat" class="form-label">Hari tenggat</label>
                    <input type="date" name="tanggal_pengingat" id="tanggal_pengingat" class="form-control">

                    <label for="waktu_tenggat" class="form-label">Jam tenggat</label>
                    <input type="time" name="waktu_pengingat" id="waktu_pengingat" class="form-control">

                    <label for="catatan_isi" class="form-label">Isi</label>
                    <textarea name="isi_tugas" id="isi_tugas" class="form-control"></textarea>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
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

            <form action="../config/jadwal/input_jadwal.php" method="POST">

                <div class="modal-body">
                    <label for="judul_jadwal" class="form-label">Judul</label>
                    <input type="text" name="judul_jadwal" id="judul_jadwal" class="form-control">

                    <label for="tanggal_mulai" class="form-label">Tanggal mulai</label>
                    <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control">

                    <label for="tanggal_berakhir" class="form-label">Tanggal berakhir</label>
                    <input type="date" name="tanggal_berakhir" id="tanggal_berakhir" class="form-control">

                    <label for="waktu_pengingat">Waktu</label>
                    <input type="time" name="waktu_pengingat" id="waaktu_pengingat" class="form-control">

                    <label for="hari_melakukan">dilakukan pada hari</label>

                    <div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" value="1" id="senin" name="list_hari[0]" class="form-check-input">
                            <label for="senin">Senin</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" value="1" id="selasa" name="list_hari[1]" class="form-check-input">
                            <label for="selasa">Selasa</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" value="1" id="rabu" name="list_hari[2]" class="form-check-input">
                            <label for="rabu">Rabu</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" value="1" id="kamis" name="list_hari[3]" class="form-check-input">
                            <label for="kamis">Kamis</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" value="1" id="jumat" name="list_hari[4]" class="form-check-input">
                            <label for="jumat">Jumat</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" value="1" id="sabtu" name="list_hari[5]" class="form-check-input">
                            <label for="sabtu">Sabtu</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" value="1" id="minggu" name="list_hari[6]" class="form-check-input">
                            <label for="minggu">Minggu</label>
                        </div>
                    </div>

                    <label for="isi_jadwal" class="form-label">Isi</label>
                    <textarea name="isi_jadwal" id="isi_jadwal" class="form-control"></textarea>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
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


<!-- MODAL UNTUK EDIT -->

<!-- modal edit catatan -->
<div class="modal fade" id="modal_edit_catatan" tabindex="1" aria-labelledby="modal_catatan" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <input type="hidden" name="id_catatan">

            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal_catatan_label">Edit Catatan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>

            <form action="../config/catatan/edit_catatan.php" method="POST">

                <div class="modal-body">
                    <input type="hidden" name="id_catatan" id="edit_id_catatan">

                    <label for="catatan_judul" class="form-label">Judul</label>
                    <input type="text" name="judul_catatan" id="edit_judul_catatan" class="form-control">

                    <label for="catatan_isi" class="form-label">Isi</label>
                    <textarea name="isi_catatan" id="edit_isi_catatan" class="form-control"></textarea>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- modal edit tugas -->
<div class="modal fade" id="modal_edit_tugas" tabindex="1" aria-labelledby="modal_tugas" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tugas_label">Edit Tugas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>

            <form action="../config/tugas/edit_tugas.php" method="POST">

                <div class="modal-body">
                    <input type="hidden" name="id_tugas" id="edit_id_tugas">

                    <label for="tugas_judul" class="form-label">Judul</label>
                    <input type="text" name="judul_tugas" id="edit_judul_tugas" class="form-control">

                    <label for="hari_tenggat" class="form-label">Hari tenggat</label>
                    <input type="date" name="tanggal_pengingat" id="edit_tanggal_pengingat" class="form-control">

                    <label for="waktu_tenggat" class="form-label">Jam tenggat</label>
                    <input type="time" name="waktu_pengingat" id="edit_waktu_pengingat" class="form-control">

                    <label for="catatan_isi" class="form-label">Isi</label>
                    <textarea name="isi_tugas" id="edit_isi_tugas" class="form-control"></textarea>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- modal input jadwal -->
<div class="modal fade" id="modal_edit_jadwal" tabindex="1" aria-labelledby="modal_jadwal" aria-hidden="true">
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

<div class="modal fade" id="modal_edit_tantangan" tabindex="1" aria-labelledby="modal_catatan" aria-hidden="true">
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<script>

    // untuk edit catatan
    document.addEventListener('DOMContentLoaded', function () {
        const edit_buttons = document.querySelectorAll('.edit-catatan');
        edit_buttons.forEach(button => {
            button.addEventListener('click', function () {
                const id_catatan = this.getAttribute('data-id-catatan');
                const judul_catatan = this.getAttribute('data-judul-catatan');
                const isi_catatan = this.getAttribute('data-isi-catatan');

                document.getElementById('edit_id_catatan').value = id_catatan;
                document.getElementById('edit_judul_catatan').value = judul_catatan;
                document.getElementById('edit_isi_catatan').value = isi_catatan;
            })
        });
    });
    
    // untuk edit tugas
    document.addEventListener('DOMContentLoaded', function () {
        const edit_buttons = document.querySelectorAll('.edit-tugas');
        edit_buttons.forEach(button => {
            button.addEventListener('click', function () {
                const id_tugas = this.getAttribute('data-id-tugas');
                const judul_tugas = this.getAttribute('data-judul-tugas');
                const tanggal_pengingat = this.getAttribute('data-tanggal-pengingat');
                const waktu_pengingat = this.getAttribute('data-waktu-pengingat');
                const isi_tugas = this.getAttribute('data-isi-tugas');

                document.getElementById('edit_id_tugas').value = id_tugas;
                document.getElementById('edit_judul_tugas').value = judul_tugas;
                document.getElementById('edit_tanggal_pengingat').value = tanggal_pengingat;
                document.getElementById('edit_waktu_pengingat').value = waktu_pengingat;
                document.getElementById('edit_isi_tugas').value = isi_tugas;
            });
        });
    });

    // untuk edit jadwal
    document.addEventListener('DOMContentLoaded', function () {
        const edit_buttons =document.querySelectorAll('.edit-jadwal');
        edit_buttons.forEach(button => {
            button.addEventListener('click', function () {
                const id_catatan = this.getAttribute('data-id-catatan');
                const judul_catatan = this.getAttribute('data-judul-catatan');
                const isi_catatan = this.getAttribute('data-isi-catatan');

                document.getElementById('edit-id-catatan').value = id_catatan;
                document.getElementById('edit-judul-catatan').value = judul_catatan;
                document.getElementById('edit-isi-catatan').value = isi_catatan;
            })
        });
    });

</script>

</body>

</html>