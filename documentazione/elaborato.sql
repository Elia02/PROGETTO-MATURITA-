-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 18, 2021 alle 18:59
-- Versione del server: 10.4.16-MariaDB
-- Versione PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elaborato`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `amministratore`
--

CREATE TABLE `amministratore` (
  `id_amministratore` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Cognome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `amministratore`
--

INSERT INTO `amministratore` (`id_amministratore`, `Nome`, `Cognome`, `email`, `psw`) VALUES
(1, 'elia', 'colombo', 'Elia.colombo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'pippo', 'pippo', 'pippo.pippo@gmail.com', '6e6bc4e49dd477ebc98ef4046c067b5f');

-- --------------------------------------------------------

--
-- Struttura della tabella `attivita`
--

CREATE TABLE `attivita` (
  `id_attivita` int(11) NOT NULL,
  `Nome_attivita` varchar(40) NOT NULL,
  `Giorno_settimana` varchar(20) NOT NULL,
  `Ore_attivita` varchar(50) NOT NULL,
  `id_brancaEs2` int(11) NOT NULL,
  `spiegazione` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `attivita`
--

INSERT INTO `attivita` (`id_attivita`, `Nome_attivita`, `Giorno_settimana`, `Ore_attivita`, `id_brancaEs2`, `spiegazione`) VALUES
(1, 'Roverino', 'lunedi', '9:00', 2, 'Il Gioco consiste nel'),
(2, 'Costruzione sotto campo', 'mercoledi', '15:00', 2, 'Iniziare costruzione della propria tenda, tavolo, ...'),
(3, 'Catapulte(costruzione)', 'martedi', '9:00', 2, 'bla bla');

-- --------------------------------------------------------

--
-- Struttura della tabella `branca`
--

CREATE TABLE `branca` (
  `id_branca` int(11) NOT NULL,
  `Nome_branca` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `branca`
--

INSERT INTO `branca` (`id_branca`, `Nome_branca`) VALUES
(1, 'Lupetti'),
(2, 'Reparto'),
(3, 'Compagnia');

-- --------------------------------------------------------

--
-- Struttura della tabella `iscritti`
--

CREATE TABLE `iscritti` (
  `id_iscritti` int(11) NOT NULL,
  `sede_appartenenza` int(11) NOT NULL,
  `id_brancaEs` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(20) NOT NULL,
  `eta` int(11) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `sedi_scout`
--

CREATE TABLE `sedi_scout` (
  `id` int(11) NOT NULL,
  `Sede` varchar(50) NOT NULL,
  `provincia` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `sedi_scout`
--

INSERT INTO `sedi_scout` (`id`, `Sede`, `provincia`, `email`) VALUES
(1, 'Sezione di Andria', 'BT', 'andria@assoraider.it'),
(2, 'Sezione di Ardea-Tor S. Lorenz', 'RM', 'ardea@assoraider.it'),
(3, 'Sezione di Bagheria', 'PA', 'bagheria@assoraider.it'),
(4, 'Sezione di Barletta', 'BT', 'barletta@assoraider.it'),
(5, 'Sezione di Borgia ', 'CZ', 'borgia@assoraider.it'),
(6, 'Sezione di Cagliari 1', 'CA', 'cagliari1@assoraider.it'),
(7, 'Sezione di Cagliari 24 Pellicano del Cimone', 'CA', 'cagliari24@assoraider.it'),
(8, 'Sezione di Campobasso', 'CB', 'campobasso@assoraider.it'),
(9, 'Sezione di Cassine', 'AL', 'cassine@assoraider.it'),
(10, 'Sezione di Catanzaro Lido ', 'CZ', 'catanzarolido@assoraider.it'),
(11, 'Sezione di Cirò Marina ', 'Kr', 'ciro.marina@assoraider.it'),
(12, 'Sezione di Civitella Roveto ', 'AQ', 'civitellaroveto@assoraider.it'),
(13, 'Sezione di Elmas – Su Masu', 'CA', 'elmas.su.masu@assoraider.it'),
(14, 'Sezione di Ittiri', 'SS', 'ittiri@assoraider.it'),
(15, 'Sezione di Lido dei Pini', 'RM', 'lidodeipini@assoraider.it'),
(16, 'Sezione di Messina', 'ME', 'messina@assoraider.it'),
(17, 'Sezione di Milano 2', 'MI', 'milano2@assoraider.it'),
(18, 'Sezione di Ostia Lido', 'RM', 'ostia.lido@assoraider.it'),
(19, 'Sezione di Parma', 'PR', 'parma@assoraider.it'),
(20, 'Sezione di Pomezia', 'RM', 'pomezia@assoraider.it'),
(21, 'Sezione di Quartu S. ELena', 'CA', 'quartu.s.elena@assoraider.it'),
(22, 'Sezione di Rodano', 'MI', 'rodano@assoraider.it '),
(23, 'Sezione di Roma 2', 'RM', 'roma2@assoraider.it'),
(24, 'Sezione di Roma 4', 'RM', 'roma4@assoraider.it'),
(25, 'Sezione di San Severo', 'FG', 'san.severo@assoraider.it'),
(26, 'Sezione di San Severo 2', 'FG', 'san.severo2@assoraider.it'),
(27, 'Sezione di Senna Comasco', 'CO', 'como@assoraider.it'),
(28, 'Sezione di Siracusa', 'SR', 'siracusa@assoraider.it'),
(29, 'Sezione di Sora 1', 'FR', 'sora1@assoraider.it'),
(30, 'Sezione di Statte', 'TA', 'statte@assoraider.it'),
(31, 'Sezione “Deri” Taranto 1', 'TA', 'taranto1@assoraider.it'),
(32, 'Sezione di Taranto 2', 'TA', 'taranto2@assoraider.it'),
(33, 'Sezione di Vaiano Cremasco', 'CR', 'vaianocreamasco@assoraider.it');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `attivita`
--
ALTER TABLE `attivita`
  ADD PRIMARY KEY (`id_attivita`);

--
-- Indici per le tabelle `branca`
--
ALTER TABLE `branca`
  ADD PRIMARY KEY (`id_branca`);

--
-- Indici per le tabelle `iscritti`
--
ALTER TABLE `iscritti`
  ADD PRIMARY KEY (`id_iscritti`),
  ADD KEY `sede_appartenenza` (`sede_appartenenza`),
  ADD KEY `id_brancaEs` (`id_brancaEs`) USING BTREE;

--
-- Indici per le tabelle `sedi_scout`
--
ALTER TABLE `sedi_scout`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `attivita`
--
ALTER TABLE `attivita`
  MODIFY `id_attivita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `branca`
--
ALTER TABLE `branca`
  MODIFY `id_branca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `iscritti`
--
ALTER TABLE `iscritti`
  MODIFY `id_iscritti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT per la tabella `sedi_scout`
--
ALTER TABLE `sedi_scout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `iscritti`
--
ALTER TABLE `iscritti`
  ADD CONSTRAINT `iscritti_ibfk_1` FOREIGN KEY (`sede_appartenenza`) REFERENCES `sedi_scout` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `iscritti_ibfk_2` FOREIGN KEY (`id_brancaEs`) REFERENCES `branca` (`id_branca`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
