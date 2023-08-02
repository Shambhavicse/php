-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2021 at 10:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegemanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminuser` varchar(100) NOT NULL,
  `adminpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminuser`, `adminpassword`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name_feed` varchar(100) NOT NULL,
  `email_feed` varchar(200) NOT NULL,
  `phone_feed` varchar(30) NOT NULL,
  `message_feed` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(100) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `mobno` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `enrollment` varchar(200) NOT NULL,
  `course` varchar(50) NOT NULL,
  `year` varchar(20) NOT NULL,
  `picname` varchar(200) NOT NULL,
  `regdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `dob`, `gender`, `mobno`, `email`, `pass`, `enrollment`, `course`, `year`, `picname`, `regdate`) VALUES
('Shambhavi', '2002-05-21', 'female', '8858054111', 'shambhavi@gmail.com', '1234', 'E18440535600001', 'Information Technology', 'Third', 'woman.png', '2021-07-27'),
('Shambhavi Srivastava', '2004-05-21', 'female', '8858054111', 'shambhavi21102001@gmail.com', 'sanj', 'E18440535600002', 'Information Technology', 'Third', 'chopper (1).jpg', '2021-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `studydocument`
--

CREATE TABLE `studydocument` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `course` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `tag` text NOT NULL,
  `doctype` varchar(50) NOT NULL,
  `thumbnail` varchar(300) NOT NULL,
  `documentname` varchar(300) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `userid` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studydocument`
--

INSERT INTO `studydocument` (`id`, `title`, `course`, `description`, `tag`, `doctype`, `thumbnail`, `documentname`, `date`, `status`, `userid`) VALUES
(1, 'cloud computing', 'Information Technology', 'cloud computing mcq', 'cloud computing, mcq', 'PDF', 'light4.jpg', '_Manifest-c9612e6033c04c98-25-Jul-2021-21-24-48.pdf', '2021-07-27', 'Publish', 'shambhavi@gmail.com'),
(2, 'android', 'Information Technology', 'andriod mcq', 'Test@123,mcq', 'PDF', 'light3.jpg', '_Manifest-c9612e6033c04c98-25-Jul-2021-10-56-37.pdf', '2021-07-27', 'Publish', 'shambhavi@gmail.com'),
(3, 'python', 'Information Technology', 'python', 'python', 'PDF', 'light6.jpg', '_Manifest-c9612e6033c04c98-20-Jul-2021-07-01-46.pdf', '2021-07-28', 'Publish', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`email_feed`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`enrollment`);

--
-- Indexes for table `studydocument`
--
ALTER TABLE `studydocument`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studydocument`
--
ALTER TABLE `studydocument`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
