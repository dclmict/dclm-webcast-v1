-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Oct 01, 2021 at 06:11 PM
-- Server version: 8.0.26
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dclm.webcast`
--

-- --------------------------------------------------------

--
-- Table structure for table `webcast_info`
--

CREATE TABLE `webcast_info` (
  `id` int NOT NULL,
  `player` varchar(10) CHARACTER SET utf8 NOT NULL,
  `ytid_en` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ytid_fr` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ytid_esp` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ytid_por` varchar(50) CHARACTER SET utf8 NOT NULL,
  `fbid_en` varchar(50) CHARACTER SET utf8 NOT NULL,
  `fbid_fr` varchar(50) CHARACTER SET utf8 NOT NULL,
  `fbid_esp` varchar(50) CHARACTER SET utf8 NOT NULL,
  `fbid_por` varchar(50) CHARACTER SET utf8 NOT NULL,
  `yt` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `fb` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `mejs` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `mtitle_en` varchar(200) CHARACTER SET utf8 NOT NULL,
  `mtitle_fr` varchar(200) CHARACTER SET utf8 NOT NULL,
  `mtitle_esp` varchar(200) CHARACTER SET utf8 NOT NULL,
  `mtitle_por` varchar(200) CHARACTER SET utf8 NOT NULL,
  `mpreacher` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ename_en` varchar(200) CHARACTER SET utf8 NOT NULL,
  `ename_fr` varchar(200) CHARACTER SET utf8 NOT NULL,
  `ename_esp` varchar(200) CHARACTER SET utf8 NOT NULL,
  `ename_por` varchar(200) CHARACTER SET utf8 NOT NULL,
  `evenue` varchar(200) CHARACTER SET utf8 NOT NULL,
  `edate` varchar(50) CHARACTER SET utf8 NOT NULL,
  `etag` varchar(500) CHARACTER SET utf8 NOT NULL,
  `estuff` varchar(1000) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='DCLM Webcast - Livestream Info';

--
-- Dumping data for table `webcast_info`
--

INSERT INTO `webcast_info` (`id`, `player`, `ytid_en`, `ytid_fr`, `ytid_esp`, `ytid_por`, `fbid_en`, `fbid_fr`, `fbid_esp`, `fbid_por`, `yt`, `fb`, `mejs`, `mtitle_en`, `mtitle_fr`, `mtitle_esp`, `mtitle_por`, `mpreacher`, `ename_en`, `ename_fr`, `ename_esp`, `ename_por`, `evenue`, `edate`, `etag`, `estuff`) VALUES
(1, 'youtube', 'i9lnLacW-XE', '9fLqPD-R5UI', 'WdcQknHKHeM', 'FOKogi3CWP4', '', '', '', '', '<div class=\"agile_main_grid_left\">\r\n	<div class=\"w3_agileits_personal_card_grid\">\r\n		<div class=\"agileinfo_personal_text\">\r\n			<div class=\"video-container\">\r\n			<p><iframe width=\"800\" height=\"420\" src=\"https://www.youtube.com/embed/<?php echo $r?>?&autoplay=0&rel=0&showinfo=0&modestbranding=1&hd=1&autohide=1\" frameborder=\"0\" allowfullscreen></iframe></p>\r\n			</div>\r\n		</div>\r\n	</div>\r\n</div>', '<div class=\"embed-responsive embed-responsive-16by9\"><iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fdclmhq%2Fvideos%2F<?php echo $r?>?&show_text=false&width=734&appId=769415599924155\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\" allowFullScreen=\"true\"></iframe>\r\n</div>', '<div class=\"embed-responsive embed-responsive-16by9\">\r\n<video id=\"player1\" class=\"embed-responsive-item\" poster=\"https://dclmcloud.s3.amazonaws.com/website/MBSHD.jpg\" preload=\"none\" controls playsinline webkit-playsinline>\r\n<source src=\"https://2018services.s3.amazonaws.com/MBS/MBS01012018%28HQ%29The_Master%27s_Call_To_Renewal_Me.mp4\" type=\"video/mp4\">\r\n</video>\r\n</div>', 'The Way to Multiple Showers', 'The Way to Multiple Showers', 'El camino a múltiples duchas', 'The Way to Multiple Showers', 'W.F. Kumuyi', 'Global Gospel Crusade', 'Croisade évangélique Mondiale', 'Cruzada Global del Evangelio', 'Cruzada de Evangelho Global', 'Portharcourt, Rivers State', 'September 29, 2021', 'Showers of Blessing', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `webcast_info`
--
ALTER TABLE `webcast_info`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
