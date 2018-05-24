-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 24 Mai 2018 à 16:30
-- Version du serveur :  5.7.22-0ubuntu0.16.04.1
-- Version de PHP :  7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bananastore`
--

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` int(100) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `photo`, `description`, `quantity`, `is_active`) VALUES
(1, 'bananes', 56, 'http://www.fondation-louisbonduelle.org/wp-content/uploads/2016/11/banane-plantain-legumes-bonduelle-e1478531950564.png', 'bananes de guadeloupe', 120, 1),
(2, 'papayes', 52, 'https://observatoire-des-aliments.fr/wp-content/uploads/2013/03/papaye.jpg', 'papayes de Polynesie', 250, 0),
(3, 'goyaves', 56, 'http://www.permaculteurs.com/wp-content/uploads/2014/11/permaculteurs_2015-06-02_12-44-12.jpg', 'goyaves du chine', 500, 1),
(4, 'Pommes', 98, 'https://www.midnightvaper.ca/621-home_default/pomme-apple-bablito.jpg', 'Pommes de Normandie', 450, 1),
(5, 'Fraises', 125, 'https://www.corsicavap.com/727-thickbox_default/fraises.jpg', 'Fraise de Plougastel', 600, 1),
(6, 'Ananas', 120, 'https://www.auchandirect.fr/backend/media/products_images/0N_57268.jpg', 'Ananas de Martinique', 50, 1),
(7, 'Kiwi', 54, 'https://media.mercola.com/assets/images/foodfacts/kiwifruit-nutrition-facts.jpg', 'Kiwis de Corse', 300, 1),
(8, 'Cerises ', 125, 'https://www.aroma-zone.com/cms/sites/default/files/fiche_technique/fragrances_cosmetiques/Visuel_cerise-exquise.png', 'Cerises du Japon', 5000, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `lastname`, `firstname`, `email`, `password`) VALUES
(3, 'ESTWOOD', 'Clint', 'estwood.clint@hotmail.fr', 1234),
(4, 'DENIRO', 'ROBERT', 'robertdenireo@sfr.fr', 78910),
(5, 'Dalton', 'Bob', 'bob@gmail.com', 1234);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
