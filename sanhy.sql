-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 29 sep. 2022 à 14:44
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sanhy`
--

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `id_formation` int NOT NULL AUTO_INCREMENT,
  `title` varchar(25) NOT NULL,
  `price` varchar(25) NOT NULL,
  `content1` text NOT NULL,
  `content2` text NOT NULL,
  `content3` text NOT NULL,
  `content4` text NOT NULL,
  `content5` text NOT NULL,
  `content6` text,
  `id_sector` int NOT NULL,
  PRIMARY KEY (`id_formation`),
  KEY `sector_id` (`id_sector`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id_formation`, `title`, `price`, `content1`, `content2`, `content3`, `content4`, `content5`, `content6`, `id_sector`) VALUES
(1, '14h EN LIGNE', '295', 'Connectez vous à la plateforme selon vos disponibilités 7j/7, 24h/24', 'Le tchat permet dans tous les modules d\'échanger avec votre formatrice ingénieure en agroalimentaire', 'Des vidéos, des quiz, des jeux, des synthèses, permettant une progression ludique et rythmée', 'Un guide pour construire votre PMS des documents modifiables pour votre établissement', 'Votre attestation de formation', NULL, 3),
(2, 'DANS VOS LOCAUX', 'Tarif sur devis', '2 jours à déterminer', 'Possible sur l\'Hérault et ses départements limitrophes', 'Interactions directes avec votre formatrice Ingénieure en Agroalimentaire, et un oeil neuf et extérieur sur votre établissement', 'Des documents personnalisés pour votre PMS', 'Votre attestation de formation', NULL, 3),
(3, 'EN LIGNE', '295', 'Connectez vous à la plateforme selon vos disponibilités 7j/7, 24h/24', 'Le tchat permet dans tous les modules d\'échanger avec votre formatrice ingénieure en agroalimentaire', 'Des vidéos, des quiz, des jeux, des synthèses, permettant une progression ludique et rythmée', 'Un guide pour construire votre PMS des documents modifiables pour votre établissement', 'Votre attestation officielle avec notre N°ROFHYA à présenter en cas de contrôle', NULL, 1),
(4, 'EN VISIO', '339', '3 séances en visio (avec ZOOM) sur 3 jours consécutifs', 'Interactions directes avec votre formatrice ingénieure en agroalimentaire', 'Des partages d\'écran, des quiz et des activités pour une classe virtuelle interactive et dynamique', 'Un guide pour construire votre PMS et des documents modifiables pour votre établissement', 'Votre attestation officielle avec notre N°ROFHYA à présenter en cas de contrôle', NULL, 1),
(5, 'EN SALLE', '345', '2 jours consécutifs en salle uniquement à Montpellier', 'Interactions directes avec votre formatrice ingénieure en agroalimentaire', 'Animation avec un support écran', 'Un guide pour construire votre PMS et des documents modifiables pour votre établissement', 'Votre attestation officielle avec notre N°ROFHYA à présenter en cas de contrôle', NULL, 1),
(6, 'DANS VOS LOCAUX', 'Tarif sur devis', '2 jours à déterminer', 'Possible sur l\'Hérault et ses départements limitrophes', 'Interactions directes avec votre formatrice ingénieure en agroalimentaire et un oeil neuf et extérieur sur votre établissement', 'Des documents personnalisés pour votre PMS', 'Votre attestation officielle avec notre N°ROFHYA à présenter en cas de contrôle', NULL, 1),
(7, '7h EN LIGNE', '179', 'Idéal pour les salariés qui doivent se mettre à jours sur les bonnes pratiques', 'Connectez vous à la plateforme selon vos disponibilités 7j/7, 24h/24', 'Le Chat permet dans tous les modules d\'échanger avec votre formatrice Ingénieure en Agroalimentaire', 'Des vidéos, des quiz, des jeux, des synthèses, permettant une progression ludique et rythmée', 'Votre attestation de formation', NULL, 2),
(8, '14h EN LIGNE', '295', 'Idéal pour les dirigeants ou comme formation initiale', 'Connectez vous à la plateforme selon vos disponibilités 7j/7, 24h/24', 'Le Chat permet dans tous les modules d\'échanger avec votre formatrice Ingénieure en Agroalimentaire', 'Des vidéos, des quiz, des jeux, des synthèses, permettant une progression ludique et rythmée', 'Un guide pour construire votre PMS et des documents modifiables pour votre établissement', 'Votre attestation de formation', 2),
(9, 'DANS VOS LOCAUX', 'Tarif sur devis', '1 ou 2 jours à déterminer', 'Possible sur l\'Hérault et ses départements limitrophes', 'Interactions directes avec votre formatrice Ingénieure en Agroalimentaire, et un oeil neuf et extérieur sur votre établissement', 'Des documents personnalisés pour votre PMS', 'Votre attestation de formation', NULL, 2),
(10, '21h EN LIGNE', '850', 'Connectez vous à la plateforme selon vos disponibilités 7j/7, 24h/24', 'Le Chat permet dans tous les modules d\'échanger avec votre formatrice Ingénieure en Agroalimentaire', 'Des vidéos, des quiz, des jeux, des synthèses, permettant une progression ludique et rythmée', 'Des exemples pratiques pour mettre les étapes de la méthode HACCP pas à pas', 'Votre attestation de formation', NULL, 4),
(11, '23h EN LIGNE + VISIO', '1050', 'Connectez vous à la plateforme pour la partie en ligne selon vos disponibilités 7j/7, 24h/24', 'Le Chat permet dans tous les modules d\'échanger avec votre formatrice Ingénieure en Agroalimentaire', 'Des vidéos, des quiz, des jeux, des synthèses, permettant une progression ludique et rythmée', 'Des exemples pratiques pour mettre les étapes de la méthode HACCP pas à pas', '2 fois 1h de visio en individuel avec votre formatrice', 'Votre attestation de formation', 4),
(12, 'DANS VOS LOCAUX', 'Tarif sur devis', 'Durée à déterminer', 'Possible sur l\'Hérault et ses départements limitrophes', 'Interactions directes avec votre formatrice Ingénieure en Agroalimentaire, et un oeil neuf et extérieur sur votre établissement', 'Une aide pour mettre en place pas à pas votre démarche HACCP, ou pour la remettre à jour', 'Votre attestation de formation', NULL, 4);

-- --------------------------------------------------------

--
-- Structure de la table `former`
--

DROP TABLE IF EXISTS `former`;
CREATE TABLE IF NOT EXISTS `former` (
  `id_former` int NOT NULL AUTO_INCREMENT,
  `former_name` varchar(25) NOT NULL,
  `former_firstname` varchar(25) NOT NULL,
  `former_description` text NOT NULL,
  PRIMARY KEY (`id_former`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `place`
--

DROP TABLE IF EXISTS `place`;
CREATE TABLE IF NOT EXISTS `place` (
  `id_place` int NOT NULL AUTO_INCREMENT,
  `place_name` varchar(25) NOT NULL,
  PRIMARY KEY (`id_place`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `place`
--

INSERT INTO `place` (`id_place`, `place_name`) VALUES
(1, 'visio'),
(2, 'room');

-- --------------------------------------------------------

--
-- Structure de la table `planning`
--

DROP TABLE IF EXISTS `planning`;
CREATE TABLE IF NOT EXISTS `planning` (
  `id_planning` int NOT NULL AUTO_INCREMENT,
  `planning_d1` int NOT NULL,
  `planning_d2` int DEFAULT NULL,
  `planning_d3` int DEFAULT NULL,
  `planning_month` varchar(25) NOT NULL,
  `planning_year` int NOT NULL,
  `planning_schedule` varchar(25) NOT NULL,
  `id_place` int NOT NULL,
  PRIMARY KEY (`id_planning`),
  KEY `fk_lier_place` (`id_place`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `sector`
--

DROP TABLE IF EXISTS `sector`;
CREATE TABLE IF NOT EXISTS `sector` (
  `sector_id` int NOT NULL AUTO_INCREMENT,
  `name_sector` varchar(25) NOT NULL,
  PRIMARY KEY (`sector_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `sector`
--

INSERT INTO `sector` (`sector_id`, `name_sector`) VALUES
(1, 'Restauration commerciale'),
(2, 'Collectivités'),
(3, 'Métiers de bouche'),
(4, 'Fabrication de produits');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_users` int NOT NULL AUTO_INCREMENT,
  `users_name` varchar(25) NOT NULL,
  `users_mail` varchar(50) NOT NULL,
  `users_password` varchar(250) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `users_name`, `users_mail`, `users_password`, `role`) VALUES
(3, 'Sandrine', 'sandy.arnaud@hotmail.fr', '$2y$10$LYOZHTofzlc91qoSXyatSuzNvE9jLPKuH/FRij/HGKGH4qDRnFA6W', 'admin'),
(4, 'a', 'a@a.fr', '$2y$10$jzW/lPaISWtKEPrvl16vH.qYp9lcXEOyCLUGK2I6U4ryPPebwmLui', 'admin');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `formation_ibfk_1` FOREIGN KEY (`id_sector`) REFERENCES `sector` (`sector_id`);

--
-- Contraintes pour la table `planning`
--
ALTER TABLE `planning`
  ADD CONSTRAINT `fk_lier_place` FOREIGN KEY (`id_place`) REFERENCES `place` (`id_place`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
