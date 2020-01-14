<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	public function index()
	{
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_galeri";
		$isi['title'] = "Galeri | Pekon Podomoro";
		$isi['judul'] = "Galeri";
		$this->load->view('tampilan_dashboard_admin', $isi);
	}
}
