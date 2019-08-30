<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $judul ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?= base_url('img/bwi.png'); ?>">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?= base_url('assets/biz/lib/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?= base_url('assets/biz/lib/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/biz/lib/animate/animate.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/biz/lib/ionicons/css/ionicons.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/biz/lib/owlcarousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/biz/lib/lightbox/css/lightbox.min.css'); ?>" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?= base_url('assets/biz/css/style.css'); ?>" rel="stylesheet">

    <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body class="hold-transition skin-blue layout-top-nav">
    <header id="header">
        <div class="container-fluid">
            <div id="logo" class="pull-left">
                <h1 class="text-white" style="font-family: Vendana;"><img src="<?= base_url('img/bwi.png'); ?>" width="70" height="70"> VilDev</h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class=""><a href="<?= site_url('user/Homeuser'); ?>">Home</a></li>
                    <li class="menu-has-children"><a href="">Informasi Desa</a>
                        <ul>
                            <li><a href="<?= site_url('user/Homeuser/beritauser'); ?>">Berita Desa</a></li>
                            <li><a href="<?= site_url('user/Homeuser/eventuser'); ?>">Event Desa</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a href="">Hasil Desa</a>
                        <ul>
                            <li><a href="#">Kerajinan Desa</a></li>
                            <li><a href="">Oleh oleh Khas Desa</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= site_url('user/Homeuser/wisatauser'); ?>">Wisata Desa</a></li>
                    <li class="menu-has-children"><a href="">Kependudukan</a>
                        <ul>
                            <li><a href="#">Permintaan surat</a></li>
                            <li><a href="<?= site_url('user/Homeuser/pendaftaranpjk'); ?>">Pendaftaran Perpajakan</a></li>
                            <li><a href="#">Data Pemenerima Bantuan</a></li>
                        </ul>
                    </li>
                </ul>
            </nav> <!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    <div class="section" style="margin-top: 100px;">
        <!-- CONTAINER -->
        <div class="container">
            <!-- ROW -->
            <div class="row">
                <!-- Main Column -->
                <div class="col-md-8 mt-5">
                    <?php foreach ($event as $ev) : ?>
                        <article class="article article-post">
                            <div class="article-main-img">
                                <img src="<?php echo base_url('assets/img/foto_event/' . $ev->foto) ?>" alt="">
                            </div>
                            <div class="article-body">
                                <ul class="article-info">
                                    <li class="article-category"><a href="berita.php">Berita</a></li>
                                    <li class="article-type"><i class="fa fa-file-text"></i></li>
                                </ul>
                                <h3 class="article-title"><?= $ev->judul_event ?></h3>
                                <ul class="article-meta">
                                    <li><i class="fa fa-clock-o"></i> <?= $ev->tanggal_mulai ?></li>
                                    <li><i class="fa fa-clock-o"></i> <?= $ev->tanggal_selesai ?></li>
                                </ul>
                                <p>
                                    <?= $ev->isi_event ?>
                                </p>
                                <div class="row mb-3 mt-5">
                                    <div class="col">
                                        <div class="card" style="width: 18rem;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>





    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3 class="text-white" style="font-family: Vendana;"><img src="<?= base_url('img/bwi.png'); ?>" width="70" height="70"> VilDev</h3>
                        <p>Merupakan sistem informasi untuk masyarakat desa dalam mengembangkan desa dan mempermudah masyarakat dalam menerima informasi dari pemerintah desa</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Alamat</h4>
                        <p>
                            Perum Bumi Maron, RT. 01/RW. 1, Dusun Kopen, Genteng Kulon, Kec. Genteng, Kabupaten Banyuwangi, 68465<br>
                            Jawa Timur <br>
                            Indonesia <br>
                            <strong>No Telepon </strong> +1 5589 55488 55<br>
                            <strong>Email: </strong>villagedeveloper79@gmail.com<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Village Developer</strong>. Web by SansDev
            </div>
            <div class="credits">
                <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- #footer -->

    <!-- jQuery 3 -->
    <script src="<?= base_url('assets/biz/lib/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/biz/lib/jquery/jquery-migrate.min.js'); ?>"></script>
    <script src="<?= base_url('assets/biz/lib/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/biz/lib/easing/easing.min.js'); ?>"></script>
    <script src="<?= base_url('assets/biz/lib/superfish/hoverIntent.js'); ?>"></script>
    <script src="<?= base_url('assets/biz/lib/superfish/superfish.min.js'); ?>"></script>
    <script src="<?= base_url('assets/biz/lib/wow/wow.min.js'); ?>"></script>
    <script src="<?= base_url('assets/biz/lib/waypoints/waypoints.min.js'); ?>"></script>
    <script src="<?= base_url('assets/biz/lib/counterup/counterup.min.js'); ?>"></script>
    <script src="<?= base_url('assets/biz/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url('assets/biz/lib/isotope/isotope.pkgd.min.js'); ?>"></script>
    <script src="<?= base_url('assets/biz/lib/lightbox/js/lightbox.min.js'); ?>"></script>
    <script src="<?= base_url('assets/biz/lib/touchSwipe/jquery.touchSwipe.min.js'); ?>"></script>
    <!-- Contact Form JavaScript File -->
    <script src="<?= base_url('assets/biz/contactform/contactform.js'); ?>"></script>

    <!-- Template Main Javascript File -->
    <script src="<?= base_url('assets/biz/js/main.js'); ?>"></script>
</body>

</html>