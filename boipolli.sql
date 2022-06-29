-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 08:20 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boipolli`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE `admin_panel` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`username`, `password`) VALUES
('milton', '1234'),
('mamun', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `pathok_registration`
--

CREATE TABLE `pathok_registration` (
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `favourite_genre` varchar(30) NOT NULL,
  `favourite_writer` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pathok_registration`
--

INSERT INTO `pathok_registration` (`username`, `name`, `gender`, `city`, `favourite_genre`, `favourite_writer`, `email`, `password`) VALUES
('mamun', 'Md Mamun Hossain', 'Male', 'Bogra', 'Islamic', 'Abdur Razzak Bin Yousuf', 'surprise.e.bd@gmail.com', '1234'),
('milton', 'Md. Daiyan Uddin Mozumder', 'Male', 'Feni', 'Fiction', 'Satyajit Ray & Humayun Ahmed', 'daiyan1091@gmail.com', '1234'),
('miska', 'Miskath Tahsin', 'Female', 'Feni', 'Juvenile Literature', 'Md. Zafar Iqbal', 'infomiskath@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `upload_files`
--

CREATE TABLE `upload_files` (
  `username` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `writings` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pathok_registration`
--
ALTER TABLE `pathok_registration`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
