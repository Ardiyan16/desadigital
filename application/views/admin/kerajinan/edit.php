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
                                <h3 class="box-title" style="margin-bottom: 20px;">Edit Kerajinan

                                </h3>
                                <div class="box-body">
                                    <form action="<?= site_url('admin/Kerajinan/editan'); ?>" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?php echo $kerajinan->id ?>" />
                                        <div class="form-group">
                                            Nama Kerajinan<input type="text" class="form-control" value="<?php echo $kerajinan->nama_kerajinan ?>" name="nama_kerajinan" placeholder="Nama  Kerajinan...">
                                        </div>

                                        <div class="form-group">
                                            Tempat Pembuatan<input type="text" class="form-control" value="<?php echo $kerajinan->lokasi_pembuatan ?>" name="lokasi_pembuatan" placeholder="Subject">
                                        </div>
                                        <div class="form-group">
                                            Harga<input type="text" class="form-control" value="<?php echo $kerajinan->harga ?>" name="harga" placeholder="Subject">
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