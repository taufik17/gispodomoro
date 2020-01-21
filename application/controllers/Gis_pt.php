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

	public function detail()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$id_pt = $this->uri->segment(3);
		$title_detail = $this->db->query("SELECT * FROM pt_home_industri WHERE id_pt = $id_pt");
		foreach ($title_detail->result() as $nama ) {
			$isi['title'] = " $nama->nama_pt | Pekon Podomoro";
			$isi['judul'] = "$nama->nama_pt";
			$isi['breadcrumb'] = "$nama->nama_pt";
			$isi['latitdue'] = "$nama->latitude";
			$isi['longtitude'] = "$nama->longtitude";
		}
		$isi['nama_pt'] = "$nama->nama_pt";
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "detail_gis_pt";
		$isi['id_pt'] = $this->uri->segment(3);
		$this->load->view('tampilan_gis', $isi);
	}

}
