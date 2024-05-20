-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2024 at 03:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sendapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `citas`
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
-- Dumping data for table `citas`
--

INSERT INTO `citas` (`id_cita`, `estado_cita`, `confirmacion`, `fecha`, `hora`, `documento_usuario`, `id_servicio`, `descripcion`, `jornada`, `usuario_f`, `justificacion_rechazo`, `justificacion_cancelacion`) VALUES
(48, 'pendiente', '', '0000-00-00', '00:00:00', 1111111111, 1, 'Cita para mañana en colombia cundinamarca ,yo viajo a pie mañana ,creo que llego a las 3 pm de la ta', 'Diurna', 1234567890, '', NULL),
(49, 'pendiente', '', '0000-00-00', '00:00:00', 1111111111, 2, 'Quiero una cita ,pero me da pena que me atienda Juliana :)', 'Diurna', 1222222222, '', NULL),
(50, 'pendiente', '', '0000-00-00', '00:00:00', 1111111111, 3, 'Hola mi mama me dice que estoy loco ,por eso quiero una cita con usted', 'Diurna', 1233333333, '', NULL),
(51, 'pendiente', '', '0000-00-00', '00:00:00', 1111111111, 4, 'HOla quiero una cita para mostrarle mi emprendimiento de tajadas con queso y bocadillo ,es la sensac', 'Diurna', 1234444444, '', NULL),
(52, 'pendiente', '', '0000-00-00', '00:00:00', 1111111111, 5, 'Hola es que vi a tu acerora y quede enamorado y quiero que me asignes una cita con ella en mi casa ,', 'Diurna', 1234555555, '', NULL),
(53, 'pendiente', '', '0000-00-00', '00:00:00', 1111111111, 6, 'Hola, necesito que me asigne una cita para visitar las instalaciones, es para una tarea de mi herman', 'Diurna', 1234566666, '', NULL),
(54, 'pendiente', '', '0000-00-00', '00:00:00', 1111111111, 7, 'Quiero una cita para que inscribirme en el curso de conducion de maquinaria pesada, es para manejar ', 'Diurna', 1234567777, '', NULL),
(55, 'pendiente', '', '0000-00-00', '00:00:00', 1111111111, 8, 'Hola Doña martha ,quiero llevar a mi curso a ver como operan en fabrica ,tambien alguien te quiere c', 'Diurna', 1234567888, '', NULL),
(56, 'pendiente', '', '0000-00-00', '00:00:00', 1111111111, 9, 'Hola profecro, espara un acesoramiento sobre mi alimentacion ,es que mi mama dice que estoy gorda,pe', 'Diurna', 1234567899, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pqr`
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
-- Dumping data for table `pqr`
--

INSERT INTO `pqr` (`id_peticion`, `documento_us`, `tipo_pqrs`, `descripcion`, `respuesta_pqrs`, `fecha_solicitud`, `fecha_respuesta`, `vista`) VALUES
(5, 1234567890, 'peticion', 'Hola soy una prueba', NULL, '2024-05-20', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(2) NOT NULL COMMENT 'Visualiza el rol',
  `nombre_rol` char(20) NOT NULL COMMENT 'Muestra el nombre del rol',
  `estado_rol` tinyint(1) NOT NULL COMMENT 'Muestra el estado del rol'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`, `estado_rol`) VALUES
(1, 'administrador', 1),
(2, 'funcionario', 1),
(3, 'aprendiz', 1);

-- --------------------------------------------------------

--
-- Table structure for table `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(2) NOT NULL COMMENT 'Identifica los servicos del sena',
  `nombre_servicio` char(40) NOT NULL COMMENT 'Es el  nombre de los servicios',
  `admin_area` bigint(12) DEFAULT NULL COMMENT 'Identifica el admin del area',
  `estado_servicio` tinyint(1) NOT NULL COMMENT 'Muestra el estado de los servicios'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `servicios`
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
-- Table structure for table `usuarios`
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
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`tipo_documento`, `documento_identidad`, `contrasena`, `nombres`, `apellidos`, `correo`, `celular`, `programa`, `ficha`, `estado`, `id_rol`, `id_servicio`, `imagen`) VALUES
('CC', 1111111111, '$2y$10$k7XV5Pz/LaRtC2hlQQlLYe/CKphEc6VKdAIhJd65RQWLnAzjHLASa', 'Aprendiz Sebitas', 'Wow', 'sebastia@gmail.com', '1212312312', '', 0, 1, 3, NULL, NULL),
('CC', 1222222222, '$2y$10$Ur..emNWNWrSvnRN7aRyseLXZ3NDQDh0fVHv8n27SdjhfD5uMKkNy', 'Biblioteca ', 'Hector', 'biblioteca@gmail.com', '243234234', '', 0, 1, 2, 2, NULL),
('CC', 1233333333, '$2y$10$M.MPn78BiggJ6EJgsDb97.M7vsyfhE/fJku8EJNE1UCGumc9n1hzS', 'Psicologia', 'Diana', 'psicologia@gmail.com', '231231231', '', 0, 1, 2, 3, NULL),
('CC', 1234444444, '$2y$10$2bK2pZg3J/Vv2nL8Wuf0huNJ.KxJuqd14JVO/5LX.Wje7SE58F86K', 'Fondo Emprender', 'Carlos', 'fondoemprender@gmail.com', '', '', 0, 1, 2, 4, NULL),
('CC', 1234555555, '$2y$10$hyeSnahOrRVsCRI/TqfOjuhOzTNCRz0UITOIrf4jI3Qnp8f2PoMAK', 'Relaciones Corporativas', 'Santiaga', 'relacionescorpo@gmail.com', '2342342', '', 0, 1, 2, 5, NULL),
('CC', 1234566666, '$2y$10$580Vk4LRMjdjg42UcmjiCu8qfrO1esu9VdzrpABnlqK8JFFGEMFTK', 'Sennova', 'Consuelo', 'sennova@gmail.com', '234234636', '', 0, 1, 2, 6, NULL),
('CC', 1234567777, '$2y$10$WpTVZWZTNSF1ITgOPQtjA.4DP4B9g5PFQ44bbI7FTtgrW9T1t8pd2', 'Servicios Tecnologicos', 'Kevin mimi', 'serviciostec@gmail.com', '23423342', '', 0, 1, 2, 7, NULL),
('CC', 1234567888, '$2y$10$JzMtpEGU/XjccCv5byMu1.STPjhLYlWk3nDFB8b0OaUUxlku9.PGe', 'Fabrica de software', 'Martha', 'fabricasoftware@gmail.com', '69089675670', '', 0, 1, 2, 8, NULL),
('CC', 1234567890, '$2y$10$FOiw7GqQaNL645HZ46Cnu.5FCppKRwdg1SfvOQUApsM1tmDlWQIf6', 'Bienestar al aprendiz', 'Diana', 'bienestar@gmailcom', '23423424', '', 0, 1, 2, 1, NULL),
('CC', 1234567899, '$2y$10$x3fAuRz1NiGxLP3BQ9KrUuU2P3D0X2yL8wHbs5lD5evO70ElcDYya', 'Deportes', 'Andres', 'deportes@gmail.com', '435345345', '', 0, 1, 2, 9, NULL),
('CC', 2222222222, '$2y$10$IZ0KyKJMnIHEZ1MwQkVPx.XuIhtAkvoeIwL96AkBcn6/F3Izk6ciu', 'Admin', 'superUser', 'admin@gmail.com', '2423423423', '', 0, 1, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `id_servicio` (`id_servicio`),
  ADD KEY `documento_usuario` (`documento_usuario`),
  ADD KEY `usuario_f` (`usuario_f`);

--
-- Indexes for table `pqr`
--
ALTER TABLE `pqr`
  ADD PRIMARY KEY (`id_peticion`),
  ADD KEY `documento_us` (`documento_us`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indexes for table `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`),
  ADD KEY `admin_area` (`admin_area`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`documento_identidad`),
  ADD KEY `id_servicio` (`id_servicio`),
  ADD KEY `id_servicio_2` (`id_servicio`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citas`
--
ALTER TABLE `citas`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifica la id de la cita', AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `pqr`
--
ALTER TABLE `pqr`
  MODIFY `id_peticion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(2) NOT NULL AUTO_INCREMENT COMMENT 'Visualiza el rol', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(2) NOT NULL AUTO_INCREMENT COMMENT 'Identifica los servicos del sena', AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_3` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id_servicio`) ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_4` FOREIGN KEY (`documento_usuario`) REFERENCES `usuarios` (`documento_identidad`) ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_5` FOREIGN KEY (`usuario_f`) REFERENCES `usuarios` (`documento_identidad`) ON UPDATE CASCADE;

--
-- Constraints for table `pqr`
--
ALTER TABLE `pqr`
  ADD CONSTRAINT `pqr_ibfk_1` FOREIGN KEY (`documento_us`) REFERENCES `usuarios` (`documento_identidad`) ON UPDATE CASCADE;

--
-- Constraints for table `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `servicios_ibfk_1` FOREIGN KEY (`admin_area`) REFERENCES `usuarios` (`documento_identidad`) ON UPDATE CASCADE;

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id_servicio`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
