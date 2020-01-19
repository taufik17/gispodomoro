<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gis_pt extends CI_Controller {

	public function index()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_gis_pt";
		$isi['breadcrumb'] = "PT & Home Industri";
		$isi['title'] = "GIS PT & Home Industri | Pekon Podomoro";
		$isi['judul'] = "GIS PT & Home Industri";
		$this->load->view('tampilan_gis', $isi);
	}

	public function pt_json()
	{
		$data = $this->db->get('pt_home_industri')->result();
		echo json_encode($data);
	}
}
