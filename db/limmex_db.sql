-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2020 at 12:50 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `limmex_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `sort_description`, `description`, `blog_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Where does it come from', 'where-does-it-come-from', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since', '1575797201.jpg', 1, '2019-12-08 09:27:50', '2019-12-08 03:26:41'),
(2, 'Why do we use it', 'why-do-we-use-it', '<p>It is a long established fact that a reader will be distracted by the readabl', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>', '1575797409.jpg', 1, '2019-12-08 09:30:09', '2019-12-26 06:21:00'),
(3, 'Lorem ipsum dolorm dolorm dolor', 'lorem-ipsum-dolorm-dolorm-dolor', '<p>Lorem ipsum dolorm dolorm dolorLorem ipsum dolorm dolorm dolorLorem ipsum dol', '<p>Lorem ipsum dolorm dolorm dolorLorem ipsum dolorm dolorm dolorLorem ipsum dolorm dolorm dolorLorem ipsum dolorm dolorm dolor</p>', '1576669714.jpg', 1, '2019-12-18 11:48:34', '2019-12-26 06:21:24'),
(4, 'Why do we use itt', 'why-do-we-use-itt', '<p>Lorem ipsum dolorm dolorm dolorLorem ipsum dolorm dolorm dolorLorem ipsum dol<p>Lorem ipsum dolorm dolorm dolorLorem ipsum dolorm dolorm dolorLorem ipsum dol', '<p>Lorem ipsum dolorm dolorm dolorLorem ipsum dolorm dolorm dolorLorem ipsum dolorm dolorm dolorLorem ipsum dolorm dolorm dolor</p>', '1579082169.jpg', 1, '2020-01-15 09:56:09', '2020-05-10 04:46:43'),
(5, 'Lorem Ipsum has been the industry', 'lorem-ipsum-has-been-the-industry', '<p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum ha', '<p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the</p>', '1589105341.jpg', 0, '2020-05-10 10:09:01', '2020-05-10 04:09:37');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `feature_icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `slug`, `description`, `feature_icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Web Design', 'web-design', '<p>more-or-less normal distribution of letters, as opposed to usingIpsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>', '1575798169.png', 1, '2019-12-08 09:42:49', '2020-05-10 03:22:31'),
(2, 'Local Transport', 'local-transport', '<p>making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>', '1575798237.png', 1, '2019-12-08 09:43:56', '2019-12-26 06:35:39'),
(4, 'Construct Development', 'construct-development', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it</p>', '1589102524.png', 1, '2020-05-10 09:22:04', '2020-05-10 03:22:04');

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
(39, '2014_10_12_000000_create_users_table', 1),
(40, '2014_10_12_100000_create_password_resets_table', 1),
(41, '2019_08_19_000000_create_failed_jobs_table', 1),
(42, '2019_12_02_043356_create_features_table', 1),
(43, '2019_12_02_043754_create_services_table', 1),
(44, '2019_12_02_043918_create_teams_table', 1),
(45, '2019_12_02_044033_create_priceplans_table', 1),
(46, '2019_12_02_044140_create_plans_table', 1),
(47, '2019_12_02_044326_create_blogs_table', 1),
(48, '2019_12_02_044426_create_contacts_table', 1),
(49, '2019_12_02_051847_create_testimonials_table', 1),
(50, '2019_12_05_081805_create_portfolios_table', 1),
(51, '2019_12_08_110103_create_sliders_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `image`, `link`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '1575800750.png', 'https://www.lipsum.com/', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC', 1, '2019-12-08 10:25:50', NULL),
(2, '1575800777.png', 'https://www.lipsumlip.com/', 'Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur', 1, '2019-12-08 10:26:17', NULL),
(3, '1575800807.png', 'http://localhost/Heus/public/', 'from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source', 1, '2019-12-08 10:26:47', NULL),
(4, '1575800848.png', 'http://amirgroup.com.bd/', 'Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero', 1, '2019-12-08 10:27:28', NULL),
(5, '1575800887.png', 'https://laravel.com/docs', 'This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum,', 1, '2019-12-08 10:28:08', '2019-12-26 07:00:10'),
(6, '1575805570.png', 'https://www.lvl.com/', '<p>consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable</p>', 1, '2019-12-08 11:46:10', '2019-12-26 07:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `priceplans`
--

CREATE TABLE `priceplans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `price` double NOT NULL DEFAULT 0,
  `product_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `priceplans`
--

INSERT INTO `priceplans` (`id`, `title`, `description`, `price`, `product_link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolord', 'Some migration operations are destructive, which means they may cause you to lose data. In order to protect', 58.66, 'https://codecanyon.net/item/royex-human-resource-and-payroll-management-software/24674724', '1575887532.png', 1, '2019-12-10 04:24:39', '2019-12-22 01:53:46'),
(2, 'Rolling Back Migrations', '<p>To rollback the latest migration operation, you may use the rollback command. This command</p>', 60.89, 'https://codecanyon.net/item/belontory-vue-laravel-inventory-management-system/23832864', '1575888594.png', 1, '2019-12-10 04:24:40', '2019-12-26 06:52:30'),
(4, 'Lorem ipsum dolor', 'If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t', 90.25, 'https://codecanyon.net/item/belontory-vue-laravel-inventory-management-system/23832864', '1575956022.png', 1, '2019-12-10 05:33:42', '2019-12-22 01:54:32');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `service_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `sort_description`, `slug`, `description`, `type`, `image`, `status`, `service_link`, `created_at`, `updated_at`) VALUES
(4, 'machine translator Bangla is sp', 'Ready Product', 'ready-product', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered', 'Ready Software', '1575954818.png', 1, 'https://www.facebook.com/groups/BUCSE45GROUPB/?ref=bookmarks', '2019-12-08 10:05:07', '2019-12-18 23:47:15'),
(5, 'Where does it come from', 'from a Lorem Ipsum', 'from-a-lorem-ipsum', '<p>Latin words, consectetur, from a Lorem Ipsum passage, and going through</p>', 'Ready Software', '1577354697.png', 1, 'https://www.facebook.com/groups/BUCSE45GROUPB/?ref=bookmarks', '2019-12-08 10:06:01', '2019-12-26 04:04:57'),
(6, 'Encrypt some text. The result shown will be', 'Encrypt some text. The result shown will beEncrypt some text. The result shown will be', 'encrypt-some-text-the-result-shown-will-beencrypt-some-text-the-result-shown-will-be', '<p>The standard chunk of Lorem Ipsum used since the 1500s is reproducedThe standard chunk of Lorem Ipsum used since the 1500s is reproduced</p>', 'Ready Software', '1575954783.png', 1, 'https://www.facebook.com/groups/BUCSE45GROUPB/?ref=bookmarks', '2019-12-08 10:06:23', '2019-12-28 23:15:31'),
(7, 'jest way for you to delete', 'On demand Product', 'on-demand-product', '<p>Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written</p>', 'Own Service', '1575955274.png', 1, 'https://www.cricbuzz.com/', '2019-12-10 05:21:14', '2019-12-28 23:13:47'),
(8, 'Where does it come from', 'from a Lorem Ipsum df', 'from-a-lorem-ipsum-df', '<p>The standard chunk of Lorem Ipsum used since the 1500s is reproducedThe</p>', 'Own Service', '1575955274.png', 1, 'https://www.cricbuzz.com/', '2019-12-19 06:35:19', '2019-12-28 23:14:23'),
(9, 'against some plaintext, to see if they match.', 'simply dummy text of the', 'simply-dummy-text-of-the', '<p>industry\'s standard dummy text ever since the 1500s, when an unknown printer tookindustry\'s standard dummy text ever since the 1500s, when an unknown printer took</p>', 'Ready WS', '1576738029.png', 1, 'https://www.cricbuzz.com/', '2019-12-19 06:47:10', '2019-12-28 23:15:56'),
(10, 'simply dummy text of the print', 'Lorem Ipsum is not simply', 'lorem-ipsum-is-not-simply', '<p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock</p>', 'Ready WS', '1576738085.png', 1, 'https://www.cricbuzz.com/', '2019-12-19 06:48:05', '2019-12-28 23:17:05'),
(11, 'Where does it come from', 'looked up one of the', 'looked-up-one-of-the', '<p>Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source</p>', 'Own Service', '1576738151.png', 1, 'https://www.cricbuzz.com/', '2019-12-19 06:49:11', '2019-12-28 23:14:47'),
(12, 'printer took a galley of type and scrambled it', 'The standard chunk of Lorem', 'the-standard-chunk-of-lorem', '<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from</p>', 'Ready WS', '1576738632.png', 1, 'https://www.cricbuzz.com/', '2019-12-19 06:57:12', '2019-12-28 23:17:31'),
(13, 'Lorem ipsum dolor', 'combined with a handful of model', 'combined-with-a-handful-of-model', '<p>combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>\r\n<p>combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>', 'On demand service', '1576738750.png', 1, 'https://www.cricbuzz.com/', '2019-12-19 06:59:10', '2019-12-26 06:17:48'),
(15, 'Where does it come from', 'Lorem Ipsum is therefore', 'lorem-ipsum-is-therefore', '<p>to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'On demand service', '1576738823.png', 1, 'https://www.cricinfo.com', '2019-12-19 07:00:23', '2020-05-10 02:32:22');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Lorem ipsum', 'Where can I get some', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>', '1575871420.png', 1, '2019-12-09 06:03:40', '2019-12-26 07:04:32'),
(3, 'fgfgh', 'iest way for you to', 'ome migration operations are destructive, which means they may cause you to lose data. In order to protect', '1575886976.png', 1, '2019-12-09 10:22:56', NULL),
(4, 'fgfgg', 'Lorem ipsum dolor', 'ome migration operations are destructive, which means they may cause you to lose data. In order to protect', '1575887214.png', 1, '2019-12-09 10:26:54', NULL),
(5, 'ffgh', 'Lorem ipsum dolor', 'ome migration operations are destructive, which means they may cause you to lose data. In order to protect', '1575887279.png', 1, '2019-12-09 10:27:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `image`, `fb_link`, `tw_link`, `in_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ashraf', 'main director', '1575800645.jpg', 'fb.com/65195ghfgdf', 'twitter.com/564912687', 'ln.com/5648983588', 1, '2019-12-08 10:24:05', '2019-12-08 04:24:05'),
(2, 'Sadique', 'general manager', '1575800671.jpg', 'fb.com/158955858', 'twitter.com/1111111555', 'ln.com/99556845', 1, '2019-12-08 10:24:31', '2019-12-26 06:46:07'),
(3, 'Ashraful Islam', 'Assistent manager', '1575800704.jpg', 'fb.com/65195ghfgdf85448', 'twitter.com/56491268794', 'ln.com/99556845684', 1, '2019-12-08 10:25:04', '2019-12-08 04:25:04'),
(4, 'shakhawat', 'Executive', '1580538515.jpg', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.linkin.com/', 1, '2020-02-01 06:23:25', '2020-02-01 00:28:35');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comments` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin saab', 'admin@exp.com', '2019-12-09 04:28:11', '$2y$12$HLMHBNkLYiKZDrU4R5lj/uPGL74PBobJkHmqL1v/8kG/TE.hyGAdm', 'tH9nBxbIIfY00D5cszZqbFI7I47MqT6zbJCRmmABDgvOo98FkFVC4FHK9p2F', '2019-12-09 04:29:00', '2019-12-26 05:50:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_title_unique` (`title`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `features_title_unique` (`title`) USING HASH;

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
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `priceplans`
--
ALTER TABLE `priceplans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_sort_description_unique` (`sort_description`) USING HASH;

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `priceplans`
--
ALTER TABLE `priceplans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
