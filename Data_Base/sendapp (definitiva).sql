-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2024 a las 02:10:57
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
  `estado_cita` varchar(30) NOT NULL COMMENT 'Muestra el estado de la cita',
  `fecha` date NOT NULL COMMENT 'Muestra la fecha',
  `hora` time NOT NULL COMMENT 'Muestra la hora',
  `documento_usuario` bigint(20) NOT NULL COMMENT 'Muestra la TI o CC',
  `id_servicio` int(2) NOT NULL COMMENT 'Muestra la id de los servicios',
  `descripcion` varchar(100) NOT NULL,
  `jornada` varchar(20) NOT NULL,
  `usuario_f` bigint(20) NOT NULL,
  `justificacion_rechazo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id_cita`, `estado_cita`, `fecha`, `hora`, `documento_usuario`, `id_servicio`, `descripcion`, `jornada`, `usuario_f`, `justificacion_rechazo`) VALUES
(30, 'aceptado', '2024-05-15', '17:05:00', 1114149055, 3, 'hello', 'Diurna', 1004775687, ''),
(31, 'aceptado', '2024-05-20', '18:14:00', 1114149055, 3, 'buenos dias ', 'Diurna', 1004775687, ''),
(32, 'aceptado', '2024-05-22', '08:24:00', 1114149055, 3, 'probando hora de nuevo', 'Diurna', 1004775687, ''),
(33, 'aceptado', '2024-05-31', '12:12:00', 1114149055, 3, 'hello mode', 'Diurna', 123456789, ''),
(34, 'pendiente', '0000-00-00', '00:00:00', 1114149055, 3, 'neceisto una cosa', 'Diurna', 1004775687, '');

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
(1, 'bienestar al parendiz', 'sandra', 1),
(2, 'biblioteca', 'juliana', 1),
(3, 'Psicologia', 'juliana', 1),
(4, 'Fondo emprender', 'no se', 1),
(5, 'Relaciones Corporativas', 'no se', 1),
(6, 'sennova', 'no se', 1),
(7, 'Servicios Tecnologicos', 'no se', 1),
(8, 'Fabrica software', 'no se', 1),
(9, 'Deportes', 'no se', 1);

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
('CC', 123456789, '$2y$10$XTyXVCGdcibkbZEsoGMMMOM/L3sqOwrDZXy1bVulD9kOqn88KMWqa', 'luisa', 'miranda', 'lopera23@gmail.com', '3292123', '', 0, 1, 2, 3, NULL),
('CC', 1004775687, '$2y$10$FhtBOKRUu9ALP3AQ9LxKmOoBgvSsrwxh2Fs8r48FM.WQ9klhIDwqq', 'tatiana', 'cardenas', 'lopera23@gmail.com', '3208108780', '', 0, 1, 2, 3, NULL),
('CC', 1114149055, '$2y$10$S6FHQrWBHuwD4/zo3L91a.bPAeYWRYxKjjcZ.yDxiKoBUVckTKSaa', 'juanes', 'Mena', 'lopera23@gmail.com', '3208108780', '', 0, 1, 3, NULL, NULL),
('CC', 1234567890, '$2y$10$dDb/4xhJBKyJXQM91JezbOgcYO7XJPbDAu4GcRlwq7txMBXkkkh3u', 'lopera', 'ramirez', 'lopera23@gmail.com', '3208108780', '', 0, 1, 1, NULL, NULL);

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
  ADD PRIMARY KEY (`id_servicio`);

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
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifica la id de la cita', AUTO_INCREMENT=35;

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
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id_servicio`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
