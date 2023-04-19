-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 أبريل 2023 الساعة 13:50
-- إصدار الخادم: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book-store`
--

-- --------------------------------------------------------

--
-- بنية الجدول `books`
--

CREATE TABLE `books` (
  `serial` int(11) NOT NULL,
  `bookname` varchar(600) NOT NULL,
  `photo` varchar(600) NOT NULL,
  `book` varchar(600) NOT NULL,
  `price` int(5) NOT NULL,
  `descriptionBook` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `fishbooks`
--

CREATE TABLE `fishbooks` (
  `serial` int(11) NOT NULL,
  `bookname` varchar(200) NOT NULL,
  `book` varchar(600) NOT NULL,
  `price` int(10) NOT NULL,
  `descriptionbook` varchar(600) NOT NULL,
  `photoname` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `orderdetail`
--

CREATE TABLE `orderdetail` (
  `Oserial` int(11) NOT NULL,
  `Cserials` int(255) DEFAULT NULL,
  `datee` varchar(300) DEFAULT NULL,
  `Cname` varchar(600) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `reigster`
--

CREATE TABLE `reigster` (
  `Cserial` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `phone` int(20) NOT NULL,
  `Caddress` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `passwords` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `fishbooks`
--
ALTER TABLE `fishbooks`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`Oserial`);

--
-- Indexes for table `reigster`
--
ALTER TABLE `reigster`
  ADD PRIMARY KEY (`Cserial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `fishbooks`
--
ALTER TABLE `fishbooks`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `Oserial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `reigster`
--
ALTER TABLE `reigster`
  MODIFY `Cserial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
