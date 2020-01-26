<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen_tempat_ibadah extends CI_Controller {

	public function index()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_manajemen_tempat_ibadah";
		$isi['breadcrumb0'] = "Data Master";
		$isi['breadcrumb'] = "Manajemen Tempat Ibadah";
		$isi['title'] = "Manajemen Tempat Ibadah | Pekon Podomoro";
		$isi['judul'] = "Manajemen Tempat Ibadah";
		$isi['daftar_ibadah'] = $this->Model_data->daftar_ibadah();
		$this->load->view('tampilan_dashboard_admin', $isi);
	}

	public function data_publik()
	{
		$isi['menu'] = "menu_publik";
		$isi['konten'] = "konten_data_tempat_ibadah";
		$isi['title'] = "Data Tempat Ibadah | Pekon Podomoro";
		$isi['judul'] = "Data Tempat Ibadah";
		$isi['daftar_ibadah'] = $this->Model_data->daftar_ibadah();
		$this->load->view('tampilan_publik_nomap', $isi);
	}

	public function tambah()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "tambah_tempat_ibadah";
		$isi['breadcrumb0'] = "Manajemen Tempat Ibadah";
		$isi['breadcrumb'] = "Tambah Tempat Ibadah";
		$isi['title'] = "Tambah Tempat Ibadah | Pekon Podomoro";
		$isi['judul'] = "Tambah Tempat Ibadah";
		$isi['daftar_ibadah'] = $this->Model_data->daftar_ibadah();
		$this->load->view('tampilan_gis', $isi);
	}

	public function edit()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_edit_tempat_ibadah";
		$isi['breadcrumb0'] = "Data Master";
		$isi['judul'] = "Edit Tempat Ibadah";
		$id_ibadah = $this->uri->segment(3);

		$title_detail = $this->Model_data->data_ibadah($id_ibadah);
		foreach ($title_detail->result() as $nama ) {
			$isi['title'] = " $nama->nama_bangunan | Edit";
			$isi['breadcrumb'] = "$nama->nama_bangunan";
		}

		$isi['data_sekolah'] = $this->Model_data->data_ibadah($id_ibadah);
		$this->load->view('tampilan_dashboard_admin', $isi);
	}

	public function simpan_edit()
	{
		$this->Model_keamanan->getkeamanan();
		$id_ibadah					= $this->input->post('id_ibadah');
		$nama								= $this->input->post('nama');
		$ketua							= $this->input->post('ketua');
		$sekretaris					= $this->input->post('sekretaris');
		$bendahara					= $this->input->post('bendahara');
		$takmir							= $this->input->post('takmir');
		$humas							= $this->input->post('humas');
		$seksi_phbi					= $this->input->post('seksi_phbi');
		$seksi_pendidikan		= $this->input->post('seksi_pendidikan');
		$seksi_sarpras			= $this->input->post('seksi_sarpras');
		$seksi_pembangunan	= $this->input->post('seksi_pembangunan');
		$alamat							= $this->input->post('alamat');
		$luas_tanah					= $this->input->post('luas_tanah');
		$status_tanah				= $this->input->post('status_tanah');
		$luas_bangunan			= $this->input->post('luas_bangunan');
		$tahun_berdiri			= $this->input->post('tahun_berdiri');
		$this->Model_data->simpan_edit_tempat_ibadah($id_ibadah,$nama,$ketua,$sekretaris,$bendahara,$takmir,$humas,$seksi_phbi,$seksi_pendidikan,$seksi_sarpras,
																							$seksi_pembangunan,$alamat,$luas_tanah,$status_tanah,$luas_bangunan,$tahun_berdiri);
		$this->session->set_flashdata('info',
				'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-check"></i> Info</h4>
						Data Berhasil Diubah
					</div>');
		redirect('manajemen_tempat_ibadah');
	}

	public function hapus()
	{
		$id_ibadah = $this->uri->segment(3);
		$this->Model_data->hapus_ibadah($id_ibadah);
		$this->session->set_flashdata('sukses','Data Berhasil dihapus');
		redirect(base_url('manajemen_tempat_ibadah'));
	}

	public function simpan() {
		$config['upload_path'] = './assets/foto_ibadah/'; //path folder
		$config['allowed_types']='jpg|JPG|png|PNG|jpeg|JPEG';
		$config['max_size'] = 0;
		$config['encrypt_name'] = FALSE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['foto_ibadah']['name']))
		{
			if ($this->upload->do_upload('foto_ibadah'))
			{
				$dta 						= $this->upload->data();
				$data						= $dta['file_name']; //Mengambil file name dari gambar yang diupload
				$author					= $this->session->userdata('id_akun');

				$longtitude			= $this->input->post('longtitude');
				$latitude				= $this->input->post('latitude');
				$ketua					= $this->input->post('ketua');
				$nama						= $this->input->post('nama');
				$this->Model_data->simpan_ibadah($author,$latitude,$longtitude,$ketua,$nama,$data);
				redirect('manajemen_tempat_ibadah');
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
