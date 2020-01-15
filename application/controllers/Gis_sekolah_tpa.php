<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gis_sekolah_tpa extends CI_Controller {

	public function index()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_gis_sekolah_tpa";
		$isi['breadcrumb'] = "Sekolah & TPA";
		$isi['title'] = "GIS Sekolah & TPA | Pekon Podomoro";
		$isi['judul'] = "GIS Sekolah & TPA";
		$this->load->view('tampilan_gis', $isi);
	}

	public function sekolah_tpa_json()
	{
		$data = $this->db->get('sekolah_tpa')->result();
		echo json_encode($data);
	}
}
