-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2016 a las 05:03:26
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyectofinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(11) NOT NULL,
  `nombre_usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `primer_apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `segundo_apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rol` enum('ROL_ADMIN','ROL_PROFESOR','ROL_ESTUDIANTE','ROL_FANILIAR') COLLATE utf8_unicode_ci DEFAULT NULL,
  `esta_activo` tinyint(1) NOT NULL,
  `fue_creado` datetime NOT NULL,
  `fue_actualizado` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `nombre`, `primer_apellido`, `segundo_apellido`, `email`, `password`, `rol`, `esta_activo`, `fue_creado`, `fue_actualizado`) VALUES
(1, 'admin', 'Administrador', '', '', 'admin@proyecto.com', 'admin', 'ROL_ADMIN', 1, '2016-11-01 18:59:34', '2016-11-01 18:59:34'),
(2, 'juan216', 'Juan', 'Perez', 'Perez', 'juan216@proyecto.com', '123', 'ROL_PROFESOR', 1, '2016-11-01 19:03:22', '2016-11-01 19:03:22'),
(3, 'jose216', 'Jose', 'Perez', 'Castro', 'jose216@proyecto.com', '123', 'ROL_ESTUDIANTE', 1, '2016-11-01 19:03:22', '2016-11-01 19:03:22'),
(4, 'maria216', 'Maria', 'Perez', 'Furnier', 'maria216@proyecto.com', '123', 'ROL_FANILIAR', 1, '2016-11-01 19:04:38', '2016-11-01 19:04:38');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
