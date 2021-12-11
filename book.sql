-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 11 déc. 2021 à 21:28
-- Version du serveur : 5.7.36
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `book`
--

-- --------------------------------------------------------

--
-- Structure de la table `bibliotheque`
--

DROP TABLE IF EXISTS `bibliotheque`;
CREATE TABLE IF NOT EXISTS `bibliotheque` (
  `idLivre` int(11) NOT NULL AUTO_INCREMENT,
  `auteur` varchar(80) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `resume` text NOT NULL,
  `datePublication` date NOT NULL,
  `genre` text NOT NULL,
  PRIMARY KEY (`idLivre`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bibliotheque`
--

INSERT INTO `bibliotheque` (`idLivre`, `auteur`, `titre`, `resume`, `datePublication`, `genre`) VALUES
(3, 'Leigh Bardugo', 'Six of Crow, Tome 1', 'Les bas-fonds de Katterdam s\'organisent en gangs rivaux. L\'homme le plus ambitieux et le plus jeune de la pègre est Kaz Brekker dit \"Dirtyhands\". Aussi brillant que mystérieux, aussi charismatique que dangereux, et, surtout, connu pour être un voleur hors pair, prêt à tout pour de l\'argent, il accepte la mission du riche marchand Van Eck: délivrer un savant du plais de Glace, réputé imprenable.\r\n\r\nCe prisonnier est l\'inventeur du \"jurda parem\", une drogue multipliant sans limites les pouvoirs surnaturels de la caste des magiciens: les Grishas. Une drogue qui, tombée dans les mauvaises mains, risque d\'engendrer le chaos...\r\n\r\nPour arriver à ses fins et empocher la récompense, Kaz prend la tête d\'une équipe de malfrats aux talents exceptionnels:\r\n\r\nInej, espionne défiant les lois de la gravité;\r\n\r\nMatthias, soldats assoiffé de vengeance;\r\n\r\nNina, Grisha aux puissants pouvoirs magique;\r\n\r\nWylan, fugueur des beaux quartiers, expert en démolition;\r\n\r\nEt enfin, Jesper, tireur d\'élite accro au jeu.\r\n\r\nEnsemble, ils peuvent sauver leur monde de la destruction... s\'ils ne s\'entretuent pas avant!', '2015-10-06', 'Fantasy , Aventure, Young-Adult'),
(4, 'Erin Beaty', 'La Couleur du mensonge', 'À Demora, ce sont les entremetteuses qui font et défont les unions, et façonnent ainsi le paysage amoureux et politique du royaume. Sage Fowler, seize ans, n’a rien du parti idéal : indisciplinée et rebelle, c’est de surcroît une bâtarde. Pourtant, son oncle parvient à lui obtenir un rendez-vous chez l’une des marieuses les plus réputées du pays – sa seule chance de trouver sa place dans la bonne société. Mais une surprise de taille l’attend : son franc-parler et sa vivacité d’esprit ne lui obtiennent pas un beau mariage… mais au contraire un apprentissage auprès de l’entremetteuse.\r\n\r\nOr la guerre menace. C’est donc escortée par une troupe de soldats aguerris que Sage devra traverser le pays en compagnie des plus beaux partis de la région pour rallier la capitale et assister à l’événement matrimonial le plus attendu de ces cinq dernières années. Mais en chemin, l’un des soldats lui propose d’aider l’armée en espionnant pour son compte...', '2017-05-09', 'Espionnage, Romance , Intrigues politiques'),
(5, 'Margaret Rogerson', 'Sorcery of Thorns', 'Tous les sorciers sont maléfiques.\r\n\r\nElisabeth, élevée au milieu des dangereux grimoires magiques d\'une des Grandes Bibliothèques d\'Austermeer, le sait depuis son plus jeune âge. D\'ailleurs, peu de temps après le passage à la bibliothèque du sorcier Nathaniel Thorn, un des ouvrages se transforme en monstre de cuir et d\'encre, semant mort et destruction. Et c\'est Elisabeth qui se retrouve accusée de l\'avoir libéré. Forcée de comparaître devant la justice à la capitale, elle se retrouve prise au cœur d\'une conspiration vieille de plusieurs siècles.\r\n\r\nBien malgré elle, elle n\'a d\'autre choix que de se tourner vers son ennemi Nathaniel, et son mystérieux serviteur, Silas.\r\n\r\nCar ce ne sont pas seulement les Grandes Bibliothèques qui sont en danger, mais le monde entier... et face à ce terrible complot, Elisabeth va devoir remettre en question tout ce qu\'elle croyait jusqu\'ici, y compris sur elle-même.', '2019-06-04', 'Fantasy, Sorcellerie '),
(6, 'Marie Rutkoski', 'Winner, Tome 1 : The Curse', 'Gagner peut être la pire des malédictions...\r\n\r\nFille du plus célèbre général d\'un empire conquérant, Kestrel n\'a que deux choix devant elle : s\'enrôler dans l\'armée ou se marier. Mais à dix-sept ans à peine, elle n\'est pas prête à se fermer ainsi tous les horizons. Un jour, au marché, elle cède à une impulsion et acquiert pour une petite fortune un esclave rebelle à qui elle espère éviter la mort. Bientôt, toute la ville ne parle plus que de son coup de folie. Kestrel vient de succomber à la \" malédiction du vainqueur \" : celui qui remporte une enchère achète forcément pour un prix trop élevé l\'objet de sa convoitise.\r\n\r\nElle ignore encore qu\'elle est loin, bien loin, d\'avoir fini de payer son geste. Joueuse hors pair, stratège confirmée, elle a la réputation de toujours savoir quand on lui ment. Elle croit donc deviner une partie du passé tourmenté de l\'esclave, Arin, et comprend qu\'il n\'est pas qui il paraît... Mais ce qu\'elle soupçonne n\'est qu\'une infime partie de la vérité, une vérité qui pourrait bien lui coûter la vie, à elle et à tout son entourage.\r\n\r\nGagner sera-t-il pour elle la pire des malédictions ? Jeux de pouvoir, coups de bluff et pièges insidieux : dans un monde nouveau, né de l\'imagination d\'une auteure unanimement saluée pour son talent, deux jeunes gens que tout oppose se livrent à une partie de poker menteur qui pourrait bien décider de la destinée de tout un peuple.', '2014-03-04', 'Fantasy, Young Adult '),
(7, 'Mandy Robotham', 'La Messagère de l\'ombre', 'Venise, 1943. Stella travaille le jour comme dactylographe pour le Reich mais la nuit, elle devient messagère pour la Résistance, transmet des informations secrètes sur les nazis et rédige un journal clandestin sur sa machine à écrire. Un jour, le général Breugal se met à soupçonner la présence d\'une taupe. Londres, 2017. Luisa Belmont retrouve dans son grenier une très ancienne machine à écrire.', '2021-09-01', 'Quête identitaire, Famille, XXe siècle'),
(8, 'Neal Shusterman', 'La Faucheuse, Tome 1 : Futur parfait', 'Les commandements du Faucheur:\r\n\r\nTu tueras.\r\n\r\nTu tueras sans aucun parti pris, sans sectarisme et sans préméditation.\r\n\r\nTu accorderas une année d\'immunité à la famille de ceux qui ont accepté ta venue.\r\n\r\nTu tueras la famille de ceux qui t\'ont résisté.', '2021-02-04', 'Science-Fiction, Dystopie, Mort, Futur'),
(9, 'Benjamin Alire Sáenz ', 'Aristote et Dante découvrent les secrets de l\'univers', 'Ari, quinze ans, est un adolescent en colère, silencieux, dont le frère est en prison. Dante, lui, est un garçon expansif, drôle, sûr de lui. Ils n\'ont a priori rien en commun. Pourtant, ils nouent une profonde amitié, une de ces relations qui changent la vie à jamais...\n\nC\'est donc l\'un avec l\'autre, et l\'un pour l\'autre, que les deux garçons vont partir en quête de leur identité et découvrir les secrets de l\'univers.', '2019-05-02', 'Homosexualité, Young Adult '),
(10, 'Suzanne Collins ', 'Hunger Games : La Ballade du serpent et de l\'oiseau chanteur', '​Dévoré d\'ambition\r\n\r\nPoussé par la compétition\r\n\r\nIl va découvrir que la soif de pouvoir a un prix\r\n\r\n \r\n\r\nC\'est le matin de la Moisson qui doit ouvrir la dixième édition annuelle des Hunger Games. Au Capitole, Coriolanus Snow, dix-huit ans, se prépare à devenir pour la première fois mentor aux Jeux. L\'avenir de la maison Snow, qui a connu des jours meilleurs, est désormais suspendu aux maigres chances de Coriolanus. Il devra faire preuve de charme, d\'astuce et d\'inventivité pour faire gagner sa candidate. \r\n\r\nMais le sort s’acharne. Honte suprême, on lui a confié le plus misérable des tributs : une fille du district Douze. Leurs destins sont désormais liés. Chaque décision peut les conduire à la réussite ou à l\'échec, au triomphe ou à la ruine.\r\n\r\nDans l\'arène, ce sera un combat à mort.\r\n\r\nPour assouvir son ambition, Coriolanus parviendra-t-il à réprimer l’affection grandissante qu’il ressent pour sa candidate, condamnée d’avance ?', '2020-05-19', 'Dystopie , Science-Fiction '),
(11, 'Guillaume Musso', 'La Jeune Fille et La Nuit', 'Un campus prestigieux figé sous la neige\r\n\r\nTrois amis liés par un secret tragique\r\n\r\nUne jeune fille emportée par la nuit\r\n\r\nCote d\'Azur - Hiver 1992\r\n\r\nUne nuit glaciale, alors que le campus de son lycée est paralysé par une tempête de neige, Vinca Rockwell, 19 ans, l\'une des plus brillantes élèves de classes prépas, s\'enfuit avec son professeur de philo avec qui elle entretenait une relation secrète. Pour la jeune fille, \"l\'amour est tout ou il n\'est rien\".\r\n\r\nPersonne ne la reverra jamais.\r\n\r\nCote d\'Azur - Printemps 2017\r\n\r\nAutrefois inséparables, Fanny, Thomas et Maxime -les meilleurs amis de Vinca- ne se sont plus parlé depuis la fin de leurs études. Ils se retrouvent lors d\'une réunion d\'anciens élèves. Vingt-cinq ans plus tôt, dans des circonstances terribles, ils ont tous les trois commis un meurtre et emmuré le cadavre dans le gymnase du lycée. Celui que l\'on doit entièrement détruire aujourd\'hui pour construire un autre bâtiment.\r\n\r\nDès lors, plus rien ne s\'oppose à ce qu\'éclate la vérité.\r\n\r\nDérangeante\r\n\r\nDouloureuse\r\n\r\nDémoniaque...', '2018-04-24', 'Policier, Thriller '),
(12, 'Leigh Bardugo', 'Six of Crows, Tome 2 : La Cité corrompue', 'Après avoir réussi à s’enfuir du Palais des Glaces, Kaz et ses compagnons se sentent invulnérables. Un revirement de situation va cependant changer la donne d’une partie mortelle que devront jouer les jeunes prodiges du crime. Alors que les grandes puissances Grisha s’organisent pour leur mettre la main dessus, Kaz imagine un plan, entre vengeance et arnaque, qui leur assurera la gloire éternelle en cas de réussite, et provoquera la ruine de leur monde s’ils échouent.', '2016-09-27', 'Fantasy , Aventure, Young-Adult'),
(13, 'Christelle Dabos', 'La Passe-miroir, Livre 1 : Les Fiancés de l\'hiver\r\n', 'Sous son écharpe élimée et ses lunettes de myope, Ophélie cache des dons singuliers : elle peut lire le passé des objets et traverser les miroirs. Elle vit paisiblement sur l\'arche d\'Anima quand on la fiance à Thorn, du puissant clan des Dragons. La jeune fille doit quitter sa famille et le suivre à la citacielle, capitale flottante du Pôle. A quelle fin a-t-elle été choisie ? Pourquoi doit-elle dissimuler sa véritable identité ? Sans le savoir, Ophélie devient le jouet d\'un complot mortel.', '2013-06-06', 'Fantasy, Aventure, Steampunk '),
(14, 'Marie-Aude Murail', 'L\'assassin est au collège', 'Nils Hazard, professeur d\'histoire, et Catherine Roque, sa secrétaire, sont appelés par l\'inspecteur Berthier pour mener une enquête au collège Saint-Prix. En effet, des événements inquiétants agitent ce collège : des copies sont notées avec du sang humain, des lettres anonymes sont envoyées au directeur et les élèves ont tous des comportements un peu \"étranges\". Nils et Catherine réussiront-ils à résoudre ces énigmes ? Parviendront-ils à démasquer le véritable coupable ?', '1993-04-29', 'Enquête, Aventure '),
(15, 'Deborah Harkness', 'L\'École de la nuit', 'Diana Bishop, jeune historienne héritière d\'une puissante lignée de sorcières, et le vampire Matthew Clairmont ont brisé le pacte qui leur interdisait de s\'aimer. Quand Diana a découvert l\'Ashmole 782, un manuscrit alchimique, à la bibliothèque d\'Oxford, elle a déclenché un conflit millénaire. La paix fragile entre les vampires, les sorcières, les démons et les humains est désormais menacée. Déterminés à percer le mystère du manuscrit perdu, et tentant d\'échapper à leurs ennemis, Diana et Matthew ont fui à Londres... en 1590. Un monde d\'espions et de subterfuges, qui les plonge dans les arcanes du passé de Matthew et les confronte aux pouvoirs de Diana. Et à l\'inquiétante École de la nuit.', '2012-07-10', 'Voyage dans le temps, Alchimiste, Magie ');

-- --------------------------------------------------------

--
-- Structure de la table `bibli_unique`
--

DROP TABLE IF EXISTS `bibli_unique`;
CREATE TABLE IF NOT EXISTS `bibli_unique` (
  `idLivre` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `luDate` date DEFAULT NULL,
  `note` int(2) DEFAULT NULL,
  PRIMARY KEY (`idLivre`,`idUser`),
  KEY `ID_USER` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bibli_unique`
--

INSERT INTO `bibli_unique` (`idLivre`, `idUser`, `luDate`, `note`) VALUES
(3, 1, '2021-12-11', 6),
(3, 42, '2021-12-11', 6),
(4, 1, '2021-12-11', NULL),
(4, 42, '2021-12-11', 10),
(15, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `quote` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail` (`mail`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `mail`, `mdp`, `pseudo`, `quote`) VALUES
(1, 'Han', 'Quokka', 'quokka14@happy.ness', 'winterFalls', 'HaPpY', 'Le livre n\'est qu\'un miroir.,Yasmina Kadhra,auteur'),
(2, 'Berry', 'Chan', 'Berry21@bang.de', 'wolfgang', 'aussie97', NULL),
(3, 'The', 'Dwaeki', 'dupont@dwaeki.hr', 'rose', 'SpeAr', NULL),
(5, 'bambibam', 'emile', 'Neverland@yrstogo.ki', 'Fairytale', 'Kidariyo', NULL),
(6, 'freezing', 'cold', 'sound@thunder.fl', 'flocon', 'Thunderous', NULL),
(8, 'senneville', 'paul', 'pauldeSeneville@yahoo.fr', 'jelly', 'ClassicLife', NULL),
(9, 'Time', 'Ailee', 'shine@mer.at', 'timen', 'HEllo', NULL),
(29, 'okok', 'doki', 'oki@oki.lo', 'okioki', 'trueHanj', NULL),
(42, 'can', 'him', 'arthur@kle.ph', 'pher', 'June', NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bibli_unique`
--
ALTER TABLE `bibli_unique`
  ADD CONSTRAINT `ID_LIVRE` FOREIGN KEY (`idLivre`) REFERENCES `bibliotheque` (`idLivre`),
  ADD CONSTRAINT `ID_USER` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
