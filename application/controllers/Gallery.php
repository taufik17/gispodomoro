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
		$this->load->view('tampilan_dashboard_admin', $isi);
	}

	public function galeri_publik()
	{
		$isi['menu'] = "menu_publik";
		$isi['konten'] = "konten_publik_galeri";
		$isi['title'] = "Galeri | Pekon Podomoro";
		$isi['judul'] = "Galeri";
		$this->load->view('tampilan_publik_nomap', $isi);
	}
}
