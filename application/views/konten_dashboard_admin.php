<section class="content">
	<div class="container-fluid">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-info">
					<div class="inner">
						<h3><?= $jumlah_sekolah; ?></h3>
						<p>Sekolah & TPA</p>
					</div>
					<div class="icon">
						<i class="fas fa-school"></i>
					</div>
					<a href="<?= base_url(); ?>manajemen_sekolah_tpa" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-success">
					<div class="inner">
						<h3><?= $jumlah_ibadah; ?></h3>

						<p>Tempat Peribadatan</p>
					</div>
					<div class="icon">
						<i class="fas fa-mosque"></i>
					</div>
					<a href="<?= base_url(); ?>manajemen_tempat_ibadah" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-warning">
					<div class="inner">
						<h3><?= $jumlah_pt; ?></h3>

						<p>PT & Home Industri</p>
					</div>
					<div class="icon">
						<i class="fas fa-industry"></i>
					</div>
					<a href="<?= base_url(); ?>manajemen_pt" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-danger">
					<div class="inner">
						<h3><?= $jumlah_aset_desa; ?></h3>

						<p>Bangunan Aset Desa</p>
					</div>
					<div class="icon">
						<i class="fas fa-building"></i>
					</div>
					<a href="<?= base_url(); ?>manajemen_aset_pekon" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
		</div>
		<!-- /.row -->
		<!-- Main row -->
		<div class="row">
			<!-- Left col -->
			<section class="col-lg-12 connectedSortable">
						<div class="card card-info">
							<div class="card-header">
								<h3 class="card-title">Grafik Data</h3>

								<div class="card-tools">
									<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
									</button>
									<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
								</div>
							</div>
							<div class="card-body">
								<canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
							</div>
							<!-- /.card-body -->
						</div>
			</section>

			<!-- /.Left col -->
		</div>
		<!-- /.row (main row) -->
	</div><!-- /.container-fluid -->
</section>
