-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 03:10 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_colegio`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(11) NOT NULL,
  `login_admin` varchar(30) NOT NULL,
  `clave_admin` varchar(300) NOT NULL,
  `email_admin` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrador`
--

INSERT INTO `administrador` (`id_admin`, `login_admin`, `clave_admin`, `email_admin`) VALUES
(3, 'adminUH', '827ccb0eea8a706c4c34a16891f84e7b', 'adminh@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(11) NOT NULL,
  `nivel_id` int(11) NOT NULL,
  `login_alumno` varchar(30) NOT NULL,
  `clave_alumno` varchar(300) NOT NULL,
  `nombre_alumno` varchar(30) NOT NULL,
  `apellidos_alumno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `nivel_id`, `login_alumno`, `clave_alumno`, `nombre_alumno`, `apellidos_alumno`) VALUES
(17, 1, 'test4', '81dc9bdb52d04dc20036dbd8313ed055', 'gabriel ', 'Reyes'),
(19, 1, 'gag', '81dc9bdb52d04dc20036dbd8313ed055', 'asd', 'asd'),
(20, 1, 'gag', '81dc9bdb52d04dc20036dbd8313ed055', 'asd', 'asd'),
(21, 1, 'test5', '81dc9bdb52d04dc20036dbd8313ed055', 'Test555', 'Test5');

-- --------------------------------------------------------

--
-- Table structure for table `asignatura`
--

CREATE TABLE `asignatura` (
  `id_asignatura` int(11) NOT NULL,
  `nivel_id` int(11) NOT NULL,
  `profesor_id` int(11) NOT NULL,
  `nombre_asignatura` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asignatura`
--

INSERT INTO `asignatura` (`id_asignatura`, `nivel_id`, `profesor_id`, `nombre_asignatura`) VALUES
(1, 1, 1, 'Musica'),
(2, 1, 1, 'Estudios'),
(3, 1, 2, 'Español'),
(4, 1, 2, 'Español');

-- --------------------------------------------------------

--
-- Table structure for table `asignatura_has_alumno`
--

CREATE TABLE `asignatura_has_alumno` (
  `asignatura_id` int(11) NOT NULL,
  `alumno_id` int(11) NOT NULL,
  `id_notaAha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asignatura_has_alumno`
--

INSERT INTO `asignatura_has_alumno` (`asignatura_id`, `alumno_id`, `id_notaAha`) VALUES
(1, 17, 1),
(2, 21, 60),
(3, 17, 3);

-- --------------------------------------------------------

--
-- Table structure for table `falta_asistencia`
--

CREATE TABLE `falta_asistencia` (
  `id_falAsistencia` int(11) NOT NULL,
  `alumno_id` int(11) NOT NULL,
  `asignatura_id` int(11) NOT NULL,
  `fecha_falAsistencia` date NOT NULL,
  `justificada` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `falta_asistencia`
--

INSERT INTO `falta_asistencia` (`id_falAsistencia`, `alumno_id`, `asignatura_id`, `fecha_falAsistencia`, `justificada`) VALUES
(1, 17, 1, '2022-07-04', 'No'),
(3, 17, 3, '2022-07-13', 'Si');

-- --------------------------------------------------------

--
-- Table structure for table `horario`
--

CREATE TABLE `horario` (
  `id_horario` int(11) NOT NULL,
  `asignatura_id` int(11) NOT NULL,
  `dia_horario` varchar(25) NOT NULL,
  `dia_horaInicio` varchar(25) NOT NULL,
  `dia_horaFin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `horario`
--

INSERT INTO `horario` (`id_horario`, `asignatura_id`, `dia_horario`, `dia_horaInicio`, `dia_horaFin`) VALUES
(1, 1, 'Miercoles', '1:00 PM', '3:00 PM'),
(3, 1, 'Lunes', '7:00 PM', '9:00 PM'),
(5, 3, 'Jueves', '1:00 PM', '2:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `nivel`
--

CREATE TABLE `nivel` (
  `id_nivel` int(11) NOT NULL,
  `nivel` varchar(20) NOT NULL,
  `nivel_curso` varchar(20) NOT NULL,
  `nivel_aula` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nivel`
--

INSERT INTO `nivel` (`id_nivel`, `nivel`, `nivel_curso`, `nivel_aula`) VALUES
(1, 'Setimo', 'Matematicas', 'Clase 7'),
(2, 'Octavo', 'Español', 'Clase 8'),
(4, 'Noveno', 'Estudios Sociales', 'Clase 10'),
(6, 'Decimo', 'Ingles', 'Clase 11');

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL,
  `aha_alumno_id` int(11) NOT NULL,
  `aha_asignatura_id` int(11) NOT NULL,
  `trimestre_nota` int(11) NOT NULL,
  `nota` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`id_nota`, `aha_alumno_id`, `aha_asignatura_id`, `trimestre_nota`, `nota`) VALUES
(20, 17, 1, 3, '90'),
(22, 17, 1, 2, '40'),
(24, 17, 1, 1, '100');

-- --------------------------------------------------------

--
-- Table structure for table `profesor`
--

CREATE TABLE `profesor` (
  `id_profesor` int(11) NOT NULL,
  `login_profesor` varchar(30) NOT NULL,
  `clave_profesor` varchar(20) NOT NULL,
  `nombre_profesor` varchar(30) NOT NULL,
  `apellidos_profesor` varchar(50) NOT NULL,
  `email_profesor` varchar(64) NOT NULL,
  `especialidad_profesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profesor`
--

INSERT INTO `profesor` (`id_profesor`, `login_profesor`, `clave_profesor`, `nombre_profesor`, `apellidos_profesor`, `email_profesor`, `especialidad_profesor`) VALUES
(1, 'bowie', '1234', 'David', 'Bowie', 'davbowie@hotmail.com', 2),
(2, 'bowie', '1234', 'David', 'Bowie', 'davbowie@hotmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `nivel_id` (`nivel_id`);

--
-- Indexes for table `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`id_asignatura`),
  ADD KEY `nivel_id` (`nivel_id`,`profesor_id`),
  ADD KEY `profesor_id` (`profesor_id`);

--
-- Indexes for table `asignatura_has_alumno`
--
ALTER TABLE `asignatura_has_alumno`
  ADD PRIMARY KEY (`asignatura_id`,`alumno_id`),
  ADD KEY `asignatura_id` (`asignatura_id`,`alumno_id`),
  ADD KEY `alumno_id` (`alumno_id`);

--
-- Indexes for table `falta_asistencia`
--
ALTER TABLE `falta_asistencia`
  ADD PRIMARY KEY (`id_falAsistencia`),
  ADD KEY `alumno_id` (`alumno_id`,`asignatura_id`),
  ADD KEY `asignatura_id` (`asignatura_id`);

--
-- Indexes for table `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`),
  ADD KEY `asignatura_id` (`asignatura_id`);

--
-- Indexes for table `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`id_nivel`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `aha_alumno_id` (`aha_alumno_id`,`aha_asignatura_id`),
  ADD KEY `aha_asignatura_id` (`aha_asignatura_id`);

--
-- Indexes for table `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id_profesor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `id_asignatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `falta_asistencia`
--
ALTER TABLE `falta_asistencia`
  MODIFY `id_falAsistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nivel`
--
ALTER TABLE `nivel`
  MODIFY `id_nivel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id_profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`nivel_id`) REFERENCES `nivel` (`id_nivel`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `asignatura_ibfk_1` FOREIGN KEY (`profesor_id`) REFERENCES `profesor` (`id_profesor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `asignatura_ibfk_2` FOREIGN KEY (`nivel_id`) REFERENCES `nivel` (`id_nivel`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `asignatura_has_alumno`
--
ALTER TABLE `asignatura_has_alumno`
  ADD CONSTRAINT `asignatura_has_alumno_ibfk_1` FOREIGN KEY (`alumno_id`) REFERENCES `alumno` (`id_alumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `asignatura_has_alumno_ibfk_2` FOREIGN KEY (`asignatura_id`) REFERENCES `asignatura` (`id_asignatura`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `falta_asistencia`
--
ALTER TABLE `falta_asistencia`
  ADD CONSTRAINT `falta_asistencia_ibfk_1` FOREIGN KEY (`alumno_id`) REFERENCES `alumno` (`id_alumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `falta_asistencia_ibfk_2` FOREIGN KEY (`asignatura_id`) REFERENCES `asignatura` (`id_asignatura`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `horario_ibfk_1` FOREIGN KEY (`asignatura_id`) REFERENCES `asignatura` (`id_asignatura`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`aha_alumno_id`) REFERENCES `asignatura_has_alumno` (`alumno_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `nota_ibfk_2` FOREIGN KEY (`aha_asignatura_id`) REFERENCES `asignatura_has_alumno` (`asignatura_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
