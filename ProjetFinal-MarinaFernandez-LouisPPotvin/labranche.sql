-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Aug 21, 2020 at 11:41 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labranche`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `idContact` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `courriel` varchar(255) NOT NULL,
  `objetMessage` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`idContact`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`idContact`, `nom`, `courriel`, `objetMessage`, `message`) VALUES
(1, 'test', 'test', 'test- ce message ne devrait être diffusé', '');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

DROP TABLE IF EXISTS `counter`;
CREATE TABLE IF NOT EXISTS `counter` (
  `idCounter` int(11) NOT NULL AUTO_INCREMENT,
  `ipAddress` text NOT NULL,
  `visitDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idCounter`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`idCounter`, `ipAddress`, `visitDate`) VALUES
(1, '11:11:11:11', '2020-08-21 01:24:22'),
(2, '', '2020-08-21 02:05:31'),
(3, '::1', '2020-08-21 02:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `livredor`
--

DROP TABLE IF EXISTS `livredor`;
CREATE TABLE IF NOT EXISTS `livredor` (
  `idComment` int(11) NOT NULL AUTO_INCREMENT,
  `texte` text NOT NULL,
  `points` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`idComment`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `livredor`
--

INSERT INTO `livredor` (`idComment`, `texte`, `points`, `nom`) VALUES
(1, '\r\nla meilleur pépinière de la region Rosemont!\r\n', 3, 'Nicholas'),
(2, 'Très bon!', 1, 'Karl'),
(3, 'Bonne vitesse de livraison', 2, 'Olivier'),
(4, 'Propriétaire très sympathique', 1, 'Eric'),
(5, 'Aucun pesticide utilisé! WOW!', 2, 'Martin'),
(6, 'Pas cher!', 4, 'Felix'),
(7, 'Mes enfants adorent! ', 2, 'Cooper'),
(8, 'Super nice and helpful. They helped find the perfect fig tree, potted it and delivered. I live in Los Angeles and they were so helpful in arranging everything over the phone. Thank you!', 2, 'John'),
(9, 'Réactivité, gentillesse et professionnalisme, Mr Marckenson est venu prendre les mesures et estimer le chantier en personne  puis a établi une soumission dans les 24 heures . Pendant ce temps les 3 autres entreprises que j avais sollicité ont juste envoyé leur taux horaire...\r\nBeaucoup de charisme et de bonne humeur se dégage de cet entrepreneur, le travail est parfait , le chantier est rendu propre et rangé.', 2, 'Ludovic'),
(10, 'Horrible, juste horrible :(', 1, 'MéchantBonhomme');

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `idProduits` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `prix` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `nomProduits` varchar(255) NOT NULL,
  PRIMARY KEY (`idProduits`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`idProduits`, `categorie`, `image`, `description`, `prix`, `quantite`, `nomProduits`) VALUES
(1, 'Arbres Fruitiers', 'apricot.jpg', '<ul>\r\n				<li>Hauteur à maturité: 10 mètres</li>\r\n				<li>Ensoleillement: Plein soleil</li>\r\n				<li>Sol	Bien drainé ou humide, mais pas innondé</li>\r\n				<li>Floraison: Début mai</li>\r\n				<li>Ensoleillement: Plein soleil</li>\r\n				<li>Récolte: fin juillet à début août</li>\r\n				<li>Couleur du fruit: orange, chair jaune</li>\r\n				<li>Pollinisation: autofertile, mais produit plus avec une pollinisation croisée</li>\r\n</ul>', 35, 30, 'Abricotier'),
(2, 'Arbres Fruitiers', 'pear.jpg', '<ul>\r\n			\r\n				<li>Cette arbre a été cultivée au Québec</li>\r\n				<li>Hauteur à maturité: 10 mètres</li>\r\n				<li>Ensoleillement: Plein soleil</li>\r\n				<li>Floraison: Mi-mai</li>\r\n				<li>Ensoleillement: Plein soleil</li>\r\n				<li>Récolte: Fin-août</li>\r\n				<li>Couleur du fruit: jaune et vert, avec du orangé quand mûre</li>\r\n				<li>Pollinisation: auto-fertile</li>\r\n				\r\n				<li>Livraison gratuite partout au Canada avec un minimum d\'achat de 75$</li>\r\n			</ul>', 40, 65, 'Le poirier'),
(3, 'Arbres Fruitiers', 'lemon.jpg', '<ul>\r\n				<li>Arbre très décoratif car grâce à sa grande productivité, il est couvert presque toute l\'année de fleurs et de fruits</li>\r\n				<li>Hauteur à maturité: 6 mètres</li>			<li>Ensoleillement: ensoleillée</li>\r\n<li>Sol: riche et drainant</li>\r\n				<li>Période de floraison : La floraison du citronnier est remontante et les bouquets de fleurs apparaissent presque toute l\'année. </li>\r\n				<li>Récolte: mi-juillet</li>\r\n				<li>Livraison gratuite partout au Canada avec un minimum d\'achat de 75$</li>\r\n			</ul>', 90, 80, 'Le Citronnier'),
(4, 'Arbres a Noix', 'almond2.jpg', '<ul>\r\n			\r\n				<li>Cet arbrisseau donne des fleurs roses et très nombreuses.</li>\r\n				<li>Hauteur à maturité: 5 mètres</li>\r\n				<li>Ensoleillement: soleil ou ombre partielle</li>\r\n				<li>Sol: bien drainés</li>\r\n				<li>Récolte: l\'automnet</li>\r\n				<li>Pollinisation: auto-fertile</li>\r\n				<li>Livraison gratuite partout au Canada avec un minimum d\'achat de 75$</li>\r\n			</ul>', 120, 15, 'L\'amandier'),
(5, 'Arbres a Noix', 'hazelnut.jpg', '<ul>\r\n			\r\n				<li>Ce noisetier est la seule espèce de noisetier à pousser naturellement au Québec</li>\r\n				<li>Hauteur à maturité: 3 mètres</li>\r\n				<li>Ensoleillement: partiel ou plein soleil</li>\r\n				<li>Sol: secs ou humides, pourvu que ces derniers soient bien drainés.</li>\r\n				<li>Noisettes: petite taille</li>\r\n				<li>Livraison gratuite partout au Canada avec un minimum d\'achat de 75$</li>\r\n			</ul>', 15, 25, 'Noisetier D\'amerique'),
(6, 'Arbres a Noix', 'walnut.jpg', '<ul>\r\n			\r\n				<li>Cette noyer est un arbre à noix à croissance rapide, mais à vie relativement courte (75 ans)</li>\r\n				<li>Hauteur à maturité	25 mètres.</li>\r\n				<li>Ensoleillement: Plein soleil</li>\r\n				<li>Sol: bien drainé</li>\r\n				<li>Récolte: mi-septembre</li>\r\n				<li>Couleur du fruit: cosse brune / noix crème</li>\r\n				<li>Livraison gratuite partout au Canada avec un minimum d\'achat de 75$</li>\r\n			</ul>', 70, 15, 'Noyer'),
(7, 'Arbustes Fruitiers', 'blueberry.jpg', '<ul>\r\n			\r\n				<li>Ce bleuetier arbustif est vigoureux, précoce et résistant au froid.</li>\r\n				<li>Cet arbuste se couvre de fleurs blanches au printemps, le rendant très joli.</li>\r\n				<li>Hauteur à maturité: 2-3 mètres</li>\r\n				<li>Ensoleillement: Plein soleil</li>\r\n				<li>Récolte: mi juillet</li>\r\n				<li>Sol: bien drainé en zone semi-ombragée.</li>\r\n				<li>Livraison gratuite partout au Canada avec un minimum d\'achat de 75$</li>\r\n			</ul>', 40, 90, 'Bleuet Géant'),
(8, 'Arbustes Fruitiers', 'grape.jpg', '<ul>\r\n			\r\n				<li>Cette vigne produit des raisins dont la saveur a une bonne balance acide/sucré. Peau épaisse. </li>\r\n				<li>Hauteur à maturité: aussi haut que son support</li>\r\n				<li>Ensoleillement: Plein soleil</li>\r\n				<li>Récolte: Fin-septembre</li>\r\n				<li>Couleur du fruit: vert</li>\r\n				<li>Pollinisation: autofertile</li>\r\n				<li>Livraison gratuite partout au Canada avec un minimum d\'achat de 75$</li>\r\n			</ul>', 20, 35, 'Vigne à Raisins'),
(9, 'Arbustes Fruitiers', 'plum.jpg', '<ul>\r\n			\r\n				<li>Il produites des prunes sucrées, juteuses et rafraichissantes.</li>\r\n				<li>Hauteur à maturité: 4-5 mètres.</li>\r\n				<li>Ensoleillement: lein soleil</li>\r\n				<li>Floraison: mi-mai</li>\r\n				<li>Récolte: début à mi-septembre</li>\r\n				<li>Pollinisation: auto-stérile (doit être pollinisé par prunier noir ou Américain)</li>\r\n				<li>Livraison gratuite partout au Canada avec un minimum d\'achat de 75$</li>\r\n			</ul>', 55, 40, 'Le Prunier');

-- --------------------------------------------------------

--
-- Table structure for table `usager`
--

DROP TABLE IF EXISTS `usager`;
CREATE TABLE IF NOT EXISTS `usager` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usager`
--

INSERT INTO `usager` (`username`, `password`) VALUES
('louis', 'potvin'),
('newtest', 'ok'),
('sylvain', 'labranche'),
('test', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
