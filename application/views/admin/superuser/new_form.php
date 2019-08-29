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
                                    <a href="<?= base_url('user/Login'); ?>" class="btn btn-danger">Log out</a>
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
                    <a href="Dashboard">
                        <i class="fa fa-dashboard"></i> <span>Data Admin</span>
                        <span class="pull-right-container">
                            <i class="glyphicon glyphicon-dashboard"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('admin/Register'); ?>">
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