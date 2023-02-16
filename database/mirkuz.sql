-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 10:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mirkuz`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Date` varchar(30) NOT NULL,
  `Subcity` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `House` int(3) NOT NULL,
  `Passport` varchar(9) NOT NULL,
  `Service` varchar(150) NOT NULL,
  `bookedOn` varchar(30) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `Name`, `Phone`, `Email`, `Date`, `Subcity`, `City`, `House`, `Passport`, `Service`, `bookedOn`) VALUES
(1, 'Girum Berhanu', '0923938609', 'girumberhanugb4@gmail.com', '12/29/2022', 'Akaki Kality', 'Addis Ababa', 1, 'EP1298234', 'Naso-gastric Tube insertion', '2023-02-14 02:51:35'),
(2, 'Witney', '+251923938609', 'witney@gmail.com', '02/25/2023', 'Addis Ketema', 'Addis Ababa', 3, 'EP1298232', 'Catheterization', '2023-02-14 02:52:07'),
(3, 'Meklit Berhanu', '0912345678', 'meklit@gmail.com', '02/22/2023', 'Lideta', 'Addis Ababa', 18, 'EP1298232', 'Injection', '2023-02-14 02:52:34'),
(4, 'Girum Berhanu Anosse', '0923938609', 'girumberhanugb4@gmail.com', '02/17/2023', 'Arada', 'Addis Ababa', 3, 'EP1298232', 'Schedule for Hospital visit', '2023-02-14 03:08:20'),
(5, 'Girum Berhanu', '0923938609', 'giruberhanugb4@gmail.com', '05/04/2023', 'Kolfe Keranio', 'Jimma', 2, 'EP1298290', 'Wound Dressing', '2023-02-14 03:08:46'),
(6, 'Faysel', '0989797868', 'faye@gmail.com', '06/30/2023', 'Yeka', 'Addis Ababa', 23, 'EP1298232', 'Disability Care', '2023-02-14 12:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `nurses`
--

CREATE TABLE `nurses` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurses`
--

INSERT INTO `nurses` (`id`, `name`, `image_url`) VALUES
(3, 'Dagne', 'IMG-63e18ae6eda8f0.33696545.jpg'),
(15, 'Witney', 'IMG-63ed493b0b5e68.99400570.jpg'),
(16, 'Faysel', 'IMG-63ed494a5c65b0.79808026.jpeg'),
(17, 'Michael', 'IMG-63ed4959b9e358.74150934.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(12) DEFAULT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Email`, `Password`) VALUES
('baba', 'baba@gmail.com', 'bababa'),
('biruk', 'biruk@gmail.com', 'biruk12345'),
('ema', 'ema@gmail.com', '1234'),
('Girum', 'girum@gmail.com', '12345'),
('Girum Berhan', 'girumberhanugb4@gmail.com', '1234'),
('mame', 'mame@gmail.com', 'mame123456'),
('Meklit Berha', 'meklit@gmail.com', 'meklit12345'),
('roki', 'roki@gmail.com', 'girum'),
('Witney', 'witney@gmail.com', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurses`
--
ALTER TABLE `nurses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nurses`
--
ALTER TABLE `nurses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
