-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2013 at 04:02 PM
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
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_first` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `contact_last` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `contact_email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `contact_first`, `contact_last`, `contact_email`) VALUES
(4, 'Joe', 'Tester', 'joe@tester.com'),
(3, 'Jim', 'Smith', 'jim@tester.com');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=182 ;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`rc_id`, `accid`, `stu_roll`, `date`, `day`, `month`, `year`, `accyr`, `jntu`, `placement`, `bus`, `tutionfee`, `path`, `total`, `payopt`) VALUES
(180, 'ACC09590', '09091a0590', '12-Feb-2013', 12, 'Feb', '2013', 'sy', '', '5000', '', '3000', 'receipts/09091a0590/09091a0590_39_12-Feb-2013.pdf', '8000', 'CASH'),
(179, 'ACC09590', '09091a0590', '12-Feb-2013', 12, 'Feb', '2013', 'ty', '', '', '', '3000', 'receipts/09091a0590/09091a0590_41_12-Feb-2013.pdf', '3000', 'CASH'),
(178, 'ACC09563', '09091a0563', '12-Feb-2013', 12, 'Feb', '2013', 'ny', '1500', '', '', '', 'receipts/09091a0563/09091a0563_158_12-Feb-2013.pdf', '1500', 'CASH'),
(177, 'ACC09563', '09091a0563', '12-Feb-2013', 12, 'Feb', '2013', 'ny', '', '5000', '', '', 'receipts/09091a0563/09091a0563_174_12-Feb-2013.pdf', '5000', 'CASH'),
(176, 'ACC09540', '09091a0540', '11-Feb-2013', 11, 'Feb', '2013', 'ny', '1500', '5000', '7000', '', 'receipts/09091a0540/09091a0540_156_11-Feb-2013.pdf', '13500', 'CASH'),
(175, 'ACC09522', '09091a0522', '11-Feb-2013', 11, 'Feb', '2013', 'ny', '1500', '5000', '7000', '30200', 'receipts/09091a0522/09091a0522_113_11-Feb-2013.pdf', '43700', 'CASH'),
(174, 'ACC09522', '09091a0522', '11-Feb-2013', 11, 'Feb', '2013', 'ny', '1500', '5000', '7000', '30200', 'receipts/09091a0522/09091a0522_117_11-Feb-2013.pdf', '43700', 'CASH'),
(173, 'ACC09585', '09091a0585', '11-Feb-2013', 11, 'Feb', '2013', 'ny', '1500', '', '', '', 'receipts/09091a0585/09091a0585_115_11-Feb-2013.pdf', '1500', 'CASH'),
(172, 'ACC09585', '09091a0585', '11-Feb-2013', 11, 'Feb', '2013', 'ny', '', '5000', '', '3000', 'receipts/09091a0585/09091a0585_64_11-Feb-2013.pdf', '8000', 'CASH'),
(171, 'ACC09563', '09091a0563', '11-Feb-2013', 11, 'Feb', '2013', 'ny', '', '', '7000', '', 'receipts/09091a0563/09091a0563_51_11-Feb-2013.pdf', '7000', 'CASH'),
(170, 'ACC09515', '09091a0515', '11-Feb-2013', 11, 'Feb', '2013', 'ny', '', '5000', '18000', '3000', 'receipts/09091a0515/09091a0515_41_11-Feb-2013.pdf', '26000', 'CASH'),
(169, 'ACC095a1', '09091a05a1', '11-Feb-2013', 11, 'Feb', '2013', 'fy', '', '', '', '65000', 'receipts/09091a05a1/09091a05a1_76_11-Feb-2013.pdf', '65000', 'CASH'),
(168, 'ACC095a1', '09091a05a1', '11-Feb-2013', 11, 'Feb', '2013', 'fy', '1500', '', '7000', '', 'receipts/09091a05a1/09091a05a1_162_11-Feb-2013.pdf', '8500', 'asjjfe57'),
(167, 'ACC09563', '09091a0563', '11-Feb-2013', 11, 'Feb', '2013', 'ny', '', '', '', '65000', 'receipts/09091a0563/09091a0563_90_11-Feb-2013.pdf', '65000', 'AS995'),
(166, 'ACC09563', '09091a0563', '10-Feb-2013', 10, 'Feb', '2013', 'fy', '', '', '', '65000', 'receipts/09091a0563/09091a0563_63_10-Feb-2013.pdf', '65000', 'CASH'),
(165, 'ACC09563', '09091a0563', '10-Feb-2013', 10, 'Feb', '2013', 'fy', '1500', '5000', '', '', 'receipts/09091a0563/09091a0563_47_10-Feb-2013.pdf', '6500', '1a05562'),
(164, 'ACC08507', '08091a0507', '10-Feb-2013', 10, 'Feb', '2013', 'ty', '', '', '7000', '30000', 'receipts/08091a0507/08091a0507_34_10-Feb-2013.pdf', '37000', 'CASH'),
(163, 'ACC08507', '08091a0507', '10-Feb-2013', 10, 'Feb', '2013', 'ty', '1500', '5000', '', '', 'receipts/08091a0507/08091a0507_80_10-Feb-2013.pdf', '6500', 'CASH'),
(162, 'ACC08507', '08091a0507', '10-Feb-2013', 10, 'Feb', '2013', 'ny', '', '', '', '30000', 'receipts/08091a0507/08091a0507_200_10-Feb-2013.pdf', '30000', 'CASH'),
(161, 'ACC08507', '08091a0507', '10-Feb-2013', 10, 'Feb', '2013', 'ny', '1500', '5000', '7000', '', 'receipts/08091a0507/08091a0507_11_10-Feb-2013.pdf', '13500', '56985412'),
(160, 'ACC09562', '09091a0562', '10-Feb-2013', 10, 'Feb', '2013', 'ty', '', '5000', '7000', '', 'receipts/09091a0562/09091a0562_16_10-Feb-2013.pdf', '12000', '114541'),
(159, 'ACC09562', '09091a0562', '10-Feb-2013', 10, 'Feb', '2013', 'ty', '1500', '', '', '', 'receipts/09091a0562/09091a0562_13_10-Feb-2013.pdf', '1500', 'CASH'),
(157, 'ACC09562', '09091a0562', '10-Feb-2013', 10, 'Feb', '2013', 'ny', '', '5000', '7000', '3000', 'receipts/09091a0562/09091a0562_10-Feb-2013.pdf', '15000', 'CASH'),
(158, 'ACC09562', '09091a0562', '10-Feb-2013', 10, 'Feb', '2013', 'ny', '1500', '', '', '', 'receipts/09091a0562/09091a0562_12_10-Feb-2013.pdf', '1500', 'CASH'),
(181, 'ACC095a1', '09091a05a1', '12-Feb-2013', 12, 'Feb', '2013', 'sy', '', '5000', '', '', 'receipts/09091a05a1/09091a05a1_44_12-Feb-2013.pdf', '5000', 'CASH');

-- --------------------------------------------------------

--
-- Table structure for table `smsfee`
--

CREATE TABLE IF NOT EXISTS `smsfee` (
  `accid` varchar(20) NOT NULL,
  `stu_roll` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `jobid` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smsfee`
--

INSERT INTO `smsfee` (`accid`, `stu_roll`, `total`, `date`, `status`, `jobid`, `state`) VALUES
('ACC09585', '', '', '', 'Status=1', ' Receipient Number d', '1'),
('ACC09585', '09091a0585', '1500', '11-Feb-2013', 'Status=0', 'JOB_ins37_1360578759', '1'),
('ACC09522', '09091a0522', '43700', '11-Feb-2013', '<!DOCTYPE HTML PUBLI', ' 11 Feb 2013 10:39:2', '1'),
('ACC09522', '09091a0522', '43700', '11-Feb-2013', 'Status=0', 'JOB_ins37_1360579213', '1'),
('ACC09540', '09091a0540', '13500', '11-Feb-2013', 'Status=0', 'JOB_ins37_1360579617', '1'),
('ACC09563', '09091a0563', '5000', '12-Feb-2013', 'Status=1', ' API Time Expired \r\n', '1'),
('ACC09590', '09091a0590', '8000', '12-Feb-2013', 'Status=0', 'JOB_ins37_1360645007', '1'),
('ACC095a1', '09091a05a1', '5000', '12-Feb-2013', 'Status=0', 'JOB_ins37_1360645448', '1');

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
('ACC08507', '08091a0507', 'A08832507', 'Status=0', 'JOB_ins37_1360501582', '10-Feb-2013', 1),
('ACC09515', '09091a0515', 'A09622515', 'Status=0', 'JOB_ins37_1360560065', '11-Feb-2013', 1),
('ACC09522', '09091a0522', 'A09379522', 'Status=0', 'JOB_ins37_1360579013', '11-Feb-2013', 1),
('ACC09540', '09091a0540', 'A09727540', 'Status=0', 'JOB_ins37_1360565822', '11-Feb-2013', 1),
('ACC09561', '09091a0561', 'A09473561', 'Status=0', 'JOB_ins37_1360502444', '10-Feb-2013', 1),
('ACC09562', '09091a0562', 'A09152562', 'Status=0', 'JOB_ins37_1360480750', '10-Feb-2013', 1),
('ACC09563', '09091a0563', 'A09431563', 'Status=0', 'JOB_ins37_1360479798', '10-Feb-2013', 1),
('ACC09585', '09091a0585', 'A09509585', 'Status=0', 'JOB_ins37_1360578252', '11-Feb-2013', 1),
('ACC09590', '09091a0590', 'A09499590', 'Status=0', 'JOB_ins37_1360643409', '12-Feb-2013', 1),
('ACC09592', '09091a0592', 'A09736592', 'Status=0', 'JOB_ins37_1360559837', '11-Feb-2013', 1),
('ACC095a1', '09091a05a1', 'A092205a1', 'Status=0', 'JOB_ins37_1360507716', '10-Feb-2013', 1),
('ACC095b0', '09091a05b0', 'A093345b0', 'Status=0', 'JOB_ins37_1360477339', '10-Feb-2013', 1),
('ACC09w0i', '0910929w0i', 'A09345w0i', 'Status=0', 'JOB_ins37_1360644167', '12-Feb-2013', 1);

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
('09091a05b0', '09-13', 'bathini', 'Yoganand', 'Father', 'CSE', 'yoganand.bathini@live.com', '9985565366', '3000', 'ACC095b0'),
('08091a0507', '09-13', 'Modem', 'bharath', 'Krishnaiah', 'CSE', 'bharathm2012@gmail.com', '9642717696', '30000', 'ACC08507'),
('09091a0561', '09-13', 'm', 'Ramesh', 'Father', 'CSE', 'tejasweets@gmail.com', '8121213775', '9200', 'ACC09561'),
('09091a05a1', '09-13', 'reddy', 'Varadha', 'Father', 'CSE', 'varadamohanreddy@gmail.com', '9494810420', '65000', 'ACC095a1'),
('09091a0592', '09-13', 'Gunda', 'Taruni', 'Murali Krishna', 'CSE', 'taruni592@gmail.com', '9494810420', '33000', 'ACC09592'),
('09091a0515', '09-13', 'Shaik', 'Fahad', 'Mehboob', 'CSE', 'mdfahadcse@gmail.com', '9959466954', '3000', 'ACC09515'),
('09091a0585', '09-13', 'Kundan', 'Sujith', 'Viswanath', 'CSE', 'sujithkundan@gmail.com', '9160102095', '3000', 'ACC09585'),
('09091a0522', '09-13', 'pandillapalli', 'hari krishna', 'p srinivasulu', 'CSE', 'krishna.hari522@gmail.com', '8125612856', '30200', 'ACC09522'),
('09091a0590', '09-13', 'Syed', 'Tabrez', 'Syed Basha', 'CSE', 'prince.tabrez7@gmail.com', '9441688663', '3000', 'ACC09590'),
('0910929w0i', '09-13', 'j', 'test', 'jncls', 'CSE', 'ljvsd@gmail.cjsd', '8142547078', '', 'ACC09w0i');

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
('09091a0563', 'ACC09563', 'Ravi', '09-13', 'CSE', '1500', '0', '5000', '65000', '10-Feb-2013', '0', '10-Feb-2013', '10-Feb-201'),
('09091a05b0', 'ACC095b0', 'Yoganand', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a0562', 'ACC09562', 'Rasagna', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('08091a0507', 'ACC08507', 'bharath', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a0561', 'ACC09561', 'Ramesh', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a05a1', 'ACC095a1', 'Varadha', '09-13', 'CSE', '1500', '7000', '0', '65000', '11-Feb-2013', '11-Feb-2013', '0', '11-Feb-201'),
('09091a0592', 'ACC09592', 'Taruni', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a0515', 'ACC09515', 'Fahad', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a0585', 'ACC09585', 'Sujith', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a0522', 'ACC09522', 'hari krishna', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a0590', 'ACC09590', 'Tabrez', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('0910929w0i', 'ACC09w0i', 'test', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0');

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
('09091a0562', 'ACC09562', 'Rasagna', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('08091a0507', 'ACC08507', 'bharath', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a0561', 'ACC09561', 'Ramesh', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a05a1', 'ACC095a1', 'Varadha', '09-13', 'CSE', '0', '0', '5000', '0', '0', '0', '0', '12-Feb-2013'),
('09091a0592', 'ACC09592', 'Taruni', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a0515', 'ACC09515', 'Fahad', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a0540', 'ACC09540', 'uday', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a0585', 'ACC09585', 'Sujith', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a0522', 'ACC09522', 'hari krishna', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a0590', 'ACC09590', 'Tabrez', '09-13', 'CSE', '0', '0', '5000', '3000', '12-Feb-2013', '0', '0', '12-Feb-2013'),
('0910929w0i', 'ACC09w0i', 'test', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0');

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
('09091a0562', 'ACC09562', 'Rasagna', '09-13', 'CSE', '1500', '7000', '5000', '0', '0', '10-Feb-2013', '10-Feb-2013', '10-Feb-2013'),
('08091a0507', 'ACC08507', 'bharath', '09-13', 'CSE', '1500', '7000', '5000', '30000', '10-Feb-2013', '10-Feb-2013', '10-Feb-2013', '10-Feb-2013'),
('09091a0561', 'ACC09561', 'Ramesh', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a05a1', 'ACC095a1', 'Varadha', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a0592', 'ACC09592', 'Taruni', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a0515', 'ACC09515', 'Fahad', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a0540', 'ACC09540', 'uday', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a0585', 'ACC09585', 'Sujith', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a0522', 'ACC09522', 'hari krishna', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a0590', 'ACC09590', 'Tabrez', '09-13', 'CSE', '0', '0', '0', '3000', '12-Feb-2013', '0', '0', '0'),
('0910929w0i', 'ACC09w0i', 'test', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0');

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
('09091a0563', 'ACC09563', 'Ravi', '09-13', 'CSE', '1500', '7000', '5000', '65000', '11-Feb-2013', '12-Feb-2013', '11-Feb-2013', '12-Feb-2013'),
('09091a05b0', 'ACC095b0', 'Yoganand', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('08091a0507', 'ACC08507', 'bharath', '09-13', 'CSE', '1500', '7000', '5000', '30000', '10-Feb-2013', '10-Feb-2013', '10-Feb-2013', '10-Feb-2013'),
('09091a0562', 'ACC09562', 'Rasagna', '09-13', 'CSE', '1500', '7000', '5000', '3000', '10-Feb-2013', '10-Feb-2013', '10-Feb-2013', '10-Feb-2013'),
('09091a0561', 'ACC09561', 'Ramesh', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a05a1', 'ACC095a1', 'Varadha', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a0592', 'ACC09592', 'Taruni', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('09091a0515', 'ACC09515', 'Fahad', '09-13', 'CSE', '0', '18000', '5000', '3000', '11-Feb-2013', '0', '11-Feb-2013', '11-Feb-2013'),
('09091a0540', 'ACC09540', 'uday', '09-13', 'CSE', '1500', '7000', '5000', '0', '0', '11-Feb-2013', '11-Feb-2013', '11-Feb-2013'),
('09091a0585', 'ACC09585', 'Sujith', '09-13', 'CSE', '1500', '0', '5000', '3000', '11-Feb-2013', '11-Feb-2013', '0', '11-Feb-2013'),
('09091a0522', 'ACC09522', 'hari krishna', '09-13', 'CSE', '1500', '7000', '5000', '30200', '11-Feb-2013', '11-Feb-2013', '11-Feb-2013', '11-Feb-2013'),
('09091a0590', 'ACC09590', 'Tabrez', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0'),
('0910929w0i', 'ACC09w0i', 'test', '09-13', 'CSE', '0', '0', '0', '0', '0', '0', '0', '0');

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
