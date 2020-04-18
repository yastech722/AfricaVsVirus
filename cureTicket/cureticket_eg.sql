-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 09:12 PM
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
-- Database: `cureticket_eg`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor_table`
--

CREATE TABLE `doctor_table` (
  `doctor_id` int(11) NOT NULL,
  `language` varchar(45) NOT NULL,
  `full_name` varchar(45) NOT NULL,
  `email` varchar(44) NOT NULL,
  `speciality` varchar(45) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(9) NOT NULL,
  `phone_number` varchar(45) NOT NULL,
  `license_no` varchar(45) NOT NULL,
  `license_expire_date` date NOT NULL,
  `credential` varchar(255) NOT NULL,
  `entry_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_table`
--

INSERT INTO `doctor_table` (`doctor_id`, `language`, `full_name`, `email`, `speciality`, `dob`, `gender`, `phone_number`, `license_no`, `license_expire_date`, `credential`, `entry_date`) VALUES
(1, 'Arabic', 'vgvghvh', 'yastech722@gmail.com', 'Female', '2020-04-02', 'Female', '123456789', '515555454', '2020-04-22', 'Array', '2020-04-18 19:37:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_table`
--
ALTER TABLE `doctor_table`
  ADD PRIMARY KEY (`doctor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_table`
--
ALTER TABLE `doctor_table`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
