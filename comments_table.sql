-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2016 at 04:58 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments_table`
--

CREATE TABLE IF NOT EXISTS `comments_table` (
  `slno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `comments` longtext NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `comments_table`
--

INSERT INTO `comments_table` (`slno`, `user`, `comments`) VALUES
(1, 'A', 'Hey! Give me 9 spade'),
(29, 'Gingy', 'localhost!'),
(30, 'Gingy', 'helo'),
(31, 'Gingy', 'abcde'),
(32, 'Gingy', 'Hloooo'),
(33, 'Gingy', 'aaa'),
(34, 'Gingy', 'haha'),
(35, 'Gingy', 'lala'),
(36, 'Gingy', 'lala'),
(37, 'Gingy', 'kk'),
(38, 'Gingy', 'bbb'),
(39, 'Gingy', 'ccc'),
(40, 'Gingy', 'ccc'),
(41, 'Gingy', 'ccc'),
(42, 'Gingy', 'd'),
(43, 'Gingy', 'ddd'),
(44, 'Gingy', 'iii'),
(45, 'Gingy', 'lll'),
(46, 'Gingy', 'mmm'),
(47, 'Gingy', 'nnn'),
(48, 'Gingy', 'ooo'),
(49, 'Gingy', 'ppp'),
(50, 'Gingy', 'qqq'),
(51, 'Gingy', 'qqq');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
