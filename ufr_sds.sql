-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 25 mai 2023 à 16:52
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `campus`
--

-- --------------------------------------------------------

--
-- Structure de la table `ufr_sds`
--

CREATE TABLE `ufr_sds` (
  `nom` varchar(20) NOT NULL,
  `prénom` varchar(20) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `genre` varchar(20) NOT NULL,
  `date_dentrée` date NOT NULL,
  `personne_à_prévenir` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ufr_sds`
--

INSERT INTO `ufr_sds` (`nom`, `prénom`, `date_de_naissance`, `genre`, `date_dentrée`, `personne_à_prévenir`) VALUES
('Garba', 'Faridatou', '2023-08-27', 'Femme', '2021-12-11', 'Garba Kouka 70281686'),
('Sawadogo', 'Edwige', '2002-09-10', 'Femme', '2023-05-26', 'Sawadogo Jépherin 70 00 00 00'),
('Dabone', 'Madina', '2001-10-20', 'Femme', '2023-05-01', 'Kabore Yann 62 56 56 61'),
('Kabore ', 'Yann', '1997-04-07', 'Homme', '2023-05-02', 'Dabone  Madina 71 53 49 42'),
('Paul ', 'Emmanuel Azar', '1997-06-04', 'Homme', '2023-05-02', 'Kabore Yann 62 56 56 61'),
('Somda', 'Aristide', '2021-06-04', 'Homme', '2023-05-15', 'Garba Tegawende 51 90 94 37');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
