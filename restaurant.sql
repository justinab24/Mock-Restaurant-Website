-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 10, 2022 at 02:55 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(11) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `streetAddress` varchar(60) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zipCode` varchar(10) NOT NULL,
  `reference` varchar(60) NOT NULL,
  `dateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `firstName`, `lastName`, `emailAddress`, `streetAddress`, `city`, `state`, `zipCode`, `reference`, `dateAdded`) VALUES
(1, 'John', 'Smith', 'johnsmith@test.com', '41 Test Avenue', 'Chicago', 'IL', '60007', 'Friend', '2022-12-08 03:41:58'),
(2, 'Mary', 'Lee', 'marrylee@test.com', '34 Test Court', 'Edison', 'NJ', '08817', 'Friend', '2022-12-08 05:12:13'),
(3, 'Terry', 'Doe', 'terrydoe@test.com', '53 Test Street', 'Madison', 'WI', '53558', 'Yelp', '2022-12-09 07:21:32'),
(4, 'Justin', 'Abraham', 'test@gmail.com', 'bruh', 'bruh', 'NJ', '08873', 'friend', '2022-12-08 19:29:20'),
(5, 'Mark', 'Henry', 'markhenry@gmail.com', '78 Winter Court', 'Edison', 'NJ', '08873', 'friend', '2022-12-08 19:34:22'),
(7, 'Lucy', 'Smith', 'test1@gmail.com', '78 Winter Drive', 'Chicago', 'IL', '08876', 'friend', '2022-12-09 20:39:26');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `dishID` int(11) NOT NULL,
  `menuCategoryID` int(11) NOT NULL,
  `dishCode` varchar(10) NOT NULL,
  `dishName` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `dateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`dishID`, `menuCategoryID`, `dishCode`, `dishName`, `description`, `price`, `dateAdded`) VALUES
(1, 1, 'CCC255', 'Breakfast Quesadilla', 'Quesadilla with bacon, eggs, and cheese', '11.50', '2022-12-08 04:11:24'),
(2, 2, 'BCA345', 'Chicken Alfredo', 'Fettucine with alfredo sauce, chicken, and peas', '13.50', '2022-12-08 04:23:17'),
(3, 5, 'AAB762', 'Brownie', 'Classic chocolate fudge brownie', '7.50', '2022-12-08 05:31:53'),
(4, 1, 'ABC123', 'Pancakes', 'Pancakes with syrup', '10.50', '2022-12-08 18:20:23'),
(5, 4, 'BAB345', 'Steak', 'Steak with steak sauce', '20.50', '2022-12-09 21:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `menuCategories`
--

CREATE TABLE `menuCategories` (
  `menuCategoryID` int(11) NOT NULL,
  `menuCategoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menuCategories`
--

INSERT INTO `menuCategories` (`menuCategoryID`, `menuCategoryName`) VALUES
(1, 'Breakfast'),
(2, 'Lunch'),
(3, 'Vegetarian'),
(4, 'Non-Vegetarian'),
(5, 'Dessert');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`),
  ADD UNIQUE KEY `emailAddress` (`emailAddress`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`dishID`),
  ADD UNIQUE KEY `dishCode` (`dishCode`);

--
-- Indexes for table `menuCategories`
--
ALTER TABLE `menuCategories`
  ADD PRIMARY KEY (`menuCategoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `dishID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menuCategories`
--
ALTER TABLE `menuCategories`
  MODIFY `menuCategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
