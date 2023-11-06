<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Guru</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Guru</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <?php if ($this->session->flashdata('success')) { ?>
                        <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong>Berhasil!</strong> <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php } else if ($this->session->flashdata('error')) { ?>
                        <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong>Gagal!</strong> <?php echo $this->session->flashdata('error'); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-tools">
                                <button class="btn btn-success" data-toggle="modal" data-target="#ModalTambahGuru">Tambah Guru</button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th style="width: 100px;">Foto</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($guru as $row) : ?>
                                        <tr>
                                            <td><?= $row->id ?></td>
                                            <td><img src="./uploads/<?= $row->foto ?>" class="w-100"></td>
                                            <td><?= $row->nama ?></td>
                                            <td><?= $row->alamat ?></td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <button type="button" data-toggle="modal" data-target="#edit<?= $row->id; ?>" class="btn btn-warning">Ubah</button>
                                                    <a class="btn btn-danger" href="<?= site_url('hapus-guru/' . $row->id) ?>" onclick="return confirm('Yakin ingin menghapus guru ini?')">Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- Modal -->
<div class="modal fade" id="ModalTambahGuru" tabindex="-1" aria-labelledby="ModalTambahGuruLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalTambahGuruLabel">Modal Tambah Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo site_url('tambah-guru'); ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK:</label>
                        <input type="text" class="form-control" id="nik" name="nik" required placeholder="NIK">
                    </div>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto:</label>
                        <input type="file" class="form-control-file" id="foto" required name="foto">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php foreach ($guru as $row) : ?>
    <!-- Modal -->
    <div class="modal fade" id="edit<?= $row->id; ?>" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditLabel">Modal Tambah Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo site_url('ubah-guru/' . $row->id); ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" class="form-control" value="<?= $row->nama; ?>" id="nama" name="nama" required placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <input type="text" class="form-control" value="<?= $row->alamat; ?>" id="alamat" name="alamat" required placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK:</label>
                            <input type="text" class="form-control" id="nik" value="<?= $row->nik; ?>" name="nik" required placeholder="NIK">
                        </div>
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" value="<?= $row->username; ?>" name="username" required placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" autocomplete="new-password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto: <small style="color: red;">Biarkan kosong jika tidak ingin mengubah foto</small></label>
                            <input type="file" class="form-control-file" id="foto" name="foto">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>