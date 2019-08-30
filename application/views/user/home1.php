<?php $this->load->view("user/_partial/atas.php"); ?>
<section id="about">
    <div class="container">

        <header class="section-header">
            <h3>Tentang</h3>
            <p>Web ini berisikan tentang sistem informasi untuk warga desa sehingga warga desa mudah dalam menerima
                informasi dari pihak pemerintahan desa serta mempermudah dalam pendaftaran kewargaan
            </p>
        </header>

        <div class="row about-cols">

            <div class="col-md-4 wow fadeInUp">
                <div class="about-col">
                    <?php foreach ($event as $ev) : ?>
                        <div class="img">
                            <img src="<?php echo base_url('assets/img/foto_event/' . $ev->foto) ?>" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-book-outline"></i></div>

                        </div>
                        <h2 class="title"><a href="<?php echo site_url('user/Homeuser/fpeventuser/' . $ev->id_event) ?>">Event</a></h2>
                        <p>
                            <?= substr($ev->isi_event, 0, 300); ?>
                        </p>
                </div>
            <?php endforeach; ?>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="about-col">
                    <?php foreach ($berita as $ber) : ?>
                        <div class="img">
                            <img src="<?php echo base_url('assets/img/foto_berita/' . $ber->foto) ?>" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-list-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="<?php echo site_url('user/Homeuser/fpberitauser/' . $ber->id_berita) ?>">Berita</a></h2>
                        <p>
                            <?= substr($ber->isi_berita, 0, 300); ?>
                        </p>
                </div>
            <?php endforeach; ?>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="about-col">
                    <?php foreach ($wisata as $wis) : ?>
                        <div class="img">
                            <img src="<?php echo base_url('assets/img/foto_wisata/' . $wis->foto) ?>" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="<?php echo site_url('user/Homeuser/fpwisatauser/' . $wis->id_wisata) ?>"> wisata</a></h2>
                        <p>
                            <?= substr($wis->deskripsi, 0, 300); ?>
                        </p>
                </div>
            </div>
        <?php endforeach; ?>
        </div>

    </div>
</section><!-- #about -->

<section id="pelayanan" style="margin-bottom: 20px;">
    <div class="container">

        <header class="section-header">
            <h3>Pelayanan</h3>
            <p>Pegawai kami akan melayani anda dengan sepenuh hati dan silahkan komplain jika terjadi permasalahan terhadap
                pelayanan dari kepegawaian kami
            </p>
        </header>
        <div class="row">

            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                <h4 class="title"><a href="">Pendaftaran Perpajakan</a></h4>
                <p class="description">menu ini digunakan untuk pengguna untuk mengetahui info nilai perpajakan yang harus di bayarkan</p>
            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
                <h4 class="title"><a href="">Permintaan surat</a></h4>
                <p class="description">menu ini di gunakan pengguna untuk meminta surat kepada pemerintah desa seperti surat rekomendasi,dll</p>
            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                <div class="icon"><i class="ion-ios-paper-outline"></i></div>
                <h4 class="title"><a href="">Info penerimaan bantuan desa</a></h4>
                <p class="description">menu ini di gunakan untuk mengetahui data warga miskin yang menerima bantuan desa</p>
            </div>
        </div>
    </div>
</section>

<section id="portfolio" class="section-bg">
    <div class="container">

        <header class="section-header">
            <h3 class="section-title" style="margin-bootom: 20px;"><a href="">Galeri</a></h3>
        </header>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
                <figure>
                    <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">
                    <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>

                <div class="portfolio-info">
                    <h4><a href="#">App 1</a></h4>
                    <p>App</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view("user/_partial/bawah.php"); ?>