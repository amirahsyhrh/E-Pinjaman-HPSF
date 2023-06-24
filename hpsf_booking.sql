-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2020 at 05:44 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hpsf_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(255) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, '781130015492', '38344631939178214802c8b0c09e4071'),
(2, '771020015978', '38344631939178214802c8b0c09e4071'),
(3, '860106236557', '38344631939178214802c8b0c09e4071'),
(4, '790721015798', '38344631939178214802c8b0c09e4071');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `jawatan` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `telefon` varchar(100) NOT NULL,
  `majlis` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `lainLokasi` varchar(255) NOT NULL,
  `peralatan` varchar(100) NOT NULL,
  `start_day` date NOT NULL,
  `end_day` date NOT NULL,
  `start_time` text NOT NULL,
  `end_time` text NOT NULL,
  `cancel` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `username`, `name`, `jawatan`, `jabatan`, `unit`, `telefon`, `majlis`, `lokasi`, `lainLokasi`, `peralatan`, `start_day`, `end_day`, `start_time`, `end_time`, `cancel`) VALUES
(1, 'amirahh', 'Syahirah Amirah', 'Petugas', 'Patologi', 'Farmasi', '123', 'Perhimpunan Pagi', 'Dewan Bestari', '', 'Laptop', '2020-09-01', '2020-09-01', '10:00', '16:00', '4'),
(2, 'hpsf', 'Mohd Haziq Bin Ali', 'petugas', 'Patologi', 'Unit Pengambilan Darah', '127', 'mesyuarat mingguan', 'Dewan Serbaguna', '', 'Laptop', '2020-09-06', '2020-09-06', '10:00', '12:00', '1'),
(3, 'hpsf', 'Syahirah Amirah', 'Pilih Jawatan', 'Pilih Jabatan', 'Pilih Unit', '123', 'saa', 'Dewan Semarak', '', 'Lcd Projector, Camera', '2020-09-09', '2020-09-09', '15:45', '15:45', '5');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_username` varchar(50) NOT NULL,
  `staff_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
