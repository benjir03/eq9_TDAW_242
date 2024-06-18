-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-06-2024 a las 01:06:04
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
-- Base de datos: `tut_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--
CREATE DATABASE tut_db;
USE tut_db;

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`username`, `email`, `pass`) VALUES
('benjir', 'j@gmail', '1234'),
('chis', 'a@e', '23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alum`
--

CREATE TABLE `alum` (
  `boleta` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apPat` varchar(50) NOT NULL,
  `apMat` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL,
  `semestre` int(2) NOT NULL,
  `carrera` varchar(3) NOT NULL,
  `tipoTutoria` varchar(3) NOT NULL,
  `genTutor` varchar(1) NOT NULL,
  `nombreTutor` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contra` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `alum`
--

INSERT INTO `alum` (`boleta`, `nombre`, `apPat`, `apMat`, `telefono`, `semestre`, `carrera`, `tipoTutoria`, `genTutor`, `nombreTutor`, `correo`, `contra`) VALUES
(2023670015, 'Benji', 'Rosario', 'Cruz', 1234567890, 1, 'IIA', 'GRU', 'H', '', 'benjir@alumno.ipn.mx', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
