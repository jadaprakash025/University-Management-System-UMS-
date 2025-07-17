-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2024 at 11:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `id` int(10) NOT NULL,
  `u_card` varchar(12) NOT NULL,
  `u_f_name` text NOT NULL,
  `u_l_name` text NOT NULL,
  `u_father` text NOT NULL,
  `u_aadhar` varchar(12) NOT NULL,
  `u_birthday` text NOT NULL,
  `u_gender` varchar(6) NOT NULL,
  `u_email` text NOT NULL,
  `u_phone` varchar(10) NOT NULL,
  `u_state` varchar(12) NOT NULL,
  `u_dist` text NOT NULL,
  `u_village` text NOT NULL,
  `u_police` text NOT NULL,
  `u_pincode` text NOT NULL,
  `file` longblob NOT NULL,
  `u_mother` varchar(30) NOT NULL,
  `u_family` text NOT NULL,
  `staff_id` varchar(12) NOT NULL,
  `image` varchar(150) NOT NULL,
  `uploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`id`, `u_card`, `u_f_name`, `u_l_name`, `u_father`, `u_aadhar`, `u_birthday`, `u_gender`, `u_email`, `u_phone`, `u_state`, `u_dist`, `u_village`, `u_police`, `u_pincode`, `file`, `u_mother`, `u_family`, `staff_id`, `image`, `uploaded`) VALUES
(4, 'CARD004', 'Olivia', 'Johnson', 'James Johnson', '456456456456', '2003-04-04', 'Female', 'olivia.johnson@example.com', '6677889900', 'State4', 'District4', 'Village4', 'Police Station4', '654654', 0x66696c65342e6a7067, 'Patricia Johnson', 'Family4', 'S004', 'image4.jpg', '2024-10-04 00:00:00'),
(5, 'CARD005', 'Noah', 'Williams', 'Charles Williams', '789789789789', '2004-05-05', 'Male', 'noah.williams@example.com', '5566778899', 'State5', 'District5', 'Village5', 'Police Station5', '987987', 0x66696c65352e6a7067, 'Linda Williams', 'Family5', 'S005', 'image5.jpg', '2024-10-05 00:00:00'),
(6, 'jbkj', 'bb', 'gcgc', 'vv', 'y7655656', '', 'Choose', 'gjcgvgvvgvv@gmail.com', 'bb', 'Choose...', 'fft', 'yvf', 'fft', 'ghv', '', '', 'gmfnjbhv', 'c', '', '2024-10-13 09:40:54'),
(7, 'jbkj', 'bb', 'gcgc', 'vv', 'y7655656', '', 'Choose', 'gjcgvgvvgvv@gmail.com', 'bb', 'Choose...', 'fft', 'yvf', 'fft', 'ghv', '', '', 'gmfnjbhv', 'c', '', '2024-10-13 09:41:41'),
(8, 'jbkj', 'bb', 'gcgc', 'vv', 'y7655656', '', 'Choose', 'gjcgvgvvgvv@gmail.com', 'bb', 'Choose...', 'fft', 'yvf', 'fft', 'ghv', '', '', 'gmfnjbhv', 'c', '', '2024-10-13 09:42:02'),
(9, 'jbkj', 'bb', 'gcgc', 'vv', 'y7655656', '', 'Choose', 'gjcgvgvvgvv@gmail.com', 'bb', 'Choose...', 'fft', 'yvf', 'fft', 'ghv', '', '', 'gmfnjbhv', 'c', '', '2024-10-13 09:44:30'),
(10, 'jbkj', 'bb', 'gcgc', 'vv', 'y7655656', '', 'Choose', 'gjcgvgvvgvv@gmail.com', 'bb', 'Choose...', 'fft', 'yvf', 'fft', 'ghv', '', '', 'gmfnjbhv', 'c', '', '2024-10-13 09:45:22'),
(11, 'jbkj', 'bb', 'gcgc', 'vv', 'y7655656', '', 'Choose', 'gjcgvgvvgvv@gmail.com', 'bb', 'Choose...', 'fft', 'yvf', 'fft', 'ghv', '', '', 'gmfnjbhv', 'c', '', '2024-10-13 09:46:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(5, 'kushkush', '$2y$10$pkgNOc0r6DaiDnCTIVT/VubRm0LqncpPgipzdARaH/9wZto.zmYLu', '2021-05-22 00:30:03'),
(6, '123123', '$2y$10$AwA0obkWAdzF6Z6zCqZ3Xu5QinFNWhL89iAUde8YYfYorruaxOjCm', '2021-07-17 16:49:54'),
(7, 'jada12', '$2y$10$hheXaL1DCHaU3aTfGfkAqueWIfzdkGYMYBGeDqjVmuRV/GwU0qxrS', '2024-10-12 17:28:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
