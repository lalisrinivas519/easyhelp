-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2024 at 09:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easyhelp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `adhar_no` varchar(255) NOT NULL,
  `adhar_front` varchar(255) NOT NULL,
  `adhar_back` varchar(255) NOT NULL,
  `pan_no` varchar(255) NOT NULL,
  `pan_image` varchar(255) NOT NULL,
  `acc_no` varchar(255) NOT NULL,
  `acc_holder_name` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `passbook_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userid`, `name`, `email`, `mobile`, `password`, `dob`, `gender`, `address`, `state`, `country`, `pincode`, `adhar_no`, `adhar_front`, `adhar_back`, `pan_no`, `pan_image`, `acc_no`, `acc_holder_name`, `bank_name`, `ifsc_code`, `branch`, `passbook_image`) VALUES
(1, 'admin', 'sai', 'sai@gmail.com', '7676767454', '123', '2024-07-08', 'Male', 'sap', 'Andra Pradesh', 'India', '533413', '', '', '', '', '', '', '', '', '', '', ''),
(2, '123', '', '', '', '121', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `day_bal` varchar(255) NOT NULL,
  `current_bal` varchar(255) NOT NULL,
  `total_bal` varchar(255) NOT NULL,
  `referral` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `award` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `income_received`
--

CREATE TABLE `income_received` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `trn_id` varchar(255) NOT NULL,
  `bank_account` varchar(255) NOT NULL,
  `ifsc` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tree`
--

CREATE TABLE `tree` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `left` varchar(255) NOT NULL,
  `right` varchar(255) NOT NULL,
  `leftcount` varchar(255) NOT NULL,
  `rightcount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `moblie` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userid`, `name`, `email`, `moblie`, `password`) VALUES
(1, '123', 'sneha', 'snehamaloji@gmail.com', '3333333333', '222'),
(2, 'admin', 'sai', 'sai@gmail.com', '7676767454', '123');

-- --------------------------------------------------------

--
-- Table structure for table `wallet_request`
--

CREATE TABLE `wallet_request` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `trn_number` varchar(255) NOT NULL,
  `receipt` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` enum('approval','pending','reject') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wallet_request`
--

INSERT INTO `wallet_request` (`id`, `userid`, `amount`, `trn_number`, `receipt`, `date`, `status`) VALUES
(1, 'admin', '20000', '1234', 'receipt.png', '24-06-24', 'pending'),
(2, 'admin', '200000', '121', 'receipt.png', '24-06-24', 'pending'),
(3, 'admin', '12345', '1234', 'receipt.png', '24-06-24', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income_received`
--
ALTER TABLE `income_received`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tree`
--
ALTER TABLE `tree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet_request`
--
ALTER TABLE `wallet_request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `income_received`
--
ALTER TABLE `income_received`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tree`
--
ALTER TABLE `tree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wallet_request`
--
ALTER TABLE `wallet_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
