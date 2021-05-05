-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 06:27 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo-oophp-crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `ID` int(11) NOT NULL,
  `TaskName` text NOT NULL,
  `TaskBody` text NOT NULL,
  `TaskAdded` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `TaskChecked` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`ID`, `TaskName`, `TaskBody`, `TaskAdded`, `TaskChecked`) VALUES
(36, 'yseyr', 'syser', '2021-05-05 09:08:33', 0),
(43, ' ', 'eeeeeeeeeeeeeeeeee', '2021-05-05 12:10:51', 0),
(45, 'llllllllll', 'eeeeeeeeeeeeeeeeee', '2021-05-05 10:55:14', 0),
(47, 'llllllllll', 'eeeeeeeeeeeeeeeeee', '2021-05-05 10:57:49', 0),
(48, 'llllllllll', 'eeeeeeeeeeeeeeeeee', '2021-05-05 11:20:39', 0),
(49, 'rrrrrrrrrrrrrrrrr', 'wwwwwwwwwwwwwwww', '2021-05-05 12:05:10', 0),
(53, '45645', '456456', '2021-05-05 12:20:56', 0),
(54, 'Office', 'Clean the pa', '2021-05-05 12:21:22', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
