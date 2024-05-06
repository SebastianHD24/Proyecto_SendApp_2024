-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2024 a las 18:24:21
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
-- Base de datos: `sendapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id_cita` int(11) NOT NULL COMMENT 'Identifica la id de la cita',
  `estado_cita` tinyint(1) NOT NULL COMMENT 'Muestra el estado de la cita',
  `fecha` date NOT NULL COMMENT 'Muestra la fecha',
  `hora` datetime NOT NULL COMMENT 'Muestra la hora',
  `documento_usuario` bigint(20) NOT NULL COMMENT 'Muestra la TI o CC',
  `id_servicio` int(2) NOT NULL COMMENT 'Muestra la id de los servicios'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

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
  `fecha_respuesta` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pqr`
--

INSERT INTO `pqr` (`id_peticion`, `documento_us`, `tipo_pqrs`, `descripcion`, `respuesta_pqrs`, `fecha_solicitud`, `fecha_respuesta`) VALUES
(1, 1087986236, 'Quejs', 'He estado satisfecho con el avance del back-end', 'no', '2024-05-06', '2024-05-06'),
(2, 1087986236, 'queja', 'hola ', NULL, '2024-05-06', NULL),
(3, 1059695065, 'sugerencia', 'Dar refrigerio', 'ok lo tendremos en cuenta', '2024-05-06', '2024-05-06');

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
  `admin_area` char(40) NOT NULL COMMENT 'Identifica el area',
  `estado_servicio` tinyint(1) NOT NULL COMMENT 'Muestra el estado de los servicios'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `nombre_servicio`, `admin_area`, `estado_servicio`) VALUES
(1, 'biblioteca', 'sandra', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_citas`
--

CREATE TABLE `solicitud_citas` (
  `id_solicitud_cita` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `id_usuario` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

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
('CC', 12345678, '$2y$10$ci8otfH8eikMCThZzP1M7OcPF6pyceLCqL3hK/CWnjv5UIwCTAg5G', 'ADMIN', 'ADMIN', 'admin@gmail.com', '1234567898', '', 0, 1, 1, NULL, NULL),
('CC', 42146447, '$2y$10$m5v35Awui30KFK/KO9PJq.Cymz1LnGKO3kDWLp1RbiVjJ0r7dpny2', 'Leidy', 'Ramirez', 'soyelmejor.@gmail.com', '3216735852', '', 0, 1, 2, NULL, NULL),
('CC', 1059695065, '$2y$10$X0QCxj9Fm.rdwuJ6T5.FfexnZbiRUKRAsSdFsfMBcGaHm/2TJ8R1m', 'Yesid', 'Molina Becerra', 'ymolina560@soy.sena.edu.co', '300684305388888', '', 0, 1, 3, NULL, NULL),
('CC', 1087986236, '$2y$10$8dkKXJJOI5rS4qc2y0mgcuh5.O6tJH4OjV8IN9/bQ5TTjI429hGn2', 'Sebas', 'Sanchez', 'wowco.2000@gmail.com', '3216735852', 'ADSO', 2618075, 1, 3, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `id_servicio` (`id_servicio`),
  ADD KEY `documento_usuario` (`documento_usuario`);

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
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `solicitud_citas`
--
ALTER TABLE `solicitud_citas`
  ADD PRIMARY KEY (`id_solicitud_cita`),
  ADD KEY `id_usuario` (`id_usuario`);

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
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifica la id de la cita', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pqr`
--
ALTER TABLE `pqr`
  MODIFY `id_peticion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(2) NOT NULL AUTO_INCREMENT COMMENT 'Visualiza el rol', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(2) NOT NULL AUTO_INCREMENT COMMENT 'Identifica los servicos del sena', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `solicitud_citas`
--
ALTER TABLE `solicitud_citas`
  MODIFY `id_solicitud_cita` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_3` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id_servicio`) ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_4` FOREIGN KEY (`documento_usuario`) REFERENCES `usuarios` (`documento_identidad`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `pqr`
--
ALTER TABLE `pqr`
  ADD CONSTRAINT `pqr_ibfk_1` FOREIGN KEY (`documento_us`) REFERENCES `usuarios` (`documento_identidad`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `solicitud_citas`
--
ALTER TABLE `solicitud_citas`
  ADD CONSTRAINT `solicitud_citas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`documento_identidad`) ON UPDATE CASCADE;

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
