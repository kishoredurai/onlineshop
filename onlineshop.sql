-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 05, 2023 at 12:11 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `CustomerID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `UserName` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  PRIMARY KEY (`CustomerID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `UserName`, `FirstName`, `LastName`, `Address`, `City`) VALUES
(1, 'member1', 'kk', 'mm', 'kjnskvs', 'kjnk'),
(2, 'member2', 'kk', 'mm', 'jhj', 'gh'),
(3, 'member3', 'mm', 'kk', 'kjnskvs', 'wqw'),
(4, 'member4', 'kk', 'mm', 'jhj', 'gh'),
(5, 'member5', 'kkk', 'nnn', 'xxxyyyzzz', 'cbe');

-- --------------------------------------------------------

--
-- Table structure for table `orderproducts`
--

DROP TABLE IF EXISTS `orderproducts`;
CREATE TABLE IF NOT EXISTS `orderproducts` (
  `OrderID` int(11) DEFAULT NULL,
  `ProductID` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderproducts`
--

INSERT INTO `orderproducts` (`OrderID`, `ProductID`, `Quantity`) VALUES
(3, 2, 1),
(4, 3, 1),
(5, 4, 1),
(6, 16, 1),
(7, 19, 1),
(8, 20, 1),
(9, 2, 1),
(9, 1, 1),
(9, 4, 1),
(9, 1, 1),
(9, 3, 1),
(9, 1, 1),
(10, 2, 1),
(10, 1, 1),
(10, 4, 1),
(10, 1, 1),
(10, 3, 1),
(10, 1, 1),
(10, 2, 1),
(11, 2, 1),
(12, 4, 1),
(13, 4, 1),
(13, 1, 1),
(14, 4, 1),
(14, 1, 1),
(14, 1, 1),
(15, 3, 1),
(16, 3, 1),
(16, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `OrderID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `CustomerID` int(11) NOT NULL,
  PRIMARY KEY (`OrderID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `CustomerID`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 2),
(5, 3),
(6, 4),
(7, 1),
(8, 2),
(9, 1),
(10, 2),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `ProductID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Productname` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `Productname`, `price`) VALUES
(1, 'shoe', 433),
(2, 'cloth', 540),
(3, 'bag', 540),
(4, 'food', 343);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
