-- phpMyAdmin SQL Dump
-- version 3.3.7deb5build0.10.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-12-2011 a las 15:26:04
-- Versión del servidor: 5.1.49
-- Versión de PHP: 5.3.3-1ubuntu9.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Socios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Mano`
--

CREATE TABLE IF NOT EXISTS `Mano` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(20) NOT NULL,
  `Especialidad` varchar(25) NOT NULL,
  `Fecha_De_Nacimiento` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `Mano`
--

INSERT INTO `Mano` (`id`, `Nombre`, `Especialidad`, `Fecha_De_Nacimiento`) VALUES
(1, 'roca69', 'controller', '1986-12-25 16:43:27'),
(2, 'jroca72', 'Technology ingeneer', '2006-10-05 06:00:00'),
(3, 'nolo73', 'triquillon', '2006-05-01 00:00:00'),
(4, 'jroca72', 'prueba', '2011-12-27 13:31:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tareas`
--

CREATE TABLE IF NOT EXISTS `Tareas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(25) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Socio` int(11) NOT NULL,
  `Notas` varchar(255) NOT NULL,
  `Terminada` tinyint(1) NOT NULL,
  `Socios_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B84FAE03CA50202C` (`Socios_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `Tareas`
--

INSERT INTO `Tareas` (`id`, `Nombre`, `Fecha`, `Socio`, `Notas`, `Terminada`, `Socios_id`) VALUES
(1, 'hacer inners', '2012-12-27 00:00:00', 2, 'eso, hacer inner en controller con dos bases', 0, 2),
(2, 'prueba', '2006-01-01 00:00:00', 3, '33333', 0, 2);

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `Tareas`
--
ALTER TABLE `Tareas`
  ADD CONSTRAINT `FK_B84FAE03CA50202C` FOREIGN KEY (`Socios_id`) REFERENCES `Tareas` (`id`);
