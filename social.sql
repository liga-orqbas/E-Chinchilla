-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2024 at 11:09 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `signup_date` date NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `num_posts` int(11) NOT NULL,
  `num_likes` int(11) NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `fried_array` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `signup_date`, `profile_pic`, `num_posts`, `num_likes`, `user_closed`, `fried_array`) VALUES
(1, 'Reece', 'Kenney', 'reece_kenney', 'reece@gmail.com', '1234', '2023-11-15', 'sdasda', 1, 1, 'no', ''),
(2, 'Jenny', 'Mauler', 'jenny_mauler', 'jenny123@gmail.com', 'test', '2023-11-01', 'fsfss', 0, 0, 'no', ''),
(3, 'Test', 'Test', 'test_test', 'test2@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '2023-11-23', 'assets/images/profile_pics/default/pfpdef2.jpg', 0, 0, 'no', ','),
(4, 'Test', 'Test', 'test_test_1', 'test3@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '2023-11-23', 'assets/images/profile_pics/default/pfpdef.jpg', 0, 0, 'no', ','),
(5, 'Tester', 'Tester', 'tester_tester', 'test4@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2023-11-23', 'assets/images/profile_pics/default/pfpdef2.jpg', 0, 0, 'no', ','),
(6, 'Test', 'Test', 'test_test_1_2', 'test@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '2023-11-23', 'assets/images/profile_pics/default/pfpdef.jpg', 0, 0, 'no', ',');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
