-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2023 a las 07:54:02
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `familia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia`
--

CREATE TABLE `familia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `familia`
--

INSERT INTO `familia` (`id`, `nombre`) VALUES
(1, 'Ricardo'),
(2, 'Papa'),
(3, 'Mama'),
(4, 'Andrea'),
(5, 'Maria'),
(6, 'Valdo'),
(7, 'Michael'),
(8, 'Mushu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id` int(11) NOT NULL,
  `tarea` varchar(100) NOT NULL,
  `completada` int(11) DEFAULT 0,
  `frecuencia` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `tarea`, `completada`, `frecuencia`) VALUES
(1, 'Limpiar el baño', 0, 'semanal'),
(2, 'Cocinar', 0, 'diaria'),
(3, 'Hacer la compra', 0, 'diaria'),
(4, 'Ordenar la sala', 0, 'semanal'),
(5, 'Lavar la ropa', 0, 'semanal'),
(6, 'Limpiar la nevera', 0, 'semanal'),
(7, 'Hacer gaspacho', 0, 'diaria'),
(8, 'Pasear a los perros', 0, 'semanal'),
(9, 'Limpiar arenero', 0, 'diaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas_realizadas`
--

CREATE TABLE `tareas_realizadas` (
  `id` int(11) NOT NULL,
  `tarea_id` int(11) NOT NULL,
  `miembro_id` int(11) NOT NULL,
  `fecha_asignacion` datetime DEFAULT NULL,
  `fecha_finalizacion` datetime DEFAULT NULL,
  `fecha_realizacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tareas_realizadas`
--

INSERT INTO `tareas_realizadas` (`id`, `tarea_id`, `miembro_id`, `fecha_asignacion`, `fecha_finalizacion`, `fecha_realizacion`) VALUES
(1, 1, 1, '2023-07-01 19:24:38', NULL, '0000-00-00'),
(3, 6, 3, '2023-07-01 21:15:02', NULL, '0000-00-00'),
(4, 9, 7, '2023-07-01 21:41:06', NULL, '0000-00-00'),
(5, 9, 8, '2023-07-01 21:41:14', NULL, '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `familia`
--
ALTER TABLE `familia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tareas_realizadas`
--
ALTER TABLE `tareas_realizadas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tarea_id` (`tarea_id`),
  ADD KEY `miembro_id` (`miembro_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `familia`
--
ALTER TABLE `familia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tareas_realizadas`
--
ALTER TABLE `tareas_realizadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tareas_realizadas`
--
ALTER TABLE `tareas_realizadas`
  ADD CONSTRAINT `tareas_realizadas_ibfk_1` FOREIGN KEY (`tarea_id`) REFERENCES `tareas` (`id`),
  ADD CONSTRAINT `tareas_realizadas_ibfk_2` FOREIGN KEY (`miembro_id`) REFERENCES `familia` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
