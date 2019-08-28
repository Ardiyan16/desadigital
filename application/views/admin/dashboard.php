<!DOCTYPE html>
<html lang="en">

<head>

	<?php $this->load->view("admin/_partials/head.php"); ?>

</head>

<body class="hold-transition skin-blue sidebar-mini">
	<?php $this->load->view("admin/_partials/topbar/topbar.php") ?>
	<div class="wrapper">
		<?php $this->load->view('admin/_partials/sidebar/sidebar.php'); ?>

		<div class="content-wrapper">
			<section class="section">
				<div class="container">
					<div class="dashboard mt-5">
						<h1>Dashboard admin</h1>
					</div>
					<div class="col-lg-3 col-xs-6" style="margin-top: 20px;">
						<!-- small box -->
						<div class="small-box bg-yellow">
							<div class="inner">
								<h3><?= $jumlah ?></h3>

								<p>jumlah data user</p>
							</div>
							<div class="icon">
								<i class="ion ion-person"></i>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>






		<?php $this->load->view("admin/_partials/footer/footer.php"); ?>
	</div>

	<?php $this->load->view("admin/_partials/footer/js.php"); ?>