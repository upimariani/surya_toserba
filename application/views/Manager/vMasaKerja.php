<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Informasi Kriteria Masa Kerja</h4>
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
							Tambah Data Kriteria Masa Kerja
						</button>
						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<form action="<?= base_url('Manager/cMasaKerja/create') ?>" method="POST" class="forms-sample">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Masukkan Data Kriteria Masa Kerja</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<div class="form-group">
												<label for="exampleInputUsername1">Range Masa Kerja</label>
												<input type="text" name="range" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Range Masa Kerja" required>
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Nilai Masa Kerja</label>
												<input type="text" name="nilai" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nilai Masa Kerja" required>
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
										<th>Range Masa Kerja</th>
										<th>Nilai Masa Kerja</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($masa_kerja as $key => $value) {
									?>
										<tr>
											<td><?= $value->range_masa_kerja ?></td>
											<td><?= $value->nilai_masa_kerja ?></td>
											<td>
												<button data-bs-toggle="modal" data-bs-target="#update<?= $value->id_masa_kerja ?>" class="btn btn-warning btn-rounded">Update</button>
												<a class="btn btn-danger btn-rounded" href="<?= base_url('Manager/cMasaKerja/delete/' . $value->id_masa_kerja) ?>">Hapus</a>
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
	foreach ($masa_kerja as $key => $value) {
	?>
		<!-- Modal -->
		<div class="modal fade" id="update<?= $value->id_masa_kerja ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<form action="<?= base_url('Manager/cMasaKerja/update/' . $value->id_masa_kerja) ?>" method="POST" class="forms-sample">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Update Data Kriteria Masa Kerja</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label for="exampleInputUsername1">Range Masa Kerja</label>
								<input type="text" name="range" value="<?= $value->range_masa_kerja ?>" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Range Masa Kerja" required>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Nilai Masa Kerja</label>
								<input type="text" name="nilai" value="<?= $value->nilai_masa_kerja ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nilai Masa Kerja" required>
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