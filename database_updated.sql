-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 10, 2013 at 07:43 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `erp`
--
CREATE DATABASE `erp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `erp`;

-- --------------------------------------------------------

--
-- Table structure for table `def`
--

CREATE TABLE IF NOT EXISTS `def` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `jfee` int(10) NOT NULL,
  `pfee` int(10) NOT NULL,
  `bfeek` int(10) NOT NULL,
  `bfeen` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `def`
--

INSERT INTO `def` (`id`, `jfee`, `pfee`, `bfeek`, `bfeen`) VALUES
(1, 1500, 5000, 18000, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE IF NOT EXISTS `receipt` (
  `rc_id` int(10) NOT NULL AUTO_INCREMENT,
  `accid` varchar(30) NOT NULL,
  `stu_roll` varchar(12) NOT NULL,
  `date` varchar(20) NOT NULL,
  `day` int(10) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `accyr` varchar(20) NOT NULL,
  `jntu` varchar(20) NOT NULL,
  `placement` varchar(20) NOT NULL,
  `bus` varchar(20) NOT NULL,
  `tutionfee` varchar(30) NOT NULL,
  `path` varchar(50) NOT NULL,
  `total` varchar(20) NOT NULL,
  `payopt` varchar(50) NOT NULL,
  PRIMARY KEY (`rc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=161 ;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`rc_id`, `accid`, `stu_roll`, `date`, `day`, `month`, `year`, `accyr`, `jntu`, `placement`, `bus`, `tutionfee`, `path`, `total`, `payopt`) VALUES
(160, 'ACC09562', '09091a0562', '10-Feb-2013', 10, 'Feb', '2013', 'ty', '', '5000', '7000', '', 'receipts/09091a0562/09091a0562_16_10-Feb-2013.pdf', '12000', '114541'),
(159, 'ACC09562', '09091a0562', '10-Feb-2013', 10, 'Feb', '2013', 'ty', '1500', '', '', '', 'receipts/09091a0562/09091a0562_13_10-Feb-2013.pdf', '1500', 'CASH'),
(157, 'ACC09562', '09091a0562', '10-Feb-2013', 10, 'Feb', '2013', 'ny', '', '5000', '7000', '3000', 'receipts/09091a0562/09091a0562_10-Feb-2013.pdf', '15000', 'CASH'),
(158, 'ACC09562', '09091a0562', '10-Feb-2013', 10, 'Feb', '2013', 'ny', '1500', '', '', '', 'receipts/09091a0562/09091a0562_12_10-Feb-2013.pdf', '1500', 'CASH');

-- --------------------------------------------------------

--
-- Table structure for table `smsstatus`
--

CREATE TABLE IF NOT EXISTS `smsstatus` (
  `accid` varchar(10) NOT NULL,
  `stu_roll` varchar(20) NOT NULL,
  `otp` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `jobid` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`accid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smsstatus`
--

INSERT INTO `smsstatus` (`accid`, `stu_roll`, `otp`, `state`, `jobid`, `date`, `status`) VALUES
('ACC09562', '09091a0562', 'A09152562', 'Status=0', 'JOB_ins37_1360480750', '10-Feb-2013', 1),
('ACC09563', '09091a0563', 'A09431563', 'Status=0', 'JOB_ins37_1360479798', '10-Feb-2013', 1),
('ACC095b0', '09091a05b0', 'A093345b0', 'Status=0', 'JOB_ins37_1360477339', '10-Feb-2013', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stdet`
--

CREATE TABLE IF NOT EXISTS `stdet` (
  `stu_roll` varchar(11) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `stu_name` varchar(50) NOT NULL,
  `stu_father` varchar(50) NOT NULL,
  `stu_branch` varchar(10) NOT NULL,
  `stu_email` varchar(50) NOT NULL,
  `stu_mob` varchar(20) NOT NULL,
  `tutionfee` varchar(20) NOT NULL,
  `accid` varchar(20) NOT NULL,
  PRIMARY KEY (`stu_roll`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdet`
--

INSERT INTO `stdet` (`stu_roll`, `batch`, `surname`, `stu_name`, `stu_father`, `stu_branch`, `stu_email`, `stu_mob`, `tutionfee`, `accid`) VALUES
('09091a0563', '09-13', 'Teja', 'Ravi', 'Diwakar', 'CSE', 'ravi-tej@live.com', '8142547078', '65000', 'ACC09563'),
('09091a0562', '09-13', 'R.N', 'Rasagna', 'R.N', 'CSE', 'reddyvarirasagna@gmail.com', '9908042550', '3000', 'ACC09562'),
('09091a05b0', '09-13', 'bathini', 'Yoganand', 'Father', 'CSE', 'yoganand.bathini@live.com', '9985565366', '3000', 'ACC095b0');

-- --------------------------------------------------------

--
-- Table structure for table `stud1`
--

CREATE TABLE IF NOT EXISTS `stud1` (
  `stu_roll` varchar(20) NOT NULL,
  `accid` varchar(10) NOT NULL,
  `stu_name` varchar(20) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `jntu` varchar(20) NOT NULL DEFAULT '0',
  `bus` varchar(20) NOT NULL DEFAULT '0',
  `placement` varchar(20) NOT NULL DEFAULT '0',
  `tutionfee` varchar(20) NOT NULL DEFAULT '0',
  `jdate` varchar(20) NOT NULL DEFAULT '0',
  `bdate` varchar(20) NOT NULL DEFAULT '0',
  `pdate` varchar(20) NOT NULL DEFAULT '0',
  `tdate` varchar(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`stu_roll`),
  UNIQUE KEY `stu_ref` (`stu_roll`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud1`
--

INSERT INTO `stud1` (`stu_roll`, `accid`, `stu_name`, `batch`, `branch`, `jntu`, `bus`, `placement`, `tutionfee`, `jdate`, `bdate`, `pdate`, `tdate`) VALUES
('09091a0563', 'ACC09563', 'Ravi', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a05b0', 'ACC095b0', 'Yoganand', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a0562', 'ACC09562', 'Rasagna', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `stud2`
--

CREATE TABLE IF NOT EXISTS `stud2` (
  `stu_roll` varchar(20) NOT NULL,
  `accid` varchar(10) NOT NULL,
  `stu_name` varchar(20) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `jntu` varchar(20) NOT NULL DEFAULT '0',
  `bus` varchar(20) NOT NULL DEFAULT '0',
  `placement` varchar(20) NOT NULL DEFAULT '0',
  `tutionfee` varchar(20) NOT NULL DEFAULT '0',
  `tdate` varchar(20) NOT NULL DEFAULT '0',
  `jdate` varchar(20) NOT NULL DEFAULT '0',
  `bdate` varchar(20) NOT NULL DEFAULT '0',
  `pdate` varchar(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`stu_roll`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud2`
--

INSERT INTO `stud2` (`stu_roll`, `accid`, `stu_name`, `batch`, `branch`, `jntu`, `bus`, `placement`, `tutionfee`, `tdate`, `jdate`, `bdate`, `pdate`) VALUES
('09091a0563', 'ACC09563', 'Ravi', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a05b0', 'ACC095b0', 'Yoganand', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a0562', 'ACC09562', 'Rasagna', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `stud3`
--

CREATE TABLE IF NOT EXISTS `stud3` (
  `stu_roll` varchar(20) NOT NULL,
  `accid` varchar(10) NOT NULL,
  `stu_name` varchar(20) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `jntu` varchar(20) NOT NULL DEFAULT '0',
  `bus` varchar(20) NOT NULL DEFAULT '0',
  `placement` varchar(20) NOT NULL DEFAULT '0',
  `tutionfee` varchar(20) NOT NULL DEFAULT '0',
  `tdate` varchar(20) NOT NULL DEFAULT '0',
  `jdate` varchar(20) NOT NULL DEFAULT '0',
  `bdate` varchar(20) NOT NULL DEFAULT '0',
  `pdate` varchar(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`stu_roll`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud3`
--

INSERT INTO `stud3` (`stu_roll`, `accid`, `stu_name`, `batch`, `branch`, `jntu`, `bus`, `placement`, `tutionfee`, `tdate`, `jdate`, `bdate`, `pdate`) VALUES
('09091a0563', 'ACC09563', 'Ravi', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a05b0', 'ACC095b0', 'Yoganand', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a0562', 'ACC09562', 'Rasagna', '09-13', 'CSE', '1500', '7000', '5000', '0', '0', '10-Feb-2013', '10-Feb-2013', '10-Feb-2013');

-- --------------------------------------------------------

--
-- Table structure for table `stud4`
--

CREATE TABLE IF NOT EXISTS `stud4` (
  `stu_roll` varchar(20) NOT NULL,
  `accid` varchar(10) NOT NULL,
  `stu_name` varchar(20) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `jntu` varchar(20) NOT NULL DEFAULT '0',
  `bus` varchar(20) NOT NULL DEFAULT '0',
  `placement` varchar(20) NOT NULL DEFAULT '0',
  `tutionfee` varchar(20) NOT NULL DEFAULT '0',
  `tdate` varchar(20) NOT NULL DEFAULT '0',
  `jdate` varchar(20) NOT NULL DEFAULT '0',
  `bdate` varchar(20) NOT NULL DEFAULT '0',
  `pdate` varchar(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`stu_roll`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud4`
--

INSERT INTO `stud4` (`stu_roll`, `accid`, `stu_name`, `batch`, `branch`, `jntu`, `bus`, `placement`, `tutionfee`, `tdate`, `jdate`, `bdate`, `pdate`) VALUES
('09091a0563', 'ACC09563', 'Ravi', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a05b0', 'ACC095b0', 'Yoganand', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a0562', 'ACC09562', 'Rasagna', '09-13', 'CSE', '1500', '7000', '5000', '3000', '10-Feb-2013', '10-Feb-2013', '10-Feb-2013', '10-Feb-2013');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `pass`) VALUES
('admin', '5f4dcc3b5a');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`, `active`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'ravi', 'teja', 'tejasweets@gmail.com', 1);
