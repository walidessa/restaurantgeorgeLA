-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 06 jun 2021 om 17:40
-- Serverversie: 5.7.31
-- PHP-versie: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `festivalplezier`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(300) NOT NULL,
  `password` varchar(60) NOT NULL,
  `userrole` enum('root','admin','customer','moderator') NOT NULL DEFAULT 'customer',
  `activated` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `register`
--

INSERT INTO `register` (`id`, `email`, `password`, `userrole`, `activated`) VALUES
(1, 'admin@festivalplezier.nl', '$2y$10$wxFwMhn/YpJeJFUYn7JFaeaC9ZrCU/wpiOgDhrGrp7wI2CdKT6Z36', 'admin', b'0'),
(2, 'root@festivalplezier.nl', '$2y$10$1P4Lc6EkxUEAPbYyXtb9q.DAGot/LTWdPlqF178zDZgdcmu9TmC.G', 'root', b'0'),
(3, 'moderator@festivalplezier.nl', '$2y$10$0bQEj6cmIf/oLoDQo.s3LOzv5Sw9oqL4Qf6QaJUdKAv6xa.LfStzO', 'moderator', b'0'),
(4, 'customer@festivalplezier.nl', '$2y$10$M7m99uDZq8Oxx2KIT9l3P.uM56WU0tRsj1kM7lksL.mz8oLYQUiTu', 'customer', b'0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
