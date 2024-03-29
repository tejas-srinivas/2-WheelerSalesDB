-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 07:37 PM
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `BOOKING` (IN `bid` VARCHAR(255) CHARSET utf8mb4, IN `uid` VARCHAR(255) CHARSET utf8mb4, IN `email` VARCHAR(255) CHARSET utf8mb4, IN `phno` VARCHAR(255) CHARSET utf8mb4, IN `vid` VARCHAR(255) CHARSET utf8mb4, IN `model` VARCHAR(255) CHARSET utf8mb4, IN `location` VARCHAR(255) CHARSET utf8mb4, IN `color` VARCHAR(255) CHARSET utf8mb4, IN `varient` VARCHAR(255) CHARSET utf8mb4, IN `status` VARCHAR(255) CHARSET utf8mb4, IN `bdate` VARCHAR(255) CHARSET utf8mb4)   BEGIN
INSERT INTO vechile_booking(booking_id,u_id,email_,ph_no,vechile_id,model,location_,color,varient,status,book_date) VALUES (bid,uid,email,phno,vid,model,location,color,varient,status,bdate);  
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EXSHOWROOM` (IN `avail` VARCHAR(255) CHARSET utf8mb4, IN `showroom` VARCHAR(255) CHARSET utf8mb4, IN `vid` VARCHAR(255) CHARSET utf8mb4)   BEGIN
UPDATE `stock_price` SET  `available` = avail, `ex_showroom` = showroom WHERE `vechile_id` = vid;
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
('FWD-10247', 'WD-109274', 'UWD-1143', 'Chrome-Mirror', 'Digital', 'W-Center-Stand', 'Charger'),
('FWD-10496', 'WD-104067', 'UWD-876', 'Chrome-Mirror', 'Analog', 'W-Center-Stand', 'Charger'),
('FWD-10668', 'WD-113659', 'UWD-1127', 'Chrome-Mirror', 'Analog', 'W-Center-Stand', 'Charger'),
('FWD-10678', 'WD-119403', 'UWD-785', 'Plane-Mirror', 'Analog', 'W/O-Center-Stand', 'Charger'),
('FWD-10779', 'WD-104383', 'UWD-1123', 'Plane-Mirror', 'Digital', 'W-Center-Stand', 'Charger'),
('FWD-10906', 'WD-101099', 'UWD-845', 'Chrome-Mirror', 'Analog', 'W/O-Center-Stand', 'Charger'),
('FWD-10994', 'WD-116805', 'UWD-980', 'Chrome-Mirror', 'Analog', 'W/O-Center-Stand', 'Charger'),
('FWD-11075', 'WD-112640', 'UWD-789', 'Chrome-Mirror', 'Analog', 'W-Center-Stand', 'Charger'),
('FWD-11280', 'WD-117883', 'UWD-1121', 'Plane-Mirror', 'Analog', 'W-Center-Stand', 'Charger'),
('FWD-11371', 'WD-115640', 'UWD-1101', 'Chrome-Mirror', 'Digital', 'W-Center-Stand', 'Charger'),
('FWD-11758', 'WD-116308', 'UWD-908', 'Plane-Mirror', 'Analog', 'W/O-Center-Stand', 'Charger'),
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
('WD-104067', '2022-12-28', 'Activa-6G', 'White', 'DRUM-BRAKE', 'Vijaynagar', 75000, 4325, 10500, 2500, 92325),
('WD-104383', '2022-12-17', 'Activa-6G', 'Black', 'DISC-BRACK-ALLOY', 'Yelahanka', 75000, 4325, 10500, 2500, 92325),
('WD-112640', '2022-12-28', 'Access-125', 'Wine_Red', 'DISC-BRACK-ALLOY', 'Indranagar', 75000, 4325, 10500, 2500, 92325),
('WD-113659', '2023-01-20', 'Ntorq', 'Marine Blu', 'DISC-BRACK-ALLOY', 'Indranagar', 109000, 4325, 10500, 2500, 126325),
('WD-115640', '2022-12-28', 'Jupiter-12', 'Aqua_Green', 'DISC-BRACK-ALLOY', 'Koramangla', 80000, 4325, 10500, 2500, 97325),
('WD-116308', '2022-12-28', 'Jupiter-12', 'Aqua_Green', 'DISC-BRACK-ALLOY', 'Yelahanka', 80000, 4325, 10500, 2500, 97325),
('WD-116805', '2022-11-18', 'Access-125', 'Aqua_Green', 'DRUM-BRAKE', 'Yelahanka', 75000, 4325, 10500, 2500, 92325),
('WD-117883', '2023-01-08', 'Aprila', 'Red', 'DRUM-BRAKE', 'Vijaynagar', 130000, 4325, 10500, 2500, 147325),
('WD-118420', '2022-11-8', 'Jupiter-125', 'Aqua_Green', 'DISC-BRACK-ALLOY', 'Indranagar', 80000, 4325, 10500, 2500, 97325),
('WD-119403', '2022-12-28', 'Activa-6G', 'Yellow', 'DISC-BRACK-ALLOY', 'Yelahanka', 75000, 4325, 10500, 2500, 92325);

-- --------------------------------------------------------

--
-- Table structure for table `book_logs`
--

CREATE TABLE `book_logs` (
  `u_id` varchar(255) NOT NULL,
  `booking_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_logs`
--

INSERT INTO `book_logs` (`u_id`, `booking_id`, `status`, `action`, `date_time`) VALUES
('UWD-785', 'WD-119403', 'Processing', 'UPDATED', '2023-01-13 18:33:06'),
('UWD-785', 'WD-119403', 'Delivered', 'UPDATED', '2023-01-13 18:33:34'),
('UWD-788', 'WD-112641', 'Truncated', 'DELETED', '2023-01-13 18:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `u_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `action` varchar(20) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`u_id`, `username`, `action`, `date_time`) VALUES
('UWD-1127', 'srinivas123', 'New-Registeration', '2023-01-13 15:32:21');

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
(2, 'Access 125', 'Available', '92000'),
(3, 'Jupiter 125', 'Available', '95000'),
(4, 'Aprila', 'Available', '130000'),
(5, 'Ntorq', 'Available', '109000'),
(6, 'Dio', 'Available', '73000');

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
('UWD-1101', 'akshitha', 'b', 'akshiii599@gmail.com', 'akshitha', '$2y$10$Lf5fKsJYKetBOaSIYyhmpuAH0hdlq6M4DG3A1Vx.3QqvuTtR.BQxK'),
('UWD-1121', 'Chandan', 'KM', 'yathinyoyo.6055@gmail.com', 'chandan', '$2y$10$IBckGSC3fkWyqrg0e3FiaOIYLo8XEMw.397RkketV/LaESooyV1Du'),
('UWD-1123', 'Janhavi', 'Srinivas', 'reachjanhavi@gmail.com', 'janhavi1997', '$2y$10$MPa1iYotaBsSyqZ0Peg.O.N015dvE4qCakzqHubyrPh/1lx7CYci.'),
('UWD-1127', 'Srinivas', 'Prasad', 'srinivasprasad.74748@gmail.com', 'srinivas123', '$2y$10$Q45tho6IWLlRNI4r7Y2jVekJ6DrWKaDYGwRPnScUjbyPQeX8RomtK'),
('UWD-1143', 'nataraj', 'bs', 'natarajbs123@gmail.com', 'nataraj', '$2y$10$rTn..lz1oM/Y7CxYFWafROpD6SGoSwu4VQHEuYsIKhQg4XEKXX5ku'),
('UWD-785', 'Shashank', 'S', 'shaskshsashu267@gmail.com', 'shashank', '$2y$10$S4d46dBDISh4fBdS1ZsW8OvnQa33UaY/dzsRfujPZyK53HXq4uLly'),
('UWD-789', 'Tejas', 'Srinivas', 'stejas2002@gmail.com', 'tejas2002', '$2y$10$EvED7V8huULM.XKoc9zgcuacuv4TUlv/Q6jCJyNZORmc5fVJGUQWm'),
('UWD-845', 'Pratibha ', 'Javalagi', 'pratibhakj02@gmail.com', 'pratibha_kj', '$2y$10$ghbyOmycS3M/G4Qxh1fdWu8YrVQxhtBeTT8T2r0DIA85Uod/YhrNq'),
('UWD-876', 'Varsha', 'Chennur', 'varshachennur@gmail.com', 'varshachennur', '$2y$10$f/qHCFInzMRWCXrYKDiEXe1EM9V6rNAO/YyIHk1Nvt5SwDh5YKlMq'),
('UWD-944', 'Chethan ', 'BG', 'cchethangurumurthy@gmail.com', 'chethu', '$2y$10$yRCPnsWA6xPlnx04b5Fnme9/DpHoht80v9PvDXHPRmBldpBDi69Y.'),
('UWD-980', 'Yathin', 'B N', 'yathin980@gmail.com', 'yathin123', '$2y$10$nPg7sIHnp6le37EyFefp8erz7zsJ3Kl88vE5inCZyBknU1/k8QrnG');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `insertLog` AFTER INSERT ON `users` FOR EACH ROW BEGIN
INSERT into logs(u_id,username,action,date_time) values(NEW.u_id,NEW.username,'New-Registeration',NOW());
END
$$
DELIMITER ;

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
('UWD-876', 'Varsha', 'Chennur', '8264-8019-9625', 'KA01-202052697'),
('UWD-1123', 'Janhavi', 'Srinivas', '8264-1034-9625', 'KA01-202065215'),
('UWD-789', 'Tejas', 'Srinivas', '7109-7199-2596', 'KA01-202075315'),
('UWD-944', 'Chethan ', 'BG', '7109-7199-9625', 'KA01-202075316'),
('UWD-980', 'Yathin', 'B N', '9017-9917-6952', 'KA03-202076589'),
('UWD-1143', 'nataraj', 'bs', '6538-8345-9864', 'KA04-568743526'),
('UWD-908', 'Srinivas', 'Prasad', '8264-5678-1234', 'KA10-202010154'),
('UWD-785', 'Shashank', 'S', '3654-4892-3524', 'KA15-202075395'),
('UWD-845', 'Pratibha ', 'Javalagi', '8971-6547-1235 ', 'KA25-986574123'),
('UWD-967', 'SUMANTH', 'M', '8189-3142-2221', 'KA41-202015644'),
('UWD-1101', 'akshitha', 'b', '8019-7199-9625', 'KA52-202014567'),
('UWD-1121', 'Chandan', 'KM', '7109-7199-5292', 'KA52-202015445'),
('UWD-1127', 'Srinivas', 'Prasad', '8264-8569-9625', 'KA52-202017894'),
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
  `vechile_id` int(11) NOT NULL,
  `model` varchar(20) NOT NULL,
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
('WD-104067', 'UWD-876', 'varshachennur@gmail.com', '+91-8147191253', 1, 'Activa-6G', 'Vijaynagar', 'White', 'DRUM-BRAKE', 'Processing', '2022-12-21 06:29:26'),
('WD-104383', 'UWD-1123', 'reachjanhavi@gmail.com', '+91-7760549445', 1, 'Activa-6G', 'Yelahanka', 'Black', 'DISC-BRACK-ALLOY', 'Processing', '2022-12-10 22:41:37'),
('WD-109274', 'UWD-1143', 'natarajbs123@gmail.com', '+91-6813854236', 2, 'Access-125', 'Indranagar', 'Wine_Red', 'DISC-BRACK-ALLOY', 'Processing', '2022-12-26 09:45:36'),
('WD-113659', 'UWD-1127', 'srinivasprasad.74748@gmail.com', '+91-7892280411', 5, 'Ntorq', 'Indranagar', 'Marine Blu', 'DISC-BRACK-ALLOY', 'Delivered', '2023-01-13 05:34:11'),
('WD-115640', 'UWD-1101', 'akshiii599@gmail.com', '+91-7483688094', 3, 'Jupiter-125', 'Koramangla', 'Aqua_Green', 'DISC-BRACK-ALLOY', 'Processing', '2022-12-21 06:22:04'),
('WD-116805', 'UWD-980', 'yathin980@gmail.com', '+91-9620581947', 2, 'Access-125', 'Yelahanka', 'Aqua_Green', 'DRUM-BRAKE', 'Delivered', '2022-11-11 06:46:04'),
('WD-117883', 'UWD-1121', 'yathinyoyo.6055@gmail.com', '+91-9620581947', 4, 'Aprila', 'Vijaynagar', 'Red', 'DRUM-BRAKE', 'Delivered', '2023-01-12 10:29:10'),
('WD-118420', 'UWD-944', 'chethanmurthy@gmail.com', '+91-9591960282', 3, 'Jupiter-125', 'Indranagar', 'Aqua_Green', 'DISC-BRACK-ALLOY', 'Delivered', '2022-12-01 16:29:42'),
('WD-119403', 'UWD-785', 'shaskshsashu267@gmail.com', '+91-9741300954', 1, 'Activa-6G', 'Yelahanka', 'Yellow', 'DISC-BRACK-ALLOY', 'Delivered', '2022-12-21 06:35:50');

--
-- Triggers `vechile_booking`
--
DELIMITER $$
CREATE TRIGGER `booking_log` AFTER UPDATE ON `vechile_booking` FOR EACH ROW BEGIN
INSERT INTO book_logs VALUES(NEW.u_id,NEW.booking_id,NEW.status,'UPDATED',NOW());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `d_book_log` BEFORE DELETE ON `vechile_booking` FOR EACH ROW BEGIN
INSERT INTO book_logs VALUES (OLD.u_id,OLD.booking_id,'Truncated','DELETED',NOW());
END
$$
DELIMITER ;

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
