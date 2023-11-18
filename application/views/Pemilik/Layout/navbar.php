<body>
	<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
		<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
			<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
				<div class="me-3">
					<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
						<span class="icon-menu"></span>
					</button>
				</div>
				<div>
					<a class="navbar-brand brand-logo" href="index.html">
						SURYA
					</a>
				</div>
			</div>
			<div class="navbar-menu-wrapper d-flex align-items-top">
				<ul class="navbar-nav">
					<li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
						<h1 class="welcome-text">Selamat Datang, <span class="text-black fw-bold">Pemilik</span></h1>
						<h3 class="welcome-sub-text">Semangat untuk menjalani aktivitas hari ini</h3>

					</li>
				</ul>
				<ul class="navbar-nav ms-auto">

					<li class="nav-item dropdown d-none d-lg-block user-dropdown">
						<a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
							<img class="img-xs rounded-circle" src="<?= base_url('asset/admin/template/') ?>images/faces/face8.jpg" alt="Profile image"> </a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
							<div class="dropdown-header text-center">
								<img class="img-md rounded-circle" src="<?= base_url('asset/admin/template/') ?>images/faces/face8.jpg" alt="Profile image">
								<p class="mb-1 mt-3 font-weight-semibold">Surya Toserba - Ciledug</p>
								<p class="fw-light text-muted mb-0">suryatoserba@gmail.com</p>
							</div>
							<a href="<?= base_url('cLogin/logout') ?>" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
						</div>
					</li>
				</ul>
				<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
					<span class="mdi mdi-menu"></span>
				</button>
			</div>
		</nav>
		<div class="container-fluid page-body-wrapper">