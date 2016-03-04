-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 07-01-2016 a las 16:13:11
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cupones`
--

INSERT INTO `cupones` (`id`, `titulo`, `descripcion`, `precio`, `precio_anterior`, `ruta_imagen`, `fecha_fin_venta`, `fecha_fin_canjeo`, `publicado`) VALUES
(1, 'Curso de conducción de Rally', 'Driveland te ofrece una iniciación al rally para una persona o, si lo prefieres, un curso de conducción Rally a elegir (Emotion, Emotion Pro, Rally Evolution o pack dúo Rally Emotion Pro). La actividad incluye vueltas al circuito de 2,2 km, con muchos tramos de tierra, conduciendo un BMW Serie 1 o similar.\r\n\r\nLos cursos están impartidos, entre otros, por los pilotos Alberto Monarri y Maxi Cortes. Incluyen casco y seguro.', '49.00', '100.00', 'rally.jpg', '2015-12-18 00:00:00', '2016-01-31 00:00:00', 1),
(2, 'Cena con espectáculo flamenco', 'El Cortijo de Bayron se encuentra ubicado muy próximo a la av. de la Albufera, junto a la parada de metro de Nueva Numancia (L1). Es un restaurante que ofrece gastronomía española y su carta se compone de una gran variedad de productos típicos del país como el jamón ibérico de guijuelo o el pulpo a la gallega. Dispone de tablao flamenco y ofrece espectáculos todos los viernes y sábados. También organizan eventos de todo tipo, como bodas, comuniones y cumpleaños.\r\nPara 2 personas por 34,95 € en vez de 96 €\r\nEl menú incluye:\r\n\r\nAperitivo por persona:\r\nSalmorejo cordobés con virutas de jamón \r\nEntrante a elegir por persona:\r\nEnsalada “El Cortijo”: lechuga, tomate, aguacate, atún, maíz dulce, huevo y cebolla.\r\nSurtido de ibéricos: jamón, salchichón, chorizo y queso manchego.\r\nPrincipal a elegir por persona:\r\nMedallones de solomillo con cebolla confitada y reducción de frutos del bosque\r\nBacalao al horno con acompañamiento de patatas panaderas\r\nBebida a elegir por persona:\r\nBotella de vino de la casa para 2\r\nAgua, refresco o cerveza\r\nPostre a elegir por persona :\r\nPuding\r\nFlan\r\nTarta de queso', '34.95', '96.00', 'flamenco.jpg', '2016-03-25 00:00:00', '2016-12-31 00:00:00', 1),
(3, 'Circuito spa y masaje en pareja', 'Circuito spa para dos por 29,95 € en vez de 100 €\r\nLa duración del circuito spa es de 90 minutos y la del masaje es de 30 minutos.\r\n\r\nEl circuito spa incluye:\r\n\r\nPiscina de hidroterapia\r\nDucha de sensación\r\nCromoterapia\r\nducha de contraste\r\nBaño turco\r\nSauna\r\nÁrea de relax\r\nEs necesario bañador o bikini, chanclas y gorro de baño. El gorro y las chanclas se pueden adquirir en el Spa a un precio especial.', '29.95', '100.00', 'spa.jpg', '2016-01-31 00:00:00', '2016-08-31 00:00:00', 1),
(4, 'Revisión Itv', '¿Qué es la Itv y qué necesitas para pasarla?\r\nLa Inspección Técnica de Vehículos, Itv, es un servicio con el que se pretende reducir la incidencia de los accidentes por fallos mecánicos sobre la seguridad vial, así como controlar el nivel de emisiones contaminantes producidas por los vehículos a motor, en aras a la preservación del Medio Ambiente.\r\n\r\nEl contenido y los protocolos de las pruebas que se hacen en las estaciones de Itv están regulados por la Unión Europea, que fija las normas básicas a las que deben adaptarse todos los estados miembros.\r\n\r\nEn el caso de España, la mayoría de las Comunidades Autónomas tienen transferidas las competencias en materia de Itv, quedando reservada a la Administración Central, mediante el Ministerio de Ciencia y Tecnología, la transposición de la normativa comunitaria y la elaboración de normas generales.', '29.95', '39.95', 'itv.jpg', '2016-03-31 00:00:00', '2016-09-30 00:00:00', 1);

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
(4, 4),
(4, 5);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `establecimientos`
--

INSERT INTO `establecimientos` (`id`, `titulo`, `descripcion`, `direccion`, `provincia`, `municipio`, `codigo_postal`, `latitud`, `longitud`, `telefono`, `email`, `web`) VALUES
(1, 'Driveland', 'Escuela de conducción', 'Calle Acacias, 34', 'Madrid', 'Chapineria', 28956, '40.379130000000', '-4.209486000000', 912223399, 'info@driveland.com', 'http://www.driveland.com'),
(2, 'Spa AquaBona', 'Spa y masajes', 'Calle Mariana Pineda 2', 'Madrid', 'Alcorcón', 28922, '40.352089000000', '-3.824955000000', 913434347, 'info@aquabona.com', 'http://www.aquabona.com'),
(3, 'El Cortijo de Bayron', 'Es un restaurante que ofrece gastronomía española y su carta se compone de una gran variedad de productos típicos del país como el jamón ibérico de guijuelo o el pulpo a la gallega', 'Calle Luna 1', 'Madrid', 'Madrid', 28010, '40.421996000000', '-3.705599000000', 916667788, 'info@cortijo.com', 'http://www.cortijo.com'),
(4, 'ITV Alcobendas', 'Son necesarios los siguientes documentos originales: Tarjeta de Inspección técnica, Permiso de Circulación, Seguro en vigor del vehículo, DNI del titular del vehículo e Informe de la ITV desfavorable en caso de acudir por segunda inspección', 'Calle Industrias 78', 'Madrid', 'Alcobendas', 28656, '40.534760000000', '-3.649578000000', 911336745, 'info@itvalcobendas.com', 'http://wwww.itvalcobendas.com'),
(5, 'ITV Alcorcón', 'Son necesarios los siguientes documentos originales: Tarjeta de Inspección técnica, Permiso de Circulación, Seguro en vigor del vehículo, DNI del titular del vehículo e Informe de la ITV desfavorable en caso de acudir por segunda inspección', 'Calle Hermanamiento 48', 'Madrid', 'Alcorcón', 28922, '40.326383000000', '-3.836036000000', 91887766, 'info@itvalcorcon.com', 'http://www.itvalcorcon.com');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `nombre`, `apellidos`, `rol`) VALUES
(1, 'jl.balles.m@gmail.com', '123', 'Jose Luis', 'Ballesteros', 'ROLE_SUPER_ADMIN'),
(2, 'test@test.com', 'kk', 'Paco', 'Perez', 'ROLE_USUARIO'),
(3, 'otinoelia@gmail.com', 'kk', 'Noelia', 'Oti', 'USUARIO_ROLE'),
(4, 'dani@me.com', 'kk', 'Daniel', 'Patón', 'ROLE_USUARIO');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `establecimientos`
--
ALTER TABLE `establecimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
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
