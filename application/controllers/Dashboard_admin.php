<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_admin extends CI_Controller {
	public function index()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['title'] = "Dashboard Admin | Pekon Podomoro";
		$isi['breadcrumb0'] = "Dashboard";
		$isi['breadcrumb'] = "";
		$isi['judul'] = "Dashboard";
		$isi['konten'] = "konten_dashboard_admin";
		$isi['jumlah_sekolah'] = $this->Model_data->jumlah_sekolah();
		$isi['jumlah_ibadah'] = $this->Model_data->jumlah_ibadah();
		$isi['jumlah_pt'] = $this->Model_data->jumlah_pt();
		$isi['jumlah_aset_desa'] = $this->Model_data->jumlah_aset_desa();
		$this->load->view('tampilan_dashboard_admin', $isi);
	}

	public function logout()
	{
		$this->session->sess_destroy($sess);
		$this->session->unset_userdata($sess);
		redirect('login');
	}
}
