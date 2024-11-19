-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-11-2024 a las 06:10:28
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mandil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallescompra`
--

CREATE TABLE `detallescompra` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detallescompra`
--

INSERT INTO `detallescompra` (`id`, `usuario_id`, `producto_id`, `cantidad`, `total`) VALUES
(1, 1, 1, 2, 420.00),
(2, 1, 2, 1, 250.00),
(3, 2, 1, 2, 420.00),
(4, 2, 2, 1, 250.00),
(5, 3, 1, 2, 420.00),
(6, 3, 2, 1, 250.00),
(7, 10, 1, 2, 420.00),
(8, 10, 2, 1, 250.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(9) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `precio` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`) VALUES
(1, 'Frappe de Fresa', 210),
(2, 'Frappe de Caramelo', 250),
(3, 'Frappe de Oreo', 230),
(4, 'Mangú con cebolla, a', 310),
(5, 'Tortilla de Huevo co', 200),
(6, 'Panqueque con chispa', 290),
(7, 'Bizcocho de Chocolat', 949),
(8, 'Bizcocho de Fresa', 1000),
(9, 'Bizcocho de Cumpleañ', 2500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `direccion` varchar(23) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `tarjeta` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `direccion`, `telefono`, `tarjeta`) VALUES
(1, 'Juneily', 'Juneily@gmail.com', 'falsa123', '23242142', '1232142143'),
(2, 'Juneily', 'Juneily@gmail.com', 'falsa123', '23242142', '1232142143'),
(3, 'Juneily', 'Juneily@gmail.com', 'falsa123', '23242142', '1232142143'),
(4, 'Juneily', 'Juneily@gmail.com', 'falsa123', '23242142', '1232142143'),
(5, 'Brayden', 'marlon_rp11@hotmail.com', 'falsa123', '23242142', '1232142143'),
(6, 'Brayden', 'Juneily@gmail.com', 'falsa123', '23242142', '1232142143'),
(7, 'Brayden', 'marlon_rp11@hotmail.com', 'falsa1234', '23242142', '1232142143'),
(8, 'Juneily', 'marlon_rp11@hotmail.com', 'falsa123', '23242142', '123214214333'),
(9, 'Juneily', 'Juneily@gmail.com', 'falsa1234', '23242142', '1232142143'),
(10, 'elpepe', 'marlon_rp11@hotmail.com', 'falsa123', '23242142', '1232142143');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detallescompra`
--
ALTER TABLE `detallescompra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detallescompra`
--
ALTER TABLE `detallescompra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallescompra`
--
ALTER TABLE `detallescompra`
  ADD CONSTRAINT `detallescompra_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `detallescompra_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
