-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 14 mai 2024 à 15:23
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `4ipdw_2023`
--

-- --------------------------------------------------------

--
-- Structure de la table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `articleID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `tag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `details`
--

INSERT INTO `details` (`id`, `articleID`, `title`, `image`, `description`, `content`, `tag`) VALUES
(1, 1, 'Pascal Vanderveeren, avocat de Patokh Chodiev dans l’affaire du Kazakhate, est décédé', 'single-article.jpg', 'L’avocat belge Pascal Vanderveeren est décédé à l’âge de 77 ans, a informé jeudi le cabinet d’avocat MINIMES41. Cet ancien bâtonnier du barreau de Bruxelles a également présidé durant trois ans le Barreau pénal international.', '<p>Docteur en droit à l’Université catholique de Louvain et licencié en droit économique à l’Université libre de Bruxelles, Pascal Vanderveeren est devenu avocat au barreau de Bruxelles en 1968. <strong>L’homme, associé au cabinet d’avocats bruxellois MINIMES41 et spécialisé dans le droit pénal, a depuis lors gravi les échelons à l’international.</strong></p>\r\n    <p>Bâtonnier du barreau de Bruxelles entre 1998 et 2000, il a également été membre du conseil du barreau pénal international, le barreau de la Cour pénale internationale de La Haye, de 2003 à 2007 avant d’en prendre la présidence jusqu’en 2010.</p>\r\n    <p>Me Vanderveeren poursuivait depuis ses activités à Bruxelles. <strong>Il faisait notamment partie depuis 2017 de la défense de l’homme d’affaires Patokh Chodie</strong>v dans l’affaire du Kazakhgate.</p>\r\n    <p>&nbsp;</p>', '<em><strong>Belga</strong> | Photo : <strong>Belga</strong> (Laurie Dieffembacq)</em>'),
(2, 2, 'Une prise d’otage en cours à Saint-Gilles', 'article-2.png', 'Il s’est retranché après un braquage manqué dans un bureau de change de Western Union.', '<p>L\'homme qui s’était retranché dans un sous-sol de la rue du Fort à Saint-Gilles après un braquage manqué s’est rendu après une brève négociation avec les unités spéciales de la police fédérale, a indiqué jeudi cette dernière. <strong>La situation est sous contrôle. L’enquête ouverte par le parquet devra déterminer les circonstances exactes des faits.</strong></p>\r\n    <p>Jeudi matin, aux environs de 10h15, deux personnes, dont l’une était armée d’un revolver, ont tenté de braquer un bureau de Western Union à Saint-Gilles</p>\r\n    <p>L’un des suspects a été rattrapé dans sa fuite par la police tandis que le second s’est retranché, armé, dans un sous-sol de la rue du Fort.</p>', '<em><strong>Belga</strong> | Photo : <strong>Belga</strong> (Laurie Dieffembacq)</em>'),
(3, 3, 'Carton plein pour le lancement du bon d’Etat à un an', 'article-3.jpg', 'Les premières souscriptions ont eu lieu dès 00h01 ce jeudi. Et à 14h45, le compteur affichait 23.553 souscriptions et 827 millions d’euros.', ' <p>Le nouveau bon d’Etat à un an a déjà trouvé son public. A 8h00 ce jeudi, jour de lancement, <strong>plus de 66 millions d’euros avaient déjà été souscrits.</strong></p>\r\n    <p>Le nouveau bon propose un rendement net de 2,81%, notamment grâce au précompte mobilier temporairement réduit. Les souscriptions peuvent se faire à partir de ce jeudi, via le site web de l’Agence fédérale de la Dette (jusqu’au 31 août) ou directement via les établissements bancaires participants (jusqu’au 1er septembre).</p>\r\n    <p>Les premières souscriptions ont eu lieu dès 00h01, rapporte jeudi matin le directeur de l’Agence de la Dette, Jean Deboutte. A 08h00, près de 1.600 souscriptions avaient déjà été enregistrées, <strong>pour un montant de 66,4 millions d’euros.</p>', '<em><strong>Belga</strong> | Photo : <strong>Belga</strong> (Laurie Dieffembacq)</em>'),
(4, 4, ' Anderlecht enlève des poubelles pour éviter les dépots clandestins', 'article-4.png', 'Les quartiers de Cureghem, du Centre et Scheut sont actuellement ciblés par une analyse.', '<p>La commune d’Anderlecht procède à une évaluation pour définir de l’intérêt de certaines poubelles dans l’espace public, indiquent nos confrères de la Capitale. Pour certaines poubelles, qui font l’objet de dépots clandestins, il est alors décidé de les retirer, indiquent l’échvin Allan Neuzy (Ecolo) à nos confères. <strong>L’idée est aussi d’objectiver l’endroit où les poubelles se trouvent, pour éviter qu’elles ne soient installer n’importe où </strong></p\r\n    <p>Les quartiers de Cureghem, du Centre et Scheut sont actuellement ciblés par cette analyse. Une analyse qui a permi de décider l’installation de nouvelles poubelles dans le quartier Cureghem par exemple</p>\r\n    <p>Quelle efficacité ? “Quand on supprime une corbeille car on remarque qu’elle est victime de dépôts clandestins, on constate que neuf fois sur dix, le problème est résolu et que ces dépôts disparaissent sans créer un report”, <strong> confie l’échevin à nos confrères.</p>', '<em><strong>Belga</strong> | Photo : <strong>Belga</strong> (Laurie Dieffembacq)</em>'),
(5, 5, 'Moins d’un francophone sur deux choisit le néerlandais comme première langue en secondaire', 'article-5.jpg', 'A Bruxelles, le néerlandais est obligatoire dès la 3e primaire.', ' <p>Seuls 47,5% des élèves francophones en Wallonie et à Bruxelles ont choisi le néerlandais comme première langue moderne dans le secondaire, ressort-il des chiffres de l’administration de l’enseignement de la Fédération Wallonie-Bruxelles,  <strong>publiés jeudi par La Libre Belgique.</strong></p>\r\n    <p>Ce sont au total 121.300 élèves francophones du secondaire qui ont choisi, à la rentrée scolaire 2022-2023, le néerlandais comme première langue moderne, soit 318 de moins que l’année scolaire précédente.</p>\r\n    <p>Le nombre d’élèves wallons qui privilégient la langue de Vondel diminue d’année en année et est passé sous les 60.000. Alors qu’ils sont <strong>plus de 63.000 Bruxellois à apprendre le néerlandais, option obligatoire dès la 3e primaire dans la capitale.</strong></p>', '<em><strong>Belga</strong> | Photo : <strong>Belga</strong> (Laurie Dieffembacq)</em>'),
(6, 6, ' Des orages attendus dans l’après-midi', 'article-6.jpg', 'L’IRM émet une alerte jaune aux orages pour l’ensemble du pays jusqu’à vendredi matin', ' <p>La journée de jeudi débutera sous de larges éclaircies, selon les prévisions de l’Institut royal météorologique (IRM). La nébulosité augmentera ensuite au fil des heures depuis <strong>la frontière française et des averses parfois intenses suivront en de nombreux endroits l’après-midi. </strong></p>\r\n    <p>Celles-ci pourront s’accompagner d’orages avec de fortes précipitations et des rafales de vent. Plus localement, de la grêle pourra être observée. Les cumuls en précipitations varieront spatialement, mais pourront atteindre ou dépasser 25 l/m2 sur une période de 24 heures, avertit l’IRM, qui a émis une alerte jaune aux orages pour l’ensemble de la Belgique jusqu’à vendredi matin. Les maxima atteindront encore de 23 à 29°C en journée et de 15 à 19°C durant la nuit</p>\r\n    <p>Vendredi, le ciel sera changeant ou parfois très nuageux avec des averses en beaucoup d’endroits. Celles-ci seront localement encore intenses et orageuses, en particulier au sud du sillon Sambre et Meuse.  L’après-midi, une ligne d’averses assez active pourrait également se développer sur le nord-ouest du pays.<strong> Les maxima se situeront autour de 20 ou 21°C en bord de mer, de 22 ou 23°C sur les hauteurs de l’Ardenne, et entre 24 et 26°C ailleurs.</strong></p>', '<em><strong>Belga</strong> | Photo : <strong>Belga</strong> (Laurie Dieffembacq)</em>'),
(7, 7, ' Mondiaux d’athlétisme : Cynthia Bolingo 5e de la finale du 400m', 'article-7.png', 'La Bruxelloise égale la meilleure performance jamais réalisée dans une course des championnats du monde par une athlète belge.', ' <p>Trois courses au plus haut niveau mondial en quatre jours. Le challenger était difficile. Cynthia Bolingo l’a relevé avec brio dans les championnats du monde de Budapest. Elle s’est classée 5e de sa première finale mondiale sur la distance de 400 m en 50.33 secondes,<strong> son 5e chrono en carrière, mercredi soir.</strong></p>\r\n    <p>Première Belge sous les 50 secondes sur le tour de piste (49.96) en demi-finales, la Bruxelloise, malgré un couloir défavorable au niveau des virages, le 2, n’a rien lâché arrachant au final la 5e place pour un millième de seconde.</p>\r\n    <p>La Bruxelloise égale la meilleure performance jamais réalisée dans une course des championnats du monde par une athlète belge. Kim Gevaert avait aussi terminé 5e de sa finale, <strong>celle du 100m, en 2007 à Osaka. </strong></p>', '<em><strong>Belga</strong> | Photo : <strong>Belga</strong> (Laurie Dieffembacq)</em>'),
(8, 8, ' La Maison Hannon a accueilli son 10.000e visiteur ce mercredi', 'article-8.png', 'La Maison Hannon s’ouvre au public: c’est un joyau de l’Art nouveau bruxellois', ' <p>La Maison Hannon, à St Gilles, véritable chef d’oeuvre de l’Art nouveau, retrouve son éclat d’antan. Après avoir été complètement rénovée, <strong>elle est inaugurée en tant que musée dédié à l’Art nouveau. </strong></p>\r\n    <p>Petit bijou de l’Art nouveau bruxellois, la Maison Hannon nous a ouvert ses portes après une rénovation bien méritée. L’occasion d’y voir la fresque magistrale et le couple de bergers représentés,  qui symbolisent Edouard et Marie Hannon</p>\r\n    <p>La visite permet aussi d’ouvrir une page du passé en entrant dans le foyer de la famille. Deux espaces sont à admirer : le rez-de-chaussée, reproduit à l’identique et le premier premier étage qui accueille des expositions temporaires.<strong> La première est consacrée à l’Art nouveau.</strong></p>', '<em><strong>Belga</strong> | Photo : <strong>Belga</strong> (Laurie Dieffembacq)</em>'),
(9, 9, ' Rentrée scolaire : l’ASBL “Solidarité Grands Froids” distribue des kits destinés aux enfants vivants sous le seuil de pauvreté', 'article-9.png', 'Grâce à cette action, l’ASBL souhaite montrer son engagement envers “la solidarité sociale et l’accès à l’éducation pour tous“.', '<p><strong>Selon “Solidarité Grands Froids”, “de nombreuses personnes vivantes sous le seuil de pauvreté sont exclues d’une rentrée scolaire digne“. De ce fait, l’ASBL a souhaité distribuer des kits scolaires pour lutter contre cette injustice.\r\n    </strong></p>\r\n    <p>Ce mercredi après-midi, à Saint-Gilles, des bénévoles étaient présents pour distribuer ces kits comprenant “des fournitures essentielles telles que des cahiers, stylos, crayons, trousses et plus encore“.</p>\r\n    <p>“Chaque individu mérite l’opportunité d’apprendre et de grandir, quelle que soit sa situation. Nous croyons fermement que l’éducation peut transformer des vies, et nous sommes honorés de contribuer à cet objectif en offrant des kits scolaires“,<strong> indique la présidente de l’ASBL, Cynthia Simpson.</strong></p>', '<em><strong>Belga</strong> | Photo : <strong>Belga</strong> (Laurie Dieffembacq)</em>'),
(10, 10, ' “Valorisez l’eau de pluie” : Laeken invite ses citoyens à lutter contre les inondations', 'article-10.png', 'Récupérer l’eau de pluie permettrait d’éviter la surcharge des égouts, à l’origine de certaines inondations.', ' <p>Laeken invite ses habitants à valoriser l’eau de pluie. Pour ce faire, des primes sont proposées afin de réaménager les jardins.<strong> Celles-ci pourraient amortir jusqu’à 60 % du prix des travaux nécessaires à l’installation d’une citerne ou d’un toit vert.</strong></p>\r\n    <p>Cependant, pour attirer les citoyens vers ce projet, il faudrait mieux les accompagner…<strong></strong></p>', '<em><strong>Belga</strong> | Photo : <strong>Belga</strong> ( Florian Hecht)</em>');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
