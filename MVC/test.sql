-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 27 avr. 2020 à 15:31
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
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `comment_date`, `report`) VALUES
(36, 37, 'BookLover', 'J\'adore la préface, ça donne déjà envie d\'avoir la suite !', '2020-03-31 16:00:42', 0),
(37, 37, 'RageuxDu59', 'Mouais... Bof, on a connu mieux !', '2020-03-31 16:07:52', 0),
(38, 43, 'Lu', 'test', '2020-04-25 14:43:35', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`) VALUES
(37, 'Préface', '<p>Bacon ipsum dolor amet tail porchetta shankle leberkas chicken ground round salami frankfurter, ham hamburger swine chuck jerky landjaeger. Pork belly jowl meatball shoulder. Landjaeger swine tenderloin tongue beef salami short ribs pancetta filet mignon hamburger ball tip capicola brisket meatball corned beef. Pig jerky pork loin shankle andouille, filet mignon tri-tip prosciutto t-bone chuck meatball kevin chislic turkey.</p>\r\n<p>Pork belly beef ribs turkey, beef bresaola spare ribs prosciutto shoulder hamburger burgdoggen t-bone kevin meatball boudin. Capicola ball tip jerky, beef cow pork belly andouille chuck. Salami biltong ground round, frankfurter cow strip steak pork loin turkey tri-tip. Doner pork chop burgdoggen, beef swine bresaola cow short ribs ball tip pastrami.</p>\r\n<p>Landjaeger spare ribs corned beef short ribs, fatback shankle pastrami sirloin rump. Meatloaf beef drumstick alcatra ham hock cupim t-bone ribeye bacon jowl pork. Ham andouille pig ham hock porchetta fatback, pancetta meatball bresaola chicken. Ground round flank venison short ribs chicken prosciutto bresaola jowl strip steak shank tongue burgdoggen ham hock, pork loin shoulder.</p>\r\n<p>Pork short ribs alcatra, pig sirloin biltong ham hock flank pork chop bresaola. Capicola pork chop chicken tail biltong beef ribs jowl drumstick short loin. Bacon strip steak short loin venison buffalo filet mignon tri-tip. Shoulder tongue pig hamburger pork loin sausage, t-bone turducken fatback beef doner chislic. Shoulder ham hock pancetta, venison hamburger pastrami fatback pork. Pork loin swine filet mignon, chislic drumstick burgdoggen kevin tongue.</p>\r\n<p>Sausage shoulder picanha, kevin flank beef jowl spare ribs landjaeger doner. Buffalo prosciutto shank, jowl andouille spare ribs capicola strip steak rump leberkas beef ribs flank pastrami picanha tenderloin. Shoulder salami leberkas boudin pork belly, drumstick chicken fatback filet mignon strip steak beef ribs turkey chislic pork loin alcatra. Meatloaf landjaeger chicken porchetta, jowl doner cupim biltong filet mignon short loin. Ham hock ground round meatball meatloaf porchetta drumstick spare ribs pig. Beef flank shankle tenderloin ball tip ground round. Picanha corned beef landjaeger, shank rump kielbasa burgdoggen hamburger shankle.</p>', '2020-03-31 15:59:01'),
(41, 'Titre', 'Contenu', '2020-04-25 14:14:12'),
(43, 'Test', 'Test', '2020-04-25 14:16:20'),
(45, 'Chapitre 1', '<p class=\"MsoNormal\">Bacon ipsum dolor amet tongue pork belly capicola, pork chop ham short loin landjaeger shoulder brisket jowl ham hock short ribs. Pork belly fatback jowl burgdoggen, turducken prosciutto ham hock meatball ribeye tenderloin. Tongue jowl andouille, turkey bresaola cow boudin. Shankle bacon cupim, pastrami biltong jowl shank short loin boudin turducken capicola. Alcatra ground round shoulder filet mignon meatball boudin.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Prosciutto drumstick strip steak, brisket pancetta leberkas sirloin beef pork chop salami meatball biltong ham hock cupim. Ribeye frankfurter tongue cow, turducken pork chop prosciutto pancetta flank corned beef meatball sausage alcatra spare ribs short ribs. Ham turkey shoulder drumstick, biltong bresaola flank short loin chuck. Meatball picanha rump ball tip frankfurter capicola, tongue jowl fatback kevin ground round burgdoggen. Beef beef ribs jowl sausage tail capicola short ribs, t-bone turkey doner.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Picanha shank capicola filet mignon, ham hock buffalo shankle leberkas. Chislic meatball fatback t-bone brisket short loin boudin. Pig turkey bacon, cow chislic corned beef short loin frankfurter kielbasa leberkas pancetta. Kielbasa bacon jowl jerky hamburger rump swine drumstick bresaola sausage tri-tip short ribs spare ribs. Meatloaf pork loin chislic, shankle leberkas capicola kevin. Biltong drumstick pork chop bacon alcatra swine.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Doner swine tenderloin pork spare ribs pig. Ball tip bacon frankfurter, porchetta jowl shank pork chop beef drumstick. Bacon salami tongue, ribeye picanha jerky tail corned beef landjaeger filet mignon tri-tip turducken ball tip doner. Corned beef pork chop pork loin filet mignon capicola brisket prosciutto. T-bone tongue prosciutto venison ball tip. Ham hock ribeye corned beef jowl, brisket landjaeger fatback sirloin kevin swine.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Kielbasa shank ham, hamburger spare ribs turducken frankfurter pork belly pastrami bresaola cow doner rump buffalo pork. Pork pork belly andouille sausage landjaeger short ribs cow hamburger prosciutto pork loin pastrami. Picanha sausage pork belly swine. Jowl brisket pork belly hamburger corned beef, short ribs jerky chislic cow. Ham hock frankfurter bacon t-bone. Ground round andouille jowl, fatback doner pork loin capicola jerky. Chuck short loin spare ribs doner andouille shankle turkey chislic kevin bresaola shank capicola jerky.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Does your lorem ipsum text long for something a little meatier? Give our generator a try&hellip; it&rsquo;s tasty!</p>', '2020-04-25 14:42:45'),
(46, 'Chapitre 2', '<p class=\"MsoNormal\">Bacon ipsum dolor amet tongue pork belly capicola, pork chop ham short loin landjaeger shoulder brisket jowl ham hock short ribs. Pork belly fatback jowl burgdoggen, turducken prosciutto ham hock meatball ribeye tenderloin. Tongue jowl andouille, turkey bresaola cow boudin. Shankle bacon cupim, pastrami biltong jowl shank short loin boudin turducken capicola. Alcatra ground round shoulder filet mignon meatball boudin.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Prosciutto drumstick strip steak, brisket pancetta leberkas sirloin beef pork chop salami meatball biltong ham hock cupim. Ribeye frankfurter tongue cow, turducken pork chop prosciutto pancetta flank corned beef meatball sausage alcatra spare ribs short ribs. Ham turkey shoulder drumstick, biltong bresaola flank short loin chuck. Meatball picanha rump ball tip frankfurter capicola, tongue jowl fatback kevin ground round burgdoggen. Beef beef ribs jowl sausage tail capicola short ribs, t-bone turkey doner.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Picanha shank capicola filet mignon, ham hock buffalo shankle leberkas. Chislic meatball fatback t-bone brisket short loin boudin. Pig turkey bacon, cow chislic corned beef short loin frankfurter kielbasa leberkas pancetta. Kielbasa bacon jowl jerky hamburger rump swine drumstick bresaola sausage tri-tip short ribs spare ribs. Meatloaf pork loin chislic, shankle leberkas capicola kevin. Biltong drumstick pork chop bacon alcatra swine.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Doner swine tenderloin pork spare ribs pig. Ball tip bacon frankfurter, porchetta jowl shank pork chop beef drumstick. Bacon salami tongue, ribeye picanha jerky tail corned beef landjaeger filet mignon tri-tip turducken ball tip doner. Corned beef pork chop pork loin filet mignon capicola brisket prosciutto. T-bone tongue prosciutto venison ball tip. Ham hock ribeye corned beef jowl, brisket landjaeger fatback sirloin kevin swine.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Kielbasa shank ham, hamburger spare ribs turducken frankfurter pork belly pastrami bresaola cow doner rump buffalo pork. Pork pork belly andouille sausage landjaeger short ribs cow hamburger prosciutto pork loin pastrami. Picanha sausage pork belly swine. Jowl brisket pork belly hamburger corned beef, short ribs jerky chislic cow. Ham hock frankfurter bacon t-bone. Ground round andouille jowl, fatback doner pork loin capicola jerky. Chuck short loin spare ribs doner andouille shankle turkey chislic kevin bresaola shank capicola jerky.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Does your lorem ipsum text long for something a little meatier? Give our generator a try&hellip; it&rsquo;s tasty!</p>', '2020-04-25 14:42:59'),
(47, 'Chapitre 3', '<p class=\"MsoNormal\">Bacon ipsum dolor amet tongue pork belly capicola, pork chop ham short loin landjaeger shoulder brisket jowl ham hock short ribs. Pork belly fatback jowl burgdoggen, turducken prosciutto ham hock meatball ribeye tenderloin. Tongue jowl andouille, turkey bresaola cow boudin. Shankle bacon cupim, pastrami biltong jowl shank short loin boudin turducken capicola. Alcatra ground round shoulder filet mignon meatball boudin.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Prosciutto drumstick strip steak, brisket pancetta leberkas sirloin beef pork chop salami meatball biltong ham hock cupim. Ribeye frankfurter tongue cow, turducken pork chop prosciutto pancetta flank corned beef meatball sausage alcatra spare ribs short ribs. Ham turkey shoulder drumstick, biltong bresaola flank short loin chuck. Meatball picanha rump ball tip frankfurter capicola, tongue jowl fatback kevin ground round burgdoggen. Beef beef ribs jowl sausage tail capicola short ribs, t-bone turkey doner.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Picanha shank capicola filet mignon, ham hock buffalo shankle leberkas. Chislic meatball fatback t-bone brisket short loin boudin. Pig turkey bacon, cow chislic corned beef short loin frankfurter kielbasa leberkas pancetta. Kielbasa bacon jowl jerky hamburger rump swine drumstick bresaola sausage tri-tip short ribs spare ribs. Meatloaf pork loin chislic, shankle leberkas capicola kevin. Biltong drumstick pork chop bacon alcatra swine.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Doner swine tenderloin pork spare ribs pig. Ball tip bacon frankfurter, porchetta jowl shank pork chop beef drumstick. Bacon salami tongue, ribeye picanha jerky tail corned beef landjaeger filet mignon tri-tip turducken ball tip doner. Corned beef pork chop pork loin filet mignon capicola brisket prosciutto. T-bone tongue prosciutto venison ball tip. Ham hock ribeye corned beef jowl, brisket landjaeger fatback sirloin kevin swine.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Kielbasa shank ham, hamburger spare ribs turducken frankfurter pork belly pastrami bresaola cow doner rump buffalo pork. Pork pork belly andouille sausage landjaeger short ribs cow hamburger prosciutto pork loin pastrami. Picanha sausage pork belly swine. Jowl brisket pork belly hamburger corned beef, short ribs jerky chislic cow. Ham hock frankfurter bacon t-bone. Ground round andouille jowl, fatback doner pork loin capicola jerky. Chuck short loin spare ribs doner andouille shankle turkey chislic kevin bresaola shank capicola jerky.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Does your lorem ipsum text long for something a little meatier? Give our generator a try&hellip; it&rsquo;s tasty!</p>', '2020-04-25 14:43:07'),
(48, 'Chapitre 4', '<p class=\"MsoNormal\">Bacon ipsum dolor amet tongue pork belly capicola, pork chop ham short loin landjaeger shoulder brisket jowl ham hock short ribs. Pork belly fatback jowl burgdoggen, turducken prosciutto ham hock meatball ribeye tenderloin. Tongue jowl andouille, turkey bresaola cow boudin. Shankle bacon cupim, pastrami biltong jowl shank short loin boudin turducken capicola. Alcatra ground round shoulder filet mignon meatball boudin.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Prosciutto drumstick strip steak, brisket pancetta leberkas sirloin beef pork chop salami meatball biltong ham hock cupim. Ribeye frankfurter tongue cow, turducken pork chop prosciutto pancetta flank corned beef meatball sausage alcatra spare ribs short ribs. Ham turkey shoulder drumstick, biltong bresaola flank short loin chuck. Meatball picanha rump ball tip frankfurter capicola, tongue jowl fatback kevin ground round burgdoggen. Beef beef ribs jowl sausage tail capicola short ribs, t-bone turkey doner.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Picanha shank capicola filet mignon, ham hock buffalo shankle leberkas. Chislic meatball fatback t-bone brisket short loin boudin. Pig turkey bacon, cow chislic corned beef short loin frankfurter kielbasa leberkas pancetta. Kielbasa bacon jowl jerky hamburger rump swine drumstick bresaola sausage tri-tip short ribs spare ribs. Meatloaf pork loin chislic, shankle leberkas capicola kevin. Biltong drumstick pork chop bacon alcatra swine.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Doner swine tenderloin pork spare ribs pig. Ball tip bacon frankfurter, porchetta jowl shank pork chop beef drumstick. Bacon salami tongue, ribeye picanha jerky tail corned beef landjaeger filet mignon tri-tip turducken ball tip doner. Corned beef pork chop pork loin filet mignon capicola brisket prosciutto. T-bone tongue prosciutto venison ball tip. Ham hock ribeye corned beef jowl, brisket landjaeger fatback sirloin kevin swine.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Kielbasa shank ham, hamburger spare ribs turducken frankfurter pork belly pastrami bresaola cow doner rump buffalo pork. Pork pork belly andouille sausage landjaeger short ribs cow hamburger prosciutto pork loin pastrami. Picanha sausage pork belly swine. Jowl brisket pork belly hamburger corned beef, short ribs jerky chislic cow. Ham hock frankfurter bacon t-bone. Ground round andouille jowl, fatback doner pork loin capicola jerky. Chuck short loin spare ribs doner andouille shankle turkey chislic kevin bresaola shank capicola jerky.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Does your lorem ipsum text long for something a little meatier? Give our generator a try&hellip; it&rsquo;s tasty!</p>', '2020-04-25 14:43:14');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `pssword`, `admin`) VALUES
(1, 'JForteroche', '$2y$10$dgBI315ufGs5hl1knshna.1SfgZFimj8r4lDR2roLTJUySz64tCSi', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
