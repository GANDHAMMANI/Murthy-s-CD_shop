-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2024 at 11:45 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cd`
--

-- --------------------------------------------------------

--
-- Table structure for table `cds`
--

CREATE TABLE `cds` (
  `cd_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `release_year` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `hero` varchar(50) DEFAULT NULL,
  `heroine` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cds`
--

INSERT INTO `cds` (`cd_id`, `title`, `artist`, `genre`, `release_year`, `price`, `hero`, `heroine`, `quantity`) VALUES
(1, 'Baahubali: The Beginning', 'S.S. Rajamouli', 'Action', 2015, 15, 'Baahubali', 'Devasena', 91),
(2, 'Baahubali: The Conclusion', 'S.S. Rajamouli', 'Action', 2017, 20, 'Baahubali', 'Devasena', 80),
(3, 'Magadheera', 'S.S. Rajamouli', 'Fantasy', 2009, 15, 'Ram Charan', 'Kajol Agarwal', 50),
(4, 'Arjun Reddy', 'Sandeep Reddy Vanga', 'Drama', 2017, 12, 'Vijay Deverakonda', 'Shalini Pandey', 30),
(5, 'Eega', 'S.S. Rajamouli', 'Fantasy', 2012, 10, 'Nani', 'Samantha Ruth Prabhu', 40),
(6, 'Janatha Garage', 'Koratal Shiva', 'Action', 2016, 15, 'NTR Jr.', 'Samantha Ruth Prabhu', 70),
(7, 'Pelli Sandadi', 'K. Raghavendra Rao', 'Romance', 1996, 10, 'Prabhu Deva', 'Sridevi', 25),
(8, 'Srimanthudu', 'Koratal Shiva', 'Drama', 2015, 18, 'Mahesh Babu', 'Shruti Haasan', 60),
(9, 'Geetha Govindam', 'Parasuram', 'Romantic Comedy', 2018, 12, 'Vijay Deverakonda', 'Rashmika Mandanna', 90),
(10, 'Fidaa', 'Sekhar Kammula', 'Romantic Drama', 2017, 15, 'Varun Tej', 'Sai Pallavi', 65),
(11, 'Sye', 'S.S. Rajamouli', 'Sports', 2004, 10, 'Nithiin', 'Genelia D\'Souza', 15),
(12, 'Chirutha', 'Puri Jagannadh', 'Action', 2007, 12, 'Ram Charan', 'Neha Sharma', 20),
(13, 'Bharat Ane Nenu', 'Koratal Shiva', 'Drama', 2018, 18, 'Mahesh Babu', 'Kiara Advani', 55),
(14, 'Kshanam', 'Ravikanth Perepu', 'Thriller', 2016, 15, 'Adivi Sesh', 'Adah Sharma', 35),
(15, 'Ninne Pelladatha', 'K. Raghavendra Rao', 'Romance', 1996, 10, 'Akkineni Nagarjuna', 'Tabu', 10),
(16, 'Ala Vaikunthapurramuloo', 'Trivikram Srinivas', 'Action/Drama', 2020, 20, 'Allu Arjun', 'Pooja Hegde', 75),
(17, 'Sankarabharanam', 'K. Vishwanath', 'Musical Drama', 1980, 12, 'J. V. Somayajulu', 'Suman', 5),
(18, 'Malliswari', 'K. Vijaya Bhaskar', 'Romantic Comedy', 2004, 15, 'Venkatesh', 'Katrina Kaif', 30),
(19, 'Yevadu', 'Vamsi Paidipally', 'Action', 2014, 18, 'Ram Charan', 'Shruti Haasan', 85),
(20, 'Naa Peru Surya, Naa Illu India', 'Vakkantam Vamsi', 'Action', 2018, 20, 'Allu Arjun', 'Anu Emmanuel', 90),
(21, 'Chennai Express', 'Rohit Shetty', 'Action/Comedy', 2013, 15, 'Shah Rukh Khan', 'Deepika Padukone', 40),
(22, 'Vedam', 'Krishna Vamsi', 'Drama', 2010, 12, 'Allu Arjun', 'Kangana Ranaut', 20),
(23, 'Yamudiki Mogudu', 'E. V. V. Satyanarayana', 'Comedy', 2012, 10, 'Kali Charan', 'Kajal Aggarwal', 25),
(24, 'Rangasthalam', 'Sukumar', 'Action/Drama', 2018, 18, 'Ram Charan', 'Samantha Ruth Prabhu', 80),
(25, 'Pushpa: The Rise', 'Sukumar', 'Action/Drama', 2021, 20, 'Allu Arjun', 'Rashmika Mandanna', 100),
(26, 'Dookudu', 'Srinu Vaitla', 'Action/Comedy', 2011, 15, 'Mahesh Babu', 'Kajal Aggarwal', 60),
(27, 'Oopiri', 'Vamsi Paidipally', 'Drama', 2016, 12, 'Nagarjuna', 'Karthi', 50),
(28, 'Mahanati', 'Nag Ashwin', 'Biography/Drama', 2018, 18, 'Keerthy Suresh', 'Savitri', 40),
(29, 'Agnyaathavaasi', 'Trivikram Srinivas', 'Action/Drama', 2018, 20, 'Pawan Kalyan', 'Keerthy Suresh', 30),
(30, 'Nenu Local', 'Trinadha Rao Nakkina', 'Romantic Comedy', 2017, 12, 'Nani', 'Keerthy Suresh', 55),
(31, 'Naa Ninnu Pardhuve', 'R. Kannan', 'Romance', 2004, 10, 'Uday Kiran', 'Sreya', 15),
(32, 'Akhil', 'V. V. Vinayak', 'Action', 2015, 15, 'Akhil Akkineni', 'Kajal Aggarwal', 20),
(33, 'Kavacham', 'Sreenivas Mamidi', 'Action/Thriller', 2018, 18, 'Bellamkonda Sreenivas', 'Kajal Aggarwal', 25),
(34, 'Naa Peru Surya', 'Vakkantam Vamsi', 'Action/Drama', 2018, 20, 'Allu Arjun', 'Anu Emmanuel', 75),
(35, 'Sarrainodu', 'Boyapati Srinu', 'Action', 2017, 15, 'Allu Arjun', 'Rakul Preet Singh', 80),
(36, 'Krishnam Vande Jagadgurum', 'Krish Jagarlamudi', 'Action/Drama', 2012, 12, 'Rana Daggubati', 'Kajal Aggarwal', 50),
(37, 'Geethanjali', 'Priyadarshan', 'Romantic Comedy', 2012, 10, 'Akkineni Nagarjuna', 'Srinidhi Shetty', 30),
(38, 'Manam', 'Vikram Kumar', 'Drama', 2014, 15, 'Naga Chaitanya', 'Samantha Ruth Prabhu', 40),
(39, 'Pelli Sandadi', 'K. Raghavendra Rao', 'Musical', 1996, 10, 'Prabhu Deva', 'Sridevi', 5),
(40, 'Bharat Ane Nenu', 'Koratal Shiva', 'Action', 2018, 20, 'Mahesh Babu', 'Kiara Advani', 70),
(41, 'Oopiri', 'Vamsi Paidipally', 'Drama', 2016, 12, 'Nagarjuna', 'Karthi', 45),
(42, 'Eega', 'S.S. Rajamouli', 'Fantasy', 2012, 15, 'Nani', 'Samantha Ruth Prabhu', 80),
(43, 'Nene Raju Nene Mantri', 'Teja', 'Drama', 2017, 18, 'Rana Daggubati', 'Kajal Aggarwal', 30),
(44, 'Jersey', 'Gowtam Tinnanuri', 'Sports Drama', 2019, 20, 'Nani', 'Shraddha Srinath', 50),
(45, 'Oh Baby', 'B.V.S. Ravi', 'Comedy/Drama', 2019, 15, 'Lakshmi', 'Samantha Ruth Prabhu', 20),
(46, 'Sye Raa Narasimha Reddy', 'Surender Reddy', 'Historical', 2019, 20, 'Chiranjeevi', 'Nayanthara', 40),
(47, 'Super Deluxe', 'Thiagarajan Kumararaja', 'Drama/Comedy', 2019, 15, 'Vijay Sethupathi', 'Tamannaah Bhatia', 25),
(48, 'Nishabdham', 'Hemant Madhukar', 'Thriller', 2020, 20, 'Madhavan', 'Anushka Shetty', 15),
(49, 'Vakeel Saab', 'Venu Sriram', 'Legal Drama', 2021, 18, 'Pawan Kalyan', 'Shruti Haasan', 30),
(50, 'Yevadu', 'Vamsi Paidipally', 'Action', 2014, 15, 'Ram Charan', 'Shruti Haasan', 50),
(51, 'rrr', 'rajamoile', 'friction', 2022, 100, 'ramcharan', 'sits', 0),
(52, 'OG', 'rajamoile', 'gangster', 2022, 100, 'pk', 'dishapatani', 0),
(53, 'Kaa', 'kiran', 'thriller', 2024, 50, 'kiran ', 'disha patani', 10);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `purchase_id` int(11) NOT NULL,
  `purchase_date` date NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `payment_mode` varchar(50) NOT NULL,
  `cd_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `cust_phone_num` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`purchase_id`, `purchase_date`, `total_amount`, `payment_mode`, `cd_id`, `quantity`, `cust_phone_num`) VALUES
(15, '2024-10-31', '30.00', '', 3, 1, NULL),
(16, '2024-10-31', '18.00', '', 13, 1, NULL),
(17, '2024-10-31', '45.00', '', 6, 3, NULL),
(18, '2024-10-31', '20.00', '', 2, 1, NULL),
(19, '2024-10-31', '20.00', '', 2, 1, NULL),
(20, '2024-10-31', '20.00', '', 2, 1, NULL),
(21, '2024-10-31', '45.00', '', 3, 3, NULL),
(22, '2024-10-31', '40.00', '', 11, 4, NULL),
(23, '2024-10-31', '45.00', '', 14, 3, NULL),
(24, '2024-10-31', '12.00', '', 17, 1, NULL),
(25, '2024-10-31', '12.00', 'cash', 17, 1, NULL),
(31, '2024-11-01', '40.00', 'cash', 2, 2, NULL),
(32, '2024-11-01', '20.00', 'cash', 2, 1, NULL),
(33, '2024-11-01', '18.00', 'cash', 13, 1, NULL),
(34, '2024-11-01', '20.00', 'cash', 2, 1, NULL),
(35, '2024-11-01', '18.00', 'cash', 13, 1, NULL),
(36, '2024-11-01', '40.00', 'phonepe', 2, 2, NULL),
(37, '2024-11-01', '18.00', 'phonepe', 19, 1, NULL),
(38, '2024-11-01', '40.00', 'phonepe', 2, 2, NULL),
(39, '2024-11-01', '18.00', 'phonepe', 19, 1, NULL),
(40, '2024-11-01', '15.00', '', 3, 1, NULL),
(41, '2024-11-01', '15.00', '', 3, 1, NULL),
(42, '2024-11-01', '15.00', '', 3, 1, NULL),
(43, '2024-11-01', '15.00', '', 3, 1, NULL),
(52, '2024-11-01', '12.00', 'phonepe', 4, 1, '9381305134'),
(53, '2024-11-01', '12.00', 'phonepe', 4, 1, '9381305134'),
(54, '2024-11-01', '12.00', 'phonepe', 4, 1, '9381305134'),
(55, '2024-11-01', '12.00', 'phonepe', 4, 1, '9381305134'),
(56, '2024-11-01', '12.00', 'phonepe', 4, 1, '9381305134'),
(57, '2024-11-01', '12.00', 'phonepe', 4, 1, '9381305134'),
(58, '2024-11-01', '12.00', 'phonepe', 4, 1, '9381305134'),
(59, '2024-11-03', '15.00', 'cash', 3, 1, '6301056499'),
(60, '2024-11-03', '100.00', 'cash', 52, 1, '6301056499'),
(61, '2024-11-03', '10.00', 'phonepe', 5, 1, '09381305134'),
(62, '2024-11-03', '12.00', 'phonepe', 4, 1, '06301056499'),
(63, '2024-11-03', '15.00', '', 3, 1, '06301056499'),
(64, '2024-11-03', '15.00', 'phonepe', 3, 1, '9381305134'),
(65, '2024-11-03', '15.00', 'phonepe', 3, 1, '9381305134'),
(66, '2024-11-03', '15.00', 'phonepe', 45, 1, '06301056499'),
(68, '2024-11-03', '135.00', 'phonepe', 1, 9, '9381305134');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_items`
--

CREATE TABLE `purchase_items` (
  `item_id` int(11) NOT NULL,
  `purchase_id` int(11) DEFAULT NULL,
  `cd_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sale_id` int(11) NOT NULL,
  `purchase_date` date NOT NULL,
  `total_sales` decimal(10,2) NOT NULL,
  `total_profit` decimal(10,2) DEFAULT NULL,
  `total_loss` decimal(10,2) DEFAULT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `profit` decimal(10,2) DEFAULT NULL,
  `loss` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sale_id`, `purchase_date`, `total_sales`, `total_profit`, `total_loss`, `total_amount`, `profit`, `loss`) VALUES
(7, '2024-10-31', '30.00', '6.00', '3.00', '0.00', NULL, NULL),
(8, '2024-10-31', '18.00', '3.60', '1.80', '0.00', NULL, NULL),
(9, '2024-10-31', '45.00', '9.00', '4.50', '0.00', NULL, NULL),
(10, '2024-10-31', '20.00', '4.00', '2.00', '0.00', NULL, NULL),
(11, '2024-10-31', '20.00', '4.00', '2.00', '0.00', NULL, NULL),
(12, '2024-10-31', '20.00', '4.00', '2.00', '0.00', NULL, NULL),
(13, '2024-10-31', '45.00', '9.00', '4.50', '0.00', NULL, NULL),
(14, '2024-10-31', '40.00', '8.00', '4.00', '0.00', NULL, NULL),
(15, '2024-10-31', '45.00', '9.00', '4.50', '0.00', NULL, NULL),
(17, '2024-11-03', '207.00', '41.40', '20.70', '0.00', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cds`
--
ALTER TABLE `cds`
  ADD PRIMARY KEY (`cd_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`purchase_id`),
  ADD KEY `cd_id` (`cd_id`);

--
-- Indexes for table `purchase_items`
--
ALTER TABLE `purchase_items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `purchase_id` (`purchase_id`),
  ADD KEY `cd_id` (`cd_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sale_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cds`
--
ALTER TABLE `cds`
  MODIFY `cd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `purchase_items`
--
ALTER TABLE `purchase_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_ibfk_1` FOREIGN KEY (`cd_id`) REFERENCES `cds` (`cd_id`);

--
-- Constraints for table `purchase_items`
--
ALTER TABLE `purchase_items`
  ADD CONSTRAINT `purchase_items_ibfk_1` FOREIGN KEY (`purchase_id`) REFERENCES `purchases` (`purchase_id`),
  ADD CONSTRAINT `purchase_items_ibfk_2` FOREIGN KEY (`cd_id`) REFERENCES `cds` (`cd_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
