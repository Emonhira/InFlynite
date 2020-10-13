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
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `employee_contact` varchar(255) NOT NULL,
  `employee_address` varchar(255) NOT NULL,
  `employee_airlines` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `employee_name`, `employee_contact`, `employee_address`, `employee_airlines`) VALUES
(1, 'Andy Robertson', '+1-541-754-3010', 'Cecilia Chapman\r\n711-2880 Nulla St.\r\nMankato Mississippi ', 'American Airlines'),
(2, 'Iris Watson', '+1-(372) 587-2335', 'P.O. Box 283 8562 Fusce Rd.\r\nFrederick Nebraska 20620', 'SouthWest Airlines'),
(3, 'Celeste Slater', '+1-(786) 713-8616', '606-3727 Ullamcorper. Street\r\nRoseville NH 11523', 'British Airways'),
(4, 'Lawrence Moreno', '+1-(684) 579-1879', '935-9940 Tortor. Street\r\nSanta Rosa MN 98804', 'Iberia Airlines'),
(5, 'Ina Moran', '+1-(389) 737-2852', 'P.O. Box 929 4189 Nunc Road\r\nLebanon KY 69409', 'Emirates');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
