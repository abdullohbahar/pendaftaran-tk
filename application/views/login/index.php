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
                    <li><a class="nav-link" href="<?= base_url('login'); ?>">Masuk Sebagai Guru</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main" class="mb-5">
        <!-- ======= About Section ======= -->
        <section id="visi" class="visi mt-5">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Masuk Sebagai Guru </h2>
                </div>

                <div class="row">
                    <?php if ($this->session->flashdata('success')) { ?>
                        <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong>Berhasil!</strong> <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php } else if ($this->session->flashdata('error')) { ?>
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong>Gagal!</strong> <?php echo $this->session->flashdata('error'); ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="row justify-content-center g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?= base_url('aksi-login'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" name="username" class="form-control" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="password" name="password" class="form-control" id="">
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-success" style="width:100%">Masuk</button>
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
    <footer id="footer" class="footer" style="margin-top: 200px;">
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