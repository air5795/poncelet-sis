-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2022 a las 23:04:14
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

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
-- Estructura de tabla para la tabla `activos`
--

CREATE TABLE `activos` (
  `id_activo` int(11) NOT NULL,
  `nombre_activo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `activos`
--

INSERT INTO `activos` (`id_activo`, `nombre_activo`) VALUES
(1, 'Mobiliario'),
(3, 'Seguridad industrial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activo_fijo`
--

CREATE TABLE `activo_fijo` (
  `id_activoFijo` int(11) NOT NULL,
  `f_articulo` varchar(255) NOT NULL,
  `f_stock` int(11) NOT NULL,
  `f_foto` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `f_activoCategoria` int(11) NOT NULL,
  `fecha_add` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias`
--

CREATE TABLE `asistencias` (
  `id_asistencia` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `fecha_asis` datetime NOT NULL DEFAULT current_timestamp(),
  `tipo_registro` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `observacion_asis` varchar(250) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `asistencias`
--

INSERT INTO `asistencias` (`id_asistencia`, `usuario_id`, `fecha_asis`, `tipo_registro`, `observacion_asis`) VALUES
(2, 28, '2022-10-26 14:11:20', 'entrada', ''),
(3, 29, '2022-10-26 14:03:30', 'entrada', ''),
(5, 1, '2022-10-26 14:14:04', 'entrada', ''),
(6, 12, '2022-10-26 14:21:35', 'entrada', ''),
(7, 28, '2022-10-26 18:23:40', 'salida', ''),
(8, 1, '2022-10-26 18:24:12', 'salida', ''),
(9, 12, '2022-10-26 18:24:27', 'salida', ''),
(10, 1, '2022-10-27 08:14:23', 'entrada', ''),
(11, 28, '2022-10-27 08:14:30', 'entrada', ''),
(12, 12, '2022-10-27 08:15:31', 'entrada', ''),
(20, 29, '2022-10-27 08:13:16', 'entrada', ''),
(30, 12, '2022-10-27 12:16:33', 'salida', ''),
(31, 1, '2022-10-27 12:35:39', 'salida', ''),
(32, 1, '2022-10-27 14:06:11', 'entrada', ''),
(33, 28, '2022-10-27 14:06:38', 'entrada', ''),
(35, 12, '2022-10-27 14:16:15', 'entrada', ''),
(37, 28, '2022-10-27 18:04:33', 'salida', ''),
(38, 12, '2022-10-27 18:24:08', 'salida', ''),
(39, 1, '2022-10-27 18:25:20', 'salida', ''),
(40, 29, '2022-10-27 18:28:19', 'salida', ''),
(41, 29, '2022-10-28 07:55:36', 'entrada', ''),
(42, 1, '2022-10-28 08:15:28', 'entrada', ''),
(43, 12, '2022-10-28 08:16:14', 'entrada', ''),
(44, 28, '2022-10-28 08:01:28', 'entrada', ''),
(45, 29, '2022-10-28 12:00:37', 'salida', ''),
(46, 1, '2022-10-28 12:24:15', 'salida', ''),
(47, 12, '2022-10-28 12:24:47', 'salida', 'En la tarde no vendré por giaje a Caiza para puntado d e losa canaleta y arco'),
(48, 29, '2022-10-28 13:59:10', 'entrada', ''),
(49, 1, '2022-10-28 14:49:00', 'entrada', 'Fuimos donde don julio por los fierros Estoy haciendo horario continuo'),
(50, 28, '2022-10-28 16:19:01', 'salida', ''),
(51, 1, '2022-10-31 08:06:14', 'entrada', ''),
(52, 29, '2022-10-31 08:07:26', 'entrada', ''),
(53, 12, '2022-10-31 08:13:31', 'entrada', ''),
(54, 28, '2022-10-31 08:00:46', 'entrada', ''),
(55, 29, '2022-10-31 12:17:43', 'salida', ''),
(56, 12, '2022-10-31 12:26:30', 'salida', ''),
(57, 1, '2022-10-31 12:26:50', 'salida', ''),
(58, 28, '2022-10-31 12:31:34', 'salida', ''),
(59, 1, '2022-10-31 14:00:01', 'entrada', ''),
(60, 29, '2022-10-31 14:10:19', 'entrada', ''),
(61, 28, '2022-10-31 14:13:06', 'entrada', ''),
(62, 12, '2022-10-31 15:30:04', 'entrada', 'Fui a mandar la encomienda al supervisor de Caiza D, posterior al mismo fui al Bracamonte por el pro'),
(63, 12, '2022-10-31 18:00:24', 'salida', ''),
(64, 29, '2022-10-31 18:00:25', 'salida', ''),
(65, 1, '2022-10-31 18:01:42', 'salida', ''),
(66, 28, '2022-10-31 18:05:01', 'salida', ''),
(67, 1, '2022-11-01 08:16:36', 'entrada', ''),
(68, 12, '2022-11-01 08:16:44', 'entrada', ''),
(69, 28, '2022-11-01 07:55:52', 'entrada', ''),
(70, 29, '2022-11-01 08:03:19', 'entrada', ''),
(71, 29, '2022-11-01 13:08:16', 'salida', ''),
(72, 28, '2022-11-01 13:12:31', 'salida', ''),
(73, 12, '2022-11-01 13:16:02', 'salida', ''),
(74, 1, '2022-11-01 13:17:20', 'salida', ''),
(75, 29, '2022-11-03 08:10:51', 'entrada', ''),
(76, 1, '2022-11-03 08:15:19', 'entrada', ''),
(77, 12, '2022-11-03 08:11:25', 'entrada', ''),
(78, 28, '2022-11-03 08:06:46', 'entrada', ''),
(79, 29, '2022-11-03 12:11:09', 'salida', ''),
(80, 1, '2022-11-03 12:11:25', 'salida', ''),
(81, 12, '2022-11-03 12:12:13', 'salida', ''),
(82, 29, '2022-11-03 14:04:06', 'entrada', ''),
(83, 28, '2022-11-03 14:04:07', 'entrada', ''),
(84, 1, '2022-11-03 14:06:34', 'entrada', ''),
(85, 12, '2022-11-03 14:19:23', 'entrada', ''),
(86, 1, '2022-11-03 18:01:54', 'salida', ''),
(87, 29, '2022-11-03 18:05:12', 'salida', ''),
(88, 12, '2022-11-03 18:16:32', 'salida', ''),
(89, 12, '2022-11-03 18:19:47', 'salida', ''),
(90, 28, '2022-11-03 18:51:45', 'salida', ''),
(91, 29, '2022-11-04 07:58:58', 'entrada', ''),
(92, 28, '2022-11-04 08:04:06', 'entrada', ''),
(93, 12, '2022-11-04 08:17:46', 'entrada', ''),
(94, 1, '2022-11-04 08:17:55', 'entrada', ''),
(95, 29, '2022-11-04 12:00:18', 'salida', ''),
(97, 28, '2022-11-04 12:06:46', 'salida', ''),
(98, 12, '2022-11-04 12:25:48', 'salida', ''),
(99, 1, '2022-11-04 12:26:09', 'salida', ''),
(100, 28, '2022-11-04 14:05:25', 'entrada', ''),
(101, 29, '2022-11-04 14:05:37', 'entrada', ''),
(102, 1, '2022-11-04 14:24:08', 'entrada', ''),
(103, 12, '2022-11-04 16:55:34', 'entrada', 'Fui al Bracamonte por la adjudicacion de terrazas y cotizar materiales gnral'),
(104, 1, '2022-11-04 18:00:39', 'salida', ''),
(105, 29, '2022-11-04 18:05:14', 'salida', ''),
(106, 12, '2022-11-04 18:16:42', 'salida', ''),
(107, 12, '2022-11-04 18:17:52', 'salida', ''),
(108, 28, '2022-11-04 19:11:43', 'salida', ''),
(109, 28, '2022-11-07 08:00:01', 'entrada', ''),
(110, 29, '2022-11-07 08:00:36', 'entrada', ''),
(111, 12, '2022-11-07 08:16:12', 'entrada', ''),
(112, 1, '2022-11-07 08:16:34', 'entrada', ''),
(113, 29, '2022-11-07 12:07:35', 'salida', ''),
(114, 28, '2022-11-07 12:23:30', 'salida', ''),
(115, 1, '2022-11-07 12:23:59', 'salida', ''),
(117, 29, '2022-11-07 13:48:47', 'entrada', ''),
(118, 12, '2022-11-07 14:09:38', 'entrada', ''),
(119, 1, '2022-11-07 14:17:06', 'entrada', ''),
(120, 29, '2022-11-07 18:00:23', 'salida', ''),
(121, 1, '2022-11-07 18:32:34', 'salida', ''),
(122, 12, '2022-11-07 18:39:28', 'salida', ''),
(123, 28, '2022-11-07 19:21:27', 'salida', ''),
(124, 28, '2022-11-08 07:47:40', 'entrada', ''),
(125, 29, '2022-11-08 08:07:42', 'entrada', ''),
(126, 1, '2022-11-08 08:11:52', 'entrada', ''),
(127, 12, '2022-11-08 08:27:40', 'entrada', ''),
(128, 29, '2022-11-08 12:03:27', 'salida', ''),
(129, 1, '2022-11-08 12:07:26', 'salida', ''),
(130, 12, '2022-11-08 12:19:51', 'salida', ''),
(131, 28, '2022-11-08 12:29:05', 'salida', ''),
(132, 29, '2022-11-08 14:00:36', 'entrada', ''),
(133, 1, '2022-11-08 14:03:56', 'entrada', ''),
(134, 28, '2022-11-08 14:08:34', 'entrada', ''),
(135, 12, '2022-11-08 14:28:16', 'entrada', ''),
(136, 29, '2022-11-08 18:38:15', 'salida', ''),
(137, 12, '2022-11-08 18:47:27', 'salida', ''),
(138, 1, '2022-11-08 18:49:14', 'salida', ''),
(139, 28, '2022-11-08 18:49:22', 'salida', ''),
(140, 29, '2022-11-09 08:04:30', 'entrada', ''),
(141, 28, '2022-11-09 08:05:34', 'entrada', ''),
(142, 1, '2022-11-09 08:19:32', 'entrada', ''),
(143, 12, '2022-11-09 08:30:27', 'entrada', ''),
(144, 29, '2022-11-09 12:01:25', 'salida', ''),
(145, 1, '2022-11-09 12:17:51', 'salida', ''),
(146, 28, '2022-11-09 12:25:23', 'salida', ''),
(147, 12, '2022-11-09 12:25:31', 'salida', ''),
(148, 29, '2022-11-09 13:58:06', 'entrada', ''),
(149, 12, '2022-11-09 14:18:20', 'entrada', ''),
(150, 28, '2022-11-09 14:25:26', 'entrada', ''),
(151, 1, '2022-11-09 14:35:56', 'entrada', ''),
(152, 29, '2022-11-09 18:02:34', 'salida', ''),
(153, 1, '2022-11-09 18:04:40', 'salida', ''),
(154, 28, '2022-11-09 18:05:31', 'salida', ''),
(155, 12, '2022-11-09 18:13:58', 'salida', ''),
(156, 29, '2022-11-11 08:01:14', 'entrada', ''),
(157, 12, '2022-11-11 08:21:19', 'entrada', ''),
(158, 28, '2022-11-11 08:37:24', 'entrada', ''),
(159, 1, '2022-11-11 08:54:59', 'entrada', 'Fui a Kollasuyo a las 8 a dejar anuncio de pasante '),
(160, 12, '2022-11-11 10:39:02', 'salida', 'Fui a comprar cerámica,llevar a Bracamonte. Luego viajé a Caiza a 12:30'),
(161, 1, '2022-11-11 12:00:49', 'salida', ''),
(162, 29, '2022-11-11 12:02:02', 'salida', ''),
(163, 28, '2022-11-11 13:42:39', 'salida', ''),
(164, 28, '2022-11-11 13:42:53', 'entrada', ''),
(165, 29, '2022-11-11 14:01:56', 'entrada', ''),
(166, 1, '2022-11-11 14:11:12', 'entrada', ''),
(167, 29, '2022-11-11 18:00:50', 'salida', ''),
(168, 28, '2022-11-11 18:10:47', 'salida', ''),
(169, 1, '2022-11-11 18:12:29', 'salida', ''),
(170, 29, '2022-11-14 08:05:17', 'entrada', ''),
(171, 28, '2022-11-14 08:00:44', 'entrada', ''),
(172, 28, '2022-11-14 12:17:33', 'salida', ''),
(173, 29, '2022-11-14 13:08:38', 'salida', ''),
(174, 1, '2022-11-14 14:02:58', 'entrada', ''),
(175, 28, '2022-11-14 14:11:44', 'entrada', ''),
(177, 29, '2022-11-14 15:25:49', 'entrada', ''),
(178, 29, '2022-11-14 18:02:26', 'salida', ''),
(179, 28, '2022-11-14 18:19:11', 'salida', ''),
(180, 29, '2022-11-15 08:09:09', 'entrada', ''),
(181, 28, '2022-11-15 08:15:04', 'entrada', ''),
(183, 1, '2022-11-15 08:16:19', 'entrada', ''),
(184, 12, '2022-11-15 08:46:22', 'entrada', 'Se descargó ayer la cerámica hasta las 20:30 pm'),
(185, 29, '2022-11-15 12:18:03', 'salida', ''),
(186, 12, '2022-11-15 12:29:38', 'salida', ''),
(187, 1, '2022-11-15 12:30:41', 'salida', ''),
(188, 29, '2022-11-15 14:21:46', 'entrada', ''),
(190, 1, '2022-11-15 14:26:33', 'entrada', ''),
(191, 12, '2022-11-15 14:27:20', 'entrada', ''),
(192, 12, '2022-11-15 16:36:51', 'salida', 'Fui a dejar la arena a la obra Bracamonte'),
(193, 28, '2022-11-15 17:22:30', 'salida', 'Horario continuo'),
(194, 29, '2022-11-15 18:03:10', 'salida', ''),
(195, 1, '2022-11-15 18:11:34', 'salida', ''),
(196, 12, '2022-11-15 18:12:53', 'salida', 'Volví a la oficina desp. de la arena'),
(197, 29, '2022-11-16 07:57:41', 'entrada', ''),
(198, 28, '2022-11-16 08:02:59', 'entrada', ''),
(200, 1, '2022-11-16 08:08:33', 'entrada', ''),
(201, 28, '2022-11-16 11:29:03', 'salida', 'FUI A LA ALCALDIA A FIRMAR '),
(202, 29, '2022-11-16 12:00:31', 'salida', ''),
(203, 12, '2022-11-16 12:20:02', 'salida', ''),
(204, 1, '2022-11-16 12:21:27', 'salida', ''),
(205, 29, '2022-11-16 13:55:11', 'entrada', ''),
(206, 28, '2022-11-16 14:17:35', 'entrada', ''),
(207, 1, '2022-11-16 14:17:53', 'entrada', ''),
(208, 12, '2022-11-16 14:22:00', 'entrada', ''),
(209, 29, '2022-11-16 18:03:09', 'salida', ''),
(210, 1, '2022-11-16 18:03:26', 'salida', ''),
(211, 28, '2022-11-16 18:28:23', 'salida', ''),
(212, 12, '2022-11-16 18:28:28', 'salida', ''),
(213, 29, '2022-11-17 08:04:50', 'entrada', ''),
(214, 28, '2022-11-17 08:05:11', 'entrada', ''),
(215, 1, '2022-11-17 08:19:22', 'entrada', ''),
(216, 12, '2022-11-17 08:31:23', 'entrada', 'Continue el trabajo de Colcha K hasta las 3 am ayer'),
(217, 1, '2022-11-17 12:04:34', 'salida', ''),
(218, 29, '2022-11-17 14:02:19', 'entrada', ''),
(220, 12, '2022-11-17 14:12:55', 'entrada', ''),
(221, 1, '2022-11-17 14:16:15', 'entrada', ''),
(222, 28, '2022-11-17 18:00:56', 'salida', 'HORARIO CONTINUO '),
(223, 29, '2022-11-17 18:01:12', 'salida', 'No registre mi salida al medio dia, porque fui a firmar las actas de recepcion de las balanzas, en S'),
(224, 1, '2022-11-17 18:02:30', 'salida', ''),
(225, 12, '2022-11-17 18:16:23', 'salida', ''),
(226, 29, '2022-11-18 08:15:55', 'entrada', 'Llegué 8:00 pero no traje mi llave y espere a queme abran la puerta '),
(227, 12, '2022-11-18 08:17:11', 'entrada', ''),
(228, 28, '2022-11-18 08:28:10', 'entrada', ''),
(229, 29, '2022-11-18 12:07:46', 'salida', ''),
(230, 1, '2022-11-18 12:23:07', 'salida', ''),
(231, 12, '2022-11-18 12:23:43', 'salida', ''),
(232, 28, '2022-11-18 13:01:00', 'salida', ''),
(233, 29, '2022-11-18 14:05:43', 'entrada', ''),
(234, 12, '2022-11-18 14:13:53', 'entrada', ''),
(235, 28, '2022-11-18 14:28:21', 'entrada', 'Llegue tarde , porque me quede hasta la 13:00'),
(237, 1, '2022-11-18 14:33:42', 'entrada', ''),
(238, 1, '2022-11-18 18:02:41', 'salida', ''),
(239, 29, '2022-11-18 18:02:56', 'salida', ''),
(240, 28, '2022-11-18 18:07:51', 'salida', ''),
(241, 29, '2022-11-21 08:04:35', 'entrada', ''),
(242, 1, '2022-11-21 08:16:35', 'entrada', ''),
(243, 28, '2022-11-21 08:20:41', 'entrada', ''),
(244, 29, '2022-11-21 12:02:32', 'salida', ''),
(245, 12, '2022-11-21 12:52:27', 'salida', ''),
(246, 29, '2022-11-21 13:58:13', 'entrada', ''),
(247, 1, '2022-11-21 14:17:55', 'entrada', ''),
(248, 12, '2022-11-21 14:25:28', 'entrada', ''),
(249, 28, '2022-11-21 14:30:50', 'salida', 'HORARIO CONTINUO , TENIA QUE SALIR A LAS 15:00, PERO ME TUVE QUE IR YA QUE TENGO TEMPERATURA , Y DOLOR DE OJOS '),
(250, 1, '2022-11-21 18:21:27', 'salida', ''),
(251, 29, '2022-11-21 18:06:51', 'salida', ''),
(252, 12, '2022-11-21 18:23:04', 'salida', ''),
(253, 29, '2022-11-22 07:55:55', 'entrada', ''),
(254, 32, '2022-11-22 08:00:16', 'entrada', ''),
(255, 1, '2022-11-22 08:15:13', 'entrada', ''),
(256, 28, '2022-11-22 08:38:56', 'entrada', ''),
(257, 32, '2022-11-22 11:31:35', 'salida', 'Fui a Lavar el auto'),
(258, 29, '2022-11-22 12:01:34', 'salida', ''),
(259, 1, '2022-11-22 12:09:34', 'salida', ''),
(260, 12, '2022-11-22 12:24:58', 'salida', ''),
(261, 28, '2022-11-22 12:27:57', 'salida', 'LLEGUE A LAS 8:25 PERO NO MARQUE LA ENTRADA'),
(262, 28, '2022-11-22 14:04:09', 'entrada', ''),
(263, 29, '2022-11-22 14:06:18', 'entrada', ''),
(264, 12, '2022-11-22 14:10:05', 'entrada', ''),
(265, 1, '2022-11-22 14:29:29', 'entrada', ''),
(266, 32, '2022-11-22 15:06:41', 'entrada', ''),
(267, 29, '2022-11-22 18:00:00', 'salida', ''),
(268, 28, '2022-11-22 18:00:11', 'salida', ''),
(269, 1, '2022-11-22 18:05:03', 'salida', ''),
(270, 29, '2022-11-23 08:04:09', 'entrada', ''),
(271, 32, '2022-11-23 08:05:46', 'entrada', ''),
(272, 28, '2022-11-23 08:12:08', 'entrada', ''),
(273, 1, '2022-11-23 08:35:41', 'entrada', ''),
(274, 12, '2022-11-23 08:56:23', 'entrada', 'Regresamos ayer a las 9 pm de Chaqui y Samasa Alta con el chofer y el ingeniero'),
(275, 29, '2022-11-23 12:06:57', 'salida', ''),
(276, 32, '2022-11-23 12:09:34', 'salida', ''),
(277, 12, '2022-11-23 12:20:48', 'salida', ''),
(278, 29, '2022-11-23 14:03:51', 'entrada', ''),
(279, 32, '2022-11-23 14:06:14', 'entrada', ''),
(280, 28, '2022-11-23 14:13:44', 'entrada', ''),
(281, 12, '2022-11-23 14:16:15', 'entrada', ''),
(282, 29, '2022-11-23 18:02:20', 'salida', ''),
(283, 32, '2022-11-23 18:03:10', 'salida', ''),
(284, 1, '2022-11-23 18:14:37', 'salida', ''),
(285, 12, '2022-11-23 18:36:25', 'salida', ''),
(286, 28, '2022-11-24 07:39:03', 'entrada', ''),
(287, 29, '2022-11-24 08:00:35', 'entrada', ''),
(288, 32, '2022-11-24 08:04:19', 'entrada', ''),
(289, 1, '2022-11-24 09:18:24', 'entrada', 'Pedi permiso a primera hora '),
(290, 29, '2022-11-24 12:02:07', 'salida', ''),
(291, 28, '2022-11-24 12:12:59', 'salida', ''),
(292, 1, '2022-11-24 12:25:54', 'salida', ''),
(293, 12, '2022-11-24 12:26:40', 'salida', ''),
(294, 32, '2022-11-24 12:30:26', 'salida', ''),
(295, 29, '2022-11-24 13:49:58', 'entrada', ''),
(296, 28, '2022-11-24 13:56:53', 'entrada', ''),
(297, 1, '2022-11-24 14:12:29', 'entrada', ''),
(298, 12, '2022-11-24 14:15:26', 'entrada', ''),
(299, 32, '2022-11-24 14:54:37', 'entrada', ''),
(300, 29, '2022-11-24 18:03:28', 'salida', ''),
(301, 1, '2022-11-24 18:32:15', 'salida', ''),
(302, 28, '2022-11-24 18:32:59', 'salida', ''),
(303, 12, '2022-11-24 18:37:11', 'salida', ''),
(304, 29, '2022-11-25 08:03:20', 'entrada', ''),
(305, 32, '2022-11-25 08:09:31', 'entrada', ''),
(306, 12, '2022-11-25 08:20:43', 'entrada', ''),
(307, 1, '2022-11-25 08:21:04', 'entrada', ''),
(308, 29, '2022-11-25 12:04:42', 'salida', ''),
(309, 12, '2022-11-25 12:26:33', 'salida', ''),
(311, 32, '2022-11-25 13:32:00', 'salida', ''),
(312, 29, '2022-11-25 13:59:11', 'entrada', ''),
(313, 12, '2022-11-25 14:27:59', 'entrada', ''),
(314, 1, '2022-11-25 14:33:22', 'entrada', ''),
(315, 29, '2022-11-25 18:11:22', 'salida', ''),
(316, 1, '2022-11-25 18:11:55', 'salida', ''),
(317, 12, '2022-11-25 18:41:55', 'salida', ''),
(318, 28, '2022-11-25 18:42:45', 'salida', 'ENTRE A L,AS 8:20 A 12:30  DE 14:00 A 18:42'),
(319, 29, '2022-11-28 08:03:11', 'entrada', ''),
(320, 32, '2022-11-28 08:03:24', 'entrada', ''),
(321, 1, '2022-11-28 08:15:20', 'entrada', ''),
(322, 12, '2022-11-28 08:28:47', 'entrada', ''),
(323, 29, '2022-11-28 12:01:12', 'salida', ''),
(324, 1, '2022-11-28 12:15:52', 'salida', ''),
(325, 28, '2022-11-28 12:40:03', 'salida', 'ME OLVIDE MARCAR MI ENTRADA A LAS 8:15 , '),
(326, 1, '2022-11-28 13:55:05', 'entrada', ''),
(327, 29, '2022-11-28 14:06:33', 'entrada', ''),
(328, 28, '2022-11-28 14:11:48', 'entrada', ''),
(329, 12, '2022-11-28 15:18:50', 'entrada', 'Me fui a mi casa a las 13:30 del Bracamonte y dsp. de comprar materiales'),
(330, 32, '2022-11-28 18:05:27', 'salida', ''),
(331, 29, '2022-11-28 18:08:39', 'salida', ''),
(332, 1, '2022-11-28 18:09:58', 'salida', ''),
(333, 12, '2022-11-28 18:10:59', 'salida', ''),
(334, 28, '2022-11-28 18:11:47', 'salida', ''),
(335, 32, '2022-11-29 08:18:19', 'entrada', ''),
(336, 29, '2022-11-29 08:18:38', 'entrada', 'LLEGUE 8:00 PERO OLVIDE TRAER LA LLAVE DE LA OFICINA '),
(337, 12, '2022-11-29 08:21:43', 'entrada', ''),
(338, 1, '2022-11-29 08:22:35', 'entrada', ''),
(339, 32, '2022-11-29 12:07:02', 'salida', ''),
(340, 29, '2022-11-29 12:12:50', 'salida', ''),
(341, 1, '2022-11-29 12:16:46', 'salida', ''),
(342, 12, '2022-11-29 12:20:43', 'salida', ''),
(343, 28, '2022-11-29 12:34:49', 'salida', ''),
(344, 29, '2022-11-29 13:57:10', 'entrada', ''),
(345, 32, '2022-11-29 14:10:28', 'entrada', ''),
(346, 12, '2022-11-29 14:10:46', 'entrada', ''),
(347, 1, '2022-11-29 14:17:59', 'entrada', ''),
(348, 28, '2022-11-29 14:46:41', 'entrada', ''),
(350, 32, '2022-11-29 18:02:01', 'salida', ''),
(351, 29, '2022-11-29 18:04:38', 'salida', ''),
(352, 28, '2022-11-29 18:10:42', 'salida', ''),
(353, 1, '2022-11-29 18:16:09', 'salida', ''),
(354, 12, '2022-11-29 18:17:14', 'salida', ''),
(355, 29, '2022-11-30 08:01:38', 'entrada', ''),
(356, 32, '2022-11-30 08:01:55', 'entrada', ''),
(357, 28, '2022-11-30 08:38:48', 'entrada', ''),
(358, 29, '2022-11-30 12:00:06', 'salida', ''),
(359, 1, '2022-11-30 12:12:55', 'salida', ''),
(360, 28, '2022-11-30 12:30:17', 'salida', ''),
(361, 12, '2022-11-30 12:31:16', 'salida', ''),
(362, 29, '2022-11-30 13:58:02', 'entrada', ''),
(363, 28, '2022-11-30 14:19:00', 'entrada', ''),
(364, 12, '2022-11-30 14:27:59', 'entrada', ''),
(365, 1, '2022-11-30 14:29:27', 'entrada', ''),
(366, 29, '2022-11-30 18:00:17', 'salida', ''),
(367, 32, '2022-11-30 18:01:30', 'salida', ''),
(368, 28, '2022-11-30 18:03:09', 'salida', ''),
(369, 1, '2022-11-30 18:04:16', 'salida', ''),
(370, 12, '2022-11-30 18:10:14', 'salida', ''),
(371, 29, '2022-12-01 08:02:28', 'entrada', ''),
(372, 32, '2022-12-01 08:03:00', 'entrada', ''),
(373, 1, '2022-12-01 08:24:53', 'entrada', ''),
(374, 29, '2022-12-01 12:06:38', 'salida', ''),
(375, 33, '2022-12-01 12:30:08', 'salida', ''),
(376, 1, '2022-12-01 12:32:42', 'salida', ''),
(377, 28, '2022-12-01 12:40:34', 'salida', ''),
(378, 12, '2022-12-01 12:40:57', 'salida', ''),
(379, 32, '2022-12-01 12:51:48', 'salida', ''),
(380, 29, '2022-12-01 13:46:14', 'entrada', ''),
(381, 28, '2022-12-01 13:51:21', 'entrada', ''),
(382, 1, '2022-12-01 14:20:32', 'entrada', ''),
(383, 12, '2022-12-01 14:28:42', 'entrada', ''),
(384, 33, '2022-12-01 18:00:08', 'salida', ''),
(385, 29, '2022-12-01 18:00:20', 'salida', ''),
(386, 28, '2022-12-01 18:04:47', 'salida', ''),
(387, 1, '2022-12-01 18:17:26', 'salida', ''),
(388, 12, '2022-12-01 18:22:14', 'salida', ''),
(389, 29, '2022-12-02 08:03:26', 'entrada', ''),
(390, 32, '2022-12-02 08:03:46', 'entrada', ''),
(391, 1, '2022-12-02 08:28:13', 'entrada', ''),
(392, 33, '2022-12-02 08:37:50', 'entrada', ''),
(393, 1, '2022-12-02 12:01:19', 'salida', ''),
(394, 29, '2022-12-02 12:02:38', 'salida', ''),
(395, 33, '2022-12-02 12:20:09', 'salida', ''),
(397, 29, '2022-12-02 14:11:28', 'entrada', ''),
(398, 1, '2022-12-02 14:12:30', 'entrada', ''),
(399, 28, '2022-12-02 14:18:27', 'entrada', ''),
(400, 33, '2022-12-02 14:20:21', 'entrada', ''),
(401, 1, '2022-12-02 18:01:00', 'salida', ''),
(402, 29, '2022-12-02 18:01:39', 'salida', ''),
(403, 28, '2022-12-02 18:03:49', 'salida', ''),
(404, 12, '2022-12-02 18:06:49', 'salida', ''),
(405, 29, '2022-12-05 07:57:18', 'entrada', ''),
(406, 32, '2022-12-05 08:04:37', 'entrada', ''),
(407, 28, '2022-12-05 08:17:27', 'entrada', ''),
(408, 33, '2022-12-05 08:18:24', 'entrada', ''),
(409, 12, '2022-12-05 08:26:03', 'entrada', ''),
(410, 1, '2022-12-05 09:58:11', 'entrada', 'Permiso '),
(411, 28, '2022-12-05 12:43:09', 'salida', ''),
(412, 1, '2022-12-05 12:43:16', 'salida', ''),
(413, 33, '2022-12-05 12:44:36', 'salida', ''),
(415, 28, '2022-12-05 14:01:28', 'entrada', ''),
(416, 1, '2022-12-05 14:09:57', 'entrada', ''),
(417, 33, '2022-12-05 14:21:30', 'entrada', ''),
(418, 29, '2022-12-05 16:19:28', 'salida', 'HICE HORARIO CONTINUO'),
(419, 1, '2022-12-05 17:59:46', 'salida', ''),
(420, 28, '2022-12-05 18:04:54', 'salida', ''),
(421, 33, '2022-12-05 18:10:32', 'salida', ''),
(422, 12, '2022-12-05 18:43:47', 'salida', ''),
(423, 32, '2022-12-05 18:45:10', 'salida', ''),
(424, 29, '2022-12-06 07:51:20', 'entrada', ''),
(425, 32, '2022-12-06 08:02:37', 'entrada', ''),
(426, 1, '2022-12-06 08:22:24', 'entrada', ''),
(427, 12, '2022-12-06 08:23:28', 'entrada', ''),
(428, 29, '2022-12-06 12:07:10', 'salida', ''),
(429, 1, '2022-12-06 12:07:34', 'salida', ''),
(430, 33, '2022-12-06 12:10:35', 'salida', ''),
(431, 28, '2022-12-06 13:38:37', 'salida', ''),
(432, 28, '2022-12-06 13:38:49', 'entrada', ''),
(433, 29, '2022-12-06 14:03:45', 'entrada', ''),
(434, 33, '2022-12-06 14:27:29', 'entrada', ''),
(435, 1, '2022-12-06 14:17:30', 'entrada', ''),
(436, 32, '2022-12-06 17:59:15', 'salida', ''),
(437, 1, '2022-12-06 18:00:33', 'salida', ''),
(438, 29, '2022-12-06 18:06:35', 'salida', ''),
(439, 33, '2022-12-06 18:12:38', 'salida', ''),
(440, 28, '2022-12-06 18:13:19', 'salida', ''),
(441, 12, '2022-12-06 18:15:22', 'salida', ''),
(442, 29, '2022-12-07 07:58:55', 'entrada', ''),
(443, 32, '2022-12-07 07:59:05', 'entrada', ''),
(444, 1, '2022-12-07 08:20:15', 'entrada', ''),
(445, 28, '2022-12-07 08:23:51', 'entrada', ''),
(446, 12, '2022-12-07 08:25:42', 'entrada', ''),
(447, 33, '2022-12-07 08:34:49', 'entrada', ''),
(448, 29, '2022-12-07 12:03:07', 'salida', ''),
(449, 32, '2022-12-07 12:03:25', 'salida', ''),
(450, 1, '2022-12-07 12:24:29', 'salida', ''),
(451, 33, '2022-12-07 12:30:57', 'salida', ''),
(452, 12, '2022-12-07 12:33:02', 'salida', ''),
(453, 28, '2022-12-07 13:28:29', 'salida', ''),
(454, 28, '2022-12-07 13:28:40', 'entrada', ''),
(455, 32, '2022-12-07 14:03:19', 'entrada', ''),
(456, 29, '2022-12-07 14:05:38', 'entrada', ''),
(457, 1, '2022-12-07 14:24:45', 'entrada', ''),
(458, 33, '2022-12-07 14:25:59', 'entrada', ''),
(459, 12, '2022-12-07 14:34:46', 'entrada', ''),
(460, 1, '2022-12-07 18:07:43', 'salida', ''),
(461, 29, '2022-12-07 18:18:50', 'salida', ''),
(462, 33, '2022-12-07 18:33:18', 'salida', ''),
(463, 12, '2022-12-07 18:33:49', 'salida', ''),
(464, 28, '2022-12-07 18:37:09', 'salida', ''),
(465, 29, '2022-12-08 08:00:34', 'entrada', ''),
(468, 32, '2022-12-08 08:01:31', 'entrada', ''),
(469, 28, '2022-12-08 08:15:24', 'entrada', ''),
(470, 33, '2022-12-08 08:19:41', 'entrada', ''),
(471, 1, '2022-12-08 08:24:19', 'entrada', ''),
(472, 12, '2022-12-08 08:27:05', 'entrada', ''),
(473, 32, '2022-12-08 12:01:57', 'salida', ''),
(474, 29, '2022-12-08 12:29:00', 'salida', ''),
(475, 1, '2022-12-08 12:47:30', 'salida', ''),
(476, 33, '2022-12-08 13:38:18', 'salida', ''),
(477, 12, '2022-12-08 13:39:28', 'salida', ''),
(478, 28, '2022-12-08 13:39:40', 'salida', ''),
(479, 32, '2022-12-08 14:00:22', 'entrada', ''),
(480, 29, '2022-12-08 14:05:33', 'entrada', ''),
(481, 28, '2022-12-08 14:16:18', 'entrada', ''),
(482, 33, '2022-12-08 15:04:21', 'entrada', ''),
(483, 32, '2022-12-08 18:14:38', 'salida', ''),
(484, 1, '2022-12-08 18:21:14', 'salida', ''),
(485, 33, '2022-12-08 18:21:39', 'salida', ''),
(486, 29, '2022-12-08 18:22:18', 'salida', ''),
(487, 12, '2022-12-08 18:34:57', 'salida', ''),
(488, 28, '2022-12-08 19:31:51', 'salida', ''),
(489, 29, '2022-12-09 08:05:36', 'entrada', ''),
(490, 32, '2022-12-09 08:17:13', 'entrada', ''),
(491, 33, '2022-12-09 08:23:08', 'entrada', ''),
(492, 1, '2022-12-09 08:23:21', 'entrada', ''),
(493, 12, '2022-12-09 08:27:40', 'entrada', ''),
(494, 29, '2022-12-09 12:02:52', 'salida', ''),
(495, 33, '2022-12-09 12:13:44', 'salida', ''),
(496, 12, '2022-12-09 12:39:21', 'salida', ''),
(497, 29, '2022-12-09 14:01:56', 'entrada', ''),
(498, 33, '2022-12-09 14:20:15', 'entrada', ''),
(499, 29, '2022-12-09 17:59:17', 'salida', ''),
(500, 33, '2022-12-09 18:11:53', 'salida', ''),
(501, 28, '2022-12-09 18:21:50', 'salida', 'No registre mi entrada en la mañana: ingrese a las 08:20 a 13:40, en la tarde ingrese 14:20 a 18:21'),
(502, 12, '2022-12-09 18:39:52', 'salida', ''),
(503, 29, '2022-12-12 07:59:56', 'entrada', ''),
(504, 32, '2022-12-12 08:00:26', 'entrada', ''),
(505, 1, '2022-12-12 08:20:13', 'entrada', ''),
(506, 29, '2022-12-12 12:02:24', 'salida', ''),
(507, 12, '2022-12-12 12:40:13', 'salida', ''),
(508, 28, '2022-12-12 13:12:22', 'salida', 'OLVIDE MARCAR ENTRADA A LAS 8:30 Y AHORA MI SALIDA ES 13:12'),
(509, 29, '2022-12-12 13:54:58', 'entrada', ''),
(510, 12, '2022-12-12 14:30:56', 'entrada', ''),
(511, 29, '2022-12-12 18:01:12', 'salida', ''),
(512, 12, '2022-12-12 18:56:02', 'salida', ''),
(513, 28, '2022-12-12 18:59:07', 'salida', 'ingrese a las 13:50 y sali 19:00'),
(514, 29, '2022-12-13 08:01:09', 'entrada', ''),
(515, 32, '2022-12-13 08:01:16', 'entrada', ''),
(516, 1, '2022-12-13 08:30:02', 'entrada', ''),
(517, 29, '2022-12-13 12:03:25', 'salida', ''),
(518, 33, '2022-12-13 12:42:57', 'salida', ''),
(519, 12, '2022-12-13 12:51:33', 'salida', ''),
(520, 28, '2022-12-13 12:53:32', 'salida', 'En la mañana ingrese 8:30 am y ahora salgo a 12:53 pm'),
(521, 28, '2022-12-13 13:32:10', 'entrada', ''),
(522, 29, '2022-12-13 13:56:47', 'entrada', ''),
(523, 33, '2022-12-13 14:52:42', 'entrada', ''),
(524, 29, '2022-12-13 18:00:13', 'salida', ''),
(525, 33, '2022-12-13 18:07:31', 'salida', ''),
(526, 28, '2022-12-13 18:16:17', 'salida', ''),
(527, 12, '2022-12-13 19:10:25', 'salida', 'Ingresé 2.30 y salgo 19.10'),
(528, 32, '2022-12-14 07:58:38', 'entrada', ''),
(529, 29, '2022-12-14 07:58:40', 'entrada', ''),
(530, 33, '2022-12-14 08:15:59', 'entrada', ''),
(531, 12, '2022-12-14 08:42:17', 'entrada', 'Entre a esta hora debido a que ayer trabaje hasta las 3.30 am en la planilla'),
(532, 1, '2022-12-14 08:46:00', 'entrada', 'hice horario continuo por viaje de caiza hasta las 6 ayer '),
(533, 29, '2022-12-14 12:00:49', 'salida', ''),
(534, 33, '2022-12-14 12:13:42', 'salida', ''),
(535, 1, '2022-12-14 12:14:33', 'salida', ''),
(536, 28, '2022-12-14 12:35:42', 'salida', 'EN LA MAÑANA ENTRE LAS 8:30 AM Y MI SALIDA ES 12:35 PM'),
(537, 12, '2022-12-14 13:07:09', 'salida', ''),
(538, 12, '2022-12-14 13:07:12', 'entrada', ''),
(539, 28, '2022-12-14 13:11:31', 'entrada', ''),
(540, 29, '2022-12-14 14:06:00', 'entrada', ''),
(541, 33, '2022-12-14 14:13:48', 'entrada', ''),
(542, 29, '2022-12-14 18:00:50', 'salida', ''),
(543, 1, '2022-12-14 18:02:06', 'salida', ''),
(544, 32, '2022-12-14 18:02:34', 'salida', ''),
(545, 33, '2022-12-14 18:42:38', 'salida', ''),
(546, 12, '2022-12-14 19:50:58', 'salida', ''),
(547, 28, '2022-12-14 19:52:21', 'salida', ''),
(548, 29, '2022-12-15 08:00:55', 'entrada', ''),
(549, 28, '2022-12-15 08:06:37', 'entrada', ''),
(550, 33, '2022-12-15 08:07:49', 'entrada', ''),
(551, 32, '2022-12-15 08:08:19', 'entrada', ''),
(552, 1, '2022-12-15 08:31:42', 'entrada', ''),
(553, 12, '2022-12-15 08:35:03', 'entrada', ''),
(554, 32, '2022-12-15 12:00:40', 'salida', ''),
(555, 29, '2022-12-15 12:10:29', 'salida', ''),
(556, 1, '2022-12-15 12:23:56', 'salida', ''),
(557, 29, '2022-12-15 14:02:43', 'entrada', ''),
(558, 1, '2022-12-15 14:54:12', 'entrada', ''),
(559, 28, '2022-12-15 16:14:50', 'salida', 'HICE HORARIO CONTINUO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_i`
--

CREATE TABLE `categoria_i` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categoria_i`
--

INSERT INTO `categoria_i` (`id_categoria`, `nombre_categoria`) VALUES
(2, 'Insumos de Bioseguridad'),
(3, 'Herramientas de Trabajo'),
(4, '  Material de Limpieza'),
(5, '   Equipos de Computación'),
(8, 'Seguridad Industrial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `claves`
--

CREATE TABLE `claves` (
  `id_clave` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `usuarios` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `passwords` varchar(70) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `claves`
--

INSERT INTO `claves` (`id_clave`, `nombre`, `usuarios`, `passwords`) VALUES
(4, '     RUPE Y SIGEP', 'AAP660135800', 'poncelet12345A'),
(5, 'WIFI', 'Poncelet', 'Ponce2021.@'),
(6, 'RED-EMPRESA', 'Usuario', 'Ponce2021'),
(7, ' AFPS PREVISION  ', '6601358013', 'RA9345'),
(8, 'SIGEP - SIGMA', '6601358013', 'PIN: 102400'),
(9, 'CODIGO CIUDADANIA SEPREC', '6601358', 'AAP6601358'),
(10, 'FIRMA DIGITAL - ADSIB', '6601358', 'Ponce2022'),
(11, ' AFPS FUTURO', '6601358013', '423695'),
(12, 'NIT', 'Ponce1985', 'Ponce1985'),
(21, 'PIN FIRMA DIGITAL ', 'sin usuario', 'PIN: Ponce2022'),
(22, '  CORREO COMERCIALIZADORA', 'poncelet.bo@gmail.com', 'albertoarispe2022'),
(23, 'CORREO CONSTRUCTORA', 'poncelet.bol@gmail.com', 'albertoarispeponce');

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
(21, 176614027, 'GOBIERNO AUTONOMO DEPARTAMENTAL DE POTOSI', 0, 'GAD POTOSI', '2022-10-06 11:39:51', 1, 1),
(22, 1023689027, 'GOBIERNO AUTONOMO MUNICIPAL DE COLCHA (K)', 0, 'GAM COLCHA (K)', '2022-10-06 11:42:13', 1, 1),
(23, 1030165027, 'GOBIERNO AUTONOMO MUNICIPAL DE TINGUIPAYA ', 0, 'GAM TINGUIPAYA', '2022-10-06 11:45:08', 1, 1),
(24, 1023757028, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 0, 'GAM POTOSI', '2022-10-06 11:46:29', 1, 1),
(25, 1029175026, 'SEDES CHUQUISACA ', 0, 'SEDES CHUQUISACA', '2022-10-06 12:01:48', 1, 1),
(26, 1016255025, 'ELAPAS', 0, 'ELAPAS', '2022-10-06 12:02:29', 1, 1),
(27, 120125027, 'CAJA NACIONAL DE SALUD ', 0, 'CAJA NACIONAL DE SALUD ', '2022-10-06 12:04:12', 1, 1),
(28, 1000323025, 'GOBIERNO AUTONOMO MUNICIPAL DE YAMPARAEZ', 0, 'GAM YAMPARAEZ', '2022-10-06 12:06:30', 1, 1),
(29, 1004777023, 'ADUANA NACIONAL ', 0, 'ADUANA NACIONAL ', '2022-10-06 12:07:06', 1, 1),
(30, 125885028, 'GOBIERNO AUTONOMO MUNICIPAL DE PUNA', 0, 'GAM PUNA', '2022-10-06 12:07:50', 1, 1),
(31, 1010495021, 'GOBIERNO AUTONOMO MUNICIPAL DE CHAYANTA', 0, 'GAM CHAYANTA', '2022-10-06 12:08:29', 1, 1),
(32, 127819026, 'GOBIERNO AUTONOMO MUNICIPAL LAS CARRERAS', 0, 'GAM CARRERAS', '2022-10-06 12:09:11', 1, 1),
(33, 144796029, 'VIAS BOLIVIA', 0, 'VIAS BOLIVIA', '2022-10-06 12:09:37', 1, 1),
(34, 1023751027, 'UNIVERSIDAD AUTONOMA TOMAS FRIAS ', 0, 'UNIVERSIDAD AUTONOMA TOMAS FRIAS ', '2022-10-06 12:12:11', 1, 1),
(37, 12345679, 'Secretaria Departamental de Mineria Metalurgia', 1234679, 's/n', '2022-11-15 17:05:39', 1, 1),
(38, 660789223, 'GOBIERNO AUTONOMO MUNICIPAL DE CHAQUI', 72869963, 'CHAQUI', '2022-11-21 09:24:00', 28, 1),
(40, 125593024, 'GOBIERNO AUTONOMO MUNICIPAL DE POCOATA', 0, '', '2022-11-24 11:58:44', 28, 1),
(41, 0, 'GOBIERNO MUNICIPAL DE SACACA', 68390622, '', '2022-12-02 12:17:01', 33, 1),
(42, 0, 'GOBIERNO AUTONOMO MUNICIPAL DE CHAQUI', 0, '', '2022-12-06 09:47:07', 29, 1),
(43, 1023568989, 'CENTRO DE SALUD AMBULATORIO SAN ANSELMO', 0, '', '2022-12-07 13:44:52', 28, 1),
(44, 0, 'GOBIERNO AUTONOMO MUNICIPAL DE CKOCHAS', 0, 'GAM CKOCHAS', '2022-12-07 16:39:11', 1, 1),
(45, 0, 'GOBIERNO AUTONOMO MUNICIPAL DE CKOCHAS', 0, '', '2022-12-12 11:16:19', 29, 1),
(46, 0, 'RED DE SERVICIOS DE SALUD MUNICIPAL SAFCI CKOCHAS', 0, 'CKOCHAS', '2022-12-12 11:21:20', 29, 1),
(47, 72727272, 'MIGUEL IBARRA FLORES CUMPA ', 60658969, '', '2022-12-14 11:33:19', 28, 0),
(48, 75757575, 'MIGUEL IBARRA FLORES CUMPA ', 60556055, 'Potosi', '2022-12-14 11:35:28', 28, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coti`
--

CREATE TABLE `coti` (
  `id_cotizacion` int(11) NOT NULL,
  `numero_cotizacion` int(11) NOT NULL,
  `c_cliente` varchar(150) NOT NULL,
  `c_nit` int(11) NOT NULL,
  `c_lugar` varchar(150) NOT NULL,
  `c_items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`c_items`)),
  `c_totalv` int(11) NOT NULL,
  `c_totalc` int(11) NOT NULL,
  `c_inpuestos` int(11) NOT NULL,
  `c_envio` int(11) NOT NULL,
  `c_totalg` int(11) NOT NULL,
  `c_garantia` varchar(150) NOT NULL,
  `c_valides` varchar(150) NOT NULL,
  `c_entrega` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `nombre_contratante` varchar(250) DEFAULT NULL,
  `obj_contrato` varchar(250) DEFAULT NULL,
  `ubicacion` varchar(50) DEFAULT NULL,
  `monto_bs` decimal(19,2) NOT NULL,
  `monto_dolares` decimal(19,2) NOT NULL,
  `fecha_ejecucion` date NOT NULL,
  `participa_aso` varchar(50) NOT NULL,
  `n_socio` varchar(50) NOT NULL,
  `profesional_resp` varchar(50) NOT NULL,
  `dateadd` datetime NOT NULL DEFAULT current_timestamp(),
  `usuario_id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `image4` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL DEFAULT '0',
  `image5` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `image6` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `image7` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `image8` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `image9` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `image10` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `image11` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `image12` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `image13` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `image14` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `image15` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `exp_general`
--

INSERT INTO `exp_general` (`id_exp`, `nombre_contratante`, `obj_contrato`, `ubicacion`, `monto_bs`, `monto_dolares`, `fecha_ejecucion`, `participa_aso`, `n_socio`, `profesional_resp`, `dateadd`, `usuario_id`, `image`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `image10`, `image11`, `image12`, `image13`, `image14`, `image15`) VALUES
(1, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'ACTA DE CONFORMIDAD ADQUISICION DE CONTENEDORES Y EQUIPOS AMBIENTALES', 'PORCO', '40000.00', '5747.13', '2014-12-07', '', '', 'ALBERTO ARISPE PONCE', '2022-09-09 17:17:55', 1, 'acta_2014-12-07_1_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'ACTA DE CONFORMIDAD ALIMENTOS SECOS ATENCION DE INTERNADOS', 'PORCO', '48848.00', '7018.39', '2015-03-10', '', '', 'ALBERTO ARISPE PONCE', '2022-09-09 17:18:56', 1, 'acta_2015-03-10_2_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'ACTA DE CONFORMIDAD ALIMENTOS SECOS SEGUNDO SEMESTRE UNIDADES EDUCATIVAS DE CARMA Y VISIJSA', 'PORCO', '35935.00', '5163.07', '2015-08-18', '', '', 'ALBERTO ARISPE PONCE', '2022-09-09 17:23:22', 1, 'acta_2015-08-18_3_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'ACTA DE CONFORMIDAD MATERIAL ELECTRICO LUMINARIA DE YZDL 234-270W COMPLETO', 'PORCO', '48375.00', '6950.43', '2015-12-17', '', '', 'ALBERTO ARISPE PONCE', '2022-09-09 17:24:25', 1, 'acta_2015-12-17_4_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'ACTA DE CONFORMIDAD MATERIAL ELÉCTRICO PARA ALUMBRADO PÚBLICO DEL MUNICIPIO DE PORCO.', 'PORCO', '48620.00', '6985.63', '2015-12-23', '', '', 'ALBERTO ARISPE PONCE', '2022-09-09 17:26:10', 1, 'acta_2015-12-23_5_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'ACTA DE CONFORMIDAD Y RECEPCION ATENCION DE INTERNADOS SECTOR EDUCACION – ALIMENTOS SECOS', 'PORCO', '144600.00', '20775.86', '2016-03-14', '', '', 'ALBERTO ARISPE PONCE', '2022-09-09 17:26:49', 1, 'acta_2016-03-14_6_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ACTA DE CONFORMIDAD ADQUISICION MATERIAL ELÉCTRICO- MANTENIMIENTO ALUMBRADO PÚBLICO D-1.', 'POTOSI', '34032.00', '4889.66', '2016-06-06', '', '', 'ALBERTO ARISPE PONCE', '2022-09-09 17:27:35', 1, 'acta_2016-06-06_7_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'ACTA DE CONFORMIDAD ADQUISICION MATERIAL ELÉCTRICO- MANTENIMIENTO ALUMBRADO PÚBLICO D-2', 'POTOSI', '31393.00', '4510.49', '2016-06-06', '', '', 'ALBERTO ARISPE PONCE', '2022-09-09 17:28:26', 1, 'acta_2016-06-06_8_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ACTA DE CONFORMIDAD ADQUISICION MATERIAL ELÉCTRICO- MANTENIMIENTO Y ALUMBRADO DE ALUMBRADO PÚBLICO D-3.', 'POTOSI', '34247.00', '4920.55', '2016-06-06', '', '', 'ALBERTO ARISPE PONCE', '2022-09-09 17:29:11', 1, 'acta_2016-06-06_9_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ACTA DE CONFORMIDAD ADQUISICION MATERIAL ELÉCTRICO- MANTENIMIENTO Y ALUMBRADO PÚBLICO D-4.', 'POTOSI', '32094.00', '4611.21', '2016-06-06', '', '', 'ALBERTO ARISPE PONCE', '2022-09-09 17:29:56', 1, 'acta_2016-06-06_10_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ACTA DE CONFORMIDAD ADQUISICION DE MATERIAL ELÉCTRICO- MANTENIMIENTO Y ALUMBRADO PÚBLICO D-17.', 'POTOSI', '33433.00', '4803.59', '2016-06-06', '', '', 'ALBERTO ARISPE PONCE', '2022-09-09 17:32:41', 1, 'acta_2016-06-06_11_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'ACTA DE CONFORMIDAD LUMINARIA LED 270 W MAS SU FOTOCELDA Y PORTA FOTOCELDA', 'PORCO', '49500.00', '7112.07', '2016-06-10', '', '', 'ALBERTO ARISPE PONCE', '2022-09-09 17:33:38', 1, 'acta_2016-06-10_12_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'ACTA DE CONFORMIDAD SERVICIO DE ALUMBRADAO PUBLICO Y ADQUISICION DE LUMINARIAS LED', 'PORCO', '49500.00', '7112.07', '2016-06-10', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 10:38:26', 1, 'acta_2016-06-10_13_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'ACTA DE CONROMIDAD SERVICIO DE ALUMBRADAO PUBLICO Y “ADQUISICION DE MATERIAL ELECTRICO”', 'PORCO', '142000.00', '20402.30', '2016-07-19', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 10:44:54', 1, 'acta_2016-07-19_14_1.jpg', 'acta_2016-07-19_14_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'ACTA DE CONFORMIDAD Y RECEPCION ATENCION DE INTERNADOS SECTOR EDUCACION – ALIMENTOS SECOS', 'PORCO', '148800.00', '21379.31', '2016-08-31', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 11:28:24', 1, 'acta_2016-08-31_15_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'ACTA DE CONFORMIDAD EQUIPO DE SOLDADURA SECTOR DE EDUCACION', 'PORCO', '36500.00', '5244.25', '2016-10-10', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 11:30:39', 1, 'acta_2016-09-10_16_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'ACTA DE CONFORMIDAD EQUIPO DE FRESADO SECTOR DE EDUCACION', 'PORCO', '99108.00', '14239.66', '2016-10-28', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 11:32:04', 1, 'acta_2016-09-28_17_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'ACTA DE CONFORMIDAD EQUIPO DE FRESADO SECTOR DE EDUCACION', 'PORCO', '71800.00', '10316.09', '2016-10-28', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 11:33:24', 1, 'acta_2016-09-28_18_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'ACTA DE CONFORMIDAD LUMINARIAS ADMINISTRACION CENTRAL', 'PORCO', '49500.00', '7112.07', '2016-11-30', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 11:40:03', 1, 'acta_2016-11-30_19_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'ACTA DE CONFORMIDAD HERRAMIENTAS MENORES SECTOR EDUCACION', 'PORCO', '39193.00', '5631.18', '2016-11-30', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 11:42:56', 1, 'acta_2016-11-30_20_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'ACTA DE CONFORMIDAD LUMINARIAS ADMINISTRACION CENTRAL', 'PORCO', '44000.00', '6321.84', '2016-12-27', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 11:45:45', 1, 'acta_2016-12-27_21_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'ACTA DE CONFORMIDAD ATENCION DE INTERNADOS SECTOR EDUCACION – ALIMENTOS SECOS', 'PORCO', '149656.00', '21502.30', '2017-02-06', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 11:48:52', 1, 'acta_2017-02-06_22_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 'GOBIERNO AUTÓNOMO MUNICIPAL DE COTAGAITA', 'ALUMBRADO PUBLICO NACIONAL (ADQUISICION DE EQUIPOS DE SEGURIDAD Y HERRAMIENTAS DE TRABAJO ) ', 'COTAGAITA', '14445.00', '2075.43', '2017-06-16', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 11:50:19', 1, 'acta_2017-06-16_23_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ACTA DE CONFORMIDAD ALUMBRADO PUBLICO MUNICIPAL (ADQUISICION DE MATERIALES PARA LA CONSTRUCCION DE POSTES)', 'COTAGAITA', '146172.00', '21001.72', '2017-07-20', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 11:52:09', 1, 'acta_2017-07-20_24_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ACTA DE CONFORMIDAD ALUMBRADO PUBLICO MUNICIPAL (ADQUISICION DE MATERIALES PARA LA CONSTRUCCION DE POSTES)', 'COTAGAITA', '49985.00', '7181.75', '2017-09-26', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 11:53:16', 1, 'acta_2017-09-26_25_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 'GOBIERNO AUTONOMO MUNICIPAL DE TUPIZA', 'ACTA DE CONFORMIDAD ADQUISICION DE MATERIAL DEPORTIVOS IX JUEGOS DEPORTIVOS ESTUDIANTILES PLURINACIONALES', 'TUPIZA', '28900.00', '4152.30', '2018-05-21', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 11:54:36', 1, 'acta_2018-05-21_26_1.jpg', 'acta_2018-05-21_26_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 'GOBIERNO AUTONOMO MUNICIPAL DE TUPIZA', 'ACTA DE CONFORMIDAD ADQUISICION DE MATERIAL DEPORTIVOS VII JUEGOS DEPORTIVOS ESTUDIANTILES PLURINACIONALES', 'TUPIZA', '40430.00', '5808.91', '2018-05-21', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 11:58:28', 1, 'acta_2018-05-21_27_1.jpg', 'acta_2018-05-21_27_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ACTA DE CONFORMIDAD FORTALECIMIENTO INSTITUCIONAL – MUNICIPALIDAD DE COTAGAITA: GPS, HANDY DE COMUNICACIÓN, LAPIZ MAGNETICO, LUPA GEOLOGICA.', 'COTAGAITA', '20830.00', '2992.82', '2018-09-28', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 11:59:54', 1, 'acta_2018-09-28_28_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ACTA DE CONFORMIDAD FORTALECIMIENTO INSTITUCIONAL – MUNICIPALIDAD DE COTAGAITA: MATERIAL MOBILIARIO', 'COTAGAITA', '16600.00', '2385.06', '2018-10-04', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 12:00:43', 1, 'acta_2018-10-04_29_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ACTA DE CONFORMIDAD FORTALECIMIENTO INSTITUCIONAL – MUNICIPALIDAD DE COTAGAITA: ROPA DE TRABAJO', 'COTAGAITA', '15239.00', '2189.51', '2018-10-05', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 12:02:15', 1, 'acta_2018-10-05_30_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ACTA DE CONFORMIDAD FORTALECIMIENTO INSTITUCIONAL – MUNICIPALIDAD DE COTAGAITA: MATERIAL DEPORTIVO', 'COTAGAITA', '9894.00', '1421.55', '2018-10-05', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 12:03:17', 1, 'acta_2018-10-05_31_1.jpg', 'acta_2018-10-05_31_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA G.A.M. COTAGAITA 108/2018-. MATERIAL DEPORTIVO', 'COTAGAITA', '13760.00', '1977.01', '2018-11-01', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 12:04:12', 1, 'acta_2018-11-01_32_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ACTA DE CONFORMIDAD FORTALECIMIENTO INSTITUCIONAL- MUNICIPALIDAD DE COTAGAITA: MATERIAL MOBILIARIO', 'COTAGAITA', '19180.00', '2755.75', '2018-11-13', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 14:22:30', 1, 'acta_2018-11-13_33_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA G.A.M. COTAGAITA 055 –LM/2018: MATERIAL DEPORTIVO', 'COTAGAITA', '5677.00', '815.66', '2018-12-06', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 14:23:26', 1, 'acta_2018-12-06_34_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA G.A.M. COTAGAITA 050 –LM/2018: MATERIAL ESCRITORIO Y LIMPIEZA', 'COTAGAITA', '14840.00', '2132.18', '2018-12-06', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 15:59:08', 1, 'acta_2018-12-06_35_1.jpg', 'acta_2018-12-06_35_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA G.A.M. COTAGAITA 054 –LM/2018: MATERIAL FERRETERIA', 'COTAGAITA', '19075.00', '2740.66', '2018-12-06', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 16:01:54', 1, 'acta_2018-12-06_36_1.jpg', 'acta_2018-12-06_36_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA G.A.M. COTAGAITA 069 –LM/2018: MATERIAL LIMPIEZA', 'COTAGAITA', '20000.00', '2873.56', '2018-12-12', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 16:03:09', 1, 'acta_2018-12-12_37_1.jpg', 'acta_2018-12-12_37_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA G.A.M. COTAGAITA 066 –LM/2018: MATERIAL ESCRITORIO', 'COTAGAITA', '10108.00', '1452.30', '2018-12-12', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 16:04:15', 1, 'acta_2018-12-12_38_1.jpg', 'acta_2018-12-12_38_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ACTA DE CONFORMIDAD RED DE SERVICIOS DE SALUD MUNICIPAL SAFCI COTAGAITA INSUMO HOSPITALARIO (ROPA)', 'COTAGAITA', '39190.00', '5630.75', '2019-02-12', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 16:05:29', 1, 'acta_2019-02-12_39_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(40, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA ADQUISICION DE ESTANTES METALICOS', 'COTAGAITA', '2750.00', '395.11', '2019-02-19', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 16:06:14', 1, 'acta_2019-02-19_40_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA ADQUISICION DE MATERIAL DEPORTIVO', 'COTAGAITA', '19930.00', '2863.51', '2019-05-08', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 16:10:28', 1, 'acta_2019-05-08_41_1.jpg', 'acta_2019-05-08_41_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA ADQUISICION DE MATERIAL DEPORTIVO', 'COTAGAITA', '12620.00', '1813.22', '2019-05-15', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 16:11:31', 1, 'acta_2019-05-15_42_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA ADQUISICION PARA FABRICACION SEÑALETICA HOSPITALARIA', 'COTAGAITA', '29951.00', '4303.30', '2019-05-16', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 16:12:55', 1, 'acta_2019-05-16_43_1.jpg', 'acta_2019-05-16_43_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA ADQUISICION DE EQUIPOS PARA SECRETARIA TECNICA – FERRETERIA Y EQUIPO', 'COTAGAITA', '9000.00', '1293.10', '2019-06-06', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 16:13:49', 1, 'acta_2019-06-06_44_1.jpg', '', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA ADQUISICION DE TINTA PARA IMPRESORA EPSON', 'COTAGAITA', '19152.00', '2751.72', '2019-07-11', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 16:14:47', 1, 'acta_2019-07-11_45_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA ADQUISICION DE TINTA Y TONERS', 'COTAGAITA', '37366.40', '5368.74', '2019-07-12', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 16:16:03', 1, 'acta_2019-07-12_46_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA ADQUISICION DE TINTA PARA IMPRESORA EPSON', 'COTAGAITA', '32565.00', '4678.88', '2019-07-12', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 17:45:49', 1, 'acta_2019-07-12_47_1.jpg', 'acta_2019-07-12_47_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA G.A.M. COTAGAITA/316 LM/2019: ADQUISICION IMPLEMENTO PARA OFICINA (IMPRESORA Y MOBILIARIO)', 'COTAGAITA', '19917.00', '2861.64', '2019-07-23', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 17:48:17', 1, 'acta_2019-07-23_48_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA G.A.M. COTAGAITA/323 LM/2019: ADQUISICION DE REPUESTOS PARA LA VAGONETA TOYOTA HILUX CON PLACA 4793TPHMODELO 2019', 'COTAGAITA', '7000.00', '1005.75', '2019-07-29', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 17:50:04', 1, 'acta_2019-07-29_49_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA G.A.M. COTAGAITA/347 LM/2019: ADQUISICION IMPLEMENTO DEPORTIVO PARA LA UNIDAD DE DEPORTES', 'COTAGAITA', '4500.00', '646.55', '2019-08-05', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 17:51:06', 1, 'acta_2019-08-05_50_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(51, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA G.A.M. COTAGAITA/400 LM/2019: COMPRA DE MATERIAL DE LIMPIEZA PARA EL CENTRO DE SALUD INTEGRAL', 'COTAGAITA', '19648.00', '2822.99', '2019-08-13', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 17:52:15', 1, 'acta_2019-08-13_51_1.jpg', 'acta_2019-08-13_51_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(52, 'GOBIERNO AUTONOMO MUNICIPAL DE BETANZOS', 'ORDEN DE COMPRA/SERVICIO. GASTOS DE EDUCACION ALTERNATIVA DE BETANZOS ADQUISICION DE HERRAMIENTAS DE MANTENIMIENTO', 'BETANZOS', '4575.00', '657.33', '2019-09-05', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 17:53:07', 1, 'acta_2019-09-05_52_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, 'GOBIERNO AUTONOMO MUNICIPAL DE BETANZOS', 'ORDEN DE COMPRA/SERVICIO. GASTOS DE EDUCACION ALTERNATIVA VILA VILA “CEA” ADQUISICION DE HERRAMIENTAS COMPLETAS DE METAL MECANICA Y HUMANISTICA', 'BETANZOS', '11425.00', '1641.52', '2019-09-13', '', '', 'ALBERTO ARISPE PONCE', '2022-09-12 17:53:44', 1, 'acta_2019-09-13_53_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA G.A.M. COTAGAITA/455 LM/2019: ADQUISICION DE PARACHOQUES PARA AMBULANCIAS DEL CENTRO DE SALUD', 'COTAGAITA', '6990.00', '1004.31', '2019-09-27', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 11:29:42', 1, 'acta_2019-09-27_54_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(55, 'GOBIERNO AUTONOMO MUNICIPAL DE BETANZOS', 'ORDEN DE COMPRA/SERVICIO. PROYECTO SOCIO PRODUCTIVO MUNICIPIO DE BETANZOS ADQUISICION DE MATERIAL DE COCINA', 'BETANZOS', '23843.00', '3425.72', '2019-09-30', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 11:30:57', 1, 'acta_2019-09-30_55_1.jpg', 'acta_2019-09-30_55_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA G.A.M. COTAGAITA/471 LM/2019: ADQUISICION DE MUEBLES PARA LAS DIFERENTES UNIDADES', 'COTAGAITA', '9000.00', '1293.10', '2019-10-10', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 11:32:19', 1, 'acta_2019-10-10_56_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(57, 'GOBIERNO AUTONOMO MUNICIPAL DE PUNA', 'ACTA DE RECEPCION DE ROPA DE TRABAJO PARA PROG. CHAGAS', 'PUNA', '705.00', '101.29', '2019-10-17', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 11:34:20', 1, 'acta_2019-10-17_57_1.jpg', 'acta_2019-10-17_57_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(58, 'GOBIERNO AUTONOMO MUNICIPAL DE PUNA', 'ACTA DE RECEPCION DE MATERIAL PARA SEGURIDAD CIUDADANA DEL MUNICIPIO DE PUNA DE GESTION 2019', 'PUNA', '8898.00', '1278.45', '2019-10-18', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 11:35:42', 1, 'acta_2019-10-18_58_1.jpg', 'acta_2019-10-18_58_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(59, 'GOBIERNO AUTONOMO MUNICIPAL DE PUNA', 'ACTA DE RECEPCION DE MATERIAL DE EQUIPAMIENTO PARA SEGURIDAD CIUDADANA DEL MUNICIPIO DE PUNA DE GESTION 2019', 'PUNA', '6398.00', '919.25', '2019-10-18', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 11:36:51', 1, 'acta_2019-10-18_59_1.jpg', 'acta_2019-10-18_59_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(60, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA G.A.M. COTAGAITA/515 LM/2019: ADQUISICION DE INSTRUMENTOS MUSICALES PARA EL 1º CONCURSO DE BANDA', 'COTAGAITA', '16480.00', '2387.83', '2019-10-22', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 11:38:09', 1, 'acta_2019-10-22_60_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(61, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA G.A.M. COTAGAITA/500 LM/2019: ADQUISICION MATERIAL E INSUMOS PARA LA CARRERA DE BELLEZA INTEGRAL U.E. TUPAC KATARI', 'COTAGAITA', '7160.00', '1028.74', '2019-10-22', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 11:40:18', 1, 'acta_2019-10-22_61_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(62, 'GOBIERNO AUTONOMO MUNICIPAL DE BETANZOS', 'ORDEN DE COMPRA: GASTOS DE FUNCIONAMIENTO DE LA RED DE SALUD ADQUISICION DE MATERIAL DE ESCRITORIO TINTAS Y TONNER', 'BETANZOS', '6896.00', '990.80', '2019-11-15', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 11:42:10', 1, 'acta_2019-11-15_62_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(63, 'GOBIERNO AUTONOMO MUNICIPAL DE PUNA', 'ORDEN DE COMPRA TONERS MATERIAL INFORMATICO', 'PUNA', '11305.00', '1624.28', '2019-11-18', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 11:52:22', 1, 'acta_2019-11-18_63_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(64, 'GOBIERNO AUTONOMO MUNICIPAL DE BETANZOS', 'ORDEN DE COMPRA: EQUIPAMIENTO DE COMPRA DE MATERIAL DE ESCRITORIO PARA U. EDUCATIVAS ADQUISICION DE DATA DISPLEY RETROPROYECTORA', 'BETANZOS', '6300.00', '905.17', '2019-11-26', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 11:53:40', 1, 'acta_2019-11-26_64_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(65, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA G.A.M. COTAGAITA/128 /2019: ADQUISICION DE LETREROS PARA LA DIRECCION DISTRITAL DE EDUCACION DE COTAGAITA', 'COTAGAITA', '8259.00', '1186.64', '2019-12-11', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 11:56:46', 1, 'acta_2019-12-11_65_1.jpg', 'acta_2019-12-11_65_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(66, 'GOBIERNO AUTONOMO MUNICIPAL DE BETANZOS', 'ORDEN DE COMPRA/SERVICIO: APOYO AL DEPORTE ADQUISICION DE MATERIAL DEPORTIVO Y RECREATIVO', 'BETANZOS', '31000.00', '4454.02', '2019-12-20', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 11:58:44', 1, 'acta_2019-12-20_66_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(67, 'GOBIERNO AUTONOMO MUNICIPAL DE BETANZOS', 'ACTA DE RECEPCION: DE MATERIAL DEPORTIVO DE ENTRENAMIENTO DE LAS DIFERENTES DISCIPLINAS PARA LAS DIFERENTES UNIDADES EDUCATIVAS', 'BETANZOS', '44902.00', '6451.44', '2019-12-22', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:00:11', 1, 'acta_2019-12-22_67_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(68, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA: ADQUISICION DE BATERIAS PARA DIFERENTES VEHICULOS – MANTENIMIENTO Y EQUIPAMIENTO DE MAQUINARIA Y EQUIPO LIVIANO Y PESADO MD.', 'POTOSI', '43300.00', '6221.26', '2020-02-05', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:01:39', 1, 'acta_2020-02-05_68_1.jpg', 'acta_2020-02-05_68_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(69, 'HOSPITAL VIRGEN DEL CARMEN LAS CARRERAS', 'ORDEN DE COMPRA EQUIPAMIENTO LABORATORIO', 'CARRERAS', '26200.00', '3764.37', '2020-03-18', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:03:11', 1, 'acta_2020-03-18_69_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(70, 'GOBIERNO AUTONOMO MUNICIPAL DE CAMARGO', 'ORDEN DE COMPRA DE MATERIAL DE BIOSEGURIDAD – (COVID -19)', 'CAMARGO', '14040.00', '2017.24', '2020-04-01', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:05:20', 1, 'acta_2020-04-01_70_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(71, 'GOBIERNO AUTONOMO MUNICIPAL DE CAMARGO', 'ORDEN DE COMPRA DE MATERIAL DE BIOSEGURIDAD – (COVID -19)', 'CAMARGO', '16400.00', '2356.32', '2020-04-01', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:06:14', 1, 'acta_2020-04-01_71_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(72, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI – SECRETARIA DE DESARROLLO HUMANO', 'ORDEN DE COMPRA N° 14, INSUMOS MEDICOS PARA EL CORONAVIRUS COVID-2019', 'POTOSI', '53070.00', '7625.00', '2020-04-18', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:07:54', 1, 'acta_2020-04-18_72_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(73, 'GOBIERNO AUTONOMO MUNICIPAL DE COLCHA K', 'ORDEN DE COMPRA DE GASTOS DE FUNCIONAMIENTO EJECUTIVO MUNICIPAL', 'COLCHA K', '17850.00', '2564.66', '2020-04-22', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:08:54', 1, 'acta_2020-04-22_73_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(74, 'GOBIERNO AUTONOMO MUNICIPAL DE COLCHA K', 'ORDEN DE COMPRA COMPRA DE PREVENCION CONTROL Y ATENCION DEL CORONAVIRUS', 'COLCHA K', '49950.00', '7176.72', '2020-04-23', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:11:59', 1, 'acta_2020-04-23_74_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(75, 'GOBIERNO AUTONOMO MUNICIPAL DE CAIZA D', 'ORDEN DE COMPRA COMPRA DE MATERIALES DE BIOSEGURIDAD PARA EL AREA DE SALUD MUNIPICPIO DE CAIZA D', 'CAIZA D', '17511.00', '2515.95', '2020-04-28', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:13:36', 1, 'acta_2020-04-28_75_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(76, 'GOBIERNO AUTONOMO MUNICIPAL DE PUNA', 'ORDEN DE COMPRA DE INSUMOS DE BIOSEGURIDAD PARA EL PERSONAL DEL GOBIERNO AUTONOMO DE PUNA', 'PUNA', '4500.00', '646.55', '2020-04-29', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:16:28', 1, 'acta_2020-04-29_76_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(77, ' DIRECCION DEPARTAMENTAL DE EDUCACION POTOSI', 'ORDEN DE COMPRA MATERIAL DE BIOSEGURIDAD', 'POTOSI', '3220.00', '462.64', '2020-05-06', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:17:35', 1, 'acta_2020-05-06_77_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(78, 'GOBIERNO AUTONOMO MUNICIPAL DE CAIZA D', 'ORDEN DE COMPRA COMPRA DE MATERIALES DE BIOSEGURIDAD PARA EL AREA DE SALUD MUNIPICPIO DE CAIZA D', 'CAIZA D', '12750.00', '1831.90', '2020-05-14', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:18:32', 1, 'acta_2020-05-14_78_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(79, 'SEDES CHUQUISACA HOSPITAL DEL NIÑO', 'ORDEN DE COMPRA DE CAPSULA DE ACRILICO PARA TRASLADO DE PACIENTES', 'CHUQUISACA', '6500.00', '941.80', '2020-06-12', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:20:01', 1, 'acta_2020-05-14_79_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(80, 'GOBIERNO AUTONOMO MUNICIPAL DE BETANZOS', 'ORDEN DE COMPRA PREVENCION CONTROL Y ATENCION DEL CORONAVIRUS (TERMOMETRO)', 'BETANZOS', '11000.00', '1580.46', '2020-06-16', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:23:35', 1, 'acta_2020-06-16_80_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(81, 'GOBIERNO AUTONOMO MUNICIPAL DE PUNA', 'ORDEN DE COMPRA DE TONNERS PARA EL GOBIERNO AUTONOMO MUNICIPAL DE PUNA SEGUNDO SEMESTRE GESTION 2020', 'PUNA', '14070.00', '2021.55', '2020-06-26', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:25:21', 1, 'acta_2020-06-26_81_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(82, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA ADQUISICION DE MUEBLES VELADORES DE MELAMINA', 'COTAGAITA', '8400.00', '1206.90', '2020-06-26', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:26:17', 1, 'acta_2020-06-26_82_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(83, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA ADQUISICION DE MUEBLES PARA LA SALA DE AISLAMIENTO CETA MOSOQ LLAQTA', 'COTAGAITA', '11750.00', '1688.22', '2020-06-30', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:27:45', 1, 'acta_2020-06-30_83_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(84, 'SERVICIO DEPARTAMENTAL DE CAMINOS DE POTOSI', 'ORDEN DE COMPRA TERMOMETRO INFRAROJO', 'POTOSI', '19550.00', '2808.91', '2020-07-03', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:28:59', 1, 'acta_2020-07-03_84_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(85, 'CENTRO DE SALUD SAN CRISTOBAL POTOSI', 'ORDEN DE COMPRA ADQUISICION DE INSUMOS DE BIOSEGURIDAD', 'POTOSI', '620.00', '89.08', '2020-07-08', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:29:53', 1, 'acta_2020-07-08_85_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(86, 'GOBIERNO AUTONOMO MUNICIPAL DE ATOCHA', 'ORDEN DE COMPRA ADQUISICION DE EQUIPOS MEDICOS Y BIOSEGURIDAD PARA EMERGENCIAS COVID-19 (PREVENCION, CONTROL Y ATENCION DEL CORONAVIRUS', 'ATOCHA', '572100.00', '82198.28', '2020-07-13', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:31:04', 1, 'acta_2020-07-13_86_1.jpg', 'acta_2020-07-13_86_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(87, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'ORDEN DE COMPRA ADQUISICION DE EQUIPOS MEDICOS Y BIOSEGURIDAD PARA EMERGENCIAS COVID-19 (PREVENCION, CONTROL Y ATENCION DEL CORONAVIRUS)', 'PORCO', '11800.00', '1695.40', '2020-07-31', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:32:11', 1, 'acta_2020-07-31_87_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(88, 'CENTRO DE SALUD PARI ORCKO', 'ACTA DE ADJUDICACION EQUIPAMIENTO DE OFICINA Y EQUIPO MEDICO', 'POTOSI', '19300.00', '2772.99', '2020-08-21', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:33:33', 1, 'acta_2020-08-21_88_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(89, 'CENTRO DE SALUD PARI ORCKO', 'ORDEN DE COMPRA DE TUBOS DE OXIGENO', 'POTOSI', '17600.00', '2528.74', '2020-08-22', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:34:48', 1, 'acta_2020-08-22_89_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(90, 'CENTRO DE SALUD PARI ORCKO', 'ORDEN DE COMPRA DE ACCSESORIOS COMPLETOS DE TUBO DE OXIGENO, CONSISTENTE EN HUMIFICADOR, NANOMETRO, MASCARILLA, BIGOTERA', 'POTOSI', '14000.00', '2011.49', '2020-08-28', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:37:02', 1, 'acta_2020-08-28_90_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(91, 'SERVICIO DEPARTAMENTA L DE CAMINOS POTOSI', 'ORDEN DE COMPRA TERMOMETRO INFRAROJO', 'POTOSI', '2250.00', '323.28', '2020-09-25', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:40:51', 1, 'acta_2020-09-25_91_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(92, 'DIRECCION DEPARTAMENTAL DE EDUCACION POTOSI', 'ORDEN DE COMPRA ADQUISICION DE EQUIPO DE FOTOCOPIADORA Y OTROS PARA EQUIPAMIENTO CENTRO DE SALUD', 'POTOSI', '47500.00', '6824.71', '2020-10-08', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:41:57', 1, 'acta_2020-10-08_92_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(93, 'GOBIERNO AUTONOMO MUNICIPAL DE TUPIZA', 'ORDEN DE COMPRA DOTACION MOBILIARIO, EQUIPAMIENTO ESTABLECIMIENTOS RED MUNICIPAL SAFCI TUPIZA', 'TUPIZA', '31400.00', '4511.49', '2020-10-16', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:42:51', 1, 'acta_2020-10-16_93_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(94, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA SOLICITUD COMPRA DE MATERIAL PARA LA UNIDAD EDUCATIVA SANTIAGO DE OCKORURO CON EL CARGO AL PROYECTO: MANTENIMIENTO Y EQUIPAMIENTO DE U', 'POTOSI', '18200.00', '2614.94', '2020-11-11', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:46:53', 1, 'acta_2020-11-11_94_1.jpg', 'acta_2020-11-11_94_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(95, 'GOBIERNO AUTONOMO MUNICIPAL DE PUNA', 'ORDEN DE COMPRA DE TOONERS PARA EL GOBIERNO AUTONOMO MUNICIPAL DE PUNA PARA EL CIERRE DE GESTION 2020', 'PUNA', '5020.00', '721.26', '2020-11-12', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:47:40', 1, 'acta_2020-11-12_95_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(96, 'GOBIERNO AUTONOMO MUNICIPAL DE TUPIZA', 'ORDEN DE COMPRA PLAN DEPORTE MUNICIPIO DE TUPIZA (BALONES ORIGINALES)', 'TUPIZA', '19500.00', '2801.72', '2020-11-25', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:48:39', 1, 'acta_2020-11-25_96_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(97, 'GOBIERNO AUTONOMO MUNICIPAL DE COLCHA “K”', 'ACTA DE RECEPCION DEFINITIVA – LICITACION. ADQUISICION DE INSUMOS DE BIOSEGURIDAD PARA EL PERSONAL MEDICO DE LA RED DE SERVICIOS DE SALUD DEL MUNICIPI', 'COLCHA “K”', '199711.00', '28694.11', '2020-12-08', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:51:22', 1, 'acta_2020-12-08_97_1.jpg', 'acta_2020-12-08_97_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(98, 'GOBIERNO AUTONOMO MUNICIPAL DE COLCHA “K”', 'ACTA DE RECEPCION DEFINITIVA – LICITACION. ADQUISICION DE PRUEBAS RAPIDAS PARA TOMA DE MUESTRA COVID – 19 EN EL MUNICIPIO DE COLCHA “K”', 'COLCHA “K”', '120075.00', '17252.16', '2020-12-08', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:52:23', 1, 'acta_2020-12-08_98_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(99, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA DE ADQUISICION DE REFRIGERADORES PARA EQUIPAMIENTO ESTACION POLICIAL INTEGRAL EPI 7 – SEGURIDAD CIUDADANA MD.', 'POTOSI', '22800.00', '3275.86', '2020-12-15', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:53:58', 1, 'acta_2020-12-15_99_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(100, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'ORDEN DE COMPRA 20 0000 150 PREVENCION CONTROL Y ATENCION DEL CORONAVIRUS (ADQUISICION DE PRUEBAS RAPIDAS COVID 19, PARA CONTENCION Y MITIGACION DEL C', 'PORCO', '19380.00', '2784.48', '2020-12-18', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:54:47', 1, 'acta_2020-12-18_100_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(101, 'GOBIERNO AUTONOMO MUNICIPAL DE CHAYANTA', 'CONTRATO ADMINISTRATIVO PARA LA ADQUISICION DE BIENES PREVENCION CONTROL Y ATENCION DEL CORONAVIRUS “ADQUISICION INSTRUMENTO MEDICO Y PARAMEDICO\"', 'CHAYANTA', '98753.00', '14188.65', '2020-12-29', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:56:44', 1, 'acta_2020-12-29_101_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(102, 'GOBIERNO AUTONOMO MUNICIPAL DE COLCHA “K”', 'ACTA DE RECEPCION DEFINITIVA. ADQUISICION DE OVEROL DE BIOSEGURIDAD PARA PERSONAL DE LA RED DE SERVICIOS DE SALUD MUNICIPIO COLCHA “K”', 'COLCHA “K”', '19975.00', '2869.97', '2021-01-04', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 12:58:10', 1, 'acta_2021-01-04_102_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(103, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA DE TONERS Y TINTA', 'COTAGAITA', '42070.00', '6044.54', '2021-02-22', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 13:02:47', 1, 'acta_2021-02-22_103_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(104, 'VIAS BOLIVIA ADMINISTRADOR A DE RODAJE Y PESAJE', 'ORDEN DE COMPRA DE TONERS', 'POTOSI', '23870.00', '3429.60', '2021-03-05', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 13:04:32', 1, 'acta_2021-03-05_104_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(105, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA DE ADQUISICION DE ALIMENTOS DE (ABARROTES) PARA INTERNADOS – FORTALECIMIENTO EQUIPAMIENTO Y ALIMENTCION DE INTERNADOS D-18', 'POTOSI', '14560.00', '2091.95', '2021-03-22', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 13:05:58', 1, 'acta_2021-03-22_105_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(106, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA DE ADQUISICION DE INSUMOS ALIMENTICIOS (ALIMENTACION COMPLEMENTARIA ESCOLAR) PARA FORTALECIMIENTO NUTRICIONAL DE INTERNADOS D-14', 'POTOSI', '41934.00', '6025.00', '2021-03-29', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 14:46:40', 1, 'acta_2021-03-29_106_1.jpg', 'acta_2021-03-29_106_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(107, 'GOBIERNO AUTONOMO MUNICIPAL DE CHAYANTA', 'CONTRATO ADMINISTRATIVO PARA LA ADQUISICION DE BIENES FUNCIONAMIENTO C.S. CHAYANTA – REMANENTES LOCALES LEY 475 EQUIPAMIENTO – LOTE N° 3 EQUIPOS MEDIC', 'CHAYANTA', '58865.00', '8457.61', '2021-03-30', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 14:49:29', 1, 'acta_2021-03-30_107_1.jpg', 'acta_2021-03-30_107_2.jpg', 'acta_2021-03-30_107_3.jpg', '', '', '', '', '', '', '', '', '', '', '', ''),
(108, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA DE ADQUISICION DE MATERIAL DE ENTRENAMIENTO Y COMPETICION PARA FORTALECIMIENTOS AL DESARROLLO HUMANO (ESCUELA MUNICIPAL DE FUTBOL VILL', 'POTOSI', '24100.00', '3462.64', '2021-04-08', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 14:51:40', 1, 'acta_2021-04-08_108_1.jpg', 'acta_2021-04-08_108_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(109, 'CAJA NACIONAL DE SALUD', 'ORDEN DE COMPRA DE ADQUISICION DE INSUMOS MEDICOS', 'SUCRE', '2870.00', '412.36', '2021-04-29', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 14:54:02', 1, 'acta_2021-04-29_109_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(110, 'ADUANA NACIONAL', 'ORDEN DE COMPRA DE ADQUISICION DE PRODUCTOS QUIMICOS Y FARMACEUTICOS (BOTIQUINES) PARA LA GERENCIA REGIONAL DE POTOSI Y ADMINISTRACIONES DEPENDIENTES ', 'POTOSI', '26955.00', '3872.84', '2021-06-07', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 14:55:51', 1, 'acta_2021-06-07_110_1.jpg', 'acta_2021-06-07_110_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(111, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA DE ADQUISICION DE TABLETS PARA EL CENSO DE LUMINARIAS – MANTENIMIENTO SERVICIO ALUMBRADO PUBLICO MD.', 'POTOSI', '44400.00', '6379.31', '2021-06-11', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 14:56:57', 1, 'acta_2021-06-11_111_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(112, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA DE ADQUISICION Y EQUIPAMIENTO PARA LOS CENTROS DE FORMACION VILLA NAZARET (AMASADORA Y MESONES)', 'POTOSI', '14150.00', '2033.05', '2021-06-15', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 14:58:17', 1, 'acta_2021-06-15_112_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(113, 'CAJA NACIONAL DE SALUD', 'ORDEN DE COMPRA DE ADQUISICION DE BATAS QUIRURJICAS DESCARTABLES', 'SUCRE', '15990.00', '2297.41', '2021-06-17', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:00:07', 1, 'acta_2021-06-17_113_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(114, 'GOBIERNO AUTONOMO MUNICIPAL DE CAMARGO', 'ORDEN DE COMPRA DE ADQUISICION DE INSUMOS DE BIOSEGURIDAD', 'CAMARGO', '4525.00', '650.14', '2021-06-23', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:01:28', 1, 'acta_2021-06-23_114_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(115, 'GOBIERNO AUTONOMO MUNICIPAL DE YAMPARAEZ', 'ACTA DE RECEPCION Y CONFORMIDAD DE DISPOSITIVO DE HIPEROXIGENACION', 'YAMPARAEZ', '4800.00', '689.66', '2021-06-25', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:04:20', 1, 'acta_2021-06-25_115_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(116, 'CAJA NACIONAL DE SALUD SUCRE', 'ORDEN DE COMPRA DE DISPOSITIVO DE HIPEROXIGENACION', 'CHUQUISACA', '7500.00', '1077.59', '2021-06-25', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:05:31', 1, 'acta_2021-06-25_116_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(117, 'EMPRESA LOCAL DE AGUA POTABLE Y ALCANTARILLAD O DE SUCRE', 'ORDEN DE COMPRA DE CASCOS PARA MOTOCICLETAS', 'SUCRE', '17970.00', '2581.90', '2021-07-23', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:06:50', 1, 'acta_2021-07-23_117_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(118, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA DE ADQUISICION DE ESTUFAS ELECTRICAS PARA OFICINAS DE LA SUB ALCALDIA DEL DISTRITO 16', 'POTOSI', '1700.00', '244.25', '2021-07-27', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:07:54', 1, 'acta_2021-07-27_118_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(119, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA DE ADQUISICION DE GUILLOTINA, ESTUFA Y ECRAM PARA LA U.E. LUIS SUBIETA SAGARNAGA DEL MUNICIPIO DE POTOSI MANTENIMIENTO Y EQUIPAMIENTO', 'POTOSI', '4700.00', '675.29', '2021-07-30', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:09:28', 1, 'acta_2021-07-30_119_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(120, 'SERVICIO DEPARTAMENTA L DE SALUD CHUQUISACA (SEDES)', 'ORDEN DE COMPRA DE ADQUISICION DE BARBIJOS KN95 22.500 UNIDADES, PARA LA PREVENCION CONTROL Y ATENCION DEL CORONAVIRUS SEDES CHUQUISACA', 'CHUQUISACA', '37125.00', '5334.05', '2021-08-09', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:10:40', 1, 'acta_2021-08-09_120_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(121, 'GOBIERNO AUTONOMO MUNICIPAL DE COLCHA “K”', 'ACTA DE RECEPCION DEFINITIVA DE AQUISICION DE INSUMOS DE BIOSEGURIDAD PARA EL PERSONAL MEDICO DE LA RED DE SERVICIOS DE SALUD DEL MUNICIPIO DE COLCHA ', 'COLCHA “K”', '219700.00', '31566.09', '2021-08-13', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:14:22', 1, 'acta_2021-08-13_121_1.jpg', 'acta_2021-08-13_121_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(122, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDE DE COMPRA DE COMPRA MATERIAL DE ESCRITORIO PARA LA OFICINA DEL CENTRO DE SALUD CON CARGO AL PROGRAMA DE PROMOCION DEL CENTRO DE SALUD DE PARI ORC', 'POTOSI', '13355.00', '1918.82', '2021-08-19', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:16:52', 1, 'acta_2021-08-19_122_1.jpg', 'acta_2021-08-19_122_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(123, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA DE ADQUISICION DE COMPRA DE BALONES PARA LAS UNIDADES EDUCATIVAS DEL DISTRITO N 18 CON CARGO AL PROYECTO FORTALECIMIENTO AL DESARROLLO', 'POTOSI', '13804.00', '1983.33', '2021-09-26', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:18:55', 1, 'acta_2021-09-26_123_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(124, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA DE ADQUISICION DE ESTUFAS PARA EL CENTRO DE SALUD CANTUMARCA', 'POTOSI', '1050.00', '150.86', '2021-09-26', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:20:00', 1, 'acta_2021-09-26_124_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(125, 'CENTRO DE SALUD PARI ORCKO POTOSI', 'ORDEN DE COMPRA DE ADQUISICION DE EQUIPO MEDICO Y DE LABORATORIO PARA EL USO DEL CENTRO DE SALUD PARI ORCKO: BALANZA CON TALLIMETRO DIGITAL Y ELECTRIC', 'POTOSI', '19800.00', '2844.83', '2021-08-30', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:21:32', 1, 'acta_2021-08-30_125_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(126, 'CENTRO DE SALUD PARI ORCKO POTOSI', 'ORDEN DE COMPRA DE ADQUISICION DE EQUIPO MEDICO Y DE LABORATORIO PARA EL USO DEL CENTRO DE SALUD PARI ORCKO: GAVETEROS Y VITRINAS METALICAS', 'POTOSI', '19100.00', '2744.25', '2021-08-30', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:23:13', 1, 'acta_2021-08-30_126_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(127, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA DE ADQUISICION PROYECTO MANTENIMIENTO Y EQUIPAMIENTO DE UNIDADES EDUCATIVAS D-9: (PARLANTES PARA EQUIPO DE AMPLIFICACION)', 'POTOSI', '8940.00', '1284.48', '2021-09-09', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:28:02', 1, 'acta_2021-09-09_127_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(128, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA DE ADQUISICION DE EQUIPO DE AMPLIFICACION CON CARGO A CAT. PRG.33080 FORTALECIMIENTO A LA FELCV. SOLICITADO POR EL TTE. MIGUEL AJATA L', 'POTOSI', '9400.00', '1350.57', '2021-10-04', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:34:08', 1, 'acta_2021-10-04_128_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(129, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA DE ADQUISICION DE MATERIAL DE ESCRITORIO CON CARGO A CAT. PROG. 210002 MANTENIMIENTO Y EQUIPAMIENTO, DE UNIDADES EDUCATIVAS, PARA LA U', 'POTOSI', '2579.00', '370.55', '2021-10-08', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:35:13', 1, 'acta_2021-10-08_129_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(130, 'HOSPITAL DANIEL BRACAMONTE', 'ORDEN DE COMPRA DE GUANTES QUIRURJICOS LATEX ESTERILES	TALLA N° 7', 'POTOSI', '39800.00', '5718.39', '2021-10-14', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:36:11', 1, 'acta_2021-10-14_130_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(131, 'GOBIERNO AUTONOMO MUNICIPAL DE COLCHA “K”', 'ORDEN DE COMPRA DE ADQUISICION DE TONERS', 'COLCHA “K”', '29132.50', '4185.70', '2021-10-18', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:37:22', 1, 'acta_2021-10-18_131_1.jpg', 'acta_2021-10-18_131_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(132, 'HOSPITAL DANIEL BRACAMONTE', 'ORDEN DE COMPRA DE BOLSA DE POLIETILENO (TAC) PARA PLACAS DE TOMOGRAFIA, ANCHO 36 CM, LARGO 49CM, ESPESOR 70 MICRONES, COLOR BLANCO CON IMPRESION A CO', 'POTOSI', '13900.00', '1997.13', '2021-10-22', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:39:52', 1, 'acta_2021-10-22_132_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(133, 'GOBIERNO AUTONOMO MUNICIPAL DE COLCHA \"K\"', 'ACTA DE RECEPCION DE ADQUISICION DE IMPRESORAS MULTIFUNCIONALES PARA UNIDADES EDUCATIVAS DEL MUNICIPIO DE COLCHA \"K\"', 'COLCHA \"K\"', '130410.00', '18737.07', '2021-10-26', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:40:51', 1, 'acta_2021-10-26_133_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(134, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA DE MOCHILA FUMIGADORA DE 20 LITROS MARCA CORONA, INDUSTRIA BRASIL', 'COTAGAITA', '21835.00', '3137.21', '2021-11-08', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:42:20', 1, 'acta_2021-11-08_134_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(135, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA DE KILOS DE CAUCHO GRANULADO DE GRANULOMETRIA 0.7MMA 2MM (60 BOLSAS DE 30 KG)', 'COTAGAITA', '9720.00', '1396.55', '2021-11-08', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:42:56', 1, 'acta_2021-11-08_135_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(136, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA DE ADQUISICION DE MANTENIMIENTO Y EQUIPAMIENTO DE UNIDADES EDUCATIVAS DISTRITO 3 (LADISLAO CABRERA): (EQUIPO INFORMATICO, COCINA, ESCR', 'POTOSI', '18950.00', '2722.70', '2021-11-26', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:44:42', 1, 'acta_2021-11-26_136_1.jpg', 'acta_2021-11-26_136_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(137, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA DE ADQUISICION DE REFRIGERADOR PARA VACUNAS PARA CENTRO DE SALUD AMBULATORIO SAGRADA FAMILIA – EQUIPAMIENTO CENTRO DE SALUD D-5', 'POTOSI', '24423.00', '3509.05', '2021-12-09', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:45:30', 1, 'acta_2021-12-09_137_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(138, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA DE CONSOLA, PARA LA UNIDAD EDUCATIVA COBIJA B, MANTENIMIENTO Y EQUIPAMIENTO UNIDADES EDUCATIVAS D-9 (MUSICAL)', 'POTOSI', '3100.00', '445.40', '2021-12-10', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:50:46', 1, 'acta_2021-12-10_138_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(139, 'GOBIERNO AUTONOMO DEPARTAMENTA L DE POTOSI - SEDES', 'ORDEN DE COMPRA DE SILLAS SEMI EJECUTIVO GIRATORIO CON ESTRELLA METALICA', 'POTOSI', '2985.00', '428.88', '2021-12-14', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 15:52:02', 1, 'acta_2021-12-14_139_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(140, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA: ADQUISICION DE MAQUINAS DE COSER PARA EL CENTRO DE FORMACION PRODUCTIVA DEL DISTRITO N° 18', 'POTOSI', '13000.00', '1867.82', '2021-12-23', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:01:19', 1, 'acta_2021-12-23_140_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(141, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA DE ADQUISICION DE EQUIPAMIENTO CON CARGO A CAT. PRG. 210028 FORTALECIMIENTO Y EQUIPAMIENTO Y ALIMENTACION DISTRITO – 18, (COLCHONES Y ', 'POTOSI', '9050.00', '1300.29', '2021-12-23', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:02:16', 1, 'acta_2021-12-23_141_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(142, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA DE ADQUISICION DE ACTIVOS FIJOS MOBILIARIO Y UTILES DE LABORATORIO PARA LA POSTA SANITARIA DEL DISTRITO – 16, (MATERIAL, EQUIPO HOSPIT', 'POTOSI', '7650.00', '1099.14', '2021-12-24', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:04:01', 1, 'acta_2021-12-24_142_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(143, 'GOBIERNO AUTONOMO MUNICIPAL DE CAIZA \"D\"', 'ACTA DE RECEPCION ADQUISICION DE INSUMOS DE BIOSEGURIDAD Y LIMPIEZA PARA EL SECTOR EDUCACION DEL MUNICIPIO CAIZA \"D\" GESTION 2021', 'UYUNI', '93801.00', '13477.16', '2021-12-23', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:05:37', 1, 'acta_2021-12-23_143_1.jpg', 'acta_2021-12-23_143_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(144, 'GOBIERNO AUTONOMO MUNICIPAL DE UYUNI', 'ACTA DE RECEPCION DE ADQUISICION DE DATAS DISPLAY PROYECTORAS GAMU/ANPE/026/2021', 'UYUNI', '190720.00', '27402.30', '2021-12-30', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:07:10', 1, 'acta_2021-12-30_144_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(146, 'ADMINISTRACIO N AUTONOMA PARA OBRAS SANITARIAS AAPOS - POTOSI', 'CONTRATO ADMINISTRATIVO PARA LA ADQUISICION DE BIENES ADQUISICION DE EQUIPOS DE LECTURACION', 'POTOSI', '173700.00', '24956.90', '2022-02-21', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:10:15', 1, 'acta_2022-02-21_146_1.jpg', 'acta_2022-02-21_146_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `exp_general` (`id_exp`, `nombre_contratante`, `obj_contrato`, `ubicacion`, `monto_bs`, `monto_dolares`, `fecha_ejecucion`, `participa_aso`, `n_socio`, `profesional_resp`, `dateadd`, `usuario_id`, `image`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `image10`, `image11`, `image12`, `image13`, `image14`, `image15`) VALUES
(147, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ADQUISICION DE PICOTAS, MALLAS Y ALAMBRE', 'COTAGAITA', '19900.00', '2859.20', '2022-02-23', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:11:22', 1, 'acta_2022-02-23_147_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(148, 'MINISTERIO PUBLICO', 'ADQUISICION DE SILLAS EJECUTIVAS Y SEMI EJECUTIVAS CON ESTRELLA METALICA Y MATERIAL CUERINA', 'CHUQUISACA', '38000.00', '5459.77', '2022-03-21', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:12:34', 1, 'acta_2022-03-21_148_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(149, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ADQUISICION DE PLATOS, VASOS Y CUCHARAS PARA LAS UNIDADES EDUCATIVAS DEL DISTRITO N° 18 CON CARGO AL PROYECTO: \"MANTENIMIENTO Y EQUIPAMIENTO DE UNIDAD', 'POTOSI', '6360.00', '913.79', '2022-03-23', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:13:16', 1, 'acta_2022-03-23_149_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(150, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ADQUISICION DE INSUMOS DE LIMPIEZA', 'COTAGAITA', '19971.00', '2869.40', '2022-03-29', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:14:06', 1, 'acta_2022-03-29_150_1.jpg', 'acta_2022-03-29_150_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(151, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'COMPRA DE EQUIPO DE SONIDO CON CARGO AL PROYECTO “MANTENIMIENTO Y EQUIPAMIENTO SUB ALCALDIA DE HUARI HUARI D-15”', 'POTOSI', '18060.00', '2594.83', '2022-05-09', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:15:32', 1, 'acta_2022-05-09_151_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(152, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ADQUISICION DE ESTUFAS ELECTRICAS, PIZARRAS ACRILICAS Y SILLAS PLASTICAS PARA UNIDADES EDUCATIVAS DEL DISTRITO 15', 'POTOSI', '13220.00', '1899.43', '2022-05-11', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:16:27', 1, 'acta_2022-05-11_152_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(153, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ADQUISICION DE EQUIPO DE SONIDO PARA MANTENIMIENTO Y EQUIPAMIENTO DE UNIDADES EDUCATIVAS D-15', 'POTOSI', '17810.00', '2558.91', '2022-05-17', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:17:27', 1, 'acta_2022-05-17_153_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(154, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ADQUISICION Y COMPRA DE HORNO INDUSTRIAL DE 6 LATAS PARA LAS UNIDADES EDUCATIVAS DISTRITO 14', 'POTOSI', '5700.00', '818.97', '2022-05-17', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:18:33', 1, 'acta_2022-05-17_154_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(155, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'COMPRA DE EQUIPOS DE COCINA, PARA EL TALLER DE GASTRONOMIA CON CARGO AL PROYECTO “MANTENIMIENTO Y EQUIPAMIENTO UNIDADES EDUCATIVAS D-15”', 'POTOSI', '16166.00', '2322.70', '2022-05-18', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:19:26', 1, 'acta_2022-05-18_155_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(156, 'CENTRO DE SALUD PARY ORCKO', 'INSUMOS MEDICOS , TERMOMETRO DIGITAL PEDIATRICO INFRARROJO CON PEDESTAL', 'POTOSI', '2770.00', '397.99', '2022-05-23', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:21:50', 1, 'acta_2022-05-23_156_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(157, 'GOBIERNO AUTONOMO MUNICIPAL DE  TINGUIPAYA', 'APOYO A CEE UKCHARICUNA: ARTICULOS DE COCINA', 'TINGUIPAYA', '8600.00', '1235.63', '2022-05-23', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:24:50', 1, 'acta_2022-05-23_157_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(158, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'COMPRA DE SILLA GIRATORIA, ECRAM Y TIMBRE PARA UNIDADES EDUCATIVAS DEL DISTRITO 15 CON CARGO AL PROYECTO “ MANTENIMIENTO Y EQUIPAMIENTO UNIDADES EDUCA', 'POTOSI', '2650.00', '380.75', '2022-05-24', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:29:56', 1, 'acta_2022-05-24_158_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(159, 'GOBIERNO AUTONOMO MUNICIPAL DE TINGUIPAYA', 'COMPRA DE MATERIAL DE FERRETERIA', 'TINGUIPAYA', '13503.00', '1940.09', '2022-06-14', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:30:42', 1, 'acta_2022-06-14_159_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(160, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ADQUISICION DE GUILLOTINA Y ANILLADORA, PARA EL EQUIPAMIENTO C.E.A MEXICO D-9', 'POTOSI', '2390.00', '343.39', '2022-06-30', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:32:25', 1, 'acta_2022-06-30_160_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(161, 'GOBIERNO AUTONOMO MUNICIPAL DE TINGUIPAYA', 'APOYO FUNCIONAMIENTO A CEA TINGUIPAYA Y JAHUACAYA: MATERIAL DE FERRETERIA', 'TINGUIPAYA', '4690.00', '673.85', '2022-06-30', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:34:16', 1, 'acta_2022-06-30_161_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(162, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ADQUISICION DE MOBILIARIO', 'POTOSI', '6800.00', '977.01', '2022-07-01', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:36:47', 1, 'acta_2022-07-01_162_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(163, 'GOBIERNO AUTONOMO MUNICIPAL DE TINGUIPAYA', 'FUNCIONAMIENTO CONSEJO MUNICIPAL: TONER HP LASER 85A', 'POTOSI', '5160.00', '741.38', '2022-07-08', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:37:40', 1, 'acta_2022-07-08_163_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(164, 'SERVICIO DEPARTAMENTAL DE SALUD POTOSI-CENTRO DE SALUD PARI ORCKO', 'INSTRUMENTAL MEDICO', 'POTOSI', '13645.00', '1960.49', '2022-07-14', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:38:51', 1, 'acta_2022-07-14_164_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(165, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ADQUISICION DE FUNGICIDA COBRETHANE, PINTURA LATEX TRADICIONAL, CARPICOLA MONOPOL', 'POTOSI', '1947.00', '279.74', '2022-07-15', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:40:24', 1, 'acta_2022-07-15_165_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(166, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ADQUISICION DE GUANTES CO FRIZA, DESINFECTANTE DE AMBIENTES Y SUPERFICIES LYSOFORM, AMBIENTADOR ARBOLITO, SILICONA PARA AUTO', 'POTOSI', '2564.00', '368.39', '2022-07-15', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:41:14', 1, 'acta_2022-07-15_166_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(167, 'SERVICIO DEPARTAMENTAL DE SALUD POTOSI-CENTRO DE SALUD PARI ORCKO', 'ADQUISICION DE INSTRUMENTAL MEDICO', 'POTOSI', '3100.00', '445.40', '2022-07-18', '', '', 'ALBERTO ARISPE PONCE', '2022-09-13 16:42:17', 1, 'acta_2022-07-18_167_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(168, 'SERVICIO DEPARTAMENTAL DE SALUD POTOSI-CENTRO DE SALUD PARI ORCKO', 'COMPRA DE MESAS Y SILLAS DE PLASTICO', 'POTOSI', '3275.00', '470.55', '2022-07-18', '', '', 'ALBERTO ARISPE PONCE', '2022-09-14 10:25:36', 1, 'acta_2022-07-18_168_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(169, 'GOBIERNO AUTONOMO DEPARTAMENTAL DE POTOSI', 'ADQUISICION DE TERMONEBULIZADOR PARA C.E.A MEXICO D-9', 'POTOSI', '730.00', '104.89', '2022-07-19', '', '', 'ALBERTO ARISPE PONCE', '2022-09-14 10:27:00', 1, 'acta_2022-07-19_169_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(170, 'GOBIERNO AUTONOMO DEPARTAMENTAL DE POTOSI', 'ADQUISICION DE TOLDOS ARMABLES Y TERMOMETRO INFRARROJO', 'POTOSI', '7850.00', '1127.87', '2022-07-19', '', '', 'ALBERTO ARISPE PONCE', '2022-09-14 10:27:59', 1, 'acta_2022-07-19_170_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(171, 'GOBIERNO AUTONOMO MUNICIPAL DE TINGUIPAYA', 'ADQUISICION DE EQUIPOS DE COMPUTACION', 'POTOSI', '137585.00', '19767.96', '2022-07-25', '', '', 'ALBERTO ARISPE PONCE', '2022-09-14 10:29:10', 1, 'acta_2022-07-25_171_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(172, 'YACIMIENTOS DE LITIO BOLIVIANOS', 'ADQUISICION DE PINTURAS Y ADITIVOS SERVICIOS GENERALES PLANTA LLIPI ', 'UYUNI', '21150.00', '3038.79', '2022-07-28', '', '', 'ALBERTO ARISPE PONCE', '2022-09-14 10:54:42', 28, 'acta_2022-06-28_172_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(182, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'CONTRATO ADMINISTRATIVO ADQUISICION LETREROS ESTANDAR PARA SEÑALIZACION CAMINOS CARRETEROS', 'PORCO', '33000.00', '4741.38', '2014-10-21', '', '', 'ALBERTO ARISPE PONCE', '2022-10-04 17:16:11', 29, 'acta_2014-10-21_175_1.jpg', 'acta_2014-10-21_175_2.jpg', 'acta_2014-10-21_175_3.jpg', '', '', '', '', '', '', '', '', '', '', '', ''),
(183, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'CONTRATO ADMINISTRATIVO ADQUISICION N°011/2016 SERVICIO DE ALUMBRADO PUBLICO \"ADQUISICION DE LUMINARIAS LED\"', 'PORCO', '98000.00', '14080.46', '2016-07-13', '', '', 'ALBERTO ARISPE PONCE', '2022-10-04 17:41:29', 29, 'acta_2016-07-13_176_1.jpg', 'acta_2016-07-13_176_2.jpg', 'acta_2016-07-13_176_3.jpg', '', '', '', '', '', '', '', '', '', '', '', ''),
(184, 'CAJA NACIONAL DE SALUD', 'ORDEN DE COMPRA DE BALANZA DE SILLA DE RUEDAS', 'LA PAZ', '26299.00', '3778.59', '2022-08-30', '', '', 'ALBERTO ARISPE PONCE', '2022-10-05 11:52:04', 29, 'acta_2022-08-30_177_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(186, 'GOBIERNO AUTONOMO MUNICIPAL DE COLCHA \"K\"', 'ORDEN DE COMPRA 190001 SERVICIOS DE CATASTRO URBANO Y RURAL', 'COLCHA \"K\"', '550.00', '79.02', '2022-05-05', '', '', 'ALBERTO ARISPE PONCE', '2022-10-05 14:20:12', 29, 'acta_2022-05-05_179_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(187, 'GOBIERNO AUTONOMO MUNICIPAL DE COLCHA \"K\"', 'ORDEN DE COMPRA 000001 GTOS DE FUNCIONAMIENTO EJECUTIVO MCPAL', 'COLCHA \"K\"', '1275.00', '183.19', '2022-05-05', '', '', 'ALBERTO ARISPE PONCE', '2022-10-05 14:30:06', 29, 'acta_2022-05-05_180_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(188, 'GOBIERNO AUTONOMO MUNICIPAL DE COLCHA \"K\"', 'ORDEN DE COMPRA 010001 GTOS DE FUNCIONAMIENTO CONSEJO MCPAL', 'COLCHA \"K\"', '8940.00', '1284.48', '2022-05-17', '', '', 'ALBERTO ARISPE PONCE', '2022-10-05 14:36:09', 29, 'acta_2022-05-17_181_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(189, 'GOBIERNO AUTONOMO MUNICIPAL DE COLCHA \"K\"', 'ORDEN DE COMPRA 330001 SERVICIOS DE SEGURIDAD CIUDADANA', 'COLCHA \"K\"', '11860.00', '1704.02', '2022-07-01', '', '', 'ALBERTO ARISPE PONCE', '2022-10-05 14:41:16', 29, 'acta_2022-07-01_182_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(190, 'GOBIERNO AUTONOMO MUNICIPAL DE COLCHA \"K\"', 'ORDEN DE COMPRA 210003 INTERNADOS MUNICIPALES YACHAY WASI ', 'COLCHA \"K\"', '8250.00', '1185.34', '2022-07-19', '', '', 'ALBERTO ARISPE PONCE', '2022-10-05 14:45:12', 29, 'acta_2022-07-19_183_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(191, 'GOBIERNO AUTONOMO MUNICIPAL DE COTAGAITA', 'ORDEN DE COMPRA GASTOS DE FUNCIONAMIENTO CENTRO DE SALUD COTAGAITA', 'COTAGAITA', '16875.00', '2424.57', '2022-08-18', '', '', 'ALBERTO ARISPE PONCE', '2022-10-05 14:54:01', 29, 'acta_2022-08-18_184_1.jpg', 'acta_2022-08-18_184_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(192, 'GOBIERNO AUTONOMO MUNICIPAL DE LA PAZ', 'ACTA OFICIAL DE RECEPCION Y CONFORMIDAD DE BIENES SUBALCALDIA III PERIFERICA-SAF-DPDM-A.F. N° 01/2022 \"ADQUISICION DE IMPRESORAS PARA UNIDADES EDUCATI', 'LA PAZ', '20834.00', '2993.39', '2022-09-27', '', '', 'ALBERTO ARISPE PONCE', '2022-10-05 15:02:07', 29, 'acta_2022-09-27_185_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(193, 'MINISTERIO DE RELACIONES EXTERIORES', 'ORDEN DE COMPRA; ADQUISICION DE RADIOS PORTATILES HANDY, PARA EL MINISTERIO DE RELACIONES EXTERIORES', 'LA PAZ', '33800.00', '4856.32', '2022-09-19', '', '', 'ALBERTO ARISPE PONCE', '2022-10-05 15:12:32', 29, 'acta_2022-09-19_186_1.jpg', 'acta_2022-09-19_186_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(196, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA; ADQUISICION DE DIFERENTES ACCESORIOS CON CARGO A MANTENIMIENTO Y EQUIPAMIENTO DE UNIDADES EDUCATIVAS D-5', 'POTOSI', '7200.00', '1034.48', '2022-09-26', '', '', 'ALBERTO ARISPE PONCE', '2022-10-05 15:27:31', 29, 'acta_2022-09-26_188_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(200, 'INSTITUTO NACIONAL DE INNOVACION AGROPECUARIA Y FORESTAL ', 'ACTA DE RECEPCION Y CONFORMIDAD; ADQUISICION DE COMPUTADORAS PORTATILES PARA EL PROYECTO PISCICOLA', 'LA PAZ', '107985.00', '15515.09', '2022-09-28', '', '', 'ALBERTO ARISPE PONCE', '2022-10-10 17:36:35', 29, 'acta_2022-09-28_189_1.jpg', 'acta_2022-09-28_189_2.jpg', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(205, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA ADQUISICION DE TELEVISOR, COCINA, GARRAFA PARA C.E.A-SAN GERARDO', 'POTOSI', '9100.00', '1307.47', '2022-10-04', '', '', 'ALBERTO ARISPE PONCE', '2022-10-21 10:04:09', 29, 'acta_2022-10-04_191_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(206, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA: ADQUISICION DE BALANZA DIGITAL PARA MANTENIMIENTO Y EQUIPAMIENTO DE CENTRO DE SALUD CERRO DE PLATA D-4', 'POTOSI', '19499.00', '2801.58', '2022-10-12', '', '', 'ALBERTO ARISPE PONCE', '2022-10-21 14:29:59', 29, 'acta_2022-10-12_192_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(207, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA: ADQUISICION DE TALLIMETRO INTELIGENTE PARA EQUIPAMIENTO Y PROMOCION DE LA SALUD CENTRO DE SALUD VILLA COLON D-2', 'POTOSI', '19499.00', '2801.58', '2022-10-12', '', '', 'ALBERTO ARISPE PONCE', '2022-10-21 14:33:08', 29, 'acta_2022-10-12_193_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(208, 'GOBIERNO AUTONOMO MUNICIPAL DE ICLA', 'CONTRATO ADMINISTRATIVO DE \'ADQUISICION DE COMPUTADORAS PORTATILES PARA EL AREA DE SALUD MUNICIPIO ICLA 2022\'', 'ICLA ', '74775.00', '10743.53', '2022-10-07', '', '', 'ALBERTO ARISPE PONCE', '2022-10-26 16:58:05', 28, 'acta_2022-10-07_193_1.jpg', 'acta_2022-10-07_193_2.jpg', 'acta_2022-10-07_193_3.jpg', 'acta_2022-10-07_193_4.jpg', 'acta_2022-10-07_193_5.jpg', 'acta_2022-10-07_193_6.jpg', 'acta_2022-10-07_193_7.jpg', 'acta_2022-10-07_193_8.jpg', '', '', '', '', '', '', ''),
(209, 'UNIVERSIDAD AUTONOMA JUAN MISAEL SARACHO', 'ORDEN DE COMPRA: ADQUISICION DE DRONNE PARA EL PROY DESARROLLO DE CAPACIDADES Y ACADEMICAS EN GIRH-MIC EN ACCION EN LA CUENCA PEDAGOGICA MUNICIPIO DE ', 'TARIJA', '19699.00', '2830.32', '2022-09-09', '', '', 'ALBERTO ARISPE PONCE', '2022-10-26 17:15:25', 29, 'acta_2022-09-09_194_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(211, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ORDEN DE COMPRA: ADQUISICION DE TELEVISOR, COCINA, GARRAFA PARA LA BIBLIOTECA J.V. ARMANDO ALBA ZONA FERROVIARIA D-9', 'POTOSI', '9450.00', '1357.76', '2022-10-04', '', '', 'ALBERTO ARISPE PONCE', '2022-10-26 17:52:35', 29, 'acta_2022-10-04_196_1.jpg', '0', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(215, 'CAJA NACIONAL DE SALUD - REGIONAL LA PAZ', 'ADQUISICION DE 256 PZA. TABLET  ', 'LA PAZ', '384000.00', '55172.41', '2022-09-30', '', '', 'ALBERTO ARISPE PONCE', '2022-11-11 14:33:32', 29, 'acta_2022-09-30_198_1.jpg', 'acta_2022-09-30_198_2.jpg', 'acta_2022-09-30_198_3.jpg', 'acta_2022-09-30_198_4.jpg', '', '', '', '', '', '', '', '', '', '', ''),
(218, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ADQUISICION: COLCHONETA DE ALTO TRAFICO PARA GIMNACIA PARA LA UNIDAD EDUCATIVA KARACHIPAMPA DISTRITO 14', 'POTOSI', '8300.00', '1192.53', '2022-11-04', '', '', 'ALBERTO ARISPE PONCE', '2022-11-28 08:40:34', 1, 'acta_2022-11-04_193_1.jpg', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', ''),
(219, 'GOBIERNO AUTONOMO MUNICIPAL DE POTOSI', 'ADQUISICION DE BALANZA PEDIATRICA PARA EL CENTRO DE SALUD VILLA COLON DEPENDIENTE DE LA JEFATURA DE SALUD DEL GOBIERNO AUTONOMO MUNICIPAL DE POTOSI ', 'POTOSI', '4900.00', '704.02', '2022-11-18', '', '', 'ALBERTO ARISPE PONCE', '2022-11-28 08:48:52', 1, 'acta_2022-11-18_194_1.jpg', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', ''),
(225, 'GOBIERNO AUTONOMO MUNICIPAL DE LA PAZ', 'ACTA OFICIAL DE RECEPCION Y CONFORMIDAD DE BIENES GAMLP-SMSD-DS N°0548/2022 \"ADQUISICION DE IMPRESORAS PARA CENTROS DE SALUD DE PRIMER NIVEL - GESTION 2022\" ', 'LA PAZ', '454434.00', '65292.24', '2022-11-14', '', '', 'ALBERTO ARISPE PONCE', '2022-12-07 15:32:59', 29, 'acta_2022-11-14_195_1.jpg', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exp_general_c`
--

CREATE TABLE `exp_general_c` (
  `id_exp` int(11) NOT NULL,
  `nombre_contratante` varchar(80) DEFAULT NULL,
  `obj_contrato` varchar(150) DEFAULT NULL,
  `ubicacion` varchar(50) DEFAULT NULL,
  `monto_bs` decimal(19,2) NOT NULL,
  `monto_dolares` decimal(19,2) NOT NULL,
  `fecha_ejecucion` date NOT NULL,
  `fecha_final` date NOT NULL,
  `participa_aso` varchar(50) NOT NULL,
  `n_socio` varchar(50) NOT NULL,
  `profesional_resp` varchar(50) NOT NULL,
  `dateadd` datetime NOT NULL DEFAULT current_timestamp(),
  `usuario_id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `exp_general_c`
--

INSERT INTO `exp_general_c` (`id_exp`, `nombre_contratante`, `obj_contrato`, `ubicacion`, `monto_bs`, `monto_dolares`, `fecha_ejecucion`, `fecha_final`, `participa_aso`, `n_socio`, `profesional_resp`, `dateadd`, `usuario_id`, `image`, `image2`, `image3`) VALUES
(1, 'GOBIERNO AUTONOMO MUNICIPAL DE YOCALLA', 'MEJORAMIENTO Y REFACCION PUESTO DE SALUD SAN ANTONIO', 'YOCALLA', '10000.00', '1436.78', '2012-10-17', '2012-12-31', '-', '-', 'ALBERTO ARISPE PONCE', '2022-09-19 17:53:25', 1, 'acta_1_1_2012-10-17.jpg', '0', '0'),
(2, 'GOBIERNO AUTONOMO MUNICIPAL DE YOCALLA', 'AMPLIACION INFRAESTRUCTURA SUB ALCALDIA SANTA LUCIA', 'YOCALLA', '96846.00', '13914.66', '2013-05-24', '2013-07-10', '-', '-', 'ALBERTO ARISPE PONCE', '2022-09-19 17:56:11', 1, 'acta_2_1_2013-05-24.jpg', '0', '0'),
(3, 'GOBIERNO AUTONOMO MUNICIPAL DE YOCALLA', 'CONSTRUCCION MURO PERIMETRAL CENTRO DE CAPACITACION HUANCURI', 'YOCALLA', '46970.00', '6748.56', '2013-08-05', '2013-09-05', '-', '-', 'ALBERTO ARISPE PONCE', '2022-09-19 17:59:03', 1, 'acta_3_1_2013-08-05.jpg', '0', '0'),
(4, 'GOBIERNO MUNICIPAL DE PORCO', 'ELABORACION DE PLAQUETAS DE NOMBRAMIENTO DE CALLES DE PORCO', 'PORCO', '59496.00', '8548.28', '2013-11-29', '2013-12-30', '-', '-', 'ALBERTO ARISPE PONCE', '2022-09-19 18:01:08', 1, 'acta_4_1_2013-11-29.jpg', '0', '0'),
(5, 'GOBIERNO AUTONOMO MUNICIPAL DE YOCALLA', 'CONSTRUCCION MURO PERIMETRAL U.E. LINO SALVATORI', 'CAYARA', '93050.00', '13369.25', '2013-10-10', '2013-12-19', '-', '-', 'ALBERTO ARISPE PONCE', '2022-09-20 09:47:32', 1, 'acta_5_1_2013-10-10.jpg', '0', '0'),
(6, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'CONTRUCCION DOS PABELLONES DE NICHO EN CEMENTERIO CARMA', 'PORCO', '46000.00', '6609.20', '2013-12-05', '2014-01-05', '-', '-', 'ALBERTO ARISPE PONCE', '2022-09-20 09:49:14', 1, 'acta_6_1_2013-12-05.jpg', '0', '0'),
(7, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'AMURALLADO CASA COMUNAL SORA MOLINO', 'PORCO', '84000.00', '12068.97', '2014-08-13', '2014-10-14', '-', '-', 'ALBERTO ARISPE PONCE', '2022-09-20 09:50:57', 1, 'acta_7_1_2014-08-13.jpg', '0', '0'),
(8, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'MEJORAMIENTO DE SEÑALIZACION PORCO – AGUA CASTILLA', 'PORCO', '48500.00', '6968.39', '2014-11-26', '2014-12-03', '-', '-', 'ALBERTO ARISPE PONCE', '2022-09-20 10:09:27', 1, 'acta_8_1_2014-11-26.jpg', '0', '0'),
(9, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'CONST. TINLGLADO U.E.BOLIVIA', 'PORCO', '324821.70', '46669.78', '2014-12-15', '2015-02-25', '-', '-', 'ALBERTO ARISPE PONCE', '2022-09-20 10:11:58', 1, 'acta_9_1_2014-12-15.jpg', '0', '0'),
(10, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'REFACCION MODULO POLICIAL PORCO', 'PORCO', '55000.00', '7902.30', '2014-12-30', '2015-03-30', '-', '-', 'ALBERTO ARISPE PONCE', '2022-09-20 10:14:16', 1, 'acta_10_1_2014-12-30.jpg', '0', '0'),
(11, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'REFACCION CENTRO INFANTIL BLANCA NIEVES PORCO', 'PORCO', '9000.00', '1293.10', '2015-11-03', '2015-11-13', '-', '-', 'ALBERTO ARISPE PONCE', '2022-09-20 10:16:31', 1, 'acta_11_1_2015-11-03.jpg', '0', '0'),
(12, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'REFACCION CENTRO INFANTIL NIÑO JESUS AGUA CASTILLA', 'AGUA DE CASTILLA', '6000.00', '862.07', '2015-11-03', '2015-11-13', '-', '-', 'ALBERTO ARISPE PONCE', '2022-09-20 10:18:29', 1, 'acta_12_1_2015-11-03.jpg', '0', '0'),
(13, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'CONST. PATIO COLEGIO TECNICO AGUA CASTILLA', 'AGUA DE CASTILLA', '354784.10', '50974.73', '2015-11-22', '2015-12-09', '-', '-', 'ALBERTO ARISPE PONCE', '2022-09-20 10:20:54', 1, 'acta_13_1_2015-11-22.jpg', '0', '0'),
(14, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'IMPLEMENTACION DE BARANDAS COLEGIO AGUA CASTILLA', 'AGUA DE CASTILLA', '19996.87', '2873.11', '2015-11-28', '2015-12-11', '-', '-', 'ALBERTO ARISPE PONCE', '2022-09-20 10:26:10', 1, 'acta_14_1_2015-11-28.jpg', '0', '0'),
(15, 'GOBIERNO AUTONOMO MUNICIPAL DE PORCO', 'CONST ACERA INTERIOR COLEGIO AGUA CASTILLA    ', 'AGUA DE CASTILLA', '20000.00', '2873.56', '2015-11-30', '2015-12-16', '-', '-', 'ALBERTO ARISPE PONCE', '2022-09-20 10:27:11', 1, 'acta_15_1_2015-11-30.jpg', '0', '0'),
(16, 'ADUANA NACIONAL', 'REFACCION INSTALACIONES DE ADUANA NACIONAL', 'POTOSI', '49900.00', '7169.54', '2018-09-17', '2018-10-05', '-', '-', 'ALBERTO ARISPE PONCE', '2022-09-20 10:30:56', 1, 'acta_16_1_2018-09-17.jpg', '0', '0'),
(17, 'TOMAS EDWAR LLANOS TIRADO', 'VIVIENDA FAMILIAR', 'POTOSI', '5980265.80', '859233.59', '2016-12-03', '2019-04-23', '-', '-', 'ALBERTO ARISPE PONCE | CRISTIAN GONZALES ', '2022-09-20 10:47:02', 1, 'acta_17_1_2016-12-03.jpg', 'acta_17_2_2016-12-03.jpg', 'acta_17_3_2016-12-03.jpg'),
(18, 'JUAN TEDDY ESPINOZA VEDIA ', 'EDIFICIO MULTIFAMILIAR', 'SUCRE', '3173760.00', '456000.00', '2018-07-23', '2021-02-01', '-', '-', 'ALBERTO ARISPE PONCE | CRISTIAN GONZALES', '2022-09-20 11:18:06', 1, 'acta_18_1_2018-07-23.jpg', 'acta_18_2_2018-07-23.jpg', 'acta_18_3_2018-07-23.jpg'),
(19, 'ISA BOLIVIA S.A', 'CONSTRUCCION CASETA DE CONTROL PUNUTUMA Y MURO DE HORMIGON CICLOPEO', 'PUNUTUMA', '76999.79', '11063.19', '2022-03-10', '2022-04-04', '-', '-', 'ALBERTO ARISPE PONCE', '2022-09-20 11:20:09', 1, 'acta_19_1_2022-03-10.jpg', '0', '0'),
(21, 'GOBIERNO AUTÓNOMO MUNICIPAL DE POCOATA', 'CONSTRUCCION TINGLADO UNIDAD EDUCATIVA COLCAPAMPA', 'POCOATA', '352785.00', '50687.50', '2022-06-16', '2022-10-24', '-', '-', '-ALBERTO ARISPE PONCE - DAVID CONDORI FLORES', '2022-11-04 09:25:01', 12, 'acta_21_1_2022-06-16.jpg', '0', '0'),
(23, 'GOBIERNO AUTÓNOMO MUNICIPAL DE CAIZA', 'CONST. BAÑOS GRADERÍAS  Y MALLA DE PROTECCIÓN CANCHA PUMIRI   ', 'CAIZA D', '195000.30', '28017.28', '2022-08-03', '2022-10-29', '', '', 'ALBERTO ARISPE PONCE', '2022-12-05 16:42:07', 33, 'acta_21_1_2022-08-03.jpg', '0', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `id_gasto` int(11) NOT NULL,
  `g_persona` varchar(80) DEFAULT NULL,
  `g_detalle` varchar(100) NOT NULL,
  `g_montoBs` decimal(19,2) NOT NULL,
  `g_montoU` decimal(19,2) NOT NULL,
  `g_fecha_i` date NOT NULL,
  `g_respaldo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`id_gasto`, `g_persona`, `g_detalle`, `g_montoBs`, `g_montoU`, `g_fecha_i`, `g_respaldo`) VALUES
(1, 'aLE', 'CAMBALACHE - PASANTIA', '15.00', '2.16', '2022-11-09', ''),
(2, 'ALE', 'PASAJE IDA Y VUELTA - CAMBALACHE', '3.00', '0.43', '2022-11-09', ''),
(4, 'Mavel', 'de currier de documentos a sucre sedes', '30.00', '4.31', '2022-11-11', ''),
(5, 'MAVEL', 'ENVIO DE DOCUMENTOS CURRIER - SEDES CHUQUISACA', '25.00', '3.59', '2022-11-14', ''),
(6, 'ALE', 'PASAJE IDA Y VUELTA - TAXI Y MICRO - ENTREGA DE COLCHONES NUEVA TERMINAL ', '6.50', '0.93', '2022-11-16', ''),
(7, 'Mavel', 'micro ida y vuelta alcaldia para firmar de las balanzas ', '3.00', '0.43', '2022-11-16', ''),
(8, 'Mavel', 'TAXI A SAN MARCOS A FIRMAR DE LAS BALANZAS VILLA COLON ', '5.00', '0.72', '2022-11-16', ''),
(9, 'Mavel', 'MICRO DE SAN MARCOS A OFI ', '1.50', '0.22', '2022-11-16', ''),
(10, 'JAZMIN ', 'PASAJE IDA Y VUELTA PARA FIRMAR DE BALANZA DE CENTRO DE SALUD CERRO DE PLATA ', '3.00', '0.43', '2022-11-17', ''),
(12, 'Mavel', 'SE DEBE A MAVEL DE LOS ANTERIORES GASTOS - QUE PRESTO', '39.70', '5.70', '2022-11-17', ''),
(13, 'ALE ', 'COMPRA DE CDS DE 10 UNIDADES', '20.00', '2.87', '2022-11-18', ''),
(14, 'mavel', 'notariado de la garantia de los tablet - subio de precio con la dra euniz', '50.00', '7.18', '2022-11-18', ''),
(15, 'MAVEL', 'ENVIE LA GARANTIA NOTARIADA A LA PAZ - LUCIA ', '20.00', '2.87', '2022-11-18', ''),
(16, 'MAVEL', 'IDA Y VUELTA ALCAALDIA , FUI HABLAR SOBRE EL TV SAMSUNG DE 65 PULGADAS POR EL PUNTO NEGRO', '3.00', '0.43', '2022-11-22', ''),
(17, 'mavel ', 'del envio de la balanza pediatrica seca ', '20.00', '2.87', '2022-11-22', ''),
(18, 'MAVEL', 'envio de documentos de la impresora l4260 y sello de la comercializadora con maderita a la paz lucia', '25.00', '3.59', '2022-11-23', ''),
(19, 'MAVEL', 'jazmin taxi a la alcaldia potosi ', '5.00', '0.72', '2022-11-28', ''),
(20, 'MAVEL', 'DOS SODAS COCA COLA GRANDE  PARA BRACAMONTE ', '26.00', '3.74', '2022-12-05', ''),
(21, 'ALE', 'ENVIO DE CARTUCHOS DE TINTA A LA PAZ  DE 4 UNIDADES ', '13.00', '1.87', '2022-12-05', ''),
(22, 'marvin', 'pasaje ida y vuelta , llevo facturas ', '2.50', '0.36', '2022-12-06', ''),
(23, 'MAVEL', 'pasaje ida y vuelta alcaldia', '3.00', '0.43', '2022-12-02', ''),
(24, 'MAVEL', 'TARJETA DE 10 BS', '10.00', '1.44', '2022-12-08', ''),
(25, 'JAZMIN', 'PASAJE IDA Y VUELTA ALCALDIA POR SEGUIMIENTO  DE TRAMITES', '3.00', '0.43', '2022-12-09', ''),
(26, 'MAVEL', 'PASAJE DE BANCO BISA A OFICINA', '1.50', '0.22', '2022-12-09', ''),
(27, 'MAVEL', 'TARGETA ENTEL DE 10 BS', '10.00', '1.44', '2022-12-12', ''),
(28, 'MAVEL', 'SEGUIMIENTO DE TRAMITES DE ALCALDIA POTOSI', '3.00', '0.43', '2022-12-13', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos_c`
--

CREATE TABLE `gastos_c` (
  `id_gastoC` int(11) NOT NULL,
  `g_proyecto` varchar(200) NOT NULL,
  `g_detalleGasto` varchar(250) NOT NULL,
  `g_montoBs` decimal(20,2) NOT NULL,
  `g_montoU` int(11) NOT NULL,
  `g_fechai` date NOT NULL,
  `g_respaldo` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `g_origenDinero` varchar(200) NOT NULL,
  `contar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gastos_c`
--

INSERT INTO `gastos_c` (`id_gastoC`, `g_proyecto`, `g_detalleGasto`, `g_montoBs`, `g_montoU`, `g_fechai`, `g_respaldo`, `g_origenDinero`, `contar`) VALUES
(24, 'TERRAZAS - BRACAMONTE', 'sE DEJO ADELANTO DE 1000 BS A LA CERAMICA', '1000.00', 144, '2022-11-12', '', 'BNB CUENTA NICOL', 'si'),
(25, 'TERRAZAS - BRACAMONTE', 'SE GASTO 110 BS EN EL PACK DE CERVEZAS PARA CAIZA ENTREGA DEFINITIVA', '110.00', 16, '2022-11-11', '', 'BNB CUENTA NICOL', 'si'),
(26, 'TERRAZAS - BRACAMONTE', 'SE GASTO PARA PASAJE DE REGRESO  A POTOSI DAVID - NICOL 16 BS', '16.00', 2, '2022-11-11', '', 'BNB CUENTA NICOL', 'si'),
(27, 'TERRAZAS - BRACAMONTE', 'SE DIO 50 BS PARA GASOLINA A DON HUASCAR PARA IR A CAIZA ENTREGA DEFINITIVA', '50.00', 7, '2022-11-11', '', 'BNB CUENTA NICOL', 'si'),
(28, 'TERRAZAS - BRACAMONTE', 'SE LE PAGO A DOÑA FRANSISCA 50 BS DEL CONSUMO DE ELECTRICIDAD ', '50.00', 7, '2022-11-11', '', 'BNB CUENTA NICOL', 'si'),
(30, 'TERRAZAS - BRACAMONTE', 'se pago adelanto a don desiderio 500 bs', '500.00', 72, '2022-11-14', '', 'cuenta bnb', 'si'),
(31, 'TERRAZAS - BRACAMONTE', 'se compro libro de ordenes a 25 bs para bracamonte', '25.00', 4, '2022-11-14', '', 'cuenta bnb', 'si'),
(32, 'TERRAZAS - BRACAMONTE', 'SE HIZO LA NOTARIA DEL LIBRO DE ORDENES', '50.00', 7, '2022-11-14', '', 'CUENTA BNB', 'si'),
(33, 'TERRAZAS - BRACAMONTE', 'SE HIZO LA TRANSFERENCIA A LA CUENTA DE LA CERAMICA 3620 PARA LLEVAR CERAMICA', '3620.00', 520, '2022-11-14', '', 'CUENTA BNB', 'si'),
(34, 'TERRAZAS - BRACAMONTE', 'SE PAGO 5BS POR TAXI PARA IR AL BRACAMONTE', '5.00', 1, '2022-11-14', '', 'CUENTA BNB', 'si'),
(35, 'TERRAZAS - BRACAMONTE', 'SE PAGO 50 BS AL PEON PARA DESCARGAR EL CEMENTO COLA Y LA CERAMICA EN EL LUGAR ', '50.00', 7, '2022-11-14', '', 'CUENTA BNB', 'si'),
(36, 'TERRAZAS - BRACAMONTE', 'SE AUMENTO 20 BS A LA NOTARIA PARA TENER FACTURA ', '20.00', 3, '2022-11-15', '', 'CUENTA BNB', 'si'),
(37, 'TERRAZAS - BRACAMONTE', 'SE LE PAGO 200 BS AL DE LA ARENA', '200.00', 29, '2022-11-15', '', 'CAJA CHICA ', 'si'),
(38, 'TERRAZAS - BRACAMONTE', 'SE GASTO 10 BS DE PASAJE DE TAXI IDA Y VUELTA A OFICINA ', '10.00', 1, '2022-11-15', '', 'CUENTA BNB', 'si'),
(39, 'TERRAZAS - BRACAMONTE', 'SE GASTO 10 BS DE PASAJE DE TAXI IDA Y VUELTA A OFICINA ', '10.00', 1, '2022-11-16', '', 'CUENTA BNB', 'si'),
(40, 'TERRAZAS - BRACAMONTE', 'SE GASTO 5 BS DE PASAJE AL BRACAMONTE POR EL ASUNTO Y OBSERVACIONES DE ING DE BRACAMONTE ', '5.00', 1, '2022-11-17', '', 'CAJA CHICA', 'si'),
(41, 'TERRAZAS - BRACAMONTE', 'SE GASTO 70 BS POR APERTURA DE LIBRO DE ORDENES DE LOS NICHOS ', '70.00', 10, '2022-11-17', '', 'CAJA CHICA ', 'si'),
(42, 'TERRAZAS - BRACAMONTE', 'PASAJE  DE TAXI 10 BS BRACAMONTE ', '10.00', 1, '2022-11-17', '', 'CAJA CHICA', 'si'),
(43, 'TERRAZAS - BRACAMONTE', 'SE COMPRO EL LIBRO DE ORDENES 45BS', '45.00', 6, '2022-11-16', '', 'CUENTA BNB', 'si'),
(44, 'TERRAZAS - BRACAMONTE', 'SE COMPRO BOLSA NILON PARA TAPAR LOS MATERIALES  12 M A 30 BS ', '30.00', 4, '2022-11-17', '', 'CUENTA BNB', 'si'),
(45, 'TERRAZAS - BRACAMONTE', 'SE DIO UN SEGUNDO ADELANTO AL ALBAÑIL DEL BRACAMONTE DON DESIDERIO 500 BS', '500.00', 72, '2022-11-16', '', 'CUENTA BNB', 'si'),
(46, 'TERRAZAS - BRACAMONTE', 'SE AUMENTO 250 BS POR CONCEPTO DE COMPRA DE FIERRO Y CEMENTO P/SAMASA', '250.00', 36, '2022-11-21', '', 'CAJA CHICA ', 'si'),
(47, 'TERRAZAS - BRACAMONTE', 'SE COMPRO 20 BS DE GOMA PARA PARA AMARRAR EL AUTO LOS FIERROS ', '20.00', 3, '2022-11-21', '', 'CAJA CHICA ', 'si'),
(48, 'TERRAZAS - BRACAMONTE', 'SE DIO UN PRIMER ADELANTO AL ALBAÑIL DEL BRACAMONTE DE 300', '300.00', 43, '2022-11-22', '', 'CAJA CHICA', 'si'),
(49, 'TERRAZAS - BRACAMONTE', 'SE LE DIO A DON EDWIN 50 BS PARA QUE LAVE EL AUTO ', '50.00', 7, '2022-11-22', '', 'CAJA CHICA', 'si'),
(50, 'TERRAZAS - BRACAMONTE', 'SE COMPRO 15  BOLSAS DE CEMENTO COLA A 20 BS C/U', '300.00', 43, '2022-11-25', '', 'CAJA CHICA ', 'si'),
(51, 'TERRAZAS - BRACAMONTE', 'SE DESCONTO 10 POR CARGO DE TARJETA DE DEBITO ', '10.00', 1, '2022-11-22', '', 'CUENTA BANCO ', 'si'),
(60, 'NICHOS - SAMASA ALTA ', 'SE COMPRO FIERRO DE 16 - 12MM Y 20 BOLSAS DE CEMENTO', '3250.00', 467, '2022-11-21', '', 'CUENTA BNB', 'si'),
(61, 'NICHOS - SAMASA ALTA ', 'SE COMPRO GOMA PARA AMARRAR LOS FIERROS', '20.00', 3, '2022-11-21', '', 'CUENTA BNB', 'si'),
(63, 'NICHOS - SAMASA ALTA ', 'SE COMPRO CON 100 BS EL OVEROL )INGENIERO COMPRO)', '100.00', 14, '2022-11-22', '', 'BANCO UNION ', 'si'),
(64, 'NICHOS - SAMASA ALTA ', 'SE CARGÓ GASOLINA 100 BS A LA CAMIONETA PARA IR A SAMASA', '100.00', 14, '2022-11-22', '', 'BANCO UNION ', 'si'),
(65, 'NICHOS - SAMASA ALTA ', 'SE COMPRO CARPA PARA MATERIALES DE SAMASA', '150.00', 22, '2022-11-22', '', 'BANCO UNION', 'si'),
(66, 'NICHOS - SAMASA ALTA ', 'SE COMPRO 10 BARRAS DE D-12', '770.00', 111, '2022-11-24', '', 'CAJA CHICA FISICA , BANCO UNION ', 'si'),
(67, 'NICHOS - SAMASA ALTA ', 'SSE COMPRO INFLADOR DE RUEDA 40 BS', '40.00', 6, '2022-11-24', '', 'CAJA CHICA FISICA , BANCO UNION ', 'si'),
(68, 'NICHOS - SAMASA ALTA ', 'SE COMPRO 3 TACHOS DE 20 LITROS PARA DON REYNALDO ', '70.00', 10, '2022-11-24', '', 'CAJA CHICA FISICA , BANCO UNION ', 'si'),
(69, 'NICHOS - SAMASA ALTA ', 'SE DIO SE LE DIO 150 BS AL CHOFER PARA GASOLINA  PARA CAIZA', '150.00', 22, '2022-11-25', '', 'CAJA CHICA FISICA , BANCO UNION ', 'si'),
(70, 'NICHOS - SAMASA ALTA ', 'SE COMPRO 8 FIERROS DE D-12', '624.00', 90, '2022-11-25', '', 'CAJA CHICA + INGENIERO ', 'si'),
(71, 'NICHOS - SAMASA ALTA ', 'EL INGENIERO DIO 920', '920.00', 132, '2022-11-25', '', 'ING. ALBERTO ARISPE PONCE ', 'no'),
(72, 'NICHOS - SAMASA ALTA ', 'PAGO A DON REYNALDO', '3000.00', 431, '2022-11-26', '', 'BANCO UNION ', 'si'),
(73, 'NICHOS - SAMASA ALTA ', 'SE COMPRO CERVEZA PARA DON REYNALDO ', '35.00', 5, '2022-11-26', '', 'PAGO NICOL PERO YA FUE SALDADO 30/11/2022', 'si'),
(74, 'NICHOS - SAMASA ALTA ', 'SE COMPRO MADERA PARA ENCOFRADO', '2000.00', 287, '2022-11-28', '', 'BANCO UNION ', 'si'),
(75, 'NICHOS - SAMASA ALTA ', 'SE COMPRO CON 30 BS UN DISCO DE CORTE PARA MADERA ', '30.00', 4, '2022-11-28', '', 'BANCO UNION ', 'si'),
(76, 'NICHOS - SAMASA ALTA ', 'SE DIO A DON EDWIN 120 BS POR CONCEPTO DE 100  PARA GASOLINA Y 20 PARA SU ALMUERZO', '120.00', 17, '2022-11-28', '', 'BANCO UNION ', 'si'),
(77, 'NICHOS - SAMASA ALTA ', 'SE COMPRO GUANTES AL CHOFER ', '5.00', 1, '2022-11-28', '', 'BANCO UNION ', 'si'),
(78, 'NICHOS - SAMASA ALTA ', 'SE DIO 700 BS AL INGENIERO PARA PAGAR AL ALBAÑIL DON EVARISTO', '700.00', 101, '2022-11-28', '', 'BANCO UNION ', 'si'),
(79, 'NICHOS - SAMASA ALTA ', 'SE COMPRO CEMENTO 225 BS 5 BOLSAS', '225.00', 32, '2022-11-28', '', 'BANCO UNION ', 'si'),
(80, 'NICHOS - SAMASA ALTA ', 'SE COMPRO 15  BOLSAS DE CEMENTO  C/U 46', '690.00', 99, '2022-11-30', '', 'BANCO UNION ', 'si'),
(81, 'NICHOS - SAMASA ALTA ', 'SE LE DIO AL CHOFER 100 PARA GASOLINA', '100.00', 14, '2022-11-30', '', 'BANCO UNION ', 'si'),
(82, 'NICHOS - SAMASA ALTA ', 'SE LE DIO A DON EDWIN 12 BS PARA SU ALMUERZO YA QUE HIZO HORARIO CONTINUO', '12.00', 2, '2022-11-30', '', 'CAJA CHICA', 'si'),
(83, 'NICHOS - SAMASA ALTA ', 'SE LE DIO A DON EDWIN 145 BS POR COMPRA DE GARRAFA =25 Y 120 POR COMPRAR DOS PAYASAS', '145.00', 21, '2022-11-01', '', 'CAJA CHICA', 'si'),
(84, 'NICHOS - SAMASA ALTA ', 'SE COMPRO FIERROS LAS LOMAS DIAMETRO 8 D-10 D-6', '10630.87', 1527, '2022-12-01', '', 'CAJA CHICA ', 'si'),
(85, 'NICHOS - SAMASA ALTA ', 'SE COMPRO CEMENTO FANCESA 120 BOLSAS C/U 47', '5640.00', 810, '2022-12-01', '', 'CAJA CHICA ', 'si'),
(86, 'NICHOS - SAMASA ALTA ', 'EL ING. RETIRO 300BS DE CAJA CHICA DE OFICINA', '300.00', 43, '2022-12-02', '', 'CAJA CHICA ', 'si'),
(87, 'NICHOS - SAMASA ALTA ', 'SE COMPRO ALAMBRE DE AMARRE UNA ARROBA', '130.00', 19, '2022-12-05', '', 'CAJA CHICA', 'si'),
(88, 'NICHOS - SAMASA ALTA ', 'SE COMPRO ALAMBRE DE AMARRE QUINTAL', '510.00', 73, '2022-12-05', '', 'CAJA CHICA ', 'si'),
(89, 'NICHOS - SAMASA ALTA ', 'SE COMPRO MADERA QUE LE HACIA FALTA A DON REYNALDO PARA LA LOSA:(2) 0,3X3 M- (1)0.25X3M - (2)0,1X3M- (4) LISTONES DE 2X2', '180.00', 26, '2022-12-05', '', 'CAJA CHICA ', 'si'),
(90, 'NICHOS - SAMASA ALTA ', 'SE COMPRO ACEITE SUCIO ', '20.00', 3, '2022-12-05', '', 'CAJA CHICA ', 'si'),
(91, 'NICHOS - SAMASA ALTA ', 'SE GASTO EN PASAJE PARA IR A LA ALCALDIA 5 DE TAXI Y 1.5 DE MICRO BAJADA', '6.50', 1, '2022-12-05', '', 'CAJA CHICA ', 'si'),
(93, 'TERRAZAS - BRACAMONTE', 'SE COMPRO 12 C/U SANDWICHES ', '72.00', 10, '2022-11-28', '', 'CAJA CHICA ', 'si'),
(94, 'TERRAZAS - BRACAMONTE', 'JUGOS PERSONALES 10 BS CAJA CHICA Y 20 APORTE INGENIERO PARA ENTREGA DE BRACAMONTE', '30.00', 4, '2022-11-28', '', 'CAJA CHICA ', 'si'),
(95, 'TERRAZAS - BRACAMONTE', 'TRASLADO DE SANDWICHES A BRACAMONTE 5 BS TAXI ', '5.00', 1, '2022-11-28', '', 'PAGO NICOL', 'si'),
(96, 'NICHOS - SAMASA ALTA ', 'SE GASTO 30 BS POR COMPRA DE PINTURA LATEX NEGRO PARA BRACAMONTE Y 15 BS POR LA BROCHA', '45.00', 6, '2022-12-05', '', 'BANCO UNION', 'si'),
(97, 'NICHOS - SAMASA ALTA ', 'SE COMPRO MADERA PARA DON RYNALDO 2DA LOSA', '2670.00', 384, '2022-12-07', '', 'BANCO UNION', 'si'),
(101, 'NICHOS - SAMASA ALTA ', 'SE LE DIO A ALEJANDRO 37 BS COMPLETANDO A PARA SUS GASTOS DE CAIZA VIAJE', '37.00', 5, '2022-12-09', '', 'BANCO UNION', 'si'),
(102, 'NICHOS - SAMASA ALTA ', 'SE LE DIO AL CHOFER 100 BS PARA GASOLINA- VIAJE A CAIZA', '100.00', 14, '2022-12-12', '', 'BANCO UNION', 'si'),
(103, 'NICHOS - SAMASA ALTA ', 'SE LE PAGO A ALEJANDRO 50 BS DE LOS GASTOS QUE HIZO DE SU DINERO PARA GASOLINA DE REGRESO PARA CAIZA', '50.00', 7, '2022-12-09', '', 'BANCO UNION', 'si'),
(104, 'NICHOS - SAMASA ALTA ', 'SE LE PAGO A DON REYNALDO EL SEGUNDO ADELANTO DE 4 MIL BOLIVIAOS', '4000.00', 575, '2022-12-10', '', 'BANCO UNION', 'si'),
(105, 'NICHOS - SAMASA ALTA ', 'SE LE CANCELO AL DELIVERY E SUCRE PARA CERTIFICADO VANER - PLAZA CHAQUI', '15.00', 2, '2022-12-09', '', 'BANCO UNION', 'si'),
(106, 'NICHOS - SAMASA ALTA ', 'SE LE DIO A DON EDWIN 200 PARA COMPRAR DOS OVEROLES', '200.00', 29, '2022-12-06', '', 'BANCO UNION', 'si'),
(107, 'NICHOS - SAMASA ALTA ', 'SE GASTO EN TAXI DE REGRESO DE COMPRAR LOS MATERIALES Y DEJAR A DON EDWIN PARTIR A SAMASA CON LAS MADERAS', '7.00', 1, '2022-12-07', '', 'CAJA FISICA', 'si'),
(108, 'NICHOS - SAMASA ALTA ', 'LE DI A ALEJANDRO 15 BS PARA SU ALMUERZO DE VIAJE A CAIZA CON DON DENIS', '15.00', 2, '2022-12-12', '', 'BANCO UNION', 'si'),
(109, 'NICHOS - SAMASA ALTA ', 'SE LE DIO A MARVIN 3 BS PASAJE IDA Y VUELTA DE MICRO AL BRACAMONTE', '3.00', 0, '2022-12-13', '', 'BANCO UNION', 'si'),
(110, 'NICHOS - SAMASA ALTA ', 'SE LE DIO A MARVIN 3 BS DE LA SEGUNDA VEZ QUE FUE AL BRACAMONTE PARA SUBSANAR', '3.00', 0, '2022-12-13', '', 'BANCO UNION', 'si'),
(111, 'NICHOS - SAMASA ALTA ', 'PAGUE AL CHOFER 100 BS PARA GASOLINA-VIAJE A CAIZA SEGUNDA VEZ', '100.00', 14, '2022-12-13', '', 'BANCO UNION', 'si'),
(112, 'NICHOS - SAMASA ALTA ', 'SE LE DIO A ALEJANDRO 30 BS PARA ALMUERZO EN CAIZA CON DON EDWIN SEGUNDA VEZ', '30.00', 4, '2022-12-13', '', 'BANCO UNION', 'si'),
(113, 'NICHOS - SAMASA ALTA ', 'TAXI DE MARVIN AL BRACAMONTE 10 BS', '10.00', 1, '2022-12-14', '', 'CAJA FISICA', 'si'),
(114, 'NICHOS - SAMASA ALTA ', 'PAQUETE DE HOJAS CARTA 30BS', '30.00', 4, '2022-12-14', '', 'CAJA FISICA', 'si'),
(116, 'NICHOS - SAMASA ALTA ', 'COMPRO 5 CDS MARVIN CON FUNDA C/U 3BS', '15.00', 2, '2022-12-14', '', 'CAJA FISICA', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE `ingresos` (
  `id_ingreso` int(11) NOT NULL,
  `persona` varchar(80) DEFAULT NULL,
  `montoBs` decimal(19,2) NOT NULL,
  `montoU` decimal(19,2) NOT NULL,
  `fecha_i` date NOT NULL,
  `respaldo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ingresos`
--

INSERT INTO `ingresos` (`id_ingreso`, `persona`, `montoBs`, `montoU`, `fecha_i`, `respaldo`) VALUES
(6, 'Alberto Arispe Ponce', '200.00', '28.74', '2022-11-09', ''),
(7, 'Alberto Arispe Ponce', '50.00', '7.18', '2022-11-17', ''),
(8, 'Alberto Arispe Ponce', '100.00', '14.37', '2022-11-25', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos_c`
--

CREATE TABLE `ingresos_c` (
  `id_ingresosC` int(11) NOT NULL,
  `proyecto` varchar(200) NOT NULL,
  `origen` varchar(250) NOT NULL,
  `montoBs` int(11) NOT NULL,
  `montoU` int(11) NOT NULL,
  `fecha_i` date NOT NULL,
  `respaldo` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ingresos_c`
--

INSERT INTO `ingresos_c` (`id_ingresosC`, `proyecto`, `origen`, `montoBs`, `montoU`, `fecha_i`, `respaldo`) VALUES
(1, 'NICHOS - SAMASA ALTA ', 'ING. ALBERTO ARISPE PONCE ', 5000, 718, '2022-11-21', 'respaldo1_1_2022-11-21.jpg'),
(3, 'NICHOS - SAMASA ALTA ', 'ING. ALBERTO ARISPE PONCE ', 3000, 431, '2022-11-25', 'respaldo2_1_2022-11-25.jpg'),
(4, 'NICHOS - SAMASA ALTA ', 'ING. ALBERTO ARISPE PONCE ', 5000, 718, '2022-11-28', 'respaldo3_1_2022-11-28.jpg'),
(5, 'NICHOS - SAMASA ALTA ', 'ING. ALBERTO ARISPE PONCE ', 20000, 2874, '2022-11-30', 'respaldo4_1_2022-11-30.jpg'),
(6, 'TERRAZAS - BRACAMONTE', 'ING. ALBERTO ARISPE PONCE ', 3388, 487, '2022-11-11', ''),
(7, 'TERRAZAS - BRACAMONTE', 'ING. ALBERTO ARISPE PONCE ', 4000, 575, '2022-11-14', ''),
(8, 'TERRAZAS - BRACAMONTE', 'ING. ALBERTO ARISPE PONCE ', 20, 3, '2022-11-28', ''),
(9, 'NICHOS - SAMASA ALTA ', 'ING. ALBERTO ARISPE PONCE', 10000, 1437, '2022-12-10', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_inv` int(11) NOT NULL,
  `articulo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `foto` text CHARACTER SET latin1 NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `fecha_add` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id_inv`, `articulo`, `stock`, `foto`, `categoria_id`, `fecha_add`) VALUES
(2, '   ALCOHOL EN GEL, MARCA SAAM, PRESENTACION: 500 ML', 75, '', 2, '2022-11-15'),
(3, ' ALCOHOL EN GEL, MARCA SAAM, PRESENTACION: 350 ML', 31, '', 2, '2022-11-15'),
(4, ' CASCO MOUNTAIN ABS, STEELPRO SAFAETY, COLOR AZUL', 11, '', 8, '2022-11-15'),
(5, '  CASCO MOUNTAIN ABS, STEELPRO SAFAETY, COLOR AMARILLO', 3, '', 8, '2022-11-15'),
(6, ' CASCO MOUNTAIN ABS, STEELPRO SAFAETY, COLOR ROJO', 9, '', 8, '2022-11-15'),
(7, 'TONER HP LASERJET 85A', 37, '', 5, '2022-11-15'),
(8, ' LENTES DE SEGURIDAD; RESISTOR LIDO; COLOR NEGRO', 17, '', 8, '2022-11-15'),
(9, ' LENTES DE SEGURIDAD; 3M; COLOR NEGRO', 3, '', 8, '2022-11-15'),
(10, ' LENTES DE SEGURIDAD; 3M; COLOR AZUL', 9, '', 8, '2022-11-15'),
(11, ' LENTES DE SEGURIDAD; 3M VIRTUA; TRANSPARENTE', 25, '', 8, '2022-11-15'),
(12, ' LENTES DE SEGURIDAD; STEELPRO SAFETY; COLOR AZUL', 6, '', 8, '2022-11-15'),
(13, ' LENTES DE SEGURIDAD; STEELPRO SAFETY; COLOR NEGRO', 17, '', 8, '2022-11-15'),
(14, '  LENTES DE SEGURIDAD; DAUMER L600PRO CLARO; COLOR NEGRO CON AZUL', 35, 'articulo14.jpg', 8, '2022-11-15'),
(15, '  LENTES DE SEGURIDAD; STEELPRO SAFETY ANTIPARRAS; COLOR PLOMO', 2, '', 8, '2022-11-15'),
(16, ' MONOLENTE Y RESPIRADOR; INDUSTRIAL SAFETY EQUIPMENT; COLOR NEGRO', 6, 'articulo16.jpg', 8, '2022-11-15'),
(17, ' MONOLENTE Y RESPIRADOR; GOLDPHI GP-130; COLOR NEGRO', 3, 'articulo17.jpg', 8, '2022-11-15'),
(20, 'ASPERSOR 3,4 PINTS; 1,5 LITROS; COLOR BLANCO CON VERDE', 3, '', 2, '2022-11-15'),
(21, 'ASPERSOR 3,4 PINTS; 1,5 LITROS; COLOR NARANJA CON NEGRO', 2, '', 2, '2022-11-15'),
(22, 'ALCOHOL EN SPRAY: ROCIO DESINFECTANTE, PRESENTACION: PAQUETE DE 12 UNIDADES DE210 Ml (129 Gr)', 107, '', 2, '2022-11-15'),
(23, ' VISOR DE POLICARBONATO; FACESHIELD VISOR MODELO N° SE173A', 13, '', 8, '2022-11-15'),
(24, 'TERMOMETRO INFRAROJO; INFRARED THERMOMETER; HECHO EN CHINA', 14, '', 3, '2022-11-15'),
(25, 'TUBOS CONECTORES; KRONA; GRIFO PARA JARDIN', 11, '', 3, '2022-11-15'),
(26, 'TUBOS CONECTORES; KRONA; GRIFO PARA JARDIN', 11, '', 3, '2022-11-15'),
(27, 'BARBIJOS 3M ; COLOR BLANCO', 8, 'articulo27.jpg', 2, '2022-11-15'),
(28, ' GUANTES DE NITRILO; TALLA 8; COLOR VERDE', 15, '', 2, '2022-11-15'),
(30, 'GUANTES DE NITRILO; TALLA 9; COLOR NEGRO', 1, '', 2, '2022-11-15'),
(32, 'MOCHILA DE 15,6 PULGADAS; MARCA DELL', 5, 'articulo30.jpg', 5, '2022-11-15'),
(33, '  COMPUTADORA PORTATIL Laptop Vostro 14 3000, PROCESADOR INTEL CORE i5-1135G7 11va GENERACION, MEMOR', 5, 'articulo31.jpg', 5, '2022-11-15'),
(34, 'LECTOR DE DVD SUPER MULTI, MARCA DELL', 5, 'articulo34.jpg', 5, '2022-11-15'),
(35, 'MOUSE CABLEADO; MARCA DELL', 5, 'articulo35.jpg', 5, '2022-11-15'),
(36, 'RESPIRADOR DESCARTABLE CON VÁLVULA; MASKFASE PFF-25; AR SAFETY', 41, 'articulo33.jpg', 2, '2022-11-15'),
(37, '  FILTRO PARA PARTICULAS P100; 3M 2097', 11, 'articulo34.jpg', 8, '2022-11-15'),
(38, ' FILTRO PARA PARTICULAS P100; 3M 2096', 1, 'articulo35.jpg', 8, '2022-11-15'),
(39, ' FILTRO PARA PARTICULAS P100; 3M 2097 PLUS', 1, 'articulo36.jpg', 8, '2022-11-15'),
(40, ' BOTAS BLANCAS; TALLA 35/36', 3, 'articulo37.jpg', 8, '2022-11-15'),
(41, ' BOTAS BLANCAS; TALLA 41', 5, 'articulo38.jpg', 8, '2022-11-15'),
(42, ' BOTAS BLANCAS; TALLA 43', 1, 'articulo39.jpg', 8, '2022-11-15'),
(43, ' RESPIRADOR MEDIA CARA; 3M SERIE 7500; COLOR AZUL', 3, 'articulo40.jpg', 8, '2022-11-15'),
(44, ' OXÍMETRO DE PULSO MARCA HUAVI ', 4, 'articulo41.jpg', 2, '2022-11-15'),
(45, 'SPRAY PAINT; ARCO IRIS; COLOR BLANCO ', 5, 'articulo42.jpg', 3, '2022-11-15'),
(46, ' GUANTES DE CIRUGÍA ESTÉRILES; POWERCREST; CAJA DE 50 PARES', 114, 'articulo43.jpg', 2, '2022-11-15'),
(47, ' BOTAS; COLOR NEGRO; TALLA 42', 1, '', 8, '2022-11-17'),
(50, 'BARBIJO KN95 PROTECTIVE MASK; CAJA DE 40 UNIDADES; COLOR BLANCO', 5, '', 2, '2022-11-17'),
(72, 'PARLANTE JBL EON 715', 2, 'articulo72.jpg', 5, '2022-11-23'),
(81, ' VISOR DE POLICARBONATO; FACESHIELD VISOR MODELO N° FC48', 38, '', 8, '2022-11-25'),
(82, ' VISOR DE PROTECCION; 3M', 5, '', 8, '2022-11-25'),
(83, ' GUANTES DE LATEX; COLOR AMARILLO', 2, '', 2, '2022-11-25'),
(84, ' FILTRO MASK PRO REPLACEMENT', 24, 'articulo62.jpg', 8, '2022-11-25'),
(86, 'TERMOMETRO INFRAROJO; MARCA CaCaBear', 2, 'articulo50.jpg', 2, '2022-12-01'),
(87, 'JABON LÍQUIDO LIZ ', 3, 'articulo51.jpg', 4, '2022-12-01');

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
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `p_descripcion` varchar(200) NOT NULL,
  `p_marca` varchar(100) NOT NULL,
  `p_unidad` varchar(100) NOT NULL,
  `p_precioc` int(11) NOT NULL,
  `p_preciov` int(11) NOT NULL,
  `p_tipo` varchar(100) NOT NULL,
  `p_proveedor` varchar(100) NOT NULL,
  `p_fecha_registro` datetime NOT NULL DEFAULT current_timestamp(),
  `foto` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `pdf` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `p_descripcion`, `p_marca`, `p_unidad`, `p_precioc`, `p_preciov`, `p_tipo`, `p_proveedor`, `p_fecha_registro`, `foto`, `pdf`) VALUES
(3, 'Reflector led de 200W - Grado de proteccion IP66 CCK 6500K - Tension de Trabajo 220-240', 'Dämmerung', 'Unidad', 400, 790, '', '', '2022-11-18 10:42:29', '', ''),
(4, 'Poste Telescopico de Fierro Galvanizado altura 9 m espesor 2.5 ancho 2.5 mm', 'Nac', 'Unidad', 1200, 2100, 'Ferreteria', '', '2022-11-18 11:13:35', '', ''),
(5, 'Luminaria Vial de 100w ip66 CCK 6500', 'Jager', 'Unidad', 380, 735, '', '', '2022-11-18 16:14:01', '', ''),
(6, 'PLANCHA DE CABELLO; BABYLISS PRO OPTIMA 3000 NANO TITANIUM - ORIGINAL', 'BABYLISS', 'Pieza', 1261, 1600, 'belleza', '', '2022-11-18 17:51:51', 'producto4.jpg', ''),
(7, 'COLDBRUSH', 'BABYLISS', 'Pieza', 1379, 1700, 'belleza', '', '2022-11-18 17:54:01', 'producto5.jpg', ''),
(8, 'SECADOR BABYLISS ACADEMY', 'BABYLISS', 'Pieza', 400, 900, 'belleza', '', '2022-11-18 17:56:16', 'producto6.jpg', ''),
(9, 'BABYLISS PRO NANO TITANIAUM RIZADOR', 'BABYLISS', 'Pieza', 540, 980, 'belleza', '', '2022-11-18 17:58:49', 'producto7.jpg', ''),
(10, 'PHOTON LIZZE', 'LIZZE', 'Pieza', 900, 1800, 'belleza', '', '2022-11-18 18:00:17', 'producto8.jpg', ''),
(11, 'LAVACABEZAS ', 'DOMPEL', 'Pieza', 990, 1800, 'belleza', '', '2022-11-21 08:50:11', 'producto9.jpg', ''),
(12, 'DRILL DE UÑAS ELECTRICO PROFESIONAL', 'NAIL DRILL', 'Pieza', 280, 450, 'belleza', '', '2022-11-21 09:07:01', 'producto10.jpg', ''),
(13, 'MAQUINA PULIDORA DE UÑAS', 'IMPORTADO', 'Pieza', 85, 320, 'belleza', '', '2022-11-21 09:13:55', 'producto11.jpg', ''),
(14, 'LAMPARA LED SUN Y13', 'SUN', 'Pieza', 250, 350, 'belleza', '', '2022-11-21 09:20:52', 'producto12.jpg', ''),
(15, 'EXHIBIDOR DE ESMALTES; CAPACIDAD 80 ESMALTES', 'DOMPEL', 'Pieza', 470, 570, 'belleza', '', '2022-11-21 09:24:12', 'producto13.jpg', ''),
(16, 'REFRIGERADOR; CAPACIDAD DE 470 LITROS', 'LG', 'Pieza', 4500, 7800, 'Cocina', '', '2022-11-21 17:32:30', '', ''),
(17, 'ESTUFAS A ELECTRICIDAD Y A GAS ', 'CIMAC', 'Pieza', 860, 1800, 'mobiliario', '78857076 LA PAZ - EL ALTO', '2022-11-22 09:00:53', 'producto15.jpg', ''),
(18, 'ESTUFA ELECTRICA', 'MAGEFESA', 'Pieza', 265, 650, 'mobiliario', '68818766', '2022-11-22 09:03:27', 'producto16.jpg', ''),
(19, 'MANGUERA PARA GAS', 'NACIONAL', 'Pieza', 35, 55, 'Cocina', '', '2022-11-22 09:08:25', '', ''),
(20, 'GARRAFA DE 10 KG', 'NACIONAL', 'Pieza', 250, 370, 'Cocina', '', '2022-11-22 09:35:51', '', ''),
(21, 'TONER PARA IMPRESORA LASER HP NEGRO 85A P1102W', 'HP', 'Pieza', 300, 580, 'Tecnologico', '', '2022-11-22 10:23:34', '', ''),
(22, 'TONER PARA IMPRESORA LASER HP NEGRO CF 410A BLACK ', 'HP', 'Pieza', 700, 980, 'Tecnologico', '', '2022-11-22 10:24:16', '', ''),
(23, 'TONER PARA IMPRESORA LASER HP CF 410A YELLOW', 'HP', 'Pieza', 830, 1350, 'Tecnologico', '', '2022-11-22 10:25:05', '', ''),
(24, 'TONER PARA IMPRESORA LASER HP CF 410A MAGENTA', 'HP', 'Pieza', 830, 1350, 'Tecnologico', '', '2022-11-22 10:25:52', '', ''),
(25, 'TONER PARA IMPRESORA LASER HP CF 410A CYAN', 'HP', 'Pieza', 830, 1350, 'Tecnologico', '', '2022-11-22 10:26:33', '', ''),
(26, 'TONER PARA IMPRESORA LASER BROTHER TN-419 BLACK', 'BROTHER', 'Pieza', 1100, 7750, 'Tecnologico', '', '2022-11-22 10:27:18', '', ''),
(27, 'TONER PARA IMPRESORA LASER BROTHER TN-419 YELLOW', 'BROTHER', 'Pieza', 1600, 1995, 'Tecnologico', '', '2022-11-22 10:28:02', '', ''),
(28, 'TONER PARA IMPRESORA LASER BROTHER TN-419 CYAN', 'BROTHER', 'Pieza', 1600, 1995, 'Tecnologico', '', '2022-11-22 10:28:38', '', ''),
(29, 'TONER PARA IMPRESORA LASER BROTHER TN-419 MAGENTA', 'BROTHER', 'Pieza', 1600, 1995, 'Tecnologico', '', '2022-11-22 10:29:19', '', ''),
(30, 'TONER PARA IMPRESORA HP LASER 12A ', 'HP', 'Pieza', 710, 1000, 'Tecnologico', '', '2022-11-22 10:29:54', '', ''),
(31, 'TONER PARA IMPRESORA HP 103A', 'HP', 'Pieza', 330, 700, 'Tecnologico', '', '2022-11-22 10:30:34', '', ''),
(32, 'COLCHONETA DE ALTO TRAFICO: MATERIAL ESPONJA ROJA CONFORT Y FORRO DE CUERINA; TAMAÑO 0,20M DE ALTO X 2,00M DE LARGO X 1,20M DE ANCHO', 'NACIONAL', 'Pieza', 1160, 1800, 'deportivo', 'SONIA 60634497', '2022-11-24 10:31:50', 'producto30.jpg', ''),
(33, 'COLCHONETA DE ALTO TRAFICO: MATERIAL ESPONJA ROJA CONFORT Y FORRO DE CARPA; TAMAÑO 0,20M DE ALTO X 2,00M DE LARGO X 1,20M DE ANCHO', 'NACIONAL', 'Pieza', 1190, 1750, 'deportivo', '', '2022-11-24 10:33:19', 'producto31.jpg', ''),
(34, 'MAQUINA DE COSTURA A MANO: RECTA DE UNA SOLA AGUJA CON CAJA DE MADERA, 3 BOBINA PARA HILOS, TRES CARRETELES', 'SINGER', 'Pieza', 980, 1980, 'Textil', '60469494', '2022-11-24 11:09:29', 'producto32.jpg', ''),
(35, 'PELOTA DE FUTBOL; GOLTY NUMERO 5', 'GOLTY', 'Pieza', 160, 280, 'deportivo', 'FERNANDO 706220202', '2022-11-24 14:09:05', '', ''),
(36, 'PELOTA DE FUTBOL; GOLTY NUMERO NUMERO 4', 'GOLTY', 'Pieza', 160, 280, 'deportivo', 'FERNANDO 706220202', '2022-11-24 14:10:26', '', ''),
(37, 'PELOTA DE FUTBOL; GOLTY NUMERO 5', 'MOLTEN', 'Pieza', 150, 250, 'deportivo', 'PRODEPORTE 71270069', '2022-11-24 14:14:12', '', ''),
(38, 'PELOTA DE BASQUETBALL NUMERO 5', 'MOLTEN', 'Pieza', 150, 280, 'deportivo', 'PRODEPORTE 71270069', '2022-11-24 14:21:30', '', ''),
(39, 'PELOTA DE BASQUETBALL NUMERO 7', 'MOLTEN', 'Pieza', 150, 280, 'deportivo', 'PRODEPORTE 71270069', '2022-11-24 14:22:17', '', ''),
(43, 'AMAZADORA INDUSTRIAL PARA HACER PAN DE 8 KILOS DE MEDIA ARROBA. MODELO: VAM20 ', 'Ventus', 'Unidad', 8329, 11476, 'Cocina', 'DIEGO TORRICO (IMPORTADORA CATANIA)  - 67892020', '2022-11-24 18:02:22', '', 'FichaTecnica2022-11-25 14-56-18_43.pdf'),
(44, 'AMAZADORA INDUSTRIAL PARA HACER PAN DE 12 KILOS DE 1 ARROBA. MODELO: SH30', 'CATANIA', 'Unidad', 10106, 13925, 'Cocina', 'DIEGO TORRICO (IMPORTADORA CATANIA)  - 67892020', '2022-11-24 18:10:40', '', 'FichaTecnica2022-11-25 14-56-08_44.pdf'),
(45, 'SILLAS DE PLASTICO CON CODERAS COLOR HUESO', 'LA PAPELERA ', 'Unidad', 70, 97, 'deportivo', 'DON DAVID (LIMPIEZA) - 73861485', '2022-11-24 18:20:27', '', 'FichaTecnica2022-11-25 14-55-36_45.pdf'),
(57, 'OLLA; CAPACIDAD DE 15 LITROS; MATERIAL ALUMINIO', 'FANAL', 'Pieza', 100, 130, 'Cocina', '', '2022-11-29 16:11:26', '', ''),
(58, 'OLLA; CAPACIDAD DE 25 LITROS; MATERIAL ALUMINIO', 'FANAL', 'Pieza', 120, 156, 'Cocina', '', '2022-11-29 16:12:04', '', ''),
(59, 'OLLA; CAPACIDAD DE 5 LITROS; MATERIAL ALUMINIO', 'FANAL', 'Pieza', 25, 33, 'Cocina', '', '2022-11-29 16:13:11', '', ''),
(60, 'BALDE DE PLASTICO; CAPACIDAD 11 LITROS', 'LA PAPELERA', 'Pieza', 13, 17, 'Cocina', '', '2022-11-29 16:16:44', '', ''),
(61, 'BALANZA; MODELO 286', 'SECA', 'Pieza', 15000, 19500, 'Hospitalario', '', '2022-11-29 16:50:53', '', ''),
(62, 'BALANZA; MODELO 284', 'SECA', 'Pieza', 12000, 15600, 'Hospitalario', '', '2022-11-29 16:51:18', '', ''),
(63, 'COLCHON; CONSTRUCCION ESPOJA;DENCIDAD ESTANDAR;DIMENCION UNA PLAZA;ESPESOR DE 20 CMS;TERMINACION REFORZADO; CON FORRO DE TELA', 'NAC', 'Pieza', 350, 455, 'mobiliario', '', '2022-12-01 12:07:43', '', ''),
(65, 'MESA DE MADERA CEDRO; MEDIDAS ALTO 0.80CM, ANCHO 1M, LARGO 2,40M', 'NACIONAL', 'Pieza', 2300, 2990, 'mobiliario', '', '2022-12-06 09:27:46', '', ''),
(66, 'CAMA DE DOS PISOS DE 1 PLAZA; MATERIAL MADERA CEDRO ', 'NACIONAL', 'Pieza', 2200, 2860, 'mobiliario', '', '2022-12-06 09:30:28', '', ''),
(67, 'COCINA INDUSTRIAL; MEDIDAS: 100 CM ANCHO X 90 CM PROFUNDIDAD X 60 CM ALTO', 'DRACOM', 'Pieza', 2000, 2600, 'mobiliario', '', '2022-12-06 15:58:38', '', ''),
(68, 'COCINA INDUSTRIAL; MEDIDAS: 100 CM ANCHO X 90 CM PROFUNDIDAD X 60 CM ALTO', 'DRACOM', 'Pieza', 2000, 2600, 'mobiliario', '', '2022-12-06 15:58:38', '', ''),
(69, 'CONGELADOR DE 420 LTS; MODELO CHB42A', 'CONSUL', 'Pieza', 4100, 5330, 'Cocina', '', '2022-12-06 16:01:17', '', ''),
(70, 'JUEGO DE OLLAS DE 20, 40 Y 60 LITROS', 'BRAZIL', 'Equipo', 380, 494, 'Cocina', '63477497', '2022-12-06 17:02:42', '', ''),
(71, 'JUEGO DE QUEQUERAS TEFLONADAS; MEDIDAS 25 CM (CUADRADO), 24 CM (REDONDO), 22 CM (CORAZON)', 'HEIZEN', 'Equipo', 60, 78, 'Cocina', '', '2022-12-06 17:06:03', '', ''),
(72, 'BAILARINAS PARA TORTA; 30 CM DE CIRCUNFERENCIA', 'NACIONAL', 'Pieza', 150, 195, 'Cocina', '', '2022-12-06 17:07:47', '', ''),
(73, 'JUEGO DE BAÑADORES MATERIAL ACERO INOXIDABLE', 'NACIONAL', 'Equipo', 380, 494, 'Cocina', '', '2022-12-06 17:21:08', '', ''),
(74, 'RELOJ DIGITAL DE ACABADO FINO DE ALTA CALIDAD DE COLOR BLANCO Y NEGRO, NUMEROS DE GRAN TAMAÑO Y FACILES DE LEER, MATERIAL DE LA CARCASA: MARCO DE RESINA RESISTENTE, FUNCIONA CON UNA PILA DOBLE AA INCL', 'CASIO', 'Pieza', 100, 130, 'Tecnologico', '72212918', '2022-12-07 13:58:10', '', 'FichaTecnica2022-12-07 23-31-00_74.pdf'),
(75, 'MICROFONO :  AKG VOCAL WIRELESS SYSTEM WMS40 MINI DUAL VOCAL SET  ', 'AKG', 'Unidad', 1500, 1950, 'Musical', '', '2022-12-07 16:33:28', 'producto58.jpg', ''),
(76, 'PARLANTE ACTIVO EON 715 CON BLUETOOTH 1300 W ', 'JBL', 'Unidad', 4800, 7250, 'Musical', '', '2022-12-07 16:36:48', '', 'FichaTecnica2022-12-07 21-36-48_59.pdf'),
(77, 'IMPRESORA EPSON  L3250', 'EPSON', 'Unidad', 1350, 1755, 'Tecnologico', '', '2022-12-08 12:25:48', '', 'FichaTecnica2022-12-08 17-25-48_60.pdf'),
(78, 'IMPRESORA EPSON L14150', 'EPSON', 'Unidad', 7500, 9750, 'Tecnologico', '', '2022-12-08 12:33:24', '', 'FichaTecnica2022-12-08 17-33-24_61.pdf'),
(79, 'LIRA ', 'IMPORTADO', 'Pieza', 450, 585, 'Musical', 'Doña Lidia Cochabamba +591 70309646', '2022-12-13 10:46:57', '', ''),
(80, 'TONER PARA IMPRESORA LASER BROTHER TN-419. BLACK', 'BROTHER', 'Unidad', 1100, 1430, 'Tecnologico', 'BROTHER - 77398907 ', '2022-12-14 11:41:57', '', ''),
(81, 'TONER PARA IMPRESORA LASER BROTHER TN-419. CYAN', 'BROTHER', 'Unidad', 1600, 2080, 'Tecnologico', 'BROTHER - 77398907 ', '2022-12-14 11:43:06', '', ''),
(82, 'TONER PARA IMPRESORA LASER BROTHER TN-419. YELLOW', 'BROTHER', 'Unidad', 1600, 2080, 'Tecnologico', 'BROTHER - 77398907 ', '2022-12-14 11:43:38', '', ''),
(83, 'TONER PARA IMPRESORA LASER BROTHER TN-419. MAGENTA', 'BROTHER', 'Unidad', 1600, 2080, 'Tecnologico', 'BROTHER - 77398907 ', '2022-12-14 11:44:16', '', ''),
(84, 'HORNO CAPACIDAD SEMI INDUSTRIAL; DE 5 BANDEJAS, ESTRUCTURA INOXIDABLE CON CONTROLADOR DIGITAL DE TIEMPO, TEMPERATURA Y VAPORIZADOR DE LUZ INTERIOR FRENTE DE ACERO INOXIDABLE 430 SOPORTE CON PORTA BAND', 'BRASNOX, INDUSTRIA BRASILERA', 'Pieza', 13243, 17216, 'Cocina', '', '2022-12-15 14:27:39', '', ''),
(85, 'HORNO CAPACIDAD 6 LATAS', 'DURA BRAS', 'Pieza', 2900, 3770, 'Cocina', '', '2022-12-15 14:28:58', '', ''),
(86, 'AMASADORA DE PAN INDUSTRIAL; 50 KG DE MASA TERMINADA, MEZCLADORA ESPIRAL DE ACERO INOXIDABLE, TRANSMISOR DE MOTOR, A OLLA Y ESPIRAL, REJILLA DE PROTECCION DE ACERO INOXIDABLE ', 'CATANIA, MODELO SH-60G', 'Pieza', 4637, 6028, 'Cocina', '', '2022-12-15 14:36:04', '', ''),
(87, 'LAMINADORA DOMESTICA CON RODILLOS DE ACERO INOXIDABLE CON MANGO DE MADERA', 'VISIONER', 'Pieza', 150, 195, 'Cocina', '', '2022-12-15 14:40:07', '', ''),
(88, 'BOWLES DE ACERO INOXIDABLE; JUEGO DE 5 PIEZAS', 'IMPORTADO', 'Pieza', 140, 182, 'Cocina', '', '2022-12-15 14:46:06', '', ''),
(89, 'CARRO DE TRANSPORTE DE ALIMENTO; MATERIAL ACERO INOXIDABLE, DE 15 NIVELES PARA 15 BANDEJAS, TIENE 4 RUEDA, MEDIDAS DE BANDEJAS 58*68', 'IMPORTADO', 'Pieza', 3206, 4168, 'Cocina', '', '2022-12-15 14:56:14', '', ''),
(90, 'VITRINA MODELO OASI10; MATERIAL VIDRIO TEMPLADO, VIDRIO CURVO, SISTEMA DESEMPAÑANTE DIMENSIÓN: 1000 MM FRENTE X 740 MM LATERAL X 1300 MM ALTO', 'ORION', 'Pieza', 23698, 30807, 'Cocina', '', '2022-12-15 16:21:53', '', ''),
(91, 'MESON DE TRABAJO MODELO 190112, MATERIAL ACERO INOXIDABLE, DIMENSIÓN EXTERNA: 1500 MM FRENTE X 700 MM LATERAL X 850 MM ALTO', 'CIMAPI', 'Pieza', 3136, 4077, 'Cocina', '', '2022-12-15 16:25:08', '', ''),
(92, 'ESCRITORIO EJECUTIVO EN L, MATERIAL MELAMINA, MEDIDAS 1,50 CM X 1,36 CM', 'INDARA', 'Pieza', 780, 1014, 'mobiliario', '', '2022-12-15 16:27:12', '', ''),
(93, 'ESTANTE, MATERIAL MELAMINA,  MEDIDAS: ANCHO 70 CM, ALTURA 210 CM, PROFUNDIDAD 30 CM', 'BRASILERO', 'Pieza', 1100, 1430, 'mobiliario', '', '2022-12-15 16:29:31', '', '');

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
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id_proyecto` int(11) NOT NULL,
  `pro_nombre` varchar(200) NOT NULL,
  `color` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id_proyecto`, `pro_nombre`, `color`) VALUES
(1, 'NICHOS - SAMASA ALTA ', '#bdffe2'),
(2, 'TERRAZAS - BRACAMONTE', '#fffdc7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos_comer`
--

CREATE TABLE `proyectos_comer` (
  `id_pro` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `ubicacion` varchar(250) NOT NULL,
  `num_tramite` varchar(250) NOT NULL,
  `num_comprobante` varchar(250) NOT NULL,
  `cuce` varchar(250) NOT NULL,
  `monto` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `estado` varchar(100) NOT NULL,
  `observacion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibos`
--

CREATE TABLE `recibos` (
  `id_recibo` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `monto` float NOT NULL,
  `concepto` varchar(250) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(12, 'Mariana Nicol Erquicia Camacho', 'marianaerquiciac@gmail.com', 'Nicol10', 'e10adc3949ba59abbe56e057f20f883e', 2, 1),
(28, 'Mavel Condori Flores', 'levamosito@gmail.com', 'levam', '6a24a3acc22f0c312be5825ca50218bd', 2, 1),
(29, 'Jazmin Velasco Diaz', 'jazminvelasco.dz@gmail.com', 'Jazmin Velasco', '8e8213bfe87f419553c45f2098baa5e1', 2, 1),
(30, 'Alberto Arispe Ponce ', 'alberto_arispe_p@hotmail.com', 'albertoarispe', '202cb962ac59075b964b07152d234b70', 1, 1),
(31, 'pepito', 'asdasd@gmail.com', 'pepe', 'e10adc3949ba59abbe56e057f20f883e', 2, 1),
(32, 'Edwin Mario Pinto Ramirez', 'edwin@gmail.com', 'edwin', '40456dce6432ff493f68ff420aac2e72', 2, 1),
(33, 'Marvin Isidro Cruz Acka', 'marvizcruz332@gmail.com', 'Marvin', 'd6190affff89c440be86385663b88dfe', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activos`
--
ALTER TABLE `activos`
  ADD PRIMARY KEY (`id_activo`);

--
-- Indices de la tabla `activo_fijo`
--
ALTER TABLE `activo_fijo`
  ADD PRIMARY KEY (`id_activoFijo`),
  ADD KEY `f_activoCategoria` (`f_activoCategoria`);

--
-- Indices de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD PRIMARY KEY (`id_asistencia`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `categoria_i`
--
ALTER TABLE `categoria_i`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `claves`
--
ALTER TABLE `claves`
  ADD PRIMARY KEY (`id_clave`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `coti`
--
ALTER TABLE `coti`
  ADD PRIMARY KEY (`id_cotizacion`);

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
-- Indices de la tabla `exp_general_c`
--
ALTER TABLE `exp_general_c`
  ADD PRIMARY KEY (`id_exp`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id_gasto`);

--
-- Indices de la tabla `gastos_c`
--
ALTER TABLE `gastos_c`
  ADD PRIMARY KEY (`id_gastoC`);

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`id_ingreso`);

--
-- Indices de la tabla `ingresos_c`
--
ALTER TABLE `ingresos_c`
  ADD PRIMARY KEY (`id_ingresosC`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_inv`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codproducto`),
  ADD KEY `proveedor` (`proveedor`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`codproveedor`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_proyecto`);

--
-- Indices de la tabla `proyectos_comer`
--
ALTER TABLE `proyectos_comer`
  ADD PRIMARY KEY (`id_pro`);

--
-- Indices de la tabla `recibos`
--
ALTER TABLE `recibos`
  ADD PRIMARY KEY (`id_recibo`);

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
-- AUTO_INCREMENT de la tabla `activos`
--
ALTER TABLE `activos`
  MODIFY `id_activo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `activo_fijo`
--
ALTER TABLE `activo_fijo`
  MODIFY `id_activoFijo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=560;

--
-- AUTO_INCREMENT de la tabla `categoria_i`
--
ALTER TABLE `categoria_i`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `claves`
--
ALTER TABLE `claves`
  MODIFY `id_clave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `coti`
--
ALTER TABLE `coti`
  MODIFY `id_cotizacion` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_exp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT de la tabla `exp_general_c`
--
ALTER TABLE `exp_general_c`
  MODIFY `id_exp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id_gasto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `gastos_c`
--
ALTER TABLE `gastos_c`
  MODIFY `id_gastoC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `id_ingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `ingresos_c`
--
ALTER TABLE `ingresos_c`
  MODIFY `id_ingresosC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id_inv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `codproducto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `codproveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `proyectos_comer`
--
ALTER TABLE `proyectos_comer`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `recibos`
--
ALTER TABLE `recibos`
  MODIFY `id_recibo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `activo_fijo`
--
ALTER TABLE `activo_fijo`
  ADD CONSTRAINT `activo_fijo_ibfk_1` FOREIGN KEY (`f_activoCategoria`) REFERENCES `activos` (`id_activo`);

--
-- Filtros para la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD CONSTRAINT `asistencias_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Filtros para la tabla `exp_general_c`
--
ALTER TABLE `exp_general_c`
  ADD CONSTRAINT `exp_general_c_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`idusuario`);

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria_i` (`id_categoria`);

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
