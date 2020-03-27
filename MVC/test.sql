-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 27 mars 2020 à 14:53
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  `report` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `comment_date`, `report`) VALUES
(21, 5, 'Lucille', 'test', '2020-03-11 20:26:03', 1),
(22, 5, 'Minouche', 'miaou miaou miaou', '2020-03-11 20:45:33', 0),
(23, 5, 'Jesus', 'Je vous donne mon sang', '2020-03-12 09:29:56', 0),
(32, 7, 'Lucille', 'Encore un test', '2020-03-20 16:11:40', 0),
(29, 7, 'test', 'Test 813546', '2020-03-13 10:12:03', 0),
(33, 24, 'test', 'commentaire', '2020-03-20 17:32:38', 1),
(34, 25, 'test', 'test', '2020-03-27 14:38:09', 0);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`) VALUES
(5, 'Bacon premier ', 'Bacon ipsum dolor amet corned beef flank hamburger ham hock, shoulder brisket ribeye filet mignon strip steak. Prosciutto kevin spare ribs pastrami alcatra salami corned beef turkey tenderloin ham hock. Meatball drumstick picanha venison boudin fatback, short ribs tail kielbasa tri-tip pork chop chicken capicola tenderloin. Prosciutto jowl doner burgdoggen flank. Burgdoggen ham drumstick pork, landjaeger porchetta venison hamburger ham hock brisket tenderloin. Porchetta short ribs bacon chicken turducken strip steak. Chicken short ribs beef shankle brisket chuck leberkas drumstick shank alcatra ribeye hamburger chislic meatloaf capicola.', '2020-03-11 15:33:55'),
(25, 'Jean Forteroche ', 'Je suis l\'admin du site !', '2020-03-25 16:09:11'),
(24, 'Test', 'Test', '2020-03-20 17:31:40'),
(20, 'Modification d\'un billet', 'test 4', '2020-03-19 15:59:10'),
(7, 'THE BACON IPSUM', 'Bacon ipsum dolor amet corned beef flank hamburger ham hock, shoulder brisket ribeye filet mignon strip steak. Prosciutto kevin spare ribs pastrami alcatra salami corned beef turkey tenderloin ham hock. Meatball drumstick picanha venison boudin fatback, short ribs tail kielbasa tri-tip pork chop chicken capicola tenderloin. Prosciutto jowl doner burgdoggen flank. Burgdoggen ham drumstick pork, landjaeger porchetta venison hamburger ham hock brisket tenderloin. Porchetta short ribs bacon chicken turducken strip steak. Chicken short ribs beef shankle brisket chuck leberkas drumstick shank alcatra ribeye hamburger chislic meatloaf capicola.', '2020-03-20 16:11:24');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `pssword` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `pssword`, `admin`) VALUES
(1, 'JForteroche', 'TestPassword', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
