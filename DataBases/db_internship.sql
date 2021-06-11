-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 11, 2021 at 12:49 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

DROP TABLE IF EXISTS `tbl_student`;
CREATE TABLE IF NOT EXISTS `tbl_student` (
  `st_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_name` varchar(50) NOT NULL,
  `st_gender` varchar(6) NOT NULL,
  `st_dob` date NOT NULL,
  `st_email` varchar(50) NOT NULL,
  `st_mobile` varchar(20) NOT NULL,
  `st_address` varchar(50) NOT NULL,
  `st_pincode` int(6) NOT NULL,
  `st_erno` bigint(12) NOT NULL,
  `st_password` varchar(30) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`st_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`st_id`, `st_name`, `st_gender`, `st_dob`, `st_email`, `st_mobile`, `st_address`, `st_pincode`, `st_erno`, `st_password`, `is_deleted`) VALUES
(1, 'Rachit Bhatt', 'Male', '2000-09-29', 'ratchtbhatt2000@gmail.com', '7990803727', '19/435, Satyagrah Chhavani Society', 380015, 191263107035, '1234', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_themed_data`
--

DROP TABLE IF EXISTS `tbl_themed_data`;
CREATE TABLE IF NOT EXISTS `tbl_themed_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pass` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_themed_data`
--

INSERT INTO `tbl_themed_data` (`id`, `pass`, `email`, `address1`, `address2`, `city`, `state`) VALUES
(1, '1234', 'ratchtbhatt2000@gmail.com', '19/435, Satyagrah Chhavani Society', 'OPPO. ISRO, Jodhpur Tekra', 'Ahmedabad', 'Gujarat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_gender` varchar(6) NOT NULL,
  `user_number` bigint(20) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_gender`, `user_number`, `is_deleted`) VALUES
(1, 'Akash', 'Male', 9876543210, 0),
(7, 'Rachit Bhatt', 'Male', 7990803727, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
