<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Informasi Karyawan</h4>
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
							Tambah Data Karyawan
						</button>
						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<form action="<?= base_url('Admin/cKaryawan/create') ?>" method="POST" class="forms-sample">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Masukkan Data Karyawan</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<div class="form-group">
												<label for="exampleInputUsername1">NIK</label>
												<input type="number" name="nik" class="form-control" id="exampleInputUsername1" placeholder="Masukkan NIK" required>
											</div>
											<div class="form-group">
												<label for="exampleInputUsername1">Nama Karyawan</label>
												<input type="text" name="nama" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Nama Karyawan" required>
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Jenis Kelamin</label>
												<select name="jk" class="form-control" required>
													<option value="">---Pilih Jenis Kelamin---</option>
													<option value="Perempuan">Perempuan</option>
													<option value="Laki - Laki">Laki - Laki</option>
												</select>
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">No Telepon</label>
												<input type="text" name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="Masukkan No Telepon" required>
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Alamat</label>
												<input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Alamat" required>
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Divisi</label>
												<input type="text" name="divisi" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Divisi" required>
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Jabatan</label>
												<input type="text" name="jabatan" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Jabatan" required>
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
										<th>NIK</th>
										<th>Nama Karyawan</th>
										<th>Jenis Kelamin</th>
										<th>No Telepon</th>
										<th>Alamat</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($karyawan as $key => $value) {
									?>
										<tr>
											<td><?= $value->nik ?></td>
											<td><strong><?= $value->nama_karyawan ?></strong><br>
												Divisi : <?= $value->divisi ?><br>
												Jabatan : <?= $value->jabatan ?></td>
											<td><?= $value->jk ?></td>
											<td><?= $value->no_hp_karyawan ?></td>
											<td><?= $value->alamat_karyawan ?></td>
											<td>
												<button data-bs-toggle="modal" data-bs-target="#update<?= $value->nik ?>" class="btn btn-warning btn-rounded">Update</button>
												<a class="btn btn-danger btn-rounded" href="<?= base_url('Admin/cKaryawan/delete/' . $value->nik) ?>">Hapus</a>
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
	foreach ($karyawan as $key => $value) {
	?>
		<div class="modal fade" id="update<?= $value->nik ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<form action="<?= base_url('Admin/cKaryawan/update/' . $value->nik) ?>" method="POST" class="forms-sample">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Masukkan Data Karyawan</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label for="exampleInputUsername1">NIK</label>
								<input type="number" name="nik" value="<?= $value->nik ?>" class="form-control" id="exampleInputUsername1" placeholder="Masukkan NIK" required>
							</div>
							<div class="form-group">
								<label for="exampleInputUsername1">Nama Karyawan</label>
								<input type="text" name="nama" value="<?= $value->nama_karyawan ?>" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Nama Karyawan" required>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Jenis Kelamin</label>
								<select name="jk" class="form-control" required>
									<option value="">---Pilih Jenis Kelamin---</option>
									<option value="Perempuan" <?php if ($value->jk == 'Perempuan') {
																	echo 'selected';
																} ?>>Perempuan</option>
									<option value="Laki - Laki" <?php if ($value->jk == 'Laki - Laki') {
																	echo 'selected';
																} ?>>Laki - Laki</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">No Telepon</label>
								<input type="text" name="no_hp" value="<?= $value->no_hp_karyawan ?>" class="form-control" id="exampleInputPassword1" placeholder="Masukkan No Telepon" required>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Alamat</label>
								<input type="text" name="alamat" class="form-control" value="<?= $value->alamat_karyawan ?>" id="exampleInputPassword1" placeholder="Masukkan Alamat" required>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Divisi</label>
								<input type="text" name="divisi" class="form-control" value="<?= $value->divisi ?>" id="exampleInputPassword1" placeholder="Masukkan Divisi" required>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Jabatan</label>
								<input type="text" name="jabatan" class="form-control" value="<?= $value->jabatan ?>" id="exampleInputPassword1" placeholder="Masukkan Jabatan" required>
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