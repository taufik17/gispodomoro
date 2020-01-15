<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_data extends CI_model {

	public function dataadmin()
	{
		$session_login = $this->session->userdata('id_akun');
		$data = $this->db->query("SELECT id_akun, username, nama, foto, jk, alamat, role, nama_pendidikan, email, no_telp
															FROM user NATURAL JOIN pendidikan WHERE id_akun='$session_login'");
		return $data;
	}

	public function datapendidikan()
	{
		$data = $this->db->query("SELECT * FROM pendidikan");
		return $data;
	}

	public function jumlah_sekolah()
	{
		$data = $this->db->query("SELECT id_sekolah FROM sekolah_tpa")->num_rows();
		return $data;
	}

	public function jumlah_ibadah()
	{
		$data = $this->db->query("SELECT id_ibadah FROM ibadah")->num_rows();
		return $data;
	}

	public function jumlah_pt()
	{
		$data = $this->db->query("SELECT id_pt FROM pt_home_industri")->num_rows();
		return $data;
	}

	public function jumlah_aset_desa()
	{
		$data = $this->db->query("SELECT id_aset FROM aset_desa")->num_rows();
		return $data;
	}

	public function daftar_sekolah()
	{
		$data = $this->db->query("SELECT * FROM sekolah_tpa");
		return $data;
	}

	public function daftar_ibadah()
	{
		$data = $this->db->query("SELECT * FROM ibadah");
		return $data;
	}

	public function daftar_pt()
	{
		$data = $this->db->query("SELECT * FROM pt_home_industri");
		return $data;
	}

	public function daftar_aset_pekon()
	{
		$data = $this->db->query("SELECT * FROM aset_desa");
		return $data;
	}
}
