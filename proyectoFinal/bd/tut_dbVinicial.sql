-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS tut_db;
USE tut_db;

-- Crear la tabla admin
CREATE TABLE IF NOT EXISTS admin (
  username VARCHAR(15) NOT NULL,
  email VARCHAR(50) NOT NULL,
  pass VARCHAR(50) NOT NULL,
  PRIMARY KEY (username)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Insertar datos en la tabla admin con valores únicos
INSERT INTO admin (username, email, pass) VALUES
('benjir', 'j@gmail.com', '1234'),
('chis', 'a@e.com', '23');

-- Crear la tabla tutor
CREATE TABLE IF NOT EXISTS tutor (
  id_profesor INT(10) NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  apPat VARCHAR(50) NOT NULL,
  apMat VARCHAR(50) NOT NULL,
  imparteTutoria VARCHAR(3) NOT NULL,
  PRIMARY KEY (id_profesor)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Insertar datos en la tabla tutor
INSERT INTO tutor (id_profesor, nombre, apPat, apMat, imparteTutoria) VALUES
(101, 'Tutor 1', 'Apellido1', 'Apellido2', 'GRU'),
(102, 'Tutor 2', 'Apellido1', 'Apellido2', 'IND');

-- Crear la tabla alum
CREATE TABLE IF NOT EXISTS alum (
  boleta INT(10) NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  apPat VARCHAR(50) NOT NULL,
  apMat VARCHAR(50) NOT NULL,
  telefono BIGINT(10) NOT NULL, -- Cambiado a BIGINT para mayor capacidad
  semestre INT(2) NOT NULL,
  carrera VARCHAR(3) NOT NULL,
  tipoTutoria VARCHAR(3) NULL,
  genTutor VARCHAR(1) NULL,
  nombreTutor VARCHAR(50) NULL,
  correo VARCHAR(50) NOT NULL,
  contra VARCHAR(50) NOT NULL,
  PRIMARY KEY (boleta)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Insertar datos en la tabla alum
INSERT INTO alum (boleta, nombre, apPat, apMat, telefono, semestre, carrera, tipoTutoria, genTutor, nombreTutor, correo, contra) VALUES
(2023670015, 'Benji', 'Rosario', 'Cruz', 1234567890, 1, 'IIA', 'GRU', 'H', 'Tutor 1', 'benjir@alumno.ipn.mx', '123'),
(2023670020, 'Ana', 'Martinez', 'Lopez', 2345678901, 2, 'IMC', 'IND', 'F', 'Tutor 2', 'ana.m@alumno.ipn.mx', '456');

-- Crear la tabla de relación alum_tutor
CREATE TABLE IF NOT EXISTS alum_tutor (
  boleta INT(10) NOT NULL,
  id_profesor INT(10) NOT NULL,
  PRIMARY KEY (boleta, id_profesor),
  FOREIGN KEY (boleta) REFERENCES alum(boleta),
  FOREIGN KEY (id_profesor) REFERENCES tutor(id_profesor)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Insertar datos en la tabla de relación alum_tutor basándose en las tablas alum y tutor
INSERT INTO alum_tutor (boleta, id_profesor)
SELECT a.boleta, t.id_profesor
FROM alum a
JOIN tutor t ON a.nombreTutor = t.nombre;

-- Verificar la tabla de relación
SELECT * FROM alum_tutor;