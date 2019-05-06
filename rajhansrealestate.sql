-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 03:09 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `commercialproperty`
--

CREATE TABLE `commercialproperty` (
  `Commercialid` int(30) NOT NULL,
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
(4, 'Rent', 'Shop', 'Satyam', 'Ulwe', 900, 35000, 'Good Shop', 'property-4.jpg'),
(5, 'Buy', 'Office', 'L&T Seawoods', 'Seawoods', 3000, 3500000, 'best of location', 'property-5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ContactId` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Mobileno` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ContactId`, `Name`, `Mobileno`, `Email`, `Message`) VALUES
(63, 'Ani', '8425877339', 'asingh1248@gmail.com', 'asas'),
(64, 'Ani', '8425877339', 'asingh1248@gmail.com', 'asas'),
(65, 'Abhishek', '8425877339', 'a@gmail.com', 'I want it'),
(66, 'Animesh', '8425877338', 'asingh1248@gmail.com', 'I want it.'),
(67, 'Animesh', '8425877338', 'asingh1248@gmail.com', 'I want it.'),
(68, 'Abhishek', '8425877339', 'asi@gmail.com', 'Wow'),
(69, 'asas', '8425877339', 'asingh1248@mail.com', 'asas'),
(70, 'asas', '8425877339', 'asingh1248@mail.com', 'asas'),
(71, 'A', '9082804311', 'Asingh1248@12.com', 'aas'),
(72, 'A', '9082804311', 'Asingh1248@12.com', 'aas'),
(73, 'asas', '8425877339', 'asingh1248@mail.com', 'asas'),
(74, 'Abhinay', '8425877339', 'Asingh@gmail.com', 'asas'),
(75, 'Abhinay', '8425877339', 'Asingh@gmail.com', 'asas'),
(76, 'sas', '8234567890', 'sa@gma.com', 'asa'),
(77, 'sas', '8234567890', 'sa@gma.com', 'asa'),
(78, 'sas', '8234567890', 'sa@gma.com', 'asa');

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
(1, 'Buy', 'Flat', 'Unimont Sapphire', 'Ulwe', 690, '1BHK', 6000000, 'lavish flat', 'property-2.jpg'),
(2, 'Rent', 'Flat', 'Trinity Heights', 'Ulwe', 1650, '1BHK', 15000, 'Near Station', 'property-4.jpg'),
(3, 'Buy', 'Flat', 'Platinum Emporius', 'Ulwe', 1100, '2BHK', 9500000, '30 -metre Flat Facing', 'property-5.jpg'),
(4, 'Rent', 'Flat', 'Bhagwati Imperia', 'Ulwe', 1240, '2BHK', 15000, 'Swimming Pool 6000 sqft.Biggest Swimming Pool in Ulwe', 'property-1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commercialproperty`
--
ALTER TABLE `commercialproperty`
  ADD PRIMARY KEY (`Commercialid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ContactId`);

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
  MODIFY `Commercialid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ContactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `residentialproperty`
--
ALTER TABLE `residentialproperty`
  MODIFY `PropertyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
