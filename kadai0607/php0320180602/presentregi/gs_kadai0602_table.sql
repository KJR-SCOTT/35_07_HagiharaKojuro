-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018 年 6 朁E07 日 15:16
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_kadai0602_table`
--

CREATE TABLE IF NOT EXISTS `gs_kadai0602_table` (
`id` int(12) NOT NULL,
  `present` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `uses` text COLLATE utf8_unicode_ci NOT NULL,
  `sense` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_kadai0602_table`
--

INSERT INTO `gs_kadai0602_table` (`id`, `present`, `amount`, `uses`, `sense`, `indate`) VALUES
(2, 'v', 'vvv円', 'vvv', 'カリフォルニア', '2018-06-06 20:23:27'),
(3, '人形', '200円', '子供用', 'カリフォルニア', '2018-06-06 20:24:03'),
(4, 'sssss', 'sssss円', 'ss', 'パリ', '2018-06-07 08:28:57'),
(5, 'dd', 'dd円', 'dddd変更', 'ハワイ', '2018-06-07 08:50:08'),
(6, 'jj', 'jj円', 'jj変更\r\n', 'ハワイ', '2018-06-07 18:52:05'),
(7, 's', '円s', 's', 'カリフォルニア', '2018-06-07 20:26:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_kadai0602_table`
--
ALTER TABLE `gs_kadai0602_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_kadai0602_table`
--
ALTER TABLE `gs_kadai0602_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
