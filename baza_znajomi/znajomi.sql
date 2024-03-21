-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Mar 2018, 14:06
-- Wersja serwera: 10.1.19-MariaDB
-- Wersja PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `znajomi`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kontakty`
--

CREATE TABLE `kontakty` (
  `Id` int(11) NOT NULL,
  `Id_osoby` int(11) NOT NULL,
  `Rodzaj_kontaktu` text COLLATE utf8_polish_ci NOT NULL,
  `Kontakt` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `kontakty`
--

INSERT INTO `kontakty` (`Id`, `Id_osoby`, `Rodzaj_kontaktu`, `Kontakt`) VALUES
(2, 1, 'telefon służbowy', '153425658'),
(3, 2, 'email', 'polo@wp.pl'),
(5, 3, 'telefon prywatny', '956856542'),
(6, 3, 'email', 'oko@os.pl'),
(7, 4, 'email', 'rytm@muza.com'),
(8, 4, 'telefon służbowy', '652325652'),
(9, 5, 'email', 'rym@muza.com'),
(10, 5, 'telefon służbowy', '784524652');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `osoby`
--

CREATE TABLE `osoby` (
  `Id` int(11) NOT NULL,
  `Imie` text COLLATE utf8_polish_ci NOT NULL,
  `Nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `Data urodzenia` date NOT NULL,
  `Wiek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `osoby`
--

INSERT INTO `osoby` (`Id`, `Imie`, `Nazwisko`, `Data urodzenia`, `Wiek`) VALUES
(1, 'Jan', 'Nowak', '2000-06-16', 16),
(2, 'Andrzej', 'Kot', '1980-12-11', 36),
(3, 'Kamil', 'Trawa', '1992-05-14', 25),
(4, 'Lech', 'Kania', '2007-01-07', 10),
(5, 'Paweł', 'Domek', '2010-03-16', 7),
(6, 'Ola', 'Lasek', '2001-12-10', 16);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `kontakty`
--
ALTER TABLE `kontakty`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `osoby`
--
ALTER TABLE `osoby`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `kontakty`
--
ALTER TABLE `kontakty`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT dla tabeli `osoby`
--
ALTER TABLE `osoby`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
