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
                                    <a href="<?= base_url('superuser/Superuser/editprofile'); ?>" class="btn btn-primary">Edit Profile</a>
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
                    <a href="<?= base_url('superuser/Superuser'); ?>">
                        <i class="fa fa-dashboard"></i> <span>Data Admin</span>
                        <span class="pull-right-container">
                            <i class="glyphicon glyphicon-dashboard"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="Superuser/add">
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
        <!-- Content Header (Page header) -->
        <section class="content-header connectedSortable">
            <div class="idp mb-5">
                <h3 class="mb-5">
                    Edit Profile
                </h3>
            </div>
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Silahkan edit data</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?= form_open_multipart('superuser/Superuser/editpp'); ?>
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" value="<?= $pengguna['nama_lengkap']; ?>" placeholder="Enter ...">
                        <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?= $pengguna['alamat']; ?>" placeholder="Enter ...">
                    </div>

                    <!-- textarea -->
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </section>
    </div>


    <?php $this->load->view("admin/_partials/footer/footer.php"); ?>
    </div>

    <?php $this->load->view("admin/_partials/footer/js.php"); ?>
</body>

</html>