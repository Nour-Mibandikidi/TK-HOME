-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mar. 05 nov. 2019 à 14:25
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tkhome_base`
--
CREATE DATABASE IF NOT EXISTS `tkhome_base` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `tkhome_base`;

-- --------------------------------------------------------

--
-- Structure de la table `ajouter`
--

CREATE TABLE `ajouter` (
  `id_ajout` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `id_cat` int(11) DEFAULT NULL,
  `decrire` text DEFAULT NULL,
  `cle` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `batiment` varchar(255) DEFAULT NULL,
  `bp` varchar(255) DEFAULT NULL,
  `pays` varchar(255) DEFAULT NULL,
  `numero` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `device` varchar(255) DEFAULT NULL,
  `prix` varchar(255) DEFAULT NULL,
  `caracteristique1` varchar(255) DEFAULT NULL,
  `caracteristique2` varchar(255) DEFAULT NULL,
  `caracteristique3` varchar(255) DEFAULT NULL,
  `caracteristique4` varchar(255) DEFAULT NULL,
  `caracteristique5` varchar(255) DEFAULT NULL,
  `caracteristique6` varchar(255) DEFAULT NULL,
  `lundi1` varchar(255) DEFAULT NULL,
  `lundi2` varchar(255) DEFAULT NULL,
  `mardi1` varchar(255) DEFAULT NULL,
  `mardi2` varchar(255) DEFAULT NULL,
  `mercredi1` varchar(255) DEFAULT NULL,
  `mercredi2` varchar(255) DEFAULT NULL,
  `jeudi1` varchar(255) DEFAULT NULL,
  `jeudi2` varchar(255) DEFAULT NULL,
  `vendredi1` varchar(255) DEFAULT NULL,
  `vendredi2` varchar(255) DEFAULT NULL,
  `samedi1` varchar(255) DEFAULT NULL,
  `samedi2` varchar(255) DEFAULT NULL,
  `dimanche1` varchar(255) DEFAULT NULL,
  `dimanche2` varchar(255) DEFAULT NULL,
  `articlename` varchar(255) DEFAULT NULL,
  `articledes` varchar(255) DEFAULT NULL,
  `articlepri` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `statut` enum('0','1','2') DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ajouter`
--

INSERT INTO `ajouter` (`id_ajout`, `titre`, `id_cat`, `decrire`, `cle`, `adresse`, `batiment`, `bp`, `pays`, `numero`, `email`, `ville`, `device`, `prix`, `caracteristique1`, `caracteristique2`, `caracteristique3`, `caracteristique4`, `caracteristique5`, `caracteristique6`, `lundi1`, `lundi2`, `mardi1`, `mardi2`, `mercredi1`, `mercredi2`, `jeudi1`, `jeudi2`, `vendredi1`, `vendredi2`, `samedi1`, `samedi2`, `dimanche1`, `dimanche2`, `articlename`, `articledes`, `articlepri`, `id`, `statut`) VALUES
(1, 'Maison 3 chambres à louer', 2, 'villa de: 3 chambres 3 douches wc visiteur salon salle a manger coin buanderie terrasse garage couvert parking jardin', '', 'Akanda ', '', '', 'Gabon', '06537203 / 07792284', '', 'Libreville', 'CFA', '500 000 ', '3 chambres', '1 Cuisine', '3 douches', '4 toilettes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0'),
(2, 'Hotel Adagio', 4, 'Situé au centre du quartier des affaires de Libreville, l\'Hotel L\'Adagio dispose d\'un jardin, d\'une terrasse, d\'un salon commun et d\'une connexion Wi-Fi gratuite. Il vous accueille à 200 mètres de l\'ambassade d\'Afrique du Sud au Gabon et à 800 mètres du casino Croisette Libreville. Vous pourrez boire un verre au bar et prendre vos repas au restaurant.\r\n\r\nToutes les chambres de l\'hôtel sont dotées d\'une télévision à écran plat et d\'une salle de bains privative. Certaines chambres de l\'Hotel L\'Adagio comprennent également un coin salon. Toutes disposent d\'un bureau.\r\nL\'établissement sert un petit-déjeuner continental ou à la carte.\r\nLa réception dispense des conseils touristiques.\r\nEnfin, vous trouverez un supermarché à 200 mètres de l\'Hotel L\'Adagio.\r\nCet établissement a également été bien noté pour son excellent rapport qualité/prix à Libreville ! Les clients en ont plus pour leur argent en comparaison avec d\'autres établissements dans cette ville.\r\nNous parlons votre langue !', 'LOCATIION JOURNALIERE', 'Quartier St Benoit, Libreville, Gabon ', '', '', 'Gabon', '05 65 70 29', '', 'Libreville', 'Selectiooner une device', '', ' Connexion Wi-Fi gratuite', 'Parking gratuit', 'Bar', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0'),
(3, 'ONOMO Hotel Libreville', 4, 'Doté d\'un restaurant, l\'Hotel Onomo Libreville se trouve à Libreville, à 10 minutes à pied de la plage et à 20 minutes du centre-ville. Une connexion Wi-Fi est disponible gratuitement dans l\'ensemble du bâtiment.\r\nLes chambres sont équipées d\'une télévision à écran plat, de la climatisation et d\'un coffre-fort. Donnant sur le jardin, elles comprennent une salle de bains privative pourvue d\'une douche.\r\nL\'Hotel Onomo Libreville met à votre disposition une réception ouverte 24h/24, un jardin et une terrasse. Il renferme aussi un salon commun et une salle de conférence. Le stationnement est gratuit sur place.\r\nL\'aéroport international de Libreville est à 4 km de l\'établissement. Enfin, une navette aéroport est disponible sur demande.\r\nNous parlons votre langue !', 'LOCATIION JOURNALIERE', 'La Sablière Route Angondje, 00 Libreville 00 Libreville, Gabon', '', '', 'Gabon', '01 45 91 00', '', 'Libreville', 'Selectiooner une device', '', ' Navette aéroport (gratuite)', 'Connexion Wi-Fi gratuite', 'Parking gratuit', 'Bar', 'Petit-déjeuner', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0'),
(4, 'ONOMO Hotel Libreville ', 4, 'Doté d\'un restaurant, l\'Hotel Onomo Libreville se trouve à Libreville, à 10 minutes à pied de la plage et à 20 minutes du centre-ville. Une connexion Wi-Fi est disponible gratuitement dans l\'ensemble du bâtiment.\r\nLes chambres sont équipées d\'une télévision à écran plat, de la climatisation et d\'un coffre-fort. Donnant sur le jardin, elles comprennent une salle de bains privative pourvue d\'une douche.\r\nL\'Hotel Onomo Libreville met à votre disposition une réception ouverte 24h/24, un jardin et une terrasse. Il renferme aussi un salon commun et une salle de conférence. Le stationnement est gratuit sur place.\r\nL\'aéroport international de Libreville est à 4 km de l\'établissement. Enfin, une navette aéroport est disponible sur demande.\r\nNous parlons votre langue !', 'LOCATIION JOURNALIERE', 'La Sablière Route Angondje, 00 Libreville 00 Libreville, Gabon', '', '', 'Gabon', '', '', '', 'Selectiooner une device', '', ' Navette aéroport (gratuite)', 'Connexion Wi-Fi gratuite', 'Bar', 'Parking gratuit', 'Petit-déjeuner', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0'),
(5, 'Radisson Blu Okoume Palace Hotel, Libreville', 4, 'Le Radisson Blu Okoume Palace Hotel, Libreville vous propose un hébergement à Libreville.\r\n\r\nSes chambres disposent d\'une bouilloire, d\'une télévision par satellite à écran plat et de salles de bains privatives.\r\n\r\nLes couples apprécient particulièrement l\'emplacement de cet établissement. Ils lui donnent la note de 8,3 pour un séjour à deux.\r\n\r\nNous parlons votre langue !', 'LOCATIION JOURNALIERE', '5, Boulevard de Nice, 00 libreville 00 Libreville, Gabon', '', '', 'Gabon', '01 44 80 00', '', 'Libreville', '', '', ' Navette aéroport', 'Piscine', 'Connexion Wi-Fi gratuite', 'Parking gratuit', ' Bar', 'Bon petit-déjeuner', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0'),
(6, 'Radisson Blu Okoume Palace Hotel, Libreville', 4, 'Le Radisson Blu Okoume Palace Hotel, Libreville vous propose un hébergement à Libreville.\r\n\r\nSes chambres disposent d\'une bouilloire, d\'une télévision par satellite à écran plat et de salles de bains privatives.\r\n\r\nLes couples apprécient particulièrement l\'emplacement de cet établissement. Ils lui donnent la note de 8,3 pour un séjour à deux.\r\n\r\nNous parlons votre langue !', 'LOCATIION JOURNALIERE', '5, Boulevard de Nice, 00 libreville 00 Libreville, Gabon', '', '', 'Gabon', '01 44 80 00', '', 'Libreville', '', '', ' Navette aéroport', 'Piscine', 'Connexion Wi-Fi gratuite', 'Parking gratuit', ' Bar', 'Bon petit-déjeuner', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0'),
(7, 'Royal Palm Hotel', 4, 'Situé à Libreville, le Royal Palm Hotel dispose d\'une piscine extérieure ouverte en saison et d\'une salle de sport. Cet hôtel 4 étoiles propose des chambres climatisées avec salle de bains privative. L\'établissement possède un restaurant et se trouve à 6 km de la statue nationale de l\'Abolition de Slavery.\r\n\r\nLes chambres sont équipées d\'une télévision par satellite à écran plat, d\'une machine à café, d\'un bidet, d\'articles de toilette gratuits et d\'un bureau. Une connexion Wi-Fi est accessible gratuitement. Certaines chambres possèdent une terrasse. Tous les logements comprennent une armoire.\r\n\r\nUn petit-déjeuner continental est servi chaque matin à l\'hôtel.\r\n\r\nVous pourrez jouer au ping-pong dans cet hôtel 4 étoiles.\r\n\r\nLe personnel de la réception ouverte 24h/24 pourra vous fournir des conseils sur la région.\r\n\r\nLe Royal Palm Hotel se trouve à 3,4 km de l\'ambassade du Nigeria et à 3,9 km de l\'ambassade du Cameroun.\r\n\r\nCet établissement a également été bien noté pour son excellent emplacement à Libreville ! Les clients en sont plus satisfaits en comparaison avec d\'autres établissements dans cette ville.\r\n\r\nLes couples apprécient particulièrement l\'emplacement de cet établissement. Ils lui donnent la note de 9,4 pour un séjour à deux.\r\n\r\nCet établissement a également été bien noté pour son excellent rapport qualité/prix à Libreville ! Les clients en ont plus pour leur argent en comparaison avec d\'autres établissements dans cette ville.', 'LOCATIION JOURNALIERE', 'Quartier Glass, Libreville, Gabon', '', '', 'Gabon', '01 77 03 17', '', 'Libreville', '', '', 'Navette aéroport', 'Piscine                     Plateau/bouilloire dans tous les hébergements', 'Connexion Wi-Fi gratuite', 'Parking gratuit', 'Bar                  Bon petit-déjeuner', 'Front de mer', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0'),
(8, 'Hotel Boulevard', 4, 'Doté d\'une connexion Wi-Fi gratuite, d\'un restaurant et d\'un barbecue, l\'Hotel Boulevard propose des hébergements acceptant les animaux domestiques à Libreville. Vous apprécierez sa terrasse bien exposée et sa piscine intérieure.\r\n\r\nSes chambres climatisées sont équipées d\'une télévision. Certaines offrent une vue sur la mer ou la piscine.\r\n\r\nVous profiterez d\'un service de navette gratuit, d\'une réception ouverte 24h/24 et de boutiques sur place.\r\n\r\nL\'hôtel assure un service de location de voitures et la région est populaire pour le vélo. L\'aéroport international Léon-Mba se trouve à 11 km.', 'LOCATIION JOURNALIERE', 'ACAE Libreville LBV 15499, 00 Libreville 00 Libreville, Gabon', '', '', 'Gabon', '04 07 10 65', '', 'Libreville', '', '', ' Navette aéroport (gratuite)', 'Piscine', 'Connexion Wi-Fi gratuite', 'Parking gratuit', 'Bar', 'Petit-déjeuner', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0'),
(9, 'Villa à louer à Mpita', 2, 'Une villa à Mpita (Rue Libembi prêt du rond-point de Mpita) est à louer et disponible à partir du 31/03/2019 \r\n\r\nCaractéristique de la villa : \r\n5 chambres climatisées dont 1 au rez de chaussée et 4 au 1er étage\r\n2 salles de bains avec baignoire\r\n2 bureaux\r\nSalon salle à manger \r\nCuisine équipée\r\nPaillote\r\nGroupe électrogène de 40KVA\r\ndouche sanitaire à l’extérieur de la maison', 'LOCATIION MENSUELLE', ' Rue Libembi prêt du rond-point de Mpita, Pointe-Noire, Congo', '', '', 'Congo', ' 07.78.42.46.04 /06.963.38.63 / 01.173.16.16', 'ovachris@yahoo.fr', 'Pointe-Noire', 'CFA', ' 1.200.000', ' Parking ', 'Jardin', 'Terrain', 'Balcon', 'Terrasse', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0'),
(10, 'Somptueuse villa, très lumineuse vers le Warf', 2, 'Somptueuse villa, très lumineuse vers le Warf, composée de :\r\n\r\n\r\n1 patio ;\r\n\r\n1 salon ;\r\n\r\n1 salle à manger ;\r\n\r\n1 espace de cinéma ;\r\n\r\n4 chambres avec placards et salle de bain indépendante ;\r\n\r\n1 bureau ;\r\n\r\n \r\n\r\nExtérieur :\r\n\r\n1 WC visiteur ;\r\n\r\n1 piscine ;\r\n\r\n1 local GE avec groupe éléctrongène ;\r\n\r\n1 annexe avec douche et Wc ;\r\n\r\n1 très grande terrasse sur le toit ;\r\n\r\nEspaces verts.', 'LOCATIION MENSUELLE', 'Warf', '', '', 'Congo', '06 959 36 93 / 05 520 85 20', 'd.commerciale@lgc-congo.com ', 'Pointe-Noire', '', '', 'Piscine', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0'),
(11, 'Villa Centre-ville', 2, 'Petite villa avec de belles prestations lumineuse au centre-ville, composée :\r\n\r\n\r\n1 séjour salle à manger climatisée;\r\n\r\n1 cuisine moderne climatisée et équipée ;\r\n\r\n1 chambre parentale climatisée avec salle de bain ;\r\n\r\n2 chambres climatisées avec salle de bain commune ;\r\n\r\nExtérieur:\r\n\r\n    1 Une petite terrasse ;\r\n\r\n    1 garage couvert ;\r\n\r\n    1 local pour le gardien ;\r\n\r\n    1 douche et toilettes pour le personnel ;\r\n\r\n    1 petit jardin ;\r\n\r\n    1 groupe électrogène\r\n\r\nDisponible de suite', 'LOCATIION MENSUELLE', 'Centre ville', '', '', 'Congo', '06 959 36 93 / 05 520 85 20', '', 'Pointe-Noire', 'CFA', '600.000 ', 'Garage ', 'Climatisation ', 'Jardin ', 'Parking ', 'Groupe électrogène', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0'),
(12, 'appartement meublé de type F3', 2, 'Un bel appartement de type F3 dans un immeuble bien placé à la côte sauvage, comprenant toutes les charge locatives ', 'LOCATIION MENSUELLE', 'Côte sauvage', '', '', 'Congo', '06 959 36 93', '', 'Pointe-Noire', '', '1.000.000', ' Jardin  ', 'Parking', 'Internet', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0'),
(13, 'Studio meublé(e) à louer à Libreville', 2, 'Studio meublé à louer situé à Glass non loin de la PMI. 1 chambre Sliptté, 1 salon splitté, un coin cuisine, Chaîne câblée , Internet Wifi Fibre-optique, Chauffe-eau. 30.000 Fcfa /jour - Contact: 04679656 - 06908946 - 04336026\r\n\r\n- 1 chambre\r\n- 1 douche\r\n- 1 toilette\r\n\r\ncloturé, en bordure route, Compteur individuel, Eau disponible, Slipt, chauffe eau, gardien, machine à lavage,', 'LOCATIION JOURNALIERE', 'Libreville, Glass, Feu rouge Méridien (PMI Glass) (Zone: Moderne), (Route: Goudronné)', '', '', 'Gabon', '04679656 -  06908946 - 04336026 - 06810780', '', 'Libreville', 'CFA', '30 000 ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0'),
(14, 'Terrain à vendre à Akanda', 3, 'Vend terrain avec sous bassement, bordure de route secondaire,', 'A VENDRE', 'Akanda, Angondjé, Angondje stade', '', 'IAI', 'Gabon', '06537203 / 07792284', '', 'Libreville', 'CFA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0'),
(15, 'Chambre Américaine', 2, 'Chambre Américaine à louer avec charge quartier caution obligatoire dragage juste après la pharmacie l\'entrée à gauche visite gratuite', 'LOCATIION MENSUELLE', 'dragage ', '', '', 'Gabon', '', '', 'Libreville', 'CFA', '90000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0'),
(16, 'appartements à louer', 2, 'Des appartements à louer ondimba,lasboom,l\' aéroport,Akoso, 400000f y compris la charge gardien\r\n\r\n2_chambre\r\n2douche\r\n1cuisine\r\n2terrasse\r\nGarage', 'LOCATIION MENSUELLE', 'ondimba,lasboom,l\' aéroport,Akoso,', '', '', 'Gabon', '07431669/05410314', '', 'Libreville', 'CFA', '400 000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0'),
(17, 'Une Villa', 3, 'Vente villa: 200m2\r\nterrain : 1500m2\r\nlocalisation: okala vers la station petro gabon\r\nTitre de propriété', 'A VENDRE', 'OKALA ', '', '', 'Gabon', '06775533', '', 'Libreville', '', '50 000 000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0'),
(18, 'STUDIO À LOUER', 2, ' \r\nSTUDIO 1ÈRE MAIN, CHAMBRE, PIÈCE À VIVRE, COIN CUISINE, SALLE DE DOUCHE, DANS LA BARRIÈRE DERRIÈRE L\'HÔTEL DE LA CAN', 'LOCATIION MENSUELLE', 'IAI', '', '', 'Gabon', '04-48-18-48/01-71-66-07', '', 'Libreville', 'CFA', '130 000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0');

-- --------------------------------------------------------

--
-- Structure de la table `ajouter_like`
--

CREATE TABLE `ajouter_like` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ajouter_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `bien`
--

CREATE TABLE `bien` (
  `id_bien` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_ajout` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bien`
--

INSERT INTO `bien` (`id_bien`, `image`, `id_ajout`, `id`) VALUES
(1, 'gabonhome-2019-15-0317112613830.jpg', 1, 1),
(2, 'gabonhome-2019-15-0317122113830.jpg', 1, 1),
(3, 'gabonhome-2019-15-0317130313830.jpg', 1, 1),
(4, 'gabonhome-2019-15-0317133213830.jpg', 1, 1),
(5, 'gabonhome-2019-15-0317142113830.jpg', 1, 1),
(6, 'gabonhome-2019-15-0317145613830.jpg', 1, 1),
(7, 'gabonhome-2019-15-0317075113830.jpg', 1, 1),
(8, 'gabonhome-2019-15-0317085113830.jpg', 1, 1),
(9, 'gabonhome-2019-15-0317094713830.jpg', 1, 1),
(10, '126998886.jpg', 2, 1),
(11, '126998912.jpg', 2, 1),
(12, '126998920.jpg', 2, 1),
(13, '126998931.jpg', 2, 1),
(14, '126998939.jpg', 2, 1),
(15, '126998955.jpg', 2, 1),
(16, '126998959.jpg', 2, 1),
(17, '126998985.jpg', 2, 1),
(18, '126998987.jpg', 2, 1),
(19, '126998992.jpg', 2, 1),
(20, '126998993.jpg', 2, 1),
(21, '127094604.jpg', 2, 1),
(22, '127101893.jpg', 2, 1),
(23, '127101894.jpg', 2, 1),
(24, '127102090.jpg', 2, 1),
(25, '127110690.jpg', 2, 1),
(26, '127110727.jpg', 2, 1),
(27, '127110748.jpg', 2, 1),
(28, '127110787.jpg', 2, 1),
(29, '127110840.jpg', 2, 1),
(30, '127113494.jpg', 2, 1),
(31, '127205108.jpg', 2, 1),
(32, '127255047.jpg', 2, 1),
(33, '127255543.jpg', 2, 1),
(34, '127255902.jpg', 2, 1),
(35, '127257447.jpg', 2, 1),
(36, '127258381.jpg', 2, 1),
(37, '127260839.jpg', 2, 1),
(38, '127263820.jpg', 2, 1),
(39, '127267765.jpg', 2, 1),
(40, '127268064.jpg', 2, 1),
(41, '127270895.jpg', 2, 1),
(42, '127306596.jpg', 2, 1),
(43, '127308568.jpg', 2, 1),
(44, '127311580.jpg', 2, 1),
(45, '128356408.jpg', 2, 1),
(46, '140573414.jpg', 2, 1),
(47, '126997475.jpg', 2, 1),
(48, '126997490.jpg', 2, 1),
(49, '126998882.jpg', 2, 1),
(50, '27787678.jpg', 4, 1),
(51, '27787685.jpg', 4, 1),
(52, '27787692.jpg', 4, 1),
(53, '90522284.jpg', 4, 1),
(54, '90641726.jpg', 4, 1),
(55, '94850191.jpg', 4, 1),
(56, '94851115.jpg', 4, 1),
(57, '94851111.jpg', 4, 1),
(58, '94852095.jpg', 4, 1),
(59, '94852101.jpg', 4, 1),
(60, '94852103.jpg', 4, 1),
(61, '94852105.jpg', 4, 1),
(62, '94852107.jpg', 4, 1),
(63, '94852121.jpg', 4, 1),
(64, '94852130.jpg', 4, 1),
(65, '94852135.jpg', 4, 1),
(66, '94852142.jpg', 4, 1),
(67, '108965320.jpg', 4, 1),
(68, '108965329.jpg', 4, 1),
(69, '109746837.jpg', 4, 1),
(70, '109746840.jpg', 4, 1),
(71, '27787653.jpg', 4, 1),
(72, '27787672.jpg', 4, 1),
(73, '27787677.jpg', 4, 1),
(74, '63786173.jpg', 6, 1),
(75, '63786137.jpg', 6, 1),
(76, '63786216.jpg', 6, 1),
(77, '63786237.jpg', 6, 1),
(78, '63786266.jpg', 6, 1),
(79, '63786303.jpg', 6, 1),
(80, '63786362.jpg', 6, 1),
(81, '63786517.jpg', 6, 1),
(82, '63786461.jpg', 6, 1),
(83, '63786523.jpg', 6, 1),
(84, '63786600.jpg', 6, 1),
(85, '63786615.jpg', 6, 1),
(86, '63786616.jpg', 6, 1),
(87, '63789394.jpg', 6, 1),
(88, '63789491.jpg', 6, 1),
(89, '63789510.jpg', 6, 1),
(90, '63789523.jpg', 6, 1),
(91, '63791382.jpg', 6, 1),
(92, '63791384.jpg', 6, 1),
(93, '63791420.jpg', 6, 1),
(94, '63791430.jpg', 6, 1),
(95, '124421130.jpg', 6, 1),
(96, '180684452.jpg', 6, 1),
(97, '180700852.jpg', 6, 1),
(98, '63786046.jpg', 6, 1),
(99, '116406121.jpg', 7, 1),
(100, '116406123.jpg', 7, 1),
(101, '116988828.jpg', 7, 1),
(102, '116990226.jpg', 7, 1),
(103, '117116887.jpg', 7, 1),
(104, '117117472.jpg', 7, 1),
(105, '117268312.jpg', 7, 1),
(106, '117883663.jpg', 7, 1),
(107, '117884000.jpg', 7, 1),
(108, '117884400.jpg', 7, 1),
(109, '117884685.jpg', 7, 1),
(110, '117884689.jpg', 7, 1),
(111, '117991487.jpg', 7, 1),
(112, '118018663.jpg', 7, 1),
(113, '118018758.jpg', 7, 1),
(114, '118018858.jpg', 7, 1),
(115, '118018969.jpg', 7, 1),
(116, '118019005.jpg', 7, 1),
(117, '118029848.jpg', 7, 1),
(118, '118035692.jpg', 7, 1),
(119, '118035742.jpg', 7, 1),
(120, '118069242.jpg', 7, 1),
(121, '118071182.jpg', 7, 1),
(122, '118071298.jpg', 7, 1),
(123, '118071415.jpg', 7, 1),
(124, '118071602.jpg', 7, 1),
(125, '116406115.jpg', 7, 1),
(126, '116406117.jpg', 7, 1),
(127, '116990226.jpg', 7, 1),
(128, '117116638.jpg', 7, 1),
(129, '117116887.jpg', 7, 1),
(130, '117117472.jpg', 7, 1),
(131, '117268312.jpg', 7, 1),
(132, '117883663.jpg', 7, 1),
(133, '117884000.jpg', 7, 1),
(134, '117884400.jpg', 7, 1),
(135, '117884685.jpg', 7, 1),
(136, '117884689.jpg', 7, 1),
(137, '117991487.jpg', 7, 1),
(138, '118018663.jpg', 7, 1),
(139, '118018758.jpg', 7, 1),
(140, '118018858.jpg', 7, 1),
(141, '118018969.jpg', 7, 1),
(142, '118019005.jpg', 7, 1),
(143, '118029848.jpg', 7, 1),
(144, '118035692.jpg', 7, 1),
(145, '118035742.jpg', 7, 1),
(146, '118069242.jpg', 7, 1),
(147, '118071182.jpg', 7, 1),
(148, '118071298.jpg', 7, 1),
(149, '118071415.jpg', 7, 1),
(150, '118071602.jpg', 7, 1),
(151, '116406117.jpg', 7, 1),
(152, '116406115.jpg', 7, 1),
(153, '116406121.jpg', 7, 1),
(154, '116406123.jpg', 7, 1),
(155, '116988828.jpg', 7, 1),
(156, '48954487.jpg', 8, 1),
(157, '48954484.jpg', 8, 1),
(158, '48954489 (1).jpg', 8, 1),
(159, '48954489.jpg', 8, 1),
(160, '48954490.jpg', 8, 1),
(161, '48954494.jpg', 8, 1),
(162, '48954497.jpg', 8, 1),
(163, '48954500.jpg', 8, 1),
(164, '48954501.jpg', 8, 1),
(165, '48954504.jpg', 8, 1),
(166, '48954506.jpg', 8, 1),
(167, '48954508.jpg', 8, 1),
(168, '48954509.jpg', 8, 1),
(169, '48954516.jpg', 8, 1),
(170, '48954518.jpg', 8, 1),
(171, '48954526.jpg', 8, 1),
(172, '48954527.jpg', 8, 1),
(173, '48954528.jpg', 8, 1),
(174, '48954532.jpg', 8, 1),
(175, '48954536.jpg', 8, 1),
(176, '48954539.jpg', 8, 1),
(177, '48954541.jpg', 8, 1),
(178, '48954542.jpg', 8, 1),
(179, '50579237.jpg', 8, 1),
(180, '50579217.jpg', 8, 1),
(181, '50579374.jpg', 8, 1),
(182, '50579258.jpg', 8, 1),
(183, '50579406.jpg', 8, 1),
(184, '50579386.jpg', 8, 1),
(185, '89303186.jpg', 8, 1),
(186, '89315590.jpg', 8, 1),
(187, '126722363.jpg', 8, 1),
(188, '126722364.jpg', 8, 1),
(189, '126722366.jpg', 8, 1),
(190, '48954474.jpg', 8, 1),
(191, '48954476.jpg', 8, 1),
(192, '48954479.jpg', 8, 1),
(193, '1552901635-2245-full_size.jpg', 9, 1),
(194, '1552901635-602-full_size.jpg', 9, 1),
(195, '1552901635-2781-full_size.jpg', 9, 1),
(196, '1552901635-3289-full_size.jpg', 9, 1),
(197, '1552901635-4028-full_size.jpg', 9, 1),
(198, '1552901635-4457-full_size.jpg', 9, 1),
(199, 'ea_Bb.jpg', 10, 1),
(200, 'ea_A.jpg', 10, 1),
(201, 'ea_Cc.jpg', 10, 1),
(202, 'ea_Dd.jpg', 10, 1),
(203, 'ea_Ee.jpg', 10, 1),
(204, 'ea_1_408227098.jpg', 11, 1),
(205, 'ea_2_134414773.jpg', 11, 1),
(206, 'ea_4_385852821.jpg', 11, 1),
(207, 'ea_5_512036678.jpg', 11, 1),
(208, 'ea_appart_T3_Flamboyant__3_.jpg', 12, 1),
(209, 'ea_appart_T3_Flamboyant__4_.jpg', 12, 1),
(210, 'ea_appart_T3_Flamboyant__5_.jpg', 12, 1),
(211, 'Jungle-HD-Android-Apps-on-Google-Play-wallpaper-wpt7606218.jpg', 12, 1),
(212, 'ea_appart_T3_Flamboyant__1_.jpg', 12, 1),
(213, 'ea_appart_T3_Flamboyant__2_.jpg', 12, 1),
(214, 'gabonhome-2019-10-0200173713453.jpg', 13, 1),
(215, 'gabonhome-2019-10-0200180413453.jpg', 13, 1),
(216, 'gabonhome-2019-10-0200202413453.jpg', 13, 1),
(217, 'gabonhome-2019-10-0200205213453.jpg', 13, 1),
(218, 'gabonhome-2019-10-0200211713453.jpg', 13, 1),
(219, 'gabonhome-2019-10-0200215413453.jpg', 13, 1),
(220, 'gabonhome-2019-10-0200281713453.jpg', 13, 1),
(221, 'gabonhome-2019-10-0200284313453.jpg', 13, 1),
(222, 'gabonhome-2019-20-0313265313857.jpg', 14, 1),
(223, 'gabonhome-2019-20-0313263913857.jpg', 14, 1),
(224, 'gabonhome-2019-20-0313260713857.jpg', 14, 1),
(225, 'gabonhome-2019-20-0313262513857.jpg', 14, 1),
(226, '54436741_2226179624116155_6428872941764608000_n.jpg', 15, 1),
(227, '54435948_2226179514116166_3665273031107805184_n.jpg', 15, 1),
(228, '54519940_2226179687449482_3727654119662419968_n.jpg', 15, 1),
(229, '54521828_2226179657449485_2869939461205000192_n.jpg', 15, 1),
(230, '54728229_2226179574116160_5819390204556869632_n.jpg', 15, 1),
(231, '54798982_2226179724116145_3817214177877950464_n.jpg', 15, 1),
(232, '54799724_2226179750782809_2125998185770909696_n.jpg', 15, 1),
(233, '54398078_2226179604116157_5338006511924805632_n.jpg', 15, 1),
(234, '54517645_343359936523229_5820198899654066176_n.jpg', 16, 1),
(235, '54517793_343359923189897_370533176587583488_n.jpg', 16, 1),
(236, '54799713_343359893189900_874751500935495680_n.jpg', 16, 1),
(237, '55505685_343359806523242_7603425602481160192_n.jpg', 16, 1),
(238, '55509689_343359973189892_3857064632501927936_n.jpg', 16, 1),
(239, '54434336_343360013189888_597431488471891968_n.jpg', 16, 1),
(240, '54436106_343359853189904_5985210435064823808_n.jpg', 16, 1),
(241, '54436744_343359986523224_8613994921482780672_n.jpg', 16, 1),
(242, '54462629_343359956523227_4144977571915759616_n.jpg', 16, 1),
(243, '54519794_10211191867913104_5093175242700881920_o.jpg', 17, 1),
(244, '54516850_10211191868713124_6185599663337373696_o.jpg', 17, 1),
(245, '54519974_10211191869513144_2042146040307515392_o.jpg', 17, 1),
(246, '55576342_10211191868353115_5190673766279020544_o.jpg', 17, 1),
(247, '54403603_10211191869153135_6554588193591656448_o.jpg', 17, 1),
(248, '54515515_10211191868273113_1028555632719953920_o.jpg', 17, 1),
(249, '54728522_848582328817875_7417516856447074304_o.jpg', 18, 1),
(250, '54728394_848582285484546_3949914674320900096_o.jpg', 18, 1),
(251, '54798183_848582435484531_7498915892684652544_n.jpg', 18, 1),
(252, '55505739_848582488817859_740156842310631424_n.jpg', 18, 1),
(253, '55604915_848582378817870_7551111814189154304_o.jpg', 18, 1),
(254, '53778011_848582405484534_4163327815392952320_o.jpg', 18, 1),
(255, '54424853_848582245484550_6696961076644282368_n.jpg', 18, 1),
(256, '54434824_848582545484520_9157071644613672960_n.jpg', 18, 1);

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `Vimage1` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id_blog`, `titre`, `Vimage1`, `content`, `id`, `created_at`) VALUES
(1, 'Le Musée égyptien', 'NX-15708.jpg', 'Aller au Caire sans visiter le musée égyptien est un véritable gâchis. Fréquenté depuis 1902, il se trouve à la place Tahrir dans la capitale égyptienne. C’est un musée qui est consacré à l’Antiquité égyptienne et qui contient plus de 120.000 objets. On y retrouve toutes sortes de statues, de vases, de moines, d’armes, des bas reliefs, des peintures murales, des sarcophages, etc. Le bâtiment est en deux étages et les collections sont présentées dans une centaine de pièces. Déjà au rez-de-chaussée, vers la gauche après l’entrée principale vous verrez des expositions qui vous permettront d’avoir une brève connaissance de l’histoire de l’Égypte : de l’ancien empire jusqu’à la période gréco-romaine. Dans la salle des momies royales, située au premier étage de l’immeuble, vous pouvez y voir 27 pharaons, dont Ramsès II et Thoutmôsis III. Toujours au premier étage, vous verrez dans la salle 12 la stèle du Roi Ahmôsis, rendant hommage à sa grand-mère Tétishéri (XVIIIe dynastie). La salle 3 du deuxième étage est consacrée aux bijoux royaux. Vous n’aurez vos yeux que pour admirer. Allez comprendre toute l’histoire de l’Égypte au Musée égyptien.', 1, '2019-03-18 02:00:33'),
(2, 'Chutes Victoria', '775770.jpg', 'Les Chutes Victoria/Mosi-oa-Tunya, sont le plus grand rideau d’eau du monde et constituent un site d’importance mondiale par leurs caractéristiques géologiques et géomorphologiques exceptionnelles et par la beauté incomparable des processus actifs de formation du sol qu’elles engendrent : embruns, brume et arcs-en-ciel. Ce bien transfrontalier s’étend sur plus de 6 860 ha et recouvre 3 779 ha du Parc national de Mosi-oa-Tunya (Zambie), 2 340 ha du Parc national des Chutes Victoria (Zimbabwe), 741 ha de la bande fluviale du Parc national du Zambèze (Zimbabwe). Une bande fluviale du Parc national du Zambèze s’étendant à l’ouest sur 9 km, le long de la rive droite du Zambèze, ainsi que certaines îles du fleuve, jusqu’aux îles du Palmier et de Kandahar, font pleinement partie du Parc – dont les Chutes Victoria sont l’un des centres d’intérêt majeurs. Les chutes d’eau culminent à une altitude d’environ 915 m au-dessus du niveau moyen de la mer (AMSL) et ont une envergure d’environ 1 708 m de large sur une profondeur moyenne de 100 m – le point le plus profond se trouvant à 108 m. Les embruns vaporisés par cette gigantesque chute d’eau sont visibles à une distance de 30 km depuis la route de Lusaka en Zambie, et de 50 km depuis la route de Bulawayo au Zimbabwe. Les basaltes ont été creusés par un système fluvial dont la dynamique a donné naissance à une succession de huit gorges spectaculaires, qui servent de lieux de reproduction à quatre espèces d’oiseaux menacés. Les couches de basalte de ce bien du Patrimoine mondial, les Chutes Victoria, ne sont pas disposées comme celles du site du Patrimoine mondial de la Chaussée des géants qui sont, elles, verticales et en forme de colonnes.', 1, '2019-03-18 02:12:02');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_cat` int(11) NOT NULL,
  `nom_cat` varchar(255) NOT NULL,
  `ima` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `nom_cat`, `ima`) VALUES
(1, 'Boutiques', 'shop.png'),
(2, 'Appartements', 'Appartemennt.png'),
(3, 'Parcelles', 'parcelle.png'),
(4, 'Hotels', 'hot.jpg'),
(5, 'Restaurants', 'Restaurant.png'),
(7, 'Evenements', 'event.png');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `id_blog` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `content` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `id_ajout` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `prix_chambre` varchar(255) DEFAULT NULL,
  `caracteristique1` varchar(255) DEFAULT NULL,
  `caracteristique2` varchar(255) DEFAULT NULL,
  `caracteristique3` varchar(255) DEFAULT NULL,
  `Vimage1` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `type`, `prix_chambre`, `caracteristique1`, `caracteristique2`, `caracteristique3`, `Vimage1`, `id`, `id_cat`) VALUES
(1, 'FCFA', '125000', 'wifi', 'air conditionner', 'chaine cablÃ©e', '40337239_1477648615668272_6750098540879413248_n.jpg', 1, 4),
(2, 'DOLLAR', '125000', 'vhvh', 'vhvhv', 'ubhvyv', '19400089_1075617945871343_6033723643167039158_n.jpg', 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `imageb`
--

CREATE TABLE `imageb` (
  `id` int(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `imagee` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pub`
--

CREATE TABLE `pub` (
  `id_pub` int(11) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  `car1` varchar(255) NOT NULL,
  `car2` varchar(255) NOT NULL,
  `car3` varchar(255) NOT NULL,
  `car4` varchar(255) NOT NULL,
  `Vimage2` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pub`
--

INSERT INTO `pub` (`id_pub`, `intitule`, `car1`, `car2`, `car3`, `car4`, `Vimage2`) VALUES
(1, 'svcgc', 'd hdchgd', 'dcdgcg', '', '', 'crescens.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `user_id1` int(11) NOT NULL,
  `user_id2` int(11) NOT NULL,
  `status` enum('0','1','2') DEFAULT '0',
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `restaurant`
--

CREATE TABLE `restaurant` (
  `id_restaurant` int(11) NOT NULL,
  `nom_plat` varchar(255) DEFAULT NULL,
  `prix_plat` varchar(255) DEFAULT NULL,
  `Vimage2` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL DEFAULT 5
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `restaurant`
--

INSERT INTO `restaurant` (`id_restaurant`, `nom_plat`, `prix_plat`, `Vimage2`, `id`, `id_cat`) VALUES
(1, 'poisson fumÃ©e Ã  la sauce bolognaise', '12000', '13239437_779023775530763_3253696680221059959_n.jpg', 1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `shop`
--

CREATE TABLE `shop` (
  `id_shop` int(11) NOT NULL,
  `nom_article` varchar(255) DEFAULT NULL,
  `caracteristique` varchar(255) DEFAULT NULL,
  `prix_article` varchar(255) DEFAULT NULL,
  `Vimage3` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `shop`
--

INSERT INTO `shop` (`id_shop`, `nom_article`, `caracteristique`, `prix_article`, `Vimage3`, `id`, `id_cat`) VALUES
(1, 'jupe ', 'femme rouge en dentelle', '12000', '13529075_802365999863207_4158879906747386368_n.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `active` enum('0','1') DEFAULT '0',
  `created_at` datetime DEFAULT current_timestamp(),
  `sexe` enum('H','F') DEFAULT NULL,
  `lieu` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `ecole` varchar(255) DEFAULT NULL,
  `emploi` varchar(255) DEFAULT NULL,
  `postal` varchar(255) DEFAULT NULL,
  `urgence` varchar(255) DEFAULT NULL,
  `role` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `prenom`, `birthday`, `active`, `created_at`, `sexe`, `lieu`, `tel`, `description`, `ecole`, `emploi`, `postal`, `urgence`, `role`) VALUES
(1, 'mcrescens@gmail.com', '6ca0180eaed0b3bf1d8d0f3fffd8d445724b1e0e', 'Tkhome', 'Sc', '1995-09-20', '1', '2019-03-17 20:54:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(2, 'zomiaf76@gmail.com', '6ca0180eaed0b3bf1d8d0f3fffd8d445724b1e0e', 'zoe', 'crescens', '1995-09-20', '0', '2019-03-19 11:36:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(3, 'zomiaf@gmail.com', '6ca0180eaed0b3bf1d8d0f3fffd8d445724b1e0e', 'Miafouanandi', 'Zoe', '2019-03-20', '0', '2019-03-20 06:52:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ajouter`
--
ALTER TABLE `ajouter`
  ADD PRIMARY KEY (`id_ajout`);

--
-- Index pour la table `ajouter_like`
--
ALTER TABLE `ajouter_like`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `ajouter_id` (`ajouter_id`);

--
-- Index pour la table `bien`
--
ALTER TABLE `bien`
  ADD PRIMARY KEY (`id_bien`);

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Index pour la table `imageb`
--
ALTER TABLE `imageb`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Index pour la table `pub`
--
ALTER TABLE `pub`
  ADD PRIMARY KEY (`id_pub`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`user_id1`,`user_id2`),
  ADD KEY `user_id2` (`user_id2`);

--
-- Index pour la table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id_restaurant`);

--
-- Index pour la table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id_shop`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ajouter`
--
ALTER TABLE `ajouter`
  MODIFY `id_ajout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `ajouter_like`
--
ALTER TABLE `ajouter_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `bien`
--
ALTER TABLE `bien`
  MODIFY `id_bien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `imageb`
--
ALTER TABLE `imageb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pub`
--
ALTER TABLE `pub`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id_restaurant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `shop`
--
ALTER TABLE `shop`
  MODIFY `id_shop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
