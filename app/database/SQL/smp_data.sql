-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 02:16 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smp_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_t`
--

CREATE TABLE `account_t` (
  `id_user` int(11) NOT NULL,
  `userEmail` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `member` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `onCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `onUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `selesai` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_t`
--

INSERT INTO `account_t` (`id_user`, `userEmail`, `username`, `password`, `member`, `gender`, `birthday`, `onCreated`, `onUpdated`, `selesai`) VALUES
(1, 'admin@gmail.com', 'Administrasi', '21232f297a57a5a743894a0e4a801fc3', 1, 1, '1999-05-27', '2023-04-07 02:31:32', '2023-04-07 06:57:21', 'yes'),
(2, 'ganteng@gmail.com', 'orang kaya', '21232f297a57a5a743894a0e4a801fc3', 3, 1, '2007-02-10', '2023-04-06 18:25:47', '2023-04-06 18:29:42', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `bayar_spp_t`
--

CREATE TABLE `bayar_spp_t` (
  `id_perbulan` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bayar_spp_t`
--

INSERT INTO `bayar_spp_t` (`id_perbulan`, `jumlah_bayar`) VALUES
(1, 180000),
(2, 270000),
(3, 360000);

-- --------------------------------------------------------

--
-- Table structure for table `gender_t`
--

CREATE TABLE `gender_t` (
  `id_gender` int(11) NOT NULL,
  `gender` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gender_t`
--

INSERT INTO `gender_t` (`id_gender`, `gender`) VALUES
(1, 'Laki-Laki'),
(2, 'Perempuan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_t`
--
ALTER TABLE `account_t`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `bayar_spp_t`
--
ALTER TABLE `bayar_spp_t`
  ADD PRIMARY KEY (`id_perbulan`);

--
-- Indexes for table `gender_t`
--
ALTER TABLE `gender_t`
  ADD PRIMARY KEY (`id_gender`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_t`
--
ALTER TABLE `account_t`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bayar_spp_t`
--
ALTER TABLE `bayar_spp_t`
  MODIFY `id_perbulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gender_t`
--
ALTER TABLE `gender_t`
  MODIFY `id_gender` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
