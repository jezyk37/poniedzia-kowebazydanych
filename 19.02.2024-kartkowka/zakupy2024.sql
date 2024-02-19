-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Lut 2024, 08:40
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `zakupy2024`
--
CREATE DATABASE IF NOT EXISTS `zakupy2024` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `zakupy2024`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `towary`
--

CREATE TABLE `towary` (
  `ID` int(2) DEFAULT NULL,
  `cena` int(3) DEFAULT NULL,
  `NAZWA` varchar(22) DEFAULT NULL,
  `KATEGORIA` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `towary`
--

INSERT INTO `towary` (`ID`, `cena`, `NAZWA`, `KATEGORIA`) VALUES
(1, 10, 'Sok', 1),
(2, 8, 'Pepsi', 1),
(3, 2, 'Fanta', 1),
(4, 15, 'Turbo mis', 2),
(5, 25, 'Kreple', 2),
(6, 150, 'Kreple na caly tydzien', 2),
(7, 69, 'Zymla', 3),
(8, 100, 'Nowy Mantel', 4),
(9, 15, 'Stary Mantel', 4),
(10, 80, 'Wuszt', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
