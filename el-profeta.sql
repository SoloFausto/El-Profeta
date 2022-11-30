-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2022 a las 08:15:24
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `el-profeta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `nombre` varchar(20) NOT NULL,
  `edad` int(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `fecha`, `nombre`, `edad`, `email`, `telefono`, `idCurso`) VALUES
(1, '2022-11-29', 'Fausto', 18, 'fausto@fausto.com', '+99999999999', 8),
(3, '2022-11-29', 'Lucas', 34, 'lucas@lucas.com', '+9988554222', 5),
(5, '2022-11-29', 'Carlos', 20, 'profecarlos@profe.com', '+6974523254', 1),
(6, '2022-11-29', 'Carl ', 29, 'CarlJSpears@armyspy.com', '662-647-9237', 6),
(7, '2022-11-29', 'David', 21, 'DavidCOrtiz@teleworm.us', '570-733-1380', 5),
(8, '2022-11-29', 'Cheryl', 73, 'CherylJVasquez@armyspy.com', '082 184 4593', 7),
(9, '2022-11-29', 'Lin', 29, 'LinETownsend@armyspy.com', '24-70-54-18', 6),
(11, '2022-11-29', 'Charlie', 80, 'CharlieSWhittington@teleworm.u', '9990 1565', 2),
(12, '2022-11-29', 'Frank ', 84, 'FrankIDye@teleworm.us', '9569 1722', 5),
(13, '2022-11-30', 'Josephine', 69, 'JosephineMThomas@dayrep.com', '50-64-76-25', 6),
(14, '2022-11-30', 'Peter', 75, 'PeterJLowe@armyspy.com', '23-36-23-90', 1),
(15, '2022-11-30', 'Stella ', 21, 'StellaABell@armyspy.com', '51-82-31-66', 1),
(16, '2022-11-30', 'Laura', 42, 'LauraMonaldo@armyspy.com', '(31) 5385-5489', 7),
(18, '2022-11-30', 'Leandro', 23, 'lealea@lea.com', '+56564845123456', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `nombreCurso` varchar(50) NOT NULL,
  `nombreCentro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id`, `nombreCurso`, `nombreCentro`) VALUES
(1, 'Programacion', 'Utu Maldonado'),
(2, 'Biologia', 'Liceo 4'),
(3, 'Fisica', 'Liceo 5 '),
(5, 'Fisica', 'Utu Maldonado'),
(6, 'Electronica', 'Liceo 3'),
(7, 'Ingles 1 ', 'Liceo 3'),
(8, 'Ingles 2', 'Liceo 4');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCurso-idCursoAlumno` (`idCurso`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `idCurso-idCursoAlumno` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
