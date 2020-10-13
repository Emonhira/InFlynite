-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2020 at 02:07 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flightmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `departures`
--

CREATE TABLE `departures` (
  `Flight_ID` int(11) NOT NULL,
  `Flight_Time` varchar(255) NOT NULL,
  `Flight_No` varchar(255) NOT NULL,
  `Destination` varchar(255) NOT NULL,
  `Gate` varchar(255) NOT NULL,
  `Flight_Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departures`
--

INSERT INTO `departures` (`Flight_ID`, `Flight_Time`, `Flight_No`, `Destination`, `Gate`, `Flight_Status`) VALUES
(1, '06:30 AM', 'OD161', 'KUALA LUMPUR', '7B', 'DEPARTED'),
(2, '11:25 PM', 'SG215', 'BALI', '6F', 'IN AIR'),
(3, '10:00 AM', 'BD566', 'DHAKA', '5E', 'CHECK-IN'),
(4, '09:40 PM', 'GA442', 'JAKARTA', '1F', 'CHECK-IN'),
(5, '00:15 AM', 'AA851', 'KOLKATA', '1B', 'GATES NOT OPEN'),
(6, '12:30 PM', 'US445', 'KATHMANDU', '3A', 'ON-TIME');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departures`
--
ALTER TABLE `departures`
  ADD PRIMARY KEY (`Flight_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departures`
--
ALTER TABLE `departures`
  MODIFY `Flight_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
