-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2024 at 04:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u694204903_tunning`
--

-- --------------------------------------------------------

--
-- Table structure for table `engines`
--

CREATE TABLE `engines` (
  `id` int(11) NOT NULL,
  `generation_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `engines`
--

INSERT INTO `engines` (`id`, `generation_id`, `name`, `add_date`, `status`) VALUES
(1, 1, '1.6 T-Spark 105hp', '2024-07-04 07:51:31', 1),
(2, 1, '1.6 T-Spark 120hp', '2024-07-04 07:51:31', 1),
(3, 1, '1.9 JTD 100hp', '2024-07-04 07:51:31', 1),
(4, 1, '1.9 JTD 115hp', '2024-07-04 07:51:31', 1),
(5, 1, '1.9 JTD 136hp', '2024-07-04 07:51:31', 1),
(6, 1, '1.9 JTD 140hp', '2024-07-04 07:51:31', 1),
(7, 1, '2.0 T-Spark 150hp', '2024-07-04 07:51:31', 1),
(8, 1, '3.2 V6 GTA 250hp', '2024-07-04 07:51:31', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `engines`
--
ALTER TABLE `engines`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `engines`
--
ALTER TABLE `engines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
