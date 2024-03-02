-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 01:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `beverages`
--

CREATE TABLE `beverages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(500) NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` int(11) NOT NULL,
  `check` tinyint(1) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `publish` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beverages`
--

INSERT INTO `beverages` (`id`, `title`, `content`, `category_id`, `price`, `check`, `image`, `date`, `publish`, `created_at`, `updated_at`) VALUES
(2, 'Iced Americano', 'Here is a short description for the first item. Wave Cafe Template is provided by Tooplate.', 4, 10, 0, '1709369024.png', NULL, 1, '2024-03-02 06:43:44', '2024-03-02 06:43:44'),
(3, 'Iced Cappuccino', 'Contents', 4, 12, 0, '1709369195.png', NULL, 1, '2024-03-02 06:46:35', '2024-03-02 06:46:35'),
(4, 'Iced Espresso', 'You are not permitted to redistribute this template ZIP file on any other template websites.', 4, 14, 0, '1709369676.png', NULL, 1, '2024-03-02 06:54:36', '2024-03-02 06:54:36'),
(5, 'Iced Latte', 'Contents are organized into 3 tabs. Please contact Tooplate if you have anything to ask.', 4, 11, 0, '1709369707.png', NULL, 1, '2024-03-02 06:55:07', '2024-03-02 06:55:07'),
(6, 'Hot Americano', 'Here is a short description for the item along with a squared thumbnail.', 5, 8, 0, '1709371708.png', NULL, 1, '2024-03-02 07:28:28', '2024-03-02 07:28:28'),
(7, 'Strawberry Smoothie', 'Here is a short description for the item along with a squared thumbnail.', 6, 12, 0, '1709371732.png', NULL, 1, '2024-03-02 07:28:52', '2024-03-02 07:28:52'),
(8, 'Hot Cappuccino', 'Here is a list of 4 items that can add more as you need. Only content area will be scrolling.', 5, 9, 0, '1709373926.png', NULL, 1, '2024-03-02 08:05:26', '2024-03-02 08:05:26'),
(9, 'Hot Espresso', 'Left side logo and main menu are fixed. The video background is fixed.', 5, 7, 0, '1709373988.png', NULL, 1, '2024-03-02 08:06:28', '2024-03-02 08:06:28'),
(10, 'Hot Latte', 'Page contents are organized into 3 tabs to show different lists of items.', 5, 6, 0, '1709374023.png', NULL, 1, '2024-03-02 08:07:03', '2024-03-02 08:07:03'),
(11, 'Red Berry Smoothie', 'Here is a list of 4 items or add more. You can use this template for commercial purposes.', 6, 14, 0, '1709374075.png', NULL, 1, '2024-03-02 08:07:55', '2024-03-02 08:07:55'),
(12, 'Pineapple Smoothie', 'Left side logo and main menu are fixed. The video background is fixed.', 6, 16, 0, '1709374116.png', NULL, 1, '2024-03-02 08:08:36', '2024-03-02 08:08:36'),
(13, 'Image Spinach Smoothie', 'You are not allowed to redistribute the template ZIP file on other template sites.', 6, 18, 0, '1709374148.png', NULL, 1, '2024-03-02 08:09:08', '2024-03-02 08:09:08'),
(14, 'Special One', 'Here is a short text description for the first special item. You are not allowed to redistribute this template ZIP file.', NULL, 0, 1, '1709374545.jpg', NULL, 0, '2024-03-02 08:15:45', '2024-03-02 08:15:45'),
(15, 'Second Item', 'You are allowed to download, modify and use this template for your commercial or non-commercial websites.', NULL, 1, 1, '1709374579.jpg', NULL, 0, '2024-03-02 08:16:19', '2024-03-02 08:16:19'),
(16, 'Third Special Item', 'Pellentesque in ultrices mi, quis mollis nulla. Quisque sed commodo est, quis tincidunt nunc.', NULL, 1, 1, '1709374618.jpg', NULL, 0, '2024-03-02 08:16:58', '2024-03-02 08:16:58'),
(17, 'Special Item Fourth', 'Vivamus finibus nulla sed metus sagittis, sed ultrices magna aliquam. Mauris fermentum.', NULL, 1, 1, '1709374662.jpg', NULL, 0, '2024-03-02 08:17:42', '2024-03-02 08:17:42'),
(18, 'Sixth Sense', 'Here is a short text description for sixth item. This text is four lines.', NULL, 1, 1, '1709374686.jpg', NULL, 0, '2024-03-02 08:18:06', '2024-03-02 08:18:06'),
(19, 'Seventh Item', 'Curabitur eget erat sit amet sapien aliquet vulputate quis sed arcu.', NULL, 1, 1, '1709374712.jpg', NULL, 0, '2024-03-02 08:18:32', '2024-03-02 08:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'Iced Coffee', '2024-03-02 06:31:38', '2024-03-02 06:31:38'),
(5, 'Hot Coffee', '2024-03-02 06:31:52', '2024-03-02 06:31:52'),
(6, 'Fruit Juice', '2024-03-02 06:32:08', '2024-03-02 06:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(5, 'mona', 'test@test.com', 'button type=\"submit\" class=\"tm-btn-primary tm-align-right\">Submit', '2024-03-02 04:02:36', '2024-03-02 04:02:36'),
(6, 'mona', 'test@test.com', 'button type=\"submit\" class=\"tm-btn-primary tm-align-right\">Submit', '2024-03-02 04:05:37', '2024-03-02 04:05:37'),
(7, 'mona', 'test@test.com', 'button type=\"submit\" class=\"tm-btn-primary tm-align-right\">Submit', '2024-03-02 04:06:22', '2024-03-02 04:06:22'),
(9, 'mona', 'test@test.com', 'button type=\"submit\" class=\"tm-btn-primary tm-align-right\">Submit', '2024-03-02 04:18:01', '2024-03-02 04:18:01'),
(10, 'mona', 'test@test.com', 'button type=\"submit\" class=\"tm-btn-primary tm-align-right\">Submit', '2024-03-02 04:19:35', '2024-03-02 04:19:35'),
(11, 'mona', 'test@test.com', 'button type=\"submit\" class=\"tm-btn-primary tm-align-right\">Submit', '2024-03-02 04:23:02', '2024-03-02 04:23:02'),
(12, 'mona', 'test@test.com', 'button type=\"submit\" class=\"tm-btn-primary tm-align-right\">Submit', '2024-03-02 04:27:16', '2024-03-02 04:27:16'),
(13, 'mona', 'test@test.com', 'button type=\"submit\" class=\"tm-btn-primary tm-align-right\">Submit', '2024-03-02 04:35:11', '2024-03-02 04:35:11'),
(14, 'mona', 'test@test.com', 'button type=\"submit\" class=\"tm-btn-primary tm-align-right\">Submit', '2024-03-02 04:39:39', '2024-03-02 04:39:39'),
(15, 'category', 'user2@user.com', '.contact.contact.contact', '2024-03-02 04:42:52', '2024-03-02 04:42:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_02_27_111723_create_Category_table', 1),
(7, '2024_02_27_111741_create_beverages_table', 1),
(8, '2024_03_01_160212_contact', 2),
(9, '2024_03_01_163051_create_contact_table', 3),
(10, '2024_03_01_163051_create_contacts_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 0,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `user_name`, `email`, `email_verified_at`, `password`, `active`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Name  Please select a category', 'Username', 'user@user.com', NULL, '$2y$12$wbslByp6RCqnsR0JcpDcb.xK3Ljy.hyGOMUV4cfJT/sJ0PLNP3cO6', 0, 0, NULL, '2024-03-01 13:13:50', '2024-03-01 13:13:50'),
(2, 'admin test test', 'test', 'test@admin.com', '2024-03-01 13:42:15', '$2y$12$K3o7zI5byeZRh5cmwLKRNOxsntj6KWkE6uUMsdsS3vDHHGYpEoKNC', 0, 1, '', '2024-03-01 13:41:37', '2024-03-01 13:42:15'),
(3, 'mona mona test2', 'active', 'user2@user.com', NULL, '$2y$12$dUGKulE9/.3QgqXiJEcQQebkUsQInbPKwGAYTszHnfdIr6ByN/bp.', 1, 0, NULL, '2024-03-02 06:29:12', '2024-03-02 06:29:12'),
(4, 'mona mona test22', 'admin', 'usser2@user.com', NULL, '$2y$12$TQ6bynEV9aalkhoksODKju2/ZE7vpJD3ZlYf8kC.u4WQDjqI6gYpq', 1, 1, NULL, '2024-03-02 06:29:36', '2024-03-02 06:29:36'),
(5, 'test test test', 'jjlj', 'zzz@test.com', NULL, '$2y$12$n9W6M1ch0jpXLmHOLONE5OjX5Ew30Kl45jdkLuESDJRlihg8NHGou', 0, 0, NULL, '2024-03-02 10:18:16', '2024-03-02 10:18:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beverages`
--
ALTER TABLE `beverages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `beverages_category_id_foreign` (`category_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beverages`
--
ALTER TABLE `beverages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beverages`
--
ALTER TABLE `beverages`
  ADD CONSTRAINT `beverages_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
