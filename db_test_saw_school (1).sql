-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2015 at 05:46 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_test_saw_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(35) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'panitia', 'd32b1673837a6a45f795c13ea67ec79e', 2);

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE IF NOT EXISTS `bobot` (
`id_bobot` int(11) NOT NULL,
  `kriteria` varchar(25) NOT NULL,
  `keterangan` enum('benefit','cost') NOT NULL,
  `nilai` int(11) NOT NULL,
  `dropdown` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`id_bobot`, `kriteria`, `keterangan`, `nilai`, `dropdown`) VALUES
(2, 'Nilai UN', 'benefit', 25, 'N'),
(4, 'Nilai Raport', 'benefit', 20, 'N'),
(5, 'Tes Akademik', 'benefit', 15, 'N'),
(6, 'Tes Psikologi', 'benefit', 10, 'N'),
(7, 'Tes Wawancara', 'benefit', 10, 'N'),
(8, 'Prestasi Non Akademik', 'benefit', 5, 'Y'),
(9, 'Tes Jasmani', 'benefit', 15, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE IF NOT EXISTS `daftar` (
`id_siswa` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(75) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2015004 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id_siswa`, `nama`, `alamat`) VALUES
(2015001, 'Adi Giri Setiawan', 'Baturetno'),
(2015002, 'Kurniawan Dwi', 'Tritomoyo'),
(2015003, 'Muhammad Aswan', 'Pracimantoro');

-- --------------------------------------------------------

--
-- Table structure for table `detail_bobot`
--

CREATE TABLE IF NOT EXISTS `detail_bobot` (
`id` int(11) NOT NULL,
  `id_bobot` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `value` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_bobot`
--

INSERT INTO `detail_bobot` (`id`, `id_bobot`, `id_siswa`, `value`) VALUES
(21, 2, 2015001, '42'),
(22, 4, 2015001, '78'),
(23, 5, 2015001, '82'),
(24, 6, 2015001, '110'),
(25, 7, 2015001, '85'),
(26, 8, 2015001, '51'),
(27, 9, 2015001, '0'),
(28, 2, 2015002, '38'),
(29, 4, 2015002, '74'),
(30, 5, 2015002, '0'),
(31, 6, 2015002, '0'),
(32, 7, 2015002, '0'),
(33, 8, 2015002, '49'),
(34, 9, 2015002, '86'),
(35, 2, 2015003, '33'),
(36, 4, 2015003, '72'),
(37, 5, 2015003, '0'),
(38, 6, 2015003, '0'),
(39, 7, 2015003, '0'),
(40, 8, 2015003, '52'),
(41, 9, 2015003, '0');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE IF NOT EXISTS `hasil` (
  `id_siswa` int(11) NOT NULL,
  `id_bobot` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_kriteria`
--

CREATE TABLE IF NOT EXISTS `sub_kriteria` (
`id` int(11) NOT NULL,
  `id_bobot` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `min` int(11) NOT NULL,
  `kondisi` varchar(100) NOT NULL,
  `max` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_kriteria`
--

INSERT INTO `sub_kriteria` (`id`, `id_bobot`, `keterangan`, `min`, `kondisi`, `max`, `nilai`) VALUES
(23, 2, '', 0, '-', 20, 60),
(24, 2, '', 21, '-', 26, 70),
(25, 2, '', 27, '-', 32, 80),
(26, 2, '', 33, '-', 40, 90),
(27, 2, '', 41, '-', 50, 100),
(28, 4, '', 0, '-', 65, 60),
(29, 4, '', 66, '-', 75, 70),
(30, 4, '', 76, '-', 85, 80),
(31, 4, '', 86, '-', 95, 90),
(32, 4, '', 96, '-', 100, 100),
(33, 5, '', 0, '-', 65, 60),
(34, 5, '', 66, '-', 75, 70),
(35, 5, '', 76, '-', 85, 80),
(36, 5, '', 86, '-', 95, 90),
(37, 5, '', 96, '-', 100, 100),
(38, 6, '', 0, '-', 79, 60),
(39, 6, '', 80, '-', 90, 70),
(40, 6, '', 91, '-', 110, 80),
(41, 6, '', 111, '-', 120, 90),
(42, 6, '', 121, '-', 150, 100),
(43, 7, '', 0, '-', 65, 60),
(44, 7, '', 66, '-', 75, 70),
(45, 7, '', 76, '-', 85, 80),
(46, 7, '', 86, '-', 95, 90),
(47, 7, '', 96, '-', 100, 100),
(48, 8, 'Juara 1 Tingkat Provinsi', 0, '', 0, 100),
(49, 8, 'Juara 2,3 Tingkat Provinsi', 0, '', 0, 90),
(50, 8, 'Juara 1 Tingkat Kabupaten', 0, '', 0, 80),
(51, 8, 'Juara 2,3 Tingkat Kabupaten', 0, '', 0, 70),
(52, 8, 'Tidak Sama Sekali', 0, '', 0, 60),
(53, 9, '', 0, '-', 65, 60),
(54, 9, '', 66, '-', 75, 70),
(55, 9, '', 76, '-', 85, 80),
(56, 9, '', 86, '-', 95, 90),
(57, 9, '', 96, '-', 100, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
 ADD PRIMARY KEY (`id_bobot`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
 ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `detail_bobot`
--
ALTER TABLE `detail_bobot`
 ADD PRIMARY KEY (`id`), ADD KEY `FK__bobot` (`id_bobot`), ADD KEY `FK__daftar` (`id_siswa`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
 ADD KEY `id_siswa` (`id_siswa`), ADD KEY `id_bobot` (`id_bobot`);

--
-- Indexes for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
 ADD PRIMARY KEY (`id`), ADD KEY `FK_sub_kriteria_bobot` (`id_bobot`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bobot`
--
ALTER TABLE `bobot`
MODIFY `id_bobot` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2015004;
--
-- AUTO_INCREMENT for table `detail_bobot`
--
ALTER TABLE `detail_bobot`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_bobot`
--
ALTER TABLE `detail_bobot`
ADD CONSTRAINT `FK__bobot` FOREIGN KEY (`id_bobot`) REFERENCES `bobot` (`id_bobot`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK__daftar` FOREIGN KEY (`id_siswa`) REFERENCES `daftar` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hasil`
--
ALTER TABLE `hasil`
ADD CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`id_bobot`) REFERENCES `bobot` (`id_bobot`) ON DELETE CASCADE,
ADD CONSTRAINT `hasil_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `daftar` (`id_siswa`) ON DELETE CASCADE;

--
-- Constraints for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
ADD CONSTRAINT `FK_sub_kriteria_bobot` FOREIGN KEY (`id_bobot`) REFERENCES `bobot` (`id_bobot`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
