-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 08:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supreme_products`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `auname` varchar(30) DEFAULT NULL,
  `apass` varchar(50) DEFAULT NULL,
  `afullname` varchar(100) DEFAULT NULL,
  `aemail` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `auname`, `apass`, `afullname`, `aemail`) VALUES
(1, 'admin', 'bc980cfc3b7d6dbba09205904c5e2789', 'supreme sunstorm', 'ssss@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `state_id`, `city_name`, `status`) VALUES
(101, 1, 'Bengalure', 1),
(102, 1, 'Doddabalapura', 1);

-- --------------------------------------------------------

--
-- Table structure for table `price_product`
--

CREATE TABLE `price_product` (
  `slno` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `actualprice` decimal(10,2) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pdescription` varchar(255) NOT NULL,
  `pdistrict` varchar(100) NOT NULL,
  `pincode` int(20) DEFAULT NULL,
  `pprice` varchar(100) NOT NULL,
  `pactualprice` varchar(100) NOT NULL,
  `pcategory` varchar(100) NOT NULL,
  `pfeatures1` varchar(200) NOT NULL,
  `pfeatures2` varchar(200) NOT NULL,
  `pfeatures3` varchar(200) NOT NULL,
  `pfeatures4` varchar(200) NOT NULL,
  `pfeatures5` varchar(200) NOT NULL,
  `pspecification` varchar(255) NOT NULL,
  `image1` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `updated_info` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pdescription`, `pdistrict`, `pincode`, `pprice`, `pactualprice`, `pcategory`, `pfeatures1`, `pfeatures2`, `pfeatures3`, `pfeatures4`, `pfeatures5`, `pspecification`, `image1`, `image2`, `image3`, `updated_info`) VALUES
(1, 'Supreme Solar Water Heater', '200 LPD Glass lined Supreme Solar Water Heater', '', NULL, '', '', 'solar', 'Affordable', 'Reliable', 'Durable', 'Advanced', 'Eco Friendly', 'Spec 1\r\nSpec 2\r\nSpec 3', '3460663025featured-1.png', '2854364789featured-2.png', '3468178795featured-3.png', '2021-04-23 10:19:18'),
(2, 'Supreme Kitchen Chimneys', 'Kitchen Chimneys by Supreme Model No : Example 1', '', NULL, '', '', 'chimnies', 'Affordable', 'Reliable', 'Durable', 'Advanced', 'Eco Friendly', 'KC Spec 1, KC Spec 2, KC Spec 3', '7782555712featured-2.png', '2080429598featured-3.png', '4894189443featured-4.png', '2021-04-23 10:53:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_phone` varchar(255) NOT NULL,
  `u_pwd` varchar(610) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `u_name`, `u_email`, `u_phone`, `u_pwd`) VALUES
(62, 'Test 1', 'test@gmail.com', '1234567890', '$2y$10$kazlzG40iYvUmJP8ktFsoe7/rt.SaBe90lka0veO0oPQ5nV.0EtSm'),
(63, 'Test 2', 'test2@gmail.com', '9874563210', '$2y$10$mOpSUHnuFTxm.43dDj1g4.4dT3zkbLNnU6mZsoFnvLIw3E28vp8qe'),
(64, 'Test 3', 'test3@gmail.com', '1478523690', '$2y$10$HddgLyZiKJsUTbhEsTWfn.KbRunCtCfNTAscqxgisqWgWXmDU31SC'),
(65, 'Test Name', 'gagangowda841@gmail.com', '1111111111', '$2y$10$Q5dNdiNhssFi3GzCRMGEUOZJZSPNENub/gu91A7KZ4TcQ0nEbt8Le');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
