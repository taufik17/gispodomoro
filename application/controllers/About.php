<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function index()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_about";
		$isi['breadcrumb0'] = "About";
		$isi['breadcrumb'] = "";
		$isi['title'] = "About | Pekon Podomoro";
		$isi['judul'] = "About";
		$this->load->view('tampilan_dashboard_admin', $isi);
	}

	public function about_publik()
	{
		$isi['menu'] = "menu_publik";
		$isi['konten'] = "konten_publik_about";
		$isi['title'] = "About | Pekon Podomoro";
		$isi['judul'] = "About";
		$this->load->view('tampilan_publik_nomap', $isi);
	}
}
