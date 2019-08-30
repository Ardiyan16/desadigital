<?php $this->load->view("user/_partial/atas.php"); ?>

<section class="Berita">
    <div class="container">
        <h3 class="mt-4">Berita Desa</h3>

        <div class="row">
            <div class="col-md-7">
                <?php foreach ($event as $ev) : ?>
                    <article>
                        <div class="article-img">
                            <a href="<?php echo site_url('user/Homeuser/fpeventuser/' . $ev->id_event) ?>">
                                <img src="<?php echo base_url('assets/img/foto_event/' . $ev->foto) ?>" height="200" width="300">
                            </a>
                        </div>
                        <div class="article-body">
                            <ul class="article-info">
                                <li class="article-category"><a href="#" name="kategori">berita</a></li>
                            </ul>
                            <h5 class="article-title"><a href="<?php echo site_url('user/Homeuser/fpeventuser/' . $ev->id_event) ?>" name="judulberita"><?= $ev->judul_event ?></a></h5>
                            <ul class="article-meta">
                                <li><i class="fa fa-clock-o" name="tanggalberita"> <?= $ev->tanggal_mulai ?></i></li>sampai<li><i class="fa fa-clock-o" name="tanggalberita"> <?= $ev->tanggal_selesai ?></i></li>

                            </ul>
                            <p class="desber" name="deskripsiberita"><?= substr($ev->isi_event, 0, 300); ?><a href="">
                                    baca selengkapnya</a></p>
                        </div>
                    </article>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view("user/_partial/bawah.php"); ?>