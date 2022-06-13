-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2022 a las 20:41:18
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escaner`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_aceite`
--

CREATE TABLE `cat_aceite` (
  `cod_cat` int(2) NOT NULL,
  `nom_pregunta` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_aceite`
--

INSERT INTO `cat_aceite` (`cod_cat`, `nom_pregunta`) VALUES
(1, 'tienes problemas de motor?'),
(2, 'su automovil gasta mas combustible de lo debido?'),
(3, 'su motor se escucha muy ruidoso?'),
(4, 'tiene problemas para arrancar el veiculo en frio?'),
(5, 'siente que su motor tiene menos fuerza que antes?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_computadora`
--

CREATE TABLE `cat_computadora` (
  `id_computadora` int(2) NOT NULL,
  `pregunta` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_computadora`
--

INSERT INTO `cat_computadora` (`id_computadora`, `pregunta`) VALUES
(1, 'la luz check egine se encendio en tu tablero?'),
(2, 'la luz se mantiene encendida todo el tiempo?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_electronico`
--

CREATE TABLE `cat_electronico` (
  `id_electronico` int(2) NOT NULL,
  `pregunta` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_electronico`
--

INSERT INTO `cat_electronico` (`id_electronico`, `pregunta`) VALUES
(1, 'tienes problemas electricos?'),
(2, 'sus faros titilan o encienden con poca fuerza?'),
(3, 'el estereo no enciende?'),
(4, 'el auto emite un crack cuando lo enciende?'),
(5, 'el auto no enciende de ninguna manera?'),
(6, 'su bateria es muy vieja?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_frenos`
--

CREATE TABLE `cat_frenos` (
  `id_frenos` int(2) NOT NULL,
  `pregunta` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_frenos`
--

INSERT INTO `cat_frenos` (`id_frenos`, `pregunta`) VALUES
(1, 'tienes problemas con tus frenos?'),
(2, 'cuando frenas escuchas un chillido agudo?'),
(3, 'al frenar siente que tarda mas?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_sonido`
--

CREATE TABLE `cat_sonido` (
  `id_sonido` int(2) NOT NULL,
  `pregunta` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_sonido`
--

INSERT INTO `cat_sonido` (`id_sonido`, `pregunta`) VALUES
(1, 'tienes problemas con alguna bocina?'),
(2, 'la bocina no se escucha nada?'),
(3, 'tu auto tiene suficiente bateria?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `identificadores`
--

CREATE TABLE `identificadores` (
  `id_identificador` int(2) UNSIGNED NOT NULL,
  `cod_cat` int(2) NOT NULL,
  `nombre` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `identificadores`
--

INSERT INTO `identificadores` (`id_identificador`, `cod_cat`, `nombre`) VALUES
(1, 1, 'cambio_aceite'),
(2, 2, 'alineacion_direccion'),
(3, 3, 'bateria_agotada'),
(4, 4, 'cambio_frenos'),
(5, 5, 'cambio_bocina'),
(6, 6, 'check_egine');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(2, 'admin@gmail.com', '$2y$10$i3X3fdNUflSPr4lkkg4O1.cSLnRfRT4ABIjE0mmegU1VwsJIRXxVG'),
(3, 'admin@gmail.com', '$2y$10$UIMf2GF/vHbN5RHYaOKbzuz1HeTBA3efkcmlFmUG0qHN5UiDT3Hx6');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cat_aceite`
--
ALTER TABLE `cat_aceite`
  ADD PRIMARY KEY (`cod_cat`);

--
-- Indices de la tabla `cat_computadora`
--
ALTER TABLE `cat_computadora`
  ADD PRIMARY KEY (`id_computadora`);

--
-- Indices de la tabla `cat_electronico`
--
ALTER TABLE `cat_electronico`
  ADD PRIMARY KEY (`id_electronico`);

--
-- Indices de la tabla `cat_frenos`
--
ALTER TABLE `cat_frenos`
  ADD PRIMARY KEY (`id_frenos`);

--
-- Indices de la tabla `cat_sonido`
--
ALTER TABLE `cat_sonido`
  ADD PRIMARY KEY (`id_sonido`);

--
-- Indices de la tabla `identificadores`
--
ALTER TABLE `identificadores`
  ADD PRIMARY KEY (`id_identificador`),
  ADD KEY `FK_cod_cat` (`cod_cat`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cat_aceite`
--
ALTER TABLE `cat_aceite`
  ADD CONSTRAINT `cat_aceite_ibfk_1` FOREIGN KEY (`cod_cat`) REFERENCES `identificadores` (`cod_cat`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `cat_electronico`
--
ALTER TABLE `cat_electronico`
  ADD CONSTRAINT `cat_electronico_ibfk_1` FOREIGN KEY (`id_electronico`) REFERENCES `identificadores` (`cod_cat`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `cat_frenos`
--
ALTER TABLE `cat_frenos`
  ADD CONSTRAINT `cat_frenos_ibfk_1` FOREIGN KEY (`id_frenos`) REFERENCES `identificadores` (`cod_cat`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
