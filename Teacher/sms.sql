-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 10:56 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wait`
--

-- --------------------------------------------------------

--
-- Table structure for table `classinfo`
--

CREATE TABLE `classinfo` (
  `cid` int(255) NOT NULL,
  `oid` int(255) NOT NULL,
  `class` int(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `tid` int(255) NOT NULL,
  `max` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `task_id`, `comment`, `timestamp`) VALUES
(1, 1, 'hellp', '2020-09-22 08:53:03'),
(2, 1, 'Hi', '2020-09-22 08:54:50'),
(3, 1, 'hellw', '2020-09-22 08:54:55');

-- --------------------------------------------------------

--
-- Table structure for table `guardianlist`
--

CREATE TABLE `guardianlist` (
  `glid` int(255) NOT NULL,
  `gid` int(255) NOT NULL,
  `sid` int(255) NOT NULL,
  `stat` int(255) NOT NULL,
  `oid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guardianlist`
--

INSERT INTO `guardianlist` (`glid`, `gid`, `sid`, `stat`, `oid`) VALUES
(1, 100, 101, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `gurdian_notice`
--

CREATE TABLE `gurdian_notice` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `notice` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gurdian_notice`
--

INSERT INTO `gurdian_notice` (`id`, `class`, `notice`, `timestamp`) VALUES
(1, '3', 'Sobai ashben\r\n\r\nResult Out hobe', '2020-09-21 15:25:16'),
(2, '4', 'trrtsdfs\r\nsrtse\r\ngse', '2020-09-21 15:26:59');

-- --------------------------------------------------------

--
-- Table structure for table `joinlistforstudent`
--

CREATE TABLE `joinlistforstudent` (
  `oid` int(255) NOT NULL,
  `sid` int(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `gid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `joinlistforstudent`
--

INSERT INTO `joinlistforstudent` (`oid`, `sid`, `sname`, `gid`) VALUES
(12, 100, 'sania', 4);

-- --------------------------------------------------------

--
-- Table structure for table `organizationinfo`
--

CREATE TABLE `organizationinfo` (
  `oid` int(255) NOT NULL,
  `oname` varchar(255) NOT NULL,
  `ocno1` int(255) NOT NULL,
  `ocno2` int(255) NOT NULL,
  `oemail` varchar(255) NOT NULL,
  `oaddress` varchar(255) NOT NULL,
  `owebsite` varchar(255) NOT NULL,
  `opostalcode` varchar(255) NOT NULL,
  `ocity` varchar(255) NOT NULL,
  `ologo` varchar(255) NOT NULL,
  `admin_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organizationinfo`
--

INSERT INTO `organizationinfo` (`oid`, `oname`, `ocno1`, `ocno2`, `oemail`, `oaddress`, `owebsite`, `opostalcode`, `ocity`, `ologo`, `admin_id`) VALUES
(1, '1', 1, 1, '1', '1', '1', '1', '1', '../db/upload/index2.jpg', 0),
(2, 'HIS', 11111, 99999, 'his@gmail.com', 'bashundhara', 'www.his.com', '1133', 'dhaka', '../db/upload/index.jpg', 7),
(3, 'HIS2', 1, 1, '1', '1', '1', '1', '1', '../db/upload/index.jpg', 0),
(4, 'HIS', 1, 1, '1', '1', '1', '1', '1', '../db/upload/index1.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `student_notice`
--

CREATE TABLE `student_notice` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `notice` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_notice`
--

INSERT INTO `student_notice` (`id`, `class`, `notice`, `timestamp`) VALUES
(1, '2', 'tert sdrgdrg\r\nsdfg\r\nsd\r\ns\r\negfx\r\ndv\r\nfhgfdgh', '2020-09-21 15:19:56'),
(2, '6', 'drts\r\nsetset\r\nset', '2020-09-21 15:27:54');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `syllabus` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`id`, `class`, `syllabus`, `timestamp`) VALUES
(1, '4', 'drt \r\nrt\r\nsrtset', '2020-09-21 15:29:38'),
(2, 'Select Class', 'dfgdfg\r\nsdgfsd', '2020-09-21 15:30:08');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `task` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `timastamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `class`, `task`, `status`, `timastamp`) VALUES
(1, '3', 'task details', 1, '2020-09-21 15:37:03');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `uid` int(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `uemail` varchar(255) NOT NULL,
  `uphoneno` int(15) NOT NULL,
  `upassword` varchar(255) NOT NULL,
  `ugender` varchar(15) NOT NULL,
  `uday` int(10) NOT NULL,
  `umonth` int(10) NOT NULL,
  `uyear` int(10) NOT NULL,
  `utype` varchar(20) NOT NULL,
  `uphoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`uid`, `uname`, `uemail`, `uphoneno`, `upassword`, `ugender`, `uday`, `umonth`, `uyear`, `utype`, `uphoto`) VALUES
(1, 'afrin', '1', 1, '1', 'male', 1, 1, 1, 'admin', '../db/upload/index.jpg'),
(2, 'ann', 'a', 1, '1', 'female', 1, 1, 1, 'teacher', '../db/upload/index.jpg'),
(3, 'aa', '11', 1, '1', 'male', 1, 11, 1, 'admin', '../db/upload/index.jpg'),
(4, '1', '1', 1, '1', 'female', 1, 1, 1, 'admin', '../db/upload/index.jpg'),
(5, 'amina', 'amina@g.com', 11, '1', 'female', 1, 1, 1, 'student', '../db/upload/index4.png'),
(6, 'aminafath', 'aminafath', 1, '1', 'male', 1, 1, 1, 'guardian', '../db/upload/index2.jpg'),
(7, 'HISadmin', 'HIS@gmail.com', 1111, '1', 'male', 1, 1, 1, 'admin', '../db/upload/index.jpg'),
(8, 'HISadmin2', 'his2@gmail.com', 111, '1', 'male', 1, 1, 1, 'admin', '../db/upload/index.jpg'),
(9, 'new', '1@33.com', 1, '1', 'male', 1, 1, 1, 'admin', '../db/upload/index.jpg'),
(10, 'hii', 'hii', 1, '1', 'male', 1, 1, 1, 'admin', '../db/upload/index.jpg'),
(11, '121', 'mjmn', 1, '1', 'female', 1, 1, 1, 'admin', '../db/upload/index.jpg'),
(12, 'HISadmin2', 'dddd', 1, '1', 'female', 1, 1, 1, 'admin', '../db/upload/index.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classinfo`
--
ALTER TABLE `classinfo`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guardianlist`
--
ALTER TABLE `guardianlist`
  ADD PRIMARY KEY (`glid`);

--
-- Indexes for table `gurdian_notice`
--
ALTER TABLE `gurdian_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizationinfo`
--
ALTER TABLE `organizationinfo`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `student_notice`
--
ALTER TABLE `student_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classinfo`
--
ALTER TABLE `classinfo`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `guardianlist`
--
ALTER TABLE `guardianlist`
  MODIFY `glid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gurdian_notice`
--
ALTER TABLE `gurdian_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `organizationinfo`
--
ALTER TABLE `organizationinfo`
  MODIFY `oid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_notice`
--
ALTER TABLE `student_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
