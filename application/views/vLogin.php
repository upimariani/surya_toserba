<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>LOGIN | SURYA TOSERBA - CILEDUG</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?= base_url('asset/admin/template/') ?>vendors/feather/feather.css">
	<link rel="stylesheet" href="<?= base_url('asset/admin/template/') ?>vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="<?= base_url('asset/admin/template/') ?>vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url('asset/admin/template/') ?>vendors/typicons/typicons.css">
	<link rel="stylesheet" href="<?= base_url('asset/admin/template/') ?>vendors/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="<?= base_url('asset/admin/template/') ?>vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= base_url('asset/admin/template/') ?>css/vertical-layout-light/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?= base_url('asset/admin/template/') ?>images/favicon.png" />
</head>

<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="content-wrapper d-flex align-items-center auth px-0">
				<div class="row w-100 mx-0">
					<div class="col-lg-4 mx-auto">
						<div class="auth-form-light text-left py-5 px-4 px-sm-5">
							<div class="brand-logo">
								<h4>SURYA TOSERBA - CILEDUG</h4>
							</div>
							<h4>Hello! let's get started</h4>
							<h6 class="fw-light">Sign in to continue.</h6>
							<?php
							if ($this->session->userdata('error')) {
							?>
								<div class="alert alert-danger" role="alert">
									<?= $this->session->userdata('error') ?>
								</div>
							<?php
							}
							?>
							<?php
							if ($this->session->userdata('success')) {
							?>
								<div class="alert alert-success" role="alert">
									<?= $this->session->userdata('success') ?>
								</div>
							<?php
							}
							?>
							<form action="<?= base_url('cLogin/login') ?>" method="POST" class="pt-3">
								<div class="form-group">
									<input type="text" name="username" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" required>
								</div>
								<div class="form-group">
									<input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" required>
								</div>
								<div class="mt-3">
									<button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- content-wrapper ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<script src="<?= base_url('asset/admin/template/') ?>vendors/js/vendor.bundle.base.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<script src="<?= base_url('asset/admin/template/') ?>vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="<?= base_url('asset/admin/template/') ?>js/off-canvas.js"></script>
	<script src="<?= base_url('asset/admin/template/') ?>js/hoverable-collapse.js"></script>
	<script src="<?= base_url('asset/admin/template/') ?>js/template.js"></script>
	<script src="<?= base_url('asset/admin/template/') ?>js/settings.js"></script>
	<script src="<?= base_url('asset/admin/template/') ?>js/todolist.js"></script>
	<!-- endinject -->
</body>

</html>