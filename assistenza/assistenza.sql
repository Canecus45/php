-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 18, 2024 alle 16:37
-- Versione del server: 10.4.14-MariaDB
-- Versione PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION; 
-- fase di transazione
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assistenza`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `clienti`
--

-- crea tabella chiamata clienti
CREATE TABLE `clienti` ( 
  -- codice, un intero con max 11 cifre e valore non nullo
  `codice` int(11) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `cognome` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `clienti`
--

-- Inserisci dentro la cartella clienti i seguenti parametri, con valori ('...')
INSERT INTO `clienti` (`codice`, `nome`, `cognome`, `username`, `password`) VALUES
(1, 'Samuele', 'Fattoretti', 'luross', '1234'),
(2, 'Maria', 'Esposito', 'espom', 'maria123'),
(3, 'Mario', 'Rossi', 'username123', 'pass123');

-- --------------------------------------------------------

--
-- Struttura della tabella `interventi`
--

CREATE TABLE `interventi` (
  `TICKET` int(11) DEFAULT NULL,
  `TECNICO` int(11) DEFAULT NULL,
  `data` date NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `interventi`
--

INSERT INTO `interventi` (`TICKET`, `TECNICO`, `data`, `numero`) VALUES
(1, 2, '2020-12-07', 1),
(2, 1, '2020-12-29', 2),
(2, 2, '2021-01-15', 3),
(2, 4, '2021-03-03', 4);

-- --------------------------------------------------------

--
-- Struttura della tabella `report`
--

CREATE TABLE `report` (
  `INTERVENTO` int(11) NOT NULL,
  `descrizione` varchar(50) NOT NULL,
  `tempo` int(4) NOT NULL,
  `commento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `report`
--

INSERT INTO `report` (`INTERVENTO`, `descrizione`, `tempo`, `commento`) VALUES
(1, 'risolto parzialmente', 120, 'risolto parzialmente'),
(2, 'risolto parzialmente2', 150, 'risolto parzialmente2');

-- --------------------------------------------------------

--
-- Struttura della tabella `tecnici`
--

CREATE TABLE `tecnici` (
  `matricola` int(11) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `cognome` varchar(15) NOT NULL,
  `specializzazione` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `tecnici`
--

INSERT INTO `tecnici` (`matricola`, `nome`, `cognome`, `specializzazione`) VALUES
(1, 'Carlo', 'Rossi', 'manutenzione hardware'),
(2, 'Piero', 'Angela', 'software'),
(3, 'Luca', 'Magi', 'software'),
(4, 'Annarita', 'Pavone', 'software'),
(5, 'Alberto', 'Restelli', 'manutenzione hardware');

-- --------------------------------------------------------

--
-- Struttura della tabella `ticket`
--

CREATE TABLE `ticket` (
  `numero` int(11) NOT NULL,
  `data` date NOT NULL,
  `richiesta` varchar(40) NOT NULL,
  `stato` varchar(1) NOT NULL,
  `CLIENTE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `ticket`
--

INSERT INTO `ticket` (`numero`, `data`, `richiesta`, `stato`, `CLIENTE`) VALUES
(1, '2020-12-06', 'non va il pc', 'a', 1),
(2, '2021-03-02', 'non va la stampante', 'a', 3),
(3, '2021-03-26', 'problemi alla rete LAN', 'a', 1);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `clienti`
--

-- La chiave primaria si può assegnare o nel momento del CREAT TABLE, o con ALTER TABLE (modifica la tabella)
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`codice`);

--
-- Indici per le tabelle `interventi`
--
ALTER TABLE `interventi`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `tecnico` (`TECNICO`),
  ADD KEY `ticket` (`TICKET`);

--
-- Indici per le tabelle `report`
--
ALTER TABLE `report`
  ADD KEY `report` (`INTERVENTO`);

--
-- Indici per le tabelle `tecnici`
--
ALTER TABLE `tecnici`
  ADD PRIMARY KEY (`matricola`);

--
-- Indici per le tabelle `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `cliente` (`CLIENTE`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `clienti`
--
ALTER TABLE `clienti`
  MODIFY `codice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `interventi`
--
ALTER TABLE `interventi`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `tecnici`
--
ALTER TABLE `tecnici`
  MODIFY `matricola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `ticket`
--
ALTER TABLE `ticket`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Vincoli per le tabelle scaricate
--

--
-- Vincoli per la tabella `interventi`, crea una relazione tra le due tabelle tramite chiave esterna
--
ALTER TABLE `interventi`
  ADD CONSTRAINT `tecnico` FOREIGN KEY (`TECNICO`) REFERENCES `tecnici` (`matricola`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket` FOREIGN KEY (`TICKET`) REFERENCES `ticket` (`numero`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Vincoli per la tabella `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report` FOREIGN KEY (`INTERVENTO`) REFERENCES `interventi` (`numero`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Vincoli per la tabella `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `cliente` FOREIGN KEY (`CLIENTE`) REFERENCES `clienti` (`codice`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
