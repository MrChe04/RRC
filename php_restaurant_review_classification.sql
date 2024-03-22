-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2022 at 06:48 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php_restaurant_review_classification`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_food`
--

CREATE TABLE `add_food` (
  `id` int(100) NOT NULL,
  `foodname` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `timing` varchar(100) NOT NULL,
  `foodtype` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `discription` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `gst` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL,
  `hotel` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_food`
--

INSERT INTO `add_food` (`id`, `foodname`, `type`, `timing`, `foodtype`, `quantity`, `discription`, `price`, `gst`, `image`, `status`, `report`, `hotel`) VALUES
(1, 'Chicken 65', 'NON-VEG', '05PM-11PM', 'Snacks', '1kg', 'Free Onion , Miyo', '110', '5', 'chicken-65-restaurant-style.jpg', '1', '115', '12345678'),
(2, 'Chicken 65', 'NON-VEG', '05PM-11PM', 'Snacks', '10', 'Free Onion , Miyo', '120', '5', 'Chicken-65-Spicy-Crispy-3.jpg', '0', '126', 'KMS');

-- --------------------------------------------------------

--
-- Table structure for table `add_restaurant`
--

CREATE TABLE `add_restaurant` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `rtype` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_restaurant`
--

INSERT INTO `add_restaurant` (`id`, `name`, `address`, `email`, `latitude`, `longitude`, `contact`, `rtype`, `username`, `password`, `status`, `report`) VALUES
(1, 'Buhari', '27 Srinivasa Nagar', 'Thowfikrahman105@gmail.com', '1234', '1234', '9788529118', 'VEG', '12345678', '12345678', '0', '0'),
(2, 'KMS', 'Vayalur Nagar', 'KMSVayalur3@gmail.com', '2:1', '3:4', '9895648222', 'NON-VEG', 'KMS', 'kms123', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_details`
--

CREATE TABLE `delivery_details` (
  `id` int(100) NOT NULL,
  `deliveryto` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `packedon` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_details`
--

INSERT INTO `delivery_details` (`id`, `deliveryto`, `address`, `packedon`, `status`, `report`) VALUES
(1, 'Rocky ', '27 Ganapathy Nagar', '2022-04-27', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `train_keywords`
--

CREATE TABLE `train_keywords` (
  `id` int(100) NOT NULL,
  `keywords` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_keywords`
--

INSERT INTO `train_keywords` (`id`, `keywords`, `type`, `status`, `report`) VALUES
(1, 'Good', 'Positive', '0', '0'),
(2, 'Bad', 'Negative', '0', '0'),
(3, 'Nice', 'Positive', '0', '0'),
(4, 'Worst', 'Negative', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_booking`
--

CREATE TABLE `user_booking` (
  `id` int(100) NOT NULL,
  `foodname` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `timing` varchar(100) NOT NULL,
  `foodtype` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `gst` varchar(100) NOT NULL,
  `tprice` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `tamt` varchar(100) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `accno` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL,
  `delivery` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL,
  `hotel` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_booking`
--

INSERT INTO `user_booking` (`id`, `foodname`, `type`, `timing`, `foodtype`, `price`, `gst`, `tprice`, `quantity`, `tamt`, `hname`, `contact`, `accno`, `cvv`, `delivery`, `pincode`, `city`, `status`, `report`, `hotel`) VALUES
(1, 'Chicken 65', 'NON-VEG', '05PM-11PM', 'Snacks', '110', '5', '115', '3', '345', 'Rahman', '9788529118', '123456789', '892', '27 Ganapathy Nagar', '620102', 'Trichy', '0', 'Rocky ', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE `user_feedback` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL,
  `hotel` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_feedback`
--

INSERT INTO `user_feedback` (`id`, `username`, `feedback`, `status`, `report`, `hotel`) VALUES
(1, 'Rocky ', 'Its Good', '0', '1', ''),
(2, 'Rocky ', 'nice', '0', '1', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `name`, `contact`, `address`, `gender`, `email`, `username`, `password`, `status`, `report`) VALUES
(1, 'Rock', '9788529118', '27 Srinivasa Nagar', 'Male', 'Thowfikrock@gmail.com', 'Rocky ', 'Rock99', '0', '0');
