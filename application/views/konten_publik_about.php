<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark"> <?= $judul; ?></small></h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
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
			<section id="profile" class="my-3">
					<div class="row">
						<div class="col-md-12">
									<center>
										<img src="<?= base_url(); ?>assets/halaman_awal.png" style="width: 400px; height: 194px;">
										</center>
										<hr>
										<p font-size:="" style="color: rgb(51, 51, 51); font-family: sans-serif, Arial, Verdana, " trebuchet="">
											<span style="font-size:16px;">
												<span style="color:#000000;">Siste Informasi Geografis Podomoro adalah suatu sistem informasi berbasis web yang mampu menampilkan berbagai informasi
													peta Aset desa, bangunan peribadatan dan sektor penting secara online (webGIS) yang dapat diakses pada alamat&nbsp;
												</span>
												<a href="<?= base_url(); ?>" target="_blank">https://pekonpodomoropringsewu.desa.id/gis
											</a>
										</span>
										</p><p font-size:="" style="color: rgb(51, 51, 51); font-family: sans-serif, Arial, Verdana, " trebuchet="">
											<span style="font-size:16px;">
												<span style="color:#000000;">Pembangunan Sistem Informasi Geografis Podomoro merupakan perwujudan dari salah satu program kerja kegiatan
													Kuliah Kerja Nyata (KKN) yang dilaksanakan oleh Institut Teknologi Sumatera (ITERA).
													serta sebagai implementasi tri dharma perguruan tinggi pengabdian masyarakat.
										</span>
									</span>
								</p>
								<hr>
							</div>
						</div>
				</section>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>

</div>

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
