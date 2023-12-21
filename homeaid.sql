-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 01:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`appli_id`, `user_id`, `picture`, `fullname`, `age`, `skills`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'glen.jpg', 'Glen', 123, 'Passers', 1, '2023-12-01 16:58:23', '2023-12-01 16:58:23'),
(2, 14, 'default.png', 'ranido, glenr', 23, 'Tig hugas, tig kuan', 1, '2023-12-18 13:10:38', '2023-12-18 13:10:38'),
(4, 32, 'default.png', 'alawin, ivan', 30, 'tabling \r\nswimming', 1, '2023-12-20 12:36:58', '2023-12-20 12:36:58');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applyingjobs`
--

INSERT INTO `applyingjobs` (`appl_id`, `homeowner_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(42, 6, 14, 1, '2023-12-18 11:34:03', '2023-12-18 11:34:03'),
(43, 12, 32, 2, '2023-12-20 12:42:28', '2023-12-20 12:42:28'),
(44, 8, 9, 2, '2023-12-20 12:53:17', '2023-12-20 12:53:17'),
(45, 31, 9, 2, '2023-12-20 12:53:33', '2023-12-20 12:53:33'),
(46, 7, 32, 2, '2023-12-20 13:07:20', '2023-12-20 13:07:20'),
(47, 8, 32, 2, '2023-12-20 13:07:48', '2023-12-20 13:07:48'),
(48, 2, 32, 2, '2023-12-20 13:08:17', '2023-12-20 13:08:17');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `requirements` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hireds`
--

INSERT INTO `hireds` (`hired_id`, `homeowner_id`, `hired_user_id`, `requirements`, `status`, `created_at`) VALUES
(11, 6, 14, 'Pagdala lang pagkaon nig ari nimo mga boanga mo!', 2, '2023-12-18 13:17:17'),
(12, 6, 2, '', 1, '2023-12-19 13:14:04'),
(13, 6, 14, '', 1, '2023-12-19 13:14:21'),
(14, 6, 2, '', 1, '2023-12-19 13:14:31'),
(15, 6, 2, '', 1, '2023-12-19 13:57:09'),
(16, 31, 14, '12x14 pic \r\ntor\r\ncod\r\n50k \r\n', 2, '2023-12-20 12:31:02'),
(17, 31, 32, 'imo nya utang ha ', 2, '2023-12-20 12:46:17'),
(18, 31, 32, '', 2, '2023-12-20 12:51:04'),
(19, 31, 32, '', 2, '2023-12-20 12:51:13'),
(20, 31, 32, '', 2, '2023-12-20 12:52:31'),
(21, 31, 14, '', 1, '2023-12-20 13:06:40'),
(22, 31, 14, '', 1, '2023-12-20 13:11:56'),
(23, 31, 14, '', 1, '2023-12-20 13:12:00'),
(24, 31, 2, '', 1, '2023-12-20 13:16:55');

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
  `job_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `user_id`, `job_title`, `job_cat`, `job_descrip`, `job_types`, `job_status`, `created_at`, `updated_at`) VALUES
(2, 6, 'Babysetter', 'Baby Setter', 'Tig bantayg bata malamang', 'Full Time', 1, '2023-11-26 07:36:03', '2023-11-26 07:36:03'),
(7, 6, 'Cleaner', 'Cleaner', 'I need a cleaner.', 'Part Time', 1, '2023-12-15 13:19:42', '2023-12-15 13:19:42'),
(8, 6, 'I need a gardener.', 'Gardener', 'I need someone to gardener.', 'Full Time', 1, '2023-12-15 13:19:42', '2023-12-15 13:19:42'),
(9, 6, 'Ambot', 'Breeder', 'This item is for breeding.', 'Part Time', 1, '2023-12-15 16:23:27', '2023-12-15 16:23:27'),
(10, 29, 'bataybata', '', '-30k', 'Full Time', 1, '2023-12-16 03:51:35', '2023-12-16 03:51:35'),
(11, 6, 'Cleaner', 'Cleaning my room', 'This is to clean a room.', 'Part Time', 1, '2023-12-17 13:35:31', '2023-12-17 13:35:31'),
(12, 31, 'title', 'baby ko', 'cordova\r\n1M', 'Part Time', 1, '2023-12-20 12:33:50', '2023-12-20 12:33:50'),
(13, 33, 'baby sister', '', '30k\r\ncordova', 'Full Time', 1, '2023-12-20 13:20:43', '2023-12-20 13:20:43');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `picture` text NOT NULL DEFAULT 'default.png',
  `valid_id` text NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `username`, `email`, `password`, `picture`, `valid_id`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'george', 'alfeser', 'shiro', '123@123', '202cb962ac59075b964b07152d234b70', 'default.png', '', 3, 1, '2023-11-25 08:02:44', '2023-11-25 08:02:44'),
(2, 'jd', 'germo', 'jd123', 'jd@gmail.com', '202cb962ac59075b964b07152d234b70', 'default.png', '', 1, 1, '2023-11-26 09:16:34', '2023-11-26 09:16:34'),
(6, 'homeowner', 'homeowner', 'hom', 'homeowner@homeowner', '202cb962ac59075b964b07152d234b70', 'default.png', '173472113_508180986867522_5999261301032980265_n.jpg', 2, 0, '2023-11-25 09:11:53', '2023-11-25 09:11:53'),
(7, 'jd', 'germo', 'jd123', 'jd@gmail.com', '202cb962ac59075b964b07152d234b70', 'default.png', '', 2, 1, '2023-11-26 09:16:43', '2023-11-26 09:16:43'),
(9, 'jd', 'germo', 'jd123', 'jd@gmail.com', '202cb962ac59075b964b07152d234b70', 'default.png', '', 1, 1, '2023-11-26 09:17:27', '2023-11-26 09:17:27'),
(10, '123', '123', '123', '123@12', '202cb962ac59075b964b07152d234b70', 'default.png', 'activity.PNG', 1, 1, '2023-11-26 09:26:57', '2023-11-26 09:26:57'),
(11, '123', '123', '123', '123@12', '202cb962ac59075b964b07152d234b70', 'default.png', '', 1, 1, '2023-11-26 09:28:31', '2023-11-26 09:28:31'),
(12, '123', '123', '123', '123@12', '202cb962ac59075b964b07152d234b70', 'default.png', '', 1, 1, '2023-11-26 09:28:44', '2023-11-26 09:28:44'),
(14, 'glenr', 'ranido', '123', 'glenranido@gmail.com', '202cb962ac59075b964b07152d234b70', 'default.png', '', 1, 1, '2023-11-27 08:44:22', '2023-11-27 08:44:22'),
(15, 'kevin ', 'abano', 'kevin123', 'kiven@gmail.com', '202cb962ac59075b964b07152d234b70', 'default.png', '', 1, 1, '2023-12-11 23:49:46', '2023-12-11 23:49:46'),
(16, 'glen', 'ranido', 'ranido12', 'ranidoglen@gmail.com', '202cb962ac59075b964b07152d234b70', '23.PNG', 'logo.png', 1, 1, '2023-12-11 23:54:37', '2023-12-11 23:54:37'),
(17, 'mero', 'ranido', 'mero', 'mero@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', '173472113_508180986867522_5999261301032980265_n.jpg', '173472113_508180986867522_5999261301032980265_n.jpg', 1, 1, '2023-12-11 23:56:04', '2023-12-11 23:56:04'),
(18, 'kevin', 'mero', 'mero123', 'mero@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', 'default.png', '', 1, 1, '2023-12-12 00:02:16', '2023-12-12 00:02:16'),
(19, 'asd', 'asd', 'asd', 'asd', '7815696ecbf1c96e6894b779456d330e', 'default.png', '', 1, 1, '2023-12-14 07:25:21', '2023-12-14 07:25:21'),
(20, '1234', '1234', '1234', '1234@123', '81dc9bdb52d04dc20036dbd8313ed055', '311202075_1109981239642694_4928069177595602249_n.jpg', 'n.jpg', 1, 3, '2023-12-14 14:18:31', '2023-12-14 14:18:31'),
(21, '123', '123', '12345', '123@12345', '827ccb0eea8a706c4c34a16891f84e7b', '173472113_508180986867522_5999261301032980265_n.jpg', '173472113_508180986867522_5999261301032980265_n.jpg', 1, 3, '2023-12-14 14:20:43', '2023-12-14 14:20:43'),
(22, 'Shiro', 'Geo', 'shiroGeo', 'shiroGeo@gmail.com', '4297f44b13955235245b2497399d7a93', '173472113_508180986867522_5999261301032980265_n.jpg', '173472113_508180986867522_5999261301032980265_n.jpg', 1, 3, '2023-12-14 15:29:13', '2023-12-14 15:29:13'),
(23, 'homeowner', 'homeowner', 'home', 'home', '4297f44b13955235245b2497399d7a93', '173472113_508180986867522_5999261301032980265_n.jpg', '173472113_508180986867522_5999261301032980265_n.jpg', 2, 2, '2023-12-14 15:33:50', '2023-12-14 15:33:50'),
(24, '12312', '123123', '123123', '123123', '4297f44b13955235245b2497399d7a93', '173472113_508180986867522_5999261301032980265_n.jpg', '173472113_508180986867522_5999261301032980265_n.jpg', 2, 1, '2023-12-14 15:34:25', '2023-12-14 15:34:25'),
(25, 'jimero', 'abano', 'merochan', 'merochan@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', '311202075_1109981239642694_4928069177595602249_n.jpg', 'carr.jpg', 2, 1, '2023-12-15 00:46:12', '2023-12-15 00:46:12'),
(26, 'glen', 'ranido', 'glenranido', 'glen@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', 'default.png', '', 1, 1, '2023-12-15 01:02:31', '2023-12-15 01:02:31'),
(27, 'Glen', 'Ranido', 'glenranido', 'ranido@gmail.com', '202cb962ac59075b964b07152d234b70', 'default.png', '', 1, 1, '2023-12-15 12:50:57', '2023-12-15 12:50:57'),
(28, '123', '123', '1234', '1234@1234', '81dc9bdb52d04dc20036dbd8313ed055', '173472113_508180986867522_5999261301032980265_n.jpg', 'image-removebg-preview.png', 2, 1, '2023-12-15 15:23:08', '2023-12-15 15:23:08'),
(29, 'kiven', 'abano', 'kiven', 'kiven@gmail.com', '202cb962ac59075b964b07152d234b70', '173472113_508180986867522_5999261301032980265_n.jpg', '23.PNG', 2, 1, '2023-12-16 03:50:31', '2023-12-16 03:50:31'),
(30, 'glen', 'ranido', 'glen', 'glen@gmail.com', '202cb962ac59075b964b07152d234b70', 'default.png', '', 1, 1, '2023-12-16 03:52:22', '2023-12-16 03:52:22'),
(31, 'cute', 'GLEN', 'cuteglen', 'glen@gmail.com', '202cb962ac59075b964b07152d234b70', '1234.jpg', 'n.jpg', 2, 1, '2023-12-20 12:30:15', '2023-12-20 12:30:15'),
(32, 'ivan', 'alawin', 'alawin123', 'alawin@gmail.com', '202cb962ac59075b964b07152d234b70', 'default.png', '', 1, 0, '2023-12-20 12:34:50', '2023-12-20 12:34:50'),
(33, 'glen', 'ranido', 'glenranido', 'glenranido@gmail.com', '202cb962ac59075b964b07152d234b70', '173472113_508180986867522_5999261301032980265_n.jpg', '22.jpg', 2, 1, '2023-12-20 13:18:49', '2023-12-20 13:18:49'),
(34, 'glen ', 'cute', 'glen', 'glen@gmail.com', '202cb962ac59075b964b07152d234b70', 'default.png', '', 1, 1, '2023-12-20 13:21:36', '2023-12-20 13:21:36');

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
  MODIFY `appli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `applyingjobs`
--
ALTER TABLE `applyingjobs`
  MODIFY `appl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hireds`
--
ALTER TABLE `hireds`
  MODIFY `hired_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
