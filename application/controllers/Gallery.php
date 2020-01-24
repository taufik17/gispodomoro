<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	public function index()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_galeri";
		$isi['breadcrumb0'] = "Galeri";
		$isi['breadcrumb'] = "";
		$isi['title'] = "Galeri | Pekon Podomoro";
		$isi['judul'] = "Galeri";
		$isi['gambar_tpa'] = $this->db->query("SELECT foto, nama_sekolah FROM sekolah_tpa");
		$isi['gambar_tpa_glr'] = $this->db->query("SELECT id_sekolah, foto FROM tbl_foto_sekolah");
		$isi['gambar_pt'] = $this->db->query("SELECT foto, nama_pt FROM pt_home_industri");
		$isi['gambar_pt_glr'] = $this->db->query("SELECT id_pt, foto FROM tbl_foto_pt");
		$isi['gambar_ibadah'] = $this->db->query("SELECT foto, nama_bangunan FROM ibadah");
		$isi['gambar_ibadah_glr'] = $this->db->query("SELECT id_ibadah, foto FROM tbl_foto_ibadah");
		$isi['gambar_aset'] = $this->db->query("SELECT foto, nama_aset FROM aset_desa");
		$isi['gambar_aset_glr'] = $this->db->query("SELECT id_aset, foto FROM tbl_foto_aset");
		$this->load->view('tampilan_dashboard_admin', $isi);
	}

	public function galeri_publik()
	{
		$isi['menu'] = "menu_publik";
		$isi['konten'] = "konten_publik_galeri";
		$isi['title'] = "Galeri | Pekon Podomoro";
		$isi['judul'] = "Galeri";
		$isi['gambar_tpa'] = $this->db->query("SELECT foto, nama_sekolah FROM sekolah_tpa");
		$isi['gambar_tpa_glr'] = $this->db->query("SELECT id_sekolah, foto FROM tbl_foto_sekolah");
		$isi['gambar_pt'] = $this->db->query("SELECT foto, nama_pt FROM pt_home_industri");
		$isi['gambar_pt_glr'] = $this->db->query("SELECT id_pt, foto FROM tbl_foto_pt");
		$isi['gambar_ibadah'] = $this->db->query("SELECT foto, nama_bangunan FROM ibadah");
		$isi['gambar_ibadah_glr'] = $this->db->query("SELECT id_ibadah, foto FROM tbl_foto_ibadah");
		$isi['gambar_aset'] = $this->db->query("SELECT foto, nama_aset FROM aset_desa");
		$isi['gambar_aset_glr'] = $this->db->query("SELECT id_aset, foto FROM tbl_foto_aset");
		$this->load->view('tampilan_publik_nomap', $isi);
	}
}
