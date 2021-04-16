-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2017 at 04:44 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `emp`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_emp`
--

CREATE TABLE IF NOT EXISTS `master_emp` (
  `eno` int(5) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `cpassword` varchar(15) NOT NULL,
  `salary` int(8) NOT NULL,
  `dept` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_emp`
--

INSERT INTO `master_emp` (`eno`, `ename`, `gender`, `email`, `mobile`, `password`, `cpassword`, `salary`, `dept`) VALUES
(1, 'abc', 'Male', 'abc@gmail.com', '9825962615', 'abc', 'abc', 15000, 'Sales');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_emp`
--
ALTER TABLE `master_emp`
  ADD PRIMARY KEY (`eno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_emp`
--
ALTER TABLE `master_emp`
  MODIFY `eno` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
