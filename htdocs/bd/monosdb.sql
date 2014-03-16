-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-03-2014 a las 12:02:14
-- Versión del servidor: 5.5.33
-- Versión de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `monosdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marmotas`
--

CREATE TABLE `marmotas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom_img` varchar(50) NOT NULL,
  `url_img` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `marmotas`
--

INSERT INTO `marmotas` (`id`, `nom_img`, `url_img`) VALUES
(1, 'marmo1', 'http://4.bp.blogspot.com/_hKN2sxTxB4w/TUWWBpceAhI/AAAAAAAAAAU/Sn3xsu6JdkY/s220/marmota%2Bdormilona.g'),
(2, 'marmo2', 'http://www.daeria.com/data/img/noticias/original/1328221015.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monos`
--

CREATE TABLE `monos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom_img` varchar(50) NOT NULL,
  `url_img` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `monos`
--

INSERT INTO `monos` (`id`, `nom_img`, `url_img`) VALUES
(1, 'mico1', 'http://funnytoofunny.com/wp-content/uploads/2013/09/Cute-Naughty-Funny-Monkey-Having-Fun.jpg'),
(2, 'mono2', 'http://www.funnypoon.com/wp-content/uploads/2012/11/Funny-Monkey-Wallpapers-for-you.jpg'),
(3, 'monito', 'http://4.bp.blogspot.com/_Hl9Zac09Xsc/S_P0Qeqxy1I/AAAAAAAABGQ/6Ad8c17R7ik/s400/angry-monkey-7399791.jpg'),
(4, 'mono', 'http://images.nationalgeographic.com/wpf/media-live/photos/000/007/cache/spider-monkey_719_600x450.jpg'),
(5, 'monoo', 'http://www.geekosystem.com/wp-content/uploads/2014/01/monkey.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ornitorrincos`
--

CREATE TABLE `ornitorrincos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom_img` varchar(50) NOT NULL,
  `url_img` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `ornitorrincos`
--

INSERT INTO `ornitorrincos` (`id`, `nom_img`, `url_img`) VALUES
(1, 'orni1', 'http://img3.wikia.nocookie.net/__cb20120322061100/p__/phineasandferbenespanol/es/images/f/f6/Perry.png'),
(2, 'orni2', 'http://ambientalsustentavel.org/wp-content/uploads/2011/07/ornitorrinco.jpg.scaled600.jpg'),
(3, 'orni3', 'http://plandemediosmazivos.files.wordpress.com/2011/09/ornitorrinco11.jpg');
