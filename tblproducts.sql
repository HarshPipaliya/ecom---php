-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 07:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

CREATE TABLE `tblproducts` (
  `pid` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`pid`, `pname`, `title`, `price`, `category`, `img`) VALUES
(4, 'Clock', 'New branded wall clock', 999, 'Clocks', 'images/clock.png'),
(5, 'Watch', 'avenger black king black', 499, 'Watches', 'images/qxft1_400.png'),
(6, 'Bluetooth', 'Yogdhara B11 Neckband Sports Bluetooth Bluetooth Headset (Blue, In the Ear)', 129, 'Electronics', 'images/bluetooth.png'),
(7, 'Bedsheet', 'Elite Fashionable Bedsheets', 299, 'Home Appliences', 'images/bedsheet.png'),
(8, 'Shampoo', 'Head & Shoulder Shampo', 49, 'Cosmetics', 'images/shampoo.jpg'),
(9, 'Sunglasses', 'New Branded Sunglasses', 299, 'Eyewear', 'images/sunglasses.png'),
(10, 'Shoes', 'White special shoes', 299, 'Shoes', 'images/shoes.png'),
(11, 'Kurti', 'Stylish Kurta Set', 899, 'Clothes', 'images/cc6df_512.png'),
(12, 'Hypic', 'Hyco Cleaning combo set(Ph1000ml+TC500ml+DW500ml+HW225ml+BC500ml+GC500ml)', 299, 'Cleaner', 'images/smldi_512.png'),
(13, 'T- Shirt', 'Trendy Trond Regular Fit Cotton Blend Half Sleeve Polo Men T-shirt', 349, 'Clothes', 'images/vnlnu_512.png'),
(14, 'Mangalsutras', 'Princess Colorful Mangalsutras', 45, 'Catlaries', 'images/8coq9_512.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproducts`
--
ALTER TABLE `tblproducts`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproducts`
--
ALTER TABLE `tblproducts`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
