-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2016 at 08:34 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
  `appid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `h` int(11) NOT NULL,
  `m` int(11) NOT NULL,
  `d` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appid`, `pid`, `h`, `m`, `d`) VALUES
(0, 20150000, 9, 45, 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `did` varchar(11) NOT NULL,
  `pass` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `pass`) VALUES
('MAH0001', 'mahi123');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `pid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`pid`, `name`, `age`, `gender`, `mobile`, `address`) VALUES
(20150000, 'dummy', 0, 'dummy', 0, 'dummy'),
(20150001, 'mahendra', 19, 'male', 2147483647, 'cdcdd'),
(20150002, 'rishikesh', 20, 'male', 2147483647, 'sdcdcdvfvfvdcdscsc'),
(20150003, 'amitoj', 20, 'malE', 899898, 'SDDSD'),
(20150004, 'Mukesh', 20, 'male', 2147483647, 'dsdd'),
(20150005, 'gurleen ', 19, 'female', 982121212, 'wewsjcksdnc\r\nxcdvcndkvc\r\n'),
(20150006, 'prasad', 20, 'male', 548339834, 'sfkdsfks\r\ndsdmd'),
(20150007, 'ANKIT', 20, 'MALE', 2147483647, 'DADAR '),
(20150008, 'Sidd', 20, 'Male', 2147483647, 'Lokhandwala,andheri');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `pid` int(11) NOT NULL,
  `did` varchar(50) NOT NULL,
  `dname` varchar(11) NOT NULL,
  `medicine` varchar(50) NOT NULL,
  `diagnosis` varchar(50) NOT NULL,
  `instructions` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`pid`, `did`, `dname`, `medicine`, `diagnosis`, `instructions`) VALUES
(20150001, 'MAH0001', 'Rishikesh', 'XDSDSJ', 'CKDCD', 'SDJDSD'),
(20150005, 'MAH0001', 'Rishikesh', 'sds', 'dss', 'dssdd'),
(20150005, 'MAH0001', 'Rishikesh', 'sds', 'dss', 'dssdd'),
(20150005, 'MAH0001', 'Rishikesh', 'sds', 'dss', 'dssdd'),
(20150005, 'MAH0001', 'Rishikesh', 'sds', 'dss', 'dssdd'),
(20150005, 'MAH0001', 'Rishikesh', 'sds', 'dss', 'dssdd'),
(20150005, 'MAH0001', 'Rishikesh', 'sds', 'dss', 'dssdd'),
(20150005, 'MAH0001', 'Rishikesh', 'sds', 'dss', 'dssdd'),
(20150005, 'MAH0001', 'Rishikesh', 'dsd', 'dwdd', 'sds'),
(20150001, 'MAH0001', 'Rishikesh', 'sdd', 'hello', 'dsdsd'),
(20150001, 'MAH0001', 'Rishikesh', 'dsd', 'dd', 'dsd'),
(20150006, 'MAH0001', 'Rishikesh', 'sdcshsjkdsk', 'dmddm', 'fdkmfd'),
(20150001, 'MAH0001', 'Rishikesh', 'SJIKSDJ', 'SDSD', 'DSD'),
(20150001, 'MAH0001', 'Rishikesh', 'ddsds', 'dsd', 'ddsd'),
(20150003, 'MAH0001', 'Rishikesh', 'wddwwd', 'sdds', 'ddsdsd'),
(20150005, 'MAH0001', 'Rishikesh', 'sdswdssdsds', 'dd', 'd'),
(20150006, 'MAH0001', 'Rishikesh', 'ss', 'sd', 'dd'),
(20150001, 'MAH0001', 'Rishikesh', 'ddswd', 'dssd', 'cdd'),
(20150005, 'MAH0001', 'Rishikesh', 'dds', 'sds', ' '),
(20150006, 'MAH0001', 'Rishikesh', 'sds', 'sfsfd', ''),
(20150003, 'MAH0001', 'Rishikesh', 'aad', 'ss', 'sd'),
(20150008, 'MAH0001', 'Rishikesh', 'abcdef', 'xyz', 'qwert'),
(2015001, 'MAH0001', 'Rishikesh', 'asdfg', 'aaaaaa', 'zxvcvb'),
(20150001, 'MAH0001', 'Rishikesh', 'dddkls', 'dsds', 'sds'),
(20150003, 'MAH0001', 'Rishikesh', 'sdhdskdjh', 'snksmns', 'skdsm'),
(20150005, 'MAH0001', 'Rishikesh', 'adda', 'sff', 'sfsf'),
(20150004, 'MAH0001', 'Rishikesh', 'sdsd', 'sd', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `rno` int(11) NOT NULL,
  `rpid` int(11) NOT NULL,
  `rpname` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`rno`, `rpid`, `rpname`, `status`) VALUES
(201, 0, '', 0),
(202, 0, ' ', 0),
(203, 0, ' ', 0),
(204, 20150005, 'gurleen ', 1),
(205, 20150004, 'Mukesh', 1),
(206, 0, '', 0),
(207, 0, '', 0),
(208, 0, '', 0),
(209, 0, '', 0),
(210, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
 ADD PRIMARY KEY (`appid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
 ADD PRIMARY KEY (`did`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
 ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
 ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
