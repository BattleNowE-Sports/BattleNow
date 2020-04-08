-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-04-2020 a las 11:02:12
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

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
  `Abreviatura` varchar(10) NOT NULL,
  `Juego` varchar(6) NOT NULL,
  `Descripcion` longtext NOT NULL,
  `logo` varchar(30) NOT NULL,
  PRIMARY KEY (`CODEq`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`CODEq`, `Nombre`, `FechaCre`, `Abreviatura`, `Juego`, `Descripcion`, `logo`) VALUES
('FTWECOD', 'FTW Esports', '2020-03-09', 'FTWE', 'COD', 'Ejemplo', 'ejemplo.jpg'),
('HUNTSCOD', 'CHI Huntsmen', '2019-09-13', 'HUNTS', 'COD', 'We are the Huntsmen. We are Chicago.\r\nWe’ve always been on the hunt for glory, but to make it, we’ve had to out hustle everyone. No rest, no days off, always another mountain to climb.\r\n\r\nLike the land we come from, we are ready for anything; rain, wind, sun or snow we’ve been through it all and have the scars to prove it. The Huntsmen are more than just the biggest names in the game. The Huntsmen are tenacious. The Huntsmen are champions.\r\n\r\nLife will give you just enough to be comfortable. We’re never comfortable, because to achieve greatness you must become the Huntsmen, not the hunted.', 'chhunts.png'),
('PUSHCOD', 'Pushing Gaming', '2017-10-18', 'PUSH', 'COD', 'Es un club profesional de deportes electrónicos que surgió en 2017 a partir de la pasión de dos hermanos por los mismos. Ahora más que nunca, volvemos apostar por este ambicioso proyecto tras la unión con Team Genetic y VersusAll.\r\nDetrás de la cara pública del club, hay una directiva compacta que trabaja día a día para destacar y cumplir nuestro principal objetivo, ser un referente nacional del sector. Actualmente, Pushing, se mueve por las disciplinas de League Of Legends, Rocket League, Fifa y Call Of Duty donde hemos conseguido logros como la primera posición de la SFCO de París.\r\n', 'pushing.png'),
('RVNSCOD', 'Ravens', '2020-04-30', 'RVNS', 'COD', 'Ejemplo Ravens', 'Ravens.png'),
('XLYNCOD', 'Xlynx', '2020-04-21', 'XLYN', 'COD', 'Ejemplo Xlynx COD', 'xlynx.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

DROP TABLE IF EXISTS `inscripciones`;
CREATE TABLE IF NOT EXISTS `inscripciones` (
  `Equipo` varchar(10) NOT NULL,
  `Liga` varchar(10) NOT NULL,
  PRIMARY KEY (`Equipo`,`Liga`),
  KEY `FK_CodigoLiga` (`Liga`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscripciones`
--

INSERT INTO `inscripciones` (`Equipo`, `Liga`) VALUES
('FTWECOD', 'CDLCOD'),
('FTWECOD', 'NGLCOD'),
('HUNTSCOD', 'CDLCOD'),
('HUNTSCOD', 'NGLCOD'),
('PUSHCOD', 'CDLCOD'),
('PUSHCOD', 'NGLCOD');

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
  `Equipo` varchar(50) NOT NULL,
  `Imagen` varchar(50) NOT NULL DEFAULT 'Silueta.png',
  `Titularidad` varchar(1) NOT NULL,
  PRIMARY KEY (`Nick`),
  KEY `Equipo` (`Equipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`Nick`, `Nombre`, `Apellidos`, `Edad`, `Palmares`, `Equipo`, `Imagen`, `Titularidad`) VALUES
('Arcitys', 'Alec ', 'Sanderson', 21, '', 'HUNTSCOD', 'Arcitys.png', 'T'),
('Drumpz', 'Eric ', 'Torres', 22, 'Palmares', 'RVNSCOD', 'Silueta.png', 'T'),
('Envoy', 'Dylan ', 'Hannon', 20, '', 'HUNTSCOD', 'Envoy.png', 'T'),
('EriKBooM', 'Eric', 'Ferrer', 17, '- Top 1 EEG Malta 3.0 2019\r\n- Top 2 Gamepolis 2019\r\n- Top 3 CTP Call of Duty League 2019 Finals\r\n- Top 1 SFCO European Challenger 2019 S1\r\n', 'PUSHCOD', 'Erikboom.png', 'T'),
('FormaL', 'Matthew ', 'Piper', 25, '', 'HUNTSCOD', 'FormaL.png', 'T'),
('General', 'Jordon ', 'General', 21, '', 'HUNTSCOD', 'Silueta.png', 'S'),
('Gunless', 'Peirce ', 'Hillman', 22, '', 'HUNTSCOD', 'Gunless.png', 'T'),
('KidzZ', 'João ', 'Cruz', 17, '- Top 2 EEG Malta 3.0\r\n- Top 1 4Gaming Portugal CUP 2019\r\n- Top 3 Gamepolis 2019\r\n- Top 1 Lisbon COD Party', 'FTWECOD', 'Silueta.png', 'T'),
('MBoZe', 'Marcus ', 'Blanks', 24, '', 'HUNTSCOD', 'Silueta.png', 'S'),
('Ninjaso', 'Sergio', 'Díaz', 18, '- Top 4 EEG Malta 3.0 2019\r\n- Top 2 Gamepolis 2019\r\n- Top 3 CTP Call of Duty League 2019 Finals\r\n- Top 1 SFCO European Challenger 2019 Season 1 Playoffs', 'PUSHCOD', 'Ninjaso.png', 'T'),
('ReeaL', 'José', 'Fernandez', 16, '- Top 1 EEG Malta 3.0 2019\r\n- Top 1 Gamepolis 2019\r\n- Top 1 CTP Call of Duty League 2019 Finals\r\n- TOp 1 EEG Malta 2.0 2019', 'PUSHCOD', 'ReeaL.png', 'T'),
('RenKoR', 'David ', 'Isern', 17, '- Top 1 EEG Malta 3.0 2019\r\n- Top 1 Gamepolis 2019\r\n- Top 1 CTP Call of Duty League 2019 Finals\r\n- Top 1 EEG Malta 2.0 2019', 'PUSHCOD', 'Renkor.png', 'T'),
('Scump', 'Seth ', 'Abner', 24, '', 'HUNTSCOD', 'Scump.png', 'T'),
('Stirpeeh', 'Javier ', 'Lázaro Gómez', 20, 'Xlynx palmares COD', 'XLYNCOD', 'Silueta.png', 'T'),
('SXNNY', 'Ludgero', 'Teixeira', 19, '- Top 2 EEG Malta 3.0\r\n- Top 1 4Gaming Portugal CUP 2019\r\n- Top 3 Gamepolis 2019\r\n- Top 1 Lisbon COD Party', 'FTWECOD', 'Sxnny.png', 'T'),
('Vikul', 'Javier', 'Milagro', 16, '- Top 1 EEG Malta 3.0 2019\r\n- Top 1 Gamepolis 2019\r\n- Top 1 CTP Call of Duty League 2019 Finals \r\n- Top 1 NGL Open Cup\r\n', 'PUSHCOD', 'Vikul.png', 'T');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ligas`
--

DROP TABLE IF EXISTS `ligas`;
CREATE TABLE IF NOT EXISTS `ligas` (
  `CODLiga` varchar(10) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Abreviatura` varchar(6) NOT NULL,
  `Juego` varchar(10) NOT NULL,
  `Descripcion` longtext NOT NULL,
  `logo` varchar(30) NOT NULL,
  PRIMARY KEY (`CODLiga`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ligas`
--

INSERT INTO `ligas` (`CODLiga`, `Nombre`, `Abreviatura`, `Juego`, `Descripcion`, `logo`) VALUES
('CDLCOD', 'Call of Duty League', 'CDL', 'COD', 'La Call of Duty League es una competición global de esports compuesta por 12 equipos profesionales que representan 11 países y regiones de Norteamérica y Europa. En su temporada inaugural, los equipos se verán las caras en encuentros multijugador de 5c5 de Call of Duty®: Modern Warfare en PlayStation®4. La liga contará con los mejores jugadores de Call of Duty del mundo, que lucharán por ganar el premio definitivo: el campeonato de la Call of Duty League.', 'cdl.png'),
('ESLPL', 'ESL Pro League', 'ESL', 'CSGO', 'ESL HAHA', 'esl.png'),
('NGLCOD', 'National Gaming League', 'NGL', 'COD', 'National Gaming League (NGL), es una organización profesional dedicada a la creación, gestión y promoción de competiciones de videojuegos.\r\n\r\nUbicados en Barcelona, disponemos de las mejores instalaciones para llevar a cabo la realización de todas nuestras competiciones.', 'masterdivision.png'),
('SLOLOL', 'SuperLigaOrange LOL', 'SLOLOL', 'LOL', 'La Superliga Orange es la competición oficial de League of Legends en España.', 'SLOLOL.png');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticiasrefe`
--

DROP TABLE IF EXISTS `noticiasrefe`;
CREATE TABLE IF NOT EXISTS `noticiasrefe` (
  `IDNoticia` varchar(50) NOT NULL,
  `Referencia` varchar(50) NOT NULL,
  PRIMARY KEY (`IDNoticia`,`Referencia`),
  KEY `FK_ReferenciaLiga` (`Referencia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidos`
--

DROP TABLE IF EXISTS `partidos`;
CREATE TABLE IF NOT EXISTS `partidos` (
  `CODPartido` varchar(50) NOT NULL,
  `Equipo1` varchar(50) NOT NULL,
  `Equipo2` varchar(50) NOT NULL,
  `Hora` varchar(10) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Streaming` varchar(200) NOT NULL,
  `CODLiga` varchar(50) NOT NULL,
  `ResEq1` int(1) DEFAULT NULL,
  `ResEq2` int(1) DEFAULT NULL,
  `Mapa1` varchar(40) DEFAULT NULL,
  `Mapa2` varchar(40) DEFAULT NULL,
  `Mapa3` varchar(40) DEFAULT NULL,
  `Mapa4` varchar(40) DEFAULT NULL,
  `Mapa5` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`CODPartido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `partidos`
--

INSERT INTO `partidos` (`CODPartido`, `Equipo1`, `Equipo2`, `Hora`, `Fecha`, `Streaming`, `CODLiga`, `ResEq1`, `ResEq2`, `Mapa1`, `Mapa2`, `Mapa3`, `Mapa4`, `Mapa5`) VALUES
('CDLCOD1718CL', 'CHI Huntsmen', 'LA Guerrillas', '18:00', '2020-04-17', 'https://www.youtube.com/channel/UCbLIqv9Puhyp9_ZjVtfOy7w', 'CDLCOD', 3, 1, NULL, NULL, NULL, NULL, NULL),
('ESLPL2215PR', 'Pushing Gaming', 'Ravens', '15:00', '2020-05-22', 'https://cod-esports.gamepedia.com/Call_of_Duty_League/2020_Season/Week_4', 'ESLPL', 3, 2, NULL, NULL, NULL, NULL, NULL),
('NGLCOD1817PF', 'CHI Huntsmen', 'FTW Esports', '17:00', '2020-04-18', 'http://localhost/BattleNow/index.php/Home/partidas/Todo', 'NGLCOD', 3, 0, NULL, NULL, NULL, NULL, NULL),
('NGLCOD2517PF', 'Pushing Gaming', 'FTW Esports', '17:00', '2020-04-25', 'https://www.youtube.com/watch?v=CDV2AwOeeis', 'NGLCOD', 2, 3, 'Gun Runner', 'Hackney Yard', 'Gun Runner', 'Rammaza', 'Gun Runner'),
('NGLCOD3012RX', 'Ravens', 'Xlynx', '12:30', '2020-03-30', 'https://www.twitch.tv/nglspain', 'NGLCOD', 2, 3, NULL, NULL, NULL, NULL, NULL),
('NGLCOD3014CP', 'CHI Huntsmen', 'Pushing Gaming', '14:30', '2020-04-30', 'https://www.youtube.com/watch?v=lSm4QZqN8cA', 'NGLCOD', 3, 1, 'Rammaza', 'Piccadilly', 'Gun Runner', 'St Petrograd', 'Hackney Yard'),
('NGLCOD3110KE', 'Kawaii Kiwis', 'Eternal', '10:00', '2020-03-31', 'https://www.twitch.tv/nglspain', 'NGLCOD', 3, 2, NULL, NULL, NULL, NULL, NULL),
('SLOLOL1812VE', 'Veteranos', 'Eternal', '12:30', '2020-06-18', 'https://www.youtube.com/watch?v=NadsXYpNXiQ', 'SLOLOL', 3, 1, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subscripciones`
--

DROP TABLE IF EXISTS `subscripciones`;
CREATE TABLE IF NOT EXISTS `subscripciones` (
  `User` varchar(20) NOT NULL,
  `Tema` varchar(50) NOT NULL,
  PRIMARY KEY (`User`,`Tema`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`User`, `Correo`, `Pass`, `Tipo`) VALUES
('Gonzalo', 'gonzalo@zalo.com', 'Gonzalo11', 'Admin '),
('Miti', 'sergiocasa30@gmail.com', 'SergioSergio', 'Admin'),
('SergioCM ', 'ser@aa.com', '', '');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD CONSTRAINT `FK_CodigoEquipo` FOREIGN KEY (`Equipo`) REFERENCES `equipos` (`CODEq`),
  ADD CONSTRAINT `FK_CodigoLiga` FOREIGN KEY (`Liga`) REFERENCES `ligas` (`CODLiga`);

--
-- Filtros para la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD CONSTRAINT `FK_EquipoDeJugador` FOREIGN KEY (`Equipo`) REFERENCES `equipos` (`CODEq`);

--
-- Filtros para la tabla `noticiasrefe`
--
ALTER TABLE `noticiasrefe`
  ADD CONSTRAINT `FK_IdentificadorNoticia` FOREIGN KEY (`IDNoticia`) REFERENCES `noticias` (`ID`),
  ADD CONSTRAINT `FK_ReferenciaEquipo` FOREIGN KEY (`Referencia`) REFERENCES `equipos` (`CODEq`),
  ADD CONSTRAINT `FK_ReferenciaJugador` FOREIGN KEY (`Referencia`) REFERENCES `jugadores` (`Nick`),
  ADD CONSTRAINT `FK_ReferenciaLiga` FOREIGN KEY (`Referencia`) REFERENCES `ligas` (`CODLiga`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
