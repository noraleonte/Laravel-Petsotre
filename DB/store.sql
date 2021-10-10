-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 03:53 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `com_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `created_at`, `updated_at`, `com_id`, `prod_id`, `quantity`) VALUES
(1, '2021-01-09 00:35:04', '2021-01-09 22:10:33', 24, 2, 3),
(2, '2021-01-09 00:35:57', '2021-01-09 00:35:57', 24, 2, 1),
(3, '2021-01-09 00:59:16', '2021-01-09 00:59:16', 24, 2, 2),
(4, '2021-01-09 00:59:22', '2021-01-09 00:59:22', 24, 2, 3),
(7, '2021-01-09 22:29:25', '2021-01-09 22:29:25', 25, 2, 2),
(10, '2021-01-09 22:37:24', '2021-01-09 22:37:34', 26, 2, 7),
(11, '2021-01-09 23:39:57', '2021-01-09 23:39:57', 27, 2, 2),
(12, '2021-01-09 23:59:03', '2021-01-09 23:59:03', 28, 2, 2),
(13, '2021-01-10 00:01:56', '2021-01-10 00:01:56', 28, 3, 2),
(14, '2021-01-10 00:33:46', '2021-01-10 23:02:42', 29, 2, 3),
(15, '2021-01-10 00:34:44', '2021-01-10 00:34:44', 29, 3, 4),
(16, '2021-01-12 14:10:42', '2021-01-12 14:49:05', 30, 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `created_at`, `updated_at`, `name`) VALUES
(1, NULL, NULL, 'toys'),
(2, NULL, NULL, 'food'),
(5, '2021-01-11 17:10:15', '2021-01-11 17:10:15', 'beds'),
(6, '2021-01-11 17:10:22', '2021-01-11 17:10:22', 'harnesses'),
(7, '2021-01-11 17:10:32', '2021-01-11 17:10:32', 'clothing'),
(8, '2021-01-12 14:50:27', '2021-01-12 14:50:27', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_05_230948_create_products_table', 1),
(5, '2021_01_05_232131_create_categories_table', 1),
(6, '2021_01_07_221348_add_username_to_users_table', 1),
(7, '2021_01_09_010101_create_carts_table', 2),
(8, '2021_01_09_010118_create_orders_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `status`, `uid`) VALUES
(24, '2021-01-09 00:35:04', '2021-01-11 17:04:49', 'trimisa', 1),
(25, '2021-01-09 01:04:29', '2021-01-09 22:29:27', 'plasata', 1),
(26, '2021-01-09 22:36:19', '2021-01-09 22:59:11', 'plasata', 1),
(27, '2021-01-09 23:39:57', '2021-01-09 23:57:09', 'plasata', 1),
(28, '2021-01-09 23:59:03', '2021-01-10 00:01:59', 'plasata', 1),
(29, '2021-01-10 00:33:46', '2021-01-10 23:02:51', 'plasata', 1),
(30, '2021-01-12 14:10:42', '2021-01-12 14:50:14', 'anulata', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `category` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `name`, `price`, `category`, `img`, `description`) VALUES
(6, '2021-01-11 17:06:22', '2021-01-12 14:50:00', 'test', 4.00, 1, 'https://www.petsworld.in/blog/wp-content/uploads/2015/11/920x920.jpg', 'Wonderful toy for teething puppies'),
(7, '2021-01-11 17:08:07', '2021-01-11 17:08:07', 'Plush toy', 3.00, 1, 'https://images.unsplash.com/photo-1531972007650-7e98213f36a8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80', 'Toy perfect for small dog breeds'),
(8, '2021-01-11 17:08:55', '2021-01-11 17:08:55', 'Cat toy', 6.00, 1, 'https://images.unsplash.com/photo-1585837575652-267c041d77d4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1372&q=80', 'Perfect toy for playful pets'),
(9, '2021-01-11 17:09:52', '2021-01-11 17:09:52', 'Chewing rope', 4.00, 1, 'https://images.unsplash.com/photo-1594064142712-e84e63f95a55?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80', 'Best toy for social dogs'),
(10, '2021-01-11 17:11:05', '2021-01-11 17:11:26', 'Dog bed', 4.00, 5, 'https://images.unsplash.com/photo-1597506327062-2e214954a12c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=659&q=80', 'Comfortable bed for small breeds'),
(11, '2021-01-11 17:12:24', '2021-01-11 17:12:24', 'Cat harness', 33.00, 6, 'https://images.unsplash.com/photo-1591860455878-5458e029601e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80', 'Comfortable harness for cats'),
(12, '2021-01-11 17:12:57', '2021-01-11 17:12:57', 'Dog harness', 35.00, 6, 'https://images.unsplash.com/photo-1554312931-5462764f0b65?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1267&q=80', 'Best harness for dogs'),
(13, '2021-01-11 17:14:14', '2021-01-11 17:14:14', 'Special dog treats', 12.00, 2, 'https://images.unsplash.com/photo-1582798358481-d199fb7347bb?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80', 'Dog food containing carrots, pumpkin and chicken'),
(14, '2021-01-11 17:15:12', '2021-01-11 17:15:12', 'Special treats for cats', 25.00, 2, 'https://images.unsplash.com/photo-1609627176268-5849c0ccb8bf?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=676&q=80', 'Special treat package for young kittens'),
(15, '2021-01-11 17:17:23', '2021-01-11 17:17:23', 'Scarf', 8.00, 7, 'https://images.unsplash.com/photo-1556041481-8e3f8f5e35cc?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80', 'Scarf for cats or small dogs');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `username`) VALUES
(1, 'Eleonora Leonte', 'noraleonte@yahoo.com', NULL, '$2y$10$FYXiOkXFYwP9Vrgk6ZoHJ..gWYWOTGRUOc4xH8cVzxNuIGGvg2pFu', '7QB6m6AKapCoU1pu5QjekVngnYXcfc1dVi9oqSADpL8Jj2LawCUMFGMiB0ee', '2021-01-07 21:30:14', '2021-01-07 21:30:14', 'admin'),
(2, 'Cojocaru Dragos', 'dragos.cojocaru@gmail.com', NULL, '$2y$10$g1gI/RoGMxwJllRD0ZKt4ejNwJU4wJHgbdkyRw5eqrghx66/z17c6', NULL, '2021-01-11 16:45:25', '2021-01-11 16:45:25', 'dragos'),
(3, 'Cont De Teste', 'ceva@ceva.com', NULL, '$2y$10$.CZfF/j.GIwHhjJNt.O1IOKo7L2REeUXTu4Zil6pGHIb3uNgc9sRS', 'FopUcOM4BXbTDGQl9gMb8eW3vERGzbQxUIzbuGztKt34yU7WegpfkUWAJHR5', '2021-01-12 13:57:13', '2021-01-12 13:57:13', 'ceva');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
