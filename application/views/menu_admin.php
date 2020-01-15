<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?= base_url(); ?>" class="brand-link">
		<img src="<?= base_url(); ?>assets/dist/img/pringsewu.png" alt="AdminLTE Logo" class="brand-image">
		<span class="brand-text font-weight-light">
			<h5>
				GIS Pekon Podomoro
			</h5>
		</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
						 with font-awesome or any other icon font library -->
				<li class="nav-item">
					<a href="<?= base_url(); ?>dashboard_admin"
						<?=$this->uri->segment(1) == 'dashboard_admin' || $this->uri->segment(1) == 'Dashboard_admin' ? 'class="nav-link active"' : 'class="nav-link"'?>>
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>

				<li <?=$this->uri->segment(1) == 'manajemen_sekolah_tpa'
				|| $this->uri->segment(1) == 'manajemen_tempat_ibadah'
				|| $this->uri->segment(1) == 'manajemen_pt' || $this->uri->segment(1) == 'manajemen_aset_pekon'
				? 'class="nav-item has-treeview menu-open"' : 'class="nav-item has-treeview"'?>>
					<a href="#"
					<?=$this->uri->segment(1) == 'manajemen_sekolah_tpa'
					|| $this->uri->segment(1) == 'manajemen_tempat_ibadah'
					|| $this->uri->segment(1) == 'manajemen_pt' || $this->uri->segment(1) == 'manajemen_aset_pekon'
					? 'class="nav-link active"' : 'class="nav-link"'?>>
						<i class="nav-icon fas fa-database"></i>
						<p>
							Master Data
							<i class="fas fa-angle-left right"></i>
							<span class="badge badge-info right">4</span>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url(); ?>manajemen_sekolah_tpa"
								<?=$this->uri->segment(1) == 'Manajemen_sekolah_tpa' || $this->uri->segment(1) == 'manajemen_sekolah_tpa' ? 'class="nav-link active"' : 'class="nav-link"'?>>
								<i class="far fa-circle nav-icon"></i>
								<p>Data Sekolah & TPA</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url(); ?>manajemen_tempat_ibadah"
								<?=$this->uri->segment(1) == 'Manajemen_tempat_ibadah' || $this->uri->segment(1) == 'manajemen_tempat_ibadah' ? 'class="nav-link active"' : 'class="nav-link"'?>>
								<i class="far fa-circle nav-icon"></i>
								<p>Data Tempat Ibadah</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url(); ?>manajemen_pt"
								<?=$this->uri->segment(1) == 'Manajemen_pt' || $this->uri->segment(1) == 'manajemen_pt' ? 'class="nav-link active"' : 'class="nav-link"'?>>
								<i class="far fa-circle nav-icon"></i>
								<p>Data PT & Home Industri</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url(); ?>manajemen_aset_pekon"
								<?=$this->uri->segment(1) == 'Manajemen_aset_pekon' || $this->uri->segment(1) == 'manajemen_aset_pekon' ? 'class="nav-link active"' : 'class="nav-link"'?>>
								<i class="far fa-circle nav-icon"></i>
								<p>Data Aset Pekon</p>
							</a>
						</li>
					</ul>
				</li>

				<li <?=$this->uri->segment(1) == 'gis_sekolah_tpa' || $this->uri->segment(1) == 'gis_all'
				|| $this->uri->segment(1) == 'gis_tempat_ibadah' || $this->uri->segment(1) == 'gis_pt'
				|| $this->uri->segment(1) == 'gis_aset_pekon' ? 'class="nav-item has-treeview menu-open"' : 'class="nav-item has-treeview"'?>>
					<a href="#"
					<?=$this->uri->segment(1) == 'gis_sekolah_tpa' || $this->uri->segment(1) == 'gis_all'
					|| $this->uri->segment(1) == 'gis_tempat_ibadah' || $this->uri->segment(1) == 'gis_pt'
					|| $this->uri->segment(1) == 'gis_aset_pekon' ? 'class="nav-link active"' : 'class="nav-link"'?>>
						<i class="nav-icon fas fa-globe"></i>
						<p>
							GIS
							<i class="fas fa-angle-left right"></i>
							<span class="badge badge-info right">5</span>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url(); ?>gis_all"
								<?=$this->uri->segment(1) == 'Gis_all' || $this->uri->segment(1) == 'gis_all' ? 'class="nav-link active"' : 'class="nav-link"'?>>
								<i class="far fa-circle nav-icon"></i>
								<p>Semua Item</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url(); ?>gis_sekolah_tpa"
								<?=$this->uri->segment(1) == 'Gis_sekolah_tpa' || $this->uri->segment(1) == 'gis_sekolah_tpa' ? 'class="nav-link active"' : 'class="nav-link"'?>>
								<i class="far fa-circle nav-icon"></i>
								<p>Sekolah & TPA</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url(); ?>gis_tempat_ibadah"
								<?=$this->uri->segment(1) == 'Gis_tempat_ibadah' || $this->uri->segment(1) == 'gis_tempat_ibadah' ? 'class="nav-link active"' : 'class="nav-link"'?>>
								<i class="far fa-circle nav-icon"></i>
								<p>Tempat Ibadah</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url(); ?>gis_pt"
								<?=$this->uri->segment(1) == 'Gis_pt' || $this->uri->segment(1) == 'gis_pt' ? 'class="nav-link active"' : 'class="nav-link"'?>>
								<i class="far fa-circle nav-icon"></i>
								<p>PT & Home Industri</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url(); ?>gis_aset_pekon"
								<?=$this->uri->segment(1) == 'Gis_aset_pekon' || $this->uri->segment(1) == 'gis_aset_pekon' ? 'class="nav-link active"' : 'class="nav-link"'?>>
								<i class="far fa-circle nav-icon"></i>
								<p>Bangunan Aset Pekon</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-header">Berkas</li>
				<li class="nav-item">
					<a href="<?= base_url(); ?>gallery"
					<?=$this->uri->segment(1) == 'Gallery' || $this->uri->segment(1) == 'gallery' ? 'class="nav-link active"' : 'class="nav-link"'?>>
						<i class="nav-icon far fa-image"></i>
						<p>
							Gallery
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url(); ?>dokumentasi"
					<?=$this->uri->segment(1) == 'Dokumentasi' || $this->uri->segment(1) == 'dokumentasi' ? 'class="nav-link active"' : 'class="nav-link"'?>>
						<i class="nav-icon fas fa-file"></i>
						<p>Dokumentasi</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url(); ?>about"
					<?=$this->uri->segment(1) == 'About' || $this->uri->segment(1) == 'about' ? 'class="nav-link active"' : 'class="nav-link"'?>>
						<i class="nav-icon fas fa-info-circle"></i>
						<p>About</p>
					</a>
				</li>


			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
