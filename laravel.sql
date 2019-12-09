-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 03:59 AM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `userId` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contract` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`userId`, `name`, `address`, `contract`, `username`, `password`) VALUES
(1, 'sad', '@gmail.com', 'admin', 'admin', '123'),
(2, 'sad', '@gmail.com', 'admin', 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `userId` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contract` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`userId`, `name`, `address`, `contract`, `username`, `password`) VALUES
(1, 'likhon', '@gmail.com', 'employee', 'employee', '123'),
(2, 'likhon', '@gmail.com', 'employee', 'employee', '123'),
(3, 'a', '@gmail.com', 'c', 'c', '1'),
(4, 'a', '@gmail.com', 'c', 'c', '1'),
(5, 'likhon', '@gmail.com', 'admin', 'admin', '123'),
(7, 'sad', '@gmail.com', 'admin', 'admin', '123'),
(8, 'sad', '@gmail.com', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `jods`
--

CREATE TABLE `jods` (
  `userId` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `titel` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(10) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userpassword` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userpassword`, `type`) VALUES
(2, 'customer', 'customer', 'customer'),
(3, 'admin', 'admin', 'admin'),
(4, 'a', 'a', 'admin'),
(6, '1', '1', 'customer'),
(7, 'a', 'a', 'employee'),
(8, '0', '0', 'employee'),
(9, 'c', '1', 'employee'),
(10, 'admin', '123', 'employee'),
(11, 'admin', '123', 'admin'),
(12, 'admin', '123', 'admin'),
(13, 'admin', '123', 'admin'),
(14, 'a', 'a', 'employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `jods`
--
ALTER TABLE `jods`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jods`
--
ALTER TABLE `jods`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
