-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 08:10 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surveydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminid` int(20) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminid`, `userid`, `password`) VALUES
(1, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `q1` varchar(255) NOT NULL,
  `q2` varchar(255) NOT NULL,
  `q3` varchar(255) NOT NULL,
  `q4` varchar(255) NOT NULL,
  `q5` varchar(255) NOT NULL,
  `q6` varchar(255) NOT NULL,
  `q7` varchar(255) NOT NULL,
  `q8` varchar(255) NOT NULL,
  `q9` varchar(255) NOT NULL,
  `q10` varchar(255) NOT NULL,
  `q11` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `name`, `email`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `message`) VALUES
(3, 'Shubham Roy', '', 'Agree', 'Neutral', 'Agree', 'Agree', 'Disagree', 'Disagree', 'Agree', 'Disagree', 'Neutral', '', '', 'NA'),
(4, 'Sahil Choudhary', '', 'Neutral', 'Neutral', 'Agree', 'Agree', 'Neutral', 'Neutral', 'Disagree', 'Disagree', 'Neutral', '', '', 'NA'),
(5, 'Ishita Sharma', '', 'Agree', 'Agree', 'Agree', 'Strongly', 'Agree', 'Strongly', 'Agree', 'Strongly', 'Agree', '', '', 'Everything is good.'),
(6, 'Sidharth Kashyap', 'sk7194414@gmail.com', 'Neutral', 'Neutral', 'Disagree', 'Strongly', 'Neutral', 'Disagree', 'Disagree', 'Neutral', 'Neutral', '', '', 'Sports activities are needed.');

-- --------------------------------------------------------

--
-- Table structure for table `basicinfo`
--

CREATE TABLE `basicinfo` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL DEFAULT '',
  `rollno` int(11) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basicinfo`
--

INSERT INTO `basicinfo` (`id`, `name`, `email`, `class`, `rollno`, `dob`, `address`) VALUES
(4, 'Shubham Roy', '', '11 B', 32, '2002-05-12', '   #323, Sector-16, Chandigarh'),
(5, 'Sahil Choudhary', '', '12 B', 31, '2001-01-25', '#33, Sector-16, Chandigarh        '),
(6, 'Ishita Sharma', '', '6 A', 19, '2011-11-19', '        #1096, Sector-22, Chandigarh'),
(7, 'Sidharth Kashyap', 'sk7194414@gmail.com', '10 A', 25, '2004-05-23', '        #96, Sector-15, Chandigarh');

-- --------------------------------------------------------

--
-- Table structure for table `myoptions`
--

CREATE TABLE `myoptions` (
  `id` int(20) NOT NULL,
  `optiont` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myoptions`
--

INSERT INTO `myoptions` (`id`, `optiont`) VALUES
(10011, 'Disagree'),
(10012, 'Neutral'),
(10013, 'Agree'),
(10014, 'Strongly Agree');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` int(20) NOT NULL,
  `optiona` varchar(255) NOT NULL,
  `optionid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` int(20) NOT NULL,
  `qid` int(20) NOT NULL,
  `qns` varchar(255) NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
(200, 2020, 'Overall quality of the classes was excellent ?', 4, 2),
(201, 2021, 'Were the textbooks and learning materials relevant and useful ?', 4, 1),
(202, 2022, 'Test and assignments were based on material covered in each classes', 4, 3),
(203, 2023, 'The instructors were qualified to teach these class', 4, 4),
(204, 2024, 'The instructor demonstrated enthusiasm for the subject matter', 4, 5),
(205, 2025, 'The instructor were available and helpful to students out of class', 4, 6),
(206, 2027, 'The physical classroom environments were clean and comfortable', 4, 7),
(207, 2028, 'Library and on-site computers consistently made available', 4, 8),
(208, 2029, 'The common spaces for clean and comfortable', 4, 9);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `typeid` int(20) NOT NULL,
  `typeofq` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`typeid`, `typeofq`) VALUES
(1000, 'Curriculum and class for the term'),
(1001, 'Instructions'),
(1002, 'School Environment');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `date`) VALUES
(2, 'Harshit Sharma', 'harshit@gmail.com', 'harshit', '2022-06-07'),
(3, 'Sahil', 'sk7194414@gmail.com', 'sahil123', '2022-06-07'),
(4, 'Ishita Sharma', 'ishita@gmail.com', '654321', '2022-06-08'),
(5, 'Raghav Jishtu', 'raghav06@gmail.com', '987654', '2022-06-09'),
(6, 'Ritika Sharma', 'ritika@gmail.com', '987654', '2022-06-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basicinfo`
--
ALTER TABLE `basicinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myoptions`
--
ALTER TABLE `myoptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`optionid`),
  ADD KEY `qid` (`qid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`typeid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `basicinfo`
--
ALTER TABLE `basicinfo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `myoptions`
--
ALTER TABLE `myoptions`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10015;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `optionid` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `eid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `typeid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
