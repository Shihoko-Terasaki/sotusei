-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2020 年 6 月 7 日 05:20
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_db4`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table`
--

CREATE TABLE IF NOT EXISTS `gs_an_table` (
    `id` int(12) NOT NULL,
    `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
    `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
    `naiyou` text COLLATE utf8_unicode_ci,
    `indate` datetime NOT NULL,
    `age` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table`
--

INSERT INTO `gs_an_table` (`id`, `name`, `email`, `naiyou`, `indate`, `age`) VALUES
(1, 'test', 'test0@test.jp', '雨降りますよ。', '2020-09-22 07:28:23', 40),
(2, 'だいちゃん', 'test1@test.jp', 'インコ', '2020-09-22 16:02:47', 20),
(3, 'アリス', 'test2@test.jp', 'ビーグル', '2020-09-22 16:06:42', 30),
(4, 'まる', 'test4@test.jp', 'ミックス', '2020-09-22 16:07:48', 30),
(5, 'うめ', 'test5@test.jp', 'おばあちゃん', '2020-09-22 16:07:48', 40),
(6, 'いそのかつお', 'test6@test.jp', 'メモ', '2020-09-22 16:07:48', 40),
(7, 'わかめ', 'test7@test.jp', 'テスト', '2020-09-22 17:14:36', 20),
(8, 'たらちゃん', 'test8@test.jp', '好き嫌いはしないでね', '2020-09-22 17:59:31', 10),
(9, 'テスト９', 'test9@test.jp', '大切な本3階にあるよ', '2020-09-22 18:13:28', 20),
(10, 'TEST10', 'test10@test.jp', '試験近いね', '2020-09-29 05:19:42', 20),
(11, 'TEST11', 'test11@test.jp', 'テスト', '2020-09-29 05:20:05', 20);

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
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
