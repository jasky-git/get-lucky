-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 03, 2019 at 06:45 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `get-lucky-db`
--
CREATE DATABASE IF NOT EXISTS `get-lucky-db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `get-lucky-db`;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE `history` (
  `historyId` int(11) NOT NULL,
  `id` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`historyId`, `id`, `venue`, `address`, `lat`, `lng`) VALUES
(1, '4bfa9e214a67c928807d28cf', 'West Coast Recreation Centre', '12 West Coast Walk', '1.309619340764771', '103.76398086547852'),
(2, '4b2bb203f964a52045b924e3', 'McDonald\'s', 'West Coast Park, Car Park 3', '1.2976214530854049', '103.7633571381224'),
(3, '4dfcb419d4c001cca36d3977', 'Transformers The Ride: The Ultimate 3D Battle', 'Universal Studios Singapore', '1.2543801160622412', '103.8216062847745');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `userid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tele_username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `tele_username`, `password`) VALUES
('1', 'peter', 'peter@smu.edu.sg', 'apple'),
('2', 'tom', 'tom@smu.edu.sg', 'apple'),
('3', 'jack', 'jack@smu.edu.sg', 'orange'),
('4', 'joe', 'joe@smu.edu.sg', 'orange');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`historyId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `historyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
