-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 15, 2018 at 11:57 AM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studyIndia`
--

-- --------------------------------------------------------

--
-- Table structure for table `is_category`
--

CREATE TABLE `is_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `is_category`
--

INSERT INTO `is_category` (`id`, `name`, `status`) VALUES
(1, 'Quantitative Aptitude', '1'),
(2, 'Verbal Reasoning', '1'),
(3, 'Non Verbal Reasoning', '1');

-- --------------------------------------------------------

--
-- Table structure for table `si_admin`
--

CREATE TABLE `si_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `si_admin`
--

INSERT INTO `si_admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'Subhomoy', 'admin', '09a14d08f6b1af0f73c6f7e9492e9e8dfa3c1cb1bbfd41a3879857528144c62fd4dc9f44d39d16756d69238a932ee9005aff76b9001496b363f6dc982499e04bM78MEJkdmqpQRG/9SKA4WYe5lJgrCQ==');

-- --------------------------------------------------------

--
-- Table structure for table `si_answers`
--

CREATE TABLE `si_answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `is_correct` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `si_questions`
--

CREATE TABLE `si_questions` (
  `id` int(11) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `questions` text NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `si_subject`
--

CREATE TABLE `si_subject` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `si_subject`
--

INSERT INTO `si_subject` (`id`, `category_id`, `name`, `status`) VALUES
(1, 1, 'Age', '1'),
(2, 1, 'Area', '1'),
(3, 1, 'Average', '1'),
(4, 1, 'Banker\'s Discount', '1'),
(5, 1, 'Boats and Streams', '1'),
(6, 1, 'Calendar', '1'),
(7, 1, 'Chain Rule', '1'),
(8, 1, 'Clock', '1'),
(9, 1, 'Decimal Fractions', '1'),
(10, 1, 'H.C.F. and L.C.M.', '1'),
(11, 1, 'Height and Distance', '1'),
(12, 1, 'Logarithm', '1'),
(13, 1, 'Mixture and Alligation', '1'),
(14, 1, 'Numbers', '1'),
(15, 1, 'Partnerships', '1'),
(16, 1, 'Percentage', '1'),
(17, 1, 'Permutations and \nCombinations', '1'),
(18, 1, 'Pipes and Cistern', '1'),
(19, 1, 'Probability', '1'),
(20, 1, 'Profit and Loss', '1'),
(21, 1, 'Races and Games', '1'),
(22, 1, 'Series - Odd Man Out', '1'),
(23, 1, 'Series - Find Missing Number', '1'),
(24, 1, 'Simple Interest', '1'),
(25, 1, 'Compound Interest', '1'),
(26, 1, 'Simplification', '1'),
(27, 1, 'Square Root and Cube Root', '1'),
(28, 1, 'Stocks and Shares', '1'),
(29, 1, 'Surds and Indices', '1'),
(30, 1, 'Time and Distance', '1'),
(31, 1, 'Time and Work', '1'),
(32, 1, 'Trains', '1'),
(33, 1, 'More Questions at \r\nDiscussion Board', '1');

-- --------------------------------------------------------

--
-- Table structure for table `si_theory`
--

CREATE TABLE `si_theory` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `si_user`
--

CREATE TABLE `si_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `state` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `edited_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `is_category`
--
ALTER TABLE `is_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_admin`
--
ALTER TABLE `si_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_answers`
--
ALTER TABLE `si_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_questions`
--
ALTER TABLE `si_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_subject`
--
ALTER TABLE `si_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_theory`
--
ALTER TABLE `si_theory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_user`
--
ALTER TABLE `si_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `is_category`
--
ALTER TABLE `is_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `si_admin`
--
ALTER TABLE `si_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `si_answers`
--
ALTER TABLE `si_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `si_questions`
--
ALTER TABLE `si_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `si_subject`
--
ALTER TABLE `si_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `si_theory`
--
ALTER TABLE `si_theory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `si_user`
--
ALTER TABLE `si_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
