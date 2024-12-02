-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 08, 2022 at 02:58 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `major_cineplex`
--

-- --------------------------------------------------------

--
-- Table structure for table `cinemas`
--

DROP TABLE IF EXISTS `cinemas`;
CREATE TABLE IF NOT EXISTS `cinemas` (
  `cinema_id` int(11) NOT NULL AUTO_INCREMENT,
  `cinema_name` varchar(100) DEFAULT NULL,
  `cinema_location` text,
  `cinema_contact` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`cinema_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cinemas`
--

INSERT INTO `cinemas` (`cinema_id`, `cinema_name`, `cinema_location`, `cinema_contact`, `created_at`, `updated_at`) VALUES
(1, 'Major Aeon Mall Phnom Penh', '#132,Street Samdach Sothearos , Sangkat Tonle Bassac, Phnom Penh(Aeon1)', '098 888 126', '2022-06-27 22:27:32', '2022-06-27 22:27:32'),
(2, 'Major Cineplex Aeon Mall Sen Sok City', 'Street 1003, Phnom Penh (Aeon Mall Sen Sok)', '087 901 000', '2022-06-27 22:27:32', '2022-06-27 22:27:32'),
(3, 'Major Phnom Penh Sorya', '#13-61, Street 63, Sangkat Phsar Thmei 1,Khan Daun Penh Phnom Penh (Sorya Center Point)', '087 666 210', '2022-06-27 22:27:32', '2022-06-27 22:27:32'),
(4, 'Major Platinum Siem Reap', 'Stung Thmey Village Svay Dongkom District Siem Reap City Siem Reap Province', '081 666 210', '2022-06-27 22:27:32', '2022-06-27 22:27:32'),
(5, 'Major Big C Poipet', NULL, '097 687 1049', '2022-06-27 22:27:32', '2022-06-27 22:27:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_booked`
--

DROP TABLE IF EXISTS `table_booked`;
CREATE TABLE IF NOT EXISTS `table_booked` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `watch_time` datetime NOT NULL,
  `seats` text,
  `movie_id` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ticket_checkin` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`customer_id`),
  KEY `movie_id` (`movie_id`),
  KEY `cinema_id` (`cinema_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_booked`
--

INSERT INTO `table_booked` (`customer_id`, `name`, `phone`, `email`, `gender`, `payment`, `watch_time`, `seats`, `movie_id`, `cinema_id`, `created_at`, `updated_at`, `ticket_checkin`) VALUES
(33, 'Tola Visoth', '0287387287', 'tolasoth@gmail.com', 'Male', 'paid', '2022-07-07 10:00:00', 'C9,C10', 37, 2, '2022-07-05 06:35:19', '2022-07-05 06:35:19', 'checked'),
(32, 'Neary Rith', '0397483748', 'neary574@gmail.com', 'Female', 'reserved', '2022-07-07 16:00:00', 'D10,D11', 23, 2, '2022-07-05 06:18:04', '2022-07-05 06:18:04', 'checked'),
(34, 'Gonna Swift', '0937827327', 'gonna423@gmail.com', 'Female', 'paid', '2022-07-08 18:30:00', 'B5,B6,B7,B8', 23, 1, '2022-07-06 01:41:51', '2022-07-06 01:41:51', 'checked'),
(35, 'Vichet Keo', '0238728738', 'keovichet@gmail.com', 'Male', 'paid', '2022-07-07 18:10:00', 'E2,E3', 27, 2, '2022-07-06 02:08:03', '2022-07-06 02:08:03', 'missed'),
(36, 'Vathna Ven', '0273827327', 'vathnavoth@gmail.com', 'Male', 'reserved', '2022-07-07 13:00:00', 'E13,E14', 43, 3, '2022-07-06 22:21:01', '2022-07-06 22:21:01', 'missed'),
(40, 'Phorsda Ben Thorn', '0834783748', 'phorsda@gmail.com', 'Male', 'paid', '2022-07-10 21:30:00', 'E7,E8', 45, 2, '2022-07-08 07:10:43', '2022-07-08 07:10:43', 'progress');

-- --------------------------------------------------------

--
-- Table structure for table `table_message`
--

DROP TABLE IF EXISTS `table_message`;
CREATE TABLE IF NOT EXISTS `table_message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `message` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_message`
--

INSERT INTO `table_message` (`message_id`, `first_name`, `last_name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(22, 'Eric', 'Samson', 'ericsamson@gmail.com', '023874937', 'Hello major cineplex staff, I accidentally forgot to screenshot the tickets that I have booked. In this case, what should I do? Because I made a purchase already. Please reply to this message as soon as possible, I really concerned about that. Thank you!', '2022-07-05 00:37:48', '2022-07-05 00:37:48'),
(25, 'Narak', 'Milon', 'narak34@gmail.com', '0872838238', 'Hi there, \r\nmy name is Narak Milon. I send this message in order to cancel the tickets which I have booked in excess. Basically, I want to book 4 tickets but mistakenly booked 5. May I cancel this ticket? Movie: Thor love and thunder, Booked tickets: C5, C6, C7, C8, C9. Seat wants to cancel C9. Please let me know if it is possible to do so or not. Thank you!', '2022-07-05 00:49:08', '2022-07-05 00:49:08'),
(26, 'John', 'Smith', 'johncena@gmail.com', '0343438374', 'I like CS321', '2022-07-08 07:09:20', '2022-07-08 07:09:20');

-- --------------------------------------------------------

--
-- Table structure for table `table_movie`
--

DROP TABLE IF EXISTS `table_movie`;
CREATE TABLE IF NOT EXISTS `table_movie` (
  `movie_id` int(11) NOT NULL AUTO_INCREMENT,
  `poster` text,
  `movie_title` varchar(100) NOT NULL,
  `release_date` date NOT NULL,
  `due_date` date NOT NULL,
  `duration` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `trailer` text NOT NULL,
  `description` text NOT NULL,
  `showing` varchar(100) NOT NULL,
  `cinema_id1` int(11) DEFAULT NULL,
  `cinema_id2` int(11) DEFAULT NULL,
  `cinema_id3` int(11) DEFAULT NULL,
  `cinema_id4` int(11) DEFAULT NULL,
  `cinema_id5` int(11) DEFAULT NULL,
  `show_time` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `display` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`movie_id`),
  KEY `cinema_id1` (`cinema_id1`),
  KEY `cinema_id2` (`cinema_id2`),
  KEY `cinema_id3` (`cinema_id3`),
  KEY `cinema_id4` (`cinema_id4`),
  KEY `cinema_id5` (`cinema_id5`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_movie`
--

INSERT INTO `table_movie` (`movie_id`, `poster`, `movie_title`, `release_date`, `due_date`, `duration`, `genre`, `trailer`, `description`, `showing`, `cinema_id1`, `cinema_id2`, `cinema_id3`, `cinema_id4`, `cinema_id5`, `show_time`, `created_at`, `updated_at`, `display`) VALUES
(24, '/storage/images/1657275736Fast & feel love.jpg', 'Fast & Feel Love', '2022-06-24', '2022-07-15', '131', 'Romance / Comedy / Drama', 'https://www.youtube.com/embed/XK5WW6x4N0k', 'When a world champion of sport stacking is dumped by his long-time girlfriend, he has to learn basic adulting skills in order to live alone and take care of himself.', 'Now Showing', 1, 2, 3, 4, 5, '10:20|13:00|15:40|18:20|21:00', '2022-06-28 01:47:35', '2022-06-28 01:47:35', 1),
(23, '/storage/images/1656405768Spiral.jpg', 'Spiral', '2022-06-27', '2022-07-27', '60', 'Horror', 'https://www.youtube.com/embed/U867NiAPxKY', 'When a policeman is murdered by a Jigsaw copycat killer, Zeke Banks is assigned to investigate the case. In the process of punishing the perpetrator, he ends up facing the demons of his past.', 'Now Showing', 1, 2, 3, 4, 5, '11:00|13:30|16:00|18:30|21:00', '2022-06-28 01:42:48', '2022-06-28 01:42:48', 1),
(25, '/storage/images/1656415256file_20220009110035.jpg', 'De Toeng: Misteri Ayunan Nenek', '2022-06-24', '2022-07-14', '89', 'Horror', 'https://www.youtube.com/embed/fYL8Gcph3kg', 'Dr. Zaldy and his family arrived at a remote village in Toeng Hill. His arrival was warmly welcomed by the villagers. But Zaldy\'s presence was followed by the terror of a grandmother.', 'Now Showing', 1, 2, 3, 4, 5, '11:00|13:00|15:00|17:00|19:00|21:00', '2022-06-28 04:20:57', '2022-06-28 04:20:57', 1),
(26, '/storage/images/1656415860file_20224402104434.jpg', 'When Mom Gets Old', '2022-06-16', '2022-07-06', '61', 'Drama / Comedy / Romance', 'https://www.youtube.com/embed/dUu3DodlQQ8', 'To celebrate Mother\'s Day, enjoy watching the movie \"When My Mother Gets Old\" written and directed by Pan Phuong Bopha. The movie \"When my mother is old\" will be screened in all cinemas from June 16, 2022', 'Now Showing', 1, 2, 3, 4, NULL, '11:30|16:00|20:30', '2022-06-28 04:31:00', '2022-06-28 04:31:00', 1),
(27, '/storage/images/1656416214file_20223610113656.jpg', 'Lightyear', '2022-06-16', '2022-07-16', '100', 'Animation / Sci-Fi / Adventure', 'https://www.youtube.com/embed/sliI0IBcYMc', 'Legendary space ranger Buzz Lightyear embarks on an intergalactic adventure alongside ambitious recruits Izzy, Mo, Darby, and his robot companion, Sox.', 'Now Showing', 1, 2, 3, NULL, NULL, '11:00|15:00|18:10|21:00', '2022-06-28 04:36:54', '2022-06-28 04:36:54', 1),
(28, '/storage/images/1656416564file_20225224105201.jpg', 'Urban Myth', '2022-06-13', '2022-07-08', '122', 'Horror', 'https://www.youtube.com/embed/vbKWdY_bscU', 'Deals with the vivid everyday life horrors that can be easily encountered in familiar places around subjects like noise between floors, secondhand furniture, mannequins, and social media.', 'Now Showing', NULL, NULL, 3, NULL, NULL, '11:00|16:00', '2022-06-28 04:42:44', '2022-06-28 04:42:44', 1),
(29, '/storage/images/1657039362file_20220610010653.jpg', 'Jurassic World: Dominion', '2022-06-09', '2022-07-09', '122', 'Action / Sci-Fi / Thriller', 'https://www.youtube.com/embed/3Smtyr0oCP4', 'Four years after the destruction of Isla Nublar, dinosaurs now live and hunt alongside humans all over the world. This fragile balance will reshape the future and determine, once and for all, whether human beings are to remain the apex predators on a planet they now share with history\'s most fearsome creatures.', 'Now Showing', 1, 2, 3, NULL, NULL, '13:30|17:00|20:00', '2022-06-28 04:46:06', '2022-06-28 04:46:06', 0),
(30, '/storage/images/1657038583file_20225920125917.jpg', 'Daeng Phra Khanong', '2022-06-03', '2022-07-03', '61', 'Horror / Comedy', 'https://www.youtube.com/embed/2Is4iU2Lvb8', 'The legend of Mae Nak Prakanong, about a female spirit in the era of King Rama V, has been repeatedly told in multiple films and TV shows. But not much has been said about her unborn son Dang. This comedy-horror flick will be the first to focus completely on this character, who wants nothing more than to befriend humans.', 'Now Showing', 1, 2, 3, NULL, NULL, '11:00|13:20|18:00', '2022-06-28 04:49:12', '2022-06-28 04:49:12', 0),
(37, '/storage/images/1656868372file_20222809122800 (1).jpg', 'Thor: Love & Thunder', '2022-07-07', '2022-08-22', '119', 'Action / Advanture', 'https://www.youtube.com/embed/L3-jiLVU76g', 'Thor embarks on a journey unlike anything he\'s ever faced -- a quest for inner peace. However, his retirement gets interrupted by Gorr the God Butcher, a galactic killer who seeks the extinction of the gods.', 'Now Showing', 1, 2, 3, 4, 5, '10:00|13:00|15:50|21:20', '2022-07-03 10:12:53', '2022-07-03 10:12:53', 1),
(38, '/storage/images/1657042770file_20221904021920.jpg', 'DC LEAGUE OF SUPER-PETS', '2022-07-29', '2022-08-29', '106', 'Animation / Adventure', 'https://www.youtube.com/embed/Y8AtMrjz3Ic', 'Krypto the Super-Dog and Superman are inseparable best friends, sharing the same superpowers and fighting crime side by side in Metropolis. However, when the Man of Steel and the rest of the Justice League are kidnapped, Krypto must convince a ragtag group of animals to master their own newfound powers for a rescue mission.', 'Coming Soon', 1, 2, 3, 4, 5, NULL, '2022-07-05 10:39:30', '2022-07-05 10:39:30', 1),
(39, '/storage/images/1657044271file_20220809110828.jpg', 'The Doll 3', '2022-07-29', '2022-08-31', '115', 'Horror / Thriller', 'https://www.youtube.com/embed/Y8AtMrjz3Ic', 'Devastated by the death of their parents in an accident, Gian takes his own life and his sister Tara is now left alone. She seeks the help of a dukun to channel Gian`s spirit to continue living in a doll.', 'Coming Soon', 1, 2, 3, 4, 5, NULL, '2022-07-05 11:04:31', '2022-07-05 11:04:31', 1),
(40, '/storage/images/1657044527file_20220630020653.jpg', 'Before The Night Fall', '2022-07-18', '2022-08-31', '60', 'Horror', 'https://www.youtube.com/embed/Y8AtMrjz3Ic', 'Three students majoring in psychology meet a mentally ill patient for a thesis and a documentary. Their research into the phases of mental change leads to mystical things that are difficult to accept by logic. Before Night FallsDirected by Helfi C.H. Kardit.', 'Coming Soon', 1, 2, 3, NULL, NULL, NULL, '2022-07-05 11:08:47', '2022-07-05 11:08:47', 1),
(41, '/storage/images/1657044702file_20224719054726.jpg', 'The Northman', '2022-07-14', '2022-08-31', '137', 'Action / Adventure / Drama', 'https://www.youtube.com/embed/LJaGAwhF82o', 'Prince Amleth is on the verge of becoming a man when his father is brutally murdered by his uncle, who kidnaps the boy\'s mother. Two decades later, Amleth is now a Viking who raids Slavic villages. He soon meets a seeress who reminds him of his vow -- save his mother, kill his uncle, avenge his father.', 'Coming Soon', 1, 2, 3, 4, NULL, NULL, '2022-07-05 11:11:42', '2022-07-05 11:11:42', 1),
(42, '/storage/images/1657123710file_20223831043846.jpg', 'E-San Love Story 2', '2022-07-08', '2022-08-18', '61', 'Comedy', 'https://www.youtube.com/embed/0FRUaPzsRS4', 'Sian is a handsome E-san (The Northeast of Thailand) guy who loves his hometown and his girlfriend. He is waiting for his girlfriend, Som to come back from Bangkok and to live their lives together. Sian helps his mother to cook spider flowers for selling in his little shop. That is how they make a living. After his father died, his mother raised Sian up alone until he completed his college. Pak is Sian\'s junior in college who has been having a crush on Sian since her freshman year. Pak always begs Sian to be her tutor and help her study. Pak also always helps Sian cooking spider flowers and doing housework. Pak perfectly does everything for Sian, but he does not realize at all about her having a crush on him. One day by a distance and time...made Sian\'s dream melted away by the coming of Som and her Chinese-looking new boyfriend, Jakrapan. They announced that they will marry to each other so soon. That\'s make Sian lost himself and tried to find an answer from Som by having his best friend, Banjong who is a village\'s drunken guy to help. But by Banjong\'s useless has made himself to have a fight with villagers and his girlfriend, Saijai. The chaos is bought Venerable Mahachai who is worshiped by villagers to help solving this problem by using Buddhist philosophy.\r\n\r\nA sincere country boy named \"Sian\" was waiting for years to marry his girlfriend when she returned from working in Bangkok. Finally, his girlfriend came back home with her new boyfriend and told Sian that she is going to marry this new guy. Sian\'s heart is broken. Sian\'s drunken friend has come to help and comfort him, but instead he makes more troubles that is brought Venerable Mahachai to solve the problem. On the other hand, \"Pak\" a junior from Sian\'s collage foresees this is a chance to win Sian\'s heart.', 'Now Showing', 1, 2, 3, 4, 5, '10:30|12:40|15:00|17:10|19:20|21:30', '2022-07-06 09:08:31', '2022-07-06 09:08:31', 1),
(43, '/storage/images/1657124119file_20220810010811.jpg', 'Minions: The Rise Of Gru', '2022-06-30', '2022-07-30', '88', 'Animation / Comedy', 'https://www.youtube.com/embed/IFwdZbqI4v4', 'In the 1970s, young Gru tries to join a group of supervillains called the Vicious 6 after they oust their leader -- the legendary fighter Wild Knuckles. When the interview turns disastrous, Gru and his Minions go on the run with the Vicious 6 hot on their tails. Luckily, he finds an unlikely source for guidance -- Wild Knuckles himself -- and soon discovers that even bad guys need a little help from their friends.', 'Now Showing', 1, 2, 3, 4, 5, '11:00|13:00|15:00|17:00|19:00|21:00', '2022-07-06 09:15:19', '2022-07-06 09:15:19', 1),
(44, '/storage/images/1657277761file_20224721034726.jpg', 'SLR', '2022-06-30', '2022-07-30', '113', 'Horror / Thriller', 'https://www.youtube.com/embed/X6End_MPaJE', 'Dan, a photography major student, has been working on his thesis with professor Aim for years, but he can\'t complete it yet. One day, professor Aim gave an SLR camera to him for shooting the best work and sending it to her. Dan is about to find out that it\'s a test of an evil camera, which gives him no way to run away. He has to choose between following or fighting with it. And he is going to let Nam, his girlfriend, and his friend, Great, to join in this horrendous fate, surrounding by death from this hell-like camera.', 'Now Showing', 1, 2, 3, 4, 5, '12:00|16:30|19:00|21:30', '2022-07-08 03:56:01', '2022-07-08 03:56:01', 1),
(45, '/storage/images/1657277897file_20221422101434.jpg', 'The Black Phone', '2022-07-04', '2022-08-04', '61', 'Horror / Thriller', 'https://www.youtube.com/embed/-y6NVM8QmCw', 'Finney Shaw is a shy but clever 13-year-old boy who\'s being held in a soundproof basement by a sadistic, masked killer. When a disconnected phone on the wall starts to ring, he soon discovers that he can hear the voices of the murderer\'s previous victims -- and they are dead set on making sure that what happened to them doesn\'t happen to Finney.', 'Now Showing', 1, 2, 3, 4, 5, '16:50|21:30', '2022-07-08 03:58:17', '2022-07-08 03:58:17', 1),
(46, '/storage/images/1657278003file_20223807103810.jpg', 'The Protégé', '2022-07-15', '2022-08-15', '109', 'Action', 'https://www.youtube.com/embed/c4ZpbnWvt5w', 'Rescued as a child by the legendary assassin Moody, Anna is the world\'s most skilled contract killer. However, when Moody is brutally killed, she vows revenge for the man who taught her everything she knows. As Anna becomes entangled with an enigmatic killer, their confrontation turns deadly, and the loose ends of a life spent killing weave themselves ever tighter.', 'Coming Soon', 1, 2, 3, 4, 5, NULL, '2022-07-08 04:00:03', '2022-07-08 04:00:03', 1),
(47, '/storage/images/1657278213file_20220609110656.jpg', 'Dark World', '2022-07-22', '2022-08-22', '108', 'Action / Thriller', 'https://www.youtube.com/embed/Y8AtMrjz3Ic', 'None', 'Coming Soon', 1, 2, 3, NULL, NULL, NULL, '2022-07-08 04:03:33', '2022-07-08 04:03:33', 1),
(48, '/storage/images/1657278326file_20222422102458.jpg', 'The Antique Shop', '2022-08-05', '2022-09-05', '89', 'Horror / Thriller', 'https://www.youtube.com/embed/Y8AtMrjz3Ic', 'Survive Wadi (Rio Dewanto) migrated from Indonesia to Thailand and worked for a criminal gang. Wadi was captured by the opposing gang and tied to a chair inside a deserted building. How might Wadi survive from gang members and haunting souls? Half Second Singaporean man Ryan (Aloysius Pang) fell in love with a Thai woman (Pijika) and bought a bracelet for her. The bracelet lead him to an unfortunate event where he was arrested and later confined inside a police station. At the station, he confronted a shapeless evil spirit. This is Pang\'s last work before he was conscripted and died during the training. Happy Birthday Korean boy Song (Bae Jinyoung) studied in Thailand and was bullied by 3 Thai classmates (Meen Piravich, Gun Setthapong and New Chayapak). Song came back to Korea with vengeance. One day, the 3 bullying classmates got invitation cards to Song\'s birthday party, the party which was set up to take revenge.', 'Coming Soon', 1, 2, 3, 4, NULL, NULL, '2022-07-08 04:05:26', '2022-07-08 04:05:26', 1),
(49, '/storage/images/1657278460file_20221813121822.jpg', 'A Banquet', '2022-07-15', '2022-08-15', '97', 'Horror', 'https://www.youtube.com/embed/Y8AtMrjz3Ic', 'A widowed mother is radically tested when her teenage daughter insists a supernatural experience has left her body in service to a higher power.', 'Coming Soon', 1, 2, 3, NULL, NULL, NULL, '2022-07-08 04:07:40', '2022-07-08 04:07:40', 1),
(50, '/storage/images/1657278571file_20223022053010.jpg', 'Single Dad', '2022-07-21', '2022-08-20', '90', 'Comedy', 'https://www.youtube.com/embed/m1t7hh9XoFQ', 'Brathna was an almost 30 years old single man, and his father always try to set him to have a wife so he can settle down for good and prove that his son is not gay. So the father went to match making company to find the wife.', 'Coming Soon', 1, 2, 3, 4, 5, NULL, '2022-07-08 04:09:32', '2022-07-08 04:09:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `role`) VALUES
(3, 'admin', 'admin1111@gmail.com', '$2y$10$jpuOzZMaIzIiSMc0GsQPWu/L0JYF0zBqGemcAuOo2dxJu5hlVKage', '2022-06-14 03:56:37', '2022-06-14 03:56:37', 'admin'),
(4, 'sokha nin', 'ninsokha23@gmail.com', '$2y$10$XCq7TVK6lLjiNVXRLJuX4.FOh.6GOz8B6zy9k1Xml2jB9t1TEveZq', '2022-06-16 10:03:14', '2022-06-16 10:03:14', 'staff');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
