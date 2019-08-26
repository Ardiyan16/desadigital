<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home</title>
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
                    <li class="menu-active"><a href="#intro">Home</a></li>
                    <li class="menu-has-children"><a href="">Informasi Desa</a>
                        <ul>
                            <li><a href="#">Berita Desa</a></li>
                            <li><a href="#">Event Desa</a></li>
                            <li><a href="#">Kegiatan Desa</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a href="">Hasil Desa</a>
                        <ul>
                            <li><a href="#">Makanan Tradisional</a></li>
                            <li><a href="#">Kerajinan Desa</a></li>
                            <li><a href="#">Usaha Desa</a></li>
                            <li><a href="">Oleh oleh Khas Desa</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a href="">Pariwisata Desa</a>
                        <ul>
                            <li><a href="#">Wisata Desa</a></li>
                            <li><a href="#">Wisata Kuliner Desa</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a href="" style="color: white;"><?= $this->session->userdata('username'); ?> <img class="img-circle" src="<?= $this->session->userdata('foto'); ?>"></a>
                        <ul>
                            <li><a href="#">Edit Profile</a></li>
                        </ul>
                    </li>
                </ul>
            </nav> <!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item">
                        <div class="carousel-background"><img src="<?= base_url('img/Telukijo.png'); ?>" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <p>Teluk Ijo</p>
                                <a href="<?= base_url('user/Login/logout'); ?>" class="btn-get-started scrollto">Logout</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="<?= base_url('img/KaIj.png'); ?>" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <p>Kawah Ijen</p>
                                <a href="<?= base_url('user/Login/logout'); ?>" class="btn-get-started scrollto">Logout</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="<?= base_url('img/watudodol.png'); ?>" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <p>Watu Dodol</p>
                                <a href="<?= base_url('user/Login/logout'); ?>" class="btn-get-started scrollto">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section><!-- #intro -->

    <section class="edit-profile">
        <div class="container">
            <div class="col-md-7">
                <h3 class="mt-5">Edit Profile</h3>
            </div>
        </div>
    </section>


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
                &copy; Copyright <strong>BizPage</strong>. Web by SansDev
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