-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2025 at 04:47 PM
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
  `id` int(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `incident_type` varchar(200) NOT NULL,
  `date_recorded` datetime NOT NULL DEFAULT current_timestamp(),
  `victim` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `time` time NOT NULL,
  `respondent` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `details` text NOT NULL,
  `complainant` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barangay_blotter`
--

INSERT INTO `barangay_blotter` (`id`, `status`, `incident_type`, `date_recorded`, `victim`, `location`, `time`, `respondent`, `date`, `details`, `complainant`) VALUES
(24, '3', 'Incident', '2024-12-25 16:14:54', 'Sasda', 'Mindanao', '00:00:00', 'sadsad', '2025-01-01', 'dasdasdla', 'Joshua'),
(25, '2', 'Blotter', '2025-01-03 19:50:08', 'Sasda', 'Mindanao', '00:00:00', 'sadsad', '2025-01-06', 'asdadadsa', 'Joshua'),
(26, '1', 'Incident', '2025-01-08 14:54:14', 'Sasda', 'Mindanao', '19:53:00', 'jenmar', '2025-01-10', 'asodlk asdasjdhskjad2 jsldkjaslkdjsadlkjlk asldkjasldkjsadlk jlkejlkdjlkdajsdkljsdlkjsadlksjadlksjdlksjdlksjdalskjdlskajdlskadjlsakjdslkdjslkdjslakdjalk jlaskjdslakdjsalkdjsalkdjsalkdjsalkdj lkjasdlkasjdlsakdj lakdjl kasjdsadsds  asddsadsd', 'Joshua');

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
('PALIPARAN II', 'DASMARINAS', 'Paliparan II, Dasmariñas, Philippines', '09513856318', 'Barangay.paliparanII@gmail.com', 1, '679b85db30f8c.png');

-- --------------------------------------------------------

--
-- Table structure for table `barangay_manage`
--

CREATE TABLE `barangay_manage` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `age` int(200) NOT NULL,
  `request_document` varchar(200) NOT NULL,
  `house_no` varchar(200) NOT NULL,
  `birthday` date NOT NULL,
  `place_of_birth` varchar(200) NOT NULL,
  `contact_no` varchar(200) NOT NULL,
  `contact_person` varchar(200) NOT NULL,
  `contact_no_contact_person` varchar(200) NOT NULL,
  `live_since_year` varchar(200) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `status` int(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `OR_no` int(200) NOT NULL,
  `date_issue` date NOT NULL,
  `expired_date` date NOT NULL,
  `sitio_pook` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barangay_manage`
--

INSERT INTO `barangay_manage` (`id`, `firstname`, `middlename`, `lastname`, `age`, `request_document`, `house_no`, `birthday`, `place_of_birth`, `contact_no`, `contact_person`, `contact_no_contact_person`, `live_since_year`, `purpose`, `status`, `gender`, `OR_no`, `date_issue`, `expired_date`, `sitio_pook`) VALUES
(65, 'Jenmar', 'Acantilado', 'Alano', 25, 'Barangay Certificate', 'bkl 18 lot 18', '2024-12-12', 'PASAY', '09694911585', 'Juanas', '09694911585', '2024-08', 'School', 3, 'Male', 52, '2024-12-12', '2025-12-12', 'Mabuhay Homes 2000'),
(66, 'Juan', 'Del', 'Dela cruz', 55, 'Barangay ID', 'blk 29 Lot 44 PH1', '2024-12-13', 'Manila', '21321323232', 'Jenmar alano', '23213133233', '2004-08', 'Employment', 2, 'Female', 53, '2024-12-13', '2025-12-13', 'Sitio Pook Boundary'),
(67, 'Juan', 'Del', 'Dela cruz', 55, 'Barangay ID', 'blk 29 Lot 44 PH1', '2024-12-13', 'Manila', '21321323232', 'Jenmar alano', '23213133233', '2004-08', 'Employment', 2, 'Male', 54, '2024-12-13', '2025-12-13', 'Sitio Pook Boundary'),
(67, 'Juan', 'Del', 'Dela cruz', 55, 'Barangay ID', 'blk 29 Lot 44 PH1', '2024-12-13', 'Manila', '21321323232', 'Jenmar alano', '23213133233', '2004-08', 'Employment', 2, 'Male', 55, '2024-12-13', '2025-12-13', 'Sitio Pook Boundary'),
(67, 'Juan', 'Del', 'Dela cruz', 55, 'Barangay ID', 'blk 29 Lot 44 PH1', '2024-12-13', 'Manila', '21321323232', 'Jenmar alano', '23213133233', '2004-08', 'Employment', 2, 'Male', 56, '2024-12-15', '2025-12-15', 'Sitio Pook Boundary'),
(67, 'Juan', 'Del', 'Dela cruz', 55, 'Barangay ID', 'blk 29 Lot 44 PH1', '2024-12-13', 'Manila', '21321323232', 'Jenmar alano', '23213133233', '2004-08', 'Employment', 3, 'Male', 57, '2024-12-15', '2025-12-15', 'Sitio Pook Boundary'),
(68, 'wwdw', 'ww', 'wddd', 22, 'Barangay ID', 'block 34 lot 22', '2012-06-16', 'manila', '09958140197', 'aldrich', '09958140197', '2024-01', 'for gcash', 2, 'Male', 59, '2024-12-16', '2025-12-16', 'Camella at the Island Park'),
(68, 'wwdw', 'ww', 'wddd', 22, 'Barangay ID', 'block 34 lot 22', '2012-06-16', 'manila', '09958140197', 'aldrichdada', '09958140197', '2024-01', 'for gcash', 3, 'Male', 60, '2024-12-24', '2025-12-24', 'Camella at the Island Park'),
(68, 'wwdw', 'ww', 'wddd', 22, 'Barangay Clearance', 'block 34 lot 22', '2012-06-16', 'manila', '09958140197', 'aldrich', '09958140197', '2024-01', 'Employment', 2, 'Male', 61, '2025-01-06', '2026-01-06', 'Camella at the Island Park'),
(69, 'Jenmar', 'asdsad', 'asds', 22, 'Barangay Indigency', 'bkl 18 lot 18', '2025-01-10', 'Manila', '21321323232', '123sdads', '23213133233', '2025-11', 'asadsdsdsds', 2, 'Male', 62, '2025-01-07', '2026-01-07', 'Sitio Kubuhan & Ridge View'),
(73, 'Jenmar', 'asda', 'Alano', 56, 'Barangay Certificate', 'asd', '2025-01-15', 'Manila', '21312312312', '123sdads', '23213133233', '2025-02', 'asdsdasddddddddd', 2, 'Male', 63, '2025-01-08', '2026-01-08', 'Mabuhay Homes 2000'),
(72, 'Jenmar', 'Acantilado', 'asdd', 34, 'Barangay Clearance', 'bkl 18 lot 18', '2025-01-14', 'Manila', '21321323232', '123sdads', '23213133233', '2025-07', 'Employment', 2, 'Female', 64, '2025-01-09', '2026-01-09', 'Iyala'),
(73, 'Jenmar', 'asda', 'Alano', 56, 'Barangay Certificate', 'asd', '2025-01-15', 'Manila', '21312312312', '123sdads', '23213133233', '2025-02', 'Education', 2, 'Male', 65, '2025-01-13', '2026-01-13', 'Mabuhay Homes 2000'),
(75, 'Jenmar', 'Acantilado', 'Alano', 22, 'Barangay Clearance', 'bkl 18 lot 18', '2025-01-14', 'Manila', '12372121312', 'jhadskjsd', '21837128732', '2025-01', 'Education', 3, 'Male', 66, '2025-01-13', '2026-01-13', 'Sitio Burol'),
(14, '1dasd', 'sadsad', 'sadsd', 22, '', 'asd', '2025-01-18', 'sadsd', '23213121234', '2312323', '21323232223', '', 'ewqeqwe', 3, '', 67, '2025-01-18', '2026-01-18', '');

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
(65, 'adadads', 'Kagawad', 'Commnittee on Education', '2024-12-25', '2024-12-25', 1, '676bbe41e6c16.png');

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
('Jenmar bb', 'Acantlado', 'Alano', 22, 'Barangay Certificate', 'asdasd', 'Mabuhay Homes 2000 asdsd', '2025-01-09', 'Manila', '09694911585', 'Maryjane', '09454566545', '2025-02', 'Education', 1, 'Male', '2025-01-28', '679b9f74184a1.jpg', 17, 52),
('aaaaaa', 'aaaaaaa', 'aaaaaaaaa', 23, 'Barangay Indigency', 'asdasd', 'Sitio Burol', '2025-01-08', 'Manila', '09694911585', 'Maryjane', '09454566545', '2025-02', 'Education', 1, 'Female', '2025-01-28', '6798fc567d3f8.jpg', 18, 53);

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
(67, 'neil', 's', 'Alegiojo', '34 22', 'tukmol', 'Manila', '2024-12-16', 22, 'Divorced', 'Male', 'No', 'jenmar.alano04@gmail.com', '09958140197', 'student', 'filipino', 'Camella at the Island Park', 'No ID', 'adasd123', '', '675f99c669a0e.jpg');

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
  `status` int(11) NOT NULL,
  `OR_no` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barangay_revenue`
--

INSERT INTO `barangay_revenue` (`date_issue`, `expired_date`, `document_amount`, `firstname`, `middlename`, `lastname`, `document_type`, `user_id`, `status`, `OR_no`) VALUES
('2025-02-01', '2026-02-01', 100, 'Jenmar bb', 'Acantlado', 'Alano', 'Barangay Certificate', 17, 1, 134),
('2025-02-01', '2026-02-01', 100, 'Jenmar bb', 'Acantlado', 'Alano', 'Barangay Certificate', 17, 1, 135),
('2025-02-01', '2026-02-01', 100, 'Jenmar bb', 'Acantlado', 'Alano', 'Barangay Certificate', 17, 1, 136),
('2025-02-01', '2026-02-01', 100, 'Jenmar bb', 'Acantlado', 'Alano', 'Barangay Certificate', 17, 1, 137),
('2025-02-01', '2026-02-01', 100, 'Jenmar bb', 'Acantlado', 'Alano', 'Barangay Certificate', 17, 1, 138),
('2025-02-01', '2026-02-01', 23, 'Jenmar bb', 'Acantlado', 'Alano', 'Barangay Certificate', 17, 1, 139);

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
('Jenmar bb', 'Acantlado', 'Alano', 'Jenmar0411', 'Jenmar0411', 'Male', 22, '2025-01-09', '2025-01-28', 'asdasd', 'Mabuhay Homes 2000 asdsd', '09694911585', '679b9f74184a1.jpg', 17),
('aaaaaa', 'aaaaaaa', 'aaaaaaaaa', 'Aaaa0411', 'Aaaa0411', 'Female', 23, '2025-01-08', '2025-01-28', 'asdasd', 'Sitio Burol', '09694911585', '6798fc567d3f8.jpg', 18);

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
-- Indexes for table `barangay_information`
--
ALTER TABLE `barangay_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barangay_manage`
--
ALTER TABLE `barangay_manage`
  ADD PRIMARY KEY (`OR_no`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `barangay_information`
--
ALTER TABLE `barangay_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barangay_manage`
--
ALTER TABLE `barangay_manage`
  MODIFY `OR_no` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `barangay_official`
--
ALTER TABLE `barangay_official`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `barangay_request`
--
ALTER TABLE `barangay_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `barangay_resident`
--
ALTER TABLE `barangay_resident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `barangay_revenue`
--
ALTER TABLE `barangay_revenue`
  MODIFY `OR_no` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
