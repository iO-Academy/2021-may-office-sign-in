# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.34)
# Database: bonjourdb
# Generation Time: 2021-08-18 12:26:28 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table admin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `passcode` varchar(244) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;

INSERT INTO `admin` (`id`, `passcode`)
VALUES
	(1,'$2y$10$8b6.n5NdQchnxb36imwwUe9LAcS7.OrKb6TQhXStzPAwIN66.t20S');

/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table visitors
# ------------------------------------------------------------

DROP TABLE IF EXISTS `visitors`;

CREATE TABLE `visitors` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(254) NOT NULL DEFAULT '',
  `company` varchar(120) DEFAULT NULL,
  `entry_time` int(11) NOT NULL,
  `is_in` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `visitors` WRITE;
/*!40000 ALTER TABLE `visitors` DISABLE KEYS */;

INSERT INTO `visitors` (`id`, `name`, `email`, `company`, `entry_time`, `is_in`)
VALUES
	(1,'Lucy Ferrabee','lucy.test@hotmail.com','Microsoft',1629109360,1),
	(2,'Fred Perry','fred123@gmail.com','Just Eat',1629109480,1),
	(3,'Sonia Larson','larry@hotmail.com',NULL,1629109200,0),
	(4,'Benedict Cumberbatch','benten@uber.com','Uber',1629109670,1),
	(5,'Penny Lane','penny@lane.com','Lane Services Ltd.',1629109100,0),
	(6,'Michael Michaelson','mkay@me.com',NULL,1629109381,0),
	(7,'Jonny Begood','birdwatcher5376@gousto.com','Gousto',1629109427,1),
	(8,'Samuel Smith','smithy@gmail.com',NULL,1629110400,1),
	(9,'Janet Jackson','plainjane1999@hotmail.com',NULL,1629115000,0),
	(10,'Sally Silly','sal@gmail.com','Silly Sally Ltd.',1629109361,1),
	(25,'Alex','','',1629207595,1);

/*!40000 ALTER TABLE `visitors` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
