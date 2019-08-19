-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2019 at 06:23 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team02nov2018_digitalnomad`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `no_of_people` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `name`, `Email`, `no_of_people`) VALUES
(1, 'asdas', 'abc@yahoo.com', 0),
(2, 'asd', 'abc@yahoo.com', 1),
(3, 'vipuldeep@gmail.com', 'vipuldeep@gmail.com', 2),
(4, 'vipuldeep@gmail.com', 'vipuldeep@gmail.com', 2),
(5, 'vipuldeep@gmail.com', 'vipuldeep@gmail.com', 2),
(6, 'vipuldeep@gmail.com', 'vipuldeep@gmail.com', 2),
(7, 'rohan', 'r@ymail.com', 145),
(8, 'vipuld@gmail.com', 'vipuld@gmail.com', 23);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `comment`) VALUES
(1, 'Vipuldeep Singh', 'vipuldeep95@gmail.com', 'iuheriiru'),
(2, 'Vipuldeep Singh', 'vipuldeep95@gmail.com', 'jhfvljhb'),
(3, 'saivishal', 'saivishalnaburi@gmail.com', 'This is just for testing.'),
(4, 'Vipuldeep Singh', 'vipuldeep95@gmail.com', 'Testing for the message.'),
(5, 'Vipuldeep Singh', 'vipuldeep95@gmail.com', ''),
(6, 'Vipuldeep Singh', 'vipuldeep95@gmail.com', ''),
(7, 'Vipuldeep Singh', 'vipuldeep95@gmail.com', ''),
(8, 'lenroy', 'len@gmail.com', 'no'),
(9, 'Vipuldeep Singh', 'vipuldeep95@gmail.com', 'jhfvljhb'),
(10, 'Vipuldeep Singh Gulati', 'vipuldeep95@gmail.com', 'hi! again.'),
(11, 'Vipuldeep Singh Gulati', 'vipuldeep95@gmail.com', 'yo'),
(12, 'vishal', 'abcde@gmail.com', 'no.'),
(13, 'vishal', 'abcde@gmail.com', 'no.'),
(14, 'Vipuldeep Singh Gulati', 'vipuldeep@gmail.com', 'yes.'),
(15, 'Vipuldeep Singh Gulati', 'vipuldeep@gmail.com', 'yes.'),
(16, 'Vipuldeep Singh Gulati', 'vipuldeep@gmail.com', 'yes.'),
(17, 'Vipuldeep Singh Gulati', 'vipuldeep@gmail.com', 'yes.'),
(18, 'Vipuldeep Singh Gulati', 'vipuldeep@gmail.com', 'test'),
(19, 'Vipuldeep Singh Gulati', 'vipuldeep@gmail.com', 'final');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jid` int(11) NOT NULL,
  `jname` varchar(40) NOT NULL,
  `jdescription` varchar(500) NOT NULL,
  `jtype` varchar(50) NOT NULL,
  `payrate` decimal(10,0) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `postcode` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jid`, `jname`, `jdescription`, `jtype`, `payrate`, `startdate`, `enddate`, `address`, `postcode`) VALUES
(2, 'cleaner', 'cleaning rooms and the necessary house keeping', 'job', '20', '2019-01-16', '2019-01-30', 'east brisbane', '4169'),
(3, 'electrician', 'checking the functionality of electric sockets around the hotel, checking the functionality of other electric appliances as well.', 'job', '35', '2019-01-22', '2019-01-31', 'wollongabba', '4168'),
(4, 'events coordinator', 'managing the different events around the hotel', 'volunteer', '15', '2019-01-21', '2019-01-31', 'south bank', '4100'),
(5, 'computer technician', 'maintaining the computer systems in the hotel and keeping them uptodate and free from virus', 'volunteer', '25', '2019-01-21', '2019-01-31', 'brisbane cbd', '4100');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `email` varchar(50) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`email`) VALUES
('vipuldeep95@gmail.com'),
('len@gmail.com'),
('vipuldeep95@gmail.com'),
('vipuldeep95@gmail.com'),
('vipuld@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payement`
--

CREATE TABLE `payement` (
  `name` varchar(50) NOT NULL,
  `cardnum` varchar(10) NOT NULL,
  `cvc` varchar(3) NOT NULL,
  `rooms` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payement`
--

INSERT INTO `payement` (`name`, `cardnum`, `cvc`, `rooms`) VALUES
('Vipul deep', '1232411234', '', '2'),
('Vishal Sai', '31232', '123', '2'),
('Vishal Sai', '123123321', '123', '2'),
('rohan', '123123321', '222', '2'),
('vipuld@gmail.com', '123123321', '123', '3'),
('Vipuldeep Singh', '112212', '111', '1'),
('Vipuldeep Singh', '21212', '111', '1'),
('Vipuldeep Singh', '21212', '111', '1'),
('Vipuldeep Singh', '211313', '122', '2'),
('Vipuldeep Singh', '211313', '122', '2'),
('Vipuldeep Singh', '211313', '122', '2'),
('Harshil', '987654321', '789', '7');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `type`, `description`, `price`, `image`) VALUES
(1, 'Bowenhills', 'Best for quite places', 60, 'images/g1.jpg'),
(2, 'Queenstreet', 'Heart of the City', 100, 'images/g2.jpg'),
(3, 'Annerley', 'Queenslander Houses', 50, 'images/g3.jpg'),
(4, 'South Bank', 'Tourists hangout point', 110, 'images/g4.jpg'),
(5, 'Chermside', 'Suburb near to the city', 90, 'images/g5.jpg'),
(6, 'Windsor', 'Suburb near to the city', 50, 'images/g6.jpg'),
(7, 'Coopers plain', 'Near to to city', 75, 'images/g7.jpg'),
(8, 'Albion', 'Friday night party places.', 110, 'images/g8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `postcode` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `postcode`) VALUES
('rohan', 'ab@gmail.com', '1234', '1234'),
('len', 'abc@gmail.com', '123', '1234'),
('vishal', 'abcde@gmail.com', '11111', '1111'),
('Harshil', 'har@gmail.com', 'vish', '4000'),
('Vipuldeep Singh Gulati', 'vipuld@gmail.com', '1111', '1111'),
('Vipuldeep Singh Gulati', 'vipuldeep95@gmail.com', '12', '1234'),
('Vipuldeep Singh Gulati', 'vipuldeep@gmail.com', '1234', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
