<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Data Mahasiswa
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data Mahasiswa</li>
        </ol>
    </section>
    <section class="content">
        <?= $this->session->flashdata('message') ?>
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Mahasiswa</button>
        <a class="btn btn-danger" href="<?= base_url('index.php/mahasiswa/print') ?>"><i class="fa fa-print"></i> Print</a>
        <div class="dropdown inline">
            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <i fa fa-download></i> Export
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="<?= base_url('index.php/mahasiswa/pdf') ?>">PDF</a></li>
                <li><a href="<?= base_url('index.php/mahasiswa/excel') ?>">Excel</a></li>
            </ul>
        </div>
        <div class="navbar-form navbar-right">
            <?= form_open('index.php/mahasiswa/search') ?>
            <input type="text" name="keyword" class="form-control" placeholder="Search">
            <button type="submit" class="btn btn-success">Cari</button>
            <?= form_close() ?>
        </div>
        <table class="table">
            <tr>
                <th>No</th>
                <th>NAMA MAHASISWA</th>
                <th>NIM</th>
                <th>TANGGAL LAHIR</th>
                <th>JURUSAN</th>
                <th colspan="2">AKSI</th>
            </tr>
            <?php
            $no = 1;
            foreach ($mahasiswa as $mhs) {
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $mhs->nama ?></td>
                    <td><?= $mhs->nim ?></td>
                    <td><?= $mhs->tgl_lahir ?></td>
                    <td><?= $mhs->jurusan ?></td>
                    <td>
                        <?= anchor('index.php/mahasiswa/detail/' . $mhs->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?>
                    </td>
                    <td onclick="javascript: return confirm('Anda yakin hapus !!!')">
                        <?= anchor('index.php/mahasiswa/hapus/' . $mhs->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                    </td>
                    <td>
                        <?= anchor('index.php/mahasiswa/edit/' . $mhs->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Form Input Data Mahasiswa</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('index.php/mahasiswa/tambah_aksi') ?>
                    <div class="form-group">
                        <label for="nama">Nama Mahasiswa</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" name="nim" id="nim" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" name="jurusan" id="jurusan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No Telpon</label>
                        <input type="text" name="no_telp" id="no_telp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="foto">Upload Foto</label>
                        <input type="file" name="foto" id="foto" class="form-control">
                    </div>
                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>