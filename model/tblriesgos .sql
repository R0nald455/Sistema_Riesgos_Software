-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2023 a las 18:20:27
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `riesgos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblriesgos`
--

CREATE TABLE `tblriesgos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `descrip` text NOT NULL,
  `probabilidad` int(1) NOT NULL,
  `impacto` int(1) NOT NULL,
  `riesgo` int(5) NOT NULL,
  `analizar` text NOT NULL,
  `planear` text NOT NULL,
  `seguir` text NOT NULL,
  `controlar` text NOT NULL,
  `comunicar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblriesgos`
--

INSERT INTO `tblriesgos` (`id`, `titulo`, `descrip`, `probabilidad`, `impacto`, `riesgo`, `analizar`, `planear`, `seguir`, `controlar`, `comunicar`) VALUES
(1, 'Requerimientos incompletos', 'Los Requerimientos no se definieron de manera clara y completa', 4, 5, 20, '', '', '', '', ''),
(2, ' Falta de acompañamiento de los usuarios en el levantamiento de requerimientos', ' Usuarios que no colaboran o no se compreten con la definición de los requerimientos', 3, 4, 12, '', '', '', '', ''),
(3, 'Diseño de interfaces incompleto', 'Desconocimiento de todas las interfases que pueden afectar la solución', 2, 3, 6, '', '', '', '', ''),
(4, 'Subestimacion del tamaño de la \r\naplicación.\r\n', 'l realizar el diseño se subestima el \r\nsoftware con respecto a las necesidades del \r\ncliente.\r\n', 2, 3, 6, '', '', '', '', ''),
(5, 'Desconocimiento de la logica de \r\nnegocio\r\n\r\n', 'Mala interpretacion y/o interpretacion \r\nsuperficial de los requisitos para hacer el \r\ndiseño detallado del sistema\r\n', 4, 5, 20, '', '', '', '', ''),
(6, '\n                                                                                  \nFalta de documentacion en \ncodigo fuente\n\n\n', '\r\n                                                                                  \r\nLimitacion del tiempo.\r\nAplicación de malas practicas de desarrollo \r\ny ausencia de revisiones\r\n                                                   \r\n', 2, 2, 4, '', '', '', '', ''),
(7, '\r\n                                                                                  \r\nNo disponibilidad de hardware \r\ny/o software.\r\n\r\n\r\n', '\r\n                                                                                  \r\nEl hardware y/o software esencial no es \r\nentregado a tiempo.\r\n\r\n                                                   \r\n', 3, 5, 15, '', '', '', '', ''),
(8, '\r\n                                                                                  \r\nRetiro de personal con \r\nconocimiento y experiencia \r\n\r\n', '\r\n                                                                                  \r\nAl ser las unicas personas que maneja \r\nciertos temas especificos y/o complejos al \r\nirsen generan retraso en el curso de las \r\ntareas.\r\n\r\n\r\n                                                   \r\n', 3, 3, 9, '', '', '', '', ''),
(9, '\r\n                                                                                  \r\nRetiro de personal con \r\nconocimiento y experiencia \r\n\r\n', '\r\n                                                                                  \r\nLa comunicación entre el personal del area \r\nde desarrollo no es el mas optimo y asi \r\nmismo su sinergia no es la mas eficaz para \r\nel cumplimiento de objetivos en comun.\r\n\r\n\r\n\r\n                                                   \r\n', 2, 4, 8, '', '', '', '', ''),
(10, '\r\n                                                                                  \r\nPérdida de backups\r\n\r\n', '\r\n                                                                                  \r\nPerdida de la copia de seguridad de la \r\nversion de software actual causado por \r\nvirus o por remplazo de version sin sacar la \r\ncopia previamente.\r\n\r\n\r\n\r\n\r\n                                                   \r\n', 2, 3, 6, '', '', '', '', ''),
(11, '\r\n                                                                                  \r\nAlcance de las pruebas No \r\ndefinido completamente.\r\n\r\n\r\n', '\r\n                                                                                  \r\nNo se definio desde el inico de la fase el \r\nalcance debido a que no se tenia \r\ndocumentacion o la que existia era muy \r\nsuperificial o estaba desactualizada\r\n\r\n\r\n\r\n\r\n\r\n                                                   \r\n', 4, 5, 20, '', '', '', '', ''),
(12, '\n                                                                                  \n\nDemoras excesivas en la \nreparación de defectos \nencontrados en las pruebas \n\n\n\n', '\r\n                                                                                  \r\nSolucion de defectos no priorizada por parte \r\nde los desarrolladores lo cual retrasa las \r\npruebas\r\n\r\n\r\n\r\n\r\n                                                   \r\n', 4, 3, 12, '', '', '', '', ''),
(13, '                                                    Vulnerabilidades del software \npresentadas en produccion.', ' Omision de validaciones en la fase de \r\npruebas.\r\nAmbiente produccion como es un ambiente \r\nreal se pueden presentar defectos que no se \r\npresentaron en el ambiente semireal de \r\npruebas.\r\n\r\n\r\n\r\n\r\n                                                   \r\n', 4, 3, 12, '', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblriesgos`
--
ALTER TABLE `tblriesgos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblriesgos`
--
ALTER TABLE `tblriesgos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
