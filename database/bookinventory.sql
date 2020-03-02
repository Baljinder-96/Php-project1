-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2020 at 06:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstorecreator`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinventory`
--

CREATE TABLE `bookinventory` (
  `book_id` int(20) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_price` varchar(20) NOT NULL,
  `book_quantity` int(100) NOT NULL,
  `book_image` varchar(100) NOT NULL,
  `book_author` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookinventory`
--

INSERT INTO `bookinventory` (`book_id`, `book_name`, `book_price`, `book_quantity`, `book_image`, `book_author`) VALUES
(1, 'Dewey\'s Nine Lives', '$200', 10, 'images/img1.jpg', 'Vicki Myron'),
(2, 'New Wire Crochet', '$89', 10, 'images/img2.jpg', 'YAEL FALK'),
(3, 'A Practical Guide - NEEDLE LACE', '$45', 10, 'images/img3.jpg', 'JACQUELINE PETER'),
(4, 'BEADWEAVING ', '$80', 10, 'images/img4.jpg', 'Ann Benson'),
(5, 'The Daring Book For Girls', '$39', 10, 'images/img5.jpg', 'Miriam Peskowitz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinventory`
--
ALTER TABLE `bookinventory`
  ADD PRIMARY KEY (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinventory`
--
ALTER TABLE `bookinventory`
  MODIFY `book_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
