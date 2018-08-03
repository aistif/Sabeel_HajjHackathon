-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 02, 2018 at 07:54 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Sabeel_HajjHackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `logID` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `description` int(11) NOT NULL,
  `logTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `refRows`
--

CREATE TABLE `refRows` (
  `rID` int(10) NOT NULL,
  `rowID` varchar(3) NOT NULL,
  `SRID` int(10) NOT NULL,
  `isFull` enum('y','n') NOT NULL DEFAULT 'n',
  `timeAdded` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `refRows`
--

INSERT INTO `refRows` (`rID`, `rowID`, `SRID`, `isFull`, `timeAdded`) VALUES
(1, 'A1', 25, 'n', NULL),
(2, 'A2', 25, 'n', NULL),
(3, 'A3', 25, 'n', NULL),
(4, 'A4', 25, 'n', NULL),
(5, 'B1', 25, 'n', NULL),
(6, 'B2', 25, 'n', NULL),
(7, 'B3', 25, 'n', NULL),
(8, 'B4', 25, 'n', NULL),
(9, 'C1', 25, 'n', NULL),
(10, 'C2', 25, 'n', NULL),
(11, 'C3', 25, 'n', NULL),
(12, 'C4', 25, 'n', NULL),
(13, 'D1', 25, 'n', NULL),
(14, 'D2', 25, 'n', NULL),
(15, 'D3', 25, 'n', NULL),
(16, 'D4', 25, 'n', NULL),
(17, 'A1', 26, 'n', NULL),
(18, 'A2', 26, 'n', NULL),
(19, 'A3', 26, 'n', NULL),
(20, 'A4', 26, 'n', NULL),
(21, 'B1', 26, 'n', NULL),
(22, 'B2', 26, 'n', NULL),
(23, 'B3', 26, 'n', NULL),
(24, 'B4', 26, 'n', NULL),
(25, 'C1', 26, 'n', NULL),
(26, 'C2', 26, 'n', NULL),
(27, 'C3', 26, 'n', NULL),
(28, 'C4', 26, 'n', NULL),
(29, 'D1', 26, 'n', NULL),
(30, 'D2', 26, 'n', NULL),
(31, 'D3', 26, 'n', NULL),
(32, 'D4', 26, 'n', NULL),
(33, 'A1', 26, 'n', NULL),
(34, 'A2', 26, 'n', NULL),
(35, 'A3', 26, 'n', NULL),
(36, 'A4', 26, 'n', NULL),
(37, 'B1', 26, 'n', NULL),
(38, 'B2', 26, 'n', NULL),
(39, 'B3', 26, 'n', NULL),
(40, 'B4', 26, 'n', NULL),
(41, 'C1', 26, 'n', NULL),
(42, 'C2', 26, 'n', NULL),
(43, 'C3', 26, 'n', NULL),
(44, 'C4', 26, 'n', NULL),
(45, 'D1', 26, 'n', NULL),
(46, 'D2', 26, 'n', NULL),
(47, 'D3', 26, 'n', NULL),
(48, 'D4', 26, 'n', NULL),
(49, 'A1', 26, 'n', NULL),
(50, 'A2', 26, 'n', NULL),
(51, 'A3', 26, 'n', NULL),
(52, 'A4', 26, 'n', NULL),
(53, 'B1', 26, 'n', NULL),
(54, 'B2', 26, 'n', NULL),
(55, 'B3', 26, 'n', NULL),
(56, 'B4', 26, 'n', NULL),
(57, 'C1', 26, 'n', NULL),
(58, 'C2', 26, 'n', NULL),
(59, 'C3', 26, 'n', NULL),
(60, 'C4', 26, 'n', NULL),
(61, 'D1', 26, 'n', NULL),
(62, 'D2', 26, 'n', NULL),
(63, 'D3', 26, 'n', NULL),
(64, 'D4', 26, 'n', NULL),
(65, 'A1', 29, 'n', NULL),
(66, 'A2', 29, 'n', NULL),
(67, 'A3', 29, 'n', NULL),
(68, 'A4', 29, 'n', NULL),
(69, 'B1', 29, 'n', NULL),
(70, 'B2', 29, 'n', NULL),
(71, 'B3', 29, 'n', NULL),
(72, 'B4', 29, 'n', NULL),
(73, 'C1', 29, 'n', NULL),
(74, 'C2', 29, 'n', NULL),
(75, 'C3', 29, 'n', NULL),
(76, 'C4', 29, 'n', NULL),
(77, 'D1', 29, 'n', NULL),
(78, 'D2', 29, 'n', NULL),
(79, 'D3', 29, 'n', NULL),
(80, 'D4', 29, 'n', NULL),
(81, 'A1', 29, 'n', NULL),
(82, 'A2', 29, 'n', NULL),
(83, 'A3', 29, 'n', NULL),
(84, 'A4', 29, 'n', NULL),
(85, 'B1', 29, 'n', NULL),
(86, 'B2', 29, 'n', NULL),
(87, 'B3', 29, 'n', NULL),
(88, 'B4', 29, 'n', NULL),
(89, 'C1', 29, 'n', NULL),
(90, 'C2', 29, 'n', NULL),
(91, 'C3', 29, 'n', NULL),
(92, 'C4', 29, 'n', NULL),
(93, 'D1', 29, 'n', NULL),
(94, 'D2', 29, 'n', NULL),
(95, 'D3', 29, 'n', NULL),
(96, 'D4', 29, 'n', NULL),
(97, 'A1', 29, 'n', NULL),
(98, 'A2', 29, 'n', NULL),
(99, 'A3', 29, 'n', NULL),
(100, 'A4', 29, 'n', NULL),
(101, 'B1', 29, 'n', NULL),
(102, 'B2', 29, 'n', NULL),
(103, 'B3', 29, 'n', NULL),
(104, 'B4', 29, 'n', NULL),
(105, 'C1', 29, 'n', NULL),
(106, 'C2', 29, 'n', NULL),
(107, 'C3', 29, 'n', NULL),
(108, 'C4', 29, 'n', NULL),
(109, 'D1', 29, 'n', NULL),
(110, 'D2', 29, 'n', NULL),
(111, 'D3', 29, 'n', NULL),
(112, 'D4', 29, 'n', NULL),
(113, 'A1', 29, 'n', NULL),
(114, 'A2', 29, 'n', NULL),
(115, 'A3', 29, 'n', NULL),
(116, 'A4', 29, 'n', NULL),
(117, 'B1', 29, 'n', NULL),
(118, 'B2', 29, 'n', NULL),
(119, 'B3', 29, 'n', NULL),
(120, 'B4', 29, 'n', NULL),
(121, 'C1', 29, 'n', NULL),
(122, 'C2', 29, 'n', NULL),
(123, 'C3', 29, 'n', NULL),
(124, 'C4', 29, 'n', NULL),
(125, 'D1', 29, 'n', NULL),
(126, 'D2', 29, 'n', NULL),
(127, 'D3', 29, 'n', NULL),
(128, 'D4', 29, 'n', NULL),
(129, 'A1', 33, 'n', NULL),
(130, 'A2', 33, 'n', NULL),
(131, 'A3', 33, 'n', NULL),
(132, 'A4', 33, 'n', NULL),
(133, 'B1', 33, 'n', NULL),
(134, 'B2', 33, 'n', NULL),
(135, 'B3', 33, 'n', NULL),
(136, 'B4', 33, 'n', NULL),
(137, 'C1', 33, 'n', NULL),
(138, 'C2', 33, 'n', NULL),
(139, 'C3', 33, 'n', NULL),
(140, 'C4', 33, 'n', NULL),
(141, 'D1', 33, 'n', NULL),
(142, 'D2', 33, 'n', NULL),
(143, 'D3', 33, 'n', NULL),
(144, 'D4', 33, 'n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `reportID` int(10) NOT NULL,
  `issueTitle` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` enum('fill','replace','ommit','other') NOT NULL,
  `otherCat` varchar(50) DEFAULT NULL,
  `isSolved` enum('y','n') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `scannedCard`
--

CREATE TABLE `scannedCard` (
  `hajjID` varchar(32) NOT NULL,
  `lastScanned` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `smartRef`
--

CREATE TABLE `smartRef` (
  `SRID` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `IP` varchar(39) NOT NULL,
  `temp` int(2) NOT NULL,
  `loc` text NOT NULL,
  `isFull` enum('y','n') NOT NULL DEFAULT 'n',
  `status` enum('online','problem','offline','ommitted') NOT NULL DEFAULT 'online',
  `lastActive` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smartRef`
--

INSERT INTO `smartRef` (`SRID`, `name`, `IP`, `temp`, `loc`, `isFull`, `status`, `lastActive`) VALUES
(25, 'SR_N501', '192.168.6.239', 2, '--the location of ref--', 'n', 'online', '2018-08-02 17:44:00'),
(26, 'SR_N735', '192.168.10.159', 2, '--the location of ref--', 'n', 'online', '2018-08-02 17:44:26'),
(27, 'SR_N735', '192.168.10.159', 4, '--the location of ref--', 'n', 'online', '2018-08-02 17:44:26'),
(28, 'SR_N735', '192.168.10.159', 5, '--the location of ref--', 'n', 'online', '2018-08-02 17:44:26'),
(29, 'SR_N287', '192.168.8.110', 1, '--the location of ref--', 'n', 'online', '2018-08-02 17:49:09'),
(30, 'SR_N287', '192.168.8.110', 5, '--the location of ref--', 'n', 'online', '2018-08-02 17:49:09'),
(31, 'SR_N287', '192.168.8.110', 0, '--the location of ref--', 'n', 'online', '2018-08-02 17:49:09'),
(32, 'SR_N287', '192.168.8.110', 1, '--the location of ref--', 'n', 'online', '2018-08-02 17:49:09'),
(33, 'SR_N878', '192.168.5.172', 5, '--the location of ref--', 'n', 'online', '2018-08-02 17:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `name` varchar(250) NOT NULL,
  `empID` int(6) NOT NULL,
  `phoneNum` varchar(13) NOT NULL,
  `type` enum('mentor','technician','admin') NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `lastOnline` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `empID`, `phoneNum`, `type`, `pwd`, `lastOnline`) VALUES
(1, 'mUser', 'أحمد', 20303, '0555555555', 'mentor', 'b4b147bc522828731f1a016bfa72c073', '2018-08-02 13:56:33'),
(2, 'tUser', 'محمد', 20301, '0500000000', 'technician', '2d579dc29360d8bbfbb4aa541de5afa9', '2018-08-02 12:23:50'),
(3, 'tUser', 'admin', 10301, '0511111111', 'admin', '2d579dc29360d8bbfbb4aa541de5afa9', '2018-08-02 12:25:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`logID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `refRows`
--
ALTER TABLE `refRows`
  ADD PRIMARY KEY (`rID`),
  ADD KEY `SRID` (`SRID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`reportID`);

--
-- Indexes for table `smartRef`
--
ALTER TABLE `smartRef`
  ADD PRIMARY KEY (`SRID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `logID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `refRows`
--
ALTER TABLE `refRows`
  MODIFY `rID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `reportID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `smartRef`
--
ALTER TABLE `smartRef`
  MODIFY `SRID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `userID` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `refRows`
--
ALTER TABLE `refRows`
  ADD CONSTRAINT `SRID` FOREIGN KEY (`SRID`) REFERENCES `smartRef` (`SRID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
