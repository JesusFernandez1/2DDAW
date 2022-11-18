-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2022 a las 00:46:26
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `albañeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `cliente_id` int(6) NOT NULL,
  `NIF/CIF` int(9) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `telefono` int(9) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `poblacion` varchar(45) NOT NULL,
  `codigo_postal` varchar(45) NOT NULL,
  `provincia` varchar(45) NOT NULL,
  `tarea` int(6) NOT NULL,
  `estado_tarea` varchar(45) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_final` date DEFAULT NULL,
  `anotacion_inicio` varchar(45) DEFAULT NULL,
  `anotacion_final` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`cliente_id`),
  ADD UNIQUE KEY `idcliente_UNIQUE` (`cliente_id`),
  ADD UNIQUE KEY `NIF/CIF_UNIQUE` (`NIF/CIF`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
