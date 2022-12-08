-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 02:30 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wheels&deals`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessory`
--

CREATE TABLE `accessory` (
  `fitting_id` varchar(255) NOT NULL,
  `booking_id` varchar(255) NOT NULL,
  `u_id` varchar(255) NOT NULL,
  `mirror` varchar(255) NOT NULL,
  `speedometer` varchar(255) NOT NULL,
  `stand` varchar(255) NOT NULL,
  `Charger` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accessory`
--

INSERT INTO `accessory` (`fitting_id`, `booking_id`, `u_id`, `mirror`, `speedometer`, `stand`, `Charger`) VALUES
('FWD-10284', 'WD-102531', 'UWD-1037', 'Chrome-Mirror', 'Digital', 'W/O-Center-Stand', 'Charger'),
('FWD-10499', 'WD-101678', 'UWD-789', 'Chrome-Mirror', 'Analog', 'W/O-Center-Stand', 'Charger'),
('FWD-10557', 'WD-103185', 'UWD-1200', 'Chrome-Mirror', 'Analog', 'W-Center-Stand', 'Charger'),
('FWD-10586', 'WD-106165', 'UWD-1181', 'Plane-Mirror', 'Analog', 'W/O-Center-Stand', 'Charger'),
('FWD-10732', 'WD-102643', 'UWD-944', 'Plane-Mirror', 'Digital', 'W-Center-Stand', 'Charger'),
('FWD-10906', 'WD-101099', 'UWD-845', 'Chrome-Mirror', 'Analog', 'W/O-Center-Stand', 'Charger'),
('FWD-10931', 'WD-112997', 'UWD-1186', 'Chrome-Mirror', 'Analog', 'W-Center-Stand', 'Charger');

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `a_id` int(10) NOT NULL,
  `a_username` varchar(50) NOT NULL,
  `a_password` varchar(100) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`a_id`, `a_username`, `a_password`, `a_name`, `a_email`) VALUES
(6, 'yathin-admin', 'admin', 'Yathin_Admin', 'yathinyoyo.6055@gmail.com'),
(8, 'tejas-admin', 'admin', 'Tejas_Admin', 'stejas2002@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `u_id` varchar(255) NOT NULL,
  `booking_id` varchar(255) NOT NULL,
  `location_` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `varient` varchar(255) NOT NULL,
  `ex-showroom` int(255) NOT NULL,
  `accessory_price` int(255) NOT NULL,
  `road_tax` int(255) NOT NULL,
  `insurance` int(255) NOT NULL,
  `total_bill` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`u_id`, `booking_id`, `location_`, `color`, `model`, `varient`, `ex-showroom`, `accessory_price`, `road_tax`, `insurance`, `total_bill`) VALUES
('UWD-1037', 'WD-102531', 'Yelanka', 'Black', 'Access-125', '', 75000, 4000, 10000, 2000, 92000);

-- --------------------------------------------------------

--
-- Table structure for table `stock_price`
--

CREATE TABLE `stock_price` (
  `vechile_id` int(11) NOT NULL,
  `vehicle_name` varchar(255) NOT NULL,
  `available` varchar(255) NOT NULL,
  `ex_showroom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_price`
--

INSERT INTO `stock_price` (`vechile_id`, `vehicle_name`, `available`, `ex_showroom`) VALUES
(1, 'Activa 6G', 'Available', '70000'),
(2, 'Access 125', 'Not-Available', '75000'),
(3, 'Jupiter 125', 'Available', '80000');

-- --------------------------------------------------------

--
-- Table structure for table `test_ride`
--

CREATE TABLE `test_ride` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob_no` varchar(12) NOT NULL,
  `model` varchar(10) NOT NULL,
  `location_` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_ride`
--

INSERT INTO `test_ride` (`name`, `email`, `mob_no`, `model`, `location_`) VALUES
('Anusha', 'anusha@gmail.com', '123456789', 'Jupiter 12', 'Yelahanka'),
('Varsha chennur', 'chennurvarshag@gmail.com', '8147191253', 'Jupiter 12', 'Koramangla'),
('Tejas', 'stejas2002@gmail.com', '9353931335', 'Activa 6G', 'Vijaynagar'),
('Suchith', 'suchith@gmail.com', '9902498765', 'Activa 6G', 'Indranagar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` varchar(255) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `first_name`, `last_name`, `email`, `username`, `password`) VALUES
('UWD-1181', 'Vinay ', 'Kumar', 'vinaykumarbm03@gmail.com', 'vinay03', '$2y$10$AW99HNFoiAx7CoYuhUjpju7vWrEvGJeswLP9WiQZvLIZ468iXXPyu'),
('UWD-1186', 'Varsha', 'chennur', 'chennurvarshag@gmail.com', 'varshachennur', '$2y$10$s4MbGx9aLe/450cC1Z5meeS.sUObnX57Fxy2tExQHDYHKqu82pyg2'),
('UWD-1200', 'guru', 'charan', 'guruchiru8147@gmail.com', 'guru10', '$2y$10$SLZWb8L9uzbtPeJWScrqeeHskL2vNQagV1axODaeFxPVc5gxG311y'),
('UWD-789', 'Tejas', 'Srinivas', 'stejas2002@gmail.com', 'tejas2002', '$2y$10$EvED7V8huULM.XKoc9zgcuacuv4TUlv/Q6jCJyNZORmc5fVJGUQWm'),
('UWD-845', 'Pratibha ', 'Javalagi', 'pratibhakj02@gmail.com', 'pratibha_kj', '$2y$10$ghbyOmycS3M/G4Qxh1fdWu8YrVQxhtBeTT8T2r0DIA85Uod/YhrNq'),
('UWD-944', 'Chethan ', 'BG', 'cchethangurumurthy@gmail.com', 'chethu', '$2y$10$yRCPnsWA6xPlnx04b5Fnme9/DpHoht80v9PvDXHPRmBldpBDi69Y.');

-- --------------------------------------------------------

--
-- Table structure for table `user_verification`
--

CREATE TABLE `user_verification` (
  `u_id` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `aadhar_no` varchar(50) NOT NULL,
  `driving_license` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_verification`
--

INSERT INTO `user_verification` (`u_id`, `firstname`, `lastname`, `aadhar_no`, `driving_license`) VALUES
('UWD-789', 'Tejas', 'Srinivas', '7109-7199-2596', 'KA01-123456'),
('UWD-1186', 'Varsha', 'chennur', '6243-1234-5678', 'KA01-202027092002'),
('UWD-1200', 'guru', 'charan', '2829-2029-8587', 'KA01-456789032'),
('UWD-1181', 'Vinay ', 'Kumar', '8974-4561-6548', 'KA04-346854678'),
('UWD-944', 'Chethan ', 'BG', '5644-8547-5251', 'KA04-567854235'),
('UWD-845', 'Pratibha ', 'Javalagi', '8971-6547-1235', 'KA25-9865741236');

-- --------------------------------------------------------

--
-- Table structure for table `vechile_booking`
--

CREATE TABLE `vechile_booking` (
  `booking_id` varchar(255) NOT NULL,
  `u_id` varchar(255) NOT NULL,
  `email_` varchar(50) NOT NULL,
  `ph_no` varchar(255) NOT NULL,
  `vechile_id` int(10) NOT NULL,
  `model` varchar(50) NOT NULL,
  `location_` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `varient` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vechile_booking`
--

INSERT INTO `vechile_booking` (`booking_id`, `u_id`, `email_`, `ph_no`, `vechile_id`, `model`, `location_`, `color`, `varient`) VALUES
('WD-101099', 'UWD-845', 'pratibhakj02@gmail.com', '+91-6360424399', 3, 'Jupiter-125', 'Vijaynagar', 'Silver', 'DISC-BRACK-ALLOY'),
('WD-101678', 'UWD-789', 'stejas2002@gmail.com', '+91-9353931335', 1, 'Activa-6G', 'Indranagar', 'Silver', 'DISC-BRACK-W/O-ALLOY'),
('WD-102643', 'UWD-944', 'cchethangurumurthy@gmail.com', '+91-9591960282', 2, 'Access-125', 'Vijaynagar', 'Black', 'DISC-BRACK-ALLOY'),
('WD-103185', 'UWD-1200', 'guruchiru8147@gmail.com', '+91-9148054148', 3, 'Jupiter-125', 'Vijaynagar', 'Brown', 'DISC-BRACK-ALLOY'),
('WD-106165', 'UWD-1181', 'vinaykumarbm03@gmail.com', '+91-8971659604', 2, 'Access-125', 'Vijaynagar', 'White', 'DISC-BRACK-ALLOY'),
('WD-112997', 'UWD-1186', 'chennurvarshag@gmail.com', '+91-8147191253', 3, 'Jupiter-125', 'Koramangla', 'White', 'DISC-BRACK-ALLOY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessory`
--
ALTER TABLE `accessory`
  ADD PRIMARY KEY (`fitting_id`),
  ADD UNIQUE KEY `booking_id` (`booking_id`),
  ADD UNIQUE KEY `u_id` (`u_id`);

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `a_username` (`a_username`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD UNIQUE KEY `u_id` (`u_id`),
  ADD UNIQUE KEY `booking_id` (`booking_id`);

--
-- Indexes for table `stock_price`
--
ALTER TABLE `stock_price`
  ADD PRIMARY KEY (`vechile_id`);

--
-- Indexes for table `test_ride`
--
ALTER TABLE `test_ride`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mob_no` (`mob_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_verification`
--
ALTER TABLE `user_verification`
  ADD UNIQUE KEY `license_no` (`driving_license`),
  ADD UNIQUE KEY `u_id` (`u_id`);

--
-- Indexes for table `vechile_booking`
--
ALTER TABLE `vechile_booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD UNIQUE KEY `first_name` (`u_id`),
  ADD UNIQUE KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stock_price`
--
ALTER TABLE `stock_price`
  MODIFY `vechile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
