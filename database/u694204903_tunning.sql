-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2024 at 05:03 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `credit_prices`
--

CREATE TABLE `credit_prices` (
  `id` int(11) NOT NULL,
  `credits` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `credit_prices`
--

INSERT INTO `credit_prices` (`id`, `credits`, `price`) VALUES
(1, 1, 249.00),
(2, 5, 1099.00);

-- --------------------------------------------------------

--
-- Table structure for table `ecu`
--

CREATE TABLE `ecu` (
  `ecu_id` int(11) NOT NULL,
  `engine_id` int(11) NOT NULL,
  `ecu_name` varchar(250) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ecu`
--

INSERT INTO `ecu` (`ecu_id`, `engine_id`, `ecu_name`, `add_date`, `status`) VALUES
(1, 1, 'Bosch ME7.3.1', '2024-07-04 08:15:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `engines`
--

CREATE TABLE `engines` (
  `engine_id` int(11) NOT NULL,
  `generation_id` int(11) NOT NULL,
  `engine_name` varchar(255) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `engines`
--

INSERT INTO `engines` (`engine_id`, `generation_id`, `engine_name`, `add_date`, `status`) VALUES
(1, 1, '1.6 T-Spark 105hp', '2024-07-04 07:51:31', 1),
(2, 1, '1.6 T-Spark 120hp', '2024-07-04 07:51:31', 1),
(3, 1, '1.9 JTD 100hp', '2024-07-04 07:51:31', 1),
(4, 1, '1.9 JTD 115hp', '2024-07-04 07:51:31', 1),
(5, 1, '1.9 JTD 136hp', '2024-07-04 07:51:31', 1),
(6, 1, '1.9 JTD 140hp', '2024-07-04 07:51:31', 1),
(7, 1, '2.0 T-Spark 150hp', '2024-07-04 07:51:31', 1),
(8, 1, '3.2 V6 GTA 250hp', '2024-07-04 07:51:31', 1);

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
  `control_unit_id` int(11) NOT NULL,
  `power` int(11) NOT NULL,
  `power_metric` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `gearbox` varchar(100) NOT NULL,
  `hardware_no` varchar(100) NOT NULL,
  `software_no` varchar(100) NOT NULL,
  `method` varchar(100) NOT NULL,
  `tuning_type` varchar(100) NOT NULL,
  `direct_email` varchar(100) NOT NULL,
  `time_frame` varchar(50) NOT NULL,
  `is_on_dyno` int(1) NOT NULL COMMENT '1=Yes,2=No',
  `comment` varchar(250) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `generations`
--

CREATE TABLE `generations` (
  `generation_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `generation_name` varchar(250) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `generations`
--

INSERT INTO `generations` (`generation_id`, `model_id`, `generation_name`, `add_date`, `status`) VALUES
(1, 1, '2001-2005', '2024-07-04 06:31:30', 1),
(2, 1, '2005 -&gt;', '2024-07-04 06:31:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `model_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `model_name` varchar(100) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`model_id`, `brand_id`, `model_name`, `add_date`, `status`) VALUES
(1, 1, '147', '2024-07-03 15:16:21', 1),
(2, 1, '156', '2024-07-03 15:16:21', 1),
(3, 1, '159', '2024-07-03 15:16:21', 1),
(4, 1, '166', '2024-07-03 15:16:21', 1),
(5, 1, '4C', '2024-07-03 15:16:21', 1),
(6, 1, 'Brera', '2024-07-03 15:16:21', 1),
(7, 1, 'Crosswagon', '2024-07-03 15:16:21', 1),
(8, 1, 'Giulia', '2024-07-03 15:16:21', 1),
(9, 1, 'Giulietta', '2024-07-03 15:16:21', 1),
(10, 1, 'GT', '2024-07-03 15:16:21', 1),
(11, 1, 'MiTo', '2024-07-03 15:16:21', 1),
(12, 1, 'Spider', '2024-07-03 15:16:21', 1),
(13, 1, 'Stelvio', '2024-07-03 15:16:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `read_method`
--

CREATE TABLE `read_method` (
  `id` int(11) NOT NULL,
  `method_name` varchar(255) NOT NULL,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_files`
--

CREATE TABLE `service_files` (
  `id` int(11) NOT NULL,
  `file_service_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `attachment` varchar(100) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblcountries`
--

CREATE TABLE `tblcountries` (
  `id` int(11) NOT NULL,
  `short_name` varchar(255) NOT NULL,
  `iso2` varchar(2) NOT NULL,
  `iso3` varchar(3) NOT NULL,
  `numcode` varchar(10) DEFAULT NULL,
  `flag_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcountries`
--

INSERT INTO `tblcountries` (`id`, `short_name`, `iso2`, `iso3`, `numcode`, `flag_img`) VALUES
(1, 'Antarctica', 'AQ', 'ATA', '', 'https://flagcdn.com/w320/aq.png'),
(2, 'Heard Island and McDonald Islands', 'HM', 'HMD', '', 'https://flagcdn.com/w320/hm.png'),
(3, 'Canada', 'CA', 'CAN', '+1', 'https://flagcdn.com/w320/ca.png'),
(4, 'United States', 'US', 'USA', '+1201', 'https://flagcdn.com/w320/us.png'),
(5, 'Bahamas', 'BS', 'BHS', '+1242', 'https://flagcdn.com/w320/bs.png'),
(6, 'Barbados', 'BB', 'BRB', '+1246', 'https://flagcdn.com/w320/bb.png'),
(7, 'Anguilla', 'AI', 'AIA', '+1264', 'https://flagcdn.com/w320/ai.png'),
(8, 'Antigua and Barbuda', 'AG', 'ATG', '+1268', 'https://flagcdn.com/w320/ag.png'),
(9, 'British Virgin Islands', 'VG', 'VGB', '+1284', 'https://flagcdn.com/w320/vg.png'),
(10, 'United States Virgin Islands', 'VI', 'VIR', '+1340', 'https://flagcdn.com/w320/vi.png'),
(11, 'Cayman Islands', 'KY', 'CYM', '+1345', 'https://flagcdn.com/w320/ky.png'),
(12, 'Bermuda', 'BM', 'BMU', '+1441', 'https://flagcdn.com/w320/bm.png'),
(13, 'Grenada', 'GD', 'GRD', '+1473', 'https://flagcdn.com/w320/gd.png'),
(14, 'Turks and Caicos Islands', 'TC', 'TCA', '+1649', 'https://flagcdn.com/w320/tc.png'),
(15, 'Montserrat', 'MS', 'MSR', '+1664', 'https://flagcdn.com/w320/ms.png'),
(16, 'Northern Mariana Islands', 'MP', 'MNP', '+1670', 'https://flagcdn.com/w320/mp.png'),
(17, 'Guam', 'GU', 'GUM', '+1671', 'https://flagcdn.com/w320/gu.png'),
(18, 'American Samoa', 'AS', 'ASM', '+1684', 'https://flagcdn.com/w320/as.png'),
(19, 'Sint Maarten', 'SX', 'SXM', '+1721', 'https://flagcdn.com/w320/sx.png'),
(20, 'Saint Lucia', 'LC', 'LCA', '+1758', 'https://flagcdn.com/w320/lc.png'),
(21, 'Dominica', 'DM', 'DMA', '+1767', 'https://flagcdn.com/w320/dm.png'),
(22, 'Saint Vincent and the Grenadines', 'VC', 'VCT', '+1784', 'https://flagcdn.com/w320/vc.png'),
(23, 'Puerto Rico', 'PR', 'PRI', '+1787', 'https://flagcdn.com/w320/pr.png'),
(24, 'Dominican Republic', 'DO', 'DOM', '+1809', 'https://flagcdn.com/w320/do.png'),
(25, 'Trinidad and Tobago', 'TT', 'TTO', '+1868', 'https://flagcdn.com/w320/tt.png'),
(26, 'Saint Kitts and Nevis', 'KN', 'KNA', '+1869', 'https://flagcdn.com/w320/kn.png'),
(27, 'Jamaica', 'JM', 'JAM', '+1876', 'https://flagcdn.com/w320/jm.png'),
(28, 'Egypt', 'EG', 'EGY', '+20', 'https://flagcdn.com/w320/eg.png'),
(29, 'South Sudan', 'SS', 'SSD', '+211', 'https://flagcdn.com/w320/ss.png'),
(30, 'Morocco', 'MA', 'MAR', '+212', 'https://flagcdn.com/w320/ma.png'),
(31, 'Western Sahara', 'EH', 'ESH', '+2125288', 'https://flagcdn.com/w320/eh.png'),
(32, 'Algeria', 'DZ', 'DZA', '+213', 'https://flagcdn.com/w320/dz.png'),
(33, 'Tunisia', 'TN', 'TUN', '+216', 'https://flagcdn.com/w320/tn.png'),
(34, 'Libya', 'LY', 'LBY', '+218', 'https://flagcdn.com/w320/ly.png'),
(35, 'Gambia', 'GM', 'GMB', '+220', 'https://flagcdn.com/w320/gm.png'),
(36, 'Senegal', 'SN', 'SEN', '+221', 'https://flagcdn.com/w320/sn.png'),
(37, 'Mauritania', 'MR', 'MRT', '+222', 'https://flagcdn.com/w320/mr.png'),
(38, 'Mali', 'ML', 'MLI', '+223', 'https://flagcdn.com/w320/ml.png'),
(39, 'Guinea', 'GN', 'GIN', '+224', 'https://flagcdn.com/w320/gn.png'),
(40, 'Ivory Coast', 'CI', 'CIV', '+225', 'https://flagcdn.com/w320/ci.png'),
(41, 'Burkina Faso', 'BF', 'BFA', '+226', 'https://flagcdn.com/w320/bf.png'),
(42, 'Niger', 'NE', 'NER', '+227', 'https://flagcdn.com/w320/ne.png'),
(43, 'Togo', 'TG', 'TGO', '+228', 'https://flagcdn.com/w320/tg.png'),
(44, 'Benin', 'BJ', 'BEN', '+229', 'https://flagcdn.com/w320/bj.png'),
(45, 'Mauritius', 'MU', 'MUS', '+230', 'https://flagcdn.com/w320/mu.png'),
(46, 'Liberia', 'LR', 'LBR', '+231', 'https://flagcdn.com/w320/lr.png'),
(47, 'Sierra Leone', 'SL', 'SLE', '+232', 'https://flagcdn.com/w320/sl.png'),
(48, 'Ghana', 'GH', 'GHA', '+233', 'https://flagcdn.com/w320/gh.png'),
(49, 'Nigeria', 'NG', 'NGA', '+234', 'https://flagcdn.com/w320/ng.png'),
(50, 'Chad', 'TD', 'TCD', '+235', 'https://flagcdn.com/w320/td.png'),
(51, 'Central African Republic', 'CF', 'CAF', '+236', 'https://flagcdn.com/w320/cf.png'),
(52, 'Cameroon', 'CM', 'CMR', '+237', 'https://flagcdn.com/w320/cm.png'),
(53, 'Cape Verde', 'CV', 'CPV', '+238', 'https://flagcdn.com/w320/cv.png'),
(54, 'São Tomé and Príncipe', 'ST', 'STP', '+239', 'https://flagcdn.com/w320/st.png'),
(55, 'Equatorial Guinea', 'GQ', 'GNQ', '+240', 'https://flagcdn.com/w320/gq.png'),
(56, 'Gabon', 'GA', 'GAB', '+241', 'https://flagcdn.com/w320/ga.png'),
(57, 'Republic of the Congo', 'CG', 'COG', '+242', 'https://flagcdn.com/w320/cg.png'),
(58, 'DR Congo', 'CD', 'COD', '+243', 'https://flagcdn.com/w320/cd.png'),
(59, 'Angola', 'AO', 'AGO', '+244', 'https://flagcdn.com/w320/ao.png'),
(60, 'Guinea-Bissau', 'GW', 'GNB', '+245', 'https://flagcdn.com/w320/gw.png'),
(61, 'British Indian Ocean Territory', 'IO', 'IOT', '+246', 'https://flagcdn.com/w320/io.png'),
(62, 'Seychelles', 'SC', 'SYC', '+248', 'https://flagcdn.com/w320/sc.png'),
(63, 'Sudan', 'SD', 'SDN', '+249', 'https://flagcdn.com/w320/sd.png'),
(64, 'Rwanda', 'RW', 'RWA', '+250', 'https://flagcdn.com/w320/rw.png'),
(65, 'Ethiopia', 'ET', 'ETH', '+251', 'https://flagcdn.com/w320/et.png'),
(66, 'Somalia', 'SO', 'SOM', '+252', 'https://flagcdn.com/w320/so.png'),
(67, 'Djibouti', 'DJ', 'DJI', '+253', 'https://flagcdn.com/w320/dj.png'),
(68, 'Kenya', 'KE', 'KEN', '+254', 'https://flagcdn.com/w320/ke.png'),
(69, 'Tanzania', 'TZ', 'TZA', '+255', 'https://flagcdn.com/w320/tz.png'),
(70, 'Uganda', 'UG', 'UGA', '+256', 'https://flagcdn.com/w320/ug.png'),
(71, 'Burundi', 'BI', 'BDI', '+257', 'https://flagcdn.com/w320/bi.png'),
(72, 'Mozambique', 'MZ', 'MOZ', '+258', 'https://flagcdn.com/w320/mz.png'),
(73, 'Zambia', 'ZM', 'ZMB', '+260', 'https://flagcdn.com/w320/zm.png'),
(74, 'Madagascar', 'MG', 'MDG', '+261', 'https://flagcdn.com/w320/mg.png'),
(75, 'Réunion', 'RE', 'REU', '+262', 'https://flagcdn.com/w320/re.png'),
(76, 'Mayotte', 'YT', 'MYT', '+262', 'https://flagcdn.com/w320/yt.png'),
(77, 'French Southern and Antarctic Lands', 'TF', 'ATF', '+262', 'https://flagcdn.com/w320/tf.png'),
(78, 'Zimbabwe', 'ZW', 'ZWE', '+263', 'https://flagcdn.com/w320/zw.png'),
(79, 'Namibia', 'NA', 'NAM', '+264', 'https://flagcdn.com/w320/na.png'),
(80, 'Malawi', 'MW', 'MWI', '+265', 'https://flagcdn.com/w320/mw.png'),
(81, 'Lesotho', 'LS', 'LSO', '+266', 'https://flagcdn.com/w320/ls.png'),
(82, 'Botswana', 'BW', 'BWA', '+267', 'https://flagcdn.com/w320/bw.png'),
(83, 'Eswatini', 'SZ', 'SWZ', '+268', 'https://flagcdn.com/w320/sz.png'),
(84, 'United States Minor Outlying Islands', 'UM', 'UMI', '+268', 'https://flagcdn.com/w320/um.png'),
(85, 'Comoros', 'KM', 'COM', '+269', 'https://flagcdn.com/w320/km.png'),
(86, 'South Africa', 'ZA', 'ZAF', '+27', 'https://flagcdn.com/w320/za.png'),
(87, 'Saint Helena, Ascension and Tristan da Cunha', 'SH', 'SHN', '+290', 'https://flagcdn.com/w320/sh.png'),
(88, 'Eritrea', 'ER', 'ERI', '+291', 'https://flagcdn.com/w320/er.png'),
(89, 'Aruba', 'AW', 'ABW', '+297', 'https://flagcdn.com/w320/aw.png'),
(90, 'Faroe Islands', 'FO', 'FRO', '+298', 'https://flagcdn.com/w320/fo.png'),
(91, 'Greenland', 'GL', 'GRL', '+299', 'https://flagcdn.com/w320/gl.png'),
(92, 'Greece', 'GR', 'GRC', '+30', 'https://flagcdn.com/w320/gr.png'),
(93, 'Netherlands', 'NL', 'NLD', '+31', 'https://flagcdn.com/w320/nl.png'),
(94, 'Belgium', 'BE', 'BEL', '+32', 'https://flagcdn.com/w320/be.png'),
(95, 'France', 'FR', 'FRA', '+33', 'https://flagcdn.com/w320/fr.png'),
(96, 'Spain', 'ES', 'ESP', '+34', 'https://flagcdn.com/w320/es.png'),
(97, 'Gibraltar', 'GI', 'GIB', '+350', 'https://flagcdn.com/w320/gi.png'),
(98, 'Portugal', 'PT', 'PRT', '+351', 'https://flagcdn.com/w320/pt.png'),
(99, 'Luxembourg', 'LU', 'LUX', '+352', 'https://flagcdn.com/w320/lu.png'),
(100, 'Ireland', 'IE', 'IRL', '+353', 'https://flagcdn.com/w320/ie.png'),
(101, 'Iceland', 'IS', 'ISL', '+354', 'https://flagcdn.com/w320/is.png'),
(102, 'Albania', 'AL', 'ALB', '+355', 'https://flagcdn.com/w320/al.png'),
(103, 'Malta', 'MT', 'MLT', '+356', 'https://flagcdn.com/w320/mt.png'),
(104, 'Cyprus', 'CY', 'CYP', '+357', 'https://flagcdn.com/w320/cy.png'),
(105, 'Finland', 'FI', 'FIN', '+358', 'https://flagcdn.com/w320/fi.png'),
(106, 'Åland Islands', 'AX', 'ALA', '+35818', 'https://flagcdn.com/w320/ax.png'),
(107, 'Bulgaria', 'BG', 'BGR', '+359', 'https://flagcdn.com/w320/bg.png'),
(108, 'Hungary', 'HU', 'HUN', '+36', 'https://flagcdn.com/w320/hu.png'),
(109, 'Lithuania', 'LT', 'LTU', '+370', 'https://flagcdn.com/w320/lt.png'),
(110, 'Latvia', 'LV', 'LVA', '+371', 'https://flagcdn.com/w320/lv.png'),
(111, 'Estonia', 'EE', 'EST', '+372', 'https://flagcdn.com/w320/ee.png'),
(112, 'Moldova', 'MD', 'MDA', '+373', 'https://flagcdn.com/w320/md.png'),
(113, 'Armenia', 'AM', 'ARM', '+374', 'https://flagcdn.com/w320/am.png'),
(114, 'Belarus', 'BY', 'BLR', '+375', 'https://flagcdn.com/w320/by.png'),
(115, 'Andorra', 'AD', 'AND', '+376', 'https://flagcdn.com/w320/ad.png'),
(116, 'Monaco', 'MC', 'MCO', '+377', 'https://flagcdn.com/w320/mc.png'),
(117, 'San Marino', 'SM', 'SMR', '+378', 'https://flagcdn.com/w320/sm.png'),
(118, 'Ukraine', 'UA', 'UKR', '+380', 'https://flagcdn.com/w320/ua.png'),
(119, 'Serbia', 'RS', 'SRB', '+381', 'https://flagcdn.com/w320/rs.png'),
(120, 'Montenegro', 'ME', 'MNE', '+382', 'https://flagcdn.com/w320/me.png'),
(121, 'Kosovo', 'XK', 'UNK', '+383', 'https://flagcdn.com/w320/xk.png'),
(122, 'Croatia', 'HR', 'HRV', '+385', 'https://flagcdn.com/w320/hr.png'),
(123, 'Slovenia', 'SI', 'SVN', '+386', 'https://flagcdn.com/w320/si.png'),
(124, 'Bosnia and Herzegovina', 'BA', 'BIH', '+387', 'https://flagcdn.com/w320/ba.png'),
(125, 'North Macedonia', 'MK', 'MKD', '+389', 'https://flagcdn.com/w320/mk.png'),
(126, 'Italy', 'IT', 'ITA', '+39', 'https://flagcdn.com/w320/it.png'),
(127, 'Vatican City', 'VA', 'VAT', '+3906698', 'https://flagcdn.com/w320/va.png'),
(128, 'Romania', 'RO', 'ROU', '+40', 'https://flagcdn.com/w320/ro.png'),
(129, 'Switzerland', 'CH', 'CHE', '+41', 'https://flagcdn.com/w320/ch.png'),
(130, 'Czechia', 'CZ', 'CZE', '+420', 'https://flagcdn.com/w320/cz.png'),
(131, 'Slovakia', 'SK', 'SVK', '+421', 'https://flagcdn.com/w320/sk.png'),
(132, 'Liechtenstein', 'LI', 'LIE', '+423', 'https://flagcdn.com/w320/li.png'),
(133, 'Austria', 'AT', 'AUT', '+43', 'https://flagcdn.com/w320/at.png'),
(134, 'Guernsey', 'GG', 'GGY', '+44', 'https://flagcdn.com/w320/gg.png'),
(135, 'United Kingdom', 'GB', 'GBR', '+44', 'https://flagcdn.com/w320/gb.png'),
(136, 'Isle of Man', 'IM', 'IMN', '+44', 'https://flagcdn.com/w320/im.png'),
(137, 'Jersey', 'JE', 'JEY', '+44', 'https://flagcdn.com/w320/je.png'),
(138, 'Denmark', 'DK', 'DNK', '+45', 'https://flagcdn.com/w320/dk.png'),
(139, 'Sweden', 'SE', 'SWE', '+46', 'https://flagcdn.com/w320/se.png'),
(140, 'Bouvet Island', 'BV', 'BVT', '+47', 'https://flagcdn.com/w320/bv.png'),
(141, 'Norway', 'NO', 'NOR', '+47', 'https://flagcdn.com/w320/no.png'),
(142, 'Svalbard and Jan Mayen', 'SJ', 'SJM', '+4779', 'https://flagcdn.com/w320/sj.png'),
(143, 'Poland', 'PL', 'POL', '+48', 'https://flagcdn.com/w320/pl.png'),
(144, 'Germany', 'DE', 'DEU', '+49', 'https://flagcdn.com/w320/de.png'),
(145, 'South Georgia', 'GS', 'SGS', '+500', 'https://flagcdn.com/w320/gs.png'),
(146, 'Falkland Islands', 'FK', 'FLK', '+500', 'https://flagcdn.com/w320/fk.png'),
(147, 'Belize', 'BZ', 'BLZ', '+501', 'https://flagcdn.com/w320/bz.png'),
(148, 'Guatemala', 'GT', 'GTM', '+502', 'https://flagcdn.com/w320/gt.png'),
(149, 'El Salvador', 'SV', 'SLV', '+503', 'https://flagcdn.com/w320/sv.png'),
(150, 'Honduras', 'HN', 'HND', '+504', 'https://flagcdn.com/w320/hn.png'),
(151, 'Nicaragua', 'NI', 'NIC', '+505', 'https://flagcdn.com/w320/ni.png'),
(152, 'Costa Rica', 'CR', 'CRI', '+506', 'https://flagcdn.com/w320/cr.png'),
(153, 'Panama', 'PA', 'PAN', '+507', 'https://flagcdn.com/w320/pa.png'),
(154, 'Saint Pierre and Miquelon', 'PM', 'SPM', '+508', 'https://flagcdn.com/w320/pm.png'),
(155, 'Haiti', 'HT', 'HTI', '+509', 'https://flagcdn.com/w320/ht.png'),
(156, 'Peru', 'PE', 'PER', '+51', 'https://flagcdn.com/w320/pe.png'),
(157, 'Mexico', 'MX', 'MEX', '+52', 'https://flagcdn.com/w320/mx.png'),
(158, 'Cuba', 'CU', 'CUB', '+53', 'https://flagcdn.com/w320/cu.png'),
(159, 'Argentina', 'AR', 'ARG', '+54', 'https://flagcdn.com/w320/ar.png'),
(160, 'Brazil', 'BR', 'BRA', '+55', 'https://flagcdn.com/w320/br.png'),
(161, 'Chile', 'CL', 'CHL', '+56', 'https://flagcdn.com/w320/cl.png'),
(162, 'Colombia', 'CO', 'COL', '+57', 'https://flagcdn.com/w320/co.png'),
(163, 'Venezuela', 'VE', 'VEN', '+58', 'https://flagcdn.com/w320/ve.png'),
(164, 'Saint Barthélemy', 'BL', 'BLM', '+590', 'https://flagcdn.com/w320/bl.png'),
(165, 'Guadeloupe', 'GP', 'GLP', '+590', 'https://flagcdn.com/w320/gp.png'),
(166, 'Saint Martin', 'MF', 'MAF', '+590', 'https://flagcdn.com/w320/mf.png'),
(167, 'Bolivia', 'BO', 'BOL', '+591', 'https://flagcdn.com/w320/bo.png'),
(168, 'Guyana', 'GY', 'GUY', '+592', 'https://flagcdn.com/w320/gy.png'),
(169, 'Ecuador', 'EC', 'ECU', '+593', 'https://flagcdn.com/w320/ec.png'),
(170, 'French Guiana', 'GF', 'GUF', '+594', 'https://flagcdn.com/w320/gf.png'),
(171, 'Paraguay', 'PY', 'PRY', '+595', 'https://flagcdn.com/w320/py.png'),
(172, 'Martinique', 'MQ', 'MTQ', '+596', 'https://flagcdn.com/w320/mq.png'),
(173, 'Suriname', 'SR', 'SUR', '+597', 'https://flagcdn.com/w320/sr.png'),
(174, 'Uruguay', 'UY', 'URY', '+598', 'https://flagcdn.com/w320/uy.png'),
(175, 'Caribbean Netherlands', 'BQ', 'BES', '+599', 'https://flagcdn.com/w320/bq.png'),
(176, 'Curaçao', 'CW', 'CUW', '+599', 'https://flagcdn.com/w320/cw.png'),
(177, 'Malaysia', 'MY', 'MYS', '+60', 'https://flagcdn.com/w320/my.png'),
(178, 'Christmas Island', 'CX', 'CXR', '+61', 'https://flagcdn.com/w320/cx.png'),
(179, 'Cocos (Keeling) Islands', 'CC', 'CCK', '+61', 'https://flagcdn.com/w320/cc.png'),
(180, 'Australia', 'AU', 'AUS', '+61', 'https://flagcdn.com/w320/au.png'),
(181, 'Indonesia', 'ID', 'IDN', '+62', 'https://flagcdn.com/w320/id.png'),
(182, 'Philippines', 'PH', 'PHL', '+63', 'https://flagcdn.com/w320/ph.png'),
(183, 'Pitcairn Islands', 'PN', 'PCN', '+64', 'https://flagcdn.com/w320/pn.png'),
(184, 'New Zealand', 'NZ', 'NZL', '+64', 'https://flagcdn.com/w320/nz.png'),
(185, 'Singapore', 'SG', 'SGP', '+65', 'https://flagcdn.com/w320/sg.png'),
(186, 'Thailand', 'TH', 'THA', '+66', 'https://flagcdn.com/w320/th.png'),
(187, 'Timor-Leste', 'TL', 'TLS', '+670', 'https://flagcdn.com/w320/tl.png'),
(188, 'Norfolk Island', 'NF', 'NFK', '+672', 'https://flagcdn.com/w320/nf.png'),
(189, 'Brunei', 'BN', 'BRN', '+673', 'https://flagcdn.com/w320/bn.png'),
(190, 'Nauru', 'NR', 'NRU', '+674', 'https://flagcdn.com/w320/nr.png'),
(191, 'Papua New Guinea', 'PG', 'PNG', '+675', 'https://flagcdn.com/w320/pg.png'),
(192, 'Tonga', 'TO', 'TON', '+676', 'https://flagcdn.com/w320/to.png'),
(193, 'Solomon Islands', 'SB', 'SLB', '+677', 'https://flagcdn.com/w320/sb.png'),
(194, 'Vanuatu', 'VU', 'VUT', '+678', 'https://flagcdn.com/w320/vu.png'),
(195, 'Fiji', 'FJ', 'FJI', '+679', 'https://flagcdn.com/w320/fj.png'),
(196, 'Palau', 'PW', 'PLW', '+680', 'https://flagcdn.com/w320/pw.png'),
(197, 'Wallis and Futuna', 'WF', 'WLF', '+681', 'https://flagcdn.com/w320/wf.png'),
(198, 'Cook Islands', 'CK', 'COK', '+682', 'https://flagcdn.com/w320/ck.png'),
(199, 'Niue', 'NU', 'NIU', '+683', 'https://flagcdn.com/w320/nu.png'),
(200, 'Samoa', 'WS', 'WSM', '+685', 'https://flagcdn.com/w320/ws.png'),
(201, 'Kiribati', 'KI', 'KIR', '+686', 'https://flagcdn.com/w320/ki.png'),
(202, 'New Caledonia', 'NC', 'NCL', '+687', 'https://flagcdn.com/w320/nc.png'),
(203, 'Tuvalu', 'TV', 'TUV', '+688', 'https://flagcdn.com/w320/tv.png'),
(204, 'French Polynesia', 'PF', 'PYF', '+689', 'https://flagcdn.com/w320/pf.png'),
(205, 'Tokelau', 'TK', 'TKL', '+690', 'https://flagcdn.com/w320/tk.png'),
(206, 'Micronesia', 'FM', 'FSM', '+691', 'https://flagcdn.com/w320/fm.png'),
(207, 'Marshall Islands', 'MH', 'MHL', '+692', 'https://flagcdn.com/w320/mh.png'),
(208, 'Russia', 'RU', 'RUS', '+73', 'https://flagcdn.com/w320/ru.png'),
(209, 'Kazakhstan', 'KZ', 'KAZ', '+76', 'https://flagcdn.com/w320/kz.png'),
(210, 'Japan', 'JP', 'JPN', '+81', 'https://flagcdn.com/w320/jp.png'),
(211, 'South Korea', 'KR', 'KOR', '+82', 'https://flagcdn.com/w320/kr.png'),
(212, 'Vietnam', 'VN', 'VNM', '+84', 'https://flagcdn.com/w320/vn.png'),
(213, 'North Korea', 'KP', 'PRK', '+850', 'https://flagcdn.com/w320/kp.png'),
(214, 'Hong Kong', 'HK', 'HKG', '+852', 'https://flagcdn.com/w320/hk.png'),
(215, 'Macau', 'MO', 'MAC', '+853', 'https://flagcdn.com/w320/mo.png'),
(216, 'Cambodia', 'KH', 'KHM', '+855', 'https://flagcdn.com/w320/kh.png'),
(217, 'Laos', 'LA', 'LAO', '+856', 'https://flagcdn.com/w320/la.png'),
(218, 'China', 'CN', 'CHN', '+86', 'https://flagcdn.com/w320/cn.png'),
(219, 'Bangladesh', 'BD', 'BGD', '+880', 'https://flagcdn.com/w320/bd.png'),
(220, 'Taiwan', 'TW', 'TWN', '+886', 'https://flagcdn.com/w320/tw.png'),
(221, 'Turkey', 'TR', 'TUR', '+90', 'https://flagcdn.com/w320/tr.png'),
(222, 'India', 'IN', 'IND', '+91', 'https://flagcdn.com/w320/in.png'),
(223, 'Pakistan', 'PK', 'PAK', '+92', 'https://flagcdn.com/w320/pk.png'),
(224, 'Afghanistan', 'AF', 'AFG', '+93', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/320px-Flag_of_the_Taliban.svg.png'),
(225, 'Sri Lanka', 'LK', 'LKA', '+94', 'https://flagcdn.com/w320/lk.png'),
(226, 'Myanmar', 'MM', 'MMR', '+95', 'https://flagcdn.com/w320/mm.png'),
(227, 'Maldives', 'MV', 'MDV', '+960', 'https://flagcdn.com/w320/mv.png'),
(228, 'Lebanon', 'LB', 'LBN', '+961', 'https://flagcdn.com/w320/lb.png'),
(229, 'Jordan', 'JO', 'JOR', '+962', 'https://flagcdn.com/w320/jo.png'),
(230, 'Syria', 'SY', 'SYR', '+963', 'https://flagcdn.com/w320/sy.png'),
(231, 'Iraq', 'IQ', 'IRQ', '+964', 'https://flagcdn.com/w320/iq.png'),
(232, 'Kuwait', 'KW', 'KWT', '+965', 'https://flagcdn.com/w320/kw.png'),
(233, 'Saudi Arabia', 'SA', 'SAU', '+966', 'https://flagcdn.com/w320/sa.png'),
(234, 'Yemen', 'YE', 'YEM', '+967', 'https://flagcdn.com/w320/ye.png'),
(235, 'Oman', 'OM', 'OMN', '+968', 'https://flagcdn.com/w320/om.png'),
(236, 'Palestine', 'PS', 'PSE', '+970', 'https://flagcdn.com/w320/ps.png'),
(237, 'United Arab Emirates', 'AE', 'ARE', '+971', 'https://flagcdn.com/w320/ae.png'),
(238, 'Israel', 'IL', 'ISR', '+972', 'https://flagcdn.com/w320/il.png'),
(239, 'Bahrain', 'BH', 'BHR', '+973', 'https://flagcdn.com/w320/bh.png'),
(240, 'Qatar', 'QA', 'QAT', '+974', 'https://flagcdn.com/w320/qa.png'),
(241, 'Bhutan', 'BT', 'BTN', '+975', 'https://flagcdn.com/w320/bt.png'),
(242, 'Mongolia', 'MN', 'MNG', '+976', 'https://flagcdn.com/w320/mn.png'),
(243, 'Nepal', 'NP', 'NPL', '+977', 'https://flagcdn.com/w320/np.png'),
(244, 'Iran', 'IR', 'IRN', '+98', 'https://flagcdn.com/w320/ir.png'),
(245, 'Tajikistan', 'TJ', 'TJK', '+992', 'https://flagcdn.com/w320/tj.png'),
(246, 'Turkmenistan', 'TM', 'TKM', '+993', 'https://flagcdn.com/w320/tm.png'),
(247, 'Azerbaijan', 'AZ', 'AZE', '+994', 'https://flagcdn.com/w320/az.png'),
(248, 'Georgia', 'GE', 'GEO', '+995', 'https://flagcdn.com/w320/ge.png'),
(249, 'Kyrgyzstan', 'KG', 'KGZ', '+996', 'https://flagcdn.com/w320/kg.png'),
(250, 'Uzbekistan', 'UZ', 'UZB', '+998', 'https://flagcdn.com/w320/uz.png');

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
  `country` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
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
(8, 'Adnan', 'Rahim', 'adnan1', 'arkaka0092@gmail.com', '$2y$10$XtY7Vk83jWuF4hJLFDEmLuGvq99i6MGajOD9v2Jw8DerEE8M7bMoy', '02032948394', 'South Georgia', 'uploads/profile_pics/profile_66e084b28fbd30.96024971.jpg', 'Karachi', 'central jacob', '75520', 0, '5c1274f604813d971ec70705d82840f2', 1, '2024-09-07 18:53:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credit_prices`
--
ALTER TABLE `credit_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecu`
--
ALTER TABLE `ecu`
  ADD PRIMARY KEY (`ecu_id`),
  ADD KEY `engine_id` (`engine_id`);

--
-- Indexes for table `engines`
--
ALTER TABLE `engines`
  ADD PRIMARY KEY (`engine_id`),
  ADD KEY `generation_id` (`generation_id`);

--
-- Indexes for table `file_service`
--
ALTER TABLE `file_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generations`
--
ALTER TABLE `generations`
  ADD PRIMARY KEY (`generation_id`),
  ADD KEY `model_id` (`model_id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`model_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `read_method`
--
ALTER TABLE `read_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_files`
--
ALTER TABLE `service_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcountries`
--
ALTER TABLE `tblcountries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `credit_prices`
--
ALTER TABLE `credit_prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ecu`
--
ALTER TABLE `ecu`
  MODIFY `ecu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `engines`
--
ALTER TABLE `engines`
  MODIFY `engine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `file_service`
--
ALTER TABLE `file_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generations`
--
ALTER TABLE `generations`
  MODIFY `generation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `read_method`
--
ALTER TABLE `read_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_files`
--
ALTER TABLE `service_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcountries`
--
ALTER TABLE `tblcountries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ecu`
--
ALTER TABLE `ecu`
  ADD CONSTRAINT `engine_id` FOREIGN KEY (`engine_id`) REFERENCES `engines` (`engine_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `engines`
--
ALTER TABLE `engines`
  ADD CONSTRAINT `generation_id` FOREIGN KEY (`generation_id`) REFERENCES `generations` (`generation_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `generations`
--
ALTER TABLE `generations`
  ADD CONSTRAINT `model_id` FOREIGN KEY (`model_id`) REFERENCES `models` (`model_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `models`
--
ALTER TABLE `models`
  ADD CONSTRAINT `brand_id` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
