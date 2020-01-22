<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Encryption extends CI_Controller {
	public function index()
	{
		$a='taufik';
		echo hash('sha512',$a . config_item('encryption_key'));
	}
}
