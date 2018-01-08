-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2018 at 12:26 PM
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

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `timetable_id` int(11) NOT NULL,
  `attend_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `usr_id`, `timetable_id`, `attend_time`) VALUES
(3, 1, 9, '2018-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `blockeduser`
--

CREATE TABLE `blockeduser` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `uqu_id` varchar(7) COLLATE utf8_bin DEFAULT NULL,
  `ar_name` varchar(80) COLLATE utf8_bin NOT NULL,
  `eng_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `rank` varchar(50) COLLATE utf8_bin NOT NULL,
  `contact_phone` varchar(13) COLLATE utf8_bin NOT NULL,
  `department` varchar(80) COLLATE utf8_bin NOT NULL,
  `resume` text COLLATE utf8_bin,
  `qualification` text COLLATE utf8_bin,
  `major` varchar(80) COLLATE utf8_bin NOT NULL,
  `special` varchar(50) COLLATE utf8_bin NOT NULL,
  `signature` text COLLATE utf8_bin,
  `gender` varchar(20) COLLATE utf8_bin NOT NULL,
  `nationality` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`id`, `uqu_id`, `ar_name`, `eng_name`, `rank`, `contact_phone`, `department`, `resume`, `qualification`, `major`, `special`, `signature`, `gender`, `nationality`) VALUES
(1, '4380102', 'احلام الخزاعي', 'Ahlam Hassan Alkhuzai', 'محاضر', '0580400703', 'علوم الحاسب الآلي', NULL, NULL, 'علوم الحاسب ونظم المعلومات', 'علوم افلحاسب الآلي', NULL, 'انثى', 'سعودي'),
(2, '1000000', 'متدرب 1', 'Trainee 1', 'دكتور', '5656565656', 'اللغة العربية وادابها', NULL, NULL, 'بلاغة ونقد', 'بلاغة ونقد', NULL, 'ذكر', 'سعودي'),
(3, '1000001', 'متدرب 2', 'Trainee 2', 'دكتور', '5656565656', 'اللغة الانجليزية وادابها', NULL, NULL, 'الادب البريطاني', 'الادب البريطاني', NULL, 'ذكر', 'سعودي');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `name` varchar(300) COLLATE utf8_bin NOT NULL,
  `eng_name` varchar(300) COLLATE utf8_bin NOT NULL,
  `goals` text COLLATE utf8_bin NOT NULL,
  `abstract` text COLLATE utf8_bin NOT NULL,
  `hours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `name`, `eng_name`, `goals`, `abstract`, `hours`) VALUES
(1, 'البرنامج الاول', 'Program 1', 'goals', 'abstract', 5);

-- --------------------------------------------------------

--
-- Table structure for table `ratedetails`
--

CREATE TABLE `ratedetails` (
  `id` int(11) NOT NULL,
  `tt_id` int(11) NOT NULL,
  `trainee_id` int(11) NOT NULL,
  `comments` text COLLATE utf8_bin NOT NULL,
  `place_rate` int(11) NOT NULL,
  `presentation_rate` int(11) NOT NULL,
  `organizing_rate` int(11) NOT NULL,
  `presenter_rate` int(11) NOT NULL,
  `training_program_rate` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ratedetails`
--

INSERT INTO `ratedetails` (`id`, `tt_id`, `trainee_id`, `comments`, `place_rate`, `presentation_rate`, `organizing_rate`, `presenter_rate`, `training_program_rate`) VALUES
(2, 9, 1, 'دورة جميلة جدا', 100, 90, 90, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `tt_id` int(11) NOT NULL,
  `certificate_approved` tinyint(1) NOT NULL,
  `registration_status` int(11) NOT NULL,
  `attendance_status` int(11) NOT NULL,
  `rate_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `usr_id`, `tt_id`, `certificate_approved`, `registration_status`, `attendance_status`, `rate_flag`) VALUES
(15, 1, 9, 1, 2, 12, 1),
(16, 2, 9, 0, 2, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reqhandout`
--

CREATE TABLE `reqhandout` (
  `id` int(11) NOT NULL,
  `ho_trainee_dir` varchar(200) COLLATE utf8_bin NOT NULL,
  `ho_trainer_dir` varchar(200) COLLATE utf8_bin NOT NULL,
  `presentation_dir` varchar(200) COLLATE utf8_bin NOT NULL,
  `scientific_chapter` varchar(200) COLLATE utf8_bin NOT NULL,
  `tr_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `add_date` date NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `statusdictionary`
--

CREATE TABLE `statusdictionary` (
  `id` int(11) NOT NULL,
  `status` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `status_arabic` varchar(20) NOT NULL,
  `status_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `sysrole` (
  `id` int(11) NOT NULL,
  `role_name` varchar(200) COLLATE utf8_bin NOT NULL,
  `role_code` varchar(20) COLLATE utf8_bin NOT NULL,
  `url` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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

CREATE TABLE `tchandout` (
  `id` int(11) NOT NULL,
  `ho_trainee_dir` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `tt_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tchandout`
--

INSERT INTO `tchandout` (`id`, `ho_trainee_dir`, `tt_id`) VALUES
(1, '../uploads/handouts/tc/9232163c1120fef54af7ef43e159fb2c2018-01-03.pdf', 9),
(2, '../uploads/handouts/tc/9232163c1120fef54af7ef43e159fb2c2018-01-03.pdf', 10);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) NOT NULL,
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
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `tc_id`, `tr_id`, `add_date`, `duration`, `start_at`, `location`, `start_date`, `end_date`, `status`, `capacity`, `available_seat`, `tc_total_avg_rate`, `type`) VALUES
(9, 1, 1, '2018-01-08', 5, '13:00:00', 'قاعة التدريب', '2018-01-08', '2018-01-08', 9, 55, 50, 0, 'شطر الطالبات فقط'),
(10, 7, 2, '2018-01-08', 5, '12:00:00', 'قاعة التدريب', '2018-01-08', '2018-01-08', 2, 60, 60, 0, 'شطر الطالبات فقط');

-- --------------------------------------------------------

--
-- Table structure for table `trainingcourse`
--

CREATE TABLE `trainingcourse` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `eng_name` varchar(300) NOT NULL,
  `goals` text CHARACTER SET utf8 COLLATE utf8_bin,
  `abstract` text CHARACTER SET utf8 COLLATE utf8_bin,
  `pid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trainingcourse`
--

INSERT INTO `trainingcourse` (`id`, `name`, `eng_name`, `goals`, `abstract`, `pid`) VALUES
(1, 'اعداد البحث العلمي', 'prepare research paper', 'goals goal', 'abstract absrtact', NULL),
(7, 'تجربة', 'test', 'اهداف', 'ملخص', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(80) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `persona_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `persona_id`) VALUES
(1, 'ahkhuzai', '7c78335a8924215ea5c22fda1aac7b75', 'ahkhuzai@uqu.edu.sa', 1),
(2, 'trainee', NULL, 'f@uqu.edu.sa', 2),
(3, 'trainee2', NULL, 'ahkhuzaif@uqu.edu.sa', 3);

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE `userrole` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `userrole`
--

INSERT INTO `userrole` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 3, 2),
(5, 2, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usr_id` (`usr_id`),
  ADD KEY `timetable_id` (`timetable_id`);

--
-- Indexes for table `blockeduser`
--
ALTER TABLE `blockeduser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uqu_id` (`uqu_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratedetails`
--
ALTER TABLE `ratedetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rate_id` (`tt_id`),
  ADD KEY `trainee_id` (`trainee_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registration_status` (`registration_status`),
  ADD KEY `tc_id` (`tt_id`),
  ADD KEY `reg_co` (`usr_id`) USING BTREE,
  ADD KEY `att_id` (`attendance_status`);

--
-- Indexes for table `reqhandout`
--
ALTER TABLE `reqhandout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trid` (`tr_id`),
  ADD KEY `st_in` (`sid`);

--
-- Indexes for table `statusdictionary`
--
ALTER TABLE `statusdictionary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sysrole`
--
ALTER TABLE `sysrole`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tchandout`
--
ALTER TABLE `tchandout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trainer` (`tt_id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trr_id` (`tr_id`),
  ADD KEY `tc_id` (`tc_id`),
  ADD KEY `ind` (`status`);

--
-- Indexes for table `trainingcourse`
--
ALTER TABLE `trainingcourse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `program_id` (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usrname` (`username`),
  ADD UNIQUE KEY `usremail` (`email`),
  ADD KEY `user_st` (`persona_id`);

--
-- Indexes for table `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usr` (`user_id`),
  ADD KEY `role` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blockeduser`
--
ALTER TABLE `blockeduser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ratedetails`
--
ALTER TABLE `ratedetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reqhandout`
--
ALTER TABLE `reqhandout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statusdictionary`
--
ALTER TABLE `statusdictionary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sysrole`
--
ALTER TABLE `sysrole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tchandout`
--
ALTER TABLE `tchandout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `trainingcourse`
--
ALTER TABLE `trainingcourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userrole`
--
ALTER TABLE `userrole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  ADD CONSTRAINT `blockeduser_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
