-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2025 at 09:29 AM
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
('aaasdas', '9694911333', 'Barangay Paliparan II', 'sdasd', '2025-03-15', '04:28:00', 1, 487, 'sadasds', 11, 'asdasdsa', 'asdsadsad', 'asdsadsad', 'asdasdasdsadsad', 'Blotter'),
('aaasdas', '09694911333', 'Barangay Paliparan II', 'sdasd', '2025-03-15', '04:28:00', 1, 488, 'sadasds', 11, ' asdasdsa', 'asdsadsad', 'asdsadsad', 'asdasdasdsadsad', 'Blotter'),
('aaasdas', '9694911333', 'Barangay Paliparan II', 'sdasd', '2025-03-15', '04:28:00', 1, 490, 'sadasds', 11, 'asdasdsa', 'asdsadsad', 'asdsadsad', 'asdasdasdsadsad', 'Blotter'),
('aaasdas', '09694911333', 'Barangay Paliparan II', 'sdasd', '2025-03-15', '04:28:00', 1, 491, 'sadasds', 11, 'asdasdsa', 'asdsadsad', 'asdsadsad', 'asdasdasdsadsad', 'Blotter'),
('aaasdas', '9694911333', 'Barangay Paliparan II', 'sdasd', '2025-03-15', '04:28:00', 1, 492, 'sadasds', 11, 'asdasdsa', 'asdsadsad', 'asdsadsad', 'asdasdasdsadsad', 'Blotter'),
('aaasdas', '09694911333', 'Barangay Paliparan II', 'sdasd', '2025-03-15', '04:28:00', 1, 493, 'sadasds', 11, 'asdasdsa', 'asdsadsad', 'asdsadsad', 'asdasdasdsadsad', 'Blotter'),
('aaasdas', '9694911333', 'Barangay Paliparan II', 'sdasd', '2025-03-15', '04:28:00', 1, 494, 'sadasds', 11, 'asdasdsa', 'asdsadsad', 'asdsadsad', 'asdasdasdsadsad', 'Blotter'),
('aaasdas', '09694911333', 'Barangay Paliparan II', 'sdasd', '2025-03-15', '04:28:00', 1, 495, 'sadasds', 11, 'asdasdsa', 'asdsadsad', 'asdsadsad', 'asdasdasdsadsad', 'Blotter'),
('aaasdas', '9694911333', 'Barangay Paliparan II', 'sdasd', '2025-03-15', '04:28:00', 1, 496, 'sadasds', 11, 'asdasdsa', 'asdsadsad', 'asdsadsad', 'asdasdasdsadsad', 'Blotter'),
('aaasdas', '09694911333', 'Barangay Paliparan II', 'sdasd', '2025-03-15', '04:28:00', 1, 497, 'sadasds', 11, 'asdasdsa', 'asdsadsad', 'asdsadsad', 'asdasdasdsadsad', 'Blotter'),
('aaasdas', '9694911333', 'Barangay Paliparan II', 'sdasd', '2025-03-15', '04:28:00', 1, 498, 'sadasds', 11, 'asdasdsa', 'asdsadsad', 'asdsadsad', 'asdasdasdsadsad', 'Blotter'),
('aaasdas', '09694911333', 'Barangay Paliparan II', 'sdasd', '2025-03-15', '04:28:00', 1, 499, 'sadasds', 11, 'asdasdsa', 'asdsadsad', 'asdsadsad', 'asdasdasdsadsad', 'Blotter');

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
(10, '2025-02-09', '12:09:00', 'asdasddsdssssssssssd ssssssssssssssss ssssssssssssssssssss ssssssssssssssssssss', 'ssssssssssssssssssss ssssssssssssss ssssssssssssssssssss ssssssssssssssssssss', 'sssssssssssssssssss ssssssssssssssssssss ssssssssssssssssssss ssssssssssssssssssss', 'ssssssssssssssssssssss ssssssssssssssssssss ssssssssssssssssssss ssssssssssssssssssss', 'ssssssssssssssssssssssssssssssss ssssssssssssssssssss ssssssssssssssssssss ssssssssssssssssssss', 'sadasdasd', 2),
(11, '2025-02-09', '12:09:00', 'asdasddsdssssssssssd ssssssssssssssss ssssssssssssssssssss ssssssssssssssssssss', 'ssssssssssssssssssss ssssssssssssss ssssssssssssssssssss ssssssssssssssssssss', 'sssssssssssssssssss ssssssssssssssssssss ssssssssssssssssssss ssssssssssssssssssss', 'ssssssssssssssssssssss ssssssssssssssssssss ssssssssssssssssssss ssssssssssssssssssss', 'ssssssssssssssssssssssssssssssss ssssssssssssssssssss ssssssssssssssssssss ssssssssssssssssssss', 'sadasdasd', 2),
(12, '2025-03-15', '21:11:00', 'asd   ', 'aasdsad   ', 'asdsad   ', 'sdas   ', 'dasdsd   ', 'adsas', 1),
(13, '2025-03-15', '21:14:00', 'asd', 'asdas', 'dasdsd', 'sdsad', 'sadsd', 'adsas', 2),
(14, '2025-03-15', '23:26:00', 'a', 'a', 'a', 'a', 'a', 'asd', 1),
(15, '2025-03-15', '22:27:00', 'dd', 'dd', 'dd', 'dd', 'dd', 'adsas', 3),
(16, '2025-03-15', '13:30:00', 'aaa', 'aaaaaa', 'aaaaaaaa', 'aaaaaa', 'aaaaaaaaaa', 'd', 2),
(17, '2025-03-08', '22:33:00', 'ffff', 'ffffff', 'ffff', 'fffffff', 'ffffff', 'adsas', 2),
(18, '2025-03-08', '22:33:00', 'aasss', 'ssss', 'ss', 'ss', 'sss', 'adsas', 2),
(19, '2025-03-15', '22:34:00', 'd', 'd', 'd', 'd', 'd', 'asd', 2);

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
(87, 'asdasd', 'Chairman', 'Chairman', '2025-03-16', '2025-03-16', 1, '67d6792bcec69.png'),
(88, 'asdasd', 'Chairman', 'Chairman', '2025-03-19', '2025-03-17', 1, '67d679b2b93de.png'),
(89, 'adasd', 'Chairman', 'Chairman', '2025-03-16', '2025-03-16', 1, '67d679d5b4015.png'),
(90, 'asdasd', 'Chairman', 'Chairman', '2025-03-16', '2025-03-16', 1, '67d6792bcec69.png'),
(91, 'asdasd', 'Chairman', 'Chairman', '2025-03-19', '2025-03-17', 1, '67d679b2b93de.png'),
(92, 'adasd', 'Chairman', 'Chairman', '2025-03-16', '2025-03-16', 1, '67d679d5b4015.png'),
(93, 'asdasd', 'Chairman', 'Chairman', '2025-03-16', '2025-03-16', 1, '67d6792bcec69.png'),
(94, 'asdasd', 'Chairman', 'Chairman', '2025-03-19', '2025-03-17', 1, '67d679b2b93de.png'),
(95, 'adasd', 'Chairman', 'Chairman', '2025-03-16', '2025-03-16', 1, '67d679d5b4015.png'),
(96, 'asdasd', 'Chairman', 'Chairman', '2025-03-16', '2025-03-16', 1, '67d6792bcec69.png'),
(97, 'asdasd', 'Chairman', 'Chairman', '2025-03-19', '2025-03-17', 1, '67d679b2b93de.png'),
(98, 'adasd', 'Chairman', 'Chairman', '2025-03-16', '2025-03-16', 1, '67d679d5b4015.png');

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
  `business_name` varchar(200) NOT NULL,
  `profile` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `sitio_pook` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barangay_resident`
--

INSERT INTO `barangay_resident` (`id`, `firstname`, `middlename`, `lastname`, `house_no`, `place_of_birth`, `birthday`, `age`, `civil_status`, `gender`, `voter_status`, `email`, `contact_no`, `occupation`, `citizenship`, `sitio_pook`) VALUES
(101, 'JOHN ERIC', 'CASTRO', 'CAJUDAY', '381', 'DASMARIÑAS CITY, CAVITE', '2003-03-22', 23, 'SINGLE', 'MALE', 'YES', 'jcajuday44@gmail.com', '9694911585', 'N/A', 'FILIPINO', 'SITIO POOK'),
(102, 'KRISTINE JOY', 'ARANDIA', 'VIÑA', '456', 'BULACAN', '1995-09-28', 25, 'SINGLE', 'FEMALE', 'YES', 'joy.vina@gmail.com', '9694911585', 'STUDENT', 'FILIPINO', 'SITIO ILAYA'),
(103, 'ARRAH MARIE', 'FAJARDO', 'DIMAANDAL', 'BLK 30 LOT 21', 'CALOOCAN CITY', '1995-06-30', 25, 'SINGLE', 'FEMALE', 'YES', 'arahhdimaandal04@gmail.com', '9694911585', 'BUSINESS OWNER', 'FILIPINO', 'CAMELLA ISLAND PARK'),
(104, 'JHAZZENMHAY', 'DADOR', 'ALVAREZ', '239', 'DASMARIÑAS CITY, CAVITE', '1996-11-07', 24, 'SINGLE', 'FEMALE', 'YES', 'j.mhayalvarez@gmail.com', '9694911585', 'BARISTA', 'FILIPINO', 'SITIO POOK'),
(105, 'MARY ANN', 'GARDOZA', 'VILLAMOR', 'BLK 209 LOT 47', 'MANILA', '1970-08-25', 54, 'MARRIED', 'FEMALE', 'YES', 'mhane.villamor@gmail.com', '9694911585', 'HOUSEWIFE', 'FILIPINO', 'CAMELLA ISLAND PARK'),
(106, 'RONIE', 'CASTAÑEDA', 'TIEMPO', 'BLK 24 LOT 5', 'CEBU', '1985-09-17', 39, 'MARRIED', 'MALE', 'YES', 'markboss05@gmail.com', '9694911585', 'DRIVER', 'FILIPINO', 'CAMELLA ISLAND PARK'),
(107, 'MARK ANTHONY', 'HERNANDEZ', 'GIRON', 'BLK 4 LOT 5', 'DAVAO CITY', '1990-03-10', 34, 'MARRIED', 'MALE', 'YES', 'mark.anthony@gmail.com', '9694911585', 'EMPLOYEE', 'FILIPINO', 'CAMELLA ISLAND PARK'),
(108, 'MARY CATHERINE', 'JUSTO', 'GIRON', 'BLK 4 LOT 5', 'BAGUIO CITY', '1996-05-09', 28, 'MARRIED', 'FEMALE', 'YES', 'cathy.justo@gmail.com', '9694911585', 'EMPLOYEE', 'FILIPINO', 'CAMELLA ISLAND PARK'),
(109, 'JOHN MARK', 'DELGADO', 'VELOSO', '269', 'ANGELES CITY', '1978-03-18', 46, 'SINGLE', 'MALE', 'YES', 'jmveloso20@gmail.com', '9694911585', 'VENDOR', 'FILIPINO', 'SITIO POOK'),
(110, 'CARLA ALEXANDRA', 'JIMENA', 'PERALTA', '189', 'QUEZON CITY', '2002-04-20', 22, 'SINGLE', 'FEMALE', 'YES', 'carlaalexandraperalta@gmail.com', '9694911585', 'STUDENT', 'FILIPINO', 'SITIO POOK'),
(111, 'ALICIA', 'JIMENA', 'PERALTA', '189', 'QUEZON CITY', '1961-02-09', 63, 'MARRIED', 'FEMALE', 'YES', 'aliciajimena02@gmail.com', '9694911585', 'N/A', 'FILIPINO', 'SITIO POOK'),
(112, 'GABRIEL', 'JIMENA', 'PERALTA', 'BLK 44 LOT 17', 'MANILA', '1999-11-30', 25, 'SINGLE', 'MALE', 'YES', 'gabriel.peralta@gmail.com', '9694911585', 'N/A', 'FILIPINO', 'SITIO ILAYA'),
(113, 'RICARDO', 'GOMEZ', 'SALAZAR', 'BLK 48 LOT. 6', 'BACOLOD CITY', '0169-07-29', 55, 'MARRIED', 'MALE', 'YES', 'salazarricardo@gmail.com', '9694911585', 'EMPLOYEE', 'FILIPINO', 'RIDGEVIEW'),
(114, 'SOFIA ALLIAH', 'MATILLA', 'MENDOZA', '186', 'DASMARIÑAS CITY, CAVITE', '2004-02-12', 20, 'SINGLE', 'FEMALE', 'YES', 'sofiamendoza@gmail.com', '9694911585', 'STUDENT', 'FILIPINO', 'SITIO POOK'),
(115, 'ROSARIO', 'QUIRINO', 'MARTINEZ', '579', 'NAGA CITY, CAMARINES SUR', '1968-05-14', 68, 'MARRIED', 'FEMALE', 'YES', 'r0sarioalvar3z@gmail.com', '9694911585', 'HOUSEWIFE', 'FILIPINO', 'SITIO ILAYA'),
(116, 'PEDRO', 'LEONES', 'SALVADOR', '124', 'BATANGAS CITY', '1967-10-27', 57, 'MARRIED', 'MALE', 'YES', 'salvadorramos25@gmail.com', '9694911585', 'DRIVER', 'FILIPINO', 'SITIO POOK'),
(117, 'ELENA KAYE', 'MARTINEZ', 'BUCAL', '465', 'DASMARIÑAS CITY, CAVITE', '1991-09-08', 33, 'SINGLE', 'FEMALE', 'YES', 'bucal.elena@gmail.com', '9694911585', 'N/A', 'FILIPINO', 'SITIO ILAYA'),
(118, 'ALJOHN', 'VIRAY', 'PARAON', '213', 'NAVOTAS CITY', '1987-06-21', 37, 'SINGLE', 'MALE', 'YES', 'aljohnviray@gmail.com', '9694911585', 'SECURITY GUARD', 'FILIPINO', 'SITIO POOK'),
(119, 'CARL ANDREI', 'CINCO', 'RIVERA', '589', 'SANTA ROSA CITY', '1984-04-30', 40, 'MARRIED', 'MALE', 'YES', 'dreipogi3000@gmail.com', '9694911585', 'POLICE', 'FILIPINO', 'SITIO ILAYA'),
(120, 'JESSIELYN', 'MALMIS', 'SANDOY', 'BLK 5 LOT 10', 'ILOILO CITY', '1988-12-26', 26, 'SINGLE', 'FEMALE', 'YES', 'jessmalmissandoy14@gmail.com', '9694911585', 'RECEPTIONIST', 'FILIPINO', 'SITIO ILAYA'),
(121, 'DHERVIN KYLE', 'GEMOTO', 'TORDECILLA', 'BLK 9 LOT 21', 'URDANETA CITY', '1976-09-22', 46, 'MARRIED', 'MALE', 'YES', 'dhervinkyle1976@gmail.com', '9694911585', 'EMPLOYEE', 'FILIPINO', 'SITIO ILAYA'),
(122, 'ALLEN', 'CASTRO', 'PULAO', '289', 'BACOOR CITY', '1975-02-26', 49, 'SINGLE', 'MALE', 'YES', 'allenjayveepula0@gmail.com', '9694911585', 'EMPLOYEE', 'FILIPINO', 'SITIO POOK'),
(124, 'ELAINE VICTORIA', 'RECTO', 'CONCEPCION', 'BLK. 16 LOT. 30', 'DASMARIÑAS CITY, CAVITE', '2004-04-06', 20, 'SINGLE', 'FEMALE', 'YES', 'vivivictoria04@gmail.com', '9694911585', 'STUDENT', 'FILIPINO', 'RIDGEVIEW'),
(125, 'MARIS', 'LOYOLA', 'SOLOMON', 'BLK. 42 LOT. 17', 'CABANATUAN CITY', '1953-09-14', 71, 'WIDOWED', 'FEMALE', 'YES', 'solomonmaris@gmail.com', '9694911585', 'HOUSEWIFE', 'FILIPINO', 'RIDGEVIEW'),
(126, 'CHRISTINA', 'SANTOS', 'LOPEZ', 'BLK. 29 LOT. 63', 'ORMOC CITY', '1959-01-07', 65, 'MARRIED', 'FEMALE', 'YES', 'jesslopez17@gmail.com', '9694911585', 'HOUSEWIFE', 'FILIPINO', 'RIDGEVIEW'),
(127, 'LUIS', 'HERNANDEZ', 'SANTOS', 'BLK. 2 LOT 13', 'MALABON CITY', '1992-04-19', 32, 'SINGLE', 'MALE', 'YES', 'cl.martinez@gmail.com', '9694911585', 'MANAGER', 'FILIPINO', 'RIDGEVIEW'),
(128, 'JUAN', 'DELA CRUZ', 'SANTOS', 'BLK. 12 LOT. 5', 'CEBU', '1992-10-05', 31, 'SINGLE', 'MALE', 'YES', 'juan.santos@gmail.com', '9694911585', 'ENGINEER', 'FILIPINO', 'MABUHAY HOMES 2000'),
(129, 'MARIA', 'REYES', 'GONZALES', 'BLK. 7 LOT. 20', 'DAVAO', '1985-08-22', 38, 'MARRIED', 'FEMALE', 'YES', 'maria.gonzales@gmail.com', '9694911585', 'MANAGER', 'FILIPINO', 'CAMELLA ISLAND PARK'),
(130, 'JOSE', 'DIZON', 'MERCADO', 'BLK. 15 LOT. 3', 'MANILA', '1995-12-30', 28, 'SINGLE', 'MALE', 'YES', 'jose.mercado@gmail.com', '9694911585', 'IT SPECIALIST', 'FILIPINO', 'MABUHAY HOMES 2000'),
(131, 'ANNA', 'PASCUAL', 'CRUZ', 'BLK. 8 LOT 18', 'CAVITE', '1998-02-15', 26, 'SINGLE', 'FEMALE', 'YES', 'anna.cruz@gmail.com', '9694911585', 'NURSE', 'FILIPINO', 'CAMELLA ISLAND PARK'),
(132, 'MIGUEL', 'SANTOS', 'RIVERA', 'BLK 2. LOT. 7', 'BATANGAS', '1980-05-07', 40, 'MARRIED', 'MALE', 'YES', 'miguel.rivera@gmail.com', '9694911585', 'BUSINESS MAN', 'FILIPINO', 'MABUHAY HOMES 2000'),
(133, 'CARLA', 'DOMINGUEZ', 'LOPEZ', 'BLK. 10 LOT. 12', 'PAMPANGA', '1993-09-14', 30, 'WIDOWED', 'FEMALE', 'YES', 'carla.lopez@gmail.com', '9694911585', 'ACCOUNTANT', 'FILIPINO', 'CAMELLA ISLAND PARK'),
(134, 'ROBERTO', 'VALDEZ', 'AQUINO', 'BLK. 5 LOT. 23', 'ZAMBALES', '1987-12-06', 37, 'SEPARATED', 'MALE', 'YES', 'roberto.aquino@gmail.com', '9694911585', 'POLICE OFFICER', 'FILIPINO', 'MABUHAY HOMES 2000'),
(135, 'KATRINA', 'DEL ROSARIO', 'FAJARDO', 'BLK. 3 LOT. 17', 'QUEZON', '1990-09-11', 33, 'SINGLE', 'FEMALE', 'YES', 'katrina.fajardo@gmail.com', '9694911585', 'ARCHITECT', 'FILIPINO', 'CAMELLA ISLAND PARK'),
(136, 'DANIEL', 'MENDOZA', 'HERRERA', 'BLK. 6 LOT. 9', 'ILOCOS', '1996-03-21', 28, 'MARRIED', 'MALE', 'YES', 'danile.herrera@gmail.com', '9694911585', 'CHEF', 'FILIPINO', 'MABUHAY HOMES 2000'),
(137, 'SOPHIA', 'LIM', 'TORRES', 'BLK. 4 LOT. 14', 'BAGUIO', '1999-10-25', 25, 'SINGLE', 'FEMALE', 'YES', 'sophia.torres@gmail.com', '9694911585', 'ARTIST', 'FILIPINO', 'CAMELLA ISLAND PARK'),
(138, 'VINCENT', 'RAMIREZ', 'SANTOS', 'BLK. 9 LOT. 21', 'LAGUNA', '1991-04-18', 33, 'SINGLE', 'MALE', 'YES', 'vincent.santos@gmail.com', '9694911585', 'GRAPHIC DESIGNER', 'FILIPINO', 'MABUHAY HOMES 2000'),
(139, 'ANGELA', 'FERNANDEZ', 'CRUZ', 'BLK. 11 LOT. 9', 'QUEZON CITY', '1989-07-30', 35, 'MARRIED', 'FEMALE', 'YES', 'angela.cruz@gmail.com', '9694911585', 'DOCTOR', 'FILIPINO', 'CAMELLA ISLAND PARK'),
(140, 'MARCO', 'SORIANO', 'DELA PAZ', 'BLK. 14 LOT. 6', 'DAVAO', '1995-10-01', 29, 'SINGLE', 'MALE', 'YES', 'marco.delapaz@gmail.com', '9694911585', 'CIVIL ENGINEER', 'FILIPINO', 'MABUHAY HOMES 2000'),
(141, 'CAMILLE', 'BAUTISTA', 'REYES', 'BLK. 18 LOT. 2', 'ILOILO', '1994-06-22', 30, 'SINGLE', 'FEMALE', 'YES', 'camille.reyes@gmail.com', '9694911585', 'TEACHER', 'FILIPINO', 'CAMELLA ISLAND PARK'),
(142, 'RICHARD', 'CRUZ', 'VELASCO', 'BLK. 13 LOT. 10', 'CEBU', '1982-02-14', 42, 'MARRIED', 'MALE', 'YES', 'richard.velasco@gmail.com', '9694911585', 'LAWYER', 'FILIPINO', 'MABUHAY HOMES 2000'),
(143, 'JOANNA', 'VILLANUEVA', 'OCAMPO', 'BLK. 17 LOT. 11', 'PAMPANGA', '1996-05-05', 28, 'SINGLE', 'FEMALE', 'YES', 'joanna.ocampo@gmail.com', '9694911585', 'JOURNALIST', 'FILIPINO', 'CAMELLA ISLAND PARK'),
(144, 'PATRICK', 'LOPEZ', 'MARQUEZ', 'BLK. 20 LOT. 4', 'MANILA', '1993-08-17', 31, 'SINGLE', 'MALE', 'YES', 'patrick.marquez@gmail.com', '9694911585', 'BANKER', 'FILIPINO', 'MABUHAY HOMES 2000'),
(145, 'MELISSA', 'NAVARRO', 'SANTOS', 'BLK. 15 LOT. 8', 'CAVITE', '1990-08-11', 34, 'MARRIED', 'FEMALE', 'YES', 'melissa.santos@gmail.com', '9694911585', 'NURSE', 'FILIPINO', 'CAMELLA ISLAND PARK'),
(146, 'ANTHONY', 'DELGADO', 'GUTIERREZ', 'BLK. 7 LOT. 15', 'ZAMBOANGA', '1988-12-09', 36, 'WIDOWED', 'MALE', 'YES', 'anthony.gutierrez@gmail.com', '9694911585', 'ENTREPRENEUR', 'FILIPINO', 'MABUHAY HOMES 2000'),
(147, 'CHRISTINE', 'CASTRO', 'DE VERA', 'BLK. 10 LOT. 16', 'BAGUIO', '1997-12-20', 27, 'SINGLE', 'FEMALE', 'YES', 'christine.devera@gmail.com', '9694911585', 'SOCIAL WORKER', 'FILIPINO', 'CAMELLA ISLAND PARK'),
(148, 'KENNETH', 'AGULAR', 'RAMOS', 'BLK. 8 LOT. 3', 'BATANGAS', '1985-03-03', 39, 'MARRIED', 'MALE', 'YES', 'kenneth.ramos@gmail.com', '9694911585', 'SOFTWARE ENGINEER', 'FILIPINO', 'MABUHAY HOMES 2000'),
(149, 'LOUISE', 'MENDOZA', 'VILLANUEVA', 'BLK. 5 LOT. 22', 'QUEZON', '1992-02-10', 32, 'SINGLE', 'MALE', 'YES', 'louise.villanueva@gmail.com', '09694911585', 'PHARMACIST', 'FILIPINO', 'CAMELLA ISLAND PARK'),
(150, 'RAYMOND', 'TAN', 'GO', 'BLK. 6 LOT. 14', 'ILOILO', '1990-05-29', 34, 'MARRIED', 'MALE', 'YES', 'raymond.go@gmail.con', '9694911585', 'BUSINESS OWNER', 'FILIPINO', 'MABUHAY HOMES 2000'),
(151, 'FELICIA', 'UY', 'SY', 'BLK. 9 LOT. 19', 'CEBU', '1986-11-07', 38, 'SEPARATED', 'FEMALE', 'YES', 'felicia.sy@gmail.com', '9694911585', 'HR MANAGER', 'FILIPINO', 'CAMELLA ISLAND PARK'),
(152, 'BENEDICT', 'CHUA', 'LIM', 'BLK. 12 LOT. 1', 'DAVAO', '1999-01-28', 25, 'SINGLE', 'MALE', 'YES', 'bryan.lim@gmail.com', '9694911585', 'MECHANICAL ENGINEER', 'FILIPINO', 'MABUHAY HOMES 2000'),
(162, 'JENAMR', 'asdasd', 'Alano', 'BLK. 5 LOT. 22', 'QUEZON', '2025-03-16', 22, 'SINGLE', 'MALE', 'YES', 'asad@gmail.com', '09232323232', 'dasd', 'asdad', 'CAMELLA ISLAND PARK');

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
('2025-03-16', '2026-03-16', 11, 'Jenmara asd', 'dassad', 'Alano', 'Barangay Cedula', 73, 1094);

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
('BENEDICT', 'CHUA', 'LIM', 'admin', 'Jenmar0411', 'Male', 23, '2025-03-16', '2025-03-16', 'BLK. 5 LOT. 22', 'kjhjkjk', '09232323232', 'images.png', 35);

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=500;

--
-- AUTO_INCREMENT for table `barangay_incident`
--
ALTER TABLE `barangay_incident`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `barangay_information`
--
ALTER TABLE `barangay_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barangay_official`
--
ALTER TABLE `barangay_official`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `barangay_request`
--
ALTER TABLE `barangay_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `barangay_resident`
--
ALTER TABLE `barangay_resident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `barangay_revenue`
--
ALTER TABLE `barangay_revenue`
  MODIFY `OR_no` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1095;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
