-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2022 at 07:26 AM
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
(1, 'admin1', 'admin123', 'admin@gmail.com'),
(4, 'zaki', 'zaki123', 'zakinonstop1@gmail.com'),
(6, 'admin1', 'admin123', 'admin1@gmail.com'),
(7, 'admin12', 'admin123', 'admin1@gmail.com');

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
  `alamat` varchar(200) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data_santri`
--

INSERT INTO `tb_data_santri` (`id`, `nama`, `nis`, `alamat`, `jenis_kelamin`, `id_kamar`, `id_kelas`, `no_hp`, `password`, `tgl_masuk`, `foto`) VALUES
(79, 'zaki', '22.01.0001 ', 'magelang', 'L', 1, 1, '08921233214234', '62016', '0000-00-00', ''),
(80, 'Muhammad Zakiyuddin', '22.01.0002 ', '', 'L', 1, 1, '6285777458649', '10860', '0000-00-00', ''),
(81, 'M Abdul Khakim', '22.01.0003 ', '', 'L', 1, 1, '087767676669', '15867', '0000-00-00', ''),
(82, 'alip', '22.01.0004 ', '', 'L', 1, 1, '08921233214234', '11459', '2022-02-15', ''),
(83, 'namanya panjang banget sampai nggak muat', '22.01.0005 ', '', 'L', 1, 1, '08921233214234', '11862', '0000-00-00', ''),
(84, 'risky fadhilah ramadhan', '22.01.0006 ', '', 'L', 1, 1, '08921233214230', '19825', '0000-00-00', ''),
(85, 'risky', '22.01.0007 ', '', 'L', 1, 1, '08921233214234', '16998', '0000-00-00', ''),
(86, 'Habib novel bin alaydrus', '22.01.0008 ', '', 'L', 1, 1, '08921233214234', '42555', '0000-00-00', ''),
(87, 'Habib Husein ja\'far al haddad', '22.01.0009 ', '', 'L', 1, 1, '08921233214230', '77228', '0000-00-00', ''),
(88, 'wildan aly haidar arvissalam muhammad', '22.01.0010 ', '', 'L', 1, 1, '08921233214230', '96543', '0000-00-00', ''),
(89, 'raka', '22.01.0011 ', '', 'L', 1, 1, '08921233214230', '15383', '0000-00-00', ''),
(90, 'sujiwo tedjo', '22.01.0012 ', '', 'L', 1, 1, '08921233214234', '19673', '0000-00-00', ''),
(91, 'KH Bahaudin Nur salim', '22.01.0013 ', '', 'L', 1, 1, '08921233214230', '13477', '0000-00-00', ''),
(92, 'Buya Arrazy Hasyim', '22.01.0014 ', '', 'L', 1, 1, '087767676669', '92026', '0000-00-00', ''),
(93, 'Syeikh Ali al Jumah', '22.01.0015 ', '', 'L', 1, 1, '6285777458649', '60697', '0000-00-00', '');

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
(253, 20, 1, '200000'),
(254, 20, 2, '200000'),
(255, 20, 3, '200000'),
(256, 20, 4, '200000'),
(257, 20, 5, '200000'),
(258, 20, 6, '200000'),
(259, 20, 7, '200000'),
(260, 20, 8, '200000'),
(261, 20, 9, '200000'),
(262, 20, 10, '200000'),
(263, 20, 11, '200000'),
(264, 20, 12, '200000'),
(265, 21, 1, '120000'),
(266, 21, 2, '120000'),
(267, 21, 3, '120000'),
(268, 21, 4, '120000'),
(269, 21, 5, '120000'),
(270, 21, 6, '120000'),
(271, 21, 7, '120000'),
(272, 21, 8, '120000'),
(273, 21, 9, '120000'),
(274, 21, 10, '120000'),
(275, 21, 11, '120000'),
(276, 21, 12, '120000');

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
(2881, 79, 253, '200000', '0', '1', '2022-02-14 16:41:25', 'admin1'),
(2882, 79, 254, '200000', '0', '1', '2022-02-14 16:41:29', 'admin1'),
(2883, 79, 255, NULL, NULL, NULL, NULL, ''),
(2884, 79, 256, NULL, NULL, NULL, NULL, ''),
(2885, 79, 257, NULL, NULL, NULL, NULL, ''),
(2886, 79, 258, NULL, NULL, NULL, NULL, ''),
(2887, 79, 259, NULL, NULL, NULL, NULL, ''),
(2888, 79, 260, NULL, NULL, NULL, NULL, ''),
(2889, 79, 261, NULL, NULL, NULL, NULL, ''),
(2890, 79, 262, NULL, NULL, NULL, NULL, ''),
(2891, 79, 263, NULL, NULL, NULL, NULL, ''),
(2892, 79, 264, NULL, NULL, NULL, NULL, ''),
(2893, 79, 265, '120000', '0', '1', '2022-02-14 16:42:53', 'admin1'),
(2894, 79, 266, '120000', '0', '1', '2022-02-14 16:43:35', 'admin1'),
(2895, 79, 267, '120000', '0', '1', '2022-02-14 16:43:44', 'admin1'),
(2896, 79, 268, '120000', '0', '1', '2022-02-14 16:45:50', 'admin1'),
(2897, 79, 269, NULL, NULL, NULL, NULL, ''),
(2898, 79, 270, NULL, NULL, NULL, NULL, ''),
(2899, 79, 271, NULL, NULL, NULL, NULL, ''),
(2900, 79, 272, NULL, NULL, NULL, NULL, ''),
(2901, 79, 273, NULL, NULL, NULL, NULL, ''),
(2902, 79, 274, NULL, NULL, NULL, NULL, ''),
(2903, 79, 275, NULL, NULL, NULL, NULL, ''),
(2904, 79, 276, NULL, NULL, NULL, NULL, ''),
(2905, 80, 253, '200000', '0', '1', '2022-02-14 22:32:14', 'admin1'),
(2906, 80, 254, '200000', '0', '1', '2022-02-14 22:32:17', 'admin1'),
(2907, 80, 255, '200000', '0', '1', '2022-02-14 22:32:19', 'admin1'),
(2908, 80, 256, '200000', '0', '1', '2022-02-14 22:32:22', 'admin1'),
(2909, 80, 257, '200000', '0', '1', '2022-02-14 22:32:25', 'admin1'),
(2910, 80, 258, '200000', '0', '1', '2022-02-14 22:32:28', 'admin1'),
(2911, 80, 259, '200000', '0', '1', '2022-02-14 22:32:30', 'admin1'),
(2912, 80, 260, '200000', '0', '1', '2022-02-14 22:32:33', 'admin1'),
(2913, 80, 261, '200000', '0', '1', '2022-02-14 22:32:36', 'admin1'),
(2914, 80, 262, '200000', '0', '1', '2022-02-14 22:32:39', 'admin1'),
(2915, 80, 263, '200000', '0', '1', '2022-02-14 22:32:42', 'admin1'),
(2916, 80, 264, '200000', '0', '1', '2022-02-14 22:32:45', 'admin1'),
(2917, 80, 265, NULL, NULL, NULL, NULL, ''),
(2918, 80, 266, NULL, NULL, NULL, NULL, ''),
(2919, 80, 267, NULL, NULL, NULL, NULL, ''),
(2920, 80, 268, NULL, NULL, NULL, NULL, ''),
(2921, 80, 269, NULL, NULL, NULL, NULL, ''),
(2922, 80, 270, NULL, NULL, NULL, NULL, ''),
(2923, 80, 271, NULL, NULL, NULL, NULL, ''),
(2924, 80, 272, NULL, NULL, NULL, NULL, ''),
(2925, 80, 273, NULL, NULL, NULL, NULL, ''),
(2926, 80, 274, NULL, NULL, NULL, NULL, ''),
(2927, 80, 275, NULL, NULL, NULL, NULL, ''),
(2928, 80, 276, NULL, NULL, NULL, NULL, ''),
(2929, 81, 253, '200000', '0', '1', '2022-02-14 22:41:05', 'admin1'),
(2930, 81, 254, '200000', '0', '1', '2022-02-14 22:41:08', 'admin1'),
(2931, 81, 255, '200000', '0', '1', '2022-02-14 22:41:11', 'admin1'),
(2932, 81, 256, '200000', '0', '1', '2022-02-14 22:41:14', 'admin1'),
(2933, 81, 257, '200000', '0', '1', '2022-02-14 22:41:17', 'admin1'),
(2934, 81, 258, '200000', '0', '1', '2022-02-14 22:41:20', 'admin1'),
(2935, 81, 259, '200000', '0', '1', '2022-02-14 22:41:23', 'admin1'),
(2936, 81, 260, '200000', '0', '1', '2022-02-14 22:41:27', 'admin1'),
(2937, 81, 261, NULL, NULL, NULL, NULL, ''),
(2938, 81, 262, NULL, NULL, NULL, NULL, ''),
(2939, 81, 263, NULL, NULL, NULL, NULL, ''),
(2940, 81, 264, NULL, NULL, NULL, NULL, ''),
(2941, 81, 265, NULL, NULL, NULL, NULL, ''),
(2942, 81, 266, NULL, NULL, NULL, NULL, ''),
(2943, 81, 267, NULL, NULL, NULL, NULL, ''),
(2944, 81, 268, NULL, NULL, NULL, NULL, ''),
(2945, 81, 269, NULL, NULL, NULL, NULL, ''),
(2946, 81, 270, NULL, NULL, NULL, NULL, ''),
(2947, 81, 271, NULL, NULL, NULL, NULL, ''),
(2948, 81, 272, NULL, NULL, NULL, NULL, ''),
(2949, 81, 273, NULL, NULL, NULL, NULL, ''),
(2950, 81, 274, NULL, NULL, NULL, NULL, ''),
(2951, 81, 275, NULL, NULL, NULL, NULL, ''),
(2952, 81, 276, NULL, NULL, NULL, NULL, ''),
(2953, 82, 253, NULL, NULL, NULL, NULL, ''),
(2954, 82, 254, NULL, NULL, NULL, NULL, ''),
(2955, 82, 255, NULL, NULL, NULL, NULL, ''),
(2956, 82, 256, NULL, NULL, NULL, NULL, ''),
(2957, 82, 257, NULL, NULL, NULL, NULL, ''),
(2958, 82, 258, NULL, NULL, NULL, NULL, ''),
(2959, 82, 259, NULL, NULL, NULL, NULL, ''),
(2960, 82, 260, NULL, NULL, NULL, NULL, ''),
(2961, 82, 261, NULL, NULL, NULL, NULL, ''),
(2962, 82, 262, NULL, NULL, NULL, NULL, ''),
(2963, 82, 263, NULL, NULL, NULL, NULL, ''),
(2964, 82, 264, NULL, NULL, NULL, NULL, ''),
(2965, 82, 265, NULL, NULL, NULL, NULL, ''),
(2966, 82, 266, NULL, NULL, NULL, NULL, ''),
(2967, 82, 267, NULL, NULL, NULL, NULL, ''),
(2968, 82, 268, NULL, NULL, NULL, NULL, ''),
(2969, 82, 269, NULL, NULL, NULL, NULL, ''),
(2970, 82, 270, NULL, NULL, NULL, NULL, ''),
(2971, 82, 271, NULL, NULL, NULL, NULL, ''),
(2972, 82, 272, NULL, NULL, NULL, NULL, ''),
(2973, 82, 273, NULL, NULL, NULL, NULL, ''),
(2974, 82, 274, NULL, NULL, NULL, NULL, ''),
(2975, 82, 275, NULL, NULL, NULL, NULL, ''),
(2976, 82, 276, NULL, NULL, NULL, NULL, ''),
(2977, 83, 253, NULL, NULL, NULL, NULL, ''),
(2978, 83, 254, NULL, NULL, NULL, NULL, ''),
(2979, 83, 255, NULL, NULL, NULL, NULL, ''),
(2980, 83, 256, NULL, NULL, NULL, NULL, ''),
(2981, 83, 257, NULL, NULL, NULL, NULL, ''),
(2982, 83, 258, NULL, NULL, NULL, NULL, ''),
(2983, 83, 259, NULL, NULL, NULL, NULL, ''),
(2984, 83, 260, NULL, NULL, NULL, NULL, ''),
(2985, 83, 261, NULL, NULL, NULL, NULL, ''),
(2986, 83, 262, NULL, NULL, NULL, NULL, ''),
(2987, 83, 263, NULL, NULL, NULL, NULL, ''),
(2988, 83, 264, NULL, NULL, NULL, NULL, ''),
(2989, 83, 265, NULL, NULL, NULL, NULL, ''),
(2990, 83, 266, NULL, NULL, NULL, NULL, ''),
(2991, 83, 267, NULL, NULL, NULL, NULL, ''),
(2992, 83, 268, NULL, NULL, NULL, NULL, ''),
(2993, 83, 269, NULL, NULL, NULL, NULL, ''),
(2994, 83, 270, NULL, NULL, NULL, NULL, ''),
(2995, 83, 271, NULL, NULL, NULL, NULL, ''),
(2996, 83, 272, NULL, NULL, NULL, NULL, ''),
(2997, 83, 273, NULL, NULL, NULL, NULL, ''),
(2998, 83, 274, NULL, NULL, NULL, NULL, ''),
(2999, 83, 275, NULL, NULL, NULL, NULL, ''),
(3000, 83, 276, NULL, NULL, NULL, NULL, ''),
(3001, 84, 253, '200000', '0', '1', '2022-02-16 13:16:21', 'admin1'),
(3002, 84, 254, '200000', '0', '1', '2022-02-16 13:16:26', 'admin1'),
(3003, 84, 255, NULL, NULL, NULL, NULL, ''),
(3004, 84, 256, NULL, NULL, NULL, NULL, ''),
(3005, 84, 257, NULL, NULL, NULL, NULL, ''),
(3006, 84, 258, NULL, NULL, NULL, NULL, ''),
(3007, 84, 259, NULL, NULL, NULL, NULL, ''),
(3008, 84, 260, NULL, NULL, NULL, NULL, ''),
(3009, 84, 261, NULL, NULL, NULL, NULL, ''),
(3010, 84, 262, NULL, NULL, NULL, NULL, ''),
(3011, 84, 263, NULL, NULL, NULL, NULL, ''),
(3012, 84, 264, NULL, NULL, NULL, NULL, ''),
(3013, 84, 265, NULL, NULL, NULL, NULL, ''),
(3014, 84, 266, NULL, NULL, NULL, NULL, ''),
(3015, 84, 267, NULL, NULL, NULL, NULL, ''),
(3016, 84, 268, NULL, NULL, NULL, NULL, ''),
(3017, 84, 269, NULL, NULL, NULL, NULL, ''),
(3018, 84, 270, NULL, NULL, NULL, NULL, ''),
(3019, 84, 271, NULL, NULL, NULL, NULL, ''),
(3020, 84, 272, NULL, NULL, NULL, NULL, ''),
(3021, 84, 273, NULL, NULL, NULL, NULL, ''),
(3022, 84, 274, NULL, NULL, NULL, NULL, ''),
(3023, 84, 275, NULL, NULL, NULL, NULL, ''),
(3024, 84, 276, NULL, NULL, NULL, NULL, ''),
(3025, 85, 253, NULL, NULL, NULL, NULL, ''),
(3026, 85, 254, NULL, NULL, NULL, NULL, ''),
(3027, 85, 255, NULL, NULL, NULL, NULL, ''),
(3028, 85, 256, NULL, NULL, NULL, NULL, ''),
(3029, 85, 257, NULL, NULL, NULL, NULL, ''),
(3030, 85, 258, NULL, NULL, NULL, NULL, ''),
(3031, 85, 259, NULL, NULL, NULL, NULL, ''),
(3032, 85, 260, NULL, NULL, NULL, NULL, ''),
(3033, 85, 261, NULL, NULL, NULL, NULL, ''),
(3034, 85, 262, NULL, NULL, NULL, NULL, ''),
(3035, 85, 263, NULL, NULL, NULL, NULL, ''),
(3036, 85, 264, NULL, NULL, NULL, NULL, ''),
(3037, 85, 265, NULL, NULL, NULL, NULL, ''),
(3038, 85, 266, NULL, NULL, NULL, NULL, ''),
(3039, 85, 267, NULL, NULL, NULL, NULL, ''),
(3040, 85, 268, NULL, NULL, NULL, NULL, ''),
(3041, 85, 269, NULL, NULL, NULL, NULL, ''),
(3042, 85, 270, NULL, NULL, NULL, NULL, ''),
(3043, 85, 271, NULL, NULL, NULL, NULL, ''),
(3044, 85, 272, NULL, NULL, NULL, NULL, ''),
(3045, 85, 273, NULL, NULL, NULL, NULL, ''),
(3046, 85, 274, NULL, NULL, NULL, NULL, ''),
(3047, 85, 275, NULL, NULL, NULL, NULL, ''),
(3048, 85, 276, NULL, NULL, NULL, NULL, ''),
(3049, 86, 253, NULL, NULL, NULL, NULL, ''),
(3050, 86, 254, NULL, NULL, NULL, NULL, ''),
(3051, 86, 255, NULL, NULL, NULL, NULL, ''),
(3052, 86, 256, NULL, NULL, NULL, NULL, ''),
(3053, 86, 257, NULL, NULL, NULL, NULL, ''),
(3054, 86, 258, NULL, NULL, NULL, NULL, ''),
(3055, 86, 259, NULL, NULL, NULL, NULL, ''),
(3056, 86, 260, NULL, NULL, NULL, NULL, ''),
(3057, 86, 261, NULL, NULL, NULL, NULL, ''),
(3058, 86, 262, NULL, NULL, NULL, NULL, ''),
(3059, 86, 263, NULL, NULL, NULL, NULL, ''),
(3060, 86, 264, NULL, NULL, NULL, NULL, ''),
(3061, 86, 265, NULL, NULL, NULL, NULL, ''),
(3062, 86, 266, NULL, NULL, NULL, NULL, ''),
(3063, 86, 267, NULL, NULL, NULL, NULL, ''),
(3064, 86, 268, NULL, NULL, NULL, NULL, ''),
(3065, 86, 269, NULL, NULL, NULL, NULL, ''),
(3066, 86, 270, NULL, NULL, NULL, NULL, ''),
(3067, 86, 271, NULL, NULL, NULL, NULL, ''),
(3068, 86, 272, NULL, NULL, NULL, NULL, ''),
(3069, 86, 273, NULL, NULL, NULL, NULL, ''),
(3070, 86, 274, NULL, NULL, NULL, NULL, ''),
(3071, 86, 275, NULL, NULL, NULL, NULL, ''),
(3072, 86, 276, NULL, NULL, NULL, NULL, ''),
(3073, 87, 253, NULL, NULL, NULL, NULL, ''),
(3074, 87, 254, NULL, NULL, NULL, NULL, ''),
(3075, 87, 255, NULL, NULL, NULL, NULL, ''),
(3076, 87, 256, NULL, NULL, NULL, NULL, ''),
(3077, 87, 257, NULL, NULL, NULL, NULL, ''),
(3078, 87, 258, NULL, NULL, NULL, NULL, ''),
(3079, 87, 259, NULL, NULL, NULL, NULL, ''),
(3080, 87, 260, NULL, NULL, NULL, NULL, ''),
(3081, 87, 261, NULL, NULL, NULL, NULL, ''),
(3082, 87, 262, NULL, NULL, NULL, NULL, ''),
(3083, 87, 263, NULL, NULL, NULL, NULL, ''),
(3084, 87, 264, NULL, NULL, NULL, NULL, ''),
(3085, 87, 265, NULL, NULL, NULL, NULL, ''),
(3086, 87, 266, NULL, NULL, NULL, NULL, ''),
(3087, 87, 267, NULL, NULL, NULL, NULL, ''),
(3088, 87, 268, NULL, NULL, NULL, NULL, ''),
(3089, 87, 269, NULL, NULL, NULL, NULL, ''),
(3090, 87, 270, NULL, NULL, NULL, NULL, ''),
(3091, 87, 271, NULL, NULL, NULL, NULL, ''),
(3092, 87, 272, NULL, NULL, NULL, NULL, ''),
(3093, 87, 273, NULL, NULL, NULL, NULL, ''),
(3094, 87, 274, NULL, NULL, NULL, NULL, ''),
(3095, 87, 275, NULL, NULL, NULL, NULL, ''),
(3096, 87, 276, NULL, NULL, NULL, NULL, ''),
(3097, 88, 253, '200000', '0', '1', '2022-02-15 11:45:36', 'admin1'),
(3098, 88, 254, NULL, NULL, NULL, NULL, ''),
(3099, 88, 255, NULL, NULL, NULL, NULL, ''),
(3100, 88, 256, NULL, NULL, NULL, NULL, ''),
(3101, 88, 257, NULL, NULL, NULL, NULL, ''),
(3102, 88, 258, NULL, NULL, NULL, NULL, ''),
(3103, 88, 259, NULL, NULL, NULL, NULL, ''),
(3104, 88, 260, NULL, NULL, NULL, NULL, ''),
(3105, 88, 261, NULL, NULL, NULL, NULL, ''),
(3106, 88, 262, NULL, NULL, NULL, NULL, ''),
(3107, 88, 263, NULL, NULL, NULL, NULL, ''),
(3108, 88, 264, NULL, NULL, NULL, NULL, ''),
(3109, 88, 265, NULL, NULL, NULL, NULL, ''),
(3110, 88, 266, NULL, NULL, NULL, NULL, ''),
(3111, 88, 267, NULL, NULL, NULL, NULL, ''),
(3112, 88, 268, NULL, NULL, NULL, NULL, ''),
(3113, 88, 269, NULL, NULL, NULL, NULL, ''),
(3114, 88, 270, NULL, NULL, NULL, NULL, ''),
(3115, 88, 271, NULL, NULL, NULL, NULL, ''),
(3116, 88, 272, NULL, NULL, NULL, NULL, ''),
(3117, 88, 273, NULL, NULL, NULL, NULL, ''),
(3118, 88, 274, NULL, NULL, NULL, NULL, ''),
(3119, 88, 275, NULL, NULL, NULL, NULL, ''),
(3120, 88, 276, NULL, NULL, NULL, NULL, ''),
(3121, 89, 253, NULL, NULL, NULL, NULL, ''),
(3122, 89, 254, NULL, NULL, NULL, NULL, ''),
(3123, 89, 255, NULL, NULL, NULL, NULL, ''),
(3124, 89, 256, NULL, NULL, NULL, NULL, ''),
(3125, 89, 257, NULL, NULL, NULL, NULL, ''),
(3126, 89, 258, NULL, NULL, NULL, NULL, ''),
(3127, 89, 259, NULL, NULL, NULL, NULL, ''),
(3128, 89, 260, NULL, NULL, NULL, NULL, ''),
(3129, 89, 261, NULL, NULL, NULL, NULL, ''),
(3130, 89, 262, NULL, NULL, NULL, NULL, ''),
(3131, 89, 263, NULL, NULL, NULL, NULL, ''),
(3132, 89, 264, NULL, NULL, NULL, NULL, ''),
(3133, 89, 265, NULL, NULL, NULL, NULL, ''),
(3134, 89, 266, NULL, NULL, NULL, NULL, ''),
(3135, 89, 267, NULL, NULL, NULL, NULL, ''),
(3136, 89, 268, NULL, NULL, NULL, NULL, ''),
(3137, 89, 269, NULL, NULL, NULL, NULL, ''),
(3138, 89, 270, NULL, NULL, NULL, NULL, ''),
(3139, 89, 271, NULL, NULL, NULL, NULL, ''),
(3140, 89, 272, NULL, NULL, NULL, NULL, ''),
(3141, 89, 273, NULL, NULL, NULL, NULL, ''),
(3142, 89, 274, NULL, NULL, NULL, NULL, ''),
(3143, 89, 275, NULL, NULL, NULL, NULL, ''),
(3144, 89, 276, NULL, NULL, NULL, NULL, ''),
(3145, 90, 253, '200000', '0', '1', '2022-02-16 13:15:42', 'admin1'),
(3146, 90, 254, '200000', '0', '1', '2022-02-16 13:15:50', 'admin1'),
(3147, 90, 255, '200000', '0', '1', '2022-02-16 13:22:00', 'admin1'),
(3148, 90, 256, NULL, NULL, NULL, NULL, ''),
(3149, 90, 257, NULL, NULL, NULL, NULL, ''),
(3150, 90, 258, NULL, NULL, NULL, NULL, ''),
(3151, 90, 259, NULL, NULL, NULL, NULL, ''),
(3152, 90, 260, NULL, NULL, NULL, NULL, ''),
(3153, 90, 261, NULL, NULL, NULL, NULL, ''),
(3154, 90, 262, NULL, NULL, NULL, NULL, ''),
(3155, 90, 263, NULL, NULL, NULL, NULL, ''),
(3156, 90, 264, NULL, NULL, NULL, NULL, ''),
(3157, 90, 265, NULL, NULL, NULL, NULL, ''),
(3158, 90, 266, NULL, NULL, NULL, NULL, ''),
(3159, 90, 267, NULL, NULL, NULL, NULL, ''),
(3160, 90, 268, NULL, NULL, NULL, NULL, ''),
(3161, 90, 269, NULL, NULL, NULL, NULL, ''),
(3162, 90, 270, NULL, NULL, NULL, NULL, ''),
(3163, 90, 271, NULL, NULL, NULL, NULL, ''),
(3164, 90, 272, NULL, NULL, NULL, NULL, ''),
(3165, 90, 273, NULL, NULL, NULL, NULL, ''),
(3166, 90, 274, NULL, NULL, NULL, NULL, ''),
(3167, 90, 275, NULL, NULL, NULL, NULL, ''),
(3168, 90, 276, NULL, NULL, NULL, NULL, ''),
(3169, 91, 253, NULL, NULL, NULL, NULL, ''),
(3170, 91, 254, NULL, NULL, NULL, NULL, ''),
(3171, 91, 255, NULL, NULL, NULL, NULL, ''),
(3172, 91, 256, NULL, NULL, NULL, NULL, ''),
(3173, 91, 257, NULL, NULL, NULL, NULL, ''),
(3174, 91, 258, NULL, NULL, NULL, NULL, ''),
(3175, 91, 259, NULL, NULL, NULL, NULL, ''),
(3176, 91, 260, NULL, NULL, NULL, NULL, ''),
(3177, 91, 261, NULL, NULL, NULL, NULL, ''),
(3178, 91, 262, NULL, NULL, NULL, NULL, ''),
(3179, 91, 263, NULL, NULL, NULL, NULL, ''),
(3180, 91, 264, NULL, NULL, NULL, NULL, ''),
(3181, 91, 265, NULL, NULL, NULL, NULL, ''),
(3182, 91, 266, NULL, NULL, NULL, NULL, ''),
(3183, 91, 267, NULL, NULL, NULL, NULL, ''),
(3184, 91, 268, NULL, NULL, NULL, NULL, ''),
(3185, 91, 269, NULL, NULL, NULL, NULL, ''),
(3186, 91, 270, NULL, NULL, NULL, NULL, ''),
(3187, 91, 271, NULL, NULL, NULL, NULL, ''),
(3188, 91, 272, NULL, NULL, NULL, NULL, ''),
(3189, 91, 273, NULL, NULL, NULL, NULL, ''),
(3190, 91, 274, NULL, NULL, NULL, NULL, ''),
(3191, 91, 275, NULL, NULL, NULL, NULL, ''),
(3192, 91, 276, NULL, NULL, NULL, NULL, ''),
(3193, 92, 253, NULL, NULL, NULL, NULL, ''),
(3194, 92, 254, NULL, NULL, NULL, NULL, ''),
(3195, 92, 255, NULL, NULL, NULL, NULL, ''),
(3196, 92, 256, NULL, NULL, NULL, NULL, ''),
(3197, 92, 257, NULL, NULL, NULL, NULL, ''),
(3198, 92, 258, NULL, NULL, NULL, NULL, ''),
(3199, 92, 259, NULL, NULL, NULL, NULL, ''),
(3200, 92, 260, NULL, NULL, NULL, NULL, ''),
(3201, 92, 261, NULL, NULL, NULL, NULL, ''),
(3202, 92, 262, NULL, NULL, NULL, NULL, ''),
(3203, 92, 263, NULL, NULL, NULL, NULL, ''),
(3204, 92, 264, NULL, NULL, NULL, NULL, ''),
(3205, 92, 265, NULL, NULL, NULL, NULL, ''),
(3206, 92, 266, NULL, NULL, NULL, NULL, ''),
(3207, 92, 267, NULL, NULL, NULL, NULL, ''),
(3208, 92, 268, NULL, NULL, NULL, NULL, ''),
(3209, 92, 269, NULL, NULL, NULL, NULL, ''),
(3210, 92, 270, NULL, NULL, NULL, NULL, ''),
(3211, 92, 271, NULL, NULL, NULL, NULL, ''),
(3212, 92, 272, NULL, NULL, NULL, NULL, ''),
(3213, 92, 273, NULL, NULL, NULL, NULL, ''),
(3214, 92, 274, NULL, NULL, NULL, NULL, ''),
(3215, 92, 275, NULL, NULL, NULL, NULL, ''),
(3216, 92, 276, NULL, NULL, NULL, NULL, ''),
(3217, 93, 253, NULL, NULL, NULL, NULL, ''),
(3218, 93, 254, NULL, NULL, NULL, NULL, ''),
(3219, 93, 255, NULL, NULL, NULL, NULL, ''),
(3220, 93, 256, NULL, NULL, NULL, NULL, ''),
(3221, 93, 257, NULL, NULL, NULL, NULL, ''),
(3222, 93, 258, NULL, NULL, NULL, NULL, ''),
(3223, 93, 259, NULL, NULL, NULL, NULL, ''),
(3224, 93, 260, NULL, NULL, NULL, NULL, ''),
(3225, 93, 261, NULL, NULL, NULL, NULL, ''),
(3226, 93, 262, NULL, NULL, NULL, NULL, ''),
(3227, 93, 263, NULL, NULL, NULL, NULL, ''),
(3228, 93, 264, NULL, NULL, NULL, NULL, ''),
(3229, 93, 265, NULL, NULL, NULL, NULL, ''),
(3230, 93, 266, NULL, NULL, NULL, NULL, ''),
(3231, 93, 267, NULL, NULL, NULL, NULL, ''),
(3232, 93, 268, NULL, NULL, NULL, NULL, ''),
(3233, 93, 269, NULL, NULL, NULL, NULL, ''),
(3234, 93, 270, NULL, NULL, NULL, NULL, ''),
(3235, 93, 271, NULL, NULL, NULL, NULL, ''),
(3236, 93, 272, NULL, NULL, NULL, NULL, ''),
(3237, 93, 273, NULL, NULL, NULL, NULL, ''),
(3238, 93, 274, NULL, NULL, NULL, NULL, ''),
(3239, 93, 275, NULL, NULL, NULL, NULL, ''),
(3240, 93, 276, NULL, NULL, NULL, NULL, '');

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
(50, '', '100000', '2022-02-14', 'beli buku', 'admin1'),
(51, '10000', '', '2022-02-15', 'jariah bendahara', 'admin1');

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
(20, '2022', '200000'),
(21, '2023', '120000');

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_bulan`
--
ALTER TABLE `tb_bulan`
  MODIFY `id_bulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_data_santri`
--
ALTER TABLE `tb_data_santri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `tb_data_tagihan`
--
ALTER TABLE `tb_data_tagihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=277;

--
-- AUTO_INCREMENT for table `tb_data_transaksi`
--
ALTER TABLE `tb_data_transaksi`
  MODIFY `id_data_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3241;

--
-- AUTO_INCREMENT for table `tb_jurnal_umum`
--
ALTER TABLE `tb_jurnal_umum`
  MODIFY `id_jurnal_umum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

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
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
