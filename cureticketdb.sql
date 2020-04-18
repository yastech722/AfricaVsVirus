-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 11:23 AM
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
-- Database: `cureticketdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_table`
--

CREATE TABLE `appointment_table` (
  `appointment_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `is_received` int(1) NOT NULL DEFAULT 0,
  `Appointment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment_table`
--

INSERT INTO `appointment_table` (`appointment_id`, `patient_id`, `is_received`, `Appointment_date`) VALUES
(1, 1, 0, '2019-09-20 21:20:05'),
(2, 1, 0, '2019-09-20 21:20:35'),
(3, 1, 0, '2019-09-20 21:26:26');

-- --------------------------------------------------------

--
-- Table structure for table `chat_table`
--

CREATE TABLE `chat_table` (
  `chat_id` int(11) NOT NULL,
  `sender` varchar(45) NOT NULL,
  `recipient` varchar(45) NOT NULL,
  `message` varchar(100) NOT NULL,
  `message_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_table`
--

INSERT INTO `chat_table` (`chat_id`, `sender`, `recipient`, `message`, `message_date`) VALUES
(1, 'Sender_email', 'Receipent_email', 'Hello Doctor, my head hurst', '2020-04-18 10:12:45');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_table`
--

CREATE TABLE `doctor_table` (
  `doctor_id` int(11) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `location` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `nationality` varchar(45) NOT NULL,
  `phone_number` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_table`
--

INSERT INTO `doctor_table` (`doctor_id`, `fullname`, `location`, `state`, `nationality`, `phone_number`) VALUES
(1, 'Yusuf', 'Badawa Layout Kano', 'Kano', 'Nigeria', '07063490700');

-- --------------------------------------------------------

--
-- Table structure for table `order_details_table`
--

CREATE TABLE `order_details_table` (
  `detail_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `prescription_note` varchar(120) NOT NULL,
  `entry_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details_table`
--

INSERT INTO `order_details_table` (`detail_id`, `doctor_id`, `patient_id`, `prescription_note`, `entry_date`) VALUES
(1, 1, 1, 'paracePcm b/d for 7 days', '2019-09-21 21:54:43');

-- --------------------------------------------------------

--
-- Table structure for table `patient_table`
--

CREATE TABLE `patient_table` (
  `patient_id` int(11) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone_number` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `lga` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `nationality` varchar(45) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `date_registered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_table`
--

INSERT INTO `patient_table` (`patient_id`, `fullname`, `email`, `phone_number`, `password`, `lga`, `state`, `nationality`, `gender`, `date_registered`) VALUES
(1, 'sadiq', 'q@q.com', '07063490700', '1', 'lga', 'state', 'ng', 'm', '2019-09-23'),
(16, 'sadiq yusuf', 'k@k.com', '09099614141', '12', 'lga', 'state', 'ng', 'm', '2019-10-03');

-- --------------------------------------------------------

--
-- Table structure for table `prescription_order_table`
--

CREATE TABLE `prescription_order_table` (
  `order_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `quantity` int(3) NOT NULL,
  `charges` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `confirm_order` int(1) NOT NULL DEFAULT 0,
  `confirm_delivery` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription_order_table`
--

INSERT INTO `prescription_order_table` (`order_id`, `patient_id`, `quantity`, `charges`, `order_date`, `confirm_order`, `confirm_delivery`) VALUES
(1, 1, 7, 700, '2019-09-21 23:18:37', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_summary_table`
--

CREATE TABLE `transaction_summary_table` (
  `summary_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role` varchar(45) NOT NULL,
  `transaction_type` varchar(2) NOT NULL,
  `description` varchar(45) NOT NULL,
  `amount` int(11) NOT NULL,
  `transaction_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_summary_table`
--

INSERT INTO `transaction_summary_table` (`summary_id`, `user_id`, `role`, `transaction_type`, `description`, `amount`, `transaction_date`) VALUES
(1, 1, 'patient', 'CR', 'you credited your wallet', 200, '2019-10-07 00:00:00'),
(2, 3, 'Doctor', 'DR', 'Debited your wallet', 100, '2019-10-07 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_table`
--

CREATE TABLE `vendor_table` (
  `vendor_id` int(11) NOT NULL,
  `business_name` varchar(45) NOT NULL,
  `location` varchar(45) NOT NULL,
  `State` varchar(45) NOT NULL,
  `Nationality` varchar(45) NOT NULL,
  `phone_number` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_table`
--

INSERT INTO `vendor_table` (`vendor_id`, `business_name`, `location`, `State`, `Nationality`, `phone_number`) VALUES
(1, 'Zilla Pharmacy', 'Badawa Layout Kano', 'Kano', 'Nigeria', '09099614141');

-- --------------------------------------------------------

--
-- Table structure for table `wallet_table`
--

CREATE TABLE `wallet_table` (
  `id` int(11) NOT NULL,
  `role` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_table`
--
ALTER TABLE `appointment_table`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `chat_table`
--
ALTER TABLE `chat_table`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `doctor_table`
--
ALTER TABLE `doctor_table`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `order_details_table`
--
ALTER TABLE `order_details_table`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `patient_table`
--
ALTER TABLE `patient_table`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `prescription_order_table`
--
ALTER TABLE `prescription_order_table`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `transaction_summary_table`
--
ALTER TABLE `transaction_summary_table`
  ADD PRIMARY KEY (`summary_id`);

--
-- Indexes for table `vendor_table`
--
ALTER TABLE `vendor_table`
  ADD PRIMARY KEY (`vendor_id`);

--
-- Indexes for table `wallet_table`
--
ALTER TABLE `wallet_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_table`
--
ALTER TABLE `appointment_table`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chat_table`
--
ALTER TABLE `chat_table`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor_table`
--
ALTER TABLE `doctor_table`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_details_table`
--
ALTER TABLE `order_details_table`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient_table`
--
ALTER TABLE `patient_table`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `prescription_order_table`
--
ALTER TABLE `prescription_order_table`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaction_summary_table`
--
ALTER TABLE `transaction_summary_table`
  MODIFY `summary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vendor_table`
--
ALTER TABLE `vendor_table`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wallet_table`
--
ALTER TABLE `wallet_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
