-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: crudci3
-- ------------------------------------------------------
-- Server version	5.0.27-community-nt

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
-- Not dumping tablespaces as no INFORMATION_SCHEMA.FILES table on this server
--

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL auto_increment,
  `nome` varchar(150) default NULL,
  `endereco` varchar(150) default NULL,
  `bairro` varchar(60) default NULL,
  `cidade` varchar(60) default NULL,
  `uf` varchar(2) default NULL,
  `dt_cadastro` date default NULL,
  `dt_nascimento` date default NULL,
  `telefones` varchar(45) default NULL,
  PRIMARY KEY  (`idcliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'Luciano Silva da Silva','Rua 12 Casa 155','Centro','Sobradinho','DF','2021-05-11','1979-11-12','(61)3422-4500 / 99253-4511'),(2,'Rupináculo Inocente Cruz','Qd. 13 Conjunto C Lote 23','Zona sul','Brasília','DF','2021-05-11','1977-12-08','(61)3034-3034 - 98540-5433'),(3,'Nipêncio da Silva Junior','Rua sem saída, casa sem número','Araguaí','Planaltina','DF','2021-05-11','2003-11-13','6132457855'),(4,'Eurismédio Arbilonio Santana','Qd. 14 Conjunto L Casa 11','Vila do sossego','Planaltina','DF','2021-05-11','1993-07-13','(61)99670-1355'),(5,'Maria Lúcia de Santo Cristo','Av. W3 Ed. Torre 3º andar Sala 3003','Setor sul','Brasília','DF','2021-05-11','2003-08-05','6132100115'),(9,'Neirimberto Rodrigues Ramires','Qd. Central Lote 12','Centro','Sobradinho','DF','2021-05-11','2002-04-13','(61)3002-4521'),(10,'Altemar Dutra da Bahia','Rua A Lotes 45 e 46','Soledade','Porto Seguro','BA','2021-05-11','1961-12-13','(77)4321-4855'),(11,'Ramiro Querioz','Av. Independência Lote 23','Setor tradicional','Planaltina','DF','2021-05-11','2003-06-09','(61)3211-4520'),(12,'Joel Sanana','SQS Qd. 303 Bloco C Apt. 320','Asa sul','Brasilia','DF','2021-05-11','2008-02-02','(61)99340-1320'),(13,'Rui Barbosa','Av. Vazia Casa sem número','Fantasma','Nenhuma','DF','2021-05-11','1996-12-25','6132455400'),(14,'Maria Cecília Gomes','Quadra 11 Conjunto M Casa 44','Arapoangas','Planaltina','DF','2021-05-11','2003-07-19','61992350766');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'crudci3'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-11 17:24:49
