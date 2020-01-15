<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen_pt extends CI_Controller {

	public function index()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_manajemen_pt";
		$isi['breadcrumb0'] = "Data Master";
		$isi['breadcrumb'] = "Manajemen PT & Home Industri";
		$isi['title'] = "Manajemen PT & Home Industri | Pekon Podomoro";
		$isi['judul'] = "Manajemen PT & Home Industri";
		$isi['daftar_pt'] = $this->Model_data->daftar_pt();
		$this->load->view('tampilan_dashboard_admin', $isi);
	}
}
