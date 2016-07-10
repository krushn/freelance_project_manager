-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2016 at 09:13 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `freelance2`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `skype` varchar(100) DEFAULT NULL,
  `contact_no` varchar(50) DEFAULT NULL,
  `note` text,
  `date_added` date NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `email`, `skype`, `contact_no`, `note`, `date_added`) VALUES
(2, 'demo', 'test@localhost.com', 'demo.skype', '999999999', 'good clinet', '2016-05-28'),
(3, 'test', 'demo@localhost.com', 'test.skype', '999999999', 'bad client', '2016-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `lead`
--

CREATE TABLE IF NOT EXISTS `lead` (
  `lead_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `skype` varchar(100) DEFAULT NULL,
  `contact_no` varchar(50) DEFAULT NULL,
  `note` text,
  `date_added` date NOT NULL,
  PRIMARY KEY (`lead_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lead`
--

INSERT INTO `lead` (`lead_id`, `name`, `email`, `skype`, `contact_no`, `note`, `date_added`) VALUES
(1, 'test lead', 'tetst@g.com', 'lead.skype', '6998989898', 'demo note', '2016-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `note_id` int(11) NOT NULL AUTO_INCREMENT,
  `note` text NOT NULL,
  PRIMARY KEY (`note_id`),
  FULLTEXT KEY `note` (`note`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE IF NOT EXISTS `password` (
  `password_id` int(11) NOT NULL AUTO_INCREMENT,
  `website` varchar(250) NOT NULL,
  `type` enum('FTP','Database','Admin','Customer','Other') NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY (`password_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `type` enum('Hourly','Fixed') NOT NULL DEFAULT 'Hourly',
  `rate` decimal(15,2) DEFAULT NULL COMMENT 'hourly rate',
  `amount` decimal(15,2) DEFAULT NULL,
  `paid` decimal(15,2) DEFAULT NULL,
  `status` enum('Pending','Processing','Complete','') NOT NULL,
  `date_added` date NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `name`, `type`, `rate`, `amount`, `paid`, `status`, `date_added`) VALUES
(3, 'demo project name', 'Hourly', '15.00', NULL, '48.50', 'Complete', '2016-04-27'),
(4, 'demo project name', 'Hourly', '15.00', NULL, '62.50', 'Pending', '2016-04-28'),
(5, 'demo project name', 'Hourly', '15.00', NULL, '113.00', 'Complete', '2016-04-29'),
(6, 'demo project name', 'Hourly', '15.00', NULL, '115.00', 'Complete', '2016-04-30'),
(7, 'demo project name', 'Hourly', '15.00', NULL, '42.50', 'Processing', '2016-05-03'),
(8, 'demo project name', 'Fixed', '0.00', '165.00', '165.00', 'Complete', '2016-05-05'),
(9, 'demo project name', 'Hourly', '15.00', NULL, '63.50', 'Processing', '2016-05-05'),
(10, 'demo project name', 'Hourly', '15.00', NULL, '67.50', 'Processing', '2016-05-06'),
(11, 'demo project name', 'Hourly', '15.00', NULL, '70.00', 'Processing', '2016-05-09'),
(12, 'demo project name', 'Hourly', '15.00', NULL, '85.00', 'Complete', '2016-05-10'),
(13, 'demo project name', 'Hourly', '15.00', NULL, '63.50', 'Complete', '2016-05-11'),
(14, 'demo project name', 'Hourly', '15.00', NULL, '67.50', 'Processing', '2016-05-12'),
(15, 'demo project name', 'Hourly', '15.00', NULL, '28.75', 'Complete', '2016-05-13'),
(16, 'demo project name', 'Hourly', '15.00', NULL, '77.50', 'Processing', '2016-05-16'),
(17, 'demo project name', 'Hourly', '15.00', NULL, '78.75', 'Processing', '2016-05-17'),
(18, 'demo project name', 'Hourly', '15.00', NULL, '35.00', 'Processing', '2016-05-18'),
(19, 'demo project name', 'Hourly', '15.00', NULL, NULL, 'Processing', '2016-05-19'),
(20, 'demo project name', 'Fixed', NULL, '240.00', NULL, 'Complete', '2016-05-21'),
(21, 'demo project name', 'Hourly', '15.00', NULL, NULL, 'Complete', '2016-05-23'),
(22, 'demo project name', 'Hourly', '15.00', NULL, NULL, 'Complete', '2016-05-24'),
(23, 'demo project name', 'Hourly', '15.00', NULL, NULL, 'Processing', '2016-05-25'),
(24, 'demo project name', 'Hourly', '15.00', NULL, NULL, 'Complete', '2016-05-26'),
(25, 'demo project name', 'Hourly', '15.00', NULL, NULL, 'Processing', '2016-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `project_tasks`
--

CREATE TABLE IF NOT EXISTS `project_tasks` (
  `project_task_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `note` text NOT NULL,
  PRIMARY KEY (`project_task_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `project_tasks`
--

INSERT INTO `project_tasks` (`project_task_id`, `project_id`, `name`, `start_time`, `end_time`, `note`) VALUES
(6, 3, 'demo task name', '2016-04-27 20:30:00', '2016-04-27 20:45:00', ''),
(8, 3, 'demo task name', '2016-04-27 21:10:00', '2016-04-27 22:00:00', ''),
(9, 3, 'demo task name', '2016-04-27 20:30:00', '2016-04-27 21:00:00', ''),
(10, 3, 'demo task name', '2016-04-27 22:10:00', '2016-04-27 22:26:00', ''),
(11, 3, 'demo task name', '2016-04-27 22:29:00', '2016-04-27 23:13:00', ''),
(12, 3, 'demo task name', '2016-04-27 23:55:00', '2016-04-28 00:26:00', ''),
(13, 3, 'demo task name', '2016-04-28 00:27:00', '2016-04-28 00:35:00', ''),
(14, 4, 'demo task name', '2016-04-28 21:24:00', '2016-04-28 21:54:00', ''),
(15, 4, 'demo task name', '2016-04-28 22:25:00', '2016-04-28 23:25:00', ''),
(16, 4, 'demo task name', '2016-04-28 23:36:00', '2016-04-28 23:45:00', ''),
(17, 4, 'demo task name', '2016-04-28 23:45:00', '2016-04-28 23:50:00', ''),
(18, 4, 'demo task name', '2016-04-28 23:54:00', '2016-04-29 00:06:00', ''),
(19, 4, 'demo task name', '2016-04-29 00:06:00', '2016-04-29 00:20:00', ''),
(20, 4, 'demo task name', '2016-04-29 00:30:00', '2016-04-29 02:30:00', ''),
(21, 5, 'demo task name', '2016-04-29 21:30:00', '2016-04-29 22:52:00', ''),
(22, 5, 'demo task name', '2016-04-30 00:35:00', '2016-04-30 00:52:00', ''),
(23, 5, 'demo task name', '2016-04-29 23:15:00', '2016-04-30 00:30:00', ''),
(24, 5, 'demo task name', '2016-04-28 03:30:00', '2016-04-28 05:00:00', ''),
(25, 5, 'demo task name', '2016-04-30 01:10:00', '2016-04-30 02:10:00', ''),
(26, 5, 'demo task name', '2016-04-30 02:22:00', '2016-04-30 04:30:00', ''),
(27, 6, 'demo task name', '2016-04-30 16:00:00', '2016-04-30 17:30:00', ''),
(28, 6, 'demo task name', '2016-05-01 20:56:00', '2016-05-01 21:10:00', ''),
(29, 6, 'demo task name', '2016-05-02 21:10:00', '2016-05-02 21:45:00', ''),
(30, 6, 'demo task name', '2016-05-02 21:45:00', '2016-05-02 22:27:00', ''),
(31, 6, 'demo task name', '2016-05-02 23:35:00', '2016-05-03 00:10:00', ''),
(32, 6, 'demo task name', '2016-05-03 00:10:00', '2016-05-03 01:24:00', ''),
(33, 6, 'demo task name', '2016-05-03 01:25:00', '2016-05-03 04:15:00', ''),
(34, 7, 'demo task name', '2016-05-03 20:45:00', '2016-05-03 22:45:00', ''),
(35, 7, 'demo task name', '2016-05-03 23:15:00', '2016-05-03 23:40:00', ''),
(36, 7, 'demo task name', '2016-05-03 23:45:00', '2016-05-04 00:05:00', ''),
(37, 7, 'demo task name', '2016-05-04 00:15:00', '2016-05-04 00:21:00', ''),
(38, 9, 'demo task name', '2016-05-05 20:15:00', '2016-05-05 20:30:00', ''),
(39, 9, 'demo task name', '2016-05-05 20:30:00', '2016-05-05 20:55:00', ''),
(40, 9, 'demo task name', '2016-05-05 21:05:00', '2016-05-05 21:24:00', ''),
(41, 9, 'demo task name', '2016-05-05 23:30:00', '2016-05-06 00:25:00', ''),
(42, 9, 'demo task name', '2016-05-06 02:15:00', '2016-05-06 03:05:00', ''),
(43, 9, 'demo task name', '2016-05-06 03:05:00', '2016-05-06 03:35:00', ''),
(44, 9, 'demo task name', '2016-05-06 03:30:00', '2016-05-06 04:00:00', ''),
(45, 9, 'demo task name', '2016-05-06 04:00:00', '2016-05-06 04:30:00', ''),
(46, 10, 'demo task name', '2016-05-06 21:30:00', '2016-05-06 22:30:00', ''),
(47, 10, 'demo task name', '2016-05-06 23:05:00', '2016-05-06 23:15:00', ''),
(48, 10, 'demo task name', '2016-05-06 23:25:00', '2016-05-07 01:45:00', ''),
(49, 10, 'demo task name', '2016-05-07 02:15:00', '2016-05-07 03:15:00', ''),
(50, 11, 'demo task name', '2016-05-09 20:35:00', '2016-05-09 20:55:00', ''),
(51, 11, 'demo task name', '2016-05-09 21:00:00', '2016-05-09 21:10:00', ''),
(52, 11, 'demo task name', '2016-05-09 21:10:00', '2016-05-09 21:30:00', ''),
(53, 11, 'demo task name', '2016-05-09 22:30:00', '2016-05-10 00:50:00', ''),
(54, 11, 'demo task name', '2016-05-10 02:15:00', '2016-05-10 03:45:00', ''),
(55, 12, 'demo task name', '2016-05-10 21:10:00', '2016-05-11 01:05:00', ''),
(56, 12, 'demo task name', '2016-05-11 01:15:00', '2016-05-11 03:00:00', ''),
(57, 13, 'demo task name', '2016-05-11 20:45:00', '2016-05-11 21:15:00', ''),
(58, 13, 'demo task name', '2016-05-11 21:15:00', '2016-05-11 21:45:00', ''),
(59, 13, 'demo task name', '2016-05-11 21:50:00', '2016-05-11 22:25:00', ''),
(60, 13, 'demo task name', '2016-05-11 22:55:00', '2016-05-11 23:10:00', ''),
(61, 13, 'demo task name', '2016-05-11 23:10:00', '2016-05-11 23:30:00', ''),
(62, 13, 'demo task name', '2016-05-11 23:35:00', '2016-05-12 01:00:00', ''),
(63, 13, 'demo task name', '2016-05-12 01:10:00', '2016-05-12 01:25:00', ''),
(64, 13, 'demo task name', '2016-05-12 01:30:00', '2016-05-12 01:54:00', ''),
(65, 14, 'demo task name', '2016-05-12 21:30:00', '2016-05-12 22:30:00', ''),
(66, 14, 'demo task name', '2016-05-12 23:15:00', '2016-05-13 02:45:00', ''),
(67, 15, 'demo task name', '2016-05-13 21:00:00', '2016-05-13 22:05:00', ''),
(68, 15, 'demo task name', '2016-05-13 23:15:00', '2016-05-13 23:35:00', ''),
(69, 15, 'demo task name', '2016-05-14 02:45:00', '2016-05-14 03:15:00', ''),
(70, 16, 'demo task name', '2016-05-16 21:15:00', '2016-05-16 22:25:00', ''),
(71, 16, 'demo task name', '2016-05-16 22:45:00', '2016-05-17 00:50:00', ''),
(72, 16, 'demo task name', '2016-05-17 01:20:00', '2016-05-17 03:15:00', ''),
(73, 17, 'demo task name', '2016-05-17 13:30:00', '2016-05-17 16:30:00', ''),
(74, 17, 'demo task name', '2016-05-17 22:00:00', '2016-05-17 22:15:00', ''),
(75, 17, 'demo task name', '2016-05-17 23:00:00', '2016-05-18 00:25:00', ''),
(76, 17, 'demo task name', '2016-05-18 00:25:00', '2016-05-18 00:35:00', ''),
(77, 17, 'demo task name', '2016-05-18 01:10:00', '2016-05-18 01:35:00', ''),
(78, 18, 'demo task name', '2016-05-18 22:15:00', '2016-05-18 23:00:00', ''),
(79, 18, 'demo task name', '2016-05-18 23:30:00', '2016-05-19 01:05:00', ''),
(80, 19, 'demo task name', '2016-05-19 21:30:00', '2016-05-20 00:40:00', ''),
(81, 19, 'demo task name', '2016-05-20 00:41:00', '2016-05-20 01:00:00', ''),
(82, 19, 'demo task name', '2016-05-20 01:55:00', '2016-05-20 02:40:00', ''),
(83, 21, 'demo task name', '2016-05-23 22:00:00', '2016-05-23 22:40:00', ''),
(84, 21, 'demo task name', '2016-05-23 14:55:00', '2016-05-23 15:45:00', ''),
(85, 21, 'demo task name', '2016-05-23 15:45:00', '2016-05-23 16:30:00', ''),
(86, 21, 'demo task name', '2016-05-23 16:35:00', '2016-05-23 21:25:00', ''),
(87, 22, 'demo task name', '2016-05-24 13:40:00', '2016-05-24 15:45:00', ''),
(88, 22, 'demo task name', '2016-05-24 16:10:00', '2016-05-24 16:50:00', ''),
(91, 23, 'demo task name', '2016-05-25 16:30:00', '2016-05-25 21:20:00', ''),
(92, 24, 'demo task name', '2016-05-26 16:15:00', '2016-05-26 17:55:00', ''),
(93, 24, 'demo task name', '2016-05-26 16:00:00', '2016-05-26 16:15:00', ''),
(94, 24, 'demo task name', NULL, NULL, ''),
(95, 24, 'demo task name', '2016-05-26 17:55:00', '2016-05-26 18:10:00', ''),
(96, 24, 'demo task name', '2016-05-26 18:10:00', '2016-05-26 19:30:00', ''),
(97, 24, 'demo task name', '2016-05-26 19:30:00', '2016-05-26 19:55:00', ''),
(98, 25, 'demo task name', '2016-05-27 08:00:00', '2016-05-27 08:35:00', ''),
(99, 25, 'demo task name', '2016-05-27 08:35:00', '2016-05-27 09:00:00', ''),
(100, 25, 'demo task name', '2016-05-27 15:00:00', '2016-05-27 15:15:00', ''),
(101, 25, 'demo task name', '2016-05-27 16:15:00', '2016-05-27 17:15:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(250) NOT NULL,
  `last_login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `create_user_id` int(11) NOT NULL,
  `update_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `avatar`, `last_login_time`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(1, 'admin', 'demo@localhost.com', 'b91b0da6c43663797efe9ac2c47ebd02c09bc57c', 'avatar.png', '2016-05-31 11:10:52', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
