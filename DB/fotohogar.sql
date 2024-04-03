-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2023 a las 21:16:19
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
-- Base de datos: `fotohogar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

CREATE TABLE `inmuebles` (
  `id` int(6) UNSIGNED NOT NULL,
  `id_ref` varchar(5) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `opcion` varchar(30) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `m2` int(50) NOT NULL,
  `precio` int(50) NOT NULL,
  `habs` int(50) NOT NULL,
  `banys` int(50) NOT NULL,
  `ascensor` tinyint(4) NOT NULL,
  `publicado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inmuebles`
--

INSERT INTO `inmuebles` (`id`, `id_ref`, `descripcion`, `opcion`, `tipo`, `m2`, `precio`, `habs`, `banys`, `ascensor`, `publicado`) VALUES
(1, '1526A', 'Chalet en Madrid', 'Piso', 'Venta', 150, 152, 5, 2, 0, '10/12/2023'),
(2, '1527A', 'Piso en Barcelona', 'Casa', 'Alquiler', 100, 105, 4, 2, 1, '11/12/2023'),
(3, '1528A', 'Casa en Valencia', 'Casa', 'Obra Nueva', 120, 132, 4, 3, 0, '10/12/2023'),
(4, '1523', 'Local en Valencia', 'Local', 'Venta', 234, 324, 2, 1, 0, '15/12/2023'),
(7, '555A', 'prueba', 'Casa', 'Venta', 123, 200, 4, 2, 0, '12/12/2022');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_ref` (`id_ref`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
