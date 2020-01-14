-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 14 jan. 2020 à 09:01
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `star_flight`
--

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
CREATE TABLE IF NOT EXISTS `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20191217075030', '2019-12-17 07:50:44'),
('20191217075149', '2019-12-17 07:51:54'),
('20191220130210', '2019-12-20 13:02:28'),
('20191220131222', '2019-12-20 13:12:31'),
('20191220132025', '2019-12-20 13:20:32'),
('20191220135426', '2019-12-20 13:54:33'),
('20191220135856', '2019-12-20 14:01:54'),
('20200107074233', '2020-01-07 07:42:48'),
('20200113133308', '2020-01-13 13:33:16'),
('20200113152735', '2020-01-13 15:28:07');

-- --------------------------------------------------------

--
-- Structure de la table `planet`
--

DROP TABLE IF EXISTS `planet`;
CREATE TABLE IF NOT EXISTS `planet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `planet`
--

INSERT INTO `planet` (`id`, `name`, `value`) VALUES
(1, 'stanton_1', 'Stanton I - MicroTech'),
(2, 'stanton_2', 'Stanton II - Hurston'),
(3, 'stanton_3', 'Stanton III - ArcCorp'),
(4, 'stanton_4', 'Stanton IV - Crusader'),
(5, 'terra_1', 'Terra - Terra'),
(6, 'terra_2', 'Terra - Gen'),
(7, 'terra_3', 'Terra - Pike'),
(8, 'terra_4', 'Terra - Aero');

-- --------------------------------------------------------

--
-- Structure de la table `space_ship`
--

DROP TABLE IF EXISTS `space_ship`;
CREATE TABLE IF NOT EXISTS `space_ship` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity` smallint(6) DEFAULT NULL,
  `speed` int(11) DEFAULT NULL,
  `protect` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cruise_type` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `space_ship`
--

INSERT INTO `space_ship` (`id`, `name`, `img_url`, `description`, `capacity`, `speed`, `protect`, `cruise_type`) VALUES
(1, '600i', 'img/ship/600i.jpg', 'Description : Que le voyage commence avec le 2947 600i d\'Origin Jumpworks. Ce navire de luxe polyvalent \r\n        d\'Origin Jumpworks présente une conception de coque extrêmement détaillée qui équilibre les\r\n         performances et la polyvalence dans une forme élégante et intemporelle. Le 600i est conçu avec\r\n        une technologie modulaire de pointe, vous permettant de personnaliser votre navire selon vos besoins.\r\n        Vous cherchez à marquer votre nom dans l\'histoire avec la découverte d\'un nouveau système d\'étoiles?\r\n         Le module Explorer du 600i échange le salon contre une station de numérisation robuste ainsi que\r\n         des points de connexion supplémentaires pour augmenter encore plus l\'efficacité du navire.', 400, 800000, 'Systeme de protection et armement : tourelles,missiles,bouclier d\'energie renforcé, radar à spectre large', 1),
(2, '890 jump', 'img/ship/600i.jpg', 'Description : Avec un extérieur élégant et élégant qui dément son intérieur spacieux, \r\n        le 890 Jump est une véritable merveille d\'ingénierie;\r\n         conçu pour impressionner sous tous les angles en combinant un design unique et innovant avec les meilleurs matériaux et la technologie la plus avancée.\r\n         Le résultat est un vaisseau d\'une classe à part, un chef-d\'œuvre digne du nom ORIGIN.', 1600, 500900, 'Systeme de protection et armement : tourelles,missiles,bouclier d\'energie renforcé, radar à spectre large', 2),
(3, 'Constellation Aquila', 'img/ship/aquila.jpg', 'Description : Explorez tous les horizons lointains! Le Constellation Aquila dispose d\'un cockpit\r\n         redessiné pour une visibilité maximale, de capteurs avancés et d\'un rover Ursa embarqué pour \r\n        l\'exploration planétaire. Voyons ce qui existe!', 960, 24000, 'Systeme de protection et armement : tourelles,missiles,bouclier d\'energie renforcé, radar à spectre large', 3);

-- --------------------------------------------------------

--
-- Structure de la table `trips`
--

DROP TABLE IF EXISTS `trips`;
CREATE TABLE IF NOT EXISTS `trips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `space_ship_id` int(11) DEFAULT NULL,
  `type` smallint(6) NOT NULL,
  `departure_date` datetime NOT NULL,
  `arrival_date` datetime DEFAULT NULL,
  `origin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arrival` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_AA7370DA4242EA35` (`space_ship_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roles` json NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `identifiant`, `password`, `mail`, `roles`) VALUES
(2, 'ErChouSam', 'Dslnnlol1', 'samy0221@laposte.net', '{\"ROLE_ADMIN\": true}');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `trips`
--
ALTER TABLE `trips`
  ADD CONSTRAINT `FK_AA7370DA4242EA35` FOREIGN KEY (`space_ship_id`) REFERENCES `space_ship` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
