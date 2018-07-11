-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-05-2016 a las 04:36:50
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

DROP DATABASE IF EXISTS Futbolistas;
CREATE DATABASE Futbolistas;
USE Futbolistas;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `futbolistas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `club`
--

CREATE TABLE `club` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estadio` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='tabla club';

--
-- Volcado de datos para la tabla `club`
--

INSERT INTO `club` (`id`, `nombre`, `estadio`) VALUES
(1, 'Colo-Colo', 'Estadio Monumental'),
(2, 'U. de Concepción', 'Alcaldesa Ester Roa 	3 '),
(3, 'Cobresal 	', 'Estadio El Cobre'),
(4, 'U. Catolica', 'San Carlos de Apoquindo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `futbolista`
--

CREATE TABLE `futbolista` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `id_posicion` int(11) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `id_club` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='tabla futbolista';

--
-- Volcado de datos para la tabla `futbolista`
--

INSERT INTO `futbolista` (`id`, `nombre`, `edad`, `id_posicion`, `id_pais`, `id_club`) VALUES
(1, 'Esteban Paredes', 35, 1, 1, 1),
(2, 'Jaime Valdes', 35, 2, 1, 1),
(3, 'Gonzalo Fierro', 33, 3, 1, 1),
(4, 'Justo Villar', 38, 4, 4, 1),
(5, 'Matias Conti ', 26, 1, 2, 2),
(6, 'Francisco Portillo', 28, 2, 4, 2),
(7, 'Waldo Ponce', 33, 3, 1, 2),
(8, 'Cristian Muñoz', 38, 4, 2, 2),
(9, 'Ever Cantero', 30, 1, 4, 3),
(10, 'Fabian Astorga', 19, 2, 1, 3),
(11, 'Alejandro Lopez', 26, 3, 2, 3),
(12, 'Eduardo Lobos', 34, 4, 1, 3),
(13, 'Roberto Gutierrez', 33, 1, 1, 4),
(14, 'Marco Medel', 26, 1, 3, 4),
(15, 'Cristian Alvarez', 36, 3, 1, 4),
(16, 'Cristopher Toselli', 27, 4, 1, 4),
(17, 'Maximiliano Fuentes ', 27, 0, 0, 0),
(18, 'Jose Fuentes NuÃ±ez', 26, 2, 5, 3),
(19, 'Rene Patricio Carcamo', 30, 3, 6, 1),
(22, 'Pedro Pablo', 35, 3, 3, 4),
(23, 'Joaquin Martinez', 22, 1, 7, 4),
(24, 'Julio Portillo', 35, 3, 8, 4),
(27, 'Chueco Ponce', 29, 3, 6, 1),
(28, 'Maximiliano', 27, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='tabla pais';

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombre`) VALUES
(1, 'Chile'),
(2, 'Argentina'),
(3, 'Uruguay'),
(4, 'Paraguay'),
(5, 'Colombia'),
(6, 'Brasil'),
(7, 'Ecuador'),
(8, 'Peru');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posicion`
--

CREATE TABLE `posicion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='tabla posicion';

--
-- Volcado de datos para la tabla `posicion`
--

INSERT INTO `posicion` (`id`, `nombre`) VALUES
(1, 'Delantero'),
(2, 'Volante'),
(3, 'Defensa'),
(4, 'Portero');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `futbolista`
--
ALTER TABLE `futbolista`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posicion`
--
ALTER TABLE `posicion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `club`
--
ALTER TABLE `club`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `futbolista`
--
ALTER TABLE `futbolista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `posicion`
--
ALTER TABLE `posicion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
