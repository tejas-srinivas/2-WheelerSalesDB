-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 04:35 PM
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
('FWD-10499', 'WD-101678', 'UWD-789', 'Chrome-Mirror', 'Analog', 'W/O-Center-Stand', 'Charger');

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `a_id` int(10) NOT NULL,
  `a_username` varchar(50) NOT NULL,
  `a_password` varchar(100) NOT NULL,
  `a_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`a_id`, `a_username`, `a_password`, `a_name`) VALUES
(6, 'yathin-admin', 'admin', 'Yathin_Admin'),
(8, 'tejas-admin', 'admin', 'Tejas_Admin');

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
('10', 'Yathin', 'BN', 'yathinyoyo@gmail.com', 'yathin2002', '$2y$10$jTCyuW3TSaHfU6ndnuelbuqCDokWLRuJFCFlFgloZTifxWZRaA3/O'),
('UWD-789', 'Tejas', 'Srinivas', 'stejas2002@gmail.com', 'tejas2002', '$2y$10$EvED7V8huULM.XKoc9zgcuacuv4TUlv/Q6jCJyNZORmc5fVJGUQWm');

-- --------------------------------------------------------

--
-- Table structure for table `user_verification`
--

CREATE TABLE `user_verification` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `aadhar_no` varchar(50) NOT NULL,
  `driving_license` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_verification`
--

INSERT INTO `user_verification` (`firstname`, `lastname`, `aadhar_no`, `driving_license`) VALUES
('Tejas', 'Srinivas', '7109-7199-2596', 'KA01-123456');

-- --------------------------------------------------------

--
-- Table structure for table `vechile_booking`
--

CREATE TABLE `vechile_booking` (
  `booking_id` varchar(255) NOT NULL,
  `u_id` varchar(255) NOT NULL,
  `email_` varchar(50) NOT NULL,
  `ph_no` varchar(255) NOT NULL,
  `model` varchar(50) NOT NULL,
  `location_` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `varient` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vechile_booking`
--

INSERT INTO `vechile_booking` (`booking_id`, `u_id`, `email_`, `ph_no`, `model`, `location_`, `color`, `varient`) VALUES
('WD-101678', 'UWD-789', 'stejas2002@gmail.com', '+91-9353931335', 'Activa-6G', 'Indranagar', 'Silver', 'DISC-BRACK-W/O-ALLOY');

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
  ADD UNIQUE KEY `license_no` (`driving_license`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
