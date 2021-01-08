-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-01-2021 a las 03:21:17
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dos`
--

CREATE TABLE `dos` (
  `title` varchar(30) NOT NULL,
  `anotacion` longtext NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dos`
--

INSERT INTO `dos` (`title`, `anotacion`, `fecha`) VALUES
('Dia1', 'Dia 1 hoy me toca realizar el experimento gorila en la cual consiste en enseñar al sujeto a que aprenda algo de fisica.', '2020-12-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(32) NOT NULL,
  `apellido` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellido`, `username`, `password`, `email`) VALUES
('', '', '', '$2y$10$/UV1EHSIgqaYxiqKWAIRoO3FnAtFS3JEU.RWI/2eUycgtkeU3NbLy', ''),
('juj', 'robj', ' patij', '$2y$10$5byQ69jRwWMl6KfEqJN8NeHkPEOcq0iE4lYMtDPhCc73Dw0qNbTLq', ''),
('lucas', 'Quispe Quispe', ' pato', '$2y$10$r3kSCUGMr3FqBeYvKiQxxuR2x/qiLfue1BU7RjGHi5KDiikZfg9A6', ''),
('cristian', 'Rodriges', 'cristina', '$2y$10$bePmrjmMt/wO8guh0yKWDugVd8my3mF1Q5lMDhQ1lyQ0QUuu2cxhS', 'lancelot@gmail.com'),
('lucas', 'rodriges', 'luc', '$2y$10$iAWs8I8XAEY1h4872BWSqe41SLW70u91l0PKRdAeR03LViUZ8zpLO', ''),
('lulu', 'Servantillo', 'lulu', '$2y$10$t5Zhw2BUtNkKDWu8oXdaPu/AQmZNRnn69HDPHgT.w0CnW9XQfENNu', ''),
('sara', 'roberto', 'mimi', '$2y$10$yNFbiXXLPRmWyykSYzIz2.K/4EzgMubxlqx6A9lvHBOL68i3QZhZi', ''),
('Roberto', 'Salazar Miri', 'rob', '$2y$10$pDdsWDCVoRgrGzNEtbqqo.n60zn85bLJq6nonAAN8GcJHTTX1LmUe', ''),
('sara', 'Garcia Minaya', 'sara', '$2y$10$S9hHbKNdwyhE3RD2w3TU3OW17FQ.G61lsaeM9dFBtZVs5IWW/VQpS', ''),
('lizeth', 'Rodriges', 'yeni', '$2y$10$KSK6amu.xAD.sCPA0lLd9OxPyeUlqG6JU25laqEMpEGHJi/.yMosW', 'huamanrodascarolina@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
