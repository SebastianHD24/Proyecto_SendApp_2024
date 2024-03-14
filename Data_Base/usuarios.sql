-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-03-2024 a las 15:00:00
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

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
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `documento_identidad` int(12) NOT NULL COMMENT 'Es la identidad de la persona',
  `contrasena` varchar(10) NOT NULL COMMENT 'Es la contrasena de todos los usuarios',
  `nombres` varchar(30) NOT NULL COMMENT 'Nombre del usuario\r\n',
  `apellidos` varchar(30) NOT NULL COMMENT 'Apellido del usuario',
  `correo` varchar(30) NOT NULL COMMENT 'Correo del usuario',
  `celular` int(15) NOT NULL COMMENT 'Celular del usuario',
  `programa` varchar(50) DEFAULT NULL COMMENT 'Programa del usuario',
  `ficha` int(10) DEFAULT NULL COMMENT 'Ficha del usuario',
  `imagen_usuario` longblob NOT NULL,
  `estado` tinyint(1) NOT NULL COMMENT 'Estado del usuario',
  `id_rol` int(2) DEFAULT NULL COMMENT 'Rol del usuario',
  `id_servicio` int(2) DEFAULT NULL COMMENT 'Los servicios del ususario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`documento_identidad`),
  ADD KEY `id_servicio` (`id_servicio`),
  ADD KEY `id_servicio_2` (`id_servicio`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Restricciones para tablas volcadas
--

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
