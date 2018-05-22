-- phpMyAdmin SQL Dump

-- version 4.7.4

-- https://www.phpmyadmin.net/

--
-- Host: 127.0.0.1:3306

-- Generation Time: 2017-12-28 05:46:34

-- 服务器版本： 5.7.19
-- 
PHP Version: 5.6.31


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET AUTOCOMMIT = 0;

START TRANSACTION;

SET time_zone = "+00:00";




/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;



--
-- Database: `users`

--
CREATE DATABASE IF NOT EXISTS `users` DEFAULT CHARACTER SET gbk COLLATE gbk_bin;

USE `users`;



-- --------------------------------------------------------

--
-- 表的结构 
`blog`

--

DROP TABLE IF EXISTS `blog`;

CREATE TABLE IF NOT EXISTS `blog`
	 (
 
	`user` varchar(25) COLLATE utf8_bin ,

	`title` varchar(50) COLLATE utf8_bin NOT NULL,
	`content` text COLLATE utf8_bin NOT NULL,
	PRIMARY KEY (`user`)
)
ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



--
-- 转存表中的数据 `
blog`

--

INSERT INTO `blog` (`user`, `title`, `content`) VALUES
('kalie', 'try test', 'just try'),
('kkkkk', 'testtest', 'ssssssssssssssssssssss');



-- --------------------------------------------------------

--
-- 表的结构
 `user`

--

DROP TABLE IF EXISTS `user`;

CREATE TABLE IF NOT EXISTS `user` 
	(

	`name` varchar(16) COLLATE utf8_bin NOT NULL,
	`password` varchar(20) COLLATE utf8_bin NOT NULL,
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



--
-- 转存表中的数据
`user`

--

INSERT INTO `user` (`name`, `password`) VALUES
('hw', '980406'),
(zyl', 'zyl'),
'zzz', '123456');

COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;