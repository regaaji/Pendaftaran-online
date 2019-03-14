-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2018 at 01:58 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pak_ivan`
--

-- --------------------------------------------------------

--
-- Table structure for table `pak_ivan`
--

CREATE TABLE `pak_ivan` (
  `ID` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nis` int(10) NOT NULL,
  `ortu` varchar(100) NOT NULL,
  `sekolah` varchar(100) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pak_ivan`
--

INSERT INTO `pak_ivan` (`ID`, `nama`, `nis`, `ortu`, `sekolah`, `kelamin`, `tanggal`, `alamat`) VALUES
(9, 'syahru', 1234, 'sujasmin', 'mtsn model', 'laki-laki', 'dec 12, 2018', 'karangan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pak_ivan`
--
ALTER TABLE `pak_ivan`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pak_ivan`
--
ALTER TABLE `pak_ivan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
