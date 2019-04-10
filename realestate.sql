-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2019 at 08:04 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartment`
--

CREATE TABLE `apartment` (
  `apartmentid` int(30) NOT NULL,
  `apartmentname` varchar(30) DEFAULT NULL,
  `loc` varchar(30) DEFAULT NULL,
  `houses` varchar(30) DEFAULT NULL,
  `price` varchar(30) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `photo1` blob,
  `photo2` blob,
  `photo3` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apartment`
--

INSERT INTO `apartment` (`apartmentid`, `apartmentname`, `loc`, `houses`, `price`, `type`, `photo1`, `photo2`, `photo3`) VALUES
(3, 'Winners', 'KM', '50', '7000', 'Bed Sitter', 0x736c69646572696d61676531312e6a7067, '', ''),
(4, 'Cadva', 'KM', '90', '7000', 'One Bedroon', 0x736c69646572696d616765332e6a7067, '', ''),
(5, 'Future Leaders', 'KM', '70', '6000', 'Two Bedroon', 0x736c69646572696d61676531302e6a7067, '', ''),
(6, 'ebenezer', 'KM', '100', '10000', 'Bed Sitter', 0x736c69646572696d616765332e6a7067, '', ''),
(7, 'jamu', 'KM', '200', '9000', 'One Bedroon', 0x736c69646572696d616765312e6a7067, '', ''),
(8, 'Mary Johns', 'Kiunguro', '50', '5000', 'Bed Sitter', 0x736c69646572696d616765342e6a7067, '', ''),
(9, 'Seniors', 'Kahawa Sukari', '50', '4500', 'Single', 0x736c69646572696d616765382e6a7067, '', ''),
(10, 'Pethel', 'KM', '40', '5000', 'Bed Sitter', 0x736c69646572696d616765352e6a7067, '', ''),
(11, 'Kiwanja', 'KM Kiwanja', '60', '6000', 'Single', 0x736c69646572696d616765362e6a7067, '', ''),
(12, 'Jamcourt', 'Kiunguro', '50', '500', 'Bed Sitter', 0x736c69646572696d616765322e6a7067, '', ''),
(13, 'Nyayo', 'Kahawa Sukari', '80', '8000', 'Single', 0x736c69646572696d616765392e6a7067, '', ''),
(14, 'Steph Tower', 'Membley', '100', '8000', 'Bed Sitter', 0x736c69646572696d616765372e6a7067, 0x736c69646572696d616765352e6a7067, 0x736c69646572696d616765312e6a7067),
(15, 'Leaders', 'Kahawa Sukari', '120', '12000', 'Bed Sitter', 0x736c69646572696d616765322e6a7067, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `landlord`
--

CREATE TABLE `landlord` (
  `id` varchar(30) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `landlord`
--

INSERT INTO `landlord` (`id`, `firstname`, `lastname`, `phone`, `username`, `password`) VALUES
('33232725', 'Fess', 'Mutai', '0789567984', 'kipkemoifestus@gmail.com', '12345'),
('33232740', 'Sussan', 'Mureithi', '0789567980', 'sussan@gmail.com', '12345'),
('33232741', 'Mercy', 'chela', '0789567982', 'chela@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `id` varchar(30) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`id`, `firstname`, `lastname`, `phone`, `username`, `password`) VALUES
('33232705', 'Peter', 'okiomeri', '071098678', 'okiomeri@gmail.com', '12345'),
('33232721', 'Daisy', 'Chepkemoi', '0789567984', 'daisy@gmail.com', '12345'),
('33232722', 'Faith', 'Chepkorir', '0789567980', 'chepko@gmail.com', '12345'),
('33232725', 'Fess', 'Mutai', '0789567984', 'kipkemoifestus@gmail.com', '12345'),
('33232728', 'John', 'Jomah', '0789567984', 'john@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartment`
--
ALTER TABLE `apartment`
  ADD PRIMARY KEY (`apartmentid`);

--
-- Indexes for table `landlord`
--
ALTER TABLE `landlord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apartment`
--
ALTER TABLE `apartment`
  MODIFY `apartmentid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
