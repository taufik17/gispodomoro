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
		$title_detail = $this->db->query("SELECT nama_sekolah FROM sekolah_tpa WHERE id_sekolah = $id_sekolah");
		foreach ($title_detail->result() as $nama ) {
			$isi['title'] = " $nama->nama_sekolah | Pekon Podomoro";
			$isi['judul'] = "$nama->nama_sekolah";
			$isi['breadcrumb'] = "$nama->nama_sekolah";
		}
		$isi['nama_sekolah'] = "$nama->nama_sekolah";
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "detail_gis_sekolah_tpa";

		$url = current_url();
		$karakter = substr($url, strpos($url, "detail/") + 7);
		$isi['nilai'] = "$karakter";
		$isi['id_sekolah'] = $this->uri->segment(3);
		$this->load->view('tampilan_gis', $isi);
	}
}
