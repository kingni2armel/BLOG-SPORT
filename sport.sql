-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 29 sep. 2021 à 03:50
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sport`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `login`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categorie` int(111) NOT NULL,
  `nom_categorie` varchar(220) NOT NULL,
  `commentaire` text NOT NULL,
  `dateCreation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `nom_categorie`, `commentaire`, `dateCreation`) VALUES
(4, 'football', '                            \r\nljfldnfkdfkdfkdf', '2021-09-30');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id_image` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `id_news` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`id_news`, `email`, `message`, `date`) VALUES
(12, 'kingni@gmail.com', 'africakhshdsdjsbdjbdjsbdjbsdjbd', '2021-09-12 02:31:15'),
(15, 'bobo@gmail.com', 'le bobo du cameroune', '2021-09-12 02:52:32'),
(16, 'pichou@gmail.com', 'konami le chef javascript\r\n', '2021-09-12 03:02:39'),
(17, 'guy@gmail.com', 'demande de publication', '2021-09-17 05:27:49'),
(18, 'yannick@gmail.com', 'toto rinato\r\n', '2021-09-17 05:28:50'),
(19, 'cisse@gmail.com', 'kieuigdibcuguolsfvguofduosfusdyfusyfdvsudf', '2021-09-17 02:12:03');

-- --------------------------------------------------------

--
-- Structure de la table `prestataire`
--

CREATE TABLE `prestataire` (
  `id_prestaire` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `prestataire`
--

INSERT INTO `prestataire` (`id_prestaire`, `login`, `password`, `date_creation`) VALUES
(3, 'kingni boris', 'kingni321', '2021-09-12 03:45:59'),
(4, 'jordasn', 'mganou', '2021-09-12 04:04:53'),
(5, 'kingni21', 'boris321', '2021-09-16 03:14:07'),
(6, 'oumarcisse', 'ou;qrciss', '2021-09-18 11:28:47'),
(7, 'djimi', 'djimi321', '2021-09-21 08:27:06');

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

CREATE TABLE `publication` (
  `id_publication` int(11) NOT NULL,
  `id_categorie` int(11) DEFAULT NULL,
  `description` text NOT NULL,
  `datePublication` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `file_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `publication_prestataire`
--

CREATE TABLE `publication_prestataire` (
  `id_publication_prestataire` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_prestaire` int(11) NOT NULL,
  `nom_prestataire` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `datePublication` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `file_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `publication_prestataire`
--

INSERT INTO `publication_prestataire` (`id_publication_prestataire`, `id_categorie`, `id_prestaire`, `nom_prestataire`, `description`, `datePublication`, `name`, `file_url`) VALUES
(8, 47, 5, 'kingni21', '\r\n  fihfiehfief                                                              ', '2021-09-15', 'charbonne.png', '../image_prestataire/charbonne.png'),
(11, 47, 4, 'jordasn', 'roger federrer a gagner le tournoi de roland garros 2022\r\n                                                                ', '2022-02-16', 'wordpress2.png', '../image_prestataire/wordpress2.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id_news`);

--
-- Index pour la table `prestataire`
--
ALTER TABLE `prestataire`
  ADD PRIMARY KEY (`id_prestaire`);

--
-- Index pour la table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id_publication`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Index pour la table `publication_prestataire`
--
ALTER TABLE `publication_prestataire`
  ADD PRIMARY KEY (`id_publication_prestataire`),
  ADD KEY `id_categorie` (`id_categorie`),
  ADD KEY `publication_prestataire_ibfk_1` (`id_prestaire`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categorie` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `prestataire`
--
ALTER TABLE `prestataire`
  MODIFY `id_prestaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `publication`
--
ALTER TABLE `publication`
  MODIFY `id_publication` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `publication_prestataire`
--
ALTER TABLE `publication_prestataire`
  MODIFY `id_publication_prestataire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `publication`
--
ALTER TABLE `publication`
  ADD CONSTRAINT `publication_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`);

--
-- Contraintes pour la table `publication_prestataire`
--
ALTER TABLE `publication_prestataire`
  ADD CONSTRAINT `publication_prestataire_ibfk_1` FOREIGN KEY (`id_prestaire`) REFERENCES `prestataire` (`id_prestaire`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
