-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 10:58 PM
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
-- Database: `dbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `audit_trail`
--

CREATE TABLE `audit_trail` (
  `Id` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `audit_trail`
--

INSERT INTO `audit_trail` (`Id`, `Email`, `Description`, `Timestamp`) VALUES
(34, 'fdasfasfafs@gmail.com', 'User logged in', '2023-11-20 03:26:54'),
(35, 'fdasfasfafs@gmail.com', 'User logged out', '2023-11-20 03:27:26'),
(36, 'okok@gmail.com', 'User logged in', '2023-11-20 03:49:35'),
(37, 'okok@gmail.com', 'User logged in', '2023-11-20 04:14:32'),
(38, 'okok@gmail.com', 'User logged in', '2023-11-20 04:14:47'),
(39, 'okok@gmail.com', 'User logged in', '2023-11-20 04:15:26'),
(40, 'okok@gmail.com', 'User logged in', '2023-11-20 04:18:51'),
(41, 'okok@gmail.com', 'User logged in', '2023-11-20 04:20:33'),
(42, 'okok@gmail.com', 'User logged in', '2023-11-20 04:21:10'),
(43, 'popo@gmail.com', 'User logged in', '2023-11-20 04:22:17'),
(44, 'popo@gmail.com', 'User logged in', '2023-11-20 04:28:00'),
(45, 'popo@gmail.com', 'User logged in', '2023-11-20 05:46:51'),
(46, 'popo@gmail.com', 'User logged in', '2023-11-20 05:49:23'),
(47, 'popo@gmail.com', 'User logged out', '2023-11-20 05:49:31');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Id` int(11) NOT NULL,
  `StudentId` int(11) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `StudentId`, `Email`, `Password`) VALUES
(5, 12323123, 'okok@gmail.com', 'okok'),
(31, 54321, 'buto@kanan.com', '$2y$10$qZJH5.dJdOl0cwhMyoroquGeLObTvC0G68tWFl'),
(32, 6543321, 'fdasfasfafs@gmail.com', '$2y$10$vAd0FEY/ZoIt597.vJ5DReG13EVyVd.5lsiXv6'),
(100, 12323123, 'okok@gmail.com', 'okok'),
(101, 76543, 'butu@kanan.com', '$2y$10$ehOB6amZNTNvWTLJ/.w.zOpti/ulxLvxy93Qlz'),
(102, 1212121212, 'popo@gmail.com', '$2y$10$XSH6DMUOxlf2EdZb8CbyS.yYhMe461ODr03M7t'),
(103, 0, '', '$2y$10$qgZ/ZVqp0jw0u3hlpMZy9.ni4nfLHNrTUlw2p2'),
(104, 2147483647, '12312312@gmail.com', '$2y$10$ftRPkAG/Z0nKXoZj4TBShO7IUhiWmOBzl8kSYT'),
(105, 0, '', '$2y$10$./fGu1JWUYPwEHR30PmrP.M/zebcUW9.fmqcGU'),
(106, 0, '', '$2y$10$BwZOS4fQUk/6uKrDYaC7Y.YEUyaDCWbHK/XzT8'),
(107, 0, '', '$2y$10$9Y0MGDQ7G1RrOwwOPFn1.uCWiG4Im2A4FE0x7Q'),
(108, 0, '', '$2y$10$3nl6.3PS8CsZVdvbe5LsoOy3mpsl32Um0gmuMd'),
(109, 0, '', '$2y$10$hos.q0lMTFA19BcATF9mO.IrXwVpSb8WFBq4m4'),
(110, 0, '', '$2y$10$3sncO78TVdq2yOVXYKO.xearHARQvjIc3l9cky'),
(111, 0, '', '$2y$10$VwD2cL/FY93pSNJaqSBiSeLm.m0uqLgkiiyGeW'),
(112, 0, '', '$2y$10$2Lcj3ycYtDhb5Sw7MepIU.eP.yoDJ19LhlAu6s'),
(113, 0, '', '$2y$10$KkEAK14olYSnfwMbSLM/VeFWK90S5yAZ45dud8'),
(114, 0, '', '$2y$10$HWKr5YZzdrGPlm7DmptmDeItSYvPcTTQ1lLD8b');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `Id` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `Id` int(11) NOT NULL,
  `FullName` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Purpose` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`Id`, `FullName`, `Email`, `Contact`, `Purpose`) VALUES
(5, 'jonas almario', 'jonas@gmail.com', 21312312, 'sdasdasda'),
(6, '', '', 0, ''),
(7, 'jonas almario', 'jonas@gmail.com', 2147483647, 'sadasdsad'),
(8, 'jonas almario', 'okok@gmail.com', 2147483647, 'dsadasdsa'),
(9, '', '', 0, ''),
(10, 'jonas almario', 'jonas@gmail.com', 2147483647, 'eqweqw'),
(11, '', '', 0, ''),
(12, '', '', 0, ''),
(13, 'dasdasdasdas', 'dasdasda@dsadas.com', 21312312, 'sadasddas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `audit_trail`
--
ALTER TABLE `audit_trail`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit_trail`
--
ALTER TABLE `audit_trail`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
