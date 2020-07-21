-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 26, 2020 at 04:38 PM
-- Server version: 5.7.28
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'One Plus 8', 41999),
(2, 'One Plus 8 Pro', 54999),
(3, 'iPhone XS Max', 69900),
(4, 'iPhone XR', 52500),
(5, 'Mi 10, Twilight Grey', 50999),
(6, 'Google Pixel 4 XL', 83900),
(7, 'Samsung Galaxy S20 Plus', 77999),
(8, 'Asus ROG Phone 2', 39999),
(9, 'Huawei P20 Pro', 59990),
(10, 'Xiaomi Mi Note 10', 83900),
(11, 'Oppo Find X2 Pro', 51190),
(12, 'Sony Xperia 1 II', 54999);

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
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Ajay Sarkar', 'ajaysarkar@xyz.com', '12345', '9039404939', 'Delhi', 'Vijay Nagar, Delhi'),
(2, 'Amin Hussain', 'amin123@xyz.com', 'amin123', '8493402748', 'Delhi', 'Kashmere Gate, Delhi'),
(3, 'Garima Tondon', 'gt123@xyz.com', 'gt123', '8392390430', 'Delhi', 'Shalimar Bagh, Delhi'),
(4, 'Hina Khan', 'Hina123@xyz.com', 'Hina123', '8944748493', 'Delhi', 'Tilak Nagar, Delhi'),
(5, 'Kriti Arora', 'kriti145@xyz.com', '12345', '9947384720', 'Kota', 'Bajrang Nagar, Kota, Rajasthan'),
(6, 'Mahi Sahu', 'mahisahu@xyz.com', 'mahi@sahu', '9037248504', 'Bhiwani', 'DC Colony, Bhiwani, Haryana'),
(7, 'Rahul Roy', 'Rahulroy@xyz.com', 'rahulroy', '9037492746', 'Delhi ', 'Jhandewalan, Delhi'),
(8, 'Pranjal Patel', 'pranjal123@xyz.com', 'pranjal123', '8849364920', 'Jaipur', 'Jaipur, Rajasthan'),
(9, 'Wazid Khan', 'wazi123@xyz.com', 'wazi123', '9046383490', 'Jodhpur', 'SardarPura, Jodhpur, Rajasthan'),
(10, 'Romit Rony', 'romitrony123@xyz.com', 'trony123', '7383940357', 'Nalhatti', 'Nalhatti, West Bengal'),
(11, 'Mahima Patel', 'mahip123@xyz.com', 'mahip123', '9047283648', 'Delhi', 'Karol Bagh'),
(12, 'Jannat Ahuja', 'jannat1@xyz.com', 'jannat1', '9047584739', 'Manali', 'Mall Road, Manali, Himachal Pradesh'),
(13, 'Ashish Joy', 'ashishjoy123@xyz.com', 'ashish1', '9047648290', 'Delhi', 'Mukherjee Nagar, Delhi'),
(14, 'Mahima Patel', 'mahimapatel@xyz.com', 'mahima1122', '9079758893', 'Delhi', 'Kashmere Gate, Delhi, 110009'),
(15, 'Prashant K', 'pk139@xyz.com', 'pk1357', '9046589632', 'Mumbai', 'Prabhadevi, Mumbai, Maharashtra');

-- --------------------------------------------------------

--
-- Table structure for table `user_items`
--

DROP TABLE IF EXISTS `user_items`;
CREATE TABLE IF NOT EXISTS `user_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `item_id` (`item_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_items`
--

INSERT INTO `user_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(1, 2, 7, 'Added to cart'),
(2, 4, 1, 'Confirmed'),
(3, 3, 1, 'Confirmed'),
(4, 10, 7, 'Confirmed'),
(5, 2, 4, 'Added to cart'),
(6, 9, 8, 'Confirmed'),
(7, 12, 5, 'Confirmed'),
(9, 7, 11, 'Added to cart'),
(10, 8, 2, 'Confirmed'),
(11, 8, 6, 'Added to cart'),
(12, 6, 1, 'Confirmed'),
(13, 11, 8, 'Confirmed'),
(14, 5, 10, 'Confirmed'),
(15, 10, 6, 'Confirmed'),
(16, 4, 11, 'Added to cart'),
(17, 10, 10, 'Confirmed'),
(18, 3, 6, 'Confirmed'),
(19, 9, 4, 'Added to cart'),
(24, 6, 5, 'Added to cart'),
(36, 15, 2, 'Confirmed'),
(37, 15, 1, 'Confirmed'),
(40, 15, 2, 'Confirmed'),
(43, 5, 12, 'Added to cart'),
(44, 5, 5, 'Added to cart'),
(45, 5, 1, 'Added to cart');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_items`
--
ALTER TABLE `user_items`
  ADD CONSTRAINT `user_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
