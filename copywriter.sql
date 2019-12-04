-- MySQL dump 10.13  Distrib 5.7.27, for osx10.14 (x86_64)
--
-- Host: localhost    Database: copywriter
-- ------------------------------------------------------
-- Server version	5.7.27

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
INSERT INTO `migration_versions` VALUES ('20191204102854','2019-12-04 13:26:27');
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
  `paragraph` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `presentation`
--

LOCK TABLES `presentation` WRITE;
/*!40000 ALTER TABLE `presentation` DISABLE KEYS */;
INSERT INTO `presentation` VALUES (1,'WHO AM I','Lorem ipsum dolor sit amet, consectetur adipiscing elit. ','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacus felis, bibendum ut ultricies vel, fermentum non eros. Aliquam aliquet commodo sem, et laoreet ipsum pretium in. Donec laoreet dui in felis viverra aliquam. Fusce facilisis ultrices est, ac tristique lacus ultrices in. Aliquam a justo vitae felis congue finibus eget ac risus. Donec vitae tempor est. Vivamus nec blandit tortor. Donec sodales interdum ex, id convallis lectus condimentum id. Proin placerat ipsum at placerat suscipit. Curabitur euismod pellentesque purus sed fermentum. Ut elementum et ipsum sed vulputate. Fusce sollicitudin ultricies lorem, ac consequat ex iaculis auctor. Nullam neque felis, sollicitudin vel porta at, suscipit quis purus. Pellentesque efficitur felis lectus, nec commodo diam elementum quis. Aliquam aliquam quam ut sagittis faucibus. '),(2,'','','Nam aliquet sapien tempus vehicula dignissim. Praesent vel aliquam ipsum. Proin porttitor varius euismod. Etiam et elementum nisl. Vestibulum mattis sodales ullamcorper. Cras sodales a purus quis maximus. Morbi ipsum massa, aliquam eget commodo congue, ultrices quis mauris. Duis nec dui ullamcorper dolor feugiat suscipit. Donec blandit ante enim, vel facilisis est interdum vitae. Donec in suscipit turpis. Vestibulum cursus, magna non posuere tincidunt, diam sem aliquet felis, a lobortis mi mauris dapibus ex. Praesent at luctus leo, vestibulum ultrices ipsum. Morbi commodo aliquam quam, in laoreet ante consequat vitae. Nullam augue felis, suscipit sit amet nisl non, iaculis pulvinar ligula. Proin ac lorem faucibus mi cursus malesuada. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. '),(3,'','','Aliquam erat volutpat. Morbi vitae lectus interdum, tempor nibh sit amet, mollis lorem. Phasellus condimentum imperdiet leo, vel malesuada erat dapibus eu. Curabitur eget ligula eget ex accumsan facilisis. Vestibulum et auctor dui, eu finibus enim. In tempor est at libero interdum semper. Etiam ac elit sem. Vivamus mollis vitae velit quis varius. Nam ornare nibh ut sem egestas pretium. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec consequat libero vitae consectetur sollicitudin. Phasellus pellentesque finibus mi quis aliquam. Nunc mollis nulla turpis, vitae suscipit justo hendrerit eget. Nulla eget mauris sed erat elementum placerat ac a velit. ');
/*!40000 ALTER TABLE `presentation` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-04 14:48:27
