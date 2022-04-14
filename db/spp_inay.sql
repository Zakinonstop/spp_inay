-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Apr 2022 pada 06.10
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

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
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `email`) VALUES
(4, 'zaki', 'zaki123', 'zakinonstop1@gmail.com'),
(7, 'admin123', 'admin123', 'admin1@gmail.com'),
(8, 'admin1', 'admin123', 'admin1@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bulan`
--

CREATE TABLE `tb_bulan` (
  `id_bulan` int(11) NOT NULL,
  `nama_bulan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_bulan`
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
-- Struktur dari tabel `tb_data_santri`
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
-- Dumping data untuk tabel `tb_data_santri`
--

INSERT INTO `tb_data_santri` (`id`, `nama`, `nis`, `tgl_lahir`, `alamat`, `jenis_kelamin`, `id_kamar`, `id_kelas`, `no_hp`, `password`, `tgl_masuk`, `status`, `foto`) VALUES
(79, 'zaki', '22.01.0001 ', NULL, 'magelang', 'L', 1, 1, '08921233214234', '62016', '0000-00-00', '1', ''),
(80, 'Muhammad Zakiyuddin', '22.01.0002 ', '2001-03-06', '', 'L', 1, 1, '6285777458649', '10860', '0000-00-00', '1', ''),
(81, 'M Abdul Khakim', '22.01.0003 ', NULL, '', 'L', 1, 1, '087767676669', '15867', '0000-00-00', '1', ''),
(82, 'alip', '22.01.0004 ', NULL, '', 'L', 1, 1, '08921233214234', '11459', '2022-02-15', '1', ''),
(83, 'namanya panjang banget sampai nggak muat', '22.01.0005 ', NULL, '', 'L', 1, 1, '08921233214234', '11862', '0000-00-00', '1', 'messi2.jpeg'),
(84, 'risky fadhilah ramadhan', '22.01.0006 ', NULL, '', 'L', 1, 1, '08921233214230', '19825', '0000-00-00', '1', ''),
(85, 'risky', '22.01.0007 ', NULL, '', 'L', 1, 1, '08921233214234', '16998', '0000-00-00', '1', ''),
(86, 'Habib novel bin alaydrus', '22.01.0008 ', NULL, '', 'L', 1, 1, '08921233214234', '42555', '0000-00-00', '1', ''),
(87, 'Habib Husein ja\'far al haddad', '22.01.0009 ', NULL, '', 'L', 1, 1, '08921233214230', '77228', '0000-00-00', '1', ''),
(88, 'wildan aly haidar arvissalam muhammad', '22.01.0010 ', NULL, '', 'L', 1, 1, '08921233214230', '96543', '0000-00-00', '1', ''),
(89, '2021', '22.01.0011 ', '0000-00-00', '', 'L', 1, 1, '08921233214230', '15383', '2022-02-17', '1', ''),
(90, 'sujiwo tedjo', '22.01.0012 ', NULL, '', 'L', 1, 1, '085777458649', '19673', '0000-00-00', '1', ''),
(91, 'KH Bahaudin Nur salim', '22.01.0013 ', NULL, '', 'L', 1, 1, '08921233214230', '13477', '0000-00-00', '1', ''),
(92, 'Buya Arrazy Hasyim', '22.01.0014 ', NULL, '', 'L', 1, 1, '087767676669', '92026', '0000-00-00', '1', ''),
(93, 'Syeikh Ali al Jumah', '22.01.0015 ', NULL, '', 'L', 1, 1, '6285777458649', '60697', '0000-00-00', '1', ''),
(94, 'Nafi', '22.01.0016 ', NULL, '', 'L', 5, 4, '08921233214234', '29462', '0000-00-00', '1', 'Screenshot_(2).png'),
(95, 'hakim', '22.01.0017 ', NULL, '', 'L', 1, 1, '085747054494', '15492', '0000-00-00', '1', 'Screenshot_(8)1.png'),
(96, 'NNa', '22.01.0018 ', '2022-04-08', 'll', 'L', 2, 1, '081326404159', '30836', '2022-03-22', '1', ''),
(98, 'Pandu', '22.01.0019 ', '2022-03-14', 'Kragilan RT 04 RW 03, Progowati', 'L', 3, 2, '089506453865', '69089', '2022-03-27', '1', ''),
(99, 'zaos', '22.01.0020 ', '2022-04-08', 'Kragilan RT 04 RW 03, Progowati', 'L', 6, 3, '089506453865', '17894', '2022-04-04', '4', ''),
(100, 'nn', '22.02.0021 ', '2022-04-14', 'Kragilan RT 04 RW 03, Progowati', 'P', 1, 2, '089506453865', '18548', '2022-04-08', '3', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_tagihan`
--

CREATE TABLE `tb_data_tagihan` (
  `id` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `nominal` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_data_tagihan`
--

INSERT INTO `tb_data_tagihan` (`id`, `id_tahun`, `id_bulan`, `nominal`) VALUES
(277, 22, 1, '200000'),
(278, 22, 2, '200000'),
(279, 22, 3, '200000'),
(280, 22, 4, '200000'),
(281, 22, 5, '200000'),
(282, 22, 6, '200000'),
(283, 22, 7, '200000'),
(284, 22, 8, '200000'),
(285, 22, 9, '200000'),
(286, 22, 10, '200000'),
(287, 22, 11, '200000'),
(288, 22, 12, '200000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_transaksi`
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
-- Dumping data untuk tabel `tb_data_transaksi`
--

INSERT INTO `tb_data_transaksi` (`id_data_transaksi`, `id_data_santri`, `id_data_tagihan`, `jumlah_bayar`, `sisa`, `keterangan`, `tanggal_bayar`, `created_by`) VALUES
(3289, 79, 277, NULL, NULL, NULL, NULL, ''),
(3290, 79, 278, NULL, NULL, NULL, NULL, ''),
(3291, 79, 279, NULL, NULL, NULL, NULL, ''),
(3292, 79, 280, NULL, NULL, NULL, NULL, ''),
(3293, 79, 281, NULL, NULL, NULL, NULL, ''),
(3294, 79, 282, NULL, NULL, NULL, NULL, ''),
(3295, 79, 283, NULL, NULL, NULL, NULL, ''),
(3296, 79, 284, NULL, NULL, NULL, NULL, ''),
(3297, 79, 285, NULL, NULL, NULL, NULL, ''),
(3298, 79, 286, NULL, NULL, NULL, NULL, ''),
(3299, 79, 287, NULL, NULL, NULL, NULL, ''),
(3300, 79, 288, NULL, NULL, NULL, NULL, ''),
(3301, 80, 277, NULL, NULL, NULL, NULL, ''),
(3302, 80, 278, NULL, NULL, NULL, NULL, ''),
(3303, 80, 279, NULL, NULL, NULL, NULL, ''),
(3304, 80, 280, NULL, NULL, NULL, NULL, ''),
(3305, 80, 281, NULL, NULL, NULL, NULL, ''),
(3306, 80, 282, NULL, NULL, NULL, NULL, ''),
(3307, 80, 283, NULL, NULL, NULL, NULL, ''),
(3308, 80, 284, NULL, NULL, NULL, NULL, ''),
(3309, 80, 285, NULL, NULL, NULL, NULL, ''),
(3310, 80, 286, NULL, NULL, NULL, NULL, ''),
(3311, 80, 287, NULL, NULL, NULL, NULL, ''),
(3312, 80, 288, NULL, NULL, NULL, NULL, ''),
(3313, 81, 277, NULL, NULL, NULL, NULL, ''),
(3314, 81, 278, NULL, NULL, NULL, NULL, ''),
(3315, 81, 279, NULL, NULL, NULL, NULL, ''),
(3316, 81, 280, NULL, NULL, NULL, NULL, ''),
(3317, 81, 281, NULL, NULL, NULL, NULL, ''),
(3318, 81, 282, NULL, NULL, NULL, NULL, ''),
(3319, 81, 283, NULL, NULL, NULL, NULL, ''),
(3320, 81, 284, NULL, NULL, NULL, NULL, ''),
(3321, 81, 285, NULL, NULL, NULL, NULL, ''),
(3322, 81, 286, NULL, NULL, NULL, NULL, ''),
(3323, 81, 287, NULL, NULL, NULL, NULL, ''),
(3324, 81, 288, NULL, NULL, NULL, NULL, ''),
(3325, 82, 277, '200000', '0', '1', '2022-04-10 09:19:05', 'admin1'),
(3326, 82, 278, NULL, NULL, NULL, NULL, ''),
(3327, 82, 279, NULL, NULL, NULL, NULL, ''),
(3328, 82, 280, NULL, NULL, NULL, NULL, ''),
(3329, 82, 281, NULL, NULL, NULL, NULL, ''),
(3330, 82, 282, NULL, NULL, NULL, NULL, ''),
(3331, 82, 283, NULL, NULL, NULL, NULL, ''),
(3332, 82, 284, NULL, NULL, NULL, NULL, ''),
(3333, 82, 285, NULL, NULL, NULL, NULL, ''),
(3334, 82, 286, NULL, NULL, NULL, NULL, ''),
(3335, 82, 287, NULL, NULL, NULL, NULL, ''),
(3336, 82, 288, NULL, NULL, NULL, NULL, ''),
(3337, 83, 277, '200000', '0', '1', '2022-03-21 11:47:37', 'admin1'),
(3338, 83, 278, NULL, NULL, NULL, NULL, ''),
(3339, 83, 279, NULL, NULL, NULL, NULL, ''),
(3340, 83, 280, NULL, NULL, NULL, NULL, ''),
(3341, 83, 281, NULL, NULL, NULL, NULL, ''),
(3342, 83, 282, NULL, NULL, NULL, NULL, ''),
(3343, 83, 283, NULL, NULL, NULL, NULL, ''),
(3344, 83, 284, NULL, NULL, NULL, NULL, ''),
(3345, 83, 285, NULL, NULL, NULL, NULL, ''),
(3346, 83, 286, NULL, NULL, NULL, NULL, ''),
(3347, 83, 287, NULL, NULL, NULL, NULL, ''),
(3348, 83, 288, NULL, NULL, NULL, NULL, ''),
(3349, 84, 277, NULL, NULL, NULL, NULL, ''),
(3350, 84, 278, NULL, NULL, NULL, NULL, ''),
(3351, 84, 279, NULL, NULL, NULL, NULL, ''),
(3352, 84, 280, NULL, NULL, NULL, NULL, ''),
(3353, 84, 281, NULL, NULL, NULL, NULL, ''),
(3354, 84, 282, NULL, NULL, NULL, NULL, ''),
(3355, 84, 283, NULL, NULL, NULL, NULL, ''),
(3356, 84, 284, NULL, NULL, NULL, NULL, ''),
(3357, 84, 285, NULL, NULL, NULL, NULL, ''),
(3358, 84, 286, NULL, NULL, NULL, NULL, ''),
(3359, 84, 287, NULL, NULL, NULL, NULL, ''),
(3360, 84, 288, NULL, NULL, NULL, NULL, ''),
(3361, 85, 277, NULL, NULL, NULL, NULL, ''),
(3362, 85, 278, NULL, NULL, NULL, NULL, ''),
(3363, 85, 279, NULL, NULL, NULL, NULL, ''),
(3364, 85, 280, NULL, NULL, NULL, NULL, ''),
(3365, 85, 281, NULL, NULL, NULL, NULL, ''),
(3366, 85, 282, NULL, NULL, NULL, NULL, ''),
(3367, 85, 283, NULL, NULL, NULL, NULL, ''),
(3368, 85, 284, NULL, NULL, NULL, NULL, ''),
(3369, 85, 285, NULL, NULL, NULL, NULL, ''),
(3370, 85, 286, NULL, NULL, NULL, NULL, ''),
(3371, 85, 287, NULL, NULL, NULL, NULL, ''),
(3372, 85, 288, NULL, NULL, NULL, NULL, ''),
(3373, 86, 277, NULL, NULL, NULL, NULL, ''),
(3374, 86, 278, NULL, NULL, NULL, NULL, ''),
(3375, 86, 279, NULL, NULL, NULL, NULL, ''),
(3376, 86, 280, NULL, NULL, NULL, NULL, ''),
(3377, 86, 281, NULL, NULL, NULL, NULL, ''),
(3378, 86, 282, NULL, NULL, NULL, NULL, ''),
(3379, 86, 283, NULL, NULL, NULL, NULL, ''),
(3380, 86, 284, NULL, NULL, NULL, NULL, ''),
(3381, 86, 285, NULL, NULL, NULL, NULL, ''),
(3382, 86, 286, NULL, NULL, NULL, NULL, ''),
(3383, 86, 287, NULL, NULL, NULL, NULL, ''),
(3384, 86, 288, NULL, NULL, NULL, NULL, ''),
(3385, 87, 277, NULL, NULL, NULL, NULL, ''),
(3386, 87, 278, NULL, NULL, NULL, NULL, ''),
(3387, 87, 279, NULL, NULL, NULL, NULL, ''),
(3388, 87, 280, NULL, NULL, NULL, NULL, ''),
(3389, 87, 281, NULL, NULL, NULL, NULL, ''),
(3390, 87, 282, NULL, NULL, NULL, NULL, ''),
(3391, 87, 283, NULL, NULL, NULL, NULL, ''),
(3392, 87, 284, NULL, NULL, NULL, NULL, ''),
(3393, 87, 285, NULL, NULL, NULL, NULL, ''),
(3394, 87, 286, NULL, NULL, NULL, NULL, ''),
(3395, 87, 287, NULL, NULL, NULL, NULL, ''),
(3396, 87, 288, NULL, NULL, NULL, NULL, ''),
(3397, 88, 277, NULL, NULL, NULL, NULL, ''),
(3398, 88, 278, NULL, NULL, NULL, NULL, ''),
(3399, 88, 279, NULL, NULL, NULL, NULL, ''),
(3400, 88, 280, NULL, NULL, NULL, NULL, ''),
(3401, 88, 281, NULL, NULL, NULL, NULL, ''),
(3402, 88, 282, NULL, NULL, NULL, NULL, ''),
(3403, 88, 283, NULL, NULL, NULL, NULL, ''),
(3404, 88, 284, NULL, NULL, NULL, NULL, ''),
(3405, 88, 285, NULL, NULL, NULL, NULL, ''),
(3406, 88, 286, NULL, NULL, NULL, NULL, ''),
(3407, 88, 287, NULL, NULL, NULL, NULL, ''),
(3408, 88, 288, NULL, NULL, NULL, NULL, ''),
(3409, 89, 277, NULL, NULL, NULL, NULL, ''),
(3410, 89, 278, NULL, NULL, NULL, NULL, ''),
(3411, 89, 279, NULL, NULL, NULL, NULL, ''),
(3412, 89, 280, NULL, NULL, NULL, NULL, ''),
(3413, 89, 281, NULL, NULL, NULL, NULL, ''),
(3414, 89, 282, NULL, NULL, NULL, NULL, ''),
(3415, 89, 283, NULL, NULL, NULL, NULL, ''),
(3416, 89, 284, NULL, NULL, NULL, NULL, ''),
(3417, 89, 285, NULL, NULL, NULL, NULL, ''),
(3418, 89, 286, NULL, NULL, NULL, NULL, ''),
(3419, 89, 287, NULL, NULL, NULL, NULL, ''),
(3420, 89, 288, NULL, NULL, NULL, NULL, ''),
(3421, 90, 277, NULL, NULL, NULL, NULL, ''),
(3422, 90, 278, NULL, NULL, NULL, NULL, ''),
(3423, 90, 279, NULL, NULL, NULL, NULL, ''),
(3424, 90, 280, NULL, NULL, NULL, NULL, ''),
(3425, 90, 281, NULL, NULL, NULL, NULL, ''),
(3426, 90, 282, NULL, NULL, NULL, NULL, ''),
(3427, 90, 283, NULL, NULL, NULL, NULL, ''),
(3428, 90, 284, NULL, NULL, NULL, NULL, ''),
(3429, 90, 285, NULL, NULL, NULL, NULL, ''),
(3430, 90, 286, NULL, NULL, NULL, NULL, ''),
(3431, 90, 287, NULL, NULL, NULL, NULL, ''),
(3432, 90, 288, NULL, NULL, NULL, NULL, ''),
(3433, 91, 277, NULL, NULL, NULL, NULL, ''),
(3434, 91, 278, NULL, NULL, NULL, NULL, ''),
(3435, 91, 279, NULL, NULL, NULL, NULL, ''),
(3436, 91, 280, NULL, NULL, NULL, NULL, ''),
(3437, 91, 281, NULL, NULL, NULL, NULL, ''),
(3438, 91, 282, NULL, NULL, NULL, NULL, ''),
(3439, 91, 283, NULL, NULL, NULL, NULL, ''),
(3440, 91, 284, NULL, NULL, NULL, NULL, ''),
(3441, 91, 285, NULL, NULL, NULL, NULL, ''),
(3442, 91, 286, NULL, NULL, NULL, NULL, ''),
(3443, 91, 287, NULL, NULL, NULL, NULL, ''),
(3444, 91, 288, NULL, NULL, NULL, NULL, ''),
(3445, 92, 277, NULL, NULL, NULL, NULL, ''),
(3446, 92, 278, NULL, NULL, NULL, NULL, ''),
(3447, 92, 279, NULL, NULL, NULL, NULL, ''),
(3448, 92, 280, NULL, NULL, NULL, NULL, ''),
(3449, 92, 281, NULL, NULL, NULL, NULL, ''),
(3450, 92, 282, NULL, NULL, NULL, NULL, ''),
(3451, 92, 283, NULL, NULL, NULL, NULL, ''),
(3452, 92, 284, NULL, NULL, NULL, NULL, ''),
(3453, 92, 285, NULL, NULL, NULL, NULL, ''),
(3454, 92, 286, NULL, NULL, NULL, NULL, ''),
(3455, 92, 287, NULL, NULL, NULL, NULL, ''),
(3456, 92, 288, NULL, NULL, NULL, NULL, ''),
(3457, 93, 277, NULL, NULL, NULL, NULL, ''),
(3458, 93, 278, NULL, NULL, NULL, NULL, ''),
(3459, 93, 279, NULL, NULL, NULL, NULL, ''),
(3460, 93, 280, NULL, NULL, NULL, NULL, ''),
(3461, 93, 281, NULL, NULL, NULL, NULL, ''),
(3462, 93, 282, NULL, NULL, NULL, NULL, ''),
(3463, 93, 283, NULL, NULL, NULL, NULL, ''),
(3464, 93, 284, NULL, NULL, NULL, NULL, ''),
(3465, 93, 285, NULL, NULL, NULL, NULL, ''),
(3466, 93, 286, NULL, NULL, NULL, NULL, ''),
(3467, 93, 287, NULL, NULL, NULL, NULL, ''),
(3468, 93, 288, NULL, NULL, NULL, NULL, ''),
(3469, 94, 277, NULL, NULL, NULL, NULL, ''),
(3470, 94, 278, NULL, NULL, NULL, NULL, ''),
(3471, 94, 279, NULL, NULL, NULL, NULL, ''),
(3472, 94, 280, NULL, NULL, NULL, NULL, ''),
(3473, 94, 281, NULL, NULL, NULL, NULL, ''),
(3474, 94, 282, NULL, NULL, NULL, NULL, ''),
(3475, 94, 283, NULL, NULL, NULL, NULL, ''),
(3476, 94, 284, NULL, NULL, NULL, NULL, ''),
(3477, 94, 285, NULL, NULL, NULL, NULL, ''),
(3478, 94, 286, NULL, NULL, NULL, NULL, ''),
(3479, 94, 287, NULL, NULL, NULL, NULL, ''),
(3480, 94, 288, NULL, NULL, NULL, NULL, ''),
(3481, 95, 277, NULL, NULL, NULL, NULL, ''),
(3482, 95, 278, NULL, NULL, NULL, NULL, ''),
(3483, 95, 279, NULL, NULL, NULL, NULL, ''),
(3484, 95, 280, NULL, NULL, NULL, NULL, ''),
(3485, 95, 281, NULL, NULL, NULL, NULL, ''),
(3486, 95, 282, NULL, NULL, NULL, NULL, ''),
(3487, 95, 283, NULL, NULL, NULL, NULL, ''),
(3488, 95, 284, NULL, NULL, NULL, NULL, ''),
(3489, 95, 285, NULL, NULL, NULL, NULL, ''),
(3490, 95, 286, NULL, NULL, NULL, NULL, ''),
(3491, 95, 287, NULL, NULL, NULL, NULL, ''),
(3492, 95, 288, NULL, NULL, NULL, NULL, ''),
(3493, 96, 277, NULL, NULL, NULL, NULL, ''),
(3494, 96, 278, NULL, NULL, NULL, NULL, ''),
(3495, 96, 279, NULL, NULL, NULL, NULL, ''),
(3496, 96, 280, NULL, NULL, NULL, NULL, ''),
(3497, 96, 281, NULL, NULL, NULL, NULL, ''),
(3498, 96, 282, NULL, NULL, NULL, NULL, ''),
(3499, 96, 283, NULL, NULL, NULL, NULL, ''),
(3500, 96, 284, NULL, NULL, NULL, NULL, ''),
(3501, 96, 285, NULL, NULL, NULL, NULL, ''),
(3502, 96, 286, NULL, NULL, NULL, NULL, ''),
(3503, 96, 287, NULL, NULL, NULL, NULL, ''),
(3504, 96, 288, NULL, NULL, NULL, NULL, ''),
(3505, 98, 277, NULL, NULL, NULL, NULL, ''),
(3506, 98, 278, NULL, NULL, NULL, NULL, ''),
(3507, 98, 279, NULL, NULL, NULL, NULL, ''),
(3508, 98, 280, NULL, NULL, NULL, NULL, ''),
(3509, 98, 281, NULL, NULL, NULL, NULL, ''),
(3510, 98, 282, NULL, NULL, NULL, NULL, ''),
(3511, 98, 283, NULL, NULL, NULL, NULL, ''),
(3512, 98, 284, NULL, NULL, NULL, NULL, ''),
(3513, 98, 285, NULL, NULL, NULL, NULL, ''),
(3514, 98, 286, NULL, NULL, NULL, NULL, ''),
(3515, 98, 287, NULL, NULL, NULL, NULL, ''),
(3516, 98, 288, NULL, NULL, NULL, NULL, ''),
(3517, 99, 277, NULL, NULL, NULL, NULL, ''),
(3518, 99, 278, NULL, NULL, NULL, NULL, ''),
(3519, 99, 279, NULL, NULL, NULL, NULL, ''),
(3520, 99, 280, NULL, NULL, NULL, NULL, ''),
(3521, 99, 281, NULL, NULL, NULL, NULL, ''),
(3522, 99, 282, NULL, NULL, NULL, NULL, ''),
(3523, 99, 283, NULL, NULL, NULL, NULL, ''),
(3524, 99, 284, NULL, NULL, NULL, NULL, ''),
(3525, 99, 285, NULL, NULL, NULL, NULL, ''),
(3526, 99, 286, NULL, NULL, NULL, NULL, ''),
(3527, 99, 287, NULL, NULL, NULL, NULL, ''),
(3528, 99, 288, NULL, NULL, NULL, NULL, ''),
(3529, 100, 277, '200000', '0', '1', '2022-04-08 14:50:13', 'admin1'),
(3530, 100, 278, NULL, NULL, NULL, NULL, ''),
(3531, 100, 279, NULL, NULL, NULL, NULL, ''),
(3532, 100, 280, NULL, NULL, NULL, NULL, ''),
(3533, 100, 281, NULL, NULL, NULL, NULL, ''),
(3534, 100, 282, NULL, NULL, NULL, NULL, ''),
(3535, 100, 283, NULL, NULL, NULL, NULL, ''),
(3536, 100, 284, NULL, NULL, NULL, NULL, ''),
(3537, 100, 285, NULL, NULL, NULL, NULL, ''),
(3538, 100, 286, NULL, NULL, NULL, NULL, ''),
(3539, 100, 287, NULL, NULL, NULL, NULL, ''),
(3540, 100, 288, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurnal_umum`
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
-- Dumping data untuk tabel `tb_jurnal_umum`
--

INSERT INTO `tb_jurnal_umum` (`id_jurnal_umum`, `pemasukan`, `pengeluaran`, `tgl_jurnal`, `keterangan`, `created_by`) VALUES
(51, '10000', '', '2022-02-15', 'jariah bendahara', 'admin1'),
(52, '12000000', '', '2022-02-23', 'saldo terakhir manual', 'admin1'),
(53, '', '200000', '2022-02-23', 'listrik', 'admin1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kamar`
--

CREATE TABLE `tb_kamar` (
  `id_kamar` int(11) NOT NULL,
  `nama_kamar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kamar`
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
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kelas`
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
-- Struktur dari tabel `tb_tahun`
--

CREATE TABLE `tb_tahun` (
  `id_tahun` int(11) NOT NULL,
  `nama_tahun` varchar(200) NOT NULL,
  `nominal_tagihan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tahun`
--

INSERT INTO `tb_tahun` (`id_tahun`, `nama_tahun`, `nominal_tagihan`) VALUES
(22, '2022', '200000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_bulan`
--
ALTER TABLE `tb_bulan`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indeks untuk tabel `tb_data_santri`
--
ALTER TABLE `tb_data_santri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_data_tagihan`
--
ALTER TABLE `tb_data_tagihan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tahun` (`id_tahun`);

--
-- Indeks untuk tabel `tb_data_transaksi`
--
ALTER TABLE `tb_data_transaksi`
  ADD PRIMARY KEY (`id_data_transaksi`),
  ADD KEY `id_data_tagihan` (`id_data_tagihan`),
  ADD KEY `id_data_santri` (`id_data_santri`),
  ADD KEY `id_data_tagihan_2` (`id_data_tagihan`);

--
-- Indeks untuk tabel `tb_jurnal_umum`
--
ALTER TABLE `tb_jurnal_umum`
  ADD PRIMARY KEY (`id_jurnal_umum`);

--
-- Indeks untuk tabel `tb_kamar`
--
ALTER TABLE `tb_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tb_tahun`
--
ALTER TABLE `tb_tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_bulan`
--
ALTER TABLE `tb_bulan`
  MODIFY `id_bulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_data_santri`
--
ALTER TABLE `tb_data_santri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `tb_data_tagihan`
--
ALTER TABLE `tb_data_tagihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=289;

--
-- AUTO_INCREMENT untuk tabel `tb_data_transaksi`
--
ALTER TABLE `tb_data_transaksi`
  MODIFY `id_data_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3541;

--
-- AUTO_INCREMENT untuk tabel `tb_jurnal_umum`
--
ALTER TABLE `tb_jurnal_umum`
  MODIFY `id_jurnal_umum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `tb_kamar`
--
ALTER TABLE `tb_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_tahun`
--
ALTER TABLE `tb_tahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_data_tagihan`
--
ALTER TABLE `tb_data_tagihan`
  ADD CONSTRAINT `tb_data_tagihan_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tb_tahun` (`id_tahun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_data_transaksi`
--
ALTER TABLE `tb_data_transaksi`
  ADD CONSTRAINT `tb_data_transaksi_ibfk_1` FOREIGN KEY (`id_data_tagihan`) REFERENCES `tb_data_tagihan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_data_transaksi_ibfk_2` FOREIGN KEY (`id_data_santri`) REFERENCES `tb_data_santri` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
