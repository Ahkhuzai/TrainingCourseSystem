-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2017 at 11:53 AM
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

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `usr_id`, `timetable_id`, `date`) VALUES
(1, 1, 1, '2017-01-01 05:55:55');

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`id`, `user_id`, `uqu_id`, `ar_name`, `eng_name`, `contact_phone`, `department`, `resume`, `qualification`, `major`, `special`, `is_trainer`, `is_uqu_fac`, `signature`, `is_uqu`) VALUES
(1, 1, '4380101', 'احلام الخزاعي', 'Ahlam Alkhuzai', '0580400703', 'CS', 'upload/resume/1.pdf', 'bla bla bla bla bla bla', 'cs', 'special', 1, 1, 'upload/images/sign/1.jpg', 1);

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id`, `tc_id`, `tr_id`, `tr_total_avg_rate`, `tc_total_avg_rate`) VALUES
(1, 1, 1, 100, 100);

--
-- Dumping data for table `ratedetails`
--

INSERT INTO `ratedetails` (`id`, `rate_id`, `trainee_id`, `comments`, `place_rate`, `presentation_rate`, `organizing_rate`, `presenter_rate`, `trainingProgram_rate`, `comment`, `training_program_rate`) VALUES
(1, 1, 1, 'good good', 0, 0, 0, 0, 10, 'comment', 0);

--
-- Dumping data for table `ratevalue`
--

INSERT INTO `ratevalue` (`id`, `ans`, `value`) VALUES
(1, 'agree', 10),
(2, 'diagree', 0),
(3, 'somewhat ok', 5),
(4, 'updateans', 0);

--
-- Dumping data for table `registerstatus`
--

INSERT INTO `registerstatus` (`id`, `status`) VALUES
(1, 'Processing'),
(2, 'Accepted'),
(3, 'Rejected'),
(4, 'Missed'),
(5, 'Excused'),
(6, 'TEST');

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `usr_id`, `tc_id`, `registration_status`) VALUES
(1, 1, 1, 1);

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `tc_id`, `tr_id`, `start_date`, `end_date`, `duration`, `start_at`, `location`) VALUES
(1, 1, 1, '2018-11-11', '2018-11-11', 3, '05:15:15', 'UPDATE');

--
-- Dumping data for table `trainingcourse`
--

INSERT INTO `trainingcourse` (`id`, `name`, `goals`, `abstract`, `capacity`, `status`, `available_seat`, `handoutDir`, `goal`, `handout_dir`) VALUES
(1, 'name', 'gogo', 'abstract', 14, 1, 13, 'upload/handout', 'goal', 'upload/handoutDir');

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, '$usernam7e9', '$pa7ssword', '$emai7l2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
