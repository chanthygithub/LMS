-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 30, 2016 at 10:55 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dblms`
--
CREATE DATABASE IF NOT EXISTS `dblms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dblms`;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `partnerid` varchar(20) NOT NULL,
  `firstname` varchar(15) DEFAULT NULL,
  `lastname` varchar(15) DEFAULT NULL,
  `fullname` varchar(45) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `age` int(5) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`partnerid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`partnerid`, `firstname`, `lastname`, `fullname`, `gender`, `age`, `address`, `phone`, `email`) VALUES
('p0001', 'Sovan', 'VEN', 'VEN Sovan', 'ប្រុស', 29, 'Phnom Penh', '069422980', 'chanthy.chv@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `partnerscapital`
--

CREATE TABLE IF NOT EXISTS `partnerscapital` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partnersid` varchar(12) NOT NULL,
  `capital` double DEFAULT NULL,
  `moneytype` varchar(10) DEFAULT NULL,
  `datein` datetime DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `partnerscapital`
--

INSERT INTO `partnerscapital` (`id`, `partnersid`, `capital`, `moneytype`, `datein`, `description`) VALUES
(12, 'p0001', 1, 'រៀល', '2016-03-18 00:00:00', 'that it good for us from now on.'),
(13, 'p0001', 2, 'រៀល', '2016-03-18 00:00:00', 'that it good for us from now on.'),
(16, 'p0001', 3, 'រៀល', '2016-03-20 00:00:00', 'that it good for us from now on.'),
(17, 'p0001', 3000000, 'រៀល', '2016-03-20 00:00:00', 'that it good for us from now on.'),
(18, 'p0001', 2000000, 'រៀល', '2016-02-20 00:00:00', 'that it good for us from now on.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
