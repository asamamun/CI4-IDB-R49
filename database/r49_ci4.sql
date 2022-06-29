-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 03:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `r49_ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'Shirts'),
(2, 'Footware'),
(3, 'Mobile'),
(4, 'Electronics'),
(5, 'Garments'),
(6, 'Property');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-06-05-115816', 'App\\Database\\Migrations\\Users', 'default', 'App', 1654434368, 1),
(7, '2022-06-08-102056', 'App\\Database\\Migrations\\Register', 'default', 'App', 1654684823, 2),
(8, '2022-06-08-103645', 'App\\Database\\Migrations\\Todo', 'default', 'App', 1654684823, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_code` int(11) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_code`, `product_description`, `category_id`, `product_price`) VALUES
(1, 'Running Shoes', 423423, 'These are some shoes', 2, 50),
(2, 'Hawaiian Shirt', 34234, 'This is a shirt', 1, 25),
(3, 'Hawaiian Shirt 2', 34234, 'This is a shirt 2', 1, 300),
(4, 'aaaaa44', 0, 'asdfsdf', 1, 120),
(5, 'new mobile', 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 2, 45000),
(6, 'Three Button Suit', 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 5, 1204),
(7, 'Four Button Suit', 0, 'Since the exact data passed to each callback varies a bit, here are the details on what is in the $data parameter passed to each event:', 5, 1212);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(5) UNSIGNED NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `first_name`, `last_name`, `email`, `password`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'FName48', 'LName48', 'abc48@example.com', '$2y$10$fnOGgNlB22XncqEn4.R9BOXonpBGf53ld4LOperHLq7MsMf7N6oKq', '1', NULL, NULL, NULL),
(2, 'FName11', 'LName11', 'abc11@example.com', '$2y$10$iX7yOsMq8PVQ/ZpdMEZ.SOA1rgql52aENhQvjEk7bQYtlvPdIkI5m', '1', NULL, NULL, NULL),
(3, 'FName57', 'LName57', 'abc57@example.com', '$2y$10$dV9uQp7HeRtY9ECmlvlNOOO8eXg/atZRvp0dGX0RQa.TErK8neXpW', '1', NULL, NULL, NULL),
(4, 'FName17', 'LName17', 'abc17@example.com', '$2y$10$2IZsjkphwrBjnMg.7siV0eZb2QiY/Ya.V0FiCqJhQ0sDktXSU5yiG', '1', NULL, NULL, NULL),
(5, 'FName3', 'LName3', 'abc3@example.com', '$2y$10$12OKFEfERU/sDY1QxewFXu/5X4PcbBMzRVxVLtdH5Dog8jpBZr9dC', '1', NULL, NULL, NULL),
(6, 'FName21', 'LName21', 'abc21@example.com', '$2y$10$ErW.JKLbVZSyxAlmfeHZJ.DSOR6w3H1gB3SFkNdB.elEeXBv2eCnC', '1', NULL, NULL, NULL),
(8, 'FName89', 'LName89', 'abc89@example.com', '$2y$10$uuQnK9Jyk9WS/X0B4B1EmeAVMvMS4.saMIUZ5aVL2/zv9Hm8mPdUK', '1', NULL, NULL, NULL),
(9, 'FName34', 'LName34', 'abc34@example.com', '$2y$10$Lk0Phqikz3c6Wq8Qrk1pPuNAOICOM6y3n7AcQO9OJcFNszkxvSmXy', '1', NULL, NULL, NULL),
(10, 'FName35', 'LName35', 'abc35@example.com', '$2y$10$tyJ6.3AacmSHn4XuG2IsQusSOXDeC36kLP1ImsqWlc5t0lmRFUVu.', '1', NULL, NULL, NULL),
(11, 'FName50', 'LName50', 'abc50@example.com', '$2y$10$0ixtzB9LUELNVRSbK/o3W.G74CUEi/Uf3OWi.asbCJyAlITV0Vy8W', '1', NULL, NULL, NULL),
(12, 'FName65', 'LName65', 'abc65@example.com', '$2y$10$kFamDuHXqI243o92L0SjLe1FKBQNqrhldy.hzk0R.9F8sKoTAMZ.y', '1', NULL, NULL, NULL),
(13, 'FName29', 'LName29', 'abc29@example.com', '$2y$10$I7uSflA9ch99hM6ziwPdlOScQbeYo1eQO.FxFsEGqsd4rpNJzi112', '1', NULL, NULL, NULL),
(14, 'FName32', 'LName32', 'abc32@example.com', '$2y$10$sjN9YISw1I2Q/HLaqwsy0.GuPvwq9zZGMNZIT4GCDhWZyEcO1kiaC', '1', NULL, NULL, NULL),
(15, 'FName22', 'LName22', 'abc22@example.com', '$2y$10$JTAMCMpILu9udZymcJR9wur9VH6XryEZLiQ29lnc4qQAvU3w0l6Vi', '1', NULL, NULL, NULL),
(16, 'FName61', 'LName61', 'abc61@example.com', '$2y$10$7rwLcOjtVfh9RjkBwSXBuOGNIkYGravMWb4Xiy32db0NMoxt9skEq', '1', NULL, NULL, NULL),
(17, 'FName13', 'LName13', 'abc13@example.com', '$2y$10$TEgiNMtrukqmZhki5ZUC7.G9u3YIm3S3Tg.uhUy3Ma5IWsf0yPiR2', '1', NULL, NULL, NULL),
(18, 'FName63', 'LName63', 'abc63@example.com', '$2y$10$qbn7.fEv5bhr2crfnqcQX.HAShgISnoOuFC//S/wrwK7UTi.ZCyIO', '1', NULL, NULL, NULL),
(19, 'FName73', 'LName73', 'abc73@example.com', '$2y$10$7zNg1u59wPXfq/kNThntke1laTe7z9ru9nRFVLXp6CP8n6HAtzRUK', '1', NULL, NULL, NULL),
(20, 'FName53', 'LName53', 'abc53@example.com', '$2y$10$Rv0RFNDcGGHcu/SfnaGanuYV4/Hhps/oJf5WsfcjrG2MEvmGBlBN6', '1', NULL, NULL, NULL),
(21, 'FName66', 'LName66', 'abc66@example.com', '$2y$10$LxYYpGky3T5Ds.I6RN3va.e5n7YzR4RWWi6cxZSxp3BRTZe3RfO6e', '1', NULL, NULL, NULL),
(23, 'FName47', 'LName47', 'abc47@example.com', '$2y$10$Fsh7lcIY7hGS.jxqOV9KiuLRnHOOynCgrf0Xi709rp8ZhlW.W6aTK', '1', NULL, NULL, NULL),
(24, 'FName94', 'LName94', 'abc94@example.com', '$2y$10$TrwlYcpZNomjQ2ItvvgL5eHRhU5gV4VaDQ7KuNCF43rph/X7pEeG6', '1', NULL, NULL, NULL),
(25, 'FName78', 'LName78', 'abc78@example.com', '$2y$10$0ztirrviNXh18ollfqLIDeAoGvPhDBv0FFVc8LmLVBi.TE5hMJBsG', '1', NULL, NULL, NULL),
(26, 'FName2', 'LName2', 'abc2@example.com', '$2y$10$kiL7sEHU549TqyY0GExkoes4FVrFlKLvT6978TyUMr4dkT5UJQwiu', '1', NULL, NULL, NULL),
(29, 'FName77', 'LName77', 'abc77@example.com', '$2y$10$2Rct7g/fCDTNVE2LXONjHOXwfjZh1HosViEta2YJM8jDEDtSFGtyy', '1', NULL, NULL, NULL),
(31, 'FName85', 'LName85', 'abc85@example.com', '$2y$10$993wORsozVrCPic3m/AQX.CwELYxGCe0slsLeYH6CkkWRKTPfpFp.', '1', NULL, NULL, NULL),
(32, 'FName9', 'LName9', 'abc9@example.com', '$2y$10$fzAdzmOq0IGTT4BoEZARkOvEuBUN/Oh2lHq7WSjvSaOJqIk2fIyOW', '1', NULL, NULL, NULL),
(33, 'FName84', 'LName84', 'abc84@example.com', '$2y$10$pXq/JjdyXi01h2XtS1zdWeZF/gyVAgRkxGqgaCzpCNIJBKR5rkvyC', '1', NULL, NULL, NULL),
(38, 'FName41', 'LName41', 'abc41@example.com', '$2y$10$QMx0kEeATRr7Ab8RQI/gQeRfiJFDlAqgqPMvMKgp2suk2xQiGJrru', '1', NULL, NULL, NULL),
(39, 'FName5', 'LName5', 'abc5@example.com', '$2y$10$QV0/XxP2vEwIntlP/HuXUOgq5kS5RlLevq3aZhDukPwiqhoPrlaXm', '1', NULL, NULL, NULL),
(40, 'FName62', 'LName62', 'abc62@example.com', '$2y$10$vxd05jSwPrYHro5.SYCbWuD40YWToW54Zt.tLQgym.6fgU2DGzY16', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(512) NOT NULL,
  `done` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) UNSIGNED NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(201, 'a', 'b', 'test@gmail.com', 0, NULL, NULL, NULL),
(202, 'ASA', 'Al-Mamun', 'asamamun.web@gmail.com', 1, NULL, NULL, NULL),
(205, 'ASA', 'Al-Mamun', 'asamamun.web1@gmail.com', 1, NULL, NULL, NULL),
(206, 'Default', 'default', 'default@gmail.com', 1, NULL, NULL, NULL),
(207, 'ASA', 'Al-Mamun', 'asamamun.web567@gmail.com', 1, NULL, NULL, NULL),
(208, 'Default', 'default', 'default555@gmail.com', 1, NULL, NULL, NULL),
(209, 'Default123', 'default123', 'default123321@gmail.com', 1, NULL, NULL, NULL),
(210, 'Tasnim', 'Al-Rahman', 'tasnim@gmail.com', 1, NULL, NULL, NULL),
(211, 'Eloy', 'Marquardt', 'elvis.cremin@hane.biz', 0, '2022-06-12 00:29:43', NULL, NULL),
(212, 'Joyce', 'White', 'rutherford.casey@yahoo.com', 0, '2022-06-12 00:29:43', NULL, NULL),
(213, 'Alena', 'Mante', 'mbrekke@hotmail.com', 1, '2022-06-12 00:29:43', NULL, NULL),
(214, 'Ana', 'Zboncak', 'greenfelder.sheila@terry.com', 0, '2022-06-12 00:29:43', NULL, NULL),
(215, 'Keanu', 'Boyer', 'verna.hoppe@turner.com', 1, '2022-06-12 00:29:43', NULL, NULL),
(216, 'Shyanne', 'Kreiger', 'lfisher@gmail.com', 0, '2022-06-12 00:29:43', NULL, NULL),
(217, 'Maybelle', 'Hagenes', 'sharon44@williamson.biz', 0, '2022-06-12 00:29:43', NULL, NULL),
(218, 'Eddie', 'Rogahn', 'grolfson@kling.net', 1, '2022-06-12 00:29:43', NULL, NULL),
(219, 'Lilliana', 'Howe', 'aylin15@heller.com', 1, '2022-06-12 00:29:43', NULL, NULL),
(220, 'Magali', 'Balistreri', 'jacklyn94@gmail.com', 1, '2022-06-12 00:29:43', NULL, NULL),
(221, 'Jermey', 'Hilpert', 'brown.joshua@hotmail.com', 0, '2022-06-12 00:29:43', NULL, NULL),
(222, 'Anna', 'Bins', 'norval66@schulist.biz', 1, '2022-06-12 00:29:43', NULL, NULL),
(223, 'Mertie', 'Champlin', 'kunde.johnathan@bartoletti.com', 1, '2022-06-12 00:29:43', NULL, NULL),
(224, 'Reyna', 'Swaniawski', 'jake.okon@gmail.com', 1, '2022-06-12 00:29:43', NULL, NULL),
(225, 'Liza', 'Botsford', 'selina.monahan@gmail.com', 0, '2022-06-12 00:29:43', NULL, NULL),
(226, 'Maybelle', 'Bergnaum', 'purdy.darrell@lemke.com', 0, '2022-06-12 00:29:43', NULL, NULL),
(227, 'Lacy', 'Ernser', 'braun.sasha@gmail.com', 0, '2022-06-12 00:29:43', NULL, NULL),
(228, 'Althea', 'Hills', 'dewayne.herzog@volkman.biz', 0, '2022-06-12 00:29:43', NULL, NULL),
(229, 'Savanna', 'Runolfsdottir', 'feest.jarrod@erdman.net', 1, '2022-06-12 00:29:43', NULL, NULL),
(230, 'Faustino', 'Johnson', 'wrice@hill.com', 0, '2022-06-12 00:29:43', NULL, NULL),
(231, 'Kyla', 'Hegmann', 'ewalsh@gmail.com', 0, '2022-06-12 00:29:43', NULL, NULL),
(232, 'Faustino', 'Gorczany', 'west.matilde@hotmail.com', 0, '2022-06-12 00:29:43', NULL, NULL),
(233, 'Ryann', 'Schumm', 'mkozey@gmail.com', 0, '2022-06-12 00:29:44', NULL, NULL),
(234, 'Kameron', 'Turner', 'daisy.schuster@wisoky.com', 1, '2022-06-12 00:29:44', NULL, NULL),
(235, 'Noble', 'Erdman', 'adolfo.schmidt@lubowitz.com', 0, '2022-06-12 00:29:44', NULL, NULL),
(236, 'Adella', 'Wolf', 'gerry.goyette@heidenreich.net', 0, '2022-06-12 00:29:44', NULL, NULL),
(237, 'Pedro', 'Feest', 'kassulke.krystal@breitenberg.net', 0, '2022-06-12 00:29:44', NULL, NULL),
(238, 'Bridgette', 'Konopelski', 'nolan.alfonzo@rice.org', 0, '2022-06-12 00:29:44', NULL, NULL),
(239, 'Elias', 'Botsford', 'alexa.reichert@thiel.com', 0, '2022-06-12 00:29:44', NULL, NULL),
(240, 'Bettie', 'O\'Keefe', 'shuels@mertz.com', 1, '2022-06-12 00:29:44', NULL, NULL),
(241, 'Wilton', 'Nicolas', 'volson@yahoo.com', 1, '2022-06-12 00:29:44', NULL, NULL),
(242, 'Willis', 'Casper', 'maybell.bergnaum@donnelly.biz', 0, '2022-06-12 00:29:44', NULL, NULL),
(243, 'Aaron', 'Howe', 'enola41@witting.com', 0, '2022-06-12 00:29:44', NULL, NULL),
(244, 'Haley', 'Barton', 'anna33@mayert.com', 0, '2022-06-12 00:29:44', NULL, NULL),
(245, 'Ilene', 'Mante', 'joesph85@gmail.com', 0, '2022-06-12 00:29:44', NULL, NULL),
(246, 'Desmond', 'Lindgren', 'ladams@ohara.info', 0, '2022-06-12 00:29:44', NULL, NULL),
(247, 'Stevie', 'Cummerata', 'skuhlman@yahoo.com', 0, '2022-06-12 00:29:44', NULL, NULL),
(248, 'Dennis', 'McCullough', 'cummings.andreane@yahoo.com', 0, '2022-06-12 00:29:44', NULL, NULL),
(249, 'Edythe', 'Emmerich', 'yundt.sedrick@yahoo.com', 1, '2022-06-12 00:29:44', NULL, NULL),
(250, 'Connie', 'Swaniawski', 'hkoch@beier.biz', 0, '2022-06-12 00:29:44', NULL, NULL),
(251, 'Ransom', 'Kiehn', 'ila.murphy@yahoo.com', 1, '2022-06-12 00:29:44', NULL, NULL),
(252, 'Werner', 'Grimes', 'gkling@hotmail.com', 0, '2022-06-12 00:29:44', NULL, NULL),
(253, 'Ayla', 'Feeney', 'murray.friedrich@turcotte.com', 0, '2022-06-12 00:29:44', NULL, NULL),
(254, 'Donato', 'Graham', 'wolff.elvera@corkery.com', 1, '2022-06-12 00:29:44', NULL, NULL),
(255, 'Marisa', 'Mohr', 'flatley.dee@yahoo.com', 1, '2022-06-12 00:29:44', NULL, NULL),
(256, 'Einar', 'Kris', 'oreilly.kayla@donnelly.com', 1, '2022-06-12 00:29:44', NULL, NULL),
(257, 'Kellie', 'Hammes', 'elvis92@dietrich.biz', 0, '2022-06-12 00:29:44', NULL, NULL),
(258, 'Bonnie', 'Rohan', 'vlangworth@gmail.com', 0, '2022-06-12 00:29:44', NULL, NULL),
(259, 'Chandler', 'Hammes', 'jade20@schowalter.net', 0, '2022-06-12 00:29:45', NULL, NULL),
(260, 'Antonette', 'Christiansen', 'gwalker@hotmail.com', 0, '2022-06-12 00:29:45', NULL, NULL),
(261, 'Annabel', 'Ondricka', 'ardith07@hotmail.com', 1, '2022-06-12 00:29:45', NULL, NULL),
(262, 'Karelle', 'Mertz', 'hfriesen@hotmail.com', 0, '2022-06-12 00:29:45', NULL, NULL),
(263, 'Bernhard', 'Mann', 'vandervort.luna@connelly.org', 1, '2022-06-12 00:29:45', NULL, NULL),
(264, 'Beatrice', 'Rogahn', 'domenic00@hotmail.com', 1, '2022-06-12 00:29:45', NULL, NULL),
(265, 'Ivah', 'Jast', 'sandrine64@gmail.com', 1, '2022-06-12 00:29:45', NULL, NULL),
(266, 'Deven', 'Wilkinson', 'rau.kailey@hotmail.com', 1, '2022-06-12 00:29:45', NULL, NULL),
(267, 'Sigmund', 'Kuhlman', 'aurelio87@rath.org', 0, '2022-06-12 00:29:45', NULL, NULL),
(268, 'Jeremy', 'Oberbrunner', 'arlene99@gmail.com', 0, '2022-06-12 00:29:45', NULL, NULL),
(269, 'Ellsworth', 'Renner', 'lincoln.schoen@yahoo.com', 1, '2022-06-12 00:29:45', NULL, NULL),
(270, 'Jaden', 'Von', 'adickinson@oreilly.com', 1, '2022-06-12 00:29:45', NULL, NULL),
(271, 'Asha', 'Hamill', 'nwatsica@hessel.com', 1, '2022-06-12 00:29:45', NULL, NULL),
(272, 'Kennedy', 'Reinger', 'ewintheiser@gmail.com', 0, '2022-06-12 00:29:45', NULL, NULL),
(273, 'Kaden', 'Graham', 'kgreenholt@torp.com', 0, '2022-06-12 00:29:45', NULL, NULL),
(274, 'Tod', 'Zemlak', 'zswaniawski@gmail.com', 1, '2022-06-12 00:29:45', NULL, NULL),
(275, 'Antonio', 'Muller', 'vcormier@hotmail.com', 0, '2022-06-12 00:29:45', NULL, NULL),
(276, 'Alden', 'Grimes', 'lorine54@bradtke.net', 1, '2022-06-12 00:29:45', NULL, NULL),
(277, 'Lucy', 'Tillman', 'hwisoky@gmail.com', 0, '2022-06-12 00:29:45', NULL, NULL),
(278, 'Luz', 'Goldner', 'bogisich.eva@hotmail.com', 0, '2022-06-12 00:29:45', NULL, NULL),
(279, 'Aubrey', 'Stiedemann', 'mustafa.shanahan@yahoo.com', 0, '2022-06-12 00:29:45', NULL, NULL),
(280, 'Modesto', 'Sipes', 'mconroy@weissnat.com', 0, '2022-06-12 00:29:45', NULL, NULL),
(281, 'Toni', 'Rogahn', 'gleichner.myah@hotmail.com', 1, '2022-06-12 00:29:45', NULL, NULL),
(282, 'Stephen', 'Wuckert', 'ansley.brown@ankunding.com', 1, '2022-06-12 00:29:45', NULL, NULL),
(283, 'Melany', 'Kling', 'zulauf.alia@hotmail.com', 1, '2022-06-12 00:29:45', NULL, NULL),
(284, 'Lenore', 'Zulauf', 'brandi.thompson@dickinson.com', 0, '2022-06-12 00:29:45', NULL, NULL),
(285, 'Bell', 'Crist', 'npouros@yahoo.com', 1, '2022-06-12 00:29:45', NULL, NULL),
(286, 'Jameson', 'Kihn', 'taylor.muller@cole.com', 0, '2022-06-12 00:29:45', NULL, NULL),
(287, 'Maci', 'Lubowitz', 'hschimmel@connelly.com', 1, '2022-06-12 00:29:45', NULL, NULL),
(288, 'Andreanne', 'Spinka', 'mekhi.kihn@yahoo.com', 1, '2022-06-12 00:29:45', NULL, NULL),
(289, 'Erica', 'Howell', 'janie41@gmail.com', 1, '2022-06-12 00:29:45', NULL, NULL),
(290, 'Rosetta', 'Rodriguez', 'ewiegand@hotmail.com', 1, '2022-06-12 00:29:45', NULL, NULL),
(291, 'John', 'Schiller', 'mante.christ@gmail.com', 1, '2022-06-12 00:29:45', NULL, NULL),
(292, 'Jayda', 'Reilly', 'quincy67@gmail.com', 0, '2022-06-12 00:29:46', NULL, NULL),
(293, 'Linnea', 'Sanford', 'kylie.wehner@heathcote.org', 0, '2022-06-12 00:29:46', NULL, NULL),
(294, 'Cayla', 'Stiedemann', 'ali.simonis@keeling.org', 1, '2022-06-12 00:29:46', NULL, NULL),
(295, 'Polly', 'Beahan', 'delores.howe@macejkovic.com', 0, '2022-06-12 00:29:46', NULL, NULL),
(296, 'Jeramie', 'Cruickshank', 'freda.crona@kuhn.biz', 1, '2022-06-12 00:29:46', NULL, NULL),
(297, 'Jeff', 'Bradtke', 'werner.gislason@hotmail.com', 0, '2022-06-12 00:29:46', NULL, NULL),
(298, 'Dallin', 'Rowe', 'buddy.bechtelar@hotmail.com', 1, '2022-06-12 00:29:46', NULL, NULL),
(299, 'Cletus', 'Muller', 'zoila.kihn@eichmann.com', 0, '2022-06-12 00:29:46', NULL, NULL),
(300, 'Garrison', 'Bradtke', 'lbartoletti@gaylord.com', 0, '2022-06-12 00:29:46', NULL, NULL),
(301, 'Stanford', 'Turner', 'qoconnell@yahoo.com', 1, '2022-06-12 00:29:46', NULL, NULL),
(302, 'Coleman', 'Frami', 'devante89@huel.com', 0, '2022-06-12 00:29:46', NULL, NULL),
(303, 'Abdiel', 'Hudson', 'evans.hodkiewicz@yahoo.com', 0, '2022-06-12 00:29:46', NULL, NULL),
(304, 'Esperanza', 'Rogahn', 'kovacek.nelda@gmail.com', 1, '2022-06-12 00:29:46', NULL, NULL),
(305, 'Bryana', 'Senger', 'dbalistreri@yahoo.com', 0, '2022-06-12 00:29:46', NULL, NULL),
(306, 'Lyda', 'Little', 'cameron43@yahoo.com', 0, '2022-06-12 00:29:46', NULL, NULL),
(307, 'Jacquelyn', 'Kemmer', 'sofia48@hotmail.com', 0, '2022-06-12 00:29:46', NULL, NULL),
(308, 'Mona', 'Rosenbaum', 'kenyatta.torphy@dach.biz', 0, '2022-06-12 00:29:46', NULL, NULL),
(309, 'Angelita', 'Kuhlman', 'lavon.mraz@gmail.com', 0, '2022-06-12 00:29:46', NULL, NULL),
(310, 'Krystina', 'Skiles', 'kolby.goodwin@von.com', 1, '2022-06-12 00:29:46', NULL, NULL),
(311, 'Lionel', 'Murphy', 'layla55@gmail.com', 1, '2022-06-12 00:29:46', NULL, NULL),
(312, 'Zoey', 'Senger', 'peyton.sporer@predovic.net', 0, '2022-06-12 00:29:46', NULL, NULL),
(313, 'Dorothy', 'Beier', 'lward@yahoo.com', 0, '2022-06-12 00:29:46', NULL, NULL),
(314, 'Justen', 'Nitzsche', 'aberge@hotmail.com', 1, '2022-06-12 00:29:46', NULL, NULL),
(315, 'Golda', 'Ratke', 'antonio.monahan@yahoo.com', 1, '2022-06-12 00:29:46', NULL, NULL),
(316, 'Amiya', 'Bashirian', 'ortiz.lyric@gmail.com', 1, '2022-06-12 00:29:46', NULL, NULL),
(317, 'Amy', 'Klein', 'dbeatty@yahoo.com', 1, '2022-06-12 00:29:46', NULL, NULL),
(318, 'Steve', 'Schaefer', 'bkunde@kunde.com', 1, '2022-06-12 00:29:46', NULL, NULL),
(319, 'Mitchell', 'Cummings', 'gusikowski.erica@roberts.com', 0, '2022-06-12 00:29:46', NULL, NULL),
(320, 'Sonia', 'West', 'flavie.pouros@gmail.com', 1, '2022-06-12 00:29:46', NULL, NULL),
(321, 'Ollie', 'Doyle', 'frederique42@gmail.com', 0, '2022-06-12 00:29:46', NULL, NULL),
(322, 'Lexus', 'Marquardt', 'ali45@hotmail.com', 0, '2022-06-12 00:29:46', NULL, NULL),
(323, 'Lina', 'Mitchell', 'nkoepp@yahoo.com', 1, '2022-06-12 00:29:47', NULL, NULL),
(324, 'Savanah', 'Mante', 'hank69@gmail.com', 0, '2022-06-12 00:29:47', NULL, NULL),
(325, 'Eva', 'Pfeffer', 'dominique.pfannerstill@pollich.com', 0, '2022-06-12 00:29:47', NULL, NULL),
(326, 'Ransom', 'Purdy', 'jroberts@schuppe.net', 1, '2022-06-12 00:29:47', NULL, NULL),
(327, 'Bradly', 'Walter', 'casimer.grant@gmail.com', 1, '2022-06-12 00:29:47', NULL, NULL),
(328, 'Sally', 'Bogan', 'ymosciski@stehr.net', 1, '2022-06-12 00:29:47', NULL, NULL),
(329, 'Godfrey', 'Dibbert', 'sanford.angelina@rodriguez.com', 0, '2022-06-12 00:29:47', NULL, NULL),
(330, 'Lurline', 'Parker', 'shanon96@gislason.com', 0, '2022-06-12 00:29:47', NULL, NULL),
(331, 'Jaylin', 'Shanahan', 'zarmstrong@blick.com', 1, '2022-06-12 00:29:47', NULL, NULL),
(332, 'Quinn', 'Bednar', 'steuber.wilber@gmail.com', 1, '2022-06-12 00:29:47', NULL, NULL),
(333, 'Brent', 'Grimes', 'vjerde@gmail.com', 1, '2022-06-12 00:29:47', NULL, NULL),
(334, 'Price', 'Bogan', 'shaun.conn@bernhard.com', 1, '2022-06-12 00:29:47', NULL, NULL),
(335, 'Michael', 'Nolan', 'ymohr@carter.com', 1, '2022-06-12 00:29:47', NULL, NULL),
(336, 'Emelia', 'Will', 'kling.kenna@hotmail.com', 1, '2022-06-12 00:29:47', NULL, NULL),
(337, 'Alexandrine', 'Walker', 'reta80@hansen.info', 0, '2022-06-12 00:29:47', NULL, NULL),
(338, 'Cierra', 'Bradtke', 'kaitlyn40@yahoo.com', 1, '2022-06-12 00:29:47', NULL, NULL),
(339, 'Stanton', 'Champlin', 'vergie17@friesen.biz', 1, '2022-06-12 00:29:47', NULL, NULL),
(340, 'Garret', 'Bergnaum', 'gloria.harvey@gmail.com', 0, '2022-06-12 00:29:47', NULL, NULL),
(341, 'Ladarius', 'Marks', 'aglae41@yahoo.com', 0, '2022-06-12 00:29:47', NULL, NULL),
(342, 'Lavonne', 'Stehr', 'oberbrunner.cordie@gmail.com', 1, '2022-06-12 00:29:47', NULL, NULL),
(343, 'Eldora', 'Schuster', 'cora88@hotmail.com', 0, '2022-06-12 00:29:47', NULL, NULL),
(344, 'Ken', 'Schneider', 'ethel.kshlerin@larkin.org', 0, '2022-06-12 00:29:47', NULL, NULL),
(345, 'Summer', 'Schroeder', 'rgraham@denesik.info', 1, '2022-06-12 00:29:47', NULL, NULL),
(346, 'Marjorie', 'Thiel', 'charlene.greenholt@murazik.net', 0, '2022-06-12 00:29:48', NULL, NULL),
(347, 'Murphy', 'Kuhic', 'melyssa.douglas@shanahan.biz', 1, '2022-06-12 00:29:48', NULL, NULL),
(348, 'Breana', 'West', 'swaelchi@hegmann.net', 1, '2022-06-12 00:29:48', NULL, NULL),
(349, 'Alford', 'O\'Keefe', 'randy40@yahoo.com', 1, '2022-06-12 00:29:48', NULL, NULL),
(350, 'Jillian', 'VonRueden', 'teresa.reilly@yahoo.com', 0, '2022-06-12 00:29:48', NULL, NULL),
(351, 'Jabari', 'Turcotte', 'wendy62@yahoo.com', 0, '2022-06-12 00:29:48', NULL, NULL),
(352, 'Neal', 'Dietrich', 'oorn@schoen.com', 1, '2022-06-12 00:29:48', NULL, NULL),
(353, 'Santina', 'Metz', 'kailyn48@yahoo.com', 1, '2022-06-12 00:29:48', NULL, NULL),
(354, 'Betsy', 'Kerluke', 'wisozk.glenna@yahoo.com', 1, '2022-06-12 00:29:48', NULL, NULL),
(355, 'Cesar', 'Swaniawski', 'margarete.effertz@stoltenberg.com', 1, '2022-06-12 00:29:48', NULL, NULL),
(356, 'Florine', 'Boyle', 'dreinger@gmail.com', 1, '2022-06-12 00:29:48', NULL, NULL),
(357, 'Amie', 'Deckow', 'haleigh.osinski@shields.com', 0, '2022-06-12 00:29:48', NULL, NULL),
(358, 'Olin', 'Cartwright', 'ischowalter@gmail.com', 0, '2022-06-12 00:29:48', NULL, NULL),
(359, 'Linwood', 'Lowe', 'dillan.mueller@gmail.com', 1, '2022-06-12 00:29:48', NULL, NULL),
(360, 'Margarette', 'Kilback', 'steuber.shaniya@kassulke.biz', 0, '2022-06-12 00:29:48', NULL, NULL),
(361, 'Benton', 'Franecki', 'odell29@brown.com', 0, '2022-06-12 00:29:48', NULL, NULL),
(362, 'Harmon', 'Purdy', 'wolf.janae@hotmail.com', 0, '2022-06-12 00:29:48', NULL, NULL),
(363, 'Rhett', 'Koepp', 'dayne.krajcik@hotmail.com', 1, '2022-06-12 00:29:48', NULL, NULL),
(364, 'Marguerite', 'Corwin', 'greenfelder.orval@brekke.com', 0, '2022-06-12 00:29:48', NULL, NULL),
(365, 'Maximilian', 'Braun', 'ocummerata@hotmail.com', 0, '2022-06-12 00:29:48', NULL, NULL),
(366, 'Vincenzo', 'Cruickshank', 'yoshiko.west@gerlach.com', 0, '2022-06-12 00:29:48', NULL, NULL),
(367, 'Carmen', 'Block', 'americo.stroman@cartwright.net', 1, '2022-06-12 00:29:48', NULL, NULL),
(368, 'Nicolette', 'Boyle', 'lenora28@watsica.com', 1, '2022-06-12 00:29:49', NULL, NULL),
(369, 'Kaelyn', 'Ebert', 'asa.krajcik@oberbrunner.org', 0, '2022-06-12 00:29:49', NULL, NULL),
(370, 'Carmen', 'Muller', 'marvin.mathias@gmail.com', 1, '2022-06-12 00:29:49', NULL, NULL),
(371, 'Hailee', 'Langosh', 'htreutel@schuppe.biz', 0, '2022-06-12 00:29:49', NULL, NULL),
(372, 'Gavin', 'Satterfield', 'yjacobson@towne.com', 0, '2022-06-12 00:29:49', NULL, NULL),
(373, 'Cristal', 'Bode', 'lueilwitz.doug@yahoo.com', 0, '2022-06-12 00:29:49', NULL, NULL),
(374, 'Daren', 'Orn', 'zfeest@gmail.com', 0, '2022-06-12 00:29:49', NULL, NULL),
(375, 'Buddy', 'Huel', 'hartmann.rebecca@gmail.com', 1, '2022-06-12 00:29:49', NULL, NULL),
(376, 'Marshall', 'Bins', 'clarissa.botsford@purdy.net', 0, '2022-06-12 00:29:49', NULL, NULL),
(377, 'Rosendo', 'Leuschke', 'esmeralda62@becker.com', 0, '2022-06-12 00:29:49', NULL, NULL),
(378, 'Cassandre', 'Vandervort', 'jovanny99@hayes.com', 1, '2022-06-12 00:29:49', NULL, NULL),
(379, 'Kellie', 'Wiza', 'rbosco@yahoo.com', 0, '2022-06-12 00:29:49', NULL, NULL),
(380, 'Genesis', 'Witting', 'mireille43@harvey.net', 0, '2022-06-12 00:29:49', NULL, NULL),
(381, 'Boris', 'Dietrich', 'istiedemann@beier.com', 0, '2022-06-12 00:29:49', NULL, NULL),
(382, 'Laura', 'Dooley', 'hattie.schuster@gmail.com', 0, '2022-06-12 00:29:49', NULL, NULL),
(383, 'Gabriel', 'Hammes', 'althea.turcotte@metz.info', 1, '2022-06-12 00:29:49', NULL, NULL),
(384, 'Dedric', 'Grant', 'makenzie60@gutkowski.com', 0, '2022-06-12 00:29:49', NULL, NULL),
(385, 'Reilly', 'Baumbach', 'bleannon@quitzon.net', 0, '2022-06-12 00:29:49', NULL, NULL),
(386, 'Lucious', 'Keeling', 'lester.wiegand@wolff.com', 0, '2022-06-12 00:29:49', NULL, NULL),
(387, 'Jeramie', 'Denesik', 'ygoodwin@gmail.com', 1, '2022-06-12 00:29:49', NULL, NULL),
(388, 'Neva', 'Mraz', 'margot09@kihn.com', 1, '2022-06-12 00:29:50', NULL, NULL),
(389, 'Ottilie', 'Harvey', 'fadel.lia@hotmail.com', 0, '2022-06-12 00:29:50', NULL, NULL),
(390, 'Willis', 'Gibson', 'hillary.marvin@yahoo.com', 0, '2022-06-12 00:29:50', NULL, NULL),
(391, 'Fred', 'Schaefer', 'squigley@hamill.org', 0, '2022-06-12 00:29:50', NULL, NULL),
(392, 'Bret', 'Sauer', 'kgulgowski@gmail.com', 1, '2022-06-12 00:29:50', NULL, NULL),
(393, 'Adeline', 'Walker', 'uhaley@yahoo.com', 0, '2022-06-12 00:29:50', NULL, NULL),
(394, 'Pascale', 'Klocko', 'adurgan@yahoo.com', 0, '2022-06-12 00:29:50', NULL, NULL),
(395, 'Green', 'Roberts', 'mante.luz@keeling.com', 1, '2022-06-12 00:29:50', NULL, NULL),
(396, 'Cathryn', 'Lebsack', 'mikel.shields@durgan.com', 1, '2022-06-12 00:29:50', NULL, NULL),
(397, 'Nathanael', 'Beahan', 'okuneva.harley@hotmail.com', 0, '2022-06-12 00:29:50', NULL, NULL),
(398, 'Margarett', 'Rowe', 'emmerich.brianne@kuvalis.com', 0, '2022-06-12 00:29:50', NULL, NULL),
(399, 'Merritt', 'Wolf', 'fay.jarret@gmail.com', 0, '2022-06-12 00:29:50', NULL, NULL),
(400, 'Alexis', 'Glover', 'kgulgowski@effertz.net', 0, '2022-06-12 00:29:50', NULL, NULL),
(401, 'Dandre', 'Kirlin', 'mayert.antonio@yahoo.com', 1, '2022-06-12 00:29:50', NULL, NULL),
(402, 'Madge', 'Ziemann', 'ibednar@hilpert.com', 1, '2022-06-12 00:29:50', NULL, NULL),
(403, 'Lacey', 'Klein', 'ischaefer@fritsch.com', 1, '2022-06-12 00:29:50', NULL, NULL),
(404, 'Timmothy', 'Heathcote', 'josefina.mohr@klein.com', 1, '2022-06-12 00:29:50', NULL, NULL),
(405, 'Rowena', 'Pouros', 'nkoss@bailey.com', 1, '2022-06-12 00:29:50', NULL, NULL),
(406, 'Gunnar', 'Larkin', 'yost.maximillia@gmail.com', 0, '2022-06-12 00:29:50', NULL, NULL),
(407, 'Florine', 'Gaylord', 'rdach@douglas.info', 0, '2022-06-12 00:29:50', NULL, NULL),
(408, 'Andre', 'Stracke', 'mallie79@yahoo.com', 0, '2022-06-12 00:29:50', NULL, NULL),
(409, 'Johnnie', 'Becker', 'maggio.maybelle@mosciski.com', 0, '2022-06-12 00:29:50', NULL, NULL),
(410, 'Kyla', 'Kessler', 'vito52@gmail.com', 0, '2022-06-12 00:29:50', NULL, NULL),
(411, 'qqq', 'qqqq', 'qqq@gmail.com', 1, NULL, NULL, NULL),
(412, 'qqq', 'qqqq', 'qqq1@gmail.com', 1, NULL, NULL, NULL),
(413, 'qq1', 'qq1', 'qq111@gmail.com', 1, NULL, NULL, NULL),
(414, 'qq22', 'qq22', 'qq222@gmail.com', 1, NULL, NULL, NULL),
(415, 'qq44', 'qq44', 'qq44@gmail.com', 1, NULL, NULL, NULL),
(416, 'qq445', 'qq445', 'qq445@gmail.com', 1, NULL, NULL, NULL),
(417, 'ASA11', 'Al-Mamun11', 'asamamun.web11@gmail.com', 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=418;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
