-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-04-2025 a las 22:20:24
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `qna_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `qna`
--

CREATE TABLE `qna` (
  `id` int(11) NOT NULL,
  `otazka` text NOT NULL,
  `odpoved` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `qna`
--

INSERT INTO `qna` (`id`, `otazka`, `odpoved`) VALUES
(1, 'What is the story behind Assassin\'s Creed Shadows?', 'Assassin\'s Creed Shadows follows a new narrative that blends the old-world tactics of assassins with new stealth-based mechanics.'),
(2, 'Who is the main protagonist in Assassin\'s Creed Shadows?', 'The main protagonist is a character named Elara, who seeks revenge while uncovering dark secrets about the Assassin Brotherhood.'),
(3, 'What new gameplay features were introduced in Assassin\'s Creed Shadows?', 'In Assassin\'s Creed Shadows, new stealth mechanics such as light and shadow manipulation, as well as parkour-focused combat, have been introduced.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `qna`
--
ALTER TABLE `qna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `qna`
--
ALTER TABLE `qna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
