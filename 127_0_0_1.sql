-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 02:34 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rajhansrealestate`
--
CREATE DATABASE IF NOT EXISTS `rajhansrealestate` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rajhansrealestate`;

-- --------------------------------------------------------

--
-- Table structure for table `commercialproperty`
--

CREATE TABLE `commercialproperty` (
  `Commercialid` int(11) NOT NULL,
  `BuyRent` varchar(255) NOT NULL,
  `PropertyType` varchar(255) NOT NULL,
  `BuildingName` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Area` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commercialproperty`
--

INSERT INTO `commercialproperty` (`Commercialid`, `BuyRent`, `PropertyType`, `BuildingName`, `Location`, `Area`, `Price`, `Description`, `image`) VALUES
(2, 'Buy', 'Shop', 'delta tower', 'Ulwe', 900, 20000000, 'best property', 'property-1.jpg'),
(3, 'Rent', 'Shop', 'today imperia', 'Ulwe', 900, 25000, 'best property', 'property-3.jpg'),
(4, 'Rent', 'Shop', 'Satyam', 'Ulwe', 900, 35000, 'Good Shop', 'property-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `residentialproperty`
--

CREATE TABLE `residentialproperty` (
  `PropertyId` int(11) NOT NULL,
  `BuyRent` varchar(255) NOT NULL,
  `PropertyType` varchar(255) NOT NULL,
  `BuildingName` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Area` int(11) NOT NULL,
  `FlatType` varchar(30) NOT NULL,
  `Price` int(11) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `residentialproperty`
--

INSERT INTO `residentialproperty` (`PropertyId`, `BuyRent`, `PropertyType`, `BuildingName`, `Location`, `Area`, `FlatType`, `Price`, `Description`, `image`) VALUES
(1, 'Buy', 'Flat', 'Unimont Sapphire', 'Ulwe', 690, '1BHK', 6000000, 'lavish flat', 'property-2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commercialproperty`
--
ALTER TABLE `commercialproperty`
  ADD PRIMARY KEY (`Commercialid`);

--
-- Indexes for table `residentialproperty`
--
ALTER TABLE `residentialproperty`
  ADD PRIMARY KEY (`PropertyId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commercialproperty`
--
ALTER TABLE `commercialproperty`
  MODIFY `Commercialid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `residentialproperty`
--
ALTER TABLE `residentialproperty`
  MODIFY `PropertyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
