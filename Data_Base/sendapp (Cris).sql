-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2024 a las 23:29:23
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
-- Base de datos: `sendapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id_cita` int(11) NOT NULL COMMENT 'Identifica la id de la cita',
  `estado_cita` varchar(30) NOT NULL COMMENT 'Muestra el estado de la cita',
  `confirmacion` varchar(5) NOT NULL,
  `fecha` date NOT NULL COMMENT 'Muestra la fecha',
  `hora` time NOT NULL COMMENT 'Muestra la hora',
  `documento_usuario` bigint(20) NOT NULL COMMENT 'Muestra la TI o CC',
  `id_servicio` int(2) NOT NULL COMMENT 'Muestra la id de los servicios',
  `descripcion` varchar(100) NOT NULL,
  `jornada` varchar(20) NOT NULL,
  `usuario_f` bigint(20) NOT NULL,
  `justificacion_rechazo` varchar(50) NOT NULL,
  `justificacion_cancelacion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id_cita`, `estado_cita`, `confirmacion`, `fecha`, `hora`, `documento_usuario`, `id_servicio`, `descripcion`, `jornada`, `usuario_f`, `justificacion_rechazo`, `justificacion_cancelacion`) VALUES
(35, 'rechazado', '', '0000-00-00', '00:00:00', 3455678987, 2, 'xxxxxx', 'Diurna', 1655233243, 'por que no quieor mamahuevo', ''),
(36, 'aceptado', 'no', '2024-05-02', '18:05:00', 3455678987, 2, 'yo no se nada', 'Diurna', 1655233243, '', 'nose'),
(37, 'aceptado', 'no', '2024-05-15', '17:42:00', 3455678987, 2, 'yo si se', 'Diurna', 1655233243, '', 'ss'),
(38, 'aceptado', 'no', '2024-05-01', '11:33:00', 876786435678, 2, 'ss', 'Diurna', 398848499384, '', 'nose'),
(39, 'rechazado', '', '0000-00-00', '00:00:00', 876786435678, 2, 'sax', 'Diurna', 398848499384, 'sss', NULL),
(40, 'rechazado', '', '0000-00-00', '00:00:00', 876786435678, 2, 'xaas', 'Diurna', 398848499384, 'nose', NULL),
(41, 'rechazado', '', '0000-00-00', '00:00:00', 876786435678, 2, 'ascceer', 'Diurna', 398848499384, 'jj', NULL);

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
(4, 42146447, 'peticion', 'queja', 'ahhh bueno', '2024-05-16', '2024-05-16', 1);

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
(1, 'bienestar al parendiz', 42146447, 1),
(2, 'biblioteca', NULL, 1),
(3, 'Psicologia', NULL, 1),
(4, 'Fondo emprender', NULL, 1),
(5, 'Relaciones Corporativas', NULL, 1),
(6, 'sennova', NULL, 1),
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
('CC', 12345678, '$2y$10$u23XIapliuntBAGMEdjHf.3fFrh9lAWESkzgnHSbxi7DI9xrMVFGa', 'ADMIN', 'ADMIN', 'admin@gmail.com', '3216739874', '', 0, 1, 1, NULL, NULL),
('CC', 42146447, '$2y$10$y7qLI4cIq8IBo5gLNg/SoO9Jl/sUhVj516dxLP3QZFy5Ehf/dgRQu', 'Leidy', 'Ramirez', 'soyelmejor.@gmail.com', '3216716966', '', 0, 1, 2, 1, NULL),
('CC', 1087986236, '$2y$10$19JMQ2LxjyNCCfRZ/S0itO6Sq3e9v8KYf0gSuKiEAAsv/S5zRXi4u', 'Sebastian', 'Sanchez', 'wowco.2000@gmail.com', '3216735852', 'ADSO', 2618075, 1, 3, 9, NULL),
('CC', 1655233243, '$2y$10$LW4IxYLrBo0vaD3ovvRTrem3oExUfZwZDKifTEK.zuvXQstFgEZ36', 'cris', 'ruiz', 'crisruiz@gmail.com', '3234567885', '', 0, 1, 2, 2, NULL),
('CC', 3455678987, '$2y$10$5e/gIrhSwUCeOrEt5cM1m.4y2h275edTD41Fm17nv5GOTdSDqRmd6', 'felipe', 'andres', 'felipe@gmail.com', '313567898', '', 0, 1, 3, NULL, NULL),
('CC', 398848499384, '$2y$10$R/qieEU/SXRvaPppwvW8jOSxaF7gMvDaIGnHfqs4lF0FVJ8F6yxmi', 'david', 'cardona', 'crt@gmail.com', '345678954', '', 0, 1, 2, 2, NULL),
('CC', 876786435678, '$2y$10$ElqTqSWk96wJGqjo5Dqr2.t4ffO0iwpEIPXuuyHW5.zXB3.Ks3276', 'dav', 'cardo', 'crta@gmail.com', '32123456789', '', 0, 1, 3, NULL, NULL);

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
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifica la id de la cita', AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `pqr`
--
ALTER TABLE `pqr`
  MODIFY `id_peticion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
