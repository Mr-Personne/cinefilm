-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Ven 20 Décembre 2019 à 21:39
-- Version du serveur :  10.3.20-MariaDB-1:10.3.20+maria~bionic-log
-- Version de PHP :  7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dbFilms`
--

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `annee-sortie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `films`
--

INSERT INTO `films` (`id`, `titre`, `description`, `annee-sortie`) VALUES
(1, 'Bad Boys For life', 'Les Bad Boys Mike Lowrey et Marcus Burnett se retrouvent pour résoudre une ultime affaire dans le très attendu Bad Boys For Life.', '22 janvier 2020'),
(2, '300', 'Adapté du roman graphique de Frank Miller, 300 est un récit épique de la Bataille des Thermopyles, qui opposa en l\'an - 480 le roi Léonidas et 300 soldats spartiates à Xerxès et l\'immense armée perse. Face à un invincible ennemi, les 300 déployèrent jusqu\'à leur dernier souffle un courage surhumain ; leur vaillance et leur héroïque sacrifice inspirèrent toute la Grèce à se dresser contre la Perse, posant ainsi les premières pierres de la démocratie.', '21 mars 2007'),
(3, 'Insaisissable', '« Les Quatre Cavaliers », un groupe de brillants magiciens et illusionnistes, viennent de donner deux spectacles de magie époustouflants : le premier en braquant une banque sur un autre continent, le deuxième en transférant la fortune d’un banquier véreux sur les comptes en banque du public. Deux agents spéciaux du FBI et d’Interpol sont déterminés à les arrêter avant qu’ils ne mettent à exécution leur promesse de réaliser des braquages encore plus audacieux. Ils font appel à Thaddeus, spécialiste reconnu pour expliquer les tours de magie les plus sophistiqués. Alors que la pression s’intensifie, et que le monde entier attend le spectaculaire tour final des Cavaliers, la course contre la montre commence.', '31 juillet 2013'),
(4, 'Colorful', 'Un esprit gagne une deuxième chance de vivre à condition d\'apprendre de ses erreurs. Il renait dans le corps de Makoto, un élève de 3ème qui vient de mettre fin à ses jours. L\'esprit doit endurer la vie quotidienne de cet adolescent mal dans sa peau. Avançant à tâtons, s\'efforçant de ne pas reproduire les fautes de Makoto, il va finalement découvrir une vérité qui va bouleverser son existence.', '16/11/11'),
(5, 'Matrix', 'Programmeur anonyme dans un service administratif le jour, Thomas Anderson devient Neo la nuit venue. Sous ce pseudonyme, il est l\'un des pirates les plus recherchés du cyber-espace. A cheval entre deux mondes, Neo est assailli par d\'étranges songes et des messages cryptés provenant d\'un certain Morpheus. Celui-ci l\'exhorte à aller au-delà des apparences et à trouver la réponse à la question qui hante constamment ses pensées : qu\'est-ce que la Matrice ? Nul ne le sait, et aucun homme n\'est encore parvenu à en percer les defenses. Mais Morpheus est persuadé que Neo est l\'Elu, le libérateur mythique de l\'humanité annoncé selon la prophétie. Ensemble, ils se lancent dans une lutte sans retour contre la Matrice et ses terribles agents...', '23/06/1999'),
(6, 'The Dark Khight Rises', 'Il y a huit ans, Batman a disparu dans la nuit : lui qui était un héros est alors devenu un fugitif. S\'accusant de la mort du procureur-adjoint Harvey Dent, le Chevalier Noir a tout sacrifié au nom de ce que le commissaire Gordon et lui-même considéraient être une noble cause. Et leurs actions conjointes se sont avérées efficaces pour un temps puisque la criminalité a été éradiquée à Gotham City grâce à l\'arsenal de lois répressif initié par Dent. Mais c\'est un chat – aux intentions obscures – aussi rusé que voleur qui va tout bouleverser. À moins que ce ne soit l\'arrivée à Gotham de Bane, terroriste masqué, qui compte bien arracher Bruce à l\'exil qu\'il s\'est imposé. Pourtant, même si ce dernier est prêt à endosser de nouveau la cape et le casque du Chevalier Noir, Batman n\'est peut-être plus de taille à affronter Bane…', '25/07/2012'),
(7, 'Once Upon a Time… in Hollywood', 'En 1969, la star de télévision Rick Dalton et le cascadeur Cliff Booth, sa doublure de longue date, poursuivent leurs carrières au sein d’une industrie qu’ils ne reconnaissent plus. ', '14/08/2019'),
(8, 'Ace Ventura, détective chiens et chats', 'Ace Ventura, un jeune homme décontracté à la banane arrogante et à la démarche élastique, est le Sherlock Holmes de la gent canine. Le voici à nouveau sur les dents quand le dauphin Flocon de neige, la mascotte de l\'équipe de football americain de Miami, manque à l\'appel. ', '29/03/1995'),
(9, 'Fear and Loathing in Las Vegas', 'A travers l\'épopée à la fois comique et horrible vers Las Vegas du journaliste Raoul Duke et de son énorme avocat, le Dr. Gonzo, évocation caustique et brillante de l\'année 1971 aux Etats-Unis, pendant laquelle les espoirs des années soixante et le fameux rêve américain furent balayés pour laisser la place à un cynisme plus politiquement correct.', '19/08/1998'),
(10, 'Terminator 2 : Le jugement dernier', 'En 2029, après leur échec pour éliminer Sarah Connor, les robots de Skynet programment un nouveau Terminator, le T-1000, pour retourner dans le passé et éliminer son fils John Connor, futur leader de la résistance humaine. Ce dernier programme un autre cyborg, le T-800, et l\'envoie également en 1995, pour le protéger. Une seule question déterminera le sort de l\'humanité : laquelle des deux machines trouvera John la première ?', '16 octobre 1991'),
(11, 'Indiana Jones et la dernière croisade', 'L\'archéologue aventurier Indiana Jones se retrouve aux prises avec un maléfique milliardaire. Aux côtés de la cupide Elsa et de son père, il part à la recherche du Graal.', '18 octobre 1989'),
(12, 'Les Tontons Flingueurs', 'Propriétaire d\'une petite usine de tracteurs, Fernand Naudin mène une vie tranquille et sans histoire quand un télégramme l\'appelle à Paris. Il arrive à temps pour recueillir le dernier soupir d\'un ami de jeunesse, Louis dit « le Mexicain », qui lui confie ses affaires louches en même temps que la garde de sa fille Patricia. Et les ennuis commencent...', '27 novembre 1963'),
(13, 'Jurassic Park', 'Ne pas réveiller le chat qui dort... C\'est ce que le milliardaire John Hammond aurait dû se rappeler avant de se lancer dans le \'clonage\' de dinosaures. C\'est à partir d\'une goutte de sang absorbée par un moustique fossilisé que John Hammond et son équipe ont réussi à faire renaître une dizaine d\'espèces de dinosaures. Il s\'apprête maintenant avec la complicité du docteur Alan Grant, paléontologue de renom, et de son amie Ellie, à ouvrir le plus grand parc à thème du monde. Mais c\'était sans compter la cupidité et la malveillance de l\'informaticien Dennis Nedry, et éventuellement des dinosaures, seuls maîtres sur l\'île...', '20 octobre 1993'),
(14, 'Reservoir Dogs', 'Après un hold-up manqué, des cambrioleurs de haut vol font leurs comptes dans une confrontation violente, pour découvrir lequel d\'entre eux les a trahis.', '2 septembre 1992'),
(15, 'Retour vers le futur', '1985. Le jeune Marty McFly mène une existence anonyme auprès de sa petite amie Jennifer, seulement troublée par sa famille en crise et un proviseur qui serait ravi de l\'expulser du lycée. Ami de l\'excentrique professeur Emmett Brown, il l\'accompagne un soir tester sa nouvelle expérience : le voyage dans le temps via une DeLorean modifiée. La démonstration tourne mal : des trafiquants d\'armes débarquent et assassinent le scientifique. Marty se réfugie dans la voiture et se retrouve transporté en 1955. Là, il empêche malgré lui la rencontre de ses parents, et doit tout faire pour les remettre ensemble, sous peine de ne pouvoir exister...', '30 octobre 1985');

-- --------------------------------------------------------

--
-- Structure de la table `films_has_genre`
--

CREATE TABLE `films_has_genre` (
  `films_id` int(11) NOT NULL,
  `genre_idgenre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `films_has_genre`
--

INSERT INTO `films_has_genre` (`films_id`, `genre_idgenre`) VALUES
(2, 1),
(2, 3),
(2, 4),
(2, 5),
(3, 6),
(3, 7),
(4, 8),
(4, 9),
(4, 10),
(5, 1),
(5, 11),
(6, 1),
(6, 6),
(7, 2),
(7, 9),
(8, 2),
(9, 2),
(9, 12),
(10, 1),
(10, 11),
(11, 1),
(11, 12),
(12, 2),
(12, 7),
(13, 11),
(13, 12),
(14, 6),
(14, 7),
(15, 11),
(15, 12),
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `films_has_realisateur`
--

CREATE TABLE `films_has_realisateur` (
  `films_id` int(11) NOT NULL,
  `realisateur_idrealisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `films_has_realisateur`
--

INSERT INTO `films_has_realisateur` (`films_id`, `realisateur_idrealisateur`) VALUES
(1, 1),
(1, 2),
(2, 3),
(3, 4),
(4, 5),
(5, 6),
(5, 7),
(6, 8),
(7, 9),
(8, 10),
(9, 11),
(10, 12),
(11, 13),
(12, 14),
(13, 13),
(14, 9),
(15, 15);

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `idgenre` int(11) NOT NULL,
  `nomGenre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`idgenre`, `nomGenre`) VALUES
(1, 'Action'),
(2, 'Comédie'),
(3, 'Péplum'),
(4, 'Guerre'),
(5, 'Historique'),
(6, 'Thriller'),
(7, 'Policier'),
(8, 'Animation'),
(9, 'Drame'),
(10, 'Fantastique'),
(11, 'Science Fiction'),
(12, 'Aventure'),
(17, 'western');

-- --------------------------------------------------------

--
-- Structure de la table `realisateur`
--

CREATE TABLE `realisateur` (
  `idrealisateur` int(11) NOT NULL,
  `nomRealisateur` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `realisateur`
--

INSERT INTO `realisateur` (`idrealisateur`, `nomRealisateur`) VALUES
(1, 'Adil El Arbi'),
(2, 'Bilall Fallah'),
(3, 'Zack Snyder'),
(4, 'Louis Leterrier'),
(5, 'Keiichi Hara'),
(6, 'Lana Wachowski'),
(7, 'Lilly Wachowski'),
(8, 'Christopher Nolan'),
(9, 'Quentin Tarantino'),
(10, 'Tom Shadyac'),
(11, 'Terry Gilliam'),
(12, 'James Cameron'),
(13, 'Steven Spielberg'),
(14, 'Georges Lautner'),
(15, 'Robert Zemeckis');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `films_has_genre`
--
ALTER TABLE `films_has_genre`
  ADD KEY `fk_films_has_genre_genre1_idx` (`genre_idgenre`),
  ADD KEY `fk_films_has_genre_films1_idx` (`films_id`);

--
-- Index pour la table `films_has_realisateur`
--
ALTER TABLE `films_has_realisateur`
  ADD PRIMARY KEY (`films_id`,`realisateur_idrealisateur`),
  ADD KEY `fk_films_has_realisateur_realisateur1_idx` (`realisateur_idrealisateur`),
  ADD KEY `fk_films_has_realisateur_films1_idx` (`films_id`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`idgenre`);

--
-- Index pour la table `realisateur`
--
ALTER TABLE `realisateur`
  ADD PRIMARY KEY (`idrealisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `idgenre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `realisateur`
--
ALTER TABLE `realisateur`
  MODIFY `idrealisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `films_has_genre`
--
ALTER TABLE `films_has_genre`
  ADD CONSTRAINT `fk_films_has_genre_films1` FOREIGN KEY (`films_id`) REFERENCES `films` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_films_has_genre_genre1` FOREIGN KEY (`genre_idgenre`) REFERENCES `genre` (`idgenre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `films_has_realisateur`
--
ALTER TABLE `films_has_realisateur`
  ADD CONSTRAINT `fk_films_has_realisateur_films1` FOREIGN KEY (`films_id`) REFERENCES `films` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_films_has_realisateur_realisateur1` FOREIGN KEY (`realisateur_idrealisateur`) REFERENCES `realisateur` (`idrealisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
