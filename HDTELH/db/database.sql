-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 02 mai 2022 à 16:43
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `histoire_heros`
--

-- --------------------------------------------------------

--
-- Structure de la table `choix`
--

CREATE TABLE `choix` (
  `Id_Choix` int(11) NOT NULL,
  `Id_Hist` int(11) NOT NULL,
  `Id_Para` int(11) NOT NULL,
  `Text_Choix` tinytext COLLATE utf8_unicode_ci DEFAULT NULL,
  `Id_Para_Suivant` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `liste_histoire`
--

CREATE TABLE `liste_histoire` (
  `Id_Hist` int(11) NOT NULL,
  `Titre_Hist` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Resume_Hist` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Im_Hist` tinytext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `liste_histoire`
--

INSERT INTO `liste_histoire` (`Id_Hist`, `Titre_Hist`, `Resume_Hist`, `Im_Hist`) VALUES
(1, 'Patate à l\ENSC', 'Il était une fois patate.', 'Patate.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `paragraphe`
--

CREATE TABLE `paragraphe` (
  `Id_Hist` int(11) NOT NULL,
  `Id_Para` int(11) NOT NULL,
  `Text_Para` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sauvegarde`
--

CREATE TABLE `sauvegarde` (
  `Id_User` int(11) NOT NULL,
  `Id_Hist` int(11) DEFAULT NULL,
  `Id_Choix` int(11) NOT NULL,
  `Id_Para` int(11) DEFAULT NULL,
  `Vie` int(11) DEFAULT NULL,
  `Inventaire` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user_et_admin`
--

CREATE TABLE `user_et_admin` (
  `Id_User` int(11) NOT NULL,
  `Nom_User` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Login_User` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mdp_User` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Admin` tinyint(1) DEFAULT NULL,
  `Hist_EnCours` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `user_et_admin`
--

INSERT INTO `user_et_admin` (`Id_User`, `Nom_User`, `Login_User`, `Mdp_User`, `Admin`, `Hist_EnCours`) VALUES
(1, 'ju', 'ju', 'mdp', 1, NULL),
(2, 'pauline', 'paupau64', 'mdp', 1, NULL),
(3, 'ki', 'jul', 'kdkqzef', 1, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `choix`
--
ALTER TABLE `choix`
  ADD PRIMARY KEY (`Id_Choix`,`Id_Hist`,`Id_Para`);

--
-- Index pour la table `liste_histoire`
--
ALTER TABLE `liste_histoire`
  ADD PRIMARY KEY (`Id_Hist`);

--
-- Index pour la table `paragraphe`
--
ALTER TABLE `paragraphe`
  ADD PRIMARY KEY (`Id_Hist`,`Id_Para`);

--
-- Index pour la table `sauvegarde`
--
ALTER TABLE `sauvegarde`
  ADD PRIMARY KEY (`Id_User`,`Id_Choix`);

--
-- Index pour la table `user_et_admin`
--
ALTER TABLE `user_et_admin`
  ADD PRIMARY KEY (`Id_User`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `liste_histoire`
--
ALTER TABLE `liste_histoire`
  MODIFY `Id_Hist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user_et_admin`
--
ALTER TABLE `user_et_admin`
  MODIFY `Id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
