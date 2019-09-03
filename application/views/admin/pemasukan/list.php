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
                        <a href="<?= site_url('admin/Apbdesa/pemasukanadd'); ?>" class="btn btn-primary">Tambah Pemasukan Apbdesa</a>
                    </div>
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3><?= $this->session->flashdata('success'); ?></h3>
                                <h3 class="box-title">View Tabel Data Berita</h3>
                            </div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>

                                            <th>Jumlah Anggaran</th>
                                            <th>Tahun</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($pemasukan as $a) : ?>
                                            <tr>

                                                <th>Rp. <?= $a->jumlah_anggaran ?>,-</th>
                                                <th><?= $a->tahun ?></th>
                                                <th>
                                                    <a href="<?php echo site_url('admin/Apbdesa/pemasukanedit/' . $a->id) ?>" class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
                                                    <a onclick="deleteConfirm" href="<?php echo site_url('admin/Apbdesa/pemasukandelete/' . $a->id) ?>" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
                                                </th>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </section>
        </div>




        <?php $this->load->view("admin/_partials/footer/footer.php"); ?>
    </div>

    <?php $this->load->view("admin/_partials/footer/js.php"); ?>