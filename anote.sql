-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 03:49 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anote`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `user_id`, `title`, `notes`, `created_at`, `updated_at`) VALUES
(1, 2, 'titles', 'notes', '2023-08-17 13:30:08', '2023-08-17 14:01:59'),
(3, 2, 'wawi', 'uwu', '2023-08-17 13:41:32', '2023-08-17 13:41:32'),
(4, 2, 'papasa na ba', 'wen or wen', '2023-08-17 13:41:44', '2023-08-17 13:41:44'),
(5, 2, 'g', 'go go gooooo', '2023-08-17 13:41:58', '2023-08-17 13:41:58'),
(6, 2, 'tweettweet', 'twitter', '2023-08-17 13:42:16', '2023-08-17 13:42:16'),
(7, 2, 'forda add ng subj', 'ws', '2023-08-17 13:42:29', '2023-08-17 13:42:29'),
(8, 2, 'grabe na to', 'paginate', '2023-08-17 13:42:48', '2023-08-17 13:42:48'),
(9, 2, 'diffForHumans', 'notComputer eme', '2023-08-17 13:43:04', '2023-08-17 13:43:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `type`, `created_at`, `updated_at`) VALUES
(1, 'bm', 'bm', 'bm@bm.com', 'bm', 1, '2023-08-17 12:05:22', '2023-08-17 12:05:22'),
(2, 'zii', 'zizi010', 'z@z.com', 'z', 1, '2023-08-17 12:41:27', '2023-08-17 15:53:22'),
(3, 'admin', 'admin', 'admin@admin.com', 'admin', 2, '2023-08-17 16:02:34', '2023-08-17 16:07:27'),
(4, 'name', 'name', 'name@name.com', 'name', 1, '2023-08-17 16:11:33', '2023-08-17 16:11:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
