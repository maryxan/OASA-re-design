-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2020 at 11:51 PM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(11) NOT NULL,
  `starting_point` varchar(256) NOT NULL,
  `destination` varchar(256) NOT NULL,
  `duration` varchar(32) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `starting_point`, `destination`, `duration`, `price`) VALUES
(1, '10η Καισαριανής', 'Λιμάνι Πειραιά', '1h 12min', 12),
(2, '10η Καισαριανής', 'Λιμάνι Πειραιά', '1h 15min', 13),
(3, '10η Καισαριανής', 'Λιμάνι Πειραιά', '1h 40min', 17),
(4, '10η Καισαριανής', 'Αεροδρόμιο', '1h 15min', 12),
(5, '10η Καισαριανής', 'Αεροδρόμιο', '1h 40min', 8);

-- --------------------------------------------------------

--
-- Table structure for table `steps`
--

CREATE TABLE `steps` (
  `id` int(11) NOT NULL,
  `route_id` int(11) NOT NULL,
  `step_number` int(11) NOT NULL,
  `start` varchar(256) NOT NULL,
  `end` varchar(256) NOT NULL,
  `in_between_stops` int(11) NOT NULL,
  `duration` varchar(32) NOT NULL,
  `medium_type` varchar(32) NOT NULL,
  `medium_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `steps`
--

INSERT INTO `steps` (`id`, `route_id`, `step_number`, `start`, `end`, `in_between_stops`, `duration`, `medium_type`, `medium_name`) VALUES
(1, 1, 1, '10η Καισαριανής', 'Νοσοκ.Ευαγγελισμός', 9, '10min', 'Bus', '224'),
(2, 1, 2, 'Νοσοκ.Ευαγγελισμός', 'Στ.Ευαγγελισμού', 0, '1min', 'Walk', 'Walk'),
(3, 1, 3, 'Στ.Ευαγγελισμού', 'Μοναστηράκι', 2, '5min', 'Subway', 'M3'),
(4, 1, 4, 'Μοναστηράκι', 'Πειραιάς', 7, '16min', 'Railway', 'M1'),
(5, 1, 5, 'Πειραιάς', 'Λιμάνι Πειραιά', 0, '20min', 'Walk', 'Walk'),
(6, 2, 1, '10η Καισαριανής', 'Νοσοκ.Ευαγγελισμός', 9, '10min', 'Bus', '224'),
(7, 2, 2, 'Νοσοκ.Ευαγγελισμός', 'Στ.Ευαγγελισμού', 0, '1min', 'Walk', 'Walk'),
(8, 2, 3, 'Στ.Ευαγγελισμού', 'Μοναστηράκι', 2, '5min', 'Subway', 'M3'),
(9, 2, 4, 'Μοναστηράκι', 'Πειραιάς', 7, '16min', 'Railway', 'M1'),
(10, 2, 5, 'Πειραιάς', 'Σταθμός ΗΣΑΠ', 0, '1min', 'Walk', 'Walk'),
(11, 2, 6, 'Σταθμός ΗΣΑΠ', 'Νέοι Οικισμοί', 5, '9min', 'Bus', '859'),
(12, 2, 7, 'Νέοι Οικισμοί', 'Λιμάνι Πειραιά', 0, '7min', 'Walk', 'Walk'),
(13, 3, 1, '10η Καισαριανής', '5η Πανεπιστημιούπολης', 0, '6min', 'Walk', 'Walk'),
(14, 3, 2, '5η Πανεπιστημιούπολης', 'Αφετηρία', 9, '51min', 'Bus', 'E90'),
(15, 3, 3, 'Αφετηρία', 'Πλ.Καραϊσκάκη', 0, '2min', 'Walk', 'Walk'),
(16, 3, 4, 'Πλ.Καραϊσκάκη', 'Νέοι Οικισμοί', 6, '10min', 'Bus', '859'),
(17, 3, 5, 'Νέοι Οικισμοί', 'Λιμάνι Πειραιά', 0, '7min', 'Walk', 'Walk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `steps`
--
ALTER TABLE `steps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `steps`
--
ALTER TABLE `steps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
