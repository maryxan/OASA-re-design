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
-- Table structure for table `vehicle_routes`
--

CREATE TABLE `vehicle_routes` (
  `vehicle_id` varchar(32) NOT NULL,
  `description` varchar(256) NOT NULL,
  `medium_type` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicle_routes`
--

INSERT INTO `vehicle_routes` (`vehicle_id`, `description`, `medium_type`) VALUES
('140', 'ΠΟΛΥΓΩΝΟ - ΓΛΥΦΑΔΑ', 'Bus'),
('250', 'ΠΑΝΕΠΙΣΤΗΜΙΟΥΠΟΛΗ - ΣΤ. ΕΥΑΓΓΕΛΙΣΜΟΥ (ΚΥΚΛΙΚΗ)', 'Bus'),
('420', 'ΑΓ. ΑΝΑΡΓΥΡΟΙ - ΠΕΙΡΑΙΑΣ', 'Bus'),
('M1', 'ΠΕΙΡΑΙΑΣ - ΚΗΦΙΣΙΑ', 'Railway'),
('M3', 'ΑΓΙΑ ΜΑΡΙΝΑ - ΔΟΥΚ. ΠΛΑΚΕΝΤΙΑΣ - ΑΕΡΟΔΡΟΜΙΟ', 'Subway');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vehicle_routes`
--
ALTER TABLE `vehicle_routes`
  ADD PRIMARY KEY (`vehicle_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
