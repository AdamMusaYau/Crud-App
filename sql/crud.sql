-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 01:07 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `date_entry` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `username`, `email`, `phone`, `pass`, `date_entry`) VALUES
(7, 'Adam Musa Yau', 'adamcynaira', 'adammusa89@gmail.com', '08063017470', '123456', '2020-08-11 17:45:06'),
(8, 'Sani Abudullahi', 'santos', 'saniabdullahi442@gma', '08165523242', '123456', '2020-08-11 17:47:11'),
(9, 'Yasir Murtala', 'Yasir', 'yasirmurtala@gmail.c', '08146798946', '123456', '2020-08-11 17:48:15'),
(10, 'Umar Ibrahim bmg', 'Farooq', 'umaribrahim419@gmail', '08104443848', '123456', '2020-08-11 17:49:44'),
(11, 'Abdullahi Munkaila ', 'Dilalil35', 'Dilalil35@gmail.com', '07060603247', '123456', '2020-08-11 17:55:00'),
(12, 'Sulaiman Aliyu', 'suley', 'suley@gmail.com', '07037723453', '1234565', '2020-08-11 17:55:38'),
(14, 'Aisha Muhammad', 'Ashanty Naira', 'aishaMuhammad@gmail.', '08063017470', '112233', '2020-08-18 17:18:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
