-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 27, 2017 at 07:54 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id` int(10) NOT NULL,
  `pendaftar_id` int(10) DEFAULT NULL,
  `jurusan_id` int(10) DEFAULT NULL,
  `nilai_tpa` int(255) DEFAULT NULL,
  `nilai_wawancara` int(255) DEFAULT NULL,
  `nilai_uan` int(255) DEFAULT NULL,
  `nilai_minat` int(255) DEFAULT NULL,
  `nilai_rata` int(255) DEFAULT NULL,
  `penguji_id` int(10) DEFAULT NULL,
  `tahun_ajaran` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id`, `pendaftar_id`, `jurusan_id`, `nilai_tpa`, `nilai_wawancara`, `nilai_uan`, `nilai_minat`, `nilai_rata`, `penguji_id`, `tahun_ajaran`, `keterangan`) VALUES
(12, 5, 2, 80, 84, 76, 66, 77, 3, '2016-2017', 'Lulus'),
(13, 6, 3, 77, 77, 77, 77, 77, 5, '`2017-2018', 'Lulus');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(10) NOT NULL,
  `nmjurusan` varchar(255) NOT NULL,
  `nilai_lulus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nmjurusan`, `nilai_lulus`) VALUES
(2, 'Rekayasa Perangkat Lunak', '75'),
(3, 'Teknik Kendaraan Ringan', '75'),
(4, 'Teknik Sepeda Motor', '75');

-- --------------------------------------------------------

--
-- Table structure for table `kepsek`
--

CREATE TABLE `kepsek` (
  `id` int(10) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nmkepsek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepsek`
--

INSERT INTO `kepsek` (`id`, `nip`, `nmkepsek`) VALUES
(1, '12321235678', 'Rafy Fakhrizal Handiawan');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(10) NOT NULL,
  `nmpendaftar` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nmpendaftar`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `phone`) VALUES
(5, 'Haikal Maulana', 'Biak , Papua', '2017-09-26', 'laki-laki', 'Islam', '08982557890'),
(6, 'M.Aldhit', 'Nigeria', '2001-06-21', 'laki-laki', 'Islam', '089776578900');

-- --------------------------------------------------------

--
-- Table structure for table `penguji`
--

CREATE TABLE `penguji` (
  `id` int(10) NOT NULL,
  `nmpenguji` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penguji`
--

INSERT INTO `penguji` (`id`, `nmpenguji`, `jabatan`) VALUES
(3, 'Bpk.Agung', 'Kepala Program RPL'),
(4, 'Bpk.Romi', 'Kepala Program TKR'),
(5, 'Bpk.Agus', 'Kepala Program TSM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pendaftar_id` (`pendaftar_id`),
  ADD KEY `penguji_id` (`penguji_id`),
  ADD KEY `jurusan_id` (`jurusan_id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepsek`
--
ALTER TABLE `kepsek`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penguji`
--
ALTER TABLE `penguji`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kepsek`
--
ALTER TABLE `kepsek`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `penguji`
--
ALTER TABLE `penguji`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasil`
--
ALTER TABLE `hasil`
  ADD CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`penguji_id`) REFERENCES `penguji` (`id`),
  ADD CONSTRAINT `hasil_ibfk_2` FOREIGN KEY (`pendaftar_id`) REFERENCES `pendaftar` (`id`),
  ADD CONSTRAINT `hasil_ibfk_3` FOREIGN KEY (`jurusan_id`) REFERENCES `jurusan` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
