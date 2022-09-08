-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 01:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--
CREATE DATABASE IF NOT EXISTS `webproject` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `webproject`;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fac_id` int(11) NOT NULL,
  `fac_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fac_detail` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fac_id`, `fac_name`, `fac_detail`) VALUES
(1, 'คณะวิทยาศาสตร์และสังคมศาสตร์', ''),
(2, 'เกษตรฯ', ''),
(3, 'มนุษย์ฯ', ''),
(7, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mem_id` int(11) NOT NULL COMMENT 'รหัส',
  `mem_fname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ชื่อสมาชิก',
  `mem_lname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'นามสกุล',
  `mem_birthdate` date NOT NULL COMMENT 'วันเกิด',
  `mem_address` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ที่อยู่',
  `mem_email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mem_telephone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mem_gender` int(11) NOT NULL COMMENT '1 ชาย 2 หญิง',
  `mem_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mem_user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mem_password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mem_status` int(11) NOT NULL COMMENT '1 ผู้ดูแลระบบ 2 พนักงาน 3 ผู้ใช้งานทั่วไป'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `fac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
