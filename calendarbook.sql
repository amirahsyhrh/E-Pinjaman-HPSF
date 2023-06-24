-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2020 at 09:53 AM
-- Server version: 10.4.6-MariaDB
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
-- Database: `calendarbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `username`, `password`) VALUES
(101, 'hpsf', 'hpsf123');

-- --------------------------------------------------------

--
-- Table structure for table `tablename`
--

CREATE TABLE `tablename` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `department` varchar(40) NOT NULL,
  `unit` varchar(70) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `majlis` varchar(50) NOT NULL,
  `location` varchar(30) NOT NULL,
  `item` varchar(20) NOT NULL,
  `start_day` text DEFAULT NULL,
  `end_day` text DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `dateUpdate` date NOT NULL,
  `canceled` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablename`
--

INSERT INTO `tablename` (`id`, `name`, `department`, `unit`, `phone`, `majlis`, `location`, `item`, `start_day`, `end_day`, `start_time`, `end_time`, `dateUpdate`, `canceled`) VALUES
(30, 'SITI HAIDA BINTI MOHD ANUAR', 'ddd', '', '09888888', 'tilawah', 'DewanSerbaguna', 'Laptop,Camera,,,', '2020-06-27', '2020-06-27', '16:25:00', '16:25:00', '2020-06-29', 2),
(37, 'sabri hilal', 'ocg', '', '09888888', 'tilawah', 'DewanSerbaguna', 'PA System,', '2020-06-28', '2020-06-28', '16:25:00', '04:26:00', '0000-00-00', 0),
(38, 'AMAT', 'unit ict', '', '09888888', 'tilawah', 'DewanSerbaguna', 'Lcd,', '2020-06-27', '2020-06-27', '16:25:00', '04:26:00', '0000-00-00', 0),
(39, 'sabri hilal', 'kewangan', '', '0177913587', 'tilawah aquran', 'DewanSemarak', 'Laptop,PA System,', '2020-06-27', '2020-06-27', '16:25:00', '04:26:00', '0000-00-00', 0),
(40, 'haida', 'ocg', '', '09888888', 'tilawah', 'DewanSerbaguna', 'Laptop,', '2020-06-27', '2020-06-27', '16:25:00', '04:26:00', '0000-00-00', 0),
(41, 'kkkk', 'ocg', '', '09888888', 'tilawah', 'DewanSaujana', 'Laptop,', '2020-06-27', '2020-06-27', '16:25:00', '04:26:00', '0000-00-00', 0),
(42, 'miza', 'ict', '', '127', 'cme ', 'DewanSaujana', 'Laptop,Lcd,PA System', '2020-07-01', '2020-07-01', '10:30:00', '13:00:00', '0000-00-00', 0),
(43, 'mia', 'Kecemasan dan Trauma', '', '09888888', 'tilawah', 'MakmalKomputer', '', '2020-07-01', '2020-07-02', '00:43:00', '12:43:00', '0000-00-00', 0),
(44, 'haida', 'Psikiatri', '', '09888888', 'tilawah', 'MakmalKomputer', 'Camera,', '2020-07-01', '2020-07-01', '12:44:00', '00:44:00', '0000-00-00', 0),
(45, 'ijat', 'Pengurusan', 'Pej Pengarah', '0177913587', 'morbidity &amp; mortality meeting', 'DewanSemarak', 'Laptop,Lcd,', '2020-07-01', '2020-07-01', '15:52:00', '16:55:00', '0000-00-00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `tablename`
--
ALTER TABLE `tablename`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `tablename`
--
ALTER TABLE `tablename`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
