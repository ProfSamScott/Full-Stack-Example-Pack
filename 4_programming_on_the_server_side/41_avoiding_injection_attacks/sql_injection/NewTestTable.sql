-- phpMyAdmin SQL Dump
-- version 3.3.2deb1ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2015 at 08:28 AM
-- Server version: 5.1.73
-- PHP Version: 5.3.2-1ubuntu4.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scottsam`
--

-- --------------------------------------------------------

--
-- Table structure for table `NewTestTable`
--

CREATE TABLE IF NOT EXISTS `NewTestTable` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `Age` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `NewTestTable`
--

INSERT INTO `NewTestTable` (`ID`, `Name`, `Age`) VALUES
(33, 'Ernest', 12),
(32, 'Deiter', 23),
(31, 'Candy', 34),
(30, 'Bobbi', 45),
(29, 'Adam', 21),
(34, 'Francoise', 18),
(35, 'Gertrude', 66),
(36, 'Harpreet', 51),
(37, 'Inderjeet', 32),
(38, 'Jasmine', 2);
