-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Jun 2021 pada 13.33
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kikogarage`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `kdGaleri` int(35) NOT NULL,
  `judulGaleri` varchar(35) NOT NULL,
  `tglGaleri` varchar(35) NOT NULL,
  `tglUpdateGaleri` varchar(35) NOT NULL,
  `gambar` text NOT NULL,
  `tipe` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`kdGaleri`, `judulGaleri`, `tglGaleri`, `tglUpdateGaleri`, `gambar`, `tipe`) VALUES
(1, 'Ultimate Paket Cars Wash', '2021-04-28 16:31:22', '', 'coating4.jpeg', '1'),
(2, 'testing12', '2021-04-28 20:56:00', '2021-06-20 17:40:31', '210428Wa8.mp4', '2'),
(3, 'testing1', '2021-04-29 12:23:26', '', 'Cuci_Mobil_Murah_Cuma_Rp_5000____FREE_Vacuum_Interior_1.jpg', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `kdHistory` int(35) NOT NULL,
  `kodeUnik` int(35) DEFAULT NULL,
  `kdOperator` int(35) DEFAULT NULL,
  `status` varchar(35) DEFAULT NULL,
  `createDate` varchar(35) DEFAULT NULL,
  `idAkun` int(35) DEFAULT NULL,
  `deskripsi` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`kdHistory`, `kodeUnik`, `kdOperator`, `status`, `createDate`, `idAkun`, `deskripsi`) VALUES
(15, 635, NULL, 'Antrian', '2021-05-01 19:42:19', 39, NULL),
(16, 635, 1, 'Pengerjaan', '2021-05-01 20:08:32', 39, NULL),
(17, 635, 1, 'Selesai', '2021-05-01 20:08:39', 39, NULL),
(18, 860, NULL, 'Antrian', '2021-05-01 20:17:54', 39, NULL),
(19, 860, 1, 'Penjemputan', '2021-05-01 20:22:45', 39, NULL),
(20, 860, 1, 'Pengerjaan', '2021-05-01 20:23:02', 39, NULL),
(21, 860, 1, 'Pengantaran', '2021-05-01 20:23:19', 39, NULL),
(22, 860, 1, 'Selesai', '2021-05-01 20:23:32', 39, NULL),
(23, 930, NULL, 'Antrian', '2021-05-01 21:15:54', 39, NULL),
(24, 930, 1, 'Pengerjaan', '2021-05-01 21:32:47', 39, NULL),
(25, 930, 1, 'Selesai', '2021-05-01 21:37:22', 39, NULL),
(26, 387, NULL, 'Antrian', '2021-05-01 21:37:51', 39, NULL),
(27, 387, 1, 'Penjemputan', '2021-05-01 21:37:57', 39, NULL),
(28, 387, 1, 'Pengerjaan', '2021-05-01 21:38:01', 39, NULL),
(29, 387, 1, 'Pengantaran', '2021-05-01 21:38:06', 39, NULL),
(30, 387, 1, 'Selesai', '2021-05-01 21:38:10', 39, NULL),
(31, 810, NULL, 'Antrian', '2021-05-01 22:26:28', 39, NULL),
(32, 674, NULL, 'Antrian', '2021-05-01 22:51:02', 39, NULL),
(33, 810, 1, 'Penjemputan', '2021-05-01 23:38:17', 39, NULL),
(34, 810, 1, 'Pengerjaan', '2021-05-01 23:38:20', 39, NULL),
(35, 810, 1, 'Pengantaran', '2021-05-01 23:38:22', 39, NULL),
(36, 810, 1, 'Selesai', '2021-05-01 23:38:27', 39, NULL),
(37, 457, NULL, 'Antrian', '2021-05-04 10:46:12', 39, NULL),
(38, 457, 1, 'Penjemputan', '2021-05-04 10:49:05', 39, NULL),
(39, 457, 1, 'Pengerjaan', '2021-05-04 10:49:46', 39, NULL),
(40, 457, 1, 'Pengantaran', '2021-05-04 10:50:20', 39, NULL),
(41, 457, 1, 'Selesai', '2021-05-04 10:50:24', 39, NULL),
(42, 169, NULL, 'Antrian', '2021-06-08 09:21:47', 37, NULL),
(43, 169, 1, 'Penjemputan', '2021-06-08 09:23:54', 37, NULL),
(44, 169, 1, 'Pengerjaan', '2021-06-08 09:26:10', 37, NULL),
(45, 169, 1, 'Pengantaran', '2021-06-08 09:26:23', 37, NULL),
(46, 169, 1, 'Selesai', '2021-06-08 09:26:32', 37, NULL),
(47, 375, NULL, 'Antrian', '2021-06-12 09:36:39', 39, NULL),
(48, 608, NULL, 'Antrian', '2021-06-17 22:24:54', 39, NULL),
(49, 274, NULL, 'Antrian', '2021-06-17 22:33:27', 39, NULL),
(50, 208, NULL, 'Antrian', '2021-06-17 22:44:50', 37, NULL),
(51, 73, NULL, 'Antrian', '2021-06-17 22:46:18', 37, NULL),
(52, 396, NULL, 'Antrian', '2021-06-17 23:02:58', 37, NULL),
(53, 819, NULL, 'Antrian', '2021-06-17 23:03:57', 37, NULL),
(54, 637, NULL, 'Antrian', '2021-06-17 23:06:03', 37, NULL),
(55, 412, NULL, 'Antrian', '2021-06-17 23:14:35', 37, NULL),
(56, 348, NULL, 'Antrian', '2021-06-17 23:14:51', 37, NULL),
(57, 958, NULL, 'Antrian', '2021-06-17 23:15:11', 37, NULL),
(58, 674, 1, 'Penjemputan', '2021-06-18 21:44:29', 39, NULL),
(59, 674, 1, 'Pengerjaan', '2021-06-18 21:44:32', 39, NULL),
(60, 674, 1, 'Pengantaran', '2021-06-18 21:44:35', 39, NULL),
(61, 674, 1, 'Selesai', '2021-06-18 23:34:28', 39, NULL),
(62, 981, NULL, 'Antrian', '2021-06-19 13:12:03', 39, NULL),
(63, 375, 1, 'Penjemputan', '2021-06-21 23:37:13', 39, NULL),
(64, 375, 1, 'Pengerjaan', '2021-06-21 23:37:16', 39, NULL),
(65, 375, 1, 'Pengantaran', '2021-06-21 23:37:19', 39, NULL),
(66, 375, 1, 'Selesai', '2021-06-21 23:37:37', 39, NULL),
(67, 412, 1, 'Penjemputan', '2021-06-22 15:15:32', 37, NULL),
(68, 412, 1, 'Pengerjaan', '2021-06-22 15:15:35', 37, NULL),
(69, 412, 1, 'Pengantaran', '2021-06-22 15:15:37', 37, NULL),
(70, 412, 1, 'Selesai', '2021-06-22 15:15:48', 37, NULL),
(71, 348, 1, 'Pengerjaan', '2021-06-22 15:15:53', 37, NULL),
(72, 348, 1, 'Selesai', '2021-06-22 15:16:00', 37, NULL),
(73, 958, 1, 'Pengerjaan', '2021-06-22 15:16:03', 37, NULL),
(74, 958, 1, 'Selesai', '2021-06-22 15:16:08', 37, NULL),
(75, 981, 1, 'Pengerjaan', '2021-06-22 15:16:19', 39, NULL),
(76, 981, 1, 'Selesai', '2021-06-22 15:16:24', 39, NULL),
(77, 836, NULL, 'Antrian', '2021-06-22 15:30:13', 39, NULL),
(78, 708, NULL, 'Antrian', '2021-06-22 15:40:38', 39, NULL),
(79, 374, NULL, 'Antrian', '2021-06-22 23:19:16', 39, NULL),
(80, 245, NULL, 'Antrian', '2021-06-22 23:36:02', 39, NULL),
(81, 356, NULL, 'Antrian', '2021-06-22 23:37:18', 39, NULL),
(82, 460, NULL, 'Antrian', '2021-06-22 23:46:08', 39, NULL),
(83, 567, NULL, 'Antrian', '2021-06-23 11:50:30', 37, NULL),
(84, 97, NULL, 'Antrian', '2021-06-23 11:52:48', 40, NULL),
(85, 756, NULL, 'Antrian', '2021-06-23 11:58:12', 40, NULL),
(86, 825, NULL, 'Antrian', '2021-06-23 11:58:55', 37, NULL),
(87, 367, NULL, 'Antrian', '2021-06-23 12:00:06', 37, NULL),
(88, 271, NULL, 'Antrian', '2021-06-23 12:20:52', 39, NULL),
(89, 824, NULL, 'Antrian', '2021-06-25 16:38:37', 39, NULL),
(90, 824, 5, 'Pengerjaan', '2021-06-25 16:58:18', 39, NULL),
(91, 824, 5, 'Selesai', '2021-06-25 16:58:27', 39, NULL),
(92, 576, NULL, 'Antrian', '2021-06-25 17:25:33', 39, NULL),
(93, 72, NULL, 'Antrian', '2021-06-25 17:26:42', 37, NULL),
(94, 485, NULL, 'Antrian', '2021-06-25 19:47:36', 39, NULL),
(95, 708, NULL, 'Antrian', '2021-06-25 19:56:40', 39, NULL),
(96, 87, NULL, 'Antrian', '2021-06-25 19:57:57', 37, NULL),
(97, 751, NULL, 'Antrian', '2021-06-25 19:58:32', 37, NULL),
(98, 405, NULL, 'Antrian', '2021-06-26 07:37:17', 40, NULL),
(99, 405, 5, 'Penjemputan', '2021-06-26 13:23:05', 40, NULL),
(100, 405, 5, 'Pengerjaan', '2021-06-26 13:23:23', 40, NULL),
(101, 405, 5, 'Pengerjaan', '2021-06-26 13:23:23', 40, NULL),
(102, 405, 5, 'Pengantaran', '2021-06-26 13:23:54', 40, NULL),
(103, 405, 5, 'Selesai', '2021-06-26 15:59:30', 40, NULL),
(104, 708, 5, 'Pengerjaan', '2021-06-26 16:00:37', 39, NULL),
(105, 708, 5, 'Selesai', '2021-06-26 16:00:44', 39, NULL),
(106, 751, 5, 'Pengerjaan', '2021-06-26 16:01:32', 37, NULL),
(107, 751, 5, 'Selesai', '2021-06-26 16:02:45', 37, NULL),
(108, 437, NULL, 'Antrian', '2021-06-26 16:05:45', 39, NULL),
(109, 734, NULL, 'Antrian', '2021-06-26 16:06:02', 39, NULL),
(110, 719, NULL, 'Antrian', '2021-06-26 16:11:32', 39, NULL),
(111, 167, NULL, 'Antrian', '2021-06-26 16:16:33', 39, NULL),
(112, 167, 5, 'Pengerjaan', '2021-06-26 16:16:52', 39, NULL),
(113, 14, NULL, 'Antrian', '2021-06-26 16:24:27', 39, NULL),
(114, 14, 5, 'Pengerjaan', '2021-06-26 16:37:31', 39, NULL),
(115, 14, 5, 'Selesai', '2021-06-26 16:39:51', 39, NULL),
(116, 298, NULL, 'Antrian', '2021-06-26 21:23:55', 39, NULL),
(117, 298, 5, 'Pengerjaan', '2021-06-26 21:24:18', 39, NULL),
(118, 298, 5, 'Selesai', '2021-06-26 21:24:21', 39, NULL),
(119, 298, 5, 'Selesai', '2021-06-26 21:26:15', 39, NULL),
(120, 298, 5, 'Selesai', '2021-06-26 21:27:49', 39, NULL),
(121, 210, NULL, 'Antrian', '2021-06-26 21:29:16', 39, NULL),
(122, 210, 5, 'Penjemputan', '2021-06-26 21:29:26', 39, NULL),
(123, 210, 5, 'Pengerjaan', '2021-06-26 21:29:35', 39, NULL),
(124, 210, 5, 'Pengantaran', '2021-06-26 21:29:38', 39, NULL),
(125, 210, 5, 'Selesai', '2021-06-26 21:29:41', 39, NULL),
(126, 803, NULL, 'Antrian', '2021-06-26 23:35:35', 39, NULL),
(127, 420, NULL, 'Antrian', '2021-06-27 13:14:33', 39, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `kdKeranjang` int(50) NOT NULL,
  `idAkun` int(50) NOT NULL,
  `kdProduk` int(50) NOT NULL,
  `namaProduk` varchar(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `jml_produk` int(50) NOT NULL,
  `berat` float DEFAULT NULL,
  `subtotal` int(50) DEFAULT NULL,
  `totalBayar` int(200) DEFAULT NULL,
  `gambar` text NOT NULL,
  `kurir` varchar(200) DEFAULT NULL,
  `biayaKirim` varchar(200) DEFAULT NULL,
  `kdPembayaran` varchar(200) DEFAULT NULL,
  `kodeUnik` varchar(200) DEFAULT NULL,
  `noPlat` varchar(35) DEFAULT NULL,
  `jenisBooking` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`kdKeranjang`, `idAkun`, `kdProduk`, `namaProduk`, `harga`, `jml_produk`, `berat`, `subtotal`, `totalBayar`, `gambar`, `kurir`, `biayaKirim`, `kdPembayaran`, `kodeUnik`, `noPlat`, `jenisBooking`) VALUES
(10, 37, 24, 'paket reguler cars wash', 450000, 1, NULL, 450000, NULL, 'gambar321.jpg', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumen`
--

CREATE TABLE `konsumen` (
  `idAkun` int(35) NOT NULL,
  `namaLengkap` varchar(35) NOT NULL,
  `username` varchar(35) DEFAULT NULL,
  `password` varchar(35) NOT NULL,
  `noTelepon` varchar(35) NOT NULL,
  `email` varchar(35) DEFAULT NULL,
  `alamatLengkap` varchar(150) NOT NULL,
  `provinsi` varchar(35) DEFAULT NULL,
  `tglLahir` varchar(35) NOT NULL,
  `kota_kabupaten` varchar(35) DEFAULT NULL,
  `kodePos` int(35) DEFAULT NULL,
  `kelurahan` varchar(35) DEFAULT NULL,
  `kecamatan` varchar(35) DEFAULT NULL,
  `foto` text NOT NULL,
  `poin` int(35) DEFAULT NULL,
  `member` varchar(35) DEFAULT NULL,
  `kdOperator` int(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsumen`
--

INSERT INTO `konsumen` (`idAkun`, `namaLengkap`, `username`, `password`, `noTelepon`, `email`, `alamatLengkap`, `provinsi`, `tglLahir`, `kota_kabupaten`, `kodePos`, `kelurahan`, `kecamatan`, `foto`, `poin`, `member`, `kdOperator`) VALUES
(37, 'farhan sutrisno', 'farhansutrisno', 'farhan', '081298374183', 'farhansutrisno98@gmail.com', 'kp. jujuluk rt/rw 002/004', 'Banten', '2018-10-31', 'lebak', 42316, 'Cijoropasir', 'Rangkasbitung', 'ktpfarhan_optimized.jpg', 5, 'Yes', NULL),
(39, 'Farhan Sutrisno', '', 'jujuluk123', '081298374183', '', 'Kp. Jujuluk Rt/Rw 002/004 Kel. Cijoropasir Kec.  Rangkasbitung Kab. Lebak Prov. Banten', '', '1998-01-30', '', 0, '', '', 'foto_terbaru_500kb.JPG', 17, 'Yes', NULL),
(40, 'Farhan Isut', NULL, 'testing', '081298374183', NULL, 'Kp. Jujuluk Rt/Rw 002/004 Kel. Cijoropasir Kec.  Rangkasbitung Kab. Lebak Prov. Banten', NULL, '1998-01-30', NULL, NULL, NULL, NULL, 'Foto_Farhan_Sutrisno_BG_Merah_200kb.jpg', 1, 'Yes', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE `operator` (
  `kdOperator` int(35) NOT NULL,
  `namaLengkap` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `tglLahir` varchar(35) DEFAULT NULL,
  `jenisKelamin` varchar(35) DEFAULT NULL,
  `email` varchar(35) NOT NULL,
  `noTelepon` varchar(35) NOT NULL,
  `kelurahan` varchar(25) DEFAULT NULL,
  `kecamatan` varchar(35) DEFAULT NULL,
  `kota_kab` varchar(35) DEFAULT NULL,
  `provinsi` varchar(35) DEFAULT NULL,
  `alamatLengkap` varchar(100) DEFAULT NULL,
  `kodePos` int(35) DEFAULT NULL,
  `foto` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`kdOperator`, `namaLengkap`, `username`, `password`, `tglLahir`, `jenisKelamin`, `email`, `noTelepon`, `kelurahan`, `kecamatan`, `kota_kab`, `provinsi`, `alamatLengkap`, `kodePos`, `foto`, `status`) VALUES
(1, 'Farhan Sutrisno', 'farhan', 'farhan', '1998-01-30', 'Laki-Laki', 'farhansutrisno98@gmail.com', '081298374183', 'cijoropasir', 'rangkasbitung', 'Rangkasbitung - Lebak', 'Banten', 'kampung jujuluk rt/rw', 42316, 'Trend_model_rambut_pria_ala_K-Pop_Korea_terbaru71.jpg', '2'),
(4, 'dhea dwijayanti', 'dheadwijayanti123', '12345', '2021-03-11', 'Perempuan', 'dheadwijayanti@gmail.com', '081298374183', 'pasir sukarayat', 'rangkasbitung', 'lebak', 'Banten', 'kp. pasir sukarayat', 42316, 'Foto_Farhan_Sutrisno7.jpg', '1'),
(5, 'Dafa Firdaus', 'dafa', '12345', '', '', 'dafa@gmail.com', '081298374183', '', '', '', '', '', 0, 'p-396-ted5271-eye.jpg', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `kdPembelian` int(35) NOT NULL,
  `idAkun` int(35) NOT NULL,
  `kurir` varchar(150) DEFAULT NULL,
  `biayaKirim` int(25) DEFAULT NULL,
  `totalBayar` int(35) NOT NULL,
  `kdProduk` int(35) NOT NULL,
  `berat` float DEFAULT NULL,
  `jml_produk` int(200) NOT NULL,
  `subtotal` int(200) NOT NULL,
  `kdPembayaran` varchar(200) DEFAULT NULL,
  `tglTransaksi` varchar(35) NOT NULL,
  `tglPembayaran` varchar(35) NOT NULL,
  `noResi` varchar(35) DEFAULT NULL,
  `statusPembayaran` varchar(35) NOT NULL,
  `kodeUnik` int(35) NOT NULL,
  `strukPembayaran` varchar(35) DEFAULT NULL,
  `catatan` text,
  `kdOperator` int(35) NOT NULL,
  `noPlat` varchar(35) NOT NULL,
  `noAntrian` varchar(35) NOT NULL,
  `jenisBooking` varchar(35) NOT NULL,
  `KdTukang` int(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`kdPembelian`, `idAkun`, `kurir`, `biayaKirim`, `totalBayar`, `kdProduk`, `berat`, `jml_produk`, `subtotal`, `kdPembayaran`, `tglTransaksi`, `tglPembayaran`, `noResi`, `statusPembayaran`, `kodeUnik`, `strukPembayaran`, `catatan`, `kdOperator`, `noPlat`, `noAntrian`, `jenisBooking`, `KdTukang`) VALUES
(13, 39, NULL, NULL, 1000000, 27, NULL, 1, 500000, NULL, '2021-05-02', '10:00', NULL, 'Selesai', 635, NULL, '', 0, 'A 1234 RR', 'LGSG-1', 'Langsung', 1),
(14, 39, NULL, NULL, 1000000, 24, NULL, 1, 500000, NULL, '2021-05-02', '10:00', NULL, 'Selesai', 635, NULL, '', 0, 'A 1234 RR', 'LGSG-1', 'Langsung', 1),
(15, 39, NULL, NULL, 1000000, 25, NULL, 1, 500000, NULL, '2021-05-02', '11:00', NULL, 'Selesai', 860, NULL, '', 0, 'A 1234 RR', 'JEMPUT-1', 'Antar Jemput', 1),
(16, 39, NULL, NULL, 1000000, 26, NULL, 1, 500000, NULL, '2021-05-02', '11:00', NULL, 'Selesai', 860, NULL, '', 0, 'A 1234 RR', 'JEMPUT-1', 'Antar Jemput', 1),
(17, 39, NULL, NULL, 500000, 24, NULL, 1, 500000, NULL, '2021-05-02', '12:00', NULL, 'Selesai', 930, NULL, '', 0, 'B 12345 BB', 'LGSG-2', 'Langsung', 1),
(18, 39, NULL, NULL, 500000, 24, NULL, 1, 500000, NULL, '2021-05-02', '13:00', NULL, 'Selesai', 387, NULL, '', 0, 'A 1234 RR', 'JEMPUT-2', 'Antar Jemput', 1),
(19, 39, NULL, NULL, 500000, 26, NULL, 1, 500000, NULL, '2021-05-02', '14:00', NULL, 'Selesai', 810, NULL, '', 0, 'A 1234 RR', 'JEMPUT-3', 'Antar Jemput', 1),
(20, 39, NULL, NULL, 500000, 24, NULL, 1, 500000, NULL, '2021-05-02', '16:00', NULL, 'Selesai', 674, NULL, 'reservasi sudah selesai dan sudah lunas', 0, 'B 23412 NB', 'JEMPUT-4', 'Antar Jemput', 1),
(21, 39, NULL, NULL, 1000000, 24, NULL, 1, 500000, NULL, '2021-05-04', '10:00', NULL, 'Selesai', 457, NULL, '', 0, 'A 1234 RR', 'JEMPUT-1', 'Antar Jemput', 1),
(22, 39, NULL, NULL, 1000000, 26, NULL, 1, 500000, NULL, '2021-05-04', '10:00', NULL, 'Selesai', 457, NULL, '', 0, 'A 1234 RR', 'JEMPUT-1', 'Antar Jemput', 1),
(23, 37, NULL, NULL, 1000000, 24, NULL, 1, 500000, NULL, '2021-06-08', '10:00', NULL, 'Selesai', 169, NULL, '', 0, 'A 1234 RR', 'JEMPUT-1', 'Antar Jemput', 1),
(24, 37, NULL, NULL, 1000000, 26, NULL, 1, 500000, NULL, '2021-06-08', '10:00', NULL, 'Selesai', 169, NULL, '', 0, 'A 1234 RR', 'JEMPUT-1', 'Antar Jemput', 1),
(25, 39, NULL, NULL, 500000, 27, NULL, 1, 500000, NULL, '2021-06-12', '10:00', NULL, 'Selesai', 375, NULL, 'sudah selesai dan lunas yah', 0, 'A 1234 RR', 'JEMPUT-1', 'Antar Jemput', 1),
(34, 37, NULL, NULL, 500000, 24, NULL, 1, 500000, NULL, '2021-06-17', '14:30', NULL, 'Selesai', 412, NULL, 'selesai', 0, 'A 1234 RR', 'JEMPUT-1', 'Antar Jemput', 1),
(35, 37, NULL, NULL, 500000, 27, NULL, 1, 500000, NULL, '2021-06-17', '15:00', NULL, 'Selesai', 348, NULL, 'selesia', 0, 'B 12345 BB', 'LGSG-1', 'Langsung', 1),
(36, 37, NULL, NULL, 500000, 24, NULL, 1, 500000, NULL, '2021-06-17', '17:00', NULL, 'Selesai', 958, NULL, 'selesai', 0, 'B 12345 BB', 'LGSG-2', 'Langsung', 1),
(37, 39, NULL, NULL, 500000, 24, NULL, 1, 500000, NULL, '2021-06-19', '10:00', NULL, 'Selesai', 981, NULL, 'selesai', 0, 'A 1234 RR', 'LGSG-1', 'Langsung', 1),
(38, 39, NULL, NULL, 650000, 25, NULL, 1, 650000, NULL, '2021-06-27', '13:00', NULL, 'Antrian', 420, NULL, NULL, 0, 'N 412 TO', 'LGSG-1', 'Langsung', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanmasuk`
--

CREATE TABLE `pesanmasuk` (
  `kdPesanMasuk` int(35) NOT NULL,
  `namaLengkap` varchar(35) NOT NULL,
  `noTelepon` varchar(25) NOT NULL,
  `judulPesan` varchar(35) DEFAULT NULL,
  `isiPesan` text NOT NULL,
  `tglPesan` varchar(35) NOT NULL,
  `idAkun` int(35) DEFAULT NULL,
  `jamPesan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanmasuk`
--

INSERT INTO `pesanmasuk` (`kdPesanMasuk`, `namaLengkap`, `noTelepon`, `judulPesan`, `isiPesan`, `tglPesan`, `idAkun`, `jamPesan`) VALUES
(6, 'farhan sutrisno', '081298374183', NULL, 'sfsafsf', '2021-04-03', NULL, ''),
(7, 'farhan sutrisno', '081298374183', NULL, 'sdsfsdf', '2021-04-03', NULL, ''),
(8, 'farhan sutrisno', '081298374183', NULL, 'wsdsfds', '2021-04-03', NULL, ''),
(9, 'farhan sutrisno', '081298374183', NULL, 'testing', '2021-06-21', NULL, '22:00:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `kdProduk` int(35) NOT NULL,
  `namaSuplier` varchar(35) DEFAULT NULL,
  `namaProduk` varchar(35) NOT NULL,
  `berat` float DEFAULT NULL,
  `hargaPenjualan` int(35) NOT NULL,
  `hargaPokokPembelian` int(35) DEFAULT NULL,
  `stok` int(35) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `tglPembelian` varchar(35) DEFAULT NULL,
  `expired` varchar(35) DEFAULT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  `gambar2` varchar(200) DEFAULT NULL,
  `gambar3` varchar(200) DEFAULT NULL,
  `kdOperator` int(35) DEFAULT NULL,
  `gambar_pendukung` text,
  `catatan_pendukung` text,
  `point` int(35) DEFAULT NULL,
  `createDate` varchar(35) NOT NULL,
  `updateDate` varchar(35) DEFAULT NULL,
  `paket` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`kdProduk`, `namaSuplier`, `namaProduk`, `berat`, `hargaPenjualan`, `hargaPokokPembelian`, `stok`, `deskripsi`, `kategori`, `tglPembelian`, `expired`, `gambar`, `gambar2`, `gambar3`, `kdOperator`, `gambar_pendukung`, `catatan_pendukung`, `point`, `createDate`, `updateDate`, `paket`) VALUES
(24, NULL, 'paket reguler cars wash', NULL, 450000, NULL, NULL, 'paket yang sangat bagus', 'CarWash', NULL, NULL, 'gambar321.jpg', NULL, NULL, 1, NULL, NULL, NULL, '2021-04-22', '2021-06-21', 'Reguler'),
(25, NULL, 'paket platinum coating', NULL, 650000, NULL, NULL, 'paket coating yang sangat bagus', 'Coating', NULL, NULL, 'honda_washover1.jpg', NULL, NULL, 1, NULL, NULL, NULL, '2021-04-22', '2021-06-21', 'Gold'),
(26, NULL, 'paket premium interior', NULL, 550000, NULL, NULL, 'paket yang sangat bagus untuk mobil', 'Interior', NULL, NULL, 'coating3.jpeg', NULL, NULL, 1, NULL, NULL, NULL, '2021-04-22', '2021-06-21', 'Interior'),
(27, NULL, 'paket premium eksterior', NULL, 350000, NULL, NULL, 'paket yang sangat bagus untuk mobil', 'Eksterior', NULL, NULL, 'coating32.jpg', NULL, NULL, 1, NULL, NULL, NULL, '2021-04-22', '2021-06-21', 'Eksterior'),
(28, NULL, 'interior mewah', NULL, 500000, NULL, NULL, 'interior mewah yang bagus', 'Interior', NULL, NULL, 'coating22.jpeg', NULL, NULL, 1, NULL, NULL, NULL, '2021-06-21', '2021-06-21', 'Interior'),
(29, NULL, 'Premium Carwash', NULL, 200000, NULL, NULL, 'premium car wash yang sangat bersih dan detail', 'CarWash', NULL, NULL, 'gambar33.jpg', NULL, NULL, 1, NULL, NULL, NULL, '2021-06-21', '2021-06-21', 'Premium'),
(30, NULL, 'Bronze Coating', NULL, 250000, NULL, NULL, 'Bronze coating yang sangat murah namun berkualitas baik', 'Coating', NULL, NULL, 'coating33.jpg', NULL, NULL, 1, NULL, NULL, NULL, '2021-06-21', '2021-06-21', 'Bronze'),
(31, NULL, 'Diamon Coating', NULL, 400000, NULL, NULL, 'Diamond Coating yang sangat berkualitas dan detail dalam pengerjaan nya', 'Coating', NULL, NULL, 'coating5.jpeg', NULL, NULL, 1, NULL, NULL, NULL, '2021-06-21', '2021-06-21', 'Diamond');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tukang`
--

CREATE TABLE `tukang` (
  `KdTukang` int(50) NOT NULL,
  `nama_lengkap` varchar(35) NOT NULL,
  `jenisKelamin` varchar(35) NOT NULL,
  `noTelepon` varchar(20) NOT NULL,
  `status` int(20) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tukang`
--

INSERT INTO `tukang` (`KdTukang`, `nama_lengkap`, `jenisKelamin`, `noTelepon`, `status`, `foto`) VALUES
(1, 'farhan', 'Laki-Laki', '08129999999', 2, 'Foto_Farhan_Sutrisno8.jpg'),
(6, 'Dafa Firdaus', 'Laki-Laki', '081298374183', 2, 'team-img-43.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`kdGaleri`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`kdHistory`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`kdKeranjang`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`idAkun`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`kdOperator`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`kdPembelian`);

--
-- Indexes for table `pesanmasuk`
--
ALTER TABLE `pesanmasuk`
  ADD PRIMARY KEY (`kdPesanMasuk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kdProduk`);

--
-- Indexes for table `tukang`
--
ALTER TABLE `tukang`
  ADD PRIMARY KEY (`KdTukang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `kdGaleri` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `kdHistory` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `kdKeranjang` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `idAkun` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `kdOperator` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `kdPembelian` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `pesanmasuk`
--
ALTER TABLE `pesanmasuk`
  MODIFY `kdPesanMasuk` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `kdProduk` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tukang`
--
ALTER TABLE `tukang`
  MODIFY `KdTukang` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
