<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view("admin/_partials/head.php"); ?>

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>V</b>D</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Vil</b>Dev</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?= $this->session->userdata('username'); ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="" class="img-circle" alt="User Image">
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?= base_url('superuser/Superuser/editpp'); ?>" class="btn btn-primary">Edit Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?= base_url('user/Login/logout'); ?>" class="btn btn-danger">Log out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                </ul>
            </div>
        </nav>
    </header>

    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?= $this->session->userdata('username'); ?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Menu</li>
                <li>
                    <a href="<?= site_url('superuser/Superuser'); ?>">
                        <i class="fa fa-dashboard"></i> <span>Data Admin</span>
                        <span class="pull-right-container">
                            <i class="glyphicon glyphicon-dashboard"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('admin/Register/add'); ?>">
                        <i class="fa fa-file-text-o"></i> <span>Tambah Admin</span>
                        <span class="pull-right-container">
                            <i class="glyphicon glyphicon-list-alt"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </section>
    </aside>


    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3><?= $this->session->flashdata('message'); ?></h3>
                            <h3 class="box-title">View Tabel Data Admin</h3>
                        </div>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>No Telepon</th>
                                        <th>Alamat</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Status</th>
                                        <th>Email</th>
                                        <th>Foto</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($admin as $admin) : ?>
                                    <tr>
                                        <th><?= $admin->nama_lengkap ?></th>
                                        <th><?= $admin->tempat_lahir ?></th>
                                        <th><?= $admin->tanggal_lahir ?></th>
                                        <th><?= $admin->no_telepon ?></th>
                                        <th><?= $admin->alamat ?></th>
                                        <th><?= $admin->jenis_kelamin ?></th>
                                        <th><?= $admin->status ?></th>
                                        <th><?= $admin->email ?></th>
                                        <td>
                                            <img src="<?php echo base_url('assets/img/foto_profil/' . $admin->foto) ?>" width="64" />
                                        </td>
                                        <th>
                                            <a onclick="deleteConfirm" href="<?php echo site_url('admin/register/delete/' . $admin->id_pengguna) ?>" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
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