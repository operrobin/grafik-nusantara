-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2020 at 11:04 AM
-- Server version: 5.7.32-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grafisnu_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_activations`
--

CREATE TABLE `admin_activations` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `forbidden` tinyint(1) NOT NULL DEFAULT '0',
  `language` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `first_name`, `last_name`, `email`, `password`, `remember_token`, `activated`, `forbidden`, `language`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Grafis', 'administrator@gmail.com', '$2y$10$mNwPi8Fm3zuYoWnJ4kMU5epjarIKx5Gjmy9Ue4QBjqcdSuVKD85Yi', 'uKjHjO0SJK3sIUeflDIhxlTAb5UrtfW26SCdQQeEIsiSRsj2Qc5dJhfPs6KM', 1, 0, 'en', NULL, '2020-10-03 23:54:50', '2020-10-04 00:01:13');

-- --------------------------------------------------------

--
-- Table structure for table `archive_submits`
--

CREATE TABLE `archive_submits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `archive_submits`
--

INSERT INTO `archive_submits` (`id`, `name`, `email`, `instagram`, `phone`, `story`, `type`, `created_at`, `updated_at`) VALUES
(3, 'test', 'bowo@mail.com', '@floorvest', '08123456789', 'test', 'Label', '2020-10-06 09:43:40', '2020-10-06 09:43:40'),
(4, 'test', 'bowo@mail.com', '@floorvest', '08123456789', 'test', 'Label', '2020-10-06 09:44:16', '2020-10-06 09:44:16'),
(5, 'test', 'bowo@mail.com', '@floorvest', '08123456789', 'test', 'Label', '2020-10-06 09:55:39', '2020-10-06 09:55:39'),
(6, 'test', 'bowo@mail.com', '@floorvest', '08123456789', 'test', 'Label', '2020-10-06 09:56:14', '2020-10-06 09:56:14'),
(7, 'test', 'bowo@mail.com', '@floorvest', '08123456789', 'test', 'Label', '2020-10-06 09:56:38', '2020-10-06 09:56:38'),
(8, 'test', 'bowo@mail.com', '@floorvest', '08123456789', 'test', 'Label', '2020-10-06 09:56:47', '2020-10-06 09:56:47'),
(9, 'testt', 'test@mail.com', 'test', '08123456', 'test', 'Sticker', '2020-10-18 02:25:05', '2020-10-18 02:25:05'),
(10, 'testt', 'test@mail.com', 'test', '08123456', 'test', 'Sticker', '2020-10-18 02:27:31', '2020-10-18 02:27:31'),
(11, 'testt', 'test@mail.com', 'test', '08123456', 'test', 'Sticker', '2020-10-18 02:29:41', '2020-10-18 02:29:41'),
(12, 'test', 'patranto.prabowo@gmail.com', 'test', '08123456', 'test', 'Sticker', '2020-10-18 02:37:50', '2020-10-18 02:37:50'),
(13, 'test', 'patranto.prabowo@gmail.com', 'test', '08123456', 'test', 'Sticker', '2020-10-18 02:38:36', '2020-10-18 02:38:36'),
(14, 'test', 'patranto.prabowo@gmail.com', 'test', '08123456', 'test', 'Sticker', '2020-10-18 02:41:35', '2020-10-18 02:41:35'),
(15, 'test', 'patranto.prabowo@gmail.com', 'test', '08123456', 'test', 'Sticker', '2020-10-18 02:42:14', '2020-10-18 02:42:14'),
(16, 'test', 'patranto.prabowo@gmail.com', 'test', '08123456', 'test', 'Sticker', '2020-10-18 02:42:47', '2020-10-18 02:42:47');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_who` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_when` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `name`, `description`, `category_id`, `image_path`, `created_who`, `created_when`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', 1, 'default', 'test', 'test', '2020-10-04 01:14:30', '2020-10-04 01:14:30'),
(2, 'test2', 'test', 1, 'default', 'test', 'test', '2020-10-04 01:16:52', '2020-10-04 01:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `collection_categories`
--

CREATE TABLE `collection_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collection_categories`
--

INSERT INTO `collection_categories` (`id`, `name`, `description`, `type_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Obat', 'test', 1, '2020-10-04 00:22:55', '2020-10-04 01:43:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `collection_types`
--

CREATE TABLE `collection_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collection_types`
--

INSERT INTO `collection_types` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Label', 'labeling for test', '2020-10-04 00:08:50', '2020-10-04 00:08:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `name`, `type`, `content`, `created_at`, `updated_at`) VALUES
(1, 'aboutus', 'content', '<style>\r\n            .tentang {\r\n                padding-top: 10em;\r\n                margin: 0 32px;\r\n                font-family: Lato, sans-serif;\r\n            }\r\n\r\n            .mobile-left img {\r\n                    width: 40%;\r\n                }\r\n\r\n            @media only screen and (min-width: 768px) {\r\n                .tentang {\r\n                    padding-top: 1em;\r\n                }\r\n\r\n                .mobile-left {\r\n                    position: relative;\r\n                }\r\n\r\n                .mobile-left img {\r\n                    position: absolute;\r\n                    right: 0;\r\n                    bottom: 1.5em;\r\n                    width: 40%;\r\n                }\r\n            }\r\n        </style>\r\n\r\n        <p style=\"font-size:28pt;\">Grafis Nusantara merupakan media pengarsipan label dan stiker Indonesia yang rata-rata dibuat di era 70-90an. Dimana di dalamnya terdapat berbagai macam label maupun stiker, Pada label sendiri terdapat label rokok, batik, hingga teh dan pada stiker terdapat stiker-stiker himbauan, religi, kartun, dan lain sebagainya.</p>\r\n\r\n        <br>\r\n\r\n        <p style=\"font-size:28pt;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus ornare mi sed laoreet vitae id suscipit ante nulla. Nisl id rhoncus sit molestie cursus. Amet egestas eget dolor amet eget erat purus diam, dignissim. Leo leo arcu egestas.</p>\r\n\r\n        <br>\r\n\r\n        <div class=\"row\">\r\n            <div class=\"col-12 col-sm-6\">\r\n                <p style=\"font-size:12pt\">Initiator: Rakhmat Jaka Perkasa<br>Web Design: Hendri Siman Santosa<br>Programming: Simon Malz<br>Thanks to: Kamengski<br>Running on: Expression Engine </p>\r\n\r\n                <p style=\"font-size:12pt; word-wrap: wrap;\">All materials on Grafis Nusantara are being made available for noncommercial and educational use only. All rights belong to the authors.<br><br>© 2020 Grafis nusantara. All Rights Reserved.<br>Indonesia +49 89 2710874<br>info@grafisnusantara.com<br><br>\r\n                </p>\r\n            </div>\r\n\r\n            <div class=\"col-12 col-sm-6 mobile-left\">\r\n                <img src=\"/uploads/1601876627image (2) 1.png\"><br>\r\n            </div>\r\n        </div>', '2020-10-04 22:43:52', '2020-10-05 02:40:23'),
(2, 'footer', 'content', '<div class=\"row my-5 no-gutters\" >\n    <div class=\"col-12 col-sm-6 order-sm-1\">\n        <section class=\"section-email\">\n            <a href=\"mailto:info@grafisnusantara.com\" class=\"email\" style=\"color:white;\">info@grafisnusantara.com</a>\n            <a href=\"https://www.instagram.com/grafisnusantara\" class=\"instagran\" style=\"color:white;\" target=\"_blank\">Instagram</a>\n        </section>\n    </div>\n\n    <div class=\"col-12 col-sm-6 order-sm-0\">\n        <section class=\"section-footer ml-sm-5\">\n            © 2020 Grafis nusantara. All Rights Reserved.\n        </section>\n    </div>\n\n</div>\n', '2020-10-04 22:55:43', '2020-10-04 22:58:23'),
(3, 'submit', 'content', 'Arsip dari user\n\n<br>\n<br>\n\n<h3>{$type}</h3>\n\nName : {$name}<br>\nEmail : {$email}<br>\nPhone : {$phone} <br>\nInstagram : <a href=\"https://instagram.com/{$instagram}\">@{$instagram}</a>\n<br><br>\nCerita : {$story}\n\nSalam test', '2020-10-05 00:16:12', '2020-10-05 00:20:55');

-- --------------------------------------------------------

--
-- Table structure for table `email_configs`
--

CREATE TABLE `email_configs` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `host` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `port` int(11) NOT NULL,
  `encryption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_configs`
--

INSERT INTO `email_configs` (`id`, `email`, `username`, `password`, `driver`, `host`, `port`, `encryption`, `created_at`, `updated_at`) VALUES
(1, 'sender@grafisnusantara.com', 'sender@grafisnusantara.com', 'Asdqwe12345!', 'smtp', 'segoroyoso.idweb.host', 465, 'ssl', NULL, NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(1, 'default', '{\"displayName\":\"App\\\\Jobs\\\\SendEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendEmail\",\"command\":\"O:18:\\\"App\\\\Jobs\\\\SendEmail\\\":10:{s:25:\\\"\\u0000App\\\\Jobs\\\\SendEmail\\u0000email\\\";s:26:\\\"patranto.prabowo@gmail.com\\\";s:24:\\\"\\u0000App\\\\Jobs\\\\SendEmail\\u0000mail\\\";O:19:\\\"App\\\\Mail\\\\EmailArsip\\\":25:{s:25:\\\"\\u0000App\\\\Mail\\\\EmailArsip\\u0000data\\\";a:10:{s:4:\\\"name\\\";s:5:\\\"testt\\\";s:5:\\\"email\\\";s:13:\\\"test@mail.com\\\";s:5:\\\"phone\\\";s:8:\\\"08123456\\\";s:9:\\\"instagram\\\";s:4:\\\"test\\\";s:5:\\\"story\\\";s:4:\\\"test\\\";s:4:\\\"type\\\";s:7:\\\"Sticker\\\";s:10:\\\"updated_at\\\";s:19:\\\"2020-10-18 09:29:41\\\";s:10:\\\"created_at\\\";s:19:\\\"2020-10-18 09:29:41\\\";s:2:\\\"id\\\";i:11;s:5:\\\"media\\\";a:1:{i:0;a:15:{s:2:\\\"id\\\";i:17;s:10:\\\"model_type\\\";s:24:\\\"App\\\\Models\\\\ArchiveSubmit\\\";s:8:\\\"model_id\\\";s:2:\\\"11\\\";s:15:\\\"collection_name\\\";s:7:\\\"gallery\\\";s:4:\\\"name\\\";s:19:\\\"2020-05-06 14.42.52\\\";s:9:\\\"file_name\\\";s:23:\\\"2020-05-06-14.42.52.jpg\\\";s:9:\\\"mime_type\\\";s:10:\\\"image\\/jpeg\\\";s:4:\\\"disk\\\";s:5:\\\"media\\\";s:4:\\\"size\\\";s:6:\\\"106318\\\";s:13:\\\"manipulations\\\";a:0:{}s:17:\\\"custom_properties\\\";a:1:{s:21:\\\"generated_conversions\\\";a:3:{s:8:\\\"thumb_75\\\";b:1;s:9:\\\"thumb_150\\\";b:1;s:9:\\\"thumb_200\\\";b:1;}}s:17:\\\"responsive_images\\\";a:0:{}s:12:\\\"order_column\\\";s:2:\\\"16\\\";s:10:\\\"created_at\\\";s:19:\\\"2020-10-18 09:29:41\\\";s:10:\\\"updated_at\\\";s:19:\\\"2020-10-18 09:29:41\\\";}}}s:27:\\\"\\u0000App\\\\Mail\\\\EmailArsip\\u0000attach\\\";a:1:{i:0;s:66:\\\"\\/home\\/grafisnu\\/public_html\\/public\\/media\\/17\\/2020-05-06-14.42.52.jpg\\\";}s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:0:{}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:11:\\\"\\u0000*\\u0000markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:6:\\\"\\u0000*\\u0000job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1603013382, 1603013382);

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` datetime DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`id`, `title`, `published_at`, `tags`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Journal', '2020-10-04 10:05:56', 'et,jawa tengah,coba', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Diam quam ac elementum sed eleifend bibendum mi, in ultricies. Vitae etiam ut feugiat ornare id a tincidunt. Ut aliquam commodo integer arcu nec, in integer. Aliquet nunc molestie dignissim adipiscing porttitor eu ullamcorper fermentum leo. Dolor, sit aliquam ornare ullamcorper ipsum. Diam sit pharetra lobortis volutpat neque lectus lorem sodales. Risus, non dignissim ultrices leo ullamcorper. Pellentesque amet, ut tempus rutrum. Fusce eu at congue risus. <br></p><p>  Nunc, morbi tristique dictum ultrices at tincidunt. Arcu nunc facilisis commodo tortor. Non et viverra consectetur at sed aliquam. Sed sed a, et, nulla dictum vulputate tortor, et. Et leo dui, a a feugiat dui. Ligula neque viverra ac arcu vel lorem tortor, eros. Donec risus laoreet duis ut. Purus a lacus ac quisque nunc, tempor, quis nam auctor. Molestie placerat aliquam neque pulvinar nisl. Dignissim elit senectus fames sit gravida.</p><p><br></p><p><img src=\"http://localhost:8000/uploads/1601884392Screen Shot 2020-09-29 at 05.05.32.png\" alt=\"\"></p><p style=\"text-align: center;\">figure 1.</p><p style=\"text-align: center;\"><br></p><p style=\"text-align: left;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Diam quam ac elementum sed eleifend bibendum mi, in ultricies. Vitae etiam ut feugiat ornare id a tincidunt. Ut aliquam commodo integer arcu nec, in integer. Aliquet nunc molestie dignissim adipiscing porttitor eu ullamcorper fermentum leo. Dolor, sit aliquam ornare ullamcorper ipsum. Diam sit pharetra lobortis volutpat neque lectus lorem sodales. Risus, non dignissim ultrices leo ullamcorper. Pellentesque amet, ut tempus rutrum. Fusce eu at congue risus. <br></p>', '2020-10-04 03:00:48', '2020-10-05 00:54:07');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `size`, `manipulations`, `custom_properties`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(2, 'Brackets\\AdminAuth\\Models\\AdminUser', 1, 'avatar', '4uDPwvCNlbOYzLlDSYdYy5Sl3KD6WpEHYYES0HF3', '4uDPwvCNlbOYzLlDSYdYy5Sl3KD6WpEHYYES0HF3.png', 'image/png', 'media', 572317, '[]', '{\"name\": \"Screen Shot 2020-09-29 at 05.05.32.png\", \"width\": 993, \"height\": 577, \"file_name\": \"Screen Shot 2020-09-29 at 05.05.32.png\", \"generated_conversions\": {\"thumb_75\": true, \"thumb_150\": true, \"thumb_200\": true}}', '[]', 1, '2020-10-04 01:01:33', '2020-10-04 01:01:33'),
(3, 'App\\Models\\Collection', 1, 'gallery', 'DTsS6AuOVgsjG7rfpGflMxflWrjhvCYuhEsg9v4A', 'DTsS6AuOVgsjG7rfpGflMxflWrjhvCYuhEsg9v4A.png', 'image/png', 'media', 9820, '[]', '{\"name\": \"LB_4.png\", \"width\": 140, \"height\": 140, \"file_name\": \"LB_4.png\", \"generated_conversions\": {\"thumb_75\": true, \"thumb_150\": true, \"thumb_200\": true}}', '[]', 2, '2020-10-04 01:21:32', '2020-10-04 01:21:33'),
(4, 'App\\Models\\Collection', 2, 'gallery', 'jrEtxWEczcVjuM41Lc9xopzh1Mq1QivSzixfX28f', 'jrEtxWEczcVjuM41Lc9xopzh1Mq1QivSzixfX28f.png', 'image/png', 'media', 572317, '[]', '{\"name\": \"Screen Shot 2020-09-29 at 05.05.32.png\", \"width\": 993, \"height\": 577, \"file_name\": \"Screen Shot 2020-09-29 at 05.05.32.png\", \"generated_conversions\": {\"thumb_75\": true, \"thumb_150\": true, \"thumb_200\": true}}', '[]', 3, '2020-10-04 01:24:02', '2020-10-04 01:24:03'),
(5, 'App\\Models\\Journal', 1, 'gallery', 'MRWmgnXtMzjGXMBHwW4hRgDEn42zXEfzcEzmc7Sd', 'MRWmgnXtMzjGXMBHwW4hRgDEn42zXEfzcEzmc7Sd.png', 'image/png', 'media', 572317, '[]', '{\"name\": \"Screen Shot 2020-09-29 at 05.05.32.png\", \"width\": 993, \"height\": 577, \"file_name\": \"Screen Shot 2020-09-29 at 05.05.32.png\", \"generated_conversions\": {\"thumb_75\": true, \"thumb_150\": true, \"thumb_200\": true}}', '[]', 4, '2020-10-04 03:09:47', '2020-10-04 03:09:48'),
(6, 'App\\Models\\ArchiveSubmit', 4, 'gallery', 'Screen Shot 2020-10-06 at 12.31.10', 'Screen-Shot-2020-10-06-at-12.31.10.png', 'image/png', 'media', 9867, '[]', '{\"generated_conversions\": {\"thumb_75\": true, \"thumb_150\": true, \"thumb_200\": true}}', '[]', 5, '2020-10-06 09:44:16', '2020-10-06 09:44:16'),
(7, 'App\\Models\\ArchiveSubmit', 5, 'gallery', 'LB_4', 'LB_4.png', 'image/png', 'media', 9820, '[]', '{\"generated_conversions\": {\"thumb_75\": true, \"thumb_150\": true, \"thumb_200\": true}}', '[]', 6, '2020-10-06 09:55:39', '2020-10-06 09:55:39'),
(8, 'App\\Models\\ArchiveSubmit', 5, 'gallery', 'Screen Shot 2020-10-06 at 12.31.10', 'Screen-Shot-2020-10-06-at-12.31.10.png', 'image/png', 'media', 9867, '[]', '{\"generated_conversions\": {\"thumb_75\": true, \"thumb_150\": true, \"thumb_200\": true}}', '[]', 7, '2020-10-06 09:55:39', '2020-10-06 09:55:39'),
(9, 'App\\Models\\ArchiveSubmit', 6, 'gallery', 'LB_4', 'LB_4.png', 'image/png', 'media', 9820, '[]', '{\"generated_conversions\": {\"thumb_75\": true, \"thumb_150\": true, \"thumb_200\": true}}', '[]', 8, '2020-10-06 09:56:14', '2020-10-06 09:56:15'),
(10, 'App\\Models\\ArchiveSubmit', 6, 'gallery', 'Screen Shot 2020-10-06 at 12.31.10', 'Screen-Shot-2020-10-06-at-12.31.10.png', 'image/png', 'media', 9867, '[]', '{\"generated_conversions\": {\"thumb_75\": true, \"thumb_150\": true, \"thumb_200\": true}}', '[]', 9, '2020-10-06 09:56:15', '2020-10-06 09:56:15'),
(11, 'App\\Models\\ArchiveSubmit', 7, 'gallery', 'LB_4', 'LB_4.png', 'image/png', 'media', 9820, '[]', '{\"generated_conversions\": {\"thumb_75\": true, \"thumb_150\": true, \"thumb_200\": true}}', '[]', 10, '2020-10-06 09:56:38', '2020-10-06 09:56:38'),
(12, 'App\\Models\\ArchiveSubmit', 7, 'gallery', 'Screen Shot 2020-10-06 at 12.31.10', 'Screen-Shot-2020-10-06-at-12.31.10.png', 'image/png', 'media', 9867, '[]', '{\"generated_conversions\": {\"thumb_75\": true, \"thumb_150\": true, \"thumb_200\": true}}', '[]', 11, '2020-10-06 09:56:38', '2020-10-06 09:56:38'),
(13, 'App\\Models\\ArchiveSubmit', 8, 'gallery', 'LB_4', 'LB_4.png', 'image/png', 'media', 9820, '[]', '{\"generated_conversions\": {\"thumb_75\": true, \"thumb_150\": true, \"thumb_200\": true}}', '[]', 12, '2020-10-06 09:56:47', '2020-10-06 09:56:48'),
(14, 'App\\Models\\ArchiveSubmit', 8, 'gallery', 'Screen Shot 2020-10-06 at 12.31.10', 'Screen-Shot-2020-10-06-at-12.31.10.png', 'image/png', 'media', 9867, '[]', '{\"generated_conversions\": {\"thumb_75\": true, \"thumb_150\": true, \"thumb_200\": true}}', '[]', 13, '2020-10-06 09:56:48', '2020-10-06 09:56:48'),
(15, 'App\\Models\\ArchiveSubmit', 9, 'gallery', '2020-05-06 14.42.52', '2020-05-06-14.42.52.jpg', 'image/jpeg', 'media', 106318, '[]', '{\"generated_conversions\": {\"thumb_75\": true, \"thumb_150\": true, \"thumb_200\": true}}', '[]', 14, '2020-10-18 02:25:05', '2020-10-18 02:25:09'),
(16, 'App\\Models\\ArchiveSubmit', 10, 'gallery', '2020-05-06 14.42.52', '2020-05-06-14.42.52.jpg', 'image/jpeg', 'media', 106318, '[]', '{\"generated_conversions\": {\"thumb_75\": true, \"thumb_150\": true, \"thumb_200\": true}}', '[]', 15, '2020-10-18 02:27:31', '2020-10-18 02:27:31'),
(17, 'App\\Models\\ArchiveSubmit', 11, 'gallery', '2020-05-06 14.42.52', '2020-05-06-14.42.52.jpg', 'image/jpeg', 'media', 106318, '[]', '{\"generated_conversions\": {\"thumb_75\": true, \"thumb_150\": true, \"thumb_200\": true}}', '[]', 16, '2020-10-18 02:29:41', '2020-10-18 02:29:41'),
(18, 'App\\Models\\ArchiveSubmit', 12, 'gallery', '2020-05-06 14.42.52', '2020-05-06-14.42.52.jpg', 'image/jpeg', 'media', 106318, '[]', '{\"generated_conversions\": {\"thumb_75\": true, \"thumb_150\": true, \"thumb_200\": true}}', '[]', 17, '2020-10-18 02:37:50', '2020-10-18 02:37:51'),
(19, 'App\\Models\\ArchiveSubmit', 13, 'gallery', '2020-05-06 14.42.52', '2020-05-06-14.42.52.jpg', 'image/jpeg', 'media', 106318, '[]', '{\"generated_conversions\": {\"thumb_75\": true, \"thumb_150\": true, \"thumb_200\": true}}', '[]', 18, '2020-10-18 02:38:36', '2020-10-18 02:38:36'),
(20, 'App\\Models\\ArchiveSubmit', 14, 'gallery', '2020-05-06 14.42.52', '2020-05-06-14.42.52.jpg', 'image/jpeg', 'media', 106318, '[]', '{\"generated_conversions\": {\"thumb_75\": true, \"thumb_150\": true, \"thumb_200\": true}}', '[]', 19, '2020-10-18 02:41:35', '2020-10-18 02:41:35'),
(21, 'App\\Models\\ArchiveSubmit', 15, 'gallery', '2020-05-06 14.42.52', '2020-05-06-14.42.52.jpg', 'image/jpeg', 'media', 106318, '[]', '{\"generated_conversions\": {\"thumb_75\": true, \"thumb_150\": true, \"thumb_200\": true}}', '[]', 20, '2020-10-18 02:42:14', '2020-10-18 02:42:15'),
(22, 'App\\Models\\ArchiveSubmit', 16, 'gallery', '2020-05-06 14.42.52', '2020-05-06-14.42.52.jpg', 'image/jpeg', 'media', 106318, '[]', '{\"generated_conversions\": {\"thumb_75\": true, \"thumb_150\": true, \"thumb_200\": true}}', '[]', 21, '2020-10-18 02:42:47', '2020-10-18 02:42:47');

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
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2020_10_04_062032_create_collection_types', 1),
(16, '2020_10_04_062126_create_collection_categories', 1),
(17, '2020_10_04_062255_create_collections', 1),
(18, '2017_08_24_000000_create_activations_table', 2),
(19, '2017_08_24_000000_create_admin_activations_table', 2),
(20, '2017_08_24_000000_create_admin_password_resets_table', 2),
(21, '2017_08_24_000000_create_admin_users_table', 2),
(22, '2018_07_18_000000_create_wysiwyg_media_table', 2),
(23, '2020_10_04_065449_create_media_table', 2),
(24, '2020_10_04_065449_create_permission_tables', 2),
(25, '2020_10_04_065454_fill_default_admin_user_and_permissions', 2),
(26, '2020_10_04_065449_create_translations_table', 3),
(27, '2020_10_04_070637_fill_permissions_for_collection-type', 4),
(28, '2020_10_04_071548_fill_permissions_for_collection-category', 5),
(29, '2020_10_04_071600_fill_permissions_for_collection', 6),
(30, '2020_10_04_092624_create_journals', 7),
(31, '2020_10_04_093032_fill_permissions_for_journal', 8),
(33, '2020_10_05_050206_create_configs', 9),
(34, '2020_10_05_050610_fill_permissions_for_config', 10),
(35, '2020_10_06_132542_email_configs', 11),
(36, '2020_10_06_133200_fill_permissions_for_email-config', 12),
(38, '2020_10_06_160949_create_archive_submits', 13),
(39, '2020_10_06_164942_create_jobs_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'Brackets\\AdminAuth\\Models\\AdminUser', 1);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '2020-10-03 23:54:50', '2020-10-03 23:54:50'),
(2, 'admin.translation.index', 'admin', '2020-10-03 23:54:50', '2020-10-03 23:54:50'),
(3, 'admin.translation.edit', 'admin', '2020-10-03 23:54:50', '2020-10-03 23:54:50'),
(4, 'admin.translation.rescan', 'admin', '2020-10-03 23:54:50', '2020-10-03 23:54:50'),
(5, 'admin.admin-user.index', 'admin', '2020-10-03 23:54:50', '2020-10-03 23:54:50'),
(6, 'admin.admin-user.create', 'admin', '2020-10-03 23:54:50', '2020-10-03 23:54:50'),
(7, 'admin.admin-user.edit', 'admin', '2020-10-03 23:54:50', '2020-10-03 23:54:50'),
(8, 'admin.admin-user.delete', 'admin', '2020-10-03 23:54:50', '2020-10-03 23:54:50'),
(9, 'admin.upload', 'admin', '2020-10-03 23:54:50', '2020-10-03 23:54:50'),
(10, 'admin.admin-user.impersonal-login', 'admin', '2020-10-03 23:54:50', '2020-10-03 23:54:50'),
(11, 'admin.collection-type', 'admin', '2020-10-04 00:06:46', '2020-10-04 00:06:46'),
(12, 'admin.collection-type.index', 'admin', '2020-10-04 00:06:46', '2020-10-04 00:06:46'),
(13, 'admin.collection-type.create', 'admin', '2020-10-04 00:06:46', '2020-10-04 00:06:46'),
(14, 'admin.collection-type.show', 'admin', '2020-10-04 00:06:46', '2020-10-04 00:06:46'),
(15, 'admin.collection-type.edit', 'admin', '2020-10-04 00:06:46', '2020-10-04 00:06:46'),
(16, 'admin.collection-type.delete', 'admin', '2020-10-04 00:06:46', '2020-10-04 00:06:46'),
(17, 'admin.collection-type.bulk-delete', 'admin', '2020-10-04 00:06:46', '2020-10-04 00:06:46'),
(18, 'admin.collection-category', 'admin', '2020-10-04 00:15:51', '2020-10-04 00:15:51'),
(19, 'admin.collection-category.index', 'admin', '2020-10-04 00:15:51', '2020-10-04 00:15:51'),
(20, 'admin.collection-category.create', 'admin', '2020-10-04 00:15:51', '2020-10-04 00:15:51'),
(21, 'admin.collection-category.show', 'admin', '2020-10-04 00:15:51', '2020-10-04 00:15:51'),
(22, 'admin.collection-category.edit', 'admin', '2020-10-04 00:15:51', '2020-10-04 00:15:51'),
(23, 'admin.collection-category.delete', 'admin', '2020-10-04 00:15:51', '2020-10-04 00:15:51'),
(24, 'admin.collection-category.bulk-delete', 'admin', '2020-10-04 00:15:51', '2020-10-04 00:15:51'),
(25, 'admin.collection', 'admin', '2020-10-04 00:16:04', '2020-10-04 00:16:04'),
(26, 'admin.collection.index', 'admin', '2020-10-04 00:16:04', '2020-10-04 00:16:04'),
(27, 'admin.collection.create', 'admin', '2020-10-04 00:16:04', '2020-10-04 00:16:04'),
(28, 'admin.collection.show', 'admin', '2020-10-04 00:16:04', '2020-10-04 00:16:04'),
(29, 'admin.collection.edit', 'admin', '2020-10-04 00:16:04', '2020-10-04 00:16:04'),
(30, 'admin.collection.delete', 'admin', '2020-10-04 00:16:04', '2020-10-04 00:16:04'),
(31, 'admin.collection.bulk-delete', 'admin', '2020-10-04 00:16:04', '2020-10-04 00:16:04'),
(32, 'admin.journal', 'admin', '2020-10-04 02:30:34', '2020-10-04 02:30:34'),
(33, 'admin.journal.index', 'admin', '2020-10-04 02:30:34', '2020-10-04 02:30:34'),
(34, 'admin.journal.create', 'admin', '2020-10-04 02:30:34', '2020-10-04 02:30:34'),
(35, 'admin.journal.show', 'admin', '2020-10-04 02:30:34', '2020-10-04 02:30:34'),
(36, 'admin.journal.edit', 'admin', '2020-10-04 02:30:34', '2020-10-04 02:30:34'),
(37, 'admin.journal.delete', 'admin', '2020-10-04 02:30:34', '2020-10-04 02:30:34'),
(38, 'admin.journal.bulk-delete', 'admin', '2020-10-04 02:30:34', '2020-10-04 02:30:34'),
(39, 'admin.config', 'admin', '2020-10-04 22:06:11', '2020-10-04 22:06:11'),
(40, 'admin.config.index', 'admin', '2020-10-04 22:06:11', '2020-10-04 22:06:11'),
(41, 'admin.config.create', 'admin', '2020-10-04 22:06:11', '2020-10-04 22:06:11'),
(42, 'admin.config.show', 'admin', '2020-10-04 22:06:11', '2020-10-04 22:06:11'),
(43, 'admin.config.edit', 'admin', '2020-10-04 22:06:11', '2020-10-04 22:06:11'),
(44, 'admin.config.delete', 'admin', '2020-10-04 22:06:11', '2020-10-04 22:06:11'),
(45, 'admin.config.bulk-delete', 'admin', '2020-10-04 22:06:11', '2020-10-04 22:06:11'),
(46, 'admin.email-config', 'admin', '2020-10-06 06:32:01', '2020-10-06 06:32:01'),
(47, 'admin.email-config.index', 'admin', '2020-10-06 06:32:01', '2020-10-06 06:32:01'),
(48, 'admin.email-config.create', 'admin', '2020-10-06 06:32:01', '2020-10-06 06:32:01'),
(49, 'admin.email-config.show', 'admin', '2020-10-06 06:32:01', '2020-10-06 06:32:01'),
(50, 'admin.email-config.edit', 'admin', '2020-10-06 06:32:01', '2020-10-06 06:32:01'),
(51, 'admin.email-config.delete', 'admin', '2020-10-06 06:32:01', '2020-10-06 06:32:01'),
(52, 'admin.email-config.bulk-delete', 'admin', '2020-10-06 06:32:01', '2020-10-06 06:32:01');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', '2020-10-03 23:54:50', '2020-10-03 23:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1);

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `namespace` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '*',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` json NOT NULL,
  `metadata` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `namespace`, `group`, `key`, `text`, `metadata`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'brackets/admin-ui', 'admin', 'operation.succeeded', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(2, 'brackets/admin-ui', 'admin', 'operation.failed', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(3, 'brackets/admin-ui', 'admin', 'operation.not_allowed', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(4, '*', 'admin', 'admin-user.columns.activated', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(5, '*', 'admin', 'admin-user.columns.email', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(6, '*', 'admin', 'admin-user.columns.first_name', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(7, '*', 'admin', 'admin-user.columns.forbidden', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(8, '*', 'admin', 'admin-user.columns.language', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(9, 'brackets/admin-ui', 'admin', 'forms.select_an_option', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(10, '*', 'admin', 'admin-user.columns.last_name', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(11, '*', 'admin', 'admin-user.columns.password', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(12, '*', 'admin', 'admin-user.columns.password_repeat', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(13, '*', 'admin', 'admin-user.columns.roles', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(14, 'brackets/admin-ui', 'admin', 'forms.select_options', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(15, '*', 'admin', 'admin-user.actions.create', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(16, 'brackets/admin-ui', 'admin', 'btn.save', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(17, '*', 'admin', 'admin-user.actions.edit', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(18, '*', 'admin', 'admin-user.actions.index', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(19, 'brackets/admin-ui', 'admin', 'placeholder.search', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(20, 'brackets/admin-ui', 'admin', 'btn.search', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(21, '*', 'admin', 'admin-user.columns.id', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(22, 'brackets/admin-ui', 'admin', 'btn.edit', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(23, 'brackets/admin-ui', 'admin', 'btn.delete', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(24, 'brackets/admin-ui', 'admin', 'pagination.overview', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(25, 'brackets/admin-ui', 'admin', 'index.no_items', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(26, 'brackets/admin-ui', 'admin', 'index.try_changing_items', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(27, 'brackets/admin-ui', 'admin', 'btn.new', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(28, 'brackets/admin-ui', 'admin', 'profile_dropdown.account', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(29, 'brackets/admin-auth', 'admin', 'profile_dropdown.profile', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(30, 'brackets/admin-auth', 'admin', 'profile_dropdown.password', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(31, 'brackets/admin-auth', 'admin', 'profile_dropdown.logout', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(32, 'brackets/admin-ui', 'admin', 'sidebar.content', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(33, 'brackets/admin-ui', 'admin', 'sidebar.settings', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(34, '*', 'admin', 'admin-user.actions.edit_password', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(35, '*', 'admin', 'admin-user.actions.edit_profile', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(36, 'brackets/admin-auth', 'activations', 'email.line', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(37, 'brackets/admin-auth', 'activations', 'email.action', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(38, 'brackets/admin-auth', 'activations', 'email.notRequested', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(39, 'brackets/admin-auth', 'admin', 'activations.activated', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(40, 'brackets/admin-auth', 'admin', 'activations.invalid_request', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(41, 'brackets/admin-auth', 'admin', 'activations.disabled', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(42, 'brackets/admin-auth', 'admin', 'activations.sent', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(43, 'brackets/admin-auth', 'admin', 'passwords.sent', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(44, 'brackets/admin-auth', 'admin', 'passwords.reset', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(45, 'brackets/admin-auth', 'admin', 'passwords.invalid_token', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(46, 'brackets/admin-auth', 'admin', 'passwords.invalid_user', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(47, 'brackets/admin-auth', 'admin', 'passwords.invalid_password', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(48, 'brackets/admin-auth', 'resets', 'email.line', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(49, 'brackets/admin-auth', 'resets', 'email.action', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(50, 'brackets/admin-auth', 'resets', 'email.notRequested', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(51, '*', 'auth', 'failed', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(52, '*', 'auth', 'throttle', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(53, 'brackets/admin-auth', 'admin', 'activation_form.title', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(54, 'brackets/admin-auth', 'admin', 'activation_form.note', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(55, 'brackets/admin-auth', 'admin', 'auth_global.email', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(56, 'brackets/admin-auth', 'admin', 'activation_form.button', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(57, 'brackets/admin-auth', 'admin', 'login.title', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(58, 'brackets/admin-auth', 'admin', 'login.sign_in_text', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(59, 'brackets/admin-auth', 'admin', 'auth_global.password', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(60, 'brackets/admin-auth', 'admin', 'login.button', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(61, 'brackets/admin-auth', 'admin', 'login.forgot_password', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(62, 'brackets/admin-auth', 'admin', 'forgot_password.title', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(63, 'brackets/admin-auth', 'admin', 'forgot_password.note', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(64, 'brackets/admin-auth', 'admin', 'forgot_password.button', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(65, 'brackets/admin-auth', 'admin', 'password_reset.title', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(66, 'brackets/admin-auth', 'admin', 'password_reset.note', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(67, 'brackets/admin-auth', 'admin', 'auth_global.password_confirm', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(68, 'brackets/admin-auth', 'admin', 'password_reset.button', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(69, '*', '*', 'Manage access', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(70, '*', '*', 'Translations', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(71, '*', '*', 'Configuration', '[]', NULL, '2020-10-03 23:55:05', '2020-10-04 00:18:28', NULL),
(72, '*', 'admin', 'collection-category.columns.description', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(73, '*', 'admin', 'collection-category.columns.name', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(74, '*', 'admin', 'collection-category.columns.type_id', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(75, '*', 'admin', 'collection-category.actions.create', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(76, '*', 'admin', 'collection-category.actions.edit', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(77, '*', 'admin', 'collection-category.actions.index', '{\"en\": \"Categories\"}', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(78, '*', 'admin', 'collection-category.columns.id', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(79, 'brackets/admin-ui', 'admin', 'listing.selected_items', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(80, 'brackets/admin-ui', 'admin', 'listing.check_all_items', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(81, 'brackets/admin-ui', 'admin', 'listing.uncheck_all_items', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(82, '*', 'admin', 'collection-type.columns.name', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(83, '*', 'admin', 'collection-type.columns.description', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(84, '*', 'admin', 'collection-type.actions.create', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(85, '*', 'admin', 'collection-type.actions.edit', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(86, '*', 'admin', 'collection-type.actions.index', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(87, '*', 'admin', 'collection-type.columns.id', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(88, '*', 'admin', 'collection.columns.category_id', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(89, '*', 'admin', 'collection.columns.created_when', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(90, '*', 'admin', 'collection.columns.created_who', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(91, '*', 'admin', 'collection.columns.description', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(92, '*', 'admin', 'collection.columns.image_path', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(93, '*', 'admin', 'collection.columns.name', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(94, '*', 'admin', 'collection.actions.create', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(95, '*', 'admin', 'collection.actions.edit', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(96, '*', 'admin', 'collection.actions.index', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(97, '*', 'admin', 'collection.columns.id', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(98, '*', 'admin', 'collection-type.title', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(99, '*', 'admin', 'collection-category.title', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(100, '*', 'admin', 'collection.title', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(101, 'brackets/admin-ui', 'admin', 'media_uploader.max_number_of_files', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(102, 'brackets/admin-ui', 'admin', 'media_uploader.max_size_pre_file', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(103, 'brackets/admin-ui', 'admin', 'media_uploader.private_title', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(104, 'brackets/admin-ui', 'admin', 'page_title_suffix', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(105, 'brackets/admin-ui', 'admin', 'footer.powered_by', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(106, 'brackets/admin-translations', 'admin', 'title', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(107, 'brackets/admin-translations', 'admin', 'index.all_groups', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(108, 'brackets/admin-translations', 'admin', 'index.edit', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(109, 'brackets/admin-translations', 'admin', 'index.default_text', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(110, 'brackets/admin-translations', 'admin', 'index.translation', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(111, 'brackets/admin-translations', 'admin', 'index.translation_for_language', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(112, 'brackets/admin-translations', 'admin', 'import.title', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(113, 'brackets/admin-translations', 'admin', 'import.notice', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(114, 'brackets/admin-translations', 'admin', 'import.upload_file', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(115, 'brackets/admin-translations', 'admin', 'import.choose_file', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(116, 'brackets/admin-translations', 'admin', 'import.language_to_import', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(117, 'brackets/admin-translations', 'admin', 'fields.select_language', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(118, 'brackets/admin-translations', 'admin', 'import.do_not_override', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(119, 'brackets/admin-translations', 'admin', 'import.conflict_notice_we_have_found', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(120, 'brackets/admin-translations', 'admin', 'import.conflict_notice_translations_to_be_imported', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(121, 'brackets/admin-translations', 'admin', 'import.conflict_notice_differ', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(122, 'brackets/admin-translations', 'admin', 'fields.group', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(123, 'brackets/admin-translations', 'admin', 'fields.default', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(124, 'brackets/admin-translations', 'admin', 'fields.current_value', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(125, 'brackets/admin-translations', 'admin', 'fields.imported_value', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(126, 'brackets/admin-translations', 'admin', 'import.sucesfully_notice', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(127, 'brackets/admin-translations', 'admin', 'import.sucesfully_notice_update', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(128, 'brackets/admin-translations', 'admin', 'index.export', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(129, 'brackets/admin-translations', 'admin', 'export.notice', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(130, 'brackets/admin-translations', 'admin', 'export.language_to_export', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(131, 'brackets/admin-translations', 'admin', 'btn.export', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(132, 'brackets/admin-translations', 'admin', 'index.title', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(133, 'brackets/admin-translations', 'admin', 'btn.import', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(134, 'brackets/admin-translations', 'admin', 'btn.re_scan', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(135, 'brackets/admin-translations', 'admin', 'fields.created_at', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(136, 'brackets/admin-translations', 'admin', 'index.no_items', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(137, 'brackets/admin-translations', 'admin', 'index.try_changing_items', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL),
(138, '*', '*', 'Close', '[]', NULL, '2020-10-04 00:18:05', '2020-10-04 00:18:28', NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wysiwyg_media`
--

CREATE TABLE `wysiwyg_media` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wysiwygable_id` int(10) UNSIGNED DEFAULT NULL,
  `wysiwygable_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wysiwyg_media`
--

INSERT INTO `wysiwyg_media` (`id`, `file_path`, `wysiwygable_id`, `wysiwygable_type`, `created_at`, `updated_at`) VALUES
(1, 'uploads/1601805218Screen Shot 2020-09-29 at 05.05.32.png', NULL, NULL, '2020-10-04 02:53:39', '2020-10-04 02:53:39'),
(2, 'uploads/1601805946Screen Shot 2020-09-29 at 05.05.32.png', NULL, NULL, '2020-10-04 03:05:47', '2020-10-04 03:05:47'),
(3, 'uploads/1601810452LB_4.png', NULL, NULL, '2020-10-04 04:20:52', '2020-10-04 04:20:52'),
(4, 'uploads/1601876627image (2) 1.png', NULL, NULL, '2020-10-04 22:43:47', '2020-10-04 22:43:47'),
(5, 'uploads/1601884392Screen Shot 2020-09-29 at 05.05.32.png', NULL, NULL, '2020-10-05 00:53:12', '2020-10-05 00:53:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD KEY `activations_email_index` (`email`);

--
-- Indexes for table `admin_activations`
--
ALTER TABLE `admin_activations`
  ADD KEY `admin_activations_email_index` (`email`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_email_deleted_at_unique` (`email`,`deleted_at`);

--
-- Indexes for table `archive_submits`
--
ALTER TABLE `archive_submits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `collections_category_id_foreign` (`category_id`);

--
-- Indexes for table `collection_categories`
--
ALTER TABLE `collection_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `collection_categories_type_id_foreign` (`type_id`);

--
-- Indexes for table `collection_types`
--
ALTER TABLE `collection_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `configs_name_unique` (`name`);

--
-- Indexes for table `email_configs`
--
ALTER TABLE `email_configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `translations_namespace_index` (`namespace`),
  ADD KEY `translations_group_index` (`group`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wysiwyg_media`
--
ALTER TABLE `wysiwyg_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wysiwyg_media_wysiwygable_id_index` (`wysiwygable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `archive_submits`
--
ALTER TABLE `archive_submits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `collection_categories`
--
ALTER TABLE `collection_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `collection_types`
--
ALTER TABLE `collection_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `email_configs`
--
ALTER TABLE `email_configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wysiwyg_media`
--
ALTER TABLE `wysiwyg_media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collections`
--
ALTER TABLE `collections`
  ADD CONSTRAINT `collections_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `collection_categories` (`id`);

--
-- Constraints for table `collection_categories`
--
ALTER TABLE `collection_categories`
  ADD CONSTRAINT `collection_categories_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `collection_types` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
