-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 15 avr. 2022 à 16:11
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `histoire_heros`
--
CREATE DATABASE IF NOT EXISTS `histoire_heros` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `histoire_heros`;

-- --------------------------------------------------------

--
-- Structure de la table `choix`
--

CREATE TABLE IF NOT EXISTS `choix` (
  `Id_Choix` int(11) NOT NULL,
  `Id_Hist` int(11) NOT NULL,
  `Id_Para` int(11) NOT NULL,
  `Text_Choix` tinytext COLLATE utf8_unicode_ci DEFAULT NULL,
  `Id_Para_Suivant` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Choix`,`Id_Hist`,`Id_Para`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `liste_histoire`
--

CREATE TABLE IF NOT EXISTS `liste_histoire` (
  `Id_Hist` int(11) NOT NULL AUTO_INCREMENT,
  `Titre_Hist` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Resume_Hist` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Im_Hist` tinytext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id_Hist`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `paragraphe`
--

CREATE TABLE IF NOT EXISTS `paragraphe` (
  `Id_Hist` int(11) NOT NULL,
  `Id_Para` int(11) NOT NULL,
  `Text_Para` text COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id_Hist`,`Id_Para`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sauvegarde`
--

CREATE TABLE IF NOT EXISTS `sauvegarde` (
  `Id_User` int(11) NOT NULL,
  `Id_Hist` int(11) DEFAULT NULL,
  `Id_Choix` int(11) NOT NULL,
  `Id_Para` int(11) DEFAULT NULL,
  `Vie` int(11) DEFAULT NULL,
  `Inventaire` text COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id_User`,`Id_Choix`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user_et_admin`
--

CREATE TABLE IF NOT EXISTS `user_et_admin` (
  `Id_User` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_User` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mdp_User` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Admin?` tinyint(1) DEFAULT NULL,
  `Hist_EnCours` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id_User`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;
