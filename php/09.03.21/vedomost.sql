-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 09, 2021 at 08:03 PM
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
-- Table structure for table `vedomost`
--

CREATE TABLE `vedomost` (
  `nomer` int NOT NULL,
  `fio` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `otdel` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `zp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `vedomost`
--

INSERT INTO `vedomost` (`nomer`, `fio`, `otdel`, `zp`) VALUES
(1, 'Иванов Иван Иванович', 'бухгалтерия', 1000),
(2, 'Петров Петр Петрович', 'склад', 400),
(3, 'Зайцев Рустам Петрович', 'компьютеризация', 1000000),
(4, 'Солодуха Виктор Геннадьевич', 'бухгалтерия', 100),
(5, 'Распутин Григорий Иванович', 'склад', 700);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vedomost`
--
ALTER TABLE `vedomost`
  ADD PRIMARY KEY (`nomer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
