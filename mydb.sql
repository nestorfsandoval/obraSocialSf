-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-11-2012 a las 16:27:41
-- Versión del servidor: 5.1.63
-- Versión de PHP: 5.3.5-1ubuntu7.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afiliado`
--

CREATE TABLE IF NOT EXISTS `afiliado` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nro_doc` int(11) DEFAULT NULL,
  `apenombre` varchar(45) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `fechanac` date DEFAULT NULL,
  `estadocivil` varchar(45) DEFAULT NULL,
  `calle` varchar(45) DEFAULT NULL,
  `altura` varchar(45) DEFAULT NULL,
  `piso` varchar(45) DEFAULT NULL,
  `depto` char(1) DEFAULT NULL,
  `plan_id` int(10) unsigned NOT NULL,
  `tipodoc_id` int(10) unsigned NOT NULL,
  `reparticion_id` int(10) unsigned NOT NULL,
  `localidad_id` int(10) unsigned NOT NULL,
  `fechaingreso` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `afiliado_U_1` (`nro_doc`),
  KEY `fk_afiliado_plan` (`plan_id`),
  KEY `fk_afiliado_tipodoc1` (`tipodoc_id`),
  KEY `fk_afiliado_reparticion1` (`reparticion_id`),
  KEY `fk_afiliado_localidad1` (`localidad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `afiliado`
--

INSERT INTO `afiliado` (`id`, `nro_doc`, `apenombre`, `sexo`, `fechanac`, `estadocivil`, `calle`, `altura`, `piso`, `depto`, `plan_id`, `tipodoc_id`, `reparticion_id`, `localidad_id`, `fechaingreso`) VALUES
(2, 12345564, 'Luis Arrix', '0', '1983-05-18', '0', 'adasd', '123', '2', '2', 1, 4, 1, 3, '2004-11-17'),
(3, 32456456, 'Matias Genzana', '0', '1983-05-18', '0', 'dasdas', '12', '21', '2', 1, 4, 1, 3, '2004-11-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE IF NOT EXISTS `localidad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`id`, `descripcion`) VALUES
(1, 'Gaiman'),
(2, 'Trelew'),
(3, 'Rawson');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE IF NOT EXISTS `plan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  `descuento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `plan`
--

INSERT INTO `plan` (`id`, `descripcion`, `descuento`) VALUES
(1, 'medio', '50%'),
(2, 'full', '100%');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparticion`
--

CREATE TABLE IF NOT EXISTS `reparticion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `reparticion`
--

INSERT INTO `reparticion` (`id`, `descripcion`) VALUES
(1, 'Municipalidad'),
(2, 'Policía'),
(3, 'Obras Públicas'),
(4, 'Concejo Deliberante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodoc`
--

CREATE TABLE IF NOT EXISTS `tipodoc` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `tipodoc`
--

INSERT INTO `tipodoc` (`id`, `descripcion`) VALUES
(1, 'LC'),
(2, 'CI'),
(3, 'LE'),
(4, 'DNI');

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `afiliado`
--
ALTER TABLE `afiliado`
  ADD CONSTRAINT `afiliado_FK_1` FOREIGN KEY (`plan_id`) REFERENCES `plan` (`id`),
  ADD CONSTRAINT `afiliado_FK_2` FOREIGN KEY (`tipodoc_id`) REFERENCES `tipodoc` (`id`),
  ADD CONSTRAINT `afiliado_FK_3` FOREIGN KEY (`reparticion_id`) REFERENCES `reparticion` (`id`),
  ADD CONSTRAINT `afiliado_FK_4` FOREIGN KEY (`localidad_id`) REFERENCES `localidad` (`id`);
