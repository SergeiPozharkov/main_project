-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 14, 2021 at 04:01 PM
-- Server version: 8.0.19
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pozharkov`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_products`
--

CREATE TABLE `new_products` (
  `product_id` int UNSIGNED NOT NULL,
  `product_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `price` int NOT NULL,
  ` manufacturer` varchar(50) COLLATE utf8_bin NOT NULL,
  `type` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `new_products`
--

INSERT INTO `new_products` (`product_id`, `product_name`, `price`, ` manufacturer`, `type`) VALUES
(1, 'iphone', 100000, 'Apple', 'phone'),
(2, 'Honor 10x', 20000, 'Huawei', 'phone'),
(3, 'apple watch', 70000, 'Apple', 'watch'),
(4, 'macbook air m1', 150000, 'Apple', 'notebook'),
(5, ' MSI Modern 14 B10MW-023XRU', 55000, 'Msi', 'notebook'),
(6, 'Lenovo IdeaPad 3 15IML05 81WB00QBRE', 65000, 'Lenovo', 'notebook'),
(7, 'Huawei MateBook D 14 AMD NblL-WDQ9', 90000, 'Huawei', 'notebook'),
(8, 'Samsung Gear S3 Frontier', 80000, 'Samsung', 'watch'),
(9, 'LG Urbane 2', 50000, 'LG', 'watch'),
(10, 'Samsung Galaxy Book S', 50000, 'Samsung', 'notebook');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_products`
--
ALTER TABLE `new_products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_products`
--
ALTER TABLE `new_products`
  MODIFY `product_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
