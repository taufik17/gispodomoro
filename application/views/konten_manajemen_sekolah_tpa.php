<div class="content">
		<div class="row">

			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Data Sekolah & TPA Pekon Podomoro</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<a href="<?= base_url(); ?>manajemen_sekolah_tpa/tambah">
							<button type="button" class="btn btn-success" style="margin-bottom: 20px">
								<i class="fas fa-plus">&nbsp</i>Tambah Data</button>
						</a>
						<table id="sekolah" class="table table-bordered table-striped">
							<thead>
							<tr>
								<th style="text-align: center" width="5%">No</th>
								<th style="text-align: center">Nama Sekolah / TPA</th>
								<th style="text-align: center">Kepala Sekolah / TPA</th>
								<th style="text-align: center" width="10%">Status</th>
								<th style="text-align: center" width="20%">Aksi</th>
							</tr>
							</thead>
							<tbody>
							<tr>
							<?php
								$no = 1;
								foreach ($daftar_sekolah->result() as $row ) {
							?>
								<td style="text-align: center"><?= $no++; ?>.</td>
								<td><?= $row->nama_sekolah; ?></td>
								<td><?= $row->kepala_sekolah; ?></td>
								<td style="text-align: center"><?= $row->status; ?></td>
								<td style="text-align: center">
									<a  href="<?php echo base_url();?>manajemen_sekolah_tpa/lihat/<?= $row->id_sekolah; ?>" class="btn btn-info btn-sm" target="_blank">
									<i class="fas fa-eye"></i>
									</a>
									<a  href="<?php echo base_url();?>manajemen_sekolah_tpa/edit/<?= $row->id_sekolah; ?>" class="btn btn-warning btn-sm" target="_blank">
									<i class="fas fa-edit"></i>
								</a>
									<a  href="<?php echo base_url();?>manajemen_sekolah_tpa/hapus/<?= $row->id_sekolah; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus Data ini.?')">
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
