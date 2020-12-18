-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306

-- Généré le : jeu. 17 déc. 2020 à 14:45
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blogun`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `accroche` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`ID`)

) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`ID`, `accroche`, `description`, `photo`, `date`) VALUES

(1, 'Samurai Shamploo ! Plus qu\'un classique, une référence.', 'Samurai Shamploo, la référence, la légende, le \"must seen\" par excellence. Bon tout cela ne sonne pas très objectif, je vous le concède. Mais comment l\'être face à ce chef d\'oeuvre ? \r\nSortie en 2004 au Japon il débarque sur nos écrans hexagonaux en 2006 sur canal+ mais il faudra attendre bien 2015 pour y accéder facilement. Il approche de la vingtaine et il a pas vieillie d\'un pouce ! \r\nLe dynamisme des combats, la BO, les personnages, tout est dans la ligné du grand et tout aussi légendaire Cow Boy Beebop. Avis spécial aux amateurs de hiphop donc la culture est présente tout au long des épisodes.\r\nEntre anachronisme volontaire pour nous faire parvenir des bouts d\'histoires, et trame de fond prenante, on est dans le style, la dégaine mais surtout pas la flemme.\r\nUne VF soigné, même si perso la voix de Muggen, aka Kazuya Nakai (Zorro One Piece) est tellement kiffant, que j\'ai du mal à me passer de la VO.\r\n\r\nBon... un petit bémol pour un début un peu lent ? Et non même pas. Il attaque direct, et on prend son pied d\'épisode en épisode.\r\nAprès ce petit article #nospoil, je vois pas ce qu\'il vous manque pour pas commencer. ', 'samuraiChamploo.jpg', '2020-12-17 13:53:29'),
(2, 'Boruto, ou Narutox 2.0', 'Le manga est bien, quand il y a Naruto et Sazuke qui se battent. Sinon c\'est juste un copier/coller des mêmes vannes, drama et autres moments. Sauf qu\'il n\'y a plus de flashback et ça, ça c\'est bien. Grosso modo ça va plus vite mais c\'est du déjà vue et les \"entres 2\" moments sympa, c\'est mou du gnou.', 'borutox.jpg', '2020-12-17 15:08:11');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
