-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2024 at 07:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `openedu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` varchar(6) NOT NULL,
  `Admin_Name` varchar(50) NOT NULL,
  `Admin_Password` varchar(255) NOT NULL,
  `Email_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Admin_Name`, `Admin_Password`, `Email_ID`) VALUES
('AD1001', 'Hrithik Acharjee', 'hrithik_admin_password1', 'hrithik@openedu.com'),
('AD1002', 'Nafiul Islam Nabil', 'nabil_admin_password2', 'nabil@openedu.com');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `Donation_ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Donated_Item` varchar(100) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Donated_Amount` decimal(10,2) DEFAULT NULL,
  `Donor_ID` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`Donation_ID`, `Date`, `Donated_Item`, `Quantity`, `Donated_Amount`, `Donor_ID`) VALUES
(1, '2024-12-01', 'Notebook', 50, NULL, 'DO1001'),
(2, '2024-12-02', 'Pen', 100, NULL, 'DO1002'),
(3, '2024-12-03', NULL, NULL, 5000.00, 'DO1001'),
(4, '2024-12-04', 'Calculator', 10, 3000.00, 'DO1002');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `Donor_ID` varchar(6) NOT NULL,
  `Donor_Category` enum('Individual','Organization') DEFAULT NULL,
  `Donation_Type` varchar(50) DEFAULT NULL,
  `Total_Donated_Material` int(11) DEFAULT 0,
  `Total_Donated_Amount` decimal(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`Donor_ID`, `Donor_Category`, `Donation_Type`, `Total_Donated_Material`, `Total_Donated_Amount`) VALUES
('DO1001', 'Individual', 'Material', 150, 5000.00),
('DO1002', 'Organization', 'Both', 300, 10000.00);

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `Receiver_ID` varchar(6) NOT NULL,
  `Receiver_Category` enum('Individual','Organization') DEFAULT NULL,
  `Total_Received_Material` int(11) DEFAULT 0,
  `Total_Received_Amount` decimal(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`Receiver_ID`, `Receiver_Category`, `Total_Received_Material`, `Total_Received_Amount`) VALUES
('RE1001', 'Individual', 50, 2000.00),
('RE1002', 'Organization', 100, 4000.00);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `Request_ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Requested_Item` varchar(100) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Requested_Amount` decimal(10,2) DEFAULT NULL,
  `Receiver_ID` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`Request_ID`, `Date`, `Requested_Item`, `Quantity`, `Requested_Amount`, `Receiver_ID`) VALUES
(1, '2024-12-01', 'Notebook', 20, NULL, 'RE1001'),
(2, '2024-12-02', 'Pencil', 50, NULL, 'RE1002'),
(3, '2024-12-03', NULL, NULL, 1500.00, 'RE1001'),
(4, '2024-12-04', 'Calculator', 5, 2000.00, 'RE1002');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` varchar(6) NOT NULL,
  `User_Password` varchar(255) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Contact_No` varchar(15) NOT NULL,
  `Email_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `User_Password`, `First_Name`, `Last_Name`, `Contact_No`, `Email_ID`) VALUES
('DO1001', 'hashed_password1', 'Mohammad', 'Hasan', '01712345678', 'mhasan@gmail.com'),
('DO1002', 'hashed_password2', 'Anika', 'Rahman', '01822345679', 'arahman@gmail.com'),
('RE1001', 'hashed_password3', 'Shakib', 'Ahmed', '01632345680', 'sahmed@gmail.com'),
('RE1002', 'hashed_password4', 'Runa', 'Begum', '01542345681', 'rbegum@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`),
  ADD UNIQUE KEY `Email_ID` (`Email_ID`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`Donation_ID`),
  ADD KEY `Donor_ID` (`Donor_ID`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`Donor_ID`);

--
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
  ADD PRIMARY KEY (`Receiver_ID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`Request_ID`),
  ADD KEY `Receiver_ID` (`Receiver_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `Email_ID` (`Email_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `Donation_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `Request_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`Donor_ID`) REFERENCES `donor` (`Donor_ID`);

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `donor_ibfk_1` FOREIGN KEY (`Donor_ID`) REFERENCES `user` (`User_ID`);

--
-- Constraints for table `receiver`
--
ALTER TABLE `receiver`
  ADD CONSTRAINT `receiver_ibfk_1` FOREIGN KEY (`Receiver_ID`) REFERENCES `user` (`User_ID`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`Receiver_ID`) REFERENCES `receiver` (`Receiver_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
