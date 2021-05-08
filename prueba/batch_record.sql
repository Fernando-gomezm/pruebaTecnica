-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2021 a las 01:37:51
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
-- Base de datos: `batch_record`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coliformes`
--

CREATE TABLE `coliformes` (
  `id_coliformes` int(11) NOT NULL,
  `especificacion` varchar(500) NOT NULL,
  `resultado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `coliformes`
--

INSERT INTO `coliformes` (`id_coliformes`, `especificacion`, `resultado`) VALUES
(1, 'La denominación genérica coliformes designa a un grupo de especies bacterianas que tienen ciertas características bioquímicas en común e importancia relevante como indicadores de contaminación del agua y los alimentos.', 'No aplica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id_equipo` int(11) NOT NULL,
  `equipo` varchar(20) NOT NULL,
  `tipo_equipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id_equipo`, `equipo`, `tipo_equipo`) VALUES
(1, 'autoclave1', 'incubadora1'),
(2, 'autoclave2', 'incubadora2'),
(3, 'autoclave3', 'incubadora3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesofilos`
--

CREATE TABLE `mesofilos` (
  `id_mesofilos` int(11) NOT NULL,
  `especificacion` varchar(500) NOT NULL,
  `resultado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mesofilos`
--

INSERT INTO `mesofilos` (`id_mesofilos`, `especificacion`, `resultado`) VALUES
(1, 'El parámetro de mesofílicos aerobios, más que englobar un grupo taxonómico de bacterias, se designa arbitrariamente de acuerdo con el método de análisis; en este caso, se denominan mesofílicos aerobios aquellas bacterias que se desarrollan en un medio de cultivo nutritivo y sin inhibidores a una temperatura de 33-37 º C durante 24 a 48 horas de incubación.', 'Aplica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pseudomona`
--

CREATE TABLE `pseudomona` (
  `id_pseudomona` int(11) NOT NULL,
  `especificacion` varchar(500) NOT NULL,
  `resultado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pseudomona`
--

INSERT INTO `pseudomona` (`id_pseudomona`, `especificacion`, `resultado`) VALUES
(1, 'Las infecciones pueden ser externas y leves (que afectan el oído o los folículos pilosos) o bien infecciones internas graves (que afectan los pulmones, el torrente sanguíneo o las válvulas cardíacas).', 'Aplica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `staphylococcus`
--

CREATE TABLE `staphylococcus` (
  `is_staphylococcus` int(11) NOT NULL,
  `especificacion` varchar(500) NOT NULL,
  `resultado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `staphylococcus`
--

INSERT INTO `staphylococcus` (`is_staphylococcus`, `especificacion`, `resultado`) VALUES
(1, 'Un tipo llamado Staphylococcus aureus causa la mayoría de las infecciones por estafilococo. Las bacterias de estafilococos pueden causar muchos tipos diferentes de infecciones, incluyendo: Infecciones de la piel: Los tipos más comunes de infecciones por estafilococos.', 'No aplica');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `coliformes`
--
ALTER TABLE `coliformes`
  ADD PRIMARY KEY (`id_coliformes`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `mesofilos`
--
ALTER TABLE `mesofilos`
  ADD PRIMARY KEY (`id_mesofilos`);

--
-- Indices de la tabla `pseudomona`
--
ALTER TABLE `pseudomona`
  ADD PRIMARY KEY (`id_pseudomona`);

--
-- Indices de la tabla `staphylococcus`
--
ALTER TABLE `staphylococcus`
  ADD PRIMARY KEY (`is_staphylococcus`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `coliformes`
--
ALTER TABLE `coliformes`
  MODIFY `id_coliformes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `mesofilos`
--
ALTER TABLE `mesofilos`
  MODIFY `id_mesofilos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pseudomona`
--
ALTER TABLE `pseudomona`
  MODIFY `id_pseudomona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `staphylococcus`
--
ALTER TABLE `staphylococcus`
  MODIFY `is_staphylococcus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
