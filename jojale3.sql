-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2019 at 11:25 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jojale3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contractor`
--

CREATE TABLE `contractor` (
  `contractor_id` int(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `addres` varchar(20) DEFAULT NULL,
  `log_id` int(10) DEFAULT NULL,
  `selection_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(10) NOT NULL,
  `job_desc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_desc`) VALUES
(2, 'Plumbing'),
(3, 'Electrician');

-- --------------------------------------------------------

--
-- Table structure for table `laborer`
--

CREATE TABLE `laborer` (
  `laborer_id` int(10) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `addres` varchar(20) DEFAULT NULL,
  `log_id` int(10) NOT NULL,
  `skill_id` int(10) NOT NULL,
  `job_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laborer`
--

INSERT INTO `laborer` (`laborer_id`, `firstname`, `lastname`, `phone_no`, `addres`, `log_id`, `skill_id`, `job_id`) VALUES
(1, 'janet', 'ndutah', '+254700123234', '001,100-nairobi', 42, 4, 2),
(2, 'ker', 'met', '0756654543', '123kis', 44, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `log_id` int(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `usertype` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `email`, `password`, `usertype`) VALUES
(12, 'emilythorne@gmail.com', 'dersde', NULL),
(14, 'josem@gmail.com', 'qweryy', NULL),
(15, 'janice@gmail.com', 'qwerty', NULL),
(16, '', '', NULL),
(18, 'karimi@gmail.com', 'Jane', NULL),
(19, 'rleah@gmail.com', 'Jane', NULL),
(21, 'vleah@gmail.com', 'Jane', NULL),
(22, 'njogu@gmail.com', 'wwwwee', NULL),
(23, 'njo@gmail.com', 'wwwwee', NULL),
(24, 'mash@gmail.co', 'mash', NULL),
(25, 'marsh@gmail.co', 'mash', 'laborer'),
(26, 'brianmuyundo@gmail.com', 'qwerty', 'laborer'),
(28, 'josephmuthure@gmail.com', 'qwerty', 'laborer'),
(29, 'bosco@gmail.com', 'qwerty', 'laborer'),
(30, 'jacobmunene@gmail.com', 'qwerty', 'laborer'),
(31, 'kim@gmail.com', 'qwerty', 'contractor'),
(32, 'mikemundu254@gmail.com', 'empress', 'contractor'),
(33, 'grace@gmail.com', 'qwerty', 'contractor'),
(34, 'jim@gmail.com', 'very', 'contractor'),
(35, 'seed@gmail.com', 'qwerty', 'contractor'),
(36, 'potter@gmail.com', 'west', 'contractor'),
(37, 'johnkamau@gmail.com', 'qwerty', 'contractor'),
(38, 'leah@gmail.com', 'qwerty', 'contractor'),
(39, 'janemanyi@gmail.com', 'qwerty', 'laborer'),
(41, 'janemanyi343@gmail.com', 'qwerty', 'laborer'),
(42, 'janetmanyi343@gmail.com', 'qwerty', 'laborer'),
(43, 'paul@gmail.com', 'qwerty', 'laborer'),
(44, 'met@gmail.com', 'qwerty', 'laborer');

-- --------------------------------------------------------

--
-- Table structure for table `selection`
--

CREATE TABLE `selection` (
  `selection_id` int(10) NOT NULL,
  `laborer_id` int(10) NOT NULL,
  `job_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(10) NOT NULL,
  `skill_desc` varchar(50) DEFAULT NULL,
  `job_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill_id`, `skill_desc`, `job_id`) VALUES
(1, 'shower piping', 2),
(2, 'shower piping', 2),
(3, 'shower piping', 2),
(4, 'pipe repair', 2),
(5, 'pipe repair', 2),
(6, 'pipe', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contractor`
--
ALTER TABLE `contractor`
  ADD PRIMARY KEY (`contractor_id`),
  ADD UNIQUE KEY `phone_no` (`phone_no`),
  ADD KEY `contractor_ibfk_1` (`log_id`),
  ADD KEY `selection_id` (`selection_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `laborer`
--
ALTER TABLE `laborer`
  ADD PRIMARY KEY (`laborer_id`),
  ADD KEY `log_id` (`log_id`),
  ADD KEY `skill_id` (`skill_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`log_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `selection`
--
ALTER TABLE `selection`
  ADD PRIMARY KEY (`selection_id`),
  ADD KEY `laborer_id` (`laborer_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`),
  ADD KEY `job_id` (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contractor`
--
ALTER TABLE `contractor`
  MODIFY `contractor_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laborer`
--
ALTER TABLE `laborer`
  MODIFY `laborer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `log_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `selection`
--
ALTER TABLE `selection`
  MODIFY `selection_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contractor`
--
ALTER TABLE `contractor`
  ADD CONSTRAINT `contractor_ibfk_1` FOREIGN KEY (`log_id`) REFERENCES `login` (`log_id`),
  ADD CONSTRAINT `contractor_ibfk_2` FOREIGN KEY (`selection_id`) REFERENCES `selection` (`selection_id`);

--
-- Constraints for table `laborer`
--
ALTER TABLE `laborer`
  ADD CONSTRAINT `laborer_ibfk_1` FOREIGN KEY (`log_id`) REFERENCES `login` (`log_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `laborer_ibfk_2` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`skill_id`),
  ADD CONSTRAINT `laborer_ibfk_3` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`job_id`);

--
-- Constraints for table `selection`
--
ALTER TABLE `selection`
  ADD CONSTRAINT `selection_ibfk_1` FOREIGN KEY (`laborer_id`) REFERENCES `laborer` (`laborer_id`),
  ADD CONSTRAINT `selection_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`job_id`);

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`job_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
