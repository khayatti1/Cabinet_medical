-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 13 juil. 2023 à 17:47
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cabinett`
--

-- --------------------------------------------------------

--
-- Structure de la table `rendez`
--

CREATE TABLE `rendez` (
  `id` int(11) NOT NULL,
  `nom_complet` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `date_rendez_vous` date DEFAULT NULL,
  `heure_rendez_vous` time DEFAULT NULL,
  `date_reservation` date DEFAULT NULL,
  `dernier_rendez_vous` date DEFAULT NULL,
  `sexe` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tel` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `age` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cin` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `sang` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `prix` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '0',
  `etat` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `time_rendez_vous` varchar(191) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(80) NOT NULL,
  `prenom` varchar(80) NOT NULL,
  `adress` varchar(400) NOT NULL,
  `email` varchar(400) NOT NULL,
  `type` varchar(40) NOT NULL,
  `mtp` varchar(1000) NOT NULL,
  `datecreation` date DEFAULT NULL,
  `mobile` varchar(80) NOT NULL,
  `photo` varchar(1000) DEFAULT NULL,
  `cin` varchar(60) DEFAULT NULL,
  `payedprice` varchar(45) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `adress`, `email`, `type`, `mtp`, `datecreation`, `mobile`, `photo`, `cin`, `payedprice`) VALUES
(1, 'khayatti', 'mohamed', 'salé', 'med@gmail.com', 'admin', '25d55ad283aa400af464c76d713c07ad', '2023-07-13', '0680115604', 'khayatti.jpg', 'AB1044', '0');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `rendez`
--
ALTER TABLE `rendez`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `rendez`
--
ALTER TABLE `rendez`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
