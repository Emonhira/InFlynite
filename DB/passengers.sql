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
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `PID` int(11) NOT NULL,
  `PName` varchar(255) NOT NULL,
  `PAge` varchar(255) NOT NULL,
  `PEmail` varchar(255) NOT NULL,
  `FDate` varchar(255) NOT NULL,
  `PTicketNo` varchar(25) NOT NULL,
  `PFlightNo` varchar(255) NOT NULL,
  `PFlightTime` varchar(255) NOT NULL,
  `PAirlines` varchar(255) NOT NULL,
  `PDest` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`PID`, `PName`, `PAge`, `PEmail`, `FDate`, `PTicketNo`, `PFlightNo`, `PFlightTime`, `PAirlines`, `PDest`) VALUES
(1, 'Nashid Jamal Chowdhury', '24', 'nashid.chowdhury@gmail.com', '2020-09-18', '345255634', 'QA918', '03:00PM', 'Qatar Airways', 'Doha'),
(2, 'Yameen Irteza', '25', 'yameen.irteza@gmail.com', '2020-09-15', '232412345', 'TK812', '05:30 AM', 'Turkish Airlines', 'Istanbul'),
(3, 'Adullah Mehedi Hira', '24', 'adullah.hira@northsouth.edu', '2020-09-15', 'FH231456XD', 'MK242', '08:00 PM', 'Malaysian Airlines', 'Kuala Lumpur'),
(5, 'Monjura Akhter Chowdhury', '56', 'monjura.chowdhury@gmail.com', '2020-10-02', 'FH2314333D', 'OD161', '04:40 PM', 'Norwegian Airlines', 'Oslo'),
(6, 'Lionel Messi', '34', 'leo.messi@gmail.com', '2020-09-15', 'TF1233443XD1', 'IB711', '02:50 AM', 'Iberia Airlines', 'Barcelona');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`PID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
