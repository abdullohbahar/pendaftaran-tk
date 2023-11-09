<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Pendaftaran</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Pendaftaran</li>
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
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10%;">Nomor Pendaftaran</th>
                                        <th style="width: 15%;">Foto</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pendaftaran as $row) : ?>
                                        <tr>
                                            <td><?= $row->id ?></td>
                                            <td><img src="./uploads/<?= $row->foto ?>" class="w-100"></td>
                                            <td><?= $row->nama_lengkap ?></td>
                                            <td><?= $row->alamat ?></td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a class="btn btn-success" href="<?= base_url('terima-siswa/' . str_replace('/', '_', $row->id)) ?>" onclick="return confirm('Yakin ingin menerima siswa ini?')">Terima</a>
                                                    <a class="btn btn-danger" href="<?= base_url('tolak-siswa/' . str_replace('/', '_', $row->id)) ?>" onclick="return confirm('Yakin ingin menolak siswa ini?')">Tolak</a>
                                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#detail<?= str_replace('/', '_', $row->id); ?>">Lihat Detail Siswa</button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
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

<?php foreach ($pendaftaran as $row) : ?>
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

<?php foreach ($pendaftaran as $row) : ?>
    <!-- Modal -->
    <div class="modal fade" id="detail<?= str_replace('/', '_', $row->id); ?>" tabindex="-1" aria-labelledby="modaldetail<?= str_replace('/', '_', $row->id); ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modaldetail<?= str_replace('/', '_', $row->id); ?>">Detail Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-bordered" style="font-weight: bolder;">
                                <tr>
                                    <td colspan="3" class="text-center">
                                        <img src="./uploads/<?= $row->foto; ?>" alt="" class="w-50" srcset="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><?= $row->nama_lengkap; ?></td>
                                </tr>
                                <tr>
                                    <td>Agama</td>
                                    <td>:</td>
                                    <td><?= $row->agama; ?></td>
                                </tr>
                                <tr>
                                    <td>Status Anak</td>
                                    <td>:</td>
                                    <td><?= $row->status_anak; ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td><?= $row->jenis_kelamin; ?></td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td>:</td>
                                    <td><?= $row->tempat_lahir; ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td><?= $row->tanggal_lahir; ?></td>
                                </tr>
                                <tr>
                                    <td>Anak Ke</td>
                                    <td>:</td>
                                    <td><?= $row->anak_keberapa; ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><?= $row->alamat; ?></td>
                                </tr>
                                <tr>
                                    <td>Jumlah Saudara</td>
                                    <td>:</td>
                                    <td><?= $row->jumlah_saudara; ?></td>
                                </tr>
                                <tr>
                                    <td>Status Penerimaan</td>
                                    <td>:</td>
                                    <td><?= $row->status_penerimaan; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-center"><b>Wali</b></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><?= $row->nama; ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><?= $row->alamat; ?></td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir </td>
                                    <td>:</td>
                                    <td><?= $row->tempat_lahir; ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir </td>
                                    <td>:</td>
                                    <td><?= $row->tanggal_lahir; ?></td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan </td>
                                    <td>:</td>
                                    <td><?= $row->pekerjaan; ?></td>
                                </tr>
                                <tr>
                                    <td>No Telepon</td>
                                    <td>:</td>
                                    <td><?= $row->no_telpon; ?></td>
                                </tr>
                                <tr>
                                    <td>Penghasilan</td>
                                    <td>:</td>
                                    <td><?= $row->penghasilan; ?></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>:</td>
                                    <td><?= $row->status; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>