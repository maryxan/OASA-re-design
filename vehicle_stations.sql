-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2020 at 10:10 PM
-- Server version: 10.4.10-MariaDB
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
-- Database: `sdi1400107`
--

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_stations`
--

CREATE TABLE `vehicle_stations` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `vehicle_id` varchar(32) NOT NULL,
  `station_number` int(11) NOT NULL,
  `arrival_asc` varchar(32) NOT NULL,
  `arrival_desc` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicle_stations`
--

INSERT INTO `vehicle_stations` (`id`, `name`, `vehicle_id`, `station_number`, `arrival_asc`, `arrival_desc`) VALUES
(1, 'ΠΑΝΕΠΙΣΤΗΜΙΟΥΠΟΛΗ', '250', 1, '18:00', '19:00'),
(2, 'ΕΥΦΡΟΝΙΟΥ', '250', 2, '18:12', '18:48'),
(3, 'ΕΥΑΓΓΕΛΙΣΜΟΣ', '250', 3, '18:24', '18:36'),
(4, '	ΠΥΛΗ ΚΑΙΣΑΡΙΑΝΗΣ', '250', 4, '18:36', '18:24'),
(5, 'ΠΑΝΕΠΙΣΤΗΜΙΟΥΠΟΛΗ', '250', 5, '18:48', '18:12'),
(6, 'ΠΟΛΥΓΩΝΟ', '140', 1, '18:00', '19:00'),
(7, 'ΓΗΡΟΚΟΜΕΙΟ', '140', 2, '18:12', '18:48'),
(8, '	ΕΘΝΙΚΗ ΓΛΥΠΤΟΘΗΚΗ', '140', 3, '18:24', '18:36'),
(9, '	ΦΟΙΤΗΤ.ΕΣΤΙΑ', '140', 4, '18:36', '18:24'),
(10, '	ΑΓ.ΚΩΝΣΤΑΝΤΙΝΟΣ', '140', 5, '18:48', '18:12'),
(11, 'ΓΛΥΦΑΔΑ', '140', 6, '19:00', '18:00'),
(12, 'ΑΓ. ΑΝΑΡΓΥΡΟΙ', '420', 1, '18:00', '20:00'),
(13, 'ΑΓ. ΠΑΝΤΕΛΕΗΜΟΝΑ', '420', 2, '18:12', '19:48'),
(14, 'ΣΚΛΑΒΕΝΙΤΗ', '420', 3, '18:24', '19:36'),
(15, '	ΑΠΟΛΛΩΝ', '420', 4, '18:36', '19:24'),
(16, 'ΠΕΙΡΑΙΑΣ', '420', 5, '18:48', '19:12'),
(17, 'ΣΤ.ΑΓ.ΜΑΡΙΝΑ', 'M3', 1, '18:00', '20:10'),
(18, 'ΣΤ.ΣΥΝΤΑΓΜΑΤΟΣ', 'M3', 2, '18:12', '20:00'),
(19, 'ΣΤ.ΕΥΑΓΓΕΛΙΣΜΟΥ', 'M3', 3, '18:24', '19:48'),
(20, '	ΣΤ.ΚΑΤΕΧΑΚΗ', 'M3', 4, '18:36', '19:36'),
(21, 'ΣΤ.ΔΟΥΚ.ΠΛΑΚΕΝΤΙΑΣ', 'M3', 5, '18:48', '19:24'),
(22, 'ΣΤ.ΑΕΡΟΔΡΟΜΙΟΥ', 'M3', 6, '19:00', '19:12'),
(23, 'ΣΤ.ΠΕΙΡΑΙΑ', 'M1', 1, '18:00', '20:00'),
(24, 'ΣΤ.ΜΟΝΑΣΤΗΡΑΚΙ', 'M1', 2, '18:12', '19:50'),
(25, 'ΣΤ.ΑΓ.ΝΙΚΟΛΑΟΥ', 'M1', 3, '18:22', '19:40'),
(26, 'ΣΤ.ΠΕΡΙΣΣΟΥ', 'M1', 4, '18:40', '19:22'),
(27, 'ΣΤ.ΚΗΦΙΣΙΑΣ', 'M1', 5, '18:50', '19:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vehicle_stations`
--
ALTER TABLE `vehicle_stations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vehicle_stations`
--
ALTER TABLE `vehicle_stations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
