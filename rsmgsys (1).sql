-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 10:52 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsmgsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin login`
--

CREATE TABLE `admin login` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin login`
--

INSERT INTO `admin login` (`Username`, `Password`) VALUES
('Yashaswini', '4SN18CS106'),
('Yukthi', '4SN18CS108');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cust_id` int(10) NOT NULL,
  `Cust_name` varchar(20) NOT NULL,
  `Cust_address` varchar(30) NOT NULL,
  `Contact_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_id`, `Cust_name`, `Cust_address`, `Contact_no`) VALUES
(100, 'Roshni', 'Sulya', 978712321),
(101, 'Khushi', 'Mangalore', 978712322),
(102, 'Aryan', 'Tamilnadu', 978712323),
(103, 'Arush', 'Kasmir', 978712324),
(104, 'Joy', 'Karkal', 978712325);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Emp_id` int(20) NOT NULL,
  `Emp_name` varchar(20) NOT NULL,
  `Role` varchar(20) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Phno` int(10) NOT NULL,
  `Salary` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_id`, `Emp_name`, `Role`, `Address`, `Phno`, `Salary`) VALUES
(0, '', '', '', 0, '0'),
(11, 'Aman', 'waiter', 'Bangalore', 977812341, '20'),
(12, 'Roshan', 'Cheff', 'Mangalore', 977812342, '20'),
(13, 'Bindu', 'Cashier', 'Puttur', 977812343, '25000'),
(14, 'Dyan', 'Cheff', 'Delhi', 977812344, '15000'),
(15, 'Charishma', 'Waiter', 'Haryan', 977812345, '10');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Fdbk_id` int(10) NOT NULL,
  `Food_quality` int(10) NOT NULL,
  `Cleanness` int(10) NOT NULL,
  `Service` int(10) NOT NULL,
  `Cust_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Fdbk_id`, `Food_quality`, `Cleanness`, `Service`, `Cust_id`) VALUES
(50, 4, 5, 4, 100),
(51, 3, 4, 5, 101),
(52, 5, 3, 3, 102),
(54, 5, 5, 4, 103),
(55, 5, 5, 1, 104);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Item_id` int(10) NOT NULL,
  `Item_name` varchar(30) NOT NULL,
  `Price` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Item_id`, `Item_name`, `Price`) VALUES
(200, 'Panipuri', '60'),
(201, 'Pizza', '200'),
(202, 'Chicken sandwich', '150'),
(203, 'Arabian wrap', '250'),
(204, 'Biriyani', '150'),
(205, 'Chicken chilli', '100'),
(206, 'Pav baji', '80'),
(207, 'Samosa', '40'),
(208, 'Butter chicken', '90'),
(209, 'Mushroom manchurian', '100');

-- --------------------------------------------------------

--
-- Table structure for table `manages`
--

CREATE TABLE `manages` (
  `E_id` int(10) NOT NULL,
  `It_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manages`
--

INSERT INTO `manages` (`E_id`, `It_id`) VALUES
(11, 200),
(11, 201),
(11, 206),
(11, 208),
(12, 202),
(12, 206),
(12, 207),
(12, 209),
(13, 203),
(13, 204),
(13, 208),
(14, 204),
(15, 205),
(15, 206),
(15, 207);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `I_id` int(10) NOT NULL,
  `C_id` int(10) NOT NULL,
  `Date` date NOT NULL,
  `Quantity` decimal(30,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`I_id`, `C_id`, `Date`, `Quantity`) VALUES
(200, 100, '2020-11-01', '2'),
(201, 102, '2020-11-03', '3'),
(202, 101, '2020-11-02', '5'),
(203, 104, '2020-11-04', '4'),
(204, 103, '2020-11-03', '2'),
(205, 100, '2020-11-03', '3'),
(205, 103, '2020-11-04', '3'),
(206, 101, '2020-11-04', '1'),
(206, 102, '2020-11-04', '2'),
(207, 103, '2020-11-04', '2'),
(207, 104, '2020-11-01', '2'),
(208, 104, '2020-11-01', '1'),
(209, 101, '2020-11-01', '2'),
(209, 103, '2020-11-01', '1'),
(209, 104, '2020-11-01', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user login`
--

CREATE TABLE `user login` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin login`
--
ALTER TABLE `admin login`
  ADD UNIQUE KEY `Password` (`Password`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cust_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Emp_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Fdbk_id`),
  ADD KEY `Cust_id_feedback_fk` (`Cust_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`Item_id`);

--
-- Indexes for table `manages`
--
ALTER TABLE `manages`
  ADD PRIMARY KEY (`E_id`,`It_id`),
  ADD KEY `It_id_manages_fk` (`It_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`I_id`,`C_id`),
  ADD KEY `C_id_oders_fk` (`C_id`);

--
-- Indexes for table `user login`
--
ALTER TABLE `user login`
  ADD UNIQUE KEY `Password` (`Password`),
  ADD UNIQUE KEY `Password_2` (`Password`),
  ADD UNIQUE KEY `Password_3` (`Password`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `Cust_id_feedback_fk` FOREIGN KEY (`Cust_id`) REFERENCES `customer` (`Cust_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manages`
--
ALTER TABLE `manages`
  ADD CONSTRAINT `E_id_manages_fk` FOREIGN KEY (`E_id`) REFERENCES `employee` (`Emp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `It_id_manages_fk` FOREIGN KEY (`It_id`) REFERENCES `items` (`Item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `C_id_oders_fk` FOREIGN KEY (`C_id`) REFERENCES `customer` (`Cust_id`),
  ADD CONSTRAINT `I_id_orders_fk` FOREIGN KEY (`I_id`) REFERENCES `items` (`Item_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
