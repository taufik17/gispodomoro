<div class="content">
		<div class="row">

			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Data Tempat Ibadah Pekon Podomoro</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<a href="<?= base_url(); ?>manajemen_tempat_ibadah/tambah">
							<button type="button" class="btn btn-success" style="margin-bottom: 20px">
								<i class="fas fa-plus">&nbsp</i>Tambah Data</button>
						</a>
						<table id="ibadah" class="table table-bordered table-striped">
							<thead>
							<tr>
								<th style="text-align: center" width="5%">No</th>
								<th style="text-align: center">Nama Tempat Ibadah</th>
								<th style="text-align: center">Ketua / Pengurus</th>
								<th style="text-align: center" width="20%">Aksi</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<?php
									$no = 1;
									foreach ($daftar_ibadah->result() as $row ) {
								?>
								<td style="text-align: center"><?= $no++; ?>.</td>
								<td><?= $row->nama_bangunan; ?></td>
								<td><?= $row->ketua; ?></td>
								<td style="text-align: center">
									<a  href="<?php echo base_url();?>gis_tempat_ibadah/detail/<?= $row->id_ibadah; ?>" class="btn btn-info btn-sm" target="_blank">
									<i class="fas fa-eye"></i>
									</a>
									<a  href="<?php echo base_url();?>manajemen_tempat_ibadah/edit/<?= $row->id_ibadah; ?>" class="btn btn-warning btn-sm" target="_blank">
									<i class="fas fa-edit"></i>
								</a>
									<a  href="<?php echo base_url();?>manajemen_tempat_ibadah/hapus/<?= $row->id_ibadah; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus Data ini.?')">
									<i class="fas fa-trash"></i>
								</a>
								</td>
							</tr>
							<?php }?>
							</tbody>
						</table>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>

		</div>
		<!-- /.row -->
</div>
