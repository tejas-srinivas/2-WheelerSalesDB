-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 02:54 PM
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
  `u_id` int(50) NOT NULL,
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
(9, 'Tejas', 'Srinivas', 'stejas2002@gmail.com', 'tejas2002', '$2y$10$pp2h7pCZegqEnSPNFw.jxu6eCyo10NqqmArbxSbXKdO2D/CYQAGhq'),
(10, 'Yathin', 'BN', 'yathinyoyo@gmail.com', 'yathin2002', '$2y$10$jTCyuW3TSaHfU6ndnuelbuqCDokWLRuJFCFlFgloZTifxWZRaA3/O'),
(11, 'Suchith', 'R', 'suchith@gmail.com', 'suchith2002', '$2y$10$jPIpQWUpCafQ.U4CqBJJp..dGd2wlzX.RbDJa3O7J92asXtvl5ctq'),
(12, 'Janhavi', 'S', 'janhavi@gmail.com', 'janhavi1997', '$2y$10$nVHuO2/zSFtMoMtmHxyGnuZGB.iggLFH0dcwnG/ASzJUgEz4YSDoG'),
(13, 'Akshitha', 'B', 'akshiii599@gmail.com', 'akshitha', '$2y$10$x0XzIj7YWMIlF6bsd6AIluXJtgSV0ojg7yc7TEYgCvURUbZsrIkVC');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `b_id` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `aadhar_no` varchar(50) NOT NULL,
  `driving_license` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`b_id`, `firstname`, `lastname`, `aadhar_no`, `driving_license`) VALUES
(1, 'Tejas', 'Srinivas', '7109-7199-2596', 'KA52-202015494'),
(20, 'Tejas', 'Srinivas', '123456789012', 'KA52202015497'),
(21, 'Tejas', 'Srinivas', '123456789013', 'KA52-202015468'),
(23, 'Tejas', 'Srinivas', '7109-7199-2597', 'KA52-202015469');

-- --------------------------------------------------------

--
-- Table structure for table `vechile_booking`
--

CREATE TABLE `vechile_booking` (
  `email_` varchar(50) NOT NULL,
  `ph_no` int(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `location_` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `varient` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vechile_booking`
--

INSERT INTO `vechile_booking` (`email_`, `ph_no`, `model`, `location_`, `color`, `varient`) VALUES
('stejas2002@gmail.com', 1234567890, 'Access-125', 'Vijaynagar', 'Silver', 'DISC-BRACK-ALLOY');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`b_id`),
  ADD UNIQUE KEY `license_no` (`driving_license`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `b_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
