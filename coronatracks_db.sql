-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: mysql-coronatracks.alwaysdata.net
-- Generation Time: Jan 09, 2021 at 08:15 PM
-- Server version: 10.5.5-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coronatracks_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctolib_forum`
--

CREATE TABLE `doctolib_forum` (
  `ID` int(11) NOT NULL,
  `message` text CHARACTER SET utf8 NOT NULL,
  `date` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctolib_forum`
--

INSERT INTO `doctolib_forum` (`ID`, `message`, `date`, `topic`, `author`) VALUES
(34, 'Hi i\'m a message', 1609964094, 'This is an exemple of topic', 'Admin'),
(35, 'it\'s strange', 1609964143, 'Why there are so many sick people in Tel Aviv ?', 'Admin'),
(36, 'You have to wear a mask, put some hydroalcoolic gel in your hands ', 1609966297, 'Tips to avoid the Covid', 'Dr. Michel  Boujenah'),
(37, 'Nice Tips Michel!', 1609966513, 'Tips to avoid the Covid', 'Admin'),
(38, 'I\'m bored :(', 1609966854, 'The Pandemic is so boring', 'Anonymous'),
(39, 'Yea i agree man', 1609966974, 'The Pandemic is so boring', 'Anonymous'),
(40, 'Where is the Admin ?', 1609966981, 'The Pandemic is so boring', 'Anonymous'),
(41, 'Idk :/', 1609966989, 'The Pandemic is so boring', 'Anonymous'),
(42, 'Thanks Doctor!', 1609967017, 'Tips to avoid the Covid', 'Anonymous'),
(43, 'do masks really protect us ?', 1609967026, 'Tips to avoid the Covid', 'Anonymous'),
(44, 'Because it\'s a very crowded place', 1609967066, 'Why there are so many sick people in Tel Aviv ?', 'Anonymous'),
(45, 'Yeah', 1609967089, 'Why there are so many sick people in Tel Aviv ?', 'Anonymous'),
(46, 'not like beer sheva :)', 1609967095, 'Why there are so many sick people in Tel Aviv ?', 'Anonymous'),
(47, 'hahaha', 1609967116, 'Why there are so many sick people in Tel Aviv ?', 'Anonymous'),
(48, 'When ?', 1609967139, 'When the vaccin is available ?', 'Anonymous'),
(49, 'You can watch Netflix and Chill', 1609967165, 'I love the Break Down', 'Anonymous'),
(50, 'No it\'s awful :\'(', 1609967198, 'I love the Break Down', 'Anonymous'),
(51, 'relax lol', 1609967217, 'I love the Break Down', 'Anonymous'),
(52, 'in one month i think', 1609967235, 'When the vaccin is available ?', 'Anonymous'),
(53, 'i am here :)', 1609967385, 'The Pandemic is so boring', 'Admin'),
(54, 'hello !!', 1610044305, 'The Pandemic is so boring', 'Anonymous'),
(55, 'wow thanks', 1610060709, 'Tips to avoid the Covid', 'Anonymous');

-- --------------------------------------------------------

--
-- Table structure for table `doctolib_sub`
--

CREATE TABLE `doctolib_sub` (
  `ID` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `last_modif` int(11) NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctolib_sub`
--

INSERT INTO `doctolib_sub` (`ID`, `subject`, `last_modif`, `author`) VALUES
(18, 'This is an exemple of topic', 1609964094, 'Admin'),
(19, 'Why there are so many sick people in Tel Aviv ?', 1609967116, 'Admin'),
(20, 'Tips to avoid the Covid', 1610060709, 'Dr. Michel  Boujenah'),
(21, 'The Pandemic is so boring', 1610044305, 'Anonymous'),
(22, 'When the vaccin is available ?', 1609967235, 'Anonymous'),
(23, 'I love the Break Down', 1609967217, 'Anonymous');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_data`
--

CREATE TABLE `doctor_data` (
  `ID` int(11) NOT NULL,
  `First_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Last_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Mail` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Gender` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Type` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_data`
--

INSERT INTO `doctor_data` (`ID`, `First_Name`, `Last_Name`, `Mail`, `Gender`, `Password`, `Type`) VALUES
(22222221, 'Pierre', 'Cohen', 'dylan.market@yahoo.com', 'male', '$2y$12$I5GfpQFuZzfpMJjuhvTxCuANDWwbeuxIveCii9uuF5Tgo9j8x3dA.', 'doctor'),
(22222222, 'Dylan', 'Cohen', 'dylan.thebest2000@gmail.com', 'female', '$2y$12$CnDQk0pGqdmDHhW.wsDo4uE4SEynDluyJO9LaQQZiRM/p6W3iNm1q', 'doctor'),
(22222228, 'Yehouda', 'Benhamou', 'yehoudabenhamou@gmail.com', 'male', '$2y$12$8TMCbn5aEyel9UP/Ad3a/ed.JFC3X8MbytUPJBTiOyURGF1tdliX2', 'doctor'),
(22222234, 'Yehouda', 'Cohen', 'yehoudacoco@medecin.fr', 'male', '$2y$12$Z8eYdc0vb3PDNx4b5RyWMu0/2Iq2.n1VKf.qlPxD0pqyjBuMFGqq2', 'doctor'),
(22222267, 'Michel ', 'Boujenah', 'boubou@gmail.com', 'male', '$2y$12$23qV3jOQ81QiZ9Tx4ojuk.nMtdl7ctka7MTeMY03xk73Mom6Er4uS', 'doctor'),
(330445792, 'Tal', 'Mimouni', 'talouche@hotmail.fr', 'female', '$2y$12$EBMR7OwAjYDBz0zTg.0w3uFIG6/RmVZJtDyEbbNqK5OoT1anJ46YG', 'admin'),
(342571775, 'Ilan', 'Malka', 'ilanma2906@gmail.com', 'male', '$2y$12$ZFyGAk6XWn4xiVA6fSmweOA9SeaUP8Jla7dBgacURQR04t1XGrJQy', 'admin'),
(342571866, 'Dylan', 'Levy', 'dylan.levy5@yahoo.com', 'male', '$2y$12$w4WJIdOTJ4L0LEEjma.Z8eRrWSRBmZ3HHeKtI0SekxTiUOqbEDGmy', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nb_click` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`ID`, `name`, `nb_click`) VALUES
(1, 'case_A1', 21),
(2, 'case_A2', 1),
(3, 'case_A3', 1),
(4, 'case_A4', 11),
(5, 'case_A5', 22),
(6, 'case_B1', 2),
(7, 'case_B2', 1),
(8, 'case_B3', 11),
(9, 'case_B4', 1),
(10, 'case_B5', 11),
(11, 'case_C1', 1),
(12, 'case_C2', 20),
(13, 'case_C3', 2),
(14, 'case_C4', 10),
(15, 'case_C5', 4),
(16, 'case_D1', 2),
(17, 'case_D2', 1),
(18, 'case_D3', 1),
(19, 'case_D4', 21),
(20, 'case_D5', 2);

-- --------------------------------------------------------

--
-- Table structure for table `message_stocking`
--

CREATE TABLE `message_stocking` (
  `ID` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` int(11) NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message_stocking`
--

INSERT INTO `message_stocking` (`ID`, `message`, `date`, `author`) VALUES
(19, 'kanyon aneguev', 1609780332, ''),
(33, 'i was in the old city of beer sheva', 1609963470, 'Anonymous'),
(34, 'I was in Mamilla Mall, Jerusalem', 1609963884, 'Admin'),
(35, 'I heard my patient going to South of Beer Sheva', 1609966244, 'Dr. Michel  Boujenah'),
(36, 'I was in Haifa since yesterday', 1609966786, 'Anonymous'),
(38, 'I was in Eilat Sunday morning', 1610028926, 'Anonymous');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` int(11) NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`ID`, `message`, `date`, `author`) VALUES
(2, 'a new form of corona virus in England', 1608482330, ''),
(11, 'a new form of corona virus in England', 1609951118, 'Dr. Dylan Levy'),
(12, 'seguer in israel thursday', 1609963495, 'Anonymous'),
(13, 'Boris Johnson decided a new breakdown in England', 1609966404, 'Dr. Michel  Boujenah'),
(14, 'New Breakdown in Israel !', 1609966823, 'Anonymous'),
(15, 'Vaccin Soon', 1609967366, 'Admin'),
(16, '8000 sick in Israel', 1609967582, 'Anonymous'),
(17, '8500 new cases in on day ?!', 1610044328, 'Anonymous');

-- --------------------------------------------------------

--
-- Table structure for table `User_data`
--

CREATE TABLE `User_data` (
  `ID` int(11) NOT NULL,
  `First_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Last_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Mail` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Adress` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tel` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `Type` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctolib_forum`
--
ALTER TABLE `doctolib_forum`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `doctolib_sub`
--
ALTER TABLE `doctolib_sub`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `doctor_data`
--
ALTER TABLE `doctor_data`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `message_stocking`
--
ALTER TABLE `message_stocking`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `User_data`
--
ALTER TABLE `User_data`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctolib_forum`
--
ALTER TABLE `doctolib_forum`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `doctolib_sub`
--
ALTER TABLE `doctolib_sub`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `message_stocking`
--
ALTER TABLE `message_stocking`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
