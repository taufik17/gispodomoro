<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publik extends CI_Controller {
	public function index()
	{
		$isi['menu'] = "menu_publik";
		$isi['title'] = "Halaman Utama | GIS Pekon Podomoro";
		$isi['konten'] = "konten_home_publik";
		$this->load->view('tampilan_publik', $isi);
	}
}
