-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 03:54 PM
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
-- Database: `test`
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
(2, 'random', 'user', 'Default Select', 'Screenshot 2022-12-14 111521.png', 'sample title', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, maxime dicta. Voluptatibus consequatur, nihil eveniet sapiente praesentium harum earum maiores molestias accusamus voluptate exercitationem suscipit. Excepturi doloremque officiis exercitationem repudiandae.</p>', '2022-05-30', '2022-06-10'),
(3, 'user', 'random', 'Default Select', 'Screenshot 2022-12-14 111134.png', 'Dronex Team working', '<ol><li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, maxime dicta. Voluptatibus consequatur, nihil eveniet sapiente praesentium harum earum maiores molestias accusamus voluptate exercitationem suscipit. Excepturi doloremque officiis exercitationem repudiandae.</li></ol>', '2022-06-02', '2022-06-11');

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
(7, 'administrator', '0888381965', 'admin@admin.com', '8aaca7661880b53900fc8eaca360903e', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE `vacancies` (
  `v_id` int(24) NOT NULL,
  `summary` text NOT NULL,
  `position` varchar(200) NOT NULL,
  `requirements` text NOT NULL,
  `location` varchar(100) NOT NULL,
  `closing_date` date NOT NULL,
  `details` text NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vacancies`
--

INSERT INTO `vacancies` (`v_id`, `summary`, `position`, `requirements`, `location`, `closing_date`, `details`, `created_date`) VALUES
(1, 'this is summary', 'driver', 'msce and drivers licences', 'lilongwe', '2022-12-31', '<p>this is sample</p>', '2022-12-22'),
(2, 'Women’s Legal Resources Centre (WOLREC) is a women’s rights Non-governmental organization based in Blantyre. WOLREC is housed at Naperi, Kenyatta Drive, Plot No. SW8/517/3&4. WOLREC was registered under the Trustees Incorporation Act (1962) in 2006 and became operational the same year. WOLREC’s mission is to facilitate increased access to legal, socio-political and economic justice for women and girls in Malawi.', 'ICT manager', 'bachelors degree in computer engineering', 'blantyre', '2022-12-28', '<ul><li>To lobby and advocate for gender equality, good governance, democracy, transparency, accountability and corruption free society.</li><li>To provide legal aid and assistance to women and girls in Malawi.</li><li>To provide and identify economic opportunities for women for the advancement of their lives.</li><li>To promote awareness of the legal and human rights of females with a view of curtailing gender-based violence, abuses relating to reproductive rights, cultural imbalances that disadvantage females, enhance female empowerment etc.</li><li>To consolidate democratic and local governance values as they affect females.</li><li>To conduct research on matters affecting women and girls in Malawi.</li></ul>', '2022-12-22');

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
-- Indexes for table `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`v_id`);

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
  MODIFY `user_id` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `v_id` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
