-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 27, 2023 at 03:58 PM
-- Server version: 5.6.49-log
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
-- Database: `startwithus`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`) VALUES
(2, 'ZOUK Unisex Black Floral Printed Laptop Backpacks for Office, College and Travel| Fits upto 15.2', 1998, '1.jpg'),
(4, 'Artistix Onyx Anti Theft 15.6 inch Laptop cum Travel Backpack, Black (32 Litre, 46 cm) without charging', 999, '2.jpg'),
(6, 'Artistix Onyx Anti Theft 15.6 inch Laptop cum Travel Backpack, Black (32 Litre, 46 cm) with charging', 1499, '3.jpg'),
(9, 'SAF Preety Floral Flower and Leaf in Cone Pot 3 Piece UV Textured Multi-Effect Self adheshive Painting 17 Inch X 17 Inch SANFHX141,Multicolour', 189, '31cYnCfsdOL._SY300_SX300_QL70_FMwebp_.webp'),
(10, 'Cello Medico Small First Aid Box, White, Plastic, Rectangular', 165, '5.webp'),
(12, 'JDX Cushions | Hotel Quality Premium Fibre Sofa Cushions Set of 5 | Cushion 16 inch x 16 inch | Sofa Pillow, Cushion, Cushions for Sofa', 1000, '51y0sFipvNL._SX300_SY300_QL70_FMwebp_.webp');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `name`, `phone`, `address`) VALUES
(1, 'test@gmail.com', '123', 'test', '99887', 'test address');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
