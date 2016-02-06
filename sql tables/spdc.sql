-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2016 at 09:23 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spdc`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` bigint(50) NOT NULL,
  `gender` varchar(3) NOT NULL,
  `college_name` varchar(50) NOT NULL,
  `t_shirt_size` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`first_name`, `last_name`, `email`, `phone_number`, `gender`, `college_name`, `t_shirt_size`) VALUES
('mukul', 'dev', 'devmukul44@gmail.com', 9629342625, 'm', 'vit', 'L'),
('dev', 'mukul', 'mukul.dev2013@vit.ac.in', 9629342625, 'm', 'vit', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `ogop`
--

CREATE TABLE IF NOT EXISTS `ogop` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `college_name` varchar(50) NOT NULL,
  `current_sem` int(2) NOT NULL,
  `asme_id` varchar(50) NOT NULL,
  `reference_number` varchar(10) NOT NULL,
  `amount` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ogop`
--

INSERT INTO `ogop` (`email`, `name`, `college_name`, `current_sem`, `asme_id`, `reference_number`, `amount`) VALUES
('devmukul44@gmail.com', 'mukul dev', 'VIT', 6, 'asme id', '2000', 700);

-- --------------------------------------------------------

--
-- Table structure for table `ogtp`
--

CREATE TABLE IF NOT EXISTS `ogtp` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `college_name` varchar(50) NOT NULL,
  `current_sem` int(2) NOT NULL,
  `asme_id` varchar(50) NOT NULL,
  `reference_number` varchar(10) NOT NULL,
  `amount` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ogtp`
--

INSERT INTO `ogtp` (`email`, `name`, `college_name`, `current_sem`, `asme_id`, `reference_number`, `amount`) VALUES
('devmukul44@gmail.com', 'mukul dev', 'VIT', 6, 'asme id', '4000', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `ogtw`
--

CREATE TABLE IF NOT EXISTS `ogtw` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `college_name` varchar(50) NOT NULL,
  `current_sem` int(2) NOT NULL,
  `asme_id` varchar(50) NOT NULL,
  `reference_number` varchar(10) NOT NULL,
  `amount` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ogtw`
--

INSERT INTO `ogtw` (`email`, `name`, `college_name`, `current_sem`, `asme_id`, `reference_number`, `amount`) VALUES
('devmukul44@gmail.com', 'mukul dev', 'VIT', 6, 'asme id', '3000', 1000),
('devmukul44@gmail.com', 'mukul dev', 'VIT', 6, 'asme id', '3001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ogvp`
--

CREATE TABLE IF NOT EXISTS `ogvp` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `college_name` varchar(50) NOT NULL,
  `current_sem` int(2) NOT NULL,
  `asme_id` varchar(50) NOT NULL,
  `reference_number` varchar(10) NOT NULL,
  `amount` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ogvp`
--

INSERT INTO `ogvp` (`email`, `name`, `college_name`, `current_sem`, `asme_id`, `reference_number`, `amount`) VALUES
('devmukul44@gmail.com', 'mukul dev', 'VIT', 6, 'asme id', '5000', 1000),
('devmukul44@gmail.com', 'mukul dev', 'VIT', 6, 'asme id', '5001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`name`, `email`, `subject`, `message`) VALUES
('devmukul44', 'devmukul44@gmail.com', 'abc', 'xyz'),
('devmukul44', 'Email@gg.com', 'abc', 'hjbv'),
('devmukul44', 'Email@hh', 'abc', 'Your Message');

-- --------------------------------------------------------

--
-- Table structure for table `sdc`
--

CREATE TABLE IF NOT EXISTS `sdc` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `number_members` int(3) NOT NULL,
  `college_name` varchar(50) NOT NULL,
  `current_sem` int(2) NOT NULL,
  `asme_id` varchar(50) NOT NULL,
  `reference_number` varchar(10) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdc`
--

INSERT INTO `sdc` (`email`, `name`, `team_name`, `number_members`, `college_name`, `current_sem`, `asme_id`, `reference_number`, `amount`) VALUES
('devmukul44@gmail.com', 'mukul dev', 'SAWANPURI, JAGADHARI,', 3, 'VIT', 3, 'asme id', '1000', 700),
('devmukul44@gmail.com', 'mukul dev', 'devhimanshu', 2, 'VIT', 6, 'asme id', '1001', 700),
('mukul.dev2013@vit.ac.in', 'dev mukul', 'SAWANPURI, JAGADHARI,', 6, 'VIT', 6, 'asme id', '1002', 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `email`, `password`) VALUES
('mukul', 'devmukul44@gmail.com', 'mukul'),
('Himanshu', 'Himanshu', 'abc'),
('dev', 'mukul.dev2013@vit.ac.in', 'mukul');

-- --------------------------------------------------------

--
-- Table structure for table `yes_payment`
--

CREATE TABLE IF NOT EXISTS `yes_payment` (
  `ref no` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tpsltranid` varchar(60) NOT NULL,
  `bank_refno` varchar(60) NOT NULL,
  `ststus` int(5) NOT NULL,
  `amount` int(5) NOT NULL,
  `txndate` varchar(10) NOT NULL,
  `login` int(4) NOT NULL,
  PRIMARY KEY (`ref no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yes_payment`
--

INSERT INTO `yes_payment` (`ref no`, `email`, `tpsltranid`, `bank_refno`, `ststus`, `amount`, `txndate`, `login`) VALUES
('spdc1001', 'devmukul44@gmail.com', '121', '3232', 300, 700, 'bb', 1001),
('spdc1002', 'mukul.dev2013@vit.ac.in', '121', '3232', 300, 1, 'bb', 1002),
('spdc3001', 'devmukul44@gmail.com', '121', '3232', 300, 1, 'bb', 3001),
('spdc5001', 'devmukul44@gmail.com', '121', '3232', 300, 1, 'bb', 5001);
