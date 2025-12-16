-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 16.12.2025 klo 10:51
-- Palvelimen versio: 5.7.11
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uutiskortti`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `kategoria`
--

CREATE TABLE `kategoria` (
  `id` int(11) NOT NULL,
  `nimi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `kategoria`
--

INSERT INTO `kategoria` (`id`, `nimi`) VALUES
(1, 'Urheilu');

-- --------------------------------------------------------

--
-- Rakenne taululle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastlogin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `lastlogin`) VALUES
(1, 'root', '$2y$10$Q2kU/WWJQ1kcXMH8IqfrjuYOd/jXHPq0VOvbTv259cfOnrIGGN0/.', '');

-- --------------------------------------------------------

--
-- Rakenne taululle `uutinen`
--

CREATE TABLE `uutinen` (
  `id` int(11) NOT NULL,
  `otsikko` varchar(255) NOT NULL,
  `teksti` varchar(5000) NOT NULL,
  `kuva` varchar(500) NOT NULL,
  `kategoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `uutinen`
--

INSERT INTO `uutinen` (`id`, `otsikko`, `teksti`, `kuva`, `kategoria`) VALUES
(12, 'Hei', 'he', 'images/2914429.jpg', '3'),
(13, 'he', 'Hei, maailma!', 'images/6752625.jpg', '3'),
(14, '132', '1', 'images/6209717.jpg', '3'),
(15, '1', '1', 'images/7402344.jpg', '3'),
(16, '1321', '1', 'images/622864.png', '3'),
(17, '1', '1', 'images/9507142.jpg', '3'),
(18, '3', '3', 'images/5432129.jpg', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategoria`
--
ALTER TABLE `kategoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uutinen`
--
ALTER TABLE `uutinen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategoria` (`kategoria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategoria`
--
ALTER TABLE `kategoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `uutinen`
--
ALTER TABLE `uutinen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
