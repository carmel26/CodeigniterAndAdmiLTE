-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 26, 2023 at 10:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL DEFAULT '0',
  `label` text DEFAULT NULL,
  `dateCreation` varchar(250) NOT NULL DEFAULT current_timestamp(),
  `dateDelete` varchar(250) DEFAULT NULL,
  `deleteStatus` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `designation`, `type`, `label`, `dateCreation`, `dateDelete`, `deleteStatus`) VALUES
(1, 'Tomato', '0', 'For sosse', '2023-12-23 10:07:52', NULL, 1),
(2, 'Soda', 'on', 'For drinking', '2023-12-23 10:09:45', '2023-12-26 10:34:37', 1),
(3, 'Soda coca cola', 'Liquid', 'For drinking and chilling', '2023-12-23 10:24:26', NULL, 0),
(4, 'Juice Embe', 'Liquid', 'Too much good', '2023-12-23 12:13:40', NULL, 1),
(5, 'Juice Embe', 'Liquid', 'Too much good', '2023-12-23 12:14:53', NULL, 1),
(6, 'Juice Embe', 'Liquid', 'Too much good', '2023-12-23 12:18:13', NULL, 0),
(7, 'Juice Embe', 'Liquid', 'Too much good', '2023-12-23 12:19:24', NULL, 1),
(8, 'Juice Embe', 'Liquid', 'Too much good', '2023-12-23 12:19:37', NULL, 1),
(9, 'Pin Editer', 'Liquid', 'More about...', '2023-12-23 12:52:38', NULL, 1),
(10, 'new data', 'Liquid', 'Any type of information', '2023-12-26 09:32:32', NULL, 0),
(11, 'new data 2', 'Gas', 'Any type of information 2', '2023-12-26 09:37:35', NULL, 0),
(12, 'Another data', 'Solid', 'test', '2023-12-26 10:12:17', NULL, 1),
(13, 'Another data', 'Solid', 'test', '2023-12-26 10:21:52', NULL, 0),
(14, 'Another data', 'Solid', 'test', '2023-12-26 10:23:07', NULL, 0),
(15, 'Another data', 'Solid', 'test', '2023-12-26 10:23:55', NULL, 0),
(16, 'Another data', 'Solid', 'test', '2023-12-26 10:25:03', NULL, 0),
(17, 'Another data', 'Solid', 'test', '2023-12-26 10:25:17', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
