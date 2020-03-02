-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 29, 2020 at 08:57 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookstorecreator`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinventory`
--

CREATE TABLE IF NOT EXISTS `bookinventory` (
  `book_id` int(20) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(100) NOT NULL,
  `book_price` varchar(20) NOT NULL,
  `book_quantity` int(100) NOT NULL,
  `book_image` varchar(100) NOT NULL,
  `book_author` varchar(200) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `bookinventory`
--

INSERT INTO `bookinventory` (`book_id`, `book_name`, `book_price`, `book_quantity`, `book_image`, `book_author`) VALUES
(1, 'Dewey''s Nine Lives', '$200', 10, 'images/img1.jpg', 'Vicki Myron'),
(2, 'New Wire Crochet', '$89', 10, 'images/img2.jpg', 'YAEL FALK'),
(3, 'A Practical Guide - NEEDLE LACE', '$45', 10, 'images/img3.jpg', 'JACQUELINE PETER'),
(4, 'BEADWEAVING ', '$80', 10, 'images/img4.jpg', 'Ann Benson'),
(5, 'The Daring Book For Girls', '$39', 10, 'images/img5.jpg', 'Miriam Peskowitz');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(100) NOT NULL,
  `customer_fname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_lname` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_paymentMethod` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_id` int(20) DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(100) DEFAULT NULL,
  KEY `book_id` (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_fname`, `customer_lname`, `customer_address`, `customer_paymentMethod`, `book_id`, `email`, `total`) VALUES
(0, '', NULL, '', '', NULL, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `bookinventory` (`book_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
