-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2020 at 06:27 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiger`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about_dsp` varchar(200) NOT NULL,
  `ed_year` varchar(5) NOT NULL,
  `ed_title` varchar(50) NOT NULL,
  `ed_percentage` int(5) NOT NULL,
  `about_photo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about_dsp`, `ed_year`, `ed_title`, `ed_percentage`, `about_photo`) VALUES
(2, 'how are you ', '2000', 'PHP', 50, '2.jpg'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt, quas quibusdam necessitatibus nesciunt ', '2020', 'Diploma of Computer', 80, '3.png');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `banner_title` varchar(10) NOT NULL,
  `banner_name` varchar(20) NOT NULL,
  `banner_dsp` varchar(200) NOT NULL,
  `banner_icon` varchar(80) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner_title`, `banner_name`, `banner_dsp`, `banner_icon`, `status`) VALUES
(5, 'Hasan ', 'i am Hasan', 'how r u', 'fa fa-bath', 1),
(6, 'Assalamuli', 'iam ArHasan', 'Welcome to our company ', 'fa fa-address-book-o', 0),
(7, 'Hello ', 'Aman', 'How are your', 'fa fa-bandcamp', 0);

-- --------------------------------------------------------

--
-- Table structure for table `clients_quotes`
--

CREATE TABLE `clients_quotes` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `client_dsp` varchar(200) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients_quotes`
--

INSERT INTO `clients_quotes` (`id`, `img`, `client_dsp`, `client_name`, `client_title`) VALUES
(1, '5e713b2c890cd8.00364724.jpg', 'its a good work', 'Aman', 'Head of dipartment'),
(3, '5e713c80100797.74864724.jpg', 'its grate to be work', 'saddik', 'Programmer');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_title` varchar(100) NOT NULL,
  `contact_desp` varchar(200) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `contact_name`, `contact_title`, `contact_desp`, `address`, `phone`, `email`) VALUES
(1, 'HI', 'Hasan', 'Welcome to my page', 'sylhet', '01768715949', 'arhasan@gmail.com'),
(2, 'Hello', 'Aman', 'Welcome to my page', 'Dhaka', '0172094949', 'aman@gmail.com'),
(7, 'HI', 'Hasan', 'Welcome to my page', 'sylhet', '01768715949', 'arhasan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `massages`
--

CREATE TABLE `massages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `massage` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `massages`
--

INSERT INTO `massages` (`id`, `name`, `email`, `massage`, `status`) VALUES
(3, 'nahid', 'nahid@gmail.com', 'gi', 2),
(4, 'nowshin', 'nowshin@gmail.com', 'hi', 2),
(5, 'nahima', 'nahima@gmail.com', 'hello', 1),
(6, 'nahima', 'Arhsasanw@gmail.com', 'HI', 2),
(7, 'Hasan vai', 'hasan@gmail.com', 'helloe vai', 1),
(8, 'jisjh', 'dfjk@gmai.com', 'omthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a gadsfskjf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `our_patner`
--

CREATE TABLE `our_patner` (
  `id` int(11) NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `our_patner`
--

INSERT INTO `our_patner` (`id`, `logo`) VALUES
(3, 'Array.jpg'),
(5, '5e70dfa3183359.19130163.jpg'),
(6, '5e70e17a778340.79412332.png'),
(7, '5e70e62e2f20f7.09373357.png'),
(8, '5e70e635aadba0.21773837.png'),
(9, '5e70e643de18d1.45859907.png'),
(10, '5e70e6bbd93792.70013770.jpg'),
(11, '5e70e6f1f41cf6.02937103.png');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `portfolio_cetagory` varchar(100) NOT NULL,
  `portfolio_name` varchar(50) NOT NULL,
  `portfolio_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `portfolio_cetagory`, `portfolio_name`, `portfolio_img`) VALUES
(3, 'Artical ', 'This is artical writing', '5e723491f1a8a5.54597330.jpg'),
(5, 'Background Remove', 'Hasan', '5e723e088c1578.81049137.png'),
(6, 'Smith', 'Fashion Design', '5e724400e1b952.53204639.png');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service_icon` varchar(25) NOT NULL,
  `service_title` varchar(100) NOT NULL,
  `service_desp` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_icon`, `service_title`, `service_desp`, `status`) VALUES
(1, 'fab fa-adobe', 'graphic design', 'Graphic design is the process of visual communication and problem-solving through the use of typography, photography, ', 1),
(2, 'fas fa-address-card', 'Address card', 'This is Address card', 1),
(3, 'fab fa-android', 'Android ', 'This is android icon', 0),
(4, 'fab fa-adobe', 'graphic design', 'Graphic design is the process of visual communication and problem-solving through the use of typography, photography, ', 0),
(5, 'fas fa-address-card', 'Address card', 'This is Address card', 1),
(6, 'fab fa-android', 'Android ', 'This is android icon', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `users_photo` varchar(60) NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `users_photo`, `role`) VALUES
(1, 'Hasan', 'hasan@gmail.com', '$2y$10$DK.GZdomm23UF8OHV6daXuKEvku0KgOYIsZKVV9.LvH7zHQKciagu', '1.jpg', 1),
(3, 'ArHasan', 'arhasan@gmail.com', '$2y$10$f4fsCpi.27YgSXkirSi9Je2/lwLg0czV8cRtiXS18qRSKzQa7mlDa', '3.jpg', 2),
(5, 'aman', 'aman@gmail.com', '$2y$10$RBE1r4aaa4S0RMX2DP.Yx.NzFaXgLpDHI.NVg29/PzzhIr1SF.qcK', '5.jpg', 3),
(6, 'jamil', 'jamil@gmai.com', '$2y$10$xbbTcpea/RcS/e89B0L5Se0RajhP0e2BJLdr0pBFEH2D.lilD5Hz6', '6.jpg', 0),
(7, 'tick', 'tick@gmail.com', '$2y$10$sAIW1G9DNfAvs1qHxXDF6uQMDoOrv.eBhOL2DOaKk1gMWH1BK0uHu', '7.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients_quotes`
--
ALTER TABLE `clients_quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `massages`
--
ALTER TABLE `massages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_patner`
--
ALTER TABLE `our_patner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `clients_quotes`
--
ALTER TABLE `clients_quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `massages`
--
ALTER TABLE `massages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `our_patner`
--
ALTER TABLE `our_patner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
