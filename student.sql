-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 10:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `mail`, `pass`, `user`) VALUES
(1, 'ngiang1309@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(100) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `id_subject` int(100) NOT NULL,
  `id_teacher` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`, `id_subject`, `id_teacher`) VALUES
(17, 'FE-1013', 20, 23),
(18, 'BE-1013', 19, 23),
(19, 'CAR-1015', 22, 28),
(20, 'KT-1231', 21, 26);

-- --------------------------------------------------------

--
-- Table structure for table `classstudent`
--

CREATE TABLE `classstudent` (
  `id` int(100) NOT NULL,
  `id_class` int(100) NOT NULL,
  `id_student` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classstudent`
--

INSERT INTO `classstudent` (`id`, `id_class`, `id_student`) VALUES
(72, 17, 45),
(73, 17, 46),
(74, 17, 47),
(75, 17, 48),
(76, 18, 45),
(77, 18, 46),
(78, 18, 47),
(79, 18, 48),
(80, 19, 51),
(81, 20, 49);

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE `major` (
  `id` int(100) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `major`
--

INSERT INTO `major` (`id`, `name`) VALUES
(7, 'IT'),
(8, 'Design'),
(9, 'Marketing'),
(10, 'Kỹ thuật'),
(11, 'Điện tử'),
(12, 'Ô tô');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `id` int(100) NOT NULL,
  `id_class` int(100) NOT NULL,
  `id_student` int(100) NOT NULL,
  `score1` float NOT NULL,
  `score2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`id`, `id_class`, `id_student`, `score1`, `score2`) VALUES
(23, 17, 45, 9, 9),
(24, 17, 46, 10, 10),
(25, 17, 47, 9, 8),
(26, 17, 48, 8, 9);

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `id` int(100) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `birth` varchar(20) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL,
  `id_major` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`id`, `name`, `img`, `birth`, `mail`, `gender`, `phone`, `address`, `id_major`) VALUES
(45, 'Nguyễn Đình Giang', '415496636_1709169766230882_1365114659954004218_n.jpg', '2003-09-13', 'ngiang1309@gmail.com', 'Nam', '0345613090', 'Hà Nội', 7),
(46, 'Bùi Mộc Quế Anh', '362244752_1490191191813263_1380951347507615774_n.jpg', '2003-08-07', 'mail@gmail.com', 'Nữ', '0123456789', 'Hoà Bình', 7),
(47, 'Nông Tiến Công', 'user-6.jpg', '2003-11-11', 'mail@gmail.com', 'Nam', '0123456789', 'Cao Bằng', 7),
(48, 'Đào Văn Tuấn', 'avatar-03.jpg', '2001-11-11', 'mail@gmail.com', 'Nam', '0123456789', 'Hưng Yên', 7),
(49, 'Nguyễn Văn A', 'avatar-12.jpg', '2001-11-11', 'mail@gmail.com', 'Nam', '0123456789', 'HCM', 10),
(50, 'Nguyễn Thị P', 'avatar-11.jpg', '2001-11-11', 'mail@gmail.com', 'Nữ', '0123456789', 'Huế', 9),
(51, 'Trần Trung Kiên', 'avatar-04.jpg', '2003-11-11', 'mail@gmail.com', 'Nam', '0123456789', 'Sóc Sơn', 12),
(52, 'Trần Thị Bích', 'avatar-01.jpg', '2003-12-31', 'mail@gmai.com', 'Nữ', '0123456789', 'Huế', 8),
(53, 'Bùi Thị Lan', 'avatar-02.jpg', '2003-12-03', 'mail@gmail.com', 'Nữ', '0123456789', 'Lạng Sơn', 11);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `credits` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `credits`) VALUES
(18, 'Photoshop-1', 10),
(19, 'Java', 10),
(20, 'Javascript', 10),
(21, 'Kỹ thuật-1', 10),
(22, 'Ô tô 1', 10),
(23, 'Marketing 1', 10);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(100) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `birth` varchar(20) NOT NULL,
  `img` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `id_major` int(100) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `mail`, `birth`, `img`, `gender`, `phone`, `id_major`, `address`) VALUES
(23, 'Giảng Viên 1', 'mail@gmail.com', '1998-11-11', 'avatar-13.jpg', 'Nam', '0123456789', 7, ''),
(24, 'Giảng viên 2', 'mail@gmail.com', '1980-11-11', 'user-7.jpg', 'Nữ', '0123456789', 8, 'Hà Nội'),
(25, 'Giảng viên 3', 'mail@gmail.com', '1995-11-11', 'avatar-14.jpg', 'Nam', '0123456789', 9, 'Kiên Giang'),
(26, 'Giảng viên 6', 'mail@gmail.com', '1989-11-11', 'R (2).jfif', 'Nữ', '0123456789', 10, 'Hà Nội'),
(27, 'Giảng viên 4', 'mail@gmail.com', '1987-11-11', 'avatar-05.jpg', 'Nam', '0123456789', 11, 'HN'),
(28, 'Giảng viên 5', 'mail@gmail.com', '1983-11-11', 'user-5.jpg', 'Nam', '0123456789', 12, 'HN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classstudent`
--
ALTER TABLE `classstudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `classstudent`
--
ALTER TABLE `classstudent`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `major`
--
ALTER TABLE `major`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
