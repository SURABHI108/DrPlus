-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 12, 2022 at 01:56 PM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id18461719_drplus`
--
CREATE DATABASE IF NOT EXISTS `id18461719_drplus` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id18461719_drplus`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `name`, `email`, `password`) VALUES
(3, 'Mihir', 'Mihir@gmail.com', '12345678'),
(4, 'Sahil', 'sahilmarkana8055@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contect` varchar(10) DEFAULT NULL,
  `fdate` varchar(25) DEFAULT NULL,
  `select_id` varchar(15) DEFAULT NULL,
  `symptoms` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`id`, `name`, `email`, `contect`, `fdate`, `select_id`, `symptoms`, `created_at`, `updated_at`) VALUES
(8, 'markanasahil', 'sahilmarkanasr@gmail.com', '7777777777', '2022/02/17 19:00', ' 7  ', 'aaaa', '2022-02-10 10:36:53', NULL),
(9, 'Nikhil', 'nikhil@gmail.com', '1111111111', '2022/02/19 20:00', ' 12  ', 'Nijhil', '2022-02-16 11:46:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`) VALUES
(1, 'U.S Polo'),
(2, 'Peter Englands'),
(3, 'Levis'),
(17, 'spyker');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cate_name`) VALUES
(5, 'dentist'),
(6, 'urology'),
(7, 'orthopadic'),
(8, 'cardiyologist');

-- --------------------------------------------------------

--
-- Table structure for table `contect_us`
--

CREATE TABLE `contect_us` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contect_us`
--

INSERT INTO `contect_us` (`id`, `name`, `email`, `subject`, `message`) VALUES
(2, 'markana sahil', 'sahilmarkanasr@gmail.com', 'test', 'test'),
(4, 'Sahil', 'sahil.markana@techniversesoftweare.com', 'sahil', 'sahil'),
(26, 'sahil', 'markana@gmail.com', 'sahilsahilshail', 'sahilashailshial\r\n'),
(42, 'qqq', 'qqq@aaa', 'sahilsahilshail', '111');

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(150) NOT NULL,
  `state` varchar(150) NOT NULL,
  `zip` int(11) NOT NULL,
  `card_name` varchar(200) NOT NULL,
  `card_number` int(11) NOT NULL,
  `exp_date` date DEFAULT NULL,
  `cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`id`, `customer_name`, `email`, `phone_no`, `address`, `city`, `state`, `zip`, `card_name`, `card_number`, `exp_date`, `cvv`) VALUES
(1, 'dgfdsfg', 'admin@gmail.com', 2147483647, 'dfsdfsd', 'hjkjh', 'hjfgjgj', 345344, 'hghdfh', 353453454, '2022-12-12', 222);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_title` varchar(150) NOT NULL,
  `image` varchar(500) NOT NULL,
  `description1` text NOT NULL,
  `brand` varchar(150) NOT NULL,
  `categorie` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `description2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_title`, `image`, `description1`, `brand`, `categorie`, `price`, `description2`) VALUES
(24, 'sadsad', '1629982569.jpg', 'sadsadsa', '17', '4', 12342, 'gdfgdfgd');

-- --------------------------------------------------------

--
-- Table structure for table `ragister_user`
--

CREATE TABLE `ragister_user` (
  `id` int(10) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ragister_user`
--

INSERT INTO `ragister_user` (`id`, `name`, `phone`, `email`, `password`) VALUES
(1, 'rahul', 'phone', 'sahilmarkanasr@gmail.com', '11111111'),
(2, 'sahil', 'phone', 'rahul@gmail.com', '11111111'),
(3, 'rahul', 'phone', 'sahil@gmail.com', '12345678'),
(4, 'axsitr', 'phone', 'sahilmarkanasr@gmail.com', '11111111'),
(5, 'ramesh', 'phone', 'ramesh@gmail.com', '12345678'),
(6, 'Krupali', 'phone', 'krupali5121998@gmail.com', '05121998'),
(7, 'Purva', 'phone', 'purva@gmail.com', '12345678'),
(8, 'Surbhi', 'phone', 'sgadhiya021@rku.ac.in', '12344321'),
(9, 'Surbhi', 'phone', 'sgadhiya021@rku.ac.in', '12344321'),
(10, 'Rahul', 'phone', 'rahul.matta678@gmail.com', '12345678'),
(11, 'Sahil', 'phone', 'admin@gmail.com', '12345678'),
(12, 'mihir', NULL, 'mihir@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `services_image`
--

CREATE TABLE `services_image` (
  `id` int(10) NOT NULL,
  `image_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `mobile_no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `select_id` (`select_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contect_us`
--
ALTER TABLE `contect_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ragister_user`
--
ALTER TABLE `ragister_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_image`
--
ALTER TABLE `services_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contect_us`
--
ALTER TABLE `contect_us`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `ragister_user`
--
ALTER TABLE `ragister_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services_image`
--
ALTER TABLE `services_image`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
