-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2019 at 07:17 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectmanagment`
--

-- --------------------------------------------------------

--
-- Table structure for table `ed_docs_requests_tpl`
--

CREATE TABLE `ed_docs_requests_tpl` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `form_fields` varchar(255) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `deleted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ed_docs_requests_tpl`
--

INSERT INTO `ed_docs_requests_tpl` (`id`, `title`, `form_fields`, `project_id`, `status`, `deleted`) VALUES
(6, 'title', 'a:4:{s:10:\"form_title\";s:5:\"title\";s:10:\"project_id\";s:5:\"title\";s:3:\"chk\";a:3:{i:0;s:2:\"on\";i:1;s:2:\"on\";i:2;s:2:\"on\";}s:7:\"BX_NAME\";a:3:{i:0;s:5:\"sdfsd\";i:1;s:7:\"hdfgdfg\";i:2;s:8:\"vcbcbcvb\";}}', NULL, NULL, '2019-02-07 11:18:39'),
(7, 'priject title', 'a:4:{s:10:\"form_title\";s:13:\"priject title\";s:10:\"project_id\";s:1:\"2\";s:3:\"chk\";a:2:{i:0;s:2:\"on\";i:1;s:2:\"on\";}s:7:\"BX_NAME\";a:2:{i:0;s:7:\"Field 1\";i:1;s:7:\"Field 2\";}}', 2, NULL, '2019-02-07 11:24:26'),
(8, 'title', 'a:4:{s:10:\"form_title\";s:5:\"title\";s:10:\"project_id\";s:5:\"title\";s:3:\"chk\";a:3:{i:0;s:2:\"on\";i:1;s:2:\"on\";i:2;s:2:\"on\";}s:7:\"BX_NAME\";a:3:{i:0;s:9:\"vcbvcbcvb\";i:1;s:12:\"vcbvcbcvbcvb\";i:2;s:17:\"xcvxcvxcvxcvxcvxc\";}}', 5, NULL, '2019-02-08 11:27:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ed_docs_requests_tpl`
--
ALTER TABLE `ed_docs_requests_tpl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ed_docs_requests_tpl`
--
ALTER TABLE `ed_docs_requests_tpl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
