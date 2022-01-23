-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2022 at 03:11 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spp_inay`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bulan`
--

CREATE TABLE `tb_bulan` (
  `id_bulan` int(11) NOT NULL,
  `nama_bulan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bulan`
--

INSERT INTO `tb_bulan` (`id_bulan`, `nama_bulan`) VALUES
(1, 'Januari'),
(2, 'Februari'),
(3, 'Maret'),
(4, 'April'),
(5, 'Mei'),
(6, 'Juni'),
(7, 'Juli'),
(8, 'Agustus'),
(9, 'September'),
(10, 'Oktober'),
(11, 'November'),
(12, 'Desember');

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_santri`
--

CREATE TABLE `tb_data_santri` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data_santri`
--

INSERT INTO `tb_data_santri` (`id`, `nama`, `alamat`, `id_kamar`, `id_kelas`) VALUES
(25, 'Nafi', 'magelang', 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_tagihan`
--

CREATE TABLE `tb_data_tagihan` (
  `id` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `nominal` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data_tagihan`
--

INSERT INTO `tb_data_tagihan` (`id`, `id_tahun`, `id_bulan`, `nominal`) VALUES
(205, 16, 1, '200000'),
(206, 16, 2, '200000'),
(207, 16, 3, '200000'),
(208, 16, 4, '200000'),
(209, 16, 5, '200000'),
(210, 16, 6, '200000'),
(211, 16, 7, '200000'),
(212, 16, 8, '200000'),
(213, 16, 9, '200000'),
(214, 16, 10, '200000'),
(215, 16, 11, '200000'),
(216, 16, 12, '200000'),
(217, 17, 1, '120000'),
(218, 17, 2, '120000'),
(219, 17, 3, '120000'),
(220, 17, 4, '120000'),
(221, 17, 5, '120000'),
(222, 17, 6, '120000'),
(223, 17, 7, '120000'),
(224, 17, 8, '120000'),
(225, 17, 9, '120000'),
(226, 17, 10, '120000'),
(227, 17, 11, '120000'),
(228, 17, 12, '120000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_transaksi`
--

CREATE TABLE `tb_data_transaksi` (
  `id_data_transaksi` int(11) NOT NULL,
  `id_data_santri` int(11) NOT NULL,
  `id_data_tagihan` int(11) DEFAULT NULL,
  `jumlah_bayar` varchar(100) DEFAULT NULL,
  `sisa` varchar(100) DEFAULT NULL,
  `keterangan` enum('0','1') DEFAULT NULL,
  `tanggal_bayar` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data_transaksi`
--

INSERT INTO `tb_data_transaksi` (`id_data_transaksi`, `id_data_santri`, `id_data_tagihan`, `jumlah_bayar`, `sisa`, `keterangan`, `tanggal_bayar`) VALUES
(1633, 25, 205, '200000', '0', '1', '2022-01-22 09:10:09'),
(1634, 25, 206, '700000', '500000', '1', '2022-01-22 09:10:14'),
(1635, 25, 207, NULL, NULL, NULL, NULL),
(1636, 25, 208, NULL, NULL, NULL, NULL),
(1637, 25, 209, NULL, NULL, NULL, NULL),
(1638, 25, 210, NULL, NULL, NULL, NULL),
(1639, 25, 211, NULL, NULL, NULL, NULL),
(1640, 25, 212, NULL, NULL, NULL, NULL),
(1641, 25, 213, NULL, NULL, NULL, NULL),
(1642, 25, 214, NULL, NULL, NULL, NULL),
(1643, 25, 215, NULL, NULL, NULL, NULL),
(1644, 25, 216, NULL, NULL, NULL, NULL),
(1645, 25, 217, NULL, NULL, NULL, NULL),
(1646, 25, 218, NULL, NULL, NULL, NULL),
(1647, 25, 219, NULL, NULL, NULL, NULL),
(1648, 25, 220, NULL, NULL, NULL, NULL),
(1649, 25, 221, NULL, NULL, NULL, NULL),
(1650, 25, 222, NULL, NULL, NULL, NULL),
(1651, 25, 223, NULL, NULL, NULL, NULL),
(1652, 25, 224, NULL, NULL, NULL, NULL),
(1653, 25, 225, NULL, NULL, NULL, NULL),
(1654, 25, 226, NULL, NULL, NULL, NULL),
(1655, 25, 227, NULL, NULL, NULL, NULL),
(1656, 25, 228, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kamar`
--

CREATE TABLE `tb_kamar` (
  `id_kamar` int(11) NOT NULL,
  `nama_kamar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kamar`
--

INSERT INTO `tb_kamar` (`id_kamar`, `nama_kamar`) VALUES
(1, 'Umar 1'),
(2, 'Umar 2'),
(3, 'Umar 3'),
(4, 'Umar 4'),
(5, 'Umar 5'),
(6, 'Umar 6'),
(8, 'Umar 7'),
(9, 'Abu Bakar 1'),
(10, 'Abu Bakar 2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'Ibtida\''),
(2, 'Jurumiah'),
(3, 'Imrity'),
(4, 'Alfiyah 1'),
(5, 'Alfiyah 2'),
(6, 'Musyawirin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tahun`
--

CREATE TABLE `tb_tahun` (
  `id_tahun` int(11) NOT NULL,
  `nama_tahun` varchar(200) NOT NULL,
  `nominal_tagihan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tahun`
--

INSERT INTO `tb_tahun` (`id_tahun`, `nama_tahun`, `nominal_tagihan`) VALUES
(16, '2022', '200000'),
(17, '2023', '120000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bulan`
--
ALTER TABLE `tb_bulan`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indexes for table `tb_data_santri`
--
ALTER TABLE `tb_data_santri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_data_tagihan`
--
ALTER TABLE `tb_data_tagihan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tahun` (`id_tahun`);

--
-- Indexes for table `tb_data_transaksi`
--
ALTER TABLE `tb_data_transaksi`
  ADD PRIMARY KEY (`id_data_transaksi`),
  ADD KEY `id_data_tagihan` (`id_data_tagihan`),
  ADD KEY `id_data_santri` (`id_data_santri`),
  ADD KEY `id_data_tagihan_2` (`id_data_tagihan`);

--
-- Indexes for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_tahun`
--
ALTER TABLE `tb_tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bulan`
--
ALTER TABLE `tb_bulan`
  MODIFY `id_bulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_data_santri`
--
ALTER TABLE `tb_data_santri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_data_tagihan`
--
ALTER TABLE `tb_data_tagihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT for table `tb_data_transaksi`
--
ALTER TABLE `tb_data_transaksi`
  MODIFY `id_data_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1657;

--
-- AUTO_INCREMENT for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_tahun`
--
ALTER TABLE `tb_tahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_data_tagihan`
--
ALTER TABLE `tb_data_tagihan`
  ADD CONSTRAINT `tb_data_tagihan_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tb_tahun` (`id_tahun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_data_transaksi`
--
ALTER TABLE `tb_data_transaksi`
  ADD CONSTRAINT `tb_data_transaksi_ibfk_1` FOREIGN KEY (`id_data_tagihan`) REFERENCES `tb_data_tagihan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_data_transaksi_ibfk_2` FOREIGN KEY (`id_data_santri`) REFERENCES `tb_data_santri` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
