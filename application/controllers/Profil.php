<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function index()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['pendidikan'] = $this->Model_data->datapendidikan();
		$isi['menu'] = "menu_admin";
		$isi['konten'] = "konten_profil";
		$isi['breadcrumb0'] = "Profil";
		$isi['breadcrumb'] = "";
		$isi['title'] = "Profil | Pekon Podomoro";
		$isi['judul'] = "Profil";
		$this->load->view('tampilan_dashboard_admin', $isi);
	}

	public function tambah_user()
	{
		$this->Model_keamanan->getkeamanan();
		$isi['data']		= $this->Model_data->dataadmin();
		$isi['menu'] = "menu_admin";
		$isi['title'] = "Tambah Pengguna | Pekon Podomoro";
		$isi['breadcrumb0'] = "Dashboard";
		$isi['breadcrumb'] = "Tambah Pengguna";
		$isi['judul'] = "Tambah Pengguna";
		$isi['konten'] = "konten_tambah_pengguna";
		$this->load->view('tampilan_dashboard_admin', $isi);
	}

	public function simpan_edit()
	{
		$config['upload_path'] = './assets/user/'; //path folder
		$config['allowed_types']='jpg|JPG|png|PNG|jpeg|JPEG';
		$config['max_size'] = 0;
		$config['encrypt_name'] = FALSE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		$this->upload->overwrite = true;
		if(!empty($_FILES['poto_baru']['name']))
		{
			if ($this->upload->do_upload('poto_baru'))
			{
				$dta 						= $this->upload->data();
				//Compress Image
        $config['image_library']='gd2';
        $config['source_image']='./assets/user/'.$dta['file_name'];
        $config['create_thumb']= FALSE;
        $config['maintain_ratio']= FALSE;
        $config['quality']= '50%';
        $config['width']= 140;
      	$config['height']= 140;
        $config['new_image']= './assets/user/'.$dta['file_name'];
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
				$data						= $dta['file_name']; //Mengambil file name dari gambar yang diupload

				$id_akun				= $this->session->userdata('id_akun');
				$nama_lengkap		= $this->input->post('nama_lengkap');
				$pendidikan			= $this->input->post('pendidikan');
				$jk							= $this->input->post('jk');
				$email					= $this->input->post('email');
				$notelp					= $this->input->post('notelp');
				$alamat					= $this->input->post('alamat');
				$jabatan				= $this->input->post('jabatan');
				$this->Model_data->simpan_edit($id_akun,$nama_lengkap,$pendidikan,$jk,$email,$notelp,$alamat,$jabatan,$data);
				$this->session->set_flashdata('info',
						'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<h4><i class="icon fa fa-check"></i> Info</h4>
								Data Telah Diubah
							</div>');
				redirect('profil');
			}
			else
			{
				echo "File Gagal Upload. File harus bertipe jpg atau png";
			}
		}
		else
		{
			$id_akun				= $this->session->userdata('id_akun');
			$data						= $this->input->post('poto_lama');
			$nama_lengkap		= $this->input->post('nama_lengkap');
			$pendidikan			= $this->input->post('pendidikan');
			$jk							= $this->input->post('jk');
			$email					= $this->input->post('email');
			$notelp					= $this->input->post('notelp');
			$alamat					= $this->input->post('alamat');
			$jabatan				= $this->input->post('jabatan');
			$this->Model_data->simpan_edit($id_akun,$nama_lengkap,$pendidikan,$jk,$email,$notelp,$alamat,$jabatan,$data);
			$this->session->set_flashdata('info',
					'<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4><i class="icon fa fa-check"></i> Info</h4>
							Data Telah Diubah
						</div>');
			redirect('profil');
		}
	}

	public function ubahpass()
	{
		$id_akun				= $this->session->userdata('id_akun');
		$password_lama	= $this->input->post('old_pass');
		$password_baru	= $this->input->post('new_pass');
		$password_konf	= $this->input->post('conf_pass');

		$this->load->model('Model_login');
		$this->Model_login->updatesandi($id_akun,$password_baru,$password_lama,$password_konf);
		echo "<script>window.alert('Sandi Berhasil diubah Silahkan login kembali dengan sandi baru')</script>";
		echo "<meta http-equiv='refresh' content='0;url=http://localhost/gispodomoro/dashboard_admin/logout '>";
	}
}
