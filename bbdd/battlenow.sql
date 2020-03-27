-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-03-2020 a las 13:06:42
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `battlenow`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

DROP TABLE IF EXISTS `equipos`;
CREATE TABLE IF NOT EXISTS `equipos` (
  `CODEq` varchar(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `FechaCre` date NOT NULL,
  `Palmares` longtext NOT NULL,
  `Juego` varchar(10) NOT NULL,
  `logo` varchar(30) NOT NULL,
  PRIMARY KEY (`Nombre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`CODEq`, `Nombre`, `FechaCre`, `Palmares`, `Juego`, `logo`) VALUES
('PUSHCOD', 'Pushing Gaming', '2017-10-18', 'Es un club profesional de deportes electrónicos que surgió en 2017 a partir de la pasión de dos hermanos por los mismos. Ahora más que nunca, volvemos apostar por este ambicioso proyecto tras la unión con Team Genetic y VersusAll.\r\nDetrás de la cara pública del club, hay una directiva compacta que trabaja día a día para destacar y cumplir nuestro principal objetivo, ser un referente nacional del sector. Actualmente, Pushing, se mueve por las disciplinas de League Of Legends, Rocket League, Fifa y Call Of Duty donde hemos conseguido logros como la primera posición de la SFCO de París.\r\n', 'COD', 'pushing.png'),
('HUNTSCOD', 'CHI Huntsmen', '2019-09-13', 'We are the Huntsmen. We are Chicago.\r\nWe’ve always been on the hunt for glory, but to make it, we’ve had to out hustle everyone. No rest, no days off, always another mountain to climb.\r\n\r\nLike the land we come from, we are ready for anything; rain, wind, sun or snow we’ve been through it all and have the scars to prove it. The Huntsmen are more than just the biggest names in the game. The Huntsmen are tenacious. The Huntsmen are champions.\r\n\r\nLife will give you just enough to be comfortable. We’re never comfortable, because to achieve greatness you must become the Huntsmen, not the hunted.', 'COD', 'chhunts.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

DROP TABLE IF EXISTS `inscripciones`;
CREATE TABLE IF NOT EXISTS `inscripciones` (
  `Equipo` varchar(10) NOT NULL,
  `Liga` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

DROP TABLE IF EXISTS `jugadores`;
CREATE TABLE IF NOT EXISTS `jugadores` (
  `Nick` varchar(50) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Apellidos` varchar(60) NOT NULL,
  `Edad` int(3) NOT NULL,
  `Palmares` longtext NOT NULL,
  `Juego` varchar(50) NOT NULL,
  `Equipo` varchar(50) NOT NULL,
  PRIMARY KEY (`Nick`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`Nick`, `Nombre`, `Apellidos`, `Edad`, `Palmares`, `Juego`, `Equipo`) VALUES
('SXNNY', 'Ludgero', 'Teixeira', 19, '- Top 2 EEG Malta 3.0\r\n- Top 1 4Gaming Portugal CUP 2019\r\n- Top 3 Gamepolis 2019\r\n- Top 1 Lisbon COD Party', 'COD', 'For The Win Esports'),
('KidzZ', 'João ', 'Cruz', 17, '- Top 2 EEG Malta 3.0\r\n- Top 1 4Gaming Portugal CUP 2019\r\n- Top 3 Gamepolis 2019\r\n- Top 1 Lisbon COD Party', 'COD', 'For The Win Esports'),
('ReeaL', 'José', 'Fernandez', 16, '- Top 1 EEG Malta 3.0 2019\r\n- Top 1 Gamepolis 2019\r\n- Top 1 CTP Call of Duty League 2019 Finals\r\n- TOp 1 EEG Malta 2.0 2019', 'COD', 'Pushing Gaming'),
('EriKBooM', 'Eric', 'Ferrer', 17, '- Top 1 EEG Malta 3.0 2019\r\n- Top 2 Gamepolis 2019\r\n- Top 3 CTP Call of Duty League 2019 Finals\r\n- Top 1 SFCO European Challenger 2019 S1\r\n', 'COD', 'Pushing Gaming'),
('Vikul', 'Javier', 'Milagro', 16, '- Top 1 EEG Malta 3.0 2019\r\n- Top 1 Gamepolis 2019\r\n- Top 1 CTP Call of Duty League 2019 Finals \r\n- Top 1 NGL Open Cup\r\n', 'COD', 'Pushing Gaming'),
('RenKoR', 'David ', 'Isern', 17, '- Top 1 EEG Malta 3.0 2019\r\n- Top 1 Gamepolis 2019\r\n- Top 1 CTP Call of Duty League 2019 Finals\r\n- Top 1 EEG Malta 2.0 2019', 'COD', 'Pushing Gaming'),
('Ninjaso', 'Sergio', 'Díaz', 18, '- Top 4 EEG Malta 3.0 2019\r\n- Top 2 Gamepolis 2019\r\n- Top 3 CTP Call of Duty League 2019 Finals\r\n- Top 1 SFCO European Challenger 2019 Season 1 Playoffs', 'COD', 'Pushing Gaming'),
('Scump', 'Seth ', 'Abner', 24, '', 'COD', 'CHI Huntsmen'),
('FormaL', 'Matthew ', 'Piper', 25, '', 'COD', 'CHI Huntsmen'),
('Arcitys', 'Alec ', 'Sanderson', 21, '', 'COD', 'CHI Huntsmen'),
('Envoy', 'Dylan ', 'Hannon', 20, '', 'COD', 'CHI Huntsmen'),
('Gunless', 'Peirce ', 'Hillman', 22, '', 'COD', 'CHI Huntsmen'),
('General', 'Jordon ', 'General', 21, '', 'COD', 'CHI Huntsmen'),
('MBoZe', 'Marcus ', 'Blanks', 24, '', 'COD', 'CHI Huntsmen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ligas`
--

DROP TABLE IF EXISTS `ligas`;
CREATE TABLE IF NOT EXISTS `ligas` (
  `CODLiga` varchar(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Juego` varchar(10) NOT NULL,
  `Descripcion` longtext NOT NULL,
  `logo` varchar(30) NOT NULL,
  PRIMARY KEY (`Nombre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ligas`
--

INSERT INTO `ligas` (`CODLiga`, `Nombre`, `Juego`, `Descripcion`, `logo`) VALUES
('NGLCOD', 'NGL', 'COD', 'National Gaming League (NGL), es una organización profesional dedicada a la creación, gestión y promoción de competiciones de videojuegos.\r\n\r\nUbicados en Barcelona, disponemos de las mejores instalaciones para llevar a cabo la realización de todas nuestras competiciones.', 'masterdivision.png'),
('CDLCOD', 'CDL', 'COD', 'La Call of Duty League es una competición global de esports compuesta por 12 equipos profesionales que representan 11 países y regiones de Norteamérica y Europa. En su temporada inaugural, los equipos se verán las caras en encuentros multijugador de 5c5 de Call of Duty®: Modern Warfare en PlayStation®4. La liga contará con los mejores jugadores de Call of Duty del mundo, que lucharán por ganar el premio definitivo: el campeonato de la Call of Duty League.', 'cdl.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `ID` varchar(50) NOT NULL,
  `Titulo` varchar(50) NOT NULL,
  `Texto` longtext NOT NULL,
  `Imagen` varchar(50) NOT NULL,
  `Autor` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticiasrefe`
--

DROP TABLE IF EXISTS `noticiasrefe`;
CREATE TABLE IF NOT EXISTS `noticiasrefe` (
  `IDNoticia` varchar(50) NOT NULL,
  `Referencia` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidos`
--

DROP TABLE IF EXISTS `partidos`;
CREATE TABLE IF NOT EXISTS `partidos` (
  `Equipo1` varchar(50) NOT NULL,
  `Equipo2` varchar(50) NOT NULL,
  `Hora` varchar(10) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Streaming` varchar(50) NOT NULL,
  `Liga` varchar(50) NOT NULL,
  `ResEq1` int(1) DEFAULT NULL,
  `ResEq2` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `partidos`
--

INSERT INTO `partidos` (`Equipo1`, `Equipo2`, `Hora`, `Fecha`, `Streaming`, `Liga`, `ResEq1`, `ResEq2`) VALUES
('Kawaii Kiwis', 'Eternal', NULL, NULL, 'https://www.twitch.tv/nglspain', 'NGL', NULL, NULL),
('Ravens', 'Xlynx', NULL, NULL, 'https://www.twitch.tv/nglspain', 'NGL', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subscripciones`
--

DROP TABLE IF EXISTS `subscripciones`;
CREATE TABLE IF NOT EXISTS `subscripciones` (
  `User` varchar(20) NOT NULL,
  `Tema` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `User` varchar(50) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Pass` varchar(60) NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  PRIMARY KEY (`User`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`User`, `Correo`, `Pass`, `Tipo`) VALUES
('Miti', 'sergiocasa30@gmail.com', 'SergioSergio', 'Admin'),
('Gonzalo', 'gonzalo@zalo.com', 'Gonzalo11', 'Admin ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
