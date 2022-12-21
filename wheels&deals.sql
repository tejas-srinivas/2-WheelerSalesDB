-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 06:07 PM
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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `count_users` ()   BEGIN
	SELECT COUNT(*) AS Total_users FROM users;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_logs` (IN `email` VARCHAR(255), IN `ph_no` VARCHAR(255), IN `vechile_id` VARCHAR(255), IN `model` VARCHAR(255), IN `location` VARCHAR(255), IN `color` VARCHAR(255), IN `varient` VARCHAR(255), IN `booking_id` VARCHAR(255))   BEGIN
UPDATE `vechile_booking` SET `email_` = 'email', `ph_no` = 'ph_no',`vechile_id` = 'vechile_id',`model`='model',`location_` = 'location' , `color`='color' , `varient`='varient' WHERE `bills`.`booking_id` = 'booking_id';

UPDATE `bills` SET `model`='model',`color`='color', `varient`='varient',`location_` = 'location' WHERE `bills`.`booking_id` = 'booking_id';

END$$

DELIMITER ;

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
('FWD-10281', 'WD-118719', 'UWD-1137', 'Chrome-Mirror', 'Digital', 'W-Center-Stand', 'Charger'),
('FWD-10284', 'WD-102531', 'UWD-1037', 'Chrome-Mirror', 'Digital', 'W/O-Center-Stand', 'Charger'),
('FWD-10557', 'WD-103185', 'UWD-1200', 'Chrome-Mirror', 'Analog', 'W-Center-Stand', 'Charger'),
('FWD-10586', 'WD-106165', 'UWD-1181', 'Plane-Mirror', 'Analog', 'W/O-Center-Stand', 'Charger'),
('FWD-10655', 'WD-107427', 'UWD-967', 'Chrome-Mirror', 'Digital', 'W-Center-Stand', 'Charger'),
('FWD-10779', 'WD-104383', 'UWD-1123', 'Plane-Mirror', 'Digital', 'W-Center-Stand', 'Charger'),
('FWD-10906', 'WD-101099', 'UWD-845', 'Chrome-Mirror', 'Analog', 'W/O-Center-Stand', 'Charger'),
('FWD-10931', 'WD-112997', 'UWD-1186', 'Chrome-Mirror', 'Analog', 'W-Center-Stand', 'Charger'),
('FWD-10952', 'WD-112078', 'UWD-766', 'Plane-Mirror', 'Digital', 'W-Center-Stand', 'Charger'),
('FWD-10994', 'WD-116805', 'UWD-980', 'Chrome-Mirror', 'Analog', 'W/O-Center-Stand', 'Charger'),
('FWD-11075', 'WD-112640', 'UWD-789', 'Chrome-Mirror', 'Analog', 'W-Center-Stand', 'Charger'),
('FWD-11451', 'WD-113295', 'UWD-883', 'Chrome-Mirror', 'Analog', 'W-Center-Stand', 'Charger'),
('FWD-11641', 'WD-112936', 'UWD-995', 'Chrome-Mirror', 'Analog', 'W-Center-Stand', 'Charger'),
('FWD-11873', 'WD-118420', 'UWD-944', 'Chrome-Mirror', 'Analog', 'W-Center-Stand', 'Charger');

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
  `booking_id` varchar(255) NOT NULL,
  `delv_date` varchar(20) NOT NULL,
  `model` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `varient` varchar(255) NOT NULL,
  `location_` varchar(255) NOT NULL,
  `ex_showroom` int(255) NOT NULL,
  `accessory_price` int(255) NOT NULL,
  `road_tax` int(255) NOT NULL,
  `insurance` int(255) NOT NULL,
  `total_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`booking_id`, `delv_date`, `model`, `color`, `varient`, `location_`, `ex_showroom`, `accessory_price`, `road_tax`, `insurance`, `total_price`) VALUES
('WD-101099', '2022-12-16', 'Activa-6G', 'White', 'DISC-BRACK-ALLOY', 'Vijaynagar', 80000, 4325, 10500, 2500, 97325),
('WD-104383', '2022-12-17', 'Activa-6G', 'Black', 'DISC-BRACK-ALLOY', 'Yelahanka', 75000, 4325, 10500, 2500, 92325),
('WD-112640', '2022-12-28', 'Access-125', 'Wine_Red', 'DISC-BRACK-ALLOY', 'Indranagar', 75000, 4325, 10500, 2500, 92325),
('WD-116805', '2022-11-18', 'Access-125', 'Aqua_Green', 'DISC-BRACK-W/O-ALLOY', 'Yelahanka', 75000, 4325, 10500, 2500, 92325),
('WD-118420', '2022-11-8', 'Jupiter-125', 'Aqua_Green', 'DISC-BRACK-ALLOY', 'Indranagar', 80000, 4325, 10500, 2500, 97325);

-- --------------------------------------------------------

--
-- Table structure for table `stock_price`
--

CREATE TABLE `stock_price` (
  `vechile_id` int(11) NOT NULL,
  `vehicle_name` varchar(20) NOT NULL,
  `available` varchar(20) NOT NULL,
  `ex_showroom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_price`
--

INSERT INTO `stock_price` (`vechile_id`, `vehicle_name`, `available`, `ex_showroom`) VALUES
(1, 'Activa 6G', 'Available', '75000'),
(2, 'Access 125', 'Available', '75000'),
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
('Akshitha', 'akshiii599@gmail.com', '8147191252', 'Access 125', 'Indranagar'),
('Anusha', 'anusha@gmail.com', '8660993690', 'Jupiter 12', 'Yelahanka'),
('Varsha', 'chennurvarshag@gmail.com', '8147191253', 'Jupiter 12', 'Koramangla'),
('Pratibha', 'pratibhakj02@gmail.com', '6360424399', 'Activa 6G', 'Koramangla'),
('Tejas', 'stejas2002@gmail.com', '9353931335', 'Activa 6G', 'Vijaynagar'),
('Suchith', 'suchith@gmail.com', '9902498765', 'Activa 6G', 'Indranagar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` varchar(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `first_name`, `last_name`, `email`, `username`, `password`) VALUES
('UWD-1123', 'Janhavi', 'Srinivas', 'reachjanhavi@gmail.com', 'janhavi1997', '$2y$10$MPa1iYotaBsSyqZ0Peg.O.N015dvE4qCakzqHubyrPh/1lx7CYci.'),
('UWD-789', 'Tejas', 'Srinivas', 'stejas2002@gmail.com', 'tejas2002', '$2y$10$EvED7V8huULM.XKoc9zgcuacuv4TUlv/Q6jCJyNZORmc5fVJGUQWm'),
('UWD-845', 'Pratibha ', 'Javalagi', 'pratibhakj02@gmail.com', 'pratibha_kj', '$2y$10$ghbyOmycS3M/G4Qxh1fdWu8YrVQxhtBeTT8T2r0DIA85Uod/YhrNq'),
('UWD-944', 'Chethan ', 'BG', 'cchethangurumurthy@gmail.com', 'chethu', '$2y$10$yRCPnsWA6xPlnx04b5Fnme9/DpHoht80v9PvDXHPRmBldpBDi69Y.'),
('UWD-967', 'SUMANTH', 'M', 'sumanthjamadagni2002@gmail.com', 'SUMANTH', '$2y$10$QCnZoKR8i0bnwvn.cAupGuXdctujNSzep3sol1XzrPbsTtVgY1egu'),
('UWD-980', 'Yathin', 'B N', 'yathinyoyo.6055@gmail.com', 'yathin123', '$2y$10$nPg7sIHnp6le37EyFefp8erz7zsJ3Kl88vE5inCZyBknU1/k8QrnG'),
('UWD-995', 'Vikas ', 'S', 'vikasbidre@gmail.com', 'Viki', '$2y$10$u5DrBSRJWNxttLf5Lxv5P.i8d4SWiROE3PvVeTCrwX0LVSTTf2azK');

-- --------------------------------------------------------

--
-- Table structure for table `user_verification`
--

CREATE TABLE `user_verification` (
  `u_id` varchar(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `aadhar_no` varchar(15) NOT NULL,
  `driving_license` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_verification`
--

INSERT INTO `user_verification` (`u_id`, `firstname`, `lastname`, `aadhar_no`, `driving_license`) VALUES
('UWD-1123', 'Janhavi', 'Srinivas', '8264-1034-9625', 'KA01-202065215'),
('UWD-789', 'Tejas', 'Srinivas', '7109-7199-2596', 'KA01-202075315'),
('UWD-944', 'Chethan ', 'BG', '7109-7199-9625', 'KA01-202075316'),
('UWD-980', 'Yathin', 'B N', '9017-9917-6952', 'KA03-202076589'),
('UWD-845', 'Pratibha ', 'Javalagi', '8971-6547-1235 ', 'KA25-986574123'),
('UWD-967', 'SUMANTH', 'M', '8189-3142-2221', 'KA41-202015644'),
('UWD-995', 'Vikas ', 'S', '7956-5679-9867', 'KA52-202055467');

-- --------------------------------------------------------

--
-- Table structure for table `vechile_booking`
--

CREATE TABLE `vechile_booking` (
  `booking_id` varchar(10) NOT NULL,
  `u_id` varchar(10) NOT NULL,
  `email_` varchar(50) NOT NULL,
  `ph_no` varchar(15) NOT NULL,
  `vechile_id` int(10) NOT NULL,
  `model` varchar(10) NOT NULL,
  `location_` varchar(20) NOT NULL,
  `color` varchar(10) NOT NULL,
  `varient` varchar(20) NOT NULL,
  `status` varchar(255) NOT NULL,
  `book_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vechile_booking`
--

INSERT INTO `vechile_booking` (`booking_id`, `u_id`, `email_`, `ph_no`, `vechile_id`, `model`, `location_`, `color`, `varient`, `status`, `book_date`) VALUES
('WD-101099', 'UWD-845', 'pratibhakj02@gmail.com', '+91-6360424399', 1, 'Activa-6G', 'Vijaynagar', 'White', 'DISC-BRACK-ALLOY', 'Processing', '2022-12-09 08:13:04'),
('WD-104383', 'UWD-1123', 'reachjanhavi@gmail.com', '+91-7760549445', 1, 'Activa-6G', 'Yelahanka', 'Black', 'DISC-BRACK-ALLOY', 'Processing', '2022-12-10 22:41:37'),
('WD-112640', 'UWD-789', 'stejas2002@gmail.com', '+91-9353931335', 2, 'Access-125', 'Indranagar', 'Wine_Red', 'DISC-BRACK-ALLOY', 'Processing', '21-12-2022 06:03:54'),
('WD-116805', 'UWD-980', 'yathinyoyo@gmail.com', '+91-9620581947', 2, 'Access-125', 'Yelahanka', 'Aqua_Green', 'DISC-BRACK-W/O-ALLOY', 'Delivered', '2022-11-11 06:46:04'),
('WD-118420', 'UWD-944', 'chethanmurthy@gmail.com', '+91-9591960282', 3, 'Jupiter-12', 'Indranagar', 'Aqua_Green', 'DISC-BRACK-ALLOY', 'Processing', '2022-12-01 16:29:42');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
