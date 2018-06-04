-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2018 a las 16:54:07
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `full_car`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escalas`
--

CREATE TABLE `escalas` (
  `id_escala` int(11) NOT NULL,
  `lugar` varchar(30) NOT NULL,
  `lugar_tipo` varchar(10) NOT NULL,
  `id_ruta_e` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `escalas`
--

INSERT INTO `escalas` (`id_escala`, `lugar`, `lugar_tipo`, `id_ruta_e`) VALUES
(1, 'Holisx1', 'cra', 18),
(2, 'Holisx2', 'cra', 18),
(3, 'Holisx1', 'cra', 19),
(4, 'Holisx2', 'cra', 19),
(5, 'Pepis', 'cra', 20),
(6, 'El mas riko', 'cra', 20),
(8, 'Quebrada Seca', 'cll', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruta`
--

CREATE TABLE `ruta` (
  `id_ruta` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora_salida` time(4) DEFAULT NULL,
  `hora_llegada` time(4) DEFAULT NULL,
  `origen` varchar(30) NOT NULL,
  `origen_tipo` varchar(10) NOT NULL,
  `destino` varchar(30) NOT NULL,
  `destino_tipo` varchar(10) NOT NULL,
  `cel_r` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ruta`
--

INSERT INTO `ruta` (`id_ruta`, `fecha`, `hora_salida`, `hora_llegada`, `origen`, `origen_tipo`, `destino`, `destino_tipo`, `cel_r`) VALUES
(1, '2018-05-24', '21:07:00.0000', '12:00:00.0000', 'woeij', 'cra', 'qweok', 'cra', '1111111111'),
(2, '2018-05-24', '21:07:00.0000', '12:00:00.0000', 'woeij', 'cra', 'qweok', 'cra', '1111111111'),
(3, '2018-05-24', '21:07:00.0000', '12:00:00.0000', 'woeij', 'cra', 'qweok', 'cra', '1111111111'),
(4, '2018-05-24', '21:07:00.0000', '12:00:00.0000', 'woeij', 'cra', 'qweok', 'cra', '1111111111'),
(5, '2018-05-24', '21:07:00.0000', '12:00:00.0000', 'woeij', 'cra', 'qweok', 'cra', '1111111111'),
(6, '2018-05-24', '21:25:00.0000', '12:00:00.0000', 'woeij', 'cra', 'qweok', 'cra', '1111111111'),
(7, '2018-05-24', '21:25:00.0000', '12:00:00.0000', 'woeij', 'cra', 'qweok', 'cra', '1111111111'),
(8, '2018-05-24', '21:28:00.0000', '12:00:00.0000', 'woeij', 'cra', 'qweok', 'cra', '1111111111'),
(9, '2018-05-24', '21:28:00.0000', '12:00:00.0000', 'woeij', 'cra', 'qweok', 'cra', '1111111111'),
(10, '2018-05-24', '21:28:00.0000', '12:00:00.0000', 'woeij', 'cra', 'qweok', 'cra', '1111111111'),
(11, '2018-05-24', '21:28:00.0000', '12:00:00.0000', 'woeij', 'cra', 'qweok', 'cra', '1111111111'),
(12, '2018-05-24', '21:28:00.0000', '12:00:00.0000', 'woeij', 'cra', 'qweok', 'cra', '1111111111'),
(13, '2018-05-24', '21:28:00.0000', '12:00:00.0000', 'woeij', 'cra', 'qweok', 'cra', '1111111111'),
(14, '2018-05-24', '21:28:00.0000', '12:00:00.0000', 'woeij', 'cra', 'qweok', 'cra', '1111111111'),
(15, '2018-05-24', '21:28:00.0000', '12:00:00.0000', 'woeij', 'cra', 'qweok', 'cra', '1111111111'),
(16, '2018-05-24', '21:28:00.0000', '12:00:00.0000', 'woeij', 'cra', 'qweok', 'cra', '1111111111'),
(17, '2018-05-24', '21:28:00.0000', '12:00:00.0000', 'woeij', 'cra', 'qweok', 'cra', '1111111111'),
(18, '2018-05-24', '21:28:00.0000', '12:00:00.0000', 'woeij', 'cra', 'qweok', 'cra', '1111111111'),
(19, '2018-05-24', '21:28:00.0000', '12:00:00.0000', 'woeij', 'cra', 'qweok', 'cra', '1111111111'),
(20, '2018-05-24', '22:38:00.0000', '12:00:00.0000', '', 'cra', '', 'cra', '1111111111'),
(21, '2018-05-30', '10:48:00.0000', '14:00:00.0000', 'Dhhdhs', 'cra', 'Jssjjs', 'cll', '1239'),
(22, '2018-05-25', '07:53:00.0000', '12:00:00.0000', '', 'cra', '', 'cra', '3156789098'),
(23, '2018-05-25', '15:30:00.0000', '00:00:00.0000', 'UIS', 'lugar', 'Cacique', 'lugar', '3174104529'),
(24, '2018-05-25', '07:56:00.0000', '12:00:00.0000', '', 'cra', '', 'cra', '1111111111'),
(25, '2018-06-04', '09:29:00.0000', '12:00:00.0000', 'holi', 'cra', '', 'cll', '1111111111');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cel` varchar(15) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `spam` varchar(1) NOT NULL,
  `p_conducir` varchar(30) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cel`, `nombre`, `pass`, `spam`, `p_conducir`, `foto`, `correo`) VALUES
('1111111111', 'Paola', 'b0baee9d279d34fa1dfd71aadb908c3f', '0', '', '', '1@1.com'),
('1239', 'Homero', '0c2fb7c0a8be5b2c84228b67fb82c5f3', '0', '', '', '111@123.123'),
('3012928978', 'Fredy', 'e10adc3949ba59abbe56e057f20f883e', '0', '', '', 'freddymanuel47@gmail.com'),
('3156789098', 'Juan', '6fb42da0e32e07b61c9f0251fe627a9c', '0', '', '', 'sayayin38@gmail.com'),
('3163012224', 'Paola', 'b0baee9d279d34fa1dfd71aadb908c3f', '0', '', '', 'paola@hola.com'),
('3164464337', 'Hector', '2472ee727ed8de9a818fc657a6895646', '0', '', '', 'tayzon1392@hotmail.com'),
('3174104529', 'Luis', '7202c565ef679d0002a69e8211f1d2de', '0', '', './docs/foto_usuario/3174104529.png', 'lebautista@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id_vehiculo` int(11) NOT NULL,
  `placa` varchar(8) DEFAULT NULL,
  `modelo` varchar(20) DEFAULT NULL,
  `color` varchar(15) DEFAULT NULL,
  `t_propiedad` varchar(30) DEFAULT NULL,
  `t_mecanico` varchar(30) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `foto` varchar(30) DEFAULT NULL,
  `cel_v` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`id_vehiculo`, `placa`, `modelo`, `color`, `t_propiedad`, `t_mecanico`, `tipo`, `foto`, `cel_v`) VALUES
(41, 'FDP 347', 'Alto', '#b1abb8', './docs/t_propiedad/41.pdf', './docs/t_mecanico/41.pdf', '2', './docs/foto_vehiculo/41.jpeg', '3163012224'),
(42, '123456', 'alto', '#b00f0f', '', '', '2', './docs/foto_vehiculo/42.jpg', '1111111111'),
(43, 'ESR484', 'Ford f150', '#ffff00', '', '', '2', '', '3164464337'),
(44, 'pdf123', 'Ford f150', '#000000', '', '', '1', '', '1239'),
(45, 'rzy419', '2011', '#ffffff', './docs/t_propiedad/45.pdf', './docs/t_mecanico/45.pdf', '1', './docs/foto_vehiculo/45.jpg', '3174104529');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `escalas`
--
ALTER TABLE `escalas`
  ADD PRIMARY KEY (`id_escala`),
  ADD KEY `haber_idx` (`id_ruta_e`);

--
-- Indices de la tabla `ruta`
--
ALTER TABLE `ruta`
  ADD PRIMARY KEY (`id_ruta`),
  ADD KEY `pertenece_idx` (`cel_r`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cel`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id_vehiculo`),
  ADD KEY `posee_idx` (`cel_v`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `escalas`
--
ALTER TABLE `escalas`
  MODIFY `id_escala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `ruta`
--
ALTER TABLE `ruta`
  MODIFY `id_ruta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `escalas`
--
ALTER TABLE `escalas`
  ADD CONSTRAINT `haber` FOREIGN KEY (`id_ruta_e`) REFERENCES `ruta` (`id_ruta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ruta`
--
ALTER TABLE `ruta`
  ADD CONSTRAINT `pertenece` FOREIGN KEY (`cel_r`) REFERENCES `usuario` (`cel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `posee` FOREIGN KEY (`cel_v`) REFERENCES `usuario` (`cel`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
