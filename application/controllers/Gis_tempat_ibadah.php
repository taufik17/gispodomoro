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

	public function detail()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$id_ibadah = $this->uri->segment(3);
		$title_detail = $this->db->query("SELECT * FROM ibadah WHERE id_ibadah = $id_ibadah");
		foreach ($title_detail->result() as $nama ) {
			$isi['title'] = " $nama->nama_bangunan | Pekon Podomoro";
			$isi['judul'] = "$nama->nama_bangunan";
			$isi['breadcrumb'] = "$nama->nama_bangunan";
			$isi['latitdue'] = "$nama->latitude";
			$isi['longtitude'] = "$nama->longtitude";
		}
		$isi['nama_bangunan'] = "$nama->nama_bangunan";
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "detail_gis_tempat_ibadah";
		$isi['id_ibadah'] = $this->uri->segment(3);
		$this->load->view('tampilan_gis', $isi);
	}

}
