<?php $this->load->view("user/_partial/head.php"); ?>
<section class="Berita">
    <div class="container">
        <h3 class="mt-4">Berita Desa</h3>

        <div class="row">
            <div class="col-md-7">
                <?php foreach ($berita as $ber) : ?>
                    <article>
                        <div class="article-img">
                            <a href="<?php echo site_url('user/Menu/fpberita/' . $ber->id_berita) ?>">
                                <img src="<?php echo base_url('assets/img/foto_berita/' . $ber->foto) ?>" height="200" width="300">
                            </a>
                        </div>
                        <div class="article-body">
                            <ul class="article-info">
                                <li class="article-category"><a href="#" name="kategori">berita</a></li>
                            </ul>
                            <h5 class="article-title"><a href="<?php echo site_url('user/Menu/fpberita/' . $ber->id_berita) ?>" name="judulberita"><?= $ber->judul_berita ?></a></h5>
                            <ul class="article-meta">
                                <li><i class="fa fa-clock-o" name="tanggalberita"><?= $ber->tanggal ?></i></li>
                            </ul>
                            <p class="desber" name="deskripsiberita"><?= substr($ber->isi_berita, 0, 300); ?><a href="">
                                    baca selengkapnya</a></p>
                        </div>
                    </article>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view("user/_partial/foot.php"); ?>