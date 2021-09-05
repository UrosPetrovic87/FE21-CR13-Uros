-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 01:57 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fswd13_cr13_bigevents_uros`
--
CREATE DATABASE IF NOT EXISTS `fswd13_cr13_bigevents_uros` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fswd13_cr13_bigevents_uros`;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `capacity` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `date_time`, `description`, `image`, `capacity`, `email`, `phone`, `address`, `url`) VALUES
(4, 'Austria Wien vs Rapid Wien', '2021-10-10 20:00:00', 'Austrian Footbal derby', 'https://abseits.at/wp-content/uploads/Rapid-Austria-Wiener-Derby.jpg', '35.000', 'austriawien@gmail.com', '0156658965', 'Franz Horr Stadium', 'www.fk-austria.at'),
(5, 'Rigoleto', '2021-09-06 19:00:00', 'Opera', 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Rigoletto_premiere_poster.jpg', '5,000', 'volksoperwien@gmail.com', '+43/1/514 44-3670', 'Währinger Strasse 78, 1090 Vienna', 'www.volksoper.at'),
(6, 'Haustiermesse Wien 2021', '2021-09-25 10:00:00', 'Animal show', 'https://wildundhund.de/wp-content/uploads/sites/2/2020/10/Bildschirmfoto-2020-10-28-um-10.43.02.png', '3,000', 'office@exotica.at', '013696369', 'MARX Halle, Karl-Farkas Gasse 19, 1030 Wien', 'www.haustiermesse.com'),
(7, 'Betta Show', '2022-06-08 11:00:00', 'Betta Fish Show', 'https://aquariumfishonline.com.au/wp-content/uploads/2021/01/Betta-Koi-Galaxy-Red-Males.jpg', '500', 'bettalovers@gmail.com', '0676999888', 'MARX Halle, Karl-Farkas Gasse 19, 1030 Wien', 'www.betta.com'),
(8, 'ADRK', '2021-10-10 10:00:00', 'Rottweiler Show', 'https://www.adrk.de/images/adrk/all_languages/preview.jpg', '11.000', 'adrk@gmail.com', '36988856985', 'Am Stadion, 66976 Rodalben Deutschland', 'www.adrk.de'),
(9, 'Innovators Week', '2021-09-06 09:00:00', 'Innovative tech environment', 'https://talentgarden.org/wp-content/uploads/2021/08/12671911_image.png', '10.000', 'talentgarden@gmail.com', '0122236589', 'Talent Garden, Liechtensteinstraße 111-115, 1090 Wien', 'www.talentgarden.org');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
