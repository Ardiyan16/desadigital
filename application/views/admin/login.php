<!DOCTYPE html>
<html lang="en">

<head>

	<?php $this->load->view("admin/_partials/sb_head.php") ?>
	<style>
		body {

			background-image: linear-gradient(to right, red, yellow);

		}
	</style>
</head>




<body>
	<div class="container">

		<!-- Outer Row -->
		<div class="row justify-content-center">

			<div class="col-lg-5">

				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col-lg">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">Silahkan Login</h1>
									</div>
									<?= $this->session->flashdata('message'); ?>
									<form action="<?php echo base_url('admin/Login/aksi_login'); ?>" method="post">
										<div class="form-group">
											<input type="username" name="username" class="form-control form-control-user" id="exampleInputUsername" placeholder="Username">
										</div>
										<div class="form-group">
											<input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
										</div>

										<td><input type="submit" class="btn btn-primary btn-user btn-block" value="Login"></td>


									</form>
									<hr>
									<div class="text-center">
										<a class="small" href="<?php echo site_url('forgot-password') ?>">Forgot Password?</a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>

		</div>
		<!-- JavaScript-->
		<?php $this->load->view("admin/_partials/sb_js.php") ?>

</body>

</html>