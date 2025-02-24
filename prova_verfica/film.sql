-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2021 at 10:52 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `film`
--

-- --------------------------------------------------------

--
-- Table structure for table `attori`
--

CREATE TABLE IF NOT EXISTS `attori` (
  `nome` varchar(20) NOT NULL,
  `codice` int(11) NOT NULL AUTO_INCREMENT,
  `annoN` year(4) NOT NULL,
  `nazionalita` varchar(3) NOT NULL,
  PRIMARY KEY (`codice`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `attori`
--

INSERT INTO `attori` (`nome`, `codice`, `annoN`, `nazionalita`) VALUES
('Ingrid Bergman', 1, 1910, 'SVE'),
('Roberto Benigni', 2, 1952, 'ITA'),
('Aldo Baglio', 3, 1958, 'ITA'),
('Giacomo Poretti', 4, 1956, 'ITA');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `titolo` varchar(20) NOT NULL,
  `codice` varchar(5) NOT NULL,
  `regista` varchar(20) NOT NULL,
  PRIMARY KEY (`codice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`titolo`, `codice`, `regista`) VALUES
('Cosi e'' la vita', 'F0001', 'Massimo Venier'),
('Casablanca', 'F0002', 'Michael Curtiz'),
('La vita e'' bella', 'F0003', 'Roberto Benigni');

-- --------------------------------------------------------

--
-- Table structure for table `proiezioni`
--

CREATE TABLE IF NOT EXISTS `proiezioni` (
  `FILM` varchar(5) NOT NULL,
  `SALA` varchar(5) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`SALA`,`data`),
  KEY `FILM` (`FILM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proiezioni`
--

INSERT INTO `proiezioni` (`FILM`, `SALA`, `data`) VALUES
('F0001', 'MI001', '2021-01-13'),
('F0002', 'VE001', '2021-01-20'),
('F0003', 'MI001', '2021-01-14'),
('F0003', 'VE001', '2021-01-14');

-- --------------------------------------------------------

--
-- Table structure for table `recita`
--

CREATE TABLE IF NOT EXISTS `recita` (
  `FILM` varchar(5) NOT NULL,
  `ATTORE` int(11) NOT NULL,
  `ruolo` varchar(20) NOT NULL,
  PRIMARY KEY (`FILM`,`ATTORE`),
  KEY `ATTORE` (`ATTORE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recita`
--

INSERT INTO `recita` (`FILM`, `ATTORE`, `ruolo`) VALUES
('F0001', 3, 'Aldo'),
('F0001', 4, 'Giacomo'),
('F0002', 1, 'Maria'),
('F0003', 2, 'Enrico');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE IF NOT EXISTS `sale` (
  `nome` varchar(20) NOT NULL,
  `citta` varchar(20) NOT NULL,
  `codice` varchar(5) NOT NULL DEFAULT '',
  `posti` int(11) DEFAULT NULL,
  PRIMARY KEY (`codice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`nome`, `citta`, `codice`, `posti`) VALUES
('astra', 'Milano', 'MI001', 80),
('Egeo', 'Milano', 'MI002', 100),
('Iseo', 'Venezia', 'VE001', 50);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `proiezioni`
--
ALTER TABLE `proiezioni`
  ADD CONSTRAINT `proiezioni_ibfk_2` FOREIGN KEY (`FILM`) REFERENCES `film` (`codice`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proiezioni_ibfk_1` FOREIGN KEY (`SALA`) REFERENCES `sale` (`codice`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recita`
--
ALTER TABLE `recita`
  ADD CONSTRAINT `recita_ibfk_2` FOREIGN KEY (`ATTORE`) REFERENCES `attori` (`codice`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recita_ibfk_1` FOREIGN KEY (`FILM`) REFERENCES `film` (`codice`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;