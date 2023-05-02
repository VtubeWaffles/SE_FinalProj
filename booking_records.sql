-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 08:50 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_records`
--

CREATE TABLE `booking_records` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `contact_num` int(11) NOT NULL,
  `package` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_records`
--

INSERT INTO `booking_records` (`id`, `name`, `email`, `venue`, `contact_num`, `package`, `payment`, `date`) VALUES
(2, 'asd', 'asd@gmail.com', 'asd', 0, 'das', 'visa', '2023-04-04'),
(3, 'nilou', 'wilerwin.quitayen@gmail.com', 'asdsad', 0, 'asdsad', 'visa', '2023-04-11'),
(4, 'nilou', 'wilerwin.quitayen@gmail.com', 'asdsad', 0, 'asdasd', 'visa', '2023-04-06'),
(5, 'nilou', 'wilerwin.quitayen@gmail.com', 'asd', 0, 'das', 'visa', '2023-03-28'),
(6, 'nilou', 'wilerwin.quitayen@gmail.com', 'asd', 0, 'das', 'mastercard', '2023-04-11'),
(7, 'nilou', 'wilerwin.quitayen@gmail.com', 'asd', 0, 'das', 'mastercard', '2023-04-11'),
(8, 'nilou', 'wilerwin.quitayen@gmail.com', 'asdsad', 0, 'asdasd', 'mastercard', '2023-04-07'),
(9, 'nilou', 'wilerwin.quitayen@gmail.com', 'asdsad', 0, 'asdasd', 'mastercard', '2023-04-07'),
(10, 'd', 'd@gmail.com', 'd', 1, '1', 'mastercard', '2023-03-27'),
(11, 'nilou', 'asd@gmail.com', 'a', 1, '1', 'visa', '2023-04-10'),
(12, 'd', 'd@gmail.com', 'asdf', 1, 'asdf', 'visa', '2023-03-28'),
(13, 'x', 'x@gmail.com', 'x', 0, 'x', 'visa', '0000-00-00'),
(14, 'x', 'x@gmail.com', 'x', 0, 'x', 'visa', '0000-00-00'),
(15, 'z', 'z@gmail.com', 'z', 0, 'z', 'visa', '0000-00-00'),
(16, 'q', 'q@gmail.com', 'q', 0, 'q', 'visa', '0000-00-00'),
(17, 'm', 'm@gmail.com', 'm', 1, 'm', 'visa', '2023-04-25'),
(18, 'm', 'm@gmail.com', 'm', 2, 'm', 'visa', '2023-04-12'),
(19, 'nilou', 'wilerwin.quitayen@gmail.com', 'asd', 0, 'das', 'visa', '2023-05-04'),
(20, 'nilou', 'wilerwin.quitayen@gmail.com', 'asd', 0, 'das', 'visa', '2023-05-04'),
(21, 'nilou', 'wilerwin.quitayen@gmail.com', 'asd', 0, 'das', 'visa', '2023-05-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_records`
--
ALTER TABLE `booking_records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_records`
--
ALTER TABLE `booking_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
