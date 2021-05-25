-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 09, 2020 at 03:42 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `budget`
--

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

DROP TABLE IF EXISTS `expense`;
CREATE TABLE IF NOT EXISTS `expense` (
  `Email` varchar(50) NOT NULL,
  `Stitle` varchar(40) NOT NULL,
  `Title` varchar(40) NOT NULL,
  `Date1` date NOT NULL,
  `Amount` text NOT NULL,
  `People` varchar(50) NOT NULL,
  `Image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Email`,`Stitle`,`Title`),
  KEY `Email` (`Email`,`Title`),
  KEY `Stitle` (`Stitle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`Email`, `Stitle`, `Title`, `Date1`, `Amount`, `People`, `Image`) VALUES
('ritika.cse@gmail.com', 'Delhi Trip', 'Hotel Expenses', '2020-06-05', '12000', 'Harshit', 'Hotelbill.jpg'),
('ritika.cse@gmail.com', 'Delhi Trip', 'Travelling Expenses', '2020-06-01', '15000', 'Ritika', ''),
('ritika.cse@gmail.com', 'Delhi Trip', 'Visiting Place Expenses', '2020-06-04', '12000', 'Gourav', '');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `Email` varchar(40) NOT NULL,
  `Title` varchar(40) NOT NULL,
  `People` varchar(50) NOT NULL,
  KEY `Email_2` (`Email`),
  KEY `Title` (`Title`),
  KEY `Email` (`Email`,`Title`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`Email`, `Title`, `People`) VALUES
('ravi005@gmail.com', 'Kolkata Tour', 'Ravi'),
('ravi005@gmail.com', 'Kolkata Tour', 'Kriti'),
('ritika.cse@gmail.com', 'Delhi Trip', 'Harshit'),
('ritika.cse@gmail.com', 'Delhi Trip', 'Ritika'),
('ritika.cse@gmail.com', 'Delhi Trip', 'Gourav');

-- --------------------------------------------------------

--
-- Table structure for table `plandetails`
--

DROP TABLE IF EXISTS `plandetails`;
CREATE TABLE IF NOT EXISTS `plandetails` (
  `Title` varchar(40) NOT NULL,
  `Date1` date NOT NULL,
  `Date2` date NOT NULL,
  `Budget` text NOT NULL,
  `Person` int(11) NOT NULL,
  `Email` varchar(40) NOT NULL,
  PRIMARY KEY (`Title`,`Email`),
  KEY `Email` (`Email`),
  KEY `Title` (`Title`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plandetails`
--

INSERT INTO `plandetails` (`Title`, `Date1`, `Date2`, `Budget`, `Person`, `Email`) VALUES
('Delhi Trip', '2020-06-01', '2020-06-05', '40000', 3, 'ritika.cse@gmail.com'),
('Kolkata Tour', '2020-06-05', '2020-06-09', '5000', 2, 'ravi005@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `Name` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Phone` varchar(40) NOT NULL,
  PRIMARY KEY (`Email`),
  KEY `Email` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Name`, `Email`, `Password`, `Phone`) VALUES
('Harshit', 'hg786@gmail.com', '54eae7c22c6acc55c100451ef19f9ef1', '7980645321'),
('Ravi', 'ravi005@gmail.com', 'e58cc3fe4b3387c893c8fc9dd43a829a', '7903823628'),
('Ritika Kriti', 'ritika.cse@gmail.com', '48e6b5d5ad34ea6f06b81d15c9f420f4', '7979886655');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `expense`
--
ALTER TABLE `expense`
  ADD CONSTRAINT `expense_ibfk_1` FOREIGN KEY (`Email`,`Stitle`) REFERENCES `plandetails` (`Email`, `Title`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`Email`,`Title`) REFERENCES `plandetails` (`Email`, `Title`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plandetails`
--
ALTER TABLE `plandetails`
  ADD CONSTRAINT `plandetails_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `signup` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
