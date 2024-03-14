-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2024 at 01:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sts_ginan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `kode_barang`, `nama_barang`, `kategori`, `merk`, `jumlah`) VALUES
(1, 'A001', 'Handphone', 'Elektronik', 'Samsung', 15),
(2002, 'S002', 'Speaker', 'Elektronik', 'Simbadda', 32);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `tgl_pinjam` datetime NOT NULL,
  `tgl_kembali` datetime NOT NULL,
  `no_identitas` varchar(30) NOT NULL,
  `kode_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(11) NOT NULL,
  `jumlah_pinjam` int(15) NOT NULL,
  `keperluan` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `id_login` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `tgl_pinjam`, `tgl_kembali`, `no_identitas`, `kode_barang`, `nama_barang`, `jumlah_pinjam`, `keperluan`, `status`, `id_login`) VALUES
(2, '2024-03-12 09:00:43', '2024-03-20 09:00:43', '001', 'uuu', 'qqq', 4, 'adadeh', 'baru', 1),
(5, '2024-03-08 00:00:00', '2024-03-23 00:00:00', '7', 'ywa1', 'gb', 7, 'hwas', '', 9),
(2002, '2024-03-13 00:00:00', '2024-03-21 00:00:00', 'G001', 'S002', 'Speaker', 5, 'Music', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_login` int(11) NOT NULL,
  `no_identitas` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `status` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(12) NOT NULL,
  `role` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_login`, `no_identitas`, `nama`, `status`, `username`, `password`, `role`) VALUES
(1, 'G001', 'Ginanda', 'Manager', 'ginan123', '1234', 'admin'),
(2, 'H002', 'Haikal', 'Tamu', 'ikal123', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
