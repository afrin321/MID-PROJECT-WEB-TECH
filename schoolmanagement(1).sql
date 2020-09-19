-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2020 at 10:03 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolmanagement`
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
-- Indexes for table `guardianlist`
--
ALTER TABLE `guardianlist`
  ADD PRIMARY KEY (`glid`);

--
-- Indexes for table `organizationinfo`
--
ALTER TABLE `organizationinfo`
  ADD PRIMARY KEY (`oid`);

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
-- AUTO_INCREMENT for table `guardianlist`
--
ALTER TABLE `guardianlist`
  MODIFY `glid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organizationinfo`
--
ALTER TABLE `organizationinfo`
  MODIFY `oid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
