-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 21 mrt 2021 om 16:52
-- Serverversie: 8.0.22
-- PHP-versie: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `george-marina`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customerid` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) NOT NULL,
  `infix` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) NOT NULL,
  `phonenumber` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(45) NOT NULL,
  `loginid` int UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`customerid`),
  KEY `FK_customer_loginid->login_loginid` (`loginid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `customer`
--

INSERT INTO `customer` (`customerid`, `firstname`, `infix`, `lastname`, `phonenumber`, `email`, `loginid`) VALUES
(1, 'Gabriëlle', NULL, 'Spits', '06-39127047', '', NULL),
(2, 'Melvin', NULL, 'Spits', '06-3912745', 'melvin-spits@hotmail.com', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `loginid` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `userroleid` int NOT NULL,
  PRIMARY KEY (`loginid`),
  KEY `FK_login_userrolid->userrole_userroleid` (`userroleid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `reservationid` int NOT NULL AUTO_INCREMENT,
  `timeid` int NOT NULL,
  `reservationdate` date NOT NULL,
  `customerid` int DEFAULT NULL,
  `persons` int NOT NULL,
  PRIMARY KEY (`reservationid`),
  KEY `FK_Reservation_customerid->customer_customerid` (`customerid`),
  KEY `FK_Reservation_timeid->timeslot_timeid` (`timeid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `reservations`
--

INSERT INTO `reservations` (`reservationid`, `timeid`, `reservationdate`, `customerid`, `persons`) VALUES
(1, 1, '2021-01-01', NULL, 1),
(2, 1, '2021-01-01', NULL, 1),
(3, 1, '2021-01-01', NULL, 1),
(4, 1, '2021-01-01', NULL, 1),
(5, 1, '2021-01-01', NULL, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `time-slot`
--

DROP TABLE IF EXISTS `time-slot`;
CREATE TABLE IF NOT EXISTS `time-slot` (
  `timeid` int NOT NULL AUTO_INCREMENT,
  `starttime` varchar(5) NOT NULL,
  `endtime` varchar(5) NOT NULL,
  `half-day` varchar(10) NOT NULL,
  PRIMARY KEY (`timeid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `time-slot`
--

INSERT INTO `time-slot` (`timeid`, `starttime`, `endtime`, `half-day`) VALUES
(1, '12:00', '14:00', 'lunch'),
(2, '12:15', '14:15', 'lunch'),
(3, '12:30', '14:30', 'lunch'),
(4, '12:45', '14:45', 'lunch'),
(5, '13:00', '15:00', 'lunch'),
(6, '13:15', '15:15', 'lunch'),
(7, '13:30', '15:30', 'lunch'),
(8, '13:45', '15:45', 'lunch'),
(9, '18:00', '20:00', 'diner'),
(10, '18:15', '20:15', 'diner'),
(11, '18:30', '20:30', 'diner'),
(12, '18:45', '20:45', 'diner'),
(13, '19:00', '21:00', 'diner');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `userrole`
--

DROP TABLE IF EXISTS `userrole`;
CREATE TABLE IF NOT EXISTS `userrole` (
  `userroleid` int NOT NULL AUTO_INCREMENT,
  `rolename` varchar(25) NOT NULL,
  `permission` varchar(100) NOT NULL,
  PRIMARY KEY (`userroleid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `FK_customer_loginid->login_loginid` FOREIGN KEY (`loginid`) REFERENCES `login` (`loginid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `FK_login_userrolid->userrole_userroleid` FOREIGN KEY (`userroleid`) REFERENCES `userrole` (`userroleid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `FK_Reservation_customerid->customer_customerid` FOREIGN KEY (`customerid`) REFERENCES `customer` (`customerid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
