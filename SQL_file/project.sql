-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 04:22 AM
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
(1, 'Butter Chicken', '130', 'menu_1.jpg'),
(2, 'chicken Burger', '100', 'card-7.jpg'),
(3, 'Pulav', '120', 'menu_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`) VALUES
(38, 'STEPHY', 'stephy@gmail.com', 'stephy'),
(39, 'elina', 'elina123@gmail.com', 'elinaa'),
(40, 'sweety', 'sweety23@gmail.com', 'sweety1'),
(42, 'jinta', 'jinta123@gmail.com', 'jinta123'),
(44, 'anju', 'anju@gmail.com', 'an'),
(57, 'akku', 'akku@gmail.com', 'ak'),
(60, 'unni', 'unnipt@gmail.com', 'pt'),
(64, 'akhil', 'akhilas@gmail.com', 'as'),
(68, 'priya', 'priya123@gmail.com', '9554'),
(69, 'annu', 'annuty123@gmail.com', 'annu'),
(70, 'aron', 'aronj@gmail.com', 'js'),
(71, 'ashmyt', 'ashu23@gmail.com', '37693cfc748049e45d87b8c7d8b9aacd'),
(72, 'annmaria', 'mariat@gmail.com', '7e0d7f8a5d96c24ffcc840f31bce72b2'),
(73, 'betty', 'bettyt@gmail.com', '82b054bd83ffad9b6cf8bdb98ce3cc2f'),
(74, 'alanjo', 'alanjo@gmail.com', '02558a70324e7c4f269c69825450cec8'),
(75, 'vava', 'vava2@gmail.com', '1b23f8a4c97cc55f757ec2aae921f03d'),
(76, 'reshma', 'reshma@gmail.com', 'a66cfd3d771703664d7ba768b8a7f835'),
(77, 'admin', 'admin456@gmail.com', 'e00cf25ad42683b3df678c61f42c6bda');

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
(1, 'sulu george', 'sulu123@gmail.com', '0000-00-00', 12, 4);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
