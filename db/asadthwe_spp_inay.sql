-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 27, 2022 at 07:21 AM
-- Server version: 10.3.35-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asadthwe_spp_inay`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com'),
(2, 'zakinafi_bendahara1', 'bendahara1_2022', 'nafi2022@gmail.com'),
(3, 'abdulkhakim_bendahara2', 'bendahara2_2022', 'abdulkhakim720@gmail.com');

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
  `nis` varchar(20) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(200) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `status` enum('1','2','3','4') NOT NULL DEFAULT '1',
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data_santri`
--

INSERT INTO `tb_data_santri` (`id`, `nama`, `nis`, `tgl_lahir`, `alamat`, `jenis_kelamin`, `id_kamar`, `id_kelas`, `no_hp`, `password`, `tgl_masuk`, `status`, `foto`) VALUES
(1, 'M Ali hudaifi', '22.01.0001 ', '1998-01-22', 'Rembang', 'L', 1, 6, '081311337023', '14786', '2022-04-05', '3', ''),
(2, 'Rio', '22.01.0002 ', '2000-02-15', 'Purworejo', 'L', 1, 3, '085600643404', '15892', '2022-04-30', '1', ''),
(3, 'Aqil', '22.01.0003 ', '2002-10-29', 'Semarang', 'L', 1, 1, '081391235489', '19916', '2022-04-30', '1', ''),
(4, 'wildan aly haidar arvissalam ', '22.01.0004 ', '2000-12-13', 'Salam', 'L', 2, 4, '081228460390', '11166', '2022-04-30', '2', ''),
(5, 'Nur jauhar Muslih', '22.01.0005 ', '2001-02-14', 'Jogja', 'L', 2, 3, '081336715086', '17960', '2022-04-30', '2', ''),
(6, 'Zaenuri', '22.01.0006 ', '2002-01-14', 'Kalimantan', 'L', 2, 1, '087875155816', '18329', '2022-04-30', '1', ''),
(7, 'Pandu Gusti', '22.01.0007 ', '2002-06-28', 'Martapura', 'L', 3, 2, '085754332252', '17118', '2022-04-30', '1', ''),
(8, 'Rifqi Muallim', '22.01.0008 ', '2001-01-15', 'Pemalang', 'L', 3, 5, '085747432493', '79399', '2022-04-30', '2', ''),
(10, 'Ichwan ', '22.01.0010 ', '2022-04-14', 'Pemalang', 'L', 4, 4, '089652670457', '18964', '2022-04-30', '2', ''),
(11, 'Fian', '22.01.0011 ', '2001-05-23', 'Magelang', 'L', 4, 3, '087705484049', '23756', '2022-04-30', '1', ''),
(12, 'Asad', '22.01.0012 ', '2001-02-13', 'Xebumen', 'L', 4, 3, '083106520666', '51974', '2022-04-30', '2', ''),
(13, 'Lathif Amin', '22.01.0013 ', '1996-06-27', 'Banyumas', 'L', 5, 6, '085713677198', '61971', '2022-04-30', '3', ''),
(14, 'Dimas ', '22.01.0014 ', '1999-04-06', 'Magelang', 'L', 5, 1, '0898998', '17053', '2022-04-30', '1', ''),
(15, 'Nafi ', '22.01.0015 ', '1999-02-24', 'Banjarnegara', 'L', 5, 4, '081326404159', '19469', '2022-04-30', '2', ''),
(16, 'Saifullah Thaher', '22.01.0016 ', '1996-12-30', 'Majalengxa', 'L', 6, 6, '082297496106', '21453', '2022-04-30', '3', ''),
(17, 'Adil', '22.01.0017 ', '2003-10-14', 'Papua', 'L', 6, 1, '085740245750', '15244', '2022-04-30', '1', ''),
(18, 'Samsul', '22.01.0018 ', '2003-11-12', 'Pexalongan', 'L', 6, 1, '082138220019', '13993', '2022-04-30', '1', ''),
(19, 'Irsyad', '22.01.0019 ', '1996-08-30', 'Dieng', 'L', 8, 3, '082234135794', '74580', '2022-04-30', '2', ''),
(21, 'Haedar', '22.01.0021 ', '2000-08-30', 'Bumen', 'L', 10, 5, '089512981259', '13522', '2022-04-30', '2', ''),
(22, 'Muhammad Asraff Nur Ardi', '22.01.0022 ', '2000-10-05', 'Kecik, Tanon, Sragen', 'L', 2, 2, '085783826914', '40147', '2020-07-08', '1', 'ASraff.png'),
(23, 'Muhammad Zakiyuddin', '22.01.0022 ', '2022-05-24', 'Mungkid Magelang', 'L', 3, 3, '089506453865', '96750', '2019-09-24', '1', '');

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
(1, 1, 1, '130000'),
(2, 1, 2, '140000'),
(3, 1, 3, '140000'),
(4, 1, 4, '140000'),
(5, 1, 5, '140000'),
(6, 1, 6, '140000'),
(7, 1, 7, '140000'),
(8, 1, 8, '140000'),
(9, 1, 9, '140000'),
(10, 1, 10, '140000'),
(11, 1, 11, '140000'),
(12, 1, 12, '140000');

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
  `tanggal_bayar` datetime DEFAULT NULL,
  `created_by` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data_transaksi`
--

INSERT INTO `tb_data_transaksi` (`id_data_transaksi`, `id_data_santri`, `id_data_tagihan`, `jumlah_bayar`, `sisa`, `keterangan`, `tanggal_bayar`, `created_by`) VALUES
(1, 1, 1, '140000', '10000', '1', '2022-07-06 00:04:53', 'admin'),
(2, 1, 2, NULL, NULL, NULL, NULL, ''),
(3, 1, 3, NULL, NULL, NULL, NULL, ''),
(4, 1, 4, NULL, NULL, NULL, NULL, ''),
(5, 1, 5, NULL, NULL, NULL, NULL, ''),
(6, 1, 6, NULL, NULL, NULL, NULL, ''),
(7, 1, 7, NULL, NULL, NULL, NULL, ''),
(8, 1, 8, NULL, NULL, NULL, NULL, ''),
(9, 1, 9, NULL, NULL, NULL, NULL, ''),
(10, 1, 10, NULL, NULL, NULL, NULL, ''),
(11, 1, 11, NULL, NULL, NULL, NULL, ''),
(12, 1, 12, NULL, NULL, NULL, NULL, ''),
(13, 2, 1, NULL, NULL, NULL, NULL, ''),
(14, 2, 2, NULL, NULL, NULL, NULL, ''),
(15, 2, 3, NULL, NULL, NULL, NULL, ''),
(16, 2, 4, NULL, NULL, NULL, NULL, ''),
(17, 2, 5, NULL, NULL, NULL, NULL, ''),
(18, 2, 6, NULL, NULL, NULL, NULL, ''),
(19, 2, 7, NULL, NULL, NULL, NULL, ''),
(20, 2, 8, NULL, NULL, NULL, NULL, ''),
(21, 2, 9, NULL, NULL, NULL, NULL, ''),
(22, 2, 10, NULL, NULL, NULL, NULL, ''),
(23, 2, 11, NULL, NULL, NULL, NULL, ''),
(24, 2, 12, NULL, NULL, NULL, NULL, ''),
(25, 3, 1, NULL, NULL, NULL, NULL, ''),
(26, 3, 2, NULL, NULL, NULL, NULL, ''),
(27, 3, 3, NULL, NULL, NULL, NULL, ''),
(28, 3, 4, NULL, NULL, NULL, NULL, ''),
(29, 3, 5, NULL, NULL, NULL, NULL, ''),
(30, 3, 6, NULL, NULL, NULL, NULL, ''),
(31, 3, 7, NULL, NULL, NULL, NULL, ''),
(32, 3, 8, NULL, NULL, NULL, NULL, ''),
(33, 3, 9, NULL, NULL, NULL, NULL, ''),
(34, 3, 10, NULL, NULL, NULL, NULL, ''),
(35, 3, 11, NULL, NULL, NULL, NULL, ''),
(36, 3, 12, NULL, NULL, NULL, NULL, ''),
(37, 4, 1, NULL, NULL, NULL, NULL, ''),
(38, 4, 2, NULL, NULL, NULL, NULL, ''),
(39, 4, 3, NULL, NULL, NULL, NULL, ''),
(40, 4, 4, NULL, NULL, NULL, NULL, ''),
(41, 4, 5, NULL, NULL, NULL, NULL, ''),
(42, 4, 6, NULL, NULL, NULL, NULL, ''),
(43, 4, 7, NULL, NULL, NULL, NULL, ''),
(44, 4, 8, NULL, NULL, NULL, NULL, ''),
(45, 4, 9, NULL, NULL, NULL, NULL, ''),
(46, 4, 10, NULL, NULL, NULL, NULL, ''),
(47, 4, 11, NULL, NULL, NULL, NULL, ''),
(48, 4, 12, NULL, NULL, NULL, NULL, ''),
(49, 5, 1, NULL, NULL, NULL, NULL, ''),
(50, 5, 2, NULL, NULL, NULL, NULL, ''),
(51, 5, 3, NULL, NULL, NULL, NULL, ''),
(52, 5, 4, NULL, NULL, NULL, NULL, ''),
(53, 5, 5, NULL, NULL, NULL, NULL, ''),
(54, 5, 6, NULL, NULL, NULL, NULL, ''),
(55, 5, 7, NULL, NULL, NULL, NULL, ''),
(56, 5, 8, NULL, NULL, NULL, NULL, ''),
(57, 5, 9, NULL, NULL, NULL, NULL, ''),
(58, 5, 10, NULL, NULL, NULL, NULL, ''),
(59, 5, 11, NULL, NULL, NULL, NULL, ''),
(60, 5, 12, NULL, NULL, NULL, NULL, ''),
(61, 6, 1, NULL, NULL, NULL, NULL, ''),
(62, 6, 2, NULL, NULL, NULL, NULL, ''),
(63, 6, 3, NULL, NULL, NULL, NULL, ''),
(64, 6, 4, NULL, NULL, NULL, NULL, ''),
(65, 6, 5, NULL, NULL, NULL, NULL, ''),
(66, 6, 6, NULL, NULL, NULL, NULL, ''),
(67, 6, 7, NULL, NULL, NULL, NULL, ''),
(68, 6, 8, NULL, NULL, NULL, NULL, ''),
(69, 6, 9, NULL, NULL, NULL, NULL, ''),
(70, 6, 10, NULL, NULL, NULL, NULL, ''),
(71, 6, 11, NULL, NULL, NULL, NULL, ''),
(72, 6, 12, NULL, NULL, NULL, NULL, ''),
(73, 7, 1, '130000', '0', '1', '2022-05-17 15:38:20', 'admin'),
(74, 7, 2, '140000', '0', '1', '2022-05-17 15:37:37', 'admin'),
(75, 7, 3, '140000', '0', '1', '2022-05-17 15:37:45', 'admin'),
(76, 7, 4, '140000', '0', '1', '2022-05-17 15:39:30', 'admin'),
(77, 7, 5, '1140000', '1000000', '1', '2022-05-17 15:40:41', 'admin'),
(78, 7, 6, NULL, NULL, NULL, NULL, ''),
(79, 7, 7, NULL, NULL, NULL, NULL, ''),
(80, 7, 8, NULL, NULL, NULL, NULL, ''),
(81, 7, 9, NULL, NULL, NULL, NULL, ''),
(82, 7, 10, NULL, NULL, NULL, NULL, ''),
(83, 7, 11, NULL, NULL, NULL, NULL, ''),
(84, 7, 12, NULL, NULL, NULL, NULL, ''),
(85, 8, 1, NULL, NULL, NULL, NULL, ''),
(86, 8, 2, NULL, NULL, NULL, NULL, ''),
(87, 8, 3, NULL, NULL, NULL, NULL, ''),
(88, 8, 4, NULL, NULL, NULL, NULL, ''),
(89, 8, 5, NULL, NULL, NULL, NULL, ''),
(90, 8, 6, NULL, NULL, NULL, NULL, ''),
(91, 8, 7, NULL, NULL, NULL, NULL, ''),
(92, 8, 8, NULL, NULL, NULL, NULL, ''),
(93, 8, 9, NULL, NULL, NULL, NULL, ''),
(94, 8, 10, NULL, NULL, NULL, NULL, ''),
(95, 8, 11, NULL, NULL, NULL, NULL, ''),
(96, 8, 12, NULL, NULL, NULL, NULL, ''),
(109, 10, 1, NULL, NULL, NULL, NULL, ''),
(110, 10, 2, NULL, NULL, NULL, NULL, ''),
(111, 10, 3, NULL, NULL, NULL, NULL, ''),
(112, 10, 4, NULL, NULL, NULL, NULL, ''),
(113, 10, 5, NULL, NULL, NULL, NULL, ''),
(114, 10, 6, NULL, NULL, NULL, NULL, ''),
(115, 10, 7, NULL, NULL, NULL, NULL, ''),
(116, 10, 8, NULL, NULL, NULL, NULL, ''),
(117, 10, 9, NULL, NULL, NULL, NULL, ''),
(118, 10, 10, NULL, NULL, NULL, NULL, ''),
(119, 10, 11, NULL, NULL, NULL, NULL, ''),
(120, 10, 12, NULL, NULL, NULL, NULL, ''),
(121, 11, 1, NULL, NULL, NULL, NULL, ''),
(122, 11, 2, NULL, NULL, NULL, NULL, ''),
(123, 11, 3, NULL, NULL, NULL, NULL, ''),
(124, 11, 4, NULL, NULL, NULL, NULL, ''),
(125, 11, 5, NULL, NULL, NULL, NULL, ''),
(126, 11, 6, NULL, NULL, NULL, NULL, ''),
(127, 11, 7, NULL, NULL, NULL, NULL, ''),
(128, 11, 8, NULL, NULL, NULL, NULL, ''),
(129, 11, 9, NULL, NULL, NULL, NULL, ''),
(130, 11, 10, NULL, NULL, NULL, NULL, ''),
(131, 11, 11, NULL, NULL, NULL, NULL, ''),
(132, 11, 12, NULL, NULL, NULL, NULL, ''),
(133, 12, 1, '140000', '0', '1', '2022-05-07 17:37:43', 'admin'),
(134, 12, 2, '140000', '0', '1', '2022-05-07 17:37:46', 'admin'),
(135, 12, 3, '140000', '0', '1', '2022-05-07 17:37:49', 'admin'),
(136, 12, 4, '140000', '0', '1', '2022-05-07 17:37:55', 'admin'),
(137, 12, 5, NULL, NULL, NULL, NULL, ''),
(138, 12, 6, NULL, NULL, NULL, NULL, ''),
(139, 12, 7, NULL, NULL, NULL, NULL, ''),
(140, 12, 8, NULL, NULL, NULL, NULL, ''),
(141, 12, 9, NULL, NULL, NULL, NULL, ''),
(142, 12, 10, NULL, NULL, NULL, NULL, ''),
(143, 12, 11, NULL, NULL, NULL, NULL, ''),
(144, 12, 12, NULL, NULL, NULL, NULL, ''),
(145, 13, 1, NULL, NULL, NULL, NULL, ''),
(146, 13, 2, NULL, NULL, NULL, NULL, ''),
(147, 13, 3, NULL, NULL, NULL, NULL, ''),
(148, 13, 4, NULL, NULL, NULL, NULL, ''),
(149, 13, 5, NULL, NULL, NULL, NULL, ''),
(150, 13, 6, NULL, NULL, NULL, NULL, ''),
(151, 13, 7, NULL, NULL, NULL, NULL, ''),
(152, 13, 8, NULL, NULL, NULL, NULL, ''),
(153, 13, 9, NULL, NULL, NULL, NULL, ''),
(154, 13, 10, NULL, NULL, NULL, NULL, ''),
(155, 13, 11, NULL, NULL, NULL, NULL, ''),
(156, 13, 12, NULL, NULL, NULL, NULL, ''),
(157, 14, 1, NULL, NULL, NULL, NULL, ''),
(158, 14, 2, NULL, NULL, NULL, NULL, ''),
(159, 14, 3, NULL, NULL, NULL, NULL, ''),
(160, 14, 4, NULL, NULL, NULL, NULL, ''),
(161, 14, 5, NULL, NULL, NULL, NULL, ''),
(162, 14, 6, NULL, NULL, NULL, NULL, ''),
(163, 14, 7, NULL, NULL, NULL, NULL, ''),
(164, 14, 8, NULL, NULL, NULL, NULL, ''),
(165, 14, 9, NULL, NULL, NULL, NULL, ''),
(166, 14, 10, NULL, NULL, NULL, NULL, ''),
(167, 14, 11, NULL, NULL, NULL, NULL, ''),
(168, 14, 12, NULL, NULL, NULL, NULL, ''),
(169, 15, 1, NULL, NULL, NULL, NULL, ''),
(170, 15, 2, NULL, NULL, NULL, NULL, ''),
(171, 15, 3, NULL, NULL, NULL, NULL, ''),
(172, 15, 4, NULL, NULL, NULL, NULL, ''),
(173, 15, 5, NULL, NULL, NULL, NULL, ''),
(174, 15, 6, NULL, NULL, NULL, NULL, ''),
(175, 15, 7, NULL, NULL, NULL, NULL, ''),
(176, 15, 8, NULL, NULL, NULL, NULL, ''),
(177, 15, 9, NULL, NULL, NULL, NULL, ''),
(178, 15, 10, NULL, NULL, NULL, NULL, ''),
(179, 15, 11, NULL, NULL, NULL, NULL, ''),
(180, 15, 12, NULL, NULL, NULL, NULL, ''),
(181, 16, 1, NULL, NULL, NULL, NULL, ''),
(182, 16, 2, NULL, NULL, NULL, NULL, ''),
(183, 16, 3, NULL, NULL, NULL, NULL, ''),
(184, 16, 4, NULL, NULL, NULL, NULL, ''),
(185, 16, 5, NULL, NULL, NULL, NULL, ''),
(186, 16, 6, NULL, NULL, NULL, NULL, ''),
(187, 16, 7, NULL, NULL, NULL, NULL, ''),
(188, 16, 8, NULL, NULL, NULL, NULL, ''),
(189, 16, 9, NULL, NULL, NULL, NULL, ''),
(190, 16, 10, NULL, NULL, NULL, NULL, ''),
(191, 16, 11, NULL, NULL, NULL, NULL, ''),
(192, 16, 12, NULL, NULL, NULL, NULL, ''),
(193, 17, 1, NULL, NULL, NULL, NULL, ''),
(194, 17, 2, NULL, NULL, NULL, NULL, ''),
(195, 17, 3, NULL, NULL, NULL, NULL, ''),
(196, 17, 4, NULL, NULL, NULL, NULL, ''),
(197, 17, 5, NULL, NULL, NULL, NULL, ''),
(198, 17, 6, NULL, NULL, NULL, NULL, ''),
(199, 17, 7, NULL, NULL, NULL, NULL, ''),
(200, 17, 8, NULL, NULL, NULL, NULL, ''),
(201, 17, 9, NULL, NULL, NULL, NULL, ''),
(202, 17, 10, NULL, NULL, NULL, NULL, ''),
(203, 17, 11, NULL, NULL, NULL, NULL, ''),
(204, 17, 12, NULL, NULL, NULL, NULL, ''),
(205, 18, 1, NULL, NULL, NULL, NULL, ''),
(206, 18, 2, NULL, NULL, NULL, NULL, ''),
(207, 18, 3, NULL, NULL, NULL, NULL, ''),
(208, 18, 4, NULL, NULL, NULL, NULL, ''),
(209, 18, 5, NULL, NULL, NULL, NULL, ''),
(210, 18, 6, NULL, NULL, NULL, NULL, ''),
(211, 18, 7, NULL, NULL, NULL, NULL, ''),
(212, 18, 8, NULL, NULL, NULL, NULL, ''),
(213, 18, 9, NULL, NULL, NULL, NULL, ''),
(214, 18, 10, NULL, NULL, NULL, NULL, ''),
(215, 18, 11, NULL, NULL, NULL, NULL, ''),
(216, 18, 12, NULL, NULL, NULL, NULL, ''),
(217, 19, 1, NULL, NULL, NULL, NULL, ''),
(218, 19, 2, NULL, NULL, NULL, NULL, ''),
(219, 19, 3, NULL, NULL, NULL, NULL, ''),
(220, 19, 4, NULL, NULL, NULL, NULL, ''),
(221, 19, 5, NULL, NULL, NULL, NULL, ''),
(222, 19, 6, NULL, NULL, NULL, NULL, ''),
(223, 19, 7, NULL, NULL, NULL, NULL, ''),
(224, 19, 8, NULL, NULL, NULL, NULL, ''),
(225, 19, 9, NULL, NULL, NULL, NULL, ''),
(226, 19, 10, NULL, NULL, NULL, NULL, ''),
(227, 19, 11, NULL, NULL, NULL, NULL, ''),
(228, 19, 12, NULL, NULL, NULL, NULL, ''),
(241, 21, 1, '140000', '0', '1', '2022-05-07 16:40:33', 'bendahara1'),
(242, 21, 2, '140000', '0', '1', '2022-05-07 16:40:39', 'bendahara1'),
(243, 21, 3, '140000', '0', '1', '2022-05-07 16:40:46', 'bendahara1'),
(244, 21, 4, NULL, NULL, NULL, NULL, ''),
(245, 21, 5, NULL, NULL, NULL, NULL, ''),
(246, 21, 6, NULL, NULL, NULL, NULL, ''),
(247, 21, 7, NULL, NULL, NULL, NULL, ''),
(248, 21, 8, NULL, NULL, NULL, NULL, ''),
(249, 21, 9, NULL, NULL, NULL, NULL, ''),
(250, 21, 10, NULL, NULL, NULL, NULL, ''),
(251, 21, 11, NULL, NULL, NULL, NULL, ''),
(252, 21, 12, NULL, NULL, NULL, NULL, ''),
(253, 22, 1, '140000', '0', '1', '2022-05-09 11:27:07', 'bendahara1'),
(254, 22, 2, '140000', '0', '1', '2022-05-23 23:25:56', 'admin'),
(255, 22, 3, '230000', '90000', '1', '2022-05-23 23:26:03', 'admin'),
(256, 22, 4, NULL, NULL, NULL, NULL, ''),
(257, 22, 5, NULL, NULL, NULL, NULL, ''),
(258, 22, 6, NULL, NULL, NULL, NULL, ''),
(259, 22, 7, NULL, NULL, NULL, NULL, ''),
(260, 22, 8, NULL, NULL, NULL, NULL, ''),
(261, 22, 9, NULL, NULL, NULL, NULL, ''),
(262, 22, 10, NULL, NULL, NULL, NULL, ''),
(263, 22, 11, NULL, NULL, NULL, NULL, ''),
(264, 22, 12, NULL, NULL, NULL, NULL, ''),
(1021, 23, 1, '0', '0', '1', '2022-05-24 02:58:02', 'admin'),
(1022, 23, 2, '140000', '0', '1', '2022-05-24 09:58:07', 'admin'),
(1023, 23, 3, '140000', '0', '1', '2022-05-24 09:58:11', 'admin'),
(1024, 23, 4, '140000', '0', '1', '2022-05-24 09:58:21', 'admin'),
(1025, 23, 5, NULL, NULL, NULL, NULL, ''),
(1026, 23, 6, NULL, NULL, NULL, NULL, ''),
(1027, 23, 7, NULL, NULL, NULL, NULL, ''),
(1028, 23, 8, NULL, NULL, NULL, NULL, ''),
(1029, 23, 9, NULL, NULL, NULL, NULL, ''),
(1030, 23, 10, NULL, NULL, NULL, NULL, ''),
(1031, 23, 11, NULL, NULL, NULL, NULL, ''),
(1032, 23, 12, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurnal_umum`
--

CREATE TABLE `tb_jurnal_umum` (
  `id_jurnal_umum` int(11) NOT NULL,
  `pemasukan` varchar(200) NOT NULL,
  `pengeluaran` varchar(200) NOT NULL,
  `tgl_jurnal` date NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `created_by` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jurnal_umum`
--

INSERT INTO `tb_jurnal_umum` (`id_jurnal_umum`, `pemasukan`, `pengeluaran`, `tgl_jurnal`, `keterangan`, `created_by`) VALUES
(1, '1100000', '', '2022-05-07', 'jariah pembangunan', 'admin'),
(2, '', '770000', '2022-05-07', 'Bayar Listrik', 'admin');

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
(1, '2022', '140000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

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
-- Indexes for table `tb_jurnal_umum`
--
ALTER TABLE `tb_jurnal_umum`
  ADD PRIMARY KEY (`id_jurnal_umum`);

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
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_bulan`
--
ALTER TABLE `tb_bulan`
  MODIFY `id_bulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_data_santri`
--
ALTER TABLE `tb_data_santri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_data_tagihan`
--
ALTER TABLE `tb_data_tagihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tb_data_transaksi`
--
ALTER TABLE `tb_data_transaksi`
  MODIFY `id_data_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1033;

--
-- AUTO_INCREMENT for table `tb_jurnal_umum`
--
ALTER TABLE `tb_jurnal_umum`
  MODIFY `id_jurnal_umum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_tahun`
--
ALTER TABLE `tb_tahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
