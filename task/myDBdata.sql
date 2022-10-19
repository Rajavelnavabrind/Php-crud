-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 11, 2022 at 06:38 AM
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
-- Database: `myDBdata`
--

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
-- Table structure for table `crud_form_data`
--

CREATE TABLE `crud_form_data` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `conpassword` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nationlity` varchar(20) NOT NULL,
  `state` varchar(50) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `address` varchar(256) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crud_form_data`
--

INSERT INTO `crud_form_data` (`id`, `firstname`, `lastname`, `phone`, `email`, `password`, `conpassword`, `dob`, `gender`, `nationlity`, `state`, `qualification`, `address`, `picture`) VALUES
(1, 'sachin', 'tendulkar', '9876543211', 'sachin@gmail.com', 'Password@123', 'Password@123', '1973-04-24', 'male', '1', '1', 'sslc,hsc,UG,PG', 'Mumbai  ,Wankodma', 'profilepicture/sachin.jpg'),
(2, 'adhi', 'sesan', '9876543210', 'adhi@navabrindit.com', '', '', '2022-09-06', 'male', '2', '2', 'sslc,hsc,UG,PG', 'america', 'profilepicture/adhi.zip'),
(3, 'Msd', 'dhoni', '9876543210', 'msdhoni@navabrindit.com', 'Msdhoni@1', 'Msdhoni@1', '1983-07-07', 'male', '1', '1', 'sslc,hsc,UG,PG', 'Jharkend', 'profilepicture/Msd.jpeg'),
(6, 'premkumar', 'rajavel', '1234567890', 'rajavel.a@navabrindit.com', 'Arajavel@12', 'Arajavel@12', '2022-09-09', 'male', '2', '2', 'on,sslc', 'hi', 'profilepicture/premkumar.png'),
(7, 'suba', 'rajavel', '8986786786', 'rajavel.a@navabrindit.com', 'Qualification@1', 'Qualification@1', '2022-09-09', 'female', '1', '1', 'on,sslc,hsc', 'kum', 'profilepicture/suba.png'),
(8, 'jerold', 'v', '8986786786', 'jerold@gmail.com', 'Arajavel@123', 'Arajavel@123', '2022-09-12', 'male', '4', '4', 'sslc,hsc,UG', 'tj', 'profilepicture/jerold.png'),
(9, 'vel', 'vel', '8986786786', 'rajavel.a@navabrindit.com', 'Arajavel@123', 'Arajavel@123', '2022-09-12', 'male', '2', '2', 'sslc,hsc,UG', 'us', 'profilepicture/vel.png'),
(10, 'premkumar nits', 'test nits', '8903231346', 'sany@gmail.com', '', '', '1998-05-22', 'male', '4', '4', 'hsc,PG', 'tset Address', 'profilepicture/premkumar nits.png'),
(11, 'bharath', 'srinivasan', '8870771334', 'karthibarathvaj@gmail.com', 'Bktommy@5', 'Bktommy@5', '1995-10-13', 'male', '1', '1', 'sslc,hsc,UG', '4,north street, thirubuvanam,6121034', 'profilepicture/bharath.zip'),
(14, 'adhis', 'tendulkar', '9876543211', 'sachin@gmail.com', 'Password@123', 'Password@123', '1973-04-24', 'male', '1', '1', 'sslc,hsc,UG,PG', 'Mumbai  ,Wankodma', 'profilepicture/adhis.jpg'),
(15, 'venkat', 'raj', '7373737777', 'venkat@gmail.com', 'Arajavel@12', 'Arajavel@12', '2022-09-09', 'male', '3', '3', 'hsc,UG,PG', 'bangalore', 'profilepicture/venkat.jpg'),
(16, 'vevevv', 'ddddd', '8986786722', 'sachins@gmail.com', 'Arajavel@123', 'Arajavel@123', '2022-09-15', 'male', '1', '1', 'sslc', 's', 'profilepicture/vevevv.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
