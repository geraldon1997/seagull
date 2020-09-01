-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2020 at 10:13 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seagull`
--

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `id` int(11) NOT NULL,
  `tracking_id` varchar(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `receiver_addr` varchar(255) NOT NULL,
  `qgoods` int(50) NOT NULL,
  `nature_of_goods` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `current_location` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `ddate` date NOT NULL,
  `adate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`id`, `tracking_id`, `sender`, `receiver`, `email`, `receiver_addr`, `qgoods`, `nature_of_goods`, `destination`, `current_location`, `status`, `ddate`, `adate`) VALUES
(1, 'SS-f18B5opG', 'adsfd', 'asd', '', '', 3, 'unknown', 'poland', 'san francisco', 'on transit', '2015-08-30', '2020-08-31'),
(2, 'SS-H753pYq9', 'kaite', 'parkwell', '', '', 10, 'unknown', 'taiwan', 'taiwan', 'on transit', '2020-08-30', '2020-09-01'),
(3, 'SS-0f9A2owY', 'paul', 'mary shaw', '', '', 4, 'unknown', 'chicago', 'china', 'on transit', '2020-09-01', '2020-09-03'),
(4, 'SS-3dSqZ7rB', 'baiu', 'anin', 'amyk@gmail', '', 10, 'sbldoui', 'bs', 'skhvsi', 'bsi', '2020-09-01', '2020-09-03'),
(5, 'SS-kSNZBr31', 'hhvhs', 'sd hjk', 'hbisc@web', '', 0, '1', 'bain', 'dkgvsyu', 'were', '2020-09-01', '2020-09-03'),
(6, 'SS-eTf6xN53', 'ajk', 'ga', 'y@ewm', '', 3, 'ad', 'sd', 'sdf', 'wqer', '2020-09-01', '2020-09-03'),
(7, 'SS-8k0BYdiq', 'ajk', 'bjdsk', 'd@wqe', 'ghkdsas h', 3, 'fhvj', 'chgv', 'gvh', 'hui', '2020-09-08', '2020-09-10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'seagullsbd', '', '$2y$10$/sEEI7lgKbiEe8AD0UK6..8fYnFGeQP3iHAuZ8whCj/Vkb1Wpost2', 1),
(2, 'pitoff', '', '$2y$10$OBx54Cv2WpxZ4R8/kvZxqe1zczjaXtFOLmqtF9J43YamkCyn4z1ju', 1),
(3, 'amyk', 'amyk@gmail', '$2y$10$dHybXfaT4kq8fJglotKFiuxnf1e9jd.NOCZPLi22rMJIHZ2Wdge3q', 2),
(4, 'frank', 'f@gmail.com', '$2y$10$StsK/JWed11s7.ZFRRdep.wTb7tFMChqnAee5fJyI/F5LnGsZdZu2', 2),
(5, 'ebs', 'ewb@WEFG', '$2y$10$pf6jsui686MsCxY977OgKOFA/6yD2rtMt8moCZ9s0iwfel1y7F86G', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
