-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2020 at 12:09 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consults`
--

-- --------------------------------------------------------

--
-- Table structure for table `consultations`
--

CREATE TABLE `consultations` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `issue` varchar(255) NOT NULL,
  `date_sent` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `downloads` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultations`
--

INSERT INTO `consultations` (`id`, `username`, `service`, `image`, `issue`, `date_sent`, `downloads`) VALUES
(1, '', 'network ', 'TheCaptain.docx', ' This is a trial', '2020-10-27 13:58:50', 0),
(2, '', 'webdesign', 'poem.txt', ' This is trial number 2', '2020-10-27 14:05:47', 0);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(15) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `sname`, `username`, `email`, `mobile`, `user_type`, `password`) VALUES
(1, 'Nicholas', 'Odhiambo', '@nic_odhis', 'odhiambocolas@gmail.com', 746659764, 'admin', '6304b92fd983bd2855d76510fc689f4c'),
(2, 'Aphline', 'Auma', 'aphy', 'aphline2017auma@gmail.com', 703412927, 'user', 'aafb6955ddd4f789b34253175b4746e4'),
(3, 'Kevin', 'Omondi', '@kevo', 'omondikevin@gmail.com', 748291874, 'user', 'fcfff28fdbbbf75face3b3d97fdbfc15'),
(4, 'Wayne', 'Rooney', '@rooney', 'rooney.wayne@gmail.com', 765645323, 'user', '09510a3ad8975b25b12efa7db7342664'),
(5, 'Chara', 'Maina', 'mainachara', 'mainachara@gmail.com', 789546327, 'user', 'ad18473b6ce029021ee928451a874753'),
(6, 'Brian', 'Chesa', '@chunli', 'briansirima@gmail.com', 704092480, 'user', '92c32fae70e45033b38491091e3a1a0c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultations`
--
ALTER TABLE `consultations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consultations`
--
ALTER TABLE `consultations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
