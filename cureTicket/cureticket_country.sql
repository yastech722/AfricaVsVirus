-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 09:10 PM
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
-- Database: `cureticket_country`
--

-- --------------------------------------------------------

--
-- Table structure for table `country_name`
--

CREATE TABLE `country_name` (
  `country_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `database_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country_name`
--

INSERT INTO `country_name` (`country_id`, `name`, `database_name`) VALUES
(1, 'Nigeria', 'cureticket_ng'),
(2, 'Egypt', 'cureticket_eg');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `language_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`language_id`, `name`) VALUES
(1, 'ARABIC'),
(2, 'ENGLISH');

-- --------------------------------------------------------

--
-- Table structure for table `speciality_table`
--

CREATE TABLE `speciality_table` (
  `id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `speciality_table`
--

INSERT INTO `speciality_table` (`id`, `type`) VALUES
(1, 'OBSTETRICS & GYNECOLOGY'),
(2, 'PEDIATRICS'),
(3, 'SURGERY'),
(4, 'DENTISTRY'),
(5, 'PATHOLOGY'),
(6, 'HEMATOLOGY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country_name`
--
ALTER TABLE `country_name`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`language_id`);

--
-- Indexes for table `speciality_table`
--
ALTER TABLE `speciality_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country_name`
--
ALTER TABLE `country_name`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `speciality_table`
--
ALTER TABLE `speciality_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
