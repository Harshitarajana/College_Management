-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 03:24 PM
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
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sno` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `name`, `id`, `email`, `password`) VALUES
(1, 'ishak', '1', 'ishaksk199@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `sno` int(200) NOT NULL,
  `id` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `first` varchar(10) NOT NULL,
  `secound` varchar(10) NOT NULL,
  `third` varchar(10) NOT NULL,
  `fourth` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`sno`, `id`, `date`, `first`, `secound`, `third`, `fourth`) VALUES
(1, '20L31A05M1', '2022-12-20', 'P', 'P', 'A', 'P'),
(2, '20L31A05K9', '2022-12-20', 'P', 'P', 'P', 'P'),
(3, '20L31A05K2', '2022-12-20', 'A', 'P', 'A', 'P'),
(4, '20L31A05L9', '2022-12-20', 'P', 'A', 'P', 'A'),
(5, '20L31A05M0', '2022-12-20', 'A', 'P', 'P', 'A'),
(6, '20L31A05M1', '2022-12-21', 'P', 'P', 'P', 'P'),
(7, '20L31A05K9', '2022-12-21', 'P', 'P', 'P', 'P'),
(8, '20L31A05K2', '2022-12-21', 'P', 'P', 'A', 'P'),
(9, '20L31A05L9', '2022-12-21', 'P', 'P', 'A', 'P'),
(10, '20L31A05M0', '2022-12-21', 'P', 'P', 'A', 'P'),
(11, '20L31A05M1', '2022-12-22', 'P', 'P', 'A', 'A'),
(12, '20L31A05K9', '2022-12-22', 'A', 'P', 'A', 'A'),
(13, '20L31A05K2', '2022-12-22', 'P', 'P', 'A', 'A'),
(14, '20L31A05L9', '2022-12-22', 'P', 'A', 'P', 'A'),
(15, '20L31A05M0', '2022-12-22', 'P', 'A', 'P', 'P'),
(16, '20L31A05M1', '2022-12-23', 'A', 'A', 'A', 'A'),
(17, '20L31A05K9', '2022-12-23', 'A', 'A', 'A', 'A'),
(18, '20L31A05K2', '2022-12-23', 'A', 'A', 'A', 'A'),
(19, '20L31A05L9', '2022-12-23', 'A', 'A', 'A', 'A'),
(20, '20L31A05M0', '2022-12-23', 'A', 'A', 'A', 'A'),
(21, '20L31A05M1', '2022-12-24', 'A', 'A', 'A', ''),
(22, '20L31A05K9', '2022-12-24', 'A', 'A', 'A', ''),
(23, '20L31A05K2', '2022-12-24', 'A', 'A', 'A', ''),
(24, '20L31A05L9', '2022-12-24', 'A', 'A', 'A', ''),
(25, '20L31A05M0', '2022-12-24', 'A', 'A', 'A', ''),
(26, '20L31A05M1', '2022-12-29', 'A', '', '', ''),
(27, '20L31A05K9', '2022-12-29', 'A', '', '', ''),
(28, '20L31A05K2', '2022-12-29', 'A', '', '', ''),
(29, '20L31A05L9', '2022-12-29', 'A', '', '', ''),
(30, '20L31A05M0', '2022-12-29', 'A', '', '', ''),
(31, '20L31A05M1', '2022-12-26', '', 'A', '', ''),
(32, '20L31A05K9', '2022-12-26', '', 'A', '', ''),
(33, '20L31A05K2', '2022-12-26', '', 'A', '', ''),
(34, '20L31A05L9', '2022-12-26', '', 'A', '', ''),
(35, '20L31A05M0', '2022-12-26', '', 'A', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `sno` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`sno`, `name`, `id`, `email`, `password`, `dept`) VALUES
(1, 'ishak', '1', 'ishaksk199@gmail.com', '123', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `mq_registration`
--

CREATE TABLE `mq_registration` (
  `appid` int(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `htno` varchar(20) NOT NULL,
  `rank` varchar(100) DEFAULT NULL,
  `grade` varchar(10) NOT NULL,
  `father` varchar(30) NOT NULL,
  `fatheroccupation` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` varchar(30) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `mother` varchar(50) NOT NULL,
  `motheroccupation` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mq_registration`
--

INSERT INTO `mq_registration` (`appid`, `first_name`, `last_name`, `dob`, `email`, `caste`, `htno`, `rank`, `grade`, `father`, `fatheroccupation`, `address`, `pincode`, `branch`, `phno`, `mother`, `motheroccupation`, `photo`) VALUES
(1, 'Ravada', 'Ramesh', '2002-04-05', 'abcd123@gmail.com', 'BC', '2010201012', '101', '9.9', 'Suresh', 'Developer', 'Visakhapatnam', '425301', 'CSE', '9876543210', 'Sita', 'SDE ', 'xyz.jpg'),
(2, 'Sabbi', 'Suresh', '2002-05-10', 'Asdf199@gmail.com', 'OC', '2020101034', '132', '9.8', 'Suresh', 'Navy officer', 'Visakhapatnam', '267482', 'CSE', '8967452310', 'Geetha', 'Housewife', 'mlsa.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sno` int(225) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `sec` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sno`, `email`, `id`, `name`, `password`, `year`, `branch`, `sec`) VALUES
(1, 'abcd123@gmail.com', '20L31A05M1', 'Ishak', '123456', 'Third year', 'CSE', 'D'),
(2, 'xyz123@gmail.com', '20L31A05K9', 'Swarna vyshnavi', '123456', 'Third year', 'CSE', 'D'),
(3, 'Def123@gmail.com', '20L31A05K2', 'Harshitha', '123456', 'Third year', 'CSE', 'D'),
(4, 'pqr123@gmail.com', '20L31A05L9', 'Chaturved', '123456', 'Third year', 'CSE', 'D'),
(5, 'Qwe123@gmail.com', '20L31A05M0', 'Babitha', '123456', 'Third year', 'CSE', 'D');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `mq_registration`
--
ALTER TABLE `mq_registration`
  ADD PRIMARY KEY (`appid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mq_registration`
--
ALTER TABLE `mq_registration`
  MODIFY `appid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sno` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
