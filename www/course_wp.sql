-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 10, 2012 at 11:50 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `pro_privs2roles`
--

CREATE TABLE IF NOT EXISTS `pro_privs2roles` (
  `id_priv` int(5) NOT NULL,
  `id_role` int(5) NOT NULL,
  PRIMARY KEY (`id_priv`,`id_role`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

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
