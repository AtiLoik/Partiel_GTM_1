-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour partiel_1_gtm
DROP DATABASE IF EXISTS `partiel_1_gtm`;
CREATE DATABASE IF NOT EXISTS `partiel_1_gtm` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `partiel_1_gtm`;

-- Listage de la structure de la table partiel_1_gtm. cours
DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `Id` int(11) DEFAULT NULL,
  `Theme` varchar(50) DEFAULT NULL,
  `NbHeures` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table partiel_1_gtm.cours : ~0 rows (environ)
DELETE FROM `cours`;
/*!40000 ALTER TABLE `cours` DISABLE KEYS */;
/*!40000 ALTER TABLE `cours` ENABLE KEYS */;

-- Listage de la structure de la table partiel_1_gtm. directeur
DROP TABLE IF EXISTS `directeur`;
CREATE TABLE IF NOT EXISTS `directeur` (
  `Id` int(11) DEFAULT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Tel` int(11) DEFAULT NULL,
  `MDP` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table partiel_1_gtm.directeur : ~1 rows (environ)
DELETE FROM `directeur`;
/*!40000 ALTER TABLE `directeur` DISABLE KEYS */;
INSERT INTO `directeur` (`Id`, `Nom`, `Prenom`, `Tel`, `MDP`) VALUES
	(1, 'DirNom', 'DirPrenom', 29746381, '123');
/*!40000 ALTER TABLE `directeur` ENABLE KEYS */;

-- Listage de la structure de la table partiel_1_gtm. ecole
DROP TABLE IF EXISTS `ecole`;
CREATE TABLE IF NOT EXISTS `ecole` (
  `Id` int(11) DEFAULT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Mail` varchar(50) DEFAULT NULL,
  `Adresse` varchar(50) DEFAULT NULL,
  `Tel` int(11) DEFAULT NULL,
  `Directeur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table partiel_1_gtm.ecole : ~0 rows (environ)
DELETE FROM `ecole`;
/*!40000 ALTER TABLE `ecole` DISABLE KEYS */;
/*!40000 ALTER TABLE `ecole` ENABLE KEYS */;

-- Listage de la structure de la table partiel_1_gtm. enseignant
DROP TABLE IF EXISTS `enseignant`;
CREATE TABLE IF NOT EXISTS `enseignant` (
  `Id` int(11) DEFAULT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Mail` varchar(50) DEFAULT NULL,
  `Adresse` varchar(50) DEFAULT NULL,
  `Tel` int(11) DEFAULT NULL,
  `Matiere` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table partiel_1_gtm.enseignant : ~0 rows (environ)
DELETE FROM `enseignant`;
/*!40000 ALTER TABLE `enseignant` DISABLE KEYS */;
/*!40000 ALTER TABLE `enseignant` ENABLE KEYS */;

-- Listage de la structure de la table partiel_1_gtm. etudiant
DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Mail` varchar(50) DEFAULT NULL,
  `Adresse` varchar(50) DEFAULT NULL,
  `Telephone` int(11) DEFAULT NULL,
  `Date_Naissance` varchar(50) DEFAULT NULL,
  `Statut` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Listage des données de la table partiel_1_gtm.etudiant : ~1 rows (environ)
DELETE FROM `etudiant`;
/*!40000 ALTER TABLE `etudiant` DISABLE KEYS */;
INSERT INTO `etudiant` (`Id`, `Nom`, `Prenom`, `Mail`, `Adresse`, `Telephone`, `Date_Naissance`, `Statut`) VALUES
	(1, 'TestNom', 'TestPrenom', 'Test@mail.fr', 'AdrTest', 1273863, '1998-06-26', NULL);
/*!40000 ALTER TABLE `etudiant` ENABLE KEYS */;

-- Listage de la structure de la table partiel_1_gtm. statut
DROP TABLE IF EXISTS `statut`;
CREATE TABLE IF NOT EXISTS `statut` (
  `Id` int(11) DEFAULT NULL,
  `Libelle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table partiel_1_gtm.statut : ~3 rows (environ)
DELETE FROM `statut`;
/*!40000 ALTER TABLE `statut` DISABLE KEYS */;
INSERT INTO `statut` (`Id`, `Libelle`) VALUES
	(1, 'Etudiant'),
	(2, 'Enseignant'),
	(3, 'Directeur');
/*!40000 ALTER TABLE `statut` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
