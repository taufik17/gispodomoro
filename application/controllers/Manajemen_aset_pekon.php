<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen_aset_pekon extends CI_Controller {

	public function index()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_manajemen_aset_pekon";
		$isi['breadcrumb0'] = "Data Master";
		$isi['breadcrumb'] = "Manajemen Aset Pekon";
		$isi['title'] = "Manajemen Aset Pekon | Pekon Podomoro";
		$isi['judul'] = "Manajemen Aset Pekon";
		$isi['daftar_aset_pekon'] = $this->Model_data->daftar_aset_pekon();
		$this->load->view('tampilan_dashboard_admin', $isi);
	}
}
