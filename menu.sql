-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 10:27 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `gerechten`
--

CREATE TABLE `gerechten` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gerechten`
--

INSERT INTO `gerechten` (`id`, `name`, `description`, `price`, `image`) VALUES
(1, 'Zalm tobiko', '3 stuks, rijst omhuld met zalm en als topping tobiko.', 4.8, './images/zalmtobiko.png'),
(2, 'Poké bowl zalm', 'Zalm met krab, komkommer, zeewier, sojabonen, avocado, zoete ei, maïs en rijst. Geserveerd met tobikosaus.', 13.8, './images/pokebowl_zalm.png'),
(3, 'Maki garnaal', '4 stuks, sushi gevuld met krokante garnalen en komkommer.', 5.5, './images/maki_garnaal.png'),
(4, 'Maki kip', '4 stuks, sushi gevuld met krokante kip en komkommer.', 5.5, './images/maki_kip.png'),
(5, 'Gefrituurde sushi', '3 stuks, gevuld met diverse soorten groenten en vis met unagi saus.', 5.75, './images/gefrituurde_sushi.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`) VALUES
(2, 'boleenders01', '12345678', 'Bo'),
(3, 'demi', '1234', ''),
(5, 'joey', '6969', ''),
(7, 'rutger', 'ouwe', 'Rutger'),
(8, 'user', '12345', 'User'),
(9, 'Boleenders', '1234', 'Bo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gerechten`
--
ALTER TABLE `gerechten`
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
-- AUTO_INCREMENT for table `gerechten`
--
ALTER TABLE `gerechten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
