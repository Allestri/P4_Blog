-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 16 mars 2019 à 00:14
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
-- Structure de la table `billet`
--

DROP TABLE IF EXISTS `billet`;
CREATE TABLE IF NOT EXISTS `billet` (
  `BIL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `BIL_DATE` datetime NOT NULL,
  `BIL_TITRE` varchar(100) NOT NULL,
  `BIL_CONTENU` longtext NOT NULL,
  PRIMARY KEY (`BIL_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `billet`
--

INSERT INTO `billet` (`BIL_ID`, `BIL_DATE`, `BIL_TITRE`, `BIL_CONTENU`) VALUES
(34, '2019-03-15 04:39:41', 'Le vent, la pluie et le beau temps.', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consectetur metus dapibus facilisis scelerisque. Cras consectetur magna vitae malesuada volutpat. Ut leo libero, feugiat a mauris sed, mattis maximus massa. Donec et mattis lorem. Fusce fringilla, dui ut tempor tincidunt, mauris tortor vehicula leo, nec molestie metus sem id ipsum. Nullam bibendum libero vel nisi feugiat consectetur. Curabitur ac sem eget magna viverra pretium eu in ante. Fusce consectetur at sem sit amet accumsan. Quisque in risus maximus, rhoncus metus tincidunt, ullamcorper metus. Donec rhoncus justo tempor nibh ullamcorper tincidunt. Nam ut metus felis. Sed eleifend est eu odio semper, in vulputate lacus rutrum.</span></p>'),
(38, '2019-03-15 19:13:38', 'La rencontre d\'un Grizzly', '<p><span style=\"color: #2d2d2d; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consectetur metus dapibus facilisis scelerisque. Cras consectetur magna vitae malesuada volutpat. Ut leo libero, feugiat a mauris sed, mattis maximus massa. Donec et mattis lorem. Fusce fringilla, dui ut tempor tincidunt, mauris tortor vehicula leo, nec molestie metus sem id ipsum. Nullam bibendum libero vel nisi feugiat consectetur. Curabitur ac sem eget magna viverra pretium eu in ante. Fusce consectetur at sem sit amet accumsan. Quisque in risus maximus, rhoncus metus tincidunt, ullamcorper metus. Donec rhoncus justo tempor nibh ullamcorper tincidunt. Nam ut metus felis. Sed eleifend est eu odio semper, in vulputate lacus rutrum.</span></p>'),
(39, '2019-03-15 23:08:10', 'Une virée à Denali', '<p style=\"color: #5e5737; font-size: 10px; margin: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #ffffff;\"><span style=\"font-family: georgia, palatino, serif; font-size: 10pt;\">Iis igitur est difficilius satis facere, qui se Latina scripta dicunt contemnere. in quibus hoc primum est in quo admirer, cur in gravissimis rebus non delectet eos sermo patrius, cum idem fabellas Latinas ad verbum e Graecis expressas non inviti legant. quis enim tam inimicus paene nomini Romano est, qui Ennii Medeam aut Antiopam Pacuvii spernat aut reiciat, quod se isdem Euripidis fabulis delectari dicat, Latinas litteras oderit?</span></p>\r\n<p style=\"color: #5e5737; font-size: 10px; margin: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #ffffff;\"><span style=\"font-family: georgia, palatino, serif; font-size: 10pt;\">Nec piget dicere avide magis hanc insulam populum Romanum invasisse quam iuste. Ptolomaeo enim rege foederato nobis et socio ob aerarii nostri angustias iusso sine ulla culpa proscribi ideoque hausto veneno voluntaria morte deleto et tributaria facta est et velut hostiles eius exuviae classi inpositae in urbem advectae sunt per Catonem, nunc repetetur ordo gestorum.</span></p>\r\n<p style=\"color: #5e5737; font-size: 10px; margin: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #ffffff;\"><span style=\"font-family: georgia, palatino, serif; font-size: 10pt;\">Ex turba vero imae sortis et paupertinae in tabernis aliqui pernoctant vinariis, non nulli velariis umbraculorum theatralium latent, quae Campanam imitatus lasciviam Catulus in aedilitate sua suspendit omnium primus; aut pugnaciter aleis certant turpi sono fragosis naribus introrsum reducto spiritu concrepantes; aut quod est studiorum omnium maximum ab ortu lucis ad vesperam sole fatiscunt vel pluviis, per minutias aurigarum equorumque praecipua vel delicta scrutantes.</span></p>\r\n<p style=\"color: #5e5737; font-size: 10px; margin: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #ffffff;\"><span style=\"font-family: georgia, palatino, serif; font-size: 10pt;\">Hanc regionem praestitutis celebritati diebus invadere parans dux ante edictus per solitudines Aboraeque amnis herbidas ripas, suorum indicio proditus, qui admissi flagitii metu exagitati ad praesidia descivere Romana. absque ullo egressus effectu deinde tabescebat immobilis.</span></p>\r\n<p style=\"color: #5e5737; font-size: 10px; margin: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #ffffff;\"><span style=\"font-family: georgia, palatino, serif; font-size: 10pt;\">Proinde die funestis interrogationibus praestituto imaginarius iudex equitum resedit magister adhibitis aliis iam quae essent agenda praedoctis, et adsistebant hinc inde notarii, quid quaesitum esset, quidve responsum, cursim ad Caesarem perferentes, cuius imperio truci, stimulis reginae exsertantis aurem subinde per aulaeum, nec diluere obiecta permissi nec defensi periere conplures.</span></p>'),
(40, '2019-03-15 23:16:25', 'Rencontre avec le peuple Alutiiq', '<p><span style=\"color: #2d2d2d; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consectetur metus dapibus facilisis scelerisque. Cras consectetur magna vitae malesuada volutpat. Ut leo libero, feugiat a mauris sed, mattis maximus massa. Donec et mattis lorem. Fusce fringilla, dui ut tempor tincidunt, mauris tortor vehicula leo, nec molestie metus sem id ipsum. Nullam bibendum libero vel nisi feugiat consectetur. Curabitur ac sem eget magna viverra pretium eu in ante. Fusce consectetur at sem sit amet accumsan. Quisque in risus maximus, rhoncus metus tincidunt, ullamcorper metus. Donec rhoncus justo tempor nibh ullamcorper tincidunt. Nam ut metus felis. Sed eleifend est eu odio semper, in vulputate lacus rutrum.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #2d2d2d; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Bonjour</span></p>');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `COM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COM_DATE` datetime NOT NULL,
  `COM_AUTEUR` varchar(100) NOT NULL,
  `COM_CONTENU` varchar(500) NOT NULL,
  `COM_SIGNALER` tinyint(1) DEFAULT '0',
  `COM_MODERE` tinyint(4) NOT NULL DEFAULT '0',
  `BIL_ID` int(11) NOT NULL,
  PRIMARY KEY (`COM_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`COM_ID`, `COM_DATE`, `COM_AUTEUR`, `COM_CONTENU`, `COM_SIGNALER`, `COM_MODERE`, `BIL_ID`) VALUES
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
(67, '2019-03-14 02:31:13', 'Aurélie', 'Test mdoeré', 1, 1, 28),
(64, '2019-03-13 06:35:18', 'Alexandre', 'Bonjour !', 0, 0, 27),
(53, '2019-03-11 20:03:43', 'Alexandre', 'zaeazdqsfqfqf', 0, 0, 26),
(29, '2019-03-07 05:46:25', 'Alexandre', 'Modéré', 1, 1, 26),
(74, '2019-03-15 19:28:19', 'Alexandre', '', 1, 1, 38),
(71, '2019-03-15 04:48:53', 'Olivier', 'Commentaire moderé', 1, 1, 34),
(30, '2019-03-07 05:47:14', 'Alexandre', 'Modéré', 1, 1, 26),
(32, '2019-03-07 05:49:28', 'Alexandre', 'Modéré', 1, 1, 25),
(33, '2019-03-07 05:49:31', 'Alexandre', 'Modéré', 1, 1, 25),
(34, '2019-03-07 05:49:33', 'Alexandre', 'test', 0, 0, 25),
(35, '2019-03-07 05:49:36', 'Alexandre', 'Modéré', 1, 1, 25),
(36, '2019-03-07 05:49:39', 'Alexandre', 'test', 0, 0, 25),
(76, '2019-03-15 19:29:41', 'Alexandre', 'test2', 1, 1, 38),
(75, '2019-03-15 19:29:38', 'Alexandre', 'Billet edité', 1, 1, 38),
(42, '2019-03-07 05:52:50', 'Ale', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, 24),
(43, '2019-03-07 05:52:56', 'Ale', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, 24),
(44, '2019-03-07 05:53:02', 'Ale', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, 24),
(45, '2019-03-07 05:53:07', 'Ale', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, 24),
(46, '2019-03-07 05:53:11', 'Ale', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, 24),
(47, '2019-03-07 05:53:14', 'Ale', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, 24),
(48, '2019-03-07 05:53:24', '<p>Strong</p>', 'Ale', 0, 0, 24),
(49, '2019-03-08 12:54:58', 'Alexandre', 'Bonjour', 0, 0, 26),
(72, '2019-03-15 04:48:59', 'Aurélie', 'Editer', 1, 1, 34),
(78, '2019-03-15 19:29:47', 'Alexandre', 'test', 0, 0, 38),
(79, '2019-03-15 19:29:50', 'Alexandre', 'test', 0, 0, 38),
(81, '2019-03-15 19:29:57', 'teest', 'test', 0, 0, 38),
(82, '2019-03-15 23:04:24', 'Olivier', 'test', 0, 0, 34);

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
  `com_author` varchar(255) NOT NULL,
  `com_content` varchar(500) NOT NULL,
  `post_id` int(11) NOT NULL,
  `type` enum('deleted','modified') DEFAULT NULL,
  `log_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `logs`
--

INSERT INTO `logs` (`log_id`, `com_id`, `com_date`, `com_author`, `com_content`, `post_id`, `type`, `log_date`) VALUES
(3, 26, '2019-03-07 05:45:12', 'Alexandre', 'Lorem ipsum, in graphical and textual context, refers to filler text that is placed in a document or visual presentation. Lorem ipsum is derived from the Latin \"dolorem ipsum\" roughly translated as \"pain itself.\" Lorem ipsum presents the sample font and orientation of writing on Web pages and other software applications where content is not the main concern of the developer.', 26, 'deleted', '2019-03-09 04:44:53'),
(4, 52, '2019-03-09 04:25:59', 'Alexandre', 'test', 26, 'deleted', '2019-03-09 04:46:08'),
(5, 30, '2019-03-07 05:47:14', 'Alexandre', 'Bonjour', 26, 'deleted', '2019-03-09 04:46:58'),
(6, 24, '2019-03-07 05:37:12', 'Alexandre', 'D\'accord', 26, 'deleted', '2019-03-11 19:33:41'),
(7, 29, '2019-03-07 05:46:25', 'Alexandre', 'Lorem ips of writing on Web pages and other software applications where content is not the main concern of the developer.', 26, 'deleted', '2019-03-13 05:30:45'),
(8, 50, '2019-03-08 16:07:48', 'Alexandre', 'Alexandre', 26, 'modified', '2019-03-13 05:31:00'),
(9, 68, '2019-03-14 03:36:12', 'Alexandre', 'Test responsive', 28, 'deleted', '2019-03-14 04:53:17'),
(10, 66, '2019-03-14 00:44:34', 'Olivier', 'Je dirais même plus ... \r\ntrès bon lorem ipsum', 28, 'deleted', '2019-03-14 04:53:25'),
(11, 65, '2019-03-14 00:43:42', 'Alexandre', 'Très bon lorem ipsum', 28, 'deleted', '2019-03-14 04:58:36'),
(12, 69, '2019-03-14 11:05:11', 'Alexandre', 'Bonjour !', 28, 'deleted', '2019-03-14 12:30:42'),
(13, 70, '2019-03-15 04:48:37', 'Alexandre', 'Joli lorem ipsum', 34, 'modified', '2019-03-15 17:00:02'),
(14, 67, '2019-03-14 02:31:13', 'Aurélie', '<strong>Petit test</strong>', 28, 'deleted', '2019-03-15 17:07:03'),
(15, 71, '2019-03-15 04:48:53', 'Olivier', 'Je dirais même plus ...', 34, 'deleted', '2019-03-15 17:35:37'),
(16, 72, '2019-03-15 04:48:59', 'Aurélie', 'Bonsoir !', 34, 'deleted', '2019-03-15 18:34:37'),
(17, 73, '2019-03-15 18:42:15', 'Alexandre', 'Test commentaire', 34, 'deleted', '2019-03-15 18:42:47'),
(18, 74, '2019-03-15 19:28:19', 'Alexandre', 'test', 38, 'deleted', '2019-03-15 20:27:18'),
(19, 76, '2019-03-15 19:29:41', 'Alexandre', 'test', 38, 'deleted', '2019-03-15 20:27:23'),
(20, 75, '2019-03-15 19:29:38', 'Alexandre', 'test', 38, 'deleted', '2019-03-15 23:18:54'),
(21, 75, '2019-03-15 19:29:38', 'Alexandre', 'test', 38, 'deleted', '2019-03-15 23:19:53'),
(22, 77, '2019-03-15 19:29:44', 'Alexandre', 'test', 38, 'deleted', '2019-03-15 23:20:00'),
(23, 80, '2019-03-15 19:29:53', 'teest', 'test', 38, 'deleted', '2019-03-15 23:20:02');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

