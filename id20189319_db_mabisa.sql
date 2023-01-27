-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 27, 2023 at 06:43 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20189319_db_mabisa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adminreg`
--

CREATE TABLE `tbl_adminreg` (
  `admin_fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_repassword` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_adminreg`
--

INSERT INTO `tbl_adminreg` (`admin_fullname`, `admin_username`, `admin_email`, `admin_password`, `admin_repassword`) VALUES
('admin', 'admin', 'admin@email.com', 'admin', 'admin'),
('', '', '', '', ''),
('', '', '', '', ''),
('Reyland Percila', 'Reyland', 'reyland@gmail.com', 'alien', 'alien'),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('shootaim', 'shootaim', 'shootaim@gmail.com', 'shootaim', 'shootaim'),
('shootaim', 'shootaim', 'shootaim@gmail.com', 'shootaim', 'shootaim'),
('shootaim1', 'shootaim1', 'shootaim1@gmail.com', 'shootaim1', 'shootaim1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
