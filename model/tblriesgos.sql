-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2023 a las 18:01:36
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
  `titulo` varchar(200) NOT NULL,
  `descrip` text NOT NULL,
  `identificar` text NOT NULL,
  `analizar` text NOT NULL,
  `planear` text NOT NULL,
  `seguir` text NOT NULL,
  `controlar` text NOT NULL,
  `comunicar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblriesgos`
--

INSERT INTO `tblriesgos` (`id`, `titulo`, `descrip`, `identificar`, `analizar`, `planear`, `seguir`, `controlar`, `comunicar`) VALUES
(1, 'Funcionalidad Insuficiente', 'Existe el riesgo de que el software entregado no cumpla con todas las funcionalidades requeridas por el cliente, lo que podría afectar negativamente su uso.','Cualquier aspecto del programa que no cumple con las expectativas del usuario o no funciona de manera adecuada.', '3', 'se debe realizar un análisis exhaustivo de los requisitos del software y los casos de uso, y se debe identificar cualquier problema potencial de funcionalidad. Esto puede incluir problemas de escalabilidad, problemas de rendimiento, problemas de compatibilidad, problemas de seguridad y problemas de usabilidad, entre otros.', 'Se debe establecer un sistema de seguimiento y reporte de problemas, que permita a los usuarios y al equipo de desarrollo identificar y reportar cualquier problema de funcionalidad que se presente.', 'Se debe establecer un sistema de control de calidad para el software, que permita a los desarrolladores y diseñadores revisar y validar el software antes de su lanzamiento', 'Registrar y documentar los problemas de funcionalidad deficiente en un sistema de seguimiento de problemas o en un registro de cambios, para que el equipo de desarrollo pueda abordarlos de manera efectiva.'),
(2, 'Incumplimiento de los plazos', 'Otro riesgo común es que el proveedor no cumpla con los plazos acordados para la entrega del software, lo que podría generar problemas en el plan de trabajo del cliente.', 'Realizar un seguimiento regular y sistemático del progreso del proyecto.', '3', 'Establecer plazos realistas y alcanzables para cada tarea del proyecto. Es importante tener en cuenta los recursos disponibles, la complejidad de la tarea y cualquier otro factor que pueda afectar el tiempo necesario para completarla.', 'establecer un sistema de seguimiento del progreso que permita realizar un seguimiento regular y sistemático del progreso del proyecto. Esto puede incluir herramientas de gestión de proyectos, como diagramas de Gantt o tableros Kanban.', 'establecer indicadores de cumplimiento para cada etapa del proyecto. Estos indicadores deben medir el progreso y permitir comparar el trabajo realizado con el plan establecido.', 'comunicación fluida y constante con todas las partes interesadas. Para ello, se pueden establecer reuniones periódicas, enviar correos electrónicos o utilizar herramientas de comunicación en línea como Slack o Teams.'),
(3, 'Problemas de calidad', 'El software entregado puede tener problemas de calidad, errores y fallas, lo que puede generar costos adicionales para corregirlos.', 'Buscar y localizar los riesgos antes de presentar problemas', '2', 'Trasladar el riesgo en decisiones y acciones a tomar (presente y futuro) e implementarlas para combatir el riesgo.', 'Monitorear el plan y las acciones tomadas midiendo la efectividad para combatir el riesgo. ', 'Corregir las fallas de la planeacion de las acciones contra los riesgos. ', 'Informar y realizar una retroalimentación (Feedback) de las actividades para combatir los actuales y posibles nuevos riesgos encontrados entre los miembros. '),
(4, 'Propiedad Intelectual', 'Si el software entregado utiliza tecnología o propiedad intelectual de terceros, existe el riesgo de que se produzcan conflictos legales que puedan afectar tanto al proveedor como al cliente.', 'Buscar y localizar los riesgos antes de presentar problemas', '5', 'Trasladar el riesgo en decisiones y acciones a tomar (presente y futuro) e implementarlas para combatir el riesgo.', 'Monitorear el plan y las acciones tomadas midiendo la efectividad para combatir el riesgo. ', 'Corregir las fallas de la planeacion de las acciones contra los riesgos. ', 'Informar y realizar una retroalimentación (Feedback) de las actividades para combatir los actuales y posibles nuevos riesgos encontrados entre los miembros. '),
(5, 'Seguridad ', ' El software puede tener vulnerabilidades de seguridad que pueden comprometer la información del cliente o la integridad del software mismo.', 'Buscar y localizar los riesgos antes de presentar problemas', '4', 'Trasladar el riesgo en decisiones y acciones a tomar (presente y futuro) e implementarlas para combatir el riesgo.', 'Monitorear el plan y las acciones tomadas midiendo la efectividad para combatir el riesgo. ', 'Corregir las fallas de la planeacion de las acciones contra los riesgos. ', 'Informar y realizar una retroalimentación (Feedback) de las actividades para combatir los actuales y posibles nuevos riesgos encontrados entre los miembros. '),
(6, 'Cambios en el entorno tecnologico ', 'Existe el riesgo de que el software se vuelva obsoleto rápidamente debido a los cambios en el entorno tecnológico, lo que puede afectar su utilidad a largo plazo.', 'Buscar y localizar los riesgos antes de presentar problemas', '2', 'Trasladar el riesgo en decisiones y acciones a tomar (presente y futuro) e implementarlas para combatir el riesgo.', 'Monitorear el plan y las acciones tomadas midiendo la efectividad para combatir el riesgo. ', 'Corregir las fallas de la planeacion de las acciones contra los riesgos. ', 'Informar y realizar una retroalimentación (Feedback) de las actividades para combatir los actuales y posibles nuevos riesgos encontrados entre los miembros. '),
(7, 'Violaciones de derechos de autor', 'Existe el riesgo de que el software entregado infrinja los derechos de autor de terceros, lo que podría generar costos legales para el proveedor y el cliente.', 'Buscar y localizar los riesgos antes de presentar problemas', '5', 'Trasladar el riesgo en decisiones y acciones a tomar (presente y futuro) e implementarlas para combatir el riesgo.', 'Monitorear el plan y las acciones tomadas midiendo la efectividad para combatir el riesgo. ', 'Corregir las fallas de la planeacion de las acciones contra los riesgos. ', 'Informar y realizar una retroalimentación (Feedback) de las actividades para combatir los actuales y posibles nuevos riesgos encontrados entre los miembros. '),
(8, 'Uso no autorizado', 'El cliente podría usar el software de una manera no autorizada o podría permitir que otros usuarios lo utilicen de manera indebida, lo que podría generar costos legales y de reputación para el proveedor y el cliente.', 'Buscar y localizar los riesgos antes de presentar problemas', '4', 'Trasladar el riesgo en decisiones y acciones a tomar (presente y futuro) e implementarlas para combatir el riesgo.', 'Monitorear el plan y las acciones tomadas midiendo la efectividad para combatir el riesgo. ', 'Corregir las fallas de la planeacion de las acciones contra los riesgos. ', 'Informar y realizar una retroalimentación (Feedback) de las actividades para combatir los actuales y posibles nuevos riesgos encontrados entre los miembros. '),
(9, 'Limitaciones de uso', 'Algunas licencias de uso pueden tener limitaciones en cuanto al número de usuarios, ubicaciones de uso, dispositivos permitidos, etc. Si el cliente no cumple con estas limitaciones, podría estar en incumplimiento del contrato y tener que enfrentar costos adicionales.', 'Buscar y localizar los riesgos antes de presentar problemas', '2', 'Trasladar el riesgo en decisiones y acciones a tomar (presente y futuro) e implementarlas para combatir el riesgo.', 'Monitorear el plan y las acciones tomadas midiendo la efectividad para combatir el riesgo. ', 'Corregir las fallas de la planeacion de las acciones contra los riesgos. ', 'Informar y realizar una retroalimentación (Feedback) de las actividades para combatir los actuales y posibles nuevos riesgos encontrados entre los miembros. '),
(10, 'Cambios en las condiciones de uso', 'El proveedor podría cambiar las condiciones de uso del software, lo que podría afectar la utilidad del software para el cliente.', 'Buscar y localizar los riesgos antes de presentar problemas', '3', 'Trasladar el riesgo en decisiones y acciones a tomar (presente y futuro) e implementarlas para combatir el riesgo.', 'Monitorear el plan y las acciones tomadas midiendo la efectividad para combatir el riesgo. ', 'Corregir las fallas de la planeacion de las acciones contra los riesgos. ', 'Informar y realizar una retroalimentación (Feedback) de las actividades para combatir los actuales y posibles nuevos riesgos encontrados entre los miembros. '),
(11, 'Costos de renovación', 'Algunas licencias de uso pueden requerir renovaciones periódicas, lo que podría generar costos adicionales para el cliente.', 'Buscar y localizar los riesgos antes de presentar problemas', '4', 'Trasladar el riesgo en decisiones y acciones a tomar (presente y futuro) e implementarlas para combatir el riesgo.', 'Monitorear el plan y las acciones tomadas midiendo la efectividad para combatir el riesgo. ', 'Corregir las fallas de la planeacion de las acciones contra los riesgos. ', 'Informar y realizar una retroalimentación (Feedback) de las actividades para combatir los actuales y posibles nuevos riesgos encontrados entre los miembros. ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
