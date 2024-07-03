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
(2023670020, 'Ana', 'Martinez', 'Lopez', 2345678901, 2, 'ISC', 'GRU', 'F', 'Patricia', 'ana3.m@alumno.ipn.mx', '4456'),
(2023670013, 'Alan', 'Aguilar', 'Mejia', 5561143729, 1, 'LCD', 'GRU', 'F', 'Patricia', 'alan4@alumno.ipn.mx', '1323'),
(2023670021, 'Carlos', 'Hernandez', 'Ramirez', 3456789012, 3, 'IIA', 'GRU', 'F', 'Patricia', 'carlos.h@alumno.ipn.mx', '789'),
(2023670022, 'Luis', 'Gomez', 'Perez', 4567890123, 4, 'ISC', 'GRU', 'F', 'Patricia', 'luis.g@alumno.ipn.mx', '012'),
(2023670023, 'Maria', 'Lopez', 'Sanchez', 5678901234, 5, 'IIA', 'GRU', 'F', 'Patricia', 'maria.l@alumno.ipn.mx', '345'),
(2023670024, 'Juan', 'Martinez', 'Lopez', 6789012345, 6, 'ISC', 'GRU', 'F', 'Patricia', 'juan.m@alumno.ipn.mx', '678'),
(2023670025, 'Laura', 'Jimenez', 'Hernandez', 7890123456, 7, 'IIA', 'GRU', 'F', 'Patricia', 'laura.j@alumno.ipn.mx', '901'),
(2023670026, 'Pablo', 'Perez', 'Garcia', 8901234567, 8, 'ISC', 'GRU', 'F', 'Patricia', 'pablo.p@alumno.ipn.mx', '234'),
(2023670027, 'Sofia', 'Rodriguez', 'Martinez', 9012345678, 9, 'ISC','GRU', 'F', 'Patricia', 'sofia.r@alumno.ipn.mx', '567'),
(2023670028, 'Miguel', 'Sanchez', 'Lopez', 1234567899, 10, 'ISC', 'GRU', 'F', 'Patricia', 'miguel.s@alumno.ipn.mx', '890'),
(2023670029, 'Marta', 'Ramirez', 'Gonzalez', 2345678910, 1, 'IIA', 'GRU', 'F', 'Patricia', 'marta.r@alumno.ipn.mx', '123'),
(2023670030, 'Diego', 'Alvarez', 'Hernandez', 3456789121, 2, 'ISC', 'GRU', 'F', 'Patricia', 'diego.a@alumno.ipn.mx', '456'),
(2023670031, 'Elena', 'Gonzalez', 'Perez', 4567891232, 1, 'IIA', 'GRU', 'F', 'Patricia', 'elena.g@alumno.ipn.mx', '789'),
(2023670032, 'Raul', 'Fernandez', 'Lopez', 5678912343, 2, 'ISC', 'GRU', 'F', 'Patricia', 'raul.f@alumno.ipn.mx', '012'),
(2023670033, 'Carla', 'Mendoza', 'Ramirez', 6789123454, 3, 'IIA', 'GRU', 'F', 'Patricia', 'carla.m@alumno.ipn.mx', '345'),
(2023670034, 'Alberto', 'Romero', 'Garcia', 7891234565, 4, 'ISC', 'GRU', 'F', 'Patricia', 'alberto.r@alumno.ipn.mx', '678'),
(2023670035, 'Natalia', 'Santos', 'Gomez', 8912345676, 5, 'IIA', 'GRU', 'F', 'Patricia', 'natalia.s@alumno.ipn.mx', '901'),
(2023670036, 'Victor', 'Reyes', 'Martinez', 9123456787, 6, 'ISC', 'GRU', 'F', 'Patricia', 'victor.r@alumno.ipn.mx', '234'),
(2023670037, 'Andrea', 'Castillo', 'Sanchez', 1234567898, 7, 'IIA', 'GRU', 'F', 'Patricia', 'andrea.c@alumno.ipn.mx', '567'),
(2023670038, 'Samuel', 'Ortega', 'Lopez', 2345678919, 8, 'ISC', 'GRU', 'F', 'Patricia', 'samuel.o@alumno.ipn.mx', '890'),
(2023670039, 'Isabel', 'Guerrero', 'Garcia', 3456789120, 9, 'IIA', 'GRU', 'F', 'Patricia', 'isabel.g@alumno.ipn.mx', '123'),
(2023670040, 'Roberto', 'Estrada', 'Hernandez', 4567891231, 10, 'ISC', 'GRU', 'F', 'Patricia', 'roberto.e@alumno.ipn.mx', '456'),
(2023670041, 'Alicia', 'Vega', 'Ramirez', 5678912342, 1, 'IIA', 'GRU', 'F', 'Patricia', 'alicia.v@alumno.ipn.mx', '789'),
(2023670042, 'Gustavo', 'Campos', 'Perez', 6789123453, 2, 'LCD', 'GRU', 'F', 'Patricia', 'gustavo.c@alumno.ipn.mx', '012'),
(2023670043, 'Carmen', 'Morales', 'Gonzalez', 7491234564, 1, 'IIA', 'GRU', 'F', 'Patricia', 'carmen.m@alumno.ipn.mx', '345'),

(2023670827, 'Ana', 'González', 'López', 2345678901, 2, 'LCD', 'GRU', 'F', 'MARTHA', 'anag@alumno.ipn.mx', '456'),
(2023670103, 'Carlos', 'Sánchez', 'Martínez', 3456789012, 3, 'LCD', 'REG', 'F', 'Laura', 'carloss@alumno.ipn.mx', '789'),
(2023670178, 'Laura', 'Hernández', 'Gómez', 4567890123, 4, 'IIA', 'IND', 'F', 'Laura', 'laurah@alumno.ipn.mx', 'abc'),
(2023670689, 'Javier', 'Martínez', 'Díaz', 5678901234, 5, 'IIA', 'REC', 'F', 'Judith', 'javierm@alumno.ipn.mx', 'def'),
(2023670394, 'María', 'López', 'Gutiérrez', 6789012345, 6, 'LCD', 'PAR', 'F', 'Karina', 'marial@alumno.ipn.mx', 'ghi'),
(2023670859, 'Diego', 'Ramírez', 'Vázquez', 7890123456, 7, 'ISC', 'IND', 'F', 'Rocio', 'diegor@alumno.ipn.mx', 'jkl'),
(2023670928, 'Sofía', 'García', 'Hernández', 8901234567, 8, 'IIA', 'IND', 'F', 'Claudia', 'sofiag@alumno.ipn.mx', 'mno'),
(2023670141, 'Rodrigo', 'Torres', 'Sánchez', 9012345678, 9, 'ISC', 'REC', 'F', 'Elia', 'rodrigot@alumno.ipn.mx', 'pqr'),
(2023670123, 'Fernanda', 'Díaz', 'López', 1234567890, 10, 'LCD', 'IND', 'F', 'Gabriela', 'fernandad@alumno.ipn.mx', 'stu'),
(2023673729, 'Pedro', 'Santos', 'Ramírez', 2345678901, 1, 'LCD', 'GRU', 'M', 'Asunción', 'pedros@alumno.ipn.mx', 'vwx'),
(2023673209, 'Ana', 'Mendoza', 'Gómez', 3456789012, 2, 'IIA', 'IND', 'M', 'Alberto', 'anam@alumno.ipn.mx', 'yz0'),
(2019620608, 'Luis', 'Castillo', 'Martínez', 4567890123, 3, 'IIA', 'REG', 'M', 'Felipe', 'luisc@alumno.ipn.mx', '123'),
(2019630258, 'Karen', 'Ortega', 'Pérez', 5678901234, 4, 'LCD', 'IND', 'M', 'Erick', 'kareno@alumno.ipn.mx', '456'),
(2023630578, 'José', 'Guzmán', 'López', 6789012345, 5, 'IIA', 'REC', 'M', 'Edgar', 'joseg@alumno.ipn.mx', '789'),
(2023633424, 'Fabiola', 'Rojas', 'Hernández', 7890123456, 6, 'ISC', 'PAR', 'H', 'Jorge', 'fabiolar@alumno.ipn.mx', 'abc'),
(2018670031, 'Carlos', 'Suárez', 'Vázquez', 8901234567, 7, 'ISC', 'IND', 'H', 'Edgardo', 'carloss@alumno.ipn.mx', 'def'),
(2019670032, 'María', 'Jiménez', 'Gutiérrez', 9012345678, 8, 'LCD', 'IND', 'H', 'Vicente', 'mariaj@alumno.ipn.mx', 'ghi'),
(2020670033, 'Javier', 'González', 'López', 1234567890, 9, 'IIA', 'REC', 'H', 'Iván', 'javierg@alumno.ipn.mx', 'jkl'),
(2021670034, 'Sofía', 'Mendoza', 'Ramírez', 2345678901, 10, 'LCD', 'IND', 'H', 'Miguel', 'sofiam@alumno.ipn.mx', 'mno'),
(2022670035, 'Diego', 'Santos', 'Gómez', 3456789012, 1, 'IIA', 'GRU', 'H', 'Asunción', 'diegos@alumno.ipn.mx', 'pqr'),
(202363036, 'Laura', 'Castillo', 'Martínez', 4567890123, 2, 'IIA', 'GRU', 'F', 'MARTHA', 'laurac@alumno.ipn.mx', 'stu'),
(2023630037, 'Rodrigo', 'Ortega', 'Pérez', 5678901234, 3, 'LCD', 'REG', 'F', 'Laura', 'rodrigor@alumno.ipn.mx', 'vwx'),
(2023630038, 'Fernanda', 'Guzmán', 'López', 6789012345, 4, 'IIA', 'IND', 'F', 'Laura', 'fernandag@alumno.ipn.mx', 'yz0'),
(2023630039, 'Pedro', 'Rojas', 'Hernández', 7890123456, 5, 'LCD', 'REC', 'F', 'Judith', 'pedror@alumno.ipn.mx', '123'),
(2023630040, 'Ana', 'Suárez', 'Vázquez', 8901234567, 6, 'ISC', 'PAR', 'F', 'Karina', 'anas@alumno.ipn.mx', '456'),
(2023630041, 'Luis', 'Jiménez', 'Gutiérrez', 9012345678, 7, 'LCD', 'IND', 'F', 'Rocio', 'luisj@alumno.ipn.mx', '789'),
(2023630042, 'Karen', 'González', 'López', 1234567890, 8, 'IIA', 'IND', 'F', 'Claudia', 'kareng@alumno.ipn.mx', 'abc'),
(2023630043, 'José', 'Mendoza', 'Ramírez', 2345678901, 9, 'ISC', 'REC', 'F', 'Elia', 'josem@alumno.ipn.mx', 'def'),
(2023630044, 'Fabiola', 'Santos', 'Gómez', 3456789012, 10, 'IIA', 'IND', 'F', 'Gabriela', 'fabiolas@alumno.ipn.mx', 'ghi'),
(2023630045, 'Carlos', 'Castillo', 'Martínez', 4567890123, 1, 'IIA', 'GRU', 'M', 'Asunción', 'carlosc@alumno.ipn.mx', 'jkl'),
(2023630046, 'María', 'Ortega', 'Pérez', 5678901234, 2, 'LCD', 'IND', 'M', 'Alberto', 'mariao@alumno.ipn.mx', 'mno'),
(2023630047, 'Diego', 'Guzmán', 'López', 6789012345, 3, 'IIA', 'REG', 'M', 'Felipe', 'diegog@alumno.ipn.mx', 'pqr'),
(2023630048, 'Laura', 'Rojas', 'Hernández', 7890123456, 4, 'ISC', 'IND', 'M', 'Erick', 'laurar@alumno.ipn.mx', 'stu'),
(2023630049, 'Rodrigo', 'Suárez', 'Vázquez', 8901234567, 5, 'ISC', 'REC', 'M', 'Edgar', 'rodrigos@alumno.ipn.mx', 'vwx'),
(2023630050, 'Fernanda', 'Jiménez', 'Gutiérrez', 9012345678, 6, 'LCD', 'PAR', 'H', 'Jorge', 'fernandaj@alumno.ipn.mx', 'yz0'),
(2023630051, 'Pedro', 'González', 'López', 1234567890, 7, 'IIA', 'IND', 'H', 'Edgardo', 'pedrog@alumno.ipn.mx', '123'),
(2023630052, 'Ana', 'Mendoza', 'Ramírez', 2345678901, 8, 'ISC', 'IND', 'H', 'Vicente', 'anam@alumno.ipn.mx', '456'),
(2023630053, 'Luis', 'Santos', 'Gómez', 3456789012, 9, 'IIA', 'REC', 'H', 'Iván', 'luiss@alumno.ipn.mx', '789'),
(2023630054, 'Karen', 'Castillo', 'Martínez', 4567890123, 10, 'IIA', 'IND', 'H', 'Miguel', 'karenc@alumno.ipn.mx', 'abc'),
(2023630055, 'José', 'Ortega', 'Pérez', 5678901234, 1, 'LCD', 'GRU', 'H', 'Asunción', 'joseo@alumno.ipn.mx', 'def'),
(2023630056, 'Fabiola', 'Guzmán', 'López', 6789012345, 2, 'IIA', 'GRU', 'F', 'MARTHA', 'fabiolag@alumno.ipn.mx', 'ghi'),
(2023630057, 'Carlos', 'Rojas', 'Hernández', 7890123456, 3, 'LCD', 'REG', 'F', 'Laura', 'carlosr@alumno.ipn.mx', 'jkl'),
(2023630058, 'María', 'Suárez', 'Vázquez', 8901234567, 4, 'ISC', 'IND', 'F', 'Laura', 'marias@alumno.ipn.mx', 'mno'),
(2023630059, 'Diego', 'Jiménez', 'Gutiérrez', 9012345678, 5, 'ISC', 'REC', 'F', 'Judith', 'diegoj@alumno.ipn.mx', 'pqr'),
(2023630060, 'Laura', 'González', 'López', 1234567890, 6, 'IIA', 'PAR', 'F', 'Karina', 'laurag@alumno.ipn.mx', 'stu'),
(2023630061, 'Rodrigo', 'Mendoza', 'Ramírez', 2345678901, 7, 'LCD', 'IND', 'F', 'Rocio', 'rodrigom@alumno.ipn.mx', 'vwx'),
(2023630062, 'Fernanda', 'Santos', 'Gómez', 3456789012, 8, 'IIA', 'IND', 'F', 'Claudia', 'fernandas@alumno.ipn.mx', 'yz0'),
(2023630063, 'Pedro', 'Castillo', 'Martínez', 4567890123, 9, 'IIA', 'REC', 'F', 'Elia', 'pedroc@alumno.ipn.mx', '123'),
(2023630064, 'Ana', 'Ortega', 'Pérez', 5678901234, 10, 'ISC', 'IND', 'F', 'Gabriela', 'anao@alumno.ipn.mx', '456'),
(2023630065, 'Luis', 'Guzmán', 'López', 6789012345, 1, 'IIA', 'GRU', 'M', 'Asunción', 'luisg@alumno.ipn.mx', '789'),
(2023630066, 'Karen', 'Rojas', 'Hernández', 7890123456, 2, 'LCD', 'IND', 'M', 'Alberto', 'karenr@alumno.ipn.mx', 'abc'),
(2023630067, 'José', 'Suárez', 'Vázquez', 8901234567, 3, 'LCD', 'REG', 'M', 'Felipe', 'joses@alumno.ipn.mx', 'def'),
(2023630068, 'Fabiola', 'Jiménez', 'Gutiérrez', 9012345678, 4, 'IIA', 'IND', 'M', 'Erick', 'fabiolaj@alumno.ipn.mx', 'ghi'),
(2023630069, 'Carlos', 'González', 'López', 1234567890, 5, 'IIA', 'REC', 'M', 'Edgar', 'carlosg@alumno.ipn.mx', 'jkl'),
(2023630070, 'María', 'Mendoza', 'Ramírez', 2345678901, 6, 'ISC', 'PAR', 'H', 'Jorge', 'mariam@alumno.ipn.mx', 'mno'),
(2023630071, 'Diego', 'Santos', 'Gómez', 3456789012, 7, 'IIA', 'IND', 'H', 'Edgardo', 'diegos@alumno.ipn.mx', 'pqr'),
(2023630072, 'Laura', 'Castillo', 'Martínez', 4567890123, 8, 'IIA', 'IND', 'H', 'Vicente', 'laurac@alumno.ipn.mx', 'stu'),
(2023630073, 'Rodrigo', 'Ortega', 'Pérez', 5678901234, 9, 'LCD', 'REC', 'H', 'Iván', 'rodrigor@alumno.ipn.mx', 'vwx'),
(2023630074, 'Fernanda', 'Guzmán', 'López', 6789012345, 10, 'IIA', 'IND', 'H', 'Miguel', 'fernandag@alumno.ipn.mx', 'yz0');




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