-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 02, 2012 at 04:33 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `lib`
--

CREATE TABLE IF NOT EXISTS `lib` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `lib`
--

INSERT INTO `lib` (`id`, `title`, `name`, `author`, `status`, `date`) VALUES
(7, 'Lord of the Rings', 'calas', 'Jethro Clitar', 'Available', '2012-03-08 23:45:50'),
(8, 'You and Me', 'NULL', 'Niko Albani', 'Available', '2012-03-08 23:58:36'),
(9, 'sadasd', 'NULL', 'Francis', 'Available', '2012-06-02 16:59:55'),
(10, 'Now and Then', 'NULL', 'Francis', 'Available', '2012-03-08 23:47:41'),
(11, 'oh yeah', '', 'misa campo', '', '0000-00-00 00:00:00');
