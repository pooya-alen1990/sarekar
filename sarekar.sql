-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2015 at 05:01 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sarekar`
--
CREATE DATABASE IF NOT EXISTS `sarekar` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sarekar`;

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE IF NOT EXISTS `educations` (
  `education_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `education_level` varchar(250) NOT NULL,
  `education_average` float NOT NULL,
  `education_university` varchar(250) NOT NULL,
  `education_branch` varchar(250) NOT NULL,
  `education_sub_branch` varchar(250) NOT NULL,
  `education_graduation_date` bigint(20) NOT NULL,
  PRIMARY KEY (`education_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `jobs_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `job_name` varchar(250) NOT NULL,
  `job_position` varchar(250) NOT NULL,
  `job_duration` int(11) NOT NULL,
  `job_last_salary` int(11) NOT NULL,
  `job_exit_cause` text NOT NULL,
  `job_tel` varchar(250) NOT NULL,
  PRIMARY KEY (`jobs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activation_code` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `tel` varchar(250) NOT NULL,
  `birthday` bigint(20) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(250) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `website` varchar(250) NOT NULL,
  `melli_code` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `religion` varchar(250) NOT NULL,
  `soldiering_state` varchar(250) NOT NULL,
  `job_state` varchar(250) NOT NULL,
  `marriage_state` varchar(250) NOT NULL,
  `salary` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `about_me` text NOT NULL,
  `register_date` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `activation_code`, `first_name`, `last_name`, `mobile`, `tel`, `birthday`, `address`, `email`, `picture`, `website`, `melli_code`, `gender`, `religion`, `soldiering_state`, `job_state`, `marriage_state`, `salary`, `city_id`, `about_me`, `register_date`) VALUES
(1, '1234', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0),
(2, '12345', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
