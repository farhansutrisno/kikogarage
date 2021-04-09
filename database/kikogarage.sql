-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Apr 2021 pada 16.42
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
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `KdAbout` int(50) NOT NULL,
  `judul` varchar(35) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `kdArtikel` int(50) NOT NULL,
  `judulArtikel` varchar(50) NOT NULL,
  `isiArtikel` text NOT NULL,
  `tglArtikel` varchar(50) NOT NULL,
  `tglUpdateArtikel` varchar(50) DEFAULT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`kdArtikel`, `judulArtikel`, `isiArtikel`, `tglArtikel`, `tglUpdateArtikel`, `gambar`) VALUES
(2, 'Diskon gebyar ramadhan', 'promo yang sangat menarik untuk di pakai sehingga lebih hemat dalam mengeluarkan biaya tetapi mobil kalian akan tetap bersih dengan menggunaka promo ini', '2021-03-10', '2021-03-18 00:25:47', 'honda_washover.jpg'),
(3, 'Vourcher Besar-besar', 'vourcher yang sangat besar untuk di pakai sehingga lebih hemat dalam mengeluarkan biaya tetapi mobil kalian akan tetap bersih dengan menggunaka promo ini', '2021-03-18 00:19:28', NULL, 'Cuci_Mobil_Murah_Cuma_Rp_5000____FREE_Vacuum_Interior_.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `kdGaleri` int(35) NOT NULL,
  `judulGaleri` varchar(35) NOT NULL,
  `tglGaleri` varchar(35) NOT NULL,
  `tglUpdateGaleri` varchar(35) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`kdGaleri`, `judulGaleri`, `tglGaleri`, `tglUpdateGaleri`, `gambar`) VALUES
(2, 'Ultimate Paket Cars Wash', '2021-03-17 17:03:47', '', 'gambar3.jpg'),
(3, 'Reguler Paket Cars Wash', '2021-03-17 17:42:23', '', 'gambar2.jpg');

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
(1, 762, NULL, 'Waiting List', '2021-04-07', 39, NULL),
(3, 762, NULL, 'Pencucian', '2021-04-07 23:04:09', 39, NULL),
(4, 762, NULL, 'Pengeringan', '2021-04-07 23:05:14', 39, NULL),
(5, 762, NULL, 'Selesai', '2021-04-07 23:07:01', 39, NULL),
(6, 947, NULL, 'Waiting List', '2021-04-07 23:22:37', 39, NULL),
(7, 426, NULL, 'Waiting List', '2021-04-08 00:34:53', 39, NULL),
(8, 426, NULL, 'Pencucian', '2021-04-08 00:38:08', 39, NULL),
(9, 426, NULL, 'Pengeringan', '2021-04-08 00:40:40', 39, NULL),
(10, 426, NULL, 'Selesai', '2021-04-08 00:41:30', 39, NULL),
(11, 347, NULL, 'Waiting List', '2021-04-08 01:07:52', 39, NULL),
(12, 347, NULL, 'Pencucian', '2021-04-08 13:06:24', 39, NULL),
(13, 347, NULL, 'Pengeringan', '2021-04-08 13:06:28', 39, NULL),
(14, 347, NULL, 'Selesai', '2021-04-08 13:06:31', 39, NULL),
(15, 426, NULL, 'Selesai', '2021-04-08 13:11:43', 39, NULL),
(16, 347, NULL, 'Selesai', '2021-04-08 13:14:47', 39, NULL),
(17, 347, NULL, 'Selesai', '2021-04-08 13:16:39', 39, NULL),
(18, 347, 1, 'Selesai', '2021-04-08 13:19:00', 39, NULL),
(19, 347, 1, 'Selesai', '2021-04-08 13:22:27', 39, NULL),
(20, 947, 1, 'Pencucian', '2021-04-08 13:26:58', 39, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `kdKeranjang` int(50) NOT NULL,
  `idAkun` int(50) NOT NULL,
  `kdProduk` int(50) NOT NULL,
  `namaProduk` varchar(50) DEFAULT NULL,
  `harga` int(50) DEFAULT NULL,
  `jml_produk` int(50) NOT NULL,
  `berat` float DEFAULT NULL,
  `subtotal` int(50) NOT NULL,
  `totalBayar` int(200) NOT NULL,
  `gambar` text,
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
(14, 37, 19, 'paket reguler cars wash', 100000, 1, NULL, 100000, 0, 'gambar1.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 37, 20, 'paket platinum coating', 200000, 1, NULL, 200000, 0, 'coating.jpeg', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 39, 21, 'paket platinum cars wash', 100000, 1, NULL, 100000, 0, 'gambar32.jpg', NULL, NULL, NULL, NULL, NULL, NULL);

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
  `tglLahir` varchar(35) DEFAULT NULL,
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
(37, 'farhan sutrisno', 'farhansutrisno', 'farhan', '081298374183', 'farhansutrisno98@gmail.com', 'kp. jujuluk rt/rw 002/004', 'Banten', '2018-10-31', 'lebak', 42316, 'Cijoropasir', 'Rangkasbitung', 'ktpfarhan_optimized.jpg', NULL, 'Yes', NULL),
(38, 'dafa firdaus', 'dafa', '123', '081298374183', 'dafafirdaus@gmail.com', 'jujuluk', 'Aceh', '2018-11-02', 'lebak', 42316, 'cijoropasir', 'Rangkasbitung', 'Trend_model_rambut_pria_ala_K-Pop_Korea_terbaru6.jpg', NULL, 'Yes', NULL),
(39, 'Farhan Sutrisno', '', 'jujuluk123', '081298374183', '', 'Kp. Jujuluk Rt/Rw 002 Kel. Cijoropasir Kec.  Rangkasbitung Kab. Lebak Prov. Banten', '', '1998-01-30', '', 0, '', '', 'ktp_farhan1.jpg', 1, 'Yes', NULL),
(40, 'Farhan Isut', NULL, 'testing', '081298374183', NULL, 'Kp. Jujuluk Rt/Rw 002/004 Kel. Cijoropasir Kec.  Rangkasbitung Kab. Lebak Prov. Banten', NULL, '1998-01-30', NULL, NULL, NULL, NULL, 'Foto_Farhan_Sutrisno_BG_Merah_200kb.jpg', NULL, 'Yes', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE `operator` (
  `kdOperator` int(35) NOT NULL,
  `namaLengkap` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `tglLahir` varchar(35) NOT NULL,
  `jenisKelamin` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `noTelepon` varchar(35) NOT NULL,
  `kelurahan` varchar(25) NOT NULL,
  `kecamatan` varchar(35) NOT NULL,
  `kota_kab` varchar(35) NOT NULL,
  `provinsi` varchar(35) NOT NULL,
  `alamatLengkap` varchar(100) NOT NULL,
  `kodePos` int(35) NOT NULL,
  `foto` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`kdOperator`, `namaLengkap`, `username`, `password`, `tglLahir`, `jenisKelamin`, `email`, `noTelepon`, `kelurahan`, `kecamatan`, `kota_kab`, `provinsi`, `alamatLengkap`, `kodePos`, `foto`, `status`) VALUES
(1, 'farhan', 'farhan', 'farhan', '1998-01-30', 'Perempuan', 'farhansutrisno98@gmail.com', '081298374182', 'cijoropasir', 'rangkasbitung', 'lebak', 'banten', 'kampung jujuluk rt/rw', 42316, 'Trend_model_rambut_pria_ala_K-Pop_Korea_terbaru71.jpg', '0'),
(4, 'dhea dwijayanti', 'dheadwijayanti123', '12345', '2021-03-11', 'Perempuan', 'dheadwijayanti@gmail.com', '081298374183', 'pasir sukarayat', 'rangkasbitung', 'lebak', 'Banten', 'kp. pasir sukarayat', 42316, 'Foto_Farhan_Sutrisno7.jpg', '1');

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
  `tglPembayaran` varchar(35) DEFAULT NULL,
  `noResi` varchar(35) DEFAULT NULL,
  `statusPembayaran` varchar(35) NOT NULL,
  `kodeUnik` int(35) DEFAULT NULL,
  `strukPembayaran` varchar(35) DEFAULT NULL,
  `catatan` text NOT NULL,
  `kdOperator` int(35) NOT NULL,
  `noPlat` varchar(35) DEFAULT NULL,
  `noAntrian` varchar(35) DEFAULT NULL,
  `jenisBooking` varchar(35) DEFAULT NULL,
  `KdTukang` int(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`kdPembelian`, `idAkun`, `kurir`, `biayaKirim`, `totalBayar`, `kdProduk`, `berat`, `jml_produk`, `subtotal`, `kdPembayaran`, `tglTransaksi`, `tglPembayaran`, `noResi`, `statusPembayaran`, `kodeUnik`, `strukPembayaran`, `catatan`, `kdOperator`, `noPlat`, `noAntrian`, `jenisBooking`, `KdTukang`) VALUES
(36, 37, NULL, NULL, 200000, 20, NULL, 1, 200000, NULL, '2021-03-29', NULL, NULL, 'Waiting List', 26, NULL, '', 0, 'A 1234 RR', 'LA1', 'Langsung', NULL),
(37, 37, NULL, NULL, 100000, 19, NULL, 1, 100000, NULL, '2021-03-29', NULL, NULL, 'Waiting List', 176, NULL, '', 0, 'A 1234 RR', 'ANT1', 'Antar Jemput', 1),
(38, 37, NULL, NULL, 100000, 19, NULL, 1, 100000, NULL, '2021-03-29', NULL, NULL, 'Waiting List', 405, NULL, '', 0, 'A 1234 RR', 'LA2', 'Langsung', NULL),
(39, 37, NULL, NULL, 200000, 20, NULL, 1, 200000, NULL, '2021-03-29', NULL, NULL, 'Waiting List', 493, NULL, '', 0, 'A 1234 RR', 'ANT2', 'Antar Jemput', 1),
(40, 37, NULL, NULL, 100000, 21, NULL, 1, 100000, NULL, '2021-03-29', NULL, NULL, 'Waiting List', 672, NULL, '', 0, 'A 1234 RR', 'ANT3', 'Antar Jemput', 1),
(41, 37, NULL, NULL, 100000, 19, NULL, 1, 100000, NULL, '2021-04-01', NULL, NULL, 'Waiting List', 412, NULL, '', 0, 'A 1234 RR', 'ANT1', 'Antar Jemput', 1),
(42, 37, NULL, NULL, 100000, 19, NULL, 1, 100000, NULL, '2021-04-02', NULL, NULL, 'Waiting List', 697, NULL, '', 0, 'A 1234 RR', 'ANT1', 'Antar Jemput', 1),
(43, 37, NULL, NULL, 100000, 19, NULL, 1, 100000, NULL, '2021-04-02', NULL, NULL, 'Waiting List', 760, NULL, '', 0, 'A 1234 RR', 'ANT2', 'Antar Jemput', 1),
(52, 39, NULL, NULL, 100000, 21, NULL, 1, 100000, NULL, '2021-04-07', NULL, NULL, 'Selesai', 762, NULL, '', 0, 'B 12345 BB', 'ANT1', 'Antar Jemput', 1),
(53, 39, NULL, NULL, 200000, 20, NULL, 1, 200000, NULL, '2021-04-07', '23:22:37', NULL, 'Pencucian', 947, NULL, '', 0, 'A 1234 RR', 'ANT2', 'Antar Jemput', 1),
(54, 39, NULL, NULL, 300000, 21, NULL, 1, 100000, NULL, '2021-04-08', '00:34:53', NULL, 'Selesai', 426, NULL, '', 0, 'B 12345 BB', 'ANT1', 'Antar Jemput', 1),
(55, 39, NULL, NULL, 300000, 20, NULL, 1, 200000, NULL, '2021-04-08', '00:34:53', NULL, 'Selesai', 426, NULL, '', 0, 'B 12345 BB', 'ANT1', 'Antar Jemput', 1),
(56, 39, NULL, NULL, 100000, 19, NULL, 1, 100000, NULL, '2021-04-08', '01:07:52', NULL, 'Selesai', 347, NULL, '', 0, 'B 12345 BB', 'LA1', 'Langsung', NULL);

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
  `idAkun` int(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanmasuk`
--

INSERT INTO `pesanmasuk` (`kdPesanMasuk`, `namaLengkap`, `noTelepon`, `judulPesan`, `isiPesan`, `tglPesan`, `idAkun`) VALUES
(4, 'farhan sutrisno', '081298374183', NULL, 'testtets', '2021-04-03 10:46:15', NULL),
(5, 'dhea dwijayanti', '081298374183', NULL, 'sfdsfsdf', '2021-04-03 10:47:29', NULL),
(6, 'farhan sutrisno', '081298374183', NULL, 'sfsafsf', '2021-04-03 10:48:58', NULL),
(7, 'farhan sutrisno', '081298374183', NULL, 'sdsfsdf', '2021-04-03 10:49:27', NULL),
(8, 'farhan sutrisno', '081298374183', NULL, 'wsdsfds', '2021-04-03 10:50:36', NULL);

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
  `createDate` varchar(35) DEFAULT NULL,
  `updateDate` varchar(35) DEFAULT NULL,
  `paket` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`kdProduk`, `namaSuplier`, `namaProduk`, `berat`, `hargaPenjualan`, `hargaPokokPembelian`, `stok`, `deskripsi`, `kategori`, `tglPembelian`, `expired`, `gambar`, `gambar2`, `gambar3`, `kdOperator`, `gambar_pendukung`, `catatan_pendukung`, `point`, `createDate`, `updateDate`, `paket`) VALUES
(19, NULL, 'paket reguler cars wash', NULL, 100000, NULL, 10, 'paket yang sangat murah namun berkualitas ', 'CarWash', NULL, NULL, 'gambar1.jpg', NULL, NULL, 1, NULL, NULL, 2000, '2021-03-11', '2021-04-03 20:48:48', 'Reguler'),
(20, NULL, 'paket platinum coating', NULL, 200000, NULL, 10, 'sangat bagus ', 'Coating', NULL, NULL, 'coating.jpeg', NULL, NULL, 1, NULL, NULL, 5000, '2021-03-17', NULL, NULL),
(21, NULL, 'paket platinum cars wash', NULL, 100000, NULL, NULL, 'paket platinum  yang sangat baik', 'CarWash', NULL, NULL, 'gambar32.jpg', NULL, NULL, 1, NULL, NULL, 1000, '2021-03-17', '2021-04-03 20:48:55', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tukang`
--

CREATE TABLE `tukang` (
  `KdTukang` int(50) NOT NULL,
  `nama_lengkap` varchar(35) NOT NULL,
  `jenisKelamin` varchar(35) NOT NULL,
  `noTelepon` varchar(20) NOT NULL,
  `status` int(20) DEFAULT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tukang`
--

INSERT INTO `tukang` (`KdTukang`, `nama_lengkap`, `jenisKelamin`, `noTelepon`, `status`, `foto`) VALUES
(1, 'farhan', 'Laki-Laki', '08129999999', 2, 'Foto_Farhan_Sutrisno8.jpg'),
(2, 'Dafa Firdaus', 'Laki-Laki', '081298374183', 2, 'Farhan_Sutrisno_3x4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`KdAbout`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`kdArtikel`);

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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `KdAbout` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `kdArtikel` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `kdGaleri` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `kdHistory` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `kdKeranjang` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `idAkun` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `kdOperator` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `kdPembelian` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `pesanmasuk`
--
ALTER TABLE `pesanmasuk`
  MODIFY `kdPesanMasuk` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `kdProduk` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tukang`
--
ALTER TABLE `tukang`
  MODIFY `KdTukang` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
