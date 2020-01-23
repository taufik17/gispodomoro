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

	public function detail()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$id_sekolah = $this->uri->segment(3);
		$title_detail = $this->db->query("SELECT * FROM sekolah_tpa WHERE id_sekolah = $id_sekolah");
		foreach ($title_detail->result() as $nama ) {
			$isi['title'] = " $nama->nama_sekolah | Pekon Podomoro";
			$isi['judul'] = "$nama->nama_sekolah";
			$isi['breadcrumb'] = "$nama->nama_sekolah";
			$isi['latitdue'] = "$nama->latitude";
			$isi['longtitude'] = "$nama->longtitude";
			$isi['foto1'] = "$nama->foto";
		}
		$isi['foto'] = $this->db->query("SELECT * FROM tbl_foto_sekolah WHERE id_sekolah = $id_sekolah");
		$isi['nama_sekolah'] = "$nama->nama_sekolah";
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "detail_gis_sekolah_tpa";
		$isi['id_sekolah'] = $this->uri->segment(3);
		$this->load->view('tampilan_gis', $isi);
	}

	public function detail_publik()
	{
		$id_sekolah = $this->uri->segment(3);
		$title_detail = $this->db->query("SELECT * FROM sekolah_tpa WHERE id_sekolah = $id_sekolah");
		foreach ($title_detail->result() as $nama ) {
			$isi['title'] = " $nama->nama_sekolah | Pekon Podomoro";
			$isi['judul'] = "$nama->nama_sekolah";
			$isi['latitdue'] = "$nama->latitude";
			$isi['longtitude'] = "$nama->longtitude";
			$isi['foto1'] = "$nama->foto";
		}
		$isi['foto'] = $this->db->query("SELECT * FROM tbl_foto_sekolah WHERE id_sekolah = $id_sekolah");
		$isi['nama_sekolah'] = "$nama->nama_sekolah";
		$isi['menu'] = "menu_publik";
		$isi['konten'] = "detail_publik_gis_sekolah_tpa";
		$isi['id_sekolah'] = $this->uri->segment(3);
		$this->load->view('tampilan_publik', $isi);
	}
}
