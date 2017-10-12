-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2017 at 10:14 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tete`
--

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `uqu_id` varchar(7) COLLATE utf8_bin DEFAULT NULL,
  `ar_name` varchar(80) COLLATE utf8_bin NOT NULL,
  `eng_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `contact_phone` varchar(10) COLLATE utf8_bin NOT NULL,
  `contact_email` varchar(50) COLLATE utf8_bin NOT NULL,
  `resume` blob,
  `qualification` text COLLATE utf8_bin,
  `major` varchar(20) COLLATE utf8_bin NOT NULL,
  `special` varchar(50) COLLATE utf8_bin NOT NULL,
  `is_trainer` tinyint(1) NOT NULL,
  `is_uqu_fac` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uqu_id` (`uqu_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `rate_details`
--

CREATE TABLE IF NOT EXISTS `rate_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rate_id` int(11) NOT NULL,
  `trainee_id` int(11) NOT NULL,
  `comments` text COLLATE utf8_bin NOT NULL,
  `place_rate` int(11) NOT NULL,
  `presentation_rate` int(11) NOT NULL,
  `organizing_rate` int(11) NOT NULL,
  `presenter_rate` int(11) NOT NULL,
  `trainingProgram_rate` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rate_id` (`rate_id`),
  KEY `trainee_id` (`trainee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `rate_total`
--

CREATE TABLE IF NOT EXISTS `rate_total` (
  `rate_id` int(11) NOT NULL AUTO_INCREMENT,
  `tc_id` int(11) NOT NULL,
  `tr_id` int(11) NOT NULL,
  `tr_total_avg_rate` double NOT NULL,
  `tc_total_avg_rate` double NOT NULL,
  PRIMARY KEY (`rate_id`),
  KEY `tc_id_rate` (`tc_id`),
  KEY `tr_id_rate` (`tr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `rate_value`
--

CREATE TABLE IF NOT EXISTS `rate_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ans` varchar(15) COLLATE utf8_bin NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `rate_value`
--

INSERT INTO `rate_value` (`id`, `ans`, `value`) VALUES
(1, 'agree', 10),
(2, 'diagree', 0),
(3, 'somewhat ok', 5);

-- --------------------------------------------------------

--
-- Table structure for table `register_status`
--

CREATE TABLE IF NOT EXISTS `register_status` (
  `re_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_id` int(11) NOT NULL,
  `tc_id` int(11) NOT NULL,
  `registration_status` int(11) NOT NULL,
  PRIMARY KEY (`re_id`),
  KEY `reg_co` (`usr_id`,`tc_id`),
  KEY `registration_status` (`registration_status`),
  KEY `tc_id` (`tc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'Processing'),
(2, 'Accepted'),
(3, 'Rejected'),
(4, 'Missed'),
(5, 'Excused');

-- --------------------------------------------------------

--
-- Table structure for table `tc_attendance`
--

CREATE TABLE IF NOT EXISTS `tc_attendance` (
  `usr_id` int(11) NOT NULL,
  `timetable_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  KEY `usr_id` (`usr_id`),
  KEY `timetable_id` (`timetable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tc_timetable`
--

CREATE TABLE IF NOT EXISTS `tc_timetable` (
  `tt_id` int(11) NOT NULL AUTO_INCREMENT,
  `tc_id` int(11) NOT NULL,
  `tr_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `duration` int(11) NOT NULL,
  `start_at` time NOT NULL,
  `location` varchar(50) NOT NULL,
  PRIMARY KEY (`tt_id`),
  KEY `trr_id` (`tr_id`),
  KEY `tc_id` (`tc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `training_course`
--

CREATE TABLE IF NOT EXISTS `training_course` (
  `tc_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `goals` text CHARACTER SET utf8 COLLATE utf8_bin,
  `abstract` text CHARACTER SET utf8 COLLATE utf8_bin,
  `capacity` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `available_seat` int(11) DEFAULT NULL,
  `tr_id` int(11) NOT NULL,
  PRIMARY KEY (`tc_id`),
  KEY `trainer_id` (`tr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usrname` (`username`),
  UNIQUE KEY `usremail` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rate_details`
--
ALTER TABLE `rate_details`
  ADD CONSTRAINT `rate_details_ibfk_1` FOREIGN KEY (`rate_id`) REFERENCES `rate_total` (`rate_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rate_details_ibfk_2` FOREIGN KEY (`trainee_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rate_total`
--
ALTER TABLE `rate_total`
  ADD CONSTRAINT `rate_total_ibfk_1` FOREIGN KEY (`tc_id`) REFERENCES `training_course` (`tc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rate_total_ibfk_2` FOREIGN KEY (`tr_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `register_status`
--
ALTER TABLE `register_status`
  ADD CONSTRAINT `register_status_ibfk_1` FOREIGN KEY (`usr_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `register_status_ibfk_3` FOREIGN KEY (`registration_status`) REFERENCES `status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `register_status_ibfk_4` FOREIGN KEY (`tc_id`) REFERENCES `training_course` (`tc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tc_attendance`
--
ALTER TABLE `tc_attendance`
  ADD CONSTRAINT `tc_attendance_ibfk_1` FOREIGN KEY (`usr_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tc_attendance_ibfk_2` FOREIGN KEY (`timetable_id`) REFERENCES `tc_timetable` (`tt_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tc_timetable`
--
ALTER TABLE `tc_timetable`
  ADD CONSTRAINT `tc_timetable_ibfk_1` FOREIGN KEY (`tr_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tc_timetable_ibfk_2` FOREIGN KEY (`tc_id`) REFERENCES `training_course` (`tc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `training_course`
--
ALTER TABLE `training_course`
  ADD CONSTRAINT `training_course_ibfk_1` FOREIGN KEY (`tr_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
