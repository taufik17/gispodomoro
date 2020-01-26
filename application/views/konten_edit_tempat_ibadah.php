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
						<?= $row->nama_bangunan; ?>
					</h3>
				</div>
				<div class="card-body">

					<ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="gambaran_umum-tab" data-toggle="pill" href="#gambaran_umum" role="tab" aria-controls="gambaran_umum" aria-selected="true">Gambaran Umum</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="seksi-tab" data-toggle="pill" href="#seksi" role="tab" aria-controls="seksi" aria-selected="false">Seksi - Seksi</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="tanah_bangun-tab" data-toggle="pill" href="#tanah_bangun" role="tab" aria-controls="tanah_bangun" aria-selected="false">Tanah & Bangunan</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="gambar-tab" data-toggle="pill" href="#gambar" role="tab" aria-controls="gambar" aria-selected="false">Gambar</a>
						</li>
					</ul>

					<div class="tab-content" id="custom-content-below-tabContent">
						<div class="tab-pane fade show active" id="gambaran_umum" role="tabpanel" aria-labelledby="gambaran_umum-tab">
							<hr>
							<form action="<?= base_url(); ?>manajemen_tempat_ibadah/simpan_edit" method="post">
							<input type="text" name="id_ibadah" value="<?= $row->id_ibadah; ?>" hidden>


							<div class="form-group row">
							 <label class="col-sm-2 col-form-label">Nama</label>
							 <div class="col-sm-10">
								 <input type="text" name="nama" value="<?= $row->nama_bangunan; ?>" class="form-control" placeholder="Nama Bangunan Masjid / Mushola">
							 </div>
							</div>

							<div class="form-group row">
							 <label class="col-sm-2 control-label">Ketua / Penasihat</label>
							 <div class="col-sm-10">
								 <input type="text" name="ketua" value="<?= $row->ketua; ?>" class="form-control" placeholder="Ketua / Penasihat">
							 </div>
							</div>

							<div class="form-group row">
							 <label class="col-sm-2 control-label">Sekretaris</label>
							 <div class="col-sm-10">
								 <input type="text" name="sekretaris" value="<?= $row->sekretaris; ?>" class="form-control" placeholder="Sekretaris">
							 </div>
							</div>

							<div class="form-group row">
							 <label class="col-sm-2 control-label">Bendahara</label>
							 <div class="col-sm-10">
								 <input type="text" name="bendahara" value="<?= $row->bendahara; ?>" class="form-control" placeholder="Bendahara">
							 </div>
							</div>

							<div class="form-group row">
							 <label class="col-sm-2 control-label">Takmir Masjid</label>
							 <div class="col-sm-10">
								 <input type="text" name="takmir" value="<?= $row->takmir; ?>" class="form-control" placeholder="Takmir Masjid">
							 </div>
							</div>
						</div>

						<div class="tab-pane fade" id="seksi" role="tabpanel" aria-labelledby="seksi-tab">
							<hr>
							<div class="form-group row">
							 <label class="col-sm-2 control-label">Humas</label>
							 <div class="col-sm-10">
								 <input type="text" name="humas" value="<?= $row->humas; ?>" class="form-control" placeholder="Humas">
							 </div>
							</div>

							<div class="form-group row">
							 <label class="col-sm-2 control-label">Seksi PHBI</label>
							 <div class="col-sm-10">
								 <input type="text" name="seksi_phbi" value="<?= $row->seksi_phbi; ?>" class="form-control" placeholder="Seksi PHBI">
							 </div>
							</div>

							<div class="form-group row">
							 <label class="col-sm-2 control-label">Seksi Pendidikan / Pustaka</label>
							 <div class="col-sm-10">
								 <input type="text" name="seksi_pendidikan" value="<?= $row->seksi_pendidikan; ?>" class="form-control" placeholder="Seksi Pendidikan / Pustaka">
							 </div>
							</div>

							<div class="form-group row">
							 <label class="col-sm-2 control-label">Seksi Sarana & Prasarana</label>
							 <div class="col-sm-10">
								 <input type="text" name="seksi_sarpras" value="<?= $row->seksi_sarpras; ?>" class="form-control" placeholder="Seksi Sarana & Prasarana">
							 </div>
							</div>

							<div class="form-group row">
							 <label class="col-sm-2 control-label">Seksi Pembangunan</label>
							 <div class="col-sm-10">
								 <input type="text" name="seksi_pembangunan" value="<?= $row->seksi_pembangunan; ?>" class="form-control" placeholder="Seksi Pembangunan">
							 </div>
							</div>

						</div>
						<div class="tab-pane fade" id="tanah_bangun" role="tabpanel" aria-labelledby="tanah_bangun-tab">
							<hr>

							<div class="form-group row">
							<label class="col-sm-2 control-label">Alamat</label>
							<div class="col-sm-10">
								<textarea name="alamat" class="form-control" rows="5" placeholder="Alamat Bangunan"><?= $row->alamat; ?></textarea>
							</div>
						 </div>

						 <div class="form-group row">
							<label class="col-sm-2 control-label">Luas Tanah</label>
							<div class="input-group col-sm-10">
                 <input type="text" class="form-control" name="luas_tanah" value="<?= $row->luas_tanah; ?>">
 								<div class="input-group-append">
 									<span class="input-group-text">m<sup>2</sup></span></div>
                 </div>
						 </div>

						 <div class="form-group row">
							<label class="col-sm-2 control-label">Status Tanah</label>
							<div class="col-sm-10">
							<select name="status_tanah" class="form-control">
									<option value="<?= $row->status_tanah; ?>" selected=""><?= $row->status_tanah; ?></option>
									<option value="Swadaya">SHM ( Swadaya Masyarakat )</option>
									<option value="Wakaf">Wakaf</option>
									<option value="Wakaf & SHM">Wakaf & SHM</option>
									<option value="Lainya">Lainya</option>
								</select>
							</div>
						 </div>

						 <div class="form-group row">
							<label class="col-sm-2 control-label">Luas Bangunan</label>
							<div class="input-group col-sm-10">
                 <input type="text" class="form-control" name="luas_bangunan" value="<?= $row->luas_bangunan; ?>">
 								<div class="input-group-append">
 									<span class="input-group-text">m<sup>2</sup></span></div>
                 </div>
						 </div>

						 <div class="form-group row">
							<label class="col-sm-2 control-label">Tahun Berdiri</label>
							<div class="col-sm-10">
								<input type="text" name="tahun_berdiri" value="<?= $row->tahun_berdiri; ?>" class="form-control" placeholder="Tahun Berdiri">
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
