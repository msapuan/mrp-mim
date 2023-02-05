-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2022 at 11:02 AM
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
-- Database: `db_mrp`
--

-- --------------------------------------------------------

--
-- Table structure for table `ukuran_plastik`
--

CREATE TABLE `ukuran_plastik` (
  `id_plastik` int(11) NOT NULL,
  `kode_nav` varchar(50) DEFAULT NULL,
  `ukuran` varchar(50) NOT NULL,
  `pcs_kg` int(11) NOT NULL,
  `kg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ukuran_plastik`
--

INSERT INTO `ukuran_plastik` (`id_plastik`, `kode_nav`, `ukuran`, `pcs_kg`, `kg`) VALUES
(1, NULL, '138 x 150', 7, NULL),
(2, NULL, '105 x 123', 11, NULL),
(3, NULL, '89 x 158', 11, NULL),
(4, NULL, '64 x 81.5', 27, NULL),
(5, NULL, '64 x 103', 49, NULL),
(6, NULL, '54 x 100', 29, NULL),
(7, NULL, '52 x 88', 36, NULL),
(8, NULL, '52 x 71', 42, NULL),
(9, NULL, '51 x 46', 70, NULL),
(10, NULL, '47 x 35', 113, NULL),
(11, NULL, '45 x 89.5', 33, NULL),
(12, NULL, '44 x 64', 45, NULL),
(13, NULL, '42 x 60', 45, NULL),
(14, NULL, '40 x 45', 99, NULL),
(15, NULL, '39 x 60', 70, NULL),
(16, NULL, '35 x 46', 124, NULL),
(17, NULL, '34 x 50', 97, NULL),
(18, NULL, '28 x 52', 139, NULL),
(19, NULL, '50 x 42.5 OPP', 83, NULL),
(20, NULL, '37 x 30 OPP', 165, NULL),
(21, NULL, '39 x 32 OPP', 148, NULL),
(22, NULL, '35 x 12 OPP', 223, NULL),
(23, NULL, '33 x 26.5 OPP', 212, NULL),
(24, NULL, '23.5 x 26 OPP', 306, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_foto` varchar(100) DEFAULT NULL,
  `user_level` enum('admin','wakil','manager') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_foto`, `user_level`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, 'admin'),
(2, 'Wakil', 'wakil', '28d866e5f30ae6386be9f1921e0b2a58', NULL, 'wakil'),
(3, 'Yuri', 'yuri', '0517dd1e00b72285d3b203221fbdbc49', NULL, 'manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ukuran_plastik`
--
ALTER TABLE `ukuran_plastik`
  ADD PRIMARY KEY (`id_plastik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ukuran_plastik`
--
ALTER TABLE `ukuran_plastik`
  MODIFY `id_plastik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
