-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 10 Février 2023 à 12:19
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `minitchat`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateursss`
--

CREATE TABLE `utilisateursss` (
  `pseudonyme` varchar(250) NOT NULL,
  `motdepasse` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateursss`
--

INSERT INTO `utilisateursss` (`pseudonyme`, `motdepasse`) VALUES
('root', 'root'),
('amar', 'amar'),
('admin', 'admin123'),
('kyle', '$2y$10$LIGQpUbh3/thPNCRfnVo5.wd4TdLX.SeJd858OY.6kAywrmMC/xOu'),
('polo', '$2y$10$iJ.0fnSCrnJF8M8X3JoIquegbzWjUzTMnrUlmRqz/cGmaByyDpfYC'),
('jimi', '$2y$10$jI8zkUiyKpg2Lm/XikosbO6I3zE.dqcphiZWZkTc9TknBJ/m18VKy');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
