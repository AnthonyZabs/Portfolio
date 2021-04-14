-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-04-2021 a las 11:29:43
-- Versión del servidor: 5.7.21-log
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portfolio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `author_ip` varchar(255) NOT NULL,
  `timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `site_config`
--

CREATE TABLE `site_config` (
  `site_name` varchar(30) NOT NULL DEFAULT 'PixelZone',
  `site_slogan` varchar(200) DEFAULT NULL,
  `site_email` varchar(100) DEFAULT NULL,
  `site_facebook` varchar(50) DEFAULT NULL,
  `site_twitter` varchar(50) DEFAULT NULL,
  `site_instagram` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `site_config`
--

INSERT INTO `site_config` (`site_name`, `site_slogan`, `site_email`, `site_facebook`, `site_twitter`, `site_instagram`) VALUES
('Anthony Zabs', 'Backend & Web Developer', 'email@tuempresa.com', 'facebook', 'twitter', 'instagram');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `site_visitors`
--

CREATE TABLE `site_visitors` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `countryCode` varchar(5) NOT NULL,
  `city` varchar(255) NOT NULL,
  `regionName` varchar(255) NOT NULL,
  `zipCode` int(6) NOT NULL,
  `lon` float NOT NULL,
  `lat` float NOT NULL,
  `first_visit` int(11) NOT NULL,
  `last_visit` int(11) NOT NULL,
  `visits` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `site_visitors`
--

INSERT INTO `site_visitors` (`id`, `ip`, `country`, `countryCode`, `city`, `regionName`, `zipCode`, `lon`, `lat`, `first_visit`, `last_visit`, `visits`) VALUES
(1, '75.52.82.25', 'United States', 'US', 'Tucker', 'Georgia', 30084, -84.2171, 33.8545, 1616021098, 1618421377, 11);

--
-- Disparadores `site_visitors`
--
DELIMITER $$
CREATE TRIGGER `site_visitors_update_before` BEFORE UPDATE ON `site_visitors` FOR EACH ROW BEGIN
	IF ((NEW.last_visit - 3600) >= OLD.last_visit) THEN
		SET NEW.visits = OLD.visits + 1;
    END IF;
END
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `site_config`
--
ALTER TABLE `site_config`
  ADD PRIMARY KEY (`site_name`);

--
-- Indices de la tabla `site_visitors`
--
ALTER TABLE `site_visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `site_visitors`
--
ALTER TABLE `site_visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
