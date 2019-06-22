-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2019 at 08:12 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_tbl`
--

CREATE TABLE `about_tbl` (
  `aid` int(4) NOT NULL,
  `atitle` varchar(50) NOT NULL,
  `adetails` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `alloted_tbl`
--

CREATE TABLE `alloted_tbl` (
  `aid` int(4) NOT NULL,
  `docid` int(4) NOT NULL,
  `day` varchar(20) NOT NULL,
  `starttime` varchar(10) NOT NULL,
  `endtime` varchar(10) NOT NULL,
  `noofpatients` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alloted_tbl`
--

INSERT INTO `alloted_tbl` (`aid`, `docid`, `day`, `starttime`, `endtime`, `noofpatients`) VALUES
(3, 15, 'Monday', '11:00', '13:00', 20),
(4, 17, 'Friday', '11:30', '13:00', 9),
(5, 16, 'Thursday', '9:00', '12:00', 10);

-- --------------------------------------------------------

--
-- Table structure for table `booking_tbl`
--

CREATE TABLE `booking_tbl` (
  `uid` int(10) NOT NULL,
  `aid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `docname` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_tbl`
--

INSERT INTO `booking_tbl` (`uid`, `aid`, `userid`, `docname`, `day`, `date`) VALUES
(1, 3, 1, 'Dr.Sayannya Ghosh', 'Monday', '2018-07-16'),
(2, 4, 1, 'Dr.Ruma Ray', 'Friday', '2018-07-20'),
(3, 3, 1, 'Dr.Sayannya Ghosh', 'Monday', '2018-09-03'),
(5, 3, 1, 'Dr.Sayannya Ghosh', 'Monday', '2018-08-20'),
(6, 4, 4, 'Dr.Ruma Ray', 'Friday', '2018-08-24'),
(7, 4, 1, 'Dr.Ruma Ray', 'Friday', '2018-09-21'),
(8, 4, 1, 'Dr.Ruma Ray', 'Friday', '2018-09-21'),
(9, 3, 1, 'Dr.Sayannya Ghosh', 'Monday', '2018-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE `contact_tbl` (
  `aid` int(4) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `caddress` longtext NOT NULL,
  `cph` varchar(10) NOT NULL,
  `cemail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dept_tbl`
--

CREATE TABLE `dept_tbl` (
  `dept_id` int(10) NOT NULL,
  `dept_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_tbl`
--

INSERT INTO `dept_tbl` (`dept_id`, `dept_name`) VALUES
(1, 'ORTHOPAEDIC'),
(2, 'NEUROLOGY'),
(3, 'PAEDIATRIC'),
(4, 'GYNAECOLOGY'),
(5, 'DERMATOLOGY'),
(6, 'GENERAL PHYSICIAN'),
(7, 'CARDIOLOGY');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_tbl`
--

CREATE TABLE `doctor_tbl` (
  `docid` int(6) NOT NULL,
  `docname` varchar(20) NOT NULL,
  `docemail` varchar(20) NOT NULL,
  `docpic` varchar(50) NOT NULL,
  `docphn` varchar(10) NOT NULL,
  `docquali` varchar(50) NOT NULL,
  `docdept` varchar(50) NOT NULL,
  `docexp` varchar(20) NOT NULL,
  `docfees` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_tbl`
--

INSERT INTO `doctor_tbl` (`docid`, `docname`, `docemail`, `docpic`, `docphn`, `docquali`, `docdept`, `docexp`, `docfees`) VALUES
(15, 'Dr.Sayannya Ghosh', 'sghosh@gmail.com', '2018-01-06-18-34-23-595.jpg', '8965123452', 'MD', '1', '6 YRS', 1000),
(16, 'Dr. Kalyan Bose', 'kalyan_b@gmail.com', 'download (1).jpg', '9066897756', 'MD', '5', '8 YRS', 1000),
(17, 'Dr.Ruma Ray', 'rumaray9@gmail.com', 'images (2).jpg', '9856321451', 'MD', '2', '8YRS', 1050),
(18, 'Dr.Asit Ghosh', 'a_ghosh@gmail.com', 's.jpg', '9856412383', 'MBBS', '6', '10YRS', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `home_tbl`
--

CREATE TABLE `home_tbl` (
  `hid` int(3) NOT NULL,
  `htitle` varchar(100) NOT NULL,
  `hdetails` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE `login_tbl` (
  `userid` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_tbl`
--

INSERT INTO `login_tbl` (`userid`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `reg_tbl`
--

CREATE TABLE `reg_tbl` (
  `userid` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `usermail` varchar(50) NOT NULL,
  `userphn` varchar(10) NOT NULL,
  `userpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_tbl`
--

INSERT INTO `reg_tbl` (`userid`, `username`, `usermail`, `userphn`, `userpassword`) VALUES
(1, 'sayannya ', 'sg@gmail.com', '9856321457', 'abc'),
(2, 'shreya', 'shreya@gmail.com', '9066145283', 'hii'),
(3, 'arnab', 'arnab@gmail.com', '9804259826', 'hello'),
(4, 'ria', 'ria@gmail.com', '9856325471', 'ria1'),
(5, 'sanjita', 'sanjita@gmail.com', '9654785126', 'sanjita123'),
(6, 'rita', 'rita@mail.com', '9874563210', 'rita2426'),
(7, 'rahul', 'rahul@gmail.com', '9654785126', 'rahul1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_tbl`
--
ALTER TABLE `about_tbl`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `alloted_tbl`
--
ALTER TABLE `alloted_tbl`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `dept_tbl`
--
ALTER TABLE `dept_tbl`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `doctor_tbl`
--
ALTER TABLE `doctor_tbl`
  ADD PRIMARY KEY (`docid`);

--
-- Indexes for table `home_tbl`
--
ALTER TABLE `home_tbl`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `login_tbl`
--
ALTER TABLE `login_tbl`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `reg_tbl`
--
ALTER TABLE `reg_tbl`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_tbl`
--
ALTER TABLE `about_tbl`
  MODIFY `aid` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alloted_tbl`
--
ALTER TABLE `alloted_tbl`
  MODIFY `aid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  MODIFY `aid` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dept_tbl`
--
ALTER TABLE `dept_tbl`
  MODIFY `dept_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctor_tbl`
--
ALTER TABLE `doctor_tbl`
  MODIFY `docid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `home_tbl`
--
ALTER TABLE `home_tbl`
  MODIFY `hid` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_tbl`
--
ALTER TABLE `login_tbl`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reg_tbl`
--
ALTER TABLE `reg_tbl`
  MODIFY `userid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
