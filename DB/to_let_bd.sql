-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 04:25 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `to_let_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `bed_space`
--

CREATE TABLE `bed_space` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `rent` int(10) NOT NULL,
  `location` varchar(30) NOT NULL,
  `dimention` varchar(10) NOT NULL,
  `pillows` int(2) NOT NULL,
  `bed_sheet` varchar(15) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `image_1` varchar(100) NOT NULL,
  `image_2` varchar(100) NOT NULL,
  `image_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bed_space`
--

INSERT INTO `bed_space` (`id`, `title`, `rent`, `location`, `dimention`, `pillows`, `bed_sheet`, `phone`, `email`, `image_1`, `image_2`, `image_3`) VALUES
(3, 'Single Bed', 5000, 'Motijheel, Dhaka', '5*2', 1, 'Not Available', '01234567890', 'asd@gmail.com', 'images/bed_spaces/1701466065-1.jpg', 'images/bed_spaces/1701466065-2.jpg', 'images/bed_spaces/1701466065-3.jpg'),
(4, 'Double Bed', 8000, 'Uttara', '7*6', 3, 'Available', '01234567891', 'qwe@gmail.com', 'images/bed_spaces/1701466306-1.jpg', 'images/bed_spaces/1701466306-2.jpg', 'images/bed_spaces/1701466306-3.jpg'),
(5, 'Kid\'s Bed', 3000, 'Mirpur', '4*2', 1, 'Available', '01234567892', 'zxc@gmail.com', 'images/bed_spaces/1701466475-1.jpg', 'images/bed_spaces/1701466475-2.jpg', 'images/bed_spaces/1701466475-3.jpg'),
(6, 'Double Decker Bed', 1000, 'Dhanmondi', '6*3', 2, 'Not Available', '01234567894', 'rty@gmail.com', 'images/bed_spaces/1701467212-1.jpg', 'images/bed_spaces/1701467212-2.jpg', 'images/bed_spaces/1701467212-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `flat`
--

CREATE TABLE `flat` (
  `id` int(11) NOT NULL,
  `location` varchar(30) NOT NULL,
  `rent` int(10) NOT NULL,
  `washroom` int(2) NOT NULL,
  `bed` int(2) NOT NULL,
  `dimention` varchar(10) NOT NULL,
  `room` int(2) NOT NULL,
  `ac` int(2) NOT NULL,
  `electricity` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `image_1` varchar(100) NOT NULL,
  `image_2` varchar(100) NOT NULL,
  `image_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flat`
--

INSERT INTO `flat` (`id`, `location`, `rent`, `washroom`, `bed`, `dimention`, `room`, `ac`, `electricity`, `phone`, `email`, `image_1`, `image_2`, `image_3`) VALUES
(1, 'Kamalapur', 15000, 2, 2, '20*15', 5, 1, 'Available', '01234567890', 'plm@gmail.com', 'images/flats/1701485957-1.jpg', 'images/flats/1701485957-2.jpg', 'images/flats/1701485957-3.jpg'),
(2, 'North Badda', 20000, 3, 3, '30*20', 6, 2, 'Available', '01234567891', 'ijn@gmail.com', 'images/flats/1701486079-1.jpg', 'images/flats/1701486079-2.jpg', 'images/flats/1701486079-3.jpg'),
(3, 'Banani', 35000, 2, 2, '20*15', 4, 0, 'Available', '01234567892', 'yhb@gmail.com', 'images/flats/1701486206-1.jpg', 'images/flats/1701486206-2.jpg', 'images/flats/1701486206-3.jpg'),
(4, 'Banasri', 20000, 2, 3, '40*30', 7, 2, 'Available', '01234567893', 'lkj@gmail.com', 'images/flats/1701486318-1.jpg', 'images/flats/1701486318-2.jpg', 'images/flats/1701486318-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `location` varchar(30) NOT NULL,
  `rent` int(10) NOT NULL,
  `dimention` varchar(10) NOT NULL,
  `washroom` int(2) NOT NULL,
  `bed` int(2) NOT NULL,
  `ac` varchar(20) NOT NULL,
  `electricity` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `image_1` varchar(100) NOT NULL,
  `image_2` varchar(100) NOT NULL,
  `image_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `location`, `rent`, `dimention`, `washroom`, `bed`, `ac`, `electricity`, `phone`, `email`, `image_1`, `image_2`, `image_3`) VALUES
(1, 'Bangla Motor', 20000, '1200*1200', 1, 1, 'Not Available', 'Available', '01234567890', 'poi@gmail.com', 'images/rooms/1701483931-1.jpg', 'images/rooms/1701483931-2.jpg', 'images/rooms/1701483931-3.jpg'),
(2, 'Shahbagh', 250000, '40*20', 1, 2, 'Available', 'Not Available', '01234567891', 'uyt@gmail.com', 'images/rooms/1701484455-1.jpg', 'images/rooms/1701484455-2.jpg', 'images/rooms/1701484455-3.jpg'),
(3, 'Bashundhara RA', 50000, '15*10', 0, 1, 'Not Available', 'Available', '01234567892', 'fgh@gmail.com', 'images/rooms/1701484560-1.jpg', 'images/rooms/1701484560-2.jpg', 'images/rooms/1701484560-3.jpg'),
(4, 'Tejgaon', 9000, '12*7', 1, 1, 'Available', 'Available', '01234567893', 'bnm@gmail.com', 'images/rooms/1701484630-1.jpg', 'images/rooms/1701484630-2.jpg', 'images/rooms/1701484630-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin1', 'admin#1'),
(2, 'admin2', 'admin#2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bed_space`
--
ALTER TABLE `bed_space`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flat`
--
ALTER TABLE `flat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bed_space`
--
ALTER TABLE `bed_space`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `flat`
--
ALTER TABLE `flat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
