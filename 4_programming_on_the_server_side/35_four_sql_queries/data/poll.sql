-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2025 at 08:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_polls_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE `poll` (
  `ID` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `question` varchar(200) NOT NULL,
  `userid` varchar(20) DEFAULT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) DEFAULT NULL,
  `option4` varchar(100) DEFAULT NULL,
  `vote1` int(11) NOT NULL DEFAULT 0,
  `vote2` int(11) NOT NULL DEFAULT 0,
  `vote3` int(11) NOT NULL DEFAULT 0,
  `vote4` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`ID`, `title`, `question`, `userid`, `option1`, `option2`, `option3`, `option4`, `vote1`, `vote2`, `vote3`, `vote4`) VALUES
(1, 'The PhpMyAdmin Poll', 'Do you like phpMyAdmin?', NULL, 'Yes', 'No', NULL, NULL, 99, 5, 0, 0),
(2, 'Fruit Poll', 'Which fruit is the most sour?', 'samscott', 'Apple', 'Grape', 'Orange', 'Lemon', 0, 0, 0, 0),
(3, 'Programming Poll', 'How long have you been programming?', 'jethro', 'Less than 1 month', 'Up to 1 year', '1 to 5 years', 'More than 5 years', 0, 0, 0, 0),
(4, 'Humor Poll', 'Do you prefer the zany, madcap humor of Mr. Show, or the predictable, broad humor of a cheaply-produced sitcom?', NULL, 'I love the dry, absurdist, Pythonesque hijinks of a Mr. Show sketch.', 'Sitcoms make me laugh.', 'Laughter is the root of all evil.', NULL, 0, 0, 0, 0),
(5, 'My Poll', 'How are you?', NULL, 'Fine', 'Awesome', NULL, NULL, 0, 0, 0, 0),
(982, 'Monkeys', 'Best monkey?', NULL, 'Spider', 'Macaque', 'Capuchin', NULL, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `poll`
--
ALTER TABLE `poll`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=983;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
