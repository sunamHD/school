-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: urgentConsultDB
-- ------------------------------------------------------
-- Server version	5.5.37-0ubuntu0.13.10.1

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
-- Table structure for table `classJoining`
--

DROP TABLE IF EXISTS `classJoining`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classJoining` (
  `stud_id` int(4) NOT NULL,
  `class_id` int(4) NOT NULL,
  KEY `stud_id` (`stud_id`),
  KEY `class_id` (`class_id`),
  CONSTRAINT `classJoining_ibfk_1` FOREIGN KEY (`stud_id`) REFERENCES `students` (`stud_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `classJoining_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classJoining`
--

LOCK TABLES `classJoining` WRITE;
/*!40000 ALTER TABLE `classJoining` DISABLE KEYS */;
INSERT INTO `classJoining` VALUES (1,9),(1,7),(2,7),(4,4),(3,3),(1,2);
/*!40000 ALTER TABLE `classJoining` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classes` (
  `class_id` int(4) NOT NULL AUTO_INCREMENT,
  `className` varchar(30) NOT NULL,
  `maj_id` int(4) DEFAULT NULL,
  PRIMARY KEY (`class_id`),
  KEY `maj_Id` (`maj_id`),
  CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`maj_Id`) REFERENCES `majors` (`maj_id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classes`
--

LOCK TABLES `classes` WRITE;
/*!40000 ALTER TABLE `classes` DISABLE KEYS */;
INSERT INTO `classes` VALUES (2,'The Constitution Today',2),(3,'Perceptions of Architecture',3),(4,'Architectural Design I',3),(7,'Microwave Engineering',1),(9,'Natural Language Processing',1),(11,'Machine Learning',1),(13,'Distributed Computing',1),(14,'Databases',1),(16,'EE102',1),(17,'EE201: DSP',1),(18,'ARCH101',3),(19,'ARCH102',3),(20,'ARCH403',3),(21,'JOUR101',2),(22,'JOUR102',2),(23,'JOUR301',2),(24,'JOUR411',2),(25,'Circuits',1),(26,'Computer Architecture',1),(27,'Communication Theory',1),(29,'Satellite Communications',1),(30,'Communication Networks',1);
/*!40000 ALTER TABLE `classes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `majors`
--

DROP TABLE IF EXISTS `majors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `majors` (
  `maj_id` int(4) NOT NULL AUTO_INCREMENT,
  `majorName` varchar(30) NOT NULL,
  PRIMARY KEY (`maj_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `majors`
--

LOCK TABLES `majors` WRITE;
/*!40000 ALTER TABLE `majors` DISABLE KEYS */;
INSERT INTO `majors` VALUES (1,'Electrical Engineering'),(2,'Journalism'),(3,'Architecture');
/*!40000 ALTER TABLE `majors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `stud_id` int(4) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(15) NOT NULL,
  `midName` varchar(15) DEFAULT '',
  `lastName` varchar(15) NOT NULL,
  `year` varchar(15) DEFAULT 'Sophomore',
  `gpa` decimal(2,1) DEFAULT NULL,
  `breakdance` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,'Derek','John','Toub','Sophomore',3.5,1),(2,'Daniel','T.','Reichman','Sophomore',2.7,0),(3,'Mike','B.','Smith','Sophomore',4.0,0),(4,'Dvorak','T.','Tuob','Sophomore',3.9,0),(7,'Tony','','Hawk','Sophomore',4.0,1),(8,'Grigori','','Rasputin','Sophomore',2.7,1),(12,'Michael','','Spivak','Sophomore',3.0,0),(13,'Hillary','','Clinton','Sophomore',3.0,0),(14,'Mike','A.','A.',NULL,NULL,NULL),(15,'Mike','','B.','Sophomore',NULL,NULL),(16,'Mike','','C.','Sophomore',NULL,NULL),(17,'Mike','','D.','Sophomore',NULL,NULL),(18,'Mike','','E.','Sophomore',NULL,NULL),(19,'Mike','','F.','Sophomore',NULL,NULL),(20,'Mike','','G.','Sophomore',NULL,NULL),(21,'Mike','','H.','Sophomore',NULL,NULL),(22,'Mike','','I.','Sophomore',NULL,NULL),(23,'Mike','','J.','Sophomore',NULL,NULL),(24,'Mike','','K.','Sophomore',NULL,NULL),(25,'Mike','','L.','Sophomore',NULL,NULL),(26,'MIke','','M.','Sophomore',NULL,NULL),(27,'Mike','','N.','Sophomore',NULL,NULL),(30,'Mike','','Z.','',3.2,0);
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-08-19 15:47:15
