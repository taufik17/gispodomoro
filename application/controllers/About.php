<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function index()
	{
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_about";
		$isi['title'] = "About | Pekon Podomoro";
		$isi['judul'] = "About";
		$this->load->view('tampilan_dashboard_admin', $isi);
	}
}