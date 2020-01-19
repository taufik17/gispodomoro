<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen_sekolah_tpa extends CI_Controller {

	public function index()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_manajemen_sekolah_tpa";
		$isi['breadcrumb0'] = "Data Master";
		$isi['breadcrumb'] = "Manajemen Sekolah & TPA";
		$isi['title'] = "Manajemen Sekolah & TPA | Pekon Podomoro";
		$isi['judul'] = "Manajemen Sekolah & TPA";
		$isi['daftar_sekolah'] = $this->Model_data->daftar_sekolah();
		$this->load->view('tampilan_dashboard_admin', $isi);
	}

	public function tambah()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "tambah_sekolah_tpa";
		$isi['breadcrumb0'] = "Manajemen Sekolah & TPA";
		$isi['breadcrumb'] = "Tambah Sekolah & TPA";
		$isi['title'] = "Tambah Sekolah & TPA | Pekon Podomoro";
		$isi['judul'] = "Tambah Sekolah & TPA";
		$isi['daftar_sekolah'] = $this->Model_data->daftar_sekolah();
		$this->load->view('tampilan_gis', $isi);
	}

	public function lihat()
	{
		echo "lihat";
	}

	public function edit()
	{
		echo "edit";
	}

	public function hapus()
	{
		$id_sekolah = $this->uri->segment(3);
		$this->Model_data->hapus_sekolah($id_sekolah);
		$this->session->set_flashdata('sukses','Data Berhasil dihapus');
		redirect(base_url('manajemen_sekolah_tpa'));
	}

	public function simpan() {
		$config['upload_path'] = './assets/foto_sekolah_tpa/'; //path folder
		$config['allowed_types']='jpg|JPG|png|PNG|jpeg|JPEG';
		$config['max_size'] = 0;
		$config['encrypt_name'] = FALSE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['foto_sekolah_tpa']['name']))
		{
			if ($this->upload->do_upload('foto_sekolah_tpa'))
			{
				$dta 						= $this->upload->data();
				$data						= $dta['file_name']; //Mengambil file name dari gambar yang diupload
				$author					= $this->session->userdata('id_akun');

				$longtitude			= $this->input->post('longtitude');
				$latitude				= $this->input->post('latitude');
				$status_sekolah	= $this->input->post('status_sekolah');
				$kepsek					= $this->input->post('kepsek');
				$nama						= $this->input->post('nama');
				$no_telp				= $this->input->post('no_telp');
				$this->Model_data->simpan_sekolah_tpa($author,$latitude,$longtitude,$status_sekolah,$kepsek,$nama,$data,$no_telp);
				redirect('manajemen_sekolah_tpa');
			}
			else
			{
				echo "File Gagal Upload. File harus bertipe jpg atau png";
			}
		}
		else
		{
			echo "Gagal, File belum di pilih";
		}
	}
}
