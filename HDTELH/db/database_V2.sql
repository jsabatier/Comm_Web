-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 12 mai 2022 à 19:58
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

--
-- Déchargement des données de la table `choix`
--

INSERT INTO `choix` (`Id_Choix`, `Id_Hist`, `Id_Para`, `Text_Choix`, `Id_Para_Suivant`) VALUES
(1, 1, 1, 'Patate accours vers la miette de pain', 5),
(1, 1, 8, 'Continuer', 0),
(1, 37, 1, 'C1', 1),
(1, 42, 1, 'Manger le routeur', 2),
(1, 42, 2, 'Faire une raclette', 1),
(1, 42, 3, 'Prendre des feutres', 2),
(1, 42, 4, 'Tomber en vélo', 0),
(2, 1, 1, 'Patate a peur et s\'éloigne au plus vite', 4),
(2, 37, 1, 'C2', 1),
(2, 42, 1, 'Casser le routeur', 3),
(2, 42, 2, 'Faire une fondue', 4),
(2, 42, 3, 'Prendre des crayons de couleurs', 0),
(2, 42, 4, 'Aller chercher du fromage', 2),
(3, 1, 1, 'Patate avance doucement vers la miette', 2),
(3, 37, 1, 'C3', 1),
(3, 42, 1, 'Jeter le routeur', 4),
(3, 42, 2, 'Faire une croziflette', 3),
(3, 42, 3, 'Prendre des pinceaux', 4),
(3, 42, 4, 'Se faire percuter par une voiture', 0),
(4, 1, 3, 'Il décide de la manger', 2),
(5, 1, 3, 'Il la renifle mais ne la mange pas et rentre chez lui', 4),
(6, 1, 4, 'Patate retourne dormir', 1),
(7, 1, 4, 'Après réflexion Patate décide de retourner voir la miette.', 3),
(8, 1, 4, 'En allant vers son lit Patate se cogne la tête contre son armoire et s\'évanouit.', 6),
(9, 1, 5, 'Continuez', 6),
(10, 1, 6, 'Patate va vers Peixotto', 7),
(11, 1, 6, 'Patate va vers Béthanie', 8),
(12, 1, 6, 'Patate décide de ne rien faire et se rendort.', 1),
(13, 1, 7, 'Patate va vers Béthanie ', 8),
(14, 1, 7, 'Patate ne comprends rien et reste sur place.', 6),
(15, 1, 7, 'Patate en a marre et décide de retourner chez lui et s’endort.', 1);

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
(1, 'Patate à l\'ENSC', 'Il était une fois patate.', 'Patate.jpg'),
(42, 'Patate le retour', 'Patate is back.', 'Patate_Retour.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `paragraphe`
--

CREATE TABLE `paragraphe` (
  `Id_Hist` int(11) NOT NULL,
  `Id_Para` int(11) NOT NULL,
  `Text_Para` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `paragraphe`
--

INSERT INTO `paragraphe` (`Id_Hist`, `Id_Para`, `Text_Para`) VALUES
(1, 1, 'Il était une fois un chat qui vivait sous le patio de l’ENSC qui s’appelait Patate. Patate était seul et s’ennuyait car il n’avait rien à faire de ses journées.\r\nUn jour, alors que la vie au-dessus de lui battait son plein, Patate vit une miette de pain tomber entre les lattes du plancher.\r\n'),
(1, 2, 'Il décide de la manger. Oh malheur ! La miette était empoisonnée... Patate tombe dans un coma.\r\n</br></br>\r\nFIN\r\n</br></br>\r\nPour retourner vers les histoires appuyez sur l\'icône livre en haut à gauche.\r\n'),
(1, 3, 'Lors de son trajet vers la miette, Patate entend un bruit sourd mais continue vers la miette.\r\n'),
(1, 4, 'Patate s\'éloigne et retourne dans son lit.'),
(1, 5, 'En accourant vers la miette de pain un bruit fort retentit, Patate se cogne la tête contre le patio et s\'évanouit.'),
(1, 6, 'Patate tombe dans un rêve, très profond. Une voix lui dit : “Va vers l’arrêt de tram le plus proche, tu trouveras ta destinée !”. Puis Patate se réveille.\r\n'),
(1, 7, 'Patate arrive à Peixotto mais il ne trouve rien … Un écureuil, s’approche de lui et lui crie dessus : “L’arrêt de tram le plus proche idiot !”.\r\n'),
(1, 8, 'Après moult péripéties, Patate arrive à Béthanie. Et là remarque dans le coin de son œil, un chat orange qui s’approche de lui !\r\n\"Bonjour, je m\'appelle Patata qui es tu ?\", lui dit-elle.\r\nSupris Patate lui répond :\"Moi je m\'appele Patate, viens jouer avec moi !\"\r\nEt depuis ce jour, grâce à Patata, plus jamais Patate n\'a connu l\'ennui.\r\n'),
(42, 1, ' Un routeur est un équipement réseau informatique assurant le routage des paquets. Son rôle est de faire transiter des paquets d\'une interface réseau vers une autre, au mieux, selon un ensemble de règles. Il y a habituellement confusion entre routeur et relais , car dans les réseaux Ethernet les routeurs opèrent au niveau de la couche 3 du modèle OSI .'),
(42, 2, 'À mi-chemin entre le gouda hollandais et l\'emmental suisse, le Leerdammer allie parfaitement puissance et gourmandise. Deux hommes sont à l\'origine de sa création : Cees Boterkopper, propriétaire d\'une petite laiterie dans la ville de Leerdam aux Pays-Bas, et Baastian Baars, dirigeant d\'une petite fromagerie dans une ville voisine.'),
(42, 3, 'coloriage [coloriage] NOM MASCULIN SINGULIER </br> Fait de colorier, résultat de cette action. </br> Mélange peu harmonieux de couleurs.'),
(42, 4, 'Lorsque les beaux jours ou les vacances d’été approchent, il n’est pas rare de croiser des usagers de la route très chargés et transportant sur leur véhicule un ou plusieurs vélos. Mais pour pouvoir être réalisé dans le respect de la législation, ces cycles doivent être installés sur des supports spécifiques nommés “porte-vélos”, pouvant se décliner sous différentes formes.');

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
(7, 'lou', 'lou', 'mdp', 0, NULL),
(8, 'correcteur', 'correcteur', 'mdp_correcteur_1234', 0, NULL),
(9, 'correcteur_admin', 'correcteur_admin', 'mdp_correcteur_1234', 1, NULL);

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
  MODIFY `Id_Hist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `user_et_admin`
--
ALTER TABLE `user_et_admin`
  MODIFY `Id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;
