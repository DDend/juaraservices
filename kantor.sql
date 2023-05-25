-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 10:38 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kantor`
--

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id_deposit` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_deposit` timestamp NOT NULL DEFAULT current_timestamp(),
  `total_deposit` int(11) NOT NULL,
  `bukti_deposit` varchar(255) NOT NULL,
  `status` enum('pending','success','','') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`id_deposit`, `id_user`, `tanggal_deposit`, `total_deposit`, `bukti_deposit`, `status`) VALUES
(3, 6, '2023-05-19 19:33:39', 500009, 'screenshot_20230121_174046.png', 'pending'),
(4, 6, '2023-05-19 19:34:54', 500009, 'screenshot_20230121_174046.png', 'pending'),
(5, 6, '2023-05-19 20:08:51', 0, 'screenshot_20230325_035948.png', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_imei` int(11) NOT NULL,
  `nama_layanan` varchar(255) NOT NULL,
  `harga_layanan` int(255) NOT NULL,
  `tipe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_imei`, `nama_layanan`, `harga_layanan`, `tipe`) VALUES
(2, 'Unblock 3 Bulan iPhone', 600000, 'Permanen');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_imei` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL DEFAULT current_timestamp(),
  `screenshoot_imei` int(11) NOT NULL,
  `status` enum('pending','success','process','') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_imei`, `tanggal_transaksi`, `screenshoot_imei`, `status`) VALUES
(1, 6, 2, '2023-05-20', 0, 'pending'),
(2, 6, 2, '2023-05-20', 0, 'pending'),
(3, 6, 2, '2023-05-20', 0, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `nohp`, `password`, `is_admin`) VALUES
(3, 'ddending', 'ddending@gmail.com', '089660704086', 'ddending', '1'),
(6, 'user', 'user@gmail.com', '000000', '0000', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id_deposit`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_imei`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id_deposit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_imei` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
