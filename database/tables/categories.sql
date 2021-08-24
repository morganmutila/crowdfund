-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 01:31 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crowd_funding`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
 `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
 `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Audio'),
(2, 'Camera Gear'),
(3, 'Education'),
(4, 'Energy & Green Tech'),
(5, 'Fashion & Wearables'),
(6, 'Food & Beverages'),
(7, 'Health & Fitness'),
(8, 'Home & House'),
(9, 'Phones & Accessories'),
(10, 'Productivity'),
(11, 'Transportation'),
(12, 'Travel & Outdoors'),
(13, 'Art'),
(14, 'Comics'),
(15, 'Dance & Theater'),
(16, 'Film'),
(17, 'Music'),
(18, 'Photography'),
(19, 'Podcasts, Blogs & Vlogs'),
(20, 'Tabletop Games'),
(21, 'Video Games'),
(22, 'Web Series & TV Shows'),
(23, 'Writing & Publishing'),
(24, 'Culture'),
(25, 'Environment'),
(26, 'Human Rights'),
(27, 'Local Businesses'),
(28, 'Wellness');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
