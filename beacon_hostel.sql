-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 20, 2021 at 10:26 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beacon_hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailed_table`
--

DROP TABLE IF EXISTS `detailed_table`;
CREATE TABLE IF NOT EXISTS `detailed_table` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(225) NOT NULL,
  `descriptions` varchar(225) NOT NULL,
  `fee` int(225) NOT NULL,
  `stats` varchar(225) NOT NULL,
  `hostel_name` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailed_table`
--

INSERT INTO `detailed_table` (`id`, `room_name`, `descriptions`, `fee`, `stats`, `hostel_name`) VALUES
(14, 'Katogo', '', 450000, 'Booked', 'Pilipo hostel'),
(13, 'Nakitto', '', 450000, '', 'Pilipo hostel'),
(12, 'Katende', '', 450000, '', 'Pilipo hostel'),
(11, 'Kiruhura', '', 75000, 'Booked', 'Pilipo hostel');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_records`
--

DROP TABLE IF EXISTS `hostel_records`;
CREATE TABLE IF NOT EXISTS `hostel_records` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `hostel_name` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `hostel_pic` varchar(225) NOT NULL,
  `backend` varchar(225) NOT NULL,
  `frontend` varchar(225) NOT NULL,
  PRIMARY KEY (`hostel_name`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_records`
--

INSERT INTO `hostel_records` (`id`, `hostel_name`, `status`, `hostel_pic`, `backend`, `frontend`) VALUES
(31, 'Maisha Hostel', 'Mixed', 'uploads/26.jpg', 'uploads/11.jpg', 'uploads/2cfa8cf2fb570f007a013d64f8186afe.jpg'),
(32, 'Pilipo hostel', 'Mixed', 'uploads/2cfa8cf2fb570f007a013d64f8186afe.jpg', 'uploads/77.jpg', 'uploads/78.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
