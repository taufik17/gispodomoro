<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_data extends CI_model {

	public function dataadmin()
	{
		$session_login = $this->session->userdata('username');
		$data = $this->db->query("SELECT username FROM user WHERE username='$session_login'");
		return $data;
	}
}
