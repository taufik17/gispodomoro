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
					                Maaf Email atau Sandi salah
					              </div>');
			redirect('login');
		}
	}

	public function hash($string)
    {
        return hash('sha512', $string . config_item('encryption_key'));
    }
}
