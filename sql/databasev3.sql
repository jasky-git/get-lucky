-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 06, 2019 at 01:35 PM
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
  `venueId` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `userId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`historyId`, `venueId`, `venue`, `address`, `lat`, `lng`, `title`, `date`, `userId`) VALUES
(1, '4b431f55f964a52060dc25e3', 'Upper Serangoon Shopping Centre', '756 Upper Serangoon Rd', '1.3533162', '103.879036', 'hello', '2019-11-07', '1'),
(2, '529c396a11d24801c320060a', 'Oblong', '10 Maju Ave', '1.3649003219942686', '103.86555634034566', 'hello', '2019-11-07', '1'),
(3, '4c330ff4213c2d7fb747365d', 'The Castel Cafe', '555 Ang Mo Kio Ave 10 #01-1940', '1.370820351102451', '103.85684861904122', 'hello', '2019-11-07', '1'),
(4, '5083df13e4b0a0ddb3ae6051', 'Super Bowl @ Kovan', 'NIL', '1.3602772358493163', '103.88802201173027', 'hello', '2019-11-07', '1'),
(5, '560677b7498e2938aee7f9e9', 'Mid Autumn Festival 2015 @ Bishan', 'NIL', '1.349073052406311', '103.85138702392578', 'hello', '2019-11-07', '1'),
(6, '5d943bee5dd7580007e8c58e', 'Nerf Action Experience', 'Marina Square', '1.291438', '103.85761', 'hello', '2019-11-07', '1'),
(7, '53c121fd498e43404187736a', 'Paris Baguette Cafe', '200 Victoria St # B1-K28/29. Bugis Junction', '1.2993892079256404', '103.8556765337856', 'hello', '2019-11-07', '1'),
(8, '4b26d224f964a520718124e3', 'Killiney Kopitiam', '67 Killiney Rd', '1.299014546078975', '103.83927941613379', 'hello', '2019-11-07', '1'),
(9, '4b058815f964a520afb022e3', 'Plaza Singapura', '68 Orchard Rd', '1.3000502547574073', '103.84509930948022', 'hello', '2019-11-07', '1'),
(10, '5b9bdc5cdeb4950025d11751', 'K Bowling Club', '313 Orchard Road #03-27', '1.3013188', '103.83843', 'hello', '2019-11-07', '1'),
(11, '4d15fc6d81cea35d7bfcddec', 'Bowling', 'Amk', '1.374551', '103.855782', 'trust', '2019-11-07', '1'),
(12, '4c330ff4213c2d7fb747365d', 'The Castel Cafe', '555 Ang Mo Kio Ave 10 #01-1940', '1.370820351102451', '103.85684861904122', 'trust', '2019-11-07', '1'),
(13, '52b816b9498ef4409e544548', 'Lari Lari Di Amk', 'NIL', '1.374649167060852', '103.83716583251953', 'trust', '2019-11-07', '1');

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
  MODIFY `historyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
