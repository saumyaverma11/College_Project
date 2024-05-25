-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2024 at 09:35 AM
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
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Name` text NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Review` text NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`Name`, `Email`, `Mobile`, `Address`, `Review`, `Date`) VALUES
('a', 'a', 'a', 'aa', 'a', '2024-05-09 13:12:49'),
('Saumy aVerma', 'dddwqewe@gmail.com', '', 'sjahjahanpor', '', '2024-05-09 13:18:52'),
('Saumy aVerma', 'dddwqewe@gmail.com', '', 'sjahjahanpor', '', '2024-05-09 13:19:58'),
('hbjfsf', 'dhsisnas@gmail.com', '373717711', 'sdyduafguf', '                jhjadbhbfhbfhfbhs', '2024-05-09 13:20:38'),
('saunjhhcd', 'cxc', 'xcx', 'cvxxvx', '                cdvd', '2024-05-11 13:22:28');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sno` int(11) NOT NULL,
  `first name` text NOT NULL,
  `last name` text NOT NULL,
  `student id` varchar(20) NOT NULL,
  `rollno` varchar(12) NOT NULL,
  `dob` date NOT NULL DEFAULT current_timestamp(),
  `address` varchar(50) NOT NULL,
  `coursename` text NOT NULL,
  `courseid` varchar(10) NOT NULL,
  `enrollno` int(8) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sno`, `first name`, `last name`, `student id`, `rollno`, `dob`, `address`, `coursename`, `courseid`, `enrollno`, `mobileno`, `email`, `password`, `gender`) VALUES
(1, 'saumya ', 'verma', 'Saumya Verma', '220035060016', '2005-05-11', 'moh. Khera , Jalalabad , Shahjahanpur', 'BCA', 'BCA-101', 22006939, '8924814812', 'saumyaverma@gmail.com', 'saumya19', 'Female'),
(2, 'Gauri', 'Singh', 'Gauri Singh', '0', '2003-10-28', 'Moh . Brahma , Bamroli , Jamunia', 'BCA', 'BCA-101', 22006940, '8733994267', 'gaurisingh282003@gmail.com', 'gauri28', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(23) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `password`, `dt`) VALUES
(1, 'Dhruv Gupta', 'Ddhruv@2003', '2024-04-26 21:24:24'),
(6, 'Saumya Verm', 'vermasaumya', '2024-05-11 13:26:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `enrollno` (`enrollno`),
  ADD KEY `student id` (`student id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
