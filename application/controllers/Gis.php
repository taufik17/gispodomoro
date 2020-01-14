<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gis extends CI_Controller {
	public function index()
	{
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_gis";
		$isi['title'] = "GIS | Pekon Podomoro";
		$isi['judul'] = "GIS";
		$this->load->view('tampilan_dashboard_admin', $isi);
	}
}
