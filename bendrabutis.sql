-- MySQL dump 10.13  Distrib 5.5.40, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: bendrabutis
-- ------------------------------------------------------
-- Server version	5.5.40-0ubuntu0.14.04.1

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
-- Table structure for table `apartments`
--

DROP TABLE IF EXISTS `apartments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `apartments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nr` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apartments`
--

LOCK TABLES `apartments` WRITE;
/*!40000 ALTER TABLE `apartments` DISABLE KEYS */;
INSERT INTO `apartments` VALUES (1,101,2,'2014-12-08 06:41:08','2014-12-08 06:41:08'),(2,102,2,'2014-12-08 06:41:11','2014-12-08 06:41:11'),(3,103,2,'2014-12-08 06:41:14','2014-12-08 06:41:14'),(4,104,2,'2014-12-08 06:41:17','2014-12-08 06:41:17'),(5,105,2,'2014-12-08 06:41:24','2014-12-08 06:41:24'),(6,106,2,'2014-12-08 06:41:26','2014-12-08 06:41:26'),(7,107,2,'2014-12-08 06:41:29','2014-12-08 06:41:29'),(8,108,2,'2014-12-08 06:41:31','2014-12-08 06:41:31'),(9,109,2,'2014-12-08 06:41:33','2014-12-08 06:41:33'),(10,110,2,'2014-12-08 06:41:37','2014-12-08 06:41:37'),(11,201,3,'2014-12-08 06:41:50','2014-12-08 06:41:50'),(12,202,3,'2014-12-08 06:41:54','2014-12-08 06:41:54'),(13,203,3,'2014-12-08 06:41:59','2014-12-08 06:41:59'),(14,204,3,'2014-12-08 06:42:01','2014-12-08 06:42:01'),(15,205,3,'2014-12-08 06:42:05','2014-12-08 06:42:05'),(16,206,3,'2014-12-08 06:42:08','2014-12-08 06:42:08'),(17,207,3,'2014-12-08 06:42:13','2014-12-08 06:42:13'),(18,208,3,'2014-12-08 06:42:15','2014-12-08 06:42:15'),(19,209,3,'2014-12-08 06:42:18','2014-12-08 06:42:18'),(20,210,3,'2014-12-08 06:42:21','2014-12-08 06:42:21'),(21,301,4,'2014-12-08 06:42:25','2014-12-08 06:42:25'),(22,302,4,'2014-12-08 06:42:28','2014-12-08 06:42:28'),(23,303,4,'2014-12-08 06:42:30','2014-12-08 06:42:30'),(24,304,4,'2014-12-08 06:42:33','2014-12-08 06:42:33'),(25,305,4,'2014-12-08 06:42:37','2014-12-08 06:42:37'),(26,306,4,'2014-12-08 06:42:52','2014-12-08 06:42:52'),(27,307,4,'2014-12-08 06:42:54','2014-12-08 06:42:54'),(28,308,4,'2014-12-08 06:42:57','2014-12-08 06:42:57'),(29,309,4,'2014-12-08 06:42:59','2014-12-08 06:42:59'),(30,310,4,'2014-12-08 06:43:02','2014-12-08 06:43:02'),(31,999,3,'2014-12-10 11:37:04','2014-12-10 11:37:04');
/*!40000 ALTER TABLE `apartments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_text` text COLLATE utf8_unicode_ci NOT NULL,
  `long_text` text COLLATE utf8_unicode_ci NOT NULL,
  `published_on` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'Kaledinis','KTU bendrabučių gyventojai kviečiami dalyvauti „Originaliausios idėjos“ konkurse, kurio metu bus renkama geriausia bendrabučio Kalėdų idėja būsimai akcijai. Iš studentų laukiama pasiūlymų, kaip sukurti nepakartojamą kalėdinę atmosferą bendrabutyje.','KTU bendrabučių gyventojai kviečiami dalyvauti „Originaliausios idėjos“ konkurse, kurio metu bus renkama geriausia bendrabučio Kalėdų idėja būsimai akcijai. Iš studentų laukiama pasiūlymų, kaip sukurti nepakartojamą kalėdinę atmosferą bendrabutyje.\r\n\r\nGeriausios idėjos – filmuko, papuošimo, nuotraukos, instaliacijos, vaidinimo ir pan. – autorius bus apdovanotas prizu. Mintis, idėjas ir pasiūlymus iki gruodžio 3 d. Reikia siųsti el. paštu: bendrabuciai@ktu.lt\r\n\r\nPernai šventiniu laikotarpiu buvo organizuota akcija „Išgelbėk Kalėdas bendrabutyje“. Studentai iš karto labai aktyviai įsitraukė į akciją, o jos metu sukurta Kalėdų nuotaika ilgam sušildė ir išliko visos Universiteto bendrabučių bendruomenės atmintyje.\r\n\r\nIš paskirto prizinio fondo kiekvienas bendrabučio bendruomenė, pagal savo poreikius, įsigijo buities bei laisvalaikio prekių, kurios ne tik pagerino studentų kasdienybę, bet ir turi išliekamąją verte bei bus naudingos busimiems gyventojams.\r\n\r\nSiekiant paskatinti tokį studentų veiklumą, atsakingumą ir savivaldą, šiais metais taip pat planuojama skirti prizinį fondą.','2014-12-08 09:35:56','2014-12-08 09:35:56','2014-12-10 11:34:37'),(2,'Šiuo metu KTU bendrabučiuose vyksta intensyvūs darbai','Šiuo metu KTU bendrabučiuose vyksta intensyvūs darbai – keičiamos lovos, perkami nauji stalai, tvarkomi dušai, keičiami skalbimo ir džiovinimo įrengimai.','Šiuo metu KTU bendrabučiuose vyksta intensyvūs darbai – keičiamos lovos, perkami nauji stalai, tvarkomi dušai, keičiami skalbimo ir džiovinimo įrengimai.\r\n\r\nNorėdami pagerinti gyvenimo, poilsio ir mokymosi sąlygas, bendrabučiuose šiais metais vyko ir vis dar vyksta atsinaujinimo procesai.\r\n\r\nDar visai neseniai pranešėme, kad  10 bendrabutyje buvo pradėtas kapitalinis dušų remontas. Dabar norime informuoti apie atnaujinamus baldus. Dar šiais metais 11 bendrabutyje bus pakeistos lovos, o 14 bendrabutyje bus keičiami stalai. Kitais metais planuojama atnaujinti nusidėvėjusią skalbimo ir džiovinimo įrangą visuose bendrabučiuose\r\n\r\nPrisiminus, kas  visai neseniai buvo atlikta kituose bendrabučiuose gerinant sąlygas, galėtume pasidžiaugti, kad  13 bendrabutyje buvo pakeistos visos dujinės viryklės; 16 bendrabutyje atliktas vandentiekio vamzdyno remontas; 5 bendrabutyje pradėjo veikti bevielis internetas ir pakeista apšvietimo sistema kambariuose;  daugumoje  bendrabučių buvo renovuotas bendrųjų patalpų apšvietimas, taip pat pagerinta dviračių infrastruktūra - įrengiant dviračių stovus prie bendrabučių  ir saugojimo patalpose; prie 2 ir 3 bendrabučių atsirado naujos rekreacinės zonos studentams su kepsninėmis, suoliukais ir hamakais.\r\n\r\nKTU  bendrabučiai naujus metus pasitiks su puikiomis nuotaikomis ir atsinaujinę. ','2014-12-08 09:37:41','2014-12-08 09:37:41','2014-12-08 09:37:41'),(3,'Atsinaujino „RollBox“, įsikūręs KTU 11 bendrabutyje','Studentų susibūrimo vieta tapusi kavinė atsinaujino ne tik interjerą, tačiau siūlo ir labai įvairų meniu, kuris patenkins  ne vieno lankytojo skonį.\r\n','Studentų susibūrimo vieta tapusi kavinė atsinaujino ne tik interjerą, tačiau siūlo ir labai įvairų meniu, kuris patenkins  ne vieno lankytojo skonį.\r\n\r\n„RollBox“, dirbanti pirmadieniais – šeštadieniais, nuo 10.00 – 22.00 valandos, lankytojams siūlo ne tik meksikietiškas tortilijas, mėsainius, itališkus panini sumuštinius, bet ir dienos pietus, tik už 7 Lt. Taip pat, lankytojai turi galimybę užsisakyti maistą ir išsinešimui.\r\n\r\nDaugiau informacijos rasiti „RollBox“ socialiniame tinkle. ','2014-12-08 09:39:03','2014-12-08 09:39:03','2014-12-08 09:39:03'),(4,'asdasd','dasdasd','asasdasd','2014-12-10 11:34:48','2014-12-10 11:34:48','2014-12-10 11:34:48');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `complaint_responses`
--

DROP TABLE IF EXISTS `complaint_responses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `complaint_responses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `complaint_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `complaint_responses_complaint_id_foreign` (`complaint_id`),
  KEY `complaint_responses_user_id_foreign` (`user_id`),
  CONSTRAINT `complaint_responses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `complaint_responses_complaint_id_foreign` FOREIGN KEY (`complaint_id`) REFERENCES `complaints` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complaint_responses`
--

LOCK TABLES `complaint_responses` WRITE;
/*!40000 ALTER TABLE `complaint_responses` DISABLE KEYS */;
INSERT INTO `complaint_responses` VALUES (1,2,3,'Į jūsų problemą bus atsižvelgta','2014-12-10 07:09:19','2014-12-10 07:09:19'),(2,1,3,'Tuoj bus','2014-12-10 11:54:39','2014-12-10 11:54:39'),(3,1,3,'mdfaioesghtws','2014-12-10 11:54:56','2014-12-10 11:54:56'),(4,2,3,'rehyser','2014-12-10 11:55:08','2014-12-10 11:55:08');
/*!40000 ALTER TABLE `complaint_responses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `complaints`
--

DROP TABLE IF EXISTS `complaints`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `complaints` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `complaints_user_id_foreign` (`user_id`),
  CONSTRAINT `complaints_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complaints`
--

LOCK TABLES `complaints` WRITE;
/*!40000 ALTER TABLE `complaints` DISABLE KEYS */;
INSERT INTO `complaints` VALUES (1,14,'Nera vandens!','2014-12-09 06:09:10','2014-12-09 06:09:10'),(2,14,'Šūdas ne sistema. Niekas neveikia','2014-12-09 06:10:11','2014-12-09 06:10:11'),(3,14,'kshfkjhsjf','2014-12-10 12:02:22','2014-12-10 12:02:22'),(4,2,'leidzia kranas','2014-12-10 18:27:22','2014-12-10 18:27:22');
/*!40000 ALTER TABLE `complaints` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Aldona','Krivonienė','Administratorė','3bendrabutis@ktu.lt','(8 696) 34931','2014-12-03 15:19:33','2014-12-03 15:19:33'),(2,'Onutė','Mecelienė','Budėtoja',NULL,'(8 693) 39459','2014-12-03 15:19:33','2014-12-03 15:19:33'),(3,'Danguolė','Tverskienė','Budėtoja',NULL,NULL,'2014-12-03 15:19:33','2014-12-03 15:19:33'),(4,'Regina','Stankevičienė','Budėtoja',NULL,NULL,'2014-12-03 15:19:33','2014-12-03 15:19:33'),(5,'Ritonė','Žemeckienė','Budėtoja',NULL,NULL,'2014-12-03 15:19:33','2014-12-03 15:19:33'),(6,'Genė','Muliuolienė','Budėtoja',NULL,NULL,'2014-12-03 15:19:33','2014-12-03 15:19:33'),(7,'Jonas','Janušauskas','Ūkio darbininkas',NULL,NULL,'2014-12-03 15:19:33','2014-12-03 15:19:33');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipment`
--

DROP TABLE IF EXISTS `equipment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `room_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL,
  `from_min` int(11) NOT NULL,
  `to_min` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `equipment_room_id_foreign` (`room_id`),
  CONSTRAINT `equipment_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipment`
--

LOCK TABLES `equipment` WRITE;
/*!40000 ALTER TABLE `equipment` DISABLE KEYS */;
INSERT INTO `equipment` VALUES (1,31,'Skalbyklė 1',1,480,1260,90,'2014-12-08 06:45:52','2014-12-08 06:45:52'),(2,31,'Skalbyklė 2',1,480,1260,90,'2014-12-08 06:46:14','2014-12-08 06:46:14'),(3,31,'Skalbyklė 3',1,480,1260,90,'2014-12-08 06:46:24','2014-12-08 06:46:24'),(4,31,'Skalbyklė 4',1,480,1260,90,'2014-12-08 06:46:42','2014-12-08 06:46:42'),(5,31,'Skalbyklė 5',1,480,1260,90,'2014-12-08 06:47:01','2014-12-08 06:47:01'),(6,31,'Džiovyklė 1',1,480,1260,120,'2014-12-08 06:47:15','2014-12-08 06:47:15'),(7,31,'Džiovyklė 2',1,480,1260,120,'2014-12-08 06:47:28','2014-12-08 06:47:28'),(8,31,'Džiovyklė 3',1,480,1260,120,'2014-12-08 06:47:39','2014-12-08 06:47:39'),(9,31,'Džiovyklė 4',1,480,1260,120,'2014-12-08 06:47:49','2014-12-08 06:47:49'),(10,31,'Džiovyklė 5',1,480,1260,120,'2014-12-08 06:48:01','2014-12-08 06:48:01'),(11,33,'Teniso stalas 1',2,480,1320,60,'2014-12-08 06:48:55','2014-12-08 06:48:55'),(12,33,'Teniso stalas 2',4,480,1320,60,'2014-12-08 06:49:05','2014-12-08 06:49:05'),(13,34,'Rūsys',10,480,1380,120,'2014-12-08 09:29:03','2014-12-08 09:29:19'),(14,35,'sadasdasd',2,480,1260,90,'2014-12-10 11:39:25','2014-12-10 11:39:25');
/*!40000 ALTER TABLE `equipment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guests`
--

DROP TABLE IF EXISTS `guests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_nr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `left_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `guests_user_id_foreign` (`user_id`),
  CONSTRAINT `guests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guests`
--

LOCK TABLES `guests` WRITE;
/*!40000 ALTER TABLE `guests` DISABLE KEYS */;
INSERT INTO `guests` VALUES (1,8,'Giedrė','Marcinkevičiūtė','21848512541968521','2014-12-08 09:40:48','2014-12-08 09:40:48',NULL),(2,16,'edgs','segswg','2548948961512','2014-12-10 11:52:15','2014-12-10 11:52:24','2014-12-10 11:52:24');
/*!40000 ALTER TABLE `guests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'/home/bendrabutis/is/app/storage/upload/images/2bzdWazOvZN7WMaj','Štai kaip gerai maitinasi bendrabučio gyventojai.','2014-12-08 07:00:25','2014-12-08 07:00:25'),(2,'/home/bendrabutis/is/app/storage/upload/images/ST4IjIdtyrVbVDEm','Bendrabučio pirmakursių krikštynos','2014-12-08 07:03:51','2014-12-08 07:03:51'),(3,'/home/bendrabutis/is/app/storage/upload/images/1jjKBjcfFMMFynAB','Bendrabučio pirmakursių krikštynos','2014-12-08 07:05:16','2014-12-08 07:05:16'),(4,'/home/bendrabutis/is/app/storage/upload/images/cxSFcg7DF2nl04RI','Bendrabučio pirmakursių krikštynos','2014-12-08 07:05:21','2014-12-08 07:05:21'),(5,'/home/bendrabutis/is/app/storage/upload/images/GFn2JMP3b63VVanR','Bendrabučio pirmakursių krikštynos. Svajūnas','2014-12-08 07:05:29','2014-12-08 07:05:29'),(6,'/home/bendrabutis/is/app/storage/upload/images/PRdENDaQqIInbAK5','Bendrabučio kambarys','2014-12-08 07:08:08','2014-12-08 09:26:18'),(7,'/home/bendrabutis/is/app/storage/upload/images/niU5XDl5bXsy0MWM','Skalbykla','2014-12-10 09:07:12','2014-12-10 09:07:12'),(8,'/home/bendrabutis/is/app/storage/upload/images/ycgarStt0BGwJD2N','Bendrabutis iš išorės','2014-12-10 09:07:26','2014-12-10 09:07:26'),(9,'/home/bendrabutis/is/app/storage/upload/images/t7mYmW1SzHp5KTPd','Sporto salė','2014-12-10 10:58:22','2014-12-10 10:58:22'),(10,'/home/bendrabutis/is/app/storage/upload/images/aDm7MozjH1C8ufbt','dfsdfsdfsdf','2014-12-10 11:36:20','2014-12-10 11:36:20');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `key_issues`
--

DROP TABLE IF EXISTS `key_issues`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `key_issues` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `key_id` int(10) unsigned NOT NULL,
  `issued_at` timestamp NULL DEFAULT NULL,
  `returned_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `key_issues_user_id_foreign` (`user_id`),
  KEY `key_issues_key_id_foreign` (`key_id`),
  CONSTRAINT `key_issues_key_id_foreign` FOREIGN KEY (`key_id`) REFERENCES `keys` (`id`),
  CONSTRAINT `key_issues_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `key_issues`
--

LOCK TABLES `key_issues` WRITE;
/*!40000 ALTER TABLE `key_issues` DISABLE KEYS */;
INSERT INTO `key_issues` VALUES (1,10,13,'2014-12-08 15:36:27','2014-12-08 15:36:37','2014-12-08 15:36:27','2014-12-08 15:36:37'),(2,8,15,'2014-12-10 07:09:44',NULL,'2014-12-10 07:09:44','2014-12-10 07:09:44'),(3,7,29,'2014-12-10 07:09:52',NULL,'2014-12-10 07:09:52','2014-12-10 07:09:52'),(4,16,33,'2014-12-10 11:55:50','2014-12-10 11:56:03','2014-12-10 11:55:50','2014-12-10 11:56:03');
/*!40000 ALTER TABLE `key_issues` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `keys`
--

DROP TABLE IF EXISTS `keys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `keys` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `room_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `keys_room_id_foreign` (`room_id`),
  CONSTRAINT `keys_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keys`
--

LOCK TABLES `keys` WRITE;
/*!40000 ALTER TABLE `keys` DISABLE KEYS */;
INSERT INTO `keys` VALUES (2,31,'2014-12-08 09:26:48','2014-12-08 09:26:48'),(3,31,'2014-12-08 09:26:49','2014-12-08 09:26:49'),(4,31,'2014-12-08 09:26:50','2014-12-08 09:26:50'),(5,31,'2014-12-08 09:26:51','2014-12-08 09:26:51'),(6,31,'2014-12-08 09:26:53','2014-12-08 09:26:53'),(7,31,'2014-12-08 09:26:54','2014-12-08 09:26:54'),(8,31,'2014-12-08 09:26:55','2014-12-08 09:26:55'),(9,31,'2014-12-08 09:26:55','2014-12-08 09:26:55'),(10,31,'2014-12-08 09:26:56','2014-12-08 09:26:56'),(11,31,'2014-12-08 09:26:57','2014-12-08 09:26:57'),(12,32,'2014-12-08 09:27:21','2014-12-08 09:27:21'),(13,32,'2014-12-08 09:27:23','2014-12-08 09:27:23'),(14,32,'2014-12-08 09:27:24','2014-12-08 09:27:24'),(15,32,'2014-12-08 09:27:25','2014-12-08 09:27:25'),(16,32,'2014-12-08 09:27:26','2014-12-08 09:27:26'),(17,32,'2014-12-08 09:27:27','2014-12-08 09:27:27'),(18,33,'2014-12-08 09:27:35','2014-12-08 09:27:35'),(19,33,'2014-12-08 09:27:36','2014-12-08 09:27:36'),(20,33,'2014-12-08 09:27:36','2014-12-08 09:27:36'),(21,33,'2014-12-08 09:27:37','2014-12-08 09:27:37'),(22,34,'2014-12-08 09:27:45','2014-12-08 09:27:45'),(23,34,'2014-12-08 09:27:46','2014-12-08 09:27:46'),(24,34,'2014-12-08 09:27:46','2014-12-08 09:27:46'),(25,34,'2014-12-08 09:27:47','2014-12-08 09:27:47'),(26,34,'2014-12-08 09:27:47','2014-12-08 09:27:47'),(27,34,'2014-12-08 09:27:49','2014-12-08 09:27:49'),(28,34,'2014-12-08 09:27:51','2014-12-08 09:27:51'),(29,34,'2014-12-08 09:27:51','2014-12-08 09:27:51'),(30,34,'2014-12-08 09:27:52','2014-12-08 09:27:52'),(31,34,'2014-12-08 09:27:53','2014-12-08 09:27:53'),(32,35,'2014-12-10 11:39:36','2014-12-10 11:39:36'),(33,35,'2014-12-10 11:39:42','2014-12-10 11:39:42');
/*!40000 ALTER TABLE `keys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `inbox_deleted_at` timestamp NULL DEFAULT NULL,
  `outbox_deleted_at` timestamp NULL DEFAULT NULL,
  `viewed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `messages_user_id_foreign` (`user_id`),
  CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,14,'Netvarka','Jusu kambaryje nesvaru.',NULL,NULL,'2014-12-10 10:48:58','2014-12-10 10:48:46','2014-12-10 10:48:58'),(2,16,'dfsdf','sdfsdfsdfsdfsdfsf',NULL,NULL,'2014-12-10 11:42:56','2014-12-10 11:41:36','2014-12-10 11:42:56');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_11_30_120258_create_apartments_table',1),('2014_11_30_120431_create_users_table',1),('2014_11_30_120531_create_registrations_table',1),('2014_11_30_125740_create_articles_table',1),('2014_11_30_135716_create_penalties_table',1),('2014_11_30_143431_create_messages_table',1),('2014_11_30_152920_create_contacts_table',1),('2014_11_30_182208_create_guests_table',1),('2014_11_30_190415_create_trashes_table',1),('2014_11_30_193450_create_complaints_table',1),('2014_11_30_212349_create_complaint_responses_table',1),('2014_11_30_222426_create_rooms_table',1),('2014_11_30_231005_create_equipments_table',1),('2014_11_30_234152_create_keys_table',1),('2014_12_01_003400_create_reservations_table',1),('2014_12_01_005847_create_key_issues_table',1),('2014_12_03_062726_create_images_table',1),('2014_12_09_223049_update_guests_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penalties`
--

DROP TABLE IF EXISTS `penalties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penalties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `reason` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `penalties_user_id_foreign` (`user_id`),
  CONSTRAINT `penalties_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penalties`
--

LOCK TABLES `penalties` WRITE;
/*!40000 ALTER TABLE `penalties` DISABLE KEYS */;
INSERT INTO `penalties` VALUES (1,16,'Blogas vaikas','2014-12-10 11:40:06','2014-12-10 11:40:06'),(2,16,'dadasdasd','2014-12-10 11:40:13','2014-12-10 11:40:13');
/*!40000 ALTER TABLE `penalties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registrations`
--

DROP TABLE IF EXISTS `registrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `apartment_id` int(10) unsigned DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `registrations_apartment_id_foreign` (`apartment_id`),
  CONSTRAINT `registrations_apartment_id_foreign` FOREIGN KEY (`apartment_id`) REFERENCES `apartments` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registrations`
--

LOCK TABLES `registrations` WRITE;
/*!40000 ALTER TABLE `registrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `registrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `equipment_id` int(10) unsigned NOT NULL,
  `reserved_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `reservations_user_id_foreign` (`user_id`),
  KEY `reservations_equipment_id_foreign` (`equipment_id`),
  CONSTRAINT `reservations_equipment_id_foreign` FOREIGN KEY (`equipment_id`) REFERENCES `equipment` (`id`),
  CONSTRAINT `reservations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
INSERT INTO `reservations` VALUES (1,14,11,'2014-12-17 09:00:00','2014-12-10 11:07:01','2014-12-10 11:07:01'),(2,14,11,'2014-12-17 10:00:00','2014-12-10 11:07:03','2014-12-10 11:07:03'),(3,14,11,'2014-12-17 11:00:00','2014-12-10 11:07:05','2014-12-10 11:07:05'),(4,2,4,'2014-12-11 08:30:00','2014-12-10 11:07:34','2014-12-10 11:07:34'),(5,14,5,'2014-12-11 07:00:00','2014-12-10 11:07:36','2014-12-10 11:07:36'),(6,14,5,'2014-12-11 08:30:00','2014-12-10 11:07:37','2014-12-10 11:07:37'),(7,2,9,'2014-12-11 10:00:00','2014-12-10 11:07:47','2014-12-10 11:07:47'),(8,14,1,'2014-12-11 07:00:00','2014-12-10 11:08:11','2014-12-10 11:08:11'),(9,14,11,'2014-12-11 06:00:00','2014-12-10 11:08:15','2014-12-10 11:08:15'),(10,14,11,'2014-12-11 07:00:00','2014-12-10 11:08:44','2014-12-10 11:08:44'),(11,2,11,'2014-12-11 08:00:00','2014-12-10 11:08:45','2014-12-10 11:08:45'),(12,14,11,'2014-12-11 09:00:00','2014-12-10 12:00:50','2014-12-10 12:00:50'),(13,14,11,'2014-12-11 10:00:00','2014-12-10 12:01:12','2014-12-10 12:01:12');
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rooms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES (31,'Skalbykla',10,'2014-12-08 06:43:28','2014-12-08 06:43:28'),(32,'Sporto salė',6,'2014-12-08 06:43:47','2014-12-08 06:43:47'),(33,'Stalo teniso salė',2,'2014-12-08 06:43:57','2014-12-08 06:43:57'),(34,'Pramogų salė',1,'2014-12-08 06:44:25','2014-12-08 06:50:10'),(35,'sadasd',1,'2014-12-10 11:38:35','2014-12-10 11:38:35');
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trashes`
--

DROP TABLE IF EXISTS `trashes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trashes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `apartment_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `trashes_apartment_id_foreign` (`apartment_id`),
  CONSTRAINT `trashes_apartment_id_foreign` FOREIGN KEY (`apartment_id`) REFERENCES `apartments` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trashes`
--

LOCK TABLES `trashes` WRITE;
/*!40000 ALTER TABLE `trashes` DISABLE KEYS */;
INSERT INTO `trashes` VALUES (1,14,'2014-12-08 09:41:09','2014-12-08 09:41:09'),(2,31,'2014-12-10 11:53:42','2014-12-10 11:53:42');
/*!40000 ALTER TABLE `trashes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `apartment_id` int(10) unsigned DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `users_apartment_id_foreign` (`apartment_id`),
  CONSTRAINT `users_apartment_id_foreign` FOREIGN KEY (`apartment_id`) REFERENCES `apartments` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,NULL,'admin','$2y$10$eW1J/diZYgviebmkGJZ9cuHxpMdFxpCYvvAj6D3Czidf7IBo9AmXK','admin@gmail.com',NULL,NULL,'ltmujt8bEoY96rKRcL9jsMXVxz1LmTnbxS5eVxACKSotCNbn21aiwSP6UhYj',1,'2014-12-03 15:19:33','2014-12-10 15:45:42'),(2,18,'gerda.monkeviciute','$2y$10$5wYniAwrivE5IFA2X4BiWOnIvQaMp7S8f34p7cNsz9H1Bn83dydqa','gerda.monkeviciute@gmail.com','Gerda','Monkeviciute','49U730dnIWSizwCJ2tI1nk8RusNgmi3G0PN0vA5ywLjxoxjPhqiG1tw0lHQc',0,'2014-12-08 06:54:24','2014-12-10 11:20:14'),(3,NULL,'edita.markauskaite','$2y$10$.L66i5PAt0EHon/yFO/9wuq7UUgu6.EzCGNDRpJhGzTpVHpNFRMIm','edita.markauskaite@gmail.com','Edita','Markauskaitė','y7f3ESjHfYyFVfxC58vrjfof1YzgODlhztEn5RGkWa0e4RMS1tD8hquvNzIl',0,'2014-12-08 06:58:54','2014-12-10 15:46:40'),(4,7,'kazimieras.gipas','$2y$10$FTZfMFsKr7DlVTRJXh8gxOzJVbGrOaVZ6SJtwWcURfnYVketbL0pu','gipas.kazimieras@ktu.edu','Kazimieras','Gipas',NULL,0,'2014-12-08 09:34:32','2014-12-08 09:34:32'),(5,24,'lukas.maceina','$2y$10$GriYi5X2lD9ptb/eUpI7IuURTcwklCqsPjSHRfjaUoHoOQ7htcc1O','','Lukas','Maceina',NULL,0,'2014-12-08 09:34:46','2014-12-08 09:34:46'),(6,17,'dovydas.bespalovas','$2y$10$tQvRabsKYnTnalMHS/NKr.GhTS4RN3DlOXgPKaIWy0zAkGOtorcF.','','Dovydas','Bespalovas',NULL,0,'2014-12-08 09:34:55','2014-12-08 09:34:55'),(7,29,'laurynas.jurkenas','$2y$10$eYdBaYZP2ioFA35bJKQjh.a5zjHyoVpi1BubcGtKMUYvFzyzUWcQW','','Laurynas','Jurkėnas',NULL,0,'2014-12-08 09:35:00','2014-12-08 09:35:00'),(8,11,'arturas.cernauskas','$2y$10$t0OiafTZNW9NWsGv4YtCB.cGioqeWNlJeSqkEvna.jDX4LYudjV.2','','Artūras','Černauskas',NULL,0,'2014-12-08 09:35:03','2014-12-08 09:35:03'),(9,2,'modestas.silinas','$2y$10$VQ/Wyjs8So.NzG0Pqy1NyeZkpr6EglvX/pShvYdlBGRrbWDK9Z4m2','','Modestas','Silinas',NULL,0,'2014-12-08 09:35:06','2014-12-08 09:35:06'),(10,20,'vytautas.zygaitis','$2y$10$X0VoAz2D27AcMp.gdS.druEGeYM8hv6EBvmjDfdPs/3OSwzOLJvh.','','Vytautas','Žygaitis',NULL,0,'2014-12-08 09:35:08','2014-12-08 09:35:08'),(11,3,'tomas.kasparavicius','$2y$10$gLfNUmcJrZli41X6xexweuSZEhrPbalC9.aR5z82nTmOFTkYj29hi','tomas.kasparavicius@ktu.edu','Tomas','Kasparavičius',NULL,0,'2014-12-08 09:35:10','2014-12-08 09:35:10'),(12,19,'paulius.andriekus','$2y$10$dlBYU3B9DT.uJflAIiAAUuiTNRPcpQzGnt//tP7Ya9KW/Qyf9FE86','','Paulius','Andriekus',NULL,0,'2014-12-08 09:35:12','2014-12-08 09:35:12'),(13,24,'darius.butrimas','$2y$10$.uXmySJ5BPturIIVTGbBee8DIzR3JmCv277ne79pjmmWoTdu/kDqS','','Darius','Butrimas',NULL,0,'2014-12-08 09:35:15','2014-12-08 09:35:15'),(14,1,'martynas.stukas','$2y$10$/bcolcM88wPjNOVWpYzRKOY2N10SJL9G6ItGLB8eY7oQLv2MpKuTm','martsutk@gmail.com','Martynas','Stukas','5gwZveIXVrjiyyVOwpMLCb40FJpD4FF6GKHzw7CL7EyvCMKhNMB3ZQSpuzZY',0,'2014-12-09 06:06:39','2014-12-10 10:52:03'),(15,10,'sdf.vvsv','$2y$10$zfDsTNRUQ2N5XNcA6l5gHOUkISqekhp.eNn0FMyh9USVg5yP9JeUu','skdjfhkjds@gmail.com','sdf','vvsv','ITWSqC17G5MtfLk9aaPQQS2XBQH02YPo7jyult67GBp3Nqri7ibntCP1ESUS',0,'2014-12-10 11:20:45','2014-12-10 11:33:50'),(16,31,'asdasd.asdasd','$2y$10$E7JfroMjDrO2/nLU2iAOw.AzY8GqwvaMDLF6Ox11lvFyyjI9AWjSe','asdasd','asdasd','asdasd','2zjMwuX9x1CEd7mPODygG3BNiJQMbrrhAtY0bwFixlC4S9KKZ6jCfQUOVNpw',0,'2014-12-10 11:37:40','2014-12-10 11:43:11');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-11  9:58:59
