<?php $this->load->view("user/_partial/atas.php"); ?>

<section id="contact" class="section-bg wow fadeInUp">
    <div class="container">

        <div class="section-header">
            <h3>Permintaan Surat</h3>
            <p>Silahkan isi data surat anda</p>
        </div>

        <div class="form">
            <form action="<?= site_url('user/Homeuser/pajakadd'); ?>" method="post" enctype="multipart/form-data">
                <h3><?= $this->session->flashdata('success'); ?></h3>
                <h4><?= $this->session->flashdata('success2'); ?></h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" name="nama" class="form-control" id="nik" placeholder="Nama Lengkap..." />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="ttl" id="nama_lengkap" placeholder="Tempat, Tanggal Lahir..." />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="form-group">
                    <select class="form-control" name="jk">
                        <option>Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="pekerjaan" id="alamat" placeholder="Pekerjaan..." />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <select class="form-control" name="agama">
                        <option>Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" name="status">
                        <option>Status Perkawinan</option>
                        <option value="Belum Kawin">Belum Kawin</option>
                        <option value="Sudah Kawin">Sudah Kawin</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="nik" id="email" placeholder="NIK (Nomor Induk Kependudukan)..." />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="alamat" id="email" placeholder="Alamat..." />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <select class="form-control" name="id">
                        <option>Jenis Permohonan</option>
                        <option value="1">Surat Permohonan Domisili</option>
                        <option value="2">Surat Keterangan Tidak Mampu</option>
                    </select>
                </div>
                <button type="submit" value="save" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</section><!-- #contact -->

<?php $this->load->view("user/_partial/bawah.php"); ?>