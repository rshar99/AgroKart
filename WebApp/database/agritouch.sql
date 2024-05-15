-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2019 at 08:36 AM
-- Server version: 5.1.36-community
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agritouch`
--
CREATE DATABASE IF NOT EXISTS `agritouch` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `agritouch`;

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE IF NOT EXISTS `bids` (
  `sino` int(11) NOT NULL AUTO_INCREMENT,
  `refno` int(11) DEFAULT NULL,
  `cropname` varchar(100) DEFAULT NULL,
  `fid` varchar(20) DEFAULT NULL,
  `did` varchar(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `bdate` date DEFAULT NULL,
  PRIMARY KEY (`sino`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`sino`, `refno`, `cropname`, `fid`, `did`, `amount`, `bdate`) VALUES
(1, 1, 'Rice', '8970724781', '7019433940', 10000, '2019-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `crops`
--

CREATE TABLE IF NOT EXISTS `crops` (
  `sino` int(11) NOT NULL AUTO_INCREMENT,
  `fid` varchar(20) NOT NULL,
  `cropname` varchar(50) NOT NULL,
  `quality` varchar(50) NOT NULL,
  `qnt` varchar(100) NOT NULL,
  `estprice` varchar(100) NOT NULL,
  `udate` date DEFAULT NULL,
  PRIMARY KEY (`sino`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `crops`
--

INSERT INTO `crops` (`sino`, `fid`, `cropname`, `quality`, `qnt`, `estprice`, `udate`) VALUES
(1, '8970724781', 'Rice', 'High', '500 kw', '1800 /kw', '2019-02-19'),
(2, '7019433940', 'Tomato', 'Medium', ' kw', ' /kw', '2019-02-19'),
(7, '8970724782', 'Jower', 'High', '457 kw', '685858 /kw', '2019-02-19'),
(8, '7406103401', 'Rice', 'High', ' kw', ' /kw', '2019-02-19'),
(9, '7406103401', 'Rice', 'Medium', ' kg', ' /kw', '2019-02-19'),
(10, '7676193183', 'tomato', 'High', '500 Qntl', '1800 /Qntl', '2019-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE IF NOT EXISTS `farmers` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `mobno` varchar(10) NOT NULL,
  `district` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`slno`, `name`, `mobno`, `district`, `state`) VALUES
(1, 'Shree', '7019433940', 'Davanger', 'Karnataka'),
(2, 'Karibasavaraja ', '7676193183', 'Davangere ', 'Karnataka '),
(3, 'Karibasavaraja j', '8970724781', 'Davangere', 'KARNATAKA');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `caption` varchar(500) NOT NULL,
  `det` text NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `mobno` varchar(20) NOT NULL,
  `ftype` varchar(20) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `mobno` varchar(10) NOT NULL,
  `account_type` varchar(20) NOT NULL,
  `img_file` varchar(100) NOT NULL,
  PRIMARY KEY (`mobno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`mobno`, `account_type`, `img_file`) VALUES
('4536847466', 'dealer', 'images.jpg'),
('7019433940', 'dealer', '7019433940.jpg'),
('7019516871', 'farmer', 'images.jpg'),
('7406103401', 'farmer', 'images.jpg'),
('7676193183', 'farmer', 'images.jpg'),
('8070724781', 'farmer', 'images.jpg'),
('8310121342', 'farmer', 'images.jpg'),
('8861469470', 'farmer', '8861469470.jpg'),
('8884886448', 'farmer', 'images.jpg'),
('8970724781', 'farmer', '8970724781.jpg'),
('8970724782', 'farmer', 'images.jpg'),
('9036062632', 'farmer', 'images.jpg'),
('9632033708', 'farmer', 'images.jpg'),
('9844386644', 'farmer', 'images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE IF NOT EXISTS `replies` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `refno` int(11) DEFAULT NULL,
  `reply` text,
  `repdate` date DEFAULT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
