-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2025 at 01:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barangay_information_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `user_id` int(200) NOT NULL,
  `user_type` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date_created` date NOT NULL,
  `admin_profile` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `age` int(200) NOT NULL,
  `status` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`user_id`, `user_type`, `firstname`, `middlename`, `lastname`, `email`, `username`, `password`, `date_created`, `admin_profile`, `gender`, `age`, `status`) VALUES
(26, 'SECRETARY', 'Alexx', 'Peralta', 'Peralta', 'tmc.jenmar.alano@cvsu.edu.ph', 'alex', 'alexandra', '2024-11-23', '675bc5002f832.png', 'Female', 25, 1),
(27, 'ADMINISTRATOR', 'Jenmaraaa', 'Acantilado', 'Alano', 'yayayahj.alano@gmail.com', 'admin', 'admin', '2025-01-06', '677baf02d8fc1.png', 'Male', 23, 1);

-- --------------------------------------------------------

--
-- Table structure for table `barangay_blotter`
--

CREATE TABLE `barangay_blotter` (
  `subject` varchar(200) NOT NULL,
  `cell_no` varchar(200) NOT NULL,
  `place` varchar(200) NOT NULL,
  `tanod` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` int(11) NOT NULL,
  `id` bigint(20) NOT NULL,
  `complainant` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `address_complainant` varchar(200) NOT NULL,
  `complained_name` varchar(200) NOT NULL,
  `add_complained_name` varchar(200) NOT NULL,
  `details_reason` text NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barangay_blotter`
--

INSERT INTO `barangay_blotter` (`subject`, `cell_no`, `place`, `tanod`, `date`, `time`, `status`, `id`, `complainant`, `age`, `address_complainant`, `complained_name`, `add_complained_name`, `details_reason`, `type`) VALUES
('SUNTUKAN asddsd', '09694911585', 'Barangay Paliparan II', 'sadklajsd', '2025-02-09', '19:39:00', 2, 10, 'asdsad', 22, ' sdsadds', 'sdasdsad', 'asdsdsds', 'adasdsdsds', 'Blotter');

-- --------------------------------------------------------

--
-- Table structure for table `barangay_incident`
--

CREATE TABLE `barangay_incident` (
  `id` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `name_involve` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `vehicle` varchar(200) NOT NULL,
  `license` varchar(200) NOT NULL,
  `plate_no` varchar(200) NOT NULL,
  `cause_incident` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barangay_incident`
--

INSERT INTO `barangay_incident` (`id`, `date`, `time`, `name_involve`, `address`, `vehicle`, `license`, `plate_no`, `cause_incident`, `status`) VALUES
(8, '2025-02-09', '00:09:00', 'asdasddsdssssssssssd ssssssssssssssss ssssssssssssssssssss ssssssssssssssssssss', 'ssssssssssssssssssss ssssssssssssss ssssssssssssssssssss ssssssssssssssssssss', 'sssssssssssssssssss ssssssssssssssssssss ssssssssssssssssssss ssssssssssssssssssss', 'ssssssssssssssssssssss ssssssssssssssssssss ssssssssssssssssssss ssssssssssssssssssss', 'ssssssssssssssssssssssssssssssss ssssssssssssssssssss ssssssssssssssssssss ssssssssssssssssssss', 'sadasdasd', 2),
(9, '2025-02-09', '00:09:00', 'Juan dela Cruz Juan dela Cruz Juan dela Cruz Juan dela Cruz', 'blk 18 lot 2 san francesco villaggio blk 18 lot 2 san francesco villaggio Juan dela Cruz Juan dela Cruz', 'motor motor motor motor adsds', '213981093812 213981093812 213981093812 213981093812', '213 2135 213 13fsd34', 'BANGAAN aaa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `barangay_information`
--

CREATE TABLE `barangay_information` (
  `barangay_name` varchar(200) NOT NULL,
  `municipality` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone_no` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barangay_information`
--

INSERT INTO `barangay_information` (`barangay_name`, `municipality`, `address`, `phone_no`, `email`, `id`, `logo`) VALUES
('PALIPARAN II', 'DASMARINAS', 'Paliparan II, Dasmariñas, Philippines', '09513856318', 'Barangay.paliparanII@gmail.com', 1, '67a89c6822aa9.png');

-- --------------------------------------------------------

--
-- Table structure for table `barangay_official`
--

CREATE TABLE `barangay_official` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `chairmanship` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `term_start` date NOT NULL,
  `term_end` date NOT NULL,
  `status` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barangay_official`
--

INSERT INTO `barangay_official` (`id`, `fullname`, `chairmanship`, `position`, `term_start`, `term_end`, `status`, `photo`) VALUES
(71, 'Engr. Rolando \"Rolly\" Ambal', 'Chairman', 'Chairman', '2025-02-08', '2025-02-08', 1, '67a71073b1beb.jpg'),
(72, 'Oscar Alvarez', 'Kagawad', 'Commnittee on Education', '2025-02-07', '2025-02-08', 1, '67a711849cb69.jpg'),
(73, 'Baby Andaya', 'Kagawad', 'Commnittee on Health', '2025-02-08', '2025-02-01', 1, '67a712fbdd0ec.jpg'),
(74, 'Alvin Andaya', 'Kagawad', 'Commnittee on Solid Waste', '2025-02-08', '2025-02-08', 1, '67a7131f4b1e7.jpg'),
(75, 'MJ Asilo', 'Kagawad', 'Commnittee on Appropriation', '2025-02-08', '2025-02-08', 1, '67a7137398cd4.jpg'),
(76, 'Gilbert Magtaas', 'Kagawad', 'Commnittee on Appropriation', '2025-02-08', '2025-02-08', 1, '67a713a1586ec.jpg'),
(77, 'Ressa Martinez', 'Kagawad', 'Presiding Officer', '2025-01-31', '2025-02-12', 1, '67a713cf18629.jpg'),
(78, 'Tessa Sanchez', 'Kagawad', 'Commnittee on Health', '2025-02-06', '2025-02-07', 1, '67a713ef8f29a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `barangay_request`
--

CREATE TABLE `barangay_request` (
  `firstname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `age` int(200) NOT NULL,
  `request_document` varchar(200) NOT NULL,
  `house_number` varchar(200) NOT NULL,
  `sitio_pook` varchar(200) NOT NULL,
  `birthday` date NOT NULL,
  `place_of_birth` varchar(200) NOT NULL,
  `contact_no` varchar(200) NOT NULL,
  `contact_person` varchar(200) NOT NULL,
  `contact_no_contact_person` varchar(200) NOT NULL,
  `live_since_year` varchar(200) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `status` int(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `date_request` date NOT NULL,
  `profile` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barangay_request`
--

INSERT INTO `barangay_request` (`firstname`, `middlename`, `lastname`, `age`, `request_document`, `house_number`, `sitio_pook`, `birthday`, `place_of_birth`, `contact_no`, `contact_person`, `contact_no_contact_person`, `live_since_year`, `purpose`, `status`, `gender`, `date_request`, `profile`, `user_id`, `id`) VALUES
('chin', 'Acantilado e', 'Alano e', 25, 'Barangay Certificate', 'asdsdad e', 'Mabuhay Homes 2000 asdsd', '2025-02-03', 'Manila', '11000001223', 'Jenmar Acantilado Alano', '12083021981', '2025-02', 'For Education Assistance', 4, 'Female', '2025-01-28', '679b9f74184a1.jpg', 18, 53),
('2312das', 'asdasd', 'adsad', 23, 'Barangay ID', '2asdas', 'adsads', '2025-02-12', 'adsad', '09694911585', 'asdasd', '09694911585', '2025-02', 'asdasd', 4, 'Female', '2025-02-02', '67a0bad7d3620.jpg', 0, 65),
('2312das', 'aasdasd', 'asdsd', 22, 'Barangay ID', '2asdas', 'adsads', '2025-02-04', 'adsad', '09694911585', 'asdasd', '09694911585', '2025-02', 'asdasd', 3, 'Prefer not to say', '2025-02-03', '67a060b0a2de7.jpg', 0, 66),
('chin', 'adasd', 'alano', 23, 'Barangay Clearance', 'asdsdad e', '2adasdsd', '2025-02-05', 'Manila', '09694911523', 'Jenmar Acantilado Alano', '09958140197', '2025-02', 'For Education Assistance', 1, 'Male', '2025-02-05', 'images.png', 33, 68);

-- --------------------------------------------------------

--
-- Table structure for table `barangay_resident`
--

CREATE TABLE `barangay_resident` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `house_no` varchar(200) NOT NULL,
  `alias` varchar(200) NOT NULL,
  `place_of_birth` varchar(200) NOT NULL,
  `birthday` date NOT NULL,
  `age` int(200) NOT NULL,
  `civil_status` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `voter_status` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact_no` varchar(200) NOT NULL,
  `occupation` varchar(200) NOT NULL,
  `citizenship` varchar(200) NOT NULL,
  `sitio_pook` varchar(200) NOT NULL,
  `id_type` varchar(200) NOT NULL,
  `id_type_no` varchar(200) NOT NULL,
  `precinct_no` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barangay_resident`
--

INSERT INTO `barangay_resident` (`id`, `firstname`, `middlename`, `lastname`, `house_no`, `alias`, `place_of_birth`, `birthday`, `age`, `civil_status`, `gender`, `voter_status`, `email`, `contact_no`, `occupation`, `citizenship`, `sitio_pook`, `id_type`, `id_type_no`, `precinct_no`, `image`) VALUES
(65, 'Chin', 'Acantilado', 'Alano', 'bkl 18 lot 18', 'Jayjay', 'Manila', '2024-12-11', 22, 'Seperated', 'Female', 'Yes', 'tmc.jenmar.alano@cvsu.edu.ph', '01312323322', 'Web Development', 'asdasdaaaaaaaaaa', 'Sitio Kubuhan & Rigde View', 'Voters ID', '234324', '', '6759a4a2325f6.png'),
(67, 'neil', 's', 'Alegiojo', '34 22', 'tukmol', 'Manila', '2024-12-16', 22, 'Divorced', 'Male', 'No', 'jenmar.alano04@gmail.com', '09958140197', 'student', 'filipino', 'Camella at the Island Park', 'No ID', 'adasd123', '', '675f99c669a0e.jpg'),
(68, 'Jenmar', 'Acantilado', 'Alano', 'asdsdad e', 'JM', 'Manila', '2024-11-04', 25, 'Single', 'Male', 'Yes', 'tmc.jenmar.alano@cvsu.edu.ph', '09694911585', 'Web developer', 'filipino', 'Mabuhay Homes 2000', 'National ID', '', '', '67a33ca1e9d3a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `barangay_revenue`
--

CREATE TABLE `barangay_revenue` (
  `date_issue` date NOT NULL,
  `expired_date` date NOT NULL,
  `document_amount` float NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `document_type` varchar(200) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `OR_no` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barangay_revenue`
--

INSERT INTO `barangay_revenue` (`date_issue`, `expired_date`, `document_amount`, `firstname`, `middlename`, `lastname`, `document_type`, `user_id`, `OR_no`) VALUES
('2025-02-05', '2026-02-05', 23, 'Jenmar e 2323 asdsad', 'Acantilado e', 'Alano e', 'Barangay Clearance', 53, 322),
('2025-02-05', '2026-02-05', 23, 'Jenmar e 2323 asdsad', 'Acantilado e', 'Alano e', 'Barangay Clearance', 53, 323),
('2025-02-05', '2026-02-05', 23, 'Jenmar e 2323 asdsad', 'Acantilado e', 'Alano e', 'Barangay Clearance', 53, 324),
('2025-02-05', '2026-02-05', 1022, 'Jenmar e 2323 asdsad', 'Acantilado e', 'Alano e', 'Barangay Clearance', 53, 325),
('2025-02-05', '2026-02-05', 23, '2312das', 'aasdasd', 'asdsd', 'Barangay ID', 66, 326),
('2025-02-05', '2026-02-05', 23, '2312das', 'aasdasd', 'asdsd', 'Barangay ID', 66, 327),
('2025-02-05', '2026-02-05', 23, '2312das', 'aasdasd', 'asdsd', 'Barangay ID', 66, 328),
('2025-02-05', '2026-02-05', 23, '2312das', 'aasdasd', 'asdsd', 'Barangay ID', 66, 329),
('2025-02-05', '2026-02-05', 23, '2312das', 'aasdasd', 'asdsd', 'Barangay ID', 66, 330),
('2025-02-05', '2026-02-05', 23, '2312das', 'aasdasd', 'asdsd', 'Barangay ID', 66, 331),
('2025-02-05', '2026-02-05', 23, '2312das', 'aasdasd', 'asdsd', 'Barangay ID', 66, 332),
('2025-02-05', '2026-02-05', 23, '2312das', 'aasdasd', 'asdsd', 'Barangay ID', 66, 333),
('2025-02-05', '2026-02-05', 23, '2312das', 'aasdasd', 'asdsd', 'Barangay ID', 66, 334),
('2025-02-05', '2026-02-05', 23, '2312das', 'aasdasd', 'asdsd', 'Barangay ID', 66, 335),
('2025-02-05', '2026-02-05', 23, '2312das', 'aasdasd', 'asdsd', 'Barangay ID', 66, 336),
('2025-02-05', '2026-02-05', 50, '2312das', 'asdasd', 'adsad', 'Barangay ID', 65, 337);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `firstname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `date_registered` date NOT NULL,
  `house_no` varchar(200) NOT NULL,
  `sitio_pook` varchar(200) NOT NULL,
  `contact_no` varchar(200) NOT NULL,
  `profile` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`firstname`, `middlename`, `lastname`, `username`, `password`, `gender`, `age`, `birthday`, `date_registered`, `house_no`, `sitio_pook`, `contact_no`, `profile`, `user_id`) VALUES
('Jenmara asd', 'dassad', 'Alano', 'Jenmar0411', 'Jenmar0411', 'Male', 23, '0000-00-00', '2025-02-06', '', '', '', 'images.png', 34);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `barangay_blotter`
--
ALTER TABLE `barangay_blotter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barangay_incident`
--
ALTER TABLE `barangay_incident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barangay_information`
--
ALTER TABLE `barangay_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barangay_official`
--
ALTER TABLE `barangay_official`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barangay_request`
--
ALTER TABLE `barangay_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barangay_resident`
--
ALTER TABLE `barangay_resident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barangay_revenue`
--
ALTER TABLE `barangay_revenue`
  ADD PRIMARY KEY (`OR_no`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `barangay_blotter`
--
ALTER TABLE `barangay_blotter`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `barangay_incident`
--
ALTER TABLE `barangay_incident`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `barangay_information`
--
ALTER TABLE `barangay_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barangay_official`
--
ALTER TABLE `barangay_official`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `barangay_request`
--
ALTER TABLE `barangay_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `barangay_resident`
--
ALTER TABLE `barangay_resident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `barangay_revenue`
--
ALTER TABLE `barangay_revenue`
  MODIFY `OR_no` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=338;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
