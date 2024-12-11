-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.32-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para heladeria
CREATE DATABASE IF NOT EXISTS `heladeria` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `heladeria`;

-- Volcando estructura para tabla heladeria.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `apellidos` varchar(30) DEFAULT NULL,
  `nombres` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla heladeria.clientes: ~10 rows (aproximadamente)
INSERT INTO `clientes` (`id`, `apellidos`, `nombres`) VALUES
	(1, NULL, NULL),
	(2, 'Pérez Sánchez', 'Miguel'),
	(3, 'López Romero', 'Luis Fernando'),
	(4, 'Herrera Vargas', 'Sofía Elena'),
	(5, 'Morales Castro', 'Lucía'),
	(6, 'Torres Silva', 'Andrés David'),
	(7, 'Rojas Martínez', 'Teresa'),
	(8, 'Romero Morales', 'Fernando Miguel'),
	(9, 'Delgado Herrera', 'Isabel'),
	(10, 'García Martínez', 'Juan Carlos');

-- Volcando estructura para tabla heladeria.compras
CREATE TABLE IF NOT EXISTS `compras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `venta` int(11) NOT NULL,
  `id_clientes` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_clientes` (`id_clientes`),
  CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_clientes`) REFERENCES `clientes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla heladeria.compras: ~10 rows (aproximadamente)
INSERT INTO `compras` (`id`, `fecha`, `venta`, `id_clientes`) VALUES
	(1, '2024-06-04 09:30:20', 3, 1),
	(2, '2024-06-04 10:21:12', 5, 1),
	(3, '2024-06-05 13:01:01', 1, 2),
	(4, '2024-06-05 16:55:45', 7, 3),
	(5, '2024-06-05 18:20:34', 6, 1),
	(6, '2024-06-06 08:56:23', 3, 7),
	(7, '2024-06-07 13:08:29', 2, 3),
	(8, '2024-06-07 15:06:12', 10, 1),
	(9, '2024-06-08 10:30:03', 15, 8),
	(10, '2024-06-08 11:02:00', 1, 1);

-- Volcando estructura para tabla heladeria.compras_helados
CREATE TABLE IF NOT EXISTS `compras_helados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_compras` int(11) NOT NULL,
  `id_helados` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_compras` (`id_compras`),
  KEY `id_helados` (`id_helados`),
  CONSTRAINT `compras_helados_ibfk_1` FOREIGN KEY (`id_compras`) REFERENCES `compras` (`id`),
  CONSTRAINT `compras_helados_ibfk_2` FOREIGN KEY (`id_helados`) REFERENCES `helados` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla heladeria.compras_helados: ~10 rows (aproximadamente)
INSERT INTO `compras_helados` (`id`, `id_compras`, `id_helados`) VALUES
	(1, 1, 1),
	(2, 2, 7),
	(3, 3, 4),
	(4, 4, 2),
	(5, 5, 10),
	(6, 6, 1),
	(7, 7, 3),
	(8, 8, 6),
	(9, 9, 8),
	(10, 10, 7);

-- Volcando estructura para tabla heladeria.helados
CREATE TABLE IF NOT EXISTS `helados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sabor` varchar(20) NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla heladeria.helados: ~10 rows (aproximadamente)
INSERT INTO `helados` (`id`, `sabor`, `stock`) VALUES
	(1, 'Oreo', 12),
	(2, 'Pay de fresa', 8),
	(3, 'Pay de limón', 10),
	(4, 'Fresas con crema', 12),
	(5, 'Snickers', 6),
	(6, 'Pingüino', 2),
	(7, 'Mazapán', 9),
	(8, 'Nutella', 11),
	(9, 'Mango con chile', 9),
	(10, 'Vainilla', 10);

-- Volcando estructura para tabla heladeria.helados_insumos
CREATE TABLE IF NOT EXISTS `helados_insumos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_helados` int(11) NOT NULL,
  `id_insumos` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_helados` (`id_helados`),
  KEY `id_insumos` (`id_insumos`),
  CONSTRAINT `helados_insumos_ibfk_1` FOREIGN KEY (`id_helados`) REFERENCES `helados` (`id`),
  CONSTRAINT `helados_insumos_ibfk_2` FOREIGN KEY (`id_insumos`) REFERENCES `insumos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla heladeria.helados_insumos: ~10 rows (aproximadamente)
INSERT INTO `helados_insumos` (`id`, `id_helados`, `id_insumos`) VALUES
	(1, 1, 1),
	(2, 2, 1),
	(3, 3, 1),
	(4, 4, 1),
	(5, 5, 1),
	(6, 6, 1),
	(7, 7, 1),
	(8, 8, 1),
	(9, 9, 10),
	(10, 10, 1);

-- Volcando estructura para tabla heladeria.insumos
CREATE TABLE IF NOT EXISTS `insumos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla heladeria.insumos: ~10 rows (aproximadamente)
INSERT INTO `insumos` (`id`, `nombre`, `stock`) VALUES
	(1, 'Leche líquida', 5),
	(2, 'Leche en polvo', 8),
	(3, 'Leche condensada', 5),
	(4, 'Cacao en polvo', 5),
	(5, 'Galletas Oreo', 1),
	(6, 'Galletas María', 1),
	(7, 'Zuko de fresa', 3),
	(8, 'Zuko de limón', 3),
	(9, 'Mazapán', 10),
	(10, 'Mango', 3);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
