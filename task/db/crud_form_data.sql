-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 10, 2022 at 09:47 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud_form_data`
--
ALTER TABLE `crud_form_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud_form_data`
--
ALTER TABLE `crud_form_data`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
