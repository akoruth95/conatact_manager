-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 10, 2017 at 06:38 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip` int(11) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fname`, `lname`, `title`, `address`, `city`, `state`, `zip`, `phone`, `notes`) VALUES
(1, 'Alan', 'Koruth', 'Mr.', '7405 Lagrange Dr', 'Raleigh', 'NC', 27613, '919-909-6839', 'It''s Alan'),
(2, 'Joe', 'Smith', '', '555 Martin Luther King Dr.', 'Chapel Hill', 'NC', 27514, '919-123-4567', 'Joe''s the man'),
(3, 'Donal', 'Duck', '', '555 Wonder Lane', 'Orlando', 'Florida', 99999, '999-999-9999', 'He''s a duck.'),
(4, 'Seth', 'Wright', '', 'Caroll Hall', 'Chapel Hill', 'NC', 27517, '123-456-7890', ''),
(5, 'Michelle', 'Obama', 'Mrs.', '123 White House Ln', 'Baltimore', 'Maryland', 98765, '456-789-0123', 'She used to be the first lady'),
(6, 'Barrack', 'Obama', 'Mr', '123 White House Ln', 'Baltimore', 'Maryland', 98765, '001-001-0011', 'He used to be the president'),
(7, 'Hillary ', 'Clinton', 'Mrs.', '123 West St.', 'Manhattan', 'New York', 12345, '989-989-9898', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
