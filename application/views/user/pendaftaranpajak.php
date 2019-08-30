<?php $this->load->view("user/_partial/atas.php"); ?>

<section id="contact" class="section-bg wow fadeInUp">
    <div class="container">

        <div class="section-header">
            <h3>Pendaftaran Data Diri</h3>
            <p>Silahkan isi data data anda</p>
        </div>

        <div class="row contact-info">

            <div class="col-md-4">
                <div class="contact-address">
                    <i class="ion-ios-location-outline"></i>
                    <h3>Alamat</h3>
                    <address>Isikan alamat anda</address>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-phone">
                    <i class="ion-ios-telephone-outline"></i>
                    <h3>Nomor Telepon</h3>
                    <p><a href="">Isikan nomor telepon dengan valid</a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-email">
                    <i class="ion-ios-email-outline"></i>
                    <h3>Email</h3>
                    <p><a href="">isikan email anda</a></p>
                </div>
            </div>

        </div>

        <div class="form">
            <form action="<?= site_url('user/Homeuser/pajakadd'); ?>" method="post" enctype="multipart/form-data">
                <h3><?= $this->session->flashdata('success'); ?></h3>
                <h4><?= $this->session->flashdata('success2'); ?></h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK (Nomor Induk Kependudukan)..." />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap..." />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat..." />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email..." />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <select class="form-control" name="jenis_pajak">
                        <option>Jenis Pajak</option>
                        <option value="pajak tanah">Pajak Tanah</option>
                        <option value="pajak sawah">Pajak Sawah</option>
                        <option value="pajak rumah">Pajak Rumah</option>
                    </select>
                </div>
                <button type="submit" value="save" class="btn btn-primary">Simpan</button>
            </form>
        </div>

    </div>
</section><!-- #contact -->

<?php $this->load->view("user/_partial/bawah.php"); ?>