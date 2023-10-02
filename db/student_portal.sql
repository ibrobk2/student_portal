-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2023 at 06:06 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `app_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `full_name`, `email`, `phone`, `program`, `address`, `status`, `created_on`, `app_no`) VALUES
(1, 'Usman Umar', 'usman@gmail.com', '8968648486', 'Software Engineering', 'Kakumi Bakori LGA', 'pending', '2023-10-01 18:52:23', ''),
(2, 'Yusuf Sani', 'ysan@gmail.com', '898537583', 'Computer Science', 'No 12 Mani Road, Katsina', 'pending', '2023-10-01 21:42:15', '433964'),
(3, 'Yahaya Sani', 'yahaya@gmail.com', '98763567', 'Software Engineering', 'Barhim Katsina', 'pending', '2023-10-02 11:54:17', '822047'),
(4, 'Umar Sani', 'umar@gmail.com', '9779695675', 'Software Engineering', 'Katsina', 'pending', '2023-10-02 12:47:29', '584796'),
(5, 'Usman Yusuf', 'usmany@gmail.com', '087986868', 'Computer Science', 'Kofar Yandaka', 'pending', '2023-10-02 15:18:33', '434477');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `reg_number` varchar(20) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `rrr` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`reg_number`, `full_name`, `department`, `course`, `level`, `password`, `username`, `email`, `phone`, `rrr`) VALUES
('', 'Muhammad Idris', NULL, NULL, NULL, '123456', 'muhammad', 'muhammadidris@gmail.com', '08037577490', NULL),
('1', '', '', '', '', '123456', 'ibrobk', '', '', ''),
('123213', 'yahaya', 'comp', 'comp', '100', '123456', 'yahayas', '', '', '112233'),
('123214', 'Yusuf Salisu', NULL, NULL, NULL, '123456', 'yusuf', 'yusuf@gmail.com', '098657890', NULL),
('123215', 'Yusuf Sani', NULL, NULL, NULL, '123456', 'ysani', 'ysani@gmail.com', '0813536363778', NULL),
('123216', 'Samira Aliyu', NULL, NULL, NULL, '123456', 'samira', 'samira@yahoo.com', '090979808', NULL),
('123217', 'Usman Yusuf', NULL, NULL, NULL, '123456', 'usmany', 'usmany@gmail.com', '98756786', NULL),
('257253', 'Usman Lawal', NULL, NULL, NULL, '123456', 'ussy', 'ussy@gmail.com', '96969869', NULL),
('908987', 'Yahaya Sani', NULL, NULL, NULL, '123456', 'ysn', 'ysan@gmail.com', '089786754567', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `reg_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `payment_category` varchar(100) NOT NULL,
  `app_no` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rrr` varchar(100) NOT NULL,
  `ref` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `full_name`, `reg_number`, `email`, `payment_category`, `app_no`, `amount`, `status`, `created_on`, `rrr`, `ref`, `session`) VALUES
(1, 'Yahaya Sani', '822047', '', 'Application Fee', '', '10000', '', '2023-10-02 12:16:43', '', '874850', ''),
(2, 'Usman Lawal', '122324', '', 'School Fees', '', '250000', '', '2023-10-02 12:30:32', '', '912569', '2023/2024'),
(3, 'Umar Sani', '584796', 'umar@gmail.com', 'Application Fee', '584796', '10000', '', '2023-10-02 12:48:02', '584796', '630764', '2023/2024'),
(4, 'Usman Yusuf', '434477', 'usmany@gmail.com', 'Application Fee', '434477', '10000', '', '2023-10-02 15:19:54', '434477', '819868', '2023/2024');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`reg_number`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
