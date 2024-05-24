-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-01-2024 a las 16:55:13
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
-- Base de datos: `sem241`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administadores`
--

CREATE TABLE `administadores` (
  `noTrab` varchar(256) NOT NULL,
  `contra` varchar(256) NOT NULL,
  `Nombre` varchar(256) NOT NULL,
  `apellidoP` varchar(256) NOT NULL,
  `apellidoM` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administadores`
--

INSERT INTO `administadores` (`noTrab`, `contra`, `Nombre`, `apellidoP`, `apellidoM`) VALUES
('201018309188', 'admin1', 'Patricia', 'Escamilla', 'Miranda'),
('201018309189', 'Admin2', 'Ricardo', 'Cruz', 'Cubas'),
('201018309190', 'Admin3', 'Samuel', 'Cruz ', 'Aguilar'),
('201018309191', 'Admin4', 'José Ángel', 'Rodríguez', 'Villalobos'),
('201018309192', 'Admin5', 'Yael', 'Blasquez', 'Martínez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `curp` varchar(18) NOT NULL,
  `boleta` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellidoP` varchar(255) DEFAULT NULL,
  `apellidoM` varchar(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `genero` varchar(10) DEFAULT NULL,
  `discapacidad` varchar(255) DEFAULT NULL,
  `otraDiscapacidad` varchar(255) DEFAULT NULL,
  `calle` varchar(255) DEFAULT NULL,
  `col` varchar(255) DEFAULT NULL,
  `delegacion` varchar(255) DEFAULT NULL,
  `otroMunicipio` varchar(255) DEFAULT NULL,
  `cp` varchar(10) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `escuelaDeProcedencia` varchar(255) DEFAULT NULL,
  `otraEscuela` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `promedio` decimal(4,2) DEFAULT NULL,
  `opcion` varchar(255) DEFAULT NULL,
  `dia_asignado` varchar(100) NOT NULL,
  `salon_asignado` varchar(50) NOT NULL,
  `hora_asignado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`curp`, `boleta`, `nombre`, `apellidoP`, `apellidoM`, `fecha`, `genero`, `discapacidad`, `otraDiscapacidad`, `calle`, `col`, `delegacion`, `otroMunicipio`, `cp`, `tel`, `email`, `escuelaDeProcedencia`, `otraEscuela`, `estado`, `promedio`, `opcion`, `dia_asignado`, `salon_asignado`, `hora_asignado`) VALUES
('ABC123456XYZ789012', '20220001', 'Juan', 'Perez', 'Gomez', '1990-05-15', 'Masculino', 'Ninguna', '', 'Calle 123', 'Colonia Centro', 'Álvaro Obregón', '', '12345', '555-1234', 'juan@example.com', 'CET 1 Walter Cross Buchanan', '', 'Aguascalientes', 9.50, 'Opción A', 'Lunes 15 de Enero', 'Sistemas I', '7:00 - 8:30'),
('BCD789012EFG345678', '20220010', 'Sofia', 'Lopez', 'Fernandez', '1992-09-15', 'Femenino', 'Ninguna', NULL, 'Calle 789', 'Colonia Oeste', 'Delegacion Oeste', NULL, '67890', '555-9876', 'sofia@example.com', 'Escuela J', NULL, 'Estado J', 8.10, 'Opción J', 'Lunes 15 de Enero', 'Sistemas I', '7:00 - 8:30'),
('CUCR030808HMCRB45', '11', 'Ricardo', 'Castillo', 'asdasd', '2005-12-15', 'Femenino', 'Ninguna', 'Ninguna', 'adasdsa', 'asdsa', 'Azcapotzalco', 'Ninguna', '56387', '5583944994', 'gs_fs@gmail.com', 'CECyT 5 Benito Juárez', 'Ninguna', 'Morelos', 9.00, 'Opción 2', 'Lunes 15 de Enero', 'Sistemas I', '7:00 - 8:30'),
('CUCR030808HMCRB451', '10', 'asdas', 'asda', 'adasd', '2005-12-18', 'Femenino', 'Con Discapacidad Auditiva', 'Ninguna', 'ads', 'asdsa', 'Magdalena Contreras', 'Ninguna', '56387', '5583944994', 'gs_fs@gmail.com', 'CECyT 2 Miguel Bernard', 'Ninguna', 'Michoacan', 8.50, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas I', '7:00 - 8:30'),
('CUCR030808HMCRBC11', '13', 'dsd', 'asda', 'ad', '2005-12-04', 'Masculino', 'Con Discapacidad Motriz Usuaria de Bastón', 'Ninguna', 'adasdsa', 'asda', 'Benito Juárez', 'Ninguna', '56387', '5583944994', 'gsfs@gmail.com', 'CECyT 2 Miguel Bernard', 'Ninguna', 'Michoacan', 8.20, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas I', '7:00 - 8:30'),
('CUCR030808HMCRBC35', 'PP12345678', 'Prueba2', 'Castillo', 'asdasd', '2005-12-14', 'Otro', 'Ninguna', 'Ninguna', 'asd', 'sdfsdf', 'Azcapotzalco', 'Ninguna', '56387', '5583944994', 'gs_fs@gmail.com', 'CECyT 2 Miguel Bernard', 'Ninguna', 'Nayarit', 8.20, '', 'Lunes 15 de Enero', 'Sistemas II', '7:00 - 8:30'),
('CUCR030808HMCRBC44', 'PP12345678', 'Ricardo', 'Cruz', 'Herrera', '2005-12-19', 'Masculino', 'Con Discapacidad Motriz Usuaria de Muletas', 'Ninguna', 'ads', 'adas', 'Benito Juárez', 'Ninguna', '56387', '5583944994', 'hola@gmail.com', 'CECyT 4 Lázaro Cárdenas', 'Ninguna', 'Baja California Sur', 8.20, 'Opción 2', 'Lunes 15 de Enero', 'Sistemas II', '7:00 - 8:30'),
('CUCR030808HMCRBC55', 'PP12345678', 'Tfsdf', 'Sfgsdf', 'Edsfd', '2005-12-22', 'Femenino', 'Con Discapacidad Auditiva', 'Ninguna', 'ads', 'adsas', 'Cuajimalpa', 'Ninguna', '56387', '5583944994', 'gsfs@gmail.com', 'CECyT 5 Benito Juárez', 'Ninguna', 'Baja California Sur', 9.90, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas I', '7:00 - 8:30'),
('CUCR030808HMCRBCA4', '2024630031', 'Ricardo', 'Cruz', 'Cubas', '2003-08-08', 'Masculino', 'Ninguna', 'Ninguna', 'Segundo Callejon de San Ramon Mz.16 Lt.30 Cs. 28', 'U.H. Lomas de Chicoloapan', 'Otro', 'Chicoloapan', '56380', '5547712732', 'ricardo.cruzcubas@gmail.com', 'otro', 'CETis No.1', 'CDMX', 9.90, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas I', '7:00 - 8:30'),
('CUFG790916MDFBR111', 'Pruebas', 'Pruebas', 'Prueba', 'Prueba', '2005-12-04', 'Masculino', 'Ninguna', 'Ninguna', 'fsd', 'sfds', 'Azcapotzalco', 'Ninguna', '56387', '5583944994', 'gsfs@gmail.com', 'CECyT 18 Zacatecas', 'Ninguna', 'Michoacan', 8.50, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas I', '7:00 - 8:30'),
('CUFG790916MDFBRR01', '12', 'Ricardo', 'Castillo', 'asdasd', '2005-12-12', 'Femenino', 'Con Discapacidad Visual', 'Ninguna', 'adasdsa', 'asdasd', 'Iztapalapa', 'Ninguna', '56387', '5583944994', 'gs_fs@gmail.com', 'CECyT 15 Diodoro Antúnez Echegaray', 'Ninguna', 'Hidalgo', 8.00, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas I', '7:00 - 8:30'),
('CUFG790916MDFBRR04', 'PE12345679', 'Ricardo Samuel', 'Adsd', 'Fernandez', '2005-12-07', 'Femenino', 'Ninguna', 'Ninguna', 'czxczx', 'adas', 'Azcapotzalco', 'Ninguna', '24600', '5547712732', 'ricardo.cruzcubas@gmail.com', 'CECyT 3 Estanislao Ramírez Ruiz', 'Ninguna', 'Puebla', 8.00, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas I', '7:00 - 8:30'),
('CUFG790916MDFBRR05', 'PE12345679', 'Ricardo Samuel', 'Adsd', 'Fernandez', '2005-12-07', 'Femenino', 'Ninguna', 'Ninguna', 'czxczx', 'adas', 'Azcapotzalco', 'Ninguna', '24600', '5547712732', 'ricardo.cruzcubas@gmail.com', 'CECyT 3 Estanislao Ramírez Ruiz', 'Ninguna', 'Puebla', 8.00, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas I', '7:00 - 8:30'),
('CUFG790916MDFBRR06', 'PE12345679', 'Ricardo Samuel', 'Adsd', 'Fernandez', '2005-12-07', 'Femenino', 'Ninguna', 'Ninguna', 'czxczx', 'adas', 'Azcapotzalco', 'Ninguna', '24600', '5547712732', 'ricardo.cruzcubas@gmail.com', 'CECyT 3 Estanislao Ramírez Ruiz', 'Ninguna', 'Puebla', 8.00, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas I', '7:00 - 8:30'),
('CUFG790916MDFBRR07', 'PE12345679', 'Ricardo Samuel', 'Adsd', 'Fernandez', '2005-12-07', 'Femenino', 'Ninguna', 'Ninguna', 'czxczx', 'adas', 'Azcapotzalco', 'Ninguna', '24600', '5547712732', 'ricardo.cruzcubas@gmail.com', 'CECyT 3 Estanislao Ramírez Ruiz', 'Ninguna', 'Puebla', 8.00, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas I', '7:00 - 8:30'),
('CUFG790916MDFBRR08', 'PE12345679', 'Ricardo Samuel', 'Adsd', 'Fernandez', '2005-12-07', 'Femenino', 'Ninguna', 'Ninguna', 'czxczx', 'adas', 'Azcapotzalco', 'Ninguna', '24600', '5547712732', 'ricardo.cruzcubas@gmail.com', 'CECyT 3 Estanislao Ramírez Ruiz', 'Ninguna', 'Puebla', 8.00, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas I', '7:00 - 8:30'),
('CUFG790916MDFBRR09', 'PE12345679', 'Ricardo Samuel', 'Adsd', 'Fernandez', '2005-12-07', 'Femenino', 'Ninguna', 'Ninguna', 'czxczx', 'adas', 'Azcapotzalco', 'Ninguna', '24600', '5547712732', 'ricardo.cruzcubas@gmail.com', 'CECyT 3 Estanislao Ramírez Ruiz', 'Ninguna', 'Puebla', 8.00, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas I', '7:00 - 8:30'),
('CUFG790916MDFBRR10', 'PE12345679', 'Ricardo Samuel', 'Adsd', 'Fernandez', '2005-12-07', 'Femenino', 'Ninguna', 'Ninguna', 'czxczx', 'adas', 'Azcapotzalco', 'Ninguna', '24600', '5547712732', 'ricardo.cruzcubas@gmail.com', 'CECyT 3 Estanislao Ramírez Ruiz', 'Ninguna', 'Puebla', 8.00, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas I', '7:00 - 8:30'),
('CUFG790916MDFBRR51', 'PP12345678', 'Ricardo Samuel', 'Castillo', 'Cubas', '2005-12-13', 'Masculino', 'Ninguna', 'Ninguna', 'Segundo Callejon de San Ramon Mz.16 Lt.30 Cs. 28', 'asdsd', 'Azcapotzalco', 'Ninguna', '56380', '5547712732', 'samuelcruza123@gmail.com', 'CECyT 3 Estanislao Ramírez Ruiz', 'Ninguna', 'Jalisco', 9.90, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas I', '7:00 - 8:30'),
('CUFG790916MDFBRR55', 'PP12345678', 'Ricardo', 'Castillo', 'sfds', '2005-12-19', 'Otro', 'Ninguna', 'Ninguna', 'sdfs', 'sfsd', 'Azcapotzalco', 'Ninguna', '56387', '5583944994', 'gsfs@gmail.com', 'CECyT 3 Estanislao Ramírez Ruiz', 'Ninguna', 'Morelos', 8.00, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas I', '7:00 - 8:30'),
('CUFG790916MDFBRR75', 'PP12345678', 'Ricardo', 'Castillo', 'Herrera', '2005-12-13', 'Masculino', 'Ninguna', 'Ninguna', 'ads', 'sdfsdd', 'Benito Juárez', 'Ninguna', '56387', '5583944994', 'samuelcruza123@gmail.com', 'CECyT 4 Lázaro Cárdenas', 'Ninguna', 'Chiapas', 8.20, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas II', '7:00 - 8:30'),
('CUFG790916MDFBRR76', 'PP12345678', 'Ricardo', 'Castillo', 'Herrera', '2005-12-13', 'Masculino', 'Ninguna', 'Ninguna', 'ads', 'sdfsdd', 'Benito Juárez', 'Ninguna', '56387', '5583944994', 'samuelcruza123@gmail.com', 'CECyT 4 Lázaro Cárdenas', 'Ninguna', 'Chiapas', 8.20, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas II', '7:00 - 8:30'),
('CUFG790916MDFBRR77', 'PP12345678', 'Ricardo', 'Castillo', 'Herrera', '2005-12-13', 'Masculino', 'Ninguna', 'Ninguna', 'ads', 'sdfsdd', 'Benito Juárez', 'Ninguna', '56387', '5583944994', 'samuelcruza123@gmail.com', 'CECyT 4 Lázaro Cárdenas', 'Ninguna', 'Chiapas', 8.20, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas II', '7:00 - 8:30'),
('CUFG790916MDFBRR78', 'PP12345678', 'Ricardo', 'Castillo', 'Herrera', '2005-12-13', 'Masculino', 'Ninguna', 'Ninguna', 'ads', 'sdfsdd', 'Benito Juárez', 'Ninguna', '56387', '5583944994', 'samuelcruza123@gmail.com', 'CECyT 4 Lázaro Cárdenas', 'Ninguna', 'Chiapas', 8.20, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas II', '7:00 - 8:30'),
('CUFG790916MDFBRR79', 'PP12345678', 'Ricardo', 'Castillo', 'Herrera', '2005-12-13', 'Masculino', 'Ninguna', 'Ninguna', 'ads', 'sdfsdd', 'Benito Juárez', 'Ninguna', '56387', '5583944994', 'samuelcruza123@gmail.com', 'CECyT 4 Lázaro Cárdenas', 'Ninguna', 'Chiapas', 8.20, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas II', '7:00 - 8:30'),
('CUFG790916MDFBRR80', 'PP12345678', 'Ricardo', 'Castillo', 'Herrera', '2005-12-13', 'Masculino', 'Ninguna', 'Ninguna', 'ads', 'sdfsdd', 'Benito Juárez', 'Ninguna', '56387', '5583944994', 'samuelcruza123@gmail.com', 'CECyT 4 Lázaro Cárdenas', 'Ninguna', 'Chiapas', 8.20, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas II', '7:00 - 8:30'),
('CUFG790916MDFBRR81', 'PP12345678', 'Ricardo', 'Castillo', 'Herrera', '2005-12-13', 'Masculino', 'Ninguna', 'Ninguna', 'ads', 'sdfsdd', 'Benito Juárez', 'Ninguna', '56387', '5583944994', 'samuelcruza123@gmail.com', 'CECyT 4 Lázaro Cárdenas', 'Ninguna', 'Chiapas', 8.20, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas II', '7:00 - 8:30'),
('CUFG790916MDFBRR82', 'PP12345678', 'Ricardo', 'Castillo', 'Herrera', '2005-12-13', 'Masculino', 'Ninguna', 'Ninguna', 'ads', 'sdfsdd', 'Benito Juárez', 'Ninguna', '56387', '5583944994', 'samuelcruza123@gmail.com', 'CECyT 4 Lázaro Cárdenas', 'Ninguna', 'Chiapas', 8.20, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas II', '7:00 - 8:30'),
('CUFG790916MDFBRR83', 'PP12345678', 'Ricardo', 'Castillo', 'Herrera', '2005-12-13', 'Masculino', 'Ninguna', 'Ninguna', 'ads', 'sdfsdd', 'Benito Juárez', 'Ninguna', '56387', '5583944994', 'samuelcruza123@gmail.com', 'CECyT 4 Lázaro Cárdenas', 'Ninguna', 'Chiapas', 8.20, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas II', '7:00 - 8:30'),
('CUFG790916MDFBRR84', 'PP12345678', 'Ricardo', 'Castillo', 'Herrera', '2005-12-13', 'Masculino', 'Ninguna', 'Ninguna', 'ads', 'sdfsdd', 'Benito Juárez', 'Ninguna', '56387', '5583944994', 'samuelcruza123@gmail.com', 'CECyT 4 Lázaro Cárdenas', 'Ninguna', 'Chiapas', 8.20, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas II', '7:00 - 8:30'),
('CUFG790916MDFBRR85', 'PP12345678', 'Ricardo', 'Castillo', 'Herrera', '2005-12-13', 'Masculino', 'Ninguna', 'Ninguna', 'ads', 'sdfsdd', 'Benito Juárez', 'Ninguna', '56387', '5583944994', 'samuelcruza123@gmail.com', 'CECyT 4 Lázaro Cárdenas', 'Ninguna', 'Chiapas', 8.20, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas II', '7:00 - 8:30'),
('CUFG790916MDFBRR86', 'PP12345678', 'Ricardo', 'Castillo', 'Herrera', '2005-12-13', 'Masculino', 'Ninguna', 'Ninguna', 'ads', 'sdfsdd', 'Benito Juárez', 'Ninguna', '56387', '5583944994', 'samuelcruza123@gmail.com', 'CECyT 4 Lázaro Cárdenas', 'Ninguna', 'Chiapas', 8.20, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas II', '7:00 - 8:30'),
('CUFG790916MDFBRR87', 'PP12345678', 'Ricardo', 'Castillo', 'Herrera', '2005-12-13', 'Masculino', 'Ninguna', 'Ninguna', 'ads', 'sdfsdd', 'Benito Juárez', 'Ninguna', '56387', '5583944994', 'samuelcruza123@gmail.com', 'CECyT 4 Lázaro Cárdenas', 'Ninguna', 'Chiapas', 8.20, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas II', '7:00 - 8:30'),
('CUFG790916MDFBRR88', 'PP12345678', 'Ricardo', 'Castillo', 'Herrera', '2005-12-13', 'Masculino', 'Ninguna', 'Ninguna', 'ads', 'sdfsdd', 'Benito Juárez', 'Ninguna', '56387', '5583944994', 'samuelcruza123@gmail.com', 'CECyT 4 Lázaro Cárdenas', 'Ninguna', 'Chiapas', 8.20, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas II', '7:00 - 8:30'),
('FEOI600323MDGVFF18', 'PP47712735', 'Moises', 'Gonazalez', 'Jimenez', '2005-12-19', 'Masculino', '', 'Ninguna', 'Hacienda la herradura', 'Geo beta 2', 'Otro', 'Chicoloapan', '56383', '5538435948', 'samuelcruza123@gmail.com', 'CET 1 Walter Cross Buchanan', 'CETis No.3', 'Aguascalientes', 9.80, 'Opción 1', 'Lunes 15 de Enero', 'Sistemas II', '7:00 - 8:30'),
('HIJ987654KLM321012', '20220012', 'Laura', 'Gomez', 'Martinez', '1996-06-10', 'Femenino', 'Motriz', 'Ninguna', 'Avenida Principal', 'Colonia Sur', 'Delegacion Sur', NULL, '54321', '555-6789', 'laura@example.com', 'Escuela L', NULL, 'Estado L', 9.70, 'Opción L', 'Lunes 15 de Enero', 'Sistemas I', '7:00 - 8:30'),
('JKL987654MNO123456', '20220004', 'Ana', 'Martinez', 'Gutierrez', '1994-06-30', 'Femenino', 'Ninguna', NULL, 'Avenida 456', 'Colonia Norte', 'Delegacion Norte', NULL, '54321', '555-8765', 'ana@example.com', 'Escuela D', NULL, 'Estado D', 8.70, 'Opción D', 'Lunes 15 de Enero', 'Sistemas I', '7:00 - 8:30'),
('KLM321012HIJ987654', '20220013', 'Carlos', 'Martinez', 'Lopez', '1991-11-20', 'Masculino', 'Visual', 'Ninguna', 'Calle 456', 'Colonia Este', 'Delegacion Este', NULL, '98765', '555-3456', 'carlos@example.com', 'Escuela M', NULL, 'Estado M', 7.80, 'Opción M', 'Lunes 15 de Enero', 'Sistemas I', '7:00 - 8:30'),
('MNO123456JKL987654', '20220005', 'David', 'Gutierrez', 'Fernandez', '1996-11-10', 'Masculino', 'Ninguna', NULL, 'Calle 789', 'Colonia Oeste', 'Delegacion Oeste', NULL, '67890', '555-9876', 'david@example.com', 'Escuela E', NULL, 'Estado E', 8.00, 'Opción E', 'Lunes 15 de Enero', 'Sistemas I', '7:00 - 8:30'),
('PQR654321STU987654', '20220006', 'Elena', 'Fernandez', 'Lopez', '1993-03-25', 'Femenino', 'Motriz', 'Ninguna', 'Calle 123', 'Colonia Centro', 'Delegacion Centro', NULL, '12345', '555-2345', 'elena@example.com', 'Escuela F', NULL, 'Estado F', 9.20, 'Opción F', 'Lunes 15 de Enero', 'Sistemas I', '7:00 - 8:30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administadores`
--
ALTER TABLE `administadores`
  ADD PRIMARY KEY (`noTrab`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`curp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
