<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_data extends CI_model {

	public function dataadmin()
	{
		$session_login = $this->session->userdata('id_akun');
		$data = $this->db->query("SELECT id_akun, username, nama, foto, jk, alamat, role FROM user WHERE id_akun='$session_login'");
		return $data;
	}
}
