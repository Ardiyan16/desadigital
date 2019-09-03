<?php $this->load->view("user/_partial/atas.php"); ?>

<section class="Berita">
    <div class="container">
        <h3 class="mt-4">Data penggunaan APB Desa</h3>

        <div class="row">
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Kode APBDesa</th>
                            <th>Alokasi Anggaran</th>
                            <th>anggaran dana</th>
                            <th>biaya alokasi</th>
                            <th>sisa alokasi</th>
                            <th>petugas alokasi</th>
                            <th>Foto alokasi</th>
                        </tr>
                    </thead>
                    <tbody <?php foreach ($apbd as $a) : ?> <tr>
                        <th><?= $a->kodeapbd ?></th>
                        <th><?= $a->alokasi_dana ?></th>
                        <th><?= $a->anggaran_dana ?></th>
                        <th><?= $a->biaya_alokasi ?></th>
                        <th><?= $a->sisa_alokasi ?></th>
                        <th><?= $a->petugas_alokasi ?></th>
                        <td>
                            <img src="<?php echo base_url('assets/img/' . $a->foto_alokasi) ?>" width="64" />
                        </td>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <br />
            <br />
        </div>
        <h3 class="mt-6" style="margin-top: 100px;">Kritik, Saran, dan Masukan dalam pembangunan desa</h3>
        <form action="<?= site_url(''); ?>" method="post" enctype="multipart/form-data">
            <h3><?= $this->session->flashdata('success'); ?></h3>
            <h4><?= $this->session->flashdata('success2'); ?></h4>
            <div class="form-group">
                <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK..." />
                <div class="validation"></div>
            </div>
            <div class="form-group">
                <textarea type="text" name="ksdm" class="form-control" id="nik" placeholder="Kritik, Saran dan Masukan..."></textarea>
                <div class="validation"></div>
            </div>
            <button type="submit" value="save" class="btn btn-primary mb-5">Kirim</button>
        </form>
    </div>
</section>


<?php $this->load->view("user/_partial/bawah.php"); ?>