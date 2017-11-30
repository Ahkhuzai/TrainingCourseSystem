-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2017 at 11:20 AM
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
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usr_id` (`usr_id`),
  KEY `timetable_id` (`timetable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
CREATE TABLE IF NOT EXISTS `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `uqu_id` (`uqu_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`id`, `user_id`, `uqu_id`, `ar_name`, `eng_name`, `rank`, `contact_phone`, `department`, `resume`, `qualification`, `major`, `special`, `is_trainer`, `signature`) VALUES
(1, 1, '4380201', 'احلام حسن ساري الخزاعي', 'Ahlam Hassan Alkhuzai', 'محاضر', '1', 'cs', 'uploads/cv/1 - cv - 2017-11-22.doc', 'دكتوراه', 'حاسب آلي', 'y', 1, 'uploads/signeture/1 - sign - 2017-11-22.png'),
(2, 2, '4380102', 'باسم احمد ساري', 'Basem Ahmed', 'دكتور', '0580400703', 'ENG', NULL, 'دكتوراه', 'Engineer', 'CIVIL', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

DROP TABLE IF EXISTS `program`;
CREATE TABLE IF NOT EXISTS `program` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_bin NOT NULL,
  `goals` text COLLATE utf8_bin NOT NULL,
  `abstract` text COLLATE utf8_bin NOT NULL,
  `hours` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sid_program` (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `name`, `goals`, `abstract`, `hours`, `sid`) VALUES
(1, 'تدريب الباحثين', 'اهداف البرنامج', 'ملخص البرنامج', 15, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ratedetails`
--

INSERT INTO `ratedetails` (`id`, `tt_id`, `trainee_id`, `comments`, `place_rate`, `presentation_rate`, `organizing_rate`, `presenter_rate`, `training_program_rate`) VALUES
(8, 11, 1, 'استفدت جدا', 60, 100, 100, 97, 100),
(9, 57, 1, 'تمت', 80, 90, 76, 100, 90.91),
(10, 57, 1, 'iii', 60, 75, 100, 80, 85.45),
(11, 57, 1, 'yy', 100, 65, 76, 87, 92.73),
(12, 57, 1, 'uu', 50, 90, 84, 87, 100),
(13, 57, 1, 'yy', 70, 90, 88, 87, 98.18),
(14, 9, 1, 'gh', 90, 90, 90, 90, 90);

-- --------------------------------------------------------

--
-- Table structure for table `ratevalue`
--

DROP TABLE IF EXISTS `ratevalue`;
CREATE TABLE IF NOT EXISTS `ratevalue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ans` varchar(15) COLLATE utf8_bin NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ratevalue`
--

INSERT INTO `ratevalue` (`id`, `ans`, `value`) VALUES
(1, 'agree', 10),
(2, 'diagree', 0),
(3, 'somewhat ok', 5);

-- --------------------------------------------------------

--
-- Table structure for table `registerstatus`
--

DROP TABLE IF EXISTS `registerstatus`;
CREATE TABLE IF NOT EXISTS `registerstatus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registerstatus`
--

INSERT INTO `registerstatus` (`id`, `status`) VALUES
(1, 'Processing'),
(2, 'Accepted'),
(3, 'Rejected'),
(4, 'Missed'),
(5, 'Excused'),
(6, 'Incomplete');

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
  `rate_flag` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `registration_status` (`registration_status`),
  KEY `tc_id` (`tt_id`),
  KEY `reg_co` (`usr_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `usr_id`, `tt_id`, `certificate_approved`, `registration_status`, `rate_flag`) VALUES
(1, 1, 11, 0, 3, 0),
(24, 1, 9, 0, 2, 1),
(25, 1, 11, 0, 5, 0),
(26, 1, 57, 0, 2, 1),
(27, 1, 59, 1, 2, 0),
(28, 1, 62, 0, 2, 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `reqhandout`
--

INSERT INTO `reqhandout` (`id`, `ho_trainee_dir`, `ho_trainer_dir`, `presentation_dir`, `scientific_chapter`, `tr_id`, `name`, `add_date`, `sid`) VALUES
(1, 'uploads/handouts/req/11 - handout - 2017-11-23.pdf', 'uploads/handouts/req/10 - handout - 2017-11-23.doc', 'uploads/handouts/req/12 - handout - 2017-11-23.jpg', 'uploads/handouts/req/13 - handout - 2017-11-23.doc', 1, 'اعداد الباحثين', '2017-11-21', 1),
(2, '$te_ho', '$tr_ho', '$pres', '$sci_ch', 1, '$tname', '2017-02-02', 1),
(3, '$te_ho', '$tr_ho', '$pres', '$sci_ch', 1, '$tname', '2017-02-02', 1),
(4, '$te_ho', '$tr_ho', '$pres', '$sci_ch', 1, '$tname', '2017-02-02', 1),
(5, '$te_ho', '$tr_ho', '$pres', '$sci_ch', 1, '$tname', '2017-02-02', 1),
(6, '$te_ho', '$tr_ho', '$pres', '$sci_ch', 1, '$tname', '2017-02-02', 1),
(7, '$te_ho', '$tr_ho', '$pres', '$sci_ch', 1, '$tname', '2017-02-02', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tchandout`
--

INSERT INTO `tchandout` (`id`, `ho_trainer_dir`, `ho_trainee_dir`, `presentation_dir`, `scientific_chapter_dir`, `tt_id`) VALUES
(7, NULL, NULL, '', NULL, 9),
(9, NULL, NULL, '', NULL, 11),
(55, NULL, NULL, 'testing', NULL, 57),
(57, NULL, NULL, 'testing', NULL, 59),
(60, NULL, NULL, 'testing', NULL, 62);

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
  `tr_total_avg_rate` double NOT NULL,
  `tc_total_avg_rate` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `trr_id` (`tr_id`),
  KEY `tc_id` (`tc_id`),
  KEY `ind` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `tc_id`, `tr_id`, `add_date`, `duration`, `start_at`, `location`, `start_date`, `end_date`, `status`, `capacity`, `available_seat`, `tr_total_avg_rate`, `tc_total_avg_rate`) VALUES
(9, 6, 2, '2017-11-20', 6, '12:00:00', '-', '2017-11-30', '2017-11-07', 1, 0, 0, 0, 0),
(11, 8, 1, '2017-05-25', 6, '00:00:00', '-', '2017-11-30', '2017-11-01', 2, 0, 0, 90, 80),
(57, 55, 1, '2017-11-23', 5, '12:09:02', '-', '2017-09-12', '2017-09-22', 2, 50, 20, 80, 86.636),
(59, 57, 2, '2017-11-23', 5, '12:09:02', '-', '2017-09-12', '2017-09-22', 1, 50, 20, 80, 80),
(62, 60, 1, '2017-11-23', 5, '12:09:02', '-', '2017-12-30', '2017-09-22', 1, 50, 20, 80, 80);

-- --------------------------------------------------------

--
-- Table structure for table `trainingcourse`
--

DROP TABLE IF EXISTS `trainingcourse`;
CREATE TABLE IF NOT EXISTS `trainingcourse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `goals` text CHARACTER SET utf8 COLLATE utf8_bin,
  `abstract` text CHARACTER SET utf8 COLLATE utf8_bin,
  `pid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `program_id` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trainingcourse`
--

INSERT INTO `trainingcourse` (`id`, `name`, `goals`, `abstract`, `pid`) VALUES
(6, 'اعداد الباحثين', 'اهدافها', 'ملخصها', 1),
(8, 'البحث العلمي', 'الاهداف', 'الملخص', 1),
(55, 'testing', 'testing', 'testing', NULL),
(57, 'testing', 'testing', 'testing', NULL),
(60, 'testing', 'testing', 'testing', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usrname` (`username`),
  UNIQUE KEY `usremail` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'ahkhuzai', '7c78335a8924215ea5c22fda1aac7b75', 'ahkhuzai@uqu.edu.sa'),
(2, 'basem', '7c78335a8924215ea5c22fda1aac7b75', 'basem@uqu.edu');

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
-- Constraints for table `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `program_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `registerstatus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `registration_ibfk_3` FOREIGN KEY (`registration_status`) REFERENCES `registerstatus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registration_ibfk_4` FOREIGN KEY (`tt_id`) REFERENCES `timetable` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reqhandout`
--
ALTER TABLE `reqhandout`
  ADD CONSTRAINT `reqhandout_ibfk_1` FOREIGN KEY (`tr_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reqhandout_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `registerstatus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `timetable_ibfk_3` FOREIGN KEY (`status`) REFERENCES `registerstatus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trainingcourse`
--
ALTER TABLE `trainingcourse`
  ADD CONSTRAINT `trainingcourse_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `program` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
