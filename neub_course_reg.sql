-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 02:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devskill`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_lists`
--

CREATE TABLE `course_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_credit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_lists`
--

INSERT INTO `course_lists` (`id`, `course_name`, `course_code`, `course_credit`, `created_at`, `updated_at`) VALUES
(1, 'Fundament of Computer', 'CSE-111', '3', '2022-02-27 06:38:39', '2022-02-27 06:38:39'),
(2, 'Basic electrical engineering', 'CSE 313', '3', '2022-02-27 06:39:17', '2022-02-27 06:39:17'),
(3, 'Basic electrical engineering Lab', 'CSE 122', '1.5', '2022-02-27 06:39:35', '2022-02-27 06:39:35'),
(4, 'Calculus', 'MAT 101', '3', '2022-02-27 06:39:53', '2022-02-27 06:39:53'),
(5, 'Data structure', 'CSE 131', '3', '2022-02-27 06:40:14', '2022-02-27 06:40:14'),
(6, 'Data structure lab', 'CSE 132', '1.5', '2022-02-27 06:40:32', '2022-02-27 06:40:32'),
(7, 'Discrete mathematics', 'CSE 123', '3', '2022-02-27 06:40:54', '2022-02-27 06:40:54'),
(8, 'Fundamental of Chemistry', 'CHE 101', '3', '2022-02-27 06:41:13', '2022-02-27 06:41:13'),
(9, 'Matrices vector analysis and geometry\'', 'MAT 103', '3', '2022-02-27 06:41:32', '2022-02-27 06:41:32'),
(10, 'Mechanics, wave, heat & thermodynamics', 'PHY 101', '3', '2022-02-27 06:41:47', '2022-02-27 06:41:47'),
(11, 'Object oriented programming language', 'CSE 314', '3', '2022-02-27 06:42:07', '2022-02-27 06:42:07'),
(12, 'Object oriented programming language lab', 'CSE 314', '3', '2022-02-27 06:42:20', '2022-02-27 06:42:20'),
(13, 'Structured programming language', 'CSE 112', '3', '2022-02-27 06:43:00', '2022-02-27 06:43:00'),
(14, 'Structured programming language lab', 'CSE 114', '1.5', '2022-02-27 06:43:18', '2022-02-27 06:43:18'),
(15, 'Bangladesh studies', 'GED 101', '3', '2022-02-27 06:43:50', '2022-02-27 06:43:50'),
(16, 'Electromagnetism and optics', 'PHY 103', '3', '2022-02-27 06:44:38', '2022-02-27 06:44:38'),
(17, 'English language', 'ENG 101', '3', '2022-02-27 06:44:57', '2022-02-27 06:44:57'),
(18, 'Digital logic design', 'CSE 221', '3', '2022-02-27 06:45:19', '2022-02-27 06:45:19'),
(19, 'Digital logic design lab', 'CSE 222', '1.5', '2022-02-27 06:45:38', '2022-02-27 06:45:38'),
(20, 'Project work 1', 'CSE 200', '2', '2022-02-27 06:46:02', '2022-02-27 06:46:02');

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
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'CSE(Computer Science Engineering)', '2022-02-27 06:35:08', '2022-02-27 06:35:08');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_26_134803_create_groups_table', 1),
(6, '2022_02_26_135449_create_semesters_table', 1),
(7, '2022_02_27_091556_create_course_lists_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `semester_name`, `created_at`, `updated_at`) VALUES
(1, 'First Semester', '2022-02-27 07:02:46', '2022-02-27 07:02:46'),
(2, 'Second Semester', '2022-02-27 07:03:11', '2022-02-27 07:03:11'),
(3, 'Third Semester', '2022-02-27 07:03:19', '2022-02-27 07:03:19'),
(4, 'Fourth Semester', '2022-02-27 07:03:23', '2022-02-27 07:03:23'),
(5, 'Fifth Semester', '2022-02-27 07:03:29', '2022-02-27 07:03:29'),
(6, 'Six Semester', '2022-02-27 07:03:34', '2022-02-27 07:03:34'),
(7, 'Seven Semester', '2022-02-27 07:03:38', '2022-02-27 07:03:38'),
(8, 'Eight Semester', '2022-02-27 07:03:42', '2022-02-27 07:03:42'),
(9, 'Nine Semester', '2022-02-27 07:03:46', '2022-02-27 07:03:46'),
(10, 'Ten Semester', '2022-02-27 07:03:50', '2022-02-27 07:03:50'),
(11, 'Eleven Semster', '2022-02-27 07:03:58', '2022-02-27 07:03:58'),
(12, 'Twelve Semester', '2022-02-27 07:04:03', '2022-02-27 07:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mubarak Hussain', 'mubarakbd@gmail.com', NULL, '1', NULL, '$2y$10$WRJZ9RQENTbAyJdwi04bMOI41Ip8Vil/k/vcVyRrk/K7ev0CB7YvG', NULL, '2022-02-27 06:34:48', '2022-02-27 06:34:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_lists`
--
ALTER TABLE `course_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
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
-- AUTO_INCREMENT for table `course_lists`
--
ALTER TABLE `course_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
