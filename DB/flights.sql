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
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `Flight_Id` int(255) NOT NULL,
  `Flight_Time` varchar(255) NOT NULL,
  `Flight_No` varchar(255) NOT NULL,
  `Destination` varchar(255) NOT NULL,
  `Gate` varchar(255) NOT NULL,
  `Flight_Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`Flight_Id`, `Flight_Time`, `Flight_No`, `Destination`, `Gate`, `Flight_Status`) VALUES
(1, '03:00 PM', 'QA432', 'DOHA', '4B', 'DELAYED'),
(3, '01:20 AM', 'TK208', 'ISTANBUL', '1F', 'CANCELLED'),
(4, '05:50 PM', 'QA412', 'SYDNEY', '3D', 'LANDED'),
(5, '06:15PM', 'BB722', 'LONDON', '12F', 'IN AIR'),
(6, '02:00 AM', 'SG862', 'SINGAPORE', '2F', 'DELAYED'),
(7, '07:45 AM', 'JA132', 'TOKYO', '8A', 'LANDED'),
(57, '1:25 PM', 'EK621', 'WASHINGTON D.C.', '10B', 'LANDED'),
(58, '9:00 AM', 'MA091', 'DUBLIN', '1F', 'DELAYED'),
(60, '8:20AM', 'EK122', 'ABU DHABI', '5C', 'LANDED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`Flight_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `Flight_Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
