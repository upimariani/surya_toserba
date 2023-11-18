<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Informasi User</h4>
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
							Tambah Data User
						</button>
						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<form action="<?= base_url('Admin/cUser/create') ?>" method="POST" class="forms-sample">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Masukkan Data User</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">

											<div class="form-group">
												<label for="exampleInputUsername1">Nama User</label>
												<input type="text" name="nama" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Nama User" required>
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Alamat</label>
												<input type="text" name="alamat" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Alamat" required>
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">No Telepon</label>
												<input type="text" name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="Masukkan No Telepon" required>
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Username</label>
												<input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Username" required>
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Password</label>
												<input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password" required>
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Level User</label>
												<select name="level" class="form-control" required>
													<option value="">---Pilih Level User---</option>
													<option value="1">Admin</option>
													<option value="2">Manager</option>
													<option value="3">Pimpinan</option>
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
										<th>Nama User</th>
										<th>Alamat</th>
										<th>No Telepon</th>
										<th>Username</th>
										<th>Password</th>
										<th>Level User</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($user as $key => $value) {
									?>
										<tr>
											<td><?= $value->nama_user ?></td>
											<td><?= $value->alamat ?></td>
											<td><?= $value->no_hp ?></td>
											<td><?= $value->username ?></td>
											<td><?= $value->password ?></td>
											<td>
												<?php
												if ($value->level_user == '1') {
												?>
													<label class="badge badge-danger">Admin</label>
												<?php
												} else if ($value->level_user == '2') {
												?>
													<label class="badge badge-warning">Manager</label>
												<?php
												} else {
												?>
													<label class="badge badge-success">Pimpinan</label>
												<?php
												}
												?>

											</td>
											<td>
												<button data-bs-toggle="modal" data-bs-target="#update<?= $value->id_user ?>" class="btn btn-warning btn-rounded">Update</button>
												<a class="btn btn-danger btn-rounded" href="<?= base_url('Admin/cUser/delete/' . $value->id_user) ?>">Hapus</a>
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
	foreach ($user as $key => $value) {
	?>
		<div class="modal fade" id="update<?= $value->id_user ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<form action="<?= base_url('Admin/cUser/update/' . $value->id_user) ?>" method="POST" class="forms-sample">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Update Data User</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">

							<div class="form-group">
								<label for="exampleInputUsername1">Nama User</label>
								<input type="text" name="nama" value="<?= $value->nama_user ?>" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Nama User" required>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Alamat</label>
								<input type="text" name="alamat" value="<?= $value->alamat ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Alamat" required>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">No Telepon</label>
								<input type="text" name="no_hp" value="<?= $value->no_hp ?>" class="form-control" id="exampleInputPassword1" placeholder="Masukkan No Telepon" required>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Username</label>
								<input type="text" name="username" value="<?= $value->username ?>" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Username" required>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="text" name="password" value="<?= $value->password ?>" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password" required>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Level User</label>
								<select name="level" class="form-control" required>
									<option value="">---Pilih Level User---</option>
									<option value="1" <?php if ($value->level_user == '1') {
															echo 'selected';
														} ?>>Admin</option>
									<option value="2" <?php if ($value->level_user == '2') {
															echo 'selected';
														} ?>>Manager</option>
									<option value="3" <?php if ($value->level_user == '3') {
															echo 'selected';
														} ?>>Pimpinan</option>
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
	<?php
	}
	?>