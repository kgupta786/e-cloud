-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2017 at 07:59 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloudbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `f12`
--

CREATE TABLE `f12` (
  `files` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `f27777`
--

CREATE TABLE `f27777` (
  `files` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `mobileno` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`mobileno`, `email`, `password`) VALUES
('27777', 'iitengineer786@gmail.com', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `m12`
--

CREATE TABLE `m12` (
  `music_path` varchar(500) DEFAULT NULL,
  `music_name` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m27777`
--

CREATE TABLE `m27777` (
  `music_path` varchar(500) DEFAULT NULL,
  `music_name` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m27777`
--

INSERT INTO `m27777` (`music_path`, `music_name`) VALUES
('./uploads/Tere Naam - Ninja (DJJOhAL.Com).mp3', 'Tere Naam');

-- --------------------------------------------------------

--
-- Table structure for table `v12`
--

CREATE TABLE `v12` (
  `video_path` varchar(500) DEFAULT NULL,
  `video_name` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `v12`
--

INSERT INTO `v12` (`video_path`, `video_name`) VALUES
('./uploadvideo/kitekalli.mp4', 'kite kalli2');

-- --------------------------------------------------------

--
-- Table structure for table `v27777`
--

CREATE TABLE `v27777` (
  `video_path` varchar(500) DEFAULT NULL,
  `video_name` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`mobileno`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
