<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view("admin/_partials/head.php"); ?>

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <?php $this->load->view("admin/_partials/topbar/topbar.php") ?>
    <div class="wrapper">
        <?php $this->load->view('admin/_partials/sidebar/sidebar.php'); ?>

        <div class="content-wrapper">
            <section class="content">
                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3><?= $this->session->flashdata('error'); ?></h3>
                                <h3><?= $this->session->flashdata('success'); ?></h3>
                                <h3 class="box-title" style="margin-bottom: 20px;">Edit Data APB Desa

                                </h3>
                                <div class="box-body">
                                    <form action="<?= site_url('admin/Apbdesa/editan'); ?>" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="kodeapbd" value="<?php echo $apbdesa->kodeapbd ?>" />

                                        <div class="form-group">
                                            Alokasi Dana<input type="text" class="form-control" value="<?php echo $apbdesa->alokasi_dana ?>" name="alokasi_dana" placeholder="Alokasi Dana...">
                                        </div>
                                        <div class="form-group">
                                            Aanggaran Dana<input type="text" value="<?php echo $apbdesa->anggaran_dana ?>" name="anggaran_dana" class="form-control" placeholder="Anggaran Dana...">
                                        </div>
                                        <div class="form-group">
                                            Biaya Alokasi<input type="text" value="<?php echo $apbdesa->biaya_alokasi ?>" class="form-control" name="biaya_alokasi" placeholder="Biaya Alokasi...">
                                        </div>
                                        <div class="form-group">
                                            Sisa Alokasi<input type="text" value="<?php echo $apbdesa->sisa_alokasi ?>" class="form-control" name="sisa_alokasi" placeholder="Sisa Alokasi...">
                                        </div>
                                        <div class="form-group">
                                            Petugas Alokasi<input type="text" value="<?php echo $apbdesa->petugas_alokasi ?>" class="form-control" name="petugas_alokasi" placeholder="Petugas Alokasi...">
                                        </div>

                                        <div class="form-group">
                                            foto<input type="file" name="foto" class="form-control">
                                        </div>

                                        <button type="submit" value="save" class="btn btn-primary">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?php $this->load->view("admin/_partials/footer/footer.php"); ?>
    </div>

    <?php $this->load->view("admin/_partials/footer/js.php"); ?>