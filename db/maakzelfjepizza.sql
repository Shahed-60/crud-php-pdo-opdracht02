-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 14 feb 2023 om 11:54
-- Serverversie: 5.7.36
-- PHP-versie: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maakzelfjepizza`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pizza`
--

DROP TABLE IF EXISTS `pizza`;
CREATE TABLE IF NOT EXISTS `pizza` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Bodemformaat` varchar(200) NOT NULL,
  `Saus` varchar(200) NOT NULL,
  `Pizzatoppings` varchar(200) NOT NULL,
  `Kruiden` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `pizza`
--

INSERT INTO `pizza` (`Id`, `Bodemformaat`, `Saus`, `Pizzatoppings`, `Kruiden`) VALUES
(4, '20 centimeter', 'Tomatensaus', 'Vegan', 'Zwarte peper');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
