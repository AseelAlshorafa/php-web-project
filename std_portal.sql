-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 09:08 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `std_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'omar', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `adv`
--

CREATE TABLE `adv` (
  `adv_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adv`
--

INSERT INTO `adv` (`adv_id`, `title`, `description`, `file`) VALUES
(42, 'مهم جدا وعاجل', 'اخر موعد لتسليم مشروع التخرج 18-6-2019', '5d0888df523aa8.71189729.jpg'),
(43, 'مهم جدا وعاجل', 'اخر موعد لتسليم بحث التخرج  22-6-2019', '5d0889033ed592.38919409.jpg'),
(44, 'عاجل', 'يجب على جميع الطلاب المسجلين لمشروع التخرج 1 التوجه إلى مشرف بموعد اقصاه 15-4-2019', '5d088968beeb63.82482736.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `lecturel`
--

CREATE TABLE `lecturel` (
  `lecturer_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `department` varchar(40) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lecturel`
--

INSERT INTO `lecturel` (`lecturer_id`, `name`, `department`, `role`) VALUES
(13, 'معمر اليازجي', 'هندسة أنظمة حاسوب', 'د'),
(14, 'ماهر شامية', 'هندسة أنظمة حاسوب', 'م'),
(15, 'أحمد محمود ', 'علوم حاسوب', 'د');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `supervisor` varchar(40) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `name`, `description`, `supervisor`, `type`) VALUES
(22, 'مشروع ويب ', 'مشروع ويب موقع تخرج ', 'معمر اليازجي', 'ويب'),
(23, 'تطبيق للتخرج للموبايل', 'تطبيق تخرج للموبايل ', 'ماهر شامية', 'موبايل'),
(24, 'تطبيق سطح مكتب للتخرج', 'تطبيق سطح مكتب للتخرج ', 'أحمد محمود ', 'سطح مكتب');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `std_id` int(11) NOT NULL,
  `std_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL,
  `specialization` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `status` varchar(50) NOT NULL,
  `project_name` varchar(30) NOT NULL,
  `group_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `std_name`, `specialization`, `level`, `status`, `project_name`, `group_no`) VALUES
(258, 'أسيل', 'هندسة أنظمة حاسوب', 3, '1', ' تطبيق للتخرج للموبايل', 2),
(1234, 'عمر الشرفا', 'هندسة أنظمة حاسوب', 3, '1', 'تطبيق للتخرج للموبايل', 2),
(98765, 'يوسف الشرفا', 'علوم حاسوب', 3, '1', 'تطبيق سطح مكتب للتخرج', 5),
(20160853, 'أسيل الشرفا ', 'هندسة أنظمة حاسوب', 3, '1', 'مشروع ويب ', 1),
(20160854, 'رباح الشرفا ', 'هندسة أنظمة حاسوب', 4, '1', 'مشروع ويب ', 1),
(20160855, 'نهى ', 'علوم الحاسوب', 3, '1', 'تطبيق للتخرج للموبايل', 2),
(20160899, 'خالد الشرفا', 'هندسة أنظمة حاسوب', 3, '1', 'مشروع ويب ', 1),
(201608546, 'محمد الشرفا', 'علوم حاسوب', 3, '1', 'مشروع ويب ', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `adv`
--
ALTER TABLE `adv`
  ADD PRIMARY KEY (`adv_id`);

--
-- Indexes for table `lecturel`
--
ALTER TABLE `lecturel`
  ADD PRIMARY KEY (`lecturer_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adv`
--
ALTER TABLE `adv`
  MODIFY `adv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `lecturel`
--
ALTER TABLE `lecturel`
  MODIFY `lecturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2016083354;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
