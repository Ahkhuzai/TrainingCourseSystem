-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2017 at 07:37 AM
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
  `date` datetime NOT NULL,
  `certificate_approved` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `usr_id`, `timetable_id`, `date`, `certificate_approved`) VALUES
(1, 1, 1, '2017-11-12 09:05:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `handout`
--

CREATE TABLE `handout` (
  `id` int(11) NOT NULL,
  `ho_trainer_dir` varchar(100) COLLATE utf8_bin NOT NULL,
  `ho_trainee_dir` varchar(100) COLLATE utf8_bin NOT NULL,
  `presentation_dir` varchar(100) COLLATE utf8_bin NOT NULL,
  `scientific_chapter_dir` varchar(100) COLLATE utf8_bin NOT NULL,
  `tr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `uqu_id` varchar(7) COLLATE utf8_bin DEFAULT NULL,
  `ar_name` varchar(80) COLLATE utf8_bin NOT NULL,
  `eng_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `contact_phone` varchar(10) COLLATE utf8_bin NOT NULL,
  `department` varchar(80) COLLATE utf8_bin NOT NULL,
  `resume` text COLLATE utf8_bin,
  `qualification` text COLLATE utf8_bin,
  `major` varchar(20) COLLATE utf8_bin NOT NULL,
  `special` varchar(50) COLLATE utf8_bin NOT NULL,
  `is_trainer` tinyint(1) NOT NULL,
  `signature` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`id`, `user_id`, `uqu_id`, `ar_name`, `eng_name`, `contact_phone`, `department`, `resume`, `qualification`, `major`, `special`, `is_trainer`, `signature`) VALUES
(1, 1, '4380201', 'احلام حسن ساري الخزاعي', 'Ahlam Hassan Alkhuzai', '0580400703', 'DSR', NULL, NULL, 'CS', 'CS', 0, NULL),
(2, 2, '4380102', 'باسم احمد ساري', 'Basem Ahmed', '0580400703', 'ENG', NULL, NULL, 'Engineer', 'CIVIL', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_bin NOT NULL,
  `goals` text COLLATE utf8_bin NOT NULL,
  `abstract` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `name`, `goals`, `abstract`) VALUES
(1, 'البرنامج الاول-تدريب الباحثين', 'اهداف البرنامج', 'ملخص البرنامج');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `tt_id` int(11) NOT NULL,
  `tr_id` int(11) NOT NULL,
  `tr_total_avg_rate` double NOT NULL,
  `tc_total_avg_rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id`, `tt_id`, `tr_id`, `tr_total_avg_rate`, `tc_total_avg_rate`) VALUES
(1, 1, 2, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `ratedetails`
--

CREATE TABLE `ratedetails` (
  `id` int(11) NOT NULL,
  `rate_id` int(11) NOT NULL,
  `trainee_id` int(11) NOT NULL,
  `comments` text COLLATE utf8_bin NOT NULL,
  `place_rate` int(11) NOT NULL,
  `presentation_rate` int(11) NOT NULL,
  `organizing_rate` int(11) NOT NULL,
  `presenter_rate` int(11) NOT NULL,
  `trainingProgram_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ratedetails`
--

INSERT INTO `ratedetails` (`id`, `rate_id`, `trainee_id`, `comments`, `place_rate`, `presentation_rate`, `organizing_rate`, `presenter_rate`, `trainingProgram_rate`) VALUES
(1, 1, 1, 'دورة ممتازة', 20, 19, 20, 20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `ratevalue`
--

CREATE TABLE `ratevalue` (
  `id` int(11) NOT NULL,
  `ans` varchar(15) COLLATE utf8_bin NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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

CREATE TABLE `registerstatus` (
  `id` int(11) NOT NULL,
  `status` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `tt_id` int(11) NOT NULL,
  `registration_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `usr_id`, `tt_id`, `registration_status`) VALUES
(1, 1, 1, 1);

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
  `handout_dir` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `tc_id`, `tr_id`, `add_date`, `duration`, `start_at`, `location`, `start_date`, `end_date`, `handout_dir`) VALUES
(1, 1, 2, '2017-11-12', 9, '09:00:00', 'قاعة التدريب', '2017-11-12', '2017-11-12', 'handout/tr1/handout.ptt');

-- --------------------------------------------------------

--
-- Table structure for table `trainingcourse`
--

CREATE TABLE `trainingcourse` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `goals` text CHARACTER SET utf8 COLLATE utf8_bin,
  `abstract` text CHARACTER SET utf8 COLLATE utf8_bin,
  `capacity` int(11) DEFAULT NULL,
  `status` int(1) NOT NULL,
  `available_seat` int(11) DEFAULT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trainingcourse`
--

INSERT INTO `trainingcourse` (`id`, `name`, `goals`, `abstract`, `capacity`, `status`, `available_seat`, `pid`) VALUES
(1, 'اعداد الباحثين', NULL, NULL, NULL, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'ahkhuzai', '7c78335a8924215ea5c22fda1aac7b75', 'ahkhuzai@uqu.edu.sa'),
(2, 'basem', '7c78335a8924215ea5c22fda1aac7b75', 'basem@uqu.edu');

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
-- Indexes for table `handout`
--
ALTER TABLE `handout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trainer` (`tr_id`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uqu_id` (`uqu_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tc_id_rate` (`tt_id`),
  ADD KEY `tr_id_rate` (`tr_id`);

--
-- Indexes for table `ratedetails`
--
ALTER TABLE `ratedetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rate_id` (`rate_id`),
  ADD KEY `trainee_id` (`trainee_id`);

--
-- Indexes for table `ratevalue`
--
ALTER TABLE `ratevalue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registerstatus`
--
ALTER TABLE `registerstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registration_status` (`registration_status`),
  ADD KEY `tc_id` (`tt_id`),
  ADD KEY `reg_co` (`usr_id`) USING BTREE;

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trr_id` (`tr_id`),
  ADD KEY `tc_id` (`tc_id`);

--
-- Indexes for table `trainingcourse`
--
ALTER TABLE `trainingcourse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`),
  ADD KEY `program_id` (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usrname` (`username`),
  ADD UNIQUE KEY `usremail` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `handout`
--
ALTER TABLE `handout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ratedetails`
--
ALTER TABLE `ratedetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ratevalue`
--
ALTER TABLE `ratevalue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registerstatus`
--
ALTER TABLE `registerstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `trainingcourse`
--
ALTER TABLE `trainingcourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- Constraints for table `handout`
--
ALTER TABLE `handout`
  ADD CONSTRAINT `handout_ibfk_1` FOREIGN KEY (`tr_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `rate_ibfk_2` FOREIGN KEY (`tr_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rate_ibfk_3` FOREIGN KEY (`tt_id`) REFERENCES `timetable` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ratedetails`
--
ALTER TABLE `ratedetails`
  ADD CONSTRAINT `ratedetails_ibfk_1` FOREIGN KEY (`rate_id`) REFERENCES `rate` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ratedetails_ibfk_2` FOREIGN KEY (`trainee_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`usr_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registration_ibfk_3` FOREIGN KEY (`registration_status`) REFERENCES `registerstatus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registration_ibfk_4` FOREIGN KEY (`tt_id`) REFERENCES `timetable` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `timetable`
--
ALTER TABLE `timetable`
  ADD CONSTRAINT `timetable_ibfk_1` FOREIGN KEY (`tr_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `timetable_ibfk_2` FOREIGN KEY (`tc_id`) REFERENCES `trainingcourse` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trainingcourse`
--
ALTER TABLE `trainingcourse`
  ADD CONSTRAINT `trainingcourse_ibfk_1` FOREIGN KEY (`status`) REFERENCES `registerstatus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trainingcourse_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `program` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
