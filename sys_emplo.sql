-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2022 a las 11:28:04
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sys_emplo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` int(50) NOT NULL,
  `empresa_id` varchar(50) NOT NULL,
  `departamento` varchar(100) NOT NULL,
  `departamento_id` varchar(50) NOT NULL,
  `employee_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `empresa_id`, `departamento`, `departamento_id`, `employee_id`) VALUES
(1, '1001', 'Recursos_Humanos', '1', '1.01'),
(2, '1002', 'Desarrollo', '2', '1.02'),
(15, '1002', '', '2', 'hailglez32630784');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `id` int(50) NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `phone` varchar(50) NOT NULL,
  `cellphone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `joinedsys` date NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `departamento` varchar(100) NOT NULL,
  `genero` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`id`, `employee_id`, `name`, `surname`, `fecha_nacimiento`, `phone`, `cellphone`, `email`, `fecha_ingreso`, `joinedsys`, `empresa`, `departamento`, `genero`) VALUES
(1, 'hailglez1414871172', 'Hail alejandro', 'Gonzalez', '2022-01-12', '7229893746', '', 'hailglez1@gmail.com', '2022-01-27', '0000-00-00', '', '', 'M'),
(2, 'hailglez925664110', 'alejandro', 'gonzalez', '2022-01-05', '7229893746', '', 'hailglez2@gmail.com', '2022-02-04', '0000-00-00', '', '', 'F'),
(3, 'hailglez1340027781', 'alejandro', 'gonzalez', '2022-01-07', '7229893746', '', 'hailglez11@gmail.com', '2022-01-21', '0000-00-00', 'Reina_Madre2', 'Recursos_Humanos', 'F'),
(4, 'hailglez2124577865', 'asasasaas', 'kjjkhjh', '7878-07-08', '7227843512', '7227888221', 'hahaha@gmail.com', '2022-01-26', '0000-00-00', 'Reina_Madre', 'Recursos_Humanos', 'F'),
(5, 'hailglez1946723312', 'haiil', 'alejandro', '2022-01-06', '', '', 'nuevoi@gmail.com', '2022-01-26', '0000-00-00', 'Reina_Madre', 'Recursos_Humanos', 'M'),
(6, 'hailglez1903651210', 'nuevo', 'nuevo', '7212-02-16', '', '', 'shas@gmail.com', '1111-12-12', '0000-00-00', 'Reina_Madre', 'desarrollo', 'F'),
(7, 'hailglez390810484', 'asasasasas', 'asasasa', '2021-12-30', '', '', 'asaes@gmail.com', '2022-02-04', '0000-00-00', 'Reina_Madre', 'desarrollo', 'F'),
(8, 'hailglez787583456', 'asasaa', 'asas', '2022-12-31', '', '', 'nuas@gmail.com', '2025-04-01', '0000-00-00', 'Reina_Madre2', 'desarrollo', 'M'),
(9, 'hailglez32630784', 'prueba', 'nueva', '2016-09-29', '', '', 'ajs@gmail.com', '2023-09-02', '0000-00-00', 'Reina_Madre2', '', 'F');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(10) NOT NULL,
  `empresa_id` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `empresa_id`, `nombre`) VALUES
(1, '1001', 'Reina_Madre'),
(2, '1002', 'Reina_Madre2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nivel` enum('admin','operador') NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `password`, `nivel`, `type`) VALUES
(1, 'Administrador', 'admin@gmail.com', '7f016a67c19c7d68c7e61b6c422d4297', 'admin', 'user'),
(2, 'Luana', 'operador@gmail.com', '06d4f07c943a4da1c8bfe591abbc3579', 'operador', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
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
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
