-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 19, 2019 at 11:09 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(4) NOT NULL COMMENT 'รหัสภาพยนตร์',
  `img_movie` varchar(1000) NOT NULL,
  `movie` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'ชื่อหนัง',
  `rate` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'เรทหนัง',
  `type` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'ประเภทหนัง',
  `time` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'เวลาหนัง',
  `language` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'ภาษา',
  `systemmovie` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'ระบบที่เข้าฉาย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `img_movie`, `movie`, `rate`, `type`, `time`, `language`, `systemmovie`) VALUES
(1, 'images/1.jpg', 'Frozen', 'Kid', 'Fun', '1hr. 47 mi', 'Thai', 'Digital'),
(2, 'images/2.jpg', 'Zombie Land', 'Action', 'Comedy', '1hr. 47 mi', 'Thai', 'Digital'),
(3, 'images/3.jpg', 'Bike Man 2', 'Fun', 'Comedy', '1hr. 47 mi', 'Thai', 'Digital'),
(4, 'images/4.jpg', 'Malificent', 'Action', 'Action', '1hr. 47 mi', 'Thai', 'Digital'),
(9, 'images/5.jpg', 'Valelian', 'R', 'Action', '1hr. 47 min', 'Thai', ''),
(10, 'images/dala.jpg', 'DOLA', '14+', 'Comedy', '1hr. 47 min', 'Thaiasdada', 'Digital');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'รหัสภาพยนตร์', AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
