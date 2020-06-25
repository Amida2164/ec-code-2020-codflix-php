-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jun 06, 2020 at 08:35 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codflix`
--

CREATE DATABASE codflix;
USE codflix;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
(1, 'Action'),
(2, 'Horreur'),
(3, 'Science-Fiction'),
(4, 'Animation'),
(5, 'Sitcom');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(1, 'Film'),
(2, 'Série');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `release_date` date NOT NULL,
  `summary` longtext NOT NULL,
  `duration` int(11) NOT NULL,
  `season` int(11) NULL,
  `episode` int(11) NULL,
  `trailer_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `genre_id`,`type_id`,`title`,`status`,`release_date`,`summary`,`duration`, `season`,`episode`, `trailer_url`) VALUES
(1, 1, 1, 'Last Action Hero', 'publié', '1993-01-05',"Danny Madigan, un jeune garçon new-yorkais, sèche régulièrement l'école pour aller au cinéma. Il est un grand fan de la série des Jack Slater, des films d'action qui mettent en scène son héros préféré Jack Slater (incarné par Arnold Schwarzenegger) qui rappelle celui de l'inspecteur Harry.Nick, le projectionniste du cinéma Pandora, le seul ami de Danny, lui propose de venir un soir regarder en avant-première le nouvel opus de sa vedette favorite, Jack Slater IV. À cette occasion, le vieil homme lui remet un ticket d'entrée magique qui, dit-il à Danny, lui a été donné jadis par le grand magicien Harry Houdini. Mais, au cours de la projection, Danny grâce au ticket, « entre » dans le film. Il se trouve alors mêlé à une sombre intrigue policière se passant à Los Angeles dans laquelle bons et méchants s'aperçoivent assez vite qu'il en sait beaucoup trop sur eux (car il a vu le début du film). L'affaire se complique lorsque Benedict, un tueur professionnel qui travaille pour le maffieux Tony Vivaldi (qui a chargé Benedict d'éliminer Slater), s'empare du ticket magique ; effectuant le trajet inverse, Benedict arrive dans le monde réel. Le poursuivant, Jack Slater découvre alors qu'il n'est plus invulnérable dans ce monde-ci et qu'il doit notamment penser à recharger son pistolet. Il comprend aussi qu'il doit protéger son alter-ego — à savoir Arnold Schwarzenegger — dont la mort le supprimerait simultanément.", 130, 0,0, 'OJw8o49CNZI'),
(2, 2, 1, 'Conjuring', 'publié', '2013-05-13', "Avant Amityville, il y avait Harrisville… Conjuring : Les dossiers Warren, raconte l'histoire horrible, mais vraie, d'Ed et Lorraine Warren, enquêteurs paranormaux réputés dans le monde entier, venus en aide à une famille terrorisée par une présence inquiétante dans leur ferme isolée… Contraints d'affronter une créature démoniaque d'une force redoutable, les Warren se retrouvent face à l'affaire la plus terrifiante de leur carrière.", 174, 0, 0, 'R45elnlyzKw'),
(3, 3, 1, 'Avatar', 'publié', '2009-03-28', "Dans le futur, en l’an 2154, Jake Sully, ancien marine, paraplégique, accepte de participer au programme Avatar, pour remplacer son frère jumeau décédé, Tom Sully. Il est envoyé sur Pandora, l’une des lunes de Polyphème, une planète géante gazeuse en orbite autour d'Alpha Centauri A, l'étoile principale du système stellaire Alpha Centauri, à 4,4 années-lumière du Système solaire. Pandora, recouverte d’une jungle luxuriante, est peuplée d’une faune et d’une flore aussi magnifiques que redoutables envers les humains. L’air est irrespirable pour les terriens et la planète est habitée par les Na’vis, une espèce indigène humanoïde, considérée comme dangereuse, primitive et hostile par les Terriens. Ils peuvent atteindre trois mètres de haut, ont une peau bleu-vert et une longue queue ressemblant à celle d’un lion, et vivent en harmonie avec leur environnement. Ils possèdent également de longs filaments clairs, partant du haut de leur nuque et protégée par une natte tressée autour, grâce auxquels ils peuvent se « connecter » et communiquer avec les animaux et les plantes, qui possèdent le même organe, par la pensée et les sensations. Ils appellent cela tsaheylu, ce qui signifie « faire le lien ».", 154, 0, 0 ,'O1CzgULNRGs'),
(4, 4, 1, 'Cars', 'publié', '2007-11-19',"Flash McQueen, jeune véhicule de course avide de succès, rêve d’être le premier rookie de l'histoire de la compétition automobile à remporter la fameuse Piston Cup, afin d’intégrer l'écurie Dinoco et de devenir célèbre.Lors de la finale du championnat, alors qu’il mène largement la course, ses pneus arrière éclatent à quelques mètres de la ligne d’arrivée, ce qui permet à ses adversaires de le rattraper malgré ses efforts désespérés. Il parvient à terminer la course de justesse, mais franchit la ligne d’arrivée exactement au même moment que deux autres vétérans : Strip Weathers, dit le King, et Chick Hicks. Une nouvelle course est donc organisée à Los Angeles, en Californie, pour départager les trois vainqueurs.", 114, 0, 0, 'UPe4x4dhtIc'),
(5, 3, 1, 'Warcraft', 'publié', '2016-08-27', "Le pacifique royaume d'Azeroth est au bord de la guerre alors que sa civilisation doit faire face à une redoutable race d’envahisseurs: des guerriers Orcs fuyant leur monde moribond pour en coloniser un autre. Alors qu’un portail s’ouvre pour connecter les deux mondes, une armée fait face à la destruction et l'autre à l'extinction. De côtés opposés, deux héros vont s’affronter et décider du sort de leur famille, de leur peuple et de leur patrie.", 98, 0, 0, 'O3iWjMy2ynk'),
(6, 5, 2, 'Brooklyne 99', 'publié', '2013-09-17', "Brooklyn Nine-Nine raconte la vie d'un commissariat de police dans l'arrondissement de Brooklyn à New York. L'arrivée d'un nouveau capitaine, froid et strict, fait rapidement regretter aux détectives son prédécesseur. À l'image du slogan de la série, « Brooklyn Nine-Nine: the Law without the Order » (« Brooklyn Nine-Nine : la loi sans l'ordre », une satire de Law and Order), les divers personnages la composant sont dotés de caractères très marqués voire extravagants, mettant ainsi à mal l'harmonie dans les bureaux. La pratique du cold open, scène d'ouverture de chaque épisode avant le lancement du générique, rappelle ce que pratique l'émission télévisée hebdomadaire Saturday Night Live.", 20, 1, 1, 'q6G_RMGk3vs'),
(7, 5, 2, 'Brooklyne 99', 'publié', '2014-05-26', "Jake Peralta revient d’une longue mission d’infiltration dans la mafia, découragé d’apprendre qu’un mafieux a réussi à s’échapper. Pendant ce temps, Holt entame une guerre avec la commissaire Madelyn Wuntch, tandis que l’équipe du 'département 99' découvre le secret de Charles et Gina. L’amitié de Jack et Boyle est quant à elle mise à rude épreuve lorsqu’ils sont obligés de cohabiter pour une mission de surveillance.", 20, 2, 1, 'c-OkjDqpp-g'),
(8, 5, 2, 'Brooklyne 99', 'publié', '2014-06-02', "Jake Peralta revient d’une longue mission d’infiltration dans la mafia, découragé d’apprendre qu’un mafieux a réussi à s’échapper. Pendant ce temps, Holt entame une guerre avec la commissaire Madelyn Wuntch, tandis que l’équipe du 'département 99' découvre le secret de Charles et Gina. L’amitié de Jack et Boyle est quant à elle mise à rude épreuve lorsqu’ils sont obligés de cohabiter pour une mission de surveillance.", 20, 2, 2, 'c-OkjDqpp-g'),
(9, 5, 2, 'Brooklyne 99', 'publié', '2015-03-12', "Madeline Wuntch a réussi à faire muter le capitaine Holt dans un autre service. Mais les remplaçants successifs du capitaine font regretter à l’équipe du 'département 99' son départ. Pendant ce temps, Charles entame une relation avec Genevieve, et Terry s’apprête à accueillir un nouveau membre dans sa famille. De leur côté, Jake et Amy se rapprochent.", 20, 3, 1, 'e1uHfF0x41c');


-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `finish_date` datetime DEFAULT NULL,
  `watch_duration` int(11) NOT NULL DEFAULT '0' COMMENT 'in seconds'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------


--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);


--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_genre_id_fk_genre_id` (`genre_id`) USING BTREE;


--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_user_id_fk_media_id` (`user_id`),
  ADD KEY `history_media_id_fk_media_id` (`media_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_genre_id_b1257088_fk_genre_id` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`),
  ADD CONSTRAINT `media_type_id_b1257088_fk_type_id` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`);

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_media_id_fk_media_id` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `history_user_id_fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;


--
-- Table structure for table `user_favorite_media`
--

DROP TABLE IF EXISTS `user_media`;
CREATE table `user_media` (
  `user_id` int(11) NOT NULL, 
  `media_id` int(11) NOT NULL, 
  FOREIGN KEY (user_id) REFERENCES user(id),
  FOREIGN KEY (media_id) REFERENCES media(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;