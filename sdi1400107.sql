-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2020 at 09:49 PM
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
-- Table structure for table `amea_stations`
--

CREATE TABLE `amea_stations` (
  `id` int(11) NOT NULL,
  `station` varchar(256) NOT NULL,
  `street` varchar(256) NOT NULL,
  `district` varchar(256) NOT NULL,
  `medium_type` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `amea_stations`
--

INSERT INTO `amea_stations` (`id`, `station`, `street`, `district`, `medium_type`) VALUES
(1, '8η ΚΑΙΣΑΡΙΑΝΗΣ', 'ΕΘΝΙΚΗΣ ΑΝΤΙΣΤΑΣΕΩΣ', 'ΚΑΙΣΑΡΙΑΝΗΣ', 'Bus'),
(2, '9η ΚΑΙΣΑΡΙΑΝΗΣ', 'ΕΘΝΙΚΗΣ ΑΝΤΙΣΤΑΣΕΩΣ', 'ΚΑΙΣΑΡΙΑΝΗΣ', 'Bus'),
(3, '10η ΚΑΙΣΑΡΙΑΝΗΣ', 'ΕΘΝΙΚΗΣ ΑΝΤΙΣΤΑΣΕΩΣ', 'ΚΑΙΣΑΡΙΑΝΗΣ', 'Bus'),
(4, '11η ΚΑΙΣΑΡΙΑΝΗΣ', 'ΕΘΝΙΚΗΣ ΑΝΤΙΣΤΑΣΕΩΣ', 'ΚΑΙΣΑΡΙΑΝΗΣ', 'Bus'),
(5, 'ΚΛΕΙΟΥΣ', 'ΤΣΑΜΑΔΟΥ', 'ΗΛΙΟΥΠΟΛΗΣ', 'Bus'),
(6, 'ΚΛΕΙΟΥΣ', 'ΤΣΑΜΑΔΟΥ', 'ΗΛΙΟΥΠΟΛΗΣ', 'Bus'),
(7, 'ΠΑΠΑΓΟΥ', 'ΑΛ.ΠΑΝΑΓΟΥΛΗ', 'ΗΛΙΟΥΠΟΛΗΣ', 'Bus'),
(8, 'ΣΠ.ΜΗΛΙΟΥ', 'ΤΣΑΜΑΔΟΥ', 'ΗΛΙΟΥΠΟΛΗΣ', 'Bus'),
(9, '1η ΙΛΙΣΙΩΝ', 'ΝΥΜΦΑΙΩΝ', 'ΖΩΓΡΑΦΟΥ', 'Bus'),
(10, 'ΥΠΕΡΑΓΟΡΑ', 'ΟΥΛΩΦ ΠΑΛΜΕ', 'ΖΩΓΡΑΦΟΥ', 'Bus'),
(11, 'ΤΣΙΤΟΥΡΑ', 'ΛΕΩΦ.ΣΤΡΧΟΥ ΠΑΠΑΓΟΥ', 'ΖΩΓΡΑΦΟΥ', 'Bus'),
(12, 'ΠΛ.ΠΛΑΣΤΗΡΑ', 'ΕΥΤΥΧΙΔΟΥ', 'ΑΘΗΝΑΙΩΝ', 'Bus'),
(13, 'ΠΛ.ΠΛΑΣΤΗΡΑ', 'ΕΥΤΥΧΙΔΟΥ', 'ΑΘΗΝΑΙΩΝ', 'Bus'),
(14, 'ΠΛΑΤΕΙΑ', 'ΣΥΡΑΚΟΥΣΩΝ', 'ΑΘΗΝΑΙΩΝ', 'Bus'),
(15, 'ΠΝΕΥΜΑΤΙΚΟ ΚΕΝΤΡΟ', 'ΚΡΕΟΝΤΟΣ', 'ΑΘΗΝΑΙΩΝ', 'Bus'),
(16, 'ΠΟΛΥΤΕΧΝΕΙΟ', 'ΜΠΟΥΜΠΟΥΛΙΝΑΣ', 'ΑΘΗΝΑΙΩΝ', 'Bus'),
(17, 'ΚΡΥΣΤΑΛ', 'ΠΡΙΓΚΙΠΟΝΝΗΣΩΝ', 'ΑΘΗΝΑΙΩΝ', 'Bus'),
(18, 'ΛΑΙΚΟ', 'ΜΙΚΡΑΣ ΑΣΙΑΣ', 'ΑΘΗΝΑΙΩΝ', 'Bus'),
(19, 'ΣΠΙΤΙ ΤΟΥ ΗΘΟΠΟΙΟΥ', 'ΑΧΑΡΝΩΝ', 'ΑΘΗΝΑΙΩΝ', 'Bus'),
(20, 'ΛΥΣΙΑΤΡΕΙΟ', 'ΔΡΟΣΟΠΟΥΛΟΥ', 'ΑΘΗΝΑΙΩΝ', 'Bus'),
(21, 'ΠΑΛ.ΤΕΡΜΑ', 'ΚΕΡΚΥΡΑΣ', 'ΑΘΗΝΑΙΩΝ', 'Bus'),
(22, 'ΠΛ.ΕΞΑΡΧΕΙΩΝ', 'ΣΠΥΡ.ΤΡΙΚΟΥΠΗ', 'ΑΘΗΝΑΙΩΝ', 'Bus'),
(23, 'ΠΛ.ΠΑΓΚΡΑΤΙΟΥ', 'ΥΜΗΤΤΟΥ', 'ΑΘΗΝΑΙΩΝ', 'Bus'),
(24, 'ΑΓ.ΓΕΩΡΓΙΟΣ', 'ΙΕΡΑΣ ΟΔΟΥ', 'ΑΙΓΑΛΕΩ', 'Bus'),
(25, 'ΤΡΑΠΕΖΑ', 'ΓΡ.ΛΑΜΠΡΑΚΗ', 'ΓΛΥΦΑΔΑΣ', 'Bus'),
(26, 'ΚΑΛΛΙΘΕΑ', 'ΕΛ.ΒΕΝΙΖΕΛΟΥ', 'ΚΑΛΛΙΘΕΑΣ', 'Bus'),
(27, 'ΠΛ.Ν.ΠΕΝΤΕΛΗΣ', 'ΠΛ.ΗΡΩΩΝ ΠΟΛΥΤΕΧΝΕΙΟΥ', 'ΠΕΝΤΕΛΗΣ', 'Bus'),
(28, 'ΣΤΡΑΤΟΠΕΔΟ', 'ΚΥΠΡΟΥ', 'ΠΑΠΑΓΟΥ-ΧΟΛΑΡΓΟΥ', 'Bus'),
(29, 'ΠΑΛΑΜΗΔΙΟΥ', 'ΜΑΥΡΟΜΙΧΑΛΗ', 'ΠΕΙΡΑΙΑ', 'Bus'),
(30, 'ΙΚΑ', 'ΒΑΣ.ΑΛΕΞΑΝΔΡΟΥ', 'ΠΕΡΙΣΤΕΡΙΟΥ', 'Bus'),
(31, 'ΔΗΜΑΡΧΕΙΟ', '25ης ΜΑΡΤΙΟΥ', 'ΠΕΤΡΟΥΠΟΛΗΣ', 'Bus'),
(32, 'ΑΓΟΡΑ ΒΥΡΩΝΑ', 'ΛΕΩΦ.ΚΥΠΡΟΥ', 'ΒΥΡΩΝΑ', 'Bus'),
(33, 'ΕΥΔΑΠ', 'ΙΛΙΣΙΩΝ', 'ΖΩΓΡΑΦΟΥ', 'Bus'),
(34, 'ΙΚΑ', 'ΛΕΩ. ΓΕΩΡ.ΠΑΠΑΝΔΡΕΟΥ', 'ΖΩΓΡΑΦΟΥ', 'Bus'),
(35, 'ΚΟΤΟΠΟΥΛΗ', 'ΛΕΩΦ.ΣΤΡΟΥ ΠΑΠΑΓΟΥ', 'ΖΩΓΡΑΦΟΥ', 'Bus'),
(36, 'ΙΖΟΛΑ', 'ΕΛ.ΒΕΝΙΖΕΛΟΥ', 'ΚΑΛΛΙΘΕΑΣ', 'Bus'),
(37, 'ΙΚΑ', 'ΔΑΒΑΚΗ', 'ΚΑΛΛΙΘΕΑΣ', 'Bus'),
(38, 'ΠΥΡΟΣΒΕΣΤΙΚΗ', 'ΕΛ.ΒΕΝΙΖΕΛΟΥ', 'ΚΑΛΛΙΘΕΑΣ', 'Bus'),
(39, 'ΣΠΑΡΤΗΣ', 'ΔΗΜΟΣΘΕΝΟΥΣ', 'ΚΑΛΛΙΘΕΑΣ', 'Bus'),
(40, 'ΣΤ.ΠΑΝΟΡΜΟΥ', 'ΠΑΝΟΡΜΟΥ', 'ΑΘΗΝΑΙΩΝ', 'Subway'),
(41, 'ΣΤ.ΕΥΑΓΓΕΛΙΣΜΟΣ', 'Λ. ΒΑΣΙΛΙΣΣΗΣ ΣΟΦΙΑΣ', 'ΑΘΗΝΑΙΩΝ', 'Subway'),
(42, 'ΣΤ.ΣΥΝΤΑΓΜΑ', 'ΠΛ.ΣΥΝΤΑΓΜΑΤΟΣ', 'ΑΘΗΝΑΙΩΝ', 'Subway'),
(43, 'ΣΤ.ΜΟΝΑΣΤΗΡΑΚΙ', 'ΠΛ.ΜΟΝΑΣΤΗΡΑΚΙΟΥ', 'ΑΘΗΝΑΙΩΝ', 'Subway'),
(44, 'ΣΤ.ΝΕΟΣ ΚΟΣΜΟΣ', 'ΗΛΙΑ ΗΛΙΟΥ', 'ΝΕΟΣ ΚΟΣΜΟΣ', 'Subway'),
(45, 'ΣΤ.ΜΕΤΑΞΟΥΡΓΕΙΟ', 'ΠΛ.ΚΑΡΑΪΣΚΑΚΗ', 'ΜΕΤΑΞΟΥΡΓΕΙΟ', 'Subway'),
(46, 'ΣΤ.ΠΑΝΕΠΙΣΤΗΜΙΟ', 'Λ.ΠΑΝΕΠΙΣΤΗΜΙΟΥ', 'ΑΘΗΝΑΙΩΝ', 'Subway'),
(47, 'ΣΤ.ΝΕΡΑΤΖΙΩΤΙΣΣΑ', 'ΑΤΤΙΚΗ ΟΔΟΣ', 'ΜΑΡΟΥΣΙ', 'Railway'),
(48, 'ΣΤ.ΜΟΝΑΣΤΗΡΑΚΙ', 'ΠΛ.ΜΟΝΑΣΤΗΡΑΚΙΟΥ', 'ΑΘΗΝΑΙΩΝ', 'Railway'),
(49, 'ΣΤ.ΑΝΩ ΠΑΤΗΣΙΑ', 'Λ.ΙΩΝΙΑΣ', 'ΑΝΩ ΠΑΤΗΣΙΑ', 'Railway');

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
-- Table structure for table `simpleuser`
--

CREATE TABLE `simpleuser` (
  `username` varchar(32) NOT NULL,
  `password` int(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `surname` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
('maryxan', 12345, 'Mary', 'Xan', 'maryx@gmail.com'),
('mitarakis', 202, 'ioannis', 'mitrou', 'i@aa.gr');

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
(17, 3, 5, 'Νέοι Οικισμοί', 'Λιμάνι Πειραιά', 0, '7min', 'Walk', 'Walk'),
(18, 4, 1, '10η Καισαριανής', 'Νοσοκ.Ευαγγελισμός', 9, '10min', 'Bus', '224'),
(19, 4, 2, 'Νοσοκ.Ευαγγελισμός', 'Στ.Ευαγγελισμού', 0, '1min', 'Walk', 'Walk'),
(20, 4, 3, 'Στ.Ευαγγελισμού', 'Στ.Αεροδρομίου', 14, '38min', 'Subway', 'M3'),
(21, 4, 4, 'Στ.Αεροδρομίου', 'Αεροδρόμιο', 0, '15min', 'Walk', 'Walk'),
(22, 5, 1, '10η Καισαριανής', 'Νοσοκ.Ευαγγελισμός', 9, '10min', 'Bus', '224'),
(23, 5, 2, 'Νοσοκ.Ευαγγελισμός', 'Πύλη Οκτώ', 21, '1h 13min', 'Bus', 'X95'),
(24, 5, 3, 'Πύλη Οκτώ', 'Αεροδρόμιο', 0, '6min', 'Walk', 'Walk');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Ενιαίο', 'st', 1.40, '4.jpg'),
(2, 'Μειωμένο', 'red', 0.60, '4.jpg'),
(3, 'Μηνιαία κάρτα', 'mc', 30.00, '6.jpg');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for table `amea_stations`
--
ALTER TABLE `amea_stations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `simpleuser`
--
ALTER TABLE `simpleuser`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `steps`
--
ALTER TABLE `steps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amea_stations`
--
ALTER TABLE `amea_stations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `steps`
--
ALTER TABLE `steps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
