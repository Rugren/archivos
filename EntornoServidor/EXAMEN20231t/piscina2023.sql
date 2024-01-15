-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2023 a las 14:45:36
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `piscina2023`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `piscina2023`
--

CREATE TABLE `piscina2023` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre_cliente` varchar(255) NOT NULL,
  `entradas_adultos` int(11) NOT NULL,
  `entradas_infantiles` int(11) NOT NULL,
  `metodo_pago` varchar(50) NOT NULL,
  `total_pago` decimal(8,2) NOT NULL,
  `fecha_compra` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `piscina2023`
--

INSERT INTO `piscina2023` (`id`, `nombre_cliente`, `entradas_adultos`, `entradas_infantiles`, `metodo_pago`, `total_pago`, `fecha_compra`) VALUES
(1, 'María Linares Benítez', 3, 2, 'Pago con tarjeta', 36.00, '2023-12-11'),
(2, 'Aniceto Baraja Montes', 2, 1, 'Pago en efectivo', 23.00, '2023-12-11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `piscina2023`
--
ALTER TABLE `piscina2023`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `piscina2023`
--
ALTER TABLE `piscina2023`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
