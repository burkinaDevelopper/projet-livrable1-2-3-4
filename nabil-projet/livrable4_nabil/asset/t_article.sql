-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 14 mai 2024 à 13:55
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `4ipdw_2023`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_article`
--

CREATE TABLE `t_article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `t_article`
--

INSERT INTO `t_article` (`id`, `title`, `date`, `path`) VALUES
(1, 'Pascal Vanderveeren, avocat de Patokh Chodiev dans l’affaire du Kazakhate, est décédé ', '2023-01-17', 'article-1.jpg'),
(2, 'Une prise d’otage en cours à Saint-Gilles', '2023-01-18', 'article-2.png'),
(3, 'Carton plein pour le lancement du bon d’Etat à un an', '2023-01-17', 'article-3.jpg'),
(4, 'Anderlecht enlève des poubelles pour éviter les dépots clandestins ', '2023-01-18', 'article-4.png'),
(5, 'Moins d’un francophone sur deux choisit le néerlandais comme première langue en secondaire', '2023-01-17', 'article-5.jpg'),
(6, 'Des orages attendus dans l’après-midi ', '2023-06-18', 'article-6.jpg'),
(7, 'Mondiaux d’athlétisme : Cynthia Bolingo 5e de la finale du 400m ', '2023-05-17', 'article-7.png'),
(8, 'La Maison Hannon a accueilli son 10.000e visiteur ce mercredi ', '2024-01-18', 'article-8.png'),
(9, 'Rentrée scolaire : l’ASBL “Solidarité Grands Froids” distribue des kits destinés aux enfants vivants sous le seuil de pauvreté ', '2023-01-19', 'article-9.png'),
(10, '“Valorisez l’eau de pluie” : Laeken invite ses citoyens à lutter contre les inondations', '2023-01-18', 'article-10.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_article`
--
ALTER TABLE `t_article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `t_article`
--
ALTER TABLE `t_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
