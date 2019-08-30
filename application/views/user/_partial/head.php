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
                    <li><a href="<?= site_url('Home'); ?>">Home</a></li>
                    <li class="menu-has-children"><a href="">Informasi Desa</a>
                        <ul>
                            <li><a href="<?= site_url('user/Menu'); ?>">Berita Desa</a></li>
                            <li><a href="<?= site_url('user/Menu/event'); ?>">Event Desa</a></li>
                            <li><a href="#">Kegiatan Desa</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a href="">Hasil Desa</a>
                        <ul>
                            <li><a href="<?= site_url('user/Menu/kerajinan'); ?>">Kerajinan Desa</a></li>
                            <li><a href="<?= site_url('user/Menu/oleholeh'); ?>">Oleh oleh Khas Desa</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= site_url('user/Menu/wisata'); ?>">Wisata Desa</a></li>
                    <li class="menu-has-children"><a href="">Kependudukan</a>
                        <ul>
                            <li><a href="#">Permintaan surat</a></li>
                            <li><a href="<?= site_url('user/Homeuser/pendaftaranpjk'); ?>">Pendaftaran PP</a></li>
                            <li><a href="#">Data Pemenerima Bantuan</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- #nav-menu-container -->
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
                                <a href="<?php echo site_url('user/Login') ?>" class="btn-get-started scrollto">Login</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="<?= base_url('img/KaIj.png'); ?>" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <p>Kawah Ijen</p>
                                <a href="<?php echo site_url('user/Login') ?>" class="btn-get-started scrollto">Login</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="<?= base_url('img/watudodol.png'); ?>" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <p>Watu Dodol</p>
                                <a href="<?php echo site_url('user/Login') ?>" class="btn-get-started scrollto">Login</a>
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

    <section id="featured-services">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 box">
                    <i class="ion-ios-location"></i>
                    <h4 class="title"><a href="">Alamat</a></h4>
                    <p class="description">Perum Bumi Maron, RT. 01/RW. 1, Dusun Kopen, Genteng Kulon, Kec. Genteng, Kabupaten Banyuwangi, Jawa Timur 68465</p>
                </div>

                <div class="col-lg-4 box box-bg">
                    <i class="ion-ios-bookmarks"></i>
                    <h4 class="title"><a href="">Kutipan</a></h4>
                    <p class="description">Orang yang hebat yakni orang yang mampu menaklukkan dirinya sendiri</p>
                </div>

                <div class="col-lg-4 box">
                    <i class="ion-ios-people-outline"></i>
                    <h4 class="title"><a href="">Kepala Desa</a></h4>
                    <p class="description"></p>
                </div>

            </div>
        </div>
    </section><!-- #featured-services -->