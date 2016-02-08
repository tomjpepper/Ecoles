-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 31 Mars 2015 à 13:55
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `actu`
--

-- --------------------------------------------------------

--
-- Structure de la table `article_like`
--

CREATE TABLE IF NOT EXISTS `article_like` (
  `id_user` int(11) NOT NULL,
  `url_article` varchar(200) NOT NULL,
  PRIMARY KEY (`url_article`),
  UNIQUE KEY `url_article` (`url_article`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article_like`
--

INSERT INTO `article_like` (`id_user`, `url_article`) VALUES
(15, 'http://france3-regions.francetvinfo.fr/poitou-charentes/2015/03/25/barcelona-world-race-victoire-du-duo-bernard-stamm-jean-le-cam-687465.html'),
(15, 'http://france3-regions.francetvinfo.fr/poitou-charentes/2015/03/26/des-trafiquants-d-heroine-devant-la-justice-poitiers-687791.html'),
(15, 'http://france3-regions.francetvinfo.fr/poitou-charentes/2015/03/26/la-rochelle-s-associe-l-operation-mondiale-earth-hour-4-batiments-seront-eteints-les-27-28-et-29-mars-688001.html'),
(15, 'http://france3-regions.francetvinfo.fr/poitou-charentes/2015/03/26/le-beurre-d-echire-79-sur-la-table-de-l-elysee-687701.html'),
(15, 'http://france3-regions.francetvinfo.fr/poitou-charentes/2015/03/26/saintes-17-michel-baron-est-decede-688119.html'),
(15, 'http://france3-regions.francetvinfo.fr/poitou-charentes/2015/03/26/un-jeudi-tout-gris-et-sous-la-pluie-687383.html'),
(16, 'http://france3-regions.francetvinfo.fr/poitou-charentes/2015/03/26/les-titres-de-votre-edition-regionale-du-1920-ce-jeudi-26-mars-688415.html'),
(16, 'http://france3-regions.francetvinfo.fr/poitou-charentes/2015/03/26/poitou-charentes-le-baroud-d-honneur-des-salaries-de-moryglobal-688461.html'),
(16, 'http://france3-regions.francetvinfo.fr/poitou-charentes/2015/03/26/projet-831-tot-ce-matin-les-chefs-d-entreprise-ont-bloque-la-rocade-rochelaise-687863.html'),
(16, 'http://france3-regions.francetvinfo.fr/poitou-charentes/2015/03/29/second-tour-des-elections-departementales-quelle-participation-midi-en-poitou-charente-690199.html');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `contenue` varchar(500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `id_user`, `contenue`, `date`) VALUES
(15, 15, 'Tom est extrêmement moche !!!!!\r\n ', '2015-03-23'),
(16, 15, 'bonjour', '2015-03-23');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE IF NOT EXISTS `inscription` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(60) NOT NULL,
  `Pseudo` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mdp` varchar(300) NOT NULL,
  `DateNaiss` varchar(20) NOT NULL,
  `Admin` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Pseudo` (`Pseudo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `inscription`
--

INSERT INTO `inscription` (`Id`, `Nom`, `Prenom`, `Pseudo`, `Email`, `Mdp`, `DateNaiss`, `Admin`) VALUES
(1, 'Bonnifait', 'Alex', 'Alexlek', 'alexandre1779@gmail.com', '0c271f79661f1c2a2e36f094a1e21a98', '1995-10-05', 1),
(14, 'GUILLON', 'Alexia', 'AGK', 'blabla@hotmail.com', '85edfe3f5c622fee887ee9b69a1fa27c', '1996-10-03', 0),
(15, 'Bonnifait ', 'Alexandre', 'Alex', 'alexandre1779@gmail.com', '07099a3d4775d87cfac8feaca66691bf', '1995-10-05', 0),
(16, 'tom', 'tom', 'tom', 'tom@lol.fr', '34b7da764b21d298ef307d04d8152dc5', '1994-08-01', 0);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article_like`
--
ALTER TABLE `article_like`
  ADD CONSTRAINT `article_like_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `inscription` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `inscription` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
