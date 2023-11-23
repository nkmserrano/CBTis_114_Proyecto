-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2023 a las 19:59:22
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cbtis114`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contra` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_medicos_alumno`
--

CREATE TABLE `datos_medicos_alumno` (
  `id` int(11) NOT NULL,
  `id_ficha` int(11) NOT NULL,
  `estatura` varchar(20) NOT NULL,
  `peso` varchar(20) NOT NULL,
  `tipo_sangre` varchar(50) NOT NULL,
  `alergias` varchar(200) NOT NULL,
  `enfermedades` varchar(200) NOT NULL,
  `medicamentos` varchar(200) NOT NULL,
  `CnombreT1` varchar(100) NOT NULL,
  `CnombreT2` varchar(100) NOT NULL,
  `CtelT1` varchar(20) NOT NULL,
  `CtelT2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_medicos_alumno`
--

INSERT INTO `datos_medicos_alumno` (`id`, `id_ficha`, `estatura`, `peso`, `tipo_sangre`, `alergias`, `enfermedades`, `medicamentos`, `CnombreT1`, `CnombreT2`, `CtelT1`, `CtelT2`) VALUES
(1, 36, '1.66', '52kg', 'o+', 'no', 'no', 'no', 'ana', 'juan', '6568741025', '4343433232');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales_alumno`
--

CREATE TABLE `datos_personales_alumno` (
  `id` int(11) NOT NULL,
  `id_ficha` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `ApellidoP` varchar(50) NOT NULL,
  `ApellidoM` varchar(50) NOT NULL,
  `Fecha_Nac` date NOT NULL,
  `CURP` varchar(18) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `nacionalidad` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `cp` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_personales_alumno`
--

INSERT INTO `datos_personales_alumno` (`id`, `id_ficha`, `Nombre`, `ApellidoP`, `ApellidoM`, `Fecha_Nac`, `CURP`, `sexo`, `telefono`, `correo`, `nacionalidad`, `estado`, `municipio`, `direccion`, `cp`) VALUES
(8, 36, 'Ana Valeria', 'Luna', 'Arredondo', '0000-00-00', 'LUAA060715MCHNRNA7', '', '6564535453', 'vl2005806@gmail.com', 'Mexicana', 'Chih', 'Juárez', 'Calle Desierto de mojave', 32695);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_preparatoria`
--

CREATE TABLE `datos_preparatoria` (
  `id` int(11) NOT NULL,
  `id_ficha` int(11) NOT NULL,
  `Esp_1` varchar(100) NOT NULL,
  `Esp_2` varchar(100) NOT NULL,
  `Esp_3` varchar(100) NOT NULL,
  `Plantel_1` varchar(100) NOT NULL,
  `Plantel_2` varchar(100) NOT NULL,
  `Plantel_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_preparatoria`
--

INSERT INTO `datos_preparatoria` (`id`, `id_ficha`, `Esp_1`, `Esp_2`, `Esp_3`, `Plantel_1`, `Plantel_2`, `Plantel_3`) VALUES
(7, 36, '', '', '', 'CBTis 114', 'CBTis 128', 'CBTis 270');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_tutores`
--

CREATE TABLE `datos_tutores` (
  `id` int(11) NOT NULL,
  `id_ficha` int(11) NOT NULL,
  `NombreT` varchar(50) NOT NULL,
  `APPT` varchar(50) NOT NULL,
  `APMT` varchar(50) NOT NULL,
  `FNT` date NOT NULL,
  `telT` varchar(20) NOT NULL,
  `correoT` varchar(50) NOT NULL,
  `nacionalidadT` varchar(50) NOT NULL,
  `domicilioT` varchar(100) NOT NULL,
  `ocupacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_tutores`
--

INSERT INTO `datos_tutores` (`id`, `id_ficha`, `NombreT`, `APPT`, `APMT`, `FNT`, `telT`, `correoT`, `nacionalidadT`, `domicilioT`, `ocupacion`) VALUES
(1, 30, 'Juan', 'Luna', 'Cruz', '0000-00-00', '6568741025', 'eme@gmail.com', 'mex', 'c des mojave', 'operador'),
(2, 30, 'ana', 'arredondo', 'cortez', '0000-00-00', '4343433232', 'suhshjs', 'mex', 'c des mojaveee', 'amacasa'),
(3, 31, 'Juan', 'Luna', 'Cruz', '0000-00-00', '6568741025', 'eme@gmail.com', 'mex', 'c des mojave', 'operador'),
(4, 31, 'ana', 'arredondo', 'cortez', '0000-00-00', '4343433232', 'suhshjs', 'mex', 'c des mojaveee', 'amacasa'),
(5, 32, 'Juan', 'Luna', 'Cruz', '0000-00-00', '6568741025', 'eme@gmail.com', 'mex', 'c des mojave', 'operador'),
(6, 32, 'ana', 'arredondo', 'cortez', '0000-00-00', '4343433232', 'suhshjs', 'mex', 'c des mojaveee', 'amacasa'),
(7, 33, 'Juan', 'Luna', 'Cruz', '0000-00-00', '6568741025', 'eme@gmail.com', 'mex', 'c des mojave', 'operador'),
(8, 33, 'ana', 'arredondo', 'cortez', '0000-00-00', '4343433232', 'suhshjs', 'mex', 'c des mojaveee', 'amacasa'),
(9, 34, 'Juan', 'Luna', 'Cruz', '0000-00-00', '6568741025', 'eme@gmail.com', 'mex', 'c des mojave', 'operador'),
(10, 34, 'ana', 'arredondo', 'cortez', '0000-00-00', '4343433232', 'suhshjs', 'mex', 'c des mojaveee', 'amacasa'),
(11, 35, 'Juan', 'Luna', 'Cruz', '0000-00-00', '6568741025', 'eme@gmail.com', 'mex', 'c des mojave', 'operador'),
(12, 35, 'ana', 'arredondo', 'cortez', '0000-00-00', '4343433232', 'suhshjs', 'mex', 'c des mojaveee', 'amacasa'),
(13, 36, 'Juan', 'Luna', 'Cruz', '0000-00-00', '6568741025', 'eme@gmail.com', 'mex', 'c des mojave', 'operador'),
(14, 36, 'ana', 'arredondo', 'cortez', '0000-00-00', '4343433232', 'suhshjs', 'mex', 'c des mojaveee', 'amacasa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuela_procedencia`
--

CREATE TABLE `escuela_procedencia` (
  `id` int(11) NOT NULL,
  `id_ficha` int(11) NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `cct` varchar(20) NOT NULL,
  `nombreEsc` varchar(150) NOT NULL,
  `anioEsc` int(4) NOT NULL,
  `promedio` decimal(2,2) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `telefonoEsc` varchar(20) NOT NULL,
  `TipoEsc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `escuela_procedencia`
--

INSERT INTO `escuela_procedencia` (`id`, `id_ficha`, `matricula`, `cct`, `nombreEsc`, `anioEsc`, `promedio`, `estado`, `telefonoEsc`, `TipoEsc`) VALUES
(0, 36, '1tr', '5r4', 'sec tec 30', 2021, '0.99', 'chih', '65656565', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `id` int(11) NOT NULL,
  `folio` varchar(30) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ficha`
--

INSERT INTO `ficha` (`id`, `folio`, `curp`, `fecha`) VALUES
(36, 'FOLIO060715_LUAA', 'LUAA060715MCHNRNA7', '2023-11-22 13:15:40');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_medicos_alumno`
--
ALTER TABLE `datos_medicos_alumno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_personales_alumno`
--
ALTER TABLE `datos_personales_alumno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_preparatoria`
--
ALTER TABLE `datos_preparatoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_tutores`
--
ALTER TABLE `datos_tutores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datos_medicos_alumno`
--
ALTER TABLE `datos_medicos_alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datos_personales_alumno`
--
ALTER TABLE `datos_personales_alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `datos_preparatoria`
--
ALTER TABLE `datos_preparatoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `datos_tutores`
--
ALTER TABLE `datos_tutores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `ficha`
--
ALTER TABLE `ficha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
