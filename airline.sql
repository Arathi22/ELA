-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2020 at 07:54 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `chairman`
--

CREATE TABLE `chairman` (
  `cid` int(11) NOT NULL,
  `cemail` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chairman`
--

INSERT INTO `chairman` (`cid`, `cemail`, `cpassword`) VALUES
(1, 'arathi@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `hr`
--

CREATE TABLE `hr` (
  `manager_id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `addr` varchar(20) NOT NULL,
  `phoneno` bigint(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hr`
--

INSERT INTO `hr` (`manager_id`, `email`, `addr`, `phoneno`, `password`, `mname`) VALUES
(2, 'anna@gmail.com', 'Mangalure', 9901234500, '123456', 'Anna'),
(5, 'robertsmith@gmail.co', 'kolkatha', 7867994523, '123456', 'Robert Smith'),
(6, 'chariesstone@gmail.c', 'Mumbai', 9008765432, '123456', 'ChariesStone'),
(7, 'adamlu@gmail.com', 'kochi', 7860092735, '123456', 'AdamLu'),
(8, 'rayson@gmail.com', 'Kozhikode', 9876543210, '123456', 'Rayson');

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE `leave` (
  `leave_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `l_date` date NOT NULL,
  `reason` varchar(20) NOT NULL,
  `lstatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave`
--

INSERT INTO `leave` (`leave_id`, `staff_id`, `l_date`, `reason`, `lstatus`) VALUES
(3, 1, '2020-05-05', 'fever\r\n', 'approved'),
(4, 2, '2020-06-09', 'marriage function', 'approved'),
(5, 4, '2020-06-30', 'FEVER', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `overtime`
--

CREATE TABLE `overtime` (
  `o_id` int(11) NOT NULL,
  `odate` date NOT NULL,
  `otime` time NOT NULL,
  `hrs` int(11) NOT NULL,
  `staff_id1` int(11) NOT NULL,
  `ostatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `overtime`
--

INSERT INTO `overtime` (`o_id`, `odate`, `otime`, `hrs`, `staff_id1`, `ostatus`) VALUES
(1, '2020-05-05', '00:00:00', 3, 1, 'paid'),
(15, '2020-06-25', '04:35:00', 5, 3, 'paid'),
(16, '2020-06-20', '03:51:00', 4, 4, 'paid'),
(17, '2020-06-28', '03:52:00', 2, 4, 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `salary_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` double NOT NULL,
  `status` varchar(20) NOT NULL,
  `o_id` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` varchar(10) NOT NULL,
  `oamount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`salary_id`, `staff_id`, `date`, `amount`, `status`, `o_id`, `month`, `year`, `oamount`) VALUES
(3, 1, '2020-05-26', 5300, 'paid', 0, 5, '2020', 0),
(5, 1, '2020-06-03', 5300, 'paid', 1, 6, '2020', 0),
(37, 3, '2020-06-29', 5830, 'paid', 15, 6, '2020', 830),
(38, 4, '2020-06-30', 15000, 'paid', 0, 6, '2020', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `pid` int(11) NOT NULL,
  `des` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `norequired` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`pid`, `des`, `position`, `norequired`) VALUES
(4, 'Engineering', 'Aironotical Engineer', 5),
(5, 'Flight operators', 'Aircraft Maintenance', 2),
(6, 'Flight Attendant', 'Cabin crew', 4);

-- --------------------------------------------------------

--
-- Table structure for table `recr`
--

CREATE TABLE `recr` (
  `rid` int(11) NOT NULL,
  `re_id` int(11) NOT NULL,
  `position` varchar(20) NOT NULL,
  `restatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `resume_id` int(11) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `caddr` varchar(20) NOT NULL,
  `cphone` bigint(20) NOT NULL,
  `cemail` varchar(20) NOT NULL,
  `resume` varchar(80) NOT NULL,
  `rstatus` varchar(20) NOT NULL,
  `re_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`resume_id`, `cname`, `caddr`, `cphone`, `cemail`, `resume`, `rstatus`, `re_status`) VALUES
(12, 'Zane', 'Mumbai', 8976543210, 'zane@gmail.com', '../images/resume 1.pdf', 'approved', ''),
(13, 'Harry', 'Kolkatha', 9043535354, 'harry@gmail.com', '../images/resume sandhya.pdf', 'approved', ''),
(14, 'Lily', 'Kozhikode', 8796934020, 'lily@gmail.com', '../images/Resume_Akhila_Format1.pdf', 'approved', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sid` int(11) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `saddr` varchar(20) NOT NULL,
  `sphone` bigint(20) NOT NULL,
  `semail` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `s_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sid`, `sname`, `saddr`, `sphone`, `semail`, `password`, `designation`, `s_status`) VALUES
(1, 'Lucy', 'Mumbai', 8922667788, 'lucifa@gmail.com', '123456', 'Manglure', 'approved'),
(2, 'Luna', 'Mumbai', 8999774433, 'luna@gmail.com', '123456', 'Mumbai', 'approved'),
(3, 'Mia', 'kochi', 9988667788, 'mia@gmail.com', '123456', 'Manglure', 'approved'),
(4, 'Jude', 'Mumbai', 8768866442, 'jude@gmail.com', '123456', 'Kolkatha', 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chairman`
--
ALTER TABLE `chairman`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `hr`
--
ALTER TABLE `hr`
  ADD PRIMARY KEY (`manager_id`);

--
-- Indexes for table `leave`
--
ALTER TABLE `leave`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `overtime`
--
ALTER TABLE `overtime`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`salary_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `recr`
--
ALTER TABLE `recr`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`resume_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chairman`
--
ALTER TABLE `chairman`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hr`
--
ALTER TABLE `hr`
  MODIFY `manager_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `leave`
--
ALTER TABLE `leave`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `overtime`
--
ALTER TABLE `overtime`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `recr`
--
ALTER TABLE `recr`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `resume_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pay`
--
ALTER TABLE `pay`
  ADD CONSTRAINT `pay_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
