-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 07:33 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `price` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`) VALUES
(3, 'Pulav', '120', 'Pulao.jpg'),
(23, 'Halwa', '60', 'menu-6.jpg'),
(24, 'Fish Curry', '55', 'menu-2.jpg'),
(25, 'Samosa', '12', 'menu-6.jpg'),
(28, 'Idli', '10', 'menu-5.jpg'),
(35, 'Pav Bajji', 'Rs.12', 'Pulao.jpg'),
(36, 'hgj', '56', 'menu-5.jpg'),
(37, 'Pav Bajji', 'Rs.150', 'menu-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `status` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `status`, `role`) VALUES
(69, 'annu', 'annuty123@gmail.com', 'annu', '1', ''),
(70, 'aron', 'aronj@gmail.com', 'js', '1', ''),
(116, 'Achu', 'achuthomas@gmail.com', 'achu', '1', ''),
(118, ' nbnjmbk', 'achuthomas@gmail.com', 'Jin14Bas&', '0', ''),
(119, 'elina', 'elina12@gmail.com', 'Elina@12', '1', ''),
(121, 'ankitha', 'ankitha@gmail.com', 'Ankitha@123', '1', ''),
(124, 'Sulu', 'sulu123@gmail.com', 'Sulu#123', '1', ''),
(125, 'STEPHY', 'stephy02@gmail.com', 'Stephy@12', '0', ''),
(126, 'krishna', 'krishna12@gmail.com', 'krishna', '1', ''),
(127, 'Alan', 'alan@gmail.com', 'Alan@123', '1', ''),
(131, 'Amal', 'amal12@gmail.com', '123', '1', 'staff'),
(132, 'admin', 'admin12@gmail.com', 'Admin@12', '1', ''),
(133, 'Akhil', 'akhilas@gmail.com', 'Akhil#123', '1', 'customer'),
(134, 'Priya Thomas', 'priyat@gmail.com', 'PRIya@34', '1', 'customer'),
(135, 'sulu george', 'sulu123@gmail.com', 'sulu', '1', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `time` int(20) NOT NULL,
  `people` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`id`, `name`, `email`, `date`, `time`, `people`) VALUES
(1, 'sulu george', 'sulu123@gmail.com', '0000-00-00', 12, 4),
(10, 'Priya', 'priyat@gmail.com', '2021-12-15', 14, 3),
(11, 'Jayalekshmi', 'jayalekshmi@gmail.com', '2021-12-24', 14, 4),
(12, 'stephy', 'stephy02@gmail.com', '2021-12-15', 22, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
