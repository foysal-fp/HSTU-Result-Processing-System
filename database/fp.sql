-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2019 at 06:26 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `assign_teacher`
--

CREATE TABLE `assign_teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `courseid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_teacher`
--

INSERT INTO `assign_teacher` (`id`, `name`, `email`, `courseid`) VALUES
(2, 'palash Uddin', 'palash@gmail.com', 'CSE-403'),
(3, 'Adiba Mejhjabin Nitu', 'nitu@gmail.com', 'CSE-409'),
(4, 'foysal', 'teacher@gmail.com', 'cse-102'),
(5, 'Emran sir', 'Emran@gmail.com', 'CSE 151');

-- --------------------------------------------------------

--
-- Table structure for table `course_info`
--

CREATE TABLE `course_info` (
  `coursename` varchar(255) NOT NULL,
  `courseid` varchar(255) NOT NULL,
  `credit` float NOT NULL,
  `levelsemester` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_info`
--

INSERT INTO `course_info` (`coursename`, `courseid`, `credit`, `levelsemester`, `dept`, `faculty`) VALUES
('OPP', 'CSE 151', 3, '1/2', 'CSE', 'CSE'),
('ICT', 'cse-102', 3, '1/1', 'CSE', 'CSE'),
('System Analysis and Design', 'CSE-403', 3, '4/1', 'CSE', 'CSE'),
('Machine learnig', 'CSE-405', 3, '4/1', 'CSE', 'CSE'),
('Basic Multimedia System', 'CSE-409', 3, '4/2', 'CSE', 'CSE'),
('VLSI', 'CSE-455', 3, '4/2', 'CSE', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `cid` varchar(255) NOT NULL,
  `credit` float NOT NULL,
  `attn` double NOT NULL,
  `quiz1` double NOT NULL,
  `quiz2` double NOT NULL,
  `quiz3` double NOT NULL,
  `avrquiz` double NOT NULL,
  `mid` double NOT NULL,
  `secA` double NOT NULL,
  `secB` double NOT NULL,
  `total` double NOT NULL,
  `marks_per` double NOT NULL,
  `grade` varchar(255) NOT NULL,
  `point` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `cid`, `credit`, `attn`, `quiz1`, `quiz2`, `quiz3`, `avrquiz`, `mid`, `secA`, `secB`, `total`, `marks_per`, `grade`, `point`) VALUES
(1502011, 'cse151', 3, 2, 6, 6, 0, 4, 0, 0, 0, 6, 4, 'F', 0),
(1502012, 'cse151', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'F', 0),
(1502059, 'cse151', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'F', 0),
(1502068, 'cse151', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'F', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `studentname` varchar(255) NOT NULL,
  `sid` int(100) NOT NULL,
  `session` int(100) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`studentname`, `sid`, `session`, `dept`, `faculty`) VALUES
('foysal', 1501011, 2015, 'Agriculture', 'Agriculture'),
('pankaj Voumik', 1502012, 2015, 'CSE', 'CSE'),
('Syed Masunur Rahman', 1502059, 2015, 'CSE', 'CSE'),
('Muhaiminur Rahman', 1502068, 2015, 'CSE', 'CSE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_teacher`
--
ALTER TABLE `assign_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_info`
--
ALTER TABLE `course_info`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`,`cid`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assign_teacher`
--
ALTER TABLE `assign_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
