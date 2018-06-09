-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2017 at 12:22 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_content`
--

CREATE TABLE `home_content` (
  `id` int(255) NOT NULL,
  `page_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `in_cart`
--

CREATE TABLE `in_cart` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_quantity` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `in_cart`
--

INSERT INTO `in_cart` (`id`, `user_id`, `product_name`, `product_quantity`, `total_price`) VALUES
(3, 2, 'BONELESS CUBES', '1', '165'),
(4, 2, 'CHICKEN LEG', '1', '249'),
(22, 2, 'CHICKEN WINGS', '1', '59'),
(23, 2, 'CHICKEN THIGH', '5', '1345'),
(24, 2, 'BONELESS CUBES', '2', '330');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `s.no` int(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`s.no`, `location`) VALUES
(1, 'kpm'),
(2, 'tcode\r\n'),
(3, 'namakkal'),
(4, 'salem'),
(5, 'erode');

-- --------------------------------------------------------

--
-- Table structure for table `package_type`
--

CREATE TABLE `package_type` (
  `id` int(255) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_type`
--

INSERT INTO `package_type` (`id`, `package_name`, `package_price`) VALUES
(2, 'test4', 20),
(4, 'test', 10);

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `files` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `product_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_name`, `product_price`, `files`, `file_path`, `catagory`, `sub_category`, `location`, `product_description`) VALUES
(39, 'CHICKEN WITHOUT SKIN', '199', 'whole_chicken_without_skin.jpg', '../../images/red/whole_chicken_without_skin.jpg', 'red', 'chicken', 'all_area', 'chicken that we deliver is 100% antibiotic-free and hormone-free'),
(40, 'BONELESS CUBES', '165', 'asifkhan_brownapron_17.jpg', '../../images/red/asifkhan_brownapron_17.jpg', 'red', 'chicken', 'all_area', 'chicken that we deliver is 100% antibiotic-free and hormone-free'),
(41, 'CHICKEN LEG', '249', 'chicken_leg.jpg', '../../images/red/chicken_leg.jpg', 'red', 'chicken', 'all_area', 'chicken that we deliver is 100% antibiotic-free and hormone-free'),
(42, 'DRUMSTICK', '249', 'chicken_drumstick.jpg', '../../images/red/chicken_drumstick.jpg', 'red', 'chicken', 'all_area', 'chicken that we deliver is 100% antibiotic-free and hormone-free'),
(43, 'CHICKEN THIGH', '269', 'chicken-thigh.jpg', '../../images/red/chicken-thigh.jpg', 'red', 'chicken', 'all_area', 'chicken that we deliver is 100% antibiotic-free and hormone-free'),
(44, 'CHICKEN WINGS', '59', 'asifkhan_brownapron_14.jpg', '../../images/red/asifkhan_brownapron_14.jpg', 'red', 'chicken', 'all_area', 'chicken that we deliver is 100% antibiotic-free and hormone-free'),
(45, 'CHICKEN MINCE', '165', 'asifkhan_brownapron_18.jpg', '../../images/red/asifkhan_brownapron_18.jpg', 'red', 'chicken', 'all_area', 'chicken that we deliver is 100% antibiotic-free and hormone-free'),
(46, 'PASANDA CUT', '175', 'chicken-pasanda-cut.jpg', '../../images/red/chicken-pasanda-cut.jpg', 'red', 'chicken', 'all_area', 'chicken that we deliver is 100% antibiotic-free and hormone-free'),
(47, 'CHILLI CHICKEN CUT', '175', 'chilli-chicken-cut.jpg', '../../images/red/chilli-chicken-cut.jpg', 'red', 'chicken', 'all_area', 'chicken that we deliver is 100% antibiotic-free and hormone-free'),
(48, 'COUNTRY CHICKEN', '499', 'country_chicken_with_skin_whole_1.jpg', '../../images/red/country_chicken_with_skin_whole_1.jpg', 'red', 'chicken', 'all_area', 'chicken that we deliver is 100% antibiotic-free and hormone-free'),
(49, 'LAMB CURRY CUT', '479', 'mutton_curry_cut.jpg', '../../images/red/mutton_curry_cut.jpg', 'red', 'mutton', 'all_area', ' Really good recipe'),
(50, 'LAMB RIB CHOPS', '500', 'mutton_rib_chops_1_1.jpg', '../../images/red/mutton_rib_chops_1_1.jpg', 'red', 'mutton', 'all_area', ' Really good recipe'),
(51, 'LAMB LEG', '539', 'mutton_leg_2_1.jpg', '../../images/red/mutton_leg_2_1.jpg', 'red', 'mutton', 'all_area', ' Really good recipe'),
(52, 'LAMB SHOULDER', '539', 'mutton_shoulder_1.jpg', '../../images/red/mutton_shoulder_1.jpg', 'red', 'mutton', 'all_area', ' Really good recipe'),
(53, 'LAMB MINCE', '720', 'mutton_mince_1_2.jpg', '../../images/red/mutton_mince_1_2.jpg', 'red', 'mutton', 'all_area', ' Really good recipe'),
(54, 'PASANDA CUT', '800', 'mutton-pasanda-cut_2.jpg', '../../images/red/mutton-pasanda-cut_2.jpg', 'red', 'mutton', 'all_area', ' Really good recipe'),
(55, 'MUTTON TROTTERS', '280', 'mutton_trotters.jpg', '../../images/red/mutton_trotters.jpg', 'red', 'mutton', 'all_area', 'chicken that we deliver is 100% antibiotic-free and hormone-free'),
(56, 'MUTTON BHEJA', '125', 'mutton_bheja.jpg', '../../images/red/mutton_bheja.jpg', 'red', 'mutton', 'all_area', ' Really good recipe'),
(57, 'MUTTON LIVER', '420', 'mutton_liver.jpg', '../../images/red/mutton_liver.jpg', 'red', 'mutton', 'all_area', ' Really good recipe'),
(58, 'MUTTON KIDNEY', '500', 'mutton_kidney.jpg', '../../images/red/mutton_kidney.jpg', 'red', 'mutton', 'all_area', ' Really good recipe'),
(59, 'SEER FISH', '849', 'seer_fish.jpg', '../../images/red/seer_fish.jpg', 'red', 'fish', 'all_area', 'Important source of protein and other nutrients'),
(60, 'ROHU LARGE', '199', 'rohu_large_4.jpg', '../../images/red/rohu_large_4.jpg', 'red', 'fish', 'all_area', 'Important source of protein and other nutrients'),
(61, 'CATLA LARGE', '199', 'catla_large_1.jpg', '../../images/red/catla_large_1.jpg', 'red', 'fish', 'all_area', 'Important source of protein and other nutrients'),
(62, 'INDIAN MACKEREL', '249', 'indian_mackerel.jpg', '../../images/red/indian_mackerel.jpg', 'red', 'fish', 'all_area', 'Important source of protein and other nutrients'),
(63, 'WHITE PRAWNS', '580', 'white_prawns.jpg', '../../images/red/white_prawns.jpg', 'red', 'fish', 'all_area', 'Important source of protein and other nutrients'),
(64, 'BLACK POMFRET', '689', 'black_pomfret.jpg', '../../images/red/black_pomfret.jpg', 'red', 'fish', 'all_area', 'Important source of protein and other nutrients'),
(65, 'SEA BASS BHETKI*', '689', 'sea_bass_bhetki_1_1.jpg', '../../images/red/sea_bass_bhetki_1_1.jpg', 'red', 'fish', 'all_area', 'Important source of protein and other nutrients');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `id` int(255) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `product_quantity` varchar(255) NOT NULL,
  `actual_price` varchar(255) NOT NULL,
  `package_type` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `s.no` int(255) NOT NULL,
  `Sub_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`s.no`, `Sub_category`) VALUES
(1, 'fish'),
(2, 'chicken'),
(3, 'mutton');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `email_id` varchar(255) DEFAULT NULL,
  `Referral_id` varchar(255) NOT NULL,
  `referred_by` varchar(255) DEFAULT NULL,
  `wallet` int(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_type` enum('user','admin') DEFAULT NULL,
  `location` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `phone_no`, `email_id`, `Referral_id`, `referred_by`, `wallet`, `password`, `user_type`, `location`) VALUES
(1, 'admin', '9715804476', 'admin@greefi.com', '9715804476', '8072001244', 0, '12345', 'admin', 'tcode'),
(2, 'greefi_user', '975451544', 'user@greefi.com', '975451544', '8508806647', 0, '12345', 'user', 'erode'),
(4, 'sudhakar', '9842972047', 'asudhakar@live.in', '9842972047', '8940698743', 0, '123456', 'user', 'namakkal'),
(7, 'karuna', '8508806647', 'karunakaran.cse.26@gmail.com', '8508806647', NULL, 86, '12345', 'user', 'kpm'),
(8, 'test', '8072001244', 'test@greefi.com', '8072001244', '8508806647', 208, '12345', 'user', 'kpm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_content`
--
ALTER TABLE `home_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in_cart`
--
ALTER TABLE `in_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `package_type`
--
ALTER TABLE `package_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email_id`),
  ADD UNIQUE KEY `phone_no` (`phone_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_content`
--
ALTER TABLE `home_content`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `in_cart`
--
ALTER TABLE `in_cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `s.no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `package_type`
--
ALTER TABLE `package_type`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `s.no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
