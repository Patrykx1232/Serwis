-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221031.25fe766a26
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 05:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serwis`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `disabled` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `disabled`) VALUES
(6, 'Serwis', 0),
(7, 'Naprawa', 0),
(8, 'Modyfikacje', 0),
(9, 'Hardware', 0),
(10, 'Software', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `id_reservation` int(11) NOT NULL,
  `comment_date` date NOT NULL,
  `content` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `id_reservation`, `comment_date`, `content`, `id_user`) VALUES
(7, 19, '2022-11-01', 'Super Firma pozdrawiam', 13),
(8, 20, '2022-11-02', 'Ekstra działa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rangetime`
--

CREATE TABLE `rangetime` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rangetime`
--

INSERT INTO `rangetime` (`id`, `name`) VALUES
(1, '8:00 - 9:00'),
(2, '9:00 - 10:00'),
(3, '10:00 - 11:00'),
(4, '11:00 - 12:00'),
(5, '12:00 - 13:00'),
(6, '13:00 - 14:00'),
(7, '14:00 - 15:00'),
(8, '15:00 - 16:00'),
(9, '16:00 - 17:00');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `reservation_date` date NOT NULL,
  `phone` text NOT NULL,
  `rangetime` int(11) NOT NULL,
  `model` text NOT NULL,
  `serial` text NOT NULL,
  `content` text NOT NULL,
  `category` int(11) NOT NULL,
  `client` int(11) NOT NULL,
  `end` int(11) NOT NULL,
  `accept` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `reservation_date`, `phone`, `rangetime`, `model`, `serial`, `content`, `category`, `client`, `end`, `accept`) VALUES
(28, '2023-05-02', '514-211-451', 1, 'PackardBell', 'P-gdsas-PSJE-332i', '   Odzyskiwanie danych', 9, 0, 0, 1),
(26, '2023-04-12', '123-456-111', 8, 'HP', 'As-2023fdg-ooop-22', 'Laptop nie włącza się', 7, 0, 0, 1),
(27, '2023-04-20', '151-511-684', 3, 'Lenovo', 'LE-aa-a123-521211231', '   Uszkodzona matryca', 7, 0, 0, 1),
(23, '2023-04-12', '604-322-152', 4, 'HP', 'HP-21341112414P', '   Pogryziony przez psa', 7, 0, 0, 1),
(29, '2023-03-05', '666333444', 4, 'Asus', 'As-2023fdg-ooop-22', 'Zamulony komputer', 6, 2, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `id_reservation` int(11) NOT NULL,
  `hours` float NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `id_reservation`, `hours`, `description`, `price`) VALUES
(23, 23, 6, 'Odzyskanie działających komponentów', 650),
(22, 26, 3, 'Formatowanie dysku', 300),
(24, 29, 3, 'Czyszczenie - odkurzanie wnętrza', 120),
(25, 28, 3, 'Odzyskanie danych', 80);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `phone` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `status`, `type`, `phone`) VALUES
(1, 'Jan Kowalski', 'jkowalski', 'c2d9e5b06fcd726922e81b230144cc7390c7898d', 1, 1, '533555333'),
(2, 'Paweł Nowak', 'pnowak', '86c16a459ecf39fd76a8e750f9d5074c4722f22b', 1, 0, '533444222'),
(13, 'Administrator', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1, '1477'),
(23, 'robert kubika', 'robert', 'robert123', 1, 0, '322342234324'),
(20, 'Adam miałczyński', 'adam', '8bb8435a9f02f133548ce213e689442e969cbb79', 1, 0, '7728-234-222'),
(24, 'Patryk Nowy', 'Patryk', '1qazZAQ!', 1, 0, 'patrykCX@o2.pl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rangetime`
--
ALTER TABLE `rangetime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rangetime`
--
ALTER TABLE `rangetime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
