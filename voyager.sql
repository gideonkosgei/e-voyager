-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 24, 2013 at 12:15 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `voyager`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `assignment_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `driver_id` smallint(6) NOT NULL,
  `car_id` smallint(6) NOT NULL,
  PRIMARY KEY (`assignment_id`),
  UNIQUE KEY `driver_id` (`driver_id`),
  UNIQUE KEY `car_id` (`car_id`),
  KEY `driver_id_2` (`driver_id`,`car_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `driver_id`, `car_id`) VALUES
(6, 60, 59);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `rev_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `options` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `mpesa_id` varchar(30) NOT NULL,
  PRIMARY KEY (`rev_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`rev_id`, `options`, `amount`, `mpesa_id`) VALUES
(35, 'hourly', 6250, 'ddrti5678k'),
(36, 'hourly', 14400, 'DDFTRIIH'),
(49, 'hourly', 24000, 'klhfdsdd');

-- --------------------------------------------------------

--
-- Table structure for table `car_registration`
--

CREATE TABLE IF NOT EXISTS `car_registration` (
  `car_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `plate_number` varchar(30) NOT NULL,
  `car_model` varchar(50) NOT NULL,
  `capacity` varchar(30) NOT NULL,
  `car_condition` varchar(30) NOT NULL,
  `area` varchar(50) NOT NULL,
  `service` varchar(30) NOT NULL,
  `hour_price` int(11) NOT NULL,
  `day_price` int(11) NOT NULL,
  `car_user_id` smallint(6) NOT NULL,
  PRIMARY KEY (`car_id`),
  UNIQUE KEY `plate_number` (`plate_number`),
  KEY `car_user_id` (`car_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `car_registration`
--

INSERT INTO `car_registration` (`car_id`, `plate_number`, `car_model`, `capacity`, `car_condition`, `area`, `service`, `hour_price`, `day_price`, `car_user_id`) VALUES
(58, 'KAG  987Y', 'nissan matatu', '14-passengers', 'new', 'eldoret', 'taxi', 250, 9000, 2),
(59, 'KAG 856T', 'bus', '70-passengers', 'new', 'nakuru', 'taxi', 300, 5000, 2),
(60, 'KAJ 675p', '8999', '98-passengers', 'new', 'githunguri', 'taxi', 89, 89, 2),
(61, 'KAA 908Y', 'taxi', '3-passengers', 'new', 'eldoret', 'taxi', 1000, 12000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `company_register`
--

CREATE TABLE IF NOT EXISTS `company_register` (
  `name` varchar(50) NOT NULL,
  `year_formed` varchar(20) NOT NULL,
  `year_registered` varchar(20) NOT NULL,
  `operation_area` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `headquaters` varchar(50) NOT NULL,
  `user_id` smallint(6) NOT NULL,
  `photos` varchar(50) NOT NULL,
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_register`
--

INSERT INTO `company_register` (`name`, `year_formed`, `year_registered`, `operation_area`, `mobile`, `email`, `address`, `code`, `city`, `headquaters`, `user_id`, `photos`) VALUES
('transcentury', '1987', '10-Feb-2005', 'nationwide', 734789654, '', 34567, 987, 'nairobi', 'upperhill', 2, 'Chrysanthemum.jpg'),
('travel solutions', '1777', '', 'iiii', 0, '', 0, 0, 'dsankl', 'NA', 16, '');

-- --------------------------------------------------------

--
-- Table structure for table `confirmations`
--

CREATE TABLE IF NOT EXISTS `confirmations` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `resv` smallint(6) NOT NULL,
  `user` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `resv` (`resv`),
  KEY `user` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `confirmations`
--

INSERT INTO `confirmations` (`id`, `resv`, `user`) VALUES
(70, 35, 2),
(78, 36, 2),
(79, 49, 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer_register`
--

CREATE TABLE IF NOT EXISTS `customer_register` (
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `id_number` bigint(20) NOT NULL,
  `gender` tinytext NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` int(11) NOT NULL,
  `code` mediumint(9) NOT NULL,
  `city` varchar(50) NOT NULL,
  `residence` varchar(50) NOT NULL,
  `user_id` smallint(6) NOT NULL,
  `photos` varchar(50) NOT NULL,
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_register`
--

INSERT INTO `customer_register` (`first_name`, `last_name`, `id_number`, `gender`, `DOB`, `mobile`, `address`, `code`, `city`, `residence`, `user_id`, `photos`) VALUES
('james', 'kanyotu', 90876543, 'male', '5-Feb-2013', 789765, 56432, 897656, 'eldoret', '90876', 1, '01.png'),
('kSJD', 'sajd', 0, 'male', '29-Mar-2013', 0, 0, 0, 'sa', 'as', 12, 'samson.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `driver_register`
--

CREATE TABLE IF NOT EXISTS `driver_register` (
  `driver_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `id_number` int(11) NOT NULL,
  `license_number` bigint(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `residence` varchar(50) NOT NULL,
  `user_id` smallint(6) NOT NULL,
  `photos` varchar(50) NOT NULL,
  PRIMARY KEY (`driver_id`),
  UNIQUE KEY `id_number` (`id_number`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `driver_register`
--

INSERT INTO `driver_register` (`driver_id`, `first_name`, `last_name`, `id_number`, `license_number`, `gender`, `DOB`, `mobile`, `email`, `address`, `code`, `city`, `residence`, `user_id`, `photos`) VALUES
(60, 'oduor', 'justino', 786543, 98765, 'male', '22-Feb-2013', 9877654, 'justino@yahoo.com', 1289, 897865, 'eldoret', 'eldoret', 2, 'chiku.png'),
(61, 'gideon', 'kosgei', 27734409, 876655, 'male', '', 9876554, 'gideonkosgei@yahoo.com', 8976, 899, 'embu', '7', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `user_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='contain account openning details' AUTO_INCREMENT=23 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `username`, `email`, `category`, `password`, `date`) VALUES
(1, 'alex', 'alex@yahoo.com', 'customer', '534b44a19bf18d20b71ecc4eb77c572f', '2012-12-17'),
(2, 'deno', 'deno@yahoo.com', 'car_owner', 'c8772b401bc911da102a5291cc4ec83b', '2013-01-20'),
(12, 'p', 'p@yahoo.com', 'customer', 'p', '2013-03-16'),
(13, 'j', 'j@yahoo.com', 'customer', 'j', '2013-03-18'),
(14, 'mark', 'mark@yahoo.com', 'customer', 'm', '2013-03-19'),
(15, 'tom', 'tom@yahoo.com', 'car_owner', 'tom', '2013-03-19'),
(16, 'y', 'y@yahoo.com', 'car_owner', 'y', '2013-03-19'),
(17, 'mary', 'mary@yahoo.com', 'customer', 'b8e7be5dfa2ce0714d21dcfc7d72382c', '2013-03-26'),
(18, 'm', 'm@yahoo.com', 'customer', '6f8f57715090da2632453988d9a1501b', '2013-03-30'),
(19, 'maina', 'mai@yahoo.com', 'customer', '534b44a19bf18d20b71ecc4eb77c572f', '2013-03-30'),
(20, 'den', 'd@yahoo.com', 'car_owner', '32ce9c04a986b6360b0ea1984ed86c6c', '2013-03-30'),
(21, 'den', 'denos@yahoo.com', 'customer', 'c8772b401bc911da102a5291cc4ec83b', '2013-03-30'),
(22, 'kimK', 'kim@yahoo.com', 'customer', 'fb1eaf2bd9f2a7013602be235c305e7a', '2013-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE IF NOT EXISTS `reservations` (
  `resv_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `date_from` varchar(30) NOT NULL,
  `date_to` varchar(30) NOT NULL,
  `time_from` varchar(30) NOT NULL,
  `time_to` varchar(30) NOT NULL,
  `pick_up` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `car_id` smallint(6) NOT NULL,
  `customer_id` smallint(6) NOT NULL,
  `owner_id` smallint(6) NOT NULL,
  PRIMARY KEY (`resv_id`),
  KEY `car` (`car_id`),
  KEY `customer_id` (`customer_id`),
  KEY `owner_id` (`owner_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`resv_id`, `date_from`, `date_to`, `time_from`, `time_to`, `pick_up`, `destination`, `car_id`, `customer_id`, `owner_id`) VALUES
(35, '13-3-2013', '14-3-2013', '12:00:00', '13:00:00', 'pioneer', 'langas', 58, 1, 2),
(36, '13-3-2013', '15-3-2013', '01:00:00', '01:00:00', 'kh', 'hu', 59, 1, 2),
(37, '21-3-2013', '22-3-2013', '14:00:00', '15:00:00', 'kimumu', 'town', 58, 1, 2),
(41, '13-3-2013', '21-3-2013', '01:00:00', '01:00:00', 'vj', 'mn', 58, 12, 2),
(42, '21-3-2013', '22-3-2013', '01:00:00', '01:00:00', 'knk', 'ml', 58, 1, 2),
(43, '12-3-2013', '13-3-2013', '02:00:00', '02:00:00', 'pioneer', 'town', 58, 1, 2),
(44, '', '', '01:00:00', '01:00:00', 'dfher', 'fsg', 58, 1, 2),
(45, '11-4-2013', '12-4-2013', '12:06:00', '15:00:00', 'langas', 'pioneer', 60, 1, 2),
(46, '11-4-2013', '19-4-2013', '12:06:00', '15:00:00', 'langas', 'pioneer', 60, 1, 2),
(47, '11-4-2013', '19-4-2013', '12:06:00', '15:00:00', 'langas', 'pioneer', 60, 1, 2),
(48, '17-4-2013', '19-4-2013', '07:00:00', '13:00:00', 'langas', 'pioneer', 58, 1, 2),
(49, '20-4-2013', '21-4-2013', '01:00:00', '01:00:00', 'pioneer', 'eldoret', 61, 1, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignment`
--
ALTER TABLE `assignment`
  ADD CONSTRAINT `assignment_ibfk_1` FOREIGN KEY (`driver_id`) REFERENCES `driver_register` (`driver_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `assignment_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `car_registration` (`car_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_3` FOREIGN KEY (`rev_id`) REFERENCES `reservations` (`resv_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `car_registration`
--
ALTER TABLE `car_registration`
  ADD CONSTRAINT `car_registration_ibfk_1` FOREIGN KEY (`car_user_id`) REFERENCES `company_register` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `company_register`
--
ALTER TABLE `company_register`
  ADD CONSTRAINT `company_register_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `registration` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `confirmations`
--
ALTER TABLE `confirmations`
  ADD CONSTRAINT `confirmations_ibfk_1` FOREIGN KEY (`resv`) REFERENCES `reservations` (`resv_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `confirmations_ibfk_2` FOREIGN KEY (`user`) REFERENCES `reservations` (`owner_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer_register`
--
ALTER TABLE `customer_register`
  ADD CONSTRAINT `customer_register_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `registration` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `driver_register`
--
ALTER TABLE `driver_register`
  ADD CONSTRAINT `driver_register_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `company_register` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_3` FOREIGN KEY (`customer_id`) REFERENCES `customer_register` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_ibfk_4` FOREIGN KEY (`car_id`) REFERENCES `car_registration` (`car_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_ibfk_5` FOREIGN KEY (`owner_id`) REFERENCES `company_register` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
