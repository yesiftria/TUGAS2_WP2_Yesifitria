-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 06:01 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `nama`, `password`) VALUES
('12207027', 'Yesi Fitria', 'f795a746daa97e4f863feb33fce45df6');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `harga_pokok` float NOT NULL,
  `harga_jual` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_brg`, `harga_pokok`, `harga_jual`) VALUES
(1, 'laptop', 5000000, 7500000),
(2, 'monitor', 750000, 1100000),
(3, 'kabel UTP', 800000, 1150000),
(4, 'printer', 750000, 900000),
(5, 'RJ45', 50000, 80000),
(6, 'tinta', 75000, 85000),
(7, 'pulpen', 20000, 30000),
(8, 'kertas A4', 50000, 60000),
(9, 'keyboard&mouse', 90000, 120000),
(10, 'PC server', 12000000, 15000000);

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `id_satuan` int(5) NOT NULL,
  `satuan` varchar(30) NOT NULL,
  `simbol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`id_satuan`, `satuan`, `simbol`) VALUES
(1, 'unit', 'unit'),
(2, 'dus', 'dus'),
(14, 'pack', 'pack');

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id_stok` int(5) NOT NULL,
  `id_barang` int(5) NOT NULL,
  `in_out` enum('in','out') NOT NULL,
  `qty` int(5) NOT NULL,
  `hrg_pokok` float NOT NULL,
  `hrg_jual` float NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id_stok`, `id_barang`, `in_out`, `qty`, `hrg_pokok`, `hrg_jual`, `note`) VALUES
(1, 1, 'in', 100, 5000000, 7500000, 'stok awal'),
(2, 2, 'in', 100, 750000, 1100000, 'stok awal'),
(3, 3, 'in', 100, 800000, 1150000, 'stok awal'),
(4, 4, 'in', 100, 750000, 900000, 'stok awal'),
(5, 5, 'in', 100, 50000, 80000, 'stok awal'),
(6, 6, 'in', 100, 75000, 85000, 'stok awal'),
(7, 7, 'in', 100, 20000, 30000, 'stok awal'),
(8, 8, 'in', 100, 50000, 60000, 'stok awal'),
(9, 9, 'in', 100, 90000, 12000, 'stok awal'),
(10, 10, 'in', 100, 12000000, 15000000, 'stok awal');

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `id_supl` int(5) NOT NULL,
  `nama_sup` varchar(45) NOT NULL,
  `telp_supl` varchar(20) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `is_active` int(1) NOT NULL,
  `status` enum('aktif','tidak aktif','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`id_supl`, `nama_sup`, `telp_supl`, `instansi`, `alamat`, `is_active`, `status`) VALUES
(1, 'andri', '082289349677', 'cv.computindo', 'jakarta timur', 1, 'aktif'),
(2, 'eko', '082289349667', 'cv.karya anak bangsa', 'jakarta pusat', 1, 'aktif'),
(3, 'dani', '082289349677', 'CV.Jaringan N asional', 'jakarta barat', 1, 'aktif'),
(4, 'saputra', '082289349669', 'Toko Ababil', 'jakarta timur', 1, 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id_stok`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id_supl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id_satuan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id_stok` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `suplier`
--
ALTER TABLE `suplier`
  MODIFY `id_supl` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
