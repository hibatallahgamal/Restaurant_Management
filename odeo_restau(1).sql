-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 07 juin 2022 à 23:20
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `odeo_restau`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact_us`
--

CREATE TABLE `contact_us` (
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `contact_us`
--

INSERT INTO `contact_us` (`name`, `email`, `subject`, `message`) VALUES
('hiba', 'gmlhibatallah@gmail.com', 'test', 'test'),
('yasser', 'yasserimzi@gmail.com', 'rating service', 'nice service,we had a great time.'),
('himi', 'hibahimi@gmail.com', 'experience', 'i loved your lobster rolls.');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `ingrediants` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`id`, `name`, `ingrediants`, `price`) VALUES
(1, 'Lobster Bisque', 'Lorem,deren,trator,filede,nerada', 350),
(2, 'Bread Barrel', 'Lorem,deren,trator,filede,nerada', 65),
(3, 'Crab Cake', 'Lorem,deren,trator,filede,nerada', 250),
(4, 'Caesar Selection', 'Lorem,deren,trator,filede,nerada', 120),
(5, 'Tuscan Grilled', 'Grilled chicken with provolone, artichoke hearts, and roasted red pesto ', 180),
(6, 'Mozzarella stick', 'Lorem,deren,trator,filede,nerada', 90),
(7, 'Greek Salad', 'Fresh spinach, crisp romaine, tomatoes, and Greek olives ', 100),
(8, 'Spinach Salad ', 'Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette ', 100),
(10, 'Lobster Roll', 'Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll ', 160);

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

CREATE TABLE `order` (
  `id` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `date_o` int(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `order`
--

INSERT INTO `order` (`id`, `price`, `quantity`, `date_o`) VALUES
(1, 25, 1, 0),
(2, 216, 3, 0);

-- --------------------------------------------------------

--
-- Structure de la table `r_table`
--

CREATE TABLE `r_table` (
  `id` int(225) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `phone` int(255) NOT NULL,
  `r_date` varchar(255) COLLATE utf8mb4_bin NOT NULL DEFAULT current_timestamp(),
  `time` time(6) NOT NULL DEFAULT current_timestamp(),
  `nbr_ppl` int(255) NOT NULL,
  `msg` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `r_table`
--

INSERT INTO `r_table` (`id`, `name`, `email`, `phone`, `r_date`, `time`, `nbr_ppl`, `msg`) VALUES
(3, 'yasser', 'imziyasser@gmail.com', 615789645, '15/06/2021', '00:00:18.000000', 4, 'none'),
(4, 'salma', 'salma@gmail.com', 689521366, '9/04/2022', '00:00:13.000000', 1, 'none'),
(5, 'mouad', 'mouad@gmail.com', 611442358, '11/02/2022', '00:00:11.000000', 5, 'we need a baby chair'),
(6, 'hamza', 'hamza@gmail.com', 614853269, '5/12/2022', '00:00:18.000000', 3, 'none'),
(8, 'taha', 'taha@gmail.com', 625457863, '4/03/2022', '00:00:20.000000', 6, 'none\r\n'),
(9, 'hiba', 'gmlhibatallah@gmail.com', 675675157, '7/2/2022', '00:00:15.000000', 2, 'none');

-- --------------------------------------------------------

--
-- Structure de la table `sign_up_client`
--

CREATE TABLE `sign_up_client` (
  `id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `sign_up_client`
--

INSERT INTO `sign_up_client` (`id`, `name`, `email`, `password`) VALUES
(1, 'ali', 'ali@gmail.com', '147\r\n'),
(2, 'hamza', 'hamza@gmail.com', '123'),
(3, 'hiba', 'gmlhibatallah@gmail.com', '123'),
(4, 'hiba', 'himi@gmail.com', '789'),
(5, 'ali', 'alii@gmail.com', '55');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `r_table`
--
ALTER TABLE `r_table`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sign_up_client`
--
ALTER TABLE `sign_up_client`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `r_table`
--
ALTER TABLE `r_table`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
