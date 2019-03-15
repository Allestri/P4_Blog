-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 15 mars 2019 à 06:34
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `p3_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `groupes`
--

DROP TABLE IF EXISTS `groupes`;
CREATE TABLE IF NOT EXISTS `groupes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `groupes`
--

INSERT INTO `groupes` (`id`, `nom`) VALUES
(1, 'Administrateur'),
(2, 'Modérateur'),
(3, 'Membre');

-- --------------------------------------------------------

--
-- Structure de la table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `log_id` int(10) NOT NULL AUTO_INCREMENT,
  `com_id` int(11) NOT NULL,
  `com_date` datetime NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` varchar(500) NOT NULL,
  `signale` tinyint(4) NOT NULL,
  `modere` tinyint(4) NOT NULL,
  `post_id` int(11) NOT NULL,
  `log_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `logs`
--

INSERT INTO `logs` (`log_id`, `com_id`, `com_date`, `author`, `content`, `signale`, `modere`, `post_id`, `log_date`) VALUES
(3, 26, '2019-03-07 05:45:12', 'Alexandre', 'Lorem ipsum, in graphical and textual context, refers to filler text that is placed in a document or visual presentation. Lorem ipsum is derived from the Latin \"dolorem ipsum\" roughly translated as \"pain itself.\" Lorem ipsum presents the sample font and orientation of writing on Web pages and other software applications where content is not the main concern of the developer.', 1, 0, 26, '2019-03-09 04:44:53'),
(4, 52, '2019-03-09 04:25:59', 'Alexandre', 'test', 1, 0, 26, '2019-03-09 04:46:08'),
(5, 30, '2019-03-07 05:47:14', 'Alexandre', 'Bonjour', 1, 0, 26, '2019-03-09 04:46:58'),
(6, 24, '2019-03-07 05:37:12', 'Alexandre', 'D\'accord', 1, 0, 26, '2019-03-11 19:33:41'),
(7, 29, '2019-03-07 05:46:25', 'Alexandre', 'Lorem ips of writing on Web pages and other software applications where content is not the main concern of the developer.', 1, 0, 26, '2019-03-13 05:30:45'),
(8, 50, '2019-03-08 16:07:48', 'Alexandre', 'Alexandre', 1, 0, 26, '2019-03-13 05:31:00'),
(9, 68, '2019-03-14 03:36:12', 'Alexandre', 'Test responsive', 1, 0, 28, '2019-03-14 04:53:17'),
(10, 66, '2019-03-14 00:44:34', 'Olivier', 'Je dirais même plus ... \r\ntrès bon lorem ipsum', 1, 0, 28, '2019-03-14 04:53:25'),
(11, 65, '2019-03-14 00:43:42', 'Alexandre', 'Très bon lorem ipsum', 1, 0, 28, '2019-03-14 04:58:36'),
(12, 69, '2019-03-14 11:05:11', 'Alexandre', 'Bonjour !', 1, 0, 28, '2019-03-14 12:30:42');

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `id_group` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `members`
--

INSERT INTO `members` (`id`, `name`, `pass`, `id_group`) VALUES
(1, 'Admin', '$2y$10$eBxjEy9BvzvtqVxFllpa3OqYtjXZ0TaeCyNQR90ng0f54JBiB6wSe', 1),
(2, 'Jean', 'test', 1),
(3, 'Membre1', 'test', 3),
(4, 'Admin', 'test', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_billet`
--

DROP TABLE IF EXISTS `t_billet`;
CREATE TABLE IF NOT EXISTS `t_billet` (
  `BIL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `BIL_DATE` datetime NOT NULL,
  `BIL_TITRE` varchar(100) NOT NULL,
  `BIL_CONTENU` longtext NOT NULL,
  PRIMARY KEY (`BIL_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_billet`
--

INSERT INTO `t_billet` (`BIL_ID`, `BIL_DATE`, `BIL_TITRE`, `BIL_CONTENU`) VALUES
(34, '2019-03-15 04:39:41', 'Le vent, la pluie et le beau temps.', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consectetur metus dapibus facilisis scelerisque. Cras consectetur magna vitae malesuada volutpat. Ut leo libero, feugiat a mauris sed, mattis maximus massa. Donec et mattis lorem. Fusce fringilla, dui ut tempor tincidunt, mauris tortor vehicula leo, nec molestie metus sem id ipsum. Nullam bibendum libero vel nisi feugiat consectetur. Curabitur ac sem eget magna viverra pretium eu in ante. Fusce consectetur at sem sit amet accumsan. Quisque in risus maximus, rhoncus metus tincidunt, ullamcorper metus. Donec rhoncus justo tempor nibh ullamcorper tincidunt. Nam ut metus felis. Sed eleifend est eu odio semper, in vulputate lacus rutrum.</span></p>'),
(33, '2019-03-15 03:17:22', 'Alaska', '<p><span style=\"color: #222222; font-family: arial, sans-serif; font-size: small; background-color: #ffffff;\">Alaska, northwest of Canada, is the largest and most sparsely populated U.S. state. It\'s known for its diverse terrain of open spaces, mountains and forests, with abundant wildlife and many small towns. It&rsquo;s a destination for outdoor activities like skiing, mountain biking and kayaking. Massive Denali National Park is home to Denali (formerly called Mount McKinley), North America&rsquo;s highest peak.</span></p>\r\n<h3 style=\"background: none #ffffff; margin: 0.3em 0px 0px; overflow: hidden; padding-top: 0.5em; padding-bottom: 0px; border-bottom: 0px; font-size: 1.2em; line-height: 1.6; font-family: sans-serif;\"><span id=\"Regions\" class=\"mw-headline\">Regions</span></h3>\r\n<p style=\"margin: 0.5em 0px; line-height: inherit; color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">There are no officially defined borders demarcating the various regions of Alaska, but there are six widely accepted regions:</p>'),
(35, '2019-03-15 04:39:48', 'Test', '<p>test</p>'),
(36, '2019-03-15 04:39:53', 'test', '<p>test</p>'),
(37, '2019-03-15 04:40:00', 'test', '<p>test</p>');

-- --------------------------------------------------------

--
-- Structure de la table `t_commentaire`
--

DROP TABLE IF EXISTS `t_commentaire`;
CREATE TABLE IF NOT EXISTS `t_commentaire` (
  `COM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COM_DATE` datetime NOT NULL,
  `COM_AUTEUR` varchar(100) NOT NULL,
  `COM_CONTENU` varchar(500) NOT NULL,
  `COM_SIGNALER` tinyint(1) DEFAULT '0',
  `COM_MODERE` tinyint(4) NOT NULL DEFAULT '0',
  `BIL_ID` int(11) NOT NULL,
  PRIMARY KEY (`COM_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_commentaire`
--

INSERT INTO `t_commentaire` (`COM_ID`, `COM_DATE`, `COM_AUTEUR`, `COM_CONTENU`, `COM_SIGNALER`, `COM_MODERE`, `BIL_ID`) VALUES
(1, '2018-12-27 03:12:06', 'A. Nonyme', 'Modéré 1', 1, 1, 1),
(2, '2018-12-27 03:12:06', 'Moi', 'Modéré', 1, 1, 1),
(3, '2019-01-10 19:28:02', 'Alexandre', 'Modéré', 1, 1, 1),
(4, '2019-01-11 00:22:40', 'Alexandre', 'Modéré', 1, 1, 2),
(19, '2019-02-06 04:06:51', 'Alexandre', 'Bonjour', 0, 0, 1),
(15, '2019-01-11 15:37:35', 'Alexandre', 'Modéré', 1, 1, 2),
(23, '2019-03-07 01:24:08', 'Alexandre', 'Modéré', 1, 1, 26),
(21, '2019-02-06 04:08:43', 'Alexandre', 'Bonjour', 0, 0, 1),
(16, '2019-01-11 15:38:02', 'Alexandre', 'Modéré', 1, 1, 2),
(17, '2019-01-11 15:44:30', 'Alexandre', 'Alexandre', 0, 0, 2),
(18, '2019-02-02 03:54:03', 'Alexandre', 'Modéré', 1, 1, 1),
(20, '2019-02-06 04:07:14', 'Alexandre', 'Modéré', 1, 1, 1),
(22, '2019-02-06 04:10:27', 'Alexandre', 'Bonjour', 0, 0, 1),
(24, '2019-03-07 05:37:12', 'Alexandre', 'Modéré', 1, 1, 26),
(25, '2019-03-07 05:43:49', 'Alexandre', 'Modéré', 1, 1, 26),
(54, '2019-03-11 20:14:24', 'Alexandre', 'dsfsdfdsfsdsf', 0, 0, 26),
(55, '2019-03-11 20:17:05', 'Alexandre', 'dsfsdfdsfsdsf', 0, 0, 26),
(56, '2019-03-11 20:17:13', 'Alexandre', 'test', 0, 0, 26),
(57, '2019-03-11 20:19:07', 'Alexandre', 'test', 0, 0, 26),
(58, '2019-03-11 20:20:40', 'Alexandre', 'test', 0, 0, 26),
(59, '2019-03-11 20:21:42', 'Alexandre', 'test', 0, 0, 26),
(60, '2019-03-11 20:24:20', 'teest', 'test', 0, 0, 26),
(61, '2019-03-11 20:24:27', 'Alexandre', 'test', 0, 0, 26),
(62, '2019-03-11 20:24:57', 'Bonjour!!!!', 'test', 0, 0, 26),
(63, '2019-03-11 20:25:43', 'Bonsoir', 'test', 0, 0, 26),
(67, '2019-03-14 02:31:13', 'Aurélie', '<strong>Petit test</strong>', 1, 0, 28),
(64, '2019-03-13 06:35:18', 'Alexandre', 'Bonjour !', 0, 0, 27),
(53, '2019-03-11 20:03:43', 'Alexandre', 'zaeazdqsfqfqf', 0, 0, 26),
(29, '2019-03-07 05:46:25', 'Alexandre', 'Modéré', 1, 1, 26),
(70, '2019-03-15 04:48:37', 'Alexandre', 'Joli lorem ipsum', 1, 0, 34),
(71, '2019-03-15 04:48:53', 'Olivier', 'Je dirais même plus ...', 1, 0, 34),
(30, '2019-03-07 05:47:14', 'Alexandre', 'Modéré', 1, 1, 26),
(32, '2019-03-07 05:49:28', 'Alexandre', 'Modéré', 1, 1, 25),
(33, '2019-03-07 05:49:31', 'Alexandre', 'Modéré', 1, 1, 25),
(34, '2019-03-07 05:49:33', 'Alexandre', 'test', 0, 0, 25),
(35, '2019-03-07 05:49:36', 'Alexandre', 'Modéré', 1, 1, 25),
(36, '2019-03-07 05:49:39', 'Alexandre', 'test', 0, 0, 25),
(42, '2019-03-07 05:52:50', 'Ale', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, 24),
(43, '2019-03-07 05:52:56', 'Ale', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, 24),
(44, '2019-03-07 05:53:02', 'Ale', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, 24),
(45, '2019-03-07 05:53:07', 'Ale', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, 24),
(46, '2019-03-07 05:53:11', 'Ale', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, 24),
(47, '2019-03-07 05:53:14', 'Ale', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, 24),
(48, '2019-03-07 05:53:24', '<p>Strong</p>', 'Ale', 0, 0, 24),
(49, '2019-03-08 12:54:58', 'Alexandre', 'Bonjour', 0, 0, 26),
(72, '2019-03-15 04:48:59', 'Aurélie', 'Bonsoir !', 1, 0, 34);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;