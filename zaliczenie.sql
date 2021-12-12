-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Gru 2021, 16:08
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `zaliczenie`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `capital_objects`
--

CREATE TABLE `capital_objects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `founder` varchar(255) NOT NULL,
  `capital` int(255) NOT NULL,
  `StockExchange` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `capital_objects`
--

INSERT INTO `capital_objects` (`id`, `name`, `founder`, `capital`, `StockExchange`) VALUES
(13, 'Janmusz Trade', 'Janusz Nowak', 50000, 'New York'),
(14, 'Janusz Trade', 'Janusz Nowak', 20000, 'warszawa');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `imgSrc` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `parentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `classes`
--

INSERT INTO `classes` (`id`, `name`, `imgSrc`, `title`, `level`, `parentId`) VALUES
(1, 'Company', 'img/company.png', 'Firma', 1, 0),
(2, 'Corporation', 'img/corporation.png', 'Korporacja', 2, 1),
(3, 'Capital', 'img/capital.png', 'Firma Kapitałowa', 2, 1),
(4, 'Personal', 'img/civil.png', 'Firma Cywilna', 2, 1),
(5, 'Partnership', 'img/partnership.png', 'Spólka Partnerska', 3, 4),
(6, 'General', 'img/general.png', 'Spółka Jawna', 3, 4),
(7, 'Llc', 'img/llc.png', 'Spółka z ograniczoną odpowiedzialnością', 3, 3),
(8, 'Jsc', 'img/jsc.png', 'Spółka Akcyjna', 3, 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `company_objects`
--

CREATE TABLE `company_objects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `founder` varchar(255) NOT NULL,
  `capital` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `company_objects`
--

INSERT INTO `company_objects` (`id`, `name`, `founder`, `capital`) VALUES
(5, 'Januszex', 'Janusz Kowalski', 5000),
(8, 'Janusz Trade', 'Jansuz', 2000);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `corporation_objects`
--

CREATE TABLE `corporation_objects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `founder` varchar(255) NOT NULL,
  `capital` int(255) NOT NULL,
  `branch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `general_objects`
--

CREATE TABLE `general_objects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `founder` varchar(255) NOT NULL,
  `capital` int(255) NOT NULL,
  `HQLocation` varchar(255) NOT NULL,
  `DateOfDisabling` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jsc_objects`
--

CREATE TABLE `jsc_objects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `founder` varchar(255) NOT NULL,
  `capital` int(255) NOT NULL,
  `StockExchange` varchar(255) NOT NULL,
  `stockprice` int(255) NOT NULL,
  `stocks` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `llc_objects`
--

CREATE TABLE `llc_objects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `founder` varchar(255) NOT NULL,
  `capital` int(255) NOT NULL,
  `StockExchange` varchar(255) NOT NULL,
  `HeadOfAdministration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `partnership_objects`
--

CREATE TABLE `partnership_objects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `founder` varchar(255) NOT NULL,
  `capital` int(255) NOT NULL,
  `HQLocation` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `personal_objects`
--

CREATE TABLE `personal_objects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `founder` varchar(255) NOT NULL,
  `capital` int(255) NOT NULL,
  `HQLocation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `capital_objects`
--
ALTER TABLE `capital_objects`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `company_objects`
--
ALTER TABLE `company_objects`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `corporation_objects`
--
ALTER TABLE `corporation_objects`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `general_objects`
--
ALTER TABLE `general_objects`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `jsc_objects`
--
ALTER TABLE `jsc_objects`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `llc_objects`
--
ALTER TABLE `llc_objects`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `partnership_objects`
--
ALTER TABLE `partnership_objects`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `personal_objects`
--
ALTER TABLE `personal_objects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `capital_objects`
--
ALTER TABLE `capital_objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `company_objects`
--
ALTER TABLE `company_objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `corporation_objects`
--
ALTER TABLE `corporation_objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `general_objects`
--
ALTER TABLE `general_objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `jsc_objects`
--
ALTER TABLE `jsc_objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `llc_objects`
--
ALTER TABLE `llc_objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `partnership_objects`
--
ALTER TABLE `partnership_objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `personal_objects`
--
ALTER TABLE `personal_objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
