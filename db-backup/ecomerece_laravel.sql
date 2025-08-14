-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2025 at 07:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomerece_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `massages`
--

CREATE TABLE `massages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `massage` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_08_02_172502_create_massages_table', 1),
(5, '2025_08_02_212900_create_products_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `code`, `Name`, `image`, `price`, `description`, `created_at`, `updated_at`) VALUES
(19, 9, 'Numquam ut aut.', 'Tempora unde.', 'https://m.media-amazon.com/images/I/31ZXLg+sbHL.AC_SX250.jpg', 1904, 'Debitis aliquid quas nulla voluptatibus eveniet rem. Minima odit autem laborum aliquid.', '2025-08-14 03:33:36', '2025-08-14 03:33:36'),
(20, 6, 'Repudiandae.', 'Voluptate omnis sit.', 'https://m.media-amazon.com/images/I/31ZXLg+sbHL.AC_SX250.jpg', 1510, 'Eos ducimus possimus autem ut. Tenetur velit veritatis et dolor consectetur et soluta. Quisquam sunt ut earum.', '2025-08-14 03:33:36', '2025-08-14 03:33:36'),
(21, 7, 'Aut in.', 'Ut placeat omnis et.', 'https://m.media-amazon.com/images/I/31ZXLg+sbHL.AC_SX250.jpg', 602, 'Aut pariatur sunt inventore enim molestias. Dicta eius laudantium ad dolor eligendi. Deserunt quod ratione nam dolores.', '2025-08-14 03:33:36', '2025-08-14 03:33:36'),
(22, 1, 'Expedita iste.', 'Cupiditate id et.', 'https://m.media-amazon.com/images/I/31ZXLg+sbHL.AC_SX250.jpg', 1553, 'Repellat quo autem sed corporis. Soluta atque totam sit error et aut iusto. Porro occaecati ad dolorem magni corporis culpa perferendis.', '2025-08-14 03:33:36', '2025-08-14 03:33:36'),
(23, 4, 'Et voluptatem.', 'Perferendis unde.', 'https://m.media-amazon.com/images/I/31ZXLg+sbHL.AC_SX250.jpg', 1093, 'Ab tempora et aspernatur molestiae modi vitae. Culpa fugiat molestiae delectus accusantium. Tenetur molestiae molestiae aspernatur et.', '2025-08-14 03:33:36', '2025-08-14 03:33:36'),
(24, 8, 'Est dolores.', 'Numquam aut.', 'https://m.media-amazon.com/images/I/31ZXLg+sbHL.AC_SX250.jpg', 1635, 'Dicta rerum itaque incidunt eveniet suscipit qui quasi voluptas. Et ut accusantium sed. Recusandae et consequatur quo in quisquam.', '2025-08-14 03:33:36', '2025-08-14 03:33:36'),
(26, 8, 'Nam blanditiis.', 'Nihil ipsam ipsum.', 'https://m.media-amazon.com/images/I/31ZXLg+sbHL.AC_SX250.jpg', 779, 'Qui repellendus ad facilis molestiae porro. Maiores itaque natus quam enim.', '2025-08-14 03:33:36', '2025-08-14 03:33:36'),
(29, 1, 'Et vitae.', 'At a ea inventore.', 'https://m.media-amazon.com/images/I/31ZXLg+sbHL.AC_SX250.jpg', 1374, 'Possimus earum placeat unde quo dolores laboriosam vitae. Et consequatur atque eum tenetur. Id et aliquam consectetur ex.', '2025-08-14 03:33:36', '2025-08-14 03:33:36'),
(30, 5, 'Dignissimos ut.', 'Voluptatem.', 'https://m.media-amazon.com/images/I/31ZXLg+sbHL.AC_SX250.jpg', 647, 'Sunt reiciendis necessitatibus a ea. Expedita minima neque eligendi ipsam doloribus facere et. Laborum magni maxime sed ab aperiam fugiat et dolorem.', '2025-08-14 03:33:36', '2025-08-14 03:33:36'),
(31, 8, 'Qui ex sint.', 'Est iure facere.', 'https://m.media-amazon.com/images/I/31ZXLg+sbHL.AC_SX250.jpg', 770, 'Nostrum aut alias et quo officia. Deserunt iure quia ullam qui nulla facere eos. Ut enim nesciunt adipisci vitae dolor voluptatem.', '2025-08-14 03:33:36', '2025-08-14 03:33:36'),
(32, 5, 'Quasi quia.', 'A facilis.', 'https://m.media-amazon.com/images/I/31ZXLg+sbHL.AC_SX250.jpg', 1916, 'In id et sed sit. Consectetur aspernatur ut quas totam. Necessitatibus odit voluptatem consequatur facere.', '2025-08-14 03:33:36', '2025-08-14 03:33:36'),
(33, 7, 'Fuga quaerat.', 'Doloribus quam quos.', 'https://m.media-amazon.com/images/I/31ZXLg+sbHL.AC_SX250.jpg', 1547, 'Minus ipsum est non omnis. Voluptatum est non vel similique.', '2025-08-14 03:33:36', '2025-08-14 03:33:36'),
(34, 10, 'Consequatur.', 'Exercitationem.', 'https://m.media-amazon.com/images/I/31ZXLg+sbHL.AC_SX250.jpg', 1014, 'Atque assumenda quasi est doloribus sed dolorem. Sit eum voluptas ut nihil qui fuga. Dolor quaerat esse sed sit.', '2025-08-14 03:33:36', '2025-08-14 03:33:36'),
(35, 10, 'Vero harum.', 'Exercitationem.', 'https://m.media-amazon.com/images/I/31ZXLg+sbHL.AC_SX250.jpg', 1095, 'Ea vel tenetur ut eos vel. Consequatur iure voluptates quia rerum. Consequatur inventore velit aliquid in. Ex ipsa vel non ipsa non autem.', '2025-08-14 03:33:36', '2025-08-14 03:33:36'),
(36, 8, 'In nemo minus.', 'Exercitationem sint.', 'https://m.media-amazon.com/images/I/31ZXLg+sbHL.AC_SX250.jpg', 1731, 'Omnis at deleniti fugit cumque voluptatem. Et molestias a ut fugiat quasi quo. Ipsa illum quod rerum maxime magni explicabo rem.', '2025-08-14 03:33:36', '2025-08-14 03:33:36'),
(37, 3, 'Quidem.', 'Et earum aperiam.', 'https://m.media-amazon.com/images/I/31ZXLg+sbHL.AC_SX250.jpg', 678, 'Quis nemo quasi architecto et. Ex aspernatur minus tempore ut ab. Et culpa odio modi.', '2025-08-14 03:33:37', '2025-08-14 03:33:37');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6V2FZtduNl730S8RfxkOIh8FCtjqDBv7sjueocyk', 12, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTERlVjRob05OMVJTUk92NGlwNFhETWxxODN6VVdrVXJxSmt2MW9EZyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjEyO30=', 1755149833);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','supplier','admin') NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Annette Kunde V', 'wkrajcik@example.com', '2025-08-14 03:33:35', '$2y$12$7l9Se3X.2jqYmusEolEaBO/IBYn6w6adpCGO3u/QddXyH/mlkcctK', 'user', 'tZvpWX0Svm', '2025-08-14 03:33:35', '2025-08-14 03:33:35'),
(2, 'Kailee Christiansen', 'allie30@example.com', '2025-08-14 03:33:35', '$2y$12$7l9Se3X.2jqYmusEolEaBO/IBYn6w6adpCGO3u/QddXyH/mlkcctK', 'user', 'ByZT3fmw87', '2025-08-14 03:33:35', '2025-08-14 03:33:35'),
(3, 'Leopoldo Rath', 'korbin27@example.com', '2025-08-14 03:33:35', '$2y$12$7l9Se3X.2jqYmusEolEaBO/IBYn6w6adpCGO3u/QddXyH/mlkcctK', 'user', 'xtZHG0NsbA', '2025-08-14 03:33:35', '2025-08-14 03:33:35'),
(4, 'Marcel Hand', 'cristian68@example.net', '2025-08-14 03:33:35', '$2y$12$7l9Se3X.2jqYmusEolEaBO/IBYn6w6adpCGO3u/QddXyH/mlkcctK', 'user', 'P2nYKEoLtJ', '2025-08-14 03:33:35', '2025-08-14 03:33:35'),
(5, 'Lenore Cormier', 'epagac@example.net', '2025-08-14 03:33:35', '$2y$12$7l9Se3X.2jqYmusEolEaBO/IBYn6w6adpCGO3u/QddXyH/mlkcctK', 'user', 'NnlFio4FGs', '2025-08-14 03:33:35', '2025-08-14 03:33:35'),
(6, 'Freda McKenzie', 'vesta.pfannerstill@example.net', '2025-08-14 03:33:35', '$2y$12$7l9Se3X.2jqYmusEolEaBO/IBYn6w6adpCGO3u/QddXyH/mlkcctK', 'user', 'IvML19CsGo', '2025-08-14 03:33:35', '2025-08-14 03:33:35'),
(7, 'Edythe Rosenbaum', 'jordi.treutel@example.net', '2025-08-14 03:33:35', '$2y$12$7l9Se3X.2jqYmusEolEaBO/IBYn6w6adpCGO3u/QddXyH/mlkcctK', 'user', 'BW6VbkWglh', '2025-08-14 03:33:35', '2025-08-14 03:33:35'),
(8, 'Amos Swift', 'rahul.hand@example.net', '2025-08-14 03:33:35', '$2y$12$7l9Se3X.2jqYmusEolEaBO/IBYn6w6adpCGO3u/QddXyH/mlkcctK', 'user', 'rCKLniHUdK', '2025-08-14 03:33:35', '2025-08-14 03:33:35'),
(9, 'Doug Hermann', 'pspinka@example.com', '2025-08-14 03:33:35', '$2y$12$7l9Se3X.2jqYmusEolEaBO/IBYn6w6adpCGO3u/QddXyH/mlkcctK', 'user', '5mpFhISJQ7', '2025-08-14 03:33:35', '2025-08-14 03:33:35'),
(10, 'Dr. Arnulfo Mills', 'umueller@example.net', '2025-08-14 03:33:35', '$2y$12$7l9Se3X.2jqYmusEolEaBO/IBYn6w6adpCGO3u/QddXyH/mlkcctK', 'user', 'h5hAKxV7JH', '2025-08-14 03:33:35', '2025-08-14 03:33:35'),
(11, 'Test User', 'test@example.com', '2025-08-14 03:33:37', '$2y$12$7l9Se3X.2jqYmusEolEaBO/IBYn6w6adpCGO3u/QddXyH/mlkcctK', 'user', 'M2KUTNCPXc', '2025-08-14 03:33:37', '2025-08-14 03:33:37'),
(12, 'samir', 'samir@gamil.com', NULL, '$2y$12$CJsG7yBI0DmxJ4DgUP1gqOF6uNNeNtO0FL.87sr3PPySBpfXgq1D.', 'admin', NULL, '2025-08-14 03:34:17', '2025-08-14 03:34:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `massages`
--
ALTER TABLE `massages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_code_unique` (`code`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `massages`
--
ALTER TABLE `massages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
