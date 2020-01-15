<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen_tempat_ibadah extends CI_Controller {

	public function index()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_manajemen_tempat_ibadah";
		$isi['breadcrumb0'] = "Data Master";
		$isi['breadcrumb'] = "Manajemen Tempat Ibadah";
		$isi['title'] = "Manajemen Tempat Ibadah | Pekon Podomoro";
		$isi['judul'] = "Manajemen Tempat Ibadah";
		$isi['daftar_ibadah'] = $this->Model_data->daftar_ibadah();
		$this->load->view('tampilan_dashboard_admin', $isi);
	}
}
