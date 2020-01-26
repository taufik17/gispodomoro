<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen_pt extends CI_Controller {

	public function index()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_manajemen_pt";
		$isi['breadcrumb0'] = "Data Master";
		$isi['breadcrumb'] = "Manajemen PT & Home Industri";
		$isi['title'] = "Manajemen PT & Home Industri | Pekon Podomoro";
		$isi['judul'] = "Manajemen PT & Home Industri";
		$isi['daftar_pt'] = $this->Model_data->daftar_pt();
		$this->load->view('tampilan_dashboard_admin', $isi);
	}

	public function data_publik()
	{
		$isi['menu'] = "menu_publik";
		$isi['konten'] = "konten_data_pt";
		$isi['title'] = "Data PT & Home Industri | Pekon Podomoro";
		$isi['judul'] = "Data PT & Home Industri";
		$isi['daftar_pt'] = $this->Model_data->daftar_pt();
		$this->load->view('tampilan_publik_nomap', $isi);
	}

	public function tambah()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "tambah_pt";
		$isi['breadcrumb0'] = "Manajemen PT & Home Industri";
		$isi['breadcrumb'] = "Tambah PT & Home Industri";
		$isi['title'] = "Tambah PT & Home Industri | Pekon Podomoro";
		$isi['judul'] = "Tambah PT & Home Industri";
		$isi['daftar_pt'] = $this->Model_data->daftar_pt();
		$this->load->view('tampilan_gis', $isi);
	}

	public function edit()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_edit_pt";
		$isi['breadcrumb0'] = "Data Master";
		$isi['judul'] = "Edit PT / Home Industri";
		$id_pt = $this->uri->segment(3);

		$title_detail = $this->Model_data->data_pt($id_pt);
		foreach ($title_detail->result() as $nama ) {
			$isi['title'] = " $nama->nama_pt | Edit";
			$isi['breadcrumb'] = "$nama->nama_pt";
		}

		$isi['data_pt'] = $this->Model_data->data_pt($id_pt);
		$this->load->view('tampilan_dashboard_admin', $isi);
	}

	public function simpan_edit()
	{
		$this->Model_keamanan->getkeamanan();
		$id_pt							= $this->input->post('id_pt');
		$nama								= $this->input->post('nama');
		$owner							= $this->input->post('owner');
		$no_telp						= $this->input->post('no_telp');
		$web								= $this->input->post('web');
		$email							= $this->input->post('email');
		$sekretaris					= $this->input->post('sekretaris');
		$bendahara					= $this->input->post('bendahara');
		$humas							= $this->input->post('humas');
		$tenaga_kerja				= $this->input->post('tenaga_kerja');
		$alamat							= $this->input->post('alamat');
		$luas_tanah					= $this->input->post('luas_tanah');
		$luas_bangunan			= $this->input->post('luas_bangunan');
		$tahun_berdiri			= $this->input->post('tahun_berdiri');
		$this->Model_data->simpan_edit_pt($id_pt,$nama,$owner,$no_telp,$web,$email,$sekretaris,$bendahara,$humas,$tenaga_kerja,$alamat,
																							$luas_tanah,$luas_bangunan,$tahun_berdiri);
		$this->session->set_flashdata('info',
				'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-check"></i> Info</h4>
						Data Berhasil Diubah
					</div>');
		redirect('manajemen_pt');
	}


	public function hapus()
	{
		$id_pt = $this->uri->segment(3);
		$this->Model_data->hapus_pt($id_pt);
		$this->session->set_flashdata('sukses','Data Berhasil dihapus');
		redirect(base_url('manajemen_pt'));
	}

	public function simpan() {
		$config['upload_path'] = './assets/foto_pt/'; //path folder
		$config['allowed_types']='jpg|JPG|png|PNG|jpeg|JPEG';
		$config['max_size'] = 0;
		$config['encrypt_name'] = FALSE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['foto_pt']['name']))
		{
			if ($this->upload->do_upload('foto_pt'))
			{
				$dta 						= $this->upload->data();
				$data						= $dta['file_name']; //Mengambil file name dari gambar yang diupload
				$author					= $this->session->userdata('id_akun');

				$longtitude			= $this->input->post('longtitude');
				$latitude				= $this->input->post('latitude');
				$pemilik				= $this->input->post('pemilik');
				$nama						= $this->input->post('nama');
				$this->Model_data->simpan_pt($author,$latitude,$longtitude,$pemilik,$nama,$data);
				redirect('manajemen_pt');
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
