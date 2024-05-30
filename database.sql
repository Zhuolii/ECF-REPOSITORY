-- MySQL dump 10.13  Distrib 8.0.37, for Win64 (x86_64)
--
-- Host: localhost    Database: arcadia
-- ------------------------------------------------------
-- Server version	8.0.37

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `animal`
--

DROP TABLE IF EXISTS `animal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `animal` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) DEFAULT NULL,
  `race` varchar(30) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `avis_veterinaire_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `avis_veterinaire_id` (`avis_veterinaire_id`),
  CONSTRAINT `animal_ibfk_1` FOREIGN KEY (`avis_veterinaire_id`) REFERENCES `veterinaire` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animal`
--

LOCK TABLES `animal` WRITE;
/*!40000 ALTER TABLE `animal` DISABLE KEYS */;
INSERT INTO `animal` VALUES (1,'ZEB','ZEBRE','<img src=\"../image/animal/1280px-Zebras\" alt=\"\" class=\"rounded w-75\">','exemple description zeb',1),(2,'GIGI','GIRAFFE','<img src=\"../image/animal/giraffe-215901_1280.jpg\" alt=\"\" class=\"rounded w-75\">','exemple description gigi	',2),(3,'ELEFUN','ELEPHANT','<img src=\"../image/animal/1200px-African_Bush_Elephant_mud_bath.jpg\" alt=\"\" class=\"rounded w-75\">','exemple description elefun',3),(4,'CROCRO','CAIMAN','<img src=\"../image/animal/Caiman_yacare_head.jpg\" alt=\"\" class=\"rounded w-75\">','exemple description elefun',4),(5,'PARE','PARESSEUX','<img src=\"../image/animal/Paresseux-sloth-peru-maranon.jpg\" alt=\"\" class=\"rounded w-75\">','exemple description elefun',5),(6,'TAIGA','TIGRE','<img src=\"../image/animal/tiger-987684_1280.jpg\" alt=\"\" class=\"rounded w-75\">','exemple description elefun',6),(7,'WHITEBEAR','OURS','<img src=\"../image/animal/ours_polaire.jpg\" alt=\"\" class=\"rounded w-75\">','exemple description elefun',7),(8,'PINGUI','PINGOUIN','<img src=\"../image/animal/pingouin.jpg\" alt=\"\" class=\"rounded w-75\">','exemple description elefun',8),(9,'WOLFI','LOUP ARCTIQUE','<img src=\"../image/animal/loup_arctique.jpg\" alt=\"\" class=\"rounded w-75\">','exemple description elefun',9);
/*!40000 ALTER TABLE `animal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `habitat`
--

DROP TABLE IF EXISTS `habitat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `habitat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `animal_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `animal_id` (`animal_id`),
  CONSTRAINT `habitat_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `animal` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `habitat`
--

LOCK TABLES `habitat` WRITE;
/*!40000 ALTER TABLE `habitat` DISABLE KEYS */;
INSERT INTO `habitat` VALUES (1,'LA SAVANE','<img src=\"../image/animal/giraffe-215901_1280.jpg\" alt=\"\" class=\"rounded w-75\">','texte savane',1),(2,'LA JUNGLE','<img src=\"../image/animal/tiger-987684_1280.jpg\" alt=\"\" class=\"rounded w-75\">','texte jungle',2),(3,'LA TOUNDRA','<img src=\"../image/animal/ours polaire.jpg\" alt=\"\" class=\"rounded w-75\">','texte toundra',3);
/*!40000 ALTER TABLE `habitat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `veterinaire`
--

DROP TABLE IF EXISTS `veterinaire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `veterinaire` (
  `id` int NOT NULL AUTO_INCREMENT,
  `etat_animal` varchar(300) DEFAULT NULL,
  `nourriture_animal` varchar(300) DEFAULT NULL,
  `grammage_nourriture` varchar(20) DEFAULT NULL,
  `date_passage` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `veterinaire`
--

LOCK TABLES `veterinaire` WRITE;
/*!40000 ALTER TABLE `veterinaire` DISABLE KEYS */;
INSERT INTO `veterinaire` VALUES (1,'BONNE SANTE','POISSON','100g','2026-05-24'),(2,'BONNE SANTE','SALADE','200g','2026-05-25'),(3,'BONNE SANTE','BANANE','500g','2026-05-26'),(4,'BONNE SANTE','VIANDE',NULL,NULL),(5,'BONNE SANTE',NULL,NULL,NULL),(6,'BONNE SANTE',NULL,NULL,NULL),(7,'BONNE SANTE',NULL,NULL,NULL),(8,'BONNE SANTE',NULL,NULL,NULL),(9,'BONNE SANTE',NULL,NULL,NULL),(10,'BONNE SANTE',NULL,NULL,NULL);
/*!40000 ALTER TABLE `veterinaire` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-30 16:53:55
