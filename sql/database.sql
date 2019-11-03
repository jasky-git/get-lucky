-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 30, 2019 at 04:26 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `get-lucky-db`
--

DROP SCHEMA IF EXISTS `get-lucky-db`;
CREATE SCHEMA `get-lucky-db`;
USE `get-lucky-db`;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tele_username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

--
-- Dumping data for table `users`
--

INSERT INTO `user` (`userid`, `name`, `tele_username`, `password`) VALUES
(1, 'peter', 'peter@smu.edu.sg', 'apple'),
(2, 'tom', 'tom@smu.edu.sg', 'apple'),
(3, 'jack', 'jack@smu.edu.sg', 'orange'),
(4, 'joe', 'joe@smu.edu.sg', 'orange');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
