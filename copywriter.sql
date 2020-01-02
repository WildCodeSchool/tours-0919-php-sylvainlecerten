-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: localhost    Database: copywriter
-- ------------------------------------------------------
-- Server version	5.7.28-0ubuntu0.18.04.4

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
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordering` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (1,'title','Qui c\'est ce mec ?','whoami',10),(2,'subtitle','Qui est donc ce French Copywriter dont tout le monde parle mais que personne ne connaît vraiment ?','whoami',20),(3,'paragraph','Est-ce vraiment un mec?','whoami',30),(5,'paragraph','Il semblerait que oui.','whoami',40),(6,'paragraph','Tout ce que nous savons sur lui, c’est qu’il est Français.','whoami',50),(7,'paragraph','Et qu’il propose sa plume au plus offrant.','whoami',60),(9,'paragraph','Mais qui se cache derrière ce masque et ce pseudonyme ?','whoami',70),(15,'paragraph','Désolé.','whoami',80),(16,'paragraph','Je ne vous dirai pas qui je suis.','whoami',90),(17,'paragraph','Éventuellement, je pourrais dévoiler ce que je peux faire – pour vous !','whoami',100),(18,'paragraph','Ça vous va ?','whoami',110),(19,'paragraph','C’est parti.','whoami',120),(20,'title','Je suis né écrivain.','presentation',10),(21,'subtitle','Le premier mot qui est sorti de ma bouche fut “bibliothèque”.','presentation',20),(22,'paragraph','J’ai appris à lire avant de savoir parler.','presentation',30),(23,'paragraph','J’ai appris à écrire avant de commencer à marcher.','presentation',40),(24,'paragraph','J’ai appris à taper au clavier avant de savoir me servir de ma fourchette.','presentation',50),(25,'paragraph','Et tout ce que je vous dit est vrai.','presentation',60),(26,'paragraph','Plus sérieusement, peu importe ce que j’écris, fiction ou pas.','presentation',70),(27,'paragraph','Quel que soit le sujet, quel que soit votre objectif, ma mission est de trouver les bons mots.','presentation',80),(28,'paragraph','On peut dire que j’aime jongler.','presentation',90),(29,'paragraph','Mais avec des mots plutôt qu’avec des balles.','presentation',100),(30,'paragraph','Et parce que j’adore manier les mots, j’ai décidé d’en faire mon métier.','presentation',110),(31,'paragraph','C’est quand même mieux quand on aime ce qu’on fait, n’est-ce pas ?','presentation',120);
/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration_versions`
--

LOCK TABLES `migration_versions` WRITE;
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;
INSERT INTO `migration_versions` VALUES ('20191204102854','2019-12-04 13:26:27'),('20191217160803','2019-12-17 16:09:24');
/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `presentation`
--

DROP TABLE IF EXISTS `presentation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `presentation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paragraph` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `presentation`
--

LOCK TABLES `presentation` WRITE;
/*!40000 ALTER TABLE `presentation` DISABLE KEYS */;
INSERT INTO `presentation` VALUES (1,'Qui c\'est ce mec ?','Qui est donc ce French Copywriter dont tout le monde parle mais que personne ne connaît vraiment ?','Est-ce vraiment un mec ?'),(2,'','',' Il semblerait que oui.'),(3,'','','Tout ce que nous savons de lui, c\'est qu\'il est Français.'),(4,'','','Et qu\'il propose sa plume au plus offrant.'),(5,'','','Mais qui se cache derrière ce masque et ce pseudonyme ?'),(6,'','','Désolé'),(7,'','','Je ne vous dirai pas qui je suis.'),(8,'','','Éventuellement, je pourrais dévoiler ce que je peux faire - pour vous !'),(9,'','','Ça vous va ?'),(10,'Je suis né écrivain','Le premier mot qui est sorti de ma bouche fut \"bibliothèque\"','J\'ai appris à lire avant de savoir parler..'),(11,'','','J\'ai appris à écrire avant de commencer à marcher.'),(12,'','','J\'ai appris à taper au clavier avant de savoir me servir de ma fourchette.'),(13,'','','Et tout ce que je vous dit est vrai.'),(14,'','','Plus sérieusement, peu importe ce que j\'écris, fiction ou pas.'),(15,'','','Quel que soit le sujet, quel que soit votre objectif, ma mission est de trouver les bons mots.'),(16,'','','On peut dire que j\'aime jongler.'),(17,'','','Mais avec des mots plutôt qu\'avec des balles.'),(18,'','','Et parce que j\'adore manier les mots, j\'ai décidé d\'en faire mon métier.'),(19,'','','C\'est quand même mieux quand on aime ce qu\'on fait, n\'est-ce pas ?'),(21,NULL,NULL,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel mollis dolor. Maecenas pharetra, eros non suscipit viverra, nibh urna tincidunt elit, non dignissim turpis sapien ac mi. Suspendisse elementum sem a ullamcorper venenatis. Fusce non risus mauris. Aenean non turpis volutpat, convallis nunc eget, varius urna. Nulla molestie sagittis dui quis viverra. Donec sit amet vestibulum felis.');
/*!40000 ALTER TABLE `presentation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
/*!40000 ALTER TABLE `service` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-02  9:42:10
