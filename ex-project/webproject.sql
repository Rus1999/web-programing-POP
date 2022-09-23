SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `webproject` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `webproject`;

CREATE TABLE `faculty` (
  `fac_id` int(11) NOT NULL,
  `fac_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fac_detail` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `faculty` (`fac_id`, `fac_name`, `fac_detail`) VALUES
(8, 'wowzaa', 'asdfasdfasdfads'),
(14, 'adsfsdfawert', 'sadgawerawer'),
(15, 'asdfasdf', 'weatwetaset'),
(16, 'adfjerhdsfhdrg', 'sdrgdsfgsdr'),
(17, '789645678645', '6486456489456');

CREATE TABLE `member` (
  `mem_id` int(11) NOT NULL,
  `mem_fname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mem_lname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefix_id` int(11) NOT NULL,
  `mem_telephone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mem_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mem_user` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mem_password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mem_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1 = ผู้ดูแลระบบ, 2 = พนักงาน, 3 = ผู้ใช้ทั่วไป'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `member` (`mem_id`, `mem_fname`, `mem_lname`, `prefix_id`, `mem_telephone`, `mem_email`, `mem_user`, `mem_password`, `mem_status`) VALUES
(7, 'aweresr', 'lkhjklj', 1, 'lkj', 'lk@adlkfj.com', 'jlk', 'jl', '1'),
(10, 'sfdgsdf', 'gsdfg', 2, 'dsfg', 'w@g.com', 'al;kj', 'l;kj', '2'),
(11, 'gsr', 'gergr', 2, 'grgrg', 'rsg@g.com', 'werwer', 'sdgadsg', '1'),
(12, 'wow', 'zaa', 2, '00', '0@g.com', 'asdf', '1234', '1'),
(13, 'asdf', 'aasdf', 1, '354', '4@g.com', 'qwer', '1234', '2');

CREATE TABLE `prefix` (
  `prefix_id` int(11) NOT NULL COMMENT 'รหัสคำนำหน้า',
  `prefix_nameTH` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'คำนำหน้าภาษาไทย',
  `prefix_nameEN` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'คำนำหน้าภาษาอังกฤษ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `prefix` (`prefix_id`, `prefix_nameTH`, `prefix_nameEN`) VALUES
(1, 'นาย ', 'Mr. sdafdsf'),
(2, 'นาง ', 'Mrs. hjiojio');


ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fac_id`);

ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);

ALTER TABLE `prefix`
  ADD PRIMARY KEY (`prefix_id`);


ALTER TABLE `faculty`
  MODIFY `fac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

ALTER TABLE `prefix`
  MODIFY `prefix_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสคำนำหน้า', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
