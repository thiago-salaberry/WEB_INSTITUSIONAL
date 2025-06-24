-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2025 a las 23:51:58
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
-- Base de datos: `web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(33) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admin_user`
--

INSERT INTO `admin_user` (`id`, `user_name`, `password`) VALUES
(1, 'maxi', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directivos`
--

CREATE TABLE `directivos` (
  `id_dir` int(11) NOT NULL,
  `img_url` varchar(33) NOT NULL,
  `nombre` varchar(33) NOT NULL,
  `cargo` varchar(70) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `directivos`
--

INSERT INTO `directivos` (`id_dir`, `img_url`, `nombre`, `cargo`, `descripcion`) VALUES
(1, 'img/Directivos/torres.png', 'Ezequiel Torres', 'Director', 'Es el encargado y responsable de la institución. Desempeña un papel multifacético que abarca desde el liderazgo y la visión hasta la gestión de recursos y la mejora del rendimiento estudiantil. Su objetivo principal es crear un entorno propicio para el aprendizaje y el desarrollo de los estudiantes, tanto académico como personal.'),
(2, 'img/Directivos/segnini.png', 'Daniel Segnini', 'Vicedirector', 'Es el segundo encargado y responsable de la institución.'),
(3, 'img/Directivos/bonetti.png', 'Mariana Bonetti', 'Vicedirectora', 'Es la segunda encargada y responsable de la institución.'),
(4, 'img/Directivos/cuervo.png', 'Karin Cuervo', 'Vicedirectora', 'Es la segunda encargada y responsable de la institución.'),
(5, 'img/Directivos/lemos.png', 'Esteban Lemos', 'Jefe de Area', 'Supervisa los talleres y coordina pasantías.'),
(6, 'img/Directivos/hsia.png', 'Alejandro Hsia', 'Jefe de Departamento Técnico Profesional', 'Coordina las materias y actividades que se realizan en los talleres y laboratorios.'),
(7, 'img/Directivos/nora.png', 'Nora Cavia', 'Jefa de Departamento de Educación Física', 'Es la encargada y responsable de las actividades y profesores del área.'),
(8, 'img/Directivos/dunjo.png', 'Nancy Dunjo', 'Jefa de Departamendo de Comunicaciones', 'Planificar y coordinar proyectos entre distintas areas y/o departamentos ( interdiciplinarios e interdepartamentales) supervisar y acompañar a los docentes.'),
(9, 'img/Directivos/gutierrez.png', 'Matias Gutierrez', 'Jefe de Departamento de Ciencias Naturales y Exactas', 'Es el encargado y responsable de la coordinación y realización de las materias de dicha área'),
(10, 'img/Directivos/cozzani.png', 'Diana Cozzani', 'Jefa de Departamento de Ciencias Sociales\r\n', 'Es la encargada de la coordinación y organización de las materias y profesores del área de sociales.'),
(11, 'img/Directivos/victorelo.png', 'Veronica Victorello', 'Jefa de Preceptoria', 'Es la encargada de la organización de las y los preceptores.'),
(12, 'img/Directivos/gomez.png', 'Cristina Goméz', 'Secretaría', 'Es la encargada de las tareas administrativas de la institución.'),
(13, 'img/Directivos/basack.png', 'Alejandra Basack', 'Prosecretaria', 'Es la segunda encargada de las tareas administrativas de la institución.'),
(14, 'img/Directivos/lopez.png', 'Martín Lopez', 'Encargado en Jefe y apoyo Informatico\r\n', 'Es el encargado del mantenimiento y correcto funcionamiento de los equipos y servidores.'),
(15, 'img/Directivos/miguelMartin.png', 'Alejandro Miguel San Martín', 'Padrino', 'Brinda su apoyo a la institución. apadrinada, ayudandola en todo lo que esté a su alcance');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `nombre` varchar(33) NOT NULL,
  `mensaje` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mail`
--

INSERT INTO `mail` (`id`, `nombre`, `mensaje`, `mail`) VALUES
(9, 'hola', 'hola', 'hola@gmail.com'),
(10, 'thomas', 'thrt', 'hola@gmail.com'),
(11, 'hjgkij', 'ghjfhgbf', 'jiktjhio@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `directivos`
--
ALTER TABLE `directivos`
  ADD PRIMARY KEY (`id_dir`);

--
-- Indices de la tabla `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `directivos`
--
ALTER TABLE `directivos`
  MODIFY `id_dir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
