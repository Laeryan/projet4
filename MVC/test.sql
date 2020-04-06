-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 06 avr. 2020 à 12:17
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
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `comment_date`, `report`) VALUES
(37, 37, 'RageuxDu59', 'Mouais... Bof, on a connu mieux !', '2020-03-31 16:07:52', 0),
(38, 39, 'Mimi35', 'Quel début fracassant !! Hâte d\'avoir la suite, merci monsieur Forteroche.', '2020-03-31 16:08:38', 0),
(39, 40, 'LuluBerlue', 'Un nouveau personnage haut en couleur, vivement la suite !', '2020-03-31 16:09:19', 0),
(36, 37, 'BookLover', 'J\'adore la préface, ça donne déjà envie d\'avoir la suite !', '2020-03-31 16:00:42', 0),
(40, 40, 'Anonyme', 'C\'est vraiment nul, celui qui a écrit ça est un gros xxxx !', '2020-04-03 14:35:36', 1),
(41, 38, 'Boulet', 'cé tro naz moi jpencé kon orait un vré livre', '2020-04-03 15:05:15', 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`) VALUES
(40, 'Chapitre 3', '<p>Bacon ipsum dolor amet tail porchetta shankle leberkas chicken ground round salami frankfurter, ham hamburger swine chuck jerky landjaeger. Pork belly jowl meatball shoulder. Landjaeger swine tenderloin tongue beef salami short ribs pancetta filet mignon hamburger ball tip capicola brisket meatball corned beef. Pig jerky pork loin shankle andouille, filet mignon tri-tip prosciutto t-bone chuck meatball kevin chislic turkey.</p>\r\n<p>Pork belly beef ribs turkey, beef bresaola spare ribs prosciutto shoulder hamburger burgdoggen t-bone kevin meatball boudin. Capicola ball tip jerky, beef cow pork belly andouille chuck. Salami biltong ground round, frankfurter cow strip steak pork loin turkey tri-tip. Doner pork chop burgdoggen, beef swine bresaola cow short ribs ball tip pastrami.</p>\r\n<p>Landjaeger spare ribs corned beef short ribs, fatback shankle pastrami sirloin rump. Meatloaf beef drumstick alcatra ham hock cupim t-bone ribeye bacon jowl pork. Ham andouille pig ham hock porchetta fatback, pancetta meatball bresaola chicken. Ground round flank venison short ribs chicken prosciutto bresaola jowl strip steak shank tongue burgdoggen ham hock, pork loin shoulder.</p>\r\n<p>Pork short ribs alcatra, pig sirloin biltong ham hock flank pork chop bresaola. Capicola pork chop chicken tail biltong beef ribs jowl drumstick short loin. Bacon strip steak short loin venison buffalo filet mignon tri-tip. Shoulder tongue pig hamburger pork loin sausage, t-bone turducken fatback beef doner chislic. Shoulder ham hock pancetta, venison hamburger pastrami fatback pork. Pork loin swine filet mignon, chislic drumstick burgdoggen kevin tongue.</p>\r\n<p>Sausage shoulder picanha, kevin flank beef jowl spare ribs landjaeger doner. Buffalo prosciutto shank, jowl andouille spare ribs capicola strip steak rump leberkas beef ribs flank pastrami picanha tenderloin. Shoulder salami leberkas boudin pork belly, drumstick chicken fatback filet mignon strip steak beef ribs turkey chislic pork loin alcatra. Meatloaf landjaeger chicken porchetta, jowl doner cupim biltong filet mignon short loin. Ham hock ground round meatball meatloaf porchetta drumstick spare ribs pig. Beef flank shankle tenderloin ball tip ground round. Picanha corned beef landjaeger, shank rump kielbasa burgdoggen hamburger shankle.</p>', '2020-03-31 15:59:36'),
(39, 'Chapitre 2', '<p>Bacon ipsum dolor amet tail porchetta shankle leberkas chicken ground round salami frankfurter, ham hamburger swine chuck jerky landjaeger. Pork belly jowl meatball shoulder. Landjaeger swine tenderloin tongue beef salami short ribs pancetta filet mignon hamburger ball tip capicola brisket meatball corned beef. Pig jerky pork loin shankle andouille, filet mignon tri-tip prosciutto t-bone chuck meatball kevin chislic turkey.</p>\r\n<p>Pork belly beef ribs turkey, beef bresaola spare ribs prosciutto shoulder hamburger burgdoggen t-bone kevin meatball boudin. Capicola ball tip jerky, beef cow pork belly andouille chuck. Salami biltong ground round, frankfurter cow strip steak pork loin turkey tri-tip. Doner pork chop burgdoggen, beef swine bresaola cow short ribs ball tip pastrami.</p>\r\n<p>Landjaeger spare ribs corned beef short ribs, fatback shankle pastrami sirloin rump. Meatloaf beef drumstick alcatra ham hock cupim t-bone ribeye bacon jowl pork. Ham andouille pig ham hock porchetta fatback, pancetta meatball bresaola chicken. Ground round flank venison short ribs chicken prosciutto bresaola jowl strip steak shank tongue burgdoggen ham hock, pork loin shoulder.</p>\r\n<p>Pork short ribs alcatra, pig sirloin biltong ham hock flank pork chop bresaola. Capicola pork chop chicken tail biltong beef ribs jowl drumstick short loin. Bacon strip steak short loin venison buffalo filet mignon tri-tip. Shoulder tongue pig hamburger pork loin sausage, t-bone turducken fatback beef doner chislic. Shoulder ham hock pancetta, venison hamburger pastrami fatback pork. Pork loin swine filet mignon, chislic drumstick burgdoggen kevin tongue.</p>\r\n<p>Sausage shoulder picanha, kevin flank beef jowl spare ribs landjaeger doner. Buffalo prosciutto shank, jowl andouille spare ribs capicola strip steak rump leberkas beef ribs flank pastrami picanha tenderloin. Shoulder salami leberkas boudin pork belly, drumstick chicken fatback filet mignon strip steak beef ribs turkey chislic pork loin alcatra. Meatloaf landjaeger chicken porchetta, jowl doner cupim biltong filet mignon short loin. Ham hock ground round meatball meatloaf porchetta drumstick spare ribs pig. Beef flank shankle tenderloin ball tip ground round. Picanha corned beef landjaeger, shank rump kielbasa burgdoggen hamburger shankle.</p>', '2020-03-31 15:59:25'),
(37, 'Préface', '<p>Bacon ipsum dolor amet tail porchetta shankle leberkas chicken ground round salami frankfurter, ham hamburger swine chuck jerky landjaeger. Pork belly jowl meatball shoulder. Landjaeger swine tenderloin tongue beef salami short ribs pancetta filet mignon hamburger ball tip capicola brisket meatball corned beef. Pig jerky pork loin shankle andouille, filet mignon tri-tip prosciutto t-bone chuck meatball kevin chislic turkey.</p>\r\n<p>Pork belly beef ribs turkey, beef bresaola spare ribs prosciutto shoulder hamburger burgdoggen t-bone kevin meatball boudin. Capicola ball tip jerky, beef cow pork belly andouille chuck. Salami biltong ground round, frankfurter cow strip steak pork loin turkey tri-tip. Doner pork chop burgdoggen, beef swine bresaola cow short ribs ball tip pastrami.</p>\r\n<p>Landjaeger spare ribs corned beef short ribs, fatback shankle pastrami sirloin rump. Meatloaf beef drumstick alcatra ham hock cupim t-bone ribeye bacon jowl pork. Ham andouille pig ham hock porchetta fatback, pancetta meatball bresaola chicken. Ground round flank venison short ribs chicken prosciutto bresaola jowl strip steak shank tongue burgdoggen ham hock, pork loin shoulder.</p>\r\n<p>Pork short ribs alcatra, pig sirloin biltong ham hock flank pork chop bresaola. Capicola pork chop chicken tail biltong beef ribs jowl drumstick short loin. Bacon strip steak short loin venison buffalo filet mignon tri-tip. Shoulder tongue pig hamburger pork loin sausage, t-bone turducken fatback beef doner chislic. Shoulder ham hock pancetta, venison hamburger pastrami fatback pork. Pork loin swine filet mignon, chislic drumstick burgdoggen kevin tongue.</p>\r\n<p>Sausage shoulder picanha, kevin flank beef jowl spare ribs landjaeger doner. Buffalo prosciutto shank, jowl andouille spare ribs capicola strip steak rump leberkas beef ribs flank pastrami picanha tenderloin. Shoulder salami leberkas boudin pork belly, drumstick chicken fatback filet mignon strip steak beef ribs turkey chislic pork loin alcatra. Meatloaf landjaeger chicken porchetta, jowl doner cupim biltong filet mignon short loin. Ham hock ground round meatball meatloaf porchetta drumstick spare ribs pig. Beef flank shankle tenderloin ball tip ground round. Picanha corned beef landjaeger, shank rump kielbasa burgdoggen hamburger shankle.</p>', '2020-03-31 15:59:01'),
(38, 'Chapitre 1', '<p>Bacon ipsum dolor amet tail porchetta shankle leberkas chicken ground round salami frankfurter, ham hamburger swine chuck jerky landjaeger. Pork belly jowl meatball shoulder. Landjaeger swine tenderloin tongue beef salami short ribs pancetta filet mignon hamburger ball tip capicola brisket meatball corned beef. Pig jerky pork loin shankle andouille, filet mignon tri-tip prosciutto t-bone chuck meatball kevin chislic turkey.</p>\r\n<p>Pork belly beef ribs turkey, beef bresaola spare ribs prosciutto shoulder hamburger burgdoggen t-bone kevin meatball boudin. Capicola ball tip jerky, beef cow pork belly andouille chuck. Salami biltong ground round, frankfurter cow strip steak pork loin turkey tri-tip. Doner pork chop burgdoggen, beef swine bresaola cow short ribs ball tip pastrami.</p>\r\n<p>Landjaeger spare ribs corned beef short ribs, fatback shankle pastrami sirloin rump. Meatloaf beef drumstick alcatra ham hock cupim t-bone ribeye bacon jowl pork. Ham andouille pig ham hock porchetta fatback, pancetta meatball bresaola chicken. Ground round flank venison short ribs chicken prosciutto bresaola jowl strip steak shank tongue burgdoggen ham hock, pork loin shoulder.</p>\r\n<p>Pork short ribs alcatra, pig sirloin biltong ham hock flank pork chop bresaola. Capicola pork chop chicken tail biltong beef ribs jowl drumstick short loin. Bacon strip steak short loin venison buffalo filet mignon tri-tip. Shoulder tongue pig hamburger pork loin sausage, t-bone turducken fatback beef doner chislic. Shoulder ham hock pancetta, venison hamburger pastrami fatback pork. Pork loin swine filet mignon, chislic drumstick burgdoggen kevin tongue.</p>\r\n<p>Sausage shoulder picanha, kevin flank beef jowl spare ribs landjaeger doner. Buffalo prosciutto shank, jowl andouille spare ribs capicola strip steak rump leberkas beef ribs flank pastrami picanha tenderloin. Shoulder salami leberkas boudin pork belly, drumstick chicken fatback filet mignon strip steak beef ribs turkey chislic pork loin alcatra. Meatloaf landjaeger chicken porchetta, jowl doner cupim biltong filet mignon short loin. Ham hock ground round meatball meatloaf porchetta drumstick spare ribs pig. Beef flank shankle tenderloin ball tip ground round. Picanha corned beef landjaeger, shank rump kielbasa burgdoggen hamburger shankle.</p>', '2020-03-31 15:59:13');

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
