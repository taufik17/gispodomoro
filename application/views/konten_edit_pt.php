<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<?php
					foreach ($data_pt->result() as $row ) {
					?>
			<div class="card card-primary card-outline">
				<div class="card-header">
					<h3 class="card-title">
						<i class="fas fa-edit"></i>
						<?= $row->nama_pt; ?>
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
							<a class="nav-link" id="tanah_bangun-tab" data-toggle="pill" href="#tanah_bangun" role="tab" aria-controls="tanah_bangun" aria-selected="false">Tanah & Bangunan</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="gambar-tab" data-toggle="pill" href="#gambar" role="tab" aria-controls="gambar" aria-selected="false">Gambar</a>
						</li>
					</ul>

					<div class="tab-content" id="custom-content-below-tabContent">
						<div class="tab-pane fade show active" id="gambaran_umum" role="tabpanel" aria-labelledby="gambaran_umum-tab">
							<hr>
							<form action="<?= base_url(); ?>manajemen_pt/simpan_edit" method="post">
							<input type="text" name="id_pt" value="<?= $row->id_pt; ?>" hidden>

							<div class="form-group row">
							 <label class="col-sm-2 col-form-label">Nama</label>
							 <div class="col-sm-10">
								 <input type="text" name="nama" value="<?= $row->nama_pt; ?>" class="form-control" placeholder="Nama Bangunan Masjid / Mushola">
							 </div>
							</div>

							<div class="form-group row">
							 <label class="col-sm-2 control-label">Owner / Kepala PT</label>
							 <div class="col-sm-10">
								 <input type="text" name="owner" value="<?= $row->pemilik; ?>" class="form-control" placeholder="Owner">
							 </div>
							</div>

							<div class="form-group row">
							 <label class="col-sm-2 control-label">No Telpon</label>
							 <div class="col-sm-10">
								 <input type="text" name="no_telp" value="<?= $row->no_telp; ?>" class="form-control" placeholder="Nomor Telpon">
							 </div>
							</div>

							<div class="form-group row">
							 <label class="col-sm-2 control-label">Website</label>
							 <div class="col-sm-10">
								 <input type="text" name="web" value="<?= $row->web; ?>" class="form-control" placeholder="Website">
							 </div>
							</div>

							<div class="form-group row">
							 <label class="col-sm-2 control-label">Email</label>
							 <div class="col-sm-10">
								 <input type="email" name="email" value="<?= $row->email; ?>" class="form-control" placeholder="Email">
							 </div>
							</div>
						</div>


						<div class="tab-pane fade" id="SDM" role="tabpanel" aria-labelledby="SDM-tab">
							<hr>

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
							 <label class="col-sm-2 control-label">Humas</label>
							 <div class="col-sm-10">
								 <input type="text" name="humas" value="<?= $row->humas; ?>" class="form-control" placeholder="Humas">
							 </div>
							</div>

							<div class="form-group row">
							<label class="col-sm-2 col-form-label">Jumlah Tenaga Kerja</label>
							<div class="col-sm-10">
								<input type="text" name="tenaga_kerja" value="<?= $row->tenaga_kerja; ?>" class="form-control" placeholder="Tenaga Kerja">
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
