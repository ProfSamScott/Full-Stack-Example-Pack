-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2019 at 05:46 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

--
-- Database: `scott`
--

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `student_id` int(11) NOT NULL,
  `a1` int(11) NOT NULL DEFAULT '0',
  `a2` int(11) NOT NULL DEFAULT '0',
  `a3` int(11) NOT NULL DEFAULT '0',
  `a4` int(11) NOT NULL DEFAULT '0',
  `a5` int(11) NOT NULL DEFAULT '0',
  `midterm_exam` int(11) NOT NULL DEFAULT '0',
  `final_exam` int(11) NOT NULL DEFAULT '0',
  `start` date NOT NULL DEFAULT '2019-09-04',
  `end` date DEFAULT NULL,
  `reflection` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`firstname`, `lastname`, `student_id`, `a1`, `a2`, `a3`, `a4`, `a5`, `midterm_exam`, `final_exam`, `start`, `end`, `reflection`) VALUES
('Sam', 'Scott', 1, 0, 0, 0, 0, 0, 0, 10, '2019-09-04', NULL, NULL),
('Anne', 'St-amand', 2, 10, 10, 10, 10, 10, 90, 100, '2018-09-05', '2018-12-21', 'Good course!'),
('Rosa', 'Rosannadanna', 3, 1, 2, 3, 4, 5, 6, 17, '2019-09-04', NULL, NULL),
('Max', 'Maximus', 4, 10, 9, 8, 7, 6, 5, 14, '2019-09-04', '2019-12-20', 'I liked this course. More databases!'),
('Fiver', 'Fivarious', 5, 8, 8, 8, 8, 8, 80, 90, '2019-09-04', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
