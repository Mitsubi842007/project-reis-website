-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Gegenereerd op: 22 jun 2026 om 13:44
-- Serverversie: 8.4.8
-- PHP-versie: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Account`
--

CREATE TABLE `Account` (
  `id` int NOT NULL,
  `usertype` varchar(25) NOT NULL DEFAULT 'gebruiker',
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `Account`
--

INSERT INTO `Account` (`id`, `usertype`, `email`, `password`) VALUES
(1, 'admin', 'admin', '1234'),
(2, 'gebruiker', 'gebruiker', '1234');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `comment`
--

CREATE TABLE `comment` (
  `id` int NOT NULL,
  `username` varchar(25) NOT NULL,
  `bericht` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reisInformatie`
--

CREATE TABLE `reisInformatie` (
  `id` int NOT NULL,
  `titel` varchar(50) NOT NULL,
  `beschrijving` text NOT NULL,
  `prijs` decimal(10,2) NOT NULL,
  `afbeelding` varchar(50) NOT NULL,
  `locatie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `reisInformatie`
--

INSERT INTO `reisInformatie` (`id`, `titel`, `beschrijving`, `prijs`, `afbeelding`, `locatie`) VALUES
(1, 'tungsahara', 'test', 9.50, 'placeholder.png', 'tungsahara'),
(2, 'dorpje', 'test', 6.00, 'placeholder.png', 'dorp'),
(3, 'tung ', 'triple t', 6.70, 'placeholder.png', 'triple t lair');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `Account`
--
ALTER TABLE `Account`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `reisInformatie`
--
ALTER TABLE `reisInformatie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `Account`
--
ALTER TABLE `Account`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `reisInformatie`
--
ALTER TABLE `reisInformatie`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
