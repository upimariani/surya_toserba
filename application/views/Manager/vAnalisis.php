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
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
							Tambah Data Analisis
						</button>
						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<form action="<?= base_url('Manager/cAnalisis/create') ?>" method="POST" class="forms-sample">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Masukkan Data Nama Karyawan</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<div class="form-group">
												<label for="exampleInputUsername1">Nama Karyawan</label>
												<select name="nik" class="form-control">
													<option>---Pilih Nilai Absensi Karyawan---</option>
													<?php
													foreach ($karyawan as $key => $value) {
														if ($value->stat_analisis != '1') {

													?>
															<option value="<?= $value->nik ?>"><?= $value->nama_karyawan ?> | Divisi : <?= $value->divisi ?></option>
													<?php
														}
													}
													?>
												</select>
											</div>
											<hr>
											<div class="form-group">
												<label for="exampleInputEmail1">Nilai Absensi</label>
												<select name="absensi" class="form-control">
													<option>---Pilih Nilai Absensi Karyawan---</option>
													<?php
													foreach ($kriteria['absensi'] as $key => $value) {
													?>
														<option value="<?= $value->id_absensi ?>"><?= $value->range_absensi ?> | <?= $value->nilai_absensi ?></option>
													<?php
													}
													?>
												</select>
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Nilai Kepribadian</label>
												<select name="kepribadian" class="form-control">
													<option>---Pilih Nilai Kepribadian Karyawan---</option>
													<?php
													foreach ($kriteria['kepribadian'] as $key => $value) {
													?>
														<option value="<?= $value->id_kepribadian ?>"><?= $value->range_kepribadian ?> | <?= $value->nilai_kepribadian ?></option>
													<?php
													}
													?>
												</select>
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Nilai Kualitas</label>
												<select name="kualitas" class="form-control">
													<option>---Pilih Nilai Kualitas Karyawan---</option>
													<?php
													foreach ($kriteria['kualitas'] as $key => $value) {
													?>
														<option value="<?= $value->id_kualitas ?>"><?= $value->range_kualitas ?> | <?= $value->nilai_kualitas ?></option>
													<?php
													}
													?>
												</select>
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Nilai Masa Kerja</label>
												<select name="masa_kerja" class="form-control">
													<option>---Pilih Nilai Masa Kerja Karyawan---</option>
													<?php
													foreach ($kriteria['masa_kerja'] as $key => $value) {
													?>
														<option value="<?= $value->id_masa_kerja ?>"><?= $value->range_masa_kerja ?> | <?= $value->nilai_masa_kerja ?></option>
													<?php
													}
													?>
												</select>
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