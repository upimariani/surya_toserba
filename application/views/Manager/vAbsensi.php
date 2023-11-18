<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Informasi Kriteria Absensi</h4>
						<?php
						if ($this->session->userdata('success')) {
						?>
							<div class="alert alert-success" role="alert">
								<?= $this->session->userdata('success') ?>
							</div>
						<?php
						}
						?>
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
							Tambah Data Kriteria Absensi
						</button>
						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<form action="<?= base_url('Manager/cAbsensi/create') ?>" method="POST" class="forms-sample">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Masukkan Data Kriteria Absensi</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<div class="form-group">
												<label for="exampleInputUsername1">Range Absensi</label>
												<input type="text" name="range" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Range Absensi" required>
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Nilai Absensi</label>
												<input type="text" name="nilai" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nilai Absensi" required>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Range Absensi</th>
										<th>Nilai Absensi</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($absensi as $key => $value) {
									?>
										<tr>
											<td><?= $value->range_absensi ?></td>
											<td><?= $value->nilai_absensi ?></td>
											<td>
												<button data-bs-toggle="modal" data-bs-target="#update<?= $value->id_absensi ?>" class="btn btn-warning btn-rounded">Update</button>
												<a class="btn btn-danger btn-rounded" href="<?= base_url('Manager/cAbsensi/delete/' . $value->id_absensi) ?>">Hapus</a>
											</td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
	foreach ($absensi as $key => $value) {
	?>
		<!-- Modal -->
		<div class="modal fade" id="update<?= $value->id_absensi ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<form action="<?= base_url('Manager/cAbsensi/update/' . $value->id_absensi) ?>" method="POST" class="forms-sample">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Update Data Kriteria Absensi</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label for="exampleInputUsername1">Range Absensi</label>
								<input type="text" name="range" value="<?= $value->range_absensi ?>" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Range Absensi" required>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Nilai Absensi</label>
								<input type="text" name="nilai" value="<?= $value->nilai_absensi ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nilai Absensi" required>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	<?php
	}
	?>