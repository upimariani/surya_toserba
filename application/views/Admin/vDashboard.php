<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-sm-12">
				<div class="home-tab">

					<div class="tab-content tab-content-basic">
						<div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">

							<div class="row">
								<div class="col-lg-8 d-flex flex-column">

									<div class="row flex-grow">
										<div class="col-12 grid-margin stretch-card">
											<div class="card card-rounded table-darkBGImg">
												<div class="card-body">
													<div class="col-sm-8">
														<?php
														$karyawan = $this->mAnalisis->karyawan_terbaik();
														?>
														<h3 class="text-white upgrade-info mb-0">
															Selamat kepada <span class="fw-bold"><?= $karyawan->nama_karyawan ?></span> Divisi <span class="fw-bold"><?= $karyawan->divisi ?></span> sebagai Karyawan Terbaik!
														</h3>
														<p class="text-light">Dengan hasil analisis <span class="fw-bold"><?= $karyawan->hasil ?></span> </p>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>