-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2013 at 10:17 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `monitoring_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 156),
(2, 1, NULL, NULL, 'Accesses', 2, 13),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 1, NULL, NULL, 'Attachments', 14, 25),
(9, 8, NULL, NULL, 'index', 15, 16),
(10, 8, NULL, NULL, 'view', 17, 18),
(11, 8, NULL, NULL, 'add', 19, 20),
(12, 8, NULL, NULL, 'edit', 21, 22),
(13, 8, NULL, NULL, 'delete', 23, 24),
(14, 1, NULL, NULL, 'Groups', 26, 37),
(15, 14, NULL, NULL, 'index', 27, 28),
(16, 14, NULL, NULL, 'view', 29, 30),
(17, 14, NULL, NULL, 'add', 31, 32),
(18, 14, NULL, NULL, 'edit', 33, 34),
(19, 14, NULL, NULL, 'delete', 35, 36),
(20, 1, NULL, NULL, 'Medias', 38, 49),
(21, 20, NULL, NULL, 'index', 39, 40),
(22, 20, NULL, NULL, 'view', 41, 42),
(23, 20, NULL, NULL, 'add', 43, 44),
(24, 20, NULL, NULL, 'edit', 45, 46),
(25, 20, NULL, NULL, 'delete', 47, 48),
(26, 1, NULL, NULL, 'News', 50, 65),
(27, 26, NULL, NULL, 'isAuthorized', 51, 52),
(28, 26, NULL, NULL, 'index', 53, 54),
(29, 26, NULL, NULL, 'view', 55, 56),
(30, 26, NULL, NULL, 'add', 57, 58),
(31, 26, NULL, NULL, 'edit', 59, 60),
(32, 26, NULL, NULL, 'delete', 61, 62),
(33, 26, NULL, NULL, 'delete_image', 63, 64),
(34, 1, NULL, NULL, 'Pages', 66, 69),
(35, 34, NULL, NULL, 'display', 67, 68),
(36, 1, NULL, NULL, 'Posts', 70, 81),
(37, 36, NULL, NULL, 'index', 71, 72),
(38, 36, NULL, NULL, 'view', 73, 74),
(39, 36, NULL, NULL, 'add', 75, 76),
(40, 36, NULL, NULL, 'edit', 77, 78),
(41, 36, NULL, NULL, 'delete', 79, 80),
(42, 1, NULL, NULL, 'Roles', 82, 93),
(43, 42, NULL, NULL, 'index', 83, 84),
(44, 42, NULL, NULL, 'view', 85, 86),
(45, 42, NULL, NULL, 'add', 87, 88),
(46, 42, NULL, NULL, 'edit', 89, 90),
(47, 42, NULL, NULL, 'delete', 91, 92),
(48, 1, NULL, NULL, 'Sources', 94, 105),
(49, 48, NULL, NULL, 'index', 95, 96),
(50, 48, NULL, NULL, 'view', 97, 98),
(51, 48, NULL, NULL, 'add', 99, 100),
(52, 48, NULL, NULL, 'edit', 101, 102),
(53, 48, NULL, NULL, 'delete', 103, 104),
(54, 1, NULL, NULL, 'Topics', 106, 117),
(55, 54, NULL, NULL, 'index', 107, 108),
(56, 54, NULL, NULL, 'view', 109, 110),
(57, 54, NULL, NULL, 'add', 111, 112),
(58, 54, NULL, NULL, 'edit', 113, 114),
(59, 54, NULL, NULL, 'delete', 115, 116),
(60, 1, NULL, NULL, 'Upload', 118, 125),
(61, 60, NULL, NULL, 'index', 119, 120),
(62, 60, NULL, NULL, 'add', 121, 122),
(63, 60, NULL, NULL, 'delete', 123, 124),
(64, 1, NULL, NULL, 'Users', 126, 141),
(65, 64, NULL, NULL, 'login', 127, 128),
(66, 64, NULL, NULL, 'logout', 129, 130),
(67, 64, NULL, NULL, 'index', 131, 132),
(68, 64, NULL, NULL, 'view', 133, 134),
(69, 64, NULL, NULL, 'add', 135, 136),
(70, 64, NULL, NULL, 'edit', 137, 138),
(71, 64, NULL, NULL, 'delete', 139, 140),
(72, 1, NULL, NULL, 'Widgets', 142, 153),
(73, 72, NULL, NULL, 'index', 143, 144),
(74, 72, NULL, NULL, 'view', 145, 146),
(75, 72, NULL, NULL, 'add', 147, 148),
(76, 72, NULL, NULL, 'edit', 149, 150),
(77, 72, NULL, NULL, 'delete', 151, 152),
(78, 1, NULL, NULL, 'AclExtras', 154, 155);

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 4),
(2, NULL, 'Group', 2, NULL, 5, 8),
(3, NULL, 'Group', 3, NULL, 9, 12),
(4, 1, 'User', 1, NULL, 2, 3),
(5, 2, 'User', 2, NULL, 6, 7),
(6, 3, 'User', 3, NULL, 10, 11);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 2, 1, '-1', '-1', '-1', '-1'),
(3, 2, 36, '1', '1', '1', '1'),
(4, 2, 72, '1', '1', '1', '1'),
(5, 3, 1, '-1', '-1', '-1', '-1'),
(6, 3, 39, '1', '1', '1', '1'),
(7, 3, 40, '1', '1', '1', '1'),
(8, 3, 75, '1', '1', '1', '1'),
(9, 3, 76, '1', '1', '1', '1'),
(10, 2, 8, '1', '1', '1', '1'),
(11, 2, 48, '1', '1', '1', '1'),
(12, 2, 26, '1', '1', '1', '1'),
(13, 2, 54, '1', '1', '1', '1'),
(14, 3, 9, '1', '1', '1', '1'),
(15, 3, 49, '1', '1', '1', '1'),
(16, 3, 28, '1', '1', '1', '1'),
(17, 3, 55, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE IF NOT EXISTS `attachments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(11) NOT NULL,
  `filename` varchar(150) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `attachments`
--

INSERT INTO `attachments` (`id`, `news_id`, `filename`, `type`) VALUES
(11, 7, '04c68a1236bd28690f02d195dc11eeb94dbb707b.jpg', 'jpg'),
(22, 28, 'e542043cdb1d5991afff47cb4e1cff1e8045ab34.png', 'png'),
(23, 28, '638766e51a1159ae7aea500fd8d80e6346596d94.jpg', 'jpg'),
(24, 29, 'a050f97ccdb3b66a0f6645cc9396db6096ec0ae6.png', 'png'),
(25, 29, '2bca8d5bfd874018382fbb435f8dd4cfbe6f19ec.jpg', 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'administrators', '2013-02-28 07:48:24', '2013-02-28 07:48:24'),
(2, 'managers', '2013-02-28 07:48:35', '2013-02-28 07:48:35'),
(3, 'users', '2013-02-28 07:48:42', '2013-02-28 07:48:42');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `resume` text NOT NULL,
  `topic_id` int(11) NOT NULL,
  `source_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `who` varchar(255) NOT NULL,
  `where` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `body`, `resume`, `topic_id`, `source_id`, `created`, `who`, `where`, `tags`, `user_id`) VALUES
(7, 'ini berita6', 'body sberita66', 'resume berita', 1, 1, '2013-02-26 00:54:39', 'gayus', 'bali', 'ok', NULL),
(28, 'ini berita', 'body berita', 'resume berita66', 1, 1, '2013-02-26 04:01:45', 'gayus', 'bali', 'ok', NULL),
(29, 'Ini berita baru', 'ini body baru', 'ini resume baru', 1, 1, '2013-02-28 03:14:09', 'siapa', 'dimana', 'tagsnya', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sources`
--

CREATE TABLE IF NOT EXISTS `sources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `publish_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sources`
--

INSERT INTO `sources` (`id`, `name`, `publish_date`) VALUES
(1, 'Koran', '2013-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`) VALUES
(1, 'Berita');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `lived` varchar(60) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `username_2` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `group_id`, `username`, `password`, `lived`, `created`, `modified`) VALUES
(1, 1, 'administrators', 'fe6d1d6cd41b9e420fd48a8a1d7c67ee9156119f', 'Jakarta', '2013-02-28 07:53:14', '2013-02-28 07:53:14'),
(2, 2, 'managers', 'fe6d1d6cd41b9e420fd48a8a1d7c67ee9156119f', 'Bogor', '2013-02-28 07:55:45', '2013-02-28 07:55:45'),
(3, 3, 'users', 'fe6d1d6cd41b9e420fd48a8a1d7c67ee9156119f', 'Jambi', '2013-02-28 07:56:03', '2013-02-28 07:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE IF NOT EXISTS `widgets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `part_no` varchar(12) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
