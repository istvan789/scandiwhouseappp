-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2022 at 06:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scandiwhouseappp`
--

-- --------------------------------------------------------

--
-- Table structure for table `productlist`
--

CREATE TABLE `productlist` (
  `id` int(255) NOT NULL,
  `sku` varchar(30) NOT NULL,
  `name1` text NOT NULL,
  `price` varchar(25) NOT NULL,
  `size` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `dimension` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `productlist`
--

INSERT INTO `productlist` (`id`, `sku`, `name1`, `price`, `size`, `weight`, `dimension`) VALUES
(1, '1', 'DVD', '23$', '500MB', '', ''),
(3, '3', 'Bridgertons', '29$', '778MB', '', ''),
(4, '4', 'The Beast', '18$', '800MB', '', ''),
(5, '5', 'Return of David', '34$', '788MB', '', ''),
(43, '445', 'Table', '34$', '', '', '23 x 43 x 6'),
(44, '67', 'Chair', '12$', '', '', '12 x 13 x 3'),
(45, '34', 'Letters for Julia', '17$', '', '2KG', ' '),
(46, '99', 'Better Life', '39$', '', '4KG', ''),
(47, '756', 'Chair', '34$', '', '', '6 x 14 x 4'),
(48, '879', 'Lord of Rings', '48$', '800MB', '', ' x  x '),
(49, '799', 'blabla', '56$', '567MB', '', ' x  x '),
(51, '69', 'Chair', '45$', '', '', '7 x 5 x 3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productlist`
--
ALTER TABLE `productlist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productlist`
--
ALTER TABLE `productlist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
