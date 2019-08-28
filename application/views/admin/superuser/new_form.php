<div class="content-wrapper">
    <section class="content">
        <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Tambah Data Admin</h3>
                    </div>
                    <div class="box-body">
                        <form action="<?php base_url('admin/registrasi/add') ?>" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input class="form-control <?php echo form_error('nama_lengkap') ? 'is-invalid' : '' ?>" type="text" name="nama_lengkap" placeholder="Nama Lengkap" maxlength="64" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama_lengkap') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input class="form-control <?php echo form_error('tempat_lahir') ? 'is-invalid' : '' ?>" type="text" name="tempat_lahir" placeholder="tempat lahir" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('tempat_lahir') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input class="form-control <?php echo form_error('tanggal_lahir') ? 'is-invalid' : '' ?>" type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('tanggal_lahir') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" type="text" name="alamat" placeholder="Alamat" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('alamat') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="no_telepon">Nomor Telp</label>
                                <input class="form-control <?php echo form_error('no_telepon') ? 'is-invalid' : '' ?>" type="text" name="no_telepon" placeholder="no_telepon " maxlength="13" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_telepon') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <input class="form-control <?php echo form_error('jenis_kelamin') ? 'is-invalid' : '' ?>" type="text" name="jenis_kelamin" placeholder="jenis_kelamin" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('jenis_kelamin') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <input class="form-control <?php echo form_error('status') ? 'is-invalid' : '' ?>" type="text" name="status" placeholder="status" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('status') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" type="text" name="email" placeholder="Email" maxlength="64" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('email') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>" type="text" name="username" placeholder="Email" maxlength="64" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('username') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" type="text" name="password" placeholder="Password" maxlength="64" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('password') ?>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="foto"></label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="" class="img-thumbnail">
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="foto" name="foto">
                                                <label class="custom-file-label" for="foto">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>




<?php $this->load->view("admin/_partials/footer/footer.php"); ?>
</div>

<?php $this->load->view("admin/_partials/footer/js.php"); ?>