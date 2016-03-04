-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-12-2015 a las 19:39:29
-- Versión del servidor: 5.5.42
-- Versión de PHP: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `misCuponesDB`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `cupon_id` int(11) DEFAULT NULL,
  `fecha_compra` datetime NOT NULL,
  `fecha_canjeo` datetime NOT NULL,
  `codigo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `canjeado` tinyint(1) NOT NULL,
  `establecimiento_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupones`
--

CREATE TABLE `cupones` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `precio_anterior` decimal(10,2) NOT NULL,
  `ruta_imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_fin_venta` datetime NOT NULL,
  `fecha_fin_canjeo` datetime NOT NULL,
  `publicado` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cupones`
--

INSERT INTO `cupones` (`id`, `titulo`, `descripcion`, `precio`, `precio_anterior`, `ruta_imagen`, `fecha_fin_venta`, `fecha_fin_canjeo`, `publicado`) VALUES
(1, 'Test número 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.', '100.00', '150.00', '', '2015-12-18 00:00:00', '2016-01-31 00:00:00', 1),
(2, 'Probando2 prueba', 'Sit dolorem, ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique', '30.00', '45.00', '', '2016-03-25 00:00:00', '2016-12-31 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupones_establecimientos`
--

CREATE TABLE `cupones_establecimientos` (
  `id_cupon` int(11) NOT NULL,
  `id_establecimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `establecimientos`
--

CREATE TABLE `establecimientos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provincia` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `municipio` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `codigo_postal` int(11) NOT NULL,
  `latitud` decimal(18,12) NOT NULL,
  `longitud` decimal(18,12) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `web` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_establecimeintos`
--

CREATE TABLE `usuarios_establecimeintos` (
  `id_establecimiento` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3692E1B7D7AFF6F2` (`cupon_id`),
  ADD KEY `IDX_3692E1B771B61351` (`establecimiento_id`),
  ADD KEY `IDX_3692E1B7DB38439E` (`usuario_id`);

--
-- Indices de la tabla `cupones`
--
ALTER TABLE `cupones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cupones_establecimientos`
--
ALTER TABLE `cupones_establecimientos`
  ADD PRIMARY KEY (`id_cupon`,`id_establecimiento`),
  ADD KEY `IDX_F6A0F518B64AB879` (`id_cupon`),
  ADD KEY `IDX_F6A0F5187DFA12F6` (`id_establecimiento`);

--
-- Indices de la tabla `establecimientos`
--
ALTER TABLE `establecimientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios_establecimeintos`
--
ALTER TABLE `usuarios_establecimeintos`
  ADD PRIMARY KEY (`id_establecimiento`,`id_usuario`),
  ADD KEY `IDX_BD6E44977DFA12F6` (`id_establecimiento`),
  ADD KEY `IDX_BD6E4497FCF8192D` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cupones`
--
ALTER TABLE `cupones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `establecimientos`
--
ALTER TABLE `establecimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `FK_3692E1B7DB38439E` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `FK_3692E1B771B61351` FOREIGN KEY (`establecimiento_id`) REFERENCES `establecimientos` (`id`),
  ADD CONSTRAINT `FK_3692E1B7D7AFF6F2` FOREIGN KEY (`cupon_id`) REFERENCES `cupones` (`id`);

--
-- Filtros para la tabla `cupones_establecimientos`
--
ALTER TABLE `cupones_establecimientos`
  ADD CONSTRAINT `FK_F6A0F5187DFA12F6` FOREIGN KEY (`id_establecimiento`) REFERENCES `establecimientos` (`id`),
  ADD CONSTRAINT `FK_F6A0F518B64AB879` FOREIGN KEY (`id_cupon`) REFERENCES `cupones` (`id`);

--
-- Filtros para la tabla `usuarios_establecimeintos`
--
ALTER TABLE `usuarios_establecimeintos`
  ADD CONSTRAINT `FK_BD6E4497FCF8192D` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `FK_BD6E44977DFA12F6` FOREIGN KEY (`id_establecimiento`) REFERENCES `establecimientos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
