<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Siswa Aktif</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Siswa Aktif</li>
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
                                        <th>Tahun Ajaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($aktif as $row) : ?>
                                        <tr>
                                            <td><?= $row->id ?></td>
                                            <td><img src="./uploads/<?= $row->foto ?>" class="w-100"></td>
                                            <td><?= $row->nama_lengkap ?></td>
                                            <td><?= $row->alamat ?></td>
                                            <td><?= $row->tahun_ajaran ?></td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#detail<?= str_replace('/', '_', $row->id); ?>">Lihat Detail Siswa</button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <!-- Button trigger modal -->

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

<?php foreach ($aktif as $row) : ?>
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