-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 21 mai 2023 à 17:47
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `epiz_33200472_souledj`
--

-- --------------------------------------------------------

--
-- Structure de la table `cororders`
--

CREATE TABLE `cororders` (
  `ID` int(250) NOT NULL,
  `userid` varchar(250) NOT NULL,
  `order` varchar(250) NOT NULL,
  `cor` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `lessons`
--

CREATE TABLE `lessons` (
  `ID` int(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `trim` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `file` longtext NOT NULL,
  `images` longtext NOT NULL,
  `year` varchar(250) NOT NULL,
  `div` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `results`
--

CREATE TABLE `results` (
  `ID` int(250) NOT NULL,
  `userid` varchar(250) NOT NULL,
  `arabecoe` varchar(250) NOT NULL,
  `arabeeva` varchar(250) NOT NULL,
  `arabetp` varchar(250) NOT NULL,
  `arabetes` varchar(250) NOT NULL,
  `arabeexa` varchar(250) NOT NULL,
  `mathcoe` varchar(250) NOT NULL,
  `matheva` varchar(250) NOT NULL,
  `mathtp` varchar(250) NOT NULL,
  `mathtes` varchar(250) NOT NULL,
  `mathexa` varchar(250) NOT NULL,
  `physicscoe` varchar(250) NOT NULL,
  `physicseva` varchar(250) NOT NULL,
  `physicstp` varchar(250) NOT NULL,
  `physicstes` varchar(250) NOT NULL,
  `physicsexa` varchar(250) NOT NULL,
  `sciencecoe` varchar(250) NOT NULL,
  `scienceeva` varchar(250) NOT NULL,
  `sciencetp` varchar(250) NOT NULL,
  `sciencetes` varchar(250) NOT NULL,
  `scienceexa` varchar(250) NOT NULL,
  `islamiccoe` varchar(250) NOT NULL,
  `islamiceva` varchar(250) NOT NULL,
  `islamictp` varchar(250) NOT NULL,
  `islamictes` varchar(250) NOT NULL,
  `islamicexa` varchar(250) NOT NULL,
  `hisgeocoe` varchar(250) NOT NULL,
  `hisgeoeva` varchar(250) NOT NULL,
  `hisgeotp` varchar(250) NOT NULL,
  `hisgeotes` varchar(250) NOT NULL,
  `hisgeoexa` varchar(250) NOT NULL,
  `frenchcoe` varchar(250) NOT NULL,
  `frencheva` varchar(250) NOT NULL,
  `frenchtp` varchar(250) NOT NULL,
  `frenchtes` varchar(250) NOT NULL,
  `frenchexa` varchar(250) NOT NULL,
  `englishcoe` varchar(250) NOT NULL,
  `englisheva` varchar(250) NOT NULL,
  `englishtp` varchar(250) NOT NULL,
  `englishtes` varchar(250) NOT NULL,
  `englishexa` varchar(250) NOT NULL,
  `sportcoe` varchar(250) NOT NULL,
  `sporteva` varchar(250) NOT NULL,
  `sporttp` varchar(250) NOT NULL,
  `sporttes` varchar(250) NOT NULL,
  `sportexa` varchar(250) NOT NULL,
  `motala3a` varchar(250) NOT NULL,
  `machari3` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `ID` int(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `fn` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `year` varchar(250) NOT NULL,
  `div` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `ip` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL,
  `ver` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `ldate` varchar(250) NOT NULL,
  `ltime` varchar(250) NOT NULL,
  `auth` varchar(250) NOT NULL,
  `secret` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`ID`, `user`, `name`, `fn`, `gender`, `dob`, `year`, `div`, `email`, `password`, `status`, `ip`, `date`, `time`, `ver`, `type`, `ldate`, `ltime`, `auth`, `secret`) VALUES
(1, 'DjihadDris', 'Djihad', 'Dris', 'Ø°ÙƒØ±', '6 Ø£ÙˆØª 2006', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'djihad139@gmail.com', '0000', 'yes', '105.110.210.145', '2023-03-15', '11:31PM', 'yes', 'admin', '2023-03-16', '05:41PM', 'no', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cororders`
--
ALTER TABLE `cororders`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cororders`
--
ALTER TABLE `cororders`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `results`
--
ALTER TABLE `results`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
