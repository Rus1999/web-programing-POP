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
(18, 'วิทยาศาสตร์และสังคมศาสตร์', 'มหาวิทยาลัยบูรพา วิทยาเขตสระแก้ว'),
(19, 'ทรัพยากรมนุษย์', 'มหาวิทยาลัยบูรพา วิทยาเขตสระแก้ว'),
(20, 'เกษตร', 'มหาวิทยาลัยบูรพา วิทยาเขตสระแก้ว'),
(21, 'อิเล็กทรอนิกส์', 'วิทยาลัยเทคนิค ราชบุรี');

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
(14, 'Punyarit', 'Klaphachon', 1, '0610867479', 'punyarit07@gmail.com', 'rus', 'rus', '1'),
(15, 'ธนู', 'คงคนคอ', 1, '0872953327', 'arrow@co.com', 'arrow', 'arrow', '2'),
(16, 'เจนนี่', 'เมทัลสลัค', 5, '0988853221', 'jane@yan.thip', 'jane', 'jane', '3'),
(17, 'ดาบ', 'ยาว', 5, 'ส่งจดหมายมา', 'sword@long.jung', 'sword', 'sword', '2');

CREATE TABLE `prefix` (
  `prefix_id` int(11) NOT NULL COMMENT 'รหัสคำนำหน้า',
  `prefix_nameTH` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'คำนำหน้าภาษาไทย',
  `prefix_nameEN` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'คำนำหน้าภาษาอังกฤษ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `prefix` (`prefix_id`, `prefix_nameTH`, `prefix_nameEN`) VALUES
(1, 'นาย  ', 'Mr.'),
(2, 'นาง  ', 'Mrs.'),
(5, 'นางสาว', 'Miss'),
(6, 'ดร.', 'Dr.');

CREATE TABLE `project` (
  `pro_id` int(11) NOT NULL,
  `pro_date` date NOT NULL,
  `pro_nameTH` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_nameEN` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mem_id` int(11) NOT NULL,
  `boss_id` int(11) NOT NULL,
  `pro_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `project` (`pro_id`, `pro_date`, `pro_nameTH`, `pro_nameEN`, `pro_detail`, `mem_id`, `boss_id`, `pro_status`) VALUES
(1, '0000-00-00', 'ระบบจองล่ามแปลภาษาส่วนตัว', 'TranslatorReservationSystem', 'เป็นระบบจากรายวิชาฐานข้อมูล Database', 14, 0, 3),
(2, '2022-09-23', 'ระบบจองล่ามแปลภาษาส่วนตัว', 'TranslatorReservationSystem', '', 14, 16, 2),
(3, '0000-00-00', 'ระบบจองล่ามแปลภาษาส่วนตัว', 'TranslatorReservationSystem', 'sa', 14, 0, 1),
(4, '0000-00-00', 'ระบบจองล่ามแปลภาษาส่วนตัว', 'TranslatorReservationSystem', 'sa', 14, 16, 3),
(5, '2022-09-30', 'ระบบจองล่ามแปลภาษาส่วนตัว', 'TranslatorReservationSystem', 'sa', 14, 0, 1),
(6, '2022-09-30', 'ระบบจองล่ามแปลภาษาส่วนตัว', 'TranslatorReservationSystem', 'asdfdsfguhiyguyi', 14, 0, 1),
(7, '2022-09-30', 'xxx', 'xxx', 'xxx', 15, 0, 3),
(8, '2022-09-30', 'sss', 'sss', 'sss', 17, 0, 1),
(9, '2022-09-07', 'werawe3rser', 'werwe', '54513221354687', 15, 0, 1);

CREATE TABLE `train` (
  `train_id` int(11) NOT NULL,
  `train_date` date NOT NULL,
  `train_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `train_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `train_startdate` date NOT NULL,
  `train_enddate` date NOT NULL,
  `mem_id` int(11) NOT NULL,
  `boss_id` int(11) NOT NULL,
  `train_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `train` (`train_id`, `train_date`, `train_name`, `train_address`, `train_startdate`, `train_enddate`, `mem_id`, `boss_id`, `train_status`) VALUES
(1, '2022-10-18', 'asdf', 'asdfasdf', '2022-10-18', '0000-00-00', 15, 0, 1),
(3, '2022-09-26', 'asdf', 'wegawerg', '2022-09-28', '2022-10-03', 15, 16, 2),
(4, '2022-10-18', 'asdfdsf', 'hweryaherhg', '2022-10-20', '2022-10-27', 15, 16, 3),
(5, '2022-10-05', 'Ciber Security', 'bangkok', '2022-10-25', '2022-10-29', 17, 16, 2),
(6, '2022-10-12', 'ฝึกความอดทนของจิตใจ', 'โลก', '2022-10-01', '2022-10-31', 14, 0, 1);


ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fac_id`);

ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);

ALTER TABLE `prefix`
  ADD PRIMARY KEY (`prefix_id`);

ALTER TABLE `project`
  ADD PRIMARY KEY (`pro_id`);

ALTER TABLE `train`
  ADD PRIMARY KEY (`train_id`);


ALTER TABLE `faculty`
  MODIFY `fac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

ALTER TABLE `prefix`
  MODIFY `prefix_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสคำนำหน้า', AUTO_INCREMENT=7;

ALTER TABLE `project`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

ALTER TABLE `train`
  MODIFY `train_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
