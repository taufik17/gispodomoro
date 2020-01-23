<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark"> Top Navigation <small>Example 3.0</small></h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Layout</a></li>
						<li class="breadcrumb-item active">Top Navigation</li>
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
				<div class="col-lg-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>

							<p class="card-text">
								Some quick example text to build on the card title and make up the bulk of the card's
								content.
							</p>

							<a href="#" class="card-link">Card link</a>
							<a href="#" class="card-link">Another link</a>
						</div>
					</div>

					<div class="card card-primary card-outline">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>

							<p class="card-text">
								Some quick example text to build on the card title and make up the bulk of the card's
								content.
							</p>
							<a href="#" class="card-link">Card link</a>
							<a href="#" class="card-link">Another link</a>
						</div>
					</div><!-- /.card -->
				</div>
				<!-- /.col-md-6 -->
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title m-0">Featured</h5>
						</div>
						<div class="card-body">
							<h6 class="card-title">Special title treatment</h6>

							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>

					<div class="card card-primary card-outline">
						<div class="card-header">
							<h5 class="card-title m-0">Featured</h5>
						</div>
						<div class="card-body">
							<h6 class="card-title">Special title treatment</h6>

							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<!-- /.col-md-6 -->
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content -->
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
