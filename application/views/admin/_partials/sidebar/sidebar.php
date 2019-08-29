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
                <a href="Dashboard">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                        <i class="glyphicon glyphicon-dashboard"></i>
                    </span>
                </a>
            </li>
            <li>
                <a href="Datauser">
                    <i class="fa fa-file-text-o"></i> <span>Data User</span>
                    <span class="pull-right-container">
                        <i class="glyphicon glyphicon-list-alt"></i>
                    </span>
                </a>
            </li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-newspaper-o"></i> <span>Berita</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="inputdatasiswa.php"><i class="fa fa-pencil-square-o"></i>Tambah Berita</a></li>
                    <li><a href="tabeldatasiswa.php"><i class="fa fa-table "></i>Data Berita</a></li>
                    <li><a href="tabeldatasiswa.php"><i class="fa fa-edit"></i>Edit Berita</a></li>
                </ul>
            </li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-calendar"></i> <span>Event</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="Event/addevent"><i class="fa fa-pencil-square-o"></i>Tambah Event</a></li>
                    <li><a href="Event"><i class="fa fa-table "></i>Data Event</a></li>
                    <li><a href="Event/editevent"><i class="fa fa-edit"></i>Edit Event</a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>