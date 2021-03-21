-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2021 at 04:11 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spark`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` char(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Jonas', 'lconn@hotmail.com', 3765),
(2, 'Elissa', 'tyrell77@gmail.com', 9732),
(3, 'Berry', 'hoppe.nathanial@gmail.com', 6763),
(4, 'Izabella', 'austen61@hotmail.com', 1426),
(5, 'Ignacio', 'cole.cicero@yahoo.com', 4983),
(6, 'Chance', 'hchristiansen@gmail.com', 2393),
(7, 'Dorcas', 'lebsack.alysha@hotmail.co', 5028),
(8, 'Herminia', 'alejandra.rau@hotmail.com', 2371),
(9, 'Mckenna', 'monserrat69@yahoo.com', 4079),
(10, 'Cleveland', 'dare.george@gmail.com', 2622),
(11, 'john', 'john@gmail.com', 4567);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `srno` int(11) NOT NULL,
  `sender` char(25) DEFAULT NULL,
  `receiver` char(25) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`srno`, `sender`, `receiver`, `amount`) VALUES
(55, 'Jonas', 'Elissa', 42),
(56, 'Jonas', 'Elissa', 42),
(57, 'Jonas', 'Elissa', 42),
(58, 'Jonas', 'Chance', 45),
(59, 'Jonas', 'Elissa', 56),
(60, 'Jonas', 'Elissa', 56),
(61, 'Jonas', 'Elissa', 56),
(62, 'Jonas', 'Elissa', 56),
(63, 'Jonas', 'Elissa', 56),
(64, 'Jonas', 'Elissa', 56),
(65, 'Jonas', 'Elissa', 45),
(66, 'Jonas', 'Herminia', 56);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
