-- MySQL dump 10.13  Distrib 5.1.73, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: lsacms
-- ------------------------------------------------------
-- Server version	5.1.73

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
-- Table structure for table `think_admin`
--

DROP TABLE IF EXISTS `think_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_admin` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `aname` varchar(50) NOT NULL,
  `apwd` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_admin`
--

LOCK TABLES `think_admin` WRITE;
/*!40000 ALTER TABLE `think_admin` DISABLE KEYS */;
INSERT INTO `think_admin` VALUES (1,'lsa','0869a9283df1d949c5c529286716e5ae'),(2,'lsb','58b7eb5ebaa12a0515c0dac315aa2611'),(3,'lsc','6f6c90e968a4adc904152244698d1dda');
/*!40000 ALTER TABLE `think_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_alllesson`
--

DROP TABLE IF EXISTS `think_alllesson`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_alllesson` (
  `lesid` int(10) NOT NULL AUTO_INCREMENT,
  `lesname` varchar(50) NOT NULL,
  `lestea` varchar(50) NOT NULL,
  `lesfaction` varchar(50) NOT NULL,
  `teaid` int(10) NOT NULL,
  PRIMARY KEY (`lesid`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_alllesson`
--

LOCK TABLES `think_alllesson` WRITE;
/*!40000 ALTER TABLE `think_alllesson` DISABLE KEYS */;
INSERT INTO `think_alllesson` VALUES (1,'茅山道术','张天师','茅山',701),(4,'华山剑法','风清杨','华山',702),(5,'华山身法','风清杨','华山',702),(6,'紫霞神功','风清杨','华山',702),(7,'独孤九剑','风清杨','华山',702),(8,'如意刀','逍遥祖师','逍遥派',703),(9,'凌波微步','逍遥祖师','逍遥派',703),(10,'北冥神功','逍遥祖师','逍遥派',703);
/*!40000 ALTER TABLE `think_alllesson` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_student`
--

DROP TABLE IF EXISTS `think_student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_student` (
  `stuid` int(10) NOT NULL AUTO_INCREMENT,
  `stuname` varchar(50) NOT NULL,
  `stupwd` varchar(50) NOT NULL,
  PRIMARY KEY (`stuid`)
) ENGINE=MyISAM AUTO_INCREMENT=1704 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_student`
--

LOCK TABLES `think_student` WRITE;
/*!40000 ALTER TABLE `think_student` DISABLE KEYS */;
INSERT INTO `think_student` VALUES (1701,'征侠','e6c760b3216a51c656c5861d72d5bf62'),(1703,'步惊鸿','5a10579d2359388c9cb067d5264d5d49'),(1702,'征侠2','78942aa883db478f0d834604d74d6de2');
/*!40000 ALTER TABLE `think_student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_stuinfo`
--

DROP TABLE IF EXISTS `think_stuinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_stuinfo` (
  `stuid` int(10) NOT NULL,
  `stuname` varchar(50) NOT NULL,
  `stusex` varchar(2) NOT NULL,
  `stuage` int(5) NOT NULL,
  `stufaction` varchar(50) NOT NULL DEFAULT '散人',
  `stulesnum` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`stuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_stuinfo`
--

LOCK TABLES `think_stuinfo` WRITE;
/*!40000 ALTER TABLE `think_stuinfo` DISABLE KEYS */;
INSERT INTO `think_stuinfo` VALUES (1701,'征侠','m',20,'茅山',3),(1702,'征侠2','m',21,'慕容世家',4),(1703,'步惊鸿','m',22,'华山',5);
/*!40000 ALTER TABLE `think_stuinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_stulesson`
--

DROP TABLE IF EXISTS `think_stulesson`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_stulesson` (
  `stuid` int(10) NOT NULL,
  `stuname` varchar(50) NOT NULL,
  `stules` varchar(50) NOT NULL,
  `stuscore` int(5) NOT NULL DEFAULT '0',
  `stulestea` varchar(50) NOT NULL,
  `stulesfaction` varchar(50) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `lesid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_stulesson`
--

LOCK TABLES `think_stulesson` WRITE;
/*!40000 ALTER TABLE `think_stulesson` DISABLE KEYS */;
INSERT INTO `think_stulesson` VALUES (1701,'征侠','茅山道术',0,'张天师','茅山',31,1),(1702,'征侠2','斗转星移',0,'慕容公子','慕容世家',23,13),(1701,'征侠','天师灭神剑',0,'张天师','茅山',21,4),(1702,'征侠2','茅山道术',700,'张天师','茅山',22,1),(1702,'征侠2','七星夺魂剑',0,'慕容公子','慕容世家',24,12),(1702,'征侠2','天师灭神剑',0,'张天师','茅山',25,4),(1703,'步惊鸿','天师灭神剑',0,'张天师','茅山',26,4),(1703,'步惊鸿','茅山道术',1200,'张天师','茅山',27,1),(1703,'步惊鸿','天师正道',0,'张天师','茅山',28,8),(1703,'步惊鸿','凌波微步',0,'逍遥祖师','逍遥派',29,15),(1703,'步惊鸿','七星夺魂剑',0,'慕容公子','慕容世家',30,12),(1701,'征侠','凌波微步',0,'逍遥祖师','逍遥派',32,15);
/*!40000 ALTER TABLE `think_stulesson` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_teacher`
--

DROP TABLE IF EXISTS `think_teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_teacher` (
  `teaid` int(10) NOT NULL AUTO_INCREMENT,
  `teaname` varchar(50) NOT NULL,
  `teapwd` varchar(50) NOT NULL,
  PRIMARY KEY (`teaid`)
) ENGINE=MyISAM AUTO_INCREMENT=704 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_teacher`
--

LOCK TABLES `think_teacher` WRITE;
/*!40000 ALTER TABLE `think_teacher` DISABLE KEYS */;
INSERT INTO `think_teacher` VALUES (701,'张天师','e10adc3949ba59abbe56e057f20f883e'),(702,'慕容公子','7c722c230a8b08e8739a2cb7c7b36802'),(703,'逍遥祖师','447063584eee1f792e68814ddd181186');
/*!40000 ALTER TABLE `think_teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_teainfo`
--

DROP TABLE IF EXISTS `think_teainfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_teainfo` (
  `teaid` int(10) NOT NULL,
  `teaname` varchar(50) NOT NULL,
  `teasex` varchar(2) NOT NULL,
  `teaage` int(5) NOT NULL,
  `teafaction` varchar(50) NOT NULL,
  `tealesnum` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`teaid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_teainfo`
--

LOCK TABLES `think_teainfo` WRITE;
/*!40000 ALTER TABLE `think_teainfo` DISABLE KEYS */;
INSERT INTO `think_teainfo` VALUES (701,'张天师','m',68,'茅山',5),(702,'慕容公子','m',24,'慕容世家',2),(703,'逍遥祖师','m',80,'逍遥派',2);
/*!40000 ALTER TABLE `think_teainfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_tealesson`
--

DROP TABLE IF EXISTS `think_tealesson`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_tealesson` (
  `teaid` int(10) NOT NULL,
  `teaname` varchar(50) NOT NULL,
  `teales` varchar(50) NOT NULL,
  `lesfaction` varchar(50) NOT NULL,
  `tealesstunum` int(10) NOT NULL DEFAULT '0',
  `lesid` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`lesid`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_tealesson`
--

LOCK TABLES `think_tealesson` WRITE;
/*!40000 ALTER TABLE `think_tealesson` DISABLE KEYS */;
INSERT INTO `think_tealesson` VALUES (701,'张天师','茅山道术','茅山',3,1),(703,'逍遥祖师','凌波微步','逍遥派',2,15),(701,'张天师','天师灭神剑','茅山',3,4),(701,'张天师','咒术','茅山',0,11),(702,'慕容公子','斗转星移','慕容世家',1,13),(703,'逍遥祖师','如意刀','逍遥派',0,14),(701,'张天师','天师正道','茅山',1,8),(702,'慕容公子','七星夺魂剑','慕容世家',2,12),(701,'张天师','独孤九剑','华山',0,16);
/*!40000 ALTER TABLE `think_tealesson` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-21 18:58:11
