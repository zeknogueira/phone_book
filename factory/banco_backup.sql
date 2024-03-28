-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: bdagendatb
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbamigos`
--

DROP TABLE IF EXISTS `tbamigos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbamigos` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(90) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `datanasc` date DEFAULT NULL,
  `tel` varchar(22) DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbamigos`
--

LOCK TABLES `tbamigos` WRITE;
/*!40000 ALTER TABLE `tbamigos` DISABLE KEYS */;
INSERT INTO `tbamigos` VALUES (1,'Rodrigo','rodrigo@rodrigo.com','0000-00-00','11999191199'),(3,'Pedro','pedro@example.com','1998-04-10','9988776655'),(4,'Ana','ana@example.com','1990-12-25','9876543210'),(5,'Lucas','lucas@example.com','2000-09-03','9998887776'),(6,'Laura','laura@example.com','2002-11-17','9911223344'),(7,'Gabriel','gabriel@example.com','1995-07-08','9988776655'),(8,'Julia','julia@example.com','1999-01-30','9876543210'),(9,'Matheus','matheus@example.com','1987-06-12','9998887776'),(10,'Camila','camila@example.com','1983-04-05','9911223344'),(11,'Gustavo','gustavo@example.com','2001-02-14','9988776655'),(13,'Rafael','rafael@example.com','1978-08-09','9998887776'),(14,'Fernanda','fernanda@example.com','1997-05-22','9911223344'),(16,'TEste','test@test.com','0000-00-00','11915171517');
/*!40000 ALTER TABLE `tbamigos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbcomercio`
--

DROP TABLE IF EXISTS `tbcomercio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbcomercio` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `contato` varchar(90) DEFAULT NULL,
  `empresa` varchar(40) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbcomercio`
--

LOCK TABLES `tbcomercio` WRITE;
/*!40000 ALTER TABLE `tbcomercio` DISABLE KEYS */;
INSERT INTO `tbcomercio` VALUES (1,'Ana','Pepsi','11987654321','ana@pepsi.com'),(2,'Joao','Nike','11987654322','joao@nike.com'),(3,'Pedro','Adidas','11987654323','pedro@adidas.com'),(4,'Carla','Apple','11987654324','carla@apple.com'),(5,'Lucas','Samsung','11987654325','lucas@samsung.com'),(6,'Mariana','Microsoft','11987654326','mariana@microsoft.com'),(7,'Marcos','Amazon','11987654327','marcos@amazon.com'),(8,'Sara','Google','11987654328','sara@google.com'),(9,'Gustavo','Facebook','11987654329','gustavo@facebook.com'),(10,'Leticia','Twitter','11987654330','leticia@twitter.com'),(11,'Gabriela','Instagram','11987654331','gabriela@instagram.com'),(12,'Thiago','LinkedIn','11987654332','thiago@linkedin.com'),(13,'Rafael','Snapchat','11987654333','rafael@snapchat.com'),(14,'Marcela','TikTok','11987654334','marcela@tiktok.com'),(15,'Fernanda','Pinterest','11987654335','fernanda@pinterest.com'),(16,'Teste','Teste','113213212','test@test.com'),(17,'Teste','Teste','113213212','test@test.com');
/*!40000 ALTER TABLE `tbcomercio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbusuario`
--

DROP TABLE IF EXISTS `tbusuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbusuario` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(90) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `senha` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbusuario`
--

LOCK TABLES `tbusuario` WRITE;
/*!40000 ALTER TABLE `tbusuario` DISABLE KEYS */;
INSERT INTO `tbusuario` VALUES (1,'Yasmin','yasmin@yasmin.com','1234'),(2,'Ezequiel','ezequiel@ezequiel.com','1234'),(3,'Tayna','tayna@tayna.com','1234'),(4,'nair','nair@nair.com','1234');
/*!40000 ALTER TABLE `tbusuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-28 16:53:50
