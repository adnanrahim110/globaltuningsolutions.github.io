-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2024 at 10:28 PM
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
-- Table structure for table `file_service`
--

CREATE TABLE `file_service` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `generation_id` int(11) NOT NULL,
  `engine_id` int(11) NOT NULL,
  `ecu_id` int(11) NOT NULL,
  `method_id` int(11) NOT NULL,
  `power` int(11) DEFAULT NULL,
  `power_metric` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `gearbox` varchar(100) NOT NULL,
  `hardware_no` varchar(100) NOT NULL,
  `software_no` varchar(100) NOT NULL,
  `original_file` varchar(255) NOT NULL,
  `tuning_type` varchar(100) NOT NULL,
  `direct_email` varchar(100) NOT NULL,
  `time_frame` varchar(50) NOT NULL,
  `is_on_dyno` varchar(255) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `file_service`
--

INSERT INTO `file_service` (`id`, `user_id`, `brand_id`, `model_id`, `generation_id`, `engine_id`, `ecu_id`, `method_id`, `power`, `power_metric`, `year`, `gearbox`, `hardware_no`, `software_no`, `original_file`, `tuning_type`, `direct_email`, `time_frame`, `is_on_dyno`, `comment`, `add_date`) VALUES
(1, 8, 1, 1, 1, 1, 1, 1, 1111, 'kw', 2023, 'unkown', '2323', '232323', 'about.zip', 'car_stage1', 'arkaka0092@gmail.com', 'asap', 'No', 'test', '2024-09-17 20:09:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file_service`
--
ALTER TABLE `file_service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`),
  ADD KEY `fk_brand_id` (`brand_id`),
  ADD KEY `fk_model_id` (`model_id`),
  ADD KEY `fk_generation_id` (`generation_id`),
  ADD KEY `fk_engine_id` (`engine_id`),
  ADD KEY `fk_ecu_id` (`ecu_id`),
  ADD KEY `fk_method_id` (`method_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file_service`
--
ALTER TABLE `file_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `file_service`
--
ALTER TABLE `file_service`
  ADD CONSTRAINT `fk_brand_id` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_ecu_id` FOREIGN KEY (`ecu_id`) REFERENCES `ecu` (`ecu_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_engine_id` FOREIGN KEY (`engine_id`) REFERENCES `engines` (`engine_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_generation_id` FOREIGN KEY (`generation_id`) REFERENCES `generations` (`generation_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_method_id` FOREIGN KEY (`method_id`) REFERENCES `read_method` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_model_id` FOREIGN KEY (`model_id`) REFERENCES `models` (`model_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
