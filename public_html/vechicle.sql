-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 08, 2023 at 03:20 AM
-- Server version: 5.7.39-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `agent_code` varchar(45) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `account_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `agent_code`, `name`, `mobile`, `email`, `address`, `created_at`, `account_id`) VALUES
(4, 'AG003', 'sandeep patidar', '5052819100', 'php4.dbvertex@gmail.com', '12124 New Mexico 14', '2023-05-31 12:09:45', 'acc_JpE7zyIanJOXV7'),
(5, 'AG004', 'sandeep patidar', '5052819100', 'php4.dbvertex@gmail.com', '12124 New Mexico 14', '2023-05-31 12:10:14', 'acc_LwvzOc3a1KTb96');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `message`, `created_at`) VALUES
(0, 'sandeep patidar', 'php4.dbvertex@gmail.com', 2147483647, 'heloooo', '2023-05-12 07:33:16'),
(0, 'sandeep patidar', 'php4.dbvertex@gmail.com', 2147483647, 'hello', '2023-05-12 07:34:23');

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
  `policy_tenure` int(1) NOT NULL DEFAULT '1',
  `exprie_date` date NOT NULL,
  `policy_numbers` int(11) NOT NULL,
  `master_policy_number` bigint(18) NOT NULL DEFAULT '92029222932000001',
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
  `mobile` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `make` varchar(100) NOT NULL,
  `model` varchar(50) NOT NULL,
  `tear_manufacturing` varchar(10) NOT NULL,
  `Chassis_No` varchar(50) NOT NULL,
  `Battery_No` varchar(50) NOT NULL,
  `Battery_kw` varchar(255) NOT NULL,
  `seting_capicty` int(3) NOT NULL DEFAULT '2',
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
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `agent_code` varchar(50) DEFAULT NULL,
  `shop_code` varchar(45) DEFAULT NULL,
  `pay_type` int(12) NOT NULL DEFAULT '0',
  `payment_link` varchar(255) DEFAULT NULL,
  `payment_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_mobile_report`
--

INSERT INTO `db_mobile_report` (`id`, `bank_name`, `business_type`, `barnch_code`, `policy_start`, `policy_tenure`, `exprie_date`, `policy_numbers`, `master_policy_number`, `risk_covered`, `sum_insured`, `ODAmount`, `premium`, `GST`, `salutation`, `gender`, `name_policy_holder`, `date_birth`, `invoice_no`, `customer_id`, `address_line_1`, `address_line_2`, `pincode`, `state`, `city`, `mobile`, `email`, `make`, `model`, `tear_manufacturing`, `Chassis_No`, `Battery_No`, `Battery_kw`, `seting_capicty`, `Addresss_line_1`, `Addresss_line_2`, `pincodes`, `states`, `citys`, `nomine_name`, `relation`, `date_of_birth`, `genders`, `finacer_name`, `finacer_address`, `financer_type`, `create_at`, `updated_at`, `agent_code`, `shop_code`, `pay_type`, `payment_link`, `payment_status`) VALUES
(8, 'DB mobile shop ', 'NEW BUSINESS ', 'CG10', '2023-03-24', 1, '2024-03-24', 900008, 920292229320000023, 'ELECTRIC VEHICLE', 5908900, 103406, 122019, 18613, 'MR', 'FEMALE ', 'sandeep patidar', '2023-03-16', 'MB/MP/0000008', '0000008', '12124 New Mexico 14', '12124 New Mexico 14', 87008, 'Andhra Pradesh', 'Cedar Crest', '2147483647', 'sandeeppatidar831940', '323434', '2343', '2121', '4sdf345tgfvfxcv', '2344234fsd', '55.98', 2, '12124 New Mexico 14', '12124 New Mexico 14', '87008', 'Andhra Pradesh', 'Cedar Crest', NULL, NULL, NULL, NULL, 'demo ', '12124 New Mexico 14', 'HYPOTHECATED', '2023-03-29 10:53:09', '2023-03-29 10:53:09', NULL, NULL, 0, NULL, 0),
(9, 'sandeep ', 'NEW BUSINESS ', 'CG10', '2023-03-29', 1, '2024-03-29', 900009, 920292229320000023, 'ELECTRIC VEHICLE', 320000, 5600, 6608, 1008, 'MR', 'MALE', 'nishant ', '2023-03-29', 'MB/MP/0000009', '0000009', '12124 New Mexico 14', '12124 New Mexico 14', 87008, 'Andaman and Nicobar Islands', 'Cedar Crest', '2147483647', 'sandeeppatidar831940', '323434', '2343', '2121', '4sdf345tgfvfxcv', '2344234fsd', '55.98', 2, '12124 New Mexico 14', '12124 New Mexico 14', '87008', 'Andaman and Nicobar Is', 'Cedar Crest', 'demo', 'hello', '2023-03-23', 'FEMALE ', 'demo ', '12124 New Mexico 14', 'HYPOTHECATED', '2023-03-29 11:01:14', '2023-03-29 11:01:14', NULL, NULL, 0, NULL, 0),
(10, 'mobile', 'NEW BUSINESS ', 'CG10', '2023-04-21', 1, '2024-04-21', 900010, 920292229320000023, 'ELECTRIC VEHICLE', 10001, 2000, 2000, 0, 'MR', 'MALE', 'ram patidar', '2023-04-13', 'MB/MP/0000010', '0000010', '12124 New Mexico 14', '12124 New Mexico 14', 87008, 'Andaman and Nicobar Islands', 'Cedar Crest', '2147483647', 'sandeeppatidar831940', '323434', '2343', '2121', '4sdf345tgfvfxcv', '2344234fsd', '55.98', 2, '12124 New Mexico 14', '12124 New Mexico 14', '87008', 'Andaman and Nicobar Is', 'Cedar Crest', NULL, NULL, NULL, NULL, 'demo ', '12124 New Mexico 14', 'HYPOTHECATED', '2023-04-01 05:24:35', '2023-04-01 05:24:35', 'AG004', 'SP0019', 0, 'plink_LwgxsaGH3iF1X1', 0),
(11, 'MONU MOBILE', 'NEW BUSINESS ', 'CG10', '2023-04-02', 1, '2024-04-02', 900011, 92029222932000001, 'ELECTRIC VEHICLE', 20000, 1500, 1500, 0, 'MR', 'MALE', 'SHIVA ROY', '1999-06-19', 'MB/MP/0000011', '0000011', 'linghyadih', 'bilaspur', 495001, 'Chhattisgarh', 'bilaspur', '2147483647', 'policy@metelectricve', 'SAMSUNG ', 'A31', '2322', 'UVDHUDHVU6526', '122EWJBFHEBHBE', 'C5664554VVR5151', 2, 'linghyadih', 'bilaspur', '495001', 'Chhattisgarh', 'bilaspur', NULL, NULL, NULL, NULL, '', '', 'NOT HYPOTHECATED', '2023-04-02 11:00:30', '2023-04-02 11:00:30', NULL, NULL, 0, NULL, 0),
(12, 'sandeep testing', 'NEW BUSINESS ', 'CG10', '2023-06-16', 1, '2024-06-16', 900012, 92029222932000001, 'ELECTRIC VEHICLE', 240000, 5000, 5000, 0, 'MR', 'MALE', 'sandeep patidar', '2023-06-20', 'MB/MP/0000012', '0000012', '12124 New Mexico 14', '12124 New Mexico 14', 87008, 'Madhya Pradesh', 'Cedar Crest', '2147483647', 'php.dbvertex@gmail.c', '323434', '2343', '2121', '4sdf345tgfvfxcv', '2344234fsd', '55.98', 2, '12124 New Mexico 14', '12124 New Mexico 14', '87008', 'Madhya Pradesh', 'Cedar Crest', NULL, NULL, NULL, NULL, '', '', 'NOT HYPOTHECATED', '2023-06-01 12:58:53', '2023-06-01 12:58:53', 'AG003', 'SP001', 0, 'plink_LwfwXDRWQJlPXZ', 0),
(13, 'Testing', 'NEW BUSINESS ', 'CG10', '2023-06-01', 1, '2024-06-01', 900013, 92029222932000001, 'ELECTRIC VEHICLE', 21000, 2000, 2000, 0, 'MR', 'MALE', 'raju', '2023-06-01', 'MB/MP/0000013', '0000013', 'dewas', 'dewas', 455221, 'Madhya Pradesh', 'indore', '9754075878', 'php.dbvertex@gmail.c', '3213123123', '2023133123', '2013', '233213123123123123', '3214124124124124', '22.4', 2, 'dewas', 'dewas', '455221', 'Madhya Pradesh', 'indore', NULL, NULL, NULL, NULL, '', '', 'NOT HYPOTHECATED', '2023-06-01 13:04:13', '2023-06-01 13:04:13', 'AG003', 'SP001', 0, 'plink_LwfcJub4ys5b5i', 0);

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
  `policy_tenure` int(1) NOT NULL DEFAULT '1',
  `exprie_date` date NOT NULL,
  `policy_numbers` int(11) NOT NULL,
  `master_policy_number` bigint(18) NOT NULL DEFAULT '920292229320000023',
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
  `type_body` varchar(20) NOT NULL,
  `Chassis_No` varchar(50) NOT NULL,
  `Battery_No` varchar(50) NOT NULL,
  `Battery_kw` varchar(255) NOT NULL,
  `seting_capicty` int(3) NOT NULL DEFAULT '2',
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
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_report`
--

INSERT INTO `db_report` (`id`, `bank_name`, `business_type`, `barnch_code`, `policy_start`, `policy_tenure`, `exprie_date`, `policy_numbers`, `master_policy_number`, `risk_covered`, `sum_insured`, `ODAmount`, `premium`, `GST`, `salutation`, `gender`, `name_policy_holder`, `date_birth`, `invoice_no`, `customer_id`, `address_line_1`, `address_line_2`, `pincode`, `state`, `city`, `mobile`, `email`, `make`, `model`, `tear_manufacturing`, `type_body`, `Chassis_No`, `Battery_No`, `Battery_kw`, `seting_capicty`, `Addresss_line_1`, `Addresss_line_2`, `pincodes`, `states`, `citys`, `nomine_name`, `relation`, `date_of_birth`, `genders`, `finacer_name`, `finacer_address`, `financer_type`, `create_at`, `updated_at`) VALUES
(1, 'hello', 'NEW BUSINESS ', 'CG10', '2022-12-02', 1, '2023-12-02', 900001, 920292229320000023, 'ELECTRIC VEHICLE', 32000, 560, 661, 101, 'MR', 'MALE', 'sandeep demo', '2022-12-13', 'MET0000001', '0000001', 'indore', 'indore', 234234, 'Chhattisgarh', 'indore', 2147483647, 'Email@gmail.com', '323434', '2343', '2121', 'METALLIC ', '4sdf345tgfvfxcv', '2344234fsd', '55.98', 2, 'indore', 'indore', '234234', 'Chhattisgarh', 'indore', 'demo', 'hello', '2022-12-02', 'FEMALE ', '', '', 'NOT HYPOTHECATED', NULL, NULL),
(2, 'BABA ELECTRIC VEHICLE', 'NEW BUSINESS ', 'CG10', '2022-12-02', 1, '2023-12-02', 900002, 920292229320000023, 'ELECTRIC VEHICLE', 75000, 1313, 1549, 236, 'MR', 'MALE', 'UTTAM KUMAR', '1982-06-06', 'MET0000002', '0000002', 'S/O NANKU RAM, HOUSE NO., BICH GALI KALA MANCH KE PASS', 'WARD NO.6, BHSNPURI', 491227, 'Chhattisgarh', 'DHANELI, BALOD', 2147483647, 'METELECTRICVEHICLEIN', 'COSBIKE', 'FUSION 90', '2022', 'METALLIC ', '18720403231548', 'UNA24E022200386', '1.5', 2, 'S/O NANKU RAM, HOUSE NO., BICH GALI KALA MANCH KE PASS', 'WARD NO.6, BHSNPURI', '491227', 'Chhattisgarh', 'DHANELI, BALOD', '', '', '0000-00-00', 'MALE', '', '', 'NOT HYPOTHECATED', NULL, NULL),
(3, 'sandeep', 'NEW BUSINESS ', 'CG10', '2023-01-17', 1, '2024-01-17', 900003, 920292229320000023, 'ELECTRIC VEHICLE', 50000, 875, 1033, 158, 'MR', 'MALE', 'test', '2023-01-16', 'MET0000003', '0000003', 'indore', 'indore', 234234, 'Madhya Pradesh', 'indore', 2147483647, 'Email@gmail.com', '323434', '2343', '2121', 'METALLIC ', '4sdf345tgfvfxcv', '2344234fsd', '55.98', 2, 'indore', 'indore', '234234', 'Madhya Pradesh', 'indore', 'demo', 'hello', '2023-01-19', 'MALE', 'demo ', 'indore', 'HYPOTHECATED', NULL, NULL),
(4, 'BABA ELECTRIC VEHICLE', 'NEW BUSINESS ', 'CG10', '2023-01-17', 1, '2024-01-17', 900004, 920292229320000023, 'ELECTRIC VEHICLE', 85500, 1496, 1765, 269, 'MR', 'MALE', 'SUSHIL SAHU', '1979-06-17', 'MET0000004', '0000004', 'S/O NOHAR SINGH SAHU, KANWAR', 'WARD 10, KANWAR', 491227, 'Chhattisgarh', 'BALOD', 2147483647, 'policy@metelectricve', 'COSBIKE', 'FUSION DB', '2023', 'METALLIC ', 'CBFLK2042200618', '2111285019', '2.8', 2, 'S/O NOHAR SINGH SAHU, KANWAR', 'WARD 10, KANWAR', '491227', 'Chhattisgarh', 'BALOD', '', '', '0000-00-00', 'MALE', '', '', 'NOT HYPOTHECATED', NULL, NULL),
(5, 'BALOD', 'NEW BUSINESS ', 'CG10', '2023-03-11', 1, '2024-03-11', 900005, 920292229320000023, 'ELECTRIC VEHICLE', 80000, 1400, 1652, 252, 'MR', 'MALE', 'HEMANT KUMAR SAHU', '1976-07-27', 'MET0000005', '0000005', 'S/O KESHAV LAL SAHU, HOUSE NO.98, PURANA BASTI, WARD NO. 98', 'JHALMALA,  BALOD, ADMABAD, ', 491226, 'Chhattisgarh', 'BALOD', 2147483647, 'amarkashyap122@gmail', 'KINETIC', 'ZING HSS', '2023', 'METALLIC ', 'M2TL21EIIM5H05495', 'JM60V250W20H', '1.5', 2, 'S/O KESHAV LAL SAHU, HOUSE NO.98, PURANA BASTI, WARD NO. 98', 'JHALMALA,  BALOD, ADMABAD, ', '491226', 'Chhattisgarh', 'BALOD', '', '', '0000-00-00', 'MALE', '', '', 'NOT HYPOTHECATED', NULL, NULL),
(6, 'METRO OKAYA', 'NEW BUSINESS ', 'CG10', '2023-03-12', 1, '2024-03-12', 900006, 920292229320000023, 'ELECTRIC VEHICLE', 70000, 1225, 1446, 221, 'MR', 'TRANSGENDE', 'SAGAR KHANRA', '1995-06-14', 'MET0000006', '0000006', 'KOLKATA KA LADKA', 'SOUTH KOKLKJATA', 700050, 'West Bengal', 'KOLKATA', 2147483647, 'ASDFHASUIDHUSIH@GMAI', 'OKAYA ', 'FAAST F4', '2023', 'METALLIC ', 'SDFCSDCFDSCIDSJC', 'HSDGVCGDSGVCGDS', '1.5', 2, 'KOLKATA KA LADKA', 'SOUTH KOKLKJATA', '700050', 'West Bengal', 'KOLKATA', '', '', '0000-00-00', 'MALE', '', '', 'NOT HYPOTHECATED', NULL, NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_users`
--

INSERT INTO `db_users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', 123456, '2022-10-01 09:53:12');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `razorpay_order_id` varchar(255) DEFAULT NULL,
  `razorpay_payment_id` varchar(255) DEFAULT NULL,
  `razorpay_signature` varchar(255) DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `amount` int(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `report_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `razorpay_order_id`, `razorpay_payment_id`, `razorpay_signature`, `user_id`, `amount`, `created_at`, `report_id`) VALUES
(1, 'order_Lt1XnaIBxA72Lq', 'pay_Lt1Y7DlHn6NpRV', '4bd01f837ca4eb9750ec69bc4525938d045ec3afdf1f93a950850cd273727859', 9, 1000, '2023-05-23 07:36:34', NULL),
(2, 'order_Lt1oDZDlnKmi2u', 'pay_Lt1oSJFRnNyeNW', 'd1b190913c0b305a890aa8ce370e7754057d5cb88ba699322b6703605d54503d', 9, 1000, '2023-05-23 07:52:01', 13),
(3, 'order_Lt3sHdmu7MITPs', 'pay_Lt3tRZvD0MhtG9', '75bff971ba64eb8889a472553dbe05ed9871cdd1ba05186eda66a8eba2cb09af', 10, 1000, '2023-05-23 09:54:11', 20);

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `GST` varchar(100) NOT NULL,
  `shop_images` varchar(200) DEFAULT NULL,
  `Address` varchar(500) NOT NULL,
  `lat` varchar(100) DEFAULT NULL,
  `long` int(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `shop_owner` varchar(245) NOT NULL,
  `shop_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `name`, `email`, `mobile`, `agent_id`, `GST`, `shop_images`, `Address`, `lat`, `long`, `created_at`, `shop_owner`, `shop_code`) VALUES
(1, 'test', 'test@gmail', 12345678, 1, 'fds4w3452345235235', 'sfsdrftf', 'rwe4535345', NULL, NULL, '2023-05-31 13:03:25', 'test', 'SP001'),
(19, 'test', 'test@gmail', 12345678, 4, 'fds4w3452345235235', 'sfsdrftf', 'rwe4535345', NULL, NULL, '2023-05-31 13:03:25', 'test', 'SP0019');

-- --------------------------------------------------------

--
-- Table structure for table `website_mobile_report`
--

CREATE TABLE `website_mobile_report` (
  `id` int(11) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `business_type` varchar(255) DEFAULT NULL,
  `barnch_code` varchar(4) NOT NULL DEFAULT 'CG10',
  `policy_start` date NOT NULL,
  `policy_tenure` int(1) NOT NULL DEFAULT '1',
  `exprie_date` date NOT NULL,
  `policy_numbers` int(11) NOT NULL,
  `master_policy_number` bigint(18) NOT NULL DEFAULT '92029222932000001',
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
  `Chassis_No` varchar(50) NOT NULL,
  `Battery_No` varchar(50) NOT NULL,
  `Battery_kw` varchar(255) NOT NULL,
  `seting_capicty` int(3) NOT NULL DEFAULT '2',
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
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pay_type` int(11) NOT NULL DEFAULT '0',
  `token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `website_mobile_report`
--

INSERT INTO `website_mobile_report` (`id`, `user_id`, `bank_name`, `business_type`, `barnch_code`, `policy_start`, `policy_tenure`, `exprie_date`, `policy_numbers`, `master_policy_number`, `risk_covered`, `sum_insured`, `ODAmount`, `premium`, `GST`, `salutation`, `gender`, `name_policy_holder`, `date_birth`, `invoice_no`, `customer_id`, `address_line_1`, `address_line_2`, `pincode`, `state`, `city`, `mobile`, `email`, `make`, `model`, `tear_manufacturing`, `Chassis_No`, `Battery_No`, `Battery_kw`, `seting_capicty`, `Addresss_line_1`, `Addresss_line_2`, `pincodes`, `states`, `citys`, `nomine_name`, `relation`, `date_of_birth`, `genders`, `finacer_name`, `finacer_address`, `financer_type`, `create_at`, `updated_at`, `pay_type`, `token`) VALUES
(8, 7, 'DB mobile shop ', 'NEW BUSINESS ', 'CG10', '2023-03-24', 1, '2024-03-24', 900008, 920292229320000023, 'ELECTRIC VEHICLE', 5908900, 103406, 122019, 18613, 'MR', 'FEMALE ', 'sandeep patidar', '2023-03-16', 'MB/MP/0000008', '0000008', '12124 New Mexico 14', '12124 New Mexico 14', 87008, 'Andhra Pradesh', 'Cedar Crest', 2147483647, 'sandeeppatidar831940', '323434', '2343', '2121', '4sdf345tgfvfxcv', '2344234fsd', '55.98', 2, '12124 New Mexico 14', '12124 New Mexico 14', '87008', 'Andhra Pradesh', 'Cedar Crest', NULL, NULL, NULL, NULL, 'demo ', '12124 New Mexico 14', 'HYPOTHECATED', '2023-03-29 10:53:09', '2023-03-29 10:53:09', 0, NULL),
(9, NULL, 'sandeep ', 'NEW BUSINESS ', 'CG10', '2023-03-29', 1, '2024-03-29', 900009, 920292229320000023, 'ELECTRIC VEHICLE', 320000, 5600, 6608, 1008, 'MR', 'MALE', 'nishant ', '2023-03-29', 'MB/MP/0000009', '0000009', '12124 New Mexico 14', '12124 New Mexico 14', 87008, 'Andaman and Nicobar Islands', 'Cedar Crest', 2147483647, 'sandeeppatidar831940', '323434', '2343', '2121', '4sdf345tgfvfxcv', '2344234fsd', '55.98', 2, '12124 New Mexico 14', '12124 New Mexico 14', '87008', 'Andaman and Nicobar Is', 'Cedar Crest', 'demo', 'hello', '2023-03-23', 'FEMALE ', 'demo ', '12124 New Mexico 14', 'HYPOTHECATED', '2023-03-29 11:01:14', '2023-03-29 11:01:14', 0, NULL),
(10, NULL, 'mobile', 'NEW BUSINESS ', 'CG10', '2023-04-21', 1, '2024-04-21', 900010, 920292229320000023, 'ELECTRIC VEHICLE', 10001, 2000, 2000, 0, 'MR', 'MALE', 'ram patidar', '2023-04-13', 'MB/MP/0000010', '0000010', '12124 New Mexico 14', '12124 New Mexico 14', 87008, 'Andaman and Nicobar Islands', 'Cedar Crest', 2147483647, 'sandeeppatidar831940', '323434', '2343', '2121', '4sdf345tgfvfxcv', '2344234fsd', '55.98', 2, '12124 New Mexico 14', '12124 New Mexico 14', '87008', 'Andaman and Nicobar Is', 'Cedar Crest', NULL, NULL, NULL, NULL, 'demo ', '12124 New Mexico 14', 'HYPOTHECATED', '2023-04-01 05:24:35', '2023-04-01 05:24:35', 0, NULL),
(11, NULL, 'MONU MOBILE', 'NEW BUSINESS ', 'CG10', '2023-04-02', 1, '2024-04-02', 900011, 92029222932000001, 'ELECTRIC VEHICLE', 20000, 1500, 1500, 0, 'MR', 'MALE', 'SHIVA ROY', '1999-06-19', 'MB/MP/0000011', '0000011', 'linghyadih', 'bilaspur', 495001, 'Chhattisgarh', 'bilaspur', 2147483647, 'policy@metelectricve', 'SAMSUNG ', 'A31', '2322', 'UVDHUDHVU6526', '122EWJBFHEBHBE', 'C5664554VVR5151', 2, 'linghyadih', 'bilaspur', '495001', 'Chhattisgarh', 'bilaspur', NULL, NULL, NULL, NULL, '', '', 'NOT HYPOTHECATED', '2023-04-02 11:00:30', '2023-04-02 11:00:30', 0, NULL),
(12, 4, 'website', 'NEW BUSINESS ', 'CG10', '2023-05-25', 1, '2024-05-25', 900012, 92029222932000001, 'ELECTRIC VEHICLE', 43000, 2500, 2500, 0, 'MR', 'MALE', 'sandeep patidar', '2023-05-23', 'MB/MP/0000012', '0000012', '12124 New Mexico 14', '12124 New Mexico 14', 87008, 'Andhra Pradesh', 'Cedar Crest', 2147483647, 'php4.dbvertex@gmail.', '323434', '2343', '2121', '4sdf345tgfvfxcv', '2344234fsd', '55.98', 2, '12124 New Mexico 14', '12124 New Mexico 14', '87008', 'Andhra Pradesh', 'Cedar Crest', NULL, NULL, NULL, NULL, 'demo ', '12124 New Mexico 14\r\n12124 New Mexico 14', 'NOT HYPOTHECATED', '2023-05-11 07:00:30', '2023-05-11 07:00:30', 0, NULL),
(13, 16, 'website sandeep check', 'NEW BUSINESS ', 'CG10', '2023-05-12', 1, '2024-05-12', 900013, 92029222932000001, 'ELECTRIC VEHICLE', 12000, 1500, 1500, 0, 'MR', 'MALE', 'sandeep patidar', '2023-05-11', 'MB/MP/0000013', '0000013', '12124 New Mexico 14', '12124 New Mexico 14', 87008, 'Andhra Pradesh', 'Cedar Crest', 2147483647, 'php4.dbvertex@gmail.', '323434', '2343', '2121', '4sdf345tgfvfxcv', '2344234fsd', '55.98', 2, '12124 New Mexico 14', '12124 New Mexico 14', '87008', 'Andhra Pradesh', 'Cedar Crest', NULL, NULL, NULL, NULL, '', '12124 New Mexico 14\r\n12124 New Mexico 14', 'HYPOTHECATED', '2023-05-11 07:08:03', '2023-05-11 07:08:03', 0, NULL),
(14, 16, 'website sandeep check', 'NEW BUSINESS ', 'CG10', '2023-05-12', 1, '2024-05-12', 900013, 92029222932000001, 'ELECTRIC VEHICLE', 12000, 1500, 1500, 0, 'MR', 'MALE', 'sandeep patidar', '2023-05-11', 'MB/MP/0000013', '0000013', '12124 New Mexico 14', '12124 New Mexico 14', 87008, 'Andhra Pradesh', 'Cedar Crest', 2147483647, 'php4.dbvertex@gmail.', '323434', '2343', '2121', '4sdf345tgfvfxcv', '2344234fsd', '55.98', 2, '12124 New Mexico 14', '12124 New Mexico 14', '87008', 'Andhra Pradesh', 'Cedar Crest', NULL, NULL, NULL, NULL, '', '12124 New Mexico 14\r\n12124 New Mexico 14', 'HYPOTHECATED', '2023-05-11 07:08:03', '2023-05-11 07:08:03', 0, NULL),
(15, 17, 'jaiswal shop', 'NEW BUSINESS ', 'CG10', '2023-05-11', 1, '2024-05-11', 900014, 92029222932000001, 'ELECTRIC VEHICLE', 10000, 1000, 1000, 0, 'MR', 'MALE', 'Nishant Jaiswal', '2024-05-09', 'MB/MP/0000014', '0000014', '9 yn road', 'indore', 452001, 'Madhya Pradesh', 'indore', 2147483647, 'jnishantand@gmail.co', '2014', 'new', '2022', 'xyz', '1324564789789', '12', 2, '9 yn road', 'indore', '452001', 'Madhya Pradesh', 'indore', NULL, NULL, NULL, NULL, '', '47 W 13th St, New York', 'HYPOTHECATED', '2023-05-11 11:59:19', '2023-05-11 11:59:19', 0, NULL),
(16, 17, 'Shop name', 'NEW BUSINESS ', 'CG10', '2023-05-16', 1, '2024-05-16', 900015, 92029222932000001, 'ELECTRIC VEHICLE', 70000, 3000, 3000, 0, 'MR', 'MALE', 'Harish Kumar Pradhan', '1991-01-06', 'MB/MP/0000015', '0000015', 'Studio metro near old arpa bridge    Pratap chowk', 'Studio metro near old arpa bridge    Pratap chowk', 495001, 'Chhattisgarh', 'Bilaspur', 2147483647, 'harishkumarpradhan@g', 'deltic', 'deixx', '2023', 'abchsbchsuhc84985', 'dsjdhushduhdj4848', 'ishdcuishcuis55458', 2, 'Studio metro near old arpa bridge    Pratap chowk', 'Studio metro near old arpa bridge    Pratap chowk', '495001', 'Chhattisgarh', 'Bilaspur', NULL, NULL, NULL, NULL, 'BAJAJ', 'bilaspur', 'YES', '2023-05-16 06:44:24', '2023-05-16 06:44:24', 0, 'cCS9BSMWE0pHcwmhmyIx9vCo3cvdhZ');

-- --------------------------------------------------------

--
-- Table structure for table `Website_users`
--

CREATE TABLE `Website_users` (
  `id` int(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `otp` int(45) NOT NULL,
  `user_verified` varchar(2) NOT NULL DEFAULT '0',
  `cerated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mobile` varchar(15) NOT NULL,
  `profile_images` varchar(255) DEFAULT 'images (2).png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Website_users`
--

INSERT INTO `Website_users` (`id`, `email`, `name`, `password`, `otp`, `user_verified`, `cerated_at`, `mobile`, `profile_images`) VALUES
(4, 'test@gmail.com', 'sandeep', 'fcea920f7412b5da7be0cf42b8c93759', 4622, '1', '2023-05-10 05:29:31', '9754075878', 'images (2).png'),
(6, 'tests@gmail.com', 'test', '888e931d6360ee143df0d552f955299a', 3549, '1', '2023-05-10 07:29:38', '789456123', 'images (2).png'),
(8, 'jnishantand@gmail.com', 'Nishant Jaiswal', 'e10adc3949ba59abbe56e057f20f883e', 5911, '1', '2023-05-11 14:07:08', '9424894244', 'images (2).png'),
(9, 'admin@neee.com', 'test', '350dda40c86c5e8e26ad6a0ba78656f3', 2495, '0', '2023-05-13 11:27:48', '9424011111', 'images (2).png'),
(10, 'admin@neee1.com', 'Nishant Jaiswal', '350dda40c86c5e8e26ad6a0ba78656f3', 4979, '0', '2023-05-13 11:28:06', '1484460899', 'images (2).png'),
(11, 'admin1@neee.com', 'ewrewf', '8c4f0f0eb4d73ebe233ca62e1ecb4cb1', 6745, '1', '2023-05-13 11:28:53', '3453454354', 'images (2).png'),
(12, 'admin@gmail.com', 'admin sharma', 'f925916e2754e5e03f75dd58a5733251', 3528, '1', '2023-05-15 04:57:59', '3242423432', 'images (2).png'),
(13, 'admina@gmail.com', 'sferewr', 'f925916e2754e5e03f75dd58a5733251', 3579, '1', '2023-05-15 06:43:56', '8787987987', 'images (2).png'),
(14, 'harishkumarpradhan@gmail.com', 'Harish Pradhan', '02ab970087ecdd690dc412cd8621bf64', 6859, '1', '2023-05-16 06:40:39', '7898899663', 'images (2).png'),
(15, 'testsss@gmail.com', 'test', 'f925916e2754e5e03f75dd58a5733251', 3549, '1', '2023-05-10 07:29:38', '789456123', 'images (2).png'),
(16, 'demo@gmail.com', 'demo ', 'f925916e2754e5e03f75dd58a5733251', 2163, '1', '2023-05-23 10:42:52', '7894561230', 'images (2).png'),
(17, 'ram@gmail.com', 'ram', '66ab25ac273b425efab5a232450fff70', 9873, '1', '2023-06-01 09:43:52', '1212123123', 'images (2).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_mobile_report`
--
ALTER TABLE `website_mobile_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Website_users`
--
ALTER TABLE `Website_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `db_mobile_report`
--
ALTER TABLE `db_mobile_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `db_report`
--
ALTER TABLE `db_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `db_users`
--
ALTER TABLE `db_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `website_mobile_report`
--
ALTER TABLE `website_mobile_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `Website_users`
--
ALTER TABLE `Website_users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
