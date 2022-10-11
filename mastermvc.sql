-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2022 at 07:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mastermvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `pass`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 'el', '$2y$12$Xf41axrnIXAVkam1QqhMBO8xzPPUnCFV.q9ypYoSN3nvFy90Sve/q', '2022-09-19', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employe_data`
--

CREATE TABLE `employe_data` (
  `id_employe` int(11) NOT NULL,
  `full_name` varchar(60) NOT NULL,
  `hire_date` date NOT NULL,
  `cnss_info` varchar(30) NOT NULL,
  `birth_date` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `skills` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `entity` varchar(30) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employe_data`
--

INSERT INTO `employe_data` (`id_employe`, `full_name`, `hire_date`, `cnss_info`, `birth_date`, `email`, `phone_number`, `skills`, `gender`, `entity`, `created_at`, `updated_at`, `deleted_at`) VALUES
(43, 'saad', '2022-09-01', '02020202', '2022-09-08', 'test@gmail.com', 231456987, 'Mailer', 'Female', 'IT TEAM', '2022-09-20', '2022-09-22', '2022-09-23'),
(44, 'ayoub', '2022-09-07', '02020202', '2022-09-01', 'doudou_2012@gmail.com', 231456987, 'TeamLeader', 'Male', 'IT TEAM', '2022-09-20', NULL, NULL),
(45, 'mohamed', '2022-09-08', '02020202', '2022-09-01', 'test@gmail.com', 231456987, 'TeamLeader', 'Female', 'HM3', '2022-09-20', NULL, '2022-09-01'),
(46, 'Mourad', '2022-09-01', '02020202', '2022-09-01', 'test@gmail.com', 231456987, 'Mailer', 'Male', 'HM1', '2022-09-23', NULL, '2022-09-30'),
(47, 'Med', '2022-09-01', '1020304050', '2022-09-01', 'test@gmail.com', 618618632, 'TeamLeader', 'Male', 'IT TEAM', '2022-09-30', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `salary_tracking`
--

CREATE TABLE `salary_tracking` (
  `id_salary` int(11) DEFAULT NULL,
  `id_employe` int(11) DEFAULT NULL,
  `employe_name` varchar(30) NOT NULL,
  `employe_skills` varchar(30) NOT NULL,
  `employe_entity` varchar(30) NOT NULL,
  `salary_upgrade` date NOT NULL,
  `salary_brut` double NOT NULL,
  `salary_net` double NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vacation`
--

CREATE TABLE `vacation` (
  `id_vacation` int(11) NOT NULL,
  `id_employe` int(11) DEFAULT NULL,
  `employe_name` varchar(30) NOT NULL,
  `vacation_start` date DEFAULT NULL,
  `vacation_end` date DEFAULT NULL,
  `vacation_pointer` date NOT NULL,
  `vacation_estimated` varchar(60) DEFAULT NULL,
  `days_available` varchar(60) DEFAULT NULL,
  `vacation_status` varchar(60) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vacation`
--

INSERT INTO `vacation` (`id_vacation`, `id_employe`, `employe_name`, `vacation_start`, `vacation_end`, `vacation_pointer`, `vacation_estimated`, `days_available`, `vacation_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 44, 'ayoub', '2022-09-22', '2022-09-22', '2022-09-30', '-6 days', '10', 'Active', '2022-09-22', NULL, NULL),
(13, 43, 'saad', '2022-09-22', '2022-09-22', '2022-09-30', '-1 days', '10', 'Active', '2022-09-22', NULL, NULL),
(14, NULL, 'mohamed', '2022-09-30', '2022-10-06', '2022-09-30', '-6 days', '4', 'Active', '2022-09-30', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employe_data`
--
ALTER TABLE `employe_data`
  ADD PRIMARY KEY (`id_employe`);

--
-- Indexes for table `salary_tracking`
--
ALTER TABLE `salary_tracking`
  ADD KEY `id_employe` (`id_employe`);

--
-- Indexes for table `vacation`
--
ALTER TABLE `vacation`
  ADD PRIMARY KEY (`id_vacation`),
  ADD UNIQUE KEY `id_employe_2` (`id_employe`),
  ADD KEY `id_employe` (`id_employe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employe_data`
--
ALTER TABLE `employe_data`
  MODIFY `id_employe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `vacation`
--
ALTER TABLE `vacation`
  MODIFY `id_vacation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `salary_tracking`
--
ALTER TABLE `salary_tracking`
  ADD CONSTRAINT `salary_tracking_ibfk_1` FOREIGN KEY (`id_employe`) REFERENCES `employe_data` (`id_employe`);

--
-- Constraints for table `vacation`
--
ALTER TABLE `vacation`
  ADD CONSTRAINT `vacation_ibfk_1` FOREIGN KEY (`id_employe`) REFERENCES `employe_data` (`id_employe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
