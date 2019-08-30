<?php $this->load->view("user/_partial/head.php"); ?>

<section id="portfolio" class="section-bg">
    <div class="container">

        <header class="section-header">
            <h3 class="section-title">Oleh Oleh Desa</h3>
        </header>
        <div class="row">
            <div class="col-lg-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                </ul>
            </div>
        </div>
        <div class="row portfolio-container">
            <?php foreach ($kerajinan as $ker) : ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="<?php echo base_url('assets/img/foto_kerajinan/' . $ker->foto) ?>" class="img-fluid" alt="">
                            <a href="<?php echo base_url('assets/img/foto_kerajinan/' . $ker->foto) ?>" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#"><?= $ker->nama ?></a></h4>
                            <p><?= $ker->harga ?></p>
                            <p><?= $ker->lokasi_pembuatan ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<?php $this->load->view("user/_partial/foot.php"); ?>