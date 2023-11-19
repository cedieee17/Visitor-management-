-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 01:36 PM
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
(1, 'arnie@gmail.com', 'User logged in', '2023-11-05 21:36:08'),
(2, 'arnie@gmail.com', 'User logged in', '2023-11-05 21:37:49'),
(3, 'arnie@gmail.com', 'User logged out', '2023-11-05 21:37:59'),
(4, 'jonas@gmail.com', 'User logged in', '2023-11-05 21:39:17'),
(5, 'jonas@gmail.com', 'User logged out', '2023-11-05 21:39:23'),
(6, 'ako@gmail.com', 'User logged in', '2023-11-05 21:42:49'),
(7, 'ako@gmail.com', 'User logged out', '2023-11-05 21:42:52'),
(8, 'jonas@gmail.com', 'User logged in', '2023-11-05 21:43:03'),
(9, 'jonas@gmail.com', 'User logged out', '2023-11-05 21:43:06'),
(10, 'jonas@gmail.com', 'User logged in', '2023-11-05 21:44:19'),
(11, 'jonas@gmail.com', 'User logged out', '2023-11-05 21:44:21'),
(12, 'jonas@gmail.com', 'User logged in', '2023-11-05 21:45:50'),
(13, 'jonas@gmail.com', 'User logged out', '2023-11-05 21:45:52'),
(14, 'jonas@gmail.com', 'User logged in', '2023-11-05 21:48:03'),
(15, 'jonas@gmail.com', 'User logged out', '2023-11-05 21:48:05'),
(16, 'dasdasda@dsadas.com', 'User logged in', '2023-11-18 23:19:40'),
(17, 'dasdasda@dsadas.com', 'User logged out', '2023-11-18 23:19:41'),
(18, 'jonas@gmail.com', 'User logged in', '2023-11-18 23:19:45'),
(19, 'jonas@gmail.com', 'User logged out', '2023-11-18 23:19:46'),
(20, 'ako@gmail.com', 'User logged in', '2023-11-18 23:19:50'),
(21, 'ako@gmail.com', 'User logged out', '2023-11-18 23:19:51'),
(22, 'jonas@gmail.com', 'User logged in', '2023-11-19 00:03:52'),
(23, 'jonas@gmail.com', 'User logged out', '2023-11-19 00:03:54'),
(24, 'test@gmail.com', 'User logged in', '2023-11-19 01:42:29'),
(25, 'test@gmail.com', 'User logged out', '2023-11-19 01:42:31'),
(26, 'test@gmail.com', 'User logged in', '2023-11-19 01:42:35'),
(27, 'test@gmail.com', 'User logged out', '2023-11-19 01:42:36'),
(28, 'dasdasda@dsadas.com', 'User logged in', '2023-11-19 02:17:30'),
(29, 'dasdasda@dsadas.com', 'User logged out', '2023-11-19 02:17:31'),
(30, 'dasdasda@dsadas.com', 'User logged in', '2023-11-19 02:33:49'),
(31, 'dasdasda@dsadas.com', 'User logged out', '2023-11-19 02:33:56'),
(32, 'dasdasda@dsadas.com', 'User logged in', '2023-11-19 02:36:27'),
(33, 'dasdasda@dsadas.com', 'User logged out', '2023-11-19 02:36:29');

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
(1, 23222, 'dfs@gmail./com', 'waea'),
(2, 342, 'dasdasda@dsadas.com', '$2y$10$Ua/QKe22jVgcjQ7hZW0G9OXbWRGQmQYHAn4WBe'),
(3, 324, 'dasdasda@dsadas.com', '$2y$10$MaKUvztLYl/S62Y3p4ltNORUgewRYEIFBAMU0X'),
(4, 23112312, 'sang23@gmail.com', '$2y$10$Bn5Ii2pPrGKN57Fl.5X9fOTJLyaxKA3xNo66NV'),
(5, 12321321, 'almario@gmail.com', '$2y$10$JEU0.Nn6wIpB5UeaSCgW0.0VgriGoHNqblKxJ2'),
(6, 21321, 'jonaspogi@gmail.com', '$2y$10$EBi7A7RoU6H/kaZt8.aetOXsqRY7.U0yy4Lb1I'),
(7, 1234, 'Pogiako@gmail.com', '$2y$10$5tAXw8mDijtjwVmnRIS78uxkoIOdbcc2K19OZZ'),
(8, 2021306956, 'axlmanalang@gmail.com', '$2y$10$uvycfuf49XufT0qSepy5UOyhol/Mdo86RStFCX'),
(9, 2021306956, '2021306956@dvsu.edu.ph', '$2y$10$SIHYc0lIXH0R6kmda4DL.eq/2OomZCCAHz7OyR'),
(10, 21312312, 'almario@gmail.com', '$2y$10$xOVcpmlkEA8dISGdxD/8fe1pQx.KSb.vbkrTvw'),
(11, 123, 'asd@gmail.com', '$2y$10$gPmjJ.WaS2kgoRH0dmkzw.iX.tyhKP1oa.G6wi'),
(12, 12345, 'jonas@gmail.com', '$2y$10$EVSjOIamFqtJcAHxqV8Wdu5Sx.1aipw0MlpLDy'),
(13, 54321, 'ako@gmail.com', '$2y$10$8waiAnjkSIFbLO1ELYgY.udsVZEzk3SFzK/AER'),
(14, 2021306956, 'arnie@gmail.com', '$2y$10$b.DCOke2yOAXNAm8eerr1O3fKSMgH9B06ExNEV'),
(15, 0, '', '$2y$10$H6bh8oIogOJJ/5xfu/Imw.XIgBVq4cSk07p5Qi'),
(16, 1432, 'test@gmail.com', '$2y$10$8iszy1YdFIZ2spf2XY9Og.saQ31aZhuTFazFmd'),
(17, 0, '', '$2y$10$BPjGGwkn/duFBgcwiBdEx.38BbFFUnZ4fYB2Vr'),
(18, 0, '', '$2y$10$dvV3ArkdZCg8w4hs9D3V3ew1crAiLp9BqmziXn'),
(19, 0, '', '$2y$10$pTjdKdJ9DHCGgZqDjT1DcOAN30IW/7ODdO46t0'),
(20, 0, '', '$2y$10$ITfeMLCZzfno00T29JgnGeOFnwHtnMkEG8aGus'),
(21, 0, '', '$2y$10$p84j0TEzasOpAv.4PllAy.cFNpN9kWBDthjUXT'),
(22, 4321, 'dsadsadsa@dada.com', '$2y$10$81CbOhhdj878PMe9e7/UmeTvJxlpChhyyD9Enc'),
(23, 0, '', '$2y$10$TbAt6p9iglDAbRi7QEtdXuoh4a4zfT72TIwRmy'),
(24, 0, '', '$2y$10$vbsUNBwtwUGKHa16nqfxiuyENiYfiA5nX4aXoa'),
(25, 0, '', '$2y$10$Zh9OjP7RGKJHH5T1n7FVqO7QU35HB0dYTW09Ou'),
(26, 0, '', '$2y$10$TchBx8g5obOU3860PnePROSVVeC8gsF3h2yP2p'),
(27, 0, '', '$2y$10$1l7ETwgXY9iV2UbSArPbG.v6K9w3FoM480GNcq'),
(28, 0, '', '$2y$10$WkQ88IZMQtqH2DMo5wFcnOyiT2cscGvbSLNAYY'),
(29, 0, '', '$2y$10$ndAE9m.6ljQJ0iJew7fc4.nWmhKngRpgcdjuH7'),
(30, 0, '', '$2y$10$onLfykZGT2k5sOc0iKwj1eECJkfWXQK.p5TZ7b');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `Id` int(11) NOT NULL,
  `FullName` text NOT NULL,
  `Contact` int(11) NOT NULL,
  `Purpose` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`Id`, `FullName`, `Contact`, `Purpose`) VALUES
(1, 'jonas almario', 2147483647, 'just want to visit dhvsu'),
(2, '', 0, '');

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
