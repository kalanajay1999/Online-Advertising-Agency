-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 05:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online advertising agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `createad`
--

CREATE TABLE `createad` (
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact_Number` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Identity_Num` varchar(100) NOT NULL,
  `Ad_Type` varchar(100) NOT NULL,
  `Audience` varchar(100) NOT NULL,
  `Time` int(11) NOT NULL,
  `Budget` int(11) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `createad`
--

INSERT INTO `createad` (`Name`, `Address`, `Contact_Number`, `Email`, `Identity_Num`, `Ad_Type`, `Audience`, `Time`, `Budget`, `Description`, `ID`) VALUES
('Mithun Madeeshan', '166/3, 3rd lane, Melwaththa, Wariyapola', 702154787, 'mithunariyarathna123@gmail.com', '981932331', 'mithun', 'men', 12, 0, '', 5),
('Mithun Madeeshan', '166/3, 3rd lane, Melwaththa, Wariyapola', 702154787, 'mithunariyarathna123@gmail.com', '981932331', 'mithun', 'men', 12, 0, '', 6),
('Mithun Madeeshan', '166/3, 3rd lane, Melwaththa, Wariyapola', 702154787, 'mithunariyarathna123@gmail.com', '981932331', 'mithun', 'men', 12, 0, '', 7),
('', '', 0, '', '', 'mithun', 'men', 12, 0, '', 8),
('', '', 0, '', '', 'mithun', 'men', 12, 0, '', 9),
('Mithun Madeeshan', '166/3, 3rd lane, Melwaththa, Wariyapola', 702154787, 'mithunariyarathna123@gmail.com', '981932331', 'mithun', 'men', 12, 0, '', 10),
('Mithun Madeeshan', '166/3, 3rd lane, Melwaththa, Wariyapola', 702154787, 'mithunariyarathna123@gmail.com', '981932331', 'mithun', 'men', 12, 0, '', 11);

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `NO` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`NO`, `Email`) VALUES
(1, 'mithunariyarathna123@gmail.com'),
(2, 'sapumalkumara@gmail.com'),
(3, 'mithunmadeeshan123@gmail.com'),
(4, 'kpanda9898@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `email database`
--

CREATE TABLE `email database` (
  `ID` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID` int(11) NOT NULL,
  `First_name` varchar(100) NOT NULL,
  `Last_name` varchar(100) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Mobile_number` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email_Address` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `First_name`, `Last_name`, `Gender`, `Date_of_Birth`, `Mobile_number`, `Address`, `Email_Address`, `Password`) VALUES
(1, 'Mithun', 'Madeeshan', 'Male', '2020-10-12', 702154787, '166/3, 3rd lane, Melwaththa, Wariyapola\r\nKurunegala', 'mithunariyarathna123@gmail.com', '123456'),
(2, 'kasun', 'Madee', 'Male', '2020-10-29', 702154721, '166/3, 3rd lane, Melwaththa, Wariyapola\r\n', 'mithunariyara123@gmail.com', '123456'),
(3, 'reyttery', 'ryttreyer', 'Male', '2020-10-30', 702154787, '166/3, 3rd lane, Melwaththa, Wariyapola\r\nKurunegala', 'mithunariyarathna123@gmail.com', '789456');

-- --------------------------------------------------------

--
-- Table structure for table `submit`
--

CREATE TABLE `submit` (
  `Total_Budget` int(11) NOT NULL,
  `Target_Customers` varchar(100) NOT NULL,
  `Target_Locations` varchar(100) NOT NULL,
  `Releasing_Date` date NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Days_run` int(11) NOT NULL,
  `Other` varchar(100) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submit`
--

INSERT INTO `submit` (`Total_Budget`, `Target_Customers`, `Target_Locations`, `Releasing_Date`, `Email`, `Days_run`, `Other`, `ID`) VALUES
(1000, 'tsdfgsfg', 'dssdg', '2020-10-13', 'mithunariyarathna123@gmail.com', 12, 'hfghfg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `try`
--

CREATE TABLE `try` (
  `ID` int(11) NOT NULL,
  `Ad_Type` varchar(100) NOT NULL,
  `Audience` varchar(100) NOT NULL,
  `Time` int(11) NOT NULL,
  `Budget` int(11) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `createad`
--
ALTER TABLE `createad`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `email database`
--
ALTER TABLE `email database`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `submit`
--
ALTER TABLE `submit`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `try`
--
ALTER TABLE `try`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `createad`
--
ALTER TABLE `createad`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `email database`
--
ALTER TABLE `email database`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `submit`
--
ALTER TABLE `submit`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `try`
--
ALTER TABLE `try`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
