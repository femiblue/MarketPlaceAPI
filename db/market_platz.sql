-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 02:18 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `market_platz`
--

-- --------------------------------------------------------

--
-- Table structure for table `irequests`
--

CREATE TABLE `irequests` (
  `irequest_id` int(10) NOT NULL,
  `irequest_requester` int(10) NOT NULL,
  `irequest_reciever` int(10) NOT NULL,
  `irequest_service` int(10) NOT NULL,
  `irequest_requester_msg` text DEFAULT NULL,
  `irequest_reciever_msg` text DEFAULT NULL,
  `irequest_status` int(1) NOT NULL DEFAULT 1 COMMENT 'Pending, Accepted, Rejects, Completed, Cancelled',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_22_193948_create_users_table', 1),
(2, '2019_12_22_194003_create_service_categories_table', 1),
(3, '2019_12_22_194200_create_store_table', 1),
(4, '2019_12_22_194333_create_store_address_table', 1),
(5, '2019_12_22_194511_create_services_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rate_users`
--

CREATE TABLE `rate_users` (
  `rate_user_id` int(10) NOT NULL,
  `rate_user_request` int(10) NOT NULL,
  `rate_user_comment` text DEFAULT NULL,
  `rate_user_score` int(10) NOT NULL COMMENT '1-5',
  `rate_user_in` int(10) NOT NULL,
  `rate_user_out` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_price` float(8,2) UNSIGNED NOT NULL,
  `service_cat` bigint(20) UNSIGNED NOT NULL,
  `service_store` bigint(20) UNSIGNED NOT NULL,
  `service_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_desc`, `service_price`, `service_cat`, `service_store`, `service_status`, `created_at`, `updated_at`) VALUES
(1, 'Big Ben Cakes', 'Big Ben Cakes for birthdays and other occasions', 25.00, 2, 1, 1, '2019-12-29 00:41:01', '2020-01-26 15:18:40'),
(2, 'Big Ben Wedding Gown', 'Big Ben Wedding Gowns', 50.00, 2, 1, 1, '2019-12-29 00:43:57', '2020-01-26 15:27:37'),
(3, 'Big Ben Food and Catering', 'Big Ben Food and Catering', 100.00, 2, 1, 1, '2019-12-29 01:04:37', '2019-12-29 01:04:37'),
(4, 'Big Ben Jockey Services', 'Let Rock your party today! Give us a call.', 60.00, 2, 1, 1, '2020-01-24 19:49:06', '2020-01-26 15:15:03'),
(5, 'Introduction to Java ', 'This Java training is a gentle introduction to writing java program particularly suitable for beginners', 110.00, 6, 3, 1, '2020-01-27 23:39:42', '2020-01-27 23:59:00'),
(6, 'DevOps for Software Manager', 'Most Efficient ways to run your software development and information-technology operations', 200.00, 6, 3, 1, '2020-01-28 00:05:14', '2020-01-28 00:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `service_category_id` bigint(20) UNSIGNED NOT NULL,
  `service_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`service_category_id`, `service_category_name`, `created_at`, `updated_at`) VALUES
(1, 'Tutoring', '2019-12-26 23:02:12', '2019-12-26 23:02:12'),
(2, 'Event Planning', '2019-12-26 23:06:40', '2019-12-26 23:06:40'),
(3, 'Limousine Service', '2019-12-26 23:07:23', '2019-12-26 23:07:23'),
(4, 'Disc Jockey', '2019-12-26 23:08:07', '2019-12-26 23:08:07'),
(5, 'Nanny Placement', '2019-12-26 23:09:11', '2019-12-26 23:09:11'),
(6, 'Computer Training', '2019-12-26 23:09:27', '2019-12-26 23:09:27'),
(7, 'Fitness', '2019-12-26 23:10:24', '2019-12-26 23:10:24'),
(8, 'Website Designer', '2019-12-26 23:10:29', '2019-12-26 23:10:29'),
(9, 'Computer Repair', '2019-12-26 23:11:50', '2019-12-26 23:11:50'),
(10, 'Residential Cleaning', '2019-12-26 23:12:09', '2019-12-26 23:12:09'),
(11, 'Dry Cleaning', '2019-12-26 23:12:32', '2019-12-26 23:12:32'),
(12, 'House Painting', '2019-12-26 23:13:12', '2019-12-26 23:13:12'),
(13, 'Lawn Care', '2019-12-26 23:13:36', '2019-12-26 23:13:36'),
(14, 'Seminar Promotion', '2019-12-26 23:14:30', '2019-12-26 23:14:30'),
(15, 'Catering', '2019-12-26 23:15:11', '2019-12-26 23:15:11'),
(16, 'Bookkeeping', '2019-12-26 23:15:25', '2019-12-26 23:15:25'),
(17, 'Others', '2019-12-26 23:16:55', '2019-12-26 23:16:55');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `store_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_owner` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store_id`, `store_name`, `store_desc`, `store_owner`, `created_at`, `updated_at`) VALUES
(1, 'Big Ben Events Master', 'We will take care of all aspect of your upcoming event in a professional manner.', 1, '2019-12-28 01:32:26', '2020-01-14 12:53:37'),
(3, 'Blueuser', 'Blueuser  Computer services', 2, '2020-01-08 03:24:03', '2020-01-27 23:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `store_address`
--

CREATE TABLE `store_address` (
  `store_address_id` bigint(20) UNSIGNED NOT NULL,
  `store_address_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_address_street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_address_area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_address_postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_address_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_address_store` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `store_address`
--

INSERT INTO `store_address` (`store_address_id`, `store_address_number`, `store_address_street`, `store_address_area`, `store_address_postcode`, `store_address_city`, `store_address_store`, `created_at`, `updated_at`) VALUES
(1, '123', 'Leipziger Street', 'WorthStraße', '36037 ', 'Fulda', 1, '2019-12-29 00:12:42', '2020-01-14 12:20:48'),
(2, '5', 'Bahnhof', 'Fulda Station', '36037', 'Fulda', 3, '2020-01-08 03:24:03', '2020-01-27 23:57:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'no_photo.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_mobile`, `user_photo`, `created_at`, `updated_at`) VALUES
(1, 'femiblue', '$2y$10$sFSR27CyIp92Yurhdcq8Def2NxvkRieBi7TSBtyo.meZmI6GPfKq.', 'Femi', 'BlueRain', 'femibel@gmail.com', '015210811283', 'no_photo.jpg', '2019-12-27 18:56:06', '2020-01-13 15:36:48'),
(2, 'blueuser', '$2y$10$uCRYabrq.Cc7TEN5toFwYuvs9QtMbT75.2MKn1w58b/If8Ny1g3My', 'Blue', 'User', 'blueuser@gmail.com', '01XXXXXXXX', 'no_photo.jpg', '2020-01-08 03:24:03', '2020-01-27 23:28:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `irequests`
--
ALTER TABLE `irequests`
  ADD PRIMARY KEY (`irequest_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate_users`
--
ALTER TABLE `rate_users`
  ADD KEY `rate_user_id` (`rate_user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `services_service_cat_foreign` (`service_cat`),
  ADD KEY `services_service_store_foreign` (`service_store`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`service_category_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_id`),
  ADD KEY `store_store_owner_foreign` (`store_owner`);

--
-- Indexes for table `store_address`
--
ALTER TABLE `store_address`
  ADD PRIMARY KEY (`store_address_id`),
  ADD KEY `store_address_store_address_store_foreign` (`store_address_store`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `irequests`
--
ALTER TABLE `irequests`
  MODIFY `irequest_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rate_users`
--
ALTER TABLE `rate_users`
  MODIFY `rate_user_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `service_category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `store_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `store_address`
--
ALTER TABLE `store_address`
  MODIFY `store_address_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_service_cat_foreign` FOREIGN KEY (`service_cat`) REFERENCES `service_categories` (`service_category_id`),
  ADD CONSTRAINT `services_service_store_foreign` FOREIGN KEY (`service_store`) REFERENCES `store` (`store_id`);

--
-- Constraints for table `store`
--
ALTER TABLE `store`
  ADD CONSTRAINT `store_store_owner_foreign` FOREIGN KEY (`store_owner`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `store_address`
--
ALTER TABLE `store_address`
  ADD CONSTRAINT `store_address_store_address_store_foreign` FOREIGN KEY (`store_address_store`) REFERENCES `store` (`store_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
