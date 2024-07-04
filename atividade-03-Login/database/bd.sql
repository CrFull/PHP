CREATE DATABASE  IF NOT EXISTS `atividade03loginphp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `atividade03loginphp`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: atividade03loginphp
-- ------------------------------------------------------
-- Server version	5.6.16

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
-- Table structure for table `alunos`
--

DROP TABLE IF EXISTS `alunos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alunos` (
  `nomeAluno` varchar(50) DEFAULT NULL,
  `codigoAluno` int(11) NOT NULL AUTO_INCREMENT,
  `nota1` double DEFAULT NULL,
  `nota2` double DEFAULT NULL,
  `nota3` double DEFAULT NULL,
  PRIMARY KEY (`codigoAluno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alunos`
--

LOCK TABLES `alunos` WRITE;
/*!40000 ALTER TABLE `alunos` DISABLE KEYS */;
/*!40000 ALTER TABLE `alunos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mediascadastradas`
--

DROP TABLE IF EXISTS `mediascadastradas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mediascadastradas` (
  `usuario` varchar(40) DEFAULT NULL,
  `qtdMedias` int(11) DEFAULT NULL,
  KEY `usuario` (`usuario`),
  CONSTRAINT `mediascadastradas_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mediascadastradas`
--

LOCK TABLES `mediascadastradas` WRITE;
/*!40000 ALTER TABLE `mediascadastradas` DISABLE KEYS */;
/*!40000 ALTER TABLE `mediascadastradas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `turmadoaluno`
--

DROP TABLE IF EXISTS `turmadoaluno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `turmadoaluno` (
  `codigoTurma` int(11) DEFAULT NULL,
  `codigoAluno` int(11) DEFAULT NULL,
  KEY `codigoTurma` (`codigoTurma`),
  KEY `codigoAluno` (`codigoAluno`),
  CONSTRAINT `turmadoaluno_ibfk_1` FOREIGN KEY (`codigoTurma`) REFERENCES `turmas` (`codigoTurma`),
  CONSTRAINT `turmadoaluno_ibfk_2` FOREIGN KEY (`codigoAluno`) REFERENCES `alunos` (`codigoAluno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `turmadoaluno`
--

LOCK TABLES `turmadoaluno` WRITE;
/*!40000 ALTER TABLE `turmadoaluno` DISABLE KEYS */;
/*!40000 ALTER TABLE `turmadoaluno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `turmas`
--

DROP TABLE IF EXISTS `turmas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `turmas` (
  `nomeTurma` varchar(50) DEFAULT NULL,
  `qtdAlunos` int(11) DEFAULT NULL,
  `codigoTurma` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`codigoTurma`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `turmas`
--

LOCK TABLES `turmas` WRITE;
/*!40000 ALTER TABLE `turmas` DISABLE KEYS */;
INSERT INTO `turmas` VALUES ('602',28,3),('611',30,4),('511',20,5);
/*!40000 ALTER TABLE `turmas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `turmasdousuario`
--

DROP TABLE IF EXISTS `turmasdousuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `turmasdousuario` (
  `usuario` varchar(40) DEFAULT NULL,
  `codigoTurma` int(11) DEFAULT NULL,
  `nomeTurma` varchar(50) DEFAULT NULL,
  KEY `usuario` (`usuario`),
  KEY `codigoTurma` (`codigoTurma`),
  CONSTRAINT `turmasdousuario_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`),
  CONSTRAINT `turmasdousuario_ibfk_2` FOREIGN KEY (`codigoTurma`) REFERENCES `turmas` (`codigoTurma`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `turmasdousuario`
--

LOCK TABLES `turmasdousuario` WRITE;
/*!40000 ALTER TABLE `turmasdousuario` DISABLE KEYS */;
INSERT INTO `turmasdousuario` VALUES ('Joao_C',3,NULL),('Joao_C',4,NULL),('Joao_C',5,NULL);
/*!40000 ALTER TABLE `turmasdousuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `usuario` varchar(40) NOT NULL DEFAULT '',
  `usuarioNome` varchar(30) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('Joao_C','Joao Victor','827ccb0eea8a706c4c34a16891f84e7b'),('Paulo_V','Paulo Nogueira','827ccb0eea8a706c4c34a16891f84e7b');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-06 11:52:57
