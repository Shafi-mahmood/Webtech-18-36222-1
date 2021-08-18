-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 06:40 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Wilson Blaze 749019', 67.7, './upload/1.jpg'),
(2, 'Carlton Aeroblade 1.0 ', 8.99, './upload/2.jpg'),
(3, 'Prince Nitro ', 31.49, './upload/3.jpg'),
(4, 'Yonex Muscle Power 5', 21.99, './upload/4.jpg'),
(5, 'Dunlop Graviton ', 59.99, './upload/5.jpg'),
(6, 'Carlton Ex Hybrid', 60, './upload/6.jpg'),
(7, 'Wilson NFL ', 11.22, './upload/7.jpg'),
(8, 'WILSON NFL Jr', 24.99, './upload/8.jpg'),
(9, 'Wilson Team Junior ', 26.39, './upload/9.jpg'),
(10, 'Slazenger Aluminium', 29.49, './upload/10.jpg'),
(11, 'Slazenger Wooden ', 19.84, './upload/11.jpg'),
(12, 'Slazenger 1 Piece Bat', 5.67, './upload/12.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
