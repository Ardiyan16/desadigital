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
                                <h3 class="box-title" style="margin-bottom: 20px;">Edit Pemasukan APB Desa

                                </h3>
                                <div class="box-body">
                                    <form action="<?= site_url('admin/Apbdesa/pemasukaneditan'); ?>" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?php echo $pemasukan->id ?>" />

                                        <div class="form-group">
                                            Jumlah Anggaran<input type="text" class="form-control" value="<?php echo $pemasukan->jumlah_anggaran ?>" name="jumlah_anggaran" placeholder=" Jumlah Anggaran">
                                        </div>
                                        <div class="form-group">
                                            Tahun<input type="text" value="<?php echo $pemasukan->tahun ?>" name="tahun" class="form-control" placeholder="Tahun">
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