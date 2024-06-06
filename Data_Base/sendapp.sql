-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2024 a las 23:22:13
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
-- Base de datos: `sendapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id_cita` int(11) NOT NULL COMMENT 'Identifica la id de la cita',
  `estado_cita` varchar(30) NOT NULL COMMENT 'Muestra el estado de la cita',
  `fecha` date DEFAULT NULL COMMENT 'Muestra la fecha',
  `hora` time DEFAULT NULL COMMENT 'Muestra la hora',
  `documento_usuario` bigint(20) NOT NULL COMMENT 'Muestra la TI o CC',
  `id_servicio` int(2) NOT NULL COMMENT 'Muestra la id de los servicios',
  `descripcion` varchar(100) NOT NULL,
  `jornada` varchar(20) NOT NULL,
  `usuario_f` bigint(20) NOT NULL,
  `justificacion_rechazo` varchar(150) NOT NULL,
  `confirmacion` varchar(20) DEFAULT NULL,
  `justificacion_cancelacion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id_cita`, `estado_cita`, `fecha`, `hora`, `documento_usuario`, `id_servicio`, `descripcion`, `jornada`, `usuario_f`, `justificacion_rechazo`, `confirmacion`, `justificacion_cancelacion`) VALUES
(2, 'pendiente', NULL, NULL, 1111111111, 1, 'Esto es una prueba para verificar el agendamiento de citas .Desde Bienestar al aprendiz', 'Diurna', 1234567890, '', NULL, ''),
(3, 'pendiente', NULL, NULL, 1111111111, 2, 'Prueba de Biblioteca', 'Diurna', 1222222222, '', NULL, ''),
(4, 'aceptado', '2024-06-10', '10:30:00', 1111111111, 3, 'Verificacion de envio desde PsicologIA', 'Diurna', 1233333333, '', 'Si asistió', ''),
(5, 'pendiente', NULL, NULL, 1111111111, 4, 'Prueba de envio Fondo Emprender ', 'Diurna', 1234444444, '', NULL, ''),
(6, 'pendiente', NULL, NULL, 1111111111, 5, 'Prueba de envio desde Relaciones Coporativas\r\n', 'Diurna', 1234555555, '', NULL, ''),
(8, 'aceptado', '2024-06-10', '10:50:00', 1004916766, 2, 'Prueba', 'Diurna', 1222222222, '', NULL, ''),
(9, 'aceptado', '2024-06-13', '10:00:00', 1004916766, 2, 'otra', 'Diurna', 1222222222, '', NULL, ''),
(10, 'rechazado', NULL, NULL, 1004916766, 2, 'otra', 'Diurna', 1222222222, 'porque si', NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pqr`
--

CREATE TABLE `pqr` (
  `id_peticion` int(11) NOT NULL,
  `documento_us` bigint(20) NOT NULL,
  `tipo_pqrs` varchar(15) NOT NULL,
  `descripcion` text NOT NULL,
  `respuesta_pqrs` text DEFAULT NULL,
  `fecha_solicitud` date DEFAULT NULL,
  `fecha_respuesta` date DEFAULT NULL,
  `vista` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pqr`
--

INSERT INTO `pqr` (`id_peticion`, `documento_us`, `tipo_pqrs`, `descripcion`, `respuesta_pqrs`, `fecha_solicitud`, `fecha_respuesta`, `vista`) VALUES
(1, 1004916766, 'queja', 'sanchez es un genio', 'es mentira', '2024-06-05', '2024-06-05', 1),
(2, 1004916766, 'peticion', 'otra pqr', 'a', '2024-06-05', '2024-06-05', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(2) NOT NULL COMMENT 'Visualiza el rol',
  `nombre_rol` char(20) NOT NULL COMMENT 'Muestra el nombre del rol',
  `estado_rol` tinyint(1) NOT NULL COMMENT 'Muestra el estado del rol'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`, `estado_rol`) VALUES
(1, 'administrador', 1),
(2, 'funcionario', 1),
(3, 'aprendiz', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(2) NOT NULL COMMENT 'Identifica los servicos del sena',
  `nombre_servicio` char(40) NOT NULL COMMENT 'Es el  nombre de los servicios',
  `admin_area` bigint(12) DEFAULT NULL COMMENT 'Identifica el admin del area',
  `estado_servicio` tinyint(1) NOT NULL COMMENT 'Muestra el estado de los servicios'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `nombre_servicio`, `admin_area`, `estado_servicio`) VALUES
(1, 'Bienestar al aprendiz', NULL, 1),
(2, 'Biblioteca', NULL, 1),
(3, 'Psicologia', NULL, 1),
(4, 'Fondo emprender', NULL, 1),
(5, 'Relaciones Corporativas', NULL, 1),
(6, 'Sennova', NULL, 1),
(7, 'Servicios Tecnologicos', NULL, 1),
(8, 'Fabrica software', NULL, 1),
(9, 'Deportes', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `tipo_documento` varchar(3) NOT NULL,
  `documento_identidad` bigint(20) NOT NULL COMMENT 'Es la identidad de la persona',
  `contrasena` varchar(255) NOT NULL COMMENT 'Es la contrasena de todos los usuarios',
  `nombres` varchar(30) NOT NULL COMMENT 'Nombre del usuario\r\n',
  `apellidos` varchar(30) NOT NULL COMMENT 'Apellido del usuario',
  `correo` varchar(30) NOT NULL COMMENT 'Correo del usuario',
  `celular` varchar(15) NOT NULL COMMENT 'Celular del usuario',
  `programa` varchar(50) DEFAULT NULL COMMENT 'Programa del usuario',
  `ficha` int(10) DEFAULT NULL COMMENT 'Ficha del usuario',
  `estado` tinyint(1) NOT NULL COMMENT 'Estado del usuario',
  `id_rol` int(2) DEFAULT NULL COMMENT 'Rol del usuario',
  `id_servicio` int(2) DEFAULT NULL COMMENT 'Los servicios del ususario',
  `imagen` longblob DEFAULT NULL COMMENT 'Agrega tu foto o una imagen de perfil'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`tipo_documento`, `documento_identidad`, `contrasena`, `nombres`, `apellidos`, `correo`, `celular`, `programa`, `ficha`, `estado`, `id_rol`, `id_servicio`, `imagen`) VALUES
('CC', 1004916766, '$2y$10$LFFAegapak11R2DkdiSmeeuD7ihRg4JJsd/rC5hB1aTvS8mUg3L4.', 'Andres', 'Felipe', 'micorreo@gmail.com', '3331112222', 'ADSO', 2618075, 1, 3, NULL, NULL),
('CC', 1111111111, '$2y$10$VahrkHSRAv0.zzdjO.ltjONs2HjqJG.XzcevIv8B0gZFrSRVpo9Qy', 'Aprendiz', 'Sena', 'user@gail.com', '23423423', 'ADSO', 234231212, 1, 3, NULL, NULL),
('CC', 1222222222, '$2y$10$.pLy8.mwITM0hZx3uic.YeKlcLkJV0I4JS.GlDIzz2BIuiVYTm5Ne', 'Biblioteca', 'Diana', 'biblioteca@gmail.com', '34241332', '0', 0, 1, 2, 2, NULL),
('CC', 1233333333, '$2y$10$KHUgZxmmG/LaxmH5WZ/OsuaKOxjzMj3a0wzmxygZTRplIBxLXt.PK', 'Psicologia', 'Carmen ', 'psicologo@gmail.com', '234234', '0', 0, 1, 2, 3, NULL),
('CC', 1234444444, '$2y$10$RMKpn54SlAXIWENAgYK0/Oija8/kLOo9yoMZHCMItCqU2AXlT0STu', 'Fondo Emprender', 'Ruben', 'fondoemprender@gmail.com', '345342342324', '0', 0, 1, 2, 4, NULL),
('CC', 1234555555, '$2y$10$PWl/cD3wlcR7pltFZF3kwObadCIQOBj5ZDKsqLcgN0rV3FVG2qdt.', 'Relaciones Corporativas', 'Julian', 'relacionescorpo@gmial.com', '34241332', '0', 0, 1, 2, 5, NULL),
('CC', 1234566666, '$2y$10$muvY149RvRKMENakWSeyp.v95P3iwvrBjwexMIYdMkYtFOCseG6YG', 'Sennova', 'Benito', 'senova@gmail.com', '50284043', '0', 0, 1, 2, 6, NULL),
('CC', 1234567777, '$2y$10$Kcro6bgOT.TLGr4Nq/lFWeiEFyLR3wtT7/TYXNcqX0.yv6vQzUAm.', 'Servicios Tecnologicos', 'Jhon', 'serviciostec@gmail.com', '028374934', '0', 0, 1, 2, 7, NULL),
('CC', 1234567888, '$2y$10$RAcVu6ZtZQCE6QQDmOcgDu0LUOAgIllLwKRyRyoLHBAZzALPhiiWO', 'Fabrica de software', 'Martha', 'fabrica@gmail.com', '23042423', '0', 0, 1, 2, 8, NULL),
('CC', 1234567890, '$2y$10$LE/jucZN8W8N6/lsrq9LIejNS2HztFR.tFYJPo5JTjCeuAY2XLeQ.', 'Bienestar al aprendiz', 'Juliana', 'beienstar@gmailcom', '2342342', '0', 0, 1, 2, 1, NULL),
('CC', 1234567899, '$2y$10$jDfZXRw7iWWEFJ6gkTb5SuVMW8M512eVaOVK7QD1VbGSRnkoSGwP6', 'Deportes', 'Andres', 'deportes@gmail.com', '3059324234', '0', 0, 1, 2, 9, NULL),
('CC', 2222222222, '$2y$10$qSS45i8QegoU6aQ9asT7.utmrF9L.1SHp49VTehCyas5lY2506.Xy', 'Admin', 'superUser', 'admin@gmail.com', '2342342', '0', 0, 1, 1, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `id_servicio` (`id_servicio`),
  ADD KEY `documento_usuario` (`documento_usuario`),
  ADD KEY `usuario_f` (`usuario_f`);

--
-- Indices de la tabla `pqr`
--
ALTER TABLE `pqr`
  ADD PRIMARY KEY (`id_peticion`),
  ADD KEY `documento_us` (`documento_us`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`),
  ADD KEY `admin_area` (`admin_area`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`documento_identidad`),
  ADD KEY `id_servicio` (`id_servicio`),
  ADD KEY `id_servicio_2` (`id_servicio`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifica la id de la cita', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `pqr`
--
ALTER TABLE `pqr`
  MODIFY `id_peticion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(2) NOT NULL AUTO_INCREMENT COMMENT 'Visualiza el rol', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(2) NOT NULL AUTO_INCREMENT COMMENT 'Identifica los servicos del sena', AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_3` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id_servicio`) ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_4` FOREIGN KEY (`documento_usuario`) REFERENCES `usuarios` (`documento_identidad`) ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_5` FOREIGN KEY (`usuario_f`) REFERENCES `usuarios` (`documento_identidad`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `pqr`
--
ALTER TABLE `pqr`
  ADD CONSTRAINT `pqr_ibfk_1` FOREIGN KEY (`documento_us`) REFERENCES `usuarios` (`documento_identidad`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `servicios_ibfk_1` FOREIGN KEY (`admin_area`) REFERENCES `usuarios` (`documento_identidad`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id_servicio`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
