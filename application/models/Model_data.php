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

	public function simpan_sekolah_tpa($author,$latitude,$longtitude,$status_sekolah,$kepsek,$nama,$data,$no_telp)
	{
		$hasil = $this->db->query("INSERT INTO `sekolah_tpa` (`id_sekolah`, `nama_sekolah`, `kepala_sekolah`, `latitude`, `longtitude`, `status`, `no_telp`, `foto`, `author`)
															 VALUES (NULL, '$nama', '$kepsek', '$latitude', '$longtitude', '$status_sekolah', '$no_telp', '$data', '$author')");
		return $hasil;
	}

	public function simpan_ibadah($author,$latitude,$longtitude,$ketua,$nama,$data)
	{
		$hasil = $this->db->query("INSERT INTO `ibadah` (`id_ibadah`, `nama_bangunan`, `ketua`, `latitude`, `longtitude`, `foto`, `author`)
		VALUES (NULL, '$nama', '$ketua', '$latitude', '$longtitude', '$data', '$author')");
		return $hasil;
	}

	public function simpan_pt($author,$latitude,$longtitude,$pemilik,$nama,$data)
	{
		$hasil = $this->db->query("INSERT INTO `pt_home_industri` (`id_pt`, `nama_pt`, `pemilik`, `latitude`, `longtitude`, `foto`, `author`)
		VALUES (NULL, '$nama', '$pemilik', '$latitude', '$longtitude', '$data', '$author')");
		return $hasil;
	}

	public function simpan_aset($author,$latitude,$longtitude,$ketua,$nama,$data)
	{
		$hasil = $this->db->query("INSERT INTO `aset_desa` (`id_aset`, `nama_aset`, `ketua`, `latitude`, `longtitude`, `foto`, `author`)
		VALUES (NULL, '$nama', '$ketua', '$latitude', '$longtitude', '$data', '$author')");
		return $hasil;
	}

	public function hapus_sekolah($id_sekolah)
	{
		$hasil = $this->db->query("DELETE FROM `sekolah_tpa` WHERE `sekolah_tpa`.`id_sekolah` = $id_sekolah");
		return $hasil;
	}

	public function hapus_ibadah($id_ibadah)
	{
		$hasil = $this->db->query("DELETE FROM `ibadah` WHERE `ibadah`.`id_ibadah` = $id_ibadah");
		return $hasil;
	}

	public function hapus_pt($id_pt)
	{
		$hasil = $this->db->query("DELETE FROM `pt_home_industri` WHERE `pt_home_industri`.`id_pt` = $id_pt");
		return $hasil;
	}

	public function hapus_aset($id_aset)
	{
		$hasil = $this->db->query("DELETE FROM `aset_desa` WHERE `aset_desa`.`id_aset` = $id_aset");
		return $hasil;
	}
}
