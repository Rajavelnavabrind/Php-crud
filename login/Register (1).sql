-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 11, 2022 at 06:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Register`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role`, `country`, `state`) VALUES
(1, 'admin', 'admin@123', '', '', ''),
(2, '', '', '', '', ''),
(3, '', '', '', '', ''),
(4, '', '', '', '', ''),
(5, 'admin', '123456', 'staff', '', ''),
(6, 'admin', 'admin', 'admin', '', ''),
(7, 'admin', 'admin', 'staff', '', ''),
(8, 'admin', 'admin', 'admin', '', ''),
(9, 'admin', 'admin', 'admin', '', ''),
(10, 'admin', 'admin', '------Select------', '', ''),
(11, 'admin', 'admin', '------Select------', '', ''),
(12, 'admin', 'admin', '------Select------', '', ''),
(13, 'admin', 'admin', '------Select------', '', ''),
(14, 'admin', 'admin', '------Select------NaN', '', ''),
(15, 'admin', 'admin', '------Select------NaN', '', ''),
(16, 'admin', 'admin', 'staffNaN', '', ''),
(17, '123', '123', 'admin', '', ''),
(18, 'admin', 'admin', '------Select------', '', ''),
(19, 'admin', 'admin', '------Select------', '', ''),
(20, 'admin', 'admin', 'admin', '', ''),
(21, 'admin', 'admin', 'admin', '', ''),
(22, 'admin', 'admin', 'admin', '', ''),
(23, 'admin', 'admin', 'admin', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'india'),
(2, 'USA'),
(3, 'UK'),
(4, 'Austerlia');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `cpassword`, `mobile`, `role`) VALUES
(1, 'rajavel', 'a', 'rajavel94', 'rajavel.a@navabrindit.com', '12345', '12345', '8072757087', 'staff'),
(2, 'karthi', 's', 'karthi', 'karthibarathvaj@gmail.com', '12345', '12345', '6758599444', 'student'),
(3, 'rajavel', 'asokan', 'admin', 'admin@gmail.com', 'admin', 'admin', '8796888866', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `fname`, `lname`, `email`, `mobile`, `dept`, `role`, `address`, `country`, `state`) VALUES
(1, 'rajavel', 'A', 'rajavel.a@navabrindit.com', '8072757987', 'cse', 'asst professor', 'chennai', '', ''),
(2, 'sandhiya', 's', 'sandhiya@gmail.com', '6786859594', 'mech', 'asst professor', 'chennai', '', ''),
(3, 'karthi', 'barathvaj', 'kathi.s@navabrindit.com', '8870771334', 'Marketing', 'MRI Executive', 'Kumbakonam', '', ''),
(4, 'John', 's', 'sachin@gmail.com', '5659949333', 'mech', 'MRI Executive', 'chennai', '', ''),
(5, 'madan', 'nits', 'madan@gmail.com', '8594839999', 'cse', 'asst professor', 'chennai', '1', '4');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `countryid` int(11) NOT NULL,
  `statename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `countryid`, `statename`) VALUES
(1, 1, 'tamilnadu'),
(2, 2, 'newyork'),
(3, 3, 'canada'),
(4, 1, 'Karnataka'),
(5, 1, 'Andhra'),
(6, 1, 'Kerla'),
(7, 1, 'Goa'),
(8, 1, 'Punjab'),
(9, 1, 'Gujarat'),
(10, 2, 'Mexico'),
(11, 2, 'Washington'),
(12, 2, 'North carliona'),
(13, 3, 'England'),
(14, 3, 'Scotland'),
(15, 3, 'wales'),
(16, 4, 'West australia'),
(17, 4, 'south australia'),
(18, 4, 'Queensland');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `email`, `mobile`, `gender`, `dept`, `address`) VALUES
(1, 'John', 'sundar', 'johnsundar@gmail.com', '5638392202', 'Male', 'mech', 'chennai'),
(2, 'mani', 's', 'manis@gmail.com', '6749933333', 'Male', 'ece', 'chennai'),
(3, 'sandhiya', 's', 'sandhiya@gmail.com', '9847483993', 'Female', 'ece', 'tiruvidaimarthu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
