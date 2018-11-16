-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-11-2018 a las 12:47:15
-- Versión del servidor: 5.7.24-0ubuntu0.16.04.1
-- Versión de PHP: 7.2.6-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cbb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL,
  `nombre_completo` varchar(100) COLLATE utf8_bin NOT NULL,
  `nombre_usuario` varchar(100) COLLATE utf8_bin NOT NULL,
  `email_usuario` varchar(100) COLLATE utf8_bin NOT NULL,
  `pais_nacimiento` varchar(100) COLLATE utf8_bin NOT NULL,
  `img_avatar` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `pass_usuario` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `nombre_completo`, `nombre_usuario`, `email_usuario`, `pais_nacimiento`, `img_avatar`, `pass_usuario`) VALUES
(1, 'stefania', 'stefi', 'stefi@stefi.com', 'Vietnam', NULL, '$2y$10$yqROxTg.nb8lyOUwLjlhGeTX6pSdkqPjYiDVxnEy3YgWOenhvbvDK'),
(2, 'marcos', 'marquitos', 'marcos@marcos.com', 'TurkmenistÃ¡n', NULL, '$2y$10$rRU7M9g6Oi1JsN6Uct5QV.UillXFCKpb7zsTeP1z3SPcfs34krK82'),
(3, 'Clack Kent', 'Superman', 'super@super.com', 'Yemen', NULL, '$2y$10$DesNDKeSfbQHY9jTm.jEdeROVA.PvvwrXsiNvDq0YhGiojlg.AO6e');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`),
  ADD UNIQUE KEY `nombreusuario_UNIQUE` (`nombre_usuario`),
  ADD UNIQUE KEY `email_UNIQUE` (`email_usuario`),
  ADD UNIQUE KEY `idusuarios_UNIQUE` (`idusuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
