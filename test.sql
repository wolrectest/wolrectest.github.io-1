-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 08:00 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wolrec`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(50) NOT NULL,
  `cat_id` int(24) NOT NULL,
  `first_name` varchar(70) NOT NULL,
  `last_name` varchar(70) NOT NULL,
  `image` varchar(200) NOT NULL,
  `blog_title` varchar(200) NOT NULL,
  `blog_content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `cat_id`, `first_name`, `last_name`, `image`, `blog_title`, `blog_content`, `date`) VALUES
(1, 1, 'saul', 'chirwa', 'Screenshot 2022-12-14 111521.png', 'Sports Day', '<p>this is the paragraph</p>', '2022-12-31'),
(2, 3, 'alex', 'banda', '+265 888 38 19 65 20211224_180642.jpg', 'Welcome to the world of painting', '<p>welcome to the world of art welcome to the world of art welcome to the world of art welcome to the world of art welcome to the world of art</p>', '2022-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(24) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `date`) VALUES
(1, 'entertainment', '2022-12-18'),
(2, 'sports', '2022-12-18'),
(3, 'art', '2022-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `com_id` int(24) NOT NULL,
  `blog_id` int(24) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`com_id`, `blog_id`, `name`, `email`, `comment`, `date`) VALUES
(1, 1, 'saul chirwa', 'saulchirwa1@outlook.com', 'this is great', '2022-12-18'),
(2, 1, 'james mulima', 'james@gmail.com', 'this is working just fine', '2022-12-18'),
(3, 2, 'bright tembo', 'bright.tembo@auditconsult.mw', 'this is testing', '2022-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `p_id` int(50) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `category` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`p_id`, `firstname`, `lastname`, `category`, `image`, `title`, `content`, `start_date`, `end_date`) VALUES
(2, 'random', 'user', '2', 'project.png', 'sample title', '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, maxime dicta. Voluptatibus consequatur, nihil eveniet sapiente praesentium harum earum maiores molestias accusamus voluptate exercitationem suscipit. Excepturi doloremque officiis exercitationem repudiandae.\r\n', '2022-05-30', '2022-06-10'),
(3, 'user', 'random', 'Default Select', '0d8dc2617714cbddaf4dd9114a773b53.0.jpg', 'Dronex Team working', '<ol><li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, maxime dicta. Voluptatibus consequatur, nihil eveniet sapiente praesentium harum earum maiores molestias accusamus voluptate exercitationem suscipit. Excepturi doloremque officiis exercitationem repudiandae.</li></ol>', '2022-06-02', '2022-06-11'),
(4, 'admin', 'nimda', '2', 'inspection.jpg', 'Next Big project ahead', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, maxime dicta. Voluptatibus consequatur, nihil eveniet sapiente praesentium harum earum maiores molestias accusamus voluptate exercitationem suscipit. Excepturi doloremque officiis exercitationem repudiandae.\r\n', '2022-06-01', '2022-06-03'),
(5, 'Mahala', 'Mkwepu', '2', '0bcf89.jpg', 'The middle east', '<p><strong>This book would not be possible without the existence of my parents, the Internet, and JavaScript.</strong><br><strong>Also, words cannot express my gratitude to Ryan Dahl and TJ Holowaychuk.</strong></p><ul><li>In addition to that, special thanks to General Assembly, pariSOMA and Marakana for giving me<br>the opportunities to test my instructions out in the wild; to Peter Armstrong for LeanPub; to Sahil<br>Lavingia for Gumroad; to Daring Fireball for Markdown; to Metaclassy for Byword; to Fred Zirdung<br>for advice; and to Rachmad Adv for the splendid cover!<br>&nbsp;</li></ul>', '2022-09-23', '2022-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(24) NOT NULL,
  `fullname` varchar(110) NOT NULL,
  `phone` varchar(110) NOT NULL,
  `email` varchar(110) NOT NULL,
  `password` varchar(110) NOT NULL,
  `role` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `fullname`, `phone`, `email`, `password`, `role`) VALUES
(1, 'Dreamcode', '0887777444', 'dreamcode@gmail.com', '0a5ef6916892086e1a4ab47aa2c68214', 'admin'),
(2, 'saul chirwa', '0991968361', 'saul@admin.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(3, 'alex banda', '0885013969', 'alexbanda@gmail.com', '202cb962ac59075b964b07152d234b70', 'pilot'),
(4, 'james mulima', '0888229900', 'jamesmulima@gmail.com', '202cb962ac59075b964b07152d234b70', 'pilot'),
(5, 'bright tembo', '+265999229900', 'bright.tembo@auditconsult.mw', '202cb962ac59075b964b07152d234b70', 'pilot'),
(6, 'bernhard simwaka', '+265888229900', 'bernhard.simwaka@auditconsult.mw', '202cb962ac59075b964b07152d234b70', 'pilot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `com_id` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `p_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
