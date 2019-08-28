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
                        <img src="<?= base_url('assets/img/foto_profil/') . $pengguna['foto']; ?>" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?= $this->session->userdata('username'); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?= base_url('assets/img/foto_profil/') . $pengguna['foto']; ?>" class="img-circle" alt="User Image">
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?= base_url('admin/Dashboard/editprofile'); ?>" class="btn btn-primary">Edit Profile</a>
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