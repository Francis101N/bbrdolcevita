-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 05, 2026 at 11:45 PM
-- Server version: 8.0.42-cll-lve
-- PHP Version: 8.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techbyfr_bbrdolcevita`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `password`, `date_created`) VALUES
(1, 'info@bbrdolcevita.com', 'bbrdolcevita', '123456', '2026-02-11 11:12:38');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int NOT NULL,
  `suite_id` int NOT NULL,
  `session_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `full_name` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `check_in` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `check_out` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `rooms_booked` int NOT NULL,
  `room_type` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `booking_status` enum('pending','confirmed','cancelled') COLLATE utf8mb4_general_ci DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `session_id` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `suite_id` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `rooms` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `room_type` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `checkin_date` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `checkout_date` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `unit_price` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `total_price` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `session_id`, `suite_id`, `rooms`, `room_type`, `checkin_date`, `checkout_date`, `unit_price`, `total_price`, `date_created`) VALUES
(37, '6gpqprhfb6trd02pa7ifld2oqr', '12', '1', 'Shared', '2026-05-14', '2026-05-17', '799', '2397', '2026-02-20 08:29:40');

-- --------------------------------------------------------

--
-- Table structure for table `suites`
--

CREATE TABLE `suites` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `single_price` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `shared_price` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `image1` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `image2` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `image3` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `max_occupancy` int NOT NULL,
  `total_rooms` int NOT NULL,
  `available_rooms` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `availability_status` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suites`
--

INSERT INTO `suites` (`id`, `name`, `description`, `single_price`, `shared_price`, `image1`, `image2`, `image3`, `max_occupancy`, `total_rooms`, `available_rooms`, `availability_status`, `date_created`) VALUES
(12, 'Tuscano Suite', 'Experience luxury in our Tuscana Suite featuring a king-sized bed (which can be configured as twin beds), elegant decor inspired by the Italian countryside, and a spacious bathroom with both a luxurious bathtub and shower.', '1500', '799', 'suite_image1_69981221c74619.04935932.jpeg', 'suite_image2_69981221c80da8.12053583.jpeg', 'suite_image3_69a94dbaba5ae2.64280164.jpeg', 2, 1, '1', 'Available', '2026-02-18 15:52:58'),
(13, 'Capri Suite', 'The bright and airy Capri Suite offers stunning views of the Mediterranean from its comfortable king bed (which can be configured as twin beds) and private terrace. The modern bathroom features warm sandstone finishes and premium fixtures.', '1500', '799', 'suite_image1_69a94bc7b779d8.59702541.jpeg', 'suite_image2_69a6757bec2cb9.70900686.jpeg', 'suite_image3_699812d7c03020.73670803.jpeg', 2, 1, '1', 'Available', '2026-02-18 15:55:40'),
(14, 'Firenza Suite', 'The luxurious Firenza Suite features a stunning king bed that can be configured as twin beds, with panoramic sea views and a private balcony. The spectacular marble bathroom with wooden vanity creates a perfect blend of traditional Italian craftsmanship and modern comfort.', '1500', '799', 'suite_image1_69981383abaa60.18147447.jpeg', 'suite_image2_69981383ac68d2.48308638.jpeg', 'suite_image3_69981383ad31c1.86872579.jpeg', 2, 1, '1', 'Available', '2026-02-18 16:03:22'),
(15, 'Ligurian Suite', 'The bright and airy Ligurian Suite offers stunning views of the Mediterranean from its comfortable king bed (which can be configured as twin beds) and private terrace. The modern bathroom features warm sandstone finishes and premium fixtures.', '1500', '799', 'suite_image1_6998143dbc7976.77497354.jpeg', 'suite_image2_69a94abadaa7e8.30506787.jpeg', 'suite_image3_6998143dc0a083.62557894.jpeg', 2, 1, '1', 'Available', '2026-02-18 16:06:20'),
(16, 'Venetian Suite', 'Our charming Venetian Suite combines comfort and elegance with a luxurious king bed that can be separated into twin beds. The suite features striking blue accents, tasteful artwork, and a beautifully designed bathroom with decorative mosaic tiles.', '1500', '799', 'suite_image1_699814f06ac409.19862106.jpeg', 'suite_image2_699814f06be873.54150268.png', 'suite_image3_6995d5c44c2aa7.38985777.jpeg', 2, 1, '1', 'Available', '2026-02-18 16:07:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suite_id` (`suite_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suites`
--
ALTER TABLE `suites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `suites`
--
ALTER TABLE `suites`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`suite_id`) REFERENCES `suites` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
