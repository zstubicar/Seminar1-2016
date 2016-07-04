-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2016 at 01:13 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marvel`
--

-- --------------------------------------------------------

--
-- Table structure for table `predstava`
--

CREATE TABLE `predstava` (
  `id` int(11) UNSIGNED NOT NULL,
  `ime` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `imeEng` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `opis` text COLLATE utf8_unicode_ci NOT NULL,
  `opisEng` text COLLATE utf8_unicode_ci NOT NULL,
  `glumci` text COLLATE utf8_unicode_ci NOT NULL,
  `slika` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `cijena` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `predstava`
--

INSERT INTO `predstava` (`id`, `ime`, `imeEng`, `opis`, `opisEng`, `glumci`, `slika`, `cijena`) VALUES
(1, 'Kapetan Amerika: Ratnik zime', 'Captain America: The Winter Soldier', 'Kao što se Steve Rogers bori da prihvati svoju ulogu u suvremenom svijetu , on udružuje s momkom iz osvetnika i S.H.I.E.L.D sredstvom zvanim crna udovica , u boj protiv nove prijetnje iz povijesti: ubojicu poznatog kao Winter Soldier .', 'As Steve Rogers struggles to embrace his role in the modern world, he teams up with a fellow Avenger and S.H.I.E.L.D agent, Black Widow, to battle a new threat from history: an assassin known as the Winter Soldier.', 'Chris Evans, Samuel L. Jackson, Scarlett Johansson', 'captain_america.jpg', 40),
(3, 'Iron Man', 'Iron Man', 'Nakon što je zarobljen u afganistanskoj spilji , inženjer milijarder stvara jedinstven oružanu oklop u borbi protiv zla.', 'After being held captive in an Afghan cave, a billionaire engineer creates a unique weaponized suit of armor to fight evil.', 'Robert Downey Jr., Gwyneth Paltrow, Terrence Howard ', 'iron_man.jpg', 50),
(4, 'Thor: Svijet tame', 'Thor: The Dark World', 'Kada je dr Jane Foster dobila prokletstvo sa snažnim entitetom poznatog kao eter , Thor je najavio kozmi?ki doga?aj poznatog kao konvergencija i genocid tamnog vilenjaka. ', 'When Dr. Jane Foster gets cursed with a powerful entity known as the Aether, Thor is heralded of the cosmic event known as the Convergence and the genocidal Dark Elves.', 'Chris Hemsworth, Natalie Portman, Tom Hiddleston', 'thor.jpg', 40),
(5, 'Osvetnici 2: Vladavina Ultrona', 'Avengers: Age of Ultron', 'Kad Tony Stark i Bruce Banner pokušati skok-start uspavan mirovne program pod nazivom Ultron , stvari idu užasno krivo i to je do najmo?niji heroji Zemlje zaustaviti zlo?ina?ka Ultron od donošenja njegove strašne planove.', 'When Tony Stark and Bruce Banner try to jump-start a dormant peacekeeping program called Ultron, things go horribly wrong and it''s up to Earth''s Mightiest Heroes to stop the villainous Ultron from enacting his terrible plans.', 'Robert Downey Jr., Chris Evans, Mark Ruffalo', 'osvetnici.jpg', 40),
(6, 'X-Men: Prva generacija', 'X: First Class', 'Godine 1962. vlada Sjedinjenih Država Zatraži pomo? mutanata s nadljudskim sposobnostima da se zaustavi zlonamjernog diktatora koji je odre?en za po?etak Tre?eg svjetskog rata .', 'In 1962 , the United States government enlists the help of Mutants with superhuman abilities to stop a malicious dictator who is determined to start World War III ', 'James McAvoy, Michael Fassbender, Jennifer Lawrence', 'xman.jpg', 40),
(8, 'Čuvari galaksije', 'Guardians of the Galaxy', 'Skupina intergalakti?kih kriminalaca su prisiljeni raditi zajedno kako bi zaustavili fanati?an ratnika iz Preuzevši kontrolu nad svemirom .', 'A group of intergalactic criminals are forced to work together to stop a fanatical warrior from taking control of the universe.', 'Chris Pratt, Vin Diesel, Bradley Cooper', 'cuvari_galaksije.jpg', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `predstava`
--
ALTER TABLE `predstava`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `predstava`
--
ALTER TABLE `predstava`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
