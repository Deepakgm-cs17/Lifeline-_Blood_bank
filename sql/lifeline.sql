-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 17, 2020 at 06:09 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifeline`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_need`
--

DROP TABLE IF EXISTS `blood_need`;
CREATE TABLE IF NOT EXISTS `blood_need` (
  `name` varchar(20) NOT NULL,
  `num1` varchar(10) NOT NULL,
  `hname` text NOT NULL,
  `num2` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bg` varchar(10) NOT NULL,
  `age` int(2) NOT NULL,
  `ad` varchar(60) NOT NULL,
  `pin` int(7) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_need`
--

INSERT INTO `blood_need` (`name`, `num1`, `hname`, `num2`, `email`, `bg`, `age`, `ad`, `pin`) VALUES
('abi', '987456123', 'govt hospital', '7894561235', 'deepakgm.cs17@bitsathy.ac.in', 'AB-ve', 88, 'erode', 8745874),
('postpandi', '9445608832', 'KMCH hospital', '9874563215', 'mdharmaraj1320@gmsil.com', 'B+ve', 99, 'avinashi road', 9874561),
('deepak', '9874561235', 'KMCH hospital', '7894561234', 'deepakmganesan@gmail.com', 'A+ve', 88, 'erwsa', 7894715),
('deepak g m ', '789456123', 'KMCH hospital', '789456123', 'deepakmganesanl@gmail.com', 'AB+ve', 88, 'sathy', 1234567);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `username` varchar(20) NOT NULL,
  `num1` varchar(10) NOT NULL,
  `num2` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bg` text NOT NULL,
  `age` int(2) NOT NULL,
  `password` varchar(10) NOT NULL,
  `ad` text NOT NULL,
  `pin` varchar(7) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `num1`, `num2`, `email`, `bg`, `age`, `password`, `ad`, `pin`) VALUES
('deepak', '9445608832', '8778718623', 'deepakmganesan@gmail.com', 'B+ve', 21, '1234a', 'anupperpalayam', '638503'),
('abinash', '9874561234', '7894561523', 'abi@gmail.com', 'B-ve', 88, '7894aj', 'salem', '7845962');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
