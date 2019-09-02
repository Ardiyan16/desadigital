<?php $this->load->view("user/_partial/atas.php"); ?>

<section id="contact" class="section-bg wow fadeInUp">
    <div class="container">

        <div class="section-header">
            <h3>Permintaan Surat</h3>
            <p>Silahkan isi data surat anda</p>
        </div>

        <div class="form">
            <form action="<?= site_url('user/Surat/prosessurat'); ?>" method="post" enctype="multipart/form-data">
                <h3><?= $this->session->flashdata('success'); ?></h3>
                <h4><?= $this->session->flashdata('success2'); ?></h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK..." />
                        <div class="validation"></div>
                    </div>
                </div>
                <button type="submit" value="save" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</section><!-- #contact -->

<?php $this->load->view("user/_partial/bawah.php"); ?>