CREATE DATABASE  IF NOT EXISTS `ledenadministratiev3` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `ledenadministratiev3`;
-- MySQL dump 10.13  Distrib 8.0.27, for macos11 (x86_64)
--
-- Host: 127.0.0.1    Database: ledenadministratiev3
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `boekjaars`
--

DROP TABLE IF EXISTS `boekjaars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `boekjaars` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `jaar` year NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `boekjaars`
--

LOCK TABLES `boekjaars` WRITE;
/*!40000 ALTER TABLE `boekjaars` DISABLE KEYS */;
INSERT INTO `boekjaars` VALUES (1,2023,'2023-08-24 08:12:24','2023-08-24 08:12:24');
/*!40000 ALTER TABLE `boekjaars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contributies`
--

DROP TABLE IF EXISTS `contributies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contributies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `soort_lids_id` bigint unsigned NOT NULL,
  `boekjaars_id` bigint unsigned NOT NULL,
  `leeftijd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bedrag` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contributies`
--

LOCK TABLES `contributies` WRITE;
/*!40000 ALTER TABLE `contributies` DISABLE KEYS */;
INSERT INTO `contributies` VALUES (1,1,1,'Jonger dan 8',50.00,'2023-08-24 08:12:24','2023-08-24 08:12:24'),(2,2,1,'8 t/m 12 jaar',60.00,'2023-08-24 08:12:24','2023-08-24 09:07:24'),(3,3,1,'13 t/m 17 jaar',75.00,'2023-08-24 08:12:24','2023-08-24 08:12:24'),(4,4,1,'18 t/m 50 jaar',100.00,'2023-08-24 08:12:24','2023-08-24 08:12:24'),(5,5,1,'Vanaf 51 jaar',55.00,'2023-08-24 08:12:24','2023-08-24 11:16:31');
/*!40000 ALTER TABLE `contributies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `familielids`
--

DROP TABLE IF EXISTS `familielids`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `familielids` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `soort_lids_id` bigint unsigned NOT NULL,
  `families_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateOfBirth` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `familielids`
--

LOCK TABLES `familielids` WRITE;
/*!40000 ALTER TABLE `familielids` DISABLE KEYS */;
INSERT INTO `familielids` VALUES (1,2,2,'Dr. Autumn Larson DVM','1995-03-20','2023-08-24 08:12:24','2023-08-24 08:12:24'),(2,5,1,'Dulce Medhurst','2001-11-10','2023-08-24 08:12:24','2023-08-24 08:12:24'),(3,4,1,'Nels Ryan','1973-12-21','2023-08-24 08:12:24','2023-08-24 08:12:24'),(4,1,4,'Marquis Weber DVM','1983-06-05','2023-08-24 08:12:24','2023-08-24 08:12:24'),(5,5,1,'Dorcas Schamberger','2009-12-07','2023-08-24 08:12:24','2023-08-24 08:12:24'),(6,5,4,'Mr. Cristopher Dach','1982-06-13','2023-08-24 08:12:24','2023-08-24 08:12:24'),(7,4,4,'Maurine Fritsch','2010-09-19','2023-08-24 08:12:24','2023-08-24 08:12:24'),(8,1,5,'Ms. Faye Cassin','2004-05-31','2023-08-24 08:12:24','2023-08-24 08:12:24'),(9,4,3,'Nina Carter DDS','1983-10-12','2023-08-24 08:12:24','2023-08-24 08:12:24'),(10,5,1,'Christiana Ziemann','1986-03-20','2023-08-24 08:12:24','2023-08-24 08:12:24'),(11,4,5,'Rebeka Reinger III','1979-01-25','2023-08-24 08:12:24','2023-08-24 08:12:24'),(12,5,1,'Prof. Jacynthe Kuhic','2010-09-09','2023-08-24 08:12:24','2023-08-24 08:12:24'),(13,5,1,'Mr. Unique Haley Sr.','1972-04-12','2023-08-24 08:12:24','2023-08-24 08:12:24'),(14,5,4,'Marilyne Collier I','2006-09-17','2023-08-24 08:12:24','2023-08-24 08:12:24'),(15,1,1,'Mr. Clement Kunze','2020-02-12','2023-08-24 08:12:24','2023-08-25 16:18:29');
/*!40000 ALTER TABLE `familielids` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `families`
--

DROP TABLE IF EXISTS `families`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `families` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name_family` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `families`
--

LOCK TABLES `families` WRITE;
/*!40000 ALTER TABLE `families` DISABLE KEYS */;
INSERT INTO `families` VALUES (1,'Peters','Wiericke 75, de Meern','2023-08-24 08:12:24','2023-08-24 08:12:24'),(2,'Jansen','Keizerstraat 12, Montfoort','2023-08-24 08:12:24','2023-08-24 08:12:24'),(3,'Schaafsma','Zilverschoon 5, Benschop','2023-08-24 08:12:24','2023-08-24 08:12:24'),(4,'Spruit','Abraham colijnhof 15, Montfoort','2023-08-24 08:12:24','2023-08-24 08:12:24'),(5,'De jong','Waardsedijk Oost 8, Montfoort','2023-08-24 08:12:24','2023-08-24 08:12:24');
/*!40000 ALTER TABLE `families` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=746 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (737,'2014_10_12_000000_create_users_table',1),(738,'2014_10_12_100000_create_password_reset_tokens_table',1),(739,'2019_08_19_000000_create_failed_jobs_table',1),(740,'2019_12_14_000001_create_personal_access_tokens_table',1),(741,'2023_08_11_100800_create_familielid_table',1),(742,'2023_08_12_073237_create_familie',1),(743,'2023_08_12_103125_create_boekjaar',1),(744,'2023_08_12_103132_create_contributie',1),(745,'2023_08_12_103139_create_soort_lid',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `soort_lids`
--

DROP TABLE IF EXISTS `soort_lids`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `soort_lids` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `contributies_id` bigint unsigned NOT NULL,
  `omschrijving` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `soort_lids`
--

LOCK TABLES `soort_lids` WRITE;
/*!40000 ALTER TABLE `soort_lids` DISABLE KEYS */;
INSERT INTO `soort_lids` VALUES (1,1,'Jeugd: jonger dan 9 jaar 50% korting','2023-08-24 08:12:24','2023-08-24 08:12:24'),(2,2,'Aspirant: van 8 tot 12 jaar 40% korting','2023-08-24 08:12:24','2023-08-24 08:12:24'),(3,3,'Junior: van 13 tot 17 jaar 25% korting','2023-08-24 08:12:24','2023-08-24 08:12:24'),(4,4,'Senior: van 18 tot 50 jaar 0% korting','2023-08-24 08:12:24','2023-08-24 08:12:24'),(5,5,'Veteraan: Vanaf 51 jaar 45% korting','2023-08-24 08:12:24','2023-08-24 08:12:24');
/*!40000 ALTER TABLE `soort_lids` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Stan Peters','petersstan@live.nl',NULL,'$2y$10$ZJBa7jZA5ARv/ab7WLNAT.Pwg1hXaaGuGQJPvNEY/.Ud.Ssf5vysO',NULL,'2023-08-24 08:12:52','2023-08-24 08:12:52'),(2,'Eindopdracht PHP','eindopdracht@php.nl',NULL,'$2y$10$H.AUPIy07uXAC3AWapU1/.mwRMY9WHSpz0iZFFa5OtqpIvoLbx1yW',NULL,'2023-08-24 12:24:38','2023-08-24 12:24:38');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'ledenadministratiev3'
--

--
-- Dumping routines for database 'ledenadministratiev3'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-26  9:02:25
