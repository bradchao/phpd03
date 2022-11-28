-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2022 at 03:25 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpd03`
--

-- --------------------------------------------------------

--
-- Table structure for table `cust`
--

CREATE TABLE `cust` (
  `id` int(10) UNSIGNED NOT NULL,
  `cname` varchar(10) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `birthday` date NOT NULL DEFAULT '0000-01-01'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cust`
--

INSERT INTO `cust` (`id`, `cname`, `tel`, `birthday`) VALUES
(1, 'brad', '123', '1999-01-02'),
(2, 'brad', '123', '1999-01-02'),
(3, 'brad', '123', '1999-01-02'),
(4, 'brad', '123', '1999-01-02'),
(5, 'brad', '123', '1999-01-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cust`
--
ALTER TABLE `cust`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cust`
--
ALTER TABLE `cust`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
