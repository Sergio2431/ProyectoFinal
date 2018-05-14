-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2018 a las 12:21:52
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectointegrado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio1`
--

CREATE TABLE `servicio1` (
  `ID_Servicio1` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Correo` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Direccion` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `servicio1`
--

INSERT INTO `servicio1` (`ID_Servicio1`, `Nombre`, `Telefono`, `Correo`, `Direccion`) VALUES
(1, 'PAco', 2851564, 'sfuisjn@cknhesfj', '0'),
(2, 'Sergio', 54363463, 'putita@cknhesfj', 'Av.Polla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio2`
--

CREATE TABLE `servicio2` (
  `ID_Servicio2` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Correo` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Direccion` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pago`
--

CREATE TABLE `tipo_pago` (
  `Servicio` int(11) DEFAULT NULL,
  `Moneda` int(11) DEFAULT NULL,
  `ID_Servicio1` int(11) NOT NULL,
  `ID_Servicio2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `servicio1`
--
ALTER TABLE `servicio1`
  ADD PRIMARY KEY (`ID_Servicio1`);

--
-- Indices de la tabla `servicio2`
--
ALTER TABLE `servicio2`
  ADD PRIMARY KEY (`ID_Servicio2`);

--
-- Indices de la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
  ADD PRIMARY KEY (`ID_Servicio1`,`ID_Servicio2`),
  ADD KEY `FK_tipo_pago_servicio2` (`ID_Servicio2`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `servicio1`
--
ALTER TABLE `servicio1`
  MODIFY `ID_Servicio1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `servicio2`
--
ALTER TABLE `servicio2`
  MODIFY `ID_Servicio2` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
  ADD CONSTRAINT `FK_tipo_pago_servicio1` FOREIGN KEY (`ID_Servicio1`) REFERENCES `servicio1` (`ID_Servicio1`),
  ADD CONSTRAINT `FK_tipo_pago_servicio2` FOREIGN KEY (`ID_Servicio2`) REFERENCES `servicio2` (`ID_Servicio2`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
