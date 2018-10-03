-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 10:52 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `index_no` varchar(8) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `firstname`, `lastname`, `email`, `index_no`, `password`) VALUES
(10, 'Akos', 'Kofi', 'akos@gamil.com', '10536896', '5f4dcc3b5aa765d61d8327deb882cf99'),
(11, 'Abu', 'Kofi', 'abu@gmail.com', '12345678', '5f4dcc3b5aa765d61d8327deb882cf99'),
(12, 'Eorm', 'Seshie', 'elorm@tmail.com', '11111111', '5f4dcc3b5aa765d61d8327deb882cf99'),
(13, 'Dennis', 'Waitely', 'den@ymail.com', '10536896', '827ccb0eea8a706c4c34a16891f84e7b'),
(14, 'Yaw', 'Yaw', 'yaw@tmail.com', '10303030', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `stud_info`
--

CREATE TABLE `stud_info` (
  `id` int(11) NOT NULL,
  `id_number` varchar(8) NOT NULL,
  `hometown` varchar(50) NOT NULL,
  `disability` varchar(50) NOT NULL,
  `city` varchar(80) NOT NULL,
  `gender` varchar(80) NOT NULL,
  `hostel` varchar(80) NOT NULL,
  `next_of_kin` varchar(80) NOT NULL,
  `home_add` varchar(80) NOT NULL,
  `course` varchar(80) NOT NULL,
  `affect_area` varchar(80) NOT NULL,
  `phone_number` varchar(80) NOT NULL,
  `status` varchar(80) NOT NULL,
  `guard_name` varchar(80) NOT NULL,
  `dob` varchar(80) NOT NULL,
  `nationality` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_info`
--

INSERT INTO `stud_info` (`id`, `id_number`, `hometown`, `disability`, `city`, `gender`, `hostel`, `next_of_kin`, `home_add`, `course`, `affect_area`, `phone_number`, `status`, `guard_name`, `dob`, `nationality`) VALUES
(1, '10101010', 'akuapem', 'no', 'accra', 'female', 'evandy', 'yaw', 'kw d13', 'kw d13', 'none', '1111111111', 'single', 'kofi', '2013-02-02', 'ghanaian'),
(2, '10536896', 'akuapem', 'no', 'accra', 'female', 'evandy', 'yaw', 'kw d13', 'kw d13', 'none', '1111111111', 'divorced', 'kofi', '2021-03-29', 'ghanaian'),
(3, '10536896', 'Bolga', 'no', 'Kumasi', 'male', 'Sarbah', 'joshua', 'E437/15', 'Maths', 'Nima', '024578955', 'married', 'Atia', '2012-11-05', 'Togolese'),
(4, '12345678', 'Buip3', 'yes', 'Tamale', 'female', 'Volta', 'Gabriel', 'E437/15', 'Science', 'Nose', '5255555555', 'divorced', 'Afi', '2003-07-05', 'Togolese'),
(5, '12345678', 'Suhum', 'yes', 'Accra', 'male', 'CommonWealth', 'Kevin', 'M2523', 'Com Science', 'Finger', '0222222', 'married', 'Koko', '', ''),
(6, '10536896', 'Sogakop3', 'no', 'Akuapim', 'female', 'Akuaffo', 'Dodoo', 'TL 2345', 'Dance', 'Teeth', '0245858585', 'single', 'Atiamo', '2009-03-10', 'Ivorian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud_info`
--
ALTER TABLE `stud_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `stud_info`
--
ALTER TABLE `stud_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
