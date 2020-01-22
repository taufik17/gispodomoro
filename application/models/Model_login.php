<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_login extends CI_model {

	public function getlogin($u,$p)
	{
		$pwd = hash('sha512', $p . config_item('encryption_key'));
		$this->db->where('username',$u);
		$this->db->where('password',$pwd);
		$query = $this->db->get('user');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				$sess = array('username'	=> $row->username,
								'id_akun'		=>$row->id_akun,
							  'password'	=> $row->password);
				$this->session->set_userdata($sess);
				redirect('dashboard_admin');
			}
		}
		else
		{
			$this->session->set_flashdata('info',
					'<div class="alert alert-danger alert-dismissible">
					                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
					                Maaf Username atau password salah
					              </div>');
			redirect('login');
		}
	}

	public function updatesandi($id_akun,$password_baru,$password_lama,$password_konf)
	{
		$pwd = hash('sha512', $password_lama . config_item('encryption_key'));
		$hash = hash('sha512', $password_baru . config_item('encryption_key'));
		$this->db->where('id_akun',$id_akun);
		$this->db->where('password',$pwd);
		$query = $this->db->get('user');
		if($query->num_rows()>0)
		{
				if ($password_lama == $password_baru) {
					$this->session->set_flashdata('info',
							'<div class="alert alert-danger alert-dismissible">
							                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
							                Sandi tidak boleh sama
							              </div>');
					redirect('profil');
				}
				else {
					if ($password_baru != $password_konf) {
						$this->session->set_flashdata('info',
								'<div class="alert alert-danger alert-dismissible">
								                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
								                Konfirmasi Salah
								              </div>');
						redirect('profil');
					}
					else {
						$hasil = $this->db->query("UPDATE `user` SET `password` = '$hash' WHERE `user`.`id_akun` = $id_akun");
						return $hasil;
					}
				}
		}
		else {
			$this->session->set_flashdata('info',
					'<div class="alert alert-danger alert-dismissible">
					                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
					                Sandi Lama Salah
					              </div>');
			redirect('profil');
		}
	}

	public function hash($string)
    {
      return hash('sha512', $string . config_item('encryption_key'));
    }
}
