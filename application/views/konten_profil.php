<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<?php foreach ($data->result() as $i ) {
				?>
				<!-- Profile Image -->
				<div class="card card-primary card-outline">
					<div class="card-body box-profile">
						<div class="text-center">
							<img class="profile-user-img img-fluid img-circle"
									 src="<?= base_url(); ?>assets/user/<?= $i->foto ?>"
									 alt="User profile picture">
						</div>
						<h3 class="profile-username text-center"><?= $i->nama ?></h3>
						<p class="text-muted text-center"><?= $i->role ?></p>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->

				<!-- About Me Box -->
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Tentang Saya</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<strong><i class="fas fa-book mr-1"></i> Pendidikan</strong>
						<p class="text-muted">
							<?= $i->nama_pendidikan ?>
						</p>
						<hr>
						<strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

						<p class="text-muted"><?= $i->alamat ?></p>
						<?php }?>
						<hr>
						<button type="button" class="btn btn-block btn-outline-success btn-lg">
							<i class="fas fa-plus">&nbsp</i>Tambah Pengguna</button>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col -->
			<div class="col-md-9">
				<div class="card">
					<div class="card-header p-2">
						<ul class="nav nav-pills">
							<li class="nav-item"><a class="nav-link active" href="#data_diri" data-toggle="tab">Data Diri</a></li>
							<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
							<li class="nav-item"><a class="nav-link" href="#ubah_pass" data-toggle="tab">Ubah Password</a></li>
						</ul>
					</div><!-- /.card-header -->

					<div class="card-body">
						<div class="tab-content">
							<?php foreach ($data->result() as $i ) {
							?>
							<div class="active tab-pane" id="data_diri">
								<table width="100%" class="table table-striped table-bordered table-hover dataTable" id="dataTables-example">
									<tbody>
										<tr>
											<td align="left" width="26%"><b>Username</b></td>
											<td><?= $i->username ?></td>
										</tr>
										<tr>
											<td align="left"><b>Nama Lengkap</b></td>
											<td><?= $i->nama ?></td>
										</tr>
										<tr><td align="left"><b>Pendidikan</b></td>
											<td><?= $i->nama_pendidikan ?></td>
										</tr>
										<tr>
											<td align="left"><b>Jenis Kelamin</b></td>
											<td><?= $i->jk ?></td>
										</tr>
										<tr>
											<td align="left"><b>Email</b></td>
											<td><?= $i->email ?></td>
										</tr>
										<tr>
											<td align="left"><b>Nomor Telepon</b></td>
											<td><?= $i->no_telp ?></td>
										</tr>
										<tr>
											<td align="left"><b>Alamat</b></td>
											<td><?= $i->alamat ?></td>
										</tr>
										<tr>
											<td align="left"><b>Jabatan</b></td>
											<td><?= $i->role ?></td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- /.tab-pane -->

							<div class="tab-pane" id="settings">
								<form class="form-horizontal">

									<div class="form-group row">
										<label for="inputName" class="col-sm-2 col-form-label">Username</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="username" value="<?= $i->username ?>" readonly required>
										</div>
									</div>
									<div class="form-group row">
										<label for="inputName2" class="col-sm-2 col-form-label">Nama Lengkap</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" value="<?= $i->nama ?>" required>
										</div>
									</div>

									<div class="form-group row">
										<label for="inputExperience" class="col-sm-2 col-form-label">Pendidikan</label>
										<div class="col-sm-10">
											<select class="form-control select2 select2-hidden-accessible" name="pendidikan" style="width: 100%;" tabindex="-1" aria-hidden="true" required>
												<option selected="selected"><?= $i->nama_pendidikan ?></option>
												<?php
												foreach ($pendidikan->result() as $row ) {
												?>
												<option value="<?php echo $row->id_pendidikan; ?>" ><?php echo $row->nama_pendidikan; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>


									<div class="form-group row">
										<label for="inputExperience" class="col-sm-2 col-form-label">Jenis Kelamin</label>
										<div class="col-sm-10">
		                    <!-- radio -->
												<?php
												if ($i->jk == 'Laki - laki') { ?>
													<div class="icheck-primary d-inline">
														<input type="radio" id="radioPrimary1" name="jk" value="Laki - laki" checked>
														<label for="radioPrimary1">
															Laki - Laki
														</label>
													</div>
													&nbsp
													<div class="icheck-primary d-inline">
														<input type="radio"id="radioPrimary2" name="jk" value="Perempuan">
														<label for="radioPrimary2">
															Perempuan
														</label>
													</div>
												<?php } else { ?>
													<div class="icheck-primary d-inline">
														<input type="radio" id="radioPrimary1" name="jk" value="Laki - laki">
														<label for="radioPrimary1">
															Laki - Laki
														</label>
													</div>
													&nbsp
													<div class="icheck-primary d-inline">
														<input type="radio" id="radioPrimary2" name="jk" value="Perempuan" checked>
														<label for="radioPrimary2">
															Perempuan
														</label>
													</div>
												<?php } ?>

										</div>
									</div>

									<div class="form-group row">
										<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="inputEmail" placeholder="Email" value="<?= $i->email ?>">
										</div>
									</div>

									<div class="form-group row">
										<label for="inputEmail" class="col-sm-2 col-form-label">No Telpon</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="Nomor Telpon" value="<?= $i->no_telp ?>">
										</div>
									</div>

									<div class="form-group row">
										<label for="inputSkills" class="col-sm-2 col-form-label">Alamat</label>
										<div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Alamat"><?= $i->alamat ?></textarea>
                    </div>
									</div>

									<div class="form-group row">
										<label for="inputEmail" class="col-sm-2 col-form-label">Jabatan</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="Jabatan" value="<?= $i->role ?>">
										</div>
									</div>

									<div class="form-group row">
											<label for="exampleInputFile" class="col-sm-2 control-label">Foto Profil</label>
											<div class="col-sm-10">
												<input type="file" name="filefoto" class="dropify" data-height="200">
												<p class="help-block">File Max 2 Mb</p>
											</div>
									</div>

									<div class="form-group row">
										<div class="offset-sm-2 col-sm-10">
											<div class="checkbox">
												<label>
													<input type="checkbox"> Data yang diinputkan adalah data yang benar
												</label>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<div class="offset-sm-2 col-sm-10">
											<button type="submit" class="btn btn-danger">
												<i class="fas fa-save">&nbsp</i>Simpan</button>
										</div>
									</div>
								</form>
							</div>

							<div class="tab-pane" id="ubah_pass">
								<form class="form-horizontal">

									<div class="form-group row">
										<label for="inputName" class="col-sm-2 col-form-label">Username</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="username" value="<?= $i->username ?>" readonly required>
										</div>
									</div>
									<div class="form-group row">
										<label for="inputName2" class="col-sm-2 col-form-label">Password Lama</label>
										<div class="col-sm-10">
											<input type="password" class="form-control" name="old_pass" placeholder="Password Lama" required>
										</div>
									</div>

									<div class="form-group row">
										<label for="inputName2" class="col-sm-2 col-form-label">Password Baru</label>
										<div class="col-sm-10">
											<input type="password" class="form-control" name="new_pass" placeholder="Password Baru" required>
										</div>
									</div>

									<div class="form-group row">
										<label for="inputName2" class="col-sm-2 col-form-label">Konfirmasi Password</label>
										<div class="col-sm-10">
											<input type="password" class="form-control" name="conf_pass" placeholder="Konfirmasi Password" required>
										</div>
									</div>

									<div class="form-group row">
										<div class="offset-sm-2 col-sm-10">
											<div class="checkbox">
												<label>
													<input type="checkbox"> Data yang diinputkan adalah data yang benar
												</label>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<div class="offset-sm-2 col-sm-10">
											<button type="submit" class="btn btn-danger">
												<i class="fas fa-save">&nbsp</i>Simpan</button>
										</div>
									</div>
								</form>
							</div>

							<?php } ?>
							<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
					</div><!-- /.card-body -->
				</div>
				<!-- /.nav-tabs-custom -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div><!-- /.container-fluid -->
</section>
