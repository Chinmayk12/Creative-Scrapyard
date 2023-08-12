-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 05:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scrap1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `name`, `mobile_no`, `email_id`, `password`) VALUES
(1, 'chinmay Karodpati', '6563463883', 'chinmayk234@gmail.com @gmail.com', 'chinmay123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `totalprice` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `qty`, `totalprice`, `user_id`) VALUES
(49, 19, 1, 2000, 4),
(50, 21, 1, 200, 4),
(51, 20, 3, 1500, 4),
(61, 21, 1, 200, 1),
(62, 20, 1, 500, 1),
(63, 19, 1, 2000, 1),
(65, 26, 5, 12500, 6);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `user_id`) VALUES
(1, 'manoj mahajan', 'manojmahajan1234@gmail.com', 'demo', 'demo', 1),
(2, 'manoj totalprice', 'manojmahajan1111@gmail.com', 'manoj', 'manoj', 1),
(3, 'Siddhesh Avinash Chaudhari', 'siddheshavic67@gmail.com', 'Good', 'zrxgchvjbkn', 6);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `photos` text NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` int(15) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `tail` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `totalprice` varchar(15) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `email`, `mobile_no`, `country`, `state`, `tail`, `city`, `address`, `totalprice`, `payment`, `user_id`) VALUES
(10, 'chinmay', 'karodpati', 'chinmayk234@gmail.com', 2147483647, 'India', 'maharashtra', 'jalgaon', 'jalgaon', 'near by state bank ,shiv colony jalgaon', '2800', 'COD', '1'),
(11, 'devesh', 'patil', 'manojmahajan765@gmail.com', 2147483647, 'India', 'maharastra', 'dharangaon', 'jalgaon', 'at post varad bk', '2800', 'COD', '1'),
(12, 'devesh', 'patil', 'manojmahajan765@gmail.com', 2147483647, 'India', 'maharastra', 'dharangaon', 'jalgaon', 'at post varad bk', '2800', 'COD', '1'),
(13, 'Siddhesh', 'Chaudhari', 'siddheshavic67@gmail.com', 2147483647, 'India', 'maharashtra', 'nothing', 'Jalgaon', 'jalgaon', '12600', 'COD', '6');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image` text NOT NULL,
  `detail` text NOT NULL,
  `type` varchar(20) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `category`, `price`, `image`, `detail`, `type`, `user_id`) VALUES
(20, 'tyres', '1', '500', 'add-img/scrap-tires.png', 'old scrap tyres.Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc invidunt ipsum et, labore clita lorem magna lorem ut. Erat lorem duo dolor no sea nonumy. Accus labore stet, est lorem sit diam sea et justo, amet at lorem et eirmod ipsum diam et rebum kasd rebum.', 'scrap', 1),
(26, 'Protect the Animals Mugs', '2', '2500', 'add-img/p2.jpg', 'Potter and animal lover JoAnn Stratakos created this series of custom mugs just for us—and to help give endangered animals a fighting chance.', 'creative', 6),
(27, 'Recycled Glass Elephants Night Light', '2', '1500', 'add-img/26462_1_640px.jpg', 'A glowing homage to motherhood, this recycled glass nightlight is brimming with storybook appeal.', 'creative', 6),
(28, 'Bishnupur Handpainted Terracotta Earrings', '2', '200', 'add-img/Q8A0511 (1).jpg', 'This beautiful handcrafted modern terracotta earrings is the perfect selection to wear with ethnic dresses for parties or casual use.', 'creative', 7),
(29, 'Handmade Applique Work Notebook', '2', '300', 'add-img/E9A9848.jpg', 'This notebook fulfils all your needs. You use the notebook as a student, working professional, or homemaker; it provides plenty of space for notes, calculations, lists, doodling and more.', 'creative', 7),
(30, 'Flower Art Work Special Visitor Notebook', '2', '500', 'add-img/IMG_5244_3d17eeff-059e-44f8-94cd-64a4fec10761.jpg', '  Flower Art Work Special Visitor Notebook (4.3 x 5.5 in)', 'creative', 8),
(31, 'Sling Bag', '2', '1800', 'add-img/potlisbagsheet2-55.jpg', '  Zardozi Hand Embroidered Tussar Silk Clutch/Sling Bag', 'creative', 8),
(32, 'Music Man Stand', '2', '1800', 'add-img/0X2A0264_9e34df47-aa37-49c5-adfe-ecb02bf449e5.jpg', 'Bastar Tribal Wrought Iron Music Man Stand', 'creative', 8),
(33, 'Ceramic Mugs (Set of 2, 350 ml)', '2', '590', 'add-img/0Q8A6856.jpg', 'Ceramic is known to be a healthier option in serveware and is non-toxic. These handmade and hand glazed products are crafted from premium quality clay by the studio potters of Rajasthan.', 'creative', 8),
(34, 'Battery ', '8', '750', 'add-img/inverter-battery-scrap.jpg', 'Automobile Battery Scrap, 2 Volt Battery Scrap, SMF Battery Scrap.', 'scrap', 8),
(35, 'RAM', '8', '500', 'add-img/ram-scrap-1000x1000.jpg', 'Mixed E Waste Scrap.', 'scrap', 8),
(36, 'old Television', '8', '2500', 'add-img/old-tv-set-removal-services.jpg', 'Old scrap wooden Television', 'scrap', 8),
(37, 'Newspaper', '9', '100', 'add-img/vhgf-500x500.jpg', 'Newspaper from 1st of Jan 2013 to 31st of June 2013', 'scrap', 6),
(38, 'Motors', '8', '200', 'add-img/OIP (12).jpg', 'Old Scrap Motors', 'scrap', 6),
(39, 'Monitors', '8', '200', 'add-img/OIP (13).jpg', 'Old Scrap Computer Monitors', 'scrap', 6),
(40, 'Mirror', '10', '200', 'add-img/8fcec5de5634bd55fddf02a159392178.jpg', 'Old Scrap Metal Mirror', 'scrap', 6);

-- --------------------------------------------------------

--
-- Table structure for table `product_cat`
--

CREATE TABLE `product_cat` (
  `cat_id` int(10) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_cat`
--

INSERT INTO `product_cat` (`cat_id`, `cat_name`, `type`) VALUES
(2, 'art', 'Creative'),
(8, 'Electronics', 'scrap'),
(9, 'Paper', 'scrap'),
(10, 'Other', 'Scrap');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `mobile_no`, `email`, `password`) VALUES
(1, 'Manoj Mahajan', '5467783327', 'manojmahajan234@gmail.com', 'Manoj123'),
(5, 'dinesh kolhe', '8465736368', 'dineshk765@gmail.com', 'dinesh123'),
(6, 'Siddhesh Avinash Chaudhari', '07721928536', 'siddheshavic67@gmail.com', '0000'),
(7, 'Chinmay Karodpati', '1111111111', 'chinmay@gmail.com', '1111'),
(8, 'Viraj ', '222222222', 'viraj@gmail.com', '2222');

-- --------------------------------------------------------

--
-- Table structure for table `wish`
--

CREATE TABLE `wish` (
  `wish_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wish`
--

INSERT INTO `wish` (`wish_id`, `product_id`, `user_id`) VALUES
(16, 20, 1),
(17, 21, 1),
(18, 26, 6),
(19, 30, 6),
(20, 32, 6),
(21, 34, 6),
(22, 39, 6),
(23, 37, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_cat`
--
ALTER TABLE `product_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wish`
--
ALTER TABLE `wish`
  ADD PRIMARY KEY (`wish_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `product_cat`
--
ALTER TABLE `product_cat`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wish`
--
ALTER TABLE `wish`
  MODIFY `wish_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
