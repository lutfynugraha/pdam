-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2018 at 05:36 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdam2`
--

-- --------------------------------------------------------

--
-- Table structure for table `arduino`
--

CREATE TABLE `arduino` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` bigint(20) NOT NULL,
  `port` int(10) DEFAULT NULL,
  `description` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `module` int(10) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `log` varchar(50) NOT NULL,
  `date` datetime DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `link` varchar(30) NOT NULL,
  `seq` int(10) DEFAULT NULL,
  `page_title` varchar(30) DEFAULT NULL,
  `page_title_sm` varchar(30) DEFAULT NULL,
  `icon` varchar(30) DEFAULT NULL,
  `group` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `name`, `link`, `seq`, `page_title`, `page_title_sm`, `icon`, `group`) VALUES
(1, 1, 'Input Temperature', 'tin', 1, 'Temperature', 'From Sensor DHT11', 'temp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `link` varchar(30) NOT NULL,
  `description` varchar(30) DEFAULT NULL,
  `seq` int(30) DEFAULT NULL,
  `group` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `link`, `description`, `seq`, `group`) VALUES
(1, 'Temperature', 'temp', 'Monitoring Temperature', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `jk`, `alamat`) VALUES
(12345, 'Maman ', 'L', 'Kadugede'),
(56789, 'Arman', 'L', 'Pasapen');

-- --------------------------------------------------------

--
-- Table structure for table `penggunaan_air`
--

CREATE TABLE `penggunaan_air` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pelanggan` int(10) NOT NULL,
  `value` double DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penggunaan_air`
--

INSERT INTO `penggunaan_air` (`id`, `id_pelanggan`, `value`, `date`) VALUES
(2107, 12345, 23, '2018-09-16 15:36:01'),
(2108, 12345, 27.7, '2018-09-16 15:36:10'),
(2109, 12345, 25, '2018-09-16 15:36:20'),
(2110, 12345, 26, '2018-09-16 15:36:30'),
(2111, 12345, 25, '2018-09-16 15:36:40'),
(2112, 12345, 25, '2018-09-16 15:36:49'),
(2113, 56789, 25, '2018-09-16 15:37:02'),
(2114, 56789, 26, '2018-09-16 15:37:11'),
(2115, 56789, 28, '2018-09-16 15:37:21'),
(2116, 56789, 28, '2018-09-16 15:37:31'),
(2117, 56789, 28, '2018-09-16 15:37:41'),
(2118, 56789, 24, '2018-09-16 22:33:04'),
(2119, 56789, 24, '2018-09-16 22:33:14'),
(2120, 56789, 24, '2018-09-16 22:33:24'),
(2121, 56789, 24, '2018-09-16 22:33:34'),
(2122, 56789, 24, '2018-09-16 22:33:44'),
(2123, 56789, 24, '2018-09-16 22:33:54'),
(2124, 56789, 24, '2018-09-16 22:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `pin_status`
--

CREATE TABLE `pin_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `pin` int(10) NOT NULL,
  `status` int(10) DEFAULT NULL,
  `description` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `group` int(10) NOT NULL,
  `active` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `group`, `active`) VALUES
(1, 'admin', 'admin', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arduino`
--
ALTER TABLE `arduino`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `penggunaan_air`
--
ALTER TABLE `penggunaan_air`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `pin_status`
--
ALTER TABLE `pin_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arduino`
--
ALTER TABLE `arduino`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56790;
--
-- AUTO_INCREMENT for table `penggunaan_air`
--
ALTER TABLE `penggunaan_air`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2125;
--
-- AUTO_INCREMENT for table `pin_status`
--
ALTER TABLE `pin_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `penggunaan_air`
--
ALTER TABLE `penggunaan_air`
  ADD CONSTRAINT `penggunaan_air_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
