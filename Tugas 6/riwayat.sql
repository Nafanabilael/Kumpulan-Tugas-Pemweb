-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 02:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `riwayat`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` varchar(10) NOT NULL,
  `riwayat_pendidikan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `riwayat_pendidikan`) VALUES
('01', 'SDN 1 Rengel'),
('02', 'SMPN 1 Rengel'),
('03', 'SMAN 1 Tuban'),
('04', 'S1 UPN Veteran Jawa Timur (Informatika)');

-- --------------------------------------------------------

--
-- Table structure for table `m_detail`
--

CREATE TABLE `m_detail` (
  `k_detail` int(10) UNSIGNED NOT NULL,
  `k_nama` int(10) UNSIGNED NOT NULL,
  `k_jenis` int(10) UNSIGNED NOT NULL,
  `content` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_detail`
--

INSERT INTO `m_detail` (`k_detail`, `k_nama`, `k_jenis`, `content`) VALUES
(99, 99, 999, 'Lainnya'),
(1101, 11, 360, 'Bermain alat musik'),
(1102, 11, 360, 'Bernyayi'),
(1103, 11, 360, 'Mendengarkan Musik'),
(1104, 11, 360, 'Membuat Lagu'),
(1201, 12, 360, 'Menggambar'),
(1202, 12, 360, 'Memahat Patung'),
(1203, 12, 360, 'Photography'),
(1204, 12, 360, 'Bermain teater'),
(1301, 13, 360, 'Membuat Appetizer'),
(1302, 13, 360, 'Membuat Main Course'),
(1303, 13, 360, 'Membuat Dessert'),
(1401, 14, 360, 'Sepak Bola'),
(1402, 14, 360, 'Basket'),
(1403, 14, 360, 'Badminton'),
(1404, 14, 360, 'Voli'),
(1405, 14, 360, 'Berenang');

-- --------------------------------------------------------

--
-- Table structure for table `m_jenis`
--

CREATE TABLE `m_jenis` (
  `k_jenis` int(10) UNSIGNED NOT NULL,
  `content` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_jenis`
--

INSERT INTO `m_jenis` (`k_jenis`, `content`) VALUES
(360, 'Non Akademis'),
(999, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `m_nama`
--

CREATE TABLE `m_nama` (
  `k_nama` int(10) UNSIGNED NOT NULL,
  `k_jenis` int(10) UNSIGNED NOT NULL,
  `content` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_nama`
--

INSERT INTO `m_nama` (`k_nama`, `k_jenis`, `content`) VALUES
(11, 360, 'Musik'),
(12, 360, 'Seni'),
(13, 360, 'Memasak'),
(14, 360, 'Olahraga'),
(99, 999, 'Lainnya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_detail`
--
ALTER TABLE `m_detail`
  ADD PRIMARY KEY (`k_detail`,`k_nama`,`k_jenis`),
  ADD KEY `k_nama` (`k_nama`,`k_jenis`);

--
-- Indexes for table `m_jenis`
--
ALTER TABLE `m_jenis`
  ADD PRIMARY KEY (`k_jenis`);

--
-- Indexes for table `m_nama`
--
ALTER TABLE `m_nama`
  ADD PRIMARY KEY (`k_nama`,`k_jenis`),
  ADD KEY `k_jenis` (`k_jenis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_jenis`
--
ALTER TABLE `m_jenis`
  MODIFY `k_jenis` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;

--
-- AUTO_INCREMENT for table `m_nama`
--
ALTER TABLE `m_nama`
  MODIFY `k_nama` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
