-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 26, 2017 at 02:12 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kommunalvalg`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `headline` varchar(255) NOT NULL COMMENT 'Overskrift',
  `kommentar` text NOT NULL COMMENT 'comment'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `headline`, `kommentar`) VALUES
(1, 'Camilla er en hat', ''),
(2, '', 'adadad');

-- --------------------------------------------------------

--
-- Table structure for table `politicians`
--

CREATE TABLE IF NOT EXISTS `politicians` (
  `id` int(11) NOT NULL COMMENT 'Primary key',
  `polname` varchar(255) NOT NULL COMMENT 'politician name',
  `party` varchar(255) NOT NULL COMMENT 'party',
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `politicians`
--

INSERT INTO `politicians` (`id`, `polname`, `party`, `url`) VALUES
(10, 'charmaine', 'enhedslisten', 'charmaine.php'),
(11, 'Camilla ', 'Dansk Folkeparti', 'camilla.php'),
(12, 'Tobias', 'Liberal Alliance', 'tobias.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `politicians`
--
ALTER TABLE `politicians`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key',AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `politicians`
--
ALTER TABLE `politicians`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary key',AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
