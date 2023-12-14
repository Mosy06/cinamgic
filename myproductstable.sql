-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2023 at 02:51 PM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myproducts`
--

-- --------------------------------------------------------

--
-- Table structure for table `Cinemagic`
--

CREATE TABLE IF NOT EXISTS `cinemagic` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `productType` text NOT NULL,
  `productName` text NOT NULL,
  `Quantity` int(11) NOT NULL,
  `productPrice` decimal(10,2) NOT NULL,
  `SubTotal` decimal(10,2) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `cinemagictable`
--

INSERT INTO `cinemagictable` (`orderid`, `productType`, `productName`, `Quantity`, `productPrice`, `SubTotal`) VALUES
(8, 'Pizza', 'Hawaiian', 10, '0.00', '0.00'),
(9, 'red', 'shoot', 1, '0.00', '0.00'),
(10, 'red', 'shoot', 1, '0.00', '0.00'),
(11, 'red', 'shoot', 1, '0.00', '0.00'),
(12, 'red', 'shoot', 1, '0.00', '0.00'),
(13, 'red', 'shoot', 1, '14.99', '0.00'),
(14, 'red', 'shoot', 1, '14.99', '0.00'),
(15, 'red', 'shoot', 2, '14.99', '0.00'),
(16, 'red', 'shoot', 4, '14.99', '0.00'),
(17, 'red', 'shoot', 5, '14.99', '0.00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
