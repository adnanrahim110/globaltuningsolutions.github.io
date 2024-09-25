-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2024 at 05:39 PM
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
-- Database: `tunning`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `profile_pic` varchar(2255) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `postcode` varchar(20) NOT NULL,
  `role_as` int(1) NOT NULL DEFAULT 0 COMMENT '1 = Admin,0 = User',
  `verify_token` varchar(255) NOT NULL,
  `verify_status` tinyint(2) NOT NULL DEFAULT 0 COMMENT '0 = not verified, 1 = verified',
  `added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `password`, `phone`, `country`, `profile_pic`, `city`, `street`, `postcode`, `role_as`, `verify_token`, `verify_status`, `added_at`) VALUES
(7, 'Adnan', 'Rahim', 'adnan', 'adnankaka.786110@gmail.com', '$2y$10$c5Mf1YLRaz9hItUhEy0uP.RMJBAgD6J7hyutMlTEJgqEKryu7lftG', '02032948394', NULL, NULL, NULL, NULL, '', 1, '221bb9928474600ca58f55ffce5967d6', 1, '2024-09-05 20:40:59'),
(8, 'Adnan', 'Rahim', 'adnan1', 'arkaka0092@gmail.com', '$2y$10$XtY7Vk83jWuF4hJLFDEmLuGvq99i6MGajOD9v2Jw8DerEE8M7bMoy', '02032948394', NULL, NULL, NULL, NULL, '', 0, '5c1274f604813d971ec70705d82840f2', 1, '2024-09-07 18:53:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
