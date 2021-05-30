-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2018 at 11:09 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csit101`
--

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` int(15) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `eMail` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `line2` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `roomType` varchar(255) NOT NULL,
  `roomQuantity` varchar(255) NOT NULL,
  `adults` int(55) NOT NULL,
  `children` int(55) NOT NULL,
  `bill` decimal(65,2) NOT NULL,
  `checkIn` date NOT NULL,
  `checkOut` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `firstName`, `lastName`, `eMail`, `phone`, `street`, `line2`, `city`, `zip`, `state`, `roomType`, `roomQuantity`, `adults`, `children`, `bill`, `checkIn`, `checkOut`) VALUES
(13, 'Brendan', 'Ewing', 'bewing@scarletmail.rutgers.edu', '(609) 403-2950', '263 s 10th street, Apartment 1', 'Apartment 1', 'Newark', '07103', 'NJ', 'Barron, Peasent, Peasent, ', '3', 1, 1, '1400.00', '2018-08-01', '2018-08-03'),
(14, 'Brendan', 'Ewing', 'bewing@scarletmail.rutgers.edu', '(609) 403-2950', '263 s 10th street, Apartment 1', 'Apartment 1', 'Newark', '07103', 'NJ', 'Mr. President, Peasent, Noble Lord, Barron, ', '4', 3, 0, '35700.00', '2018-08-01', '2018-08-03'),
(15, 'Brendan', 'Ewing', 'bewing@scarletmail.rutgers.edu', '(609) 403-2950', '263 s 10th street, Apartment 1', 'Apartment 1', 'Newark', '07103', 'NJ', 'Mr. President, Peasent, ', '2', 2, 2, '30200.00', '2018-08-01', '2018-08-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
