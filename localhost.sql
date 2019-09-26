-- Adminer 4.7.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `POO` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `POO`;

DROP TABLE IF EXISTS `character`;
CREATE TABLE `character` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `health` int(11) NOT NULL,
  `strength` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `character_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE,
  CONSTRAINT `character_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `character` (`id`, `name`, `health`, `strength`, `role_id`) VALUES
(2,	'Ghost_name',	500,	75,	1),
(3,	'Max_name',	800,	100,	2),
(4,	'Vance_name',	400,	150,	3),
(5,	'Yuki_name',	350,	250,	4);

DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `role` (`id`, `role`, `image`) VALUES
(1,	'Ghost',	'./elements/images/ghost.png'),
(2,	'Max',	'./elements/images/max.png'),
(3,	'Vance',	'./elements/images/vance.png'),
(4,	'Yuki',	'./elements/images/yuki.png');

-- 2019-09-26 09:47:36
