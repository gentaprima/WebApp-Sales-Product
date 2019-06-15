-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2019 at 09:27 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bs_jaktim`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_channel`
--

CREATE TABLE `tbl_channel` (
  `kode_channel` varchar(20) NOT NULL,
  `nama_channel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_channel`
--

INSERT INTO `tbl_channel` (`kode_channel`, `nama_channel`) VALUES
('AMD', 'AM DBS'),
('AMS', 'AM BS'),
('CWG', 'CWG'),
('GAN', 'GAN'),
('JTN', 'JTN'),
('KLD', 'KLD'),
('KRG', 'KRG'),
('PDK', 'PDK'),
('PGB', 'PGB'),
('PGC', 'PGC'),
('PSR', 'PSR'),
('RMG', 'RMG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `kode_product` varchar(20) NOT NULL,
  `nama_product` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`kode_product`, `nama_product`) VALUES
('AST', 'ASTINET'),
('HSI', 'HSI'),
('MTO', 'METRO'),
('VPN', 'VPN'),
('WCO', 'WICO'),
('WST', 'WISTA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unit_business`
--

CREATE TABLE `tbl_unit_business` (
  `id` int(11) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `nama_sales` varchar(30) NOT NULL,
  `lokasi` text NOT NULL,
  `kode_channel` varchar(30) NOT NULL,
  `pelanggan` varchar(30) NOT NULL,
  `kode_product` varchar(30) NOT NULL,
  `bandwith` int(11) NOT NULL,
  `prospek` varchar(30) NOT NULL,
  `deal` varchar(10) NOT NULL,
  `tgl` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_unit_business`
--

INSERT INTO `tbl_unit_business` (`id`, `tanggal`, `bulan`, `nama_sales`, `lokasi`, `kode_channel`, `pelanggan`, `kode_product`, `bandwith`, `prospek`, `deal`, `tgl`) VALUES
(1, 18, 'May', 'Tri Gunawan', 'Jalan Raya Bogor', 'KLD', 'Dapur Seafood', 'HSI', 10, '', 'deal', '18-May-2019'),
(2, 18, 'May', 'Sunaryo', 'Jalan Kesadaran Raya No 12 A', 'PGB', 'Toko Sumur Jaha', 'MTO', 10, 'Penawaran', '', '18-May-2019'),
(3, 18, 'May', 'Kedai Kopi Works', 'Jl Utan Kayu Raya', 'CWG', 'Kedai Kopi Works', 'VPN', 10, 'Penawaran', '', '18-May-2019'),
(4, 18, 'May', 'Warung Kopi Cipinang', 'Jl Cipinang Indah Raya', 'KLD', 'Warung Kopi', 'AST', 10, '', 'deal', '18-May-2019'),
(5, 18, 'May', 'Budi', 'Jl Cipinang Besar 1', 'AMD', 'SMAN 100 Jakarta', 'HSI', 10, 'Visit', '', '18-May-2019'),
(6, 18, 'May', 'Jarwo', 'Jl  ABC', 'PDK', 'Dapur Seafood', 'HSI', 10, '', 'deal', '18-May-2019'),
(7, 20, 'May', 'Getna', 'Jalan Raya Bogor', 'AMS', 'Toko Sumur Jaha', 'HSI', 10, '', 'deal', '19-May-2019	');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(70) NOT NULL,
  `last_login` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `email`, `password`, `last_login`) VALUES
(10, 'admin', 'admin@gmail.com', '$2y$10$NcMxpEfxhjx3neHvICz/7uGq09piLZypbU17339mW3HfcICbIjy3.', '19-05-2019 23:23:08'),
(11, 'genta', 'genta@gmail.comm', '$2y$10$SEE6L8787oJEaASzQAvq0uGGe3UTal1WXoi/FoYM78ZEjl9bCbdbq', '17-05-2019 16:17:22'),
(16, 'vinita', 'vinitasandri@gmail.com', '$2y$10$IXO69Ujv4cEi44nrXhrgJeq6ua5PDDekhWLeEzVN.KHznGHiVO1TK', ''),
(17, 'asda', 'asdas@adsa.com', '$2y$10$EH9.2R4pr/ngkTsaAWIYkOyXpVpLlN9IkoNpI60blLH4QYVYn8XwC', ''),
(18, 'coba123', 'coba123@gmail.com', '$2y$10$73F/oHwS5kNH5HTQ.4fhOeFL7O.H3iUwfHe0unMArTSB3/e9Ig96S', ''),
(19, 'asd', 'asdsa@as.com', '$2y$10$EZ1Garo0o4k2kXEEMm7OPORwxV5Jf4wDITXjBB0Kx6oHkD5HsSjpG', ''),
(20, 'asda123', 'Getnasd@gma.com', '$2y$10$KdCgvA9k32zfdmpNx2lNJuS9Od.D.bF8mGNCLBu01OEubJGmlBEcq', ''),
(21, 'coba', 'asdaa@gasd.com', '$2y$10$CUMgJKOz3XjlXv.hXDBzy.Pi.bd/hzi6KsvLTHQLCAXHFOvwMkNBO', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_channel`
--
ALTER TABLE `tbl_channel`
  ADD PRIMARY KEY (`kode_channel`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`kode_product`);

--
-- Indexes for table `tbl_unit_business`
--
ALTER TABLE `tbl_unit_business`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_channel` (`kode_channel`),
  ADD KEY `kode_product` (`kode_product`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_unit_business`
--
ALTER TABLE `tbl_unit_business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_unit_business`
--
ALTER TABLE `tbl_unit_business`
  ADD CONSTRAINT `tbl_unit_business_ibfk_1` FOREIGN KEY (`kode_channel`) REFERENCES `tbl_channel` (`kode_channel`),
  ADD CONSTRAINT `tbl_unit_business_ibfk_2` FOREIGN KEY (`kode_product`) REFERENCES `tbl_product` (`kode_product`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
