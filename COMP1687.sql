-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 20, 2020 at 08:12 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `COMP1687`
--

-- --------------------------------------------------------

--
-- Table structure for table `Evaluation`
--

CREATE TABLE `Evaluation` (
  `ID` int(11) NOT NULL,
  `Grade` int(11) NOT NULL,
  `EComment` varchar(6553) NOT NULL,
  `StudentImage` blob NOT NULL,
  `ImageType` varchar(500) NOT NULL,
  `EvaluationTo` varchar(9) NOT NULL,
  `EvaluationFrom` varchar(9) NOT NULL,
  `GroupEva` int(11) NOT NULL,
  `UploadTime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `SaveComment`
--

CREATE TABLE `SaveComment` (
  `ID` int(11) NOT NULL,
  `EvaluationTo` varchar(9) NOT NULL,
  `EvaluationFrom` varchar(9) NOT NULL,
  `SaveComment` varchar(500) NOT NULL,
  `SaveGrade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SaveComment`
--

INSERT INTO `SaveComment` (`ID`, `EvaluationTo`, `EvaluationFrom`, `SaveComment`, `SaveGrade`) VALUES
(23, '000000002', '000000001', 'desfase', 7);

-- --------------------------------------------------------

--
-- Table structure for table `UserTable`
--

CREATE TABLE `UserTable` (
  `ID` int(11) NOT NULL,
  `UserID` varchar(9) NOT NULL,
  `UserEmail` varchar(100) NOT NULL,
  `UserPassword` varchar(100) NOT NULL,
  `UserGroup` int(11) NOT NULL,
  `UserLevel` varchar(100) NOT NULL,
  `OverallGrade` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `UserTable`
--

INSERT INTO `UserTable` (`ID`, `UserID`, `UserEmail`, `UserPassword`, `UserGroup`, `UserLevel`, `OverallGrade`) VALUES
(1, '000000000', 'lc8884l@gre.ac.uk', '4c93008615c2d041e33ebac605d14b5b', 0, 'Tutor', 0),
(40, '000000001', 'email1@gre.ac.uk', '0cc175b9c0f1b6a831c399e269772661', 1, 'Student', 5),
(41, '000000002', 'email2@gre.ac.uk', '0cc175b9c0f1b6a831c399e269772661', 1, 'Student', 0.5),
(42, '000000003', 'email3@gre.ac.uk', '0cc175b9c0f1b6a831c399e269772661', 1, 'Student', 4),
(43, '000000004', 'email4@gre.ac.uk', '0cc175b9c0f1b6a831c399e269772661', 2, 'Student', 7),
(44, '000000005', 'email5@gre.ac.uk', '0cc175b9c0f1b6a831c399e269772661', 2, 'Student', 3),
(45, '000000006', 'email6@gre.ac.uk', '0cc175b9c0f1b6a831c399e269772661', 2, 'Student', 6),
(46, '000000007', 'email7@gre.ac.uk', '0cc175b9c0f1b6a831c399e269772661', 3, 'Student', 4),
(47, '000000008', 'email8@gre.ac.uk', '0cc175b9c0f1b6a831c399e269772661', 3, 'Student', 4.5),
(48, '000000009', 'email9@gre.ac.uk', '0cc175b9c0f1b6a831c399e269772661', 3, 'Student', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Evaluation`
--
ALTER TABLE `Evaluation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `SaveComment`
--
ALTER TABLE `SaveComment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `UserTable`
--
ALTER TABLE `UserTable`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Evaluation`
--
ALTER TABLE `Evaluation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `SaveComment`
--
ALTER TABLE `SaveComment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `UserTable`
--
ALTER TABLE `UserTable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
