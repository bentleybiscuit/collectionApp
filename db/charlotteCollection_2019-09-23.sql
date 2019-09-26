# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.27)
# Database: charlotteCollection
# Generation Time: 2019-09-23 12:59:40 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table modelOrganisms
# ------------------------------------------------------------

DROP TABLE IF EXISTS `modelOrganisms`;

CREATE TABLE `modelOrganisms` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `commonName` varchar(100) DEFAULT 'To be added',
  `scientificName` varchar(100) DEFAULT 'To be added',
  `kingdom` enum('Animals','Archaebacteria','Eubacteria','Fungi','Plants','Protists') DEFAULT NULL,
  `genomeMbp` float unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `modelOrganisms` WRITE;
/*!40000 ALTER TABLE `modelOrganisms` DISABLE KEYS */;

INSERT INTO `modelOrganisms` (`id`, `commonName`, `scientificName`, `kingdom`, `genomeMbp`)
VALUES
	(1,'Yeast','Saccharomyces cerevisiae','Eubacteria',12.1),
	(2,'Mouse','Mus musculus','Animals',2800),
	(3,'Zebrafish','Danio rerio','Animals',1400),
	(4,'Nematode worm','Caenorhabditis elegans','Animals',180),
	(5,'Thale cress','Arabidopsis thaliana','Plants',135),
	(6,'Fruit fly','Drosophila melanogaster','Animals',140);

/*!40000 ALTER TABLE `modelOrganisms` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
