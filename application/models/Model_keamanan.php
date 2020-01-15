<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_keamanan extends CI_model {

	public function getkeamanan()
	{
		$sess = $this->session->userdata('username');
		if(empty($sess))
		{
			$this->session->sess_destroy($sess);
			redirect('login');
		}
	}
}
