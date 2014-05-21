-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:8889
-- Tiempo de generación: 21-05-2014 a las 14:56:01
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.5.10

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
(2, '', 'http://4.bp.blogspot.com/_Hl9Zac09Xsc/S_P0Qeqxy1I/AAAAAAAABGQ/6Ad8c17R7ik/s400/angry');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monos`
--

CREATE TABLE `monos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom_img` varchar(50) NOT NULL,
  `url_img` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `monos`
--

INSERT INTO `monos` (`id`, `nom_img`, `url_img`) VALUES
(1, 'mono1', 'http://3.bp.blogspot.com/-UE-G8T3bwfE/Tn-UQdvg_AI/AAAAAAAAAZc/oJwjUVXTOPU/s400/mono.jpg'),
(2, 'mono2', 'http://fotos.infojardin.com/subida-foto/images/rgh1234468306j.jpg'),
(3, 'mono3', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQY7UM3cGNO3d4yYCyJqY3vxdlVu9MarbNgNFwOC0xV5Eu2QG1y'),
(4, 'mono4', 'http://www.taller26.com/26/image/data/exposicion-fronteras/el-mono-que-probo-la-carne-humana-diego-castedo.jpg');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntuacions`
--

CREATE TABLE `puntuacions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login_user` varchar(10) NOT NULL,
  `id_review` int(11) NOT NULL,
  `puntuacio` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `review`
--

CREATE TABLE `review` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `old_title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `subject` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `score` int(2) NOT NULL,
  `image` varchar(100) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `login` varchar(7) NOT NULL,
  `data_creacio` date NOT NULL,
  `url_titol` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `review`
--

INSERT INTO `review` (`id`, `title`, `old_title`, `description`, `subject`, `date`, `score`, `image`, `nom`, `login`, `data_creacio`, `url_titol`) VALUES
(1, 'review 1', '', '<p>descripci&oacute;&nbsp;<strong>review 1</strong></p>', 'projectes web', '2014-05-15', 8, '1_2.jpg', 'Claudia', 'ls25714', '2014-05-21', 'review-1'),
(2, 'review 2', '', '<p style="text-align: center;">review&nbsp;<strong>2</strong>,&nbsp;<em>crsiva</em></p>', 'projecteeees!!', '2014-05-23', 6, '2_10.jpg', 'Claudia', 'ls25714', '2014-05-21', 'review-2'),
(3, 'review 3', '', '<p>description</p>', 'subject', '2014-05-22', 1, '3_10.jpg', 'Claudia', 'ls25714', '2014-05-21', 'review-3'),
(4, 'review 4', '', '<p style="text-align: right;">ara escric a la&nbsp;<strong>dreta</strong></p>', 'subject', '2014-05-23', 7, '4_2.jpg', 'Claudia', 'ls25714', '2014-05-21', 'review-4'),
(5, 'review 5', '', '<p>descripci&oacute; de la classe&nbsp;<strong>en negreta&nbsp;<em>i cursiva</em></strong></p>\r\n<ul>\r\n<li>a</li>\r\n<li>b</li>\r\n<li>c</li>\r\n</ul>', 'subject', '2014-05-10', 9, '5_8.jpg', 'Claudia', 'ls25714', '2014-05-21', 'review-5'),
(6, 'review 6', '', '<p>descripcio</p>', 'subject', '2014-05-21', 6, '6_8.jpg', 'Claudia', 'ls25714', '2014-05-21', 'review-6'),
(7, 'review 7', '', '<p>descripcio</p>', 'subject', '2014-05-06', 1, '7_2.jpg', 'Claudia', 'ls25714', '2014-05-21', 'review-7'),
(8, 'review 8', '', '<p>descripcio</p>', 'subject', '2014-05-23', 5, '8_2.jpg', 'Claudia', 'ls25714', '2014-05-21', 'review-8'),
(9, 'review 9', '', '<p>descripcio</p>', 'subject', '2014-05-05', 1, '9_3.jpg', 'Claudia', 'ls25714', '2014-05-21', 'review-9'),
(10, 'review 10', '', '<p>descripcio 10</p>', 'subject', '2014-05-24', 5, '10_1.jpg', 'Claudia', 'ls25714', '2014-05-21', 'review-10'),
(11, 'review 11', '', '<p>descripcio</p>', 'subject', '2014-05-16', 6, '11_10.jpg', 'Claudia', 'ls25714', '2014-05-21', 'review-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuaris`
--

CREATE TABLE `usuaris` (
  `id` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `login` varchar(7) NOT NULL COMMENT 'ls#####',
  `nom` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL COMMENT 'min 6 / max 20 caràcters',
  `actiu` int(1) NOT NULL COMMENT '0: no activat / 1: activat',
  `urlActivacio` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nom` (`nom`,`email`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Usuaris/es de la pàgina web La Salle Review' AUTO_INCREMENT=1 ;
