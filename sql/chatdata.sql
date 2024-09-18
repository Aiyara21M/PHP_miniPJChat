-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 03:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatroom`
--

CREATE TABLE `chatroom` (
  `room_id` int(50) NOT NULL,
  `userroom_id` int(50) NOT NULL,
  `userroom_id2` int(50) NOT NULL,
  `name_room` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `chatroom`
--

INSERT INTO `chatroom` (`room_id`, `userroom_id`, `userroom_id2`, `name_room`) VALUES
(6, 3, 1, ''),
(7, 2, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `txtchat`
--

CREATE TABLE `txtchat` (
  `room_id` int(11) NOT NULL,
  `user_txt` int(11) NOT NULL,
  `text_chat` text NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `txtchat`
--

INSERT INTO `txtchat` (`room_id`, `user_txt`, `text_chat`, `time`) VALUES
(5, 1, 'hi', '17-01-2024 20:01'),
(7, 1, 'hi', '17-01-2024 21:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `Nickname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `Nickname`) VALUES
(1, 'admin1', '1234', 'admin1'),
(2, 'admin2', '1234', 'admin2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatroom`
--
ALTER TABLE `chatroom`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatroom`
--
ALTER TABLE `chatroom`
  MODIFY `room_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
