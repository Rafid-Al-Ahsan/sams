-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2021 at 10:50 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sams`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `password`, `usertype`) VALUES
('0001', '1234', 'student'),
('2001', 'teacher', 'teacher'),
('2002', 'teacher', 'teacher'),
('3001', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `roll_no` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `teacher` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`roll_no`, `name`, `subject`, `teacher`, `date`, `status`) VALUES
('0001', '0002', 'Maths', 'Kamal ', '2021-09-06', 'Absent'),
('0002', '0004', 'Maths', 'Kamal ', '2021-09-06', 'Absent'),
('0003', 'Rafid', 'Maths', 'Kamal ', '2021-09-06', 'Absent'),
('0004', 'Soumit', 'Maths', 'Kamal ', '2021-09-06', 'Absent'),
('0001', 'Sakimuzzaman', 'Maths', 'Kamal ', '2021-09-06', 'Absent'),
('0002', 'Misbahur', 'Maths', 'Kamal ', '2021-09-06', 'Absent'),
('0003', 'Rafid', 'Maths', 'Kamal ', '2021-09-06', 'Present'),
('0004', 'Soumit', 'Maths', 'Kamal ', '2021-09-06', 'Present'),
('0001', 'Sakimuzzaman', 'English', 'Akter', '2021-09-06', 'Present'),
('0002', 'Misbahur', 'English', 'Akter', '2021-09-06', 'Present'),
('0003', 'Rafid', 'English', 'Akter', '2021-09-06', 'Present'),
('0004', 'Soumit', 'English', 'Akter', '2021-09-06', 'Absent'),
('0001', 'Sakimuzzaman', 'Maths', 'Kamal ', '2021-09-06', 'Absent'),
('0002', 'Misbahur', 'Maths', 'Kamal ', '2021-09-06', 'Absent'),
('0003', 'Rafid', 'Maths', 'Kamal ', '2021-09-06', 'Absent'),
('0004', 'Soumit', 'Maths', 'Kamal ', '2021-09-06', 'Absent'),
('005', 'boss', 'Maths', 'Kamal ', '2021-09-06', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `roll_no` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll_no`, `name`, `age`, `gender`, `email`) VALUES
('0001', 'Sakimuzzaman', '16', 'Male', 'sk@gmail.com'),
('0002', 'Misbahur', '15', 'Male', 'misbahur@gmail.com'),
('0003', 'Rafid', '16', 'Male', 'rafid@gmail.com'),
('0004', 'Soumit', '16', 'Male', 'soumit@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `si` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`si`, `name`) VALUES
('01', 'English'),
('02', 'Bangla'),
('03', 'Maths'),
('04', 'Science'),
('05', 'History'),
('06', 'Geography'),
('07', 'Music'),
('08', 'Arts'),
('09', 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `age`, `gender`, `subject`, `email`) VALUES
('2001', 'Kamal ', '40', 'Male', 'Maths', 'kamal@gmail.com'),
('2002', 'Akter', '37', 'Male', 'English', 'akter@yahooo.com'),
('2003', 'Jasmin', '35', 'Female', 'Bangla', 'jasmin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`si`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
