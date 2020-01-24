<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <!-- /.card -->
            <!-- Horizontal Form -->
            <div class="card card-info">
							<?php
							$info = $this->session->flashdata('info');
							if(!empty($info))
							{
								echo $info;
							}
							?>
              <div class="card-header">
                <h3 class="card-title">Tambah Pengguna Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="POST" action="<?= base_url(); ?>profil/simpan_user">
                <div class="card-body">

									<div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama_lengkap" class="form-control" id="inputEmail3" placeholder="Nama Lengkap" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                    </div>
                  </div>

									<?php foreach ($data->result() as $i ) {
									?>

									<div class="form-group row">
										<label for="inputExperience" class="col-sm-2 col-form-label">Pendidikan</label>
										<div class="col-sm-10">
											<select class="form-control select2 select2-hidden-accessible" name="pendidikan" style="width: 100%;" tabindex="-1" aria-hidden="true" required>
												<option selected="selected" value="<?= $i->id_pendidikan ?>"><?= $i->nama_pendidikan ?></option>
												<?php
												foreach ($pendidikan->result() as $row ) {
												?>
												<option value="<?= $row->id_pendidikan; ?>" ><?php echo $row->nama_pendidikan; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
								<?php } ?>

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
										<label for="inputEmail" class="col-sm-2 col-form-label">Jabatan</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="jabatan" placeholder="Jabatan" value="<?= $i->role ?>">
										</div>
									</div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info float-right"><i class="fas fa-save">&nbsp</i>
										Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
