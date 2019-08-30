<?php $this->load->view("user/_partial/head.php"); ?>
<section class="Berita">
    <div class="container">
        <h3 class="mt-4">Wisata Desa</h3>

        <div class="row">
            <div class="col-md-7">
                <?php foreach ($wisata as $wis) : ?>
                    <article>
                        <div class="article-img">
                            <a href="">
                                <img src="<?php echo base_url('assets/img/foto_wisata/' . $wis->foto) ?>" height="200" width="300">
                            </a>
                        </div>
                        <div class="article-body">
                            <ul class="article-info">
                            </ul>
                            <h5 class="article-title"><a href=""><?= $wis->nama_wisata ?></a></h5>
                            <p class="desber" name="deskripsiberita" style="font-family: venada; font-size: 10px;"><?= substr($wis->deskripsi, 0, 300); ?><a href="">
                                    baca selengkapnya</a></p>
                        </div>
                    </article>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>


<?php $this->load->view("user/_partial/foot.php"); ?>