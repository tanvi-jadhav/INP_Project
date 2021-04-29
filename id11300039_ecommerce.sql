-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 13, 2020 at 08:38 AM
-- Server version: 10.3.16-MariaDB
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
-- Database: `id11300039_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prod_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `p_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `p_id` int(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`username`, `prod_name`, `price`, `p_name`, `p_id`, `quantity`) VALUES
('Pushpaiyer', 'White Frock', '	\r\n35', 'kids-frock3.jfif', 2, 2),
('Pushpaiyer', 'Men Casual Shirt', '25.99', 'men8.jfif', 1, 1),
('Pushpaiyer', 'Line High Waisted Dress', '34.67', 'g_dress2.jfif', 3, 2),
('tanujadhav', 'Men Casual Shirt', '25.99', 'men8.jfif', 1, 1),
('tanujadhav', 'Off Shoulder Lace Dress', '24.99', 'g.jfif', 5, 1),
('tanujadhav', 'Line High Waisted Dress', '34.67', 'g_dress2.jfif', 3, 1),
('iyerpu', 'Men Casual Shirt', '25.99', 'men8.jfif', 1, 1),
('iyerpu', 'White Frock', '	\r\n35', 'kids-frock3.jfif', 2, 2),
('Admin', 'dress_frock.jf', '40.00', 'dress_frock.jfif', 7, 1),
('rutuja', 'Military Bomber Mens Jacket\r\n', '300.00', 'men_jacket.jfif\r\n', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `State` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Zip` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Fullname`, `Email`, `Address`, `City`, `State`, `Zip`) VALUES
('Joh M doe', 'iyeru25@gmail.com', 'sectror 17 atomika society, plot no 189 near iyappa temple', 'Navi Mumbai', 'South Carolina', 400706),
('Usha', 'iyeru25@gmail.com', 'sadsa saddsa d sa d sa d, sad sa dsa d as d sa d sa', 'Navi Mumbai', 'South Carolina', 400706),
('IYER PUSHPA', 'iyerpushpa24@gmail.com', 'Plot no-189, sector-17,atomika society', 'Navi Mumbai', 'Maharashtra', 400706),
('Joh M doe', 'iyeru25@gmail.com', 'sectror 17 atomika society, plot no 189 near iyappa temple', 'Navi Mumbai', 'South Carolina', 400706),
('Usha', 'pushpa.iyer17@siesgst.ac.in', 'Nerul', 'Navi Mumbai', 'NY', 10001),
('Tanvi', 'tanvi.jadhav17@siesgst.ac.in', 'Sanpada', 'Navi Mumbai', 'Maharashtra', 400705),
('Joh M doe', 'iyeru25@gmail.com', 'sectror 17 atomika society, plot no 189 near iyappa temple', 'Navi Mumbai', 'South Carolina', 400706),
('IYER PUSHPA', 'iyerpushpa24@gmail.com', 'Plot no-189, sector-17,atomika society', 'Navi Mumbai', 'Maharashtra', 400706),
('IYER PUSHPA', 'iyerpushpa24@gmail.com', 'Plot no-189, sector-17,atomika society', 'Navi Mumbai', 'Maharashtra', 400706),
('IYER PUSHPA', 'iyerpushpa24@gmail.com', 'Plot no-189, sector-17,atomika society', 'Navi Mumbai', 'Maharashtra', 400706),
('Usha', 'iyeru25@gmail.com', 'sectror 17 atomika society, plot no 189 near iyappa temple', 'Mumbai', 'Maharashtra', 400706),
('IYER PUSHPA', 'iyerpushpa24@gmail.com', 'Plot no-189, sector-17,atomika society', 'Navi Mumbai', 'Maharashtra', 400706),
('Tanvi', 'tanvi.jadhav17@siesgst.ac.in', 'Sanpada', 'Navi Mumbai', 'Maharashtra', 400705),
('Usha', 'iyeru25@gmail.com', 'sectror 17 atomika society, plot no 189 near iyappa temple', 'Mumbai', 'Maharashtra', 400706),
('Usha iyer', 'iyeru25@gmail.com', 'sadsa saddsa d sa d sa d, sad sa dsa d as d sa d sa', 'Navi Mumbai', 'South Carolina', 400706),
('Jfjf', 'namutambe99@gmail.com', 'Heheh', 'Hshdj', 'Hdhdndn', 100010);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(100) NOT NULL,
  `price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `availability` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `price`, `name`, `product_name`, `availability`) VALUES
(1, '250.99', 'men8.jfif', 'Men Casual Shirt', 5),
(2, '	350', 'kids-frock3.jfif', 'White Frock', 4),
(3, '340.67', 'g_dress2.jfif', 'Line High Waisted Dress', 8),
(4, '300.00', 'men_jacket.jfif\r\n', 'Military Bomber Mens Jacket\r\n', 2),
(5, '240.99', 'g.jfif', 'Off Shoulder Lace Dress', 8),
(6, '300.00', 'g_dress1.jfif', 'Prada Dress', 3),
(7, '400.00', 'dress_frock.jfif', 'dress_frock', 7),
(8, '560.88', 'men1.jfif', 'Shirt', 5);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `contact`, `email`, `username`, `password`) VALUES
('Adminadmin', '8746352453', 'iyeru25@gmail.com', 'admin', 'admin'),
('Pushpa', '7715991763', 'iyeru25@gmail.com', 'iyerpu', 'pushtan'),
('pushpa24', '9837465378', 'iyeru25@gmail.com', 'pushpa24', 'pushpa24'),
('Rutujaa', '1234567890', 'Rutu154@gmail.com', 'Rutu_15', 'rutuja'),
('Rutuja', '8828253040', 'jadhavrutu2309@gmail.com', 'Rutu1504', 'rutu1999'),
('Rutuja ', '1234567890', 'rutuja@gmail.com', 'Rutuja', 'rutuja'),
('Tanvi', '8082020877', 'tanvi.jadhav17@siesgst.ac.in', 'Tanujadhav', '12345678'),
('tanvi ', '7654328976', 'iyerpushpa24@gmail.com', 'tanvii', 'tanvii'),
('Usha iyer', '9867364523', 'iyeru25@gmail.com', 'ushaiyer', 'ushaiyer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD UNIQUE KEY `productid` (`productid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
