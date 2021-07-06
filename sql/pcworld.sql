-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2020 at 08:08 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_photo` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `admin_photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Profile', '01234567845', 'admin@pcworld.com', NULL, '$2y$10$zAzNhiJnh6ymOX2oiwAZtuxqHHQI47akRPS96AYxMhznKTsv7htYa', 'public/backend/media/admin/profile/1654724652912560.png', NULL, '2019-12-05 13:42:58', '2019-12-05 13:42:58');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_logo`, `created_at`, `updated_at`) VALUES
(1, 'Asus', 'public/backend/media/brands/241219_17_05_48.jpg', '2019-12-24 17:48:05', '2019-12-24 17:48:05'),
(2, 'Sony', 'public/backend/media/brands/241219_17_18_48.jpg', '2019-12-24 17:48:18', '2019-12-24 17:48:18'),
(3, 'Intel', 'public/backend/media/brands/241219_17_44_49.png', '2019-12-24 17:49:44', '2019-12-24 17:49:44'),
(4, 'AMD', 'public/backend/media/brands/241219_17_51_50.jpg', '2019-12-24 17:50:51', '2019-12-24 17:50:51'),
(5, 'Gygabyte', 'public/backend/media/brands/241219_17_53_51.png', '2019-12-24 17:51:53', '2019-12-24 17:51:53'),
(6, 'G-Skill', 'public/backend/media/brands/010120_16_51_10.png', '2020-01-01 16:10:51', '2020-01-01 16:10:51'),
(7, 'HP', 'public/backend/media/brands/020120_17_45_54.jpg', '2020-01-02 17:54:45', '2020-01-02 17:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `created_at`, `updated_at`) VALUES
(1, 'Desktop', 'desktop', '2019-12-24 12:06:08', '2019-12-24 12:06:08'),
(2, 'Laptop', 'laptop', '2019-12-24 12:06:20', '2019-12-24 12:06:20'),
(3, 'Gears', 'gears', '2019-12-24 12:06:35', '2019-12-24 12:06:35'),
(4, 'Custom Build', 'custom-build', '2019-12-24 12:06:52', '2019-12-24 12:06:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_05_052517_create_admins_table', 1),
(5, '2019_12_05_143359_create_categories_table', 2),
(6, '2019_12_05_143533_create_brands_table', 2),
(7, '2019_12_05_143737_create_subcategories_table', 2),
(8, '2019_12_15_174124_create_newsletters_table', 3),
(9, '2019_12_15_190452_create_products_table', 4),
(10, '2019_12_17_191601_create_wishlists_table', 5),
(11, '2019_12_25_155613_create_userdesigns_table', 6),
(12, '2019_12_25_193532_create_customerorders_table', 7),
(13, '2019_12_26_142035_create_orders_table', 8),
(14, '2019_12_26_142120_create_order_details_table', 8),
(15, '2019_12_26_142151_create_shippings_table', 8),
(16, '2019_12_26_154530_create_temp_datas_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'ahmobin1515@gmail.com', '2019-12-15 18:31:00', NULL),
(2, 'subscriber1@pcworld.com', '2019-12-15 18:33:10', '2019-12-15 18:33:10'),
(3, 'new@mail.com', '2020-01-01 16:23:33', '2020-01-01 16:23:33');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tranx_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paying_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal_amount` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_charge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_id`, `payment_type`, `tranx_id`, `paying_amount`, `subtotal_amount`, `shipping_charge`, `tax`, `total_amount`, `status`, `date`, `month`, `year`, `created_at`, `updated_at`) VALUES
(1, 4, NULL, 'bkash', '6548974545467954', '18938', '18,895‬', '5', '37.80', '18938', 4, '26-12-19', 'December', '2019', NULL, NULL),
(2, 4, NULL, 'bkash', '789456545467954', '21509', '21461', '5', '43.05', '21509', 4, '26-12-19', 'December', '2019', NULL, NULL),
(3, 4, NULL, 'bkash', '6548974545467954', '10196', '10171', '5', '19.95', '10196', 3, '26-12-19', 'December', '2019', NULL, NULL),
(4, 4, NULL, 'bkash', '6548974545467954', '10196', '10171', '5', '19.95', '10196', 4, '28-12-19', 'December', '2019', NULL, NULL),
(5, 1, NULL, 'bkash', '1335875454452144', '70363', '70215', '5', '142.80', '70363', 3, '01-01-20', 'January', '2020', NULL, NULL),
(6, 1, NULL, 'bkash', '6548974545467954', '24081', '24028', '5', '48.30', '24081', 0, '02-01-20', 'January', '2020', NULL, NULL),
(7, 4, NULL, 'bkash', '6548974545467954', '18938', '15300', '300', '3213', '18938', 2, '03-01-20', 'January', '2020', NULL, NULL),
(8, 4, NULL, 'bkash', '6548974545467954', '51850', '500', '5', '105.00', '610', 3, '03-01-20', 'January', '2020', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `single_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `color`, `size`, `quantity`, `single_price`, `total_price`, `created_at`, `updated_at`) VALUES
(1, '1', '2', 'Intel Core i5', NULL, NULL, '1', '95', '95', NULL, NULL),
(2, '1', '4', 'Gigabyte B365  Intel Motherboard', NULL, NULL, '1', '85', '85', NULL, NULL),
(3, '2', '3', 'Active Noise Headphone', '', '', '1', '25', '25', NULL, NULL),
(4, '2', '2', 'Intel Core i5', NULL, NULL, '1', '95', '95', NULL, NULL),
(5, '2', '4', 'Gigabyte B365  Intel Motherboard', NULL, NULL, '1', '85', '85', NULL, NULL),
(6, '3', '2', 'Intel Core i5', NULL, NULL, '1', '95', '95', NULL, NULL),
(7, '4', '2', 'Intel Core i5', NULL, NULL, '1', '95', '95', NULL, NULL),
(8, '5', '2', 'Intel Core i5', NULL, NULL, '1', '95', '95', NULL, NULL),
(9, '5', '4', 'Gigabyte B365  Intel Motherboard', NULL, NULL, '1', '85', '85', NULL, NULL),
(10, '5', '1', 'Asus laptop', '', '', '1', '500', '500', NULL, NULL),
(11, '6', '2', 'Intel Core i5', NULL, NULL, '1', '95', '95', NULL, NULL),
(12, '6', '4', 'Gigabyte B365  Intel Motherboard', NULL, NULL, '1', '85', '85', NULL, NULL),
(13, '6', '5', 'G.Skill DDR4 Ram', NULL, NULL, '1', '50', '50', NULL, NULL),
(14, '7', '2', 'Intel Core i5', NULL, NULL, '1', '95', '95', NULL, NULL),
(15, '7', '4', 'Gigabyte B365  Intel Motherboard', NULL, NULL, '1', '85', '85', NULL, NULL),
(16, '8', '1', 'Asus laptop', '', '', '1', '500', '500', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('user4@mail.com', '$2y$10$uTFPZt2La3VS.xQ/s8YOJOt4ExGb66oaspHYtryOv3noQL5o09jxK', '2019-12-17 12:05:23');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_prize` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_prize` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image_one` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `brand_id`, `product_name`, `product_code`, `product_details`, `product_quantity`, `product_color`, `product_size`, `product_model`, `selling_prize`, `discount_prize`, `product_slug`, `product_image_one`, `product_image_two`, `product_image_three`, `video_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 1, 'Asus laptop', 'lpas-101', '<div class=\"LGOjhe\" aria-level=\"3\" role=\"heading\" data-hveid=\"CA4QEA\"><p><span class=\"ILfuVd rjOVwe\"><div class=\"d9FyLd\">Asus X543UA Core i3 7th Gen Laptop 15.6 inch HD Laptop</div></span></p><p><span class=\"ILfuVd rjOVwe\"><span class=\"e24Kjd\"> Intel Core i3-7020U (3M Cache, 2.30 GHz) Processor. 4 GB DDR4. 1TB HDD. 15.6\" LED HD (1366 x 768) Display.</span></span></p></div>', '100', NULL, NULL, 'asus-sm-985', '500', NULL, 'asus-laptop', 'public/backend/media/products/1653827130617355.jpg', 'public/backend/media/products/1653827130673777.jpg', 'public/backend/media/products/1653827130692415.jpg', 'https://www.originpc.com', 1, NULL, NULL),
(2, 4, 6, 3, 'Intel Core i5', 'intel-101', '<p>Intel Core i5 9600K 6-Core 3.7GHz (4.6GHz TurboBoost)<br></p>', '50', NULL, NULL, 'Intel-9600K', '95', NULL, 'intel-core-i5-9600k', 'public/backend/media/products/1653828013805597.jpg', 'public/backend/media/products/1653828013891310.jpg', 'public/backend/media/products/1653828013930781.jpg', 'https://www.originpc.com', 1, NULL, NULL),
(3, 3, 5, 2, 'Active Noise Headphone', 'hdp-1014', '<p><br></p><div>\r\n<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and\r\n typesetting industry. Lorem Ipsum has been the industry\'s standard \r\ndummy text ever since the 1500s, when an unknown printer took a galley \r\nof type and scrambled it to make a type specimen book. It has survived \r\nnot only five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p>\r\n</div>', '100', NULL, NULL, 'anhdp-948754', '25', NULL, 'active-noise-headphone', 'public/backend/media/products/1653834702666525.png', 'public/backend/media/products/1653834702732408.jpg', 'public/backend/media/products/1653834702755302.jpg', 'http://localhost/phpmyadmin/sql.php?db=pcworld&table=products&pos=0', 1, NULL, NULL),
(4, 4, 7, 5, 'Gigabyte B365  Intel Motherboard', 'mb-101', '<p>Gigabyte B365 M AORUS ELITE Intel Motherboard</p><div class=\"descriptions\">\r\n                              <ul><li>Supports 9th and 8th Gen Intel Core Processors\r\n</li><li>CEC 2019 ready\r\n</li><li>Dual BIOS\r\n</li><li>Anti-Sulfur Resistor</li></ul>\r\n                          </div><p><br></p>', '50', NULL, NULL, 'gyg-b365', '85', NULL, 'gigabyte-b365-m-motherboard', 'public/backend/media/products/1653835011514561.png', 'public/backend/media/products/1653835011624098.png', 'public/backend/media/products/1653835011715803.png', 'http://localhost/phpmyadmin/sql.php?db=pcworld&table=products&pos=0', 1, NULL, NULL),
(5, 4, 8, 6, 'G.Skill DDR4 Ram', 'memory-101', '<h5>G.Skill Trident-Z 8GB 3200MHz DDR4 Ram</h5><ul class=\"top-section-list\"><li class=\"top-section-list-item\">8GB Capacity</li><li class=\"top-section-list-item\">3200 MHz Clock Speed</li><li class=\"top-section-list-item\">Tested Latency 16-18-18-38</li><li class=\"top-section-list-item\">1.35v</li><li class=\"top-section-list-item\">Unbuffered, Non-ECC</li><li>Intel XMP 2.0 (Extreme Memory Profile) Ready</li></ul>', '50', 'RGB', '8GB', 'Trident-Z', '50', NULL, 'g-skill-ddr4-ram', 'public/backend/media/products/1654543421400044.jpg', 'public/backend/media/products/1654543421439369.jpg', 'public/backend/media/products/1654543421477673.jpg', 'https://www.youtube.com/watch?v=Rj6j83IFVP8', 0, NULL, NULL),
(8, 4, 8, 6, 'G.Skill DDR4 Ram', 'memory-101', '<h5>G.Skill Trident-Z 8GB 3200MHz DDR4 Ram</h5><ul class=\"top-section-list\"><li class=\"top-section-list-item\">8GB Capacity</li><li class=\"top-section-list-item\">3200 MHz Clock Speed</li><li class=\"top-section-list-item\">Tested Latency 16-18-18-38</li><li class=\"top-section-list-item\">1.35v</li><li class=\"top-section-list-item\">Unbuffered, Non-ECC</li><li>Intel XMP 2.0 (Extreme Memory Profile) Ready</li></ul>', '50', 'RGB', '8GB', 'Trident-Z', '50', NULL, 'g-skill-ddr4-ram-copy', 'public/backend/media/products/1654543421400044.jpg', 'public/backend/media/products/1654543421439369.jpg', 'public/backend/media/products/1654543421477673.jpg', 'https://www.youtube.com/watch?v=Rj6j83IFVP8', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `order_id`, `ship_name`, `ship_phone`, `ship_email`, `ship_city`, `ship_zip`, `ship_address`, `created_at`, `updated_at`) VALUES
(1, '1', 'Abu Horaira Mobin', '01620327185', 'ah@mail.com', 'Dhaka', '1209', 'dhanmondi', NULL, NULL),
(2, '2', 'Abu Horaira Mobin', '01620327185', 'ah@mail.com', 'Dhaka', '1209', 'mohammadpur', NULL, NULL),
(3, '3', 'Fourth User', '0162452745', 'ah@mail.com', 'Dhaka', '1209', 'mm', NULL, NULL),
(4, '4', 'Abu Horaira Mobin', '01620327185', 'ah@mail.com', 'Dhaka', '1209', 'mohpur', NULL, NULL),
(5, '5', 'Mehedi Imam Shilu', '236578941', 'shilu@mail.com', 'dhaka', '1209', 'dhanmondi', NULL, NULL),
(6, '6', 'Mubassher', '01620327185', 'mubasser@mail.com', 'Dhaka', '1209', 'dhanmondi', NULL, NULL),
(7, '7', 'Reshma Jahan', '123659847411', 'shilu@mail.com', 'Dhaka', '1209', 'gfhfhfgh', NULL, NULL),
(8, '8', 'Dr. Reshma Jahan', '123659847411', 'shilu@mail.com', 'Dhaka', '1209', 'dsfsdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `sub_category_name`, `sub_category_slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'Normal Desktop', 'normal-desktop', '2019-12-24 18:21:26', '2019-12-24 18:21:26'),
(2, 2, 'Normal Laptop', 'normal-laptop', '2019-12-24 18:21:57', '2019-12-24 18:21:57'),
(3, 2, 'Gaming Laptop', 'gaming-laptop', '2019-12-24 18:22:16', '2019-12-24 18:22:16'),
(4, 1, 'Gaming Desktop', 'gaming-desktop', '2019-12-24 18:22:32', '2019-12-24 18:22:32'),
(5, 3, 'Headphone', 'headphone', '2019-12-24 18:22:48', '2019-12-24 18:22:48'),
(6, 4, 'CPU', 'cpu', '2019-12-24 18:23:00', '2019-12-24 18:23:00'),
(7, 4, 'Motherboard', 'motherboard', '2019-12-24 18:25:31', '2019-12-24 18:25:31'),
(8, 4, 'Memory', 'memory', '2019-12-24 18:25:43', '2019-12-24 18:25:43'),
(9, 4, 'Cooling', 'cooling', '2019-12-24 18:26:00', '2019-12-24 18:26:00'),
(10, 4, 'Case Fans', 'case-fans', '2019-12-24 18:26:15', '2019-12-24 18:26:15'),
(11, 4, 'GPU', 'gpu', '2019-12-24 18:26:28', '2019-12-24 18:26:28'),
(12, 4, 'Storage Drive', 'storage-drive', '2019-12-24 18:26:36', '2019-12-24 18:26:36'),
(13, 4, 'Power Suppy', 'power-supply', '2019-12-24 18:26:48', '2019-12-24 18:26:48'),
(14, 4, 'Hard Drive Case', 'hard-drive-case', '2019-12-24 18:27:03', '2019-12-24 18:27:03'),
(15, 4, 'Operating System', 'operating-system', '2019-12-24 18:27:22', '2019-12-24 18:27:22'),
(16, 4, 'Operating System Drive', 'os-drive', '2019-12-24 18:27:34', '2019-12-24 18:27:34'),
(17, 4, 'Add-On Cards', 'add-on-cards', '2019-12-24 18:27:45', '2019-12-24 18:27:45'),
(18, 4, 'Bay Devices', 'bay-devices', '2019-12-24 18:27:56', '2019-12-24 18:27:56'),
(19, 4, 'Display', 'display', '2019-12-24 18:28:06', '2019-12-24 18:28:06'),
(20, 4, 'Softwares', 'softwares', '2019-12-24 18:28:14', '2019-12-24 18:28:14'),
(21, 4, 'Shipping Protection', 'shipping-protection', '2019-12-24 18:28:40', '2019-12-24 18:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `userdesigns`
--

CREATE TABLE `userdesigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_design_pattern` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userdesigns`
--

INSERT INTO `userdesigns` (`id`, `user_id`, `user_design_pattern`, `created_at`, `updated_at`) VALUES
(1, 4, 'public/backend/media/usersdesign/user-4-28675596327342441.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_photo` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `user_photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'First User', '01234567891', 'user1@mail.com', NULL, '$2y$10$zAzNhiJnh6ymOX2oiwAZtuxqHHQI47akRPS96AYxMhznKTsv7htYa', NULL, NULL, '2019-12-05 07:42:20', '2019-12-05 07:42:20'),
(2, 'Second User', '01234567892', 'user2@mail.com', NULL, '$2y$10$XwnfbGqn89ATGgUAsD6dHOuwFQ12jBDcNXVew9B7qv4165rn/FOlC', NULL, NULL, '2019-12-06 07:39:25', '2019-12-06 07:39:25'),
(3, 'Third User', '01234567893', 'user3@gmail.com', NULL, '$2y$10$TgPJZ/wx64OlKu4iL6.CJu1lagoVeyf/qWVfish1JIn2yLoANYUkW', NULL, '9pZxurBFOOITPEyQYgFqSzwKSny3guAtqhMPvucBEvTbG6sLgh3zqqLaNkBW', '2019-12-06 07:52:09', '2019-12-06 07:52:09'),
(4, 'Fourth User', '1234569874', 'user4@mail.com', NULL, '$2y$10$9eFkx2wAmQz5rGBEUlKZGunL3pW38sYZIh58nxKVdhcY/5Nyjquc2', NULL, NULL, '2019-12-17 08:46:02', '2019-12-17 08:46:02');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_slug` (`product_slug`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdesigns`
--
ALTER TABLE `userdesigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `userdesigns`
--
ALTER TABLE `userdesigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
