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
-- Database: `easypay_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `permissions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`) VALUES
(1, 'Standard user', ''),
(2, 'Administrator', '{"admin": 1}'),
(3, 'Coordinator', '{"coord": 2}');

-- --------------------------------------------------------

--
-- Table structure for table `mycontacts`
--

CREATE TABLE `mycontacts` (
  `ContactID` int(11) NOT NULL,
  `ContactName` varchar(100) DEFAULT NULL,
  `ContactEmail` varchar(100) DEFAULT NULL,
  `contactMessage` varchar(700) DEFAULT NULL,
  `ContactDateCreated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mycontacts`
--

INSERT INTO `mycontacts` (`ContactID`, `ContactName`, `ContactEmail`, `contactMessage`, `ContactDateCreated`) VALUES
(40, 'lahiru', 'lahirupathiranalr@gmail.com', 'test', '2016-01-09 21:23:57'),
(41, 'nadeesh', 'nadeesh@gmail.com', 'test2', '2016-01-09 21:29:36'),
(42, 'nadeesh', 'lahirurangithalr@gmail.com', 'test3', '2016-01-09 21:36:17'),
(43, 'lahiru', 'lahirupathiranalr@gmail.com', '12345', '2016-01-10 22:56:18'),
(44, 'lahiru', 'lahirupathiranalr@gmail.com', 'qwerty', '2016-01-10 17:37:53'),
(45, 'Thisumi', 'thisumi29upendra@gmail.com', 'eZ pay', '2016-01-10 19:39:59'),
(46, 'Thisumi', 'thisumi29upendra@gmail.com', 'ez pay', '2016-01-11 05:07:48'),
(47, 'Thisumi', 'thisumiupendra@gmail.com', 'Hello', '2016-01-11 05:08:52');

-- --------------------------------------------------------

--
-- Table structure for table `new_academic_year`
--

CREATE TABLE `new_academic_year` (
  `transactionID` int(10) NOT NULL,
  `acaYear` int(4) NOT NULL,
  `paymentStatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Use register for new academic year';

--
-- Dumping data for table `new_academic_year`
--

INSERT INTO `new_academic_year` (`transactionID`, `acaYear`, `paymentStatus`) VALUES
(8, 2015, 0),
(8, 2015, 0),
(9, 2015, 0),
(9, 2015, 0),
(0, 2015, 0),
(12, 2015, 0),
(17, 2015, 0),
(18, 2015, 0),
(19, 2015, 0),
(23, 2015, 0),
(24, 2015, 0),
(26, 2015, 0),
(27, 2015, 0),
(34, 2015, 0),
(38, 2015, 0),
(39, 2015, 0),
(0, 2015, 0),
(47, 2015, 0),
(48, 2015, 0),
(55, 2015, 0),
(63, 2015, 0),
(64, 2015, 0),
(69, 2015, 0),
(72, 2015, 0),
(73, 2015, 0),
(76, 2015, 0),
(81, 2015, 0),
(91, 2015, 0),
(92, 2015, 0),
(93, 2015, 0),
(99, 2015, 0),
(0, 2015, 0),
(1, 2015, 0),
(2, 2015, 0),
(3, 2015, 0),
(5, 2015, 0),
(6, 2015, 0),
(7, 2015, 0),
(8, 2015, 0),
(112, 2015, 0),
(113, 2015, 0),
(115, 2015, 0),
(116, 2015, 0),
(117, 2015, 0),
(119, 2015, 0),
(125, 2015, 0),
(135, 2016, 0),
(136, 2016, 0),
(137, 2016, 0),
(138, 2016, 0),
(139, 2016, 0),
(40, 2016, 0),
(141, 2016, 0),
(142, 2016, 0),
(143, 2016, 0),
(144, 2016, 0),
(145, 2016, 0),
(157, 2016, 0),
(158, 2016, 0),
(159, 2016, 0),
(60, 2016, 0),
(161, 2016, 0),
(162, 2016, 0),
(163, 2016, 0),
(164, 2016, 0),
(165, 2016, 0),
(166, 2016, 0),
(168, 2016, 0),
(172, 2016, 0),
(174, 2016, 0),
(176, 2016, 0),
(6, 2016, 0),
(7, 2016, 0),
(8, 2016, 0),
(211, 2016, 0),
(215, 2016, 0),
(216, 2016, 0),
(218, 2016, 0),
(219, 2016, 0),
(20, 2016, 0),
(221, 2016, 0),
(222, 2016, 0),
(223, 2016, 0),
(224, 2016, 0),
(225, 2016, 0),
(252, 2016, 0),
(266, 2016, 0),
(268, 2016, 0),
(272, 2016, 0),
(275, 2016, 0),
(277, 2016, 0),
(278, 2016, 1),
(279, 2016, 0),
(80, 2016, 0),
(284, 2016, 0),
(286, 2016, 0),
(287, 2016, 0),
(289, 2016, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `nID` int(5) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `datetime` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table for notifications';

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`nID`, `topic`, `detail`, `datetime`) VALUES
(1, 'pay registration fee', 'you have to pay Rs:2500 for the UCSC registrtion.', '31/05/2015 22:10:28'),
(2, 'pay for repeat exams', 'you have to pay Rs:25 per each repeat subject.', '12/09/2015 10:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `repeatexam_notification`
--

CREATE TABLE `repeatexam_notification` (
  `nID` int(11) NOT NULL,
  `uID` int(11) NOT NULL,
  `topic` varchar(100) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repeatexam_notification`
--

INSERT INTO `repeatexam_notification` (`nID`, `uID`, `topic`, `description`) VALUES
(2, 3, 'Application Rejected', 'Dear Student,Your Repeat Examination Application on SCS1101 Data Structures  has been Rejected. Please meet your course coordinator.');

-- --------------------------------------------------------

--
-- Table structure for table `repeat_exam`
--

CREATE TABLE `repeat_exam` (
  `id` int(11) NOT NULL,
  `transactionID` int(10) NOT NULL,
  `Year` int(4) NOT NULL,
  `Semester` varchar(5) NOT NULL,
  `subjectCode` varchar(7) NOT NULL,
  `indexNumber` varchar(9) NOT NULL,
  `nameWithInitials` varchar(50) NOT NULL,
  `fullName` varchar(200) NOT NULL,
  `fixedPhone` varchar(10) NOT NULL,
  `subjectName` varchar(50) NOT NULL,
  `AssignmentComplete` varchar(20) NOT NULL,
  `gradeFirst` varchar(2) NOT NULL,
  `gradeSecond` varchar(2) NOT NULL,
  `gradeThird` varchar(2) NOT NULL,
  `paymentStatus` int(1) NOT NULL,
  `adminStatus` int(1) NOT NULL,
  `username` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='For repeat exam fees';

--
-- Dumping data for table `repeat_exam`
--

INSERT INTO `repeat_exam` (`id`, `transactionID`, `Year`, `Semester`, `subjectCode`, `indexNumber`, `nameWithInitials`, `fullName`, `fixedPhone`, `subjectName`, `AssignmentComplete`, `gradeFirst`, `gradeSecond`, `gradeThird`, `paymentStatus`, `adminStatus`, `username`) VALUES
(1, 247, 1, 'FYS1', 'SCS1101', '13000276', 'HVGN Dilanga', 'nadeesh dilanga', '0412225683', 'Data Structures & Algorithms I', 'Completed', 'D+', 'C+', '-', 1, 1, 'nadeesh'),
(2, 247, 1, 'FYS1', 'SCS1103', '13000111', 'HVGN Dilanga', 'nadeesh dilanga', '0412225683', 'Database I', 'Completed', 'C-', '-', '-', 1, 1, 'nadeesh'),
(6, 249, 1, 'FYS1', 'SCS1101', '13000111', 'HVGN Dilanga', 'nadeesh dilanga', '0412225683', 'Data Structures & Algorithms I', 'Completed', '-', '-', '-', 0, 0, 'nadeesh'),
(7, 50, 1, 'FYS1', 'SCS1102', '13000111', 'HVGN Dilanga', 'nadeesh dilanga', '0412225683', 'Programming I', 'Not Completed', '-', '-', '-', 1, 2, 'nadeesh'),
(8, 264, 1, 'FYS1', 'SCS1101', '13000111', 'H.V.G.N Dilanga', 'Nadeesh Dilanga', '0112837662', 'Data Structures & Algorithms I', 'Completed', 'C-', '-', '-', 1, 2, 'nadeesh'),
(9, 70, 1, 'FYS1', 'SCS1106', '13000111', 'H.V.G.N Dilanga', 'nadeesh dilanga', '0112837662', 'Algo', 'no', 'C', '-', '-', 0, 0, NULL),
(10, 274, 2, 'FYS1', 'SCS1111', '13000276', 'H.V.G.N Dilanga', 'nadeesh dilanga', '0112837662', 'Algo', 'yes', 'D+', '-', '-', 1, 1, 'nadeesh'),
(11, 281, 2, 'FYS1', 'SCS1101', '11120567', 'qwertgyhg', 'waasedrgfthyg', '0112238383', 'Data Structures & Algorithms I', 'Completed', 'C', '-', '-', 0, 0, 'nadeesh'),
(12, 285, 1, 'FYS1', 'SCS1105', '13000111', 'N.Dilanga', 'nadeesh dilanga', '-', 'Computer Systems', 'Completed', 'C-', '-', '-', 0, 0, 'nadeesh'),
(13, 288, 1, 'FYS1', 'SCS1105', '13000111', 'N.Dilanga', 'nadeesh dilanga', '-', 'Computer Systems', 'Completed', 'C-', '-', '-', 0, 0, 'nadeesh');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transactionID` int(10) NOT NULL,
  `payeeID` int(5) NOT NULL,
  `payerID` int(5) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `statusCode` int(2) NOT NULL,
  `walletRefID` int(20) NOT NULL,
  `statusDescription` varchar(200) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transactionID`, `payeeID`, `payerID`, `date`, `time`, `statusCode`, `walletRefID`, `statusDescription`, `amount`) VALUES
(2, 3, 3, '2015-09-20', '01:10:22', 2, 55555, 'Transaction is completed', 20),
(4, 3, 3, '2015-10-03', '06:22:00', 2, 32434, 'Transaction is completed', 20),
(5, 3, 3, '2015-10-07', '05:27:30', 2, 57567, 'Transaction is completed', 20),
(6, 10, 3, '2015-10-03', '06:22:00', 2, 32434, 'Transaction is completed', 20),
(7, 11, 3, '2015-10-07', '05:27:30', 2, 57567, 'Transaction is completed', 20),
(8, 11, 3, '2015-01-07', '05:27:30', 2, 57567, 'Transaction is completed', 20),
(9, 11, 3, '2015-02-07', '05:27:30', 2, 57567, 'Transaction is completed', 20),
(10, 11, 3, '2015-03-07', '05:27:30', 2, 57567, 'Transaction is completed', 20),
(12, 11, 3, '2015-04-07', '05:27:30', 2, 57567, 'Transaction is completed', 20),
(13, 11, 3, '2015-05-07', '05:27:30', 2, 57567, 'Transaction is completed', 20),
(14, 11, 3, '2015-06-07', '05:27:30', 2, 57567, 'Transaction is completed', 20),
(15, 11, 3, '2015-07-07', '05:27:30', 2, 57567, 'Transaction is completed', 20),
(16, 11, 3, '2015-06-07', '05:27:30', 2, 57567, 'Transaction is completed', 20),
(17, 11, 3, '2015-07-07', '05:27:30', 2, 57567, 'Transaction is completed', 20),
(18, 11, 3, '2015-08-07', '05:27:30', 2, 57567, 'Transaction is completed', 20),
(20, 11, 3, '2016-01-07', '05:27:30', 2, 57567, 'Transaction is completed', 20),
(253, 3, 3, '2016-01-07', '10:37:58', 2, 2147483647, 'Transaction is completed', 10),
(254, 3, 3, '2016-01-07', '10:48:24', 2, 2147483647, 'Transaction is completed', 10),
(258, 3, 3, '2016-01-07', '11:15:09', 2, 2147483647, 'Transaction is completed', 10),
(259, 3, 3, '2016-01-07', '11:31:46', 2, 2147483647, 'Transaction is completed', 10),
(261, 3, 3, '2016-01-07', '11:46:16', 2, 2147483647, 'Transaction is completed', 10),
(262, 3, 3, '2016-01-07', '11:51:32', 2, 2147483647, 'Transaction is completed', 10),
(263, 3, 3, '2016-01-07', '12:24:58', 2, 2147483647, 'Transaction is completed', 10),
(264, 3, 3, '2016-01-07', '12:29:17', 2, 2147483647, 'Transaction is completed', 10),
(274, 3, 3, '2016-01-08', '08:58:40', 2, 2147483647, 'Transaction is completed', 10),
(278, 10, 3, '2016-01-10', '12:34:44', 2, 2147483647, 'Transaction is completed', 10),
(289, 3, 3, '2016-01-11', '07:07:47', 2, 2147483647, 'Transaction is completed', 10);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_temp`
--

CREATE TABLE `transaction_temp` (
  `traID` int(20) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_temp`
--

INSERT INTO `transaction_temp` (`traID`, `userID`) VALUES
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 3),
(17, 3),
(18, 3),
(19, 3),
(20, 3),
(21, 3),
(22, 3),
(23, 3),
(24, 3),
(25, 3),
(26, 10),
(27, 10),
(28, 11),
(29, 11),
(30, 11),
(31, 11),
(32, 11),
(33, 11),
(34, 11),
(35, 11),
(36, 11),
(37, 2),
(38, 11),
(39, 11),
(40, 11),
(41, 11),
(42, 11),
(43, 11),
(44, 11),
(45, 2),
(46, 2),
(47, 2),
(48, 2),
(49, 3),
(50, 3),
(51, 3),
(52, 3),
(53, 3),
(54, 3),
(55, 3),
(56, 3),
(57, 3),
(58, 3),
(59, 3),
(60, 3),
(61, 3),
(62, 3),
(63, 3),
(64, 3),
(65, 3),
(66, 3),
(67, 3),
(68, 3),
(69, 3),
(70, 3),
(71, 3),
(72, 3),
(73, 3),
(74, 3),
(75, 3),
(76, 3),
(77, 3),
(78, 2),
(79, 2),
(80, 2),
(81, 11),
(82, 11),
(83, 11),
(84, 11),
(85, 3),
(86, 3),
(87, 3),
(88, 3),
(89, 3),
(90, 3),
(91, 3),
(92, 3),
(93, 3),
(94, 3),
(95, 3),
(96, 3),
(97, 3),
(98, 3),
(99, 11),
(100, 11),
(101, 11),
(102, 11),
(103, 11),
(104, 3),
(105, 3),
(106, 3),
(107, 3),
(108, 3),
(109, 3),
(110, 3),
(111, 3),
(112, 10),
(113, 10),
(114, 10),
(115, 11),
(116, 11),
(117, 11),
(118, 11),
(119, 11),
(120, 11),
(121, 3),
(122, 3),
(123, 3),
(124, 3),
(125, 3),
(126, 3),
(127, 3),
(128, 3),
(129, 3),
(130, 3),
(131, 3),
(132, 3),
(133, 3),
(134, 3),
(135, 3),
(136, 3),
(137, 3),
(138, 11),
(139, 11),
(140, 11),
(141, 11),
(142, 11),
(143, 11),
(144, 3),
(145, 3),
(146, 11),
(147, 11),
(148, 11),
(149, 11),
(150, 11),
(151, 11),
(152, 11),
(153, 11),
(154, 11),
(155, 11),
(156, 3),
(157, 11),
(158, 11),
(159, 11),
(160, 11),
(161, 11),
(162, 11),
(163, 11),
(164, 11),
(165, 11),
(166, 11),
(167, 3),
(168, 3),
(169, 3),
(170, 3),
(171, 3),
(172, 3),
(173, 3),
(174, 11),
(175, 3),
(176, 3),
(177, 3),
(178, 3),
(179, 3),
(180, 3),
(181, 3),
(182, 3),
(183, 3),
(184, 3),
(185, 3),
(186, 3),
(187, 3),
(188, 3),
(189, 3),
(190, 3),
(191, 3),
(192, 3),
(193, 3),
(194, 3),
(195, 3),
(196, 3),
(197, 3),
(198, 3),
(199, 3),
(200, 3),
(201, 3),
(202, 3),
(203, 3),
(204, 3),
(205, 3),
(206, 3),
(207, 3),
(208, 3),
(209, 3),
(210, 3),
(211, 3),
(212, 3),
(213, 3),
(214, 3),
(215, 3),
(216, 3),
(217, 3),
(218, 3),
(219, 3),
(220, 3),
(221, 3),
(222, 3),
(223, 3),
(224, 3),
(225, 3),
(226, 3),
(227, 3),
(228, 3),
(229, 3),
(230, 3),
(231, 3),
(232, 3),
(233, 3),
(234, 3),
(235, 3),
(236, 3),
(237, 3),
(238, 3),
(239, 3),
(240, 3),
(241, 3),
(242, 3),
(243, 3),
(244, 3),
(245, 3),
(246, 3),
(247, 3),
(248, 3),
(249, 3),
(250, 3),
(251, 3),
(252, 3),
(253, 3),
(254, 3),
(255, 3),
(256, 3),
(257, 3),
(258, 3),
(259, 3),
(260, 3),
(261, 3),
(262, 3),
(263, 3),
(264, 3),
(265, 3),
(266, 3),
(267, 3),
(268, 3),
(269, 3),
(270, 3),
(271, 3),
(272, 3),
(273, 3),
(274, 3),
(275, 29),
(276, 30),
(277, 30),
(278, 3),
(279, 3),
(280, 3),
(281, 3),
(282, 3),
(283, 3),
(284, 3),
(285, 3),
(286, 3),
(287, 3),
(288, 3),
(289, 3),
(290, 33),
(291, 33),
(292, 33),
(293, 33),
(294, 33),
(295, 33);

-- --------------------------------------------------------

--
-- Table structure for table `ucsc_registration`
--

CREATE TABLE `ucsc_registration` (
  `transactionID` int(10) NOT NULL,
  `regYear` int(4) NOT NULL,
  `paymentStatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='For first year registration';

--
-- Dumping data for table `ucsc_registration`
--

INSERT INTO `ucsc_registration` (`transactionID`, `regYear`, `paymentStatus`) VALUES
(8, 2016, 0),
(13, 2016, 0),
(14, 2016, 0),
(15, 2016, 0),
(0, 2016, 0),
(21, 2016, 0),
(22, 2016, 0),
(49, 2016, 0),
(0, 2016, 0),
(51, 2016, 0),
(52, 2016, 0),
(53, 2016, 0),
(54, 2016, 0),
(56, 2016, 0),
(57, 2016, 0),
(58, 2016, 0),
(59, 2016, 0),
(0, 2016, 0),
(61, 2016, 0),
(62, 2016, 0),
(68, 2016, 0),
(0, 2016, 0),
(71, 2016, 0),
(77, 2016, 0),
(85, 2016, 0),
(86, 2016, 0),
(87, 2016, 0),
(94, 2016, 0),
(95, 2016, 0),
(98, 2016, 0),
(4, 2016, 0),
(111, 2016, 0),
(118, 2016, 0),
(123, 2016, 0),
(124, 2016, 0),
(167, 2017, 0),
(169, 2017, 0),
(70, 2017, 0),
(171, 2017, 0),
(175, 2017, 0),
(177, 2017, 0),
(178, 2017, 0),
(179, 2017, 0),
(80, 2017, 0),
(181, 2017, 0),
(182, 2017, 0),
(183, 2017, 0),
(184, 2017, 0),
(185, 2017, 0),
(186, 2017, 0),
(188, 2017, 0),
(189, 2017, 0),
(90, 2017, 0),
(191, 2017, 0),
(192, 2017, 0),
(193, 2017, 0),
(194, 2017, 0),
(195, 2017, 0),
(196, 2017, 0),
(197, 2017, 0),
(198, 2017, 0),
(199, 2017, 0),
(0, 2017, 0),
(1, 2017, 0),
(2, 2017, 0),
(3, 2017, 0),
(4, 2017, 0),
(5, 2017, 0),
(9, 2017, 0),
(10, 2017, 0),
(212, 2017, 0),
(213, 2017, 0),
(214, 2017, 0),
(217, 2017, 0),
(241, 2017, 0),
(251, 2017, 0),
(253, 2017, 0),
(254, 2017, 0),
(255, 2017, 0),
(256, 2017, 0),
(257, 2017, 0),
(258, 2017, 0),
(259, 2017, 0),
(60, 2017, 0),
(261, 2017, 0),
(262, 2017, 1),
(263, 2017, 1),
(265, 2017, 0),
(267, 2017, 0),
(269, 2017, 0),
(271, 2017, 0),
(273, 2017, 0),
(276, 2017, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `indexNumber` varchar(8) DEFAULT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `year` int(2) NOT NULL,
  `group` int(11) NOT NULL,
  `active` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `indexNumber`, `fname`, `lname`, `email`, `phone`, `nic`, `dob`, `year`, `group`, `active`) VALUES
(1, 'lasith', '98f7494c30aaa7c55d7c8cad6d04cb0c08c93295310d6931c33a89dda28a47a3', NULL, 'lasith', 'niroshan', 'lasith2013.l2n@gmail', '0712837662', '923342699V', '1992-11-29', 1, 2, 1),
(2, 'shanika', '98f7494c30aaa7c55d7c8cad6d04cb0c08c93295310d6931c33a89dda28a47a3', NULL, 'shanika', 'surangi', 'sse@gmail.com', '0722235502', '923565488V', '1992-06-29', 2, 2, 1),
(3, 'nadeesh', '8412850906603b50d968536a6c0b1da6c1f52ae947e917e62de4f4662a62dce9', '13000276', 'nadeesh', 'dilanga', 'dinuka098perera@gmail.com', '0770294331', '923342699v', '1992-10-14', 2, 1, 1),
(10, 'anjana', '8182e42c77b763a311306c7de924279ad89ddff152f003898c6ce100699f2610', '13000837', 'anjana', 'nisal', 'anjana@gmail.com', '0770336863', '9233426992', '1992-06-29', 2, 1, 1),
(11, 'lahiru', '0edf2f04a578ad4c1d44ccf0b5a1367b237b431d0fb2c309c11f642c6aa8feb2', '13000888', 'lahiru', 'rangitha', 'lahirupathiranalr@gmail.com', '0715721241', '923342699V', '1992-06-29', 4, 1, 0),
(12, 'pushpika', '15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225', NULL, 'pushpika', 'wanniachchi', 'pushpika@gmail.com', '0715721241', '921601883v', '1992-06-08', 2, 1, 1),
(23, 'rangitha', '15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225', '13000888', 'lahiru', 'rangitha', 'lahirupathiranalr@gmail.com', '0715721241', '921601883v', '2016-01-20', 1, 1, 1),
(25, 'coordinator1', '0edf2f04a578ad4c1d44ccf0b5a1367b237b431d0fb2c309c11f642c6aa8feb2', NULL, 'lahiru', 'rangitha', 'lahiru@gmail.com', '0715721241', '923342699V', '1992-06-29', 1, 3, 1),
(26, 'janeesha', '65e9407ededbcd6f1bb4ecf6f00f5493c076f48e04125ebc0414fdcabdef4ac4', '13020112', 'Janeesha', 'Lakshani', 'shanika.edirisinghe@gmail.com', '0712837662', '926529573V', '1992-05-12', 2, 1, 0),
(28, 'surangi', '6a334ab6e9906b4c82e74accd71739238bf7e6d25cd31356a2c5cc85f3495553', '13020332', 'surangi', 'silva', 'lasith2013.l2n@gmail.com', '0712837662', '923342699v', '1992-11-29', 2, 1, 1),
(29, 'sunimal', 'e04206e1e3ae563af3a4c033ae1d89f8519c6e831ceaa7a81e40ec229502d501', '13000111', 'sunimal', 'sunimal', 'lasith2013.l2n@gmail.com', '0712837662', '923342689V', '1992-01-29', 2, 1, 1),
(30, 'Thisumi', '9a6e2170cf38e0419ce6212ab28f31bfdd7af18ee68fe4f509760c7c621c5477', '', '', '', 'thisumi29upendra@gmail.com', '0773693689', '927235667V', '0000-00-00', 1, 1, 1),
(32, 'viboda', '7234e8f5354c61eb4def57f8c6c94642562739b71590e0d04e03a545e74b5014', '13000122', 'Vibodha', 'Balalla', 'anjanagnet@gmail.com', '0770336863', '930145258v', '1993-02-14', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_session`
--

CREATE TABLE `users_session` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hash` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_notification`
--

CREATE TABLE `user_notification` (
  `nID` int(5) NOT NULL,
  `uID` int(11) NOT NULL,
  `send_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_notification`
--

INSERT INTO `user_notification` (`nID`, `uID`, `send_date`) VALUES
(2, 3, '2007-01-16'),
(2, 4, '2007-01-16'),
(2, 10, '2007-01-16'),
(2, 12, '2007-01-16'),
(2, 13, '2007-01-16'),
(2, 14, '2007-01-16'),
(2, 15, '2007-01-16'),
(3, 3, '2008-01-16'),
(5, 1, '2008-01-16'),
(5, 2, '2008-01-16'),
(5, 10, '2008-01-16'),
(5, 11, '2008-01-16'),
(5, 12, '2008-01-16'),
(5, 13, '2008-01-16'),
(5, 14, '2008-01-16'),
(5, 15, '2008-01-16'),
(5, 23, '2008-01-16'),
(5, 24, '2008-01-16'),
(5, 25, '2008-01-16'),
(5, 26, '2008-01-16'),
(5, 27, '2008-01-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mycontacts`
--
ALTER TABLE `mycontacts`
  ADD PRIMARY KEY (`ContactID`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`nID`);

--
-- Indexes for table `repeatexam_notification`
--
ALTER TABLE `repeatexam_notification`
  ADD PRIMARY KEY (`nID`);

--
-- Indexes for table `repeat_exam`
--
ALTER TABLE `repeat_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transactionID`);

--
-- Indexes for table `transaction_temp`
--
ALTER TABLE `transaction_temp`
  ADD PRIMARY KEY (`traID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users_session`
--
ALTER TABLE `users_session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_notification`
--
ALTER TABLE `user_notification`
  ADD PRIMARY KEY (`nID`,`uID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mycontacts`
--
ALTER TABLE `mycontacts`
  MODIFY `ContactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `nID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `repeatexam_notification`
--
ALTER TABLE `repeatexam_notification`
  MODIFY `nID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `repeat_exam`
--
ALTER TABLE `repeat_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transactionID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=296;
--
-- AUTO_INCREMENT for table `transaction_temp`
--
ALTER TABLE `transaction_temp`
  MODIFY `traID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=296;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users_session`
--
ALTER TABLE `users_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
