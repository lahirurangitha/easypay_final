-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2016 at 04:42 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educationdept_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam_date_time`
--

CREATE TABLE `exam_date_time` (
  `aca_year` int(4) NOT NULL,
  `aca_sem` int(1) NOT NULL,
  `sub_code` varchar(10) NOT NULL,
  `dates` date NOT NULL,
  `times` varchar(20) NOT NULL,
  `place` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_date_time`
--

INSERT INTO `exam_date_time` (`aca_year`, `aca_sem`, `sub_code`, `dates`, `times`, `place`) VALUES
(2, 2, 'EN1002', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'EN2001', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'EN2002', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'ENH1101', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'ENH1102', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'ENH2101', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS1001', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS1002', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS1003', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS1004', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS1005', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS1006', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS1007', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS1008', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS1009', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS1010', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS1011', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS1012', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS1013', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS1014', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS2001', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS2002', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS2003', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS2004', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS2005', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS2006', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS2007', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS2008', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS2009', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS2010', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS2011', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'IS2012', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'SCS1101', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'SCS1102', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'SCS1103', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'SCS1104', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'SCS1105', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'SCS1106', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'SCS1107', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'SCS1108', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'SCS1109', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'SCS1110', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'SCS1111', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'SCS1112', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'SCS2008', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'SCS2101', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'SCS2102', '2015-12-17', '2.00-4.00 p.m.', '4th Floor'),
(2, 2, 'SCS2103', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'SCS2104', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(3, 2, 'SCS2105', '2015-12-20', '9.00-11.00 a.m.', 'W002'),
(2, 2, 'SCS2106', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'SCS2107', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'SCS2108', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'SCS2109', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'SCS2110', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'SCS2111', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(2, 2, 'SCS2112', '2015-12-14', '2.00-4.00 p.m.', 'W002'),
(3, 2, 'SCS3102', '2015-12-21', '9.00-11.00 a.m.', 'Mini Auditorium');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `index_no` varchar(8) NOT NULL,
  `sub_code` varchar(10) NOT NULL,
  `attempt` int(1) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `aca_year` int(4) NOT NULL,
  `aca_sem` int(1) NOT NULL,
  `result` varchar(3) NOT NULL,
  `repeat_status` int(1) NOT NULL,
  `assignments` int(1) NOT NULL COMMENT '1 for completed',
  `result1` varchar(4) NOT NULL,
  `result2` varchar(4) NOT NULL,
  `result3` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`index_no`, `sub_code`, `attempt`, `sub_name`, `aca_year`, `aca_sem`, `result`, `repeat_status`, `assignments`, `result1`, `result2`, `result3`) VALUES
('13000276', 'SCS1107', 2, 'Software Engineering I', 1, 1, '', 1, 1, 'D-', 'C-', '-'),
('13000276', 'SCS1108', 2, 'Data Structures and Algorithms II', 1, 2, 'D-', 1, 1, 'E', 'D-', '-'),
('13000276', 'SCS1109', 1, 'Programming II', 1, 2, 'A', 0, 1, 'A', '-', '-'),
('13000276', 'SCS1110', 1, 'Discrete Mathematics', 1, 2, 'D+', 1, 0, 'D+', '-', '-'),
('13000276', 'SCS1111', 1, 'Mathematical Methods II', 1, 2, 'A-', 1, 1, 'A-', '-', '-'),
('13000276', 'SCS1112', 2, 'Foundation of Computer Science', 1, 2, 'B+', 0, 1, 'B+', '-', '-'),
('13000276', 'SCS2101', 1, 'Data Structures and Algorithms III', 2, 1, 'D-', 1, 0, 'D-', '-', '-'),
('13000276', 'SCS2103', 1, 'Software Engineering II', 2, 1, 'C-', 1, 0, 'C-', '-', '-'),
('13000276', 'SCS2105', 2, 'Networking I', 2, 1, 'B-', 0, 1, 'C-', 'B-', '-'),
('13000276', 'SCS2109', 2, 'Database II', 2, 2, 'C-', 1, 1, 'D+', 'C-', '-'),
('13000555', 'ENH1102', 1, 'ENH - Humanities', 1, 2, 'CM', 0, 1, 'CM', '-', '-'),
('13000555', 'SCS1101', 1, 'Data Structures & Algorithms I', 1, 1, 'B+', 1, 1, 'B+', '-', '-'),
('13000555', 'SCS1102', 1, 'Programming I', 1, 1, 'D+', 1, 0, 'D+', '-', '-'),
('13000555', 'SCS1103', 1, 'Database I', 1, 1, 'D+', 1, 0, 'D+', '-', '-'),
('13000555', 'SCS1104', 2, ' Mathematical Method I', 1, 1, 'C-', 1, 0, 'C-', 'C-', '-'),
('13000555', 'SCS1105', 1, 'Computer Systems', 1, 1, 'C-', 1, 1, 'C-', '-', '-'),
('13000555', 'SCS1106', 1, 'Laboratory I', 1, 1, 'B', 1, 1, 'B', '-', '-'),
('13000555', 'SCS1112', 1, 'Foundation of Computer Science', 1, 2, 'C-', 1, 0, 'C-', '-', '-'),
('13000882', 'SCS1107', 1, 'Software Engineering I', 1, 2, 'A', 0, 1, 'A', '-', '-'),
('13000888', 'SCS1101', 1, 'Data Structures & Algorithms I', 1, 1, 'D+', 1, 1, 'D+', '-', '-'),
('13000888', 'SCS1105', 1, 'Computer Systems', 1, 1, 'B-', 0, 1, 'B-', '-', '-'),
('13000888', 'SCS2105', 1, 'Networking I', 2, 1, 'C-', 1, 0, 'C-', '-', '-'),
('13020609', 'IS2003', 1, 'Marketing ', 2, 1, 'B+', 0, 1, 'B+', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sub_code` varchar(10) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `credits` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sub_code`, `sub_name`, `credits`) VALUES
('EN1002', 'Selected Topics in Humanities', 2),
('EN2001', 'Industrial Practices', 2),
('EN2002', 'Career Guidance', 2),
('ENH1101', 'Enhancement I', 2),
('ENH1102', 'ENH - Humanities', 2),
('ENH2101', 'Career Giudance', 2),
('IS1001', 'Programming and Problem Solving', 2),
('IS1002', 'Computer Systems', 2),
('IS1003', 'Information Systems Concepts', 2),
('IS1004', 'Applications Laboratory', 2),
('IS1005', 'Introduction to Management', 2),
('IS1006', 'Discrete Mathematics', 2),
('IS1007', 'Fundamentals of Economics', 2),
('IS1008', 'Financial Accounting', 2),
('IS1009', 'Business Communication', 2),
('IS1010', 'Database Management', 2),
('IS1011', 'Systems Analysis and Design', 2),
('IS1012', 'Discrete Mathematics II', 2),
('IS1013', 'Organizational Behavior', 2),
('IS1014', 'Computing and Society', 2),
('IS2001', 'Software Engineering', 2),
('IS2002', 'Group Project I', 2),
('IS2003', 'Marketing', 2),
('IS2004', 'Web Application Development', 2),
('IS2005', 'Business Statistics', 2),
('IS2006', 'Business Process Management', 2),
('IS2007', 'IT Project Management', 2),
('IS2008', 'Information Systems Management', 2),
('IS2009', 'Information Systems Security', 2),
('IS2010', 'IT Procurement Management', 2),
('IS2011', 'Computer Networks', 2),
('IS2012', 'eBusiness Strategy', 2),
('SCS1101', 'Data Structures & Algorithms I', 2),
('SCS1102', 'Programming I', 2),
('SCS1103', 'Database I', 2),
('SCS1104', 'Mathematical Method I', 2),
('SCS1105', 'Computer Systems', 2),
('SCS1106', 'Laboratory I', 2),
('SCS1107', 'Software Engineering I', 2),
('SCS1108', 'Data Structure & Algorithm II', 2),
('SCS1109', 'Programming II', 2),
('SCS1110', 'Discrete Mathematics', 2),
('SCS1111', 'Mathematical Methods II', 2),
('SCS1112', 'Foundation of Computer Science', 2),
('SCS2008', 'Numerical Computing', 2),
('SCS2101', 'Data Structures and Algorithms III', 2),
('SCS2102', 'Group Project I', 2),
('SCS2103', 'Software Engineering II', 2),
('SCS2104', 'Programming III', 2),
('SCS2105', 'Computer Networks I', 2),
('SCS2106', 'Operating Systems I', 2),
('SCS2107', 'Mathematical Methods III', 2),
('SCS2108', 'Programming IV', 2),
('SCS2109', 'Database II', 2),
('SCS2110', 'Programming Languages Concepts', 2),
('SCS2111', 'Laboratory II', 2),
('SCS2112', 'Automata Theory', 2);

-- --------------------------------------------------------

--
-- Table structure for table `u_student`
--

CREATE TABLE `u_student` (
  `name_initial` varchar(50) NOT NULL,
  `name_full` varchar(80) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `years` int(2) NOT NULL,
  `semester` int(1) NOT NULL,
  `reg_no` varchar(9) NOT NULL,
  `index_no` varchar(8) NOT NULL,
  `cs_is` int(1) NOT NULL COMMENT 'cs=1,is=0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_student`
--

INSERT INTO `u_student` (`name_initial`, `name_full`, `nic`, `dob`, `address`, `email`, `phone`, `years`, `semester`, `reg_no`, `index_no`, `cs_is`) VALUES
('S.Surangi', 'Shanika Surangi', '921235641v', '1992-11-30', 'asatehrjddfgddasda', 'shanika@gmail.com', '0714556612', 1, 2, '2013IS014', '13000146', 0),
('T.Upendra', 'Thisumi Upendra', '924568123v', '1992-03-14', 'asadcccbxcbxvdsdfsasda', 'thisumi@gmail.com', '071456882', 1, 2, '2013IS024', '13000241', 0),
('N.Dilanga', 'Nadeesh Dilanga', '922940325v', '1992-10-13', 'asadaasadasxcxzsda', 'nadeesh@gmail.com', '0710236558', 2, 2, '2013CS027', '13000276', 1),
('K.D.Perera', 'Kamal Dinuka Perera', '923342699v', '1992-11-29', '316/C, Mulleriyawa New Town, Mulleriyawa.', 'lasith2013.l2n@gmail.com', '0770294331', 2, 2, '2013CS088', '13000555', 1),
('L.Niroshan', 'Lasith Niroshan', '924578456v', '1992-05-12', 'asadasda', 'lasith@gmail.com', '0714589123', 1, 2, '2013CS084', '13000846', 1),
('A.Nisal', 'Anjana Nisal', '921235431v', '1992-06-21', 'ascxvxcvsfadasda', 'anjana@gmail.com', '0719876523', 3, 2, '2013CS085', '13000857', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam_date_time`
--
ALTER TABLE `exam_date_time`
  ADD PRIMARY KEY (`sub_code`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`index_no`,`sub_code`,`attempt`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sub_code`);

--
-- Indexes for table `u_student`
--
ALTER TABLE `u_student`
  ADD PRIMARY KEY (`index_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
