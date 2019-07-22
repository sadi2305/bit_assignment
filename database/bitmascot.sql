-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 22, 2019 at 06:26 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitmascot`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `firstname`, `lastname`, `address`, `phone`, `email`, `birthdate`) VALUES
(3, 'Rajib', 'Ahmed', 'Elephant Road', 1795454582, 'ramin@gmail.com', '2019-07-19'),
(4, 'afshana', 'joti', 'baridhara', 1795454582, 'joti@gmail.com', '2019-07-09'),
(5, 'saiduzzaman', 'sadi', '1/b green road', 1795805945, 'sadiidas2305@gmail.com', '1996-01-05'),
(6, 'anu', 'radha', 'baridhara', 1795805945, 'anu@gmail.com', '2019-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bday` date NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `address`, `phone`, `email`, `bday`, `password`) VALUES
(1, 'saiduzzaman', 'sadi', '1/b green road', 1795805945, 'sadiidas2305@gmail.com', '2019-07-09', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'anu', 'anu@gmail.com', '168/3 green corner', 1795805945, 'anu@gmail.com', '2019-07-12', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'afshana', 'joti', 'baridhara', 1795805945, 'joti@gmail.com', '2019-07-15', '86489203d277ec49c3ef113782de8523'),
(4, 'lima', 'mumu', 'baridhara', 1795805945, 'lima@gmail.com', '2019-07-09', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'raymond', 'redington', 'mayami', 1236547895, 'ray@gmail.com', '2019-07-05', '0af70b66089e21f07ac466921182e4d5'),
(6, 'Elezabeth', 'Keen', 'Moscow', 1795805945, 'keen@gmail.com', '2019-07-08', 'c8837b23ff8aaa8a2dde915473ce0991');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
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
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
