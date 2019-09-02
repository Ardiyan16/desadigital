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
                    <li class="menu-has-children"><a href="" style="color: white;"><?= $this->session->userdata('username'); ?> <img class="img-circle ml-3" src="<?= base_url('assets/img/foto_profil/') . $pengguna['foto']; ?>" width="30" height="30"></a>
                        <ul>
                            <li><a href="Homeuser/editprofile">Edit Profile</a></li>
                        </ul>
                    </li>
                </ul>
            </nav> <!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->


    <body onload="window.print();">

        <div bgcolor="white">
            <font face="Arial" color="black">
                <p align="center"> PEMERINTAHAN KABUPATEN BANYUWANGI </p>
            </font>
            <font face="Arial" color="black">
                <p align="center"> KECAMATAN GENTENG</p>
            </font>
            <font face="Arial" color="black">
                <p align="center"> DESA GENTENG KIDUL </p>
            </font>
            <font face="Arial" color="black" size="3">
                <p align="center"> JL. Perjuangan By Pass Sunyaragi Telp.(0231) 123456 Cirebon 45141 </p>
            </font>
            <hr>

            <font face="Arial" color="black" size="5">
                <p align="center"> <u> <b> SURAT KETERANGAN DOMISILI </b></u>
            </font><br>
            <font face="Arial" color="black" size="4"> Nomer: .../SMKN1/2019 </p>
            </font>

            <br />

            <font face="Arial" color="black" size="4">
                <p>
                    Yang bertanda tangan di bawah ini, Ketua Lingkungan RT.01/ RW.05, Kepala Desa Genteng Kulon, Kecamatan Genteng, Kabupaten Banyuwangi, menerangkan bahwa :
                </p>
            </font>
            <font face="Arial" color="black" size="4">
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Bawik Ardiyan, S.Tr.Kom <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;Jabatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Kepala Desa / Lurah Genteng Kulon <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: RT 12 RW 21, Pereng, Genteng Kulon, Genteng, Banyuwangi
                </p>
            </font>
            <font face="Arial" color="black" size="4">
                <p>
                    Menerangkan bahwa :
                </p>
            </font>
            <font face="Arial" color="black" size="4">
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $surat['nama_lengkap'] ?><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;Tempat, Tanggal Lahir &nbsp;&nbsp;: <?php echo $surat['tempat_lahir'] ?>, <?= $surat['tanggal_lahir'] ?><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;Jenis Kelamin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $surat['jenis_kelamin'] ?><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $surat['pekerjaan'] ?><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;Agama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $surat['agama'] ?><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;Status Perkawinan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $surat['status'] ?><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;NIK &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $surat['nik'] ?><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $surat['alamat'] ?><br>
                    </br>
            </font>
            <font face="Arial" color="black" size="4">
                <p>
                    Dengan ini menyatakan bahwa yang besangkutan berdomisili di Desa Genteng Kulon Kecamatan Genteng Kabupaten Banyuwangi
                </p>
            </font>

            <font face="Arial" color="black" size="4">
                <p>
                    Demikian surat keterangan domisili ini kami buat sebagimana perlunya semoga dapat
                    digunakan sebagaimana mestinya. Dan kepada yang berkepentingan agar menjadi maklum.
                </p>
            </font>

            <font face="Arial" color="black" size="4">
                <p>
                    Lendah, <?php echo date('d F Y') ?>;<br>
                    Kepala Desa / Lurah Bumirejo
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                    Bawik Ardiyan, S.Tr.Kom.
                </p>
            </font>


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
            <script>
                window.print();
            </script>

    </body>

</html>