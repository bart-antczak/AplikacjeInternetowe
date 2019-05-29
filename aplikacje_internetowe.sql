-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 29 Maj 2019, 18:45
-- Wersja serwera: 8.0.15
-- Wersja PHP: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `aplikacje_internetowe`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `name` varchar(15) COLLATE utf8mb4_polish_ci NOT NULL,
  `surname` varchar(15) COLLATE utf8mb4_polish_ci NOT NULL,
  `team` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `nationality` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `image` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci ROW_FORMAT=COMPACT;

--
-- Zrzut danych tabeli `drivers`
--

INSERT INTO `drivers` (`id`, `name`, `surname`, `team`, `nationality`, `image`) VALUES
(1, 'Lewis', 'Hamilton', '1', 'Wielka Brytania', 'img/drivers/Lewis-Hamilton.jpg'),
(2, 'Valtteri', 'Bottas', '1', 'Finlandia', 'img/drivers/Valtteri-Bottas.jpg'),
(3, 'Sebastian', 'Vettel', '2', 'Niemcy', 'img/drivers/Sebastian-Vettel.jpg'),
(4, 'Max', 'Verstappen', '3', 'Holandia', 'img/drivers/Max-Verstappen.jpg'),
(5, 'Charles', 'Leclerc', '2', 'Monako', 'img/drivers/Charles-Leclerc.jpg'),
(6, 'Pierre', 'Gasly', '3', 'Francja', 'img/drivers/Pierre-Gasly.jpg'),
(7, 'Carlos', 'Sainz Jr.', '4', 'Finlandia', 'img/drivers/Carlos-Sainz.jpg'),
(8, 'Kevin', 'Magnussen', '5', 'Dania', 'img/drivers/Kevin-Magnussen.jpg'),
(9, 'Sergio', 'Pérez', '6', 'Meksyk', 'img/drivers/Sergio-Perez.jpg'),
(10, 'Kimi', 'Räikkönen', '7', 'Finlandia', 'img/drivers/Kimi-Raikkonen.jpg'),
(11, 'Lando', 'Norris', '4', 'Wielka Brytania', 'img/drivers/Lando-Norris.jpg'),
(12, 'Daniil', 'Kvyat', '9', 'Rosja', 'img/drivers/Daniil-Kvyat.jpg'),
(13, 'Daniel', 'Ricciardo', '8', 'Australia', 'img/drivers/Daniel-Ricciardo.jpg'),
(14, 'Alexander', 'Albon', '9', 'Tajlandia', 'img/drivers/Alexander-Albon.jpg'),
(15, 'Nico', 'Hülkenberg', '8', 'Niemcy', 'img/drivers/Nico-Hulkenberg.jpg'),
(16, 'Lance', 'Stroll', '6', 'Kanada', 'img/drivers/Lance-Stroll.jpg'),
(17, 'Romain', 'Grosjean', '5', 'Francja', 'img/drivers/Romain-Grosjean.jpg'),
(18, 'Antonio', 'Giovinazzi', '7', 'Włochy', 'img/drivers/Antonio-Giovinazzi.jpg'),
(19, 'George', 'Russell', '10', 'Wielka Brytania', 'img/drivers/George-Russell.jpg'),
(20, 'Robert', 'Kubica', '10', 'Polska', 'img/drivers/Robert-Kubica.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `drivers_answers`
--

CREATE TABLE `drivers_answers` (
  `id` int(10) NOT NULL,
  `driver_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `drivers_answers`
--

INSERT INTO `drivers_answers` (`id`, `driver_id`) VALUES
(1, 1),
(2, 4),
(3, 4),
(4, 9),
(5, 4),
(6, 8),
(7, 1),
(8, 20),
(9, 8),
(10, 1),
(11, 1),
(12, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `teams`
--

CREATE TABLE `teams` (
  `id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `teams`
--

INSERT INTO `teams` (`id`, `name`) VALUES
(1, 'Mercedes'),
(2, 'Ferrari'),
(3, 'Red Bull Racing-Honda'),
(4, 'McLaren-Renault'),
(5, 'Haas-Ferrari'),
(6, 'Racing Point-Mercedes'),
(7, 'Alfa Romeo Racing-Ferrari'),
(8, 'Renault'),
(9, 'Scuderia Toro Rosso-Honda'),
(10, 'Williams-Mercedes');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `teams_answers`
--

CREATE TABLE `teams_answers` (
  `id` int(10) NOT NULL,
  `team_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `teams_answers`
--

INSERT INTO `teams_answers` (`id`, `team_id`) VALUES
(1, '1'),
(2, '2'),
(3, '2'),
(4, '5'),
(5, '3'),
(6, '4'),
(7, '1'),
(8, '2'),
(9, '3'),
(10, '1'),
(11, '6'),
(12, '1');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `drivers_answers`
--
ALTER TABLE `drivers_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `teams_answers`
--
ALTER TABLE `teams_answers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT dla tabeli `drivers_answers`
--
ALTER TABLE `drivers_answers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `teams_answers`
--
ALTER TABLE `teams_answers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
