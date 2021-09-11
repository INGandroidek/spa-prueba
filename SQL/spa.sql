-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-09-2021 a las 19:58:15
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `spa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

DROP TABLE IF EXISTS `publicacion`;
CREATE TABLE IF NOT EXISTS `publicacion` (
  `idpublicacion` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `contenido` varchar(500) NOT NULL,
  `fecha_post` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idpublicacion`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`idpublicacion`, `titulo`, `email`, `imagen`, `contenido`, `fecha_post`) VALUES
(1, 'hey brother', 'a@gmail.com', 'b.png', 'asdf', '2021-09-10 12:21:27'),
(2, 'eo', 'a@hotmail.com', 'b.png', 'asdg', '2021-09-10 12:31:58'),
(10, 'eeeeee', 'eeeeee@gmail.com', '771546f55b958db7dc6937a95f4597bf3b6fb61e4c050457dd4d7f3ed6303c6e.jpg', 'si tu fumas hierba', '2021-09-10 15:45:40'),
(12, 'eeeeoq', 'yes@gmail.com', '771546f55b958db7dc6937a95f4597bf3b6fb61e4c050457dd4d7f3ed6303c6e.jpg', 'eo', '2021-09-10 16:41:18'),
(13, 'hola', 'valen@gmail.com', '771546f55b958db7dc6937a95f4597bf3b6fb61e4c050457dd4d7f3ed6303c6e.jpg', 'noo jiraiya', '2021-09-11 13:13:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `usuario`, `pass`) VALUES
(1, 'admin', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
