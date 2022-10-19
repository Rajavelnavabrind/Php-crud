-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 10, 2022 at 09:48 AM
-- Server version: 8.0.30-0ubuntu0.20.04.2
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `createaccount_form`
--

CREATE TABLE `createaccount_form` (
  `id` int NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `surename` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int NOT NULL,
  `gender` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int NOT NULL,
  `c_password` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `createaccount_form`
--

INSERT INTO `createaccount_form` (`id`, `fname`, `lname`, `surename`, `email`, `mobile`, `gender`, `username`, `password`, `c_password`) VALUES
(1, 'raja', 'vel', 'rajavel', 'rajavel.a@navabrindit.com', 987654321, 'male', 'rajavel94', 123, 123),
(2, 'raja', 'ram', 'rajavel', 'rajavel.a@navabrindit.com', 987654321, 'male', 'rajavel94', 234, 234),
(3, 'John', 'raja', 'johnraja', 'vel@hmml.com', 7896, 'male', 'john94', 34, 34),
(4, 'John', 'vel', 'rajavel', 'rajavel.a@navabrindit.com', 123, 'female', 'rajavel99', 123, 123),
(5, 'rawe', 'qwe', 'qerrr', 'vel@hmml.com', 234, 'female', 'vel95', 78, 78);

-- --------------------------------------------------------

--
-- Table structure for table `crud_form`
--

CREATE TABLE `crud_form` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `crud_form`
--

INSERT INTO `crud_form` (`id`, `name`, `phone`) VALUES
(1, 'rajavel', '4567'),
(2, 'rajavel', '9626997623');

-- --------------------------------------------------------

--
-- Table structure for table `crud_form_data`
--

CREATE TABLE `crud_form_data` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nationlity` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `crud_form_data`
--

INSERT INTO `crud_form_data` (`id`, `name`, `phone`, `dob`, `gender`, `nationlity`) VALUES
(3, 'female', '546', '2022-08-12', 'female', 'India'),
(4, 'lakshimi', '678', '2022-08-05', 'female', 'India'),
(5, 'mala', '890', '2022-08-05', 'female', 'Iceland'),
(6, 'rajavel', '123', '2022-08-05', 'male', 'India'),
(7, 'rajavel', '123', '2022-08-09', 'male', ''),
(8, 'rajavel', '123', '2022-08-09', 'male', ''),
(9, 'rajavel', '12345', '2022-08-08', 'male', 'Albania'),
(10, 'rajavel', '12345', '2022-08-27', 'female', 'Ireland'),
(11, 'rajavell', '12345555', '2022-08-09', 'male', 'Iraq'),
(12, 'rajavel1', 'aaaaaaaaaa', '2022-08-09', 'male', 'India'),
(13, 'viki', '8056307261', '1995-08-09', 'male', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `register_form`
--

CREATE TABLE `register_form` (
  `id` int NOT NULL,
  `fldusername` varchar(20) NOT NULL,
  `fldpassword` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register_form`
--

INSERT INTO `register_form` (`id`, `fldusername`, `fldpassword`) VALUES
(1, 'RAJAVEL', 123),
(2, 'vel', 234),
(5, 'manoji', 123),
(6, 'manoji', 123),
(9, 'manoji', 123),
(11, 'navabrind_kmu', 9786),
(12, 'navabrind_kmu', 9786),
(13, 'navabrind_kmu', 9786),
(14, 'navabrind_kmu', 9786),
(15, 'navabrind_chennai', 9786678),
(16, 'hi', 123),
(17, 'new ', 678),
(18, 'employee', 12345),
(19, 'employee', 12345),
(20, 'employee2', 12345),
(21, 'employee3', 12345),
(22, 'employee4', 12345),
(23, 'employee3', 12345),
(24, 'rajavel', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `createaccount_form`
--
ALTER TABLE `createaccount_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud_form`
--
ALTER TABLE `crud_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud_form_data`
--
ALTER TABLE `crud_form_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_form`
--
ALTER TABLE `register_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `createaccount_form`
--
ALTER TABLE `createaccount_form`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `crud_form`
--
ALTER TABLE `crud_form`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `crud_form_data`
--
ALTER TABLE `crud_form_data`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `register_form`
--
ALTER TABLE `register_form`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
