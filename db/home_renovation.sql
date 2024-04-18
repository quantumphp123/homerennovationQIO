-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 17, 2024 at 10:54 PM
-- Server version: 10.6.17-MariaDB-cll-lve
-- PHP Version: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_renovation`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_static_pages`
--

CREATE TABLE `app_static_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `app_static_pages`
--

INSERT INTO `app_static_pages` (`id`, `type`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Tests', 'Test Content', '2023-02-27 01:49:14', '2023-02-27 13:10:37'),
(3, 'asa', 'assa', '2023-02-28 14:41:53', '2023-02-28 14:41:53');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Living', '2023-02-15 04:16:57', '2023-02-27 15:09:11'),
(4, 'Bathroom', '2023-02-15 04:17:05', '2023-02-15 04:17:05'),
(5, 'Kitchen', '2023-02-15 04:17:14', '2023-02-15 04:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `site_address` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `phone`, `site_address`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'password123', 'user@gmail.com', '8770968890', 'CDBsjgvgj', NULL, '2023-03-06 20:44:39', '2023-03-06 20:44:39'),
(2, 'password123', 'user@gmail.com', '10', 'CDBsjgvgj', NULL, '2023-03-06 20:49:09', '2023-03-06 20:49:09'),
(3, 'password123', 'user@gmail.com', '8770968890', 'CDBsjgvgj', NULL, '2023-03-06 20:50:25', '2023-03-06 20:50:25'),
(4, 'password123', 'user@gmail.com', '8770968890', 'CDBsjgvgj', NULL, '2023-03-06 20:53:28', '2023-03-06 20:53:28');

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_name` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `contract` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `staff_id`, `client_name`, `work`, `contract`, `created_at`, `updated_at`) VALUES
(2, 8, 'client_name', 'work', 'g8pFHQAJmTmorsrzG2ZKNdeqEbPBkvab.pdf', '2023-06-05 15:11:19', '2023-06-05 15:11:19'),
(3, 10, 'client_name', 'work', 'jn6o8A7Phy9uJxnaWpd9Sw03fk3wdU0a.pdf', '2023-06-05 17:15:15', '2023-06-05 17:15:15'),
(4, 10, 'client_name', 'work', 'kdXl3OnP6TxH24FNlko9YR6Jd0cUwbSA.pdf', '2023-06-05 17:19:55', '2023-06-05 17:19:55'),
(5, 10, 'client_name', 'work', '4N4K54DZEzUiOPECFsEmKX3TEKYxGL0L.pdf', '2023-06-05 18:01:08', '2023-06-05 18:01:08'),
(6, 10, 'client_name', 'work', 'awcGNYBPeZra0G4p4jDwSV7jXp4xBoHt.pdf', '2023-06-05 18:02:34', '2023-06-05 18:02:34'),
(7, 10, 'client_name', 'work', 'csNcNYjoJQWhoXHxsnOepZSeMnTs95Ty.pdf', '2023-06-05 18:02:58', '2023-06-05 18:02:58'),
(8, 10, 'client_name', 'work', 'hBCjJp1ZeAgnxhfRCeNDQhN6aj3nWYH6.pdf', '2023-06-05 18:12:22', '2023-06-05 18:12:22'),
(9, 10, 'client_name', 'work', 'p8lYXrMyQl4scNoo14BYpBZvCe4xFOyr.pdf', '2023-06-05 19:00:11', '2023-06-05 19:00:11'),
(10, 10, 'a', 'a', 'tdIHnMFkSDOdI4pkJAPWelq4aFRT4X1u.pdf', '2023-06-05 19:14:09', '2023-06-05 19:14:09'),
(11, 10, 'a', 'a', 'TYqSVSMDml6hZNMKc4jsiiLFjwnNFzOV.pdf', '2023-06-05 19:15:53', '2023-06-05 19:15:53'),
(12, 10, 'a', 'a', 'q5RXTatkIgtMW5yz2LTqoY0JeyZ5eJT8.pdf', '2023-06-05 19:19:24', '2023-06-05 19:19:24'),
(13, 10, 'qa', 'Testing', 'EddeXXO4ivecgEW1sroWK42xvGN68hcH.pdf', '2023-06-05 19:20:44', '2023-06-05 19:20:44'),
(14, 10, 'a', 'a', 'Z8NNTOuhEG7N0uB4ZAsReydTJhsUoZ5I.pdf', '2023-06-05 19:21:20', '2023-06-05 19:21:20'),
(15, 10, 'a', 'a', 'aUcQnYzwDHy66vXFJctCzCoCoMuzMwfI.pdf', '2023-06-05 19:23:32', '2023-06-05 19:23:32'),
(16, 10, 'a', 'a', '2ceJA8kZ9z2xpdnzcRUxCRFrhZiihQWX.pdf', '2023-06-05 19:27:02', '2023-06-05 19:27:02'),
(17, 10, 'a', 'a', 'EL8spcgV3Rz3dIwj9k6izwpOrXPex3ne.pdf', '2023-06-05 19:29:17', '2023-06-05 19:29:17'),
(18, 8, 'b', 'b', 'ny7V3ZvfEpuUOmN1G4FSPvRlLWdQaPe3.pdf', '2023-06-05 19:29:18', '2023-06-05 19:29:18'),
(19, 10, 'a', 'a', 'z5qMQWqEletjigTsjYaNnfFvLOqBe4g9.pdf', '2023-06-05 19:29:53', '2023-06-05 19:29:53'),
(20, 10, 'a', 'a', 'A7bvMh99mbKrw4Qj21nZCClYcQxkSlmF.pdf', '2023-06-05 19:30:40', '2023-06-05 19:30:40'),
(21, 10, 'a', 'a', 'LwXuJBMDw4cFYgVOP4pmvAWEXTpN0krI.pdf', '2023-06-05 19:31:31', '2023-06-05 19:31:31'),
(22, 10, 'a', 'a', '5Sw4BjXHbQPjqtR9gMfKWeWv5jqz3NsQ.pdf', '2023-06-05 19:35:20', '2023-06-05 19:35:20'),
(23, 10, 'teso', 'Testing', 'QyZcy3IEJtZC35W3ePAljvMvYTYPO3uT.pdf', '2023-06-15 12:43:47', '2023-06-15 12:43:47'),
(24, 10, 'teso', 'Testing', 'nAeDyfS8BH5HQ5SAbjccZ0XvKosB6Q0y.pdf', '2023-06-15 12:43:48', '2023-06-15 12:43:48'),
(25, 8, 'a', 'a', 'R3eCwdfcSB6GhpnQ5thjp0SJZTx0egxN.pdf', '2023-06-15 16:18:53', '2023-06-15 16:18:53'),
(26, 8, 'a', 'a', 'UpzOoT1hJExeHh8ZJToMdJfxLnPuM1ME.pdf', '2023-06-15 16:27:29', '2023-06-15 16:27:29'),
(27, 8, 'a', 'a', '6XtqcPWQjz1aROAmzlEUk3evT6DhlKwF.pdf', '2023-06-15 17:02:04', '2023-06-15 17:02:04'),
(28, 8, 'a', 'a', 'ado2qcMJL0IQHjhbaWS87MSpAAOALO8W.pdf', '2023-06-15 17:12:08', '2023-06-15 17:12:08'),
(29, 8, 'a', 'a', '9MxWijjuog9y9YGdibB7TZXYBCIJaEYo.pdf', '2023-06-15 17:17:47', '2023-06-15 17:17:47'),
(30, 8, 'a', 'a', 'BVduNqAWnco6vKyUrmPbN4cv5ZWPgpU3.pdf', '2023-06-15 17:25:37', '2023-06-15 17:25:37'),
(31, 8, 'a', 'a', 'GCdVY5h9Rq6DgF2dozDgNyqUTT0Ud41q.pdf', '2023-06-15 17:31:02', '2023-06-15 17:31:02'),
(32, 8, 'a', 'a', 'xGaLGhWmLQh2QbySZrmTanuxD1qaNUhz.pdf', '2023-06-15 17:33:49', '2023-06-15 17:33:49'),
(33, 8, 'a', 'a', 'HZlnOPMvA3WXHlGnsPpK0mXl60kfkTp7.pdf', '2023-06-15 17:37:38', '2023-06-15 17:37:38'),
(34, 8, 'a', 'a', 'NlnejJiXZ6lZpZj4VMD3mtJIbjbALzQZ.pdf', '2023-06-15 17:44:03', '2023-06-15 17:44:03'),
(35, 8, 'a', 'a', 'c92vRKIAtHeQa0SCZswUEYKmRraT7Dou.pdf', '2023-06-15 17:44:41', '2023-06-15 17:44:41'),
(36, 8, 'a', 'a', 'FHDH0XroZyrt5BZwQB7SlYlS9IGo4Zfm.pdf', '2023-06-15 17:46:31', '2023-06-15 17:46:31'),
(37, 8, 'a', 'a', '6NZQHoRBMhXwFeEFyTSAJetJ78MyZku2.pdf', '2023-06-15 17:53:01', '2023-06-15 17:53:01'),
(38, 8, 'a', 'a', 'tJFt4k514nHK2K8aFHIzc1E0BVndvFkr.pdf', '2023-06-15 17:56:00', '2023-06-15 17:56:00'),
(39, 8, 'a', 'a', 'ODyCP81WOOZjbDke8HUeX9Ap9gBYGRQo.pdf', '2023-06-15 18:51:56', '2023-06-15 18:51:56'),
(40, 8, 'a', 'a', 'nbS6PNXyEneP0xflZbZr3CxhXNxRCUT4.pdf', '2023-06-15 18:52:50', '2023-06-15 18:52:50'),
(41, 8, 'a', 'a', 'YtG1ZnsOD4bVnXE6vkcANFA21Bdsnw9J.pdf', '2023-06-15 18:52:54', '2023-06-15 18:52:54'),
(42, 8, 'a', 'a', 'uqZp4unFdiuSB94rXx1wr7526wiqWpt9.pdf', '2023-06-15 18:53:09', '2023-06-15 18:53:09'),
(43, 8, 'a', 'a', 'yJUl8Dw3EccK2rjI9xmfMoTsZcoqbzYz.pdf', '2023-06-15 18:54:57', '2023-06-15 18:54:57'),
(44, 8, 'a', 'a', '9gzifCBe5xHYZ24wdYN9r5GvtwJ5LmTl.pdf', '2023-06-15 18:59:52', '2023-06-15 18:59:52'),
(45, 8, 'a', 'a', 'aYGZQdmRCSV9qY1Zs41sANeG8Z1Z4zFm.pdf', '2023-06-15 19:05:07', '2023-06-15 19:05:07'),
(46, 8, 'a', 'a', 'KydqAljZDhAJ1M3Nis3o43WZElsghJcf.pdf', '2023-06-15 19:16:39', '2023-06-15 19:16:39'),
(47, 8, 'OwnerName', 'qwerty', 'hwnioDXty5DP5vPkiHhYOXE4BA9Nzf95.pdf', '2023-06-20 13:40:52', '2023-06-20 13:40:52'),
(48, 10, 'Testing', 'Testing Purposes', 'E7IT9abi5GMkkwAMIeHW6FAHGat5dFVX.pdf', '2023-06-20 14:13:52', '2023-06-20 14:13:52'),
(49, 8, 'a', 'a', 'BQob8QE9FoQO9BkYrjgTF9xBnpsdQydk.pdf', '2023-06-22 21:10:00', '2023-06-22 21:10:00'),
(50, 10, 'Onwer', 'House remodeling', 'D6VFZZMbi6aZg87k3kbrYQ1HcBU66KLM.pdf', '2023-06-30 11:32:18', '2023-06-30 11:32:18'),
(51, 8, 'a', 'a', 'BKJ5aIcVRZs8eMqn7eb0mFCLyELelkhH.pdf', '2023-06-30 17:08:35', '2023-06-30 17:08:35');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_04_01_100000_create_roles_table', 1),
(6, '2021_04_01_200000_add_role_id_to_users_table', 1),
(7, '2023_02_10_111708_create_categories_table', 1),
(8, '2023_02_10_124236_create_products_table', 1),
(9, '2023_02_10_163723_create_app_static_pages_table', 2),
(10, '2023_02_10_181540_create_app_static_pages_table', 3),
(11, '2023_02_10_182451_create_staff_table', 4),
(12, '2023_02_11_074122_add_status_to_users', 5),
(13, '2023_02_12_034317_create_clients_table', 6),
(14, '2023_02_13_130815_create_services_table', 7),
(15, '2023_02_13_131010_create_portfolios_table', 7),
(16, '2016_06_01_000001_create_oauth_auth_codes_table', 8),
(17, '2016_06_01_000002_create_oauth_access_tokens_table', 8),
(18, '2016_06_01_000003_create_oauth_refresh_tokens_table', 8),
(19, '2016_06_01_000004_create_oauth_clients_table', 8),
(20, '2016_06_01_000005_create_oauth_personal_access_clients_table', 8),
(21, '2023_06_04_135035_create_contracts_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('068c08add66c163f50299ecd5d5c4a9944d47af8ad13108222f498333a9208ee2ce5e86688c4612f', 8, 7, 'authToken', '[]', 0, '2023-05-04 12:34:19', '2023-05-04 12:34:19', '2024-05-04 05:34:19'),
('096609b07702ea4c81ca7a84e34f410eac2fe8c3de283e5437f5232ad46353a9af8446d656f161b4', 5, 7, 'authToken', '[]', 0, '2023-02-27 18:36:44', '2023-02-27 18:36:44', '2024-02-27 11:36:44'),
('0d6fd14d90124d617a44e9a0a881354333c6b4a5dcab550278a08ececd3ed13070c208af835f667a', 10, 7, 'authToken', '[]', 0, '2023-06-06 11:28:25', '2023-06-06 11:28:25', '2024-06-06 04:28:25'),
('0eb9f89d70292510ef02c15f980f2a17501bb7384c536f3f0235a39cc4f145101a807a6e930f75bd', 8, 7, 'authToken', '[]', 0, '2023-03-15 14:27:02', '2023-03-15 14:27:02', '2024-03-15 07:27:02'),
('169d5a333daace66052d05cf238dd212d9faf5895ba0ebd11e6c21fa89911f94f0b1b44ff7d7ac8d', 10, 7, 'authToken', '[]', 0, '2023-07-24 12:26:48', '2023-07-24 12:26:48', '2024-07-24 05:26:48'),
('176628afeb5506e0401562ef7d829583c53b5bcbb87ca992e903c23ce613a0175c37de7217458702', 4, 7, 'authToken', '[]', 0, '2023-03-06 20:58:05', '2023-03-06 20:58:05', '2024-03-06 13:58:05'),
('1a0ba60e563360c8151947b5440da86751bfb36dae2df37f308216c113646b4db022cd169d8770f5', 4, 7, 'authToken', '[]', 0, '2023-03-06 20:01:26', '2023-03-06 20:01:26', '2024-03-06 13:01:26'),
('1d2e77f274a97be9ca1fe59210a2ff7faea061d50472e0e2f68591110f0d6cade0670b0798507473', 4, 7, 'authToken', '[]', 0, '2023-03-06 20:57:53', '2023-03-06 20:57:53', '2024-03-06 13:57:53'),
('1e8d6316914a79350c554de62604dfe52557527c09c9580fd7102b51de19663641469f8d248fb381', 8, 7, 'authToken', '[]', 0, '2023-02-28 16:09:20', '2023-02-28 16:09:20', '2024-02-28 09:09:20'),
('28c9fcb2cd94339e6b25b7248a082193ce12e89d1e5bd5a3c0e8c379690be924d2e405bca020f0e2', 4, 7, 'authToken', '[]', 0, '2023-03-12 14:55:33', '2023-03-12 14:55:33', '2024-03-12 07:55:33'),
('2a6720b1b0cb088d94313e7d48d06f0196049a0ab514ce012408fc918e085c6ace41813f2ad671b3', 8, 7, 'authToken', '[]', 0, '2023-02-28 13:35:57', '2023-02-28 13:35:57', '2024-02-28 06:35:57'),
('2bc3d55b666dc14d8d6ee19ee81d301aa33ce55cbf21f1a96aeef57e92ab56b55bd42d8f46d5b977', 10, 7, 'authToken', '[]', 0, '2023-06-05 13:41:13', '2023-06-05 13:41:13', '2024-06-05 06:41:13'),
('2cf29eca0ee139f8b47a583b922697e72ebae59367f8637736bdd01c6975d7a9b862b69e666e1394', 8, 7, 'authToken', '[]', 0, '2023-05-02 18:56:54', '2023-05-02 18:56:54', '2024-05-02 11:56:54'),
('2cfe3e678b2dfdf508a90a934eb0c67f4cd53ecd4aa296f96bdece0b108166b0aa07f2ce1ac94267', 8, 7, 'authToken', '[]', 0, '2023-05-31 16:06:40', '2023-05-31 16:06:40', '2024-05-31 09:06:40'),
('2f620c55c5a284672f8d6ebb14b0d86228ba443283d93403801246d9f8d84d87d67a328e8f396b26', 4, 7, 'authToken', '[]', 0, '2023-03-06 20:56:05', '2023-03-06 20:56:05', '2024-03-06 13:56:05'),
('3480a3cd6cf9fa85e888f5a507f8abc885d20c18633e178faa7e031561070fad2e14983bdfc102bf', 10, 7, 'authToken', '[]', 0, '2023-06-30 11:24:58', '2023-06-30 11:24:58', '2024-06-30 04:24:58'),
('35d62af112979d11f181c85d5932f667d45d738f12b78bed4e3e1b67d81f935707d06774cf11e6e7', 8, 7, 'authToken', '[]', 0, '2023-06-19 23:01:30', '2023-06-19 23:01:30', '2024-06-19 16:01:30'),
('381a9bd47f8b27c1f123993108e3580a71d7362f195a6ab6a2dff17aa671a8bf28ea5116788459be', 8, 7, 'authToken', '[]', 0, '2023-07-24 12:24:17', '2023-07-24 12:24:17', '2024-07-24 05:24:17'),
('434236c50aacff1130e918e5d5ade5a24c99cc99a3e91c8fdb67a951a85a3291de72462b4f67ba5b', 10, 7, 'authToken', '[]', 0, '2023-06-06 11:27:35', '2023-06-06 11:27:35', '2024-06-06 04:27:35'),
('4a37b90a62be3e56755f1ee0044a495e65f7a09479b8671025d536a18080e4549af9c72009a43bbd', 10, 7, 'authToken', '[]', 0, '2023-06-05 13:46:12', '2023-06-05 13:46:12', '2024-06-05 06:46:12'),
('4beceddfe4b7b200cd75ee7512149fe0f892864ea5784933a9c3f63049af6c741d9c91286ae0e813', 4, 7, 'authToken', '[]', 0, '2023-03-06 20:10:34', '2023-03-06 20:10:34', '2024-03-06 13:10:34'),
('4dea7a3e10fcb675d34caa3ef4fca9180d8e58b652eae97f5f9a1b479c22b3ba2efc7babaff167d0', 10, 7, 'authToken', '[]', 0, '2023-06-06 13:01:15', '2023-06-06 13:01:15', '2024-06-06 06:01:15'),
('511b494e223e4eba8d183379c5a24d3f8576662983275dd51170a4412929707884f03a9a036dec67', 8, 7, 'authToken', '[]', 0, '2023-03-03 14:14:31', '2023-03-03 14:14:31', '2024-03-03 07:14:31'),
('51bd06df14535675c2fdb11d1b4b6462c74228c914393eab27e28e1521cbddc0f22db6ff47493954', 8, 7, 'authToken', '[]', 0, '2023-06-19 17:52:58', '2023-06-19 17:52:58', '2024-06-19 10:52:58'),
('583b635b56522092d01a31493d27bef952244409d1de2e58999309cc84d681d259f238939b089b3f', 8, 7, 'authToken', '[]', 0, '2023-05-09 17:33:21', '2023-05-09 17:33:21', '2024-05-09 10:33:21'),
('58a2f6ac9510bdca99711f4f71bd7b549200a3ba1266bd7f792006d59cbbec98bc147ec7934403a5', 8, 7, 'authToken', '[]', 0, '2023-02-28 15:41:46', '2023-02-28 15:41:46', '2024-02-28 08:41:46'),
('58be31bbb07956159aa8fb85b722ac954feb133b015a23204600f06c5b71b917c599f1f68b492740', 8, 7, 'authToken', '[]', 0, '2023-05-04 16:53:23', '2023-05-04 16:53:23', '2024-05-04 09:53:23'),
('591a7872fe7478691e4fd0da33ee8590285774dc1f4f198e7d4d060f973c0fb364ab96806e3f8cdc', 8, 7, 'authToken', '[]', 0, '2023-03-15 15:09:20', '2023-03-15 15:09:20', '2024-03-15 08:09:20'),
('688e79ddd3956b11873ff70dd89aa94cdd99314717715a6fd7c2c1c203f3e56b23a15578a7bc2e4f', 5, 7, 'authToken', '[]', 0, '2023-02-27 17:59:50', '2023-02-27 17:59:50', '2024-02-27 10:59:50'),
('72e80ae38b86a7b76c2e717311301093473902f9b5f4b34992c4fd1fd383efa21a63029683482ca2', 10, 7, 'authToken', '[]', 0, '2023-05-02 18:52:41', '2023-05-02 18:52:41', '2024-05-02 11:52:41'),
('748598a8658bb0ccec62f7c81e861de0c290f6b86fff06da67a83d10d6d8886cd4544e159aafef4c', 4, 7, 'authToken', '[]', 0, '2023-06-05 14:44:15', '2023-06-05 14:44:15', '2024-06-05 07:44:15'),
('76666e1e521d7e85aad5eae9d24c22815b942018f19c8f181b0519ad53d4985413f67ef8c8da20ff', 8, 7, 'authToken', '[]', 0, '2023-03-15 14:57:34', '2023-03-15 14:57:34', '2024-03-15 07:57:34'),
('776915513d4243600b99eea64b4240ce4b8ab8cc7ce7226990df43cf3052bb57938c45ca290e1ca7', 8, 7, 'authToken', '[]', 0, '2023-05-02 21:48:38', '2023-05-02 21:48:38', '2024-05-02 14:48:38'),
('7e6183d8c6867c11e6ae8f762e12f3cf967b6884cffb5b6e081203a258ce5614dec3db2e6bb2b3c2', 4, 7, 'authToken', '[]', 0, '2023-03-06 19:52:31', '2023-03-06 19:52:31', '2024-03-06 12:52:31'),
('8081d921cf7127d6b3c0b9e1823cb572ba463b8a3cf6bf34cdd26165e12bfb8d0851679b8ff50f3b', 8, 7, 'authToken', '[]', 0, '2023-07-20 16:42:27', '2023-07-20 16:42:27', '2024-07-20 09:42:27'),
('80e732996a17fc2001585b23dfcc487c965912f5ccade984cc375b9f627b75ffeb993fa9d90ebf6f', 8, 7, 'authToken', '[]', 0, '2023-02-28 16:21:02', '2023-02-28 16:21:02', '2024-02-28 09:21:02'),
('8287cd407229e992d6b63c0935f6e84513fdc4b541d98e597ddbd64a2874a87eb5501a7074923eaf', 4, 7, 'authToken', '[]', 0, '2023-03-06 19:45:32', '2023-03-06 19:45:32', '2024-03-06 12:45:32'),
('83990370f390635631d46d29697c83076514a0ada703df3010c8458222ad852fa624b1ee80481f41', 8, 7, 'authToken', '[]', 0, '2023-03-15 14:52:11', '2023-03-15 14:52:11', '2024-03-15 07:52:11'),
('85bd94f578ebf1d2597f57602e91e86245f5c7c2cb0f4beeeaad51787407781fae6312b77e181bb8', 10, 7, 'authToken', '[]', 0, '2023-06-20 14:53:55', '2023-06-20 14:53:55', '2024-06-20 07:53:55'),
('9146e2535274fbec4ff1e3afcc2ed176ae2d0e3dfc35f350c226cc027428e1e6b6f96585e73e46d1', 8, 7, 'authToken', '[]', 0, '2023-02-28 13:59:43', '2023-02-28 13:59:43', '2024-02-28 06:59:43'),
('937f63983ba1c380b3e94b5c923830f54d79b6e7c7649fa9e991bca27e6cc774bbafaa4597d576c9', 10, 7, 'authToken', '[]', 0, '2023-06-20 14:06:11', '2023-06-20 14:06:11', '2024-06-20 07:06:11'),
('964dc62548e0bcf121ace706ca1cc12136183079e3c13b07fc469ed852e1eb2b06b339fab6ffa930', 10, 7, 'authToken', '[]', 0, '2023-07-24 12:22:21', '2023-07-24 12:22:21', '2024-07-24 05:22:21'),
('99ca02c5229ef12f39e8f52cee9c1ebed174dfd5b5690e300e194120db81da1dec7927ce1ca9a1f4', 8, 7, 'authToken', '[]', 0, '2023-06-05 19:05:01', '2023-06-05 19:05:01', '2024-06-05 12:05:01'),
('9e758e1423db604dda099a264ba4380263195fb9fcee3aeeb2913e2d8b93cb7116a1d3c81421f853', 4, 7, 'authToken', '[]', 0, '2023-03-06 20:04:06', '2023-03-06 20:04:06', '2024-03-06 13:04:06'),
('afa7224c42a0580656f34284c28009aa4096c994b9caebf8fb96cbf30f36f4d9973074d1f3548aee', 8, 7, 'authToken', '[]', 0, '2023-05-02 19:58:13', '2023-05-02 19:58:13', '2024-05-02 12:58:13'),
('b82850d54140ca735019ca4b08cac60165a958f3068ecccde629cb325e61fe5a9495a6d007b190d6', 4, 7, 'authToken', '[]', 0, '2023-03-06 20:54:18', '2023-03-06 20:54:18', '2024-03-06 13:54:18'),
('bd9f17e09edbf96649e1ad95c7e65bd085bad3f63fde20ab920583c544779edad698b757ec681f93', 8, 7, 'authToken', '[]', 0, '2023-06-30 16:16:04', '2023-06-30 16:16:04', '2024-06-30 09:16:04'),
('ce5264f22c675cbcaae946085d24e364de0e37db3db3ac2e1a6595c7d614aeb2edd898bce394076a', 8, 7, 'authToken', '[]', 0, '2023-06-15 16:18:17', '2023-06-15 16:18:17', '2024-06-15 09:18:17'),
('cf28e1dedf3a50ce9b80c6372fabcdab14490a744f9005964f3652a744ec6f1929e7fcb49112f69d', 10, 7, 'authToken', '[]', 0, '2023-06-05 17:10:23', '2023-06-05 17:10:23', '2024-06-05 10:10:23'),
('cf60fc137896059a80a9e9b8c6bd20829d51deb5d81a701dca93cdb670a775cf7194a7a80589b3c7', 4, 7, 'authToken', '[]', 0, '2023-03-06 19:39:37', '2023-03-06 19:39:37', '2024-03-06 12:39:37'),
('d54844f37b1521f60db920ac2cddf5127e2372d6cd867e82f2e1494e9461beb3c25c03c6271d1c5f', 8, 7, 'authToken', '[]', 0, '2023-03-01 22:01:06', '2023-03-01 22:01:06', '2024-03-01 15:01:06'),
('da53f99e318b5d99d4e5dea22c55b77145bab59f288eefe277f88d8ca1262568020753a074aa650a', 8, 7, 'authToken', '[]', 0, '2023-03-03 12:48:27', '2023-03-03 12:48:27', '2024-03-03 05:48:27'),
('e024ba0cf2e15d52814a6a4d46fb98598950ba6ce8dee45115936b2d6c8cd9759132fbe9f78a239c', 8, 7, 'authToken', '[]', 0, '2023-06-20 13:33:59', '2023-06-20 13:33:59', '2024-06-20 06:33:59'),
('e2a59a5cbb1826f0866ac777574113a85bacff105f029ae25a7b25502665540868078530e47682cb', 8, 7, 'authToken', '[]', 0, '2023-07-26 16:45:10', '2023-07-26 16:45:10', '2024-07-26 09:45:10'),
('e4e40c700f18a4ffba4487030f099e51df8d1c529ad1ada98d1ccdd9f4cce55767a4da1ffe7497d1', 4, 7, 'authToken', '[]', 0, '2023-03-06 20:02:16', '2023-03-06 20:02:16', '2024-03-06 13:02:16'),
('ebebb6ad6e6d35ffad52924c28c9e481842f589ff8bf084a7b8b8d3cc727dc16b8e05b5dd3ef76fc', 8, 7, 'authToken', '[]', 0, '2023-03-14 16:25:34', '2023-03-14 16:25:34', '2024-03-14 09:25:34'),
('ec0952f413196a78af1736cd817671889447d90746a7f3db91702517916adb30efeb06bb17f467c3', 4, 7, 'authToken', '[]', 0, '2023-03-06 19:21:31', '2023-03-06 19:21:31', '2024-03-06 12:21:31'),
('eea7c9b6dd6b6c7d70356ca21bb9853c2b6d49042a10df1eb8755831618dca8ad872c1185445239a', 8, 7, 'authToken', '[]', 0, '2023-02-28 16:23:36', '2023-02-28 16:23:36', '2024-02-28 09:23:36'),
('f4058e89be4615d6cf57237a100d72ae9272e20109f765eae3d7d12a91c66db53b011ea80bf7424b', 4, 7, 'authToken', '[]', 0, '2023-03-06 20:58:40', '2023-03-06 20:58:40', '2024-03-06 13:58:40'),
('f5433d3bad5ad76a6327c417192ad23688276132115788275eb1768925ef4b53eaf85be0687aa091', 8, 7, 'authToken', '[]', 0, '2023-05-01 13:19:53', '2023-05-01 13:19:53', '2024-05-01 06:19:53'),
('f7fe2777054115487a3ed1eb8572b3081a299ae579ad909f42536c6565219a18cbed3f49097fe83d', 10, 7, 'authToken', '[]', 0, '2023-06-05 19:17:16', '2023-06-05 19:17:16', '2024-06-05 12:17:16'),
('fc46fe2a9152afea8aadb93e0ac1856a44e84ca14bd25dc3f0c395b9f73244dafb6842fe76324594', 4, 7, 'authToken', '[]', 0, '2023-06-05 14:23:59', '2023-06-05 14:23:59', '2024-06-05 07:23:59');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(5, NULL, 'HomeRenovation Personal Access Client', 'qMAoq4f31vPCue14Cf2fUMEGgRYCsiTZrVZyYY2M', NULL, 'http://localhost', 1, 0, 0, '2023-02-15 03:53:34', '2023-02-15 03:53:34'),
(6, NULL, 'HomeRenovation Password Grant Client', 'gcgtpz9QsocLgUsbOy25jOmbPwcBGJAMXsRYWjAy', 'users', 'http://localhost', 0, 1, 0, '2023-02-15 03:53:34', '2023-02-15 03:53:34'),
(7, NULL, 'HomeRenovation Personal Access Client', 'XYrxnbxdGsh62mwZTjSZYVN5GuoriuvPfZin8Wt5', NULL, 'http://localhost', 1, 0, 0, '2023-02-15 03:53:47', '2023-02-15 03:53:47'),
(8, NULL, 'HomeRenovation Password Grant Client', 'LGeaDedazWTNMOeYU904obei1jI0OwRwTFDqNXy9', 'users', 'http://localhost', 0, 1, 0, '2023-02-15 03:53:47', '2023-02-15 03:53:47');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-02-15 00:55:08', '2023-02-15 00:55:08'),
(2, 3, '2023-02-15 03:39:47', '2023-02-15 03:39:47'),
(3, 5, '2023-02-15 03:53:34', '2023-02-15 03:53:34'),
(4, 7, '2023-02-15 03:53:47', '2023-02-15 03:53:47');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `description`, `image`, `image_path`, `created_at`, `updated_at`) VALUES
(2, 'tuddltugc', 'cglcgv', 'n6V2znO6IMWsIrw1G4Dz6aPNeTeKvhCkW1XlnxBq.jpg', 'portfolio_image', '2023-03-06 19:08:28', '2023-03-06 19:08:28');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image_path` varchar(256) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `image_path`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Window', 3, 'product_image', 'gNrlFlZJOfuNnz9L1UgQ3IfQVanzpD11ywJDsGcQ.jpg', '2023-02-15 04:18:18', '2023-06-06 12:51:04'),
(4, 'Doors', 3, 'product_image', '4EPCriqETALRFSbFVqZCd6WmiBDMbbZiNk8doOYa.jpg', '2023-02-15 04:18:28', '2023-06-06 12:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `redirect_to` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `redirect_to`, `created_at`, `updated_at`) VALUES
(1, 'admin', '', NULL, NULL),
(2, 'user', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_title` varchar(255) NOT NULL,
  `service_description` longtext NOT NULL,
  `image_path` varchar(256) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `service_description`, `image_path`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Fabrication Work', 'Fabrication work typically involves the process of creating or assembling a product from raw materials or components, often through cutting, shaping, bending, and joining. This can include a wide range of industries, such as construction, manufacturing, and engineering. Fabrication work may involve the use of various tools and equipment, such as welding machines, saws, and drills, to transform raw materials into finished products. It requires a high level of skill and precision, as even small mistakes can lead to major defects in the final product.', 'service_image', 'hLf1UJvZT4uAbDbBu1jzjtpuy0GLafLP6VjbkWZ1.jpg', '2023-02-24 15:39:56', '2023-06-06 12:47:08');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT 2,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=inactive, 1=active',
  `phone` varchar(20) DEFAULT NULL,
  `profile_pic_path` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `reset_password_request` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `status`, `phone`, `profile_pic_path`, `profile_pic`, `reset_password_request`) VALUES
(2, 'Admin', 'admin@admin.com', NULL, '$2y$10$hSVaNAIr7dhQQIXS2KrtZ.1RJgC.r4D8ChjV7S5uCHux6vi2i1qd2', NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, 0),
(8, 'Rashad', 'rashad@gmail.com', NULL, '$2y$10$V/w5O5r3SJ/LW96qcFVQ6uvPdfj6NSGdEqXMVj1w2Ks2dkYmnrpAS', NULL, '2023-02-28 12:19:00', '2023-02-28 14:15:11', 2, 1, '7867867865', 'profile_pic', 'tWY91m3xS1T14hdTsXTOOVadYDUupAIp5q99KkJs.jpg', 0),
(10, 'Saurabh Kumbhar', 'saurabhkumbhar187@gmail.com', NULL, '$2y$10$Nak9DvsIpr1BzJO2W4yTKOLrAfpJOFtTE//mNyTNsJhcviNyVmvHS', NULL, '2023-02-28 16:34:48', '2023-06-06 11:28:13', 2, 1, '7769889011', 'profile_pic', 'RRlhQEJ8P10QPnczMtD5Tc5Rt8YCzWZk1H6CVWBB.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_static_pages`
--
ALTER TABLE `app_static_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clients_user_id_foreign` (`user_id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contracts_staff_id_foreign` (`staff_id`);

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
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

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
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_static_pages`
--
ALTER TABLE `app_static_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `contracts`
--
ALTER TABLE `contracts`
  ADD CONSTRAINT `contracts_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
