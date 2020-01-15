<div class="content">
		<div class="row">

			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Data PT & Home Industri Pekon Podomoro</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="pt" class="table table-bordered table-striped">
							<thead>
							<tr>
								<th style="text-align: center" width="5%">No</th>
								<th style="text-align: center">Nama PT / Home Industri</th>
								<th style="text-align: center" width="20%">Aksi</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<?php
									$no = 1;
									foreach ($daftar_pt->result() as $row ) {
								?>
								<td style="text-align: center"><?= $no++; ?>.</td>
								<td><?= $row->nama_pt; ?></td>
								<td style="text-align: center">
									<a  href="<?php echo base_url();?>manajemen_pt/lihat/<?= $row->id_pt; ?>" class="btn btn-info btn-sm" target="_blank">
									<i class="fas fa-eye"></i>
									</a>
									<a  href="<?php echo base_url();?>manajemen_pt/edit/<?= $row->id_pt; ?>" class="btn btn-warning btn-sm" target="_blank">
									<i class="fas fa-edit"></i>
								</a>
									<a  href="<?php echo base_url();?>manajemen_pt/hapus/<?= $row->id_pt; ?>" class="btn btn-danger btn-sm" target="_blank">
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