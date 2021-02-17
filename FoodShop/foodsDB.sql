-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 15, 2021 at 12:47 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodsDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `tel` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `tel`, `email`, `address`) VALUES
(1, 'charbel Atallah', '0737183032', 'chappa_atallah@hotmail.com', 'svampstigen 999'),
(3, 'Isabell Mouselli', '0778990504', 'tigervslejon@hotmail.com', 'Lejon vägen 666');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `food_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8_swedish_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_swedish_ci DEFAULT 'no-poster.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`food_id`, `title`, `price`, `description`, `image`) VALUES
(1, 'Napoli Pizza', 79, 'Tomatsås, ost, mozzarellaost, färska tomater, färsk vitlök, kycklingfilé, ruccolasallad och bearnaisesås.', 'Napolipizza.jpg'),
(2, 'Milan Pizza', 89, 'Tomatsås, ost, tomat, basilika, sujuc, oliver, ruccola. ', 'Milanpizza.jpg'),
(3, 'Cheese burger', 70, 'En burgare fylld av smak och ost. Perfekt för den hungriga.', 'Cheeseburger.jpg'),
(4, 'Glaceburger', 110, 'En burgare gjord av högrev. Denna burgare är inte till den klena. ', 'Glaceburger.jpg'),
(5, 'Pasta Alfredo', 110, 'En krämig och fullspäckad pasta för dig som är ute efter något extra till middag.', 'Pastaalfredo.jpg'),
(6, 'Pasta Carbonara', 99, 'Vår mest sålda pasta för den som förtär pasta alldagligt. ', 'Pastacarbonara.jpg'),
(7, 'Grekisk Sallad', 79, 'Få känslan av medelhavet rakt framför dig. Här upplevs allt i en rörande blandning mellan sol, vind och vatten. ', 'Grekisksallad.jpeg'),
(8, 'Fetaost Sallad', 89, 'För dig som är lite mer känslig för kött och tung mat, finns denna specialitet att beställa.', 'Fetaostsallad.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `order_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `food_id`, `order_date`) VALUES
(6, 1, 5, '2021-02-15 13:06:55'),
(7, 1, 3, '2021-02-15 13:06:55'),
(8, 1, 5, '2021-02-15 13:44:41'),
(9, 1, 3, '2021-02-15 13:44:41'),
(10, 3, 6, '2021-02-15 13:45:04'),
(11, 3, 7, '2021-02-15 13:45:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `film_ID` (`food_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`food_id`) REFERENCES `foods` (`food_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
