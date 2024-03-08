-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2024 a las 15:05:19
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `maternidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atencion_parto`
--

CREATE TABLE `atencion_parto` (
  `id_atencion_parto` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `ips` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `forma` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `semanas` double NOT NULL,
  `fecha_parto` date NOT NULL,
  `planificacion` int(11) NOT NULL,
  `observacion` longtext COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_alertas`
--

CREATE TABLE `cfg_alertas` (
  `id_cfg_alertas` int(11) NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `parametro` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `campo` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `valor` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_alertas`
--

INSERT INTO `cfg_alertas` (`id_cfg_alertas`, `descripcion`, `parametro`, `campo`, `valor`, `estado`) VALUES
(1, 'Consume sustancias', 'MAYOR', 'sustancias', '0', 1),
(2, 'Menor de edad', 'MENOR', 'edad', '18', 1),
(3, 'Violencia de genero', 'MAYOR', 'violencia', '0', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_consumo_frecuencia`
--

CREATE TABLE `cfg_consumo_frecuencia` (
  `id_cfg_consumo_frecuencia` int(11) NOT NULL,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_consumo_frecuencia`
--

INSERT INTO `cfg_consumo_frecuencia` (`id_cfg_consumo_frecuencia`, `codigo`, `descripcion`, `estado`) VALUES
(1, '1', 'Semanal', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_consumo_tipospa`
--

CREATE TABLE `cfg_consumo_tipospa` (
  `id_cfg_consumo_tipospa` int(11) NOT NULL,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_consumo_tipospa`
--

INSERT INTO `cfg_consumo_tipospa` (`id_cfg_consumo_tipospa`, `codigo`, `descripcion`, `estado`) VALUES
(1, '1', 'Cocaina', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_discapacidad`
--

CREATE TABLE `cfg_discapacidad` (
  `id_cfg_discapacidad` int(11) NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_discapacidad`
--

INSERT INTO `cfg_discapacidad` (`id_cfg_discapacidad`, `descripcion`, `estado`, `codigo`) VALUES
(1, 'Visual', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_dx`
--

CREATE TABLE `cfg_dx` (
  `id_cfg_dx` int(11) NOT NULL,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_dx`
--

INSERT INTO `cfg_dx` (`id_cfg_dx`, `codigo`, `descripcion`, `estado`) VALUES
(1, '1', 'Dx prueba', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_educativo`
--

CREATE TABLE `cfg_educativo` (
  `id_cfg_educativo` int(11) NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_educativo`
--

INSERT INTO `cfg_educativo` (`id_cfg_educativo`, `descripcion`, `estado`, `codigo`) VALUES
(1, 'Bachiller', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_eps`
--

CREATE TABLE `cfg_eps` (
  `id_cfg_eps` int(11) NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_eps`
--

INSERT INTO `cfg_eps` (`id_cfg_eps`, `descripcion`, `estado`, `codigo`) VALUES
(1, 'Sura', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_estado`
--

CREATE TABLE `cfg_estado` (
  `id_cfg_estado` int(11) NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_estado`
--

INSERT INTO `cfg_estado` (`id_cfg_estado`, `descripcion`, `estado`, `codigo`) VALUES
(1, 'General', 0, '001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_estado_conciencia`
--

CREATE TABLE `cfg_estado_conciencia` (
  `id_cfg_estado_conciencia` int(11) NOT NULL,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_estado_conciencia`
--

INSERT INTO `cfg_estado_conciencia` (`id_cfg_estado_conciencia`, `codigo`, `descripcion`, `estado`) VALUES
(1, '1', 'Estado conciencia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_etnia`
--

CREATE TABLE `cfg_etnia` (
  `id_cfg_etnia` int(11) NOT NULL,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_etnia`
--

INSERT INTO `cfg_etnia` (`id_cfg_etnia`, `codigo`, `descripcion`, `estado`) VALUES
(1, '1', 'Afro', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_genero`
--

CREATE TABLE `cfg_genero` (
  `id_cfg_genero` int(11) NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_genero`
--

INSERT INTO `cfg_genero` (`id_cfg_genero`, `descripcion`, `estado`, `codigo`) VALUES
(1, 'Femenino', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_interconsulta`
--

CREATE TABLE `cfg_interconsulta` (
  `id_cfg_interconsulta` int(11) NOT NULL,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_interconsulta`
--

INSERT INTO `cfg_interconsulta` (`id_cfg_interconsulta`, `codigo`, `descripcion`, `estado`) VALUES
(1, '1', 'Interconsulta', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_ips`
--

CREATE TABLE `cfg_ips` (
  `id_cfg_ips` int(11) NOT NULL,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_ips`
--

INSERT INTO `cfg_ips` (`id_cfg_ips`, `codigo`, `descripcion`, `estado`) VALUES
(1, '1', 'IPS', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_municipio`
--

CREATE TABLE `cfg_municipio` (
  `id_cfg_municipio` int(11) NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_municipio`
--

INSERT INTO `cfg_municipio` (`id_cfg_municipio`, `descripcion`, `estado`, `codigo`) VALUES
(1, 'Armenia', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_otras_consultas`
--

CREATE TABLE `cfg_otras_consultas` (
  `id_cfg_otras_consultas` int(11) NOT NULL,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_otras_consultas`
--

INSERT INTO `cfg_otras_consultas` (`id_cfg_otras_consultas`, `codigo`, `descripcion`, `estado`) VALUES
(1, '2', 'Otras consultas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_paraclinicos`
--

CREATE TABLE `cfg_paraclinicos` (
  `id_cfg_paraclinicos` int(11) NOT NULL,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `minimo` int(11) NOT NULL,
  `maximo` int(11) NOT NULL,
  `unidad` varchar(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_paraclinicos`
--

INSERT INTO `cfg_paraclinicos` (`id_cfg_paraclinicos`, `codigo`, `descripcion`, `estado`, `minimo`, `maximo`, `unidad`) VALUES
(1, '1', 'Paraclinico prueba', 1, 10, 30, 'L');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_planificacion`
--

CREATE TABLE `cfg_planificacion` (
  `id_cfg_planificacion` int(11) NOT NULL,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_planificacion`
--

INSERT INTO `cfg_planificacion` (`id_cfg_planificacion`, `codigo`, `descripcion`, `estado`) VALUES
(1, '1', 'Pastas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_poblacion`
--

CREATE TABLE `cfg_poblacion` (
  `id_cfg_poblacion` int(11) NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_poblacion`
--

INSERT INTO `cfg_poblacion` (`id_cfg_poblacion`, `descripcion`, `estado`, `codigo`) VALUES
(1, 'Prueba', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_regimen`
--

CREATE TABLE `cfg_regimen` (
  `id_cfg_regimen` int(11) NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_regimen`
--

INSERT INTO `cfg_regimen` (`id_cfg_regimen`, `descripcion`, `estado`, `codigo`) VALUES
(1, 'Prueba', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_resultados`
--

CREATE TABLE `cfg_resultados` (
  `id_cfg_resultados` int(11) NOT NULL,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_riesgo`
--

CREATE TABLE `cfg_riesgo` (
  `id_cfg_riesgo` int(11) NOT NULL,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_riesgo`
--

INSERT INTO `cfg_riesgo` (`id_cfg_riesgo`, `codigo`, `descripcion`, `estado`) VALUES
(1, '1', 'Riesgo uno', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_sexo`
--

CREATE TABLE `cfg_sexo` (
  `id_cfg_sexo` int(11) NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_sexo`
--

INSERT INTO `cfg_sexo` (`id_cfg_sexo`, `descripcion`, `estado`, `codigo`) VALUES
(1, 'Femenino', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_tardio`
--

CREATE TABLE `cfg_tardio` (
  `id_cfg_tardio` int(11) NOT NULL,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_tardio`
--

INSERT INTO `cfg_tardio` (`id_cfg_tardio`, `codigo`, `descripcion`, `estado`) VALUES
(1, '1', 'Tardio uno', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_tipodoc`
--

CREATE TABLE `cfg_tipodoc` (
  `id_cfg_tipodoc` int(11) NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(1) NOT NULL DEFAULT 1,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_tipodoc`
--

INSERT INTO `cfg_tipodoc` (`id_cfg_tipodoc`, `descripcion`, `estado`, `codigo`) VALUES
(1, 'Cedula de ciudadanía', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_tipo_parto`
--

CREATE TABLE `cfg_tipo_parto` (
  `id_cfg_tipo_parto` int(11) NOT NULL,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_tipo_parto`
--

INSERT INTO `cfg_tipo_parto` (`id_cfg_tipo_parto`, `codigo`, `descripcion`, `estado`) VALUES
(1, '1', 'Tipo parto', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_usuarios_roles`
--

CREATE TABLE `cfg_usuarios_roles` (
  `id_cfg_usuarios_roles` int(11) NOT NULL,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_usuarios_roles`
--

INSERT INTO `cfg_usuarios_roles` (`id_cfg_usuarios_roles`, `codigo`, `descripcion`, `estado`) VALUES
(1, '1', 'Admin', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_vacunas`
--

CREATE TABLE `cfg_vacunas` (
  `id_cfg_vacunas` int(11) NOT NULL,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_vacunas`
--

INSERT INTO `cfg_vacunas` (`id_cfg_vacunas`, `codigo`, `descripcion`, `estado`) VALUES
(1, '1', 'COVID', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_voluntaria_causa`
--

CREATE TABLE `cfg_voluntaria_causa` (
  `id_cfg_voluntaria_causa` int(11) NOT NULL,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_voluntaria_causa`
--

INSERT INTO `cfg_voluntaria_causa` (`id_cfg_voluntaria_causa`, `codigo`, `descripcion`, `estado`) VALUES
(1, '1', 'Accidente', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_voluntaria_dimension`
--

CREATE TABLE `cfg_voluntaria_dimension` (
  `id_cfg_voluntaria_dimension` int(11) NOT NULL,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_voluntaria_dimension`
--

INSERT INTO `cfg_voluntaria_dimension` (`id_cfg_voluntaria_dimension`, `codigo`, `descripcion`, `estado`) VALUES
(1, '1', 'Prueba', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfg_zona`
--

CREATE TABLE `cfg_zona` (
  `id_cfg_zona` int(11) NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cfg_zona`
--

INSERT INTO `cfg_zona` (`id_cfg_zona`, `descripcion`, `estado`, `codigo`) VALUES
(1, 'Urbana', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control_prenatal`
--

CREATE TABLE `control_prenatal` (
  `id_control_prenatal` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `prueba_embarazo` int(11) NOT NULL,
  `ingreso_tardio` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `created_at` datetime NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `control_prenatal`
--

INSERT INTO `control_prenatal` (`id_control_prenatal`, `id_paciente`, `prueba_embarazo`, `ingreso_tardio`, `fecha_ingreso`, `created_at`, `estado`) VALUES
(1, 1, 1, '1', '2023-05-01', '2023-05-01 05:27:37', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control_recien_nacido_madre`
--

CREATE TABLE `control_recien_nacido_madre` (
  `id_control_recien_nacido_madre` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `tipo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_salida_binomio` date NOT NULL,
  `fecha_consejeria_lactancia` date NOT NULL,
  `inicio_lactancia_materna` date NOT NULL,
  `fecha_atencion_puerperio` date NOT NULL,
  `fecha_consulta_planificacion` date NOT NULL,
  `observacion` longtext COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `control_recien_nacido_madre`
--

INSERT INTO `control_recien_nacido_madre` (`id_control_recien_nacido_madre`, `id_paciente`, `tipo`, `fecha_salida_binomio`, `fecha_consejeria_lactancia`, `inicio_lactancia_materna`, `fecha_atencion_puerperio`, `fecha_consulta_planificacion`, `observacion`, `created_at`) VALUES
(1, 1, '1', '2023-05-01', '2023-05-02', '2023-05-03', '2023-05-04', '2023-05-05', 'jgjghkjjhkj', '2023-05-01 06:22:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_basicos`
--

CREATE TABLE `datos_basicos` (
  `id` int(11) NOT NULL,
  `numero_documento` bigint(20) NOT NULL,
  `nombres` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `tipodoc` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `sexo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `genero` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `mpio` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `zona` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `poblacion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `discapacidad` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `etnia` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `educacion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `eps` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `regimen` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `datos_basicos`
--

INSERT INTO `datos_basicos` (`id`, `numero_documento`, `nombres`, `apellidos`, `estado`, `tipodoc`, `sexo`, `genero`, `fecha_nac`, `telefono`, `mpio`, `zona`, `poblacion`, `discapacidad`, `etnia`, `educacion`, `eps`, `regimen`, `created_at`) VALUES
(1, 1096039150, 'NIKOLLAI', 'GAMUS', 1, '1', '1', '1', '1996-08-24', 3144167999, '1', '1', '1', '1', '1', '1', '1', '1', '2023-05-01 17:01:59'),
(2, 12345, 'Pepita', 'Perez', 1, '1', '1', '1', '2008-06-10', 1234567, '1', '1', '1', '1', '1', '1', '1', '1', '2023-05-01 18:39:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formula_obstetrica`
--

CREATE TABLE `formula_obstetrica` (
  `id_formula_obstetrica` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `gestacion` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `parto` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `cesarea` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `aborto` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `mortinatos` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `vivos` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `interginesico` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `formula_obstetrica`
--

INSERT INTO `formula_obstetrica` (`id_formula_obstetrica`, `id_paciente`, `gestacion`, `parto`, `cesarea`, `aborto`, `mortinatos`, `vivos`, `interginesico`, `created_at`, `estado`) VALUES
(3, 1, 'g', 'p', 'c', 'a', 'm', 'v', 'p', '2023-05-01 05:33:24', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensuales`
--

CREATE TABLE `mensuales` (
  `id_mensuales` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `mes` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `peso` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `fc` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `ta` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `au` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `fcf` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `imc` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `edema_minf` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `conciencia` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `dx` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `observacion` longtext COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `mensuales`
--

INSERT INTO `mensuales` (`id_mensuales`, `id_paciente`, `mes`, `fecha`, `peso`, `fc`, `ta`, `au`, `fcf`, `imc`, `edema_minf`, `conciencia`, `dx`, `observacion`, `created_at`) VALUES
(3, 1, '5', '2023-04-05', '45', '4', '4', '4', '4', '4', '4', '1', '1', '4545646', '2023-05-01 05:16:56'),
(4, 1, '9-1', '2023-05-02', '54', '5', '5', '5', '5', '5', '5', '1', '1', 'hhgjghm', '2023-05-01 05:22:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otras_consultas`
--

CREATE TABLE `otras_consultas` (
  `id_otras_consultas` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `fecha_consulta` date NOT NULL,
  `dx` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `observacion` longtext COLLATE utf8_spanish2_ci NOT NULL,
  `codigo_consulta` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `otras_consultas`
--

INSERT INTO `otras_consultas` (`id_otras_consultas`, `id_paciente`, `fecha_consulta`, `dx`, `observacion`, `codigo_consulta`, `created_at`) VALUES
(10, 1, '2023-05-01', '1', 'jnhm', '2', '2023-05-01 05:57:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paraclinicos`
--

CREATE TABLE `paraclinicos` (
  `id_paraclinicos` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `resultado` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `observacion` text COLLATE utf8_spanish2_ci NOT NULL,
  `tipo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `paraclinicos`
--

INSERT INTO `paraclinicos` (`id_paraclinicos`, `id_paciente`, `resultado`, `fecha`, `observacion`, `tipo`, `created_at`) VALUES
(17, 1, '123', '2023-05-01', 'bgghn', '1', '2023-05-01 05:56:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paraclinicos_preconcepcional`
--

CREATE TABLE `paraclinicos_preconcepcional` (
  `id_paraclinicos_preconcepcional` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `numero_consulta` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `resultado` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `fecha` date NOT NULL,
  `observacion` longtext COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `paraclinicos_preconcepcional`
--

INSERT INTO `paraclinicos_preconcepcional` (`id_paraclinicos_preconcepcional`, `id_paciente`, `numero_consulta`, `tipo`, `resultado`, `created_at`, `fecha`, `observacion`) VALUES
(1, 1, '1', '1', '15', '2023-05-01 05:11:14', '2023-05-01', 'Prueba'),
(2, 1, '2', '1', '15', '2023-05-01 05:11:34', '2023-05-02', 'dsffgrg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recien_nacido`
--

CREATE TABLE `recien_nacido` (
  `id_recien_nacido` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `sexo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `peso` double NOT NULL,
  `talla` double NOT NULL,
  `vacunas` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `abdominal` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `pinzamiento` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `min5` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `min10` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `cefalico` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `fec_tsh` date NOT NULL,
  `rep_tsh` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `observacion` longtext COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `recien_nacido`
--

INSERT INTO `recien_nacido` (`id_recien_nacido`, `id_paciente`, `sexo`, `peso`, `talla`, `vacunas`, `abdominal`, `pinzamiento`, `min5`, `min10`, `cefalico`, `fec_tsh`, `rep_tsh`, `fecha`, `observacion`, `created_at`) VALUES
(2, 1, '1', 45, 34, ' bvcnb', 'nvbn', 'nbvn', 'nbvn', 'bvn', 'nbvn', '2023-05-01', 'bvnbv', '2023-05-01', 'nbvnbvn', '2023-05-01 06:13:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `riesgo`
--

CREATE TABLE `riesgo` (
  `id_riesgo` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `fum` date NOT NULL,
  `fpp` date NOT NULL,
  `dias_parto` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `edad_gestacional` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `alarma_parto` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `codigo_riesgo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `riesgo`
--

INSERT INTO `riesgo` (`id_riesgo`, `id_paciente`, `fum`, `fpp`, `dias_parto`, `edad_gestacional`, `alarma_parto`, `codigo_riesgo`, `created_at`) VALUES
(2, 1, '2022-08-02', '2023-05-09', '7', '38.857', 'Semana de parto', '1', '2023-05-01 06:00:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sustancias_psicoactivas`
--

CREATE TABLE `sustancias_psicoactivas` (
  `id_sustancias_psicoactivas` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `cod_sustancia` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `cod_frecuencia` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_ultimo_consumo` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `sustancias_psicoactivas`
--

INSERT INTO `sustancias_psicoactivas` (`id_sustancias_psicoactivas`, `id_paciente`, `cod_sustancia`, `cod_frecuencia`, `fecha_ultimo_consumo`, `created_at`) VALUES
(2, 1, '1', '1', '2023-04-21', '2023-05-01 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terminacion_voluntaria`
--

CREATE TABLE `terminacion_voluntaria` (
  `id_terminacion_voluntaria` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `causal` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `dimension` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `observacion` text COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `rol` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `email`, `usuario`, `password`, `estado`, `rol`) VALUES
(1, 'Usuario prueba', 'admin', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunacion`
--

CREATE TABLE `vacunacion` (
  `id_vacunacion` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `otra_vacuna` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `numero_dosis` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_vacunacion` date NOT NULL,
  `cod_vacuna` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `vacunacion`
--

INSERT INTO `vacunacion` (`id_vacunacion`, `id_paciente`, `otra_vacuna`, `numero_dosis`, `fecha_vacunacion`, `cod_vacuna`, `created_at`) VALUES
(1, 1, '', '1', '2023-05-01', '1', '2023-05-01 00:00:00'),
(2, 1, 'Fiebre amarilla', '2', '2023-04-04', '-1', '2023-05-01 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `violencia_intrafamiliar`
--

CREATE TABLE `violencia_intrafamiliar` (
  `id_violencia_intrafamiliar` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `antibiotico` int(2) NOT NULL,
  `antiretrovirales` int(2) NOT NULL,
  `remision_ive` int(2) NOT NULL,
  `toma_rapida_vih` int(2) NOT NULL,
  `toma_rapida_hb` int(2) NOT NULL,
  `toma_rapida_hc` int(2) NOT NULL,
  `toma_rapida_sifilis` int(2) NOT NULL,
  `cadena_de_custodia` int(2) NOT NULL,
  `derechos_de_victimas` int(2) NOT NULL,
  `ruta_con_entidades_territoriales` int(2) NOT NULL,
  `notificacion_sivigila` int(2) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `atencion_parto`
--
ALTER TABLE `atencion_parto`
  ADD PRIMARY KEY (`id_atencion_parto`);

--
-- Indices de la tabla `cfg_alertas`
--
ALTER TABLE `cfg_alertas`
  ADD PRIMARY KEY (`id_cfg_alertas`);

--
-- Indices de la tabla `cfg_consumo_frecuencia`
--
ALTER TABLE `cfg_consumo_frecuencia`
  ADD PRIMARY KEY (`id_cfg_consumo_frecuencia`);

--
-- Indices de la tabla `cfg_consumo_tipospa`
--
ALTER TABLE `cfg_consumo_tipospa`
  ADD PRIMARY KEY (`id_cfg_consumo_tipospa`);

--
-- Indices de la tabla `cfg_discapacidad`
--
ALTER TABLE `cfg_discapacidad`
  ADD PRIMARY KEY (`id_cfg_discapacidad`);

--
-- Indices de la tabla `cfg_dx`
--
ALTER TABLE `cfg_dx`
  ADD PRIMARY KEY (`id_cfg_dx`);

--
-- Indices de la tabla `cfg_educativo`
--
ALTER TABLE `cfg_educativo`
  ADD PRIMARY KEY (`id_cfg_educativo`);

--
-- Indices de la tabla `cfg_eps`
--
ALTER TABLE `cfg_eps`
  ADD PRIMARY KEY (`id_cfg_eps`);

--
-- Indices de la tabla `cfg_estado`
--
ALTER TABLE `cfg_estado`
  ADD PRIMARY KEY (`id_cfg_estado`);

--
-- Indices de la tabla `cfg_estado_conciencia`
--
ALTER TABLE `cfg_estado_conciencia`
  ADD PRIMARY KEY (`id_cfg_estado_conciencia`);

--
-- Indices de la tabla `cfg_etnia`
--
ALTER TABLE `cfg_etnia`
  ADD PRIMARY KEY (`id_cfg_etnia`);

--
-- Indices de la tabla `cfg_genero`
--
ALTER TABLE `cfg_genero`
  ADD PRIMARY KEY (`id_cfg_genero`);

--
-- Indices de la tabla `cfg_interconsulta`
--
ALTER TABLE `cfg_interconsulta`
  ADD PRIMARY KEY (`id_cfg_interconsulta`);

--
-- Indices de la tabla `cfg_ips`
--
ALTER TABLE `cfg_ips`
  ADD PRIMARY KEY (`id_cfg_ips`);

--
-- Indices de la tabla `cfg_municipio`
--
ALTER TABLE `cfg_municipio`
  ADD PRIMARY KEY (`id_cfg_municipio`);

--
-- Indices de la tabla `cfg_otras_consultas`
--
ALTER TABLE `cfg_otras_consultas`
  ADD PRIMARY KEY (`id_cfg_otras_consultas`);

--
-- Indices de la tabla `cfg_paraclinicos`
--
ALTER TABLE `cfg_paraclinicos`
  ADD PRIMARY KEY (`id_cfg_paraclinicos`);

--
-- Indices de la tabla `cfg_planificacion`
--
ALTER TABLE `cfg_planificacion`
  ADD PRIMARY KEY (`id_cfg_planificacion`);

--
-- Indices de la tabla `cfg_poblacion`
--
ALTER TABLE `cfg_poblacion`
  ADD PRIMARY KEY (`id_cfg_poblacion`);

--
-- Indices de la tabla `cfg_regimen`
--
ALTER TABLE `cfg_regimen`
  ADD PRIMARY KEY (`id_cfg_regimen`);

--
-- Indices de la tabla `cfg_resultados`
--
ALTER TABLE `cfg_resultados`
  ADD PRIMARY KEY (`id_cfg_resultados`);

--
-- Indices de la tabla `cfg_riesgo`
--
ALTER TABLE `cfg_riesgo`
  ADD PRIMARY KEY (`id_cfg_riesgo`);

--
-- Indices de la tabla `cfg_sexo`
--
ALTER TABLE `cfg_sexo`
  ADD PRIMARY KEY (`id_cfg_sexo`);

--
-- Indices de la tabla `cfg_tardio`
--
ALTER TABLE `cfg_tardio`
  ADD PRIMARY KEY (`id_cfg_tardio`);

--
-- Indices de la tabla `cfg_tipodoc`
--
ALTER TABLE `cfg_tipodoc`
  ADD PRIMARY KEY (`id_cfg_tipodoc`);

--
-- Indices de la tabla `cfg_tipo_parto`
--
ALTER TABLE `cfg_tipo_parto`
  ADD PRIMARY KEY (`id_cfg_tipo_parto`);

--
-- Indices de la tabla `cfg_usuarios_roles`
--
ALTER TABLE `cfg_usuarios_roles`
  ADD PRIMARY KEY (`id_cfg_usuarios_roles`);

--
-- Indices de la tabla `cfg_vacunas`
--
ALTER TABLE `cfg_vacunas`
  ADD PRIMARY KEY (`id_cfg_vacunas`);

--
-- Indices de la tabla `cfg_voluntaria_causa`
--
ALTER TABLE `cfg_voluntaria_causa`
  ADD PRIMARY KEY (`id_cfg_voluntaria_causa`);

--
-- Indices de la tabla `cfg_voluntaria_dimension`
--
ALTER TABLE `cfg_voluntaria_dimension`
  ADD PRIMARY KEY (`id_cfg_voluntaria_dimension`);

--
-- Indices de la tabla `cfg_zona`
--
ALTER TABLE `cfg_zona`
  ADD PRIMARY KEY (`id_cfg_zona`);

--
-- Indices de la tabla `control_prenatal`
--
ALTER TABLE `control_prenatal`
  ADD PRIMARY KEY (`id_control_prenatal`);

--
-- Indices de la tabla `control_recien_nacido_madre`
--
ALTER TABLE `control_recien_nacido_madre`
  ADD PRIMARY KEY (`id_control_recien_nacido_madre`);

--
-- Indices de la tabla `datos_basicos`
--
ALTER TABLE `datos_basicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `formula_obstetrica`
--
ALTER TABLE `formula_obstetrica`
  ADD PRIMARY KEY (`id_formula_obstetrica`);

--
-- Indices de la tabla `mensuales`
--
ALTER TABLE `mensuales`
  ADD PRIMARY KEY (`id_mensuales`);

--
-- Indices de la tabla `otras_consultas`
--
ALTER TABLE `otras_consultas`
  ADD PRIMARY KEY (`id_otras_consultas`);

--
-- Indices de la tabla `paraclinicos`
--
ALTER TABLE `paraclinicos`
  ADD PRIMARY KEY (`id_paraclinicos`);

--
-- Indices de la tabla `paraclinicos_preconcepcional`
--
ALTER TABLE `paraclinicos_preconcepcional`
  ADD PRIMARY KEY (`id_paraclinicos_preconcepcional`);

--
-- Indices de la tabla `recien_nacido`
--
ALTER TABLE `recien_nacido`
  ADD PRIMARY KEY (`id_recien_nacido`);

--
-- Indices de la tabla `riesgo`
--
ALTER TABLE `riesgo`
  ADD PRIMARY KEY (`id_riesgo`);

--
-- Indices de la tabla `sustancias_psicoactivas`
--
ALTER TABLE `sustancias_psicoactivas`
  ADD PRIMARY KEY (`id_sustancias_psicoactivas`);

--
-- Indices de la tabla `terminacion_voluntaria`
--
ALTER TABLE `terminacion_voluntaria`
  ADD PRIMARY KEY (`id_terminacion_voluntaria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `vacunacion`
--
ALTER TABLE `vacunacion`
  ADD PRIMARY KEY (`id_vacunacion`);

--
-- Indices de la tabla `violencia_intrafamiliar`
--
ALTER TABLE `violencia_intrafamiliar`
  ADD PRIMARY KEY (`id_violencia_intrafamiliar`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `atencion_parto`
--
ALTER TABLE `atencion_parto`
  MODIFY `id_atencion_parto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_alertas`
--
ALTER TABLE `cfg_alertas`
  MODIFY `id_cfg_alertas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cfg_consumo_frecuencia`
--
ALTER TABLE `cfg_consumo_frecuencia`
  MODIFY `id_cfg_consumo_frecuencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_consumo_tipospa`
--
ALTER TABLE `cfg_consumo_tipospa`
  MODIFY `id_cfg_consumo_tipospa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_discapacidad`
--
ALTER TABLE `cfg_discapacidad`
  MODIFY `id_cfg_discapacidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_dx`
--
ALTER TABLE `cfg_dx`
  MODIFY `id_cfg_dx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_educativo`
--
ALTER TABLE `cfg_educativo`
  MODIFY `id_cfg_educativo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_eps`
--
ALTER TABLE `cfg_eps`
  MODIFY `id_cfg_eps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_estado`
--
ALTER TABLE `cfg_estado`
  MODIFY `id_cfg_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_estado_conciencia`
--
ALTER TABLE `cfg_estado_conciencia`
  MODIFY `id_cfg_estado_conciencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_etnia`
--
ALTER TABLE `cfg_etnia`
  MODIFY `id_cfg_etnia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_genero`
--
ALTER TABLE `cfg_genero`
  MODIFY `id_cfg_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_interconsulta`
--
ALTER TABLE `cfg_interconsulta`
  MODIFY `id_cfg_interconsulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_ips`
--
ALTER TABLE `cfg_ips`
  MODIFY `id_cfg_ips` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_municipio`
--
ALTER TABLE `cfg_municipio`
  MODIFY `id_cfg_municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_otras_consultas`
--
ALTER TABLE `cfg_otras_consultas`
  MODIFY `id_cfg_otras_consultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_paraclinicos`
--
ALTER TABLE `cfg_paraclinicos`
  MODIFY `id_cfg_paraclinicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_planificacion`
--
ALTER TABLE `cfg_planificacion`
  MODIFY `id_cfg_planificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_poblacion`
--
ALTER TABLE `cfg_poblacion`
  MODIFY `id_cfg_poblacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_regimen`
--
ALTER TABLE `cfg_regimen`
  MODIFY `id_cfg_regimen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_resultados`
--
ALTER TABLE `cfg_resultados`
  MODIFY `id_cfg_resultados` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cfg_riesgo`
--
ALTER TABLE `cfg_riesgo`
  MODIFY `id_cfg_riesgo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_sexo`
--
ALTER TABLE `cfg_sexo`
  MODIFY `id_cfg_sexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_tardio`
--
ALTER TABLE `cfg_tardio`
  MODIFY `id_cfg_tardio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_tipodoc`
--
ALTER TABLE `cfg_tipodoc`
  MODIFY `id_cfg_tipodoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_tipo_parto`
--
ALTER TABLE `cfg_tipo_parto`
  MODIFY `id_cfg_tipo_parto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_usuarios_roles`
--
ALTER TABLE `cfg_usuarios_roles`
  MODIFY `id_cfg_usuarios_roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cfg_vacunas`
--
ALTER TABLE `cfg_vacunas`
  MODIFY `id_cfg_vacunas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_voluntaria_causa`
--
ALTER TABLE `cfg_voluntaria_causa`
  MODIFY `id_cfg_voluntaria_causa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_voluntaria_dimension`
--
ALTER TABLE `cfg_voluntaria_dimension`
  MODIFY `id_cfg_voluntaria_dimension` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cfg_zona`
--
ALTER TABLE `cfg_zona`
  MODIFY `id_cfg_zona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `control_prenatal`
--
ALTER TABLE `control_prenatal`
  MODIFY `id_control_prenatal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `control_recien_nacido_madre`
--
ALTER TABLE `control_recien_nacido_madre`
  MODIFY `id_control_recien_nacido_madre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datos_basicos`
--
ALTER TABLE `datos_basicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `formula_obstetrica`
--
ALTER TABLE `formula_obstetrica`
  MODIFY `id_formula_obstetrica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `mensuales`
--
ALTER TABLE `mensuales`
  MODIFY `id_mensuales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `otras_consultas`
--
ALTER TABLE `otras_consultas`
  MODIFY `id_otras_consultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `paraclinicos`
--
ALTER TABLE `paraclinicos`
  MODIFY `id_paraclinicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `paraclinicos_preconcepcional`
--
ALTER TABLE `paraclinicos_preconcepcional`
  MODIFY `id_paraclinicos_preconcepcional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `recien_nacido`
--
ALTER TABLE `recien_nacido`
  MODIFY `id_recien_nacido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `riesgo`
--
ALTER TABLE `riesgo`
  MODIFY `id_riesgo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sustancias_psicoactivas`
--
ALTER TABLE `sustancias_psicoactivas`
  MODIFY `id_sustancias_psicoactivas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `terminacion_voluntaria`
--
ALTER TABLE `terminacion_voluntaria`
  MODIFY `id_terminacion_voluntaria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `vacunacion`
--
ALTER TABLE `vacunacion`
  MODIFY `id_vacunacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `violencia_intrafamiliar`
--
ALTER TABLE `violencia_intrafamiliar`
  MODIFY `id_violencia_intrafamiliar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
