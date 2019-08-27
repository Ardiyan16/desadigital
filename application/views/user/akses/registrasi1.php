<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registrasi</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url('assets/bower_components/Ionicons/css/ionicons.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/AdminLTE.min.css'); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/iCheck/square/blue.css'); ?>">
    <link rel="shortcut icon" href="<?= base_url('img/bwi.png'); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>Registrasi</b></a>
        </div>

        <div class="register-box-body">
            <h5 class="login-box-msg">Registrasi pengguna baru</h5>

            <form method="post" action="<?= base_url('user/Registrasi'); ?>">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    <?php echo form_error('nama_lengkap', '<small class="text-danger-pl-3">', '</small>'); ?>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                    <span class="fa fa-location-arrow form-control-feedback"></span>
                    <?php echo form_error('tampat_lahir', '<small class="text-danger-pl-3">', '</small>'); ?>
                </div>
                <div class="form-group has-feedback">
                    <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                    <span class="fa fa-calendar form-control-feedback"></span>
                    <?php echo form_error('tanggal_lahir', '<small class="text-danger-pl-3">', '</small>'); ?>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                    <span class="glyphicon glyphicon-home form-control-feedback"></span>
                    <?php echo form_error('alamat', '<small class="text-danger-pl-3">', '</small>'); ?>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="no_telepon" placeholder="No Telepon">
                    <span class="fa fa-phone form-control-feedback"></span>
                    <?php echo form_error('no_telepon', '<small class="text-danger-pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <select class="form-control" name="jenis_kelamin">
                        <option>jenis kelamin</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" name="status">
                        <option>Status</option>
                        <option value="kawin">Kawin</option>
                        <option value="belumkawin">Belum Kawin</option>
                    </select>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password1" placeholder="Password" required>
                    <span class="fa fa-key form-control-feedback"></span>
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password2" placeholder="Konfirmasi Password" required>
                    <span class="fa fa-key form-control-feedback"></span>
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary">Registrasi</button>
            </form>
            <br />
            <a href="Login" class="text-center">Sudah memiliki akun ?</a>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery 3 -->
    <script src="<?= base_url('assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- iCheck -->
    <script src="<?= base_url('assets/plugins/iCheck/icheck.min.js'); ?>"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
</body>

</html>