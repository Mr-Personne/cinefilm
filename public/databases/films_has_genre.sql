-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Ven 20 Décembre 2019 à 14:58
-- Version du serveur :  10.3.20-MariaDB-1:10.3.20+maria~bionic-log
-- Version de PHP :  7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `TABLE 1`
--

CREATE TABLE `TABLE 1` (
  `films_id` int(2) DEFAULT NULL,
  `genre_idgenre` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `TABLE 1`
--

INSERT INTO `TABLE 1` (`films_id`, `genre_idgenre`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 3),
(2, 4),
(2, 5),
(3, 6),
(3, 7),
(4, 8),
(4, 9),
(4, 10),
(5, 1),
(5, 11),
(6, 1),
(6, 6),
(7, 2),
(7, 9),
(8, 2),
(9, 2),
(9, 12),
(10, 1),
(10, 11),
(11, 1),
(11, 12),
(12, 2),
(12, 7),
(13, 11),
(13, 12),
(14, 6),
(14, 7),
(15, 11),
(15, 12);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
