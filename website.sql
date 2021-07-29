-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.19-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for website
CREATE DATABASE IF NOT EXISTS `website` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `website`;

-- Dumping structure for table website.bcsoslider
CREATE TABLE IF NOT EXISTS `bcsoslider` (
  `id` int(11) DEFAULT NULL,
  `dptfullname` varchar(50) DEFAULT NULL,
  `character` longtext DEFAULT NULL,
  `openorclosed` varchar(50) DEFAULT NULL,
  `leosofthemonth1` varchar(50) DEFAULT NULL,
  `leosofthemonth2` varchar(50) DEFAULT NULL,
  `mustbe` varchar(50) DEFAULT NULL,
  `depgrowth` varchar(50) DEFAULT NULL,
  `applylink` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table website.bcsoslider: ~1 rows (approximately)
/*!40000 ALTER TABLE `bcsoslider` DISABLE KEYS */;
INSERT INTO `bcsoslider` (`id`, `dptfullname`, `character`, `openorclosed`, `leosofthemonth1`, `leosofthemonth2`, `mustbe`, `depgrowth`, `applylink`) VALUES
	(1, 'Blaine County Sheriff\'s Office', 'https://i.ibb.co/xJgLtZr/2021-07-16-19-31-50-Window.png', 'fas fa-lock', 'UNIT1', 'UNIT2', '15', '70', 'linkhere');
/*!40000 ALTER TABLE `bcsoslider` ENABLE KEYS */;

-- Dumping structure for table website.lspdslider
CREATE TABLE IF NOT EXISTS `lspdslider` (
  `id` int(11) DEFAULT NULL,
  `dptfullname` varchar(50) DEFAULT NULL,
  `character` longtext DEFAULT NULL,
  `openorclosed` varchar(50) DEFAULT NULL,
  `leosofthemonth1` varchar(50) DEFAULT NULL,
  `leosofthemonth2` varchar(50) DEFAULT NULL,
  `mustbe` varchar(50) DEFAULT NULL,
  `depgrowth` varchar(50) DEFAULT NULL,
  `applylink` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table website.lspdslider: ~0 rows (approximately)
/*!40000 ALTER TABLE `lspdslider` DISABLE KEYS */;
INSERT INTO `lspdslider` (`id`, `dptfullname`, `character`, `openorclosed`, `leosofthemonth1`, `leosofthemonth2`, `mustbe`, `depgrowth`, `applylink`) VALUES
	(1, 'Los Santos Police Department', 'https://i.ibb.co/n6B3Hhj/99-997282-gta-san-andreas-png-transparent-png.png', 'fas fa-lock', 'UNIT1', 'UNIT2', '15', '60', NULL);
/*!40000 ALTER TABLE `lspdslider` ENABLE KEYS */;

-- Dumping structure for table website.servers
CREATE TABLE IF NOT EXISTS `servers` (
  `id` int(11) DEFAULT NULL,
  `servername` varchar(50) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `serverlogo` longtext DEFAULT NULL,
  `released` varchar(50) DEFAULT NULL,
  `serverip` longtext DEFAULT NULL,
  `serverport` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table website.servers: ~0 rows (approximately)
/*!40000 ALTER TABLE `servers` DISABLE KEYS */;
INSERT INTO `servers` (`id`, `servername`, `description`, `serverlogo`, `released`, `serverip`, `serverport`) VALUES
	(1, 'MyServer', 'BlaBlaBlaBlaBla BlaBlaBlaBlaBlaBlaBlaBlaBlaBla BlaBlaBlaBlaBlaBlaBlaBlaBlaBla BlaBlaBlaBlaBlaBlaBlaBlaBlaBla BlaBlaBlaBlaBlaBlaBlaBlaBlaBla BlaBlaBlaBlaBla', 'https://i.ibb.co/1qxmB0k/90s-roleplay-1.png', 'July 29 2020', '155.254.213.107', '30120');
/*!40000 ALTER TABLE `servers` ENABLE KEYS */;

-- Dumping structure for table website.sildersettings
CREATE TABLE IF NOT EXISTS `sildersettings` (
  `id` int(11) NOT NULL,
  `logo` text NOT NULL,
  `department1` longtext DEFAULT NULL,
  `department2` longtext DEFAULT NULL,
  `department3` longtext DEFAULT NULL,
  `playergrowth` longtext DEFAULT NULL,
  `discord` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table website.sildersettings: ~0 rows (approximately)
/*!40000 ALTER TABLE `sildersettings` DISABLE KEYS */;
INSERT INTO `sildersettings` (`id`, `logo`, `department1`, `department2`, `department3`, `playergrowth`, `discord`) VALUES
	(1, 'https://i.ibb.co/1qxmB0k/90s-roleplay-1.png', 'BCSO', 'LSPD', 'VC', '50', 'discord.gg/urinvite');
/*!40000 ALTER TABLE `sildersettings` ENABLE KEYS */;

-- Dumping structure for table website.sitesettings
CREATE TABLE IF NOT EXISTS `sitesettings` (
  `id` int(11) NOT NULL,
  `sitename` text NOT NULL,
  `invite` text NOT NULL,
  `favicon` longtext DEFAULT NULL,
  `logo` longtext DEFAULT NULL,
  `discord` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table website.sitesettings: ~1 rows (approximately)
/*!40000 ALTER TABLE `sitesettings` DISABLE KEYS */;
INSERT INTO `sitesettings` (`id`, `sitename`, `invite`, `favicon`, `logo`, `discord`) VALUES
	(1, 'MyWeb', '', 'https://i.ibb.co/SctZd1P/favicon.png', 'https://i.ibb.co/mBnRcdV/90s-roleplay-1.png', 'https://discord.gg/eMnAupj8Jf');
/*!40000 ALTER TABLE `sitesettings` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
