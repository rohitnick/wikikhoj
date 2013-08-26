-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 18, 2011 at 07:32 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `khojdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admint`
--

CREATE TABLE IF NOT EXISTS `admint` (
  `adminid` int(5) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(30) NOT NULL,
  `adminuname` varchar(30) NOT NULL,
  `adminpwd` varchar(30) NOT NULL,
  `lastlogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`adminid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admint`
--

INSERT INTO `admint` (`adminid`, `adminname`, `adminuname`, `adminpwd`, `lastlogin`) VALUES
(1, 'Rohit', 'nick', 'nickygarg', '2011-10-19 01:00:16'),
(2, 'Samyak', 'sammy', 'badshah', '2011-10-19 00:53:17');
