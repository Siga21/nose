-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-12-2011 a las 22:53:45
-- Versión del servidor: 5.1.54
-- Versión de PHP: 5.3.5-1ubuntu7.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Socios`
--
CREATE DATABASE `Socios` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Socios`;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `Mano`
--

INSERT INTO `Mano` (`id`, `Nombre`, `Especialidad`, `Fecha_De_Nacimiento`) VALUES
(1, 'roca67', 'Coordinador', '1967-08-01 20:43:29'),
(2, 'jroca72', 'Technology ingeneer', '2006-10-05 06:00:00'),
(3, 'nolo73', 'triquillon', '2006-05-01 00:00:00');
