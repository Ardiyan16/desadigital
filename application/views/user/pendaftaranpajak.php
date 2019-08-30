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
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="nik" class="form-control" id="name" placeholder="NIK (Nomor Induk Kependudukan)..." />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="nama_lengkap" id="email" placeholder="Nama Lengkap..." />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="alamat" id="subject" placeholder="Alamat..." />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="subject" placeholder="Email..." />
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
                    <div class="text-center"><button type="submit">kirim</button></div>
                </form>
            </div>

        </div>
    </section><!-- #contact -->

    <?php $this->load->view("user/_partial/bawah.php"); ?>
