-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2020 a las 21:34:57
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `delicias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'Tortas especiales'),
(2, 'Postres clásicos'),
(3, 'Dulces surtidos'),
(4, 'Sin categoria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` int(11) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `categoria_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `descripcion`, `foto`, `categoria_id`) VALUES
(1, 'Espumitas de limon', 100, 'Espumitas de limon', NULL, 3),
(2, 'Cuadraditos de Brownie', 110, 'Cuadraditos de Brownie', NULL, 3),
(3, 'Alfajorcitos de Maizena', 130, 'Alfajorcitos de Maizena', NULL, 3),
(4, 'Alfajorcitos de Masa Sable', 140, 'Alfajorcitos de Masa Sable', NULL, 3),
(5, 'Cococake', 160, 'Cococake', NULL, 3),
(6, 'Rollitos de Dulce de Leche', 180, 'Rollitos de Dulce de Leche', NULL, 3),
(7, 'Torta Marquise', 300, 'Torta Marquise', NULL, 1),
(8, 'Torta de zanahoria', 170, 'Torta de zanahoria', NULL, 1),
(9, 'Torta de Chocolate', 300, 'Torta de Chocolate', NULL, 1),
(10, 'Lemon pie', 850, 'Lemon pie', NULL, 2),
(11, 'Tarta Toffi', 725, 'Tarta Toffi', NULL, 2),
(12, 'Pastafrola', 250, 'Pastafrola', NULL, 2),
(13, 'Tarta Frutal', 400, 'Tarta Frutal', NULL, 2),
(14, 'Torta Brownie', 450, 'Torta Brownie', NULL, 2),
(15, 'Chessecake', 780, 'Chessecake', NULL, 2),
(16, 'Chocotorta', 190, 'Chocotorta', NULL, 1),
(17, 'Torta Moka', 200, 'Torta Moka', NULL, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
