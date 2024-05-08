-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 05:43 AM
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
-- Database: `php_crud_db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` int(5) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(1500) NOT NULL,
  `hobbies` varchar(1500) NOT NULL,
  `attendance` varchar(10) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `fname`, `lname`, `gender`, `email`, `phone`, `address`, `hobbies`, `attendance`, `date`) VALUES
(24, 'Kishor', 'Kumar', 'Male', 'kishor@gmail.com', '9878654650', 'Mumbai', 'Drawing, Dancing, Reading, Watching TV, Swimming, Cooking', '', '2024-02-22'),
(29, 'Maitri', 'Parmar', 'Female', 'maitri@yahoo.com', '9876543127', 'Pune', 'Drawing, Dancing, Reading, Watching TV, Swimming, Cooking', '', '2024-03-09'),
(30, 'Bhavesh', 'Thadeshwar', 'Male', 'bhaveh111@gmail.com', '7848557401', 'Ahmedabad', 'Dancing, Watching TV, Swimming', '', '2024-03-09'),
(33, 'Dhiren', 'Shah', 'Male', 'dhiren@gmail.com', '8895471100', 'Jamnagar', 'Drawing, Dancing, Reading, Watching TV', '', '2024-03-11'),
(37, 'Ritesh', 'Deshmukh', 'Male', 'ritesh@outlook.com', '7845221000', 'Mumbai', 'Dancing, Watching TV, Swimming', '', '2024-03-11'),
(38, 'Rakesh', 'Sethi', 'Male', 'rakesh@gmail.com', '9778455100', 'Dehradun', 'Drawing, Dancing, Watching TV', '', '2024-03-12'),
(39, 'Charmi', 'Soni', 'Female', 'charmi@yahoo.com', '9874785478', 'New Delhi', 'Drawing, Cooking', '', '2024-03-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
