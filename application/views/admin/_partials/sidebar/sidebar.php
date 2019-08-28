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
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-file-text-o"></i> <span>Data Siswa</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="inputdatasiswa.php"><i class="fa fa-file-text-o"></i> Input Data Siswa</a></li>
                    <li><a href="tabeldatasiswa.php"><i class="fa fa-tv"></i> View Data Siswa</a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>