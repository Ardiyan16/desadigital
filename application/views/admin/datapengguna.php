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
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">View Tabel Data User</h3>
                            </div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama Lengkap</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Status</th>
                                            <th>Email</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($user as $pengguna) : ?>
                                            <tr>
                                                <th><?= $pengguna->nama_lengkap ?></th>
                                                <th><?= $pengguna->tempat_lahir ?></th>
                                                <th><?= $pengguna->tanggal_lahir ?></th>
                                                <th><?= $pengguna->alamat ?></th>
                                                <th><?= $pengguna->jenis_kelamin ?></th>
                                                <th><?= $pengguna->status ?></th>
                                                <th><?= $pengguna->email ?></th>
                                                <th>
                                                    <a onclick="deleteConfirm" href="<?php echo site_url('admin/Datapengguna/hapus/' . $pengguna->nik) ?>" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>

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