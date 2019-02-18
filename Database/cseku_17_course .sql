-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2017 at 01:02 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cseku_17_course`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `courseNumber` varchar(256) NOT NULL,
  `courseTitle` varchar(256) NOT NULL,
  `credit` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `courseNumber`, `courseTitle`, `credit`) VALUES
(1, 'CSE 1101', 'Computer Fundamentals', 2),
(2, 'CSE 1103', 'Structured Programming', 3),
(3, 'CSE 1104', 'Structured Programming Laboratory', 1.5),
(4, 'ME 1151', 'Mechanics and Heat Engineering', 3),
(5, 'MATH 1153', 'Calculus', 3),
(6, 'PHY 1153', 'Physics I', 3),
(7, 'PHY 1154', 'Physics Laboratory I', 0.75),
(8, 'CHEM 1151', 'Chemistry', 3),
(9, 'CHEM 1152', 'Chemistry Laboratory', 0.75),
(10, 'ENG 1151', 'English', 2),
(11, 'CSE 1201', 'Object Oriented Programming', 3),
(12, 'CSE 1202 ', 'Object Oriented Programming Laboratory', 1.5),
(13, 'CSE 1203', 'Discrete Mathematics', 3),
(14, 'ECE 1251', 'Electrical Circuits', 3),
(15, 'ECE 1252', 'Electrical Circuits Laboratory', 0.75),
(16, 'ME 1252', 'Engineering Drawing and CAD Project', 0.75),
(17, 'MATH 1253', 'Geometry and Differential Equations', 3),
(18, 'PHY 1253', 'Physics II', 3),
(19, 'PHY 1254 ', 'Physics Laboratory II', 0.75),
(20, 'HSS 1253', 'Government and Sociology', 2),
(21, 'CSE 2101', 'Data Structure', 3),
(22, 'CSE 2102', 'Data Structure Laboratory', 1.5),
(23, 'CSE 2111', 'Digital Logic Design', 3),
(24, 'CSE 2112', 'Digital Logic Design Laboratory', 1.5),
(25, 'CSE 2114', 'Advanced Programming Laboratory', 1.5),
(26, 'ECE 2151', 'Electronic Devices and Circuits', 3),
(27, 'ECE 2152', 'Electronic Devices and Circuits Laboratory', 1.5),
(28, 'MATH 2153', 'Vector Analysis and Matrix', 3),
(29, 'ECON 2151', 'Economics', 2),
(30, 'CSE 2200', 'Software Development Project', 1.5),
(31, 'CSE 2201', 'Algorithms', 3),
(32, 'CSE 2202', 'Algorithms Laboratory', 1.5),
(33, 'CSE 2203', 'Computer Architecture', 3),
(34, 'CSE 2208', 'Assembly Language Laboratory', 1.5),
(35, 'ECE 2251', 'Electrical Drives and Instrumentation', 3),
(36, 'ECE 2252', 'Electrical Drives and Instrumentation Laboratory', 0.75),
(37, 'MATH 2253', 'Statistics and Complex Variable', 3),
(38, 'HSS 2251', 'Psychology', 2),
(39, 'CSE 3200', 'Web Programming Project/Fieldwork', 1.5),
(40, 'CSE 3201', 'Operating System and Systems Programming\r\n', 3),
(41, 'CSE 3202', 'Operating System and Systems Programming\nLaboratory/Project', 1.5),
(42, 'CSE 3203', ' Software Engineering and Information System', 4),
(43, 'CSE 3204', 'Software Engineering and Information System\r\nProject', 1.5),
(44, 'ECE 3251 ', 'Data Communication', 3),
(45, 'BA 3251', 'Industrial Management and Law', 3),
(46, 'CSE 322', 'Simulation and Modeling', 3),
(47, 'CSE 3222', 'Simulation and Modeling Laboratory/Fieldwork', 1.5),
(48, 'CSE 3223', 'Neural Networks and Fuzzy Systems', 3),
(49, 'CSE 3224', 'Neural Networks and Fuzzy Systems Laboratory', 1.5),
(50, 'CSE 3225', 'Digital Image Processing', 3),
(51, 'CSE 3226', 'Digital Image Processing Laboratory/Project', 1.5),
(52, 'CSE 3227', 'Geographical Information System', 3),
(53, 'CSE 3228', 'Geographical Information System\r\nLaboratory/Fieldwork', 1.5),
(54, 'CSE 3100', 'Technical Writing and Presentation', 0.75),
(55, 'CSE 3101', 'Database Systems', 3),
(56, 'CSE 3102', 'Database Systems Project/Fieldwork', 1.5),
(57, 'CSE 3105', 'Numerical Methods', 3),
(58, 'CSE 3106', 'Numerical Methods Laboratory', 0.75),
(59, 'CSE 3111', 'Microprocessors and Microcontrollers', 3),
(60, 'CSE 3112', 'Microprocessors and Microcontrollers\r\nLaboratory/Project', 0.75),
(61, 'ECE 3151', 'Digital Electronics', 2),
(62, 'MATH 3153', 'Mathematical Methods', 3),
(63, 'BA 3151 ', 'Accounting', 3),
(64, 'CSE 4100', 'Project and Thesis I', 3),
(65, 'CSE 4103', 'Computer Graphics', 3),
(66, 'CSE 4104', 'Computer Graphics Laboratory/Project', 0.75),
(67, 'CSE 4105', 'Compiler Design', 3),
(68, 'CSE 4106 ', 'Compiler Design Laboratory/Project', 0.75),
(69, 'CSE 4111', 'Computer Networks', 3),
(70, 'CSE 4112', 'Computer Networks Laboratory/Fieldwork', 1.5),
(71, 'CSE 4121', 'Applied Probability and Queuing Theory', 2),
(72, 'CSE 4123', 'Parallel and Distributed Processing', 2),
(73, 'CSE 4125', 'Computational Geometry', 2),
(74, 'CSE 4127', 'Multimedia', 2),
(75, 'CSE 4129', 'Human Computer Interaction', 2),
(76, 'CSE 4131', 'E-Commerce', 2),
(77, 'CSE 4133', 'Distributed Database System', 2),
(78, 'CSE 4135', 'Graph Theory', 2),
(79, 'CSE 4137', 'Theory of Computation', 2),
(80, 'ECE 4151', 'Digital Signal Processing', 2),
(81, 'ECE 4153', 'VLSI Design and Testability', 2),
(82, 'ECE 4155', 'Wireless and Optical Networks', 2),
(83, 'CSE 4160', 'Industrial Training', 0),
(84, 'CSE 4170', 'Advanced Business Venture', 0),
(85, 'CSE 4200', 'Project and Thesis II', 3),
(86, 'CSE 4205', 'Artificial Intelligence', 3),
(87, 'CSE 4206', 'Artificial Intelligence Laboratory/Project', 1.5),
(88, 'CSE 4221', 'Pattern Recognition', 3),
(89, 'CSE 4222', 'Pattern Recognition Laboratory/Project', 0.75),
(90, 'CSE 4223', 'Data Warehousing and Mining', 3),
(91, 'CSE 4224', 'Data Warehousing and Mining Laboratory/Fieldwork', 0.75),
(92, 'CSE 4231', 'Digital System Design', 3),
(93, 'CSE 4232', 'Digital System Design Laboratory/Project', 0.75),
(94, 'CSE 4233', 'Client Server Technology', 3),
(95, 'CSE 4234', 'Client Server Technology Laboratory/Fieldwork', 0.75),
(96, 'CSE 4235', 'Computer Peripherals and Interfacing', 3),
(97, 'CSE 4236', 'Computer Peripherals and Interfacing\r\nLaboratory/Project', 0.75),
(98, 'CSE 4237', 'Computer Animation and Virtual Reality', 3),
(99, 'CSE 4238', 'Computer Animation and Virtual Reality\r\nLaboratory/Project', 0.75),
(100, 'CSE 4241', 'Knowledge Engineering', 3),
(101, 'CSE 4243', 'Machine Learning', 3),
(102, 'CSE 4245', 'Robotics and Computer Vision', 3),
(103, 'CSE 4247', 'Information Security and Control', 3),
(104, 'CSE 4249', 'Decision Support System', 3);

-- --------------------------------------------------------

--
-- Table structure for table `course_registration`
--

CREATE TABLE `course_registration` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `term_year_id` int(11) NOT NULL,
  `result` double DEFAULT NULL,
  `type` enum('Fresh','Retake','Re-retake') NOT NULL,
  `is_approve` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_registration`
--

INSERT INTO `course_registration` (`id`, `user_id`, `course_id`, `term_year_id`, `result`, `type`, `is_approve`) VALUES
(26, 27, 1, 1, 4, 'Fresh', 1),
(27, 27, 2, 1, 4, 'Fresh', 1),
(30, 27, 5, 1, 4, 'Fresh', 1),
(76, 28, 1, 1, -1, 'Fresh', 1),
(77, 28, 2, 1, -1, 'Fresh', 1),
(78, 28, 3, 1, -1, 'Fresh', 1),
(79, 28, 4, 1, -1, 'Fresh', 1),
(81, 27, 11, 2, 4, 'Fresh', 1),
(82, 27, 12, 2, 3, 'Fresh', 1),
(84, 27, 21, 3, 0, 'Fresh', 1),
(85, 27, 22, 3, 0, 'Fresh', 1),
(86, 27, 23, 3, 0, 'Fresh', 1),
(87, 27, 24, 3, 0, 'Fresh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `open_registration`
--

CREATE TABLE `open_registration` (
  `id` int(11) NOT NULL,
  `is_open` tinyint(1) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `open_registration`
--

INSERT INTO `open_registration` (`id`, `is_open`, `start_date`, `end_date`) VALUES
(1, 1, '2017-10-28', '2017-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `retake_list`
--

CREATE TABLE `retake_list` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `type` enum('Retake','Re-Retake') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `sessionNumber` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `sessionNumber`) VALUES
(1, '2013-14'),
(2, '2014-15'),
(3, '2012-13'),
(4, '2014-15'),
(5, '2015-16'),
(6, '2016-17'),
(7, '2018-19');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `middle_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `student_id` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `mobile` varchar(256) NOT NULL,
  `year_term_id` int(11) NOT NULL,
  `session_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`user_id`, `first_name`, `middle_name`, `last_name`, `student_id`, `email`, `mobile`, `year_term_id`, `session_Id`) VALUES
(27, 'J. M. ', 'Ashifiqur', 'Rahman', '150231', 'nittya.ku.cse@gmail.com', '7', 3, 2),
(28, 'akib', 'shahariar', 'akib', '150232', 'akib@gamil.com', '0191430245', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `subject_group`
--

CREATE TABLE `subject_group` (
  `id` int(11) NOT NULL,
  `group_name` varchar(256) NOT NULL,
  `group_rule` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_group`
--

INSERT INTO `subject_group` (`id`, `group_name`, `group_rule`) VALUES
(1, 'Must', 'This courses are must'),
(2, 'Option I And II', 'Courses for Option I and Option II'),
(3, 'Option III', 'Courses Option III '),
(5, 'Option I and II with sessional', 'Courses Option I and Option II with sessional ');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `id` int(11) NOT NULL,
  `syllabus_Name_Id` int(11) NOT NULL,
  `course_Id` int(11) NOT NULL,
  `term_Year_Id` int(11) NOT NULL,
  `subject_group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`id`, `syllabus_Name_Id`, `course_Id`, `term_Year_Id`, `subject_group_id`) VALUES
(4, 1, 1, 1, 1),
(5, 1, 2, 1, 1),
(6, 1, 3, 1, 1),
(7, 1, 4, 1, 1),
(8, 1, 5, 1, 1),
(9, 1, 6, 1, 1),
(10, 1, 7, 1, 1),
(11, 1, 8, 1, 1),
(12, 1, 9, 1, 1),
(13, 1, 10, 1, 1),
(14, 1, 11, 2, 1),
(15, 1, 12, 2, 1),
(16, 1, 13, 2, 1),
(17, 1, 14, 2, 1),
(18, 1, 15, 2, 1),
(19, 1, 16, 2, 1),
(20, 1, 17, 2, 1),
(21, 1, 18, 2, 1),
(22, 1, 19, 2, 1),
(23, 1, 20, 2, 1),
(24, 1, 21, 3, 1),
(25, 1, 22, 3, 1),
(26, 1, 23, 3, 1),
(27, 1, 24, 3, 1),
(28, 1, 25, 3, 1),
(29, 1, 26, 3, 1),
(30, 1, 27, 3, 1),
(31, 1, 28, 3, 1),
(32, 1, 29, 3, 1),
(33, 1, 30, 4, 1),
(34, 1, 31, 4, 1),
(35, 1, 32, 4, 1),
(36, 1, 33, 4, 1),
(37, 1, 34, 4, 1),
(38, 1, 35, 4, 1),
(39, 1, 36, 4, 1),
(40, 1, 37, 4, 1),
(41, 1, 38, 4, 1),
(42, 1, 54, 5, 1),
(43, 1, 55, 5, 1),
(44, 1, 56, 5, 1),
(45, 1, 57, 5, 1),
(46, 1, 58, 5, 1),
(47, 1, 59, 5, 1),
(48, 1, 60, 5, 1),
(49, 1, 61, 5, 1),
(50, 1, 62, 5, 1),
(51, 1, 63, 5, 1),
(52, 1, 39, 6, 1),
(53, 1, 40, 6, 1),
(54, 1, 41, 6, 1),
(55, 1, 42, 6, 1),
(56, 1, 43, 6, 1),
(57, 1, 44, 6, 1),
(58, 1, 45, 6, 1),
(59, 1, 46, 6, 2),
(60, 1, 47, 6, 2),
(61, 1, 48, 6, 2),
(62, 1, 49, 6, 2),
(63, 1, 50, 6, 2),
(64, 1, 51, 6, 2),
(65, 1, 52, 6, 2),
(66, 1, 53, 6, 2),
(67, 1, 64, 7, 1),
(68, 1, 65, 7, 1),
(69, 1, 66, 7, 1),
(70, 1, 67, 7, 1),
(71, 1, 68, 7, 1),
(72, 1, 69, 7, 1),
(73, 1, 70, 7, 1),
(74, 1, 71, 7, 2),
(75, 1, 72, 7, 2),
(76, 1, 73, 7, 2),
(77, 1, 74, 7, 2),
(78, 1, 75, 7, 2),
(79, 1, 76, 7, 2),
(80, 1, 78, 7, 2),
(81, 1, 79, 7, 2),
(82, 1, 80, 7, 2),
(83, 1, 81, 7, 2),
(84, 1, 82, 7, 2),
(85, 1, 83, 7, 3),
(86, 1, 84, 7, 3),
(87, 1, 85, 8, 1),
(88, 1, 86, 8, 1),
(89, 1, 87, 8, 1),
(90, 1, 88, 8, 5),
(91, 1, 89, 8, 5),
(92, 1, 90, 8, 5),
(93, 1, 91, 8, 5),
(94, 1, 92, 8, 5),
(95, 1, 93, 8, 5),
(96, 1, 94, 8, 5),
(97, 1, 95, 8, 5),
(98, 1, 96, 8, 5),
(99, 1, 97, 8, 5),
(100, 1, 98, 8, 5),
(101, 1, 99, 8, 5),
(102, 1, 100, 8, 3),
(103, 1, 101, 8, 3),
(104, 1, 102, 8, 3),
(105, 1, 103, 8, 3),
(106, 1, 104, 8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `syllabus_name`
--

CREATE TABLE `syllabus_name` (
  `id` int(11) NOT NULL,
  `syllabus_Name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syllabus_name`
--

INSERT INTO `syllabus_name` (`id`, `syllabus_Name`) VALUES
(1, 'Old'),
(2, 'New');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `user_role` enum('Teacher','Student') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `user_role`) VALUES
(11, 'admin', '202cb962ac59075b964b07152d234b70', 'Teacher'),
(27, 'anik', '202cb962ac59075b964b07152d234b70', 'Student'),
(28, 'akib', '202cb962ac59075b964b07152d234b70', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `year_term`
--

CREATE TABLE `year_term` (
  `id` int(11) NOT NULL,
  `year` varchar(10) NOT NULL,
  `term` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year_term`
--

INSERT INTO `year_term` (`id`, `year`, `term`) VALUES
(1, '1st', 'I'),
(2, '1st', 'II'),
(3, '2nd', 'I'),
(4, '2nd', 'II'),
(5, '3rd', 'I'),
(6, '3rd', 'II'),
(7, '4th', 'I'),
(8, '4th', 'II'),
(9, '4th', 'special I'),
(10, '4th', 'special II');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_registration`
--
ALTER TABLE `course_registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`user_id`),
  ADD KEY `course_Id` (`course_id`),
  ADD KEY `term_year_id` (`term_year_id`);

--
-- Indexes for table `open_registration`
--
ALTER TABLE `open_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retake_list`
--
ALTER TABLE `retake_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `term_Year_id` (`year_term_id`),
  ADD KEY `session_ID` (`session_Id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `subject_group`
--
ALTER TABLE `subject_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `syllabus_Name_Id` (`syllabus_Name_Id`),
  ADD KEY `course_Id` (`course_Id`),
  ADD KEY `term_Year_Id` (`term_Year_Id`),
  ADD KEY `subject_group_id` (`subject_group_id`);

--
-- Indexes for table `syllabus_name`
--
ALTER TABLE `syllabus_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year_term`
--
ALTER TABLE `year_term`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `course_registration`
--
ALTER TABLE `course_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `open_registration`
--
ALTER TABLE `open_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `retake_list`
--
ALTER TABLE `retake_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `subject_group`
--
ALTER TABLE `subject_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `syllabus_name`
--
ALTER TABLE `syllabus_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `year_term`
--
ALTER TABLE `year_term`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_registration`
--
ALTER TABLE `course_registration`
  ADD CONSTRAINT `course_registration_ibfk_3` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_registration_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `student` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_registration_ibfk_5` FOREIGN KEY (`term_year_id`) REFERENCES `year_term` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `retake_list`
--
ALTER TABLE `retake_list`
  ADD CONSTRAINT `retake_list_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `student` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `retake_list_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`session_Id`) REFERENCES `session` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `student_ibfk_5` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_6` FOREIGN KEY (`year_term_id`) REFERENCES `year_term` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD CONSTRAINT `syllabus_ibfk_4` FOREIGN KEY (`syllabus_Name_Id`) REFERENCES `syllabus_name` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `syllabus_ibfk_5` FOREIGN KEY (`term_Year_Id`) REFERENCES `year_term` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `syllabus_ibfk_6` FOREIGN KEY (`course_Id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `syllabus_ibfk_7` FOREIGN KEY (`subject_group_id`) REFERENCES `subject_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
