-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 01:57 PM
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
-- Database: `dbminimarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `SKU` varchar(20) NOT NULL,
  `Nama_barang` varchar(100) NOT NULL,
  `Kategori` char(50) NOT NULL,
  `Jumlah_stok` int(20) NOT NULL,
  `Harga_satuan` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`SKU`, `Nama_barang`, `Kategori`, `Jumlah_stok`, `Harga_satuan`) VALUES
('0001', 'Samyang Mie Instant Goreng Pedas Ayam 140G', 'Makanan', 120, '16.000'),
('0002', 'My Tea Minuman Teh Oolong Poci 450Ml', 'Minuman', 50, '6.500'),
('0003', 'Zebra Ballpoint Sarasa Black', 'ATK', 50, '23.200'),
('0004', 'Masker Garnier', 'Lain-lain', 30, '18.700'),
('0005', 'Nu Minuman Milk Tea 330Ml', 'Minuman', 100, '7.600'),
('0006', 'Indomie Mie Goreng Cabe Ijo 85G', 'Makanan', 200, '3.200'),
('0007', 'Rinso Deterjen Cair Gentle Anti Noda 200Ml', 'Lain-lain', 130, '5.100'),
('0008', 'Mitsubishi Gel Impact Blue Umn 152', 'ATK', 30, '32.900'),
('0009', 'Kimbo Kitchen Bubur Instant Ayam 250G', 'Makanan', 70, '10.300'),
('0010', 'Coca-Cola Soft Drink 1500Ml', 'Minuman', 55, '12.400');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`SKU`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
