-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 03:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `FoodID` char(3) NOT NULL,
  `FoodName` varchar(255) NOT NULL,
  `FoodPrice` int(11) NOT NULL,
  `FoodTypeID` char(3) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`FoodID`, `FoodName`, `FoodPrice`, `FoodTypeID`, `Image`) VALUES
('01', 'ก๋วยเตี๋ยวแห้ง', 45, 'FT1', 'image1.jpg'),
('02', 'ก๋วยเตี๋ยวต้มส้ม', 45, 'FT1', 'image2.jpg'),
('03', 'ผัดซีอิ๊ว', 50, 'FT1', 'image3.jpg'),
('04', 'ตำซั่ว', 45, 'FT1', 'image4.jpg'),
('05', 'มะนาวโซดา', 40, 'FT2', 'image5.jpg'),
('06', 'นมชมพูเย็น', 40, 'FT2', 'image6.jpg'),
('07', 'ข้าวผัดไก่', 45, 'FT1', 'image7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`FoodID`),
  ADD KEY `FoodTypeID` (`FoodTypeID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`FoodTypeID`) REFERENCES `foodtype` (`FoodTypeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
