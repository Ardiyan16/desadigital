<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url('assets/img/foto_profil/') . $pengguna['foto']; ?>" class="img-circle" alt="User Image">
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
                <a href="<?= site_url('admin/Dashboard'); ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                        <i class="glyphicon glyphicon-dashboard"></i>
                    </span>
                </a>
            </li>
            <li>
                <a href="<?= site_url('admin/Datauser'); ?>">
                    <i class="fa fa-file-text-o"></i> <span>Data User</span>
                    <span class="pull-right-container">
                        <i class="glyphicon glyphicon-list-alt"></i>
                    </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-newspaper-o"></i> <span>Berita</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('admin/Berita/add') ?>"><i class="fa fa-pencil-square-o"></i>Tambah Berita</a></li>
                    <li><a href="<?php echo site_url('admin/Berita/') ?>"><i class="fa fa-table "></i>Data Berita</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-calendar"></i> <span>Event</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= site_url('admin/Event/'); ?>"><i class="fa fa-pencil-square-o"></i>Tambah Event</a></li>
                    <li><a href="<?= site_url('admin/Event/dataevent'); ?>"><i class="fa fa-table "></i>Data Event</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bus "></i> <span>Wisata</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= site_url('admin/Wisata/add'); ?>"><i class="fa fa-pencil-square-o"></i>Tambah Wisata</a></li>
                    <li><a href="<?= site_url('admin/Wisata/'); ?>"><i class="fa fa-table "></i>Data Wisata</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-calendar"></i> <span>Oleh Oleh</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= site_url('admin/Oleh/add'); ?>"><i class="fa fa-pencil-square-o"></i>Tambah Oleh Oleh</a></li>
                    <li><a href="<?= site_url('admin/Oleh/'); ?>"><i class="fa fa-table "></i>Data Oleh Oleh</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-calendar"></i> <span>Kerajinan Desa</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= site_url('admin/Kerajinan/add'); ?>"><i class="fa fa-pencil-square-o"></i>Tambah Kerajinan Desa</a></li>
                    <li><a href="<?= site_url('admin/Kerajinan/'); ?>"><i class="fa fa-table "></i>Data Kerajinan Desa</a></li>

                </ul>
            </li>
        </ul>
    </section>
</aside>