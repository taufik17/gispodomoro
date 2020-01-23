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
			<section class="content">
	      <div class="container-fluid">
	        <div class="row">
	          <div class="col-12">
	            <div class="card card-primary">
	              <div class="card-header">
	                <div class="card-title">
	                  Galeri Aset dan Potensi
	                </div>
	              </div>
	              <div class="card-body">
	                <div>
	                  <div class="btn-group w-100 mb-2">
	                    <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> Semua Galeri </a>
	                    <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> Sekolah & TPA </a>
											<a class="btn btn-info" href="javascript:void(0)" data-filter="2"> PT & Home Industri </a>
	                    <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> Tempat Ibadah </a>
											<a class="btn btn-info" href="javascript:void(0)" data-filter="4"> Aset Pekon </a>
	                  </div>
	                  <div class="mb-2">
	                    <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Acak </a>
	                    <div class="float-right">
	                      <select class="custom-select" style="width: auto;" data-sortOrder>
	                        <option value="index"> Sort by Position </option>
	                        <option value="sortData"> Sort by Custom Data </option>
	                      </select>
	                      <div class="btn-group">
	                        <a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Ascending </a>
	                        <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Descending </a>
	                      </div>
	                    </div>
	                  </div>
	                </div>
	                <div>
	                  <div class="filter-container p-0 row">
											<!-- ini untuk sd tpa -->
											<?php foreach ($gambar_tpa->result() as $i ) {
						          ?>
											<div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
	                      <a href="<?= base_url(); ?>assets/foto_sekolah_tpa/<?= $i->foto; ?>" data-toggle="lightbox" data-title="<?= $i->nama_sekolah; ?>">
	                        <img src="<?= base_url(); ?>assets/foto_sekolah_tpa/<?= $i->foto; ?>" class="img-fluid mb-2" alt="white sample"/>
	                      </a>
	                    </div>
										<?php } ?>
											<?php foreach ($gambar_tpa_glr->result() as $i ) {
												?>
											<div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
												<?php
												$sql = $this->db->query("SELECT nama_sekolah FROM sekolah_tpa WHERE id_sekolah = $i->id_sekolah");
												foreach ($sql->result() as $value) {
												 ?>
												<a href="<?= base_url(); ?>assets/foto_sekolah_tpa/<?= $i->foto; ?>" data-toggle="lightbox" data-title="<?= $value->nama_sekolah; ?>">
													<img src="<?= base_url(); ?>assets/foto_sekolah_tpa/<?= $i->foto; ?>" class="img-fluid mb-2" alt="white sample"/>
												</a>
											<?php } ?>
											</div>
										<?php } ?>
											<!-- terakhir untuk sd tpa -->

											<!-- untuk pt -->
											<?php foreach ($gambar_pt->result() as $i ) {
						          ?>
											<div class="filtr-item col-sm-2" data-category="2" data-sort="white sample">
	                      <a href="<?= base_url(); ?>assets/foto_pt/<?= $i->foto; ?>" data-toggle="lightbox" data-title="<?= $i->nama_pt; ?>">
	                        <img src="<?= base_url(); ?>assets/foto_pt/<?= $i->foto; ?>" class="img-fluid mb-2" alt="white sample"/>
	                      </a>
	                    </div>
										<?php } ?>
											<?php foreach ($gambar_pt_glr->result() as $i ) {
												?>
											<div class="filtr-item col-sm-2" data-category="2" data-sort="white sample">
												<?php
												$sql = $this->db->query("SELECT nama_pt FROM pt_home_industri WHERE id_pt = $i->id_pt");
												foreach ($sql->result() as $value) {
												 ?>
												<a href="<?= base_url(); ?>assets/foto_pt/<?= $i->foto; ?>" data-toggle="lightbox" data-title="<?= $value->nama_pt; ?>">
													<img src="<?= base_url(); ?>assets/foto_pt/<?= $i->foto; ?>" class="img-fluid mb-2" alt="white sample"/>
												</a>
											<?php } ?>
											</div>
										<?php } ?>
											<!-- terakhir untuk pt -->

											<!-- untuk ibadah -->
											<?php foreach ($gambar_ibadah->result() as $i ) {
						          ?>
											<div class="filtr-item col-sm-2" data-category="3" data-sort="white sample">
	                      <a href="<?= base_url(); ?>assets/foto_ibadah/<?= $i->foto; ?>" data-toggle="lightbox" data-title="<?= $i->nama_bangunan; ?>">
	                        <img src="<?= base_url(); ?>assets/foto_ibadah/<?= $i->foto; ?>" class="img-fluid mb-2" alt="white sample"/>
	                      </a>
	                    </div>
										<?php } ?>
											<?php foreach ($gambar_ibadah_glr->result() as $i ) {
												?>
											<div class="filtr-item col-sm-2" data-category="3" data-sort="white sample">
												<?php
												$sql = $this->db->query("SELECT nama_bangunan FROM ibadah WHERE id_ibadah = $i->id_ibadah");
												foreach ($sql->result() as $value) {
												 ?>
												<a href="<?= base_url(); ?>assets/foto_ibadah/<?= $i->foto; ?>" data-toggle="lightbox" data-title="<?= $value->nama_bangunan; ?>">
													<img src="<?= base_url(); ?>assets/foto_ibadah/<?= $i->foto; ?>" class="img-fluid mb-2" alt="white sample"/>
												</a>
											<?php } ?>
											</div>
										<?php } ?>
											<!-- terakhir untuk ibadah -->

											<?php foreach ($gambar_aset->result() as $i ) {
						          ?>
											<div class="filtr-item col-sm-2" data-category="4" data-sort="white sample">
	                      <a href="<?= base_url(); ?>assets/foto_aset/<?= $i->foto; ?>" data-toggle="lightbox" data-title="<?= $i->nama_aset; ?>">
	                        <img src="<?= base_url(); ?>assets/foto_aset/<?= $i->foto; ?>" class="img-fluid mb-2" alt="white sample"/>
	                      </a>
	                    </div>
										<?php } ?>
											<?php foreach ($gambar_aset_glr->result() as $i ) {
												?>
											<div class="filtr-item col-sm-2" data-category="4" data-sort="white sample">
												<?php
												$sql = $this->db->query("SELECT nama_aset FROM aset_desa WHERE id_aset = $i->id_aset");
												foreach ($sql->result() as $value) {
												 ?>
												<a href="<?= base_url(); ?>assets/foto_aset/<?= $i->foto; ?>" data-toggle="lightbox" data-title="<?= $value->nama_aset; ?>">
													<img src="<?= base_url(); ?>assets/foto_aset/<?= $i->foto; ?>" class="img-fluid mb-2" alt="white sample"/>
												</a>
											<?php } ?>
											</div>
										<?php } ?>

	                  </div>
	                </div>

	              </div>
	            </div>
	          </div>
	        </div>
	      </div><!-- /.container-fluid -->
	    </section>

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
<!-- jQuery UI -->
<script src="<?= base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- Ekko Lightbox -->
<script src="<?= base_url(); ?>assets/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url(); ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- Filterizr-->
<script src="<?= base_url(); ?>assets/plugins/filterizr/jquery.filterizr.min.js"></script>

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

<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>

</body>
</html>
