-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 08:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vechicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_mobile_report`
--

CREATE TABLE `db_mobile_report` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `business_type` varchar(255) DEFAULT NULL,
  `barnch_code` varchar(4) NOT NULL DEFAULT 'CG10',
  `policy_start` date NOT NULL,
  `policy_tenure` int(1) NOT NULL DEFAULT 1,
  `exprie_date` date NOT NULL,
  `policy_numbers` int(11) NOT NULL,
  `master_policy_number` bigint(18) NOT NULL DEFAULT 920292229320000023,
  `risk_covered` varchar(22) NOT NULL DEFAULT 'ELECTRIC VEHICLE',
  `sum_insured` int(100) NOT NULL,
  `ODAmount` int(11) NOT NULL,
  `premium` int(11) NOT NULL,
  `GST` int(11) DEFAULT NULL,
  `salutation` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `name_policy_holder` varchar(50) NOT NULL,
  `date_birth` date NOT NULL,
  `invoice_no` varchar(3000) DEFAULT NULL,
  `customer_id` varchar(255) NOT NULL,
  `address_line_1` varchar(255) NOT NULL,
  `address_line_2` varchar(255) NOT NULL,
  `pincode` int(22) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `mobile` int(14) NOT NULL,
  `email` varchar(20) NOT NULL,
  `make` varchar(100) NOT NULL,
  `model` varchar(50) NOT NULL,
  `tear_manufacturing` varchar(10) NOT NULL,
  `type_body` varchar(20) DEFAULT NULL,
  `Chassis_No` varchar(50) NOT NULL,
  `Battery_No` varchar(50) NOT NULL,
  `Battery_kw` varchar(255) NOT NULL,
  `seting_capicty` int(3) NOT NULL DEFAULT 2,
  `Addresss_line_1` varchar(255) NOT NULL,
  `Addresss_line_2` varchar(255) NOT NULL,
  `pincodes` varchar(10) NOT NULL,
  `states` varchar(22) NOT NULL,
  `citys` varchar(20) NOT NULL,
  `nomine_name` varchar(20) DEFAULT NULL,
  `relation` varchar(11) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `genders` varchar(20) DEFAULT NULL,
  `finacer_name` varchar(28) NOT NULL,
  `finacer_address` varchar(100) NOT NULL,
  `financer_type` varchar(255) NOT NULL,
  `status_type` int(11) NOT NULL DEFAULT 0,
  `create_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_mobile_report`
--

INSERT INTO `db_mobile_report` (`id`, `bank_name`, `business_type`, `barnch_code`, `policy_start`, `policy_tenure`, `exprie_date`, `policy_numbers`, `master_policy_number`, `risk_covered`, `sum_insured`, `ODAmount`, `premium`, `GST`, `salutation`, `gender`, `name_policy_holder`, `date_birth`, `invoice_no`, `customer_id`, `address_line_1`, `address_line_2`, `pincode`, `state`, `city`, `mobile`, `email`, `make`, `model`, `tear_manufacturing`, `type_body`, `Chassis_No`, `Battery_No`, `Battery_kw`, `seting_capicty`, `Addresss_line_1`, `Addresss_line_2`, `pincodes`, `states`, `citys`, `nomine_name`, `relation`, `date_of_birth`, `genders`, `finacer_name`, `finacer_address`, `financer_type`, `status_type`, `create_at`, `updated_at`) VALUES
(8, 'DB mobile shop ', 'NEW BUSINESS ', 'CG10', '2023-03-24', 1, '2024-03-24', 900008, 920292229320000023, 'ELECTRIC VEHICLE', 5908900, 103406, 122019, 18613, 'MR', 'FEMALE ', 'sandeep patidar', '2023-03-16', 'MB/MP/0000008', '0000008', '12124 New Mexico 14', '12124 New Mexico 14', 87008, 'Andhra Pradesh', 'Cedar Crest', 2147483647, 'sandeeppatidar831940', '323434', '2343', '2121', NULL, '4sdf345tgfvfxcv', '2344234fsd', '55.98', 2, '12124 New Mexico 14', '12124 New Mexico 14', '87008', 'Andhra Pradesh', 'Cedar Crest', NULL, NULL, NULL, NULL, 'demo ', '12124 New Mexico 14', 'HYPOTHECATED', 2, '2023-03-29 10:53:09', '2023-03-29 10:53:09'),
(9, 'sandeep ', 'NEW BUSINESS ', 'CG10', '2023-03-29', 1, '2024-03-29', 900009, 920292229320000023, 'ELECTRIC VEHICLE', 320000, 5600, 6608, 1008, 'MR', 'MALE', 'nishant ', '2023-03-29', 'MB/MP/0000009', '0000009', '12124 New Mexico 14', '12124 New Mexico 14', 87008, 'Andaman and Nicobar Islands', 'Cedar Crest', 2147483647, 'sandeeppatidar831940', '323434', '2343', '2121', 'METALLIC ', '4sdf345tgfvfxcv', '2344234fsd', '55.98', 2, '12124 New Mexico 14', '12124 New Mexico 14', '87008', 'Andaman and Nicobar Is', 'Cedar Crest', 'demo', 'hello', '2023-03-23', 'FEMALE ', 'demo ', '12124 New Mexico 14', 'HYPOTHECATED', 1, '2023-03-29 11:01:14', '2023-03-29 11:01:14'),
(33, 'mobile ', 'NEW BUSINESS ', 'CG10', '2023-03-22', 1, '2024-03-22', 900033, 920292229320000023, 'ELECTRIC VEHICLE', 21000, 0, 0, 0, 'MR', 'MALE', 'mohit patidar', '2023-03-14', 'MB/MP/0000032', '0000033', '12124 New Mexico 14', '12124 New Mexico 14', 87008, 'Andhra Pradesh', 'Cedar Crest', 2147483647, 'sandeeppatidar831940', '323434', '2343', '2121', NULL, '4sdf345tgfvfxcv', '2344234fsd', '55.98', 2, '12124 New Mexico 14', '12124 New Mexico 14', '87008', 'Andhra Pradesh', 'Cedar Crest', NULL, NULL, NULL, NULL, 'demo ', '12124 New Mexico 14', 'HYPOTHECATED', 0, '2023-03-31 12:21:04', '2023-03-31 12:21:04'),
(34, 'sandeep patidar', 'NEW BUSINESS ', 'CG10', '2023-03-23', 1, '2024-03-23', 900034, 920292229320000023, 'ELECTRIC VEHICLE', 21000, 420000, 495600, 75600, 'MR', 'MALE', 'sandeep patidar', '2023-03-15', 'MB/MP/0000033', '0000034', '12124 New Mexico 14', '12124 New Mexico 14', 87008, 'Andhra Pradesh', 'Cedar Crest', 2147483647, 'sandeeppatidar831940', '323434', '2343', '2121', NULL, '4sdf345tgfvfxcv', '2344234fsd', '55.98', 2, '12124 New Mexico 14', '12124 New Mexico 14', '87008', 'Andhra Pradesh', 'Cedar Crest', NULL, NULL, NULL, NULL, 'demo ', '12124 New Mexico 14', 'HYPOTHECATED', 0, '2023-03-31 12:35:23', '2023-03-31 12:35:23'),
(35, 'vivo store', 'NEW BUSINESS ', 'CG10', '2023-03-22', 1, '2024-03-22', 900035, 920292229320000023, 'ELECTRIC VEHICLE', 12000, 180000, 1500, 0, 'MR', 'MALE', 'ram patidar', '2023-03-15', 'MB/MP/0000034', '0000035', '12124 New Mexico 14', '12124 New Mexico 14', 87008, 'Andhra Pradesh', 'Cedar Crest', 2147483647, 'sandeeppatidar831940', '323434', '2343', '2121', NULL, '4sdf345tgfvfxcv', '2344234fsd', '55.98', 2, '12124 New Mexico 14', '12124 New Mexico 14', '87008', 'Andhra Pradesh', 'Cedar Crest', NULL, NULL, NULL, NULL, 'demo ', '12124 New Mexico 14', 'HYPOTHECATED', 0, '2023-03-31 12:48:16', '2023-03-31 12:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `db_report`
--

CREATE TABLE `db_report` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `business_type` varchar(255) DEFAULT NULL,
  `barnch_code` varchar(4) NOT NULL DEFAULT 'CG10',
  `policy_start` date NOT NULL,
  `policy_tenure` int(1) NOT NULL DEFAULT 1,
  `exprie_date` date NOT NULL,
  `policy_numbers` int(11) NOT NULL,
  `master_policy_number` bigint(18) NOT NULL DEFAULT 920292229320000023,
  `risk_covered` varchar(22) NOT NULL DEFAULT 'ELECTRIC VEHICLE',
  `sum_insured` int(100) NOT NULL,
  `ODAmount` int(11) NOT NULL,
  `premium` int(11) NOT NULL,
  `GST` int(11) NOT NULL,
  `salutation` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `name_policy_holder` varchar(50) NOT NULL,
  `date_birth` date NOT NULL,
  `invoice_no` varchar(3000) DEFAULT NULL,
  `customer_id` varchar(255) NOT NULL,
  `address_line_1` varchar(255) NOT NULL,
  `address_line_2` varchar(255) NOT NULL,
  `pincode` int(22) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `mobile` int(14) NOT NULL,
  `email` varchar(20) NOT NULL,
  `make` varchar(100) NOT NULL,
  `model` varchar(50) NOT NULL,
  `tear_manufacturing` varchar(10) NOT NULL,
  `type_body` varchar(20) DEFAULT NULL,
  `Chassis_No` varchar(50) NOT NULL,
  `Battery_No` varchar(50) NOT NULL,
  `Battery_kw` varchar(255) NOT NULL,
  `seting_capicty` int(3) NOT NULL DEFAULT 2,
  `Addresss_line_1` varchar(255) NOT NULL,
  `Addresss_line_2` varchar(255) NOT NULL,
  `pincodes` varchar(10) NOT NULL,
  `states` varchar(22) NOT NULL,
  `citys` varchar(20) NOT NULL,
  `nomine_name` varchar(20) DEFAULT NULL,
  `relation` varchar(11) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `genders` varchar(20) DEFAULT NULL,
  `finacer_name` varchar(28) NOT NULL,
  `finacer_address` varchar(100) NOT NULL,
  `financer_type` varchar(255) NOT NULL,
  `status_type` int(11) NOT NULL DEFAULT 0,
  `create_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_report`
--

INSERT INTO `db_report` (`id`, `bank_name`, `business_type`, `barnch_code`, `policy_start`, `policy_tenure`, `exprie_date`, `policy_numbers`, `master_policy_number`, `risk_covered`, `sum_insured`, `ODAmount`, `premium`, `GST`, `salutation`, `gender`, `name_policy_holder`, `date_birth`, `invoice_no`, `customer_id`, `address_line_1`, `address_line_2`, `pincode`, `state`, `city`, `mobile`, `email`, `make`, `model`, `tear_manufacturing`, `type_body`, `Chassis_No`, `Battery_No`, `Battery_kw`, `seting_capicty`, `Addresss_line_1`, `Addresss_line_2`, `pincodes`, `states`, `citys`, `nomine_name`, `relation`, `date_of_birth`, `genders`, `finacer_name`, `finacer_address`, `financer_type`, `status_type`, `create_at`, `updated_at`) VALUES
(1, 'hello', 'NEW BUSINESS ', 'CG10', '2022-12-02', 1, '2023-12-02', 900001, 920292229320000023, 'ELECTRIC VEHICLE', 32000, 560, 661, 101, 'MR', 'MALE', 'sandeep demo', '2022-12-13', 'MET0000001', '0000001', 'indore', 'indore', 234234, 'Chhattisgarh', 'indore', 2147483647, 'Email@gmail.com', '323434', '2343', '2121', 'METALLIC ', '4sdf345tgfvfxcv', '2344234fsd', '55.98', 2, 'indore', 'indore', '234234', 'Chhattisgarh', 'indore', 'demo', 'hello', '2022-12-02', 'FEMALE ', '', '', 'NOT HYPOTHECATED', 1, NULL, NULL),
(2, 'BABA ELECTRIC VEHICLE', 'NEW BUSINESS ', 'CG10', '2022-12-02', 1, '2023-12-02', 900002, 920292229320000023, 'ELECTRIC VEHICLE', 75000, 1313, 1549, 236, 'MR', 'MALE', 'UTTAM KUMAR', '1982-06-06', 'MET0000002', '0000002', 'S/O NANKU RAM, HOUSE NO., BICH GALI KALA MANCH KE PASS', 'WARD NO.6, BHSNPURI', 491227, 'Chhattisgarh', 'DHANELI, BALOD', 2147483647, 'METELECTRICVEHICLEIN', 'COSBIKE', 'FUSION 90', '2022', 'METALLIC ', '18720403231548', 'UNA24E022200386', '1.5', 2, 'S/O NANKU RAM, HOUSE NO., BICH GALI KALA MANCH KE PASS', 'WARD NO.6, BHSNPURI', '491227', 'Chhattisgarh', 'DHANELI, BALOD', '', '', '0000-00-00', 'MALE', '', '', 'NOT HYPOTHECATED', 1, NULL, NULL),
(3, 'sandeep', 'NEW BUSINESS ', 'CG10', '2023-01-17', 1, '2024-01-17', 900003, 920292229320000023, 'ELECTRIC VEHICLE', 50000, 875, 1033, 158, 'MR', 'MALE', 'test', '2023-01-16', 'MET0000003', '0000003', 'indore', 'indore', 234234, 'Madhya Pradesh', 'indore', 2147483647, 'Email@gmail.com', '323434', '2343', '2121', 'METALLIC ', '4sdf345tgfvfxcv', '2344234fsd', '55.98', 2, 'indore', 'indore', '234234', 'Madhya Pradesh', 'indore', 'demo', 'hello', '2023-01-19', 'MALE', 'demo ', 'indore', 'HYPOTHECATED', 1, NULL, NULL),
(4, 'BABA ELECTRIC VEHICLE', 'NEW BUSINESS ', 'CG10', '2023-01-17', 1, '2024-01-17', 900004, 920292229320000023, 'ELECTRIC VEHICLE', 85500, 1496, 1765, 269, 'MR', 'MALE', 'SUSHIL SAHU', '1979-06-17', 'MET0000004', '0000004', 'S/O NOHAR SINGH SAHU, KANWAR', 'WARD 10, KANWAR', 491227, 'Chhattisgarh', 'BALOD', 2147483647, 'policy@metelectricve', 'COSBIKE', 'FUSION DB', '2023', 'METALLIC ', 'CBFLK2042200618', '2111285019', '2.8', 2, 'S/O NOHAR SINGH SAHU, KANWAR', 'WARD 10, KANWAR', '491227', 'Chhattisgarh', 'BALOD', '', '', '0000-00-00', 'MALE', '', '', 'NOT HYPOTHECATED', 1, NULL, NULL),
(5, 'BALOD', 'NEW BUSINESS ', 'CG10', '2023-03-11', 1, '2024-03-11', 900005, 920292229320000023, 'ELECTRIC VEHICLE', 80000, 1400, 1652, 252, 'MR', 'MALE', 'HEMANT KUMAR SAHU', '1976-07-27', 'MET0000005', '0000005', 'S/O KESHAV LAL SAHU, HOUSE NO.98, PURANA BASTI, WARD NO. 98', 'JHALMALA,  BALOD, ADMABAD, ', 491226, 'Chhattisgarh', 'BALOD', 2147483647, 'amarkashyap122@gmail', 'KINETIC', 'ZING HSS', '2023', 'METALLIC ', 'M2TL21EIIM5H05495', 'JM60V250W20H', '1.5', 2, 'S/O KESHAV LAL SAHU, HOUSE NO.98, PURANA BASTI, WARD NO. 98', 'JHALMALA,  BALOD, ADMABAD, ', '491226', 'Chhattisgarh', 'BALOD', '', '', '0000-00-00', 'MALE', '', '', 'NOT HYPOTHECATED', 1, NULL, NULL),
(6, 'METRO OKAYA', 'NEW BUSINESS ', 'CG10', '2023-03-12', 1, '2024-03-12', 900006, 920292229320000023, 'ELECTRIC VEHICLE', 70000, 1225, 1446, 221, 'MR', 'TRANSGENDE', 'SAGAR KHANRA', '1995-06-14', 'MET0000006', '0000006', 'KOLKATA KA LADKA', 'SOUTH KOKLKJATA', 700050, 'West Bengal', 'KOLKATA', 2147483647, 'ASDFHASUIDHUSIH@GMAI', 'OKAYA ', 'FAAST F4', '2023', 'METALLIC ', 'SDFCSDCFDSCIDSJC', 'HSDGVCGDSGVCGDS', '1.5', 2, 'KOLKATA KA LADKA', 'SOUTH KOKLKJATA', '700050', 'West Bengal', 'KOLKATA', '', '', '0000-00-00', 'MALE', '', '', 'NOT HYPOTHECATED', 1, NULL, NULL),
(7, 'patidar mobile store', 'NEW BUSINESS ', 'CG10', '2023-03-24', 1, '2024-03-24', 900007, 920292229320000023, 'ELECTRIC VEHICLE', 20000, 350, 413, 63, 'MR', 'MALE', 'sandeep patidar', '2023-03-07', 'MET0000007', '0000007', '12124 New Mexico 14', '12124 New Mexico 14', 87008, 'Andhra Pradesh', 'Cedar Crest', 2147483647, 'sandeeppatidar831940', '323434', '2343', '2121', NULL, '4sdf345tgfvfxcv', '2344234fsd', '55.98', 2, '12124 New Mexico 14', '12124 New Mexico 14', '87008', 'Andhra Pradesh', 'Cedar Crest', NULL, NULL, NULL, NULL, 'demo ', '12124 New Mexico 14', 'HYPOTHECATED', 2, NULL, NULL),
(8, 'DB mobile shop ', 'NEW BUSINESS ', 'CG10', '2023-03-24', 1, '2024-03-24', 900008, 920292229320000023, 'ELECTRIC VEHICLE', 5908900, 103406, 122019, 18613, 'MR', 'FEMALE ', 'sandeep patidar', '2023-03-16', 'MET0000008', '0000008', '12124 New Mexico 14', '12124 New Mexico 14', 87008, 'Andhra Pradesh', 'Cedar Crest', 2147483647, 'sandeeppatidar831940', '323434', '2343', '2121', NULL, '4sdf345tgfvfxcv', '2344234fsd', '55.98', 2, '12124 New Mexico 14', '12124 New Mexico 14', '87008', 'Andhra Pradesh', 'Cedar Crest', NULL, NULL, NULL, NULL, 'demo ', '12124 New Mexico 14', 'HYPOTHECATED', 2, '2023-03-29 10:53:09', '2023-03-29 10:53:09'),
(9, 'sandeep ', 'NEW BUSINESS ', 'CG10', '2023-03-29', 1, '2024-03-29', 900009, 920292229320000023, 'ELECTRIC VEHICLE', 320000, 5600, 6608, 1008, 'MR', 'MALE', 'nishant ', '2023-03-29', 'MET0000009', '0000009', '12124 New Mexico 14', '12124 New Mexico 14', 87008, 'Andaman and Nicobar Islands', 'Cedar Crest', 2147483647, 'sandeeppatidar831940', '323434', '2343', '2121', 'METALLIC ', '4sdf345tgfvfxcv', '2344234fsd', '55.98', 2, '12124 New Mexico 14', '12124 New Mexico 14', '87008', 'Andaman and Nicobar Is', 'Cedar Crest', 'demo', 'hello', '2023-03-23', 'FEMALE ', 'demo ', '12124 New Mexico 14', 'HYPOTHECATED', 1, '2023-03-29 11:01:14', '2023-03-29 11:01:14');

-- --------------------------------------------------------

--
-- Table structure for table `db_users`
--

CREATE TABLE `db_users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_users`
--

INSERT INTO `db_users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', 123456, '2022-10-01 09:53:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_mobile_report`
--
ALTER TABLE `db_mobile_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_report`
--
ALTER TABLE `db_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_users`
--
ALTER TABLE `db_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_mobile_report`
--
ALTER TABLE `db_mobile_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `db_report`
--
ALTER TABLE `db_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `db_users`
--
ALTER TABLE `db_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
