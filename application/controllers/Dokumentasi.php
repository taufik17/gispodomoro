<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumentasi extends CI_Controller {
	public function index()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_dokumentasi";
		$isi['breadcrumb0'] = "Dokumentasi";
		$isi['breadcrumb'] = "";
		$isi['title'] = "Dokumentasi | Pekon Podomoro";
		$isi['judul'] = "Dokumentasi";
		$this->load->view('tampilan_dashboard_admin', $isi);
	}
}
