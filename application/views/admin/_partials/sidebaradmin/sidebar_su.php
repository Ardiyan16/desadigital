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
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Welcome Superuser</li>

            <!-- ---------------------------------------------BATAS EDIT ATAS SIDEBAR ------------------------------->
            <li class="active treeview menu-open">
                <a href="#">
                    <i class="fa fa-table "></i> <span>Data Admin</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('admin/register/') ?>"><i class="fa fa-table "></i>List Admin</a></li>
                    <li><a href="<?php echo site_url('admin/register/add') ?>"><i class="fa fa-pencil-square-o"></i>Tambah Admin</a></li>
                </ul>
            </li>



            <!-- ---------------------------------------------BATAS EDIT BAWAH SIDEBAR ------------------------------->

    </section>
    <!-- /.sidebar -->
</aside>