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

	public function aset_json()
	{
		$data = $this->db->get('aset_desa')->result();
		echo json_encode($data);
	}

	public function detail()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$id_aset = $this->uri->segment(3);
		$title_detail = $this->db->query("SELECT * FROM aset_desa WHERE id_aset = $id_aset");
		foreach ($title_detail->result() as $nama ) {
			$isi['title'] = " $nama->nama_aset | Pekon Podomoro";
			$isi['judul'] = "$nama->nama_aset";
			$isi['breadcrumb'] = "$nama->nama_aset";
			$isi['latitdue'] = "$nama->latitude";
			$isi['longtitude'] = "$nama->longtitude";
			$isi['foto1'] = "$nama->foto";
		}
		$isi['foto'] = $this->db->query("SELECT * FROM tbl_foto_aset WHERE id_aset = $id_aset");
		$isi['nama_aset'] = "$nama->nama_aset";
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "detail_gis_aset";
		$isi['id_aset'] = $this->uri->segment(3);
		$this->load->view('tampilan_gis', $isi);
	}

}
