-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2018 at 10:01 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_paccgitar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_metodepem`
--

CREATE TABLE `tb_metodepem` (
  `id_metodepem` int(11) NOT NULL,
  `cara_pem` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_metodepem`
--

INSERT INTO `tb_metodepem` (`id_metodepem`, `cara_pem`) VALUES
(1, 'Transfer');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `no_invoice` varchar(11) NOT NULL,
  `total_bayar` int(15) NOT NULL,
  `status` enum('belum bayar','sudah bayar') NOT NULL,
  `bukti_pembayaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `no_invoice` varchar(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `kuantitas` int(10) NOT NULL,
  `status` enum('order','lunas') NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pemesanan`, `no_invoice`, `id_user`, `id_produk`, `kuantitas`, `status`, `tanggal`) VALUES
(18, '#584fe', 0, 14, 1, 'order', '2018-05-02 13:28:50'),
(19, '#5ee76', 0, 12, 1, 'order', '2018-05-02 13:32:17'),
(24, '#1f5a4', 0, 2, 1, 'order', '2018-05-03 22:22:27'),
(26, '#58da4', 0, 12, 1, 'order', '2018-05-03 22:28:57'),
(27, '#4916f', 0, 3, 1, 'order', '2018-05-03 22:29:07'),
(28, '#f6ef7', 0, 2, 1, 'order', '2018-05-04 01:36:54'),
(29, '#de50a', 0, 3, 1, 'order', '2018-05-04 04:10:24'),
(31, '#28a4e', 0, 1, 1, 'order', '2018-05-05 01:43:22'),
(33, '#9e03f', 0, 3, 1, 'order', '2018-05-05 02:02:51'),
(34, '#fb7c3', 0, 3, 1, 'order', '2018-05-05 02:03:35'),
(38, '#2ae56', 0, 11, 1, 'order', '2018-05-05 03:00:12'),
(40, '#9aa1e1', 9, 3, 1, 'order', '2018-05-05 04:10:50'),
(41, '#a06c6', 0, 2, 1, 'order', '2018-05-07 19:09:34'),
(42, '#092f3', 0, 3, 1, 'order', '2018-05-16 15:01:58'),
(43, '#84e35', 0, 2, 1, 'order', '2018-05-17 08:36:28'),
(45, '#3ea9e', 0, 11, 1, 'order', '2018-05-29 19:03:47'),
(47, '#3e826', 0, 11, 1, 'order', '2018-06-02 02:54:25'),
(48, '#026a0', 0, 3, 1, 'order', '2018-06-02 03:00:23'),
(49, '#488e4', 0, 3, 1, 'order', '2018-06-02 03:03:16'),
(50, '#246e4', 0, 11, 1, 'order', '2018-06-02 03:04:09'),
(51, '#18383f', 1, 0, 1, 'order', '2018-06-02 03:12:38'),
(52, '#b1129', 0, 11, 1, 'order', '2018-06-02 03:41:43'),
(53, '#cd613', 0, 3, 1, 'order', '2018-06-04 09:07:05'),
(54, '#1f5e9', 0, 3, 1, 'order', '2018-06-04 09:53:55'),
(56, '#18383f', 1, 14, 1, 'order', '2018-06-04 09:55:01'),
(57, '#b7105', 0, 11, 1, 'order', '2018-06-05 04:23:38'),
(58, '#18383f', 1, 11, 1, 'order', '2018-06-06 07:23:44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` varchar(8) NOT NULL,
  `stok` int(3) NOT NULL,
  `deskripsi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `gambar`, `harga`, `stok`, `deskripsi`) VALUES
(1, 'Capo', 'caponta.jpg', '75000', 0, 'Capo dengan murah berkualitas mantap jiwa'),
(2, 'Pick gitar', 'pikk.jpg', '35000', 1, 'Pick gitar dengan harga murah bekualitas '),
(3, 'Softcase', 'softcasse.jpg', '70000', 30, 'Softcase gitar dengan harga murah berkualitas bahan tebal dan kuat'),
(11, 'Ampli', 'ampli.jpg', '650000', 11, 'Ampli dengan harga murah berkualitas'),
(14, 'Hanger', 'hangerr.jpg', '40000', 13, 'Hanger ajib abis mantap jiwa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `tarif` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`id_provinsi`, `provinsi`, `tarif`) VALUES
(1, 'Jawa Timur', '25000'),
(2, 'Jawa Tengah', '17000'),
(3, 'Jawa Barat', '13000'),
(4, 'Jakarta', '13000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tujuan`
--

CREATE TABLE `tb_tujuan` (
  `id_tujuan` int(11) NOT NULL,
  `no_invoice` varchar(11) NOT NULL,
  `nama_penerima` varchar(50) NOT NULL,
  `kode_pos` varchar(5) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `metode_pem` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tujuan`
--

INSERT INTO `tb_tujuan` (`id_tujuan`, `no_invoice`, `nama_penerima`, `kode_pos`, `alamat`, `no_telp`, `metode_pem`) VALUES
(1, '#8fd972', 'Anggi Septiana', '16620', 'Kp.Sindang barang', '081398972037', 'Transfer'),
(5, '', 'ridho', '16620', 'Ciampea', '081397962034', 'Transfer');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level` enum('admin','customer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `email`, `password`, `level`) VALUES
(1, 'Awaludin', 'awal@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 'customer'),
(3, 'Ridho', 'arsyandi.ridho@gmail.com', '926a161c6419512d711089538c80ac70', 'admin'),
(8, 'Anggi', 'anggi@gmail.com', '4a283e1f5eb8628c8631718fe87f5917', 'customer'),
(9, 'ezikel enduasel', 'kozelmanusiakadal@yahoo.com', '8ce114947725e0e5337f637893ce89e2', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_metodepem`
--
ALTER TABLE `tb_metodepem`
  ADD PRIMARY KEY (`id_metodepem`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `tb_tujuan`
--
ALTER TABLE `tb_tujuan`
  ADD PRIMARY KEY (`id_tujuan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_metodepem`
--
ALTER TABLE `tb_metodepem`
  MODIFY `id_metodepem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_tujuan`
--
ALTER TABLE `tb_tujuan`
  MODIFY `id_tujuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
