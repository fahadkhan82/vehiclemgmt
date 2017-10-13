-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2017 at 03:54 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vehicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_vehicle`
--

CREATE TABLE IF NOT EXISTS `assign_vehicle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `veh_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cmsusers`
--

CREATE TABLE IF NOT EXISTS `cmsusers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `role` int(10) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `fname` varchar(32) NOT NULL,
  `lname` varchar(32) NOT NULL,
  `address` varchar(50) NOT NULL,
  `cnic` varchar(40) NOT NULL,
  `city` varchar(10) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `alter_no` varchar(20) NOT NULL,
  `tenure` varchar(10) NOT NULL,
  `agreement_date` date NOT NULL,
  `payment` varchar(10) NOT NULL,
  `account` varchar(20) NOT NULL,
  `accountsec` varchar(20) NOT NULL,
  `alter_account` varchar(20) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `cmsusers`
--

INSERT INTO `cmsusers` (`id`, `role`, `username`, `password`, `fname`, `lname`, `address`, `cnic`, `city`, `mobile_no`, `alter_no`, `tenure`, `agreement_date`, `payment`, `account`, `accountsec`, `alter_account`, `occupation`) VALUES
(1, 1, 'admin@email.com', '756470d326bd809e603f8aaba918f00c', 'Fahad', 'Khan', '', '', '', '', '', '', '0000-00-00', '', '', '', '', ''),
(4, 5, 'sdfsd@w.com', '48fba20f2bcd27af1804535f6cca8cc3', 'dfsdfsd', 'sdfs', 'sdfsdf', '37405-4537818-7', 'islamabad', '', '', '2', '0000-00-00', 'cash', '3224', '', '', 'sdfsd'),
(5, 5, 'sdfs@w.com', 'e0418686c9ca9df5be682f582e85407a', 'sdfsdf', 'sdfsdf', 'dfsfsdf', '345678765643456', 'islamabad', '', '', '3', '0000-00-00', 'cheque', 'dsfsd', '', '', 'sdfsd'),
(6, 5, 'sdfs@w.com', '941f2e2c8c4a7af2a204b320549f9684', 'sdfsdf', 'sdfsdf', 'dfsfsdf', '345678765643456', 'islamabad', '', '', '3', '0000-00-00', 'cheque', 'dsfsd', '', '', 'sdfsd'),
(7, 5, 'sdff@w.com', 'ef545280d94de68b3b3ddbbae9df8017', 'sdfs', 'dfsdf', 'fsdfsd', '374054537818744', 'rawalpindi', '', '', '4', '0000-00-00', 'cash', '', '', '', 'dfsdf'),
(8, 5, 'sdff@w.com', '086dcc4f222117e07a783ba02f351d2c', 'sdfs', 'dfsdf', 'fsdfsd', '374054537818744', 'rawalpindi', '', '', '4', '0000-00-00', 'cash', '', '', '', 'dfsdf'),
(9, 5, 'fahad6538@gmail.com', '4d5f725e3b71766ab0c22b8e25b9d46b', 'Fahad_new', 'Khan', 'sdffsd', '37405-4537818-7', 'islamabad', '', '', '3', '0000-00-00', 'cheque', '34534dfg', '', '', 'dfgdf'),
(11, 5, 'dfgdf@w.com', 'dedfdacaa0ab913b461c67cb61e531e4', 'dfg', 'fgdf', 'fdgfdfg', '111111111111111', 'rawalpindi', '', '', '4', '0000-00-00', 'cheque', '345345', '', '', 'gdfgd'),
(12, 5, 'fsdfs@w.com', 'e55287e9e44ed5ebe818cfcfef7704c0', 'dffs', 'dfsfsdf', 'dfsfsdf', '37405-4537818-7', 'rawalpindi', '', '', '4', '0000-00-00', 'cheque', '32323432', '23423', '', 'sdff');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE IF NOT EXISTS `driver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `cnic` varchar(30) NOT NULL,
  `age` varchar(20) NOT NULL,
  `perma_address` varchar(40) NOT NULL,
  `join_date` date NOT NULL,
  `salary` varchar(20) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `alternate_no` varchar(20) NOT NULL,
  `emergency_no` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(20) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `total_kms` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `inv_date` date NOT NULL,
  `deductions` varchar(20) NOT NULL,
  `tot_amount` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `maintainance`
--

CREATE TABLE IF NOT EXISTS `maintainance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `veh_id` int(20) NOT NULL,
  `maint_type` varchar(40) NOT NULL,
  `main_date` date NOT NULL,
  `cost` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(32) NOT NULL,
  `role_desc` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`, `role_desc`) VALUES
(1, 'Administrator', ''),
(2, 'Owner', 'Owner of the company'),
(3, 'Fleet Manager', 'Who manages fleet'),
(4, 'Finance', ''),
(5, 'Client', 'Normal User');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE IF NOT EXISTS `trips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `driver_id` int(20) NOT NULL,
  `vehicle_id` int(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `st_mtr_reading` varchar(20) NOT NULL,
  `end_mtr_reading` varchar(20) NOT NULL,
  `start_time` date NOT NULL,
  `end_time` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(32) NOT NULL,
  `model` varchar(50) NOT NULL,
  `make` varchar(50) NOT NULL,
  `year` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `cid`, `model`, `make`, `year`, `type`) VALUES
(1, 11, 'wagonr', 'suzuki', '2017', 'car'),
(2, 1, 'wagonr', 'suzuki', '1992', 'car'),
(3, 1, 'wagonr', 'suzuki', '1992', 'car'),
(4, 1, 'wagonr', 'suzuki', '1992', 'car'),
(5, 1, 'wagonr', 'suzuki', '1992', 'car'),
(6, 4, 'gdfgd', 'sdfsd', '23423', 'f'),
(7, 4, 'gdfgd', 'sdfsd', '23423', 'f'),
(8, 9, 'dfsf', 'sdfsd', '32', '4'),
(9, 11, 'dfg', 'vxc', '345', 'dfg'),
(10, 9, '345', 'geger', '45', '34534'),
(11, 11, 'gdfgg', 'fdg', '345', 'dfg'),
(12, 11, 'fghf', 'fghfh', '564', 'fghf'),
(13, 11, 'hfgh', 'fghfghf', 'trtyr', 'gfdd'),
(14, 11, 'fgdfgdfgdg', 'gfdgd', 'gdfgd', 'fdgdg'),
(15, 11, 'fsfsdfsf', 'sdf', 'sdfs', 'sdfs'),
(16, 11, 'ff', 'fff', 'ffff', 'ff'),
(17, 12, 'dfgd', 'fgdfgdfgd', 'gdfg', 'dfg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
