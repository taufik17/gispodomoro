<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gis_all extends CI_Controller {

	public function index()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_gis_all";
		$isi['breadcrumb'] = "Semua Item";
		$isi['title'] = "GIS Semua Aset | Pekon Podomoro";
		$isi['judul'] = "GIS Semua Aset & Potensi";
		$this->load->view('tampilan_gis', $isi);
	}
}
