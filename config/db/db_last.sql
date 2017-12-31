-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2017 at 08:53 AM
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
-- Database: `training_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_id` int(11) NOT NULL,
  `timetable_id` int(11) NOT NULL,
  `attend_time` datetime NOT NULL,
  `leave_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usr_id` (`usr_id`),
  KEY `timetable_id` (`timetable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blockeduser`
--

DROP TABLE IF EXISTS `blockeduser`;
CREATE TABLE IF NOT EXISTS `blockeduser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `reg_index` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
CREATE TABLE IF NOT EXISTS `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uqu_id` varchar(7) COLLATE utf8_bin DEFAULT NULL,
  `ar_name` varchar(80) COLLATE utf8_bin NOT NULL,
  `eng_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `rank` varchar(50) COLLATE utf8_bin NOT NULL,
  `contact_phone` varchar(10) COLLATE utf8_bin NOT NULL,
  `department` varchar(80) COLLATE utf8_bin NOT NULL,
  `resume` text COLLATE utf8_bin,
  `qualification` text COLLATE utf8_bin,
  `major` varchar(20) COLLATE utf8_bin NOT NULL,
  `special` varchar(50) COLLATE utf8_bin NOT NULL,
  `is_trainer` tinyint(1) NOT NULL,
  `signature` text COLLATE utf8_bin,
  `gender` varchar(20) COLLATE utf8_bin NOT NULL,
  `nationality` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uqu_id` (`uqu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

DROP TABLE IF EXISTS `program`;
CREATE TABLE IF NOT EXISTS `program` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) COLLATE utf8_bin NOT NULL,
  `eng_name` varchar(300) COLLATE utf8_bin NOT NULL,
  `goals` text COLLATE utf8_bin NOT NULL,
  `abstract` text COLLATE utf8_bin NOT NULL,
  `hours` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `ratedetails`
--

DROP TABLE IF EXISTS `ratedetails`;
CREATE TABLE IF NOT EXISTS `ratedetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tt_id` int(11) NOT NULL,
  `trainee_id` int(11) NOT NULL,
  `comments` text COLLATE utf8_bin NOT NULL,
  `place_rate` int(11) NOT NULL,
  `presentation_rate` int(11) NOT NULL,
  `organizing_rate` int(11) NOT NULL,
  `presenter_rate` int(11) NOT NULL,
  `training_program_rate` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rate_id` (`tt_id`),
  KEY `trainee_id` (`trainee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_id` int(11) NOT NULL,
  `tt_id` int(11) NOT NULL,
  `certificate_approved` tinyint(1) NOT NULL,
  `registration_status` int(11) NOT NULL,
  `attendance_status` int(11) NOT NULL,
  `rate_flag` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `registration_status` (`registration_status`),
  KEY `tc_id` (`tt_id`),
  KEY `reg_co` (`usr_id`) USING BTREE,
  KEY `att_id` (`attendance_status`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reqhandout`
--

DROP TABLE IF EXISTS `reqhandout`;
CREATE TABLE IF NOT EXISTS `reqhandout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ho_trainee_dir` varchar(200) COLLATE utf8_bin NOT NULL,
  `ho_trainer_dir` varchar(200) COLLATE utf8_bin NOT NULL,
  `presentation_dir` varchar(200) COLLATE utf8_bin NOT NULL,
  `scientific_chapter` varchar(200) COLLATE utf8_bin NOT NULL,
  `tr_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `add_date` date NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `trid` (`tr_id`),
  KEY `st_in` (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `statusdictionary`
--

DROP TABLE IF EXISTS `statusdictionary`;
CREATE TABLE IF NOT EXISTS `statusdictionary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `status_arabic` varchar(20) NOT NULL,
  `status_code` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statusdictionary`
--

INSERT INTO `statusdictionary` (`id`, `status`, `status_arabic`, `status_code`) VALUES
(1, 'Processing', 'تحت الدراسة', 'UP'),
(2, 'Accepted', 'مقبول', 'AC'),
(3, 'Rejected', 'مرفوض', 'RJ'),
(4, 'Missed', 'غائب', 'MIS'),
(5, 'Excused', 'معتذر', 'EXC'),
(6, 'Incomplete', 'غير مكتمل', 'INC'),
(7, 'Blocked', 'محظور', 'BLK'),
(8, 'UNBLOCKED', 'غير محظور', 'UBLK'),
(9, 'Complete', 'انتهت', 'CM'),
(10, 'Available', 'التسجيل متاح', 'AV'),
(11, 'Unavailable', 'التسجيل مغلق', 'UNA'),
(12, 'Attended', 'حاضر', 'ATT');

-- --------------------------------------------------------

--
-- Table structure for table `sysrole`
--

DROP TABLE IF EXISTS `sysrole`;
CREATE TABLE IF NOT EXISTS `sysrole` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(200) COLLATE utf8_bin NOT NULL,
  `role_code` varchar(20) COLLATE utf8_bin NOT NULL,
  `url` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `sysrole`
--

INSERT INTO `sysrole` (`id`, `role_name`, `role_code`, `url`) VALUES
(1, 'Admin', 'AD', 'http://www.dsr.uqu.edu.sa/rtp/Admin/'),
(2, 'Trainee', 'TE', 'http://www.dsr.uqu.edu.sa/rtp/Trainee/'),
(3, 'Trainer', 'TR', 'http://www.dsr.uqu.edu.sa/rtp/Trainer/');

-- --------------------------------------------------------

--
-- Table structure for table `tchandout`
--

DROP TABLE IF EXISTS `tchandout`;
CREATE TABLE IF NOT EXISTS `tchandout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ho_trainer_dir` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `ho_trainee_dir` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `presentation_dir` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `scientific_chapter_dir` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `tt_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `trainer` (`tt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

DROP TABLE IF EXISTS `timetable`;
CREATE TABLE IF NOT EXISTS `timetable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tc_id` int(11) NOT NULL,
  `tr_id` int(11) NOT NULL,
  `add_date` date NOT NULL,
  `duration` int(11) NOT NULL,
  `start_at` time DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `available_seat` int(11) NOT NULL,
  `tc_total_avg_rate` double NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `trr_id` (`tr_id`),
  KEY `tc_id` (`tc_id`),
  KEY `ind` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `trainingcourse`
--

DROP TABLE IF EXISTS `trainingcourse`;
CREATE TABLE IF NOT EXISTS `trainingcourse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `eng_name` varchar(300) NOT NULL,
  `goals` text CHARACTER SET utf8 COLLATE utf8_bin,
  `abstract` text CHARACTER SET utf8 COLLATE utf8_bin,
  `pid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `program_id` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(80) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `persona_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usrname` (`username`),
  UNIQUE KEY `usremail` (`email`),
  KEY `user_st` (`persona_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

DROP TABLE IF EXISTS `userrole`;
CREATE TABLE IF NOT EXISTS `userrole` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usr` (`user_id`),
  KEY `role` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`usr_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`timetable_id`) REFERENCES `timetable` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `blockeduser`
--
ALTER TABLE `blockeduser`
  ADD CONSTRAINT `blockeduser_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `blockeduser_ibfk_2` FOREIGN KEY (`status`) REFERENCES `statusdictionary` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ratedetails`
--
ALTER TABLE `ratedetails`
  ADD CONSTRAINT `ratedetails_ibfk_2` FOREIGN KEY (`trainee_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ratedetails_ibfk_3` FOREIGN KEY (`tt_id`) REFERENCES `timetable` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`usr_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registration_ibfk_3` FOREIGN KEY (`registration_status`) REFERENCES `statusdictionary` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registration_ibfk_4` FOREIGN KEY (`tt_id`) REFERENCES `timetable` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registration_ibfk_5` FOREIGN KEY (`attendance_status`) REFERENCES `statusdictionary` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reqhandout`
--
ALTER TABLE `reqhandout`
  ADD CONSTRAINT `reqhandout_ibfk_1` FOREIGN KEY (`tr_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reqhandout_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `statusdictionary` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tchandout`
--
ALTER TABLE `tchandout`
  ADD CONSTRAINT `tchandout_ibfk_1` FOREIGN KEY (`tt_id`) REFERENCES `timetable` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `timetable`
--
ALTER TABLE `timetable`
  ADD CONSTRAINT `timetable_ibfk_1` FOREIGN KEY (`tr_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `timetable_ibfk_2` FOREIGN KEY (`tc_id`) REFERENCES `trainingcourse` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `timetable_ibfk_3` FOREIGN KEY (`status`) REFERENCES `statusdictionary` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trainingcourse`
--
ALTER TABLE `trainingcourse`
  ADD CONSTRAINT `trainingcourse_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `program` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userrole`
--
ALTER TABLE `userrole`
  ADD CONSTRAINT `userrole_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userrole_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `sysrole` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
