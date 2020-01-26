<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen_aset_pekon extends CI_Controller {

	public function index()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_manajemen_aset_pekon";
		$isi['breadcrumb0'] = "Data Master";
		$isi['breadcrumb'] = "Manajemen Aset Pekon";
		$isi['title'] = "Manajemen Aset Pekon | Pekon Podomoro";
		$isi['judul'] = "Manajemen Aset Pekon";
		$isi['daftar_aset_pekon'] = $this->Model_data->daftar_aset_pekon();
		$this->load->view('tampilan_dashboard_admin', $isi);
	}

	public function data_publik()
	{
		$isi['menu'] = "menu_publik";
		$isi['konten'] = "konten_data_aset_pekon";
		$isi['title'] = "Data Aset Pekon | Pekon Podomoro";
		$isi['judul'] = "Data Aset Pekon";
		$isi['daftar_aset_pekon'] = $this->Model_data->daftar_aset_pekon();
		$this->load->view('tampilan_publik_nomap', $isi);
	}

	public function tambah()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "tambah_aset";
		$isi['breadcrumb0'] = "Manajemen Aset Pekon";
		$isi['breadcrumb'] = "Tambah Aset Pekon";
		$isi['title'] = "Tambah Aset Pekon | Pekon Podomoro";
		$isi['judul'] = "Tambah Aset Pekon";
		$isi['daftar_aset'] = $this->Model_data->daftar_aset_pekon();
		$this->load->view('tampilan_gis', $isi);
	}

	public function edit()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_edit_aset";
		$isi['breadcrumb0'] = "Data Master";
		$isi['judul'] = "Edit Aset Pekon ";
		$id_aset = $this->uri->segment(3);

		$title_detail = $this->Model_data->data_aset($id_aset);
		foreach ($title_detail->result() as $nama ) {
			$isi['title'] = " $nama->nama_aset | Edit";
			$isi['breadcrumb'] = "$nama->nama_aset";
		}

		$isi['data_pt'] = $this->Model_data->data_aset($id_aset);
		$this->load->view('tampilan_dashboard_admin', $isi);
	}

	public function simpan_edit()
	{
		$this->Model_keamanan->getkeamanan();
		$id_aset						= $this->input->post('id_aset');
		$nama								= $this->input->post('nama');
		$ketua							= $this->input->post('ketua');
		$alamat							= $this->input->post('alamat');
		$luas_tanah					= $this->input->post('luas_tanah');
		$luas_bangunan			= $this->input->post('luas_bangunan');
		$tahun_berdiri			= $this->input->post('tahun_berdiri');
		$this->Model_data->simpan_edit_aset($id_aset,$nama,$ketua,$alamat,$luas_tanah,$luas_bangunan,$tahun_berdiri);
		$this->session->set_flashdata('info',
				'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-check"></i> Info</h4>
						Data Berhasil Diubah
					</div>');
		redirect('manajemen_aset_pekon');
	}

	public function hapus()
	{
		$id_aset = $this->uri->segment(3);
		$this->Model_data->hapus_aset($id_aset);
		$this->session->set_flashdata('sukses','Data Berhasil dihapus');
		redirect(base_url('manajemen_aset_pekon'));
	}

	public function simpan() {
		$config['upload_path'] = './assets/foto_aset/'; //path folder
		$config['allowed_types']='jpg|JPG|png|PNG|jpeg|JPEG';
		$config['max_size'] = 0;
		$config['encrypt_name'] = FALSE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['foto_aset']['name']))
		{
			if ($this->upload->do_upload('foto_aset'))
			{
				$dta 						= $this->upload->data();
				$data						= $dta['file_name']; //Mengambil file name dari gambar yang diupload
				$author					= $this->session->userdata('id_akun');

				$longtitude			= $this->input->post('longtitude');
				$latitude				= $this->input->post('latitude');
				$ketua					= $this->input->post('ketua');
				$nama						= $this->input->post('nama');
				$this->Model_data->simpan_aset($author,$latitude,$longtitude,$ketua,$nama,$data);
				redirect('manajemen_aset_pekon');
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
