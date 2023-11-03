<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TK ABA NGABEAN 1</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/landing/img/favicon.png" rel="icon">
    <link href="assets/landing/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/landing/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/landing/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/landing/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/landing/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="assets/landing/css/variables.css" rel="stylesheet">
    <!-- <link href="assets/landing/css/variables-blue.css" rel="stylesheet"> -->
    <!-- <link href="assets/landing/css/variables-green.css" rel="stylesheet"> -->
    <!-- <link href="assets/landing/css/variables-orange.css" rel="stylesheet"> -->
    <!-- <link href="assets/landing/css/variables-purple.css" rel="stylesheet"> -->
    <!-- <link href="assets/landing/css/variables-red.css" rel="stylesheet"> -->
    <!-- <link href="assets/landing/css/variables-pink.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="assets/landing/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: HeroBiz
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="#" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/landing/img/logo.png" alt=""> -->
                <h1><b>TK ABA NGABEAN 1</b></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link" href="<?= base_url(''); ?>#header">Home</a></li>
                    <li><a class="nav-link" href="<?= base_url(''); ?>#visi">Visi & Misi</a></li>
                    <li><a class="nav-link" href="<?= base_url(''); ?>#about">Tentang Kami</a></li>
                    <li><a class="nav-link" href="<?= base_url(''); ?>#teacher">Guru</a></li>
                    <li><a class="nav-link" href="<?= base_url(''); ?>">Pendaftaran</a></li>
                    <li><a class="nav-link" href="<?= base_url(''); ?>#contact">Kontak</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="visi" class="visi mt-5">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Pendaftaran </h2>
                </div>

                <div class="row justify-content-center g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?= base_url('simpan-pendaftaran'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-12 mt-4">
                                            <label for="foto">Foto</label>
                                            <input type="file" class="form-control <?php echo (form_error('foto') != '') ? 'is-invalid' : ''; ?>" name="foto" id="foto">
                                            <?php echo form_error('foto', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <label for="nama_lengkap">Nama Siswa</label>
                                            <input type="text" class="form-control <?php echo (form_error('nama_lengkap') != '') ? 'is-invalid' : ''; ?>" name="nama_lengkap" id="nama_lengkap">
                                            <?php echo form_error('nama_lengkap', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <input type="text" class="form-control <?php echo (form_error('tempat_lahir') != '') ? 'is-invalid' : ''; ?>" name="tempat_lahir" id="tempat_lahir">
                                            <?php echo form_error('tempat_lahir', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="date" class="form-control <?php echo (form_error('tanggal_lahir') != '') ? 'is-invalid' : ''; ?>" name="tanggal_lahir" id="tanggal_lahir">
                                            <?php echo form_error('tanggal_lahir', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <label for="agama">Agama</label>
                                            <input type="text" class="form-control <?php echo (form_error('agama') != '') ? 'is-invalid' : ''; ?>" name="agama" id="agama">
                                            <?php echo form_error('agama', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" class="form-control <?php echo (form_error('jenis_kelamin') != '') ? 'is-invalid' : ''; ?>" id="jenis_kelamin">
                                                <option value="">Pilih Jenis Kelamin</option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            <?php echo form_error('jenis_kelamin', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <label for="anak_keberapa">Anak Keberapa</label>
                                            <input type="text" class="form-control <?php echo (form_error('anak_keberapa') != '') ? 'is-invalid' : ''; ?>" name="anak_keberapa" id="anak_keberapa">
                                            <?php echo form_error('anak_keberapa', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <label for="jumlah_saudara">Jumlah Saudara</label>
                                            <input type="text" class="form-control <?php echo (form_error('jumlah_saudara') != '') ? 'is-invalid' : ''; ?>" name="jumlah_saudara" id="jumlah_saudara">
                                            <?php echo form_error('jumlah_saudara', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <label for="status_anak">Status Anak</label>
                                            <input type="text" class="form-control <?php echo (form_error('status_anak') != '') ? 'is-invalid' : ''; ?>" name="status_anak" id="status_anak">
                                            <?php echo form_error('status_anak', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control <?php echo (form_error('alamat') != '') ? 'is-invalid' : ''; ?>" name="alamat" id="alamat"></textarea>
                                            <?php echo form_error('alamat', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12 mt-4">
                                            <label for="nama_wali">Nama Wali</label>
                                            <input type="text" class="form-control <?php echo (form_error('nama_wali') != '') ? 'is-invalid' : ''; ?>" name="nama_wali" id="nama_wali">
                                            <?php echo form_error('nama_wali', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <label for="tempat_lahir_wali">Tempat Lahir Wali</label>
                                            <input type="text" class="form-control <?php echo (form_error('tempat_lahir_wali') != '') ? 'is-invalid' : ''; ?>" name="tempat_lahir_wali" id="tempat_lahir_wali">
                                            <?php echo form_error('tempat_lahir_wali', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <label for="tanggal_lahir_wali">Tanggal Lahir Wali</label>
                                            <input type="date" class="form-control <?php echo (form_error('tanggal_lahir_wali') != '') ? 'is-invalid' : ''; ?>" name="tanggal_lahir_wali" id="tanggal_lahir_wali">
                                            <?php echo form_error('tanggal_lahir_wali', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <label for="alamat_wali">Alamat Wali</label>
                                            <textarea class="form-control <?php echo (form_error('alamat_wali') != '') ? 'is-invalid' : ''; ?>" name="alamat_wali" id="alamat_wali"></textarea>
                                            <?php echo form_error('alamat_wali', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <label for="pekerjaan">Pekerjaan Wali</label>
                                            <input type="text" class="form-control <?php echo (form_error('pekerjaan') != '') ? 'is-invalid' : ''; ?>" name="pekerjaan" id="pekerjaan">
                                            <?php echo form_error('pekerjaan', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <label for="no_telpon">No Telepon Wali</label>
                                            <input type="text" class="form-control <?php echo (form_error('no_telpon') != '') ? 'is-invalid' : ''; ?>" name="no_telpon" id="no_telpon">
                                            <?php echo form_error('no_telpon', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <label for="penghasilan">Penghasilan</label>
                                            <input type="text" class="form-control <?php echo (form_error('penghasilan') != '') ? 'is-invalid' : ''; ?>" name="penghasilan" id="penghasilan">
                                            <?php echo form_error('penghasilan', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <label for="status">Status (Ayah, Ibu, dan lain-lain)</label>
                                            <input type="text" class="form-control <?php echo (form_error('status') != '') ? 'is-invalid' : ''; ?>" name="status" id="status">
                                            <?php echo form_error('status', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-success" style="width:100%">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>TK ABA NGABEAN 1</h3>
                            <p>
                                A108 Adam Street <br>
                                NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/landing/vendor/aos/aos.js"></script>
    <script src="assets/landing/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/landing/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/landing/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/landing/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/landing/js/main.js"></script>

</body>

</html>