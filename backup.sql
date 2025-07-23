-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db_infolahtadamix
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `api_services`
--

DROP TABLE IF EXISTS `api_services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `api_services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_key` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `api_services`
--

LOCK TABLES `api_services` WRITE;
/*!40000 ALTER TABLE `api_services` DISABLE KEYS */;
/*!40000 ALTER TABLE `api_services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('laravel_cache_captcha_006c95eedcdcc4ee74bc3782b5505f7c','s:9:\"12 + 3 = \";',1752670874),('laravel_cache_captcha_05461f70a734a08db19ec63ec1f0a051','s:9:\"10 + 1 = \";',1752670652),('laravel_cache_captcha_0660c0153275153acde663187a73038c','s:9:\"17 + 5 = \";',1753183819),('laravel_cache_captcha_08a2286dae993298491700325e2b5d89','s:9:\"22 + 5 = \";',1753193233),('laravel_cache_captcha_110955eec0412054e2c5175abb27aad8','s:9:\"14 + 4 = \";',1752669509),('laravel_cache_captcha_1bde3cb4cbe1ade308630b1b18f576a9','s:9:\"28 + 1 = \";',1752668730),('laravel_cache_captcha_2033f93f3dde4820a28da3b740690e8c','s:9:\"28 + 2 = \";',1753192957),('laravel_cache_captcha_25ebe181ff9bf7a6cd9c9a1e974283f2','s:9:\"10 + 9 = \";',1752670649),('laravel_cache_captcha_2fe9f2371a1c3d072f0371ee8c286e2e','s:9:\"25 + 3 = \";',1752670834),('laravel_cache_captcha_334688ae8c9b29caa6e4544a0278e0c7','s:9:\"29 + 4 = \";',1752668972),('laravel_cache_captcha_36718fddc83319d77779cf71a7e6f1e4','s:9:\"20 + 6 = \";',1752668791),('laravel_cache_captcha_36ec94795e3aea1d3d08246c0028cd0d','s:9:\"29 + 7 = \";',1753193129),('laravel_cache_captcha_3aa3ce59949b46c78e06804785497c47','s:9:\"22 + 3 = \";',1752670807),('laravel_cache_captcha_3d085d40e29e190cc723f1552ed2b4bf','s:9:\"24 + 6 = \";',1752668119),('laravel_cache_captcha_40b42ed8f38ea4a06393edb0b8bbb627','s:9:\"25 + 7 = \";',1752669481),('laravel_cache_captcha_425bdbe8b7554a3bce8a05a3b3201511','s:9:\"10 + 3 = \";',1752669414),('laravel_cache_captcha_450072d638ab7b0bba46afc88113429f','s:9:\"10 + 1 = \";',1752668888),('laravel_cache_captcha_476af061d8a44665b33543445a364407','s:9:\"19 + 9 = \";',1752669429),('laravel_cache_captcha_4af5fde145a796504058a784dd272db3','s:9:\"20 + 5 = \";',1752668831),('laravel_cache_captcha_4f7429e4e26843c9ed78d154bf0146ec','s:9:\"30 + 7 = \";',1753193162),('laravel_cache_captcha_5380a9e61dc87b1700267b2f0d1f5c8a','s:9:\"27 + 4 = \";',1752669021),('laravel_cache_captcha_599572e2a2c0f70f25df7ad3663c3494','s:9:\"28 + 1 = \";',1752668728),('laravel_cache_captcha_64a91c39d4b252a1c53e32551fa1abde','s:9:\"21 + 1 = \";',1752669526),('laravel_cache_captcha_65890ed88f7241fc01201736a4b3ce55','s:9:\"30 + 7 = \";',1753192790),('laravel_cache_captcha_6b9fa110508f11b0393a931e5af93c23','s:9:\"13 + 5 = \";',1752668709),('laravel_cache_captcha_6c30cf6d4d855ba80b64ef48e2df96a9','s:9:\"18 + 4 = \";',1752670339),('laravel_cache_captcha_6f7826fb8abf909f1129c1475b2faaec','s:9:\"14 + 9 = \";',1753193171),('laravel_cache_captcha_71178e18dd79247c8711bee325e28bb4','s:9:\"25 + 7 = \";',1752670655),('laravel_cache_captcha_71a7c4d4e1f3584b1481a07536e3c044','s:9:\"12 + 3 = \";',1753193158),('laravel_cache_captcha_72162fca2f630cb847aa5a73b8a1cb63','s:9:\"27 + 9 = \";',1752670577),('laravel_cache_captcha_73e2c1d4856a88a742735bdabad5286b','s:9:\"16 + 5 = \";',1753193075),('laravel_cache_captcha_77e767abcbebf4ba93ed045d8b76791e','s:9:\"14 + 9 = \";',1753193055),('laravel_cache_captcha_7a8206c8ac85507efb5d58ddf26594be','s:9:\"21 + 2 = \";',1752667151),('laravel_cache_captcha_7ac2ae96bf49d1215aa034e849777e66','s:9:\"15 + 7 = \";',1752668789),('laravel_cache_captcha_7b49453662fe92206680f59facf5a450','s:9:\"12 + 6 = \";',1752669418),('laravel_cache_captcha_7f49abf2591bd2a4db14b7c0172dc476','s:9:\"10 + 4 = \";',1753193148),('laravel_cache_captcha_7fd9b1cdc881f75e8cdd4bba9f3fa7de','s:9:\"24 + 6 = \";',1752668854),('laravel_cache_captcha_8302e36d061667f8b6a2f3f5a894e7e7','s:9:\"23 + 2 = \";',1752668018),('laravel_cache_captcha_87467fa7620d8e687439701882d4209e','s:9:\"16 + 4 = \";',1752668712),('laravel_cache_captcha_9372855482ae7c07782248d880155e81','s:9:\"13 + 8 = \";',1752670744),('laravel_cache_captcha_954efc0af107a2d33b3f4d049d8c055e','s:9:\"15 + 3 = \";',1752670640),('laravel_cache_captcha_9800bb15242cc3d973daecde7127ca5a','s:9:\"29 + 2 = \";',1753182211),('laravel_cache_captcha_9ad370bdad86feba06ad4e34a93e8861','s:9:\"20 + 5 = \";',1752668725),('laravel_cache_captcha_9b2cdd8eefda655f1f60a2e469fde78a','s:9:\"26 + 6 = \";',1752668243),('laravel_cache_captcha_9cc091fdedcba7de0a75481f56933b95','s:9:\"16 + 1 = \";',1753193108),('laravel_cache_captcha_9daacee64c0544c85daaf8c75cdc9ce3','s:9:\"30 + 5 = \";',1752668835),('laravel_cache_captcha_9e65175b51c563b1368e47ed06951eab','s:9:\"24 + 7 = \";',1752670014),('laravel_cache_captcha_9f9b736bd67b6e02bb0f50cedb950bf9','s:9:\"24 + 5 = \";',1752670747),('laravel_cache_captcha_a50a5ad32c3945a72a2bfaad438b02b6','s:9:\"14 + 7 = \";',1752670110),('laravel_cache_captcha_ab0e193b3f4006a68508512633161200','s:9:\"27 + 6 = \";',1753192969),('laravel_cache_captcha_b628de7b853e2d98ad999a4266c6df24','s:9:\"13 + 1 = \";',1752668870),('laravel_cache_captcha_bb9336d51aa1499e534e671311f3770b','s:9:\"12 + 4 = \";',1752668718),('laravel_cache_captcha_bcb98562154a08474994b7a632d6bca9','s:9:\"22 + 3 = \";',1753193035),('laravel_cache_captcha_c16d45594a9637961e380326fce15cc7','s:9:\"14 + 5 = \";',1752668735),('laravel_cache_captcha_c1c9be09f571e5493772113f0ea4f3cc','s:9:\"29 + 1 = \";',1752668833),('laravel_cache_captcha_c1f47da7ed4a906a4ed00aa950db896d','s:9:\"25 + 8 = \";',1752668258),('laravel_cache_captcha_c4241773af2ce05c742005f7119bd7b9','s:9:\"10 + 7 = \";',1752668720),('laravel_cache_captcha_c47653b7139d7b872040cbe01c4cbf1d','s:9:\"25 + 4 = \";',1752668786),('laravel_cache_captcha_c5e86b7845884210671d618e84cb5100','s:9:\"17 + 1 = \";',1752668913),('laravel_cache_captcha_cbf407b9a51561176df36eb8b053236e','s:9:\"18 + 7 = \";',1752668714),('laravel_cache_captcha_ce2a22eef2b0d4e388c24d15352086b8','s:9:\"22 + 3 = \";',1753193283),('laravel_cache_captcha_cf40d05e0b8c46f0a96cfa4347192266','s:9:\"22 + 1 = \";',1752667822),('laravel_cache_captcha_d0a2aadf900a1e77748cd22b05d93e2b','s:9:\"22 + 5 = \";',1752670705),('laravel_cache_captcha_d41a2802108c5dc2a7a0c4c64653d5ac','s:9:\"13 + 4 = \";',1752668733),('laravel_cache_captcha_d6c19b587c0c2e30f7e6bfb1c98f5b5c','s:9:\"19 + 4 = \";',1752668737),('laravel_cache_captcha_dbcee840ffb4213b00f5d3c6bb602875','s:9:\"18 + 6 = \";',1752668796),('laravel_cache_captcha_ddff596174a8a7b926b276f455c32a81','s:9:\"10 + 1 = \";',1753193015),('laravel_cache_captcha_de1c632015ca47bfc7c1a13d38983089','s:9:\"15 + 6 = \";',1752668732),('laravel_cache_captcha_df08dcd4e046f13b15de9651a3392f84','s:9:\"23 + 6 = \";',1752668826),('laravel_cache_captcha_dffcdc09ad16d4bab8110202b246c1b8','s:9:\"25 + 2 = \";',1752668716),('laravel_cache_captcha_e1dbaa2cc507860ac7299069704efb0b','s:9:\"14 + 5 = \";',1752669933),('laravel_cache_captcha_e46d6ab70145b6014e8227c7a398aa65','s:9:\"11 + 8 = \";',1752670788),('laravel_cache_captcha_f0efc8bb6e2643a33350affaedb68a27','s:9:\"17 + 7 = \";',1752667796),('laravel_cache_captcha_f489a313b67956dabb52ad97650f74ed','s:9:\"10 + 4 = \";',1752668953),('laravel_cache_captcha_f700342d179474ff2c93c127185bec47','s:9:\"27 + 3 = \";',1752668794),('laravel_cache_captcha_f7e39987a50c455d3874267cd34ced9c','s:9:\"24 + 3 = \";',1752670849),('laravel_cache_captcha_f97834b581ab6a0039419213f93c88f2','s:9:\"26 + 8 = \";',1752667563),('laravel_cache_captcha_ff51ddb8e53bab76a456d2a3eecd6181','s:9:\"14 + 9 = \";',1752668766);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_products`
--

DROP TABLE IF EXISTS `category_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category_products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` bigint unsigned DEFAULT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_products_parent_id_foreign` (`parent_id`),
  CONSTRAINT `category_products_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `category_products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_products`
--

LOCK TABLES `category_products` WRITE;
/*!40000 ALTER TABLE `category_products` DISABLE KEYS */;
INSERT INTO `category_products` VALUES (9,NULL,'Laptop',NULL,'2025-07-09 12:56:39','2025-07-09 12:57:03'),(10,9,'Toshiba',NULL,'2025-07-09 12:58:06','2025-07-09 12:58:06'),(13,9,'HP',NULL,'2025-07-09 13:04:21','2025-07-09 13:04:21'),(14,9,'Acer',NULL,'2025-07-09 13:04:34','2025-07-09 13:04:34'),(15,9,'Lenovo',NULL,'2025-07-09 13:04:45','2025-07-09 13:04:45'),(16,9,'Libera',NULL,'2025-07-09 13:04:57','2025-07-09 13:04:57'),(17,9,'Asus',NULL,'2025-07-09 13:05:13','2025-07-09 13:05:13'),(18,NULL,'Layar Presentasi',NULL,'2025-07-09 13:05:32','2025-07-09 13:05:32'),(19,18,'Aori',NULL,'2025-07-09 13:06:10','2025-07-09 13:06:10'),(20,18,'Screen Work',NULL,'2025-07-09 13:06:24','2025-07-09 13:06:24'),(21,18,'Brite Screen',NULL,'2025-07-09 13:06:38','2025-07-09 13:06:38'),(22,18,'See Max',NULL,'2025-07-09 13:07:04','2025-07-09 13:07:04'),(23,9,'Zyrex',NULL,'2025-07-09 13:30:42','2025-07-09 13:30:42'),(25,NULL,'Proyektor',NULL,'2025-07-09 14:09:43','2025-07-09 14:09:43'),(26,25,'Proxima',NULL,'2025-07-09 14:10:18','2025-07-09 14:10:18'),(27,25,'Hitachi',NULL,'2025-07-09 14:10:31','2025-07-09 14:10:31'),(28,25,'Mitshubisi',NULL,'2025-07-09 14:10:47','2025-07-09 14:10:47'),(29,25,'Digital Projection',NULL,'2025-07-09 14:11:06','2025-07-09 14:11:06'),(30,25,'Sony',NULL,'2025-07-09 14:11:20','2025-07-09 14:11:20'),(31,25,'Epson',NULL,'2025-07-09 14:11:28','2025-07-09 14:11:28'),(32,25,'Barco Putih',NULL,'2025-07-09 14:11:47','2025-07-09 14:11:47'),(33,NULL,'Server Simak BMN (KEMHAN)',NULL,'2025-07-09 14:20:04','2025-07-09 14:20:04'),(34,33,'HP',NULL,'2025-07-09 14:20:57','2025-07-09 14:20:57'),(35,33,'MILS GATE',NULL,'2025-07-09 14:21:17','2025-07-09 14:21:17'),(36,33,'ICA',NULL,'2025-07-09 14:21:30','2025-07-09 14:21:30'),(37,NULL,'CPU Komputer',NULL,'2025-07-09 14:26:13','2025-07-09 14:26:13'),(38,37,'HP',NULL,'2025-07-09 14:26:31','2025-07-09 14:26:31'),(39,NULL,'Server Sisfokodam',NULL,'2025-07-09 14:38:30','2025-07-09 14:38:30'),(40,39,'ICA',NULL,'2025-07-09 14:38:54','2025-07-09 14:38:54'),(41,39,'Dell',NULL,'2025-07-09 14:39:02','2025-07-09 14:39:02'),(42,NULL,'Server Sisfopers Mabes TNI',NULL,'2025-07-09 14:42:08','2025-07-09 14:42:08'),(43,42,'Dell',NULL,'2025-07-09 14:42:36','2025-07-09 14:42:36'),(44,NULL,'PC Intel Ops Ter',NULL,'2025-07-09 14:44:10','2025-07-09 14:44:10'),(45,44,'HP',NULL,'2025-07-09 14:44:29','2025-07-09 14:44:29'),(46,44,'Fuji',NULL,'2025-07-09 14:44:46','2025-07-09 14:44:46'),(47,NULL,'Server SAPIT',NULL,'2025-07-09 14:48:05','2025-07-09 14:48:05'),(48,47,'HP',NULL,'2025-07-09 14:48:26','2025-07-09 14:48:26'),(49,47,'Samsung',NULL,'2025-07-09 14:48:39','2025-07-09 14:48:39'),(50,47,'Logitech',NULL,'2025-07-09 14:48:47','2025-07-09 14:48:47'),(51,NULL,'PRINTER',NULL,'2025-07-09 14:51:36','2025-07-09 14:51:36'),(52,51,'Canon',NULL,'2025-07-09 14:52:06','2025-07-09 14:52:06'),(53,51,'HP',NULL,'2025-07-09 14:52:50','2025-07-09 14:52:50'),(54,51,'EPSON',NULL,'2025-07-09 14:53:22','2025-07-09 14:53:22'),(55,NULL,'Stabilizer',NULL,'2025-07-09 15:06:53','2025-07-09 15:06:53'),(56,55,'Stabilizer',NULL,'2025-07-09 15:07:20','2025-07-09 15:07:20'),(57,NULL,'UPS',NULL,'2025-07-10 08:19:49','2025-07-10 08:19:49'),(58,57,'ICA',NULL,'2025-07-10 08:20:12','2025-07-10 08:20:12'),(59,57,'V-PRO',NULL,'2025-07-10 08:20:24','2025-07-10 08:20:24'),(60,57,'Prolink',NULL,'2025-07-10 08:20:50','2025-07-10 08:20:50'),(61,NULL,'PC',NULL,'2025-07-10 08:37:37','2025-07-10 08:37:37'),(62,61,'HP Compect',NULL,'2025-07-10 08:38:06','2025-07-10 08:38:06'),(63,61,'HP',NULL,'2025-07-10 08:38:25','2025-07-10 08:38:25'),(64,61,'Compact',NULL,'2025-07-10 08:38:45','2025-07-10 08:38:45'),(65,61,'Asus',NULL,'2025-07-10 08:39:05','2025-07-10 08:39:05'),(66,61,'Sim-X',NULL,'2025-07-10 08:39:17','2025-07-10 08:39:17'),(67,61,'Simbadda',NULL,'2025-07-10 08:40:36','2025-07-10 08:40:36'),(68,61,'Dell',NULL,'2025-07-10 08:40:51','2025-07-10 08:40:51'),(69,61,'Lenovo',NULL,'2025-07-10 08:41:12','2025-07-10 08:41:12'),(70,61,'Libera',NULL,'2025-07-10 08:41:29','2025-07-10 08:41:29'),(71,NULL,'TV',NULL,'2025-07-10 08:47:46','2025-07-10 08:47:46'),(72,71,'LG',NULL,'2025-07-10 08:47:55','2025-07-10 08:47:55'),(73,NULL,'Hardisk External',NULL,'2025-07-10 08:48:37','2025-07-10 08:48:37'),(74,73,'Seagate',NULL,'2025-07-10 08:48:52','2025-07-10 08:48:52'),(75,NULL,'Splitter',NULL,'2025-07-10 08:50:50','2025-07-10 08:50:50'),(76,75,'Gaintech',NULL,'2025-07-10 08:51:06','2025-07-10 08:51:06'),(77,NULL,'Converter',NULL,'2025-07-10 08:51:34','2025-07-10 08:51:34'),(78,77,'Converter',NULL,'2025-07-10 08:51:45','2025-07-10 08:51:45'),(79,NULL,'Extender',NULL,'2025-07-10 08:52:25','2025-07-10 08:52:25'),(80,79,'eZ Tech',NULL,'2025-07-10 08:52:41','2025-07-10 08:52:41'),(81,NULL,'Toolkit',NULL,'2025-07-10 08:52:56','2025-07-10 08:52:56'),(82,81,'Toolkit',NULL,'2025-07-10 08:53:03','2025-07-10 08:53:03'),(83,NULL,'Kabel',NULL,'2025-07-10 08:53:22','2025-07-10 08:53:22'),(84,83,'Kabel HDMI',NULL,'2025-07-10 08:53:44','2025-07-10 08:53:44');
/*!40000 ALTER TABLE `category_products` ENABLE KEYS */;
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
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `feedback` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery_images`
--

DROP TABLE IF EXISTS `gallery_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gallery_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery_images`
--

LOCK TABLES `gallery_images` WRITE;
/*!40000 ALTER TABLE `gallery_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `gallery_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery_videos`
--

DROP TABLE IF EXISTS `gallery_videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gallery_videos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery_videos`
--

LOCK TABLES `gallery_videos` WRITE;
/*!40000 ALTER TABLE `gallery_videos` DISABLE KEYS */;
/*!40000 ALTER TABLE `gallery_videos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (126,'0000_01_01_000000__create_roles_table',1),(127,'0001_01_01_000000_create_users_table',1),(128,'0001_01_01_000001_create_cache_table',1),(129,'0001_01_01_000002_create_jobs_table',1),(130,'2025_07_06_014022_create_positions_table',1),(131,'2025_07_06_014023_create_personels_table',1),(132,'2025_07_06_014024_create_schedules_table',1),(133,'2025_07_06_014025_create_gallery_images_table',1),(134,'2025_07_06_014026_create_gallery_videos_table',1),(135,'2025_07_06_014027_create_posts_table',1),(136,'2025_07_06_014028_create_categories_table',1),(137,'2025_07_06_014029_create_slugs_table',1),(138,'2025_07_06_014030_create_post_categories_table',1),(139,'2025_07_06_014031_create_post_slugs_table',1),(140,'2025_07_06_014032_create_category_products_table',1),(141,'2025_07_06_014033_create_wherehouses_table',1),(142,'2025_07_06_014034_create_products_table',1),(143,'2025_07_06_014035_create_feedback_table',1),(144,'2025_07_06_014037_create_permissions_table',1),(145,'2025_07_06_014038_create_role_permissions_table',1),(146,'2025_07_06_014039_create_api_services_table',1),(147,'2025_07_06_014040_create_persit_posts_table',1),(148,'2025_07_06_014041_create_persit_images_table',1),(149,'2025_07_06_014042_create_reports_table',1),(150,'2025_07_06_014043_create_product_logs_table',1);
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
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'create_kategori',NULL,NULL,NULL),(2,'read_kategori',NULL,NULL,NULL),(3,'update_kategori',NULL,NULL,NULL),(4,'delete_kategori',NULL,NULL,NULL),(5,'create_kategoriBarang',NULL,NULL,NULL),(6,'read_kategoriBarang',NULL,NULL,NULL),(7,'update_kategoriBarang',NULL,NULL,NULL),(8,'delete_kategoriBarang',NULL,NULL,NULL),(9,'create_feedback',NULL,NULL,NULL),(10,'read_feedback',NULL,NULL,NULL),(11,'update_feedback',NULL,NULL,NULL),(12,'delete_feedback',NULL,NULL,NULL),(13,'create_galleryGambar',NULL,NULL,NULL),(14,'read_galleryGambar',NULL,NULL,NULL),(15,'update_galleryGambar',NULL,NULL,NULL),(16,'delete_galleryGambar',NULL,NULL,NULL),(17,'create_galleryVideo',NULL,NULL,NULL),(18,'read_galleryVideo',NULL,NULL,NULL),(19,'update_galleryVideo',NULL,NULL,NULL),(20,'delete_galleryVideo',NULL,NULL,NULL),(21,'create_persitGambar',NULL,NULL,NULL),(22,'read_persitGambar',NULL,NULL,NULL),(23,'update_persitGambar',NULL,NULL,NULL),(24,'delete_persitGambar',NULL,NULL,NULL),(25,'create_persitBerita',NULL,NULL,NULL),(26,'read_persitBerita',NULL,NULL,NULL),(27,'update_persitBerita',NULL,NULL,NULL),(28,'delete_persitBerita',NULL,NULL,NULL),(29,'create_pejabat',NULL,NULL,NULL),(30,'read_pejabat',NULL,NULL,NULL),(31,'update_pejabat',NULL,NULL,NULL),(32,'delete_pejabat',NULL,NULL,NULL),(33,'create_beritaUmum',NULL,NULL,NULL),(34,'read_beritaUmum',NULL,NULL,NULL),(35,'update_beritaUmum',NULL,NULL,NULL),(36,'delete_beritaUmum',NULL,NULL,NULL),(37,'create_barang',NULL,NULL,NULL),(38,'read_barang',NULL,NULL,NULL),(39,'update_barang',NULL,NULL,NULL),(40,'delete_barang',NULL,NULL,NULL),(41,'create_report',NULL,NULL,NULL),(42,'read_report',NULL,NULL,NULL),(43,'update_report',NULL,NULL,NULL),(44,'delete_report',NULL,NULL,NULL),(45,'create_role',NULL,NULL,NULL),(46,'read_role',NULL,NULL,NULL),(47,'update_role',NULL,NULL,NULL),(48,'delete_role',NULL,NULL,NULL),(49,'create_agenda',NULL,NULL,NULL),(50,'read_agenda',NULL,NULL,NULL),(51,'update_agenda',NULL,NULL,NULL),(52,'delete_agenda',NULL,NULL,NULL),(53,'create_tags',NULL,NULL,NULL),(54,'read_tags',NULL,NULL,NULL),(55,'update_tags',NULL,NULL,NULL),(56,'delete_tags',NULL,NULL,NULL),(57,'create_user',NULL,NULL,NULL),(58,'read_user',NULL,NULL,NULL),(59,'update_user',NULL,NULL,NULL),(60,'delete_user',NULL,NULL,NULL),(61,'create_gudang',NULL,NULL,NULL),(62,'read_gudang',NULL,NULL,NULL),(63,'update_gudang',NULL,NULL,NULL),(64,'delete_gudang',NULL,NULL,NULL),(65,'create_permission',NULL,NULL,NULL),(66,'read_permission',NULL,NULL,NULL),(67,'update_permission',NULL,NULL,NULL),(68,'delete_permission',NULL,NULL,NULL),(69,'kelola_barang_gudang','1972-04-18 20:37:46','2025-07-12 16:52:27','2025-07-12 16:52:27');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persit_images`
--

DROP TABLE IF EXISTS `persit_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `persit_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persit_images`
--

LOCK TABLES `persit_images` WRITE;
/*!40000 ALTER TABLE `persit_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `persit_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persit_posts`
--

DROP TABLE IF EXISTS `persit_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `persit_posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Draft','Published') COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_url` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` int DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `persit_posts_user_id_foreign` (`user_id`),
  CONSTRAINT `persit_posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persit_posts`
--

LOCK TABLES `persit_posts` WRITE;
/*!40000 ALTER TABLE `persit_posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `persit_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personels`
--

DROP TABLE IF EXISTS `personels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personels` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position_id` bigint unsigned NOT NULL,
  `status` enum('Active','Nonactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_url` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `period_start` date DEFAULT NULL,
  `period_end` date DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `personels_position_id_foreign` (`position_id`),
  CONSTRAINT `personels_position_id_foreign` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personels`
--

LOCK TABLES `personels` WRITE;
/*!40000 ALTER TABLE `personels` DISABLE KEYS */;
/*!40000 ALTER TABLE `personels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `positions`
--

DROP TABLE IF EXISTS `positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `positions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position_id` bigint unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_position_id_foreign` (`position_id`),
  CONSTRAINT `positions_position_id_foreign` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `positions`
--

LOCK TABLES `positions` WRITE;
/*!40000 ALTER TABLE `positions` DISABLE KEYS */;
INSERT INTO `positions` VALUES (1,'Kainfolahta',NULL,NULL,NULL,NULL),(2,'Waka',NULL,NULL,NULL,NULL),(3,'Kasi Binsisfomin',NULL,NULL,NULL,NULL),(4,'Kasi Binsisfoops',NULL,NULL,NULL,NULL),(5,'Kasi Binmatsisfo',NULL,NULL,NULL,NULL),(6,'Kasi Duklahta',NULL,NULL,NULL,NULL),(7,'Kasi TUUD',NULL,NULL,NULL,NULL),(8,'Katim Bekharlap',NULL,NULL,NULL,NULL),(9,'Katim Multimedia',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `positions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_categories`
--

DROP TABLE IF EXISTS `post_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint unsigned NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_categories_post_id_foreign` (`post_id`),
  KEY `post_categories_category_id_foreign` (`category_id`),
  CONSTRAINT `post_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `post_categories_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_categories`
--

LOCK TABLES `post_categories` WRITE;
/*!40000 ALTER TABLE `post_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `post_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_slugs`
--

DROP TABLE IF EXISTS `post_slugs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_slugs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint unsigned NOT NULL,
  `slug_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_slugs_post_id_foreign` (`post_id`),
  KEY `post_slugs_slug_id_foreign` (`slug_id`),
  CONSTRAINT `post_slugs_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  CONSTRAINT `post_slugs_slug_id_foreign` FOREIGN KEY (`slug_id`) REFERENCES `slugs` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_slugs`
--

LOCK TABLES `post_slugs` WRITE;
/*!40000 ALTER TABLE `post_slugs` DISABLE KEYS */;
/*!40000 ALTER TABLE `post_slugs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Draft','Published') COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_url` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` int DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_user_id_foreign` (`user_id`),
  CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_logs`
--

DROP TABLE IF EXISTS `product_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_logs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `wherehouse_id` bigint unsigned NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_logs_user_id_foreign` (`user_id`),
  KEY `product_logs_product_id_foreign` (`product_id`),
  KEY `product_logs_wherehouse_id_foreign` (`wherehouse_id`),
  CONSTRAINT `product_logs_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  CONSTRAINT `product_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `product_logs_wherehouse_id_foreign` FOREIGN KEY (`wherehouse_id`) REFERENCES `wherehouses` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_logs`
--

LOCK TABLES `product_logs` WRITE;
/*!40000 ALTER TABLE `product_logs` DISABLE KEYS */;
INSERT INTO `product_logs` VALUES (1,5,117,8,'Status Barang Berubah menjadi  .Ket : test','2025-07-12 18:31:21','2025-07-12 18:31:21');
/*!40000 ALTER TABLE `product_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `category_product_id` bigint unsigned NOT NULL,
  `wherehouse_id` bigint unsigned NOT NULL,
  `year` year DEFAULT NULL,
  `serial_number` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('B','RR','RB') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_product_id_foreign` (`category_product_id`),
  KEY `products_wherehouse_id_foreign` (`wherehouse_id`),
  CONSTRAINT `products_category_product_id_foreign` FOREIGN KEY (`category_product_id`) REFERENCES `category_products` (`id`),
  CONSTRAINT `products_wherehouse_id_foreign` FOREIGN KEY (`wherehouse_id`) REFERENCES `wherehouses` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=268 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (2,'Toshiba','PNS Putu A.',10,4,2014,'1112','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(3,'Toshiba Satellite Pro B40-A','Batilog',10,4,2015,'1113','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(4,'Toshiba Satellite Pro B40-A','Juyar',10,4,2015,'1114','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(5,'Hp Value Topload','TUUD Nastra',13,4,2016,'1115','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(6,'Acer E1431','Gudang',14,5,2013,'1116','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(7,'Lenovo  Thinkpad E470','Tim Multimedia',15,6,2018,'1117','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(8,'Lenovo  Thinkpad E490','Tim Multimedia',15,6,2020,'1118','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(9,'Lenovo  Thinkpad E490','Tim Multimedia',15,6,2020,'1119','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(10,'Lenovo Thinkbook 14 G2','Tim Multimedia',15,6,2022,'1120','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(11,'Libera','Tim Multimedia',16,6,2024,'1121','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(12,'Asus','Tim Multimedia',17,6,NULL,'1122','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(13,'Zyrex Cruiser 20','Sisfomin',23,7,2022,'1123','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(14,'Asus','Sisfomin',17,7,2018,'1124','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(15,'Asus core i3','Sisfomin',17,7,2014,'1125','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(16,'Thosiba','Matsisfo',10,8,NULL,'1126','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(17,'Lenovo Thinkpad E470','Matsisfo',15,8,2018,'1127','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(18,'Acer N19Q7','TUUD Dimas',14,4,2024,'1128','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(19,'Screen Arori 1.8m x 1.8m','Gudang',19,5,2007,'1128','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(20,'Screen Arori 1.8m x 1.8m','Gudang',19,5,2007,'1129','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(21,'Screen Arori 1.8m x 1.8m','Gudang',19,5,2007,'1130','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(22,'Screen Arori 1.8m x 1.8m','Gudang',19,5,2007,'1131','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(23,'Screen Work 4M x 3M (Hitam)','Gudang',20,5,2010,'1132','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(24,'Brite Screen 4M x 3M ','Gudang',21,5,2010,'1133','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(25,'Brite Screen 4M x 3M ','Gudang',21,5,2010,'1134','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(26,'See Max 319 cm x 242 cm','Gudang',22,5,2018,'1135','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(27,'See Max 319 cm x 242 cm','Gudang',22,5,2018,'1136','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(28,'See Max 319 cm x 242 cm','Gudang',22,5,2020,'1137','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(29,'See Max 319 cm x 242 cm','Gudang',22,5,2020,'1138','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(30,'See Max 319 cm x 242 cm','Gudang',22,5,2021,'1139','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(31,'See Max 314 cm x 214 cm','Gudang',22,5,2022,'1140','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(32,'Proxima 6810 4500 Lumens + Remote','Gudang',26,5,2001,'1141','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(33,'Hitachi Cp X1250 4500 Lumens','Gudang',27,5,2005,'1142','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(34,'Mitsubhisi XL 660','Gudang',28,5,2010,'1143','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(35,'Digital Projection E- Vision Laser 8500 + Remote','Gudang',29,5,2016,'1144','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(36,'Proyektor Sony VPL-PHZ10 + Remote','Gudang',30,5,2018,'1145','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(37,'Proyektor Sony VPL-PHZ10 + Remote','Gudang',30,5,2018,'1146','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(38,'Proyektor Sony VPL-PHZ11 + Remote','Gudang',30,5,2020,'1147','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(39,'Proyektor Sony VPL-PHZ11 + Remote','Gudang',30,5,2020,'1148','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(40,'Proyektor Sony VPL EX 450 + Remote','Gudang',30,5,2021,'1149','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(41,'Proyektor Epson EB-L200F','Gudang',31,5,2022,'1150','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(42,'Proyektor Sony VPL-CW 255','Gudang',30,5,NULL,'1151','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(43,'Proyektor Mitsubishi X08100U','Gudang',28,5,NULL,'1152','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(44,'Barco Putih + Remote','Gudang',32,5,NULL,'1153','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(45,'Monitor HP V 185 E','Rg. Server',34,9,2010,'1154','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(46,'Mouse HP','Rg. Server',34,9,2010,'1155','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(47,'Keyboard HP','Rg. Server',34,9,2010,'1156','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(48,'Mils Gate NG 2020 BOB','Rg. Server',35,9,2010,'1157','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(49,'Ica UPS SIN 1500 C','Rg. Server',36,9,2010,'1158','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(50,'HP Prolliant ML 350 (Server Aplikasi)','Rg. Server',34,9,2010,'1159','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(51,'HP Prolliant ML 350 (Server Data Base)','Rg. Server',34,9,2010,'1160','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(52,'Monitor HP W 1707','Gudang',38,5,2011,'1161','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(53,'Keyboard HP','Gudang',38,5,2011,'1162','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(54,'Mouse HP','Gudang',38,5,2011,'1163','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(55,'Printer HP Deskjet Ink 2010','Gudang',38,5,2011,'1164','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(56,'PC HP DX 2310 MT :','Gudang',38,5,2011,'1165','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(57,'ICA UPS Server',NULL,40,10,2012,'1166','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(58,'Mouse Server',NULL,41,10,2012,'1167','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(59,'Keyboard Server',NULL,41,10,2012,'1168','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(60,'Monitor Server',NULL,41,10,2012,'1169','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(61,'Dell Power EDGE T110 II (Server Aplikasi)','Perbaikan di',41,10,2012,'1170','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(62,'Dell Power EDGE T110 II (Server  Data Base)','Disinfolahtad',41,10,2012,'1171','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(63,'Dell Idrac Quick System','R. Server',43,9,2017,'1172','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(64,'Monitor HP Pavillion 23fi','Duklahta',45,11,2013,'1173','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(65,'Mouse HP ','Duklahta',45,11,2013,'1174','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(66,'Keyboard HP','Duklahta',45,11,2013,'1175','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(67,'PC HP Envy Core i7','Duklahta',45,11,2013,'1176','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(68,'Printer Fuji Ferox','Gudang',46,5,2013,'1177','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(69,'Hp Proliant DL160 Gen9','R. Server',48,9,2016,'1178','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(70,'Monitor ','R. Server',49,9,2016,'1179','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(71,'Keyboard','R. Server',50,9,2016,'1180','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(72,'Mouse','R. Server',50,9,2016,'1181','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(73,'Canon iP 2770','Gudang',52,5,2006,'1182','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(74,'Canon iP 2770','Gudang',52,5,2007,'1183','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(75,'Canon iP 2770','Gudang',52,5,2012,'1184','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(76,'Canon IP 2770','Gudang',52,5,2013,'1185','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(77,'Canon iP 1200','Gudang',52,5,2013,'1186','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(78,'Canon IP 2770','Gudang',52,5,2013,'1187','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(79,'Hp Deskjet 1050','Gudang',53,5,2013,'1188','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(80,'Hp Deskjet 1050','Gudang',53,5,2013,'1189','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(81,'Epson L100','Gudang',54,5,2018,'1190','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(82,'Canon iP 1200','Gudang',52,5,2013,'1191','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(83,'Canon iP 2770','Gudang',52,5,2013,'1192','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(84,'Canon MP 287 ','Gudang',52,5,2014,'1193','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(85,'HP Deskjet 1000','Gudang',53,5,2013,'1194','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(86,'HP Deskjet 2466','Gudang',53,5,2013,'1195','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(87,'Canon iP 1300','Gudang',52,5,2015,'1196','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(88,'Epson L 3110','Binmatsisfo',54,7,2020,'1197','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(89,'Epson L 3110','Tuud',54,4,2020,'1198','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(90,'Epson L 3210','Tuud',54,4,2024,'1199','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(91,'Stabilizer','Gudang',56,5,2000,'1200','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(92,'Stabilizer','Gudang',56,5,2012,'1201','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(93,'Stabilizer','Gudang',56,5,2012,'1202','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(94,'Stabilizer','Gudang',56,5,2012,'1203','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(95,'Stabilizer','Gudang',56,5,2012,'1204','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(96,'UPS 2 Kva ICA','Rg. Server',58,9,2017,'1205','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(97,'UPS 2 Kva ICA','Rg. Server',58,9,2017,'1206','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(98,'UPS V-PRO V-600','Gudang',59,5,2018,'1207','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(99,'UPS V-PRO V-601','Gudang',59,5,2018,'1208','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(100,'UPS V-PRO V-602','Gudang',59,5,2018,'1209','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(101,'UPS Komputer','Sisfoops',60,12,2020,'1210','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(102,'UPS Komputer','Tuud',60,4,2020,'1211','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(103,'UPS Komputer','Tuud',60,4,2024,'1212','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(104,'HP Compaq D220M','Gudang',62,5,2004,'1215','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(105,'HP Compaq D220M','Gudang',62,5,2004,'1216','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(106,'HP Compaq D220M','Gudang',62,5,2004,'1217','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(107,'HP Pavillion G2068L','Gudang',63,5,2006,'1218','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(108,'Hp Compaq D380 MX','Gudang',62,5,2008,'1219','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(109,'Hp Compaq PA 1021','Gudang',62,5,2009,'1220','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(110,'Hp Pavillion G 20861','Gudang',62,5,2008,'1221','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(111,'Compaq Presario CQ3000','Gudang',64,5,2010,'1222','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(112,'Asus Quietrack','Gudang',65,5,2005,'1223','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(113,'PC Sim-X','Tuud Kaurpers',66,4,2009,'1224','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(114,'Simbadda','Tuud Nastra',67,4,2009,'1225','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(115,'Compaq CQ3138L','Binsisfoops',64,12,2010,'1226','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(116,'HP Pro HP P3340 MT','Spri',63,13,2011,'1227','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(117,'Dell Vastro','Binmatsisfo',68,8,2012,'1228','RR',NULL,'2025-07-12 18:24:46','2025-07-12 18:31:21'),(118,'Dell Vastro','Binmatsisfo',68,8,2012,'1229','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(119,'Dell OptiPlex 3050','Tuud Kaurdal',68,4,2018,'1230','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(120,'Lenovo Think Center M720T','Tim Multimedia',69,4,2020,'1231','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(121,'Lenovo Think Center M720T','Tuud Dimas',59,4,2020,'1232','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(122,'Dell','Sisfomin',68,7,2017,'1233','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(123,'Libera','Tuud Erlambang',70,4,2024,'1234','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(124,'TV LD 65\'','Gudang',72,5,2022,'1236','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(125,'Seagate 1TB','Gudang',74,5,2012,'1239','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(126,'Seagate 1TB','Gudang',74,5,2012,'1240','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(127,'Splitter','Gudang',76,5,2019,'1242','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(128,'Converter','Gudang',78,5,2019,'1243','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(129,'Extender','Gudang',80,5,2019,'1244','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(130,'Toolkit','Gudang',82,5,2019,'1245','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(131,'Kabel HDMI 30 meter','Gudang',84,5,2020,'1248','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(132,'Kabel HDMI 20 meter','Gudang',84,5,2020,'1249','RB',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(133,'Kabel HDMI 20 meter','Gudang',84,5,2021,'1250','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(134,'Kabel HDMI 20 meter','Gudang',84,5,2022,'1251','B',NULL,'2025-07-12 18:24:46','2025-07-12 18:24:46'),(135,'Toshiba','PNS Putu A.',10,4,2014,'1112','B',NULL,'2025-07-13 02:16:05','2025-07-13 02:16:05'),(136,'Toshiba Satellite Pro B40-A','Batilog',10,4,2015,'1113','B',NULL,'2025-07-13 02:16:05','2025-07-13 02:16:05'),(137,'Toshiba Satellite Pro B40-A','Juyar',10,4,2015,'1114','B',NULL,'2025-07-13 02:16:05','2025-07-13 02:16:05'),(138,'Hp Value Topload','TUUD Nastra',13,4,2016,'1115','B',NULL,'2025-07-13 02:16:05','2025-07-13 02:16:05'),(139,'Acer E1431','Gudang',14,5,2013,'1116','RB',NULL,'2025-07-13 02:16:05','2025-07-13 02:16:05'),(140,'Lenovo  Thinkpad E470','Tim Multimedia',15,6,2018,'1117','B',NULL,'2025-07-13 02:16:05','2025-07-13 02:16:05'),(141,'Lenovo  Thinkpad E490','Tim Multimedia',15,6,2020,'1118','B',NULL,'2025-07-13 02:16:05','2025-07-13 02:16:05'),(142,'Lenovo  Thinkpad E490','Tim Multimedia',15,6,2020,'1119','B',NULL,'2025-07-13 02:16:05','2025-07-13 02:16:05'),(143,'Lenovo Thinkbook 14 G2','Tim Multimedia',15,6,2022,'1120','B',NULL,'2025-07-13 02:16:05','2025-07-13 02:16:05'),(144,'Libera','Tim Multimedia',16,6,2024,'1121','B',NULL,'2025-07-13 02:16:05','2025-07-13 02:16:05'),(145,'Asus','Tim Multimedia',17,6,NULL,'1122','B',NULL,'2025-07-13 02:16:05','2025-07-13 02:16:05'),(146,'Zyrex Cruiser 20','Sisfomin',23,7,2022,'1123','B',NULL,'2025-07-13 02:16:05','2025-07-13 02:16:05'),(147,'Asus','Sisfomin',17,7,2018,'1124','B',NULL,'2025-07-13 02:16:05','2025-07-13 02:16:05'),(148,'Asus core i3','Sisfomin',17,7,2014,'1125','B',NULL,'2025-07-13 02:16:05','2025-07-13 02:16:05'),(149,'Thosiba','Matsisfo',10,8,NULL,'1126','RR',NULL,'2025-07-13 02:16:05','2025-07-13 02:16:05'),(150,'Lenovo Thinkpad E470','Matsisfo',15,8,2018,'1127','RR',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(151,'Acer N19Q7','TUUD Dimas',14,4,2024,'1128','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(152,'Screen Arori 1.8m x 1.8m','Gudang',19,5,2007,'1128','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(153,'Screen Arori 1.8m x 1.8m','Gudang',19,5,2007,'1129','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(154,'Screen Arori 1.8m x 1.8m','Gudang',19,5,2007,'1130','RR',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(155,'Screen Arori 1.8m x 1.8m','Gudang',19,5,2007,'1131','RR',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(156,'Screen Work 4M x 3M (Hitam)','Gudang',20,5,2010,'1132','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(157,'Brite Screen 4M x 3M ','Gudang',21,5,2010,'1133','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(158,'Brite Screen 4M x 3M ','Gudang',21,5,2010,'1134','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(159,'See Max 319 cm x 242 cm','Gudang',22,5,2018,'1135','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(160,'See Max 319 cm x 242 cm','Gudang',22,5,2018,'1136','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(161,'See Max 319 cm x 242 cm','Gudang',22,5,2020,'1137','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(162,'See Max 319 cm x 242 cm','Gudang',22,5,2020,'1138','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(163,'See Max 319 cm x 242 cm','Gudang',22,5,2021,'1139','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(164,'See Max 314 cm x 214 cm','Gudang',22,5,2022,'1140','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(165,'Proxima 6810 4500 Lumens + Remote','Gudang',26,5,2001,'1141','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(166,'Hitachi Cp X1250 4500 Lumens','Gudang',27,5,2005,'1142','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(167,'Mitsubhisi XL 660','Gudang',28,5,2010,'1143','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(168,'Digital Projection E- Vision Laser 8500 + Remote','Gudang',29,5,2016,'1144','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(169,'Proyektor Sony VPL-PHZ10 + Remote','Gudang',30,5,2018,'1145','RR',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(170,'Proyektor Sony VPL-PHZ10 + Remote','Gudang',30,5,2018,'1146','RR',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(171,'Proyektor Sony VPL-PHZ11 + Remote','Gudang',30,5,2020,'1147','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(172,'Proyektor Sony VPL-PHZ11 + Remote','Gudang',30,5,2020,'1148','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(173,'Proyektor Sony VPL EX 450 + Remote','Gudang',30,5,2021,'1149','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(174,'Proyektor Epson EB-L200F','Gudang',31,5,2022,'1150','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(175,'Proyektor Sony VPL-CW 255','Gudang',30,5,NULL,'1151','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(176,'Proyektor Mitsubishi X08100U','Gudang',28,5,NULL,'1152','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(177,'Barco Putih + Remote','Gudang',32,5,NULL,'1153','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(178,'Monitor HP V 185 E','Rg. Server',34,9,2010,'1154','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(179,'Mouse HP','Rg. Server',34,9,2010,'1155','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(180,'Keyboard HP','Rg. Server',34,9,2010,'1156','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(181,'Mils Gate NG 2020 BOB','Rg. Server',35,9,2010,'1157','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(182,'Ica UPS SIN 1500 C','Rg. Server',36,9,2010,'1158','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(183,'HP Prolliant ML 350 (Server Aplikasi)','Rg. Server',34,9,2010,'1159','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(184,'HP Prolliant ML 350 (Server Data Base)','Rg. Server',34,9,2010,'1160','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(185,'Monitor HP W 1707','Gudang',38,5,2011,'1161','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(186,'Keyboard HP','Gudang',38,5,2011,'1162','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(187,'Mouse HP','Gudang',38,5,2011,'1163','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(188,'Printer HP Deskjet Ink 2010','Gudang',38,5,2011,'1164','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(189,'PC HP DX 2310 MT :','Gudang',38,5,2011,'1165','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(190,'ICA UPS Server',NULL,40,10,2012,'1166','RR',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(191,'Mouse Server',NULL,41,10,2012,'1167','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(192,'Keyboard Server',NULL,41,10,2012,'1168','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(193,'Monitor Server',NULL,41,10,2012,'1169','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(194,'Dell Power EDGE T110 II (Server Aplikasi)','Perbaikan di',41,10,2012,'1170','RR',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(195,'Dell Power EDGE T110 II (Server  Data Base)','Disinfolahtad',41,10,2012,'1171','RR',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(196,'Dell Idrac Quick System','R. Server',43,9,2017,'1172','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(197,'Monitor HP Pavillion 23fi','Duklahta',45,11,2013,'1173','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(198,'Mouse HP ','Duklahta',45,11,2013,'1174','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(199,'Keyboard HP','Duklahta',45,11,2013,'1175','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(200,'PC HP Envy Core i7','Duklahta',45,11,2013,'1176','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(201,'Printer Fuji Ferox','Gudang',46,5,2013,'1177','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(202,'Hp Proliant DL160 Gen9','R. Server',48,9,2016,'1178','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(203,'Monitor ','R. Server',49,9,2016,'1179','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(204,'Keyboard','R. Server',50,9,2016,'1180','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(205,'Mouse','R. Server',50,9,2016,'1181','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(206,'Canon iP 2770','Gudang',52,5,2006,'1182','RR',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(207,'Canon iP 2770','Gudang',52,5,2007,'1183','RR',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(208,'Canon iP 2770','Gudang',52,5,2012,'1184','RR',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(209,'Canon IP 2770','Gudang',52,5,2013,'1185','RR',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(210,'Canon iP 1200','Gudang',52,5,2013,'1186','RR',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(211,'Canon IP 2770','Gudang',52,5,2013,'1187','RR',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(212,'Hp Deskjet 1050','Gudang',53,5,2013,'1188','RR',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(213,'Hp Deskjet 1050','Gudang',53,5,2013,'1189','RR',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(214,'Epson L100','Gudang',54,5,2018,'1190','RR',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(215,'Canon iP 1200','Gudang',52,5,2013,'1191','RR',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(216,'Canon iP 2770','Gudang',52,5,2013,'1192','RR',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(217,'Canon MP 287 ','Gudang',52,5,2014,'1193','RR',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(218,'HP Deskjet 1000','Gudang',53,5,2013,'1194','RR',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(219,'HP Deskjet 2466','Gudang',53,5,2013,'1195','RR',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(220,'Canon iP 1300','Gudang',52,5,2015,'1196','RR',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(221,'Epson L 3110','Binmatsisfo',54,7,2020,'1197','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(222,'Epson L 3110','Tuud',54,4,2020,'1198','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(223,'Epson L 3210','Tuud',54,4,2024,'1199','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(224,'Stabilizer','Gudang',56,5,2000,'1200','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(225,'Stabilizer','Gudang',56,5,2012,'1201','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(226,'Stabilizer','Gudang',56,5,2012,'1202','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(227,'Stabilizer','Gudang',56,5,2012,'1203','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(228,'Stabilizer','Gudang',56,5,2012,'1204','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(229,'UPS 2 Kva ICA','Rg. Server',58,9,2017,'1205','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(230,'UPS 2 Kva ICA','Rg. Server',58,9,2017,'1206','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(231,'UPS V-PRO V-600','Gudang',59,5,2018,'1207','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(232,'UPS V-PRO V-601','Gudang',59,5,2018,'1208','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(233,'UPS V-PRO V-602','Gudang',59,5,2018,'1209','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(234,'UPS Komputer','Sisfoops',60,12,2020,'1210','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(235,'UPS Komputer','Tuud',60,4,2020,'1211','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(236,'UPS Komputer','Tuud',60,4,2024,'1212','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(237,'HP Compaq D220M','Gudang',62,5,2004,'1215','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(238,'HP Compaq D220M','Gudang',62,5,2004,'1216','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(239,'HP Compaq D220M','Gudang',62,5,2004,'1217','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(240,'HP Pavillion G2068L','Gudang',63,5,2006,'1218','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(241,'Hp Compaq D380 MX','Gudang',62,5,2008,'1219','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(242,'Hp Compaq PA 1021','Gudang',62,5,2009,'1220','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(243,'Hp Pavillion G 20861','Gudang',62,5,2008,'1221','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(244,'Compaq Presario CQ3000','Gudang',64,5,2010,'1222','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(245,'Asus Quietrack','Gudang',65,5,2005,'1223','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(246,'PC Sim-X','Tuud Kaurpers',66,4,2009,'1224','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(247,'Simbadda','Tuud Nastra',67,4,2009,'1225','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(248,'Compaq CQ3138L','Binsisfoops',64,12,2010,'1226','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(249,'HP Pro HP P3340 MT','Spri',63,13,2011,'1227','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(250,'Dell Vastro','Binmatsisfo',68,8,2012,'1228','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(251,'Dell Vastro','Binmatsisfo',68,8,2012,'1229','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(252,'Dell OptiPlex 3050','Tuud Kaurdal',68,4,2018,'1230','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(253,'Lenovo Think Center M720T','Tim Multimedia',69,4,2020,'1231','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(254,'Lenovo Think Center M720T','Tuud Dimas',59,4,2020,'1232','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(255,'Dell','Sisfomin',68,7,2017,'1233','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(256,'Libera','Tuud Erlambang',70,4,2024,'1234','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(257,'TV LD 65\'','Gudang',72,5,2022,'1236','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(258,'Seagate 1TB','Gudang',74,5,2012,'1239','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(259,'Seagate 1TB','Gudang',74,5,2012,'1240','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(260,'Splitter','Gudang',76,5,2019,'1242','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(261,'Converter','Gudang',78,5,2019,'1243','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(262,'Extender','Gudang',80,5,2019,'1244','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(263,'Toolkit','Gudang',82,5,2019,'1245','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(264,'Kabel HDMI 30 meter','Gudang',84,5,2020,'1248','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(265,'Kabel HDMI 20 meter','Gudang',84,5,2020,'1249','RB',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(266,'Kabel HDMI 20 meter','Gudang',84,5,2021,'1250','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06'),(267,'Kabel HDMI 20 meter','Gudang',84,5,2022,'1251','B',NULL,'2025-07-13 02:16:06','2025-07-13 02:16:06');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reports`
--

DROP TABLE IF EXISTS `reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reports` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `status` enum('Pending','Done') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img_url` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reports_user_id_foreign` (`user_id`),
  KEY `reports_product_id_foreign` (`product_id`),
  CONSTRAINT `reports_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  CONSTRAINT `reports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reports`
--

LOCK TABLES `reports` WRITE;
/*!40000 ALTER TABLE `reports` DISABLE KEYS */;
INSERT INTO `reports` VALUES (1,5,117,'Pending','test','2025-07-12 18:31:21','2025-07-12 18:31:21','');
/*!40000 ALTER TABLE `reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_permissions`
--

DROP TABLE IF EXISTS `role_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint unsigned NOT NULL,
  `permission_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_permissions_role_id_foreign` (`role_id`),
  KEY `role_permissions_permission_id_foreign` (`permission_id`),
  CONSTRAINT `role_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  CONSTRAINT `role_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_permissions`
--

LOCK TABLES `role_permissions` WRITE;
/*!40000 ALTER TABLE `role_permissions` DISABLE KEYS */;
INSERT INTO `role_permissions` VALUES (1,1,1,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(2,1,2,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(3,1,3,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(4,1,4,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(5,1,5,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(6,1,6,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(7,1,7,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(8,1,8,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(9,1,9,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(10,1,10,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(11,1,11,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(12,1,12,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(13,1,13,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(14,1,14,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(15,1,15,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(16,1,16,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(17,1,17,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(18,1,18,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(19,1,19,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(20,1,20,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(21,1,21,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(22,1,22,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(23,1,23,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(24,1,24,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(25,1,25,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(26,1,26,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(27,1,27,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(28,1,28,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(29,1,29,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(30,1,30,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(31,1,31,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(32,1,32,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(33,1,33,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(34,1,34,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(35,1,35,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(36,1,36,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(37,1,37,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(38,1,38,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(39,1,39,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(40,1,40,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(41,1,41,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(42,1,42,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(43,1,43,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(44,1,44,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(45,1,45,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(46,1,46,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(47,1,47,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(48,1,48,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(49,1,49,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(50,1,50,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(51,1,51,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(52,1,52,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(53,1,53,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(54,1,54,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(55,1,55,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(56,1,56,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(57,1,57,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(58,1,58,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(59,1,59,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(60,1,60,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(61,1,61,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(62,1,62,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(63,1,63,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(64,1,64,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(65,1,65,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(66,1,66,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(67,1,67,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(68,1,68,'2025-07-12 16:52:27','2025-07-12 16:52:27'),(69,2,2,NULL,NULL),(70,2,6,NULL,NULL),(71,2,10,NULL,NULL),(72,2,14,NULL,NULL),(73,2,18,NULL,NULL),(74,2,22,NULL,NULL),(75,2,26,NULL,NULL),(76,2,30,NULL,NULL),(77,2,34,NULL,NULL),(78,2,38,NULL,NULL),(79,2,42,NULL,NULL),(80,2,46,NULL,NULL),(81,2,50,NULL,NULL),(82,2,54,NULL,NULL),(83,2,58,NULL,NULL),(84,2,62,NULL,NULL),(85,2,66,NULL,NULL),(86,3,21,NULL,NULL),(87,3,22,NULL,NULL),(88,3,23,NULL,NULL),(89,3,24,NULL,NULL),(90,3,25,NULL,NULL),(91,3,26,NULL,NULL),(92,3,27,NULL,NULL),(93,3,28,NULL,NULL),(94,4,50,NULL,NULL),(101,5,6,NULL,NULL),(102,5,38,NULL,NULL),(103,5,41,NULL,NULL),(104,5,42,NULL,NULL),(105,5,50,NULL,NULL),(106,5,62,NULL,NULL),(107,5,69,NULL,NULL);
/*!40000 ALTER TABLE `role_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'super admin','2011-10-04 01:42:36','2025-07-12 16:52:27','2025-07-12 16:52:27'),(2,'Kepala',NULL,'2025-07-12 17:14:54','2025-07-12 17:14:54'),(3,'persit',NULL,'2025-07-12 17:15:57','2025-07-12 17:15:57'),(4,'staff',NULL,'2025-07-12 17:16:19','2025-07-12 17:16:19'),(5,'staff kelola barang',NULL,'2025-07-12 17:18:07','2025-07-12 17:18:07');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedules`
--

DROP TABLE IF EXISTS `schedules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `schedules` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedules`
--

LOCK TABLES `schedules` WRITE;
/*!40000 ALTER TABLE `schedules` DISABLE KEYS */;
INSERT INTO `schedules` VALUES (1,'Agenda_2025-07-15-13-55-38.pdf','sfsfs',NULL,NULL,'2025-07-15 05:55:38','2025-07-15 05:55:38'),(2,'Agenda_2025-07-15-13-55-53.pdf','sfsfs',NULL,NULL,'2025-07-15 05:55:53','2025-07-15 05:55:53');
/*!40000 ALTER TABLE `schedules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('EwQ6F3x7s3ezcmNFjVjjvHlShTd0cYjcKdWcTzjD',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVHNkS3pmaWljaGRKSVJRejZQc0VjNUdIR1J2eDJqRWZXN1FvYTlHbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9pbmZvbGFodGFkYW1peC50ZXN0L2FydGljbGVzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1753230795),('upXLDxRLebwVaziZ3WnobMGxdCS2xwOO5tQw0T5f',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSkN6NjQ2YVFYN0lVbGhCUTR2c1hzSzdGdVU0Q25MVzdxTXcyblJ2bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly9pbmZvbGFodGFkYW1peC50ZXN0L3BwaWQvc2ltcHVsLWxheWFuYW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjM1OiJodHRwOi8vaW5mb2xhaHRhZGFtaXgudGVzdC9wcm9kdWN0cyI7fXM6NzoiY2FwdGNoYSI7YTozOntzOjk6InNlbnNpdGl2ZSI7YjowO3M6Mzoia2V5IjtzOjMxMjoiZXlKcGRpSTZJamxVUzBnelJWcHRjRWxGVERoUFVWWkRLeTkyUkVFOVBTSXNJblpoYkhWbElqb2lOak5CV21WbE1FeHJaSFEwVjNGaWNFbExja1ZKZWs1a1drcHFjV0U1TTNaa1ZVRXpWMHRNV2xoVmFHdHdiRzFUTW1WU1VXTTFNVGcxTUhaelZ6WlZRMWQ0VEhSQk4xQTVPRVl3UjNRMEszZEpaa1ZQY3pOTGJsaGFWMUkzVHpsQldVVnhOa3BNY0M4NWNqZzlJaXdpYldGaklqb2lNVGhoTkROa1kyVTVOREF4Tnpoa1l6ZGhNRE0xWXpWa09XVTBZV1F4WkRSa1lURXhObVExTkRNeE9UQmxObU01WWpOak16YzVOekprWXpRNFl6SXhZeUlzSW5SaFp5STZJaUo5IjtzOjc6ImVuY3J5cHQiO2I6MTt9fQ==',1753193341),('Vm1uRbE6AdXOF2ux40AMvu1E0FljnHQLCjYr1lcv',NULL,'127.0.0.1','Mozilla/5.0 (iPhone; CPU iPhone OS 15_0 like Mac OS X) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/17.5 Mobile/15A5370a Safari/602.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoicUFNRllUeVRWbk5qdWNxNmdwQU0zdzJyTjcwSDJnYVBCRm56VzFwNSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9pbmZvbGFodGFkYW1peC50ZXN0L2thaW5mb2xhaHRhIjt9fQ==',1753229001);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slugs`
--

DROP TABLE IF EXISTS `slugs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `slugs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slugs`
--

LOCK TABLES `slugs` WRITE;
/*!40000 ALTER TABLE `slugs` DISABLE KEYS */;
/*!40000 ALTER TABLE `slugs` ENABLE KEYS */;
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
  `role_id` bigint unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Super Admin','infolahtaAdmin@infolahta.com','2025-07-12 16:52:27','$2y$12$hmsUFoAKgp8wmw5bg.0x7u5mxizBFMJQCCkhN4eiFpRSSPSW3XCWq',1,'mvqmuMiOvFhvZPtdZBixcnqVm9p5W3tN9dte0JkcWFm4Ixk6ETCoWkUQc92n','2025-07-12 16:52:27','2025-07-12 16:52:27'),(2,'Adi Sabaruddin','adisabaruddin@infolahta.com',NULL,'$2y$12$h0nIkwY92m2xuLlUO2RD2.xYih45zu8ZhFkuXs3HtSu29zDQ3OfeS',2,NULL,'2025-07-12 17:19:14','2025-07-12 17:19:14'),(3,'Evi','evi@infolahta.com',NULL,'$2y$12$FdsQ0NwpZ8zDMpAo3uGJ9.XoIYV.qGWPbFXIdX8mt6abvk9YR2kp.',3,NULL,'2025-07-12 17:21:09','2025-07-12 17:21:09'),(4,'krisna','krisna@infolahta.com',NULL,'$2y$12$b02vKXwqWdDMQr4YSjdME.yjOmDy5yfmBczoBZQQ.l6fvOX0BA4t2',4,NULL,'2025-07-12 17:22:03','2025-07-12 17:22:03'),(5,'gede','gede@infolahta.com',NULL,'$2y$12$8IHYKe0z1eePpZnRSgVCM.C.ZEeaMxEIEmDanUJjP7.6cUZh4lzKC',5,NULL,'2025-07-12 17:22:32','2025-07-12 17:22:32');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visitor_count`
--

DROP TABLE IF EXISTS `visitor_count`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `visitor_count` (
  `id` int NOT NULL AUTO_INCREMENT,
  `count` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visitor_count`
--

LOCK TABLES `visitor_count` WRITE;
/*!40000 ALTER TABLE `visitor_count` DISABLE KEYS */;
INSERT INTO `visitor_count` VALUES (1,1383);
/*!40000 ALTER TABLE `visitor_count` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wherehouses`
--

DROP TABLE IF EXISTS `wherehouses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wherehouses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wherehouses_user_id_foreign` (`user_id`),
  CONSTRAINT `wherehouses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wherehouses`
--

LOCK TABLES `wherehouses` WRITE;
/*!40000 ALTER TABLE `wherehouses` DISABLE KEYS */;
INSERT INTO `wherehouses` VALUES (4,'TUUD',NULL,NULL,NULL,NULL),(5,'Gudang',NULL,NULL,NULL,NULL),(6,'Multimedia',NULL,NULL,NULL,NULL),(7,'Sisfomin',NULL,NULL,NULL,NULL),(8,'Masisfo',5,NULL,NULL,'2025-07-12 17:54:26'),(9,'R.Server',NULL,NULL,NULL,NULL),(10,'Disinfolahta',NULL,NULL,NULL,NULL),(11,'Duklahta',NULL,NULL,NULL,NULL),(12,'Sisfoops',NULL,NULL,NULL,NULL),(13,'Spri',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `wherehouses` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-07-23  8:35:02
