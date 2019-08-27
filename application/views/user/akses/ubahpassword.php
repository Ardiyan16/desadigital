<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ganti password</title>
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

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Ganti Password</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <h5><?= $this->session->flashdata('message'); ?></h5>
            <h5><?= $this->session->userdata('ganti_email'); ?></h5>
            <p class="login-box-msg">Silahkan isi data</p>
            <form action="<?= base_url('user/Registrasi/ubahpassword'); ?>" method="post">
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password1">
                    <span class="fa fa-id-card form-control-feedback"></span>
                    <?php echo form_error('password1', '<small class="text-danger-pl-3">', '</small>'); ?>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Konfirmasi Password" name="password2">
                    <span class="fa fa-id-card form-control-feedback"></span>
                    <?php echo form_error('password2', '<small class="text-danger-pl-3">', '</small>'); ?>
                </div>

                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-4-center">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Ubah Password</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        </div>
        <!-- /.login-box-body -->
    </div>
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