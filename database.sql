-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for corporate-finance
CREATE DATABASE IF NOT EXISTS `corporate-finance` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `corporate-finance`;

-- Dumping structure for table corporate-finance.asset_list
CREATE TABLE IF NOT EXISTS `asset_list` (
  `id_asset_list` int NOT NULL AUTO_INCREMENT,
  `id_asset_type` int DEFAULT NULL,
  `category` int DEFAULT NULL,
  `owner` int DEFAULT NULL,
  `condition` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_asset_list`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table corporate-finance.asset_list: ~0 rows (approximately)
DELETE FROM `asset_list`;

-- Dumping structure for table corporate-finance.asset_type
CREATE TABLE IF NOT EXISTS `asset_type` (
  `id_asset_type` int NOT NULL AUTO_INCREMENT,
  `name_asset_type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_asset_type`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table corporate-finance.asset_type: ~0 rows (approximately)
DELETE FROM `asset_type`;
INSERT INTO `asset_type` (`id_asset_type`, `name_asset_type`) VALUES
	(1, 'Residential'),
	(2, 'Land Banks');

-- Dumping structure for table corporate-finance.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table corporate-finance.users: ~1 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `permissions`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
  (1, 'Amirah Athifah', 'azaharmyra95@gmail.com', NULL, '$2y$12$/DrhfIhZWzria/PVN9grIelQfH1TsaMyBeK9/VPttwQYQrdtnAoVC', '[\"asset.create\",\"asset.edit\",\"asset.delete\"]', NULL, '2024-03-24 17:31:42', '2024-03-24 17:31:42', NULL),
  (2, 'Halim', 'halim@gmail.com', NULL, '$2y$12$/DrhfIhZWzria/PVN9grIelQfH1TsaMyBeK9/VPttwQYQrdtnAoVC', '[\"asset.view\"]', NULL, '2024-03-24 17:31:42', '2024-03-24 17:31:42', NULL),
  (3, 'Siti', 'siti@gmail.com', NULL, '$2y$12$/DrhfIhZWzria/PVN9grIelQfH1TsaMyBeK9/VPttwQYQrdtnAoVC', '[\"asset.create\",\"asset.edit\",\"asset.delete\"]', NULL, '2024-03-24 17:31:42', '2024-03-24 17:31:42', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
