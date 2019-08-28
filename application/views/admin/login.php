<!DOCTYPE html>
<html lang="en">

<head>

	<?php $this->load->view("admin/_partials/head.php") ?>

</head>






<body class="hold-transition login-page">
	<div class="login-box">
		<?= $this->session->flashdata('message'); ?>
		<div class="login-logo">
			<a href="../../index2.html"><b>Login</b></a>
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg">Silahkan Login untuk mendapatkan akses</p>

			<form action="<?= base_url('admin/Loginadmin/aksi_login'); ?>" method="post">
				<div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="email" name="email" value="<?= set_value('email'); ?>">
					<span class="fa fa-id-card form-control-feedback"></span>
					<?php echo form_error('username', '<small class="text-danger-pl-3">', '</small>'); ?>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" placeholder="Password" name="password">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					<?php echo form_error('password', '<small class="text-danger-pl-3">', '</small>', '<br/>'); ?>

				</div>

				<div class="row">
					<!-- /.col -->
					<div class="col-xs-4-center">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
					</div>
					<!-- /.col -->
				</div>
			</form>
			<div class="text-center">
				<a class="small" href="<?= base_url('admin/Loginadmin/Forgotpassword'); ?>">Lupa password?</a>
			</div>


		</div>
		<!-- /.login-box-body -->
	</div>
	<!-- JavaScript-->
	<?php $this->load->view("admin/_partials/footer/js.php") ?>

</body>

</html>