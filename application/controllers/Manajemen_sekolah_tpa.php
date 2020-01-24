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

	public function data_publik()
	{
		$isi['menu'] = "menu_publik";
		$isi['konten'] = "konten_data_sekolah_tpa";
		$isi['title'] = "Data Sekolah & TPA | Pekon Podomoro";
		$isi['judul'] = "Data Sekolah & TPA";
		$isi['daftar_sekolah'] = $this->Model_data->daftar_sekolah();
		$this->load->view('tampilan_publik_nomap', $isi);
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

	public function edit()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_edit_sekolah_tpa";
		$isi['breadcrumb0'] = "Data Master";
		$isi['judul'] = "Edit Sekolah & TPA";
		$id_sekolah = $this->uri->segment(3);

		$title_detail = $this->Model_data->data_sekolah($id_sekolah);
		foreach ($title_detail->result() as $nama ) {
			$isi['title'] = " $nama->nama_sekolah | Edit";
			$isi['breadcrumb'] = "$nama->nama_sekolah";
		}

		$isi['data_sekolah'] = $this->Model_data->data_sekolah($id_sekolah);
		$this->load->view('tampilan_dashboard_admin', $isi);
	}

	public function hapus()
	{
		$this->Model_keamanan->getkeamanan();
		$id_sekolah = $this->uri->segment(3);
		$this->Model_data->hapus_sekolah($id_sekolah);
		$this->session->set_flashdata('sukses','Data Berhasil dihapus');
		redirect(base_url('manajemen_sekolah_tpa'));
	}

	public function simpan() {
		$this->Model_keamanan->getkeamanan();
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

	public function simpan_edit()
	{
		$this->Model_keamanan->getkeamanan();
		$npsn						= $this->input->post('npsn');
		$nama_sekolah		= $this->input->post('nama_sekolah');
		$status_sekolah	= $this->input->post('status_sekolah');
		$kurikulum			= $this->input->post('kurikulum');
		$alamat_sekolah	= $this->input->post('alamat_sekolah');
		$no_telpon			= $this->input->post('no_telpon');
		$web						= $this->input->post('web');
		$email					= $this->input->post('email');
		$jumlah_siswa		= $this->input->post('jumlah_siswa');
		$kepsek					= $this->input->post('kepsek');
		$telpon_kepsek	= $this->input->post('telpon_kepsek');
		$tendik					= $this->input->post('tendik');
		$jmlh_guru			= $this->input->post('jmlh_guru');
		$jmlh_honorer		= $this->input->post('jmlh_honorer');
		$jmlh_pns				= $this->input->post('jmlh_pns');
		$staff					= $this->input->post('staff');
		$visi						= $this->input->post('visi');
		$misi						= $this->input->post('misi');
		$tagline				= $this->input->post('tagline');
		$id_sekolah			= $this->input->post('id_sekolah');

		$this->Model_data->simpan_edit_sekolah_tpa($npsn,$nama_sekolah,$status_sekolah,$kurikulum,$alamat_sekolah,$no_telpon,$web,$email,$jumlah_siswa,$kepsek,
																							$telpon_kepsek,$tendik,$jmlh_guru,$jmlh_honorer,$jmlh_pns,$staff,$visi,$misi,$tagline,$id_sekolah);
		$this->session->set_flashdata('info',
				'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-check"></i> Info</h4>
						Data Berhasil Diubah
					</div>');
		redirect('manajemen_sekolah_tpa');
	}
}
