-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 30, 2020 at 05:48 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electronic_gadgets`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Shubham Gupta', 'shubhgupt@gmail.com', 'I want to ask that after ordering a product in how many days it will arrive?');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1, 'Gold iPhone Xs', 95000),
(2, 'Motorola Moto Z3', 28600),
(3, 'Samsung Galaxy A20', 14500),
(4, 'MacBook Air 2020', 86900),
(5, 'HP spectre x360', 130000),
(6, 'DELL Inspiron', 61490),
(7, 'Apple Watch Series 5', 49900),
(8, 'Samsung Galaxy Watch Active 2', 24990),
(9, 'Skagen Falster 3', 19995);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `coupon` enum('WLCM10') DEFAULT NULL,
  `token` varchar(11) DEFAULT NULL,
  `token_expire` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`, `coupon`, `token`, `token_expire`) VALUES
(1, 'Shubham Gupta', 'shubhgupt932@gmail.com', '97a2f8171d1d90c639869eac9bb53c94', 9109071454, 'Bhopal', 'H.NO.738 Shiv Nagar Colony Bhopal, M.P.', NULL, 'wn32he4xjh', '2020-06-29 14:20:43'),
(2, 'Sonam Gupta', 'sonamgupta654@gmail.com', 'cc03a2b33b3a6cb0c1f039c758ea6997', 7697679673, 'Bhopal', 'Shiv nagar Colony, Bhopal M.P.', NULL, '', '0000-00-00 00:00:00'),
(4, 'Pankaj giri', 'pankaj@gmail.com', 'd7dde307674c5d3990a676537c9c1f4c', 9876543210, 'Bhopal', 'Sajapur,Bhopal M.P.', NULL, '', NULL),
(5, 'Adarsh Raikwar', 'adarsh123@gmail.com', '0dd12c49a641b68f049ddecdf15b2e00', 9685396954, 'Bhopal', 'Sagar LandMark, Bhopal, M.P.', NULL, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_products`
--

DROP TABLE IF EXISTS `users_products`;
CREATE TABLE IF NOT EXISTS `users_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` enum('Confirmed','Added to Cart') NOT NULL,
  `purchase_time` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_products`
--

INSERT INTO `users_products` (`id`, `user_id`, `product_id`, `status`, `purchase_time`) VALUES
(3, 1, 5, 'Confirmed', '2020-06-28 02:36:36'),
(9, 2, 2, 'Confirmed', '2020-06-28 16:04:02'),
(28, 1, 2, 'Added to Cart', '2020-06-29 16:33:17'),
(34, 4, 2, 'Confirmed', '2020-06-30 03:01:43'),
(36, 4, 2, 'Added to Cart', '2020-06-30 03:14:08'),
(39, 5, 4, 'Confirmed', '2020-06-30 05:38:26'),
(40, 5, 3, 'Added to Cart', '2020-06-30 05:41:10');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_products`
--
ALTER TABLE `users_products`
  ADD CONSTRAINT `users_products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
