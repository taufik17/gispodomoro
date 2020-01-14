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
				<li class="nav-item">
					<a href="<?= base_url(); ?>gis"
					<?=$this->uri->segment(1) == 'Gis' || $this->uri->segment(1) == 'gis' ? 'class="nav-link active"' : 'class="nav-link"'?>>
						<i class="nav-icon fas fa-globe"></i>
						<p>
							GIS
							<span class="right badge badge-info">Maps</span>
						</p>
					</a>
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
