-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2023 at 10:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `business_image`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `CountryCode` varchar(2) NOT NULL,
  `CountryName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`CountryCode`, `CountryName`) VALUES
('AT', 'ออสเตรีย'),
('BD', 'บังคลาเทศ'),
('PK', 'ปากีสถาน'),
('TH', 'ไทย');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` varchar(6) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Birthdate` date NOT NULL,
  `Email` varchar(40) NOT NULL,
  `CountryCode` varchar(2) NOT NULL,
  `OutstandingDebt` float NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `Name`, `Birthdate`, `Email`, `CountryCode`, `OutstandingDebt`, `Image`) VALUES
('Cus001', 'Punsan Somkla', '1976-12-23', 'punsannaja@gmail.com', 'TH', 8000, 'image1.jpg'),
('Cus002', 'Thanit Boonchu', '1978-11-03', 't.boonchu@gmail.com', 'TH', 15000, 'image2.jpg'),
('Cus003', 'Imran Haider', '1989-02-04', 'i.haider@hotmail.com', 'PK', 0, 'image3.jpg'),
('Cus004', 'Ariful Russell', '1966-11-20', 'a.russell@gmail.com', 'BD', 20000, 'image4.jpg'),
('Cus005', 'Udsanee Pakdeetrakulwong', '1977-12-03', 'e.reiterer@gmail.com', 'AT', 5000, 'image6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`CountryCode`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`),
  ADD KEY `CountryCode` (`CountryCode`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`CountryCode`) REFERENCES `country` (`CountryCode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
