-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 07-03-2024 a las 02:17:00
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
-- Base de datos: `examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cuatrimestre` varchar(10) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `matricula`, `carrera`, `nombre`, `cuatrimestre`, `correo`, `contrasena`) VALUES
(1, '12345', 'Sistemas', 'Jose Fabian Muñozcano Guzman', 'cuarto', 'sad@gmail', '$2y$10$nLNdti.PcjvI0GELTozmqOrmy8vrFcQU8LGHd11u5mvk3OfkxGPT6'),
(2, '45', 'Diseño Grafico', 'Rosa Maria Guadalupe Torres', 'Quinto', 'guada@gmail.com', '$2y$10$obzJADgdcSAPp3BlTe2pFuL2poqRJFHU7lbCpGSC119.gSQvSB14a'),
(3, '7859', 'Diseño Grafico', 'Alexia Roblez Gutierrez', 'Quinto', 'alexia@gmail.com', '$2y$10$bjbmsFfwnDSRPk2udZlj8.aIhspBAd/Ol6xtWoacsNBtWvmpuxWVy');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
