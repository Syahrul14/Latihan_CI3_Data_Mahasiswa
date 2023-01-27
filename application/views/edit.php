<div class="content-wrapper">
    <section class="content">
        <?php foreach ($mahasiswa as $mhs) { ?>
            <form action="<?= base_url() . 'index.php/mahasiswa/update' ?>" method="post">
                <div class="form-group">
                    <input type="hidden" name="id" id="id" class="form-control" value="<?= $mhs->id ?>">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="<?= $mhs->nama ?>">
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" id="nim" class="form-control" value="<?= $mhs->nim ?>">
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control" value="<?= $mhs->tgl_lahir ?>">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" name="jurusan" id="jurusan" class="form-control" value="<?= $mhs->jurusan ?>">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $mhs->alamat ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" value="<?= $mhs->email ?>">
                </div>
                <div class="form-group">
                    <label for="no_telp">No Telpon</label>
                    <input type="text" name="no_telp" id="no_telp" class="form-control" value="<?= $mhs->no_telp ?>">
                </div>
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        <?php } ?>
    </section>
</div>