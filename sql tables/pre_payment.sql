-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 28, 2016 at 04:49 PM
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
-- Table structure for table `pre_payment`
--

CREATE TABLE IF NOT EXISTS `pre_payment` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `reference_number` varchar(10) NOT NULL,
  `amount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pre_payment`
--

INSERT INTO `pre_payment` (`email`, `name`, `reference_number`, `amount`) VALUES
('', '', '6000', 0),
('devmukul44@gmail.com', 'mukul dev', '6001', 2050),
('devmukul44@gmail.com', 'mukul dev', '6002', 800);
