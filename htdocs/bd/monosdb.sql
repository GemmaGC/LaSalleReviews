-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-03-2014 a las 21:06:39
-- Versión del servidor: 5.5.33
-- Versión de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `monosdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monos`
--

CREATE TABLE `monos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom_img` varchar(50) NOT NULL,
  `url_img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Volcado de datos para la tabla `monos`
--

INSERT INTO `monos` (`id`, `nom_img`, `url_img`) VALUES
(1, 'img1', 'http://2.bp.blogspot.com/_GmACgXuPAgU/TOOYr61Zs3I/AAAAAAAAAKk/CdMsEmYCUEA/s400/mono.jpg'),
(2, 'mono2', 'http://www.monopedia.es/wp-content/uploads/2012/12/sloppo17.jpg');
