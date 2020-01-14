<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_admin extends CI_Controller {
	public function index()
	{
		$isi['menu'] = "menu_admin";
		$isi['title'] = "Dashboard Admin | Pekon Podomoro";
		$this->load->view('tampilan_dashboard_admin', $isi);
	}
}
