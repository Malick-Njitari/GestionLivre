-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 22 avr. 2023 à 15:02
-- Version du serveur :  10.3.20-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestionlivre`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS `auteur` (
  `IDAUTEUR` int(11) NOT NULL AUTO_INCREMENT,
  `NOMAUTEUR` varchar(50) DEFAULT NULL,
  `PRENOMAUTEUR` varchar(50) DEFAULT NULL,
  `DATENAISSANCEAUTEUR` date DEFAULT NULL,
  PRIMARY KEY (`IDAUTEUR`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`IDAUTEUR`, `NOMAUTEUR`, `PRENOMAUTEUR`, `DATENAISSANCEAUTEUR`) VALUES
(1, 'BEN', 'TEN', '2023-04-04'),
(2, 'GRACE', 'NOELLIE', '2023-04-03'),
(3, 'PATRICK', 'VIANI', '2023-04-11'),
(4, 'MBOMMA', 'GANG', '2023-04-10'),
(5, 'SERVAIN', 'BONA', '2023-04-11'),
(6, 'ALI', 'BONDE', '2023-04-05');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `IDLIVRE` int(11) NOT NULL AUTO_INCREMENT,
  `TITRELIVRE` varchar(20) DEFAULT NULL,
  `ANNEELIVRE` int(11) DEFAULT NULL,
  `CATEGORIELIVRE` varchar(20) DEFAULT NULL,
  `NBREPAGELIVRE` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDLIVRE`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`IDLIVRE`, `TITRELIVRE`, `ANNEELIVRE`, `CATEGORIELIVRE`, `NBREPAGELIVRE`) VALUES
(1, 'FJKF', 2021, 'CJFJ', 200),
(2, 'FJFJ', 2021, 'DKJFDJ', 600),
(3, 'DFJF', 2010, 'DFJFJ', 500),
(4, 'CFFVJN', 2000, 'CJVJK', 400),
(5, 'BIEN', 2012, 'SCIENCE', 100),
(6, 'GARCON', 2000, 'SEXE', 200);

-- --------------------------------------------------------

--
-- Structure de la table `rediger`
--

DROP TABLE IF EXISTS `rediger`;
CREATE TABLE IF NOT EXISTS `rediger` (
  `IDAUTEUR` int(11) NOT NULL,
  `IDLIVRE` int(11) NOT NULL,
  `NBRECHAPITRE` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDAUTEUR`,`IDLIVRE`),
  KEY `FK_REDIGER2` (`IDLIVRE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rediger`
--

INSERT INTO `rediger` (`IDAUTEUR`, `IDLIVRE`, `NBRECHAPITRE`) VALUES
(1, 1, 6),
(2, 2, 20),
(3, 3, 21),
(4, 4, 10),
(1, 5, 17),
(2, 6, 14),
(5, 2, 4),
(6, 1, 17);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
