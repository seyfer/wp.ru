-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 11, 2012 at 07:45 AM
-- Server version: 5.1.40
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `course_wp`
--

-- --------------------------------------------------------

--
-- Table structure for table `pro_articles`
--

CREATE TABLE IF NOT EXISTS `pro_articles` (
  `id_article` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `pro_articles`
--

INSERT INTO `pro_articles` (`id_article`, `title`, `content`) VALUES
(68, 'первая', 'первая первая первая первая первая первая первая первая первая первая первая первая первая первая первая первая первая первая первая первая первая первая первая первая первая'),
(69, 'вторая', 'вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая'),
(70, 'третья11', 'третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья');

-- --------------------------------------------------------

--
-- Table structure for table `pro_menu`
--

CREATE TABLE IF NOT EXISTS `pro_menu` (
  `id_menu` int(3) NOT NULL AUTO_INCREMENT,
  `link` varchar(255) NOT NULL,
  `ancor` varchar(255) NOT NULL,
  `sort` int(3) NOT NULL,
  `active` int(2) NOT NULL,
  `show_m` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_menu`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pro_menu`
--

INSERT INTO `pro_menu` (`id_menu`, `link`, `ancor`, `sort`, `active`, `show_m`) VALUES
(1, 'C_Index', 'Главная', 1, 1, 1),
(2, 'C_Editor', 'Консоль редактора', 2, 0, 1),
(6, 'C_User_Auth', 'Авторизация', 3, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pro_privs`
--

CREATE TABLE IF NOT EXISTS `pro_privs` (
  `id_priv` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id_priv`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pro_privs`
--

INSERT INTO `pro_privs` (`id_priv`, `name`) VALUES
(1, 'EDIT_ARTICLE'),
(2, 'ADD_ARTICLE'),
(3, 'EDIT_MENU'),
(4, 'ADD_MENU'),
(5, 'READ_ARTICLE'),
(6, 'DELETE_ARTICLE'),
(7, 'ENTER_EDITOR_CONSOLE');

-- --------------------------------------------------------

--
-- Table structure for table `pro_privs2roles`
--

CREATE TABLE IF NOT EXISTS `pro_privs2roles` (
  `id_priv` int(5) NOT NULL,
  `id_role` int(5) NOT NULL,
  PRIMARY KEY (`id_priv`,`id_role`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pro_privs2roles`
--

INSERT INTO `pro_privs2roles` (`id_priv`, `id_role`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 2),
(6, 1),
(7, 1),
(7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pro_roles`
--

CREATE TABLE IF NOT EXISTS `pro_roles` (
  `id_role` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id_role`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pro_roles`
--

INSERT INTO `pro_roles` (`id_role`, `name`) VALUES
(1, 'Администратор'),
(2, 'Пользователь');

-- --------------------------------------------------------

--
-- Table structure for table `pro_sessions`
--

CREATE TABLE IF NOT EXISTS `pro_sessions` (
  `id_session` int(7) NOT NULL AUTO_INCREMENT,
  `id_user` int(7) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `time_start` datetime NOT NULL,
  `time_last` datetime NOT NULL,
  PRIMARY KEY (`id_session`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `pro_sessions`
--


-- --------------------------------------------------------

--
-- Table structure for table `pro_users`
--

CREATE TABLE IF NOT EXISTS `pro_users` (
  `id_user` int(7) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_role` int(5) NOT NULL DEFAULT '2',
  `name` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `login` (`login`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pro_users`
--

INSERT INTO `pro_users` (`id_user`, `login`, `password`, `id_role`, `name`, `email`, `date`) VALUES
(1, 'seyfer', 'e8be29c2c324842cfb6389e5043d5c4a', 1, 'seyfer seed', '', '0000-00-00 00:00:00'),
(3, 'test', '098f6bcd4621d373cade4e832627b4f6', 2, 'test me', 'test@test.ru', '2012-05-10 14:56:13');
