-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2025 at 04:59 AM
-- Server version: 8.0.39-30
-- PHP Version: 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdimc4wdhwggg`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(64) NOT NULL,
  `category` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `volume_ml` int NOT NULL,
  `alcohol_percent` decimal(4,2) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `stock_quantity` int NOT NULL,
  `origin_region` varchar(128) NOT NULL,
  `vintage_year` int NOT NULL,
  `thumbnail` varchar(256) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `description`, `volume_ml`, `alcohol_percent`, `price`, `stock_quantity`, `origin_region`, `vintage_year`, `thumbnail`, `date_created`) VALUES
(0, 'name', 'category', 'description', 0, 0.00, 0.00, 0, 'origin_region', 0, 'image_url', '0000-00-00 00:00:00'),
(1, 'Cana Red Reserve', 'Red', 'Rich red inspired by the miracle at Cana, bold yet smooth.', 750, 13.50, 32.99, 150, 'Galilee', 2020, 'cana_red_reserve.png', '2025-04-08 00:00:00'),
(2, 'Galilean White', 'White', 'Crisp, light-bodied white with a clean finish.', 750, 12.00, 27.50, 200, 'Galilee', 2022, 'galilean_white.png', '2025-04-08 00:00:00'),
(3, 'Desert Rose Blush', 'Rosé', 'Subtle and floral rosé with hints of wild fruit.', 750, 12.50, 29.00, 175, 'Judean Hills', 2021, 'desert_rose_blush.png', '2025-04-08 00:00:00'),
(4, 'Messiah\'s Merlot', 'Red', 'Deep ruby tones with spiritual depth and earthy aromas.', 750, 14.00, 34.99, 120, 'Galilee', 2019, 'messiahs_merlot.png', '2025-04-08 00:00:00'),
(5, 'Bethlehem Blessing', 'Red', 'Full-bodied wine perfect for communion and reflection.', 375, 13.00, 18.99, 80, 'Bethlehem', 2021, 'bethlehem_blessing.png', '2025-04-08 00:00:00'),
(6, 'Pure Light Chardonnay', 'White', 'Light and golden, crafted for clarity and purity.', 750, 12.00, 28.00, 160, 'Sea of Galilee', 2022, 'pure_light_chardonnay.png', '2025-04-08 00:00:00'),
(7, 'Prophet\'s Pour', 'Red', 'Spicy red blend with a prophetic kick.', 750, 14.50, 36.50, 95, 'Mount Carmel', 2020, 'prophets_pour.png', '2025-04-08 00:00:00'),
(8, 'Sacred Vine Rosé', 'Rosé', 'Elegant rosé crafted with spiritual intention.', 750, 12.80, 30.00, 110, 'Jordan Valley', 2021, 'sacred_vine_rose.png', '2025-04-08 00:00:00'),
(9, 'Holy Harvest Cabernet', 'Red', 'Bold and balanced, celebrating abundance.', 750, 13.70, 35.00, 130, 'Nazareth', 2020, 'holy_harvest_cabernet.png', '2025-04-08 00:00:00'),
(10, 'Revelation Riesling', 'White', 'Sweet and fruity with a crisp finish.', 750, 11.00, 26.50, 140, 'Galilee', 2023, 'revelation_riesling.png', '2025-04-08 00:00:00'),
(11, 'Disciples’ Blend', 'Red Blend', 'A rich mix symbolizing unity and fellowship.', 750, 13.20, 33.99, 115, 'Judean Hills', 2019, 'disciples_blend.png', '2025-04-08 00:00:00'),
(12, 'Living Water White', 'White', 'Clean and pure, inspired by the Living Water metaphor.', 750, 12.30, 29.75, 125, 'Jordan Valley', 2022, 'living_water_white.png', '2025-04-08 00:00:00'),
(13, 'Vineyard of Grace', 'Red', 'Aged red, symbolizing growth and grace over time.', 750, 14.20, 38.50, 90, 'Mount Carmel', 2018, 'vineyard_of_grace.png', '2025-04-08 00:00:00'),
(14, 'Anointed Amber', 'Amber', 'Amber wine with notes of honey and light spice.', 500, 11.50, 31.50, 85, 'Jericho', 2023, 'anointed_amber.png', '2025-04-08 00:00:00'),
(15, 'Communion Classic', 'Red', 'Traditional wine for church and sacred gatherings.', 750, 13.00, 25.00, 200, 'Jerusalem', 2021, 'communion_classic.png', '2025-04-08 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
