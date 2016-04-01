-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 01-04-2016 a las 17:38:22
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
  `fecha_canjeo` datetime DEFAULT NULL,
  `codigo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `canjeado` tinyint(1) NOT NULL,
  `establecimiento_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `cupon_id`, `fecha_compra`, `fecha_canjeo`, `codigo`, `canjeado`, `establecimiento_id`, `usuario_id`) VALUES
(5, 2, '2016-01-10 00:00:00', '2016-01-16 00:00:00', 'UPM00123', 1, 5, 2),
(6, 3, '2016-01-22 00:00:00', NULL, 'UPM00897', 0, NULL, 2),
(7, 1, '2016-03-18 00:00:00', NULL, 'UPM00232', 0, 1, 2),
(8, 4, '2016-04-01 00:00:00', NULL, 'UPM00444', 0, 5, 2),
(9, 4, '2016-03-08 00:00:00', '2016-03-11 00:00:00', 'UPM00513', 1, 4, 4),
(10, 4, '2016-05-22 00:00:00', '2016-05-30 00:00:00', 'UPM00623', 1, 7, 4),
(11, 4, '2016-06-03 00:00:00', NULL, 'UPM00989', 0, 7, 4);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cupones`
--

INSERT INTO `cupones` (`id`, `titulo`, `descripcion`, `precio`, `precio_anterior`, `ruta_imagen`, `fecha_fin_venta`, `fecha_fin_canjeo`, `publicado`) VALUES
(1, 'Curso de conducción de Rally', 'Driveland te ofrece una iniciación al rally para una persona o, si lo prefieres, un curso de conducción Rally a elegir (Emotion, Emotion Pro, Rally Evolution o pack dúo Rally Emotion Pro). La actividad incluye vueltas al circuito de 2,2 km, con muchos tramos de tierra, conduciendo un BMW Serie 1 o similar.\r\n\r\nLos cursos están impartidos, entre otros, por los pilotos Alberto Monarri y Maxi Cortes. Incluyen casco y seguro.', '49.00', '100.00', 'rally.jpg', '2016-07-31 00:00:00', '2016-12-30 00:00:00', 1),
(2, 'Cena y espectáculo flamenco', 'El Cortijo de Bayron está ubicado muy próximo a la Av de la Albufera, junto a la parada de metro de Nueva Numancia (L1). Es un restaurante que ofrece gastronomía española y su carta se compone de una gran variedad de productos típicos del país como el jamón ibérico de guijuelo o el pulpo a la gallega. Dispone de tablao flamenco y ofrece espectáculos todos los viernes y sábados. También organizan eventos de todo tipo, como bodas, comuniones y cumpleaños.\nPara 2 personas por 34,95 € en vez de 96 €\nEl menú incluye:\n\nAperitivo por persona:\nSalmorejo cordobés con virutas de jamón \nEntrante a elegir por persona:\nEnsalada “El Cortijo”: lechuga, tomate, aguacate, atún, maíz dulce, huevo y cebolla.\nSurtido de ibéricos: jamón, salchichón, chorizo y queso manchego.\nPrincipal a elegir por persona:\nMedallones de solomillo con cebolla confitada y reducción de frutos del bosque\nBacalao al horno con acompañamiento de patatas panaderas\nBebida a elegir por persona:\nBotella de vino de la casa para 2\nAgua, refresco o cerveza\nPostre a elegir por persona :\nPuding\nFlan\nTarta de queso', '34.95', '96.00', 'flamenco.jpg', '2016-09-01 00:00:00', '2017-06-30 00:00:00', 1),
(3, 'Circuito spa y masaje en pareja', 'Circuito spa para dos por 29,95 € en vez de 100 €\r\nLa duración del circuito spa es de 90 minutos y la del masaje es de 30 minutos.\r\n\r\nEl circuito spa incluye:\r\n\r\nPiscina de hidroterapia\r\nDucha de sensación\r\nCromoterapia\r\nducha de contraste\r\nBaño turco\r\nSauna\r\nÁrea de relax\r\nEs necesario bañador o bikini, chanclas y gorro de baño. El gorro y las chanclas se pueden adquirir en el Spa a un precio especial.', '29.95', '100.00', 'spa.jpg', '2016-03-31 00:00:00', '2016-10-31 00:00:00', 1),
(4, 'Revisión ITV rebajada', '¿Qué es la Itv y qué necesitas para pasarla?\r\nLa Inspección Técnica de Vehículos, Itv, es un servicio con el que se pretende reducir la incidencia de los accidentes por fallos mecánicos sobre la seguridad vial, así como controlar el nivel de emisiones contaminantes producidas por los vehículos a motor, en aras a la preservación del Medio Ambiente.\r\n\r\nEl contenido y los protocolos de las pruebas que se hacen en las estaciones de Itv están regulados por la Unión Europea, que fija las normas básicas a las que deben adaptarse todos los estados miembros.\r\n\r\nEn el caso de España, la mayoría de las Comunidades Autónomas tienen transferidas las competencias en materia de Itv, quedando reservada a la Administración Central, mediante el Ministerio de Ciencia y Tecnología, la transposición de la normativa comunitaria y la elaboración de normas generales.', '29.95', '39.95', 'itv.jpg', '2016-12-31 00:00:00', '2017-12-31 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupones_establecimientos`
--

CREATE TABLE `cupones_establecimientos` (
  `id_cupon` int(11) NOT NULL,
  `id_establecimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cupones_establecimientos`
--

INSERT INTO `cupones_establecimientos` (`id_cupon`, `id_establecimiento`) VALUES
(1, 1),
(2, 3),
(3, 2),
(3, 8),
(4, 4),
(4, 5),
(4, 6),
(4, 7);

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `establecimientos`
--

INSERT INTO `establecimientos` (`id`, `titulo`, `descripcion`, `direccion`, `provincia`, `municipio`, `codigo_postal`, `latitud`, `longitud`, `telefono`, `email`, `web`) VALUES
(1, 'Driveland', 'Escuela de conducción', 'Calle Acacias, 34', 'Madrid', 'Chapineria', 28956, '40.379130000000', '-4.209486000000', 912223399, 'info@driveland.com', 'http://www.driveland.com'),
(2, 'Spa AquaBona Alcorcón', 'Spa y masajes', 'Calle Mariana Pineda 2', 'Madrid', 'Alcorcón', 28922, '40.352089000000', '-3.824955000000', 913434347, 'info@aquabona.com', 'http://www.aquabona.com'),
(3, 'El Cortijo de Bayron', 'Es un restaurante que ofrece gastronomía española y su carta se compone de una gran variedad de productos típicos del país como el jamón ibérico de guijuelo o el pulpo a la gallega', 'Calle Luna 1', 'Madrid', 'Madrid', 28010, '40.421996000000', '-3.705599000000', 916667788, 'info@cortijo.com', 'http://www.cortijo.com'),
(4, 'ITV Alcobendas', 'Son necesarios los siguientes documentos originales: Tarjeta de Inspección técnica, Permiso de Circulación, Seguro en vigor del vehículo, DNI del titular del vehículo e Informe de la ITV desfavorable en caso de acudir por segunda inspección', 'Calle Industrias 78', 'Madrid', 'Alcobendas', 28656, '40.534760000000', '-3.649578000000', 911336745, 'info@itvalcobendas.com', 'http://wwww.itvalcobendas.com'),
(5, 'ITV Alcorcón', 'Son necesarios los siguientes documentos originales: Tarjeta de Inspección técnica, Permiso de Circulación, Seguro en vigor del vehículo, DNI del titular del vehículo e Informe de la ITV desfavorable en caso de acudir por segunda inspección', 'Calle Hermanamiento 48', 'Madrid', 'Alcorcón', 28922, '40.326383000000', '-3.836036000000', 91887766, 'info@itvalcorcon.com', 'http://www.itvalcorcon.com'),
(6, 'ITV Móstoles', 'Son necesarios los siguientes documentos originales: Tarjeta de Inspección técnica, Permiso de Circulación, Seguro en vigor del vehículo, DNI del titular del vehículo e Informe de la ITV desfavorable en caso de acudir por segunda inspección', 'Calle Vereda Segoviana, 14', 'Madrid', 'Móstoles', 28935, '40.344737000000', '-3.872926000000', 918887766, 'info@itvmostoles.com', 'http://www.itvmostoles.com'),
(7, 'ITV Leganes', 'Son necesarios los siguientes documentos originales: Tarjeta de Inspección técnica, Permiso de Circulación, Seguro en vigor del vehículo, DNI del titular del vehículo e Informe de la ITV desfavorable en caso de acudir por segunda inspección', 'Av. Carlos Sainz, 33', 'Madrid', 'Leganes', 28914, '40.315668000000', '-3.768526000000', 912223399, 'info@itvleganes.com', 'http://www.itvleganes.com'),
(8, 'Spa AquaBona Madrid', 'Estamos en el céntrico barrio de Malasaña.\r\nDisfrutarás de los mejores masajes y circuitos termales.', 'Calle de la Palma, 48', 'Madrid', 'Madrid', 28004, '40.426611000000', '-3.706491000000', 917879891, 'info-madrid@aquabona.com', 'http://www.aquabona.com');

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
  `rol` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `nombre`, `apellidos`, `rol`) VALUES
(1, 'jl.balles.m@gmail.com', '123', 'Jose Luis', 'Ballesteros', 'ROLE_SUPER_ADMIN'),
(2, 'test@test.com', 'kk', 'Paco', 'Perez Galdos', 'ROLE_USUARIO'),
(3, 'otinoelia@gmail.com', 'kk', 'Noelia', 'Oti', 'ROLE_USUARIO'),
(4, 'dani@me.com', 'kk', 'Daniel', 'Patón', 'ROLE_USUARIO'),
(6, 'driveland@gmail.com', 'kk', 'Administrador', 'Driveland', 'ROLE_UESTABLECIMIENTO'),
(7, 'user@itv.es', 'itv', 'Administrador', 'ITVs', 'ROLE_UESTABLECIMIENTO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_establecimeintos`
--

CREATE TABLE `usuarios_establecimeintos` (
  `id_establecimiento` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios_establecimeintos`
--

INSERT INTO `usuarios_establecimeintos` (`id_establecimiento`, `id_usuario`) VALUES
(1, 6),
(4, 7),
(5, 7),
(6, 7),
(7, 7);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `cupones`
--
ALTER TABLE `cupones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `establecimientos`
--
ALTER TABLE `establecimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `FK_3692E1B771B61351` FOREIGN KEY (`establecimiento_id`) REFERENCES `establecimientos` (`id`),
  ADD CONSTRAINT `FK_3692E1B7D7AFF6F2` FOREIGN KEY (`cupon_id`) REFERENCES `cupones` (`id`),
  ADD CONSTRAINT `FK_3692E1B7DB38439E` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

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
  ADD CONSTRAINT `FK_BD6E44977DFA12F6` FOREIGN KEY (`id_establecimiento`) REFERENCES `establecimientos` (`id`),
  ADD CONSTRAINT `FK_BD6E4497FCF8192D` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
