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
  genTutor VARCHAR(1) NULL,
  numAlumnos INT DEFAULT 0,
  PRIMARY KEY (id_profesor)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Insertar datos en la tabla tutor
INSERT INTO tutor (id_profesor, nombre, apPat, apMat, imparteTutoria, genTutor) VALUES
(101, 'Martha Patricia', 'Jiménez', 'Villanueva', 'GRU','F'),
(102, 'Patricia', 'Escamilla', 'Miranda', 'GRU','F'),
(103, 'Laura', 'Méndez', 'Segundo', 'REG','F'),
(104, 'Laura', 'Muñoz', 'Salazar', 'IND','F'),
(105, 'Judith Margarita', 'Tirado', 'Lule', 'REC','F'),
(106, 'Karina', 'Viveros', 'Vela', 'PAR','F'),
(107, 'Rocio', 'Palacios', 'Solano', 'IND','F'),
(108, 'Claudia', 'Diaz', 'Huerta', 'IND','F'),
(109, 'Elia', 'Ramirez', 'Martinez', 'REC','F'),
(110, 'Gabriela', 'López', 'Ruiz', 'IND','F'),
(111, 'José Asunción', 'Enríquez', 'Zárate', 'GRU','H'),
(112, 'Alberto Jesús', 'Alcántara', 'Méndez', 'IND','H'),
(113, 'Felipe de Jesús', 'Figueroa', 'del Prado', 'REG','H'),
(114, 'Erick', 'Linares', 'Vallejo', 'IND','H'),
(115, 'Edgar', 'Armando', 'Catalán', 'REC','H'),
(116, 'Jorge', 'Cortes', 'Galicia', 'PAR','H'),
(117, 'Edgardo', 'Franco', 'Martínez', 'IND','H'),
(118, 'Vicente', 'Garcia', 'Sales', 'IND','H'),
(119, 'Iván', 'Mosso', 'García', 'REC','H'),
(120, 'Miguel', 'Ángel', 'Rodriguez', 'IND','H');

-- Crear la tabla alum
CREATE TABLE IF NOT EXISTS alum (
  boleta INT(10) NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  apPat VARCHAR(50) NOT NULL,
  apMat VARCHAR(50) NOT NULL,
  telefono BIGINT(10) NOT NULL,
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
(2023670015, 'Benji', 'Rosario', 'Cruz', 1234567890, 1, 'IIA', 'GRU', 'F', 'Patricia', 'benjir@alumno.ipn.mx', '123'),
(2023670020, 'Ana', 'Martinez', 'Lopez', 2345678901, 2, 'IMC', 'GRU', 'F', 'Patricia', 'ana3.m@alumno.ipn.mx', '4456'),
(2023670013, 'Benji', 'Rosario', 'Cruz', 1234567890, 1, 'IIA', 'GRU', 'F', 'Patricia', 'benjir4@alumno.ipn.mx', '1323'),
(2023670056, 'Ana', 'Martinez', 'Lopez', 2345678901, 2, 'IMC', 'GRU', 'F', 'Patricia', 'ana.m@alumno.ipn.mx', '4456'),
(2023670021, 'Carlos', 'Hernandez', 'Ramirez', 3456789012, 3, 'IIA', 'GRU', 'F', 'Patricia', 'carlos.h@alumno.ipn.mx', '789'),
(2023670022, 'Luis', 'Gomez', 'Perez', 4567890123, 4, 'IMC', 'GRU', 'F', 'Patricia', 'luis.g@alumno.ipn.mx', '012'),
(2023670023, 'Maria', 'Lopez', 'Sanchez', 5678901234, 5, 'IIA', 'GRU', 'F', 'Patricia', 'maria.l@alumno.ipn.mx', '345'),
(2023670024, 'Juan', 'Martinez', 'Lopez', 6789012345, 6, 'IMC', 'GRU', 'F', 'Patricia', 'juan.m@alumno.ipn.mx', '678'),
(2023670025, 'Laura', 'Jimenez', 'Hernandez', 7890123456, 7, 'IIA', 'GRU', 'F', 'Patricia', 'laura.j@alumno.ipn.mx', '901'),
(2023670026, 'Pablo', 'Perez', 'Garcia', 8901234567, 8, 'IMC', 'GRU', 'F', 'Patricia', 'pablo.p@alumno.ipn.mx', '234'),
(2023670027, 'Sofia', 'Rodriguez', 'Martinez', 9012345678, 9, 'IMC','GRU', 'F', 'Patricia', 'sofia.r@alumno.ipn.mx', '567'),
(2023670028, 'Miguel', 'Sanchez', 'Lopez', 1234567899, 10, 'IMC', 'GRU', 'F', 'Patricia', 'miguel.s@alumno.ipn.mx', '890'),
(2023670029, 'Marta', 'Ramirez', 'Gonzalez', 2345678910, 11, 'IIA', 'GRU', 'F', 'Patricia', 'marta.r@alumno.ipn.mx', '123'),
(2023670030, 'Diego', 'Alvarez', 'Hernandez', 3456789121, 12, 'IMC', 'GRU', 'F', 'Patricia', 'diego.a@alumno.ipn.mx', '456'),
(2023670031, 'Elena', 'Gonzalez', 'Perez', 4567891232, 1, 'IIA', 'GRU', 'F', 'Patricia', 'elena.g@alumno.ipn.mx', '789'),
(2023670032, 'Raul', 'Fernandez', 'Lopez', 5678912343, 2, 'IMC', 'GRU', 'F', 'Patricia', 'raul.f@alumno.ipn.mx', '012'),
(2023670033, 'Carla', 'Mendoza', 'Ramirez', 6789123454, 3, 'IIA', 'GRU', 'F', 'Patricia', 'carla.m@alumno.ipn.mx', '345'),
(2023670034, 'Alberto', 'Romero', 'Garcia', 7891234565, 4, 'IMC', 'GRU', 'F', 'Patricia', 'alberto.r@alumno.ipn.mx', '678'),
(2023670035, 'Natalia', 'Santos', 'Gomez', 8912345676, 5, 'IIA', 'GRU', 'F', 'Patricia', 'natalia.s@alumno.ipn.mx', '901'),
(2023670036, 'Victor', 'Reyes', 'Martinez', 9123456787, 6, 'IMC', 'GRU', 'F', 'Patricia', 'victor.r@alumno.ipn.mx', '234'),
(2023670037, 'Andrea', 'Castillo', 'Sanchez', 1234567898, 7, 'IIA', 'GRU', 'F', 'Patricia', 'andrea.c@alumno.ipn.mx', '567'),
(2023670038, 'Samuel', 'Ortega', 'Lopez', 2345678919, 8, 'IMC', 'GRU', 'F', 'Patricia', 'samuel.o@alumno.ipn.mx', '890'),
(2023670039, 'Isabel', 'Guerrero', 'Garcia', 3456789120, 9, 'IIA', 'GRU', 'F', 'Patricia', 'isabel.g@alumno.ipn.mx', '123'),
(2023670040, 'Roberto', 'Estrada', 'Hernandez', 4567891231, 10, 'IMC', 'GRU', 'F', 'Patricia', 'roberto.e@alumno.ipn.mx', '456'),
(2023670041, 'Alicia', 'Vega', 'Ramirez', 5678912342, 11, 'IIA', 'GRU', 'F', 'Patricia', 'alicia.v@alumno.ipn.mx', '789'),
(2023670042, 'Gustavo', 'Campos', 'Perez', 6789123453, 12, 'IMC', 'GRU', 'F', 'Patricia', 'gustavo.c@alumno.ipn.mx', '012'),
(2023670043, 'Carmen', 'Morales', 'Gonzalez', 7491234564, 1, 'IIA', 'GRU', 'F', 'Patricia', 'carmen.m@alumno.ipn.mx', '345');




-- Crear la tabla de relación alum_tutor
CREATE TABLE IF NOT EXISTS alum_tutor (
  boleta INT(10) NOT NULL,
  id_profesor INT(10) NOT NULL,
  PRIMARY KEY (boleta, id_profesor),
  FOREIGN KEY (boleta) REFERENCES alum(boleta),
  FOREIGN KEY (id_profesor) REFERENCES tutor(id_profesor)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Insertar datos en la tabla de relación alum_tutor
INSERT INTO alum_tutor (boleta, id_profesor)
SELECT a.boleta, t.id_profesor
FROM alum a
JOIN tutor t ON a.nombreTutor = t.nombre;

-- Actualizar el conteo de alumnos por tutor
UPDATE tutor t
SET numAlumnos = (
    SELECT COUNT(*)
    FROM alum_tutor at
    WHERE at.id_profesor = t.id_profesor
);

-- Verificar la tabla de relación
SELECT * FROM alum_tutor;