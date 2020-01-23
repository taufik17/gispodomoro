<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark"> <?= $judul; ?></h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
						<li class="breadcrumb-item active"><a href="#">List Data</a></li>
						<li class="breadcrumb-item active"><?= $judul; ?></li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<div class="content">
		<div class="container">
			<div class="row">

				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Data Tempat Ibadah Pekon Podomoro</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
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
										<a  href="<?php echo base_url();?>gis_tempat_ibadah/detail_publik/<?= $row->id_ibadah; ?>" class="btn btn-info btn-sm" target="_blank">
										<i class="fas fa-eye">&nbsp</i>Detail
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
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
<footer class="main-footer">
	<strong>Copyright &copy; <?php echo date("Y");?> <a href="https://taufik17.github.io/" target="_blank">TaufikSan</a>.</strong> All rights reserved.

	<div class="float-right d-none d-sm-inline-block">
		<div class="user-panel d-flex">
			<div class="image">
				<img src="<?= base_url(); ?>assets/dist/img/Logo.png" alt="User Image">
			</div>
			<div class="info">
				<a href="https://kkn.itera.ac.id/" target="_blank" class="d-block"><b>KKN Instutut Teknologi Sumatera</b> 2019</a>
			</div>
		</div>
	</div>

</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url(); ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $("#sekolah").DataTable();
    $("#ibadah").DataTable();
    $("#pt").DataTable();
    $("#asetpekon").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

</body>
</html>
