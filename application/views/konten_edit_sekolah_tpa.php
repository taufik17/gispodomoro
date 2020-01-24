<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<?php
					foreach ($data_sekolah->result() as $row ) {
					?>
			<div class="card card-primary card-outline">
				<div class="card-header">
					<h3 class="card-title">
						<i class="fas fa-edit"></i>
						<?= $row->nama_sekolah; ?>
					</h3>
				</div>
				<div class="card-body">

					<ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="gambaran_umum-tab" data-toggle="pill" href="#gambaran_umum" role="tab" aria-controls="gambaran_umum" aria-selected="true">Gambaran Umum</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="SDM-tab" data-toggle="pill" href="#SDM" role="tab" aria-controls="SDM" aria-selected="false">SDM</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="keunggulan-tab" data-toggle="pill" href="#keunggulan" role="tab" aria-controls="keunggulan" aria-selected="false">Keunggulan</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="gambar-tab" data-toggle="pill" href="#gambar" role="tab" aria-controls="gambar" aria-selected="false">Gambar</a>
						</li>
					</ul>

					<div class="tab-content" id="custom-content-below-tabContent">
						<div class="tab-pane fade show active" id="gambaran_umum" role="tabpanel" aria-labelledby="gambaran_umum-tab">
							<hr>
							<form action="<?= base_url(); ?>manajemen_sekolah_tpa/simpan_edit" method="post">
							<input type="text" name="id_sekolah" value="<?= $row->id_sekolah; ?>" hidden>


							<div class="form-group row">
							 <label class="col-sm-2 col-form-label">NPSN</label>
							 <div class="col-sm-10">
								 <input type="text" name="npsn" value="<?= $row->npsn; ?>" class="form-control" placeholder="NPSN">
							 </div>
							</div>

							<div class="form-group row">
							 <label class="col-sm-2 control-label">Nama Sekolah</label>
							 <div class="col-sm-10">
								 <input type="text" name="nama_sekolah" value="<?= $row->nama_sekolah; ?>" class="form-control" placeholder="Nama Sekolah">
							 </div>
							</div>

							<div class="form-group row">
							 <label class="col-sm-2 control-label">Status</label>
							 <div class="col-sm-10">
							 <select name="status_sekolah" class="form-control">
									 <option value="<?= $row->status; ?>" selected=""><?= $row->status; ?></option>
									 <option value="Negeri">Negeri</option>
									 <option value="Swasta">Swasta</option>
								 </select>
							 </div>
							</div>

							<div class="form-group row">
							 <label class="col-sm-2 control-label">Kurikulum</label>
							 <div class="col-sm-10">
								 <input type="text" name="kurikulum" value="<?= $row->kurikulum; ?>" class="form-control" placeholder="Kurikulum">
							 </div>
							</div>

							<div class="form-group row">
							 <label class="col-sm-2 control-label">Alamat</label>
							 <div class="col-sm-10">
								 <textarea name="alamat_sekolah" class="form-control" rows="5" placeholder="Alamat"><?= $row->alamat; ?></textarea>
							 </div>
							</div>

							<div class="form-group row">
							 <label class="col-sm-2 control-label">No Telpon</label>
							 <div class="col-sm-10">
								 <input name="no_telpon" value="<?= $row->no_telp; ?>" class="form-control" placeholder="No Telpon">
							 </div>
							</div>

							<div class="form-group row">
							 <label class="col-sm-2 control-label">Website</label>
							 <div class="col-sm-10">
								 <input name="web" value="<?= $row->web; ?>" class="form-control" placeholder="Website">
							 </div>
							</div>

							<div class="form-group row">
							 <label class="col-sm-2 control-label">Email</label>
							 <div class="col-sm-10">
								 <input name="email" value="<?= $row->email; ?>" class="form-control" placeholder="Email">
							 </div>
							</div>

							<div class="form-group row">
							 <label class="col-sm-2 control-label">Jumlah Siswa</label>
							 <div class="col-sm-10">
								 <input name="jumlah_siswa" value="<?= $row->jumlah_siswa; ?>" class="form-control" placeholder="JUmlah Siswa">
							 </div>
							</div>

							<div class="form-group row">
							 <label class="col-sm-2 control-label">Kepsek</label>
							 <div class="col-sm-10">
								 <input name="kepsek" value="<?= $row->kepala_sekolah; ?>" class="form-control" placeholder="Kepala Sekolah">
							 </div>
							</div>

							<div class="form-group row">
							 <label class="col-sm-2 control-label">Telpon Kepsek</label>
							 <div class="col-sm-10">
								 <input name="telpon_kepsek" value="<?= $row->telp_kepsek; ?>" class="form-control" placeholder="No Telpon Kepsek">
							 </div>
							</div>
						</div>

						<div class="tab-pane fade" id="SDM" role="tabpanel" aria-labelledby="SDM-tab">
							<hr>
							<div class="form-group row">
							<label class="col-sm-3 col-form-label">Jumlah Tenaga Kependidikan</label>
							<div class="col-sm-9">
								<input type="text" name="tendik" value="<?= $row->jmlh_tendik; ?>" class="form-control" placeholder="TENDIK">
							</div>
						 </div>

						 <div class="form-group row">
							<label class="col-sm-3 control-label">Jumlah Guru</label>
							<div class="col-sm-9">
								<input type="text" name="jmlh_guru" value="<?= $row->jmlh_guru; ?>" class="form-control" placeholder="Jumlah Guru">
							</div>
						 </div>

						 <div class="form-group row">
							<label class="col-sm-3 control-label">Jumlah Guru Honorer</label>
							<div class="col-sm-9">
								<input type="text" name="jmlh_honorer" value="<?= $row->jmlh_guru_honor; ?>" class="form-control" placeholder="Jumlah Guru Honorer">
							</div>
						 </div>

						 <div class="form-group row">
							<label class="col-sm-3 control-label">Jumlah Guru PNS</label>
							<div class="col-sm-9">
								<input type="text" name="jmlh_pns" value="<?= $row->jmlh_guru_pns; ?>" class="form-control" placeholder="Jumlah Guru PNS">
							</div>
						 </div>

						 <div class="form-group row">
							<label class="col-sm-3 control-label">Staff</label>
							<div class="col-sm-9">
								<input name="staff" value="<?= $row->staff; ?>" class="form-control" placeholder="Staff dan tata usaha">
							</div>
						 </div>

						</div>
						<div class="tab-pane fade" id="keunggulan" role="tabpanel" aria-labelledby="keunggulan-tab">
							<hr>

							<div class="form-group row">
							<label class="col-sm-2 control-label">Visi</label>
							<div class="col-sm-10">
								<textarea name="visi" class="form-control" rows="5" placeholder="Visi"><?= $row->visi; ?></textarea>
							</div>
						 </div>

						 <div class="form-group row">
						 <label class="col-sm-2 control-label">Misi</label>
						 <div class="col-sm-10">
							 <textarea name="misi" class="form-control" rows="5" placeholder="Misi"><?= $row->misi; ?></textarea>
						 </div>
						</div>

						<div class="form-group row">
						<label class="col-sm-2 control-label">Tagline</label>
						<div class="col-sm-10">
							<textarea name="tagline" class="form-control" rows="5" placeholder="Tagline"><?= $row->tagline; ?></textarea>
						</div>
					 </div>

						</div>
						<div class="tab-pane fade" id="gambar" role="tabpanel" aria-labelledby="gambar-tab">
							<hr>

							<div class="form-group row">
									<label for="exampleInputFile" class="col-sm-2 control-label">Gambar</label>
									<div class="col-sm-10">
										<input type="file" name="foto_galeri" class="dropify" data-height="150">
										<p class="help-block">File Max 2 Mb</p>
									</div>
							</div>

						</div>
					</div>
				</div>

				<div class="card-footer clearfix">
          <button type="submit" class="btn btn-danger float-right"><i class="fas fa-save">&nbsp</i> Simpan</button>
        </div>
			</form>
				<!-- /.card -->
			</div>
		<?php } ?>
		</div>
		</div>
		<!-- /.row (main row) -->
	</div><!-- /.container-fluid -->
</section>
