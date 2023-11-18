<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Informasi Hasil Analisis Karyawan</h4>
						<?php
						if ($this->session->userdata('success')) {
						?>
							<div class="alert alert-success" role="alert">
								<?= $this->session->userdata('success') ?>
							</div>
						<?php
						}
						?>
						<a href="<?= base_url('Pemilik/cAnalisis/cetak') ?>" class="btn btn-primary">
							Cetak Hasil Analisis
						</a>

						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Nama Karyawan</th>
										<th>Nilai Absensi</th>
										<th>Nilai Kualitas</th>
										<th>Nilai Masa Kerja</th>
										<th>Nilai Kepribadian</th>
										<th>Hasil</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($analisis as $key => $value) {
									?>
										<tr>
											<td><?= $value->nama_karyawan ?></td>
											<td><?= $value->nilai_absensi ?></td>
											<td><?= $value->nilai_kualitas ?></td>
											<td><?= $value->nilai_masa_kerja ?></td>
											<td><?= $value->nilai_kepribadian ?></td>
											<td><?= $value->hasil ?></td>
											<td>
												<a href="<?= base_url('Manager/cAnalisis/delete/' . $value->id_analisis)  ?>" class="btn btn-danger btn-rounded">Hapus</a>
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