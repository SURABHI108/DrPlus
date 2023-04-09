-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 11:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dr_plus`
--

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
(3, 'Sahil Markana', 'sahilmarkanasr@gmail.com', 'sahil12345ssr'),
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
  `date` varchar(15) DEFAULT NULL,
  `time` varchar(10) DEFAULT NULL,
  `select_id` varchar(15) DEFAULT NULL,
  `symptoms` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`id`, `name`, `email`, `contect`, `date`, `time`, `select_id`, `symptoms`, `created_at`, `updated_at`) VALUES
(7, 'markana sahil', 'sahilmarkanasr@gmail.com', '7777777777', '2022-01-23', '21:05', ' 5  ', 'sahiiil', '2022-01-16 14:37:43', NULL),
(8, 'markana sahil', 'sahilmarkanasr@gmail.com', '7777777777', '2022-01-23', '21:05', ' 5  ', 'sahiiil', '2022-01-16 14:37:43', NULL),
(9, 'markana sahil', 'sahilmarkanasr@gmail.com', '7777777777', '2022-01-23', '21:08', ' 5  ', 'sahiil', '2022-01-16 14:38:08', NULL),
(10, 'markana sahil', 'sahilmarkanasr@gmail.com', '7777777777', '2022-01-23', '21:08', ' 5  ', 'sahiil', '2022-01-16 14:38:08', NULL),
(11, 'x', 'rahul@gmail.com', '7777777777', '0011-11-11', '11:11', ' 7  ', 'rahul', '2022-01-16 14:40:43', NULL),
(12, 'x', 'rahul@gmail.com', '7777777777', '0011-11-11', '11:11', ' 7  ', 'rahul', '2022-01-16 14:40:43', NULL),
(13, 'x', 'rahul@gmail.com', '7777777777', '0011-11-11', '11:11', ' 7  ', 'rahul', '2022-01-16 14:44:10', NULL),
(14, 'x', 'rahul@gmail.com', '7777777777', '0011-11-11', '11:11', ' 7  ', 'rahul', '2022-01-16 14:44:10', NULL),
(15, 'x', 'rahul@gmail.com', '7777777777', '0011-11-11', '11:11', ' 7  ', 'rahul', '2022-01-16 14:44:34', NULL),
(16, 'x', 'rahul@gmail.com', '7777777777', '0011-11-11', '11:11', ' 7  ', 'rahul', '2022-01-16 14:44:34', NULL),
(17, 'markana sahil', 'sahilmarkanasr@gmail.com', '7777777777', '2022-01-23', '21:15', ' 7  ', 'sahillllllllllllll', '2022-01-16 14:45:13', NULL),
(18, 'markana sahil', 'sahilmarkanasr@gmail.com', '7777777777', '2022-01-23', '21:15', ' 7  ', 'sahillllllllllllll', '2022-01-16 14:45:13', NULL),
(19, 'markana sahil', 'sahilmarkanasr@gmail.com', '7777777777', '2022-01-23', '21:15', ' 7  ', 'sahillllllllllllll', '2022-01-16 14:46:17', NULL),
(20, 'markana sahil', 'sahilmarkanasr@gmail.com', '7777777777', '2022-01-23', '21:15', ' 7  ', 'sahillllllllllllll', '2022-01-16 14:46:17', NULL),
(21, 'rahul', 'rahul@gmail.com', '7896541230', '2022-01-08', '20:19', ' 6  ', 'rahul mattaaaa rahull mata\r\nra', '2022-01-16 14:46:56', NULL),
(22, 'rahul', 'rahul@gmail.com', '7896541230', '2022-01-08', '20:19', ' 6  ', 'rahul mattaaaa rahull mata\r\nra', '2022-01-16 14:46:56', NULL);

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
(8, 'cardiyologist'),
(9, 'test');

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
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', '');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contect_us`
--
ALTER TABLE `contect_us`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
