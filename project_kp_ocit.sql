-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 31, 2019 at 10:56 AM
-- Server version: 10.1.30-MariaDB-0ubuntu0.17.10.1
-- PHP Version: 7.1.17-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_kp_ocit`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_absen_bulan_ini`
--

CREATE TABLE `tb_absen_bulan_ini` (
  `id_absen` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `id_bulan_aktif` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `izin` int(11) NOT NULL,
  `alpa` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_bulan_aktif`
--

CREATE TABLE `tb_bulan_aktif` (
  `id_bulan_aktif` int(11) NOT NULL,
  `bulan` enum('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember') NOT NULL,
  `tahun` year(4) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_keadaan_penduduk`
--

CREATE TABLE `tb_keadaan_penduduk` (
  `id_keadaan_penduduk` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `id_bulan_aktif` int(11) NOT NULL,
  `nama_tenaga_pendidik` int(11) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `jabatan_mapel_diajar` varchar(50) NOT NULL,
  `pendidikan_ijazah_terakhir` varchar(100) NOT NULL,
  `status_kepegawaian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_keadaan_siswa`
--

CREATE TABLE `tb_keadaan_siswa` (
  `id_keadaan_siswa` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `id_bulan_aktif` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `jumlah_rombel` int(11) NOT NULL,
  `jumlah_siswa` int(11) NOT NULL,
  `laki_laki` int(11) NOT NULL,
  `perempuan` int(11) NOT NULL,
  `jumlah_total` int(11) NOT NULL,
  `mutasi_siswa` int(11) NOT NULL,
  `masuk` int(11) NOT NULL,
  `keluar` int(11) NOT NULL,
  `rekapitulasi_absen` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `alpa` int(11) NOT NULL,
  `izin` int(11) NOT NULL,
  `jumlah_telegram` int(11) NOT NULL,
  `keterangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mobiler`
--

CREATE TABLE `tb_mobiler` (
  `id_mobiler` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `id_bulan_aktif` int(11) NOT NULL,
  `lemari_guru` int(11) NOT NULL,
  `meja_guru` int(11) NOT NULL,
  `kursi_guru` int(11) NOT NULL,
  `lemari_siswa` int(11) NOT NULL,
  `meja_siswa` int(11) NOT NULL,
  `kursi_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengeluaran`
--

CREATE TABLE `tb_pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `id_bulan_aktif` int(11) NOT NULL,
  `tekor` int(11) NOT NULL,
  `dll` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyelenggara_keuangan_dan_administrasi`
--

CREATE TABLE `tb_penyelenggara_keuangan_dan_administrasi` (
  `id_penyelenggara_keuangan` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `id_bulan_aktif` int(11) NOT NULL,
  `sumber` int(11) NOT NULL,
  `pengeluaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_perlengkapan_pembelajaran`
--

CREATE TABLE `tb_perlengkapan_pembelajaran` (
  `id_perlengkapan_pembelajaran` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `id_bulan_aktif` int(11) NOT NULL,
  `buku_pedoman_guru` int(11) NOT NULL,
  `buku_teks_siswa` int(11) NOT NULL,
  `alat_peraga` int(11) NOT NULL,
  `komputer` int(11) NOT NULL,
  `listrik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sarana_dan_prasarana`
--

CREATE TABLE `tb_sarana_dan_prasarana` (
  `id_sarana_dan_prasarana` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `id_bulan_aktif` int(11) NOT NULL,
  `tanah_bangunan` int(11) NOT NULL,
  `mobiler` int(11) NOT NULL,
  `perlengkapan_pembelajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `no_statistik` varchar(50) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sumber`
--

CREATE TABLE `tb_sumber` (
  `id_sumber` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `id_bulan_aktif` int(11) NOT NULL,
  `sumber` int(11) NOT NULL,
  `pengeluaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tanah_bangunan`
--

CREATE TABLE `tb_tanah_bangunan` (
  `id_tanah_bangunan` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `id_bulan_aktif` int(11) NOT NULL,
  `tanah` int(11) NOT NULL,
  `bangunan` int(11) NOT NULL,
  `ruang_belajar` int(11) NOT NULL,
  `ruang_tu` int(11) NOT NULL,
  `ruang_kepala` int(11) NOT NULL,
  `ruang_majelis_guru` int(11) NOT NULL,
  `perpustakaan` int(11) NOT NULL,
  `ruang_komputer` int(11) NOT NULL,
  `tempat_ibadah` int(11) NOT NULL,
  `wc_guru` int(11) NOT NULL,
  `wc_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` bigint(20) UNSIGNED NOT NULL,
  `level` enum('sekolah','kemenag') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_absen_bulan_ini`
--
ALTER TABLE `tb_absen_bulan_ini`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `id_sekolah` (`id_sekolah`),
  ADD KEY `id_bulan_aktif` (`id_bulan_aktif`);

--
-- Indexes for table `tb_bulan_aktif`
--
ALTER TABLE `tb_bulan_aktif`
  ADD PRIMARY KEY (`id_bulan_aktif`);

--
-- Indexes for table `tb_keadaan_penduduk`
--
ALTER TABLE `tb_keadaan_penduduk`
  ADD PRIMARY KEY (`id_keadaan_penduduk`),
  ADD KEY `id_sekolah` (`id_sekolah`),
  ADD KEY `id_bulan_aktif` (`id_bulan_aktif`);

--
-- Indexes for table `tb_keadaan_siswa`
--
ALTER TABLE `tb_keadaan_siswa`
  ADD PRIMARY KEY (`id_keadaan_siswa`),
  ADD KEY `id_sekolah` (`id_sekolah`),
  ADD KEY `id_bulan_aktif` (`id_bulan_aktif`);

--
-- Indexes for table `tb_mobiler`
--
ALTER TABLE `tb_mobiler`
  ADD PRIMARY KEY (`id_mobiler`),
  ADD KEY `id_sekolah` (`id_sekolah`),
  ADD KEY `id_bulan_aktif` (`id_bulan_aktif`);

--
-- Indexes for table `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`),
  ADD KEY `id_sekolah` (`id_sekolah`),
  ADD KEY `id_bulan_aktif` (`id_bulan_aktif`);

--
-- Indexes for table `tb_penyelenggara_keuangan_dan_administrasi`
--
ALTER TABLE `tb_penyelenggara_keuangan_dan_administrasi`
  ADD PRIMARY KEY (`id_penyelenggara_keuangan`),
  ADD KEY `id_sekolah` (`id_sekolah`),
  ADD KEY `id_bulan_aktif` (`id_bulan_aktif`);

--
-- Indexes for table `tb_perlengkapan_pembelajaran`
--
ALTER TABLE `tb_perlengkapan_pembelajaran`
  ADD PRIMARY KEY (`id_perlengkapan_pembelajaran`),
  ADD KEY `id_sekolah` (`id_sekolah`),
  ADD KEY `id_bulan_aktif` (`id_bulan_aktif`);

--
-- Indexes for table `tb_sarana_dan_prasarana`
--
ALTER TABLE `tb_sarana_dan_prasarana`
  ADD PRIMARY KEY (`id_sarana_dan_prasarana`),
  ADD KEY `id_sekolah` (`id_sekolah`),
  ADD KEY `id_bulan_aktif` (`id_bulan_aktif`);

--
-- Indexes for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `tb_sumber`
--
ALTER TABLE `tb_sumber`
  ADD PRIMARY KEY (`id_sumber`),
  ADD KEY `id_sekolah` (`id_sekolah`),
  ADD KEY `id_bulan_aktif` (`id_bulan_aktif`);

--
-- Indexes for table `tb_tanah_bangunan`
--
ALTER TABLE `tb_tanah_bangunan`
  ADD PRIMARY KEY (`id_tanah_bangunan`),
  ADD KEY `id_sekolah` (`id_sekolah`),
  ADD KEY `id_bulan_aktif` (`id_bulan_aktif`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_absen_bulan_ini`
--
ALTER TABLE `tb_absen_bulan_ini`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_bulan_aktif`
--
ALTER TABLE `tb_bulan_aktif`
  MODIFY `id_bulan_aktif` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_keadaan_penduduk`
--
ALTER TABLE `tb_keadaan_penduduk`
  MODIFY `id_keadaan_penduduk` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_keadaan_siswa`
--
ALTER TABLE `tb_keadaan_siswa`
  MODIFY `id_keadaan_siswa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_mobiler`
--
ALTER TABLE `tb_mobiler`
  MODIFY `id_mobiler` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_penyelenggara_keuangan_dan_administrasi`
--
ALTER TABLE `tb_penyelenggara_keuangan_dan_administrasi`
  MODIFY `id_penyelenggara_keuangan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_perlengkapan_pembelajaran`
--
ALTER TABLE `tb_perlengkapan_pembelajaran`
  MODIFY `id_perlengkapan_pembelajaran` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_sarana_dan_prasarana`
--
ALTER TABLE `tb_sarana_dan_prasarana`
  MODIFY `id_sarana_dan_prasarana` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_sumber`
--
ALTER TABLE `tb_sumber`
  MODIFY `id_sumber` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_tanah_bangunan`
--
ALTER TABLE `tb_tanah_bangunan`
  MODIFY `id_tanah_bangunan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `password` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_absen_bulan_ini`
--
ALTER TABLE `tb_absen_bulan_ini`
  ADD CONSTRAINT `tb_absen_bulan_ini_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `tb_sekolah` (`id_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_absen_bulan_ini_ibfk_2` FOREIGN KEY (`id_bulan_aktif`) REFERENCES `tb_bulan_aktif` (`id_bulan_aktif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_keadaan_penduduk`
--
ALTER TABLE `tb_keadaan_penduduk`
  ADD CONSTRAINT `tb_keadaan_penduduk_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `tb_sekolah` (`id_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_keadaan_penduduk_ibfk_2` FOREIGN KEY (`id_bulan_aktif`) REFERENCES `tb_bulan_aktif` (`id_bulan_aktif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_keadaan_siswa`
--
ALTER TABLE `tb_keadaan_siswa`
  ADD CONSTRAINT `tb_keadaan_siswa_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `tb_sekolah` (`id_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_keadaan_siswa_ibfk_2` FOREIGN KEY (`id_bulan_aktif`) REFERENCES `tb_bulan_aktif` (`id_bulan_aktif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_mobiler`
--
ALTER TABLE `tb_mobiler`
  ADD CONSTRAINT `tb_mobiler_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `tb_sekolah` (`id_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_mobiler_ibfk_2` FOREIGN KEY (`id_bulan_aktif`) REFERENCES `tb_bulan_aktif` (`id_bulan_aktif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  ADD CONSTRAINT `tb_pengeluaran_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `tb_sekolah` (`id_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pengeluaran_ibfk_2` FOREIGN KEY (`id_bulan_aktif`) REFERENCES `tb_bulan_aktif` (`id_bulan_aktif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_penyelenggara_keuangan_dan_administrasi`
--
ALTER TABLE `tb_penyelenggara_keuangan_dan_administrasi`
  ADD CONSTRAINT `tb_penyelenggara_keuangan_dan_administrasi_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `tb_sekolah` (`id_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_penyelenggara_keuangan_dan_administrasi_ibfk_2` FOREIGN KEY (`id_bulan_aktif`) REFERENCES `tb_bulan_aktif` (`id_bulan_aktif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_perlengkapan_pembelajaran`
--
ALTER TABLE `tb_perlengkapan_pembelajaran`
  ADD CONSTRAINT `tb_perlengkapan_pembelajaran_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `tb_sekolah` (`id_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_perlengkapan_pembelajaran_ibfk_2` FOREIGN KEY (`id_bulan_aktif`) REFERENCES `tb_bulan_aktif` (`id_bulan_aktif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_sarana_dan_prasarana`
--
ALTER TABLE `tb_sarana_dan_prasarana`
  ADD CONSTRAINT `tb_sarana_dan_prasarana_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `tb_sekolah` (`id_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_sarana_dan_prasarana_ibfk_2` FOREIGN KEY (`id_bulan_aktif`) REFERENCES `tb_bulan_aktif` (`id_bulan_aktif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_sumber`
--
ALTER TABLE `tb_sumber`
  ADD CONSTRAINT `tb_sumber_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `tb_sekolah` (`id_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_sumber_ibfk_2` FOREIGN KEY (`id_bulan_aktif`) REFERENCES `tb_bulan_aktif` (`id_bulan_aktif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_tanah_bangunan`
--
ALTER TABLE `tb_tanah_bangunan`
  ADD CONSTRAINT `tb_tanah_bangunan_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `tb_sekolah` (`id_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_tanah_bangunan_ibfk_2` FOREIGN KEY (`id_bulan_aktif`) REFERENCES `tb_bulan_aktif` (`id_bulan_aktif`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
