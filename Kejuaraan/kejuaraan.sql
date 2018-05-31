-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2018 at 06:08 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kejuaraan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` text NOT NULL,
  `level` enum('ketua_pelaksana','sekretariat','perangkat_pertandingan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `level`) VALUES
(1, 'ketua_pelaksana', '21232f297a57a5a743894a0e4a801fc3', 'ketua_pelaksana');

-- --------------------------------------------------------

--
-- Table structure for table `atlet`
--

CREATE TABLE `atlet` (
  `id_atlet` int(11) NOT NULL,
  `id_peserta_tanding` int(11) NOT NULL,
  `id_pertandingan` int(11) NOT NULL,
  `posisi` enum('merah','biru') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_lomba`
--

CREATE TABLE `kategori_lomba` (
  `id_kategori_lomba` int(11) NOT NULL,
  `id_kategori_usia` int(11) NOT NULL,
  `nama_kategori_lomba` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_lomba`
--

INSERT INTO `kategori_lomba` (`id_kategori_lomba`, `id_kategori_usia`, `nama_kategori_lomba`, `keterangan`) VALUES
(6, 2, 'rtesa', 'tes'),
(7, 2, 'asd', 'sad'),
(9, 2, 'Tanding', 'asdasd'),
(10, 2, 'Tanding', 'dsf'),
(11, 2, 'asd', 'sades'),
(12, 6, 'Tanding', '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_usia`
--

CREATE TABLE `kategori_usia` (
  `id_kategori_usia` int(11) NOT NULL,
  `jenis_kelamin` enum('putra','putri') NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `min_umur` int(11) NOT NULL,
  `max_umur` int(11) NOT NULL,
  `acuan_tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_usia`
--

INSERT INTO `kategori_usia` (`id_kategori_usia`, `jenis_kelamin`, `nama_kategori`, `min_umur`, `max_umur`, `acuan_tanggal`) VALUES
(2, 'putri', 'dewasa', 11, 21, '2018-05-29'),
(3, 'putra', 'Remaja', 11, 16, '2018-05-29'),
(5, 'putri', 'usia dini', 6, 10, '2018-05-29'),
(6, 'putra', 'Usia dini', 5, 9, '2018-05-29'),
(7, 'putra', 'ra remaja', 13, 16, '0000-00-00'),
(8, 'putri', 'asd', 12, 12, '2018-05-29'),
(9, 'putri', 'Pra remaja', 14, 16, '2018-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_tanding`
--

CREATE TABLE `kelas_tanding` (
  `id_kelas_tanding` int(11) NOT NULL,
  `id_kategori_lomba` int(11) NOT NULL,
  `berat_minimal` float NOT NULL,
  `berat_maksimal` float NOT NULL,
  `label` varchar(2) NOT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_tanding`
--

INSERT INTO `kelas_tanding` (`id_kelas_tanding`, `id_kategori_lomba`, `berat_minimal`, `berat_maksimal`, `label`, `keterangan`) VALUES
(1, 6, 45, 50, 'A', 'sadasd'),
(2, 6, 50, 55, 'B', 'asd'),
(3, 6, 55, 60, 'C', 'asdasd'),
(4, 6, 60, 65, 'D', 'sadsad'),
(5, 7, 65, 70, 'E', 'keterangan'),
(6, 12, 35, 40, 'A', 'tesss'),
(7, 12, 40, 45, 'B', ''),
(8, 12, 887, 987, 'jh', 'jhgj'),
(9, 6, 12, 12, 'jh', 'asdasd'),
(10, 6, 12, 12, 'CX', 'tes'),
(11, 6, 12, 13, 'CX', 'asd'),
(12, 6, 12, 12, 'CX', 'asd'),
(13, 6, 12, 13, 'A', 'asd'),
(14, 6, 12, 13, 'jh', 'asd'),
(15, 6, 12, 123, 'as', 'sadasd');

-- --------------------------------------------------------

--
-- Table structure for table `kompetisi_tanding`
--

CREATE TABLE `kompetisi_tanding` (
  `id_kompetisi_tanding` int(11) NOT NULL,
  `id_kelas_tanding` int(11) NOT NULL,
  `max_peserta` int(11) NOT NULL,
  `nomor_pool` int(11) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kontingen`
--

CREATE TABLE `kontingen` (
  `id_kontingen` int(11) NOT NULL,
  `id_penanggungjawab` int(111) NOT NULL,
  `nama_kontingen` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `kategori` text NOT NULL,
  `usia` text NOT NULL,
  `sub_kategori` text NOT NULL,
  `status_pembayaran` enum('lunas','belum_lunas') NOT NULL DEFAULT 'belum_lunas'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `official`
--

CREATE TABLE `official` (
  `id_official` int(11) NOT NULL,
  `id_kontingen` int(11) NOT NULL,
  `nama_official` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('laki - laki','perempuan') NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `jabatan` enum('official','manager') NOT NULL,
  `status_pembayaran` enum('lunas','belum lunas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id_pendaftar` int(11) NOT NULL,
  `id_kontingen` int(11) NOT NULL,
  `nama_peserta` varchar(255) NOT NULL,
  `jenis_kelamin` enum('laki - laki','perempuan') NOT NULL,
  `tinggi_badan` double NOT NULL,
  `berat_badan` double NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL,
  `arsip_peserta` text NOT NULL,
  `status_pembayaran` enum('lunas','belum_lunas','','') DEFAULT 'belum_lunas'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_detail_pertandingan` int(11) NOT NULL,
  `id_atlet` int(11) NOT NULL,
  `penilaian` text NOT NULL,
  `babak` int(11) NOT NULL,
  `total_nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perangkat_pertandingan`
--

CREATE TABLE `perangkat_pertandingan` (
  `id_perangkat_pertandingan` int(11) NOT NULL,
  `id_pertandingan` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `status` enum('timer','ketua_pertandingan','wasit','wasit_juri') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pertandingan`
--

CREATE TABLE `pertandingan` (
  `id_pertandingan` int(11) NOT NULL,
  `id_kompetisi_tanding` int(11) NOT NULL,
  `nomor_partai` int(11) NOT NULL,
  `nomor_pertandingan` int(11) NOT NULL,
  `token_pertandingan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peserta_tanding`
--

CREATE TABLE `peserta_tanding` (
  `id_peserta_tanding` int(11) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `id_kompetisi_tanding` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_kategori_seni`
--

CREATE TABLE `sub_kategori_seni` (
  `id_sub_kategori_seni` int(11) NOT NULL,
  `id_kategori_lomba` int(11) NOT NULL,
  `jenis_seni` enum('tunggal','ganda','beregu','lain-lain') NOT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `atlet`
--
ALTER TABLE `atlet`
  ADD PRIMARY KEY (`id_atlet`),
  ADD KEY `id_peserta` (`id_peserta_tanding`),
  ADD KEY `id_pertandingan` (`id_pertandingan`);

--
-- Indexes for table `kategori_lomba`
--
ALTER TABLE `kategori_lomba`
  ADD PRIMARY KEY (`id_kategori_lomba`),
  ADD KEY `id_kategori_usia` (`id_kategori_usia`);

--
-- Indexes for table `kategori_usia`
--
ALTER TABLE `kategori_usia`
  ADD PRIMARY KEY (`id_kategori_usia`);

--
-- Indexes for table `kelas_tanding`
--
ALTER TABLE `kelas_tanding`
  ADD PRIMARY KEY (`id_kelas_tanding`),
  ADD KEY `id_kategori_lomba` (`id_kategori_lomba`);

--
-- Indexes for table `kompetisi_tanding`
--
ALTER TABLE `kompetisi_tanding`
  ADD PRIMARY KEY (`id_kompetisi_tanding`),
  ADD KEY `id_kelas_tanding` (`id_kelas_tanding`);

--
-- Indexes for table `kontingen`
--
ALTER TABLE `kontingen`
  ADD PRIMARY KEY (`id_kontingen`),
  ADD KEY `id_penanggungjawab` (`id_penanggungjawab`);

--
-- Indexes for table `official`
--
ALTER TABLE `official`
  ADD PRIMARY KEY (`id_official`),
  ADD KEY `id_kontingen` (`id_kontingen`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id_pendaftar`),
  ADD KEY `id_kontingen` (`id_kontingen`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_detail_pertandingan` (`id_detail_pertandingan`),
  ADD KEY `id_atlet` (`id_atlet`);

--
-- Indexes for table `perangkat_pertandingan`
--
ALTER TABLE `perangkat_pertandingan`
  ADD PRIMARY KEY (`id_perangkat_pertandingan`),
  ADD KEY `id_pertandingan` (`id_pertandingan`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `pertandingan`
--
ALTER TABLE `pertandingan`
  ADD PRIMARY KEY (`id_pertandingan`),
  ADD KEY `id_kompetisi_tanding` (`id_kompetisi_tanding`);

--
-- Indexes for table `peserta_tanding`
--
ALTER TABLE `peserta_tanding`
  ADD PRIMARY KEY (`id_peserta_tanding`),
  ADD KEY `id_pendaftar` (`id_pendaftar`),
  ADD KEY `id_kompetisi_tanding` (`id_kompetisi_tanding`);

--
-- Indexes for table `sub_kategori_seni`
--
ALTER TABLE `sub_kategori_seni`
  ADD PRIMARY KEY (`id_sub_kategori_seni`),
  ADD KEY `id_kategori_lomba` (`id_kategori_lomba`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `atlet`
--
ALTER TABLE `atlet`
  MODIFY `id_atlet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_lomba`
--
ALTER TABLE `kategori_lomba`
  MODIFY `id_kategori_lomba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kategori_usia`
--
ALTER TABLE `kategori_usia`
  MODIFY `id_kategori_usia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kelas_tanding`
--
ALTER TABLE `kelas_tanding`
  MODIFY `id_kelas_tanding` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kompetisi_tanding`
--
ALTER TABLE `kompetisi_tanding`
  MODIFY `id_kompetisi_tanding` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kontingen`
--
ALTER TABLE `kontingen`
  MODIFY `id_kontingen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `official`
--
ALTER TABLE `official`
  MODIFY `id_official` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perangkat_pertandingan`
--
ALTER TABLE `perangkat_pertandingan`
  MODIFY `id_perangkat_pertandingan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertandingan`
--
ALTER TABLE `pertandingan`
  MODIFY `id_pertandingan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peserta_tanding`
--
ALTER TABLE `peserta_tanding`
  MODIFY `id_peserta_tanding` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_kategori_seni`
--
ALTER TABLE `sub_kategori_seni`
  MODIFY `id_sub_kategori_seni` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `atlet`
--
ALTER TABLE `atlet`
  ADD CONSTRAINT `atlet_ibfk_2` FOREIGN KEY (`id_pertandingan`) REFERENCES `pertandingan` (`id_pertandingan`),
  ADD CONSTRAINT `atlet_ibfk_3` FOREIGN KEY (`id_peserta_tanding`) REFERENCES `peserta_tanding` (`id_peserta_tanding`);

--
-- Constraints for table `kategori_lomba`
--
ALTER TABLE `kategori_lomba`
  ADD CONSTRAINT `kategori_lomba_ibfk_1` FOREIGN KEY (`id_kategori_usia`) REFERENCES `kategori_usia` (`id_kategori_usia`);

--
-- Constraints for table `kelas_tanding`
--
ALTER TABLE `kelas_tanding`
  ADD CONSTRAINT `kelas_tanding_ibfk_1` FOREIGN KEY (`id_kategori_lomba`) REFERENCES `kategori_lomba` (`id_kategori_lomba`);

--
-- Constraints for table `kompetisi_tanding`
--
ALTER TABLE `kompetisi_tanding`
  ADD CONSTRAINT `kompetisi_tanding_ibfk_1` FOREIGN KEY (`id_kelas_tanding`) REFERENCES `kelas_tanding` (`id_kelas_tanding`);

--
-- Constraints for table `official`
--
ALTER TABLE `official`
  ADD CONSTRAINT `official_ibfk_1` FOREIGN KEY (`id_kontingen`) REFERENCES `kontingen` (`id_kontingen`);

--
-- Constraints for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD CONSTRAINT `pendaftar_ibfk_1` FOREIGN KEY (`id_kontingen`) REFERENCES `kontingen` (`id_kontingen`);

--
-- Constraints for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `penilaian_ibfk_1` FOREIGN KEY (`id_atlet`) REFERENCES `atlet` (`id_atlet`),
  ADD CONSTRAINT `penilaian_ibfk_2` FOREIGN KEY (`id_detail_pertandingan`) REFERENCES `perangkat_pertandingan` (`id_perangkat_pertandingan`);

--
-- Constraints for table `perangkat_pertandingan`
--
ALTER TABLE `perangkat_pertandingan`
  ADD CONSTRAINT `perangkat_pertandingan_ibfk_1` FOREIGN KEY (`id_pertandingan`) REFERENCES `pertandingan` (`id_pertandingan`),
  ADD CONSTRAINT `perangkat_pertandingan_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `pertandingan`
--
ALTER TABLE `pertandingan`
  ADD CONSTRAINT `pertandingan_ibfk_1` FOREIGN KEY (`id_kompetisi_tanding`) REFERENCES `kompetisi_tanding` (`id_kompetisi_tanding`);

--
-- Constraints for table `peserta_tanding`
--
ALTER TABLE `peserta_tanding`
  ADD CONSTRAINT `peserta_tanding_ibfk_1` FOREIGN KEY (`id_pendaftar`) REFERENCES `pendaftar` (`id_pendaftar`);

--
-- Constraints for table `sub_kategori_seni`
--
ALTER TABLE `sub_kategori_seni`
  ADD CONSTRAINT `sub_kategori_seni_ibfk_1` FOREIGN KEY (`id_kategori_lomba`) REFERENCES `kategori_lomba` (`id_kategori_lomba`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
