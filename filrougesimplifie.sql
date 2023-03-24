-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 22 mars 2023 à 15:19
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `filrougesimplifie`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ident_order` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `ident_product` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `ident_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ident_user` (`ident_user`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `is_enabled` tinyint(1) DEFAULT NULL,
  `id_parent` int(11) DEFAULT NULL,
  `id_photo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_parent` (`id_parent`),
  KEY `id_photo` (`id_photo`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `is_enabled`, `id_parent`, `id_photo`) VALUES
(1, 'Shampoing', 'Description de shampoing', 1, 0, NULL),
(2, 'ApresShampoing', 'Description de ApresShampoing', 1, 0, NULL),
(3, 'Coiffant', 'Description de Coiffant', 1, 0, NULL),
(4, 'Soins', 'Description de Soins', 1, 0, NULL),
(5, 'CheveuxColores', 'Description de CheveuxColores', 1, 1, NULL),
(6, 'CheveuxSecs', 'Description de CheveuxSecs', 1, 1, NULL),
(7, 'CheveuxNormauxADeshydrates', 'Description de CheveuxNormauxADeshydrates', 1, 1, NULL),
(8, 'CheveuxGras', 'Description de CheveuxGras', 1, 1, NULL),
(9, 'CheveuxColores', 'Description de CheveuxColores', 1, 2, NULL),
(10, 'CheveuxSecs', 'Description de CheveuxSecs', 1, 2, NULL),
(11, 'CheveuxNormauxADeshydrates', 'description de CheveuxNormauxADeshydrates', 1, 2, NULL),
(12, 'CheveuxGras', 'description de CheveuxGras', 1, 2, NULL),
(13, 'Gel', 'description de gel', 1, 3, NULL),
(14, 'cireCheveux', 'description de cireCheveux', 1, 3, NULL),
(15, 'brillance', 'description de brillance', 1, 3, NULL),
(16, 'mousseCoiffante', 'description de mousseCoiffante', 1, 3, NULL),
(17, 'Soin CheveuxColores', 'description de Soin CheveuxColores', 1, 4, NULL),
(18, 'Soin CheveuxSecs', 'description de Soin CheveuxSecs', 1, 4, NULL),
(19, 'Soin CheveuxFins', 'description de Soin CheveuxFins', 1, 4, NULL),
(20, 'Soin CheveuxLongs', 'description de Soin CheveuxLongs', 1, 4, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `colors`
--

DROP TABLE IF EXISTS `colors`;
CREATE TABLE IF NOT EXISTS `colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(255) DEFAULT NULL,
  `hexcode` varchar(20) DEFAULT NULL,
  `description` text,
  `is_enabled` tinyint(1) DEFAULT NULL,
  `inc_number` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `colors`
--

INSERT INTO `colors` (`id`, `color`, `hexcode`, `description`, `is_enabled`, `inc_number`) VALUES
(1, 'Basique', 'No Hexcode', 'Basique, ne concerne pas la couleur', 1, 1),
(2, 'Violet Profond', '#7f00ff', 'Description de violet profond', 1, 2),
(3, 'Rose pastel', '#E5788F', 'Description de rose pastel', 1, 3),
(4, 'Vert kaki', '#F0E68C', 'description de vert kaki', 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `is_enabled` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `description` text,
  `price` decimal(10,2) DEFAULT NULL,
  `ident_product` int(11) DEFAULT NULL,
  `is_enabled` tinyint(1) DEFAULT NULL,
  `id_category` int(11) DEFAULT NULL,
  `id_discount` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_category` (`id_category`),
  KEY `id_discount` (`id_discount`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `gender`, `description`, `price`, `ident_product`, `is_enabled`, `id_category`, `id_discount`) VALUES
(1, 'Kérastase, Nutritive, Shampoing Hautement Nourrissant, pour Cheveux Extrêmement Secs, Bain Magistral', 'Femme', 'Le shampoing Bain Magistral Nutritive apporte toute la nutrition nécessaire aux cheveux sévèrement desséchés au quotidien Enrichi en complexe Irisome, en résine de benjoin et en céramide, il redonne force et vigueur à la chevelure en l\'hydratant et la réparant en profondeur <br><br> Il hydrate et nourrit intensément la fibre capillaire, la protège des agressions extérieures pour des cheveux doux, brillants et faciles à démêler <br><br> Répartir une noisette sur le cuir chevelu mouillé. Masser les racines du haut du cuir chevelu vers les tempes et la nuque. Rincer. Procéder à un second shampoing en émulsionnant les longueurs, puis rincer. Prolonger l\'expérience avec le Masque Magistral Nutritive pour une nutrition plus intense', '23.00', 100, 1, 6, NULL),
(2, 'Kérastase, Chroma Absolu, Shampoing Hydratant Protecteur Doux, Pour Cheveux Colorés Sensibilisés ou Abîmés Fins à Moyens, Bain Chroma Respect', 'Femme', 'Le shampoing Bain Chroma Respect hydrate et protège les cheveux colorés sensibilisés ou abîmés, fins à moyens. Enrichi en acides aminés et Centella Asiatica, il renforce la fibre et réduit sa porosité pour préserver la couleur de l\'affadissement. Il est sans sulfate, sans silicone et sans parabène. <br><br> Il hydrate la fibre en profondeur sans l\'alourdir, la rend plus forte et résistante tout en respectant et préservant l\'intensité de la couleur. <br><br> Appliquer sur cheveux mouillés en massant le cuir chevelu, puis rincer soigneusement. Procéder à un second shampoing, en insistant sur les longueurs et pointes et rincer abondamment. Continuer votre routine avec le Fondant Cica Chroma ou le Soin Acide Chroma Gloss.', '23.00', 101, 1, 5, NULL),
(3, 'LUXÉOL - Shampooing Cheveux Gras - Assainit & Purifie - Fraîcheur, Douceur & Légèreté - Soin Cheveux Normaux À Gras - 86% D\'Ingrédients D\'Origine Naturelle - Fabriqué En France', 'Mixte', 'Grace à sa formule enrichie en Vitamine PP et Extrait de Moringa, le Shampooing Cheveux Gras Luxéol nettoie, purifie (2) les cheveux et assainit (6) le cuir chevelu\r\n<br><br> Cheveux normaux à gras<br><br> Testé sous contrôle dermatologique', '23.00', 102, 1, 8, NULL),
(4, 'Schwarzkopf - Gliss - Shampooing Aqua Revive - Hair Repair - Hydrate Sans Alourdir - Cheveux Normaux à Secs - Complexe Hyaluron et Algue Marine - 90 % d\'Ingrédients d\'Origine Naturelle', 'Mixte', 'Le Shampooing Hydratant Schwarzkopf Gliss Aqua Revive est conçu pour laver les cheveux en douceur au quotidien tout en les hydratant sans les alourdir. Sa formule, composée de 90 pourcent d’ingrédients d’origine naturelle (incluant de l\'eau), est enrichie en COMPLEXE HYALURON, qui participe à l\'apport d\'hydratation et en ALGUE MARINE. Les 10 pourcent restants participent principalement à la sensorialité et à la bonne conservation du produit.', '23.00', 103, 1, 7, NULL),
(5, 'Après-shampooing cheveux colorés Color Extend Magnetics Redken', 'mixte', 'L\'après-shampooing Color Extend Magnetics de Redken protège l\'intensité et la brillance de la coloration en lissant la cuticule de la fibre. Ce soin professionnel restaure les zones fragilisées du cheveu et permet un démêlage plus facile pour un toucher lisse et soyeux. Son complexe \'Charge Attract\' est composé de micro-soins aminés chargés positivement pour pénétrer la fibre capillaire et sceller la couleur.', '23.00', 201, 1, 9, NULL),
(6, 'APRÈS-SHAMPOOING KÉRATINE CHEVEUX TRÈS SECS ET ABIMÉS KREOGEN', 'mixte', '- Hydrate vos cheveux<br><br>\r\n- Redonne de la vitalité, force et brillance<br><br>\r\n- Évite la casse et lutte contre l\'apparition des fourches', '23.00', 202, 1, 10, NULL),
(7, 'Après-Shampoing Cheveux Secs à Très Secs', 'mixte', '- Que fait-il ?\r\nCet après-shampoing naturel nourrit, assouplit, hydrate et rend vos cheveux plus beaux, quelle que soit leur nature.\r\nComment l\'utiliser ?\r\nÀ utiliser à chaque lavage de cheveux, en complément de votre shampoing purifiant, antipelliculaire ou fortifiant Horace.\r\n\r\nParfum : Vert Floral Frais\r\n\r\nC\'est clean : fabriqué en France, sans parabène, sans silicone, sans huile minérale, sans PEG', '23.00', 203, 1, 11, NULL),
(8, 'Après-Shampooing Fraicheur Purifiante', 'mixte', 'Sa formule fondante non grasse associe 5 huiles essentielles (menthe, thym, pamplemousse, cèdre et lavande) à un vinaigre végétal purifiant pour des cheveux frais et légers. La distillation des huiles essentielles est au coeur de L\'Occitane. C\'est un procédé qui capture la plus forte concentration des bénéfices d\'une plante. Cela fait des années en Provence que notre fondateur, Olivier Baussan, a pour la première fois distillé du romarin et de la lavande. Notre gamme Aromachologie mélange les huiles essentielles afin d\'offrir des soins capillaires efficaces et parfumés qui répondent à tous les besoins.', '23.00', 200, 1, 9, NULL),
(9, 'Crème coiffante cream pomade Horace', 'mixte', 'Que fait-elle ?\r\nCette Crème Coiffante naturelle offre à vos cheveux une fixation modérée et un effet naturel. Et en plus, elle se rince facilement à l’eau.\r\n\r\nComment l\'utiliser ?\r\nUne noisette de produit suffit : à utiliser dès que vous souhaitez que vos cheveux restent en place.\r\n\r\nParfum : Pamplemousse, Menthe & Citron\r\n\r\nC\'est clean : fabriqué en France, sans parabène, sans silicone, sans huile minérale.', '23.00', 300, 1, 13, NULL),
(10, 'Cire Coiffante wax pomade', 'mixte', 'Que fait-elle ?\r\nCette Cire Coiffante naturelle offre à vos cheveux une fixation forte et un effet mat. Le tout se rince facilement à l’eau\r\n\r\nComment l\'utiliser ?\r\nFaites chauffer une noisette de produit entre vos mains puis appliquez de la racine jusqu’aux pointes en plaçant vos cheveux selon vos envies.\r\n\r\nParfum : Agrume Boisé\r\n\r\nC\'est clean : fabriqué en France, sans parabène, sans silicone, sans huile minérale.', '23.00', 301, 1, 14, NULL),
(11, 'Spray Brillance Ducastel Professionnel', 'mixte', 'Spray Brillance de Ducastel Professionnel pour une finition ultra-brillante et ultra-soyeuse. Look glossy et un parfum qui neutralise les odeurs non désirées.', '23.00', 302, 1, 15, NULL),
(12, 'Tecni Art Mousse Full Volume Extra L\'Oréal Professionnel ', 'mixte', 'Tecni Art de L\'Oréal Professionnel est une Mousse volume fixation Extra forte pour donner du volume et un maintien optimal sans alourdir le cheveux.', '23.00', 303, 1, 16, NULL),
(13, 'Masque cheveux réparateur\nCéramides biomimétiques 0,3% + huile d\'avocat', 'mixte', 'Répare et nourrit en profondeur la fibre capillaire, lisse et adoucit les cheveux et prévient l\'apparition des fourches.\r\n\r\n98% d’ingrédients d’origine naturelle.', '23.00', 400, 1, 17, NULL),
(14, 'HUILE DE SOIN CHEVEUX SECS', 'mixte', 'Synergie de 8 huiles végétales BIO réputées pour leurs vertus merveilleuses sur les cheveux, cette huile de soin cheveux BIO s\'utilise un bain d\'huile, en friction ou en soin sans rinçage sur les pointes. Ce soin végétal d\'exception alliant Ricin, Coco, Amla, Avocat, Olive, Brocoli, Jojoba et Moutarde, fortifie, nourrit, répare, fait briller et discipline les cheveux au naturel en toute simplicité. Cette huile s\'utilise pure ou agrémentée d\'actifs, huiles essentielles ou fragrances de votre choix pour composer votre soin 100% personnalisé adapté au soin de vos cheveux et à toutes vos envies ! ', '23.00', 401, 1, 18, NULL),
(15, 'Traitement cuir chevelu densifiant\r\nPeptides 2% + extrait de gingembre', 'mixte', 'Renforce l\'ancrage des cheveux pour limiter la chute tout en stimulant la repousse. Apporte du volume à la chevelure.\r\n\r\nTexture légère, pénètre rapidement, fini non gras, non collant.', '23.00', 402, 1, 19, NULL),
(16, 'La biosthetique', 'mixte', 'Le coffret pour la brillance des cheveux longs.', '23.00', 403, 1, 20, NULL),
(17, 'Produit 404 non trouvé', 'mixte', '404, n\'existe pas', '13.37', 404, 0, 20, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `product_color_size`
--

DROP TABLE IF EXISTS `product_color_size`;
CREATE TABLE IF NOT EXISTS `product_color_size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  KEY `color_id` (`color_id`),
  KEY `size_id` (`size_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `product_photo`
--

DROP TABLE IF EXISTS `product_photo`;
CREATE TABLE IF NOT EXISTS `product_photo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_photo` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_product` (`id_product`),
  KEY `id_photo` (`id_photo`,`id_product`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sizes`
--

DROP TABLE IF EXISTS `sizes`;
CREATE TABLE IF NOT EXISTS `sizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `size` varchar(255) DEFAULT NULL,
  `inc_number` int(11) DEFAULT NULL,
  `description` text,
  `is_enabled` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sizes`
--

INSERT INTO `sizes` (`id`, `size`, `inc_number`, `description`, `is_enabled`) VALUES
(1, 'S', 1, '200 ml', 1),
(2, 'M', 2, '250 ml', 1),
(3, 'L', 3, '300 ml', 1),
(4, 'XL', 4, '500 ml', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
