-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 13 Février 2017 à 08:13
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_poo`
--

-- --------------------------------------------------------

--
-- Structure de la table `datas`
--

CREATE TABLE `datas` (
  `id_auto` int(11) NOT NULL,
  `id_auteur` int(30) NOT NULL,
  `date` datetime NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `nom_du_fichier` varchar(30) NOT NULL,
  `mime_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `datas`
--

INSERT INTO `datas` (`id_auto`, `id_auteur`, `date`, `description`, `nom_du_fichier`, `mime_type`) VALUES
(1, 1, '2017-02-10 09:24:00', 'Babyboss le nouveau film d\'animation', '1.webm', 'video/webm'),
(2, 2, '2017-02-10 09:40:00', 'Les gardiens de la galaxie 2', '2.webm', 'video/webm'),
(3, 3, '2017-02-10 09:42:00', 'Alvy alchimie', '3.ogg', 'video/ogg'),
(4, 1, '2017-02-10 09:43:00', 'Bordeaux', '4.png', 'image/png'),
(5, 2, '2017-02-10 09:45:00', 'Le souk de Marrakech', '5.png', 'image/png'),
(6, 3, '2017-02-10 09:48:00', 'Boyce avenue lego house', '6.ogg', 'video/ogg'),
(7, 1, '2017-02-09 09:50:00', 'Miami guitare géante !', '7.png', 'image/png'),
(8, 2, '2017-02-10 09:51:00', 'Moi moche et méchant 2', '8.webm', 'video/webm'),
(9, 3, '2017-02-10 09:52:00', 'Finding hope let go', '9.ogg', 'video/ogg'),
(10, 1, '2017-02-09 09:53:00', 'New-York', '10.png', 'image/png'),
(11, 2, '2017-02-10 09:54:00', 'Pirate des caraibes', '11.webm', 'video/webm'),
(12, 3, '2017-02-10 09:55:00', 'Overwatch crédit', '12.ogg', 'video/ogg'),
(13, 1, '2017-02-10 09:56:00', 'Baie de Shangai', '13.png', 'image/png'),
(14, 2, '2017-02-10 09:57:00', 'Spiderman', '14.webm', 'video/webm'),
(15, 3, '2017-02-10 09:58:00', 'Resonant waves portative sky', '15.ogg', 'video/ogg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_auteur` int(11) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `mdp` varchar(38) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id_auteur`, `pseudo`, `mdp`) VALUES
(1, 'Tristan', '1234512345'),
(2, 'Ainsley', '1234512345'),
(3, 'Michel', '1234512345');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`id_auto`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_auteur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `datas`
--
ALTER TABLE `datas`
  MODIFY `id_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_auteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
