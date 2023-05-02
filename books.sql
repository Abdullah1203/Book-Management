-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 12:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinfo`
--

CREATE TABLE `bookinfo` (
  `name` varchar(20) NOT NULL,
  `publisher` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `page` int(11) NOT NULL,
  `booktype` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookinfo`
--

INSERT INTO `bookinfo` (`name`, `publisher`, `age`, `date`, `page`, `booktype`) VALUES
('poem', 'poetry', 23, '2023-05-02', 23343, 'fiction'),
('hhh', 'aaa', 22, '0000-00-00', 333434, 'education'),
('hhh', 'aaa', 22, '0000-00-00', 333434, 'education'),
('test 1', 'ABD NIMIT! 1', 26, '0000-00-00', 111, 'poetry'),
('test 2', 'ABD NIMIT 2', 25, '0000-00-00', 222, 'education'),
('test 3', 'ABD NIMIT 3', 26, '0000-00-00', 333, 'fiction'),
('test 4', 'ABD NIMIT 4', 26, '0000-00-00', 444, 'poetry'),
('Harry Potter', 'J. K. Rowling', 30, '0000-00-00', 300, 'fiction'),
('Alice in Wonderland', 'Lewis Carrol', 29, '0000-00-00', 555, 'fiction'),
('Pride and Prejudice', 'Jane Austen', 24, '0000-00-00', 234, 'education'),
('harry', 'j k ', 30, '0000-00-00', 111, 'fiction');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
