<nav class="sidebar sidebar-offcanvas" id="sidebar">
	<ul class="nav">
		<li class="nav-item">
			<a class="nav-link" href="<?= base_url('Manager/cDashboard') ?>">
				<i class="mdi mdi-grid-large menu-icon"></i>
				<span class="menu-title">Dashboard</span>
			</a>
		</li>
		<li class="nav-item nav-category">KELOLA DATA KRITERIA</li>
		<li class="nav-item">
			<a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
				<i class="menu-icon mdi mdi-floor-plan"></i>
				<span class="menu-title">Kriteria</span>
				<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="ui-basic">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"> <a class="nav-link" href="<?= base_url('Manager/cAbsensi') ?>">Absensi</a></li>
					<li class="nav-item"> <a class="nav-link" href="<?= base_url('Manager/cKualitas') ?>">Kualitas</a></li>
					<li class="nav-item"> <a class="nav-link" href="<?= base_url('Manager/cMasaKerja') ?>">Masa Kerja</a></li>
					<li class="nav-item"> <a class="nav-link" href="<?= base_url('Manager/cKepribadian') ?>">Kepribadian</a></li>
				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?= base_url('Manager/cAnalisis') ?>">
				<i class="menu-icon mdi mdi-chart-pie"></i>
				<span class="menu-title">Analisis</span>

			</a>

		</li>
	</ul>
</nav>