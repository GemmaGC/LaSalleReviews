-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2014 a las 18:33:59
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `monosdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marmotas`
--

CREATE TABLE IF NOT EXISTS `marmotas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom_img` varchar(50) NOT NULL,
  `url_img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `marmotas`
--

INSERT INTO `marmotas` (`id`, `nom_img`, `url_img`) VALUES
(1, 'comiendo', 'http://t0.gstatic.com/images?q=tbn:ANd9GcSLl1EX3smNKe5nSRmMwUjvhItMJJ8dPGHGmZKhbEQNtczZumgSDw'),
(2, 'peleaVecinos', 'http://2.bp.blogspot.com/_0b99TzPtUtc/S2hLQmF5WzI/AAAAAAAAAXw/kOA_JfBn5kI/s1600/Marmotas4.jpg'),
(3, 'primerBeso', 'http://t3.gstatic.com/images?q=tbn:ANd9GcRIQYA6jI_TlxZfRh6AveeP3cvIwA1gA9khP7RhcDQ-Sfn4nitihg'),
(4, 'humanos', 'http://3.bp.blogspot.com/-MbDfoAbZi2U/TypH7Vq3GzI/AAAAAAAAEss/vhXmC38fUyM/s1600/marmota+suplicante.j'),
(5, 'nuevosAmigos', 'http://www.ninha.bio.br/biologia/mamiferos/marmota/passaros_e_marmota.jpg'),
(6, 'familia', 'http://www.simbiosisactiva.org/paginas/galeria/var/albums/MAMIFEROS/marmota%20(1).jpg?m=1324984800'),
(7, 'deCaza', 'http://4.bp.blogspot.com/_e-sTeZdutn4/SSCTJr_fLgI/AAAAAAAAB_E/VDVjo-q_ZL8/s320/marmota.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monos`
--

CREATE TABLE IF NOT EXISTS `monos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom_img` varchar(50) NOT NULL,
  `url_img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Volcado de datos para la tabla `monos`
--

INSERT INTO `monos` (`id`, `nom_img`, `url_img`) VALUES
(1, 'img1', 'http://2.bp.blogspot.com/_GmACgXuPAgU/TOOYr61Zs3I/AAAAAAAAAKk/CdMsEmYCUEA/s400/mono.jpg'),
(2, 'mono2', 'http://www.monopedia.es/wp-content/uploads/2012/12/sloppo17.jpg'),
(37, 'monas', 'http://t3.gstatic.com/images?q=tbn:ANd9GcSu5FTqRufkzg8s5nhRYjcQfGP9_4-idKLxaSPRJyOtZP45GGDA'),
(38, 'Sun', 'http://4.bp.blogspot.com/_-kb8-4bdnTY/SPo6ONiz_0I/AAAAAAAAA1Y/uDQuRBJVlks/s400/Mono.jpg'),
(39, '3', 'http://cdn.seventeen.taconeras.net/files/2012/02/monos.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ornitorincos`
--

CREATE TABLE IF NOT EXISTS `ornitorincos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom_img` varchar(50) NOT NULL,
  `url_img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `ornitorincos`
--

INSERT INTO `ornitorincos` (`id`, `nom_img`, `url_img`) VALUES
(1, 'disfraz', 'http://vitriolo.zonalibre.org/archives/disfraz%20de%20tal.jpg'),
(2, 'sombrerito', 'http://t2.gstatic.com/images?q=tbn:ANd9GcS019106aWLdEaQh_-oY4hp0xHDhniQe1b1hBT53ygD8WwqWC5-'),
(3, 'DisfrazPerry', 'http://sp270.fotolog.com/photo/35/17/13/adobephotoshopcs/1275690628944_f.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
