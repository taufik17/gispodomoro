<div class="collapse navbar-collapse order-3" id="navbarCollapse">
	<ul class="navbar-nav">
		<li class="nav-item active">
			<a href="<?= base_url(); ?>" class="nav-link">
				<i class="fas fa-home">&nbsp</i>
				Home
			</a>
		</li>

		<li class="nav-item dropdown">
			<a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
				<i class="fas fa-th-large">&nbsp</i>
				List Data</a>
			<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
				<li><a href="#" class="dropdown-item">Data Sekolah & TPA</a></li>
				<li><a href="#" class="dropdown-item">Data Tempat Ibadah</a></li>
				<li><a href="#" class="dropdown-item">Data PT & Home Industri</a></li>
				<li><a href="#" class="dropdown-item">Data PT Aset Pekon</a></li>
			</ul>
		</li>

		<li class="nav-item">
			<a href="<?= base_url(); ?>" class="nav-link">
				<i class="fas fa-image">&nbsp</i>
				Galeri
			</a>
		</li>

		<li class="nav-item">
			<a href="<?= base_url(); ?>" class="nav-link">
				<i class="fas fa-info-circle">&nbsp</i>
				About
			</a>
		</li>
	</ul>

<ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
	<!-- Notifications Dropdown Menu -->
	<li class="nav-item">
		<a href="<?= base_url(); ?>login">
			<button type="button" class="btn btn-block btn-outline-success">
				<i class="fas fa-sign-in-alt">&nbsp</i>
				Login</button>
		</a>
	</li>

</ul>
</div>
