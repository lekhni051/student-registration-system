-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2017 at 11:06 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_name` varchar(40) NOT NULL,
  `user_password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_name`, `user_password`) VALUES
('lekhni', 'pass123');

-- --------------------------------------------------------

--
-- Table structure for table `u_reg`
--

CREATE TABLE `u_reg` (
  `u_id` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `roll_no` varchar(100) NOT NULL,
  `student_class` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_reg`
--

INSERT INTO `u_reg` (`u_id`, `user_name`, `father_name`, `school_name`, `roll_no`, `student_class`) VALUES
('', 'lekhni', 'madhukumar', 'rkvm', '051', '10th');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
