CREATE DATABASE IF NOT EXISTS `db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db`;


CREATE TABLE IF NOT EXISTS `admin` (
	`usr` varchar(20) NOT NULL,
	`psw` varchar(20) NOT NULL,
	PRIMARY KEY (`usr`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `admin` (`usr`, `psw`) VALUES ('admin', 'admin');


CREATE TABLE IF NOT EXISTS `rooms` (
    `id` int(5) NOT NULL,
	`room_name` varchar(50) NOT NULL,
	PRIMARY KEY (`room_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `rooms` (`id`,`room_name`) VALUES ('All','All');


CREATE TABLE IF NOT EXISTS `books` (
	`room_name` varchar(50) NOT NULL ,
	`customer_name` varchar(50) NOT NULL,
	`tfrom` varchar(50) NOT NULL,
	`tuntil` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;