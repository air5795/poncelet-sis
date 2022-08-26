-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-08-2022 a las 00:35:03
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cotizacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nit` int(100) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `direccion` text DEFAULT NULL,
  `dateadd` datetime NOT NULL DEFAULT current_timestamp(),
  `usuario_id` int(11) NOT NULL,
  `estatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nit`, `nombre`, `telefono`, `direccion`, `dateadd`, `usuario_id`, `estatus`) VALUES
(1, 10857896, 'Gobierno Autonomo Municipal de Puna ', 62457852, 'GAM PUNA', '2022-08-22 23:25:50', 1, 1),
(13, 104780137, 'Gobierno Autonomo Municipal de Potosí ', 71811452, 'GAM Potosí', '2022-08-23 00:25:38', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `nocotizacion` bigint(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `usuario` int(11) DEFAULT NULL,
  `codcliente` int(11) DEFAULT NULL,
  `totalcompra` decimal(10,2) DEFAULT NULL,
  `totalventa` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_cotizacion`
--

CREATE TABLE `detalle_cotizacion` (
  `correlativo` bigint(11) NOT NULL,
  `nocotizacion` bigint(11) DEFAULT NULL,
  `codproducto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `preciocompra` decimal(10,2) DEFAULT NULL,
  `precioventa` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_temp`
--

CREATE TABLE `detalle_temp` (
  `correlativo` int(11) NOT NULL,
  `nocotizacion` bigint(11) NOT NULL,
  `codproducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `preciototal` decimal(10,2) NOT NULL,
  `precioventa` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `correlativo` int(11) NOT NULL,
  `codproducto` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `cantidad` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exp_general`
--

CREATE TABLE `exp_general` (
  `id_exp` int(11) NOT NULL,
  `nombre_contratante` varchar(80) DEFAULT NULL,
  `obj_contrato` varchar(150) DEFAULT NULL,
  `ubicacion` varchar(50) DEFAULT NULL,
  `monto_bs` decimal(19,2) NOT NULL,
  `monto_dolares` decimal(19,2) NOT NULL,
  `fecha_ejecucion` date NOT NULL,
  `participa_aso` varchar(50) NOT NULL,
  `n_socio` varchar(50) NOT NULL,
  `profesional_resp` varchar(50) NOT NULL,
  `dateadd` datetime NOT NULL DEFAULT current_timestamp(),
  `usuario_id` int(11) NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `exp_general`
--

INSERT INTO `exp_general` (`id_exp`, `nombre_contratante`, `obj_contrato`, `ubicacion`, `monto_bs`, `monto_dolares`, `fecha_ejecucion`, `participa_aso`, `n_socio`, `profesional_resp`, `dateadd`, `usuario_id`, `image`) VALUES
(11, 'GOBIERNO AUTONOMO MUNICIPAL DE COLCHA “K”', 'ACTA DE RECEPCION DEFINITIVA DE AQUISICION DE INSUMOS DE BIOSEGURIDAD PARA EL PERSONAL MEDICO DE LA RED DE SERVICIOS DE SALUD DEL MUNICIPIO DE', 'COLCHA “K”', '700.00', '101.00', '2021-08-13', 'Encargado', '', 'Alberto Arispe Ponce', '2022-08-25 23:42:32', 1, 'acta_e1108aea900f162c74d3471973e094c2.jpg'),
(12, 'Hoobvcc', 'Tjkkhg hikkhb ', 'Potosí ', '5000.00', '718.39', '2022-07-09', 'Encargado', '', 'Alberto Arispe Ponce', '2022-08-26 00:32:39', 1, 'acta_759c1e24102dec2e16554745df1e2b61.jpg'),
(13, 'GOBIERNO AUTONOMO MUNICIPAL DE COLCHA “K”', 'ACTA DE RECEPCION DEFINITIVA DE AQUISICION DE INSUMOS DE BIOSEGURIDAD PARA EL PERSONAL MEDICO DE LA RED DE SERVICIOS DE SALUD DEL MUNICIPIO DE', 'COLCHA “K”', '1700.00', '244.25', '2022-06-16', 'Encargado', '', 'Alberto Arispe Ponce', '2022-08-26 18:09:56', 1, 'acta_d28a30cdb6c41c920ca8079c34ca7e57.jpg'),
(14, 'Gguukgkhg ', 'j', 'Potosi', '5700.00', '818.97', '2022-08-28', 'Encargado', '', 'Alberto Arispe Ponce', '2022-08-26 18:28:48', 1, 'acta_36804785c6225d92e41044b676851bc2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codproducto` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `proveedor` int(11) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `existencia` int(11) DEFAULT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `codproveedor` int(11) NOT NULL,
  `proveedor` varchar(100) DEFAULT NULL,
  `contacto` varchar(100) DEFAULT NULL,
  `telefono` bigint(11) DEFAULT NULL,
  `direccion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`codproveedor`, `proveedor`, `contacto`, `telefono`, `direccion`) VALUES
(1, 'BIC', 'Claudia Rosales', 789877889, 'Avenida las Americas'),
(2, 'CASIO', 'Jorge Herrera', 565656565656, 'Calzada Las Flores'),
(3, 'Omega', 'Julio Estrada', 982877489, 'Avenida Elena Zona 4, Guatemala'),
(4, 'Dell Compani', 'Roberto Estrada', 2147483647, 'Guatemala, Guatemala'),
(5, 'Olimpia S.A', 'Elena Franco Morales', 564535676, '5ta. Avenida Zona 4 Ciudad'),
(6, 'Oster', 'Fernando Guerra', 78987678, 'Calzada La Paz, Guatemala'),
(7, 'ACELTECSA S.A', 'Ruben PÃ©rez', 789879889, 'Colonia las Victorias'),
(8, 'Sony', 'Julieta Contreras', 89476787, 'Antigua Guatemala'),
(9, 'VAIO', 'Felix Arnoldo Rojas', 476378276, 'Avenida las Americas Zona 13'),
(10, 'SUMAR', 'Oscar Maldonado', 788376787, 'Colonia San Jose, Zona 5 Guatemala'),
(11, 'HP', 'Angel Cardona', 2147483647, '5ta. calle zona 4 Guatemala');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `rol` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Trabajador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `usuario` varchar(15) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `rol` int(11) DEFAULT NULL,
  `estatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `correo`, `usuario`, `clave`, `rol`, `estatus`) VALUES
(1, 'Alejandro Iglesias Raldes', 'air5795@gmail.com', 'admin', 'b8c42335f4c60eae8cd31bec2e27e237', 1, 1),
(12, 'Mariana Nicol Erquicia Camacho', 'marianaerquiciac@gmail.com', 'Nicol10', 'abb439c0d7022f6ab0ade1f105103663', 2, 1),
(17, 'juan perez ochoa', 'juan@mail.com', 'junito', 'e10adc3949ba59abbe56e057f20f883e', 2, 1),
(18, 'marvin', 'marvn@hotmail.com', 'mar45', 'e10adc3949ba59abbe56e057f20f883e', 2, 0),
(19, 'qwe', 'fa@hotmail.com', 'sdaad', '14a9f8c6f825091c7ca23da3bce1dfd8', 2, 1),
(20, 'fhiu ui ', 'jhfjfj@gmail.com', 'lñjñ', 'd47d615a5ae71cce6560f4a0cde12462', 2, 1),
(21, 'errwr', 'sdsf@ggmal.com', 'sdsfagmal.com', '6081594975a764c8e3a691fa2b3a321d', 1, 1),
(22, 'qweqeq', 'dsfdlsd@gmail.com', 'sada', 'adbf5a778175ee757c34d0eba4e932bc', 2, 1),
(23, 'sadds', 'asdassd@gmail.com', 'asds', '0aa1ea9a5a04b78d4581dd6d17742627', 2, 1),
(24, 'sads', 'asdassdaasd@gmail.com', 'adsd', '28ca509666ff1144cf8917f400124079', 2, 1),
(25, 'pedro', 'asdasd@gmail.com', 'asdasd', 'adbf5a778175ee757c34d0eba4e932bc', 2, 1),
(26, 'ana', 'mariana@gmail.com', 'sadad', '881c8c2dd6ac40bd35b3d5c46b0b7ef8', 2, 1),
(27, 'ale2', 'ale.empresa2@gmail.com', 'ale2', 'd9fa510e8a4bbdcf1775036283f229ba', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`nocotizacion`),
  ADD KEY `usuario` (`usuario`),
  ADD KEY `codcliente` (`codcliente`);

--
-- Indices de la tabla `detalle_cotizacion`
--
ALTER TABLE `detalle_cotizacion`
  ADD PRIMARY KEY (`correlativo`),
  ADD KEY `codproducto` (`codproducto`),
  ADD KEY `nofactura` (`nocotizacion`);

--
-- Indices de la tabla `detalle_temp`
--
ALTER TABLE `detalle_temp`
  ADD PRIMARY KEY (`correlativo`),
  ADD KEY `nofactura` (`nocotizacion`),
  ADD KEY `codproducto` (`codproducto`);

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`correlativo`),
  ADD KEY `codproducto` (`codproducto`);

--
-- Indices de la tabla `exp_general`
--
ALTER TABLE `exp_general`
  ADD PRIMARY KEY (`id_exp`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codproducto`),
  ADD KEY `proveedor` (`proveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`codproveedor`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `rol` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  MODIFY `nocotizacion` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_cotizacion`
--
ALTER TABLE `detalle_cotizacion`
  MODIFY `correlativo` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_temp`
--
ALTER TABLE `detalle_temp`
  MODIFY `correlativo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `correlativo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `exp_general`
--
ALTER TABLE `exp_general`
  MODIFY `id_exp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `codproducto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `codproveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`idusuario`);

--
-- Filtros para la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD CONSTRAINT `cotizacion_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cotizacion_ibfk_2` FOREIGN KEY (`codcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_cotizacion`
--
ALTER TABLE `detalle_cotizacion`
  ADD CONSTRAINT `detalle_cotizacion_ibfk_1` FOREIGN KEY (`nocotizacion`) REFERENCES `cotizacion` (`nocotizacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_cotizacion_ibfk_2` FOREIGN KEY (`codproducto`) REFERENCES `producto` (`codproducto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_temp`
--
ALTER TABLE `detalle_temp`
  ADD CONSTRAINT `detalle_temp_ibfk_1` FOREIGN KEY (`nocotizacion`) REFERENCES `cotizacion` (`nocotizacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_temp_ibfk_2` FOREIGN KEY (`codproducto`) REFERENCES `producto` (`codproducto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `entradas_ibfk_1` FOREIGN KEY (`codproducto`) REFERENCES `producto` (`codproducto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `exp_general`
--
ALTER TABLE `exp_general`
  ADD CONSTRAINT `exp_general_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`idusuario`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`proveedor`) REFERENCES `proveedor` (`codproveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
