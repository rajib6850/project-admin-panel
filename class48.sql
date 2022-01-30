-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 10:13 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `class48`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(5) NOT NULL,
  `pg_title` varchar(200) NOT NULL,
  `pg_content` text NOT NULL,
  `pg_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `pg_title`, `pg_content`, `pg_url`) VALUES
(6, 'my services', 'something else', '?pg_url=my_services1643530824351'),
(7, 'about us page', 'Lorem ipsum dolor sit amet', '?pg_url=about_us_page1643532831313'),
(9, 'Home', 'What is Lorem Ipsum?\r\n&lt;b&gt;Lorem Ipsum is simply&lt;/b&gt; dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'index.php'),
(10, 'MY Blog', '&lt;p&gt;&lt;strong&gt;Lorem ipsum dolor sit amet,&lt;/strong&gt;&lt;em&gt; consectetur adipiscing elit, &lt;/em&gt;sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: center;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;h1 style=&quot;text-align: center;&quot;&gt;Taltali computer&lt;/h1&gt;', '?pg_url=MY_Blog1643533655250');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`, `username`) VALUES
(2, 'Hafizul', 'Islam', 'halim7g@gmail.com', 'demmo@demo.com', '02'),
(3, 'Mst. ', 'Karima', 'karima@gmail.com', 'Error@4204204820', '03'),
(5, 'Md. ', 'Aminul', 'aminul89@gmail.com', 'aminul809', '04'),
(6, 'Md.', 'Nazmul', 'something@some', 'safasf', '05'),
(7, 'Kuddus', 'Alom', 'kuddus@kuddus.com', '1234', 'Kuddus'),
(8, 'Samsu', 'Fokir', 'samsu@samsu.com', '123', 'samsu'),
(9, 'rasel', 'ahamed', 'rasel@gmail.com', '23423432', 'rasel943'),
(10, 'rasel', 'ahamed', 'rasel@gmail.com', '23423432', 'rasel943'),
(11, 'Kuddus', 'asfasf', 'something@gmail.com', '126541444949', '03'),
(12, 'Md.', 'Bashar', 'bashar@gmail.com', 'Bashaar343@4532', 'bb333'),
(13, 'Md.', 'Rajib', 'rajib6850@gmail.com', 'rajib7g', 'rajib7g'),
(14, 'pritom', 'chandra', 'pritom@gmail.com', 'pritom@pritom', 'pritom');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
