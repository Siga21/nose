-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-01-2012 a las 21:36:18
-- Versión del servidor: 5.1.58
-- Versión de PHP: 5.3.6-13ubuntu3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Socios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Asociados`
--

CREATE TABLE IF NOT EXISTS `Asociados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `socios` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `Asociados`
--

INSERT INTO `Asociados` (`id`, `socios`, `nome`) VALUES
(1, 1, 'Javier Roca'),
(2, 1, 'manolo'),
(3, 1, 'javier roca');

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
-- Volcado de datos para la tabla `Mano`
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
  `Notas` varchar(255) NOT NULL,
  `Terminada` tinyint(1) NOT NULL,
  `socios_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B84FAE0348A1A28F` (`socios_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `Tareas`
--

INSERT INTO `Tareas` (`id`, `Nombre`, `Fecha`, `Notas`, `Terminada`, `socios_id`) VALUES
(2, 'perico of the palots', '2012-01-01 00:00:00', 'cona', 1, 2),
(3, 'perico of the palots', '2012-01-01 00:00:00', 'cona', 1, 2),
(4, 'noa perez', '2007-07-18 01:01:00', 'por favor', 1, 3);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Tareas`
--
ALTER TABLE `Tareas`
  ADD CONSTRAINT `FK_B84FAE0348A1A28F` FOREIGN KEY (`socios_id`) REFERENCES `Asociados` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
