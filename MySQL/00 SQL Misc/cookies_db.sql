-- MySQL dump 10.13  Distrib 5.6.13, for osx10.6 (x86_64)
--
-- Host: localhost    Database: cookies
-- ------------------------------------------------------
-- Server version	5.6.13

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


create database cookies;
use cookies;

--
-- Table structure for table `cookie`
--

DROP TABLE IF EXISTS `cookie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cookie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(4,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cookie`
--

LOCK TABLES `cookie` WRITE;
/*!40000 ALTER TABLE `cookie` DISABLE KEYS */;
INSERT INTO `cookie` VALUES (1,'thinmint',4.99),(2,'tagalong',4.99),(3,'poison puff',0.99),(4,NULL,0.99);
/*!40000 ALTER TABLE `cookie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cookie_order`
--

DROP TABLE IF EXISTS `cookie_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cookie_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `girl_scout_id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cookie_order`
--

LOCK TABLES `cookie_order` WRITE;
/*!40000 ALTER TABLE `cookie_order` DISABLE KEYS */;
INSERT INTO `cookie_order` VALUES (1,13,'Daniel','2015-02-09 15:18:44'),(2,13,'Gertrude','2015-02-09 15:18:44'),(3,13,'Fred','2015-02-09 15:18:44'),(4,14,'Bob','2015-02-09 15:18:55'),(5,14,'Ray','2015-02-09 15:18:44'),(6,14,'Tom','2015-02-09 15:18:44'),(7,15,'Kris','2015-02-09 15:20:14'),(8,16,'Dustin','2015-02-09 00:00:00');
/*!40000 ALTER TABLE `cookie_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cookie_order_item`
--

DROP TABLE IF EXISTS `cookie_order_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cookie_order_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cookie_order_id` int(11) NOT NULL,
  `cookie_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cookie_order_item`
--

LOCK TABLES `cookie_order_item` WRITE;
/*!40000 ALTER TABLE `cookie_order_item` DISABLE KEYS */;
INSERT INTO `cookie_order_item` VALUES (1,1,1,1),(2,2,1,1),(3,3,1,1),(4,4,1,1),(5,5,1,1),(6,6,1,1);
/*!40000 ALTER TABLE `cookie_order_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `girl_scout`
--

DROP TABLE IF EXISTS `girl_scout`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `girl_scout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `girl_scout`
--

LOCK TABLES `girl_scout` WRITE;
/*!40000 ALTER TABLE `girl_scout` DISABLE KEYS */;
INSERT INTO `girl_scout` VALUES (13,'leigh'),(14,'mary'),(15,'nancy-ann'),(16,'joann');
/*!40000 ALTER TABLE `girl_scout` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-02-09 15:53:59
