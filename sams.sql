-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2021 at 09:28 PM
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
('0001', 'student', 'student'),
('0002', 'student', 'student'),
('0003', 'student', 'student'),
('0004', 'student', 'student'),
('2001', 'teacher', 'teacher'),
('2002', 'teacher', 'teacher'),
('2003', 'teacher', 'teacher'),
('2004', 'teacher', 'teacher'),
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
('0001', 'Sakimuzzaman', 'Geography', 'Rakib', '2021-09-11', 'Absent'),
('0002', 'Misbahur', 'Geography', 'Rakib', '2021-09-11', 'Present'),
('0003', 'Rafid', 'Geography', 'Rakib', '2021-09-11', 'Present'),
('0004', 'Soumit', 'Geography', 'Rakib', '2021-09-11', 'Present'),
('0001', 'Sakimuzzaman', 'History', 'Jasmin', '2021-09-11', 'Absent'),
('0002', 'Misbahur', 'History', 'Jasmin', '2021-09-11', 'Present'),
('0003', 'Rafid', 'History', 'Jasmin', '2021-09-11', 'Present'),
('0004', 'Soumit', 'History', 'Jasmin', '2021-09-11', 'Present');

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
('2003', 'Jasmin', '35', 'Female', 'History', 'jasmin@gmail.com'),
('2004', 'Rakib', '47', 'Male', 'Geography', 'rakib@gmail.com');

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
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
