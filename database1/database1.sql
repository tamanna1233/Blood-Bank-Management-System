-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2024 at 08:38 AM
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
-- Database: `database1`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_donation`
--

CREATE TABLE `blood_donation` (
  `s_no` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `dob` date NOT NULL,
  `units` int(20) NOT NULL,
  `blood_group` enum('A+','A-','B+','B-','AB+','AB-','O-','O+') NOT NULL,
  `disease` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_donation`
--

INSERT INTO `blood_donation` (`s_no`, `name`, `mobile`, `dob`, `units`, `blood_group`, `disease`, `status`) VALUES
(1, 'donor 1', 1234567889, '2024-04-01', 12, 'AB+', 'jnm.', 2),
(2, 'fdwfef', 0, '2024-04-30', 34, 'AB-', 'fgfgfg', 2),
(3, 'fdwfef', 0, '2024-04-23', 34, 'A+', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `donor_registration`
--

CREATE TABLE `donor_registration` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `dob` date NOT NULL,
  `blood_group` enum('A+','B+','AB+','O+','O-','AB-') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor_registration`
--

INSERT INTO `donor_registration` (`id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `gender`, `dob`, `blood_group`) VALUES
(3, 'donor1', '', 'donor1@gmail.com', '123', 98765432, '', '2024-04-26', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `patient_registration`
--

CREATE TABLE `patient_registration` (
  `id` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `dob` date NOT NULL,
  `blood_group` enum('A+','B+','AB+','O+','O-','AB-') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_registration`
--

INSERT INTO `patient_registration` (`id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `gender`, `dob`, `blood_group`) VALUES
(3, 'dikshant', 'karthol', 'dikshant@gmail.com', '123', 1234567890, '', '2024-03-31', 'O+');

-- --------------------------------------------------------

--
-- Table structure for table `request_blood`
--

CREATE TABLE `request_blood` (
  `id` int(200) NOT NULL,
  `name` varchar(40) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `blood_group` enum('A+','B+','AB+','O+','O-','AB-') NOT NULL,
  `units` int(20) NOT NULL,
  `reason` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_blood`
--

INSERT INTO `request_blood` (`id`, `name`, `mobile`, `blood_group`, `units`, `reason`, `status`) VALUES
(1, 'patient 2', 1234567890, '', 12, 'ef', 2),
(2, 'dikshant karthol', 1234567889, 'O+', 10, '', 2),
(3, 'dikshant karthol', 1234567889, 'AB+', 10, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_donation`
--
ALTER TABLE `blood_donation`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `donor_registration`
--
ALTER TABLE `donor_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_registration`
--
ALTER TABLE `patient_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_blood`
--
ALTER TABLE `request_blood`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_donation`
--
ALTER TABLE `blood_donation`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donor_registration`
--
ALTER TABLE `donor_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient_registration`
--
ALTER TABLE `patient_registration`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request_blood`
--
ALTER TABLE `request_blood`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
