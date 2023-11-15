-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2023 a las 02:31:35
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdproductosmedicos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `nom_cuenta` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_crea` varchar(100) NOT NULL,
  `correo_us` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  `foto_perfil` varchar(50) NOT NULL,
  `fecha_N` varchar(100) NOT NULL,
  `no_tarjeta` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nom_cuenta`, `fecha_crea`, `correo_us`, `contraseña`, `foto_perfil`, `fecha_N`, `no_tarjeta`) VALUES
(1, 'SaraM', '12/05/23', 'sarahi@hotmail.com', 'sarapin123.', 'gato.jpg', '22/02/1995', '12457785414'),
(2, 'IsaacC', '06/11/23', 'issac@hotmail.com', '123.45', 'isaac.jpg', '08/26/2006', '42695447821'),
(3, 'ReynaL', '15/11/23', 'reynaleti@hotmail.com', 'reyna.mx123', 'reyna.png', '15/02/2006', '545615698465'),
(4, 'jonatanM', '18/02/23', 'jonatan@hotmail.com', 'jantanpocket.', 'jonatan.jpg', '15/04/23', '651468423125'),
(5, 'carlosI', '15/09/23', 'carlos@hotmail.com', 'apocosi123.', 'ivanH.png', '27/12/23', '516846556546'),
(6, 'irvinA', '12/12/23', 'irvinalonso@hotmail.com', 'irvin123.', 'irvin.png', '20/12/2006', '5616984651698'),
(9, 'AlonsoC', '2023-11-14', 'alonsin@gamil.com', 'Alonso123.', 'alonso.png', '2005-02-01', '846434654645');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
