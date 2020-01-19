<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gis_tempat_ibadah extends CI_Controller {

	public function index()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_gis_tempat_ibadah";
		$isi['breadcrumb'] = "Tempat Ibadah";
		$isi['title'] = "GIS Tempat Ibadah | Pekon Podomoro";
		$isi['judul'] = "GIS Tempat Ibadah";
		$this->load->view('tampilan_gis', $isi);
	}

	public function ibadah_json()
	{
		$data = $this->db->get('ibadah')->result();
		echo json_encode($data);
	}
}
