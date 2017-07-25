-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2017 at 01:21 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chess`
--

-- --------------------------------------------------------

--
-- Table structure for table `chess`
--

CREATE TABLE IF NOT EXISTS `chess` (
`id` int(11) NOT NULL,
  `chessboard` varchar(300) NOT NULL DEFAULT 'br1,bk1,bb1,bq1,bl1,bb2,bk2,br2,bp1,bp2,bp3,bp4,bp5,bp6,bp7,bp8,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,wp1,wp2,wp3,wp4,wp5,wp6,wp7,wp8,wr1,wk1,wb1,wq1,wl1,wb2,wk2,wr2',
  `email_first` varchar(150) NOT NULL,
  `email_second` varchar(150) NOT NULL,
  `turn` int(11) NOT NULL DEFAULT '0',
  `dead_black` varchar(150) NOT NULL,
  `dead_white` varchar(150) NOT NULL,
  `pawn_black` varchar(150) NOT NULL DEFAULT '0,0,0,0,0,0,0,0',
  `pawn_white` varchar(150) NOT NULL DEFAULT '0,0,0,0,0,0,0,0',
  `winner` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chess`
--

INSERT INTO `chess` (`id`, `chessboard`, `email_first`, `email_second`, `turn`, `dead_black`, `dead_white`, `pawn_black`, `pawn_white`, `winner`) VALUES
(1, 'br1,bk1,bb1,,bl1,bb2,bk2,br2,bp1,bp2,bp3,bp4,,bp6,bp7,bp8,,,,,,wq1,,,,,,,,,,,,,,,,,,,,,,,wp5,,,,wp1,wp2,wp3,,,wp6,wp7,wp8,wr1,wk1,wb1,,wl1,wb2,wk2,wr2', '', '', 1, ',bp5,bq1', ',wp4', '0,0,0,0,0,1,0,0', '0,0,0,0,1,1,0,0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `email_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `online` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email_id`, `password`, `firstname`, `lastname`, `online`) VALUES
('kenillimbani8@gmail.com', 'kenil', 'kenil', 'limbani', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chess`
--
ALTER TABLE `chess`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chess`
--
ALTER TABLE `chess`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
