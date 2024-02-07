-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2024 at 10:11 AM
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
-- Database: `homeaid`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `appli_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `picture` text NOT NULL,
  `fullname` varchar(125) NOT NULL,
  `age` int(11) NOT NULL,
  `skills` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`appli_id`, `user_id`, `picture`, `fullname`, `age`, `skills`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'glen.jpg', 'Glen', 123, 'Passers', 1, '2023-12-01 16:58:23', '2023-12-01 16:58:23'),
(2, 14, 'default.png', 'ranido, glenr', 23, 'Tig hugas, tig kuan', 1, '2023-12-18 13:10:38', '2023-12-18 13:10:38'),
(4, 32, 'default.png', 'alawin, ivan', 30, 'tabling \r\nswimming', 1, '2023-12-20 12:36:58', '2023-12-20 12:36:58'),
(6, 39, '173472113_508180986867522_5999261301032980265_n.jpg', 'casq, kevin', 20, '-cooking', 1, '2023-12-22 06:29:09', '2023-12-22 06:29:09');

-- --------------------------------------------------------

--
-- Table structure for table `applyingjobs`
--

CREATE TABLE `applyingjobs` (
  `appl_id` int(11) NOT NULL,
  `homeowner_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applyingjobs`
--

INSERT INTO `applyingjobs` (`appl_id`, `homeowner_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(61, 47, 15, 1, '2023-12-22 15:33:24', '2023-12-22 15:33:24');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `chatId` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `reciever` int(11) NOT NULL,
  `message` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`chatId`, `sender`, `reciever`, `message`, `created`) VALUES
(1, 9, 6, 'Hello world', '2023-12-21 17:32:07'),
(2, 6, 9, 'Hello shit', '2023-12-21 17:32:09'),
(3, 9, 6, 'ows', '2023-12-21 17:40:44'),
(4, 9, 6, 'qwe', '2023-12-21 17:40:47'),
(5, 2, 6, 'hmm herllo', '2023-12-21 18:02:27'),
(6, 6, 2, 'hi\r\n', '2023-12-21 18:03:36'),
(7, 47, 39, 'Hello ', '2023-12-22 15:11:47'),
(8, 47, 39, 'Hi', '2023-12-22 15:12:52'),
(9, 47, 39, 'Hello', '2023-12-22 15:12:57'),
(10, 47, 2, 'OI BOANG', '2023-12-22 15:14:19');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `commenter` varchar(125) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `commenter`, `comment`, `created_at`, `updated_at`) VALUES
(1, 2, '6', 'Hello shithead', '2023-12-01 17:08:25', '2023-12-01 17:08:25'),
(2, 2, '6', 'Hello shithead', '2023-12-01 17:08:28', '2023-12-01 17:08:28'),
(3, 2, '6', 'Hello shithead', '2023-12-01 17:08:28', '2023-12-01 17:08:28'),
(4, 2, '6', 'Hello shithead', '2023-12-01 17:08:28', '2023-12-01 17:08:28'),
(5, 2, '6', 'Hello shithead', '2023-12-01 17:08:28', '2023-12-01 17:08:28'),
(6, 2, '6', 'Hello shithead', '2023-12-01 17:08:29', '2023-12-01 17:08:29'),
(7, 2, '6', 'Hello shithead', '2023-12-01 17:08:29', '2023-12-01 17:08:29'),
(8, 2, '6', 'Hello shithead', '2023-12-01 17:08:29', '2023-12-01 17:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `hireds`
--

CREATE TABLE `hireds` (
  `hired_id` int(11) NOT NULL,
  `homeowner_id` int(11) NOT NULL,
  `hired_user_id` int(11) NOT NULL,
  `jobTitle` text NOT NULL,
  `requirements` text NOT NULL,
  `date_interview` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hireds`
--

INSERT INTO `hireds` (`hired_id`, `homeowner_id`, `hired_user_id`, `jobTitle`, `requirements`, `date_interview`, `status`, `created_at`) VALUES
(11, 6, 14, '', 'Pagdala lang pagkaon nig ari nimo mga boanga mo!', '', 2, '2023-12-18 13:17:17'),
(12, 6, 2, '', '', '', 1, '2023-12-19 13:14:04'),
(13, 6, 10, '', '', '', 1, '2023-12-19 13:14:21'),
(14, 10, 2, '', '', '', 1, '2023-12-19 13:14:31'),
(15, 6, 2, '', '', '', 1, '2023-12-19 13:57:09'),
(16, 31, 14, '', '12x14 pic \r\ntor\r\ncod\r\n50k \r\n', '', 2, '2023-12-20 12:31:02'),
(17, 31, 32, '', 'imo nya utang ha ', '', 2, '2023-12-20 12:46:17'),
(18, 31, 32, '', '', '', 2, '2023-12-20 12:51:04'),
(19, 31, 32, '', '', '', 2, '2023-12-20 12:51:13'),
(20, 31, 32, '', '', '', 2, '2023-12-20 12:52:31'),
(21, 31, 14, '', '', '', 1, '2023-12-20 13:06:40'),
(22, 31, 14, '', '', '', 1, '2023-12-20 13:11:56'),
(23, 31, 14, '', '', '', 1, '2023-12-20 13:12:00'),
(24, 31, 2, '', '', '', 1, '2023-12-20 13:16:55'),
(25, 36, 2, '', '', '', 1, '2023-12-22 01:30:55'),
(26, 1, 2, '', 'resume', '', 2, '2023-12-22 06:21:32'),
(27, 39, 39, '', 'resume', '', 2, '2023-12-22 06:29:43'),
(28, 46, 39, '', '', '', 1, '2023-12-22 06:50:32'),
(29, 46, 2, '', '', '', 1, '2023-12-22 07:18:25'),
(33, 33, 39, 'Tig hugas plato', '', '', 1, '2024-02-06 10:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_title` varchar(125) NOT NULL,
  `job_cat` varchar(125) NOT NULL,
  `job_descrip` text NOT NULL,
  `job_types` varchar(125) NOT NULL,
  `exdate` text NOT NULL,
  `job_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `location` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `user_id`, `job_title`, `job_cat`, `job_descrip`, `job_types`, `exdate`, `job_status`, `created_at`, `updated_at`, `location`) VALUES
(2, 6, 'Babysetter', 'Baby Setter', 'Tig bantayg bata malamang', 'Full Time', '', 1, '2023-11-26 07:36:03', '2023-11-26 07:36:03', ''),
(7, 6, 'Cleaner', 'Cleaner', 'I need a cleaner.', 'Part Time', '', 1, '2023-12-15 13:19:42', '2023-12-15 13:19:42', ''),
(8, 6, 'I need a gardener.', 'Gardener', 'I need someone to gardener.', 'Full Time', '', 1, '2023-12-15 13:19:42', '2023-12-15 13:19:42', ''),
(9, 6, 'Ambot', 'Breeder', 'This item is for breeding.', 'Part Time', '', 1, '2023-12-15 16:23:27', '2023-12-15 16:23:27', ''),
(10, 29, 'bataybata', '', '-30k', 'Full Time', '', 1, '2023-12-16 03:51:35', '2023-12-16 03:51:35', ''),
(11, 6, 'Cleaner', 'Cleaning my room', 'This is to clean a room.', 'Part Time', '', 1, '2023-12-17 13:35:31', '2023-12-17 13:35:31', ''),
(12, 31, 'title', 'baby ko', 'cordova\r\n1M', 'Part Time', '', 1, '2023-12-20 12:33:50', '2023-12-20 12:33:50', ''),
(13, 33, 'baby sister', '', '30k\r\ncordova', 'Full Time', '', 1, '2023-12-20 13:20:43', '2023-12-20 13:20:43', ''),
(14, 39, 'cooking', '', '50k', 'Part Time', '', 1, '2023-12-22 06:31:00', '2023-12-22 06:31:00', ''),
(15, 46, 'baby', '', '50k', 'Part Time', '', 1, '2023-12-22 06:54:58', '2023-12-22 06:54:58', ''),
(16, 47, 'hi', 'hello', 'Hi hello', 'Full Time', '', 1, '2023-12-22 15:15:32', '2023-12-22 15:15:32', ''),
(17, 47, 'Hello', 'world', 'Hhehehe', 'Full Time', '', 1, '2023-12-22 15:58:44', '2023-12-22 15:58:44', ''),
(18, 47, '123', '123', '123', 'Part Time', '', 1, '2023-12-22 16:03:11', '2023-12-22 16:03:11', '31'),
(19, 47, 'tig hugas', 'hugas', 'Tig hugas sa kabaw', 'Part Time', '', 1, '2023-12-22 16:03:37', '2023-12-22 16:03:37', 'cordova'),
(20, 33, 'qwe', 'qwe', 'qwe', 'Part Time', '2024-02-09', 1, '2024-02-06 07:53:16', '2024-02-06 07:53:16', 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `recommendations`
--

CREATE TABLE `recommendations` (
  `recom_id` int(11) NOT NULL,
  `recommender_id` int(11) NOT NULL,
  `user_Id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reported_id` int(11) NOT NULL,
  `reason` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `user_id`, `reported_id`, `reason`, `created_at`) VALUES
(8, 31, 14, 'way picture', '2023-12-20 12:39:47');

-- --------------------------------------------------------

--
-- Table structure for table `requirement`
--

CREATE TABLE `requirement` (
  `requirement` int(11) NOT NULL,
  `apl_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requirement`
--

INSERT INTO `requirement` (`requirement`, `apl_id`, `user_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 42, 14, '', '2023-12-18 12:30:04', '2023-12-18 12:30:04'),
(2, 42, 14, 'Hello world', '2023-12-18 12:30:59', '2023-12-18 12:30:59'),
(3, 42, 14, 'Hello world', '2023-12-18 12:31:57', '2023-12-18 12:31:57'),
(4, 0, 14, 'Hii', '2023-12-18 13:18:28', '2023-12-18 13:18:28'),
(5, 6, 14, 'hello', '2023-12-18 13:19:12', '2023-12-18 13:19:12'),
(6, 42, 14, 'Pwede naka mo ari do, pagdala lang ug kaning bio data', '2023-12-19 12:37:24', '2023-12-19 12:37:24'),
(7, 42, 14, 'pwede nag ari boang', '2023-12-19 12:38:36', '2023-12-19 12:38:36');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `skills_types` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(125) NOT NULL,
  `lastname` varchar(125) NOT NULL,
  `username` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `rating` int(11) NOT NULL,
  `no_of_rating` int(11) NOT NULL,
  `picture` text NOT NULL DEFAULT 'default.png',
  `valid_id` text NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `username`, `email`, `password`, `rating`, `no_of_rating`, `picture`, `valid_id`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'george', 'alfeser', 'shiro', 'c', '202cb962ac59075b964b07152d234b70', 0, 0, 'default.png', '', 3, 1, '2023-11-25 08:02:44', '2023-11-25 08:02:44'),
(2, '123', '123', 'jd123', 'jd@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 0, 'bedroom set of 4.jpg', '', 1, 1, '2023-11-26 09:16:34', '2023-11-26 09:16:34'),
(6, 'Owner', 'Home', 'hom', 'homeowner@homeowner', '202cb962ac59075b964b07152d234b70', 0, 0, '173472113_508180986867522_5999261301032980265_n.jpg', '173472113_508180986867522_5999261301032980265_n.jpg', 1, 2, '2023-11-25 09:11:53', '2023-11-25 09:11:53'),
(10, '123', '123', '123', '123@12', '202cb962ac59075b964b07152d234b70', 0, 0, 'default.png', 'activity.PNG', 1, 1, '2023-11-26 09:26:57', '2023-11-26 09:26:57'),
(33, 'glen', 'ranido', 'glenranido', 'glenranido@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 0, '173472113_508180986867522_5999261301032980265_n.jpg', '22.jpg', 2, 2, '2023-12-20 13:18:49', '2023-12-20 13:18:49'),
(34, 'glen ', 'cute', 'glen', 'glen@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 0, 'default.png', '', 1, 1, '2023-12-20 13:21:36', '2023-12-20 13:21:36'),
(36, 'homShiro', 'oi', 'homshiro12', 'homshiro@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 0, 'CALENDAR.PNG', 'carr.jpg', 2, 0, '2023-12-22 01:21:34', '2023-12-22 01:21:34'),
(37, 'glen', 'ranido', 'glen123', 'glenranido@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 0, '173472113_508180986867522_5999261301032980265_n.jpg', '23.PNG', 2, 1, '2023-12-22 06:20:14', '2023-12-22 06:20:14'),
(38, 'mero', 'abano', 'jelmero123', 'jelmero@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 0, '173472113_508180986867522_5999261301032980265_n.jpg', '', 1, 0, '2023-12-22 06:24:38', '2023-12-22 06:24:38'),
(39, 'kevin', 'casq', 'kevin123', 'kevin@gmail.com', '202cb962ac59075b964b07152d234b70', 11, 3, '173472113_508180986867522_5999261301032980265_n.jpg', 'first come first serve.PNG', 1, 1, '2023-12-22 06:27:57', '2023-12-22 06:27:57'),
(40, 'johua', 'blase', 'blase', 'blase@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 0, 'n.jpg', '3.jpg', 2, 1, '2023-12-22 06:35:12', '2023-12-22 06:35:12'),
(41, 'glen', 'ranido', 'meo', 'meo@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 0, 'default.png', '', 1, 0, '2023-12-22 06:36:04', '2023-12-22 06:36:04'),
(42, 'quitay', 'cute', 'cute', 'cute@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 0, 'kjhg.jpg', 'n.jpg', 2, 1, '2023-12-22 06:38:03', '2023-12-22 06:38:03'),
(43, 'shinra', 'tense', 'tense', 'tense@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 0, 'logo.png', '173472113_508180986867522_5999261301032980265_n.jpg', 2, 1, '2023-12-22 06:43:02', '2023-12-22 06:43:02'),
(44, 'meor', 'last', 'chan', 'chan@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 0, '173472113_508180986867522_5999261301032980265_n.jpg', '', 1, 0, '2023-12-22 06:44:11', '2023-12-22 06:44:11'),
(45, 'glen', 'ranido', 'bat', 'bat@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 0, '311202075_1109981239642694_4928069177595602249_n.jpg', '', 1, 0, '2023-12-22 06:48:52', '2023-12-22 06:48:52'),
(46, 'Shiro', 'Inoc', 'qwe', 'qwe', '202cb962ac59075b964b07152d234b70', 0, 0, '406810112_302821768801035_3765542810081729389_n.jpg', 'asd.jpg', 1, 1, '2023-12-22 06:49:45', '2023-12-22 06:49:45'),
(47, 'Shiro', 'geo', 'shiroi', 'shir@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 0, '406810112_302821768801035_3765542810081729389_n.jpg', 'Untitled video.mp4', 2, 1, '2023-12-22 14:59:52', '2023-12-22 14:59:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`appli_id`);

--
-- Indexes for table `applyingjobs`
--
ALTER TABLE `applyingjobs`
  ADD PRIMARY KEY (`appl_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`chatId`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `hireds`
--
ALTER TABLE `hireds`
  ADD PRIMARY KEY (`hired_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `recommendations`
--
ALTER TABLE `recommendations`
  ADD PRIMARY KEY (`recom_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `requirement`
--
ALTER TABLE `requirement`
  ADD PRIMARY KEY (`requirement`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `appli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `applyingjobs`
--
ALTER TABLE `applyingjobs`
  MODIFY `appl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `chatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hireds`
--
ALTER TABLE `hireds`
  MODIFY `hired_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `recommendations`
--
ALTER TABLE `recommendations`
  MODIFY `recom_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `requirement`
--
ALTER TABLE `requirement`
  MODIFY `requirement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
