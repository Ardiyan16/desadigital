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
                    <div class="link" style="margin-top: 20px; margin-left: 12px; margin-bottom: 10px;">
                        <a href="<?= site_url(''); ?>" class="btn btn-primary">Data APB Desa</a>
                    </div>
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3><?= $this->session->flashdata('error'); ?></h3>
                                <h3><?= $this->session->flashdata('success'); ?></h3>
                                <h3 class="box-title" style="margin-bottom: 20px;">Tambah Data APB Desa
                                    <small>Tambahkan APB Desa</small>
                                </h3>
                                <div class="box-body">
                                    <form action="<?= site_url('admin/Apbdesa/add'); ?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            Kode APB Desa<input type="text" class="form-control" name="kodeapbd" placeholder="Kode APB Desa...">
                                        </div>
                                        <div class="form-group">
                                            Alokasi Dana<input type="text" class="form-control" name="alokasi_dana" placeholder="Alokasi Dana...">
                                        </div>
                                        <div class="form-group">
                                            Aanggaran Dana<input type="text" name="anggaran_dana" class="form-control" placeholder="Anggaran Dana...">
                                        </div>
                                        <div class="form-group">
                                            Biaya Alokasi<input type="text" class="form-control" name="biaya_alokasi" placeholder="Biaya Alokasi...">
                                        </div>
                                        <div class="form-group">
                                            Sisa Alokasi<input type="text" class="form-control" name="sisa_alokasi" placeholder="Sisa Alokasi...">
                                        </div>
                                        <div class="form-group">
                                            Petugas Alokasi<input type="text" class="form-control" name="petugas_alokasi" placeholder="Petugas Alokasi...">
                                        </div>
                                        <div class="form-group">
                                            Foto Alokasi<input type="text" class="form-control" name="foto_alokasi" placeholder="Foto...">
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