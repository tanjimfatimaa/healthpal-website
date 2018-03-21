-- MySQL dump 10.13  Distrib 5.1.57, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: a7401916_db
-- ------------------------------------------------------
-- Server version	5.1.57

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `VENDOR_INFO`
--

DROP TABLE IF EXISTS `VENDOR_INFO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `VENDOR_INFO` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `email` text,
  `passwd` text,
  `maincat` text,
  `subcat` text,
  `btype` text,
  `location` text,
  `service` text,
  `bhrs` text,
  `netstat` text,
  `bstat` text,
  `rating` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `VENDOR_INFO`
--

LOCK TABLES `VENDOR_INFO` WRITE;
/*!40000 ALTER TABLE `VENDOR_INFO` DISABLE KEYS */;
INSERT INTO `VENDOR_INFO` VALUES (6,'Mickey','email','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8','cat','subcat','type','loc','svc','bhrs',NULL,'bstat',NULL),(10,'hh dh','tot@h','c984aed014aec7623a54f0591da07a85fd4b762d','jdns','dndh','hfjd','89.5006824, 22.8981651','hxjf','dndnf',NULL,'Busy',NULL),(8,'fay lin','f@h','7c4a8d09ca3762af61e59520943dc26494f8941b','home','delivery','food','89.5006824, 22.8981651','everything','all tym',NULL,'Available',NULL),(11,'fg hhh','fgg@fghg','7c4a8d09ca3762af61e59520943dc26494f8941b','hfdv','jduffu','jguf','89.5006824, 22.8981651','fbh','vbn',NULL,'Available',NULL),(12,'hh hhhh','h@hj','c984aed014aec7623a54f0591da07a85fd4b762d','gyhhh','hujuj','hhjjjjh','89.5006824, 22.8980721','gbhjj','hhfhj',NULL,'Available',NULL),(13,'ghjj kkk','gui@gh','c984aed014aec7623a54f0591da07a85fd4b762d','mmm','mmm','mmm','89.5006824, 22.8981651','mm','mmm',NULL,'Available',NULL),(14,'hcjdj nrkfk','hhg@gjj','c984aed014aec7623a54f0591da07a85fd4b762d','fkmfm','fmfmf','fmckf','89.5006824, 22.8981651','fmfmg','fmfkf',NULL,'Available',NULL),(15,'jxjd jfjf','hdjdj@kfjdk','c984aed014aec7623a54f0591da07a85fd4b762d','fjfj','fkfkf','fkfjf','89.5006824, 22.8981651','fjfkf','fnfjf',NULL,'Available',NULL),(16,'jdjfj nnnn','fgh@oop','7c4a8d09ca3762af61e59520943dc26494f8941b','nnnn','nnn','nn','89.5006824, 22.8981651','nmnn','nnnnvjug',NULL,'Available',NULL),(17,'fname lnamr','hdjs@ghj','c984aed014aec7623a54f0591da07a85fd4b762d','fnfnrn','fkfkfn','cncndn','89.5006824, 22.8981651','cnnn','nnn',NULL,'Available',NULL),(18,'bbhhh njjj','f@djkdk','c984aed014aec7623a54f0591da07a85fd4b762d','jjj','jjjn','kkngjj','89.5006086, 22.8980718','nnnj','tyfbj',NULL,'Available',NULL),(19,'hfjdj bgjj','fskksks@kjhg','c984aed014aec7623a54f0591da07a85fd4b762d','jjjv','bbb','bmbv','89.5006086, 22.8980718','nbvjm','kvbk',NULL,'Available',NULL),(20,'hbbv gvgh','gjdk@jjdjdj','c984aed014aec7623a54f0591da07a85fd4b762d','bbbb','bbbb','nnnb','89.5006824, 22.8981651','nnnb','nnbv',NULL,'Available',NULL),(21,'hdhdhd bbv','gdjsj@kkwhsg','c984aed014aec7623a54f0591da07a85fd4b762d','bbbnj','nnccnb','nvmbv','89.5006824, 22.8981651','nnvbj','nvjbvj',NULL,'Available',NULL),(22,'ndndndbd cnjfdnnd','r@h','c984aed014aec7623a54f0591da07a85fd4b762d','cnfnfnfn','dmdnfndn','cnnfnfb','89.5006824, 22.8981651','xnncncn','fnfnfn',NULL,'Available',NULL),(23,'Rayhan Janam','rayhanjanam@gmail.com','c20f29dd891c3702fa6dccb3770ead18818a3283','Business','Retail Food','Pizza','89.5006824, 22.8981651','Home delivery','24/7',NULL,'Available',NULL);
/*!40000 ALTER TABLE `VENDOR_INFO` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-22  9:45:37
