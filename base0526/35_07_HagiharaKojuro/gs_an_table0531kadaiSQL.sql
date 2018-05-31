-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018 年 5 朁E31 日 12:32
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
-- テーブルの構造 `gs_an_table`
--

CREATE TABLE IF NOT EXISTS `gs_an_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `food` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `entertainment` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `naiyo` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL,
  `attendance` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table`
--

INSERT INTO `gs_an_table` (`id`, `name`, `email`, `food`, `entertainment`, `naiyo`, `indate`, `attendance`) VALUES
(1, 'Scott', 'koju@koju', '', '', 'Heloo, this is test', '2018-05-26 15:45:44', ''),
(2, 'AAA', 'AA@AA', '', '', 'aaaaaaaa', '2018-05-26 15:48:08', ''),
(4, 'CCC', 'CC@CC', '', '', 'cccccccc', '2018-05-26 15:51:01', ''),
(5, 'DDD', 'DD@DD', '', '', 'dddddddd', '2018-05-26 15:51:10', ''),
(6, 'EEE', 'EE@EE', '', '', 'eeeeeeeee', '2018-05-26 15:51:30', ''),
(7, 'D1D', '1D@DD', '', '', 'd111dddd', '2018-05-26 15:56:32', ''),
(8, 'sss', 'ss@ss', '', '', 'ssssssss', '2018-05-26 15:56:32', ''),
(9, 'kkkkkkkkk', 'test1', '', '', 'dkdkdkkdkd', '2018-05-26 16:02:26', ''),
(10, '', '', '', '', NULL, '0000-00-00 00:00:00', ''),
(11, 'aaa', 'aaa', '', '', 'aaaaa', '2018-05-26 17:35:11', ''),
(12, 'a', 's', '', '', 's', '2018-05-31 12:09:10', ''),
(13, '', '', '', '', NULL, '0000-00-00 00:00:00', ''),
(14, 'DMM', 'ｄｄ', 'apple', '伝統芸能', '前の席で', '2018-05-31 13:15:31', ''),
(15, '萩原鼓十郎', 'kojuro.hagihara@gmial.com', 'なし', '伝統芸能', '大学のゼミではなく高校の同級生テーブル希望', '2018-05-31 13:25:30', ''),
(16, 'ss', 'ssss', 'なし', '伝統芸能', 'ssss', '2018-05-31 19:05:23', 'はい'),
(17, 'すがや', 'sugaya＠は', 'なし', '伝統芸能', 'SED', '2018-05-31 19:18:36', 'はい');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_an_table`
--
ALTER TABLE `gs_an_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_an_table`
--
ALTER TABLE `gs_an_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
