<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen_sekolah_tpa extends CI_Controller {

	public function index()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_manajemen_sekolah_tpa";
		$isi['breadcrumb0'] = "Data Master";
		$isi['breadcrumb'] = "Manajemen Sekolah & TPA";
		$isi['title'] = "Manajemen Sekolah & TPA | Pekon Podomoro";
		$isi['judul'] = "Manajemen Sekolah & TPA";
		$isi['daftar_sekolah'] = $this->Model_data->daftar_sekolah();
		$this->load->view('tampilan_dashboard_admin', $isi);
	}
}
