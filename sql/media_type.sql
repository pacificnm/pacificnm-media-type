-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2017 at 09:13 AM
-- Server version: 10.0.28-MariaDB-0+deb8u1
-- PHP Version: 5.6.29-0+deb8u1

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `media_type`
--

CREATE TABLE IF NOT EXISTS `media_type` (
`media_type_id` int(20) unsigned NOT NULL,
  `media_type_name` varchar(100) NOT NULL,
  `media_type_active` int(3) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4;

--
-- Dumping data for table `media_type`
--

INSERT INTO `media_type` (`media_type_id`, `media_type_name`, `media_type_active`) VALUES
(1, 'Product Image', 1),
(2, 'Profile Image', 1),
(3, 'Home Page Banner', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media_type`
--
ALTER TABLE `media_type`
 ADD PRIMARY KEY (`media_type_id`), ADD UNIQUE KEY `media_type_name` (`media_type_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media_type`
--
ALTER TABLE `media_type`
MODIFY `media_type_id` int(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;SET FOREIGN_KEY_CHECKS=1;

