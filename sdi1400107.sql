-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2020 at 12:21 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

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
-- Table structure for table `simpleuser`
--

CREATE TABLE `simpleuser` (
  `username` varchar(32) NOT NULL,
  `password` int(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `surname` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simpleuser`
--

INSERT INTO `simpleuser` (`username`, `password`, `name`, `surname`, `email`) VALUES
('aaas', 6512, 'mar', 'xan', 'aa@aadd.gr'),
('asasa', 6512, 'mar', 'ee', 's@a.com'),
('dddd', 6512, 'mar', 'rr', 'rrrrrr@ff'),
('gmitr', 1234, '', '', ''),
('lala', 6512, 'kk', 'kk', 'aa@aa'),
('leftxant', 0, 'q', 'qq', 'ahs@hotmail.com'),
('mariamar', 202, 'maria', 'xan', 'mar@hotmai.com'),
('maryxan', 12345, 'Mary', 'Xanthopoulou', 'maryx@gmail.com'),
('mitarakis', 202, 'ioannis', 'mitrou', 'i@aa.gr');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(32) NOT NULL,
  `password` int(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `surname` int(32) NOT NULL,
  `email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `name`, `surname`, `email`) VALUES
('maryxan', 1234, '', 0, ''),
('maryxan', 1234, '', 0, ''),
('simpleuser', 12345, '', 0, ''),
('', 0, '', 0, ''),
('simpleuser', 12345, '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `simpleuser`
--
ALTER TABLE `simpleuser`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
