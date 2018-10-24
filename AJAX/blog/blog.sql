-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 24 oct. 2018 à 09:13
-- Version du serveur :  10.1.32-MariaDB
-- Version de PHP :  7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(3) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_enregistrement` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `titre`, `categorie`, `contenu`, `date_enregistrement`) VALUES
(1, 'xsqxqxsqx', 'xqssxqxqsx', 'xsqxsqxqsxsqx', '2018-10-23 15:42:51'),
(4, 'nympe', 'nympe', 'nympenympenympenympenympenympenympenympenympenympenympenympenympenympenympenympenympe', '2018-10-23 15:54:53'),
(5, 'ukl', 'ilmpym', 'nympenympenympenympenympenympenympenympenympenympenympenympenympenympenympenympenympenympenympenympenympenympe', '2018-10-23 16:00:54'),
(6, 'ukl', 'ilmpym', 'nympenympenympenympenympenympenympenympenympenympenympenympenympenympenympe', '2018-10-23 16:04:43'),
(7, 'ukl3', 'pantalon', 'xdzxxqxqsxsqxsq', '2018-10-23 16:06:24'),
(8, 'hz', 'tnhjan', 'eatnn', '2018-10-23 16:40:54'),
(9, 'roméo', 'szasazszsas', 'asazszsssssssaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaazadsqqsqdqsqs', '2018-10-23 16:58:13');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
