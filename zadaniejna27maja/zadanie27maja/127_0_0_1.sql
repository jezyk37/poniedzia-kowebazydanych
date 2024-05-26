-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 26, 2024 at 04:36 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `energia`
--
CREATE DATABASE IF NOT EXISTS `energia` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `energia`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `energia`
--

CREATE TABLE `energia` (
  `id` int(11) NOT NULL,
  `m` float NOT NULL,
  `g` float NOT NULL,
  `h` float NOT NULL,
  `v` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `energia`
--

INSERT INTO `energia` (`id`, `m`, `g`, `h`, `v`) VALUES
(1, 10, 9.81, 5, 3),
(2, 15, 9.81, 10, 4),
(3, 20, 9.81, 15, 5);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `energia`
--
ALTER TABLE `energia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `energia`
--
ALTER TABLE `energia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
