-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2020 pada 03.05
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis_podomoro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aset_desa`
--

CREATE TABLE `aset_desa` (
  `id_aset` int(11) NOT NULL,
  `nama_aset` varchar(50) NOT NULL,
  `ketua` varchar(100) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longtitude` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `author` int(11) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `luas_tanah` int(100) DEFAULT NULL,
  `luas_bangunan` int(100) DEFAULT NULL,
  `tahun_berdiri` int(100) DEFAULT NULL,
  `waktu_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aset_desa`
--

INSERT INTO `aset_desa` (`id_aset`, `nama_aset`, `ketua`, `latitude`, `longtitude`, `foto`, `author`, `alamat`, `luas_tanah`, `luas_bangunan`, `tahun_berdiri`, `waktu_input`) VALUES
(3, 'Balai Pekon Podomoro', 'Didi Maryadhi ', '-5.348111', ' 104.985467', 'balai.JPG', 1, '', 230, 230, 230, '2020-01-25 01:58:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ibadah`
--

CREATE TABLE `ibadah` (
  `id_ibadah` int(11) NOT NULL,
  `nama_bangunan` varchar(50) NOT NULL,
  `ketua` varchar(100) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longtitude` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `author` int(11) NOT NULL,
  `takmir` varchar(100) NOT NULL,
  `sekretaris` varchar(100) NOT NULL,
  `bendahara` varchar(100) NOT NULL,
  `humas` varchar(100) NOT NULL,
  `seksi_phbi` varchar(100) NOT NULL,
  `seksi_pendidikan` varchar(100) NOT NULL,
  `seksi_sarpras` varchar(100) NOT NULL,
  `seksi_pembangunan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `luas_tanah` varchar(20) NOT NULL,
  `status_tanah` varchar(20) NOT NULL,
  `luas_bangunan` int(20) DEFAULT NULL,
  `tahun_berdiri` int(10) DEFAULT NULL,
  `waktu_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ibadah`
--

INSERT INTO `ibadah` (`id_ibadah`, `nama_bangunan`, `ketua`, `latitude`, `longtitude`, `foto`, `author`, `takmir`, `sekretaris`, `bendahara`, `humas`, `seksi_phbi`, `seksi_pendidikan`, `seksi_sarpras`, `seksi_pembangunan`, `alamat`, `luas_tanah`, `status_tanah`, `luas_bangunan`, `tahun_berdiri`, `waktu_input`) VALUES
(4, 'Masjid Baitul Muiz', 'Pak Riyanto', '-5.349711', ' 104.990243', 'baitul_muiz.JPG', 1, '', '', '', '', '', '', '', '', '', '101', 'Wakaf & SHM', 12, 0, '2020-01-24 12:17:38'),
(5, 'Masjid Al-Ikhlas', 'ketua', '-5.347611', ' 104.985262', 'SAM_01691.JPG', 1, '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '2020-01-24 06:52:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `nama_pendidikan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `nama_pendidikan`) VALUES
(1, 'SD / Sederajat'),
(2, 'SMP / Sederajat'),
(3, 'SMA / Sederajat'),
(4, 'Diploma'),
(5, 'S1'),
(6, 'S2'),
(7, 'S3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pt_home_industri`
--

CREATE TABLE `pt_home_industri` (
  `id_pt` int(11) NOT NULL,
  `nama_pt` varchar(100) NOT NULL,
  `pemilik` varchar(100) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longtitude` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `author` int(11) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `web` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sekretaris` varchar(100) NOT NULL,
  `bendahara` varchar(100) NOT NULL,
  `humas` varchar(100) NOT NULL,
  `tenaga_kerja` int(100) DEFAULT NULL,
  `alamat` varchar(100) NOT NULL,
  `luas_tanah` int(100) DEFAULT NULL,
  `luas_bangunan` int(100) DEFAULT NULL,
  `tahun_berdiri` int(100) DEFAULT NULL,
  `waktu_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pt_home_industri`
--

INSERT INTO `pt_home_industri` (`id_pt`, `nama_pt`, `pemilik`, `latitude`, `longtitude`, `foto`, `author`, `no_telp`, `web`, `email`, `sekretaris`, `bendahara`, `humas`, `tenaga_kerja`, `alamat`, `luas_tanah`, `luas_bangunan`, `tahun_berdiri`, `waktu_input`) VALUES
(2, 'PT Budi Berkah Podomoro', 'Budi', '-5.348779', ' 104.985457', 'budi_berkah.JPG', 1, '3', 'www', 'e', 't', 't', 't', 23, 't', 12, 12, 13, '2020-01-25 01:36:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah_tpa`
--

CREATE TABLE `sekolah_tpa` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `kepala_sekolah` varchar(100) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longtitude` varchar(50) NOT NULL,
  `status` enum('Negeri','Swasta','','') NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT 'no_image.jpg',
  `npsn` int(50) NOT NULL,
  `kurikulum` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `web` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `jumlah_siswa` int(10) NOT NULL,
  `telp_kepsek` varchar(50) NOT NULL,
  `jmlh_tendik` int(50) NOT NULL,
  `jmlh_guru` int(50) NOT NULL,
  `jmlh_guru_honor` int(50) NOT NULL,
  `jmlh_guru_pns` int(50) NOT NULL,
  `staff` int(50) NOT NULL,
  `visi` varchar(200) NOT NULL,
  `misi` text NOT NULL,
  `tagline` varchar(100) NOT NULL,
  `kekhasan` varchar(100) NOT NULL,
  `prog_unggul` text NOT NULL,
  `author` int(11) NOT NULL,
  `waktu_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sekolah_tpa`
--

INSERT INTO `sekolah_tpa` (`id_sekolah`, `nama_sekolah`, `kepala_sekolah`, `latitude`, `longtitude`, `status`, `no_telp`, `foto`, `npsn`, `kurikulum`, `alamat`, `web`, `email`, `jumlah_siswa`, `telp_kepsek`, `jmlh_tendik`, `jmlh_guru`, `jmlh_guru_honor`, `jmlh_guru_pns`, `staff`, `visi`, `misi`, `tagline`, `kekhasan`, `prog_unggul`, `author`, `waktu_input`) VALUES
(7, 'SD Negeri 1 Podomoro', 'kepala sekolah sd 1', '-5.339806', ' 104.981857', 'Negeri', '085357037093', 'sd1.JPG', 12345678, 'KTSP', 'podomoro 2', 'sdn1podomoro.sch.id', 'sdn1podomoro@sch.id', 200, '085357037093', 10, 10, 10, 10, 10, 'visi sdn 1 podomoro', 'misi sdn 1 podomoro', 'tagline sdn 1 podomoro', '', '', 1, '2020-01-24 00:39:17'),
(9, 'SD Negeri 3 Podomoro', 'Taufik', '-5.349303', ' 104.98365', 'Negeri', '', 'sd3.JPG', 123456, '', '', '', '', 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', 1, '2020-01-24 00:39:47'),
(10, 'Mts YKU Podomoro', 'kepala sekolah', '-5.341265', ' 104.984179', 'Swasta', '', 'yku.JPG', 0, '', '', '', '', 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', 1, '2020-01-24 07:01:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_foto_aset`
--

CREATE TABLE `tbl_foto_aset` (
  `id_foto` int(11) NOT NULL,
  `id_aset` int(11) NOT NULL,
  `foto` varchar(11) NOT NULL,
  `author` int(11) NOT NULL,
  `waktu_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_foto_aset`
--

INSERT INTO `tbl_foto_aset` (`id_foto`, `id_aset`, `foto`, `author`, `waktu_input`) VALUES
(1, 3, 'dalam.JPG', 1, '2020-01-23 15:08:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_foto_ibadah`
--

CREATE TABLE `tbl_foto_ibadah` (
  `id_foto` int(11) NOT NULL,
  `id_ibadah` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `author` int(11) NOT NULL,
  `waktu_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_foto_pt`
--

CREATE TABLE `tbl_foto_pt` (
  `id_foto` int(11) NOT NULL,
  `id_pt` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `author` int(11) NOT NULL,
  `waktu_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_foto_sekolah`
--

CREATE TABLE `tbl_foto_sekolah` (
  `id_foto` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT 'no_image.jpg',
  `author` int(11) NOT NULL,
  `waktu_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_foto_sekolah`
--

INSERT INTO `tbl_foto_sekolah` (`id_foto`, `id_sekolah`, `foto`, `author`, `waktu_input`) VALUES
(3, 7, 'tes.jpg', 1, '2020-01-23 15:09:43'),
(4, 7, 'no_image.jpg', 1, '2020-01-23 15:09:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_akun` int(11) NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `password` varchar(500) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT 'avatar.png',
  `jk` enum('Laki - laki','Perempuan','','') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `pendaftar` int(11) NOT NULL,
  `waktu_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_akun`, `id_pendidikan`, `username`, `nama`, `password`, `foto`, `jk`, `alamat`, `role`, `email`, `no_telp`, `pendaftar`, `waktu_daftar`) VALUES
(1, 3, 'admin', 'Didi Maryadhi', '07130368007afea93ecdddb5837564f806b7a5785b474101e53023fcc8bc9b15a56c24361546567b144312c34291ebbfad54b0311a2c263415af2a9a75b880ff', 'DSC00748.JPG', 'Laki - laki', 'Podomoro 1', 'Kepala Pekon Podomoro', 'didhi@gmail.com', '0987654', 0, '2020-01-23 15:04:59'),
(4, 3, 'taufik', 'Taufik Agung Santoso', '0a36f8e726f6a8d693f6efdf4985cd100407952f5133068e2d3892ac9460f9be32f2dce2ba21d11abb8437f66712c6d5f4102204e62503dc6300b60cf9763ef6', 'avatar.png', 'Laki - laki', '', '', '', '', 1, '2020-01-23 15:04:59'),
(5, 2, 'ilman', 'ilman nugroho', 'fb06805a64e1f5464cc6fca8a574bb4710bb36f47e7f16458b511c1b12b25a485f47ff6cac4a658c834403b1a5c6493bcdd096ebdae03d13866c3250e9faa37f', '', 'Laki - laki', '', '', '', '', 4, '2020-01-23 15:04:59'),
(6, 5, 'abi', 'abbi kurniawan', 'eb1f71ebdce91353815453fdc7318d04e532ad0b56e0f38085048ffe0a6c06b9477351ab3ee4a1a13029cfa4a504885740f05b72c07b52792e2613bdb22ee2e3', 'avatar.png', 'Perempuan', 'di alamat yang seharusnya', '', '', '', 5, '2020-01-23 15:17:27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aset_desa`
--
ALTER TABLE `aset_desa`
  ADD PRIMARY KEY (`id_aset`),
  ADD KEY `author` (`author`);

--
-- Indeks untuk tabel `ibadah`
--
ALTER TABLE `ibadah`
  ADD PRIMARY KEY (`id_ibadah`),
  ADD KEY `author` (`author`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indeks untuk tabel `pt_home_industri`
--
ALTER TABLE `pt_home_industri`
  ADD PRIMARY KEY (`id_pt`),
  ADD KEY `author` (`author`);

--
-- Indeks untuk tabel `sekolah_tpa`
--
ALTER TABLE `sekolah_tpa`
  ADD PRIMARY KEY (`id_sekolah`),
  ADD KEY `author` (`author`);

--
-- Indeks untuk tabel `tbl_foto_aset`
--
ALTER TABLE `tbl_foto_aset`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `author` (`author`),
  ADD KEY `id_aset` (`id_aset`);

--
-- Indeks untuk tabel `tbl_foto_ibadah`
--
ALTER TABLE `tbl_foto_ibadah`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `author` (`author`),
  ADD KEY `id_ibadah` (`id_ibadah`);

--
-- Indeks untuk tabel `tbl_foto_pt`
--
ALTER TABLE `tbl_foto_pt`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `id_pt` (`id_pt`),
  ADD KEY `author` (`author`);

--
-- Indeks untuk tabel `tbl_foto_sekolah`
--
ALTER TABLE `tbl_foto_sekolah`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `tbl_foto_ibfk_1` (`author`),
  ADD KEY `tbl_foto_ibfk_5` (`id_sekolah`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_akun`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aset_desa`
--
ALTER TABLE `aset_desa`
  MODIFY `id_aset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ibadah`
--
ALTER TABLE `ibadah`
  MODIFY `id_ibadah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pt_home_industri`
--
ALTER TABLE `pt_home_industri`
  MODIFY `id_pt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sekolah_tpa`
--
ALTER TABLE `sekolah_tpa`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_foto_aset`
--
ALTER TABLE `tbl_foto_aset`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_foto_ibadah`
--
ALTER TABLE `tbl_foto_ibadah`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_foto_sekolah`
--
ALTER TABLE `tbl_foto_sekolah`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `aset_desa`
--
ALTER TABLE `aset_desa`
  ADD CONSTRAINT `aset_desa_ibfk_1` FOREIGN KEY (`author`) REFERENCES `user` (`id_akun`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ibadah`
--
ALTER TABLE `ibadah`
  ADD CONSTRAINT `ibadah_ibfk_1` FOREIGN KEY (`author`) REFERENCES `user` (`id_akun`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pt_home_industri`
--
ALTER TABLE `pt_home_industri`
  ADD CONSTRAINT `pt_home_industri_ibfk_1` FOREIGN KEY (`author`) REFERENCES `user` (`id_akun`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sekolah_tpa`
--
ALTER TABLE `sekolah_tpa`
  ADD CONSTRAINT `sekolah_tpa_ibfk_1` FOREIGN KEY (`author`) REFERENCES `user` (`id_akun`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_foto_aset`
--
ALTER TABLE `tbl_foto_aset`
  ADD CONSTRAINT `tbl_foto_aset_ibfk_1` FOREIGN KEY (`author`) REFERENCES `user` (`id_akun`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_foto_aset_ibfk_2` FOREIGN KEY (`id_aset`) REFERENCES `aset_desa` (`id_aset`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_foto_ibadah`
--
ALTER TABLE `tbl_foto_ibadah`
  ADD CONSTRAINT `tbl_foto_ibadah_ibfk_1` FOREIGN KEY (`author`) REFERENCES `user` (`id_akun`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_foto_ibadah_ibfk_2` FOREIGN KEY (`id_ibadah`) REFERENCES `ibadah` (`id_ibadah`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_foto_pt`
--
ALTER TABLE `tbl_foto_pt`
  ADD CONSTRAINT `tbl_foto_pt_ibfk_1` FOREIGN KEY (`id_pt`) REFERENCES `pt_home_industri` (`id_pt`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_foto_pt_ibfk_2` FOREIGN KEY (`author`) REFERENCES `user` (`id_akun`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_foto_sekolah`
--
ALTER TABLE `tbl_foto_sekolah`
  ADD CONSTRAINT `tbl_foto_sekolah_ibfk_1` FOREIGN KEY (`author`) REFERENCES `user` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_foto_sekolah_ibfk_5` FOREIGN KEY (`id_sekolah`) REFERENCES `sekolah_tpa` (`id_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
