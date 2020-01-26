<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_data extends CI_model {

	public function dataadmin()
	{
		$session_login = $this->session->userdata('id_akun');
		$data = $this->db->query("SELECT id_akun, id_pendidikan, username, nama, foto, jk, alamat, role, nama_pendidikan, email, no_telp
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

	public function data_ibadah($id_ibadah)
	{
		$data = $this->db->query("SELECT * FROM ibadah WHERE id_ibadah = $id_ibadah");
		return $data;
	}

	public function daftar_pt()
	{
		$data = $this->db->query("SELECT * FROM pt_home_industri");
		return $data;
	}

	public function data_aset($id_aset)
	{
		$data = $this->db->query("SELECT * FROM aset_desa WHERE id_aset = $id_aset");
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

	public function simpan_edit($id_akun,$nama_lengkap,$pendidikan,$jk,$email,$notelp,$alamat,$jabatan,$data)
	{
		$hasil = $this->db->query("UPDATE `user` SET `id_pendidikan` = '$pendidikan', `nama` = '$nama_lengkap', `foto` = '$data', `jk` = '$jk',
															`alamat` = '$alamat', `role` = '$jabatan', `email` = '$email', `no_telp` = '$notelp'
															WHERE `user`.`id_akun` = $id_akun ");
		return $hasil;
	}

	public function simpan_user($id_akun,$nama_lengkap,$username,$password,$jk,$pendidikan)
	{
		$hash = hash('sha512', $password . config_item('encryption_key'));
		$hasil = $this->db->query("INSERT INTO `user` (`id_akun`, `id_pendidikan`, `username`, `nama`, `password`, `foto`, `jk`, `alamat`, `role`, `email`, `no_telp`, `pendaftar`)
															 VALUES (NULL, '$pendidikan', '$username', '$nama_lengkap', '$hash', 'avatar.png', '$jk', '', '', '', '', '$id_akun')");
		return $hasil;
	}

	public function data_sekolah($id_sekolah)
	{
		$hasil = $this->db->query("SELECT * FROM sekolah_tpa WHERE id_sekolah = $id_sekolah");
		return $hasil;
	}

	public function data_pt($id_pt)
	{
		$hasil = $this->db->query("SELECT * FROM pt_home_industri WHERE id_pt = $id_pt");
		return $hasil;
	}

	public function simpan_edit_sekolah_tpa($npsn,$nama_sekolah,$status_sekolah,$kurikulum,$alamat_sekolah,$no_telpon,$web,$email,$jumlah_siswa,$kepsek,$telpon_kepsek,
																					$tendik,$jmlh_guru,$jmlh_honorer,$jmlh_pns,$staff,$visi,$misi,$tagline,$id_sekolah)
	{
		$hasil = $this->db->query("UPDATE `sekolah_tpa` SET `nama_sekolah` = '$nama_sekolah', `kepala_sekolah` = '$kepsek',
															`status` = '$status_sekolah', `no_telp` = '$no_telpon', `npsn` = '$npsn', `kurikulum` = '$kurikulum', `alamat` = '$alamat_sekolah', `web` = '$web', `email` = '$email',
															`jumlah_siswa` = '$jumlah_siswa', `telp_kepsek` = '$telpon_kepsek', `jmlh_tendik` = '$tendik', `jmlh_guru` = '$jmlh_guru', `jmlh_guru_honor` = '$jmlh_honorer', `jmlh_guru_pns` = '$jmlh_pns',
															`staff` = '$staff', `visi` = '$visi', `misi` = '$misi', `tagline` = '$tagline'
															WHERE `sekolah_tpa`.`id_sekolah` = $id_sekolah ");
		return $hasil;
	}

	public function simpan_edit_tempat_ibadah($id_ibadah,$nama,$ketua,$sekretaris,$bendahara,$takmir,$humas,$seksi_phbi,$seksi_pendidikan,$seksi_sarpras,
																						$seksi_pembangunan,$alamat,$luas_tanah,$status_tanah,$luas_bangunan,$tahun_berdiri)
	{
		$hasil = $this->db->query("UPDATE `ibadah` SET `nama_bangunan` = '$nama', `ketua` = '$ketua', `takmir` = '$takmir', `sekretaris` = '$sekretaris',
															`bendahara` = '$bendahara', `humas` = '$humas', `seksi_phbi` = '$seksi_phbi', `seksi_pendidikan` = '$seksi_pendidikan',
															`seksi_sarpras` = '$seksi_sarpras',	`seksi_pembangunan` = '$seksi_pembangunan', `alamat` = '$alamat', `luas_tanah` = '$luas_tanah',
															`status_tanah` = '$status_tanah', `luas_bangunan` = '$luas_bangunan',	`tahun_berdiri` = '$tahun_berdiri'
															WHERE `ibadah`.`id_ibadah` = $id_ibadah ");
		return $hasil;
	}

	public function simpan_edit_pt($id_pt,$nama,$owner,$no_telp,$web,$email,$sekretaris,$bendahara,$humas,$tenaga_kerja,$alamat,
																						$luas_tanah,$luas_bangunan,$tahun_berdiri)
	{
		$hasil = $this->db->query("UPDATE `pt_home_industri` SET `nama_pt` = '$nama', `pemilik` = '$owner',	`no_telp` = '$no_telp', `web` = '$web', `email` = '$email',
															`sekretaris` = '$sekretaris', `bendahara` = '$bendahara', `humas` = '$humas', `tenaga_kerja` = '$tenaga_kerja',
															`alamat` = '$alamat', `luas_tanah` = '$luas_tanah', `luas_bangunan` = '$luas_bangunan', `tahun_berdiri` = '$tahun_berdiri'
															WHERE `pt_home_industri`.`id_pt` = $id_pt ");
		return $hasil;
	}

	public function simpan_edit_aset($id_aset,$nama,$ketua,$alamat,$luas_tanah,$luas_bangunan,$tahun_berdiri)
	{
		$hasil = $this->db->query("UPDATE `aset_desa` SET `nama_aset` = '$nama', `ketua` = '$ketua', `alamat` = '$alamat', `luas_tanah` = '$luas_tanah',
															`luas_bangunan` = '$luas_bangunan', `tahun_berdiri` = '$tahun_berdiri' WHERE `aset_desa`.`id_aset` = $id_aset ");
		return $hasil;
	}
}
