<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gis_aset_pekon extends CI_Controller {

	public function index()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_gis_aset_pekon";
		$isi['breadcrumb'] = "Aset Pekon";
		$isi['title'] = "GIS Aset Pekon | Pekon Podomoro";
		$isi['judul'] = "GIS Aset Pekon";
		$this->load->view('tampilan_gis', $isi);
	}

	public function sekolah_tpa_json()
	{
		$data = $this->db->get('sekolah_tpa')->result();
		echo json_encode($data);
	}
}
