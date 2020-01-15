<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function index()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['pendidikan'] = $this->Model_data->datapendidikan();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_profil";
		$isi['breadcrumb0'] = "Profil";
		$isi['breadcrumb'] = "";
		$isi['title'] = "Profil | Pekon Podomoro";
		$isi['judul'] = "Profil";
		$this->load->view('tampilan_dashboard_admin', $isi);
	}
}
