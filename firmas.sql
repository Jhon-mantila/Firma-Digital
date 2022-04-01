-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-04-2022 a las 03:18:10
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `firma`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `firmas`
--

CREATE TABLE `firmas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `img_firma` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `firmas`
--

INSERT INTO `firmas` (`id`, `nombre`, `img_firma`) VALUES
(1, 'Jhon', 'A.png'),
(2, 'Jessika', 'B.png'),
(3, 'nnn', 'c.png'),
(4, '', ''),
(5, 'nnn', 'nnn.png'),
(6, '', ''),
(7, 'nnn', 'nnn.png'),
(8, '', ''),
(9, 'asda', 'asd'),
(10, 'asda', 'asd'),
(11, 'nuevo', 'nuevo'),
(12, 'caaa', 'caaa'),
(13, 'uno', 'dos'),
(14, 'uno', 'dos'),
(15, 'uno', 'dos'),
(16, 'ca', 'asda'),
(17, '', ''),
(18, '', ''),
(19, '', ''),
(20, '', ''),
(21, 'prueba', 'dos'),
(22, 'prueba', 'dos'),
(23, 'prueba', 'dos'),
(24, 'q', 'q'),
(25, 'sd', 'as'),
(26, 'asd', 'asd'),
(27, '', ''),
(28, 'Anime', 'prueba'),
(29, '', ''),
(30, 'Anme', ''),
(31, 'dos', ''),
(32, 'JESSIKA', 'mi_imagen_01_04_2022_01_27_41.png'),
(33, 'JESSIKA', 'mi_imagen_01_04_2022_01_28_13.png'),
(34, '', 'mi_imagen_01_04_2022_01_28_27.png'),
(35, '', 'mi_imagen_01_04_2022_01_28_35.png'),
(36, '', 'mi_imagen_01_04_2022_01_30_01.png'),
(37, '', 'mi_imagen_01_04_2022_01_30_08.png'),
(38, '', 'mi_imagen_01_04_2022_01_31_32.png'),
(39, 'Camilo', 'mi_imagen_01_04_2022_01_31_44.png'),
(40, '', 'mi_imagen_01_04_2022_01_37_29.png'),
(41, 'Jairo', 'mi_imagen_01_04_2022_01_41_57.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `firmas`
--
ALTER TABLE `firmas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `firmas`
--
ALTER TABLE `firmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
