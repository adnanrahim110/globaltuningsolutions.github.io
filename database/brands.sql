-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2024 at 04:45 PM
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
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `date`, `status`) VALUES
(1, 'Alfa Romeo', '2024-07-03 12:10:24', 1),
(2, 'Alpina', '2024-07-03 12:10:24', 1),
(3, 'Aston Martin', '2024-07-03 12:10:24', 1),
(4, 'Audi', '2024-07-03 12:10:24', 1),
(5, 'Bentley', '2024-07-03 12:10:24', 1),
(6, 'BMW', '2024-07-03 12:10:24', 1),
(7, 'Buick', '2024-07-03 12:10:24', 1),
(8, 'Changan', '2024-07-03 12:10:24', 1),
(9, 'Chevrolet', '2024-07-03 12:10:24', 1),
(10, 'Chrysler', '2024-07-03 12:10:24', 1),
(11, 'Citroen', '2024-07-03 12:10:24', 1),
(12, 'Dacia', '2024-07-03 12:10:24', 1),
(13, 'Daewoo', '2024-07-03 12:10:24', 1),
(14, 'DAF', '2024-07-03 12:10:24', 1),
(15, 'Dodge', '2024-07-03 12:10:24', 1),
(16, 'DS', '2024-07-03 12:10:24', 1),
(17, 'Ferrari', '2024-07-03 12:10:24', 1),
(18, 'Fiat', '2024-07-03 12:10:24', 1),
(19, 'Ford', '2024-07-03 12:10:24', 1),
(20, 'Holden', '2024-07-03 12:10:24', 1),
(21, 'Honda', '2024-07-03 12:10:24', 1),
(22, 'Hyundai', '2024-07-03 12:10:24', 1),
(23, 'Infiniti', '2024-07-03 12:10:24', 1),
(24, 'Isuzu', '2024-07-03 12:10:24', 1),
(25, 'Iveco', '2024-07-03 12:10:24', 1),
(26, 'Jaguar', '2024-07-03 12:10:24', 1),
(27, 'Jeep', '2024-07-03 12:10:24', 1),
(28, 'Kia', '2024-07-03 12:10:24', 1),
(29, 'Lamborghini', '2024-07-03 12:10:24', 1),
(30, 'Lancia', '2024-07-03 12:10:24', 1),
(31, 'Land Rover', '2024-07-03 12:10:24', 1),
(32, 'Lexus', '2024-07-03 12:10:24', 1),
(33, 'Mahindra', '2024-07-03 12:10:24', 1),
(34, 'MAN', '2024-07-03 12:10:24', 1),
(35, 'Maserati', '2024-07-03 12:10:24', 1),
(36, 'Mazda', '2024-07-03 12:10:24', 1),
(37, 'McLaren', '2024-07-03 12:10:24', 1),
(38, 'Mercedes-Benz', '2024-07-03 12:10:24', 1),
(39, 'Mercedes-Benz Trucks', '2024-07-03 12:10:24', 1),
(40, 'MG', '2024-07-03 12:10:24', 1),
(41, 'Mini', '2024-07-03 12:10:24', 1),
(42, 'Mitsubishi', '2024-07-03 12:10:24', 1),
(43, 'Nissan', '2024-07-03 12:10:24', 1),
(44, 'Opel', '2024-07-03 12:10:24', 1),
(45, 'Peugeot', '2024-07-03 12:10:24', 1),
(46, 'Porsche', '2024-07-03 12:10:24', 1),
(47, 'Renault', '2024-07-03 12:10:24', 1),
(48, 'Renault Trucks', '2024-07-03 12:10:24', 1),
(49, 'Rover', '2024-07-03 12:10:24', 1),
(50, 'Saab', '2024-07-03 12:10:24', 1),
(51, 'Scania Trucks', '2024-07-03 12:10:24', 1),
(52, 'Seat', '2024-07-03 12:10:24', 1),
(53, 'Skoda', '2024-07-03 12:10:24', 1),
(54, 'Smart', '2024-07-03 12:10:24', 1),
(55, 'SsangYong', '2024-07-03 12:10:24', 1),
(56, 'Subaru', '2024-07-03 12:10:24', 1),
(57, 'Suzuki', '2024-07-03 12:10:24', 1),
(58, 'Toyota', '2024-07-03 12:10:24', 1),
(59, 'Vauxhall', '2024-07-03 12:10:24', 1),
(60, 'Volkswagen', '2024-07-03 12:10:24', 1),
(61, 'Volvo', '2024-07-03 12:10:24', 1),
(62, 'Volvo Trucks', '2024-07-03 12:10:24', 1),
(63, 'New Holland Agriculture', '2024-07-03 12:10:24', 1),
(64, 'Claas', '2024-07-03 12:10:24', 1),
(65, 'CaseIH', '2024-07-03 12:10:24', 1),
(66, 'Ski-Doo', '2024-07-03 12:10:24', 1),
(67, 'Mitsubishi Fuso', '2024-07-03 12:10:24', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
