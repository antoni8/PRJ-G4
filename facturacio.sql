-- Exportacio de la nostra base de dades amb un poc de informació
-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2021 a las 10:12:52
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `facturacio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `NIF` varchar(50) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Adreça` varchar(100) DEFAULT NULL,
  `Telèfon` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`NIF`, `Nom`, `Adreça`, `Telèfon`) VALUES
('12345678k', 'A quadrat', 'C/Sards nº2', 971812022);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `ID` int(11) NOT NULL,
  `Data` date DEFAULT NULL,
  `PreuTotal` float DEFAULT NULL,
  `NIF_Empresa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linia_factura`
--

CREATE TABLE `linia_factura` (
  `ID_Factura` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `ID_Producte` int(11) NOT NULL,
  `Quantiat` int(11) DEFAULT NULL,
  `PreuTotal` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producte`
--

CREATE TABLE `producte` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(100) DEFAULT NULL,
  `Stock` int(11) DEFAULT NULL,
  `Preu` float DEFAULT NULL,
  `Descompte` int(11) DEFAULT NULL,
  `IVA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producte`
--

INSERT INTO `producte` (`ID`, `Nom`, `Stock`, `Preu`, `Descompte`, `IVA`) VALUES
(1, 'Taula', 10, 4.25, 21, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuari`
--

CREATE TABLE `usuari` (
  `DNI` varchar(50) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Correu` varchar(100) DEFAULT NULL,
  `Contrasenya` varchar(50) DEFAULT NULL,
  `Rol` varchar(50) DEFAULT NULL,
  `NIF_Empresa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuari`
--

INSERT INTO `usuari` (`DNI`, `Nom`, `Correu`, `Contrasenya`, `Rol`, `NIF_Empresa`) VALUES
('12345678f', 'antoni', 'antoni@hola.com', '4d186321c1a7f0f354b297e8914ab240', NULL, '12345678k'),
('41622494S', 'adria', 'adrian@hola.com', '4d186321c1a7f0f354b297e8914ab240', '', '12345678k');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`NIF`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`ID`,`NIF_Empresa`),
  ADD KEY `FK_FACTURA_EMPRESA` (`NIF_Empresa`);

--
-- Indices de la tabla `linia_factura`
--
ALTER TABLE `linia_factura`
  ADD PRIMARY KEY (`ID`,`ID_Factura`,`ID_Producte`),
  ADD KEY `FK_FACTURA_LINIAFACTURA` (`ID_Factura`),
  ADD KEY `fk_PRODUCTE_LINIAFACTURA` (`ID_Producte`);

--
-- Indices de la tabla `producte`
--
ALTER TABLE `producte`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuari`
--
ALTER TABLE `usuari`
  ADD PRIMARY KEY (`DNI`,`NIF_Empresa`),
  ADD KEY `FK_Usuaris_Empresa` (`NIF_Empresa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `linia_factura`
--
ALTER TABLE `linia_factura`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producte`
--
ALTER TABLE `producte`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `FK_FACTURA_EMPRESA` FOREIGN KEY (`NIF_Empresa`) REFERENCES `empresa` (`NIF`);

--
-- Filtros para la tabla `linia_factura`
--
ALTER TABLE `linia_factura`
  ADD CONSTRAINT `FK_FACTURA_LINIAFACTURA` FOREIGN KEY (`ID_Factura`) REFERENCES `factura` (`ID`),
  ADD CONSTRAINT `FK_PRODUCTE_LINIFACTURA` FOREIGN KEY (`ID_Producte`) REFERENCES `producte` (`ID`),
  ADD CONSTRAINT `fk_PRODUCTE_LINIAFACTURA` FOREIGN KEY (`ID_Producte`) REFERENCES `producte` (`ID`);

--
-- Filtros para la tabla `usuari`
--
ALTER TABLE `usuari`
  ADD CONSTRAINT `FK_Usuaris_Empresa` FOREIGN KEY (`NIF_Empresa`) REFERENCES `empresa` (`NIF`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
