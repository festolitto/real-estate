-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2019 at 03:45 PM
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
  `location` varchar(50) DEFAULT NULL,
  `houses` int(30) DEFAULT NULL,
  `price` varchar(30) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `photo1` blob,
  `photo2` blob,
  `photo3` blob,
  `occupied` int(10) DEFAULT '0',
  `landlord` varchar(30) DEFAULT NULL,
  `apstatus` varchar(30) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apartment`
--

INSERT INTO `apartment` (`apartmentid`, `apartmentname`, `location`, `houses`, `price`, `type`, `photo1`, `photo2`, `photo3`, `occupied`, `landlord`, `apstatus`) VALUES
(44, 'Future Leaders', 'KM', 3, '8900', 'Bed Sitter', 0x686f6d65312e6a7067, 0x686f6d65322e6a7067, 0x736c69646572696d616765382e6a7067, 3, '12345678', 'active'),
(45, 'Steph Tower', 'KM', 400, '12000', 'Two Bedroom', 0x686f6d65342e6a7067, 0x736c69646572696d616765352e6a7067, 0x736c69646572696d616765392e6a7067, 3, '33232725', 'active'),
(46, 'Winners', 'Kahawa Sukari', 150, '15000', 'One Bedroom', 0x696d616765322e6a7067, 0x736c69646572696d61676531302e6a7067, 0x696d616765312e6a7067, 2, '55555555', 'active'),
(47, 'Cadva', 'KM', 120, '7800', 'Single', 0x736c69646572696d616765312e6a7067, 0x736c69646572696d616765372e6a7067, 0x736c69646572696d616765342e6a7067, 10, '33232740', 'active'),
(48, 'Hupa', 'Wendani', 320, '9000', 'Bed Sitter', 0x686f6d332e6a7067, 0x736c69646572696d616765382e6a7067, 0x736c69646572696d61676531302e6a7067, 1, '32862665', 'active'),
(49, 'Generation', 'Roysambu', 40, '4500', 'Single', 0x696d616765332e6a7067, 0x686f7573652e6a7067, 0x736c69646572696d61676531312e6a7067, 1, '33232729', 'active'),
(50, 'Ebenezer', 'KM', 120, '13000', 'Single', 0x686f6d65382e706e67, 0x696d67332e6a706567, 0x696d67362e6a706567, 0, '12345678', 'active'),
(51, 'Marutti Heights', 'Langata', 50, '40000', 'Two Bedroom', 0x696d67342e6a706567, 0x696d67322e6a706567, 0x696d67332e6a706567, 0, '33202020', 'active'),
(52, 'Villa', 'Imara', 300, '85000', 'One Bedroom', 0x696d616765362e6a7067, 0x736c69646572696d616765382e6a7067, 0x696d67322e6a706567, 1, '33202021', 'active'),
(53, 'Peniel', 'KM', 30, '7500', 'Single', 0x686f757365352e6a7067, 0x736c69646572696d616765362e6a7067, 0x736c69646572696d616765352e6a7067, 0, '33232020', 'active'),
(54, 'Seniors', 'Ruiru', 120, '12000', 'One Bedroom', 0x696d61676531302e6a7067, 0x696d67362e6a706567, 0x696d67352e6a706567, 1, '33232021', 'active'),
(55, 'LifeStyle', 'Kahawa Wendani', 60, '24000', 'Two Bedroom', 0x696d616765372e6a7067, 0x696d67352e6a706567, 0x696d67322e6a706567, 0, '33232022', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(30) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `phone`, `email`, `message`, `status`) VALUES
(3, 'Sidney', 'Rono', '0709876354', 'sydney@gmail.com', 'Please cal', 'Seen'),
(4, 'Mercy', 'Sigey', '0708957685', 'mercy@gmail.com', 'I have a problem registering as a tenant. Please assist.', 'Seen'),
(5, 'Dan', 'Ambura', '078968578', 'danambura@gmail.com', 'I am a tenant and I a have a problem updating my apartment details. Please assist.', 'Seen'),
(6, 'Mercy', 'Sigey', '0708957685', 'mercy@gmail.com', 'I have a problem registering as a tenant. Please assist.', 'Seen'),
(7, 'Mercy', 'Sigey', '0708957685', 'mercy@gmail.com', 'I have a problem registering as a tenant. Please assist.', 'Seen'),
(8, 'Mercy', 'Sigey', '0708957685', 'mercy@gmail.com', 'I have a problem registering as a tenant. Please assist.', 'Seen'),
(9, 'Mercy', 'Sigey', '0708957685', 'mercy@gmail.com', 'I have a problem registering as a tenant. Please assist.', 'Seen'),
(10, 'ficn', 'gideon', '0728071097', 'festolitto@gmail.com', 'gd,bd b,b c cbf b', 'Seen'),
(11, 'Fess', 'Mutai', '0789567984', 'sammie@gmail.com', 'hgggg', 'Seen');

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
('12345678', 'gideon', 'kirui', '546787978', 'landlordfuture@gmail.com', '12345'),
('32862665', 'Denis', 'Cheruiyot', '07896789', 'landlordhuba@gmail.com', '12345'),
('33202020', 'Daisy', 'Limo', '0708976362', 'landlordmarutti@gmail.com', '12345'),
('33202021', 'Limo', 'Raph', '0704010956', 'landlordvilla@gmail.com', '12345'),
('33232020', 'White', 'Harry', '0708030984', 'landlordpeniel@gmail.com', '12345'),
('33232021', 'Mercy', 'Wambui', '0704010956', 'landlordseniors@gmail.com', '12345'),
('33232022', 'Brown', 'Davis', '070293876', 'landlordlifestyle@gmail.com', '12345'),
('33232725', 'Fess', 'Mutai', '0789567984', 'landlordsteph@gmail.com', '12345'),
('33232729', 'Faith', 'Chirchir', '0708957689', 'landlordgeneration@gmail.com', '12345'),
('33232740', 'Sussan', 'Mureithi', '0789567980', 'landlordcadva@gmail.com', '12345'),
('33232741', 'Mercy', 'chela', '0789567982', 'chela@gmail.com', '12345'),
('3346676890', 'Peter', 'Wangari', '0719222456', 'peter@gmail.com', '11111111'),
('4567890', 'karwega', 'karwega', '0789567980', 'karwega@gmail.com', '12345'),
('55555555', 'njoroge', 'harrison', '0707814177', 'landlordwinners@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(30) NOT NULL,
  `customerid` varchar(30) DEFAULT NULL,
  `apartmentid` varchar(30) DEFAULT NULL,
  `roomtype` varchar(30) DEFAULT NULL,
  `bookingdate` datetime DEFAULT NULL,
  `datein` date DEFAULT NULL,
  `paymentmode` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `checkoutdate` date DEFAULT NULL,
  `checkindate` date DEFAULT NULL,
  `commitment` varchar(30) DEFAULT 'NULL',
  `transactioncode` varchar(30) DEFAULT NULL,
  `allocationdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `customerid`, `apartmentid`, `roomtype`, `bookingdate`, `datein`, `paymentmode`, `status`, `checkoutdate`, `checkindate`, `commitment`, `transactioncode`, `allocationdate`) VALUES
(364, '33232725', '44', 'Bed Sitter', '2019-03-14 15:44:56', '2019-03-15', 'M-PESA', 'timedout', '2019-03-14', '2019-03-14', '8900', 'TXNQ001', NULL),
(365, '33232725', '44', 'Bed Sitter', '2019-03-14 15:48:49', '2019-03-14', 'M-PESA', 'timedout', '2019-03-14', '2019-03-14', '8900', 'TXNQ001', NULL),
(366, '33232725', '44', 'Bed Sitter', '2019-03-14 15:52:24', '2019-03-14', 'M-PESA', 'timedout', '2019-03-14', '2019-03-14', '8900', 'TXNQ001', NULL),
(367, '33232725', '44', 'Bed Sitter', '2019-03-14 15:53:14', '2019-03-14', 'M-PESA', 'timedout', '2019-03-15', '2019-03-15', '8900', 'TXNQ001', NULL),
(368, '33232725', '44', 'Bed Sitter', '2019-03-14 15:53:36', '2019-03-14', 'M-PESA', 'timedout', '2019-03-15', '2019-03-15', '8900', 'TXNQ001', '2019-03-15 00:00:00'),
(369, '33232725', '45', 'Bed Sitter', '2019-03-14 15:53:52', '2019-03-14', 'M-PESA', 'timedout', '0000-00-00', '0000-00-00', '8900', 'TXNQ001', NULL),
(370, '33232725', '45', 'Two Bedroom', '2019-03-14 16:01:39', '2019-03-14', 'M-PESA', 'timedout', '0000-00-00', '2019-03-15', '8900', 'TXNQ001', NULL),
(371, '33232725', '45', 'Two Bedroom', '2019-03-14 16:04:35', '2019-03-14', 'M-PESA', 'timedout', '0000-00-00', '2019-03-15', '8900', 'TXNQ001', NULL),
(372, '33232725', '45', 'Two Bedroom', '2019-03-14 16:05:10', '2019-03-14', 'M-PESA', 'timedout', '0000-00-00', '2019-03-15', '8900', 'TXNQ001', NULL),
(373, '33232725', '46', 'One Bedroom', '2019-03-14 16:11:59', '2019-03-14', 'M-PESA', 'allocated', '0000-00-00', '0000-00-00', '8900', 'TXNQ001', NULL),
(374, '33232725', '47', 'Single', '2019-03-14 16:26:25', '2019-03-14', 'M-PESA', 'checkedin', '0000-00-00', '2019-03-14', '8900', 'TXNQ001', NULL),
(375, '33232751', '47', 'Single', '2019-03-14 16:27:38', '2019-03-14', 'M-PESA', 'checkedin', '0000-00-00', '2019-03-14', '7800', 'TXNQ001', NULL),
(376, '12345678', '47', 'Single', '2019-03-14 16:28:12', '2019-03-14', 'M-PESA', 'checkedout', '2019-03-14', '2019-03-14', '7800', 'TXNQ001', NULL),
(377, '33232725', '47', 'Single', '2019-03-14 16:28:50', '2019-03-14', 'M-PESA', 'checkedin', '0000-00-00', '2019-03-14', '8900', 'TXNQ001', NULL),
(378, '33232744', '47', 'Single', '2019-03-14 16:29:30', '2019-03-14', 'M-PESA', 'checkedin', '0000-00-00', '2019-03-14', '7800', 'TXNQ001', NULL),
(379, '34165226', '47', 'Single', '2019-03-14 16:30:07', '2019-03-14', 'M-PESA', 'checkedin', '0000-00-00', '2019-03-14', '7800', 'TXNQ001', NULL),
(380, '33232750', '47', 'Single', '2019-03-14 16:30:43', '2019-03-14', 'M-PESA', 'checkedin', '0000-00-00', '2019-03-14', '7800', 'TXNQ001', NULL),
(381, '123456789', '47', 'Single', '2019-03-14 16:31:20', '2019-03-15', 'M-PESA', 'checkedout', '2019-03-14', '2019-03-14', '7800', 'TXNQ001', NULL),
(382, '33232734', '47', 'Single', '2019-03-14 16:31:58', '2019-03-21', 'M-PESA', 'checkedin', '0000-00-00', '2019-03-14', '7800', 'TXNQ001', NULL),
(383, '33232735', '47', 'Single', '2019-03-14 16:33:37', '2019-03-15', 'M-PESA', 'checkedin', '0000-00-00', '2019-03-14', '7800', 'TXNQ001', NULL),
(384, '33232735', '47', 'Single', '2019-03-14 16:33:56', '2019-03-16', 'M-PESA', 'allocated', '0000-00-00', '0000-00-00', '7800', 'TXNQ001', NULL),
(385, '33232722', '47', 'Single', '2019-03-14 16:37:45', '2019-03-16', 'M-PESA', 'allocated', '0000-00-00', '0000-00-00', '7800', 'TXNQ001', NULL),
(386, '33232725', '45', 'Two Bedroom', '2019-03-14 17:43:43', '2019-03-14', 'M-PESA', 'timedout', '0000-00-00', '2019-03-15', NULL, 'TXNQ001', '2019-03-15 09:40:00'),
(387, '33232753', '44', 'Bed Sitter', '2019-03-14 19:29:35', '2019-03-14', 'M-PESA', 'timedout', '2019-03-15', '2019-03-15', '8900', 'TXNQ001', NULL),
(388, '33232753', '44', 'Bed Sitter', '2019-03-14 19:29:35', '2019-03-14', 'M-PESA', 'timedout', '0000-00-00', '2019-03-14', '8900', 'TXNQ001', NULL),
(389, '33232753', '44', 'Bed Sitter', '2019-03-14 19:32:53', '2019-03-14', 'M-PESA', 'checkedout', '0000-00-00', '2019-03-15', '8900', 'TXNQ001', '2019-03-15 09:32:10'),
(390, '33232705', '44', 'Bed Sitter', '2019-03-14 22:46:11', '2019-03-14', 'M-PESA', 'timedout', '2019-03-15', '2019-03-14', '8900', 'TXNQ001', NULL),
(391, '33232725', '46', 'One Bedroom', '2019-03-15 07:54:49', '2019-03-16', 'M-PESA', 'allocated', '0000-00-00', '0000-00-00', '8900', 'TXNQ001', NULL),
(392, '33232725', '49', 'Single', '2019-03-15 07:55:07', '2019-03-15', 'M-PESA', 'allocated', '0000-00-00', '0000-00-00', '8900', 'TXNQ001', NULL),
(393, '33232725', '48', 'Bed Sitter', '2019-03-15 07:55:32', '2019-03-15', 'M-PESA', 'allocated', '0000-00-00', '0000-00-00', '8900', 'TXNQ001', NULL),
(394, '33232705', '44', 'Bed Sitter', '2019-03-15 09:30:10', '2019-03-15', 'M-PESA', 'timedout', '0000-00-00', '0000-00-00', NULL, '', '2019-03-15 09:30:51'),
(395, '33232744', '44', 'Bed Sitter', '2019-03-15 10:06:53', '2019-03-15', 'M-PESA', 'timedout', '2019-03-15', '2019-03-15', '8900', 'TXNQ001', '0000-00-00 00:00:00'),
(396, '33232705', '44', 'Bed Sitter', '2019-03-15 10:07:42', '2019-03-15', 'M-PESA', 'timedout', '0000-00-00', '2019-03-15', '8900', 'TXNQ001', '0000-00-00 00:00:00'),
(397, '33232725', '44', 'Bed Sitter', '2019-03-15 10:08:20', '2019-03-15', 'M-PESA', 'timedout', '0000-00-00', '2019-03-15', '8900', 'TXNQ001', '0000-00-00 00:00:00'),
(398, '33232753', '44', 'Bed Sitter', '2019-03-15 10:09:05', '2019-03-16', 'M-PESA', 'timedout', '0000-00-00', '0000-00-00', NULL, '', '2019-03-15 10:16:03'),
(399, '12345678', '44', 'Bed Sitter', '2019-03-15 10:09:50', '2019-03-15', 'M-PESA', 'timedout', '0000-00-00', '0000-00-00', '', '', '0000-00-00 00:00:00'),
(400, '33232720', '44', 'Bed Sitter', '2019-03-15 10:27:55', '2019-02-06', 'M-PESA', 'timedout', '2019-03-15', '2019-03-15', '8900', 'TXNQ001', '0000-00-00 00:00:00'),
(401, '33232720', '44', 'Bed Sitter', '2019-03-15 10:30:18', '2019-03-14', 'M-PESA', 'timedout', '0000-00-00', '0000-00-00', NULL, '', '2019-03-15 10:36:21'),
(402, '33232720', '44', 'Bed Sitter', '2019-03-15 10:30:57', '2019-03-23', 'M-PESA', 'timedout', '0000-00-00', '0000-00-00', '', '', '0000-00-00 00:00:00'),
(403, '33232720', '45', 'Two Bedroom', '2019-03-15 10:39:51', '2019-03-20', 'M-PESA', 'allocated', '0000-00-00', '0000-00-00', '12000', 'TXNQ001', '0000-00-00 00:00:00'),
(404, '34165226', '44', 'Bed Sitter', '2019-03-15 11:25:46', '2019-03-15', 'M-PESA', 'checkedout', '2019-03-15', '2019-03-15', '8900', 'TXNQ001', '0000-00-00 00:00:00'),
(405, '33232705', '44', 'Bed Sitter', '2019-03-15 11:58:18', '2019-03-14', 'M-PESA', 'checkedout', '2019-03-15', '2019-03-15', '8900', 'TXNQ001', '0000-00-00 00:00:00'),
(406, '33232705', '44', 'Bed Sitter', '2019-03-15 12:13:03', '2019-03-14', 'M-PESA', 'allocated', '0000-00-00', '0000-00-00', '8900', 'TXNQ001', '0000-00-00 00:00:00'),
(407, '34165226', '44', 'Bed Sitter', '2019-03-15 12:13:33', '2019-03-15', 'M-PESA', 'allocated', '0000-00-00', '0000-00-00', '8900', 'TXNQ001', '0000-00-00 00:00:00'),
(408, '33232751', '44', 'Bed Sitter', '2019-03-15 12:15:02', '2019-03-16', 'M-PESA', 'allocated', '0000-00-00', '0000-00-00', '8900', 'TXNQ001', '0000-00-00 00:00:00'),
(409, '33232751', '44', 'Bed Sitter', '2019-03-15 12:15:40', '0000-00-00', 'M-PESA', 'waiting', '0000-00-00', '0000-00-00', '', '', '0000-00-00 00:00:00'),
(410, '33232751', '45', 'Two Bedroom', '2019-03-15 12:18:12', '2019-03-15', 'M-PESA', 'allocated', '0000-00-00', '0000-00-00', '12000', 'TXNQ001', '0000-00-00 00:00:00'),
(411, '33232725', '45', 'Two Bedroom', '2019-03-15 16:50:03', '2019-03-15', 'M-PESA', 'allocated', '0000-00-00', '0000-00-00', '12000', 'TXNQ001', '0000-00-00 00:00:00'),
(412, '33232725', '52', 'One Bedroom', '2019-03-15 16:50:26', '2019-03-16', 'M-PESA', 'allocated', '0000-00-00', '0000-00-00', '85000', 'TXNQ001', '0000-00-00 00:00:00'),
(413, '33232725', '54', 'One Bedroom', '2019-03-15 16:50:47', '2019-03-16', 'M-PESA', 'allocated', '0000-00-00', '0000-00-00', '12000', 'TXNQ001', '0000-00-00 00:00:00');

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
  `password` varchar(30) DEFAULT NULL,
  `transactioncode` varchar(30) DEFAULT 'TXN001'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`id`, `firstname`, `lastname`, `phone`, `username`, `password`, `transactioncode`) VALUES
('12345678', 'gideon', 'kirui', '0789567984', 'gideon@gmail.com', '12345', 'TXNQ001'),
('123456789', 'harrison', 'njoroge', '0734000890', 'harrion@gmail.com', '12345', 'TXNQ001'),
('30003000', 'Karwega', 'Alfred', '0730003000', 'akarwega@gmail.com', '12345', 'TXNQ001'),
('33232705', 'Peter', 'okiomeri', '071098678', 'okiomeri@gmail.com', '12345', 'TXNQ001'),
('33232720', 'Feso', 'Mutak', '0710222456', 'src@gmail.com', '123456', 'TXNQ001'),
('33232721', 'Daisy', 'Chepkemoi', '0789567984', 'daisy@gmail.com', '12345', 'TXNQ001'),
('33232722', 'Faith', 'Chepkorir', '0789567980', 'chepko@gmail.com', '12345', 'TXNQ001'),
('33232725', 'Fess', 'Mutai', '0789567984', 'kipkemoifestus@gmail.com', '12345', 'TXNQ001'),
('33232728', 'John', 'Jomah', '0789567984', 'john@gmail.com', '12345', 'TXNQ001'),
('33232731', 'Fess', 'Ochieng', '0789567984', 'festolitto@gmail.com', '12345', 'TXNQ001'),
('33232734', 'Fancy', 'Vera', '0789567980', 'fancy@gmail.com', '12345', 'TXNQ001'),
('33232735', 'Faith', 'Chepkoech', '0706590867', 'faith@gmail.com', '12345', 'TXNQ001'),
('33232744', 'Sammie', 'Domani', '0789567984', 'sammie@gmail.com', '12345', 'TXNQ001'),
('33232750', 'Harrison', 'njoroge', '0789567980', 'harrison@gmail.com', '12345', 'TXNQ001'),
('33232751', 'cynthia', 'Wambui', '0706590867', 'wambui@gmail.com', '12345', 'TXNQ001'),
('33232753', 'Anita', 'Tonui', '0708956743', 'anita@gmail.com', '12345', 'TXNQ001'),
('34165225', 'Faith', 'Chepkoech', '0706713590', 'faith@gmail.com', '12345', 'TXNQ001'),
('34165226', 'Vale', 'Neno', '0703098576', 'vale@gmail.com', '12345', 'TXNQ001'),
('67676767', 'ancent', 'kip', '079999999', 'ancent@gmail.com', '1234', 'TXNQ001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartment`
--
ALTER TABLE `apartment`
  ADD PRIMARY KEY (`apartmentid`),
  ADD KEY `landlord` (`landlord`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landlord`
--
ALTER TABLE `landlord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `customerid` (`customerid`);

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
  MODIFY `apartmentid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=414;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apartment`
--
ALTER TABLE `apartment`
  ADD CONSTRAINT `apartment_landlordfk` FOREIGN KEY (`landlord`) REFERENCES `landlord` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `order_tenant_fk` FOREIGN KEY (`customerid`) REFERENCES `tenant` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
