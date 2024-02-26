-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 12:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_software`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ward_id` int(100) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(20) DEFAULT 1,
  `cstatus` int(11) DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `ward_id`, `name`, `email`, `phone`, `username`, `email_verified_at`, `password`, `image`, `status`, `cstatus`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'superadmin', 'superadmin@gmail.com', NULL, 'superadmin', NULL, '$2y$10$P7XKbcdy.V46KeuF1PljgOoXXfAQvqjuZkPg71AyMlNUkdcWbBXjS', 'user-photo/1618860350.png', 1, 5, 'ypQd0MASVWkI6OD2EKODK2gGb3B5ZY4sPjYzgHDb6ylGmM3eFRVQzVfSRxJO', '2021-03-24 05:29:53', '2021-04-19 13:25:50'),
(2, NULL, 'admin', 'admin@gmail.com', NULL, NULL, NULL, '$2y$10$oKyZWZD/FsdnA47iBH36hO6pWRTwXVf.kQiOUyaPlu.xY7ZE4beW6', NULL, 1, 5, NULL, '2021-03-24 06:14:00', '2021-03-24 06:14:00'),
(8, 2, 'kajol4', 'testc@gmail.com', '543', 'কাজল', NULL, '$2y$10$irpBgjwv./j6U9.yRzhTHOL/qeJR/AtCIaSHBRu8nHtGZcSOQvzqK', 'public/upload/adminimage/1619130946.png', 1, 1, NULL, '2021-04-22 16:35:46', '2021-05-08 13:48:49'),
(9, 2, 'Kamruzzaman', 'm@gmail.com', '01646735100', NULL, NULL, '$2y$10$7PobtDIJGyOslRzgnkuGTOEsbPkdi5XXVrO47W6pmZUwQ18.Yv.4O', NULL, 1, 0, NULL, '2021-04-25 04:26:21', '2022-01-17 22:29:03'),
(10, 4, 'Kalam', 'kalam@gmail.com', '01794627390', 'কালাম', NULL, '$2y$10$7pbApvEwt114NGingABq6eFkhqhcWdfAMHjn0M6Hyh6AXI80hQZoW', 'public/upload/adminimage/1619549656.PNG', 1, 1, NULL, '2021-04-27 12:54:16', '2021-04-27 12:54:16'),
(13, 10, 'test', 'testnew1@gmail.com', '01646735100', 'kajol', NULL, '$2y$10$cCBuOhRYZ4M3Buy9T3Rvf.o1mKnqnIdOQTqLbe0glvD9rXhmx9mFy', 'public/upload/adminimage/1620461064.jpg', 1, 1, NULL, '2021-05-08 02:04:24', '2021-05-08 02:04:24'),
(16, 16, 'South_Counsilor', 'sco@gmail.com', '34324324', 'করিম আলি খান', NULL, '$2y$10$YTeQOwZ0EWyxBb4xIVkpm.DmR4mOhEccSautmzvs6VU1LVv5FzzK6', 'public/upload/adminimage/1620546325.png', 1, 1, NULL, '2021-05-09 01:45:25', '2021-05-09 01:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `admin_notices`
--

CREATE TABLE `admin_notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ward_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_notices`
--

INSERT INTO `admin_notices` (`id`, `ward_id`, `sender_id`, `admin_id`, `all_id`, `date`, `subject`, `des`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', '5', 'all', '0', '10-05-2021', 'dfg', 'fgfg', '1', '2021-05-10 05:09:18', '2021-07-14 06:34:01'),
(2, '2', '5', 'all', '0', '07-07-2021', 'hgfh', 'hghg', '1', '2021-07-07 03:06:40', '2021-07-07 04:21:51'),
(3, '2', '5', 'all', '5', '07-07-2021', 'gh', 'hghghghg', '1', '2021-07-07 04:05:40', '2021-09-16 11:04:16'),
(4, '2', '5', '8', '0', '07-07-2021', 'gg', 'gg', '0', '2021-07-07 04:06:09', '2021-07-07 04:06:09'),
(5, '2', '5', 'all', '5', '07-07-2021', '3453', '.kjljk', '1', '2021-07-07 04:17:39', '2021-09-16 11:04:22'),
(6, '2', '5', '9', '0', '07-07-2021', '3453', 'l;', '0', '2021-07-07 04:18:15', '2021-07-07 04:18:15');

-- --------------------------------------------------------

--
-- Table structure for table `admission_enquiries`
--

CREATE TABLE `admission_enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `next_follow_up_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_follow_up_date` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assigned` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refrence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_child` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `creator_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admission_enquiries`
--

INSERT INTO `admission_enquiries` (`id`, `email`, `name`, `phone`, `address`, `des`, `note`, `next_follow_up_date`, `last_follow_up_date`, `date`, `assigned`, `refrence`, `source`, `class`, `number_of_child`, `status`, `creator_name`, `created_at`, `updated_at`) VALUES
(3, 'superadmin@gmail.com', 'Md. Irfan Hossain', '1234756789', 'niketon', 'good', 'ok', '2022-01-27', '2022-01-13', '2022-01-13', 'Kamruzzaman', 'Parent', 'Online Front Site', 'Class One', '2', 'dead', 'superadmin', '2022-01-27 00:35:01', '2022-01-27 05:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `assaign_teacher_to_classes`
--

CREATE TABLE `assaign_teacher_to_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assaign_teacher_to_events`
--

CREATE TABLE `assaign_teacher_to_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assaign_teacher_to_subjects`
--

CREATE TABLE `assaign_teacher_to_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assignteacher_to_exans`
--

CREATE TABLE `assignteacher_to_exans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exam_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assign_class_to_teachers`
--

CREATE TABLE `assign_class_to_teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_id` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_class_to_teachers`
--

INSERT INTO `assign_class_to_teachers` (`id`, `department_id`, `section_id`, `teacher_id`, `class_id`, `created_at`, `updated_at`) VALUES
(3, '0', '1', '1', '2', '2022-01-09 01:29:09', '2022-01-09 01:29:09');

-- --------------------------------------------------------

--
-- Table structure for table `assign_reasons`
--

CREATE TABLE `assign_reasons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assign_teacher_to_addresuls`
--

CREATE TABLE `assign_teacher_to_addresuls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sreni_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendences`
--

CREATE TABLE `attendences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roll` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sreni_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject22` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendences`
--

INSERT INTO `attendences` (`id`, `roll`, `student_name`, `sreni_id`, `department_id`, `section_id`, `student_id`, `date`, `present_status`, `subject22`, `note`, `created_at`, `updated_at`, `subject`) VALUES
(5, '1', 'kkajol428@gmail.com', '2', '0', '1', '1', '2022-01-18', 'Present', NULL, NULL, '2022-01-18 02:11:16', '2022-01-18 02:11:16', '1'),
(6, '2', 'ty', '2', '0', '1', '4', '2022-01-18', 'Present', NULL, NULL, '2022-01-18 02:11:16', '2022-01-18 02:11:16', '1');

-- --------------------------------------------------------

--
-- Table structure for table `civilinfos`
--

CREATE TABLE `civilinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suboffice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_bn` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_bn` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thana_bn` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suboffice_bn` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode_bn` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `civilinfos`
--

INSERT INTO `civilinfos` (`id`, `division`, `district`, `thana`, `suboffice`, `postcode`, `division_bn`, `district_bn`, `thana_bn`, `suboffice_bn`, `postcode_bn`, `created_at`, `updated_at`) VALUES
(1866, 'Dhaka', 'Dhaka', 'Demra', 'Demra', '1360', 'ঢাকা', 'ঢাকা', 'ডেমরা', 'ডেমরা', '1360', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1867, 'Dhaka', 'Dhaka', 'Demra', 'Matuail', '1362', 'ঢাকা', 'ঢাকা', 'ডেমরা', 'মাতুয়াইল', '1362', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1868, 'Dhaka', 'Dhaka', 'Demra', 'Sarulia', '1361', 'ঢাকা', 'ঢাকা', 'ডেমরা', 'সারুলিয়া', '1361', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1869, 'Dhaka', 'Dhaka', 'Dhaka', 'Dhaka Cantonment--TSO', '1206', 'ঢাকা', 'ঢাকা', 'ঢাকা সেনানিবাস', 'ঢাকা সেনানিবাস টিএসও', '1206', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1870, 'Dhaka', 'Dhaka', 'Dhamrai', 'Dhamrai', '1350', 'ঢাকা', 'ঢাকা', 'ধামরাই', 'ধামরাই', '1350', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1871, 'Dhaka', 'Dhaka', 'Dhamrai', 'Kamalapur', '1351', 'ঢাকা', 'ঢাকা', 'ধামরাই', 'কমলপুর', '1351', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1872, 'Dhaka', 'Dhaka', 'Dhanmondi', 'Jigatala TSO', '1209', 'ঢাকা', 'ঢাকা', 'ধানমন্ডি', 'জিগাতলা টিএসও', '1209', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1873, 'Dhaka', 'Dhaka', 'Gulshan', 'Banani TSO', '1213', 'ঢাকা', 'ঢাকা', 'গুলশান', 'বনানী টিএসও', '1213', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1874, 'Dhaka', 'Dhaka', 'Gulshan', 'Badda', '1212', 'ঢাকা', 'ঢাকা', 'গুলশান', 'বাড্ডা', '1212', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1875, 'Dhaka', 'Dhaka', 'Gulshan', 'Gulshan Model Town', '1212', 'ঢাকা', 'ঢাকা', 'গুলশান', 'গুলশান মডেল টাউন', '1212', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1876, 'Dhaka', 'Dhaka', 'Jatrabari', 'Dhania TSO', '1236', 'ঢাকা', 'ঢাকা', 'যাত্রাবাড়ি', 'ধনিয়া টিএসও', '1232', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1877, 'Dhaka', 'Dhaka', 'Joypara', 'Joypara', '1331', 'ঢাকা', 'ঢাকা', 'জয়পাড়া', 'জয়পাড়া', '1330', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1878, 'Dhaka', 'Dhaka', 'Joypara', 'Narisha', '1332', 'ঢাকা', 'ঢাকা', 'জয়পাড়া', 'নারিশা', '1332', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1879, 'Dhaka', 'Dhaka', 'Joypara', 'Palamganj', '1331', 'ঢাকা', 'ঢাকা', 'জয়পাড়া', 'পালামগঞ্জ', '1331', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1880, 'Dhaka', 'Dhaka', 'Keraniganj', 'Ati', '1312', 'ঢাকা', 'ঢাকা', 'কেরানীগঞ্জ', 'আটি', '1312', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1881, 'Dhaka', 'Dhaka', 'Keraniganj', 'Dhaka Jute Mills', '1311', 'ঢাকা', 'ঢাকা', 'কেরানীগঞ্জ', 'ঢাকা পাট কল', '1311', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1882, 'Dhaka', 'Dhaka', 'Keraniganj', 'Kalatia', '1313', 'ঢাকা', 'ঢাকা', 'কেরানীগঞ্জ', 'কালাটিয়া', '1313', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1883, 'Dhaka', 'Dhaka', 'Keraniganj', 'Keraniganj', '1310', 'ঢাকা', 'ঢাকা', 'কেরানীগঞ্জ', 'কেরানীগঞ্জ', '1310', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1884, 'Dhaka', 'Dhaka', 'Khilgaon', 'KhilgaonTSO', '1219', 'ঢাকা', 'ঢাকা', 'খিলগাঁও', 'খিলগাঁও টিএসও', '1219', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1885, 'Dhaka', 'Dhaka', 'Khilkhet', 'KhilkhetTSO', '1229', 'ঢাকা', 'ঢাকা', 'খিলক্ষেত', 'খিলক্ষেত টিএসও', '1229', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1886, 'Dhaka', 'Dhaka', 'Lalbag', 'Posta TSO', '1211', 'ঢাকা', 'ঢাকা', 'লালবাগ', 'পোস্তা টিএসও', '1211', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1887, 'Dhaka', 'Dhaka', 'Mirpur', 'Mirpur TSO', '1216', 'ঢাকা', 'ঢাকা', 'মিরপুর', 'মিরপুর টিএসও', '1216', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1888, 'Dhaka', 'Dhaka', 'Mohammadpur', 'Mohammadpur Housing', '1207', 'ঢাকা', 'ঢাকা', 'মোহাম্মদপুর', 'মোহাম্মদপুর হাউজিং', '1207', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1889, 'Dhaka', 'Dhaka', 'Mohammadpur', 'Sangsad BhabanTSO', '1225', 'ঢাকা', 'ঢাকা', 'মোহাম্মদপুর', 'সংসদ ভবন টিএসও', '1225', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1890, 'Dhaka', 'Dhaka', 'Motijheel', 'BangabhabanTSO', '1222', 'ঢাকা', 'ঢাকা', 'মতিঝিল', 'বঙ্গভবন টিএসও', '1222', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1891, 'Dhaka', 'Dhaka', 'Motijheel', 'DilkushaTSO', '1223', 'ঢাকা', 'ঢাকা', 'মতিঝিল', 'দিলকুশা টিএসও', '1223', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1892, 'Dhaka', 'Dhaka', 'Nawabganj', 'Agla', '1323', 'ঢাকা', 'ঢাকা', 'নবাবগঞ্জ', 'আগলা', '1323', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1893, 'Dhaka', 'Dhaka', 'Nawabganj', 'Churain', '1325', 'ঢাকা', 'ঢাকা', 'নবাবগঞ্জ', 'চুরাইন', '1325', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1894, 'Dhaka', 'Dhaka', 'Nawabganj', 'Daudpur', '1322', 'ঢাকা', 'ঢাকা', 'নবাবগঞ্জ', 'দাউদপুর', '1322', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1895, 'Dhaka', 'Dhaka', 'Nawabganj', 'Hasnabad', '1321', 'ঢাকা', 'ঢাকা', 'নবাবগঞ্জ', 'হাসনাবাদ', '1321', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1896, 'Dhaka', 'Dhaka', 'Nawabganj', 'Khalpar', '1324', 'ঢাকা', 'ঢাকা', 'নবাবগঞ্জ', 'খালপাড়', '1324', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1897, 'Dhaka', 'Dhaka', 'Nawabganj', 'Nawabganj', '1320', 'ঢাকা', 'ঢাকা', 'নবাবগঞ্জ', 'নবাবগঞ্জ', '1320', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1898, 'Dhaka', 'Dhaka', 'Kalabagan (Old New market)', 'Kalabagan', '1205', 'ঢাকা', 'ঢাকা', 'নিউমার্কেট', 'নিউমার্কেট টিএসও', '1205', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1899, 'Dhaka', 'Dhaka', 'Palton', 'Dhaka GPO', '1000', 'ঢাকা', 'ঢাকা', 'পল্টন', 'ঢাকা জিপিও', '1000', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1900, 'Dhaka', 'Dhaka', 'Ramna', 'Shantinagr TSO', '1217', 'ঢাকা', 'ঢাকা', 'রমনা', 'শান্তিনগর টিএসও', '1217', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1901, 'Dhaka', 'Dhaka', 'Sabujbag', 'Basabo TSO', '1214', 'ঢাকা', 'ঢাকা', 'সবুজবাগ', 'বাসাবো টিএসও', '1214', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1902, 'Dhaka', 'Dhaka', 'Savar', 'Amin Bazar', '1348', 'ঢাকা', 'ঢাকা', 'সাভার', 'আমিন বাজার', '1348', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1903, 'Dhaka', 'Dhaka', 'Savar', 'Dairy Farm', '1341', 'ঢাকা', 'ঢাকা', 'সাভার', 'ডেইরি ফার্ম', '1341', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1904, 'Dhaka', 'Dhaka', 'Savar', 'EPZ', '1349', 'ঢাকা', 'ঢাকা', 'সাভার', 'ইপিজেড', '1349', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1905, 'Dhaka', 'Dhaka', 'Savar', 'Jahangirnagar University', '1342', 'ঢাকা', 'ঢাকা', 'সাভার', 'জাহাঙ্গীরনগর বিশ্ববিদ্যালয়', '1342', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1906, 'Dhaka', 'Dhaka', 'Savar', 'Kashem Cotton Mills', '1346', 'ঢাকা', 'ঢাকা', 'সাভার', 'কাশেম কটন মিলস', '1346', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1907, 'Dhaka', 'Dhaka', 'Savar', 'Rajphulbaria', '1347', 'ঢাকা', 'ঢাকা', 'সাভার', 'রাজফুলবাড়ীয়া', '1347', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1908, 'Dhaka', 'Dhaka', 'Savar', 'Savar', '1340', 'ঢাকা', 'ঢাকা', 'সাভার', 'সাভার', '1340', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1909, 'Dhaka', 'Dhaka', 'Savar', 'Savar Canttonment', '1344', 'ঢাকা', 'ঢাকা', 'সাভার', 'সাভার সেনানিবাস', '1344', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1910, 'Dhaka', 'Dhaka', 'Savar', 'Saver P.A.T.C', '1343', 'ঢাকা', 'ঢাকা', 'সাভার', 'সাভার পিএটিসি', '1343', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1911, 'Dhaka', 'Dhaka', 'Savar', 'Shimulia', '1345', 'ঢাকা', 'ঢাকা', 'সাভার', 'শিমুলিয়া', '1345', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1912, 'Dhaka', 'Dhaka', 'Sutrapur', 'Dhaka Sadar HO', '1100', 'ঢাকা', 'ঢাকা', 'সূত্রাপুর', 'ঢাকা সদর এসও', '1100', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1913, 'Dhaka', 'Dhaka', 'Sutrapur', 'Gandaria TSO', '1204', 'ঢাকা', 'ঢাকা', 'সূত্রাপুর', 'গেন্ডারিয়া টিএসও', '1204', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1914, 'Dhaka', 'Dhaka', 'Sutrapur', 'Wari TSO', '1203', 'ঢাকা', 'ঢাকা', 'সূত্রাপুর', 'ওয়ারী টিএসও', '1203', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1915, 'Dhaka', 'Dhaka', 'Tejgaon', 'Tejgaon TSO', '1215', 'ঢাকা', 'ঢাকা', 'তেজগাঁও', 'তেজগাঁও টিএসও', '1215', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1916, 'Dhaka', 'Dhaka', 'Tejgaon Industrial Area', 'Dhaka Politechnic', '1208', 'ঢাকা', 'ঢাকা', 'তেজগাঁও শিল্প এলাকা', 'ঢাকা পলিটেকনিক', '1208', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1917, 'Dhaka', 'Dhaka', 'Uttara', 'Uttara Model TownTSO', '1230', 'ঢাকা', 'ঢাকা', 'উত্তরা', 'উত্তরা মডেল টাউন টিএসও', '1230', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1918, 'Dhaka', 'Faridpur', 'Alfadanga', 'Alfadanga', '7870', 'ঢাকা', 'ফরিদপুর', 'আলফাডাঙ্গা', 'আলফাডাঙ্গা', '7870', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1919, 'Dhaka', 'Faridpur', 'Bhanga', 'Bhanga', '7830', 'ঢাকা', 'ফরিদপুর', 'ভাঙ্গা', 'ভাঙ্গা', '7830', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1920, 'Dhaka', 'Faridpur', 'Boalmari', 'Boalmari', '7860', 'ঢাকা', 'ফরিদপুর', 'বোয়ালমারী', 'বোয়ালমারী', '7860', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1921, 'Dhaka', 'Faridpur', 'Boalmari', 'Rupatpat', '7861', 'ঢাকা', 'ফরিদপুর', 'বোয়ালমারী', 'রুপাতপাত', '7861', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1922, 'Dhaka', 'Faridpur', 'Charbhadrasan', 'Charbadrashan', '7810', 'ঢাকা', 'ফরিদপুর', 'চরভদ্রাসন', 'চরভদ্রাসন', '7810', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1923, 'Dhaka', 'Faridpur', 'Faridpur Sadar', 'Ambikapur', '7802', 'ঢাকা', 'ফরিদপুর', 'ফরিদপুর সদর', 'অম্বিকাপুর', '7802', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1924, 'Dhaka', 'Faridpur', 'Faridpur Sadar', 'Baitulaman Politecni', '7803', 'ঢাকা', 'ফরিদপুর', 'ফরিদপুর সদর', 'বাইতুলমান পলিটেকনিক', '7803', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1925, 'Dhaka', 'Faridpur', 'Faridpur Sadar', 'Faridpursadar', '7800', 'ঢাকা', 'ফরিদপুর', 'ফরিদপুর সদর', 'ফরিদপুর সদর', '7800', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1926, 'Dhaka', 'Faridpur', 'Faridpur Sadar', 'Kanaipur', '7801', 'ঢাকা', 'ফরিদপুর', 'ফরিদপুর সদর', 'কানাইপুর', '7801', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1927, 'Dhaka', 'Faridpur', 'Madukhali', 'Kamarkali', '7851', 'ঢাকা', 'ফরিদপুর', 'মধুখালী', 'কামারখালি', '7851', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1928, 'Dhaka', 'Faridpur', 'Madukhali', 'Madukhali', '7850', 'ঢাকা', 'ফরিদপুর', 'মধুখালী', 'মধুখালী', '7850', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1929, 'Dhaka', 'Faridpur', 'Nagarkanda', 'Nagarkanda', '7840', 'ঢাকা', 'ফরিদপুর', 'নগরকান্দা', 'নগরকান্দা', '7840', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1930, 'Dhaka', 'Faridpur', 'Nagarkanda', 'Talma', '7841', 'ঢাকা', 'ফরিদপুর', 'নগরকান্দা', 'তালমা', '7841', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1931, 'Dhaka', 'Faridpur', 'Sadarpur', 'Bishwa jaker Manjil', '7822', 'ঢাকা', 'ফরিদপুর', 'সদরপুর', 'বিশ্বরোড জাকের মঞ্জিল', '7822', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1932, 'Dhaka', 'Faridpur', 'Sadarpur', 'Hat Krishapur', '7821', 'ঢাকা', 'ফরিদপুর', 'সদরপুর', 'হাট ক্রিশাপুর', '7821', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1933, 'Dhaka', 'Faridpur', 'Sadarpur', 'Sadarpur', '7820', 'ঢাকা', 'ফরিদপুর', 'সদরপুর', 'সদরপুর', '7820', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1934, 'Dhaka', 'Faridpur', 'Shriangan', 'Shriangan', '7804', 'ঢাকা', 'ফরিদপুর', 'শ্রী-অঙ্গন', 'শ্রী-অঙ্গন', '7804', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1935, 'Dhaka', 'Gazipur', 'Gazipur Sadar', 'B.O.F', '1703', 'ঢাকা', 'গাজীপুর', 'গাজীপুর সদর', 'বি.ও.এফ.', '1703', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1936, 'Dhaka', 'Gazipur', 'Gazipur Sadar', 'B.R.R', '1701', 'ঢাকা', 'গাজীপুর', 'গাজীপুর সদর', 'বি.আর.আর.', '1701', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1937, 'Dhaka', 'Gazipur', 'Gazipur Sadar', 'Chandna', '1702', 'ঢাকা', 'গাজীপুর', 'গাজীপুর সদর', 'চান্দনা', '1702', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1938, 'Dhaka', 'Gazipur', 'Gazipur Sadar', 'Gazipur Sadar', '1700', 'ঢাকা', 'গাজীপুর', 'গাজীপুর সদর', 'গাজীপুর সদর', '1700', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1939, 'Dhaka', 'Gazipur', 'Gazipur Sadar', 'National University', '1704', 'ঢাকা', 'গাজীপুর', 'গাজীপুর সদর', 'জাতীয় বিশ্ববিদ্যালয়', '1704', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1940, 'Dhaka', 'Gazipur', 'Kaliakaar', 'Kaliakaar', '1750', 'ঢাকা', 'গাজীপুর', 'কালিয়াকৈর', 'কালিয়াকৈর', '1750', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1941, 'Dhaka', 'Gazipur', 'Kaliakaar', 'Safipur', '1751', 'ঢাকা', 'গাজীপুর', 'কালিয়াকৈর', 'সফিপুর', '1751', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1942, 'Dhaka', 'Gazipur', 'Kaliganj', 'Kaliganj', '1720', 'ঢাকা', 'গাজীপুর', 'কালীগঞ্জ', 'কালীগঞ্জ', '1720', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1943, 'Dhaka', 'Gazipur', 'Kaliganj', 'Pubail', '1721', 'ঢাকা', 'গাজীপুর', 'কালীগঞ্জ', 'পুবাইল', '1721', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1944, 'Dhaka', 'Gazipur', 'Kaliganj', 'Santanpara', '1722', 'ঢাকা', 'গাজীপুর', 'কালীগঞ্জ', 'সান্তানপাড়া', '1722', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1945, 'Dhaka', 'Gazipur', 'Kaliganj', 'Vaoal Jamalpur', '1723', 'ঢাকা', 'গাজীপুর', 'কালীগঞ্জ', 'ভাওয়াল জামালপুর', '1723', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1946, 'Dhaka', 'Gazipur', 'Kapashia', 'kapashia', '1730', 'ঢাকা', 'গাজীপুর', 'কাপাসিয়া', 'কাপাসিয়া', '1730', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1947, 'Dhaka', 'Gazipur', 'Monnunagar', 'Ershad Nagar', '1712', 'ঢাকা', 'গাজীপুর', 'মন্নুনগর', 'এরশাদ নগর', '1712', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1948, 'Dhaka', 'Gazipur', 'Monnunagar', 'Monnunagar', '1710', 'ঢাকা', 'গাজীপুর', 'মন্নুনগর', 'মন্নুনগর', '1710', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1949, 'Dhaka', 'Gazipur', 'Turag', 'Nishat Nagar', '1711', 'ঢাকা', 'গাজীপুর', 'মন্নুনগর', 'নিশাত নগর', '1711', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1950, 'Dhaka', 'Gazipur', 'Sreepur', 'Barmi', '1743', 'ঢাকা', 'গাজীপুর', 'শ্রীপুর', 'বারমি', '1743', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1951, 'Dhaka', 'Gazipur', 'Sreepur', 'Bashamur', '1747', 'ঢাকা', 'গাজীপুর', 'শ্রীপুর', 'বাশামুর', '1747', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1952, 'Dhaka', 'Gazipur', 'Sreepur', 'Boubi', '1748', 'ঢাকা', 'গাজীপুর', 'শ্রীপুর', 'বউবি', '1748', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1953, 'Dhaka', 'Gazipur', 'Sreepur', 'Kawraid', '1745', 'ঢাকা', 'গাজীপুর', 'শ্রীপুর', 'কাওরাইদ', '1745', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1954, 'Dhaka', 'Gazipur', 'Sreepur', 'Satkhamair', '1744', 'ঢাকা', 'গাজীপুর', 'শ্রীপুর', 'সাতখামার', '1744', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1955, 'Dhaka', 'Gazipur', 'Sreepur', 'Sreepur', '1740', 'ঢাকা', 'গাজীপুর', 'শ্রীপুর', 'শ্রীপুর', '1740', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1956, 'Dhaka', 'Gazipur', 'Sreepur', 'Pirbari', '1740', 'ঢাকা', 'গাজীপুর', 'শ্রীপুর', 'পীরবাড়ি', '1740', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1957, 'Dhaka', 'Gazipur', 'Sreepur', 'Tengra', '1740', 'ঢাকা', 'গাজীপুর', 'শ্রীপুর', 'টেংরা', '1740', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1958, 'Dhaka', 'Gazipur', 'Sreepur', 'Rajendrapur', '1741', 'ঢাকা', 'গাজীপুর', 'শ্রীপুর', 'রাজেন্দ্রপুর', '1741', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1959, 'Dhaka', 'Gazipur', 'Sreepur', 'Rajendrapur Canttome', '1742', 'ঢাকা', 'গাজীপুর', 'শ্রীপুর', 'রাজেন্দ্রপুর সেনানিবাস', '1742', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1960, 'Dhaka', 'Gopalganj', 'Gopalganj Sadar', 'Barfa', '8102', 'ঢাকা', 'গোপালগঞ্জ', 'গোপালগঞ্জ সদর', 'বারফা', '8102', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1961, 'Dhaka', 'Gopalganj', 'Gopalganj Sadar', 'Chandradighalia', '8013', 'ঢাকা', 'গোপালগঞ্জ', 'গোপালগঞ্জ সদর', 'চন্দ্রাদিঘীনালা', '8013', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1962, 'Dhaka', 'Gopalganj', 'Gopalganj Sadar', 'Gopalganj Sadar', '8100', 'ঢাকা', 'গোপালগঞ্জ', 'গোপালগঞ্জ সদর', 'গোপালগঞ্জ সদর', '8100', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1963, 'Dhaka', 'Gopalganj', 'Gopalganj Sadar', 'Ulpur', '8101', 'ঢাকা', 'গোপালগঞ্জ', 'গোপালগঞ্জ সদর', 'উলপুর', '8101', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1964, 'Dhaka', 'Gopalganj', 'Kashiani', 'Jonapur', '8133', 'ঢাকা', 'গোপালগঞ্জ', 'কাশিয়ানী', 'জনাপুর', '8133', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1965, 'Dhaka', 'Gopalganj', 'Kashiani', 'Kashiani', '8130', 'ঢাকা', 'গোপালগঞ্জ', 'কাশিয়ানী', 'কাশিয়ানী', '8130', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1966, 'Dhaka', 'Gopalganj', 'Kashiani', 'Ramdia College', '8131', 'ঢাকা', 'গোপালগঞ্জ', 'কাশিয়ানী', 'রামদিয়া কলেজ', '8131', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1967, 'Dhaka', 'Gopalganj', 'Kashiani', 'Ratoil', '8132', 'ঢাকা', 'গোপালগঞ্জ', 'কাশিয়ানী', 'রাতোইল', '8132', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1968, 'Dhaka', 'Gopalganj', 'Kotalipara', 'Kotalipara', '8110', 'ঢাকা', 'গোপালগঞ্জ', 'কোটালীপাড়া', 'কোটালীপাড়া', '8110', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1969, 'Dhaka', 'Gopalganj', 'Maksudpur', 'Batkiamari', '8141', 'ঢাকা', 'গোপালগঞ্জ', 'মাকসুদপুর', 'বাটিকামারী', '8141', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1970, 'Dhaka', 'Gopalganj', 'Maksudpur', 'Khandarpara', '8142', 'ঢাকা', 'গোপালগঞ্জ', 'মাকসুদপুর', 'খানদারপাড়া', '8142', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1971, 'Dhaka', 'Gopalganj', 'Muksudpur', 'Muksudpur', '8140', 'ঢাকা', 'গোপালগঞ্জ', 'মাকসুদপুর', 'মাকসুদপুর', '8140', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1972, 'Dhaka', 'Gopalganj', 'Tungipara', 'Patgati', '8121', 'ঢাকা', 'গোপালগঞ্জ', 'টুঙ্গিপাড়া', 'পাটগাটি', '8121', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1973, 'Dhaka', 'Gopalganj', 'Tungipara', 'Tungipara', '8120', 'ঢাকা', 'গোপালগঞ্জ', 'টুঙ্গিপাড়া', 'টুঙ্গিপাড়া', '8120', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1974, 'Dhaka', 'Kishoreganj', 'Bajitpur', 'Bajitpur', '2336', 'ঢাকা', 'কিশোরগঞ্জ', 'বাজিতপুর', 'বাজিতপুর', '2336', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1975, 'Dhaka', 'Kishoreganj', 'Bajitpur', 'Laksmipur', '2338', 'ঢাকা', 'কিশোরগঞ্জ', 'বাজিতপুর', 'লক্ষ্মীপুর', '2338', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1976, 'Dhaka', 'Kishoreganj', 'Bajitpur', 'Sararchar', '2337', 'ঢাকা', 'কিশোরগঞ্জ', 'বাজিতপুর', 'সরারচর', '2337', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1977, 'Dhaka', 'Kishoreganj', 'Bhairob', 'Bhairab', '2350', 'ঢাকা', 'কিশোরগঞ্জ', 'ভৈরব', 'ভৈরব', '2350', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1978, 'Dhaka', 'Kishoreganj', 'Hossenpur', 'Hossenpur', '2320', 'ঢাকা', 'কিশোরগঞ্জ', 'হোসেনপুর', 'হোসেনপুর', '2320', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1979, 'Dhaka', 'Kishoreganj', 'Itna', 'Itna', '2390', 'ঢাকা', 'কিশোরগঞ্জ', 'ইটনা', 'ইটনা', '2390', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1980, 'Dhaka', 'Kishoreganj', 'Karimganj', 'Karimganj', '2310', 'ঢাকা', 'কিশোরগঞ্জ', 'করিমগঞ্জ', 'করিমগঞ্জ', '2310', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1981, 'Dhaka', 'Kishoreganj', 'Katiadi', 'Gochhihata', '2331', 'ঢাকা', 'কিশোরগঞ্জ', 'কটিয়াদি', 'গচিহাটা', '2331', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1982, 'Dhaka', 'Kishoreganj', 'Katiadi', 'Katiadi', '2330', 'ঢাকা', 'কিশোরগঞ্জ', 'কটিয়াদি', 'কটিয়াদি', '2330', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1983, 'Dhaka', 'Kishoreganj', 'Kishoreganj Sadar', 'Kishoreganj S.Mills', '2301', 'ঢাকা', 'কিশোরগঞ্জ', 'কিশোরগঞ্জ সদর', 'কিশোরগঞ্জ এস.মিলস', '2301', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1984, 'Dhaka', 'Kishoreganj', 'Kishoreganj Sadar', 'Kishoreganj Sadar', '2300', 'ঢাকা', 'কিশোরগঞ্জ', 'কিশোরগঞ্জ সদর', 'কিশোরগঞ্জ সদর', '2300', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1985, 'Dhaka', 'Kishoreganj', 'Kishoreganj Sadar', 'Maizhati', '2302', 'ঢাকা', 'কিশোরগঞ্জ', 'কিশোরগঞ্জ সদর', 'মাইজহাটি', '2302', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1986, 'Dhaka', 'Kishoreganj', 'Kishoreganj Sadar', 'Nilganj', '2303', 'ঢাকা', 'কিশোরগঞ্জ', 'কিশোরগঞ্জ সদর', 'নীলগঞ্জ', '2303', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1987, 'Dhaka', 'Kishoreganj', 'Kuliarchar', 'Chhoysuti', '2341', 'ঢাকা', 'কিশোরগঞ্জ', 'কুলিয়ারচর', 'ছয়সূতি', '2341', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1988, 'Dhaka', 'Kishoreganj', 'Kuliarchar', 'Kuliarchar', '2340', 'ঢাকা', 'কিশোরগঞ্জ', 'কুলিয়ারচর', 'কুলিয়ারচর', '2340', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1989, 'Dhaka', 'Kishoreganj', 'Mithamoin', 'Abdullahpur', '2371', 'ঢাকা', 'কিশোরগঞ্জ', 'মিঠামইন', 'আব্দুল্লাহপুর', '2371', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1990, 'Dhaka', 'Kishoreganj', 'Mithamoin', 'MIthamoin', '2370', 'ঢাকা', 'কিশোরগঞ্জ', 'মিঠামইন', 'মিঠামইন', '2370', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1991, 'Dhaka', 'Kishoreganj', 'Nikli', 'Nikli', '2360', 'ঢাকা', 'কিশোরগঞ্জ', 'নিকলী', 'নিকলী', '2360', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1992, 'Dhaka', 'Kishoreganj', 'Ostagram', 'Ostagram', '2380', 'ঢাকা', 'কিশোরগঞ্জ', 'অষ্টগ্রাম', 'অষ্টগ্রাম', '2380', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1993, 'Dhaka', 'Kishoreganj', 'Ostagram', 'Bangalpara', '2380', 'ঢাকা', 'কিশোরগঞ্জ', 'অষ্টগ্রাম', 'বাংগালপাড়া', '2350', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1994, 'Dhaka', 'Kishoreganj', 'Pakundia', 'Pakundia', '2326', 'ঢাকা', 'কিশোরগঞ্জ', 'পাকুন্দিয়া', 'পাকুন্দিয়া', '2326', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1995, 'Dhaka', 'Kishoreganj', 'Tarial', 'Tarial', '2316', 'ঢাকা', 'কিশোরগঞ্জ', 'তাড়াইল', 'তাড়াইল', '2316', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1996, 'Dhaka', 'Madaripur', 'Barhamganj', 'Bahadurpur', '7932', 'ঢাকা', 'মাদারীপুর', 'বারহামগঞ্জ', 'বাহাদুরপুর', '7932', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1997, 'Dhaka', 'Madaripur', 'Barhamganj', 'Barhamganj', '7930', 'ঢাকা', 'মাদারীপুর', 'বারহামগঞ্জ', 'বারহামগঞ্জ', '7930', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1998, 'Dhaka', 'Madaripur', 'Barhamganj', 'Nilaksmibandar', '7931', 'ঢাকা', 'মাদারীপুর', 'বারহামগঞ্জ', 'নিলাকসমিবান্দার', '7931', '2021-07-21 08:43:21', '2021-07-21 08:43:21'),
(1999, 'Dhaka', 'Madaripur', 'Barhamganj', 'Umedpur', '7933', 'ঢাকা', 'মাদারীপুর', 'বারহামগঞ্জ', 'উমেদপুর', '7933', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2000, 'Dhaka', 'Madaripur', 'kalkini', 'Kalkini', '7920', 'ঢাকা', 'মাদারীপুর', 'কালকিনি', 'কালকিনি', '7920', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2001, 'Dhaka', 'Madaripur', 'kalkini', 'Sahabrampur', '7921', 'ঢাকা', 'মাদারীপুর', 'কালকিনি', 'সাহাবরামপুর', '7921', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2002, 'Dhaka', 'Madaripur', 'Madaripur Sadar', 'Charmugria', '7901', 'ঢাকা', 'মাদারীপুর', 'মাদারীপুর সদর', 'চরমুগরিয়া', '7901', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2003, 'Dhaka', 'Madaripur', 'Madaripur Sadar', 'Habiganj', '7903', 'ঢাকা', 'মাদারীপুর', 'মাদারীপুর সদর', 'হবিগঞ্জ', '7903', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2004, 'Dhaka', 'Madaripur', 'Madaripur Sadar', 'Kulpaddi', '7902', 'ঢাকা', 'মাদারীপুর', 'মাদারীপুর সদর', 'কুলপাদ্দি', '7902', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2005, 'Dhaka', 'Madaripur', 'Madaripur Sadar', 'Madaripur Sadar', '7900', 'ঢাকা', 'মাদারীপুর', 'মাদারীপুর সদর', 'মাদারীপুর সদর', '7900', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2006, 'Dhaka', 'Madaripur', 'Madaripur Sadar', 'Mustafapur', '7904', 'ঢাকা', 'মাদারীপুর', 'মাদারীপুর সদর', 'মুস্তফাপুর', '7904', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2007, 'Dhaka', 'Madaripur', 'Rajoir', 'Khalia', '7911', 'ঢাকা', 'মাদারীপুর', 'রাজৈর', 'খালিয়া', '7911', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2008, 'Dhaka', 'Madaripur', 'Rajoir', 'Rajoir', '7910', 'ঢাকা', 'মাদারীপুর', 'রাজৈর', 'রাজৈর', '7910', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2009, 'Dhaka', 'Manikganj', 'Doulatpur', 'Doulatpur', '1860', 'ঢাকা', 'মানিকগঞ্জ', 'দৌলতপুর', 'দৌলতপুর', '1860', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2010, 'Dhaka', 'Manikganj', 'Ghior', 'Ghior', '1840', 'ঢাকা', 'মানিকগঞ্জ', 'ঘিওর', 'ঘিওর', '1840', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2011, 'Dhaka', 'Manikganj', 'Lechhraganj', 'Jhitka', '1831', 'ঢাকা', 'মানিকগঞ্জ', 'লেছড়াগঞ্জ', 'ঝিটকা', '1831', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2012, 'Dhaka', 'Manikganj', 'Lechhraganj', 'Lechhraganj', '1830', 'ঢাকা', 'মানিকগঞ্জ', 'বারহামগঞ্জ', 'বারহামগঞ্জ', '1830', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2013, 'Dhaka', 'Manikganj', 'Manikganj Sadar', 'Barangail', '1804', 'ঢাকা', 'মানিকগঞ্জ', 'মানিকগঞ্জ সদর', 'বরংগাইল', '1804', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2014, 'Dhaka', 'Manikganj', 'Manikganj Sadar', 'Gorpara', '1802', 'ঢাকা', 'মানিকগঞ্জ', 'মানিকগঞ্জ সদর', 'গড়পাড়া', '1802', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2015, 'Dhaka', 'Manikganj', 'Manikganj Sadar', 'Mahadebpur', '1803', 'ঢাকা', 'মানিকগঞ্জ', 'মানিকগঞ্জ সদর', 'মহাদেবপুর', '1803', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2016, 'Dhaka', 'Manikganj', 'Manikganj Sadar', 'Manikganj Bazar', '1801', 'ঢাকা', 'মানিকগঞ্জ', 'মানিকগঞ্জ সদর', 'মানিকগঞ্জ বাজার', '1801', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2017, 'Dhaka', 'Manikganj', 'Manikganj Sadar', 'Manikganj Sadar', '1800', 'ঢাকা', 'মানিকগঞ্জ', 'মানিকগঞ্জ সদর', 'মানিকগঞ্জ সদর', '1800', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2018, 'Dhaka', 'Manikganj', 'Saturia', 'Baliati', '1811', 'ঢাকা', 'মানিকগঞ্জ', 'সাটুরিয়া', 'বালিয়াটি', '1811', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2019, 'Dhaka', 'Manikganj', 'Saturia', 'Saturia', '1810', 'ঢাকা', 'মানিকগঞ্জ', 'সাটুরিয়া', 'সাটুরিয়া', '1810', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2020, 'Dhaka', 'Manikganj', 'Shibloya', 'Aricha', '1851', 'ঢাকা', 'মানিকগঞ্জ', 'শিবালয়', 'আরিচা', '1851', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2021, 'Dhaka', 'Manikganj', 'Shibloya', 'Shibaloy', '1850', 'ঢাকা', 'মানিকগঞ্জ', 'শিবালয়', 'শিবালয়', '1850', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2022, 'Dhaka', 'Manikganj', 'Shibloya', 'Tewta', '1852', 'ঢাকা', 'মানিকগঞ্জ', 'শিবালয়', 'তেওতা', '1852', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2023, 'Dhaka', 'Manikganj', 'Shibloya', 'Uthli', '1853', 'ঢাকা', 'মানিকগঞ্জ', 'শিবালয়', 'উঠলি', '1853', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2024, 'Dhaka', 'Manikganj', 'Singari', 'Baira', '1821', 'ঢাকা', 'মানিকগঞ্জ', 'সিংগাইর', 'বায়রা', '1821', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2025, 'Dhaka', 'Manikganj', 'Singari', 'joymantop', '1822', 'ঢাকা', 'মানিকগঞ্জ', 'সিংগাইর', 'জয়মন্তব', '1822', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2026, 'Dhaka', 'Manikganj', 'Singari', 'Singair', '1820', 'ঢাকা', 'মানিকগঞ্জ', 'সিংগাইর', 'সিংগাইর', '1820', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2027, 'Dhaka', 'Munshiganj', 'Gajaria', 'Gajaria', '1510', 'ঢাকা', 'মুন্সিগঞ্জ', 'গজারিয়া', 'গজারিয়া', '1510', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2028, 'Dhaka', 'Munshiganj', 'Gajaria', 'Hossendi', '1511', 'ঢাকা', 'মুন্সিগঞ্জ', 'গজারিয়া', 'হোসেন্দি', '1511', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2029, 'Dhaka', 'Munshiganj', 'Gajaria', 'Rasulpur', '1512', 'ঢাকা', 'মুন্সিগঞ্জ', 'গজারিয়া', 'রসুলপুর', '1512', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2030, 'Dhaka', 'Munshiganj', 'Lohajong', 'Gouragonj', '1334', 'ঢাকা', 'মুন্সিগঞ্জ', 'লৌহজং', 'গৌড়গঞ্জ', '1534', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2031, 'Dhaka', 'Munshiganj', 'Lohajong', 'Haldia SO', '1532', 'ঢাকা', 'মুন্সিগঞ্জ', 'লৌহজং', 'হলদিয়া তাই', '1532', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2032, 'Dhaka', 'Munshiganj', 'Lohajong', 'Haridia', '1333', 'ঢাকা', 'মুন্সিগঞ্জ', 'লৌহজং', 'হারিদিয়া', '1333', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2033, 'Dhaka', 'Munshiganj', 'Lohajong', 'Haridia DESO', '1533', 'ঢাকা', 'মুন্সিগঞ্জ', 'লৌহজং', 'হারিদিয়া ডেসো', '1533', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2034, 'Dhaka', 'Munshiganj', 'Lohajong', 'Korhati', '1531', 'ঢাকা', 'মুন্সিগঞ্জ', 'লৌহজং', 'করহাতি', '1531', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2035, 'Dhaka', 'Munshiganj', 'Lohajong', 'Lohajang', '1530', 'ঢাকা', 'মুন্সিগঞ্জ', 'লৌহজং', 'লৌহজং', '1530', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2036, 'Dhaka', 'Munshiganj', 'Lohajong', 'Madini Mandal', '1335', 'ঢাকা', 'মুন্সিগঞ্জ', 'লৌহজং', 'মেদিনী মণ্ডল', '1335', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2037, 'Dhaka', 'Munshiganj', 'Lohajong', 'Medini Mandal EDSO', '1535', 'ঢাকা', 'মুন্সিগঞ্জ', 'লৌহজং', 'মেদিনী মন্ডল ইডিএসও', '1535', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2038, 'Dhaka', 'Munshiganj', 'Munshiganj Sadar', 'Kathakhali', '1503', 'ঢাকা', 'মুন্সিগঞ্জ', 'মুন্সীগঞ্জ সদর', 'কাঠাখালি', '1503', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2039, 'Dhaka', 'Munshiganj', 'Munshiganj Sadar', 'Mirkadim', '1502', 'ঢাকা', 'মুন্সিগঞ্জ', 'মুন্সীগঞ্জ সদর', 'মিরকাদিম', '1502', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2040, 'Dhaka', 'Munshiganj', 'Munshiganj Sadar', 'Munshiganj Sadar', '1500', 'ঢাকা', 'মুন্সিগঞ্জ', 'মুন্সীগঞ্জ সদর', 'মুন্সীগঞ্জ সদর', '1500', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2041, 'Dhaka', 'Munshiganj', 'Munshiganj Sadar', 'Rikabibazar', '1501', 'ঢাকা', 'মুন্সিগঞ্জ', 'মুন্সীগঞ্জ সদর', 'রিকাবিবাজার', '1501', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2042, 'Dhaka', 'Munshiganj', 'Sirajdikhan', 'Ichapur', '1542', 'ঢাকা', 'মুন্সিগঞ্জ', 'সিরাজদিখান', 'ইছাপুর', '1542', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2043, 'Dhaka', 'Munshiganj', 'Sirajdikhan', 'Kola', '1541', 'ঢাকা', 'মুন্সিগঞ্জ', 'সিরাজদিখান', 'কোলা', '1541', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2044, 'Dhaka', 'Munshiganj', 'Sirajdikhan', 'Malkha Nagar', '1543', 'ঢাকা', 'মুন্সিগঞ্জ', 'সিরাজদিখান', 'মালখানগর', '1543', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2045, 'Dhaka', 'Munshiganj', 'Sirajdikhan', 'Shekher Nagar', '1544', 'ঢাকা', 'মুন্সিগঞ্জ', 'সিরাজদিখান', 'শেখের নগর', '1544', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2046, 'Dhaka', 'Munshiganj', 'Sirajdikhan', 'Sirajdikhan', '1540', 'ঢাকা', 'মুন্সিগঞ্জ', 'সিরাজদিখান', 'সিরাজদিখান', '1540', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2047, 'Dhaka', 'Munshiganj', 'Sreenagar', 'Baghra', '1557', 'ঢাকা', 'মুন্সিগঞ্জ', 'শ্রীনগর', 'বাঘড়া', '1557', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2048, 'Dhaka', 'Munshiganj', 'Sreenagar', 'Rarikhal', '1551', 'ঢাকা', 'মুন্সিগঞ্জ', 'শ্রীনগর', 'বারিখাল', '1551', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2049, 'Dhaka', 'Munshiganj', 'Sreenagar', 'Bhaggyakul', '1558', 'ঢাকা', 'মুন্সিগঞ্জ', 'শ্রীনগর', 'ভাগ্যকুল', '1558', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2050, 'Dhaka', 'Munshiganj', 'Sreenagar', 'Hashara', '1553', 'ঢাকা', 'মুন্সিগঞ্জ', 'শ্রীনগর', 'হাশারা', '1553', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2051, 'Dhaka', 'Munshiganj', 'Sreenagar', 'Kolapara', '1554', 'ঢাকা', 'মুন্সিগঞ্জ', 'শ্রীনগর', 'কলাপাড়া', '1554', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2052, 'Dhaka', 'Munshiganj', 'Sreenagar', 'Kumarbhog', '1555', 'ঢাকা', 'মুন্সিগঞ্জ', 'শ্রীনগর', 'কুমারভগ', '1555', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2053, 'Dhaka', 'Munshiganj', 'Sreenagar', 'Maijpara', '1552', 'ঢাকা', 'মুন্সিগঞ্জ', 'শ্রীনগর', 'মাজপাড়া', '1552', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2054, 'Dhaka', 'Munshiganj', 'Sreenagar', 'Sreenagar', '1550', 'ঢাকা', 'মুন্সিগঞ্জ', 'শ্রীনগর', 'শ্রীনগর', '1550', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2055, 'Dhaka', 'Munshiganj', 'Sreenagar', 'Vaggyakul SO', '1556', 'ঢাকা', 'মুন্সিগঞ্জ', 'শ্রীনগর', 'ভাগ্যকুল তাই', '1556', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2056, 'Dhaka', 'Munshiganj', 'Tangibari', 'Bajrajugini', '1523', 'ঢাকা', 'মুন্সিগঞ্জ', 'টাংগিবাড়ি', 'বিজরাজুগিনি', '1523', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2057, 'Dhaka', 'Munshiganj', 'Tangibari', 'Baligao', '1522', 'ঢাকা', 'মুন্সিগঞ্জ', 'টাংগিবাড়ি', 'বালিগাও', '1522', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2058, 'Dhaka', 'Munshiganj', 'Tangibari', 'Betkahat', '1521', 'ঢাকা', 'মুন্সিগঞ্জ', 'টাংগিবাড়ি', 'বেটকারহাট', '1521', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2059, 'Dhaka', 'Munshiganj', 'Tangibari', 'Dighirpar', '1525', 'ঢাকা', 'মুন্সিগঞ্জ', 'টাংগিবাড়ি', 'দিঘিরপাড়', '1525', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2060, 'Dhaka', 'Munshiganj', 'Tangibari', 'Hasail', '1524', 'ঢাকা', 'মুন্সিগঞ্জ', 'টাংগিবাড়ি', 'হাসাইল', '1524', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2061, 'Dhaka', 'Munshiganj', 'Tangibari', 'Pura', '1527', 'ঢাকা', 'মুন্সিগঞ্জ', 'টাংগিবাড়ি', 'পুরা', '1527', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2062, 'Dhaka', 'Munshiganj', 'Tangibari', 'Pura EDSO', '1526', 'ঢাকা', 'মুন্সিগঞ্জ', 'টাংগিবাড়ি', 'পুরা ইডিএসও', '1526', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2063, 'Dhaka', 'Munshiganj', 'Tangibari', 'Tangibari', '1520', 'ঢাকা', 'মুন্সিগঞ্জ', 'টাংগিবাড়ি', 'টাংগিবাড়ি', '1520', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2064, 'Dhaka', 'Narayanganj', 'Araihazar', 'Araihazar', '1450', 'ঢাকা', 'নারায়ণগঞ্জ', 'আড়াইহাজার', 'আড়াইহাজার', '1450', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2065, 'Dhaka', 'Narayanganj', 'Araihazar', 'Gopaldi', '1451', 'ঢাকা', 'নারায়ণগঞ্জ', 'আড়াইহাজার', 'দুপ্তারা', '1460', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2066, 'Dhaka', 'Narayanganj', 'Araihazar', 'Duptara', '1460', 'ঢাকা', 'নারায়ণগঞ্জ', 'আড়াইহাজার', 'গোপালদি', '1451', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2067, 'Dhaka', 'Narayanganj', 'Baidder Bazar', 'Baidder Bazar', '1440', 'ঢাকা', 'নারায়ণগঞ্জ', 'বাইদ্দের বাজার', 'বারো নগর', '1441', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2068, 'Dhaka', 'Narayanganj', 'Baidder Bazar', 'Bara Nagar', '1441', 'ঢাকা', 'নারায়ণগঞ্জ', 'বাইদ্দের বাজার', 'বারোদি', '1442', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2069, 'Dhaka', 'Narayanganj', 'Baidder Bazar', 'Barodi', '1442', 'ঢাকা', 'নারায়ণগঞ্জ', 'বাইদ্দের বাজার', 'বাইদ্দের বাজার', '1440', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2070, 'Dhaka', 'Narayanganj', 'Bandar', 'Bandar', '1410', 'ঢাকা', 'নারায়ণগঞ্জ', 'বন্দর', 'বন্দর', '1410', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2071, 'Dhaka', 'Narayanganj', 'Bandar', 'BIDS', '1413', 'ঢাকা', 'নারায়ণগঞ্জ', 'বন্দর', 'বিআইডিএস', '1413', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2072, 'Dhaka', 'Narayanganj', 'Bandar', 'D.C Mills', '1411', 'ঢাকা', 'নারায়ণগঞ্জ', 'বন্দর', 'ডি.সি মিলস', '1411', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2073, 'Dhaka', 'Narayanganj', 'Bandar', 'Madanganj', '1414', 'ঢাকা', 'নারায়ণগঞ্জ', 'বন্দর', 'মদনগঞ্জ', '1414', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2074, 'Dhaka', 'Narayanganj', 'Bandar', 'Nabiganj', '1412', 'ঢাকা', 'নারায়ণগঞ্জ', 'বন্দর', 'নবীগঞ্জ', '1412', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2075, 'Dhaka', 'Narayanganj', 'Fatullah', 'Fatulla Bazar', '1421', 'ঢাকা', 'নারায়ণগঞ্জ', 'ফতুল্লা', 'ফতুল্লা বাজার', '1421', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2076, 'Dhaka', 'Narayanganj', 'Fatullah', 'Fatullah', '1420', 'ঢাকা', 'নারায়ণগঞ্জ', 'ফতুল্লা', 'ফতুল্লা', '1420', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2077, 'Dhaka', 'Narayanganj', 'Narayanganj Sadar', 'Narayanganj Sadar', '1400', 'ঢাকা', 'নারায়ণগঞ্জ', 'নারায়ণগঞ্জ সদর', 'নারায়ণগঞ্জ সদর', '1400', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2078, 'Dhaka', 'Narayanganj', 'Rupganj', 'Bhulta', '1462', 'ঢাকা', 'নারায়ণগঞ্জ', 'রূপগঞ্জ', 'ভুলতা', '1462', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2079, 'Dhaka', 'Narayanganj', 'Rupganj', 'Kanchan', '1461', 'ঢাকা', 'নারায়ণগঞ্জ', 'রূপগঞ্জ', 'কাঞ্চন', '1461', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2080, 'Dhaka', 'Narayanganj', 'Rupganj', 'Murapara', '1464', 'ঢাকা', 'নারায়ণগঞ্জ', 'রূপগঞ্জ', 'মুরাপাড়া', '1464', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2081, 'Dhaka', 'Narayanganj', 'Rupganj', 'Nagri', '1463', 'ঢাকা', 'নারায়ণগঞ্জ', 'রূপগঞ্জ', 'নগরি', '1463', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2082, 'Dhaka', 'Narayanganj', 'Rupganj', 'Rupganj', '1460', 'ঢাকা', 'নারায়ণগঞ্জ', 'রূপগঞ্জ', 'রূপগঞ্জ', '1460', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2083, 'Dhaka', 'Narayanganj', 'Siddirganj', 'Adamjeenagar', '1431', 'ঢাকা', 'নারায়ণগঞ্জ', 'সিদ্ধিরগঞ্জ', 'আদামজীনগর', '1431', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2084, 'Dhaka', 'Narayanganj', 'Siddirganj', 'LN Mills', '1432', 'ঢাকা', 'নারায়ণগঞ্জ', 'সিদ্ধিরগঞ্জ', 'এলএন মিলস', '1432', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2085, 'Dhaka', 'Narayanganj', 'Siddirganj', 'Siddirganj', '1430', 'ঢাকা', 'নারায়ণগঞ্জ', 'সিদ্ধিরগঞ্জ', 'সিদ্ধিরগঞ্জ', '1430', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2086, 'Dhaka', 'Narsingdi', 'Belabo', 'Belabo', '1640', 'ঢাকা', 'নরসিংদী', 'বেলাব', 'বেলাব', '1640', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2087, 'Dhaka', 'Narsingdi', 'Monohordi', 'Hatirdia', '1651', 'ঢাকা', 'নরসিংদী', 'মনোহরদি', 'হাতিরদিয়া', '1651', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2088, 'Dhaka', 'Narsingdi', 'Monohordi', 'Katabaria', '1652', 'ঢাকা', 'নরসিংদী', 'মনোহরদি', 'কাটাবাড়িয়া', '1652', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2089, 'Dhaka', 'Narsingdi', 'Monohordi', 'Monohordi', '1650', 'ঢাকা', 'নরসিংদী', 'মনোহরদি', 'মনোহরদি', '1650', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2090, 'Dhaka', 'Narsingdi', 'Narsingdi Sadar', 'Karimpur', '1605', 'ঢাকা', 'নরসিংদী', 'নরসিংদী সদর', 'করিমপুর', '1605', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2091, 'Dhaka', 'Narsingdi', 'Madhabdi', 'Madhabdi', '1604', 'ঢাকা', 'নরসিংদী', 'নরসিংদী সদর', 'মাধবদী', '1604', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2092, 'Dhaka', 'Narsingdi', 'Narsingdi Sadar', 'Narsingdi College', '1602', 'ঢাকা', 'নরসিংদী', 'নরসিংদী সদর', 'নরসিংদী কলেজ', '1602', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2093, 'Dhaka', 'Narsingdi', 'Narsingdi Sadar', 'Narsingdi Sadar', '1600', 'ঢাকা', 'নরসিংদী', 'নরসিংদী সদর', 'নরসিংদী সদর', '1600', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2094, 'Dhaka', 'Narsingdi', 'Narsingdi Sadar', 'Panchdona', '1603', 'ঢাকা', 'নরসিংদী', 'নরসিংদী সদর', 'পাঁচদোনা', '1603', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2095, 'Dhaka', 'Narsingdi', 'Narsingdi Sadar', 'UMC Jute Mills', '1601', 'ঢাকা', 'নরসিংদী', 'নরসিংদী সদর', 'UMC জুট মিলস', '1601', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2096, 'Dhaka', 'Narsingdi', 'Palash', 'Char Sindhur', '1612', 'ঢাকা', 'নরসিংদী', 'পলাশ', 'চরসিন্ধুর', '1612', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2097, 'Dhaka', 'Narsingdi', 'Palash', 'Ghorashal', '1613', 'ঢাকা', 'নরসিংদী', 'পলাশ', 'ঘোড়াশাল', '1613', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2098, 'Dhaka', 'Narsingdi', 'Palash', 'Sarkarkhana', '1611', 'ঢাকা', 'নরসিংদী', 'পলাশ', 'ঘোড়াশাল ইউরিয়া ফ্যাক্টুরি', '1611', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2099, 'Dhaka', 'Narsingdi', 'Palash', 'Palash', '1610', 'ঢাকা', 'নরসিংদী', 'পলাশ', 'পলাশ', '1610', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2100, 'Dhaka', 'Narsingdi', 'Raypura', 'Bazar Hasnabad', '1631', 'ঢাকা', 'নরসিংদী', 'রায়পুর', 'বাজার হাসনাবাদ', '1631', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2101, 'Dhaka', 'Narsingdi', 'Raypura', 'Radhaganj bazar', '1632', 'ঢাকা', 'নরসিংদী', 'রায়পুর', 'রাধাগঞ্জ বাজার', '1632', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2102, 'Dhaka', 'Narsingdi', 'Raypura', 'Raypura', '1630', 'ঢাকা', 'নরসিংদী', 'রায়পুর', 'রায়পুর', '1630', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2103, 'Dhaka', 'Narsingdi', 'Shibpur', 'Shibpur', '1620', 'ঢাকা', 'নরসিংদী', 'শিবপুর', 'শিবপুর', '1620', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2104, 'Dhaka', 'Rajbari', 'Baliakandi', 'Baliakandi', '7730', 'ঢাকা', 'রাজবাড়ী', 'বালিয়াকান্দি', 'বালিয়াকান্দি', '7730', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2105, 'Dhaka', 'Rajbari', 'Baliakandi', 'Nalia', '7731', 'ঢাকা', 'রাজবাড়ী', 'বালিয়াকান্দি', 'নালিয়া থেকে', '7731', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2106, 'Dhaka', 'Rajbari', 'Pangsha', 'Mrigibazar', '7723', 'ঢাকা', 'রাজবাড়ী', 'পাংশা', 'মৃগিবাজার', '7723', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2107, 'Dhaka', 'Rajbari', 'Pangsha', 'Pangsha', '7720', 'ঢাকা', 'রাজবাড়ী', 'পাংশা', 'পাংশা', '7720', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2108, 'Dhaka', 'Rajbari', 'Pangsha', 'Ramkol', '7721', 'ঢাকা', 'রাজবাড়ী', 'পাংশা', 'রামকল', '7721', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2109, 'Dhaka', 'Rajbari', 'Pangsha', 'Ratandia', '7722', 'ঢাকা', 'রাজবাড়ী', 'পাংশা', 'রতনদিয়া', '7722', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2110, 'Dhaka', 'Rajbari', 'Rajbari Sadar', 'Goalanda', '7710', 'ঢাকা', 'রাজবাড়ী', 'রাজবাড়ী সদর', 'গোয়ালন্দ', '7710', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2111, 'Dhaka', 'Rajbari', 'Rajbari Sadar', 'Khankhanapur', '7711', 'ঢাকা', 'রাজবাড়ী', 'রাজবাড়ী সদর', 'খনখনাপুর', '7711', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2112, 'Dhaka', 'Rajbari', 'Rajbari Sadar', 'Rajbari Sadar', '7700', 'ঢাকা', 'রাজবাড়ী', 'রাজবাড়ী সদর', 'রাজবাড়ী সদর', '7700', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2113, 'Dhaka', 'Shariatpur', 'Bhedorganj', 'Bhedorganj', '8030', 'ঢাকা', 'শরীয়তপুর', 'ভেদোরগঞ্জ', 'ভেদোরগঞ্জ', '8030', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2114, 'Dhaka', 'Shariatpur', 'Damudhya', 'Damudhya', '8040', 'ঢাকা', 'শরীয়তপুর', 'দামুধ্যা', 'দামুধ্যা', '8040', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2115, 'Dhaka', 'Shariatpur', 'Gosairhat', 'Gosairhat', '8050', 'ঢাকা', 'শরীয়তপুর', 'গোসাইরহাট', 'গোসাইরহাট', '8050', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2116, 'Dhaka', 'Shariatpur', 'Jajira', 'Jajira', '8010', 'ঢাকা', 'শরীয়তপুর', 'জাজিরা', 'জাজিরা', '8010', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2117, 'Dhaka', 'Shariatpur', 'Naria', 'Bhozeshwar', '8021', 'ঢাকা', 'শরীয়তপুর', 'নড়িয়া', 'ভোজেশ্বর', '8021', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2118, 'Dhaka', 'Shariatpur', 'Naria', 'Gharisar', '8022', 'ঢাকা', 'শরীয়তপুর', 'নড়িয়া', 'ঘারিসার', '8022', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2119, 'Dhaka', 'Shariatpur', 'Naria', 'Kartikpur', '8024', 'ঢাকা', 'শরীয়তপুর', 'নড়িয়া', 'কার্তিকপুর', '8024', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2120, 'Dhaka', 'Shariatpur', 'Naria', 'Naria', '8020', 'ঢাকা', 'শরীয়তপুর', 'নড়িয়া', 'নড়িয়া', '8020', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2121, 'Dhaka', 'Shariatpur', 'Naria', 'Upshi', '8023', 'ঢাকা', 'শরীয়তপুর', 'নড়িয়া', 'উপশি', '8023', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2122, 'Dhaka', 'Shariatpur', 'Shariatpur Sadar', 'Angaria', '8001', 'ঢাকা', 'শরীয়তপুর', 'শরীয়তপুর সদর', 'আঙ্গারিয়া', '8001', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2123, 'Dhaka', 'Shariatpur', 'Shariatpur Sadar', 'Chikandi', '8002', 'ঢাকা', 'শরীয়তপুর', 'শরীয়তপুর সদর', 'চিকান্দি', '8002', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2124, 'Dhaka', 'Shariatpur', 'Shariatpur Sadar', 'Shariatpur Sadar', '8000', 'ঢাকা', 'শরীয়তপুর', 'শরীয়তপুর সদর', 'শরীয়তপুর সদর', '8000', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2125, 'Dhaka', 'Tangail', 'Basail', 'Basail', '1920', 'ঢাকা', 'টাঙ্গাইল', 'বাসাইল', 'বাসাইল', '1920', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2126, 'Dhaka', 'Tangail', 'Bhuapur', 'Bhuapur', '1960', 'ঢাকা', 'টাঙ্গাইল', 'ভূঞাপুর', 'ভূঞাপুর', '1960', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2127, 'Dhaka', 'Tangail', 'Delduar', 'Delduar', '1910', 'ঢাকা', 'টাঙ্গাইল', 'দেলদুয়ার', 'দেলদুয়ার', '1910', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2128, 'Dhaka', 'Tangail', 'Delduar', 'Elasin', '1913', 'ঢাকা', 'টাঙ্গাইল', 'দেলদুয়ার', 'ইলাসিন', '1913', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2129, 'Dhaka', 'Tangail', 'Delduar', 'Hinga Nagar', '1914', 'ঢাকা', 'টাঙ্গাইল', 'দেলদুয়ার', 'হিংগা নগর', '1914', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2130, 'Dhaka', 'Tangail', 'Delduar', 'Jangalia', '1911', 'ঢাকা', 'টাঙ্গাইল', 'দেলদুয়ার', 'জাঙ্গালিয়া', '1911', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2131, 'Dhaka', 'Tangail', 'Delduar', 'Lowhati', '1915', 'ঢাকা', 'টাঙ্গাইল', 'দেলদুয়ার', 'লউহাটি', '1915', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2132, 'Dhaka', 'Tangail', 'Delduar', 'Patharail', '1912', 'ঢাকা', 'টাঙ্গাইল', 'দেলদুয়ার', 'পাঠারাইল', '1912', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2133, 'Dhaka', 'Tangail', 'Ghatail', 'D. Pakutia', '1982', 'ঢাকা', 'টাঙ্গাইল', 'ঘাটাইল', 'ডি পাকুটিয়া', '1982', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2134, 'Dhaka', 'Tangail', 'Ghatail', 'Dhalapara', '1983', 'ঢাকা', 'টাঙ্গাইল', 'ঘাটাইল', 'ধলাপাড়া', '1983', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2135, 'Dhaka', 'Tangail', 'Ghatail', 'Ghatial', '1980', 'ঢাকা', 'টাঙ্গাইল', 'ঘাটাইল', 'ঘাটাইল', '1980', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2136, 'Dhaka', 'Tangail', 'Ghatail', 'Lohani', '1984', 'ঢাকা', 'টাঙ্গাইল', 'ঘাটাইল', 'লোহানী', '1984', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2137, 'Dhaka', 'Tangail', 'Ghatail', 'Zahidganj', '1981', 'ঢাকা', 'টাঙ্গাইল', 'ঘাটাইল', 'জাহিদগঞ্জ', '1981', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2138, 'Dhaka', 'Tangail', 'Gopalpur', 'Gopalpur', '1990', 'ঢাকা', 'টাঙ্গাইল', 'গোপালপুর', 'গোপালপুর', '1990', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2139, 'Dhaka', 'Tangail', 'Gopalpur', 'Hemnagar', '1992', 'ঢাকা', 'টাঙ্গাইল', 'গোপালপুর', 'হেমনগর', '1992', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2140, 'Dhaka', 'Tangail', 'Gopalpur', 'Jhowail', '1991', 'ঢাকা', 'টাঙ্গাইল', 'গোপালপুর', 'ঝোওয়াইল', '1991', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2141, 'Dhaka', 'Tangail', 'Gopalpur', 'Chatutia', '1991', 'ঢাকা', 'টাঙ্গাইল', 'গোপালপুর', 'চাতুতিয়া', '1991', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2142, 'Dhaka', 'Tangail', 'Kalihati', 'Ballabazar', '1973', 'ঢাকা', 'টাঙ্গাইল', 'কালিহাতী', 'বাল্লাবাজার', '1973', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2143, 'Dhaka', 'Tangail', 'Kalihati', 'Elenga', '1974', 'ঢাকা', 'টাঙ্গাইল', 'কালিহাতী', 'এলেঙ্গা', '1974', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2144, 'Dhaka', 'Tangail', 'Kalihati', 'Kalihati', '1970', 'ঢাকা', 'টাঙ্গাইল', 'কালিহাতী', 'কালিহাতী', '1970', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2145, 'Dhaka', 'Tangail', 'Kalihati', 'Nagarbari', '1977', 'ঢাকা', 'টাঙ্গাইল', 'কালিহাতী', 'নগরবাড়ী', '1977', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2147, 'Dhaka', 'Tangail', 'Kalihati', 'Nagbari', '1972', 'ঢাকা', 'টাঙ্গাইল', 'কালিহাতী', 'নাগবাড়ি', '1972', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2149, 'Dhaka', 'Tangail', 'Kalihati', 'Rajafair', '1971', 'ঢাকা', 'টাঙ্গাইল', 'কালিহাতী', 'রাজাফাইর', '1971', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2150, 'Dhaka', 'Tangail', 'Kashkaolia', 'Kashkawlia', '1930', 'ঢাকা', 'টাঙ্গাইল', 'কাশকাওলিয়া', 'কাশকাওলিয়া', '1930', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2151, 'Dhaka', 'Tangail', 'Madhupur', 'Dhonbari', '1997', 'ঢাকা', 'টাঙ্গাইল', 'মধুপুর', 'ধবাড়ি', '1997', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2152, 'Dhaka', 'Tangail', 'Madhupur', 'Madhupur', '1996', 'ঢাকা', 'টাঙ্গাইল', 'মধুপুর', 'মধুপুর', '1996', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2153, 'Dhaka', 'Tangail', 'Mirzapur', 'Gorai', '1941', 'ঢাকা', 'টাঙ্গাইল', 'মির্জাপুর', 'গড়াই', '1941', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2154, 'Dhaka', 'Tangail', 'Mirzapur', 'Jarmuki', '1944', 'ঢাকা', 'টাঙ্গাইল', 'মির্জাপুর', 'জারমুকি', '1944', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2155, 'Dhaka', 'Tangail', 'Mirzapur', 'M.C. College', '1942', 'ঢাকা', 'টাঙ্গাইল', 'মির্জাপুর', 'এম.সি. কলেজ', '1942', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2156, 'Dhaka', 'Tangail', 'Mirzapur', 'Mirzapur', '1940', 'ঢাকা', 'টাঙ্গাইল', 'মির্জাপুর', 'মির্জাপুর', '1940', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2157, 'Dhaka', 'Tangail', 'Mirzapur', 'Mohera', '1945', 'ঢাকা', 'টাঙ্গাইল', 'মির্জাপুর', 'মহেরা', '1945', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2158, 'Dhaka', 'Tangail', 'Mirzapur', 'Warri paikpara', '1943', 'ঢাকা', 'টাঙ্গাইল', 'মির্জাপুর', 'ওয়ারী পাইকপাড়া', '1943', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2159, 'Dhaka', 'Tangail', 'Nagarpur', 'Dhuburia', '1937', 'ঢাকা', 'টাঙ্গাইল', 'নাগরপুর', 'ধুবুরিয়া', '1937', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2160, 'Dhaka', 'Tangail', 'Nagarpur', 'Nagarpur', '1936', 'ঢাকা', 'টাঙ্গাইল', 'নাগরপুর', 'নাগরপুর', '1936', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2161, 'Dhaka', 'Tangail', 'Nagarpur', 'Salimabad', '1938', 'ঢাকা', 'টাঙ্গাইল', 'নাগরপুর', 'সলিমাবাদ', '1938', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2162, 'Dhaka', 'Tangail', 'Sakhipur', 'Kochua', '1951', 'ঢাকা', 'টাঙ্গাইল', 'সখীপুর', 'কচুয়া', '1951', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2163, 'Dhaka', 'Tangail', 'Sakhipur', 'Sakhipur', '1950', 'ঢাকা', 'টাঙ্গাইল', 'সখীপুর', 'সখীপুর', '1950', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2164, 'Dhaka', 'Tangail', 'Tangail Sadar', 'Kagmari', '1901', 'ঢাকা', 'টাঙ্গাইল', 'টাঙ্গাইল সদর', 'কাগমারি', '1901', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2165, 'Dhaka', 'Tangail', 'Tangail Sadar', 'Korotia', '1903', 'ঢাকা', 'টাঙ্গাইল', 'টাঙ্গাইল সদর', 'করোতিয়া', '1903', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2166, 'Dhaka', 'Tangail', 'Tangail Sadar', 'Purabari', '1904', 'ঢাকা', 'টাঙ্গাইল', 'টাঙ্গাইল সদর', 'পুড়াবাড়ি', '1904', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2167, 'Dhaka', 'Tangail', 'Tangail Sadar', 'Santosh', '1902', 'ঢাকা', 'টাঙ্গাইল', 'টাঙ্গাইল সদর', 'সন্তোষ', '1902', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2168, 'Dhaka', 'Tangail', 'Tangail Sadar', 'Tangail Sadar', '1900', 'ঢাকা', 'টাঙ্গাইল', 'টাঙ্গাইল সদর', 'টাঙ্গাইল সদর', '1900', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2169, 'Mymensingh', 'Jamalpur', 'Bakshiganj', 'Bakshiganj', '2140', 'ময়মনসিংহ', 'জামালপুর', 'বকশিগঞ্জ', 'বকশিগঞ্জ', '2014', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2170, 'Mymensingh', 'Jamalpur', 'Dewangonj', 'Dewangonj', '2030', 'ময়মনসিংহ', 'জামালপুর', 'দেওয়ানগঞ্জ', 'দেওয়ানগঞ্জ', '2030', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2171, 'Mymensingh', 'Jamalpur', 'Dewangonj', 'Dewangonj S. Mills', '2032', 'ময়মনসিংহ', 'জামালপুর', 'দেওয়ানগঞ্জ', 'দেওয়ানগঞ্জ এস মিলস', '2031', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2172, 'Mymensingh', 'Jamalpur', 'Islampur', 'Durmoot', '2021', 'ময়মনসিংহ', 'জামালপুর', 'ইসলামপুর', 'ডুরমোট', '2021', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2173, 'Mymensingh', 'Jamalpur', 'Islampur', 'Gilabari', '2022', 'ময়মনসিংহ', 'জামালপুর', 'ইসলামপুর', 'গিলাবাড়ি', '2022', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2174, 'Mymensingh', 'Jamalpur', 'Islampur', 'Islampur', '2020', 'ময়মনসিংহ', 'জামালপুর', 'ইসলামপুর', 'ইসলামপুর', '2020', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2175, 'Mymensingh', 'Jamalpur', 'Jamalpur', 'Jamalpur', '2000', 'ময়মনসিংহ', 'জামালপুর', 'জামালপুর', 'জামালপুর', '2000', '2021-07-21 08:43:22', '2021-07-21 08:43:22');
INSERT INTO `civilinfos` (`id`, `division`, `district`, `thana`, `suboffice`, `postcode`, `division_bn`, `district_bn`, `thana_bn`, `suboffice_bn`, `postcode_bn`, `created_at`, `updated_at`) VALUES
(2176, 'Mymensingh', 'Jamalpur', 'Jamalpur', 'Nandina', '2001', 'ময়মনসিংহ', 'জামালপুর', 'জামালপুর', 'নানদিনা', '2001', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2177, 'Mymensingh', 'Jamalpur', 'Jamalpur', 'Narundi', '2002', 'ময়মনসিংহ', 'জামালপুর', 'জামালপুর', 'নুরুন্দী', '2002', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2178, 'Mymensingh', 'Jamalpur', 'Melandah', 'Jalalpur', '2011', 'ময়মনসিংহ', 'জামালপুর', 'মেলান্দহ', 'জামালপুর', '2011', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2179, 'Mymensingh', 'Jamalpur', 'Melandah', 'Mahmudpur', '2013', 'ময়মনসিংহ', 'জামালপুর', 'মেলান্দহ', 'মাহমুদপুর', '2013', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2180, 'Mymensingh', 'Jamalpur', 'Melandah', 'Malancha', '2012', 'ময়মনসিংহ', 'জামালপুর', 'মেলান্দহ', 'মালঞ্চ', '2012', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2181, 'Mymensingh', 'Jamalpur', 'Melandah', 'Melandah', '2010', 'ময়মনসিংহ', 'জামালপুর', 'মেলান্দহ', 'মেলান্দহ', '2010', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2182, 'Mymensingh', 'Jamalpur', 'Madarganj', 'Balijhuri', '2041', 'ময়মনসিংহ', 'জামালপুর', 'মাদারগঞ্জ', 'বালিঝুড়ি', '2041', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2183, 'Mymensingh', 'Jamalpur', 'Madarganjng', 'Madarganj', '2040', 'ময়মনসিংহ', 'জামালপুর', 'মাদারগঞ্জ', 'মাদারগঞ্জ', '2040', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2184, 'Mymensingh', 'Jamalpur', 'Sharishabari', 'Bausee', '2052', 'ময়মনসিংহ', 'জামালপুর', 'সরিষাবাড়ি', 'বাউসী', '2052', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2185, 'Mymensingh', 'Jamalpur', 'Madarganj', 'Adarvita', '2051', 'ময়মনসিংহ', 'জামালপুর', 'সরিষাবাড়ি', 'গুনেরবাড়ি', '2051', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2186, 'Mymensingh', 'Jamalpur', 'Sharishabari', 'Jagannath Ghat', '2053', 'ময়মনসিংহ', 'জামালপুর', 'সরিষাবাড়ি', 'জগন্নাথ ঘাট', '2053', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2187, 'Mymensingh', 'Jamalpur', 'Sharishabari', 'Jamuna Sar Karkhanayy', '2055', 'ময়মনসিংহ', 'জামালপুর', 'সরিষাবাড়ি', 'যমুনা সার কারখানা', '2055', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2188, 'Mymensingh', 'Jamalpur', 'Sharishabari', 'Pingna', '2054', 'ময়মনসিংহ', 'জামালপুর', 'সরিষাবাড়ি', 'পিংনা', '2054', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2189, 'Mymensingh', 'Jamalpur', 'Sharishabari', 'Sharishabari', '2050', 'ময়মনসিংহ', 'জামালপুর', 'সরিষাবাড়ি', 'সরিষাবাড়ি', '2050', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2190, 'Mymensingh', 'Mymensingh', 'Bhaluka', 'Bhaluka', '2240', 'ময়মনসিংহ', 'ময়মনসিংহ', 'ভালুকা', 'ভালুকা', '2240', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2191, 'Mymensingh', 'Mymensingh', 'Fulbaria', 'Fulbaria', '2216', 'ময়মনসিংহ', 'ময়মনসিংহ', 'ফুলবাড়িয়া', 'ফুলবাড়িয়া', '2216', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2192, 'Mymensingh', 'Mymensingh', 'Gaforgaon', 'Dobasia', '2234', 'ময়মনসিংহ', 'ময়মনসিংহ', 'গফরগাঁও', 'দুট্টারবাজার', '2234', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2193, 'Mymensingh', 'Mymensingh', 'Gaforgaon', 'Gaforgaon', '2230', 'ময়মনসিংহ', 'ময়মনসিংহ', 'গফরগাঁও', 'গফরগাঁও', '2230', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2194, 'Mymensingh', 'Mymensingh', 'Gaforgaon', 'Kandipara', '2233', 'ময়মনসিংহ', 'ময়মনসিংহ', 'গফরগাঁও', 'কান্দিপাড়া', '2233', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2195, 'Mymensingh', 'Mymensingh', 'Gaforgaon', 'Shibganj', '2231', 'ময়মনসিংহ', 'ময়মনসিংহ', 'গফরগাঁও', 'শিবগঞ্জ', '2231', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2196, 'Mymensingh', 'Mymensingh', 'Gaforgaon', 'Usti', '2232', 'ময়মনসিংহ', 'ময়মনসিংহ', 'গফরগাঁও', 'উস্তি', '2232', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2197, 'Mymensingh', 'Mymensingh', 'Gouripur', 'Gouripur', '2270', 'ময়মনসিংহ', 'ময়মনসিংহ', 'গৌরীপুর', 'গৌরীপুর', '2270', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2198, 'Mymensingh', 'Mymensingh', 'Gouripur', 'Ramgopalpur', '2271', 'ময়মনসিংহ', 'ময়মনসিংহ', 'গৌরীপুর', 'রামগোপালপুর', '2271', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2199, 'Mymensingh', 'Mymensingh', 'Haluaghat', 'Dhara', '2261', 'ময়মনসিংহ', 'ময়মনসিংহ', 'হালুয়াঘাট', 'ধারা', '2261', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2200, 'Mymensingh', 'Mymensingh', 'Haluaghat', 'Haluaghat', '2260', 'ময়মনসিংহ', 'ময়মনসিংহ', 'হালুয়াঘাট', 'হালুয়াঘাট', '2260', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2201, 'Mymensingh', 'Mymensingh', 'Haluaghat', 'Munshirhat', '2262', 'ময়মনসিংহ', 'ময়মনসিংহ', 'হালুয়াঘাট', 'মুনশিরহাট', '2262', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2202, 'Mymensingh', 'Mymensingh', 'Isshwargonj', 'Atharabari', '2282', 'ময়মনসিংহ', 'ময়মনসিংহ', 'ঈশ্বরগঞ্জ', 'আঠারবাড়ি ', '2282', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2203, 'Mymensingh', 'Mymensingh', 'Isshwargonj', 'Isshwargonj', '2280', 'ময়মনসিংহ', 'ময়মনসিংহ', 'ঈশ্বরগঞ্জ', 'ঈশ্বরগঞ্জ', '2280', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2204, 'Mymensingh', 'Mymensingh', 'Isshwargonj', 'Sohagi', '2281', 'ময়মনসিংহ', 'ময়মনসিংহ', 'ঈশ্বরগঞ্জ', 'সোহাগি', '2281', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2205, 'Mymensingh', 'Mymensingh', 'Muktagachha', 'Muktagachha', '2210', 'ময়মনসিংহ', 'ময়মনসিংহ', 'মুক্তাগাছা', 'মুক্তাগাছা', '2210', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2206, 'Mymensingh', 'Mymensingh', 'Mymensingh Sadar', 'Agriculture Universi', '2202', 'ময়মনসিংহ', 'ময়মনসিংহ', 'ময়মনসিংহ সদর', 'কৃষি বিশ্ববিদ্যালয়', '2202', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2207, 'Mymensingh', 'Mymensingh', 'Mymensingh Sadar', 'Biddyaganj', '2204', 'ময়মনসিংহ', 'ময়মনসিংহ', 'ময়মনসিংহ সদর', 'বিদ্যাগঞ্জ', '2204', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2208, 'Mymensingh', 'Mymensingh', 'Mymensingh Sadar', 'Kawatkhali', '2201', 'ময়মনসিংহ', 'ময়মনসিংহ', 'ময়মনসিংহ সদর', 'কেওয়াটখালি', '2201', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2209, 'Mymensingh', 'Mymensingh', 'Mymensingh Sadar', 'Mymensingh Sadar', '2200', 'ময়মনসিংহ', 'ময়মনসিংহ', 'ময়মনসিংহ সদর', 'ময়মনসিংহ সদর', '2200', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2210, 'Mymensingh', 'Mymensingh', 'Mymensingh Sadar', 'Pearpur', '2205', 'ময়মনসিংহ', 'ময়মনসিংহ', 'ময়মনসিংহ সদর', 'পিয়ারপুর', '2205', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2211, 'Mymensingh', 'Mymensingh', 'Mymensingh Sadar', 'Shombhuganj', '2203', 'ময়মনসিংহ', 'ময়মনসিংহ', 'ময়মনসিংহ সদর', 'শম্ভুগঞ্জ', '2203', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2212, 'Mymensingh', 'Mymensingh', 'Nandail', 'Gangail', '2291', 'ময়মনসিংহ', 'ময়মনসিংহ', 'নান্দাইল', 'গাঙ্গাইল', '2291', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2213, 'Mymensingh', 'Mymensingh', 'Nandail', 'Nandail', '2290', 'ময়মনসিংহ', 'ময়মনসিংহ', 'নান্দাইল', 'নান্দাইল', '2290', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2214, 'Mymensingh', 'Mymensingh', 'Phulpur', 'Beltia', '2251', 'ময়মনসিংহ', 'ময়মনসিংহ', 'ফুলপুর', 'বেলতিয়া', '2251', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2215, 'Mymensingh', 'Mymensingh', 'Phulpur', 'Phulpur', '2250', 'ময়মনসিংহ', 'ময়মনসিংহ', 'ফুলপুর', 'ফুলপুর', '2250', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2216, 'Mymensingh', 'Mymensingh', 'Phulpur', 'Tarakanda', '2252', 'ময়মনসিংহ', 'ময়মনসিংহ', 'ফুলপুর', 'তারাকান্দা', '2252', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2217, 'Mymensingh', 'Mymensingh', 'Trishal', 'Ahmadbad', '2221', 'ময়মনসিংহ', 'ময়মনসিংহ', 'ত্রিশাল', 'আহমাদবাদ', '2221', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2218, 'Mymensingh', 'Mymensingh', 'Trishal', 'Dhala', '2223', 'ময়মনসিংহ', 'ময়মনসিংহ', 'ত্রিশাল', 'ধলা', '2223', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2219, 'Mymensingh', 'Mymensingh', 'Trishal', 'Ram Amritaganj', '2222', 'ময়মনসিংহ', 'ময়মনসিংহ', 'ত্রিশাল', 'রাম অমৃতগঞ্জ', '2222', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2220, 'Mymensingh', 'Mymensingh', 'Trishal', 'Trishal', '2220', 'ময়মনসিংহ', 'ময়মনসিংহ', 'ত্রিশাল', 'ত্রিশাল', '2220', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2221, 'Mymensingh', 'Netrakona', 'Susung Durgapur', 'Susnng Durgapur', '2420', 'ময়মনসিংহ', 'নেত্রকোণা', 'সুসনঞ্জ দুর্গাপুর', 'সুসনঞ্জ দুর্গাপুর', '2420', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2222, 'Mymensingh', 'Netrakona', 'Atpara', 'Atpara', '2470', 'ময়মনসিংহ', 'নেত্রকোণা', 'আটপাড়া', 'আটপাড়া', '2470', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2223, 'Mymensingh', 'Netrakona', 'Barhatta', 'Barhatta', '2440', 'ময়মনসিংহ', 'নেত্রকোণা', 'বারহাট্টা', 'বারহাট্টা', '2440', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2224, 'Mymensingh', 'Netrakona', 'Dharmapasha', 'Dharampasha', '2450', 'ময়মনসিংহ', 'নেত্রকোণা', 'ধর্মপাশা', 'ধর্মপাশা', '2450', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2225, 'Mymensingh', 'Netrakona', 'Dhobaura', 'Dhobaura', '2416', 'ময়মনসিংহ', 'নেত্রকোণা', 'ধবাউরা', 'ধবাউরা', '2416', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2226, 'Mymensingh', 'Netrakona', 'Dhobaura', 'Sakoai', '2417', 'ময়মনসিংহ', 'নেত্রকোণা', 'ধবাউরা', 'সাকয়াই', '2417', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2227, 'Mymensingh', 'Netrakona', 'Kalmakanda', 'Kalmakanda', '2430', 'ময়মনসিংহ', 'নেত্রকোণা', 'কলমাকান্দা', 'কলমাকান্দা', '2430', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2228, 'Mymensingh', 'Netrakona', 'Kendua', 'Kendua', '2480', 'ময়মনসিংহ', 'নেত্রকোণা', 'কেন্দুয়া', 'কেন্দুয়া', '2480', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2229, 'Mymensingh', 'Netrakona', 'Khaliajuri', 'Khaliajhri', '2460', 'ময়মনসিংহ', 'নেত্রকোণা', 'খালিয়াজুরী', 'খালিয়াজুরী', '2460', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2230, 'Mymensingh', 'Netrakona', 'Khaliajuri', 'Shaldigha', '2462', 'ময়মনসিংহ', 'নেত্রকোণা', 'খালিয়াজুরী', 'শালদিঘা', '2462', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2231, 'Mymensingh', 'Netrakona', 'Madan', 'Madan', '2490', 'ময়মনসিংহ', 'নেত্রকোণা', 'মদন', 'মদন', '2490', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2232, 'Mymensingh', 'Netrakona', 'Moddhynagar', 'Moddoynagar', '2456', 'ময়মনসিংহ', 'নেত্রকোণা', 'মধ্যনগর', 'মধ্যনগর', '2456', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2233, 'Mymensingh', 'Netrakona', 'Mohanganj', 'Mohanganj', '2446', 'ময়মনসিংহ', 'নেত্রকোণা', 'মোহনগঞ্জ', 'মোহনগঞ্জ', '2446', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2234, 'Mymensingh', 'Netrakona', 'Netrakona Sadar', 'Baikherhati', '2401', 'ময়মনসিংহ', 'নেত্রকোণা', 'নেত্রকোণা সদর', 'বাইখেরহাটি', '2401', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2235, 'Mymensingh', 'Netrakona', 'Netrakona Sadar', 'Netrakona Sadar', '2400', 'ময়মনসিংহ', 'নেত্রকোণা', 'নেত্রকোণা সদর', 'নেত্রকোণা সদর', '2400', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2236, 'Mymensingh', 'Netrakona', 'Purbadhola', 'Jaria Jhanjhail', '2412', 'ময়মনসিংহ', 'নেত্রকোণা', 'পুর্বধোলা', 'জারিয়া ঝানঝাইল', '2412', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2237, 'Mymensingh', 'Netrakona', 'Purbadhola', 'Purbadhola', '2410', 'ময়মনসিংহ', 'নেত্রকোণা', 'পুর্বধোলা', 'পুর্বধোলা', '2410', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2238, 'Mymensingh', 'Netrakona', 'Purbadhola', 'Shamgonj', '2411', 'ময়মনসিংহ', 'নেত্রকোণা', 'পুর্বধোলা', 'শামগঞ্জ', '2411', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2239, 'Mymensingh', 'Sherpur', 'Bakshigonj', 'Bakshigonj', '2140', 'ময়মনসিংহ', 'শেরপুর', 'বকশীগঞ্জ', 'বকশীগঞ্জ', '2140', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2240, 'Mymensingh', 'Sherpur', 'Jhinaigati', 'Jhinaigati', '2120', 'ময়মনসিংহ', 'শেরপুর', 'ঝিনাইগাতী', 'ঝিনাইগাতী', '2120', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2241, 'Mymensingh', 'Sherpur', 'Nakla', 'Gonopaddi', '2151', 'ময়মনসিংহ', 'শেরপুর', 'নকলা', 'গণপাদ্দি', '2151', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2242, 'Mymensingh', 'Sherpur', 'Nakla', 'Nakla', '2150', 'ময়মনসিংহ', 'শেরপুর', 'নকলা', 'নকলা', '2150', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2243, 'Mymensingh', 'Sherpur', 'Nalitabari', 'Hatibandha', '2111', 'ময়মনসিংহ', 'শেরপুর', 'নালিতাবাড়ী', 'হাতীবান্ধা', '2111', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2244, 'Mymensingh', 'Sherpur', 'Nalitabari', 'Nalitabari', '2110', 'ময়মনসিংহ', 'শেরপুর', 'নালিতাবাড়ী', 'নালিতাবাড়ী', '2110', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2245, 'Mymensingh', 'Sherpur', 'Sherpur Shadar', 'Sherpur Shadar', '2100', 'ময়মনসিংহ', 'শেরপুর', 'শেরপুর সদর', 'শেরপুর সদর', '2100', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2246, 'Mymensingh', 'Sherpur', 'Shribardi', 'Shribardi', '2130', 'ময়মনসিংহ', 'শেরপুর', 'শ্রীবরদী', 'শ্রীবরদী', '2130', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2247, 'Sylhet', 'Habiganj', 'Azmireeganj', 'Azmireeganj', '3360', 'সিলেট', 'হবিগঞ্জ', 'আজমিরীগঞ্জ', 'আজমিরীগঞ্জ', '3360', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2248, 'Sylhet', 'Habiganj', 'Bahubal', 'Bahubal', '3310', 'সিলেট', 'হবিগঞ্জ', 'বাহুবল', 'বাহুবল সদর', '3310', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2249, 'Sylhet', 'Habiganj', 'Bahubal', 'Manika Bazar', '3310', 'সিলেট', 'হবিগঞ্জ', 'বাহুবল', 'মানিকা বাজার', '3310', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2250, 'Sylhet', 'Habiganj', 'Baniachang', 'Baniachang', '3350', 'সিলেট', 'হবিগঞ্জ', 'বানিয়াচং', 'বানিয়াচং', '3350', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2251, 'Sylhet', 'Habiganj', 'Baniachang', 'Jatrapasha', '3351', 'সিলেট', 'হবিগঞ্জ', 'বানিয়াচং', 'যাত্রাপাশা', '3351', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2252, 'Sylhet', 'Habiganj', 'Baniachang', 'Kadirganj', '3352', 'সিলেট', 'হবিগঞ্জ', 'বানিয়াচং', 'কাদিরগঞ্জ', '3352', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2253, 'Sylhet', 'Habiganj', 'Chunarughat', 'Chandpurbagan', '3321', 'সিলেট', 'হবিগঞ্জ', 'চুনারুঘাট', 'চাঁদপুরবাগান', '3321', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2254, 'Sylhet', 'Habiganj', 'Chunarughat', 'Chunarughat', '3320', 'সিলেট', 'হবিগঞ্জ', 'চুনারুঘাট', 'চুনারুঘাট', '3320', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2255, 'Sylhet', 'Habiganj', 'Chunarughat', 'Narapati', '3322', 'সিলেট', 'হবিগঞ্জ', 'চুনারুঘাট', 'নরপাটি', '3322', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2256, 'Sylhet', 'Habiganj', 'Habiganj Sadar', 'Gopaya', '3302', 'সিলেট', 'হবিগঞ্জ', 'হবিগঞ্জ সদর', 'গোপায়া', '3302', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2257, 'Sylhet', 'Habiganj', 'Habiganj Sadar', 'Habiganj Sadar', '3300', 'সিলেট', 'হবিগঞ্জ', 'হবিগঞ্জ সদর', 'হবিগঞ্জ সদর', '3300', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2258, 'Sylhet', 'Habiganj', 'Habiganj Sadar', 'Shaestaganj', '3301', 'সিলেট', 'হবিগঞ্জ', 'হবিগঞ্জ সদর', 'শায়েস্তাগঞ্জ', '3301', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2259, 'Sylhet', 'Habiganj', 'Kalauk', 'Kalauk', '3340', 'সিলেট', 'হবিগঞ্জ', 'কালাউক', 'কালাউক', '3340', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2260, 'Sylhet', 'Habiganj', 'Kalauk', 'Lakhai', '3341', 'সিলেট', 'হবিগঞ্জ', 'কালাউক', 'লাখাই', '3341', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2261, 'Sylhet', 'Habiganj', 'Madhabpur', 'Itakhola', '3331', 'সিলেট', 'হবিগঞ্জ', 'মাধবপুর', 'ইটাখোলা', '3331', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2262, 'Sylhet', 'Habiganj', 'Madhabpur', 'Madhabpur', '3330', 'সিলেট', 'হবিগঞ্জ', 'মাধবপুর', 'মাধবপুর', '3330', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2263, 'Sylhet', 'Habiganj', 'Madhabpur', 'Saihamnagar', '3333', 'সিলেট', 'হবিগঞ্জ', 'মাধবপুর', 'সাইহাম নগর', '3333', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2264, 'Sylhet', 'Habiganj', 'Madhabpur', 'Shahajibazar', '3332', 'সিলেট', 'হবিগঞ্জ', 'মাধবপুর', 'শাহজিবাজার', '3332', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2265, 'Sylhet', 'Habiganj', 'Nabiganj', 'Digalbak', '3373', 'সিলেট', 'হবিগঞ্জ', 'নবীগঞ্জ', 'দিগলবাক', '3373', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2266, 'Sylhet', 'Habiganj', 'Nabiganj', 'Golduba', '3372', 'সিলেট', 'হবিগঞ্জ', 'নবীগঞ্জ', 'গোলডুবা', '3372', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2267, 'Sylhet', 'Habiganj', 'Nabiganj', 'Goplarbazar', '3371', 'সিলেট', 'হবিগঞ্জ', 'নবীগঞ্জ', 'গোপলারবাজার', '3371', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2268, 'Sylhet', 'Habiganj', 'Nabiganj', 'Inathganj', '3374', 'সিলেট', 'হবিগঞ্জ', 'নবীগঞ্জ', 'ইনাতগঞ্জ', '3374', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2269, 'Sylhet', 'Habiganj', 'Nabiganj', 'Nabiganj', '3370', 'সিলেট', 'হবিগঞ্জ', 'নবীগঞ্জ', 'নবীগঞ্জ', '3370', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2270, 'Sylhet', 'Moulvibazar', 'Baralekha', 'Baralekha', '3250', 'সিলেট', 'মৌলভীবাজার', 'বড়লেখা', 'বড়লেখা', '3250', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2271, 'Sylhet', 'Moulvibazar', 'Baralekha', 'Dhakkhinbag', '3252', 'সিলেট', 'মৌলভীবাজার', 'বড়লেখা', 'দক্ষিণবাগ', '3252', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2272, 'Sylhet', 'Moulvibazar', 'Baralekha', 'Juri', '3251', 'সিলেট', 'মৌলভীবাজার', 'বড়লেখা', 'জুড়ী', '3251', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2273, 'Sylhet', 'Moulvibazar', 'Baralekha', 'Purbashahabajpur', '3253', 'সিলেট', 'মৌলভীবাজার', 'বড়লেখা', 'পূর্বাশাহাবাজপুর', '3253', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2274, 'Sylhet', 'Moulvibazar', 'Kamalganj', 'Kamalganj', '3220', 'সিলেট', 'মৌলভীবাজার', 'কমলগঞ্জ', 'কমলগঞ্জ', '3220', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2275, 'Sylhet', 'Moulvibazar', 'Kamalganj', 'Keramatnaga', '3221', 'সিলেট', 'মৌলভীবাজার', 'কমলগঞ্জ', 'কেরামত নগর', '3221', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2276, 'Sylhet', 'Moulvibazar', 'Kamalganj', 'Munshibazar', '3224', 'সিলেট', 'মৌলভীবাজার', 'কমলগঞ্জ', 'মুন্সীবাজার', '3224', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2277, 'Sylhet', 'Moulvibazar', 'Kamalganj', 'Patrakhola', '3222', 'সিলেট', 'মৌলভীবাজার', 'কমলগঞ্জ', 'পাত্রখোলা', '3222', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2278, 'Sylhet', 'Moulvibazar', 'Kamalganj', 'Shamsher Nagar', '3223', 'সিলেট', 'মৌলভীবাজার', 'কমলগঞ্জ', 'শমসের নগর', '3223', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2279, 'Sylhet', 'Moulvibazar', 'Kulaura', 'Baramchal', '3237', 'সিলেট', 'মৌলভীবাজার', 'কুলাউড়া', 'বরমচাল', '3237', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2280, 'Sylhet', 'Moulvibazar', 'Kulaura', 'Kajaldhara', '3234', 'সিলেট', 'মৌলভীবাজার', 'কুলাউড়া', 'কাজলধারা', '3234', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2281, 'Sylhet', 'Moulvibazar', 'Kulaura', 'Karimpur', '3235', 'সিলেট', 'মৌলভীবাজার', 'কুলাউড়া', 'করিমপুর', '3235', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2282, 'Sylhet', 'Moulvibazar', 'Kulaura', 'Kulaura', '3230', 'সিলেট', 'মৌলভীবাজার', 'কুলাউড়া', 'কুলাউড়া', '3230', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2283, 'Sylhet', 'Moulvibazar', 'Kulaura', 'Langla', '3232', 'সিলেট', 'মৌলভীবাজার', 'কুলাউড়া', 'লংলা', '3232', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2284, 'Sylhet', 'Moulvibazar', 'Kulaura', 'Prithimpasha', '3233', 'সিলেট', 'মৌলভীবাজার', 'কুলাউড়া', 'পৃথিমপাশা', '3233', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2285, 'Sylhet', 'Moulvibazar', 'Kulaura', 'Tillagaon', '3231', 'সিলেট', 'মৌলভীবাজার', 'কুলাউড়া', 'টিলাগাও', '3231', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2286, 'Sylhet', 'Moulvibazar', 'Moulvibazar Sadar', 'Afrozganj', '3203', 'সিলেট', 'মৌলভীবাজার', 'মৌলভীবাজার সদর', 'আফরোজগঞ্জ', '3203', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2287, 'Sylhet', 'Moulvibazar', 'Moulvibazar Sadar', 'Barakapan', '3201', 'সিলেট', 'মৌলভীবাজার', 'মৌলভীবাজার সদর', 'বারাকাপান', '3201', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2288, 'Sylhet', 'Moulvibazar', 'Moulvibazar Sadar', 'Monumukh', '3202', 'সিলেট', 'মৌলভীবাজার', 'মৌলভীবাজার সদর', 'মনুমুখ', '3202', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2289, 'Sylhet', 'Moulvibazar', 'Moulvibazar Sadar', 'Moulvibazar Sadar', '3200', 'সিলেট', 'মৌলভীবাজার', 'মৌলভীবাজার সদর', 'মৌলভীবাজার সদর', '3200', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2290, 'Sylhet', 'Moulvibazar', 'Rajnagar', 'Rajnagar', '3240', 'সিলেট', 'মৌলভীবাজার', 'রাজনগর', 'রাজনগর', '3240', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2291, 'Sylhet', 'Moulvibazar', 'Srimangal', 'Kalighat', '3212', 'সিলেট', 'মৌলভীবাজার', 'শ্রীমঙ্গল', 'কালীঘাট', '3212', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2292, 'Sylhet', 'Moulvibazar', 'Srimangal', 'Khejurichhara', '3213', 'সিলেট', 'মৌলভীবাজার', 'শ্রীমঙ্গল', 'খেজুরীছড়া', '3213', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2293, 'Sylhet', 'Moulvibazar', 'Srimangal', 'Narain Chora', '3211', 'সিলেট', 'মৌলভীবাজার', 'শ্রীমঙ্গল', 'নারায়ন ছড়া', '3211', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2294, 'Sylhet', 'Moulvibazar', 'Srimangal', 'Satgaon', '3214', 'সিলেট', 'মৌলভীবাজার', 'শ্রীমঙ্গল', 'সাতগাঁও', '3214', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2295, 'Sylhet', 'Moulvibazar', 'Srimangal', 'Srimangal', '3210', 'সিলেট', 'মৌলভীবাজার', 'শ্রীমঙ্গল', 'শ্রীমঙ্গল', '3210', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2296, 'Sylhet', 'Sunamganj', 'Bishamsarpur', 'Bishamsapur', '3010', 'সিলেট', 'সুনামগঞ্জ', 'বিশম্ভরপুর', 'বিশম্ভরপুর', '3010', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2297, 'Sylhet', 'Sunamganj', 'Chhatak', 'Chhatak', '3080', 'সিলেট', 'সুনামগঞ্জ', 'ছাতক', 'ছাতক', '3080', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2298, 'Sylhet', 'Sunamganj', 'Chhatak', 'Chhatak Cement Facto', '3081', 'সিলেট', 'সুনামগঞ্জ', 'ছাতক', 'ছাতক সিমেন্ট ফ্যাক্টরি', '3081', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2299, 'Sylhet', 'Sunamganj', 'Chhatak', 'Chhatak Paper Mills', '3082', 'সিলেট', 'সুনামগঞ্জ', 'ছাতক', 'ছাতক পেপার মিলস', '3082', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2300, 'Sylhet', 'Sunamganj', 'Chhatak', 'Chourangi Bazar', '3893', 'সিলেট', 'সুনামগঞ্জ', 'ছাতক', 'চৌরঙ্গী বাজার', '3893', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2301, 'Sylhet', 'Sunamganj', 'Chhatak', 'Gabindaganj', '3083', 'সিলেট', 'সুনামগঞ্জ', 'ছাতক', 'গোবিন্দগঞ্জ', '3083', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2302, 'Sylhet', 'Sunamganj', 'Chhatak', 'Gabindaganj Natun Ba', '3084', 'সিলেট', 'সুনামগঞ্জ', 'ছাতক', 'গোবিন্দগঞ্জ নতুন বাজার', '3084', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2303, 'Sylhet', 'Sunamganj', 'Chhatak', 'Islamabad', '3088', 'সিলেট', 'সুনামগঞ্জ', 'ছাতক', 'ইসলামাবাদ', '3088', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2304, 'Sylhet', 'Sunamganj', 'Chhatak', 'jahidpur', '3087', 'সিলেট', 'সুনামগঞ্জ', 'ছাতক', 'জাহিদপুর', '3087', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2305, 'Sylhet', 'Sunamganj', 'Chhatak', 'Khurma', '3085', 'সিলেট', 'সুনামগঞ্জ', 'ছাতক', 'খুরমা', '3085', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2306, 'Sylhet', 'Sunamganj', 'Chhatak', 'Moinpur', '3086', 'সিলেট', 'সুনামগঞ্জ', 'ছাতক', 'মৈনপুর', '3086', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2307, 'Sylhet', 'Sunamganj', 'Dhirai Chandpur', 'Dhirai Chandpur', '3040', 'সিলেট', 'সুনামগঞ্জ', 'দিরাই চাঁদপুর', 'দিরাই চাঁদপুর', '3040', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2308, 'Sylhet', 'Sunamganj', 'Dhirai Chandpur', 'Jagdal', '3041', 'সিলেট', 'সুনামগঞ্জ', 'দিরাই চাঁদপুর', 'জগদল', '3041', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2309, 'Sylhet', 'Sunamganj', 'Duara bazar', 'Duara bazar', '3070', 'সিলেট', 'সুনামগঞ্জ', 'দুয়ারা বাজার', 'দুয়ারা বাজার', '3070', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2310, 'Sylhet', 'Sunamganj', 'Ghungiar', 'Ghungiar', '3050', 'সিলেট', 'সুনামগঞ্জ', 'ঘুঙ্গিয়ার', 'ঘুঙ্গিয়ার', '3050', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2311, 'Sylhet', 'Sunamganj', 'Jagnnathpur', 'Atuajan', '3062', 'সিলেট', 'সুনামগঞ্জ', 'জগন্নাথপুর', 'আতুয়াজান', '3062', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2312, 'Sylhet', 'Sunamganj', 'Jagnnathpur', 'Hasan Fatemapur', '3063', 'সিলেট', 'সুনামগঞ্জ', 'জগন্নাথপুর', 'হাসান ফাতেমাপুর', '3063', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2313, 'Sylhet', 'Sunamganj', 'Jagnnathpur', 'Jagnnathpur', '3060', 'সিলেট', 'সুনামগঞ্জ', 'জগন্নাথপুর', 'জগন্নাথপুর', '3060', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2314, 'Sylhet', 'Sunamganj', 'Jagnnathpur', 'Rasulganj', '3064', 'সিলেট', 'সুনামগঞ্জ', 'জগন্নাথপুর', 'রাসূলগঞ্জ', '3064', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2315, 'Sylhet', 'Sunamganj', 'Jagnnathpur', 'Shiramsi', '3065', 'সিলেট', 'সুনামগঞ্জ', 'জগন্নাথপুর', 'শিরামসি', '3065', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2316, 'Sylhet', 'Sunamganj', 'Jagnnathpur', 'Syedpur', '3061', 'সিলেট', 'সুনামগঞ্জ', 'জগন্নাথপুর', 'সৈয়দপুর', '3061', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2317, 'Sylhet', 'Sunamganj', 'Jagnnathpur', 'Dawrai Bazar', '3127', 'সিলেট', 'সুনামগঞ্জ', 'জগন্নাথপুর', 'দাওরাই বাজার', '3127', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2318, 'Sylhet', 'Sunamganj', 'Sachna', 'Sachna', '3020', 'সিলেট', 'সুনামগঞ্জ', 'সাচনা', 'সাচনা', '3020', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2319, 'Sylhet', 'Sunamganj', 'Sunamganj Sadar', 'Pagla', '3001', 'সিলেট', 'সুনামগঞ্জ', 'সুনামগঞ্জ সদর', 'পাগলা', '3001', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2320, 'Sylhet', 'Sunamganj', 'Sunamganj Sadar', 'Patharia', '3002', 'সিলেট', 'সুনামগঞ্জ', 'সুনামগঞ্জ সদর', 'পাথারিয়া', '3002', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2321, 'Sylhet', 'Sunamganj', 'Sunamganj Sadar', 'Sunamganj Sadar', '3000', 'সিলেট', 'সুনামগঞ্জ', 'সুনামগঞ্জ সদর', 'সুনামগঞ্জ সদর', '3000', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2322, 'Sylhet', 'Sunamganj', 'Tahirpur', 'Tahirpur', '3030', 'সিলেট', 'সুনামগঞ্জ', 'তাহিরপুর', 'তাহিরপুর', '3030', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2323, 'Sylhet', 'Sylhet', 'Balaganj', 'Balaganj', '3120', 'সিলেট', 'সিলেট', 'বালাগঞ্জ', 'বালাগঞ্জ', '3120', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2324, 'Sylhet', 'Sylhet', 'Balaganj', 'Begumpur', '3125', 'সিলেট', 'সিলেট', 'বালাগঞ্জ', 'বেগমপুর', '3125', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2325, 'Sylhet', 'Sylhet', 'Balaganj', 'Brahman Shashon', '3122', 'সিলেট', 'সিলেট', 'বালাগঞ্জ', 'ব্রহ্ম শাসন', '3122', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2326, 'Sylhet', 'Sylhet', 'Balaganj', 'Gaharpur', '3128', 'সিলেট', 'সিলেট', 'বালাগঞ্জ', 'গহরপুর', '3128', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2327, 'Sylhet', 'Sylhet', 'Balaganj', 'Goala Bazar', '3124', 'সিলেট', 'সিলেট', 'বালাগঞ্জ', 'গোয়ালা বাজার', '3124', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2328, 'Sylhet', 'Sylhet', 'Balaganj', 'Karua', '3121', 'সিলেট', 'সিলেট', 'বালাগঞ্জ', 'করুয়া', '3121', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2329, 'Sylhet', 'Sylhet', 'Balaganj', 'Kathal Khair', '3127', 'সিলেট', 'সিলেট', 'বালাগঞ্জ', 'কাঁঠাল খাইর', '3127', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2330, 'Sylhet', 'Sylhet', 'Balaganj', 'Natun Bazar', '3129', 'সিলেট', 'সিলেট', 'বালাগঞ্জ', 'নতুন বাজার', '3129', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2331, 'Sylhet', 'Sylhet', 'Balaganj', 'Omarpur', '3126', 'সিলেট', 'সিলেট', 'বালাগঞ্জ', 'ওমরপুর', '3126', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2332, 'Sylhet', 'Sylhet', 'Balaganjgfhfghj', 'Tajpur', '3123', 'সিলেট', 'সিলেট', 'বালাগঞ্জ', 'তাজপুর', '3123', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2333, 'Sylhet', 'Sylhet', 'Bianibazar', 'Bianibazar', '3170', 'সিলেট', 'সিলেট', 'বিয়ানীবাজার', 'বিয়ানীবাজার', '3170', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2334, 'Sylhet', 'Sylhet', 'Bianibazar', 'Churkai', '3175', 'সিলেট', 'সিলেট', 'বিয়ানীবাজার', 'চারখাই', '3175', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2335, 'Sylhet', 'Sylhet', 'Bianibazar', 'jaldup', '3171', 'সিলেট', 'সিলেট', 'বিয়ানীবাজার', 'জলঢুপ', '3171', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2336, 'Sylhet', 'Sylhet', 'Bianibazar', 'Kurar bazar', '3173', 'সিলেট', 'সিলেট', 'বিয়ানীবাজার', 'কুড়ার বাজার', '3173', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2337, 'Sylhet', 'Sylhet', 'Bianibazar', 'Mathiura', '3172', 'সিলেট', 'সিলেট', 'বিয়ানীবাজার', 'মাথিউরা', '3172', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2338, 'Sylhet', 'Sylhet', 'Bianibazar', 'Salia bazar', '3174', 'সিলেট', 'সিলেট', 'বিয়ানীবাজার', 'সালিয়া বাজার', '3174', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2339, 'Sylhet', 'Sylhet', 'Bishwanath', 'Bishwanath', '3130', 'সিলেট', 'সিলেট', 'বিশ্বনাথ', 'বিশ্বনাথ', '3130', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2340, 'Sylhet', 'Sylhet', 'Bishwanath', 'Dashghar', '3131', 'সিলেট', 'সিলেট', 'বিশ্বনাথ', 'দশঘর', '3131', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2341, 'Sylhet', 'Sylhet', 'Bishwanath', 'Deokalas', '3133', 'সিলেট', 'সিলেট', 'বিশ্বনাথ', 'দেওকলস', '3133', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2342, 'Sylhet', 'Sylhet', 'Bishwanath', 'Doulathpur', '3132', 'সিলেট', 'সিলেট', 'বিশ্বনাথ', 'দৌলতপুর', '3132', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2343, 'Sylhet', 'Sylhet', 'Bishwanath', 'Singer kanch', '3134', 'সিলেট', 'সিলেট', 'বিশ্বনাথ', 'সিঙ্গার কাঞ্চ', '3134', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2344, 'Sylhet', 'Sylhet', 'Fenchuganj', 'Fenchuganj', '3116', 'সিলেট', 'সিলেট', 'ফেঞ্চুগঞ্জ', 'ফেঞ্চুগঞ্জ', '3116', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2345, 'Sylhet', 'Sylhet', 'Fenchuganj', 'Fenchuganj SareKarkh', '3117', 'সিলেট', 'সিলেট', 'ফেঞ্চুগঞ্জ', 'ফেঞ্চুগঞ্জ সার কারখানা', '3117', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2346, 'Sylhet', 'Sylhet', 'Goainghat', 'Chiknagul', '3152', 'সিলেট', 'সিলেট', 'গোয়াইনহাট', 'চিকনাগুলি', '3152', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2347, 'Sylhet', 'Sylhet', 'Goainghat', 'Goainghat', '3150', 'সিলেট', 'সিলেট', 'গোয়াইনহাট', 'গোয়াইনহাট', '3150', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2348, 'Sylhet', 'Sylhet', 'Goainghat', 'Jaflong', '3151', 'সিলেট', 'সিলেট', 'গোয়াইনহাট', 'জাফলং', '3151', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2349, 'Sylhet', 'Sylhet', 'Golapganj', 'banigram', '3164', 'সিলেট', 'সিলেট', 'গোলাপগঞ্জ', 'বাণীগ্রাম', '3164', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2350, 'Sylhet', 'Sylhet', 'Golapganj', 'Chandanpur', '3165', 'সিলেট', 'সিলেট', 'গোলাপগঞ্জ', 'চন্দনপুর', '3165', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2351, 'Sylhet', 'Sylhet', 'Golapganj', 'Dakkhin Bhadashore', '3162', 'সিলেট', 'সিলেট', 'গোলাপগঞ্জ', 'দক্ষিণ ভাদাশরে', '3162', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2352, 'Sylhet', 'Sylhet', 'Golapganj', 'Dhaka Dakkshin', '3161', 'সিলেট', 'সিলেট', 'গোলাপগঞ্জ', 'ঢাকা দক্ষিণ', '3161', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2353, 'Sylhet', 'Sylhet', 'Golapganj', 'Golapganj', '3160', 'সিলেট', 'সিলেট', 'গোলাপগঞ্জ', 'গোলাপগঞ্জ', '3160', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2354, 'Sylhet', 'Sylhet', 'Golapganj', 'Ranaping', '3163', 'সিলেট', 'সিলেট', 'গোলাপগঞ্জ', 'রানাপিং', '3163', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2355, 'Sylhet', 'Sylhet', 'Jaintapur', 'Jaintapur', '3156', 'সিলেট', 'সিলেট', 'জৈন্তাপুর', 'জৈন্তাপুর', '3156', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2356, 'Sylhet', 'Sylhet', 'Jakiganj', 'Ichhamati', '3191', 'সিলেট', 'সিলেট', 'জকিগঞ্জ', 'ইছামতি', '3191', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2357, 'Sylhet', 'Sylhet', 'Jakiganj', 'Jakiganj', '3190', 'সিলেট', 'সিলেট', 'জকিগঞ্জ', 'জকিগঞ্জ', '3190', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2358, 'Sylhet', 'Sylhet', 'Kanaighat', 'Chatulbazar', '3181', 'সিলেট', 'সিলেট', 'কানাইঘাট', 'চটুলবাজার', '3181', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2359, 'Sylhet', 'Sylhet', 'Kanaighat', 'Gachbari', '3183', 'সিলেট', 'সিলেট', 'কানাইঘাট', 'গাছবাড়ী', '3183', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2360, 'Sylhet', 'Sylhet', 'Kanaighat', 'Kanaighat', '3180', 'সিলেট', 'সিলেট', 'কানাইঘাট', 'কানাইঘাট', '3180', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2361, 'Sylhet', 'Sylhet', 'Kanaighat', 'Manikganj', '3182', 'সিলেট', 'সিলেট', 'কানাইঘাট', 'মানিকগঞ্জ', '3182', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2362, 'Sylhet', 'Sylhet', 'Kompanyganj', 'Kompanyganj', '3140', 'সিলেট', 'সিলেট', 'কোম্পানীগঞ্জ', 'কোম্পানীগঞ্জ', '3140', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2363, 'Sylhet', 'Sylhet', 'Sylhet Sadar', 'Birahimpur', '3106', 'সিলেট', 'সিলেট', 'সিলেট সদর', 'বিরাহিমপুর', '3106', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2364, 'Sylhet', 'Sylhet', 'Sylhet Sadar', 'Jalalabad', '3107', 'সিলেট', 'সিলেট', 'সিলেট সদর', 'জালালাবাদ', '3107', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2365, 'Sylhet', 'Sylhet', 'Shahporan', 'Jalalabad Cantoment', '3104', 'সিলেট', 'সিলেট', 'সিলেট সদর', 'জালালাবাদ সেনানিবাস', '3104', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2366, 'Sylhet', 'Sylhet', 'Sylhet Sadar', 'Kadamtali', '3111', 'সিলেট', 'সিলেট', 'সিলেট সদর', 'কদমতলী', '3111', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2367, 'Sylhet', 'Sylhet', 'Sylhet Sadar', 'Kamalbazer', '3112', 'সিলেট', 'সিলেট', 'সিলেট সদর', 'কামালবাজার', '3112', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2368, 'Sylhet', 'Sylhet', 'Sylhet Sadar', 'Khadimnagar', '3103', 'সিলেট', 'সিলেট', 'সিলেট সদর', 'খাদিমনগর', '3103', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2369, 'Sylhet', 'Sylhet', 'Sylhet Sadar', 'Lalbazar', '3113', 'সিলেট', 'সিলেট', 'সিলেট সদর', 'লালবাজার', '3113', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2370, 'Sylhet', 'Sylhet', 'Sylhet Sadar', 'Mogla', '3108', 'সিলেট', 'সিলেট', 'সিলেট সদর', 'মগ্লা', '3108', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2371, 'Sylhet', 'Sylhet', 'Sylhet Sadar', 'Ranga Hajiganj', '3109', 'সিলেট', 'সিলেট', 'সিলেট সদর', 'রাঙ্গা হাজীগঞ্জ', '3109', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2372, 'Sylhet', 'Sylhet', 'Sylhet Sadar', 'Shahajalal Science &', '3114', 'সিলেট', 'সিলেট', 'সিলেট সদর', 'শাহ্‌জালাল বিজ্ঞান ও প্রযুক্তি', '3114', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2373, 'Sylhet', 'Sylhet', 'Sylhet Sadar', 'Silam', '3105', 'সিলেট', 'সিলেট', 'সিলেট সদর', 'সিলাম', '3105', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2374, 'Sylhet', 'Sylhet', 'Sylhet Sadar', 'Sylhet Sadar', '3100', 'সিলেট', 'সিলেট', 'সিলেট সদর', 'সিলেট সদর', '3100', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2375, 'Sylhet', 'Sylhet', 'Sylhet Sadar', 'Sylhet Biman Bondar', '3102', 'সিলেট', 'সিলেট', 'সিলেট সদর', 'সিলেট বিমান বন্দর', '3102', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2376, 'Sylhet', 'Sylhet', 'Sylhet Sadar', 'Sylhet Cadet Col', '3101', 'সিলেট', 'সিলেট', 'সিলেট সদর', 'সিলেট ক্যাডেট কলেজ', '3101', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2377, 'Chattogram', 'Bandarban', 'Alikadam', 'Alikadam', '4650', 'চট্টগ্রাম', 'বান্দরবান', 'আলিকদম', 'আলিকদম', '4650', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2378, 'Chattogram', 'Bandarban', 'Bandarban Sadar', 'Bandarban Sadar', '4600', 'চট্টগ্রাম', 'বান্দরবান', 'বান্দরবান সদর', 'বান্দরবান সদর', '4600', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2379, 'Chattogram', 'Bandarban', 'Naikhong', 'Naikhong', '4660', 'চট্টগ্রাম', 'বান্দরবান', 'নাইখং', 'নাইখং', '4660', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2380, 'Chattogram', 'Bandarban', 'Roanchhari', 'Roanchhari', '4610', 'চট্টগ্রাম', 'বান্দরবান', 'রংছড়ি', 'রংছড়ি', '4610', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2381, 'Chattogram', 'Bandarban', 'Ruma', 'Ruma', '4620', 'চট্টগ্রাম', 'বান্দরবান', 'রুমা', 'রুমা', '4620', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2382, 'Chattogram', 'Bandarban', 'Thanchi', 'Lama', '4641', 'চট্টগ্রাম', 'বান্দরবান', 'থানচি', 'লামা', '4641', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2383, 'Chattogram', 'Bandarban', 'Thanchi', 'Thanchi', '4630', 'চট্টগ্রাম', 'বান্দরবান', 'থানচি', 'থানচি', '4630', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2384, 'Chattogram', 'Brahmanbaria', 'Akhaura', 'Akhaura', '3450', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'আখাউড়া', 'আখাউড়া', '3450', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2385, 'Chattogram', 'Brahmanbaria', 'Akhaura', 'Azampur', '3451', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'আখাউড়া', 'আজমপুর', '3451', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2386, 'Chattogram', 'Brahmanbaria', 'Akhaura', 'Gangasagar', '3452', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'আখাউড়া', 'গঙ্গাসাগর', '3452', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2387, 'Chattogram', 'Brahmanbaria', 'Banchharampur', 'Banchharampur', '3420', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'বাঞ্ছারামপুর', 'বাঞ্ছারামপুর', '3420', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2388, 'Chattogram', 'Brahmanbaria', 'Brahamanbaria Sadar', 'Ashuganj', '3402', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'ব্রাহ্মণবাড়িয়া সদর', 'আশুগঞ্জ', '3402', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2389, 'Chattogram', 'Brahmanbaria', 'Brahamanbaria Sadar', 'Ashuganj Share', '3403', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'ব্রাহ্মণবাড়িয়া সদর', 'আশুগঞ্জ সেয়ার', '3403', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2390, 'Chattogram', 'Brahmanbaria', 'Brahamanbaria Sadar', 'Brahamanbaria Sadar', '3400', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'ব্রাহ্মণবাড়িয়া সদর', 'ব্রাহ্মণবাড়িয়া সদর', '3400', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2391, 'Chattogram', 'Brahmanbaria', 'Brahamanbaria Sadar', 'Poun', '3404', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'ব্রাহ্মণবাড়িয়া সদর', 'পুনে', '3404', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2392, 'Chattogram', 'Brahmanbaria', 'Brahamanbaria Sadar', 'Talshahar', '3401', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'ব্রাহ্মণবাড়িয়া সদর', 'তালশহর', '3401', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2393, 'Chattogram', 'Brahmanbaria', 'Kasba', 'Chandidar', '3462', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'কসবা', 'চন্ডিদার', '3462', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2394, 'Chattogram', 'Brahmanbaria', 'Kasba', 'Chargachh', '3463', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'কসবা', 'চরগাছ', '3463', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2395, 'Chattogram', 'Brahmanbaria', 'Kasba', 'Gopinathpur', '3464', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'কসবা', 'গোপীনাথপুর', '3464', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2396, 'Chattogram', 'Brahmanbaria', 'Kasba', 'Kasba', '3460', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'কসবা', 'কসবা', '3460', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2397, 'Chattogram', 'Brahmanbaria', 'Kasba', 'Kuti', '3461', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'কসবা', 'কুট্টি', '3461', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2398, 'Chattogram', 'Brahmanbaria', 'Nabinagar', 'Jibanganj', '3419', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'নবীনগর', 'জীবনগঞ্জ', '3419', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2399, 'Chattogram', 'Brahmanbaria', 'Nabinagar', 'Kaitala', '3417', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'নবীনগর', 'কাইতলা', '3417', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2400, 'Chattogram', 'Brahmanbaria', 'Nabinagar', 'Laubfatehpur', '3411', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'নবীনগর', 'লুবফতেহপুর', '3411', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2401, 'Chattogram', 'Brahmanbaria', 'Nabinagar', 'Nabinagar', '3410', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'নবীনগর', 'নবীনগর', '3410', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2402, 'Chattogram', 'Brahmanbaria', 'Nabinagar', 'Rasullabad', '3412', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'নবীনগর', 'রসুল্লাবাদ', '3412', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2403, 'Chattogram', 'Brahmanbaria', 'Nabinagar', 'Ratanpur', '3414', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'নবীনগর', 'রতনপুর', '3414', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2404, 'Chattogram', 'Brahmanbaria', 'Nabinagar', 'Salimganj', '3418', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'নবীনগর', 'ছলিমগঞ্জ', '3418', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2405, 'Chattogram', 'Brahmanbaria', 'Nabinagar', 'Shahapur', '3415', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'নবীনগর', 'শাহপুর', '3415', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2406, 'Chattogram', 'Brahmanbaria', 'Nabinagar', 'Shamgram', '3413', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'নবীনগর', 'শ্যামগ্রাম', '3413', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2407, 'Chattogram', 'Brahmanbaria', 'Nasirnagar', 'Fandauk', '3441', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'নাসিরনগর', 'ফান্দাউক', '3441', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2408, 'Chattogram', 'Brahmanbaria', 'Nasirnagar', 'Nasirnagar', '3443', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'নাসিরনগর', 'নাসিরনগর', '3440', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2409, 'Chattogram', 'Brahmanbaria', 'Sarail', 'Chandura', '3432', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'সরাইল', 'চান্দুরা', '3432', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2410, 'Chattogram', 'Brahmanbaria', 'Sarail', 'Sarial', '3430', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'সরাইল', 'সরাইল', '3430', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2411, 'Chattogram', 'Brahmanbaria', 'Sarail', 'Shahbajpur', '3431', 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'সরাইল', 'শাহবাজপুর', '3431', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2412, 'Chattogram', 'Chandpur', 'Chandpur Sadar', 'Baburhat', '3602', 'চট্টগ্রাম', 'চাঁদপুর', 'চাঁদপুর সদর', 'বাবুরহাট', '3602', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2413, 'Chattogram', 'Chandpur', 'Chandpur Sadar', 'Chandpur Sadar', '3600', 'চট্টগ্রাম', 'চাঁদপুর', 'চাঁদপুর সদর', 'চাঁদপুর সদর', '3600', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2414, 'Chattogram', 'Chandpur', 'Chandpur Sadar', 'Puranbazar', '3601', 'চট্টগ্রাম', 'চাঁদপুর', 'চাঁদপুর সদর', 'পুরানবাজারের', '3601', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2415, 'Chattogram', 'Chandpur', 'Chandpur Sadar', 'Sahatali', '3603', 'চট্টগ্রাম', 'চাঁদপুর', 'চাঁদপুর সদর', 'সাহাতালি', '3603', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2416, 'Chattogram', 'Chandpur', 'Faridganj', 'Chandra', '3651', 'চট্টগ্রাম', 'চাঁদপুর', 'ফরিদগঞ্জ', 'চন্দ্র', '3651', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2417, 'Chattogram', 'Chandpur', 'Faridganj', 'Faridganj', '3650', 'চট্টগ্রাম', 'চাঁদপুর', 'ফরিদগঞ্জ', 'ফরিদগঞ্জ', '3650', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2418, 'Chattogram', 'Chandpur', 'Faridganj', 'Gridkaliandia', '3653', 'চট্টগ্রাম', 'চাঁদপুর', 'ফরিদগঞ্জ', 'গৃদকালিন্দিয়া', '3653', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2419, 'Chattogram', 'Chandpur', 'Faridganj', 'Islampur Shah Isain', '3655', 'চট্টগ্রাম', 'চাঁদপুর', 'ফরিদগঞ্জ', 'ইসলামপুর শাহ ইসাইন', '3655', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2420, 'Chattogram', 'Chandpur', 'Faridganj', 'Rampurbazar', '3654', 'চট্টগ্রাম', 'চাঁদপুর', 'ফরিদগঞ্জ', 'রামপুরবাজার', '3654', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2421, 'Chattogram', 'Chandpur', 'Faridganj', 'Rupsha', '3652', 'চট্টগ্রাম', 'চাঁদপুর', 'ফরিদগঞ্জ', 'রূপসা', '3652', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2422, 'Chattogram', 'Chandpur', 'Hajiganj', 'Bolakhal', '3611', 'চট্টগ্রাম', 'চাঁদপুর', 'হাজীগঞ্জ', 'বলাখাল', '3611', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2423, 'Chattogram', 'Chandpur', 'Hajiganj', 'Hajiganj', '3610', 'চট্টগ্রাম', 'চাঁদপুর', 'হাজীগঞ্জ', 'হাজীগঞ্জ', '3610', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2424, 'Chattogram', 'Chandpur', 'Hayemchar', 'Gandamara', '3661', 'চট্টগ্রাম', 'চাঁদপুর', 'হাইমচর', 'গান্ধামারা', '3661', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2425, 'Chattogram', 'Chandpur', 'Hayemchar', 'Hayemchar', '3660', 'চট্টগ্রাম', 'চাঁদপুর', 'হাইমচর', 'হাইমচর', '3660', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2426, 'Chattogram', 'Chandpur', 'Kachua', 'Kachua', '3630', 'চট্টগ্রাম', 'চাঁদপুর', 'কচুয়া', 'কচুয়া', '3630', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2427, 'Chattogram', 'Chandpur', 'Kachua', 'Pak Shrirampur', '3631', 'চট্টগ্রাম', 'চাঁদপুর', 'কচুয়া', 'পাক শ্রীরামপুর', '3631', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2428, 'Chattogram', 'Chandpur', 'Kachua', 'Rahima Nagar', '3632', 'চট্টগ্রাম', 'চাঁদপুর', 'কচুয়া', 'রহিমা নগর', '3632', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2429, 'Chattogram', 'Chandpur', 'Kachua', 'Shachar', '3633', 'চট্টগ্রাম', 'চাঁদপুর', 'কচুয়া', 'সাচার', '3633', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2430, 'Chattogram', 'Chandpur', 'Matlobganj', 'Kalipur', '3642', 'চট্টগ্রাম', 'চাঁদপুর', 'মতলবগঞ্জ', 'কালিপুর', '3642', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2431, 'Chattogram', 'Chandpur', 'Matlobganj', 'Matlobganj', '3640', 'চট্টগ্রাম', 'চাঁদপুর', 'মতলবগঞ্জ', 'মতলবগঞ্জ', '3640', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2432, 'Chattogram', 'Chandpur', 'Matlobganj', 'Mohanpur', '3641', 'চট্টগ্রাম', 'চাঁদপুর', 'মতলবগঞ্জ', 'মোহনপুর', '3641', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2433, 'Chattogram', 'Chandpur', 'Shahrasti', 'Chotoshi', '3623', 'চট্টগ্রাম', 'চাঁদপুর', 'শাহরাস্তি', 'ছোটোশি', '3623', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2434, 'Chattogram', 'Chandpur', 'Shahrasti', 'Islamia Madrasha', '3624', 'চট্টগ্রাম', 'চাঁদপুর', 'শাহরাস্তি', 'ইসলামিয়া মাদ্রাসা', '3624', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2435, 'Chattogram', 'Chandpur', 'Shahrasti', 'Khilabazar', '3621', 'চট্টগ্রাম', 'চাঁদপুর', 'শাহরাস্তি', 'খিলাবাজার', '3621', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2436, 'Chattogram', 'Chandpur', 'Shahrasti', 'Pashchim Kherihar Al', '3622', 'চট্টগ্রাম', 'চাঁদপুর', 'শাহরাস্তি', 'পশ্চিম খেরিহার', '3622', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2437, 'Chattogram', 'Chandpur', 'Shahrasti', 'UNKILA', '3620', 'চট্টগ্রাম', 'চাঁদপুর', 'শাহরাস্তি', 'শাহরাস্তি', '3620', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2438, 'Chattogram', 'Chattogram', 'Anawara', 'Anowara', '4376', 'চট্টগ্রাম', 'চট্টগ্রাম', 'আনোয়ারা', 'আনোয়ারা', '4376', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2439, 'Chattogram', 'Chattogram', 'Anawara', 'Battali', '4378', 'চট্টগ্রাম', 'চট্টগ্রাম', 'আনোয়ারা', 'বটতলি', '4378', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2440, 'Chattogram', 'Chattogram', 'Anawara', 'Paroikora', '4377', 'চট্টগ্রাম', 'চট্টগ্রাম', 'আনোয়ারা', 'পরৈকোড়া', '4377', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2441, 'Chattogram', 'Chattogram', 'Boalkhali', 'Boalkhali', '4366', 'চট্টগ্রাম', 'চট্টগ্রাম', 'বোয়ালখালী', 'বোয়ালখালী', '4366', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2442, 'Chattogram', 'Chattogram', 'Boalkhali', 'Charandwip', '4369', 'চট্টগ্রাম', 'চট্টগ্রাম', 'বোয়ালখালী', 'চরণদ্বীপ', '4369', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2443, 'Chattogram', 'Chattogram', 'Boalkhali', 'Iqbal Park', '4365', 'চট্টগ্রাম', 'চট্টগ্রাম', 'বোয়ালখালী', 'ইকবাল পার্ক', '4365', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2444, 'Chattogram', 'Chattogram', 'Boalkhali', 'Kadurkhal', '4368', 'চট্টগ্রাম', 'চট্টগ্রাম', 'বোয়ালখালী', 'কদুরখিল', '4368', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2445, 'Chattogram', 'Chattogram', 'Boalkhali', 'Kanungopara', '4363', 'চট্টগ্রাম', 'চট্টগ্রাম', 'বোয়ালখালী', 'কানুনগোপাড়া', '4363', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2446, 'Chattogram', 'Chattogram', 'Boalkhali', 'Sakpura', '4367', 'চট্টগ্রাম', 'চট্টগ্রাম', 'বোয়ালখালী', 'সাকপুরা', '4367', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2447, 'Chattogram', 'Chattogram', 'Boalkhali', 'Saroatoli', '4364', 'চট্টগ্রাম', 'চট্টগ্রাম', 'বোয়ালখালী', 'সারোয়াতলী', '4364', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2448, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Al- Amin Baria Madra', '4221', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'আল আমিন বাড়ীয়া মাদ্রাসা', '4221', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2449, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Amin Jute Mills', '4211', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'আমিন জুট মিলস', '4211', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2450, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Anandabazar', '4215', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'আনন্দবাজার', '4215', '2021-07-21 08:43:22', '2021-07-21 08:43:22'),
(2451, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Bayezid Bostami', '4210', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'বায়েজিদ বোস্তামী', '4210', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2452, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Chandgaon', '4212', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'চাঁদগাও', '4212', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2453, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Chawkbazar', '4203', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'চকবাজার', '4203', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2454, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Chitt. Cantonment', '4220', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'চট্টগ্রাম সেনানিবাস', '4220', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2455, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Chitt. Customs Acca', '4219', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'চট্টগ্রাম কাস্টমস', '4219', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2456, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Chitt. Politechnic In', '4209', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'চট্টগ্রাম পলিটেকনিক', '4209', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2457, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Chitt. Sailers Colon', '4218', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'চট্টগ্রাম সেইলার্স কলোনী', '4218', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2458, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Chattogram Airport', '4205', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'চট্টগ্রাম বিমানবন্দর', '4205', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2459, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Chattogram Bandar', '4100', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'চট্টগ্রাম বন্দর', '4100', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2460, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Chattogram GPO', '4000', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'চট্টগ্রাম জিপিও', '4000', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2461, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Export Processing', '4223', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'রপ্তানি প্রক্রিয়াকরণ', '4223', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2462, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Firozshah', '4207', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'ফিরোজশাহ কলোনী', '4207', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2463, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Halishahar', '4216', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'হালিশহর', '4216', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2464, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Khulshi', '4225', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'খুলশী', '4225', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2465, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Jalalabad', '4214', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'জালালাবাদ', '4214', '2021-07-21 08:43:23', '2021-07-21 08:43:23');
INSERT INTO `civilinfos` (`id`, `division`, `district`, `thana`, `suboffice`, `postcode`, `division_bn`, `district_bn`, `thana_bn`, `suboffice_bn`, `postcode_bn`, `created_at`, `updated_at`) VALUES
(2466, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Jaldia Merine Accade', '4206', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'জলদিয়া মেরিন একাডেমি', '4206', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2467, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Middle Patenga', '4222', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'মধ্য পতেঙ্গা', '4222', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2468, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Mohard', '4208', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'মোহার্ড', '4208', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2469, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'North Halishahar', '4226', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'উত্তর হালিশহর', '4226', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2470, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'North Katuli', '4217', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'উত্তর কাট্টলী', '4217', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2471, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Pahartoli', '4202', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'পাহাড়তলী', '4202', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2472, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Patenga', '4204', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'পতেঙ্গা', '4204', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2473, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Rampur TSO', '4224', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'রামপুরা টিএসও', '4224', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2474, 'Chattogram', 'Chattogram', 'Chattogram Sadar', 'Wazedia', '4213', 'চট্টগ্রাম', 'চট্টগ্রাম', 'চট্টগ্রাম সদর', 'ওয়াজেদিয়া', '4213', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2475, 'Chattogram', 'Chattogram', 'East Joara', 'Barma', '4383', 'চট্টগ্রাম', 'চট্টগ্রাম', 'পূর্ব জোয়ারা', 'বর্মা', '4383', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2476, 'Chattogram', 'Chattogram', 'East Joara', 'Dohazari', '4382', 'চট্টগ্রাম', 'চট্টগ্রাম', 'পূর্ব জোয়ারা', 'দোহাজারী', '4382', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2477, 'Chattogram', 'Chattogram', 'East Joara', 'East Joara', '4380', 'চট্টগ্রাম', 'চট্টগ্রাম', 'পূর্ব জোয়ারা', 'পূর্ব জোয়ারা', '4380', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2478, 'Chattogram', 'Chattogram', 'East Joara', 'Gachbaria', '4381', 'চট্টগ্রাম', 'চট্টগ্রাম', 'পূর্ব জোয়ারা', 'গাছবাড়িয়া', '4381', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2479, 'Chattogram', 'Chattogram', 'Fatikchhari', 'Bhandar Sharif', '4352', 'চট্টগ্রাম', 'চট্টগ্রাম', 'ফটিকছড়ি', 'ভাণ্ডার শরীফ', '4352', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2480, 'Chattogram', 'Chattogram', 'Fatikchhari', 'Fatikchhari', '4350', 'চট্টগ্রাম', 'চট্টগ্রাম', 'ফটিকছড়ি', 'ফটিকছড়ি', '4350', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2481, 'Chattogram', 'Chattogram', 'Fatikchhari', 'Harualchhari', '4354', 'চট্টগ্রাম', 'চট্টগ্রাম', 'ফটিকছড়ি', 'হারুয়ালছড়ি', '4354', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2482, 'Chattogram', 'Chattogram', 'Fatikchhari', 'Najirhat', '4353', 'চট্টগ্রাম', 'চট্টগ্রাম', 'ফটিকছড়ি', 'নাজিরহাট', '4353', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2483, 'Chattogram', 'Chattogram', 'Fatikchhari', 'Nanupur', '4351', 'চট্টগ্রাম', 'চট্টগ্রাম', 'ফটিকছড়ি', 'নানুপুর', '4351', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2484, 'Chattogram', 'Chattogram', 'Fatikchhari', 'Narayanhat', '4355', 'চট্টগ্রাম', 'চট্টগ্রাম', 'ফটিকছড়ি', 'নারায়ণহাট', '4355', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2485, 'Chattogram', 'Chattogram', 'Hathazari', 'chittagong university', '4331', 'চট্টগ্রাম', 'চট্টগ্রাম', 'হাটহাজারী', 'চট্টগ্রাম বিশ্ববিদ্যালয়', '4331', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2486, 'Chattogram', 'Chattogram', 'Hathazari', 'Fatehabad', '4335', 'চট্টগ্রাম', 'চট্টগ্রাম', 'হাটহাজারী', 'ফাতেয়াবাদ', '4335', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2487, 'Chattogram', 'Chattogram', 'Hathazari', 'Gorduara ', '4332', 'চট্টগ্রাম', 'চট্টগ্রাম', 'হাটহাজারী', 'গড়দুয়ারা', '4332', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2488, 'Chattogram', 'Chattogram', 'Hathazari', 'Hathazari', '4330', 'চট্টগ্রাম', 'চট্টগ্রাম', 'হাটহাজারী', 'হাটহাজারী', '4330', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2489, 'Chattogram', 'Chattogram', 'Hathazari', 'Katirhat', '4333', 'চট্টগ্রাম', 'চট্টগ্রাম', 'হাটহাজারী', 'কাটিরহাট', '4333', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2490, 'Chattogram', 'Chattogram', 'Hathazari', 'Madarsha', '4336', 'চট্টগ্রাম', 'চট্টগ্রাম', 'হাটহাজারী', 'মাদ্রাসা', '4339', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2491, 'Chattogram', 'Chattogram', 'Hathazari', 'Mirzapur', '4334', 'চট্টগ্রাম', 'চট্টগ্রাম', 'হাটহাজারী', 'মির্জাপুর', '4334', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2492, 'Chattogram', 'Chattogram', 'Hathazari', 'Nuralibari', '4337', 'চট্টগ্রাম', 'চট্টগ্রাম', 'হাটহাজারী', 'নূরালীবাড়ী', '4337', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2493, 'Chattogram', 'Chattogram', 'Hathazari', 'Yunus Nagar', '4338', 'চট্টগ্রাম', 'চট্টগ্রাম', 'হাটহাজারী', 'ইউনূস নগর', '4338', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2494, 'Chattogram', 'Chattogram', 'Jaldi', 'Banigram', '4393', 'চট্টগ্রাম', 'চট্টগ্রাম', 'জলদি', 'বাণীগ্রাম', '4393', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2495, 'Chattogram', 'Chattogram', 'Jaldi', 'Gunagari', '4392', 'চট্টগ্রাম', 'চট্টগ্রাম', 'জলদি', 'গুনাগরী', '4392', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2496, 'Chattogram', 'Chattogram', 'Jaldi', 'Jaldi', '4390', 'চট্টগ্রাম', 'চট্টগ্রাম', 'জলদি', 'জলদি', '4390', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2497, 'Chattogram', 'Chattogram', 'Jaldi', 'Khan Bahadur', '4391', 'চট্টগ্রাম', 'চট্টগ্রাম', 'জলদি', 'খান বাহাদুর', '4391', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2498, 'Chattogram', 'Chattogram', 'Lohagara', 'Chunti', '4398', 'চট্টগ্রাম', 'চট্টগ্রাম', 'লোহাগাড়া', 'চুনতি', '4398', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2499, 'Chattogram', 'Chattogram', 'Lohagara', 'Lohagara', '4396', 'চট্টগ্রাম', 'চট্টগ্রাম', 'লোহাগাড়া', 'লোহাগাড়া', '4396', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2500, 'Chattogram', 'Chattogram', 'Lohagara', 'Padua', '4397', 'চট্টগ্রাম', 'চট্টগ্রাম', 'লোহাগাড়া', 'পদুয়া', '4397', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2501, 'Chattogram', 'Chattogram', 'Mirsharai', 'Abutorab', '4321', 'চট্টগ্রাম', 'চট্টগ্রাম', 'মীরসরাই', 'আবু তোরাব', '4321', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2502, 'Chattogram', 'Chattogram', 'Mirsharai', 'Azampur', '4325', 'চট্টগ্রাম', 'চট্টগ্রাম', 'মীরসরাই', 'আজমপুর', '4325', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2503, 'Chattogram', 'Chattogram', 'Mirsharai', 'Bharawazhat', '4323', 'চট্টগ্রাম', 'চট্টগ্রাম', 'মীরসরাই', 'বারৈয়ারহাট', '4323', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2504, 'Chattogram', 'Chattogram', 'Mirsharai', 'Darrogahat', '4322', 'চট্টগ্রাম', 'চট্টগ্রাম', 'মীরসরাই', 'দারোগাহাট', '4322', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2505, 'Chattogram', 'Chattogram', 'Mirsharai', 'Joarganj', '4324', 'চট্টগ্রাম', 'চট্টগ্রাম', 'মীরসরাই', 'জোরগঞ্জ', '4324', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2506, 'Chattogram', 'Chattogram', 'Mirsharai', 'Korerhat', '4327', 'চট্টগ্রাম', 'চট্টগ্রাম', 'মীরসরাই', 'করেরহাট', '4327', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2507, 'Chattogram', 'Chattogram', 'Mirsharai', 'Mirsharai', '4320', 'চট্টগ্রাম', 'চট্টগ্রাম', 'মীরসরাই', 'মীরসরাই', '4320', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2508, 'Chattogram', 'Chattogram', 'Mirsharai', 'Mohazanhat', '4328', 'চট্টগ্রাম', 'চট্টগ্রাম', 'মীরসরাই', 'মহাজনহাট', '4328', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2509, 'Chattogram', 'Chattogram', 'Patiya', 'Budhpara', '4371', 'চট্টগ্রাম', 'চট্টগ্রাম', 'পটিয়া', 'বুধপাড়া', '4371', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2510, 'Chattogram', 'Chattogram', 'Patiya', 'Patiya Head Office', '4370', 'চট্টগ্রাম', 'চট্টগ্রাম', 'পটিয়া', 'পটিয়া প্রধান কার্যালয়', '4370', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2511, 'Chattogram', 'Chattogram', 'Rangunia', 'Dhamair', '4361', 'চট্টগ্রাম', 'চট্টগ্রাম', 'রাঙ্গুনিয়া', 'ধামাইর', '4361', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2512, 'Chattogram', 'Chattogram', 'Rangunia', 'Rangunia', '4360', 'চট্টগ্রাম', 'চট্টগ্রাম', 'রাঙ্গুনিয়া', 'রাঙ্গুনিয়া', '4360', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2513, 'Chattogram', 'Chattogram', 'Raozan', 'B.I.T Post Office', '4349', 'চট্টগ্রাম', 'চট্টগ্রাম', 'রাউজান', 'বি.আই.টি পোস্ট অফিস', '4349', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2514, 'Chattogram', 'Chattogram', 'Raozan', 'Beenajuri', '4341', 'চট্টগ্রাম', 'চট্টগ্রাম', 'রাউজান', 'বিনাজুরী', '4341', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2515, 'Chattogram', 'Chattogram', 'Raozan', 'Dewanpur', '4347', 'চট্টগ্রাম', 'চট্টগ্রাম', 'রাউজান', 'দেওয়ানপুর', '4347', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2516, 'Chattogram', 'Chattogram', 'Raozan', 'Fatepur', '4345', 'চট্টগ্রাম', 'চট্টগ্রাম', 'রাউজান', 'ফতেহপুর', '4345', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2517, 'Chattogram', 'Chattogram', 'Raozan', 'Gahira', '4343', 'চট্টগ্রাম', 'চট্টগ্রাম', 'রাউজান', 'গহীরা', '4343', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2518, 'Chattogram', 'Chattogram', 'Rouzan', 'Guzra Noapara', '4346', 'চট্টগ্রাম', 'চট্টগ্রাম', 'রাউজান', 'নোয়াপাড়া', '4346', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2519, 'Chattogram', 'Chattogram', 'Rouzan', 'jagannath Hat', '4344', 'চট্টগ্রাম', 'চট্টগ্রাম', 'রাউজান', 'জগন্নাথ হাট', '4344', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2520, 'Chattogram', 'Chattogram', 'Rouzan', 'Kundeshwari', '4342', 'চট্টগ্রাম', 'চট্টগ্রাম', 'রাউজান', 'কুন্ডেশ্বরী', '4342', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2521, 'Chattogram', 'Chattogram', 'Rouzan', 'Mohamuni', '4348', 'চট্টগ্রাম', 'চট্টগ্রাম', 'রাউজান', 'মোহামনী', '4348', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2522, 'Chattogram', 'Chattogram', 'Rouzan', 'Rouzan', '4340', 'চট্টগ্রাম', 'চট্টগ্রাম', 'রাউজান', 'রাউজান', '4340', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2523, 'Chattogram', 'Chattogram', 'Sandwip', 'Sandwip', '4300', 'চট্টগ্রাম', 'চট্টগ্রাম', 'সন্দ্বীপ', 'সন্দ্বীপ', '4300', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2524, 'Chattogram', 'Chattogram', 'Sandwip', 'Shiberhat', '4301', 'চট্টগ্রাম', 'চট্টগ্রাম', 'সন্দ্বীপ', 'শিবেরহাট', '4301', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2525, 'Chattogram', 'Chattogram', 'Sandwipjzhchj', 'Urirchar', '4302', 'চট্টগ্রাম', 'চট্টগ্রাম', 'সন্দ্বীপ', 'সন্দ্বীপ', '4302', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2526, 'Chattogram', 'Chattogram', 'Satkania', 'Baitul Ijjat', '4387', 'চট্টগ্রাম', 'চট্টগ্রাম', 'সাতকানিয়া', 'বায়তুল ইজ্জত', '4387', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2527, 'Chattogram', 'Chattogram', 'Satkania', 'Bazalia', '4388', 'চট্টগ্রাম', 'চট্টগ্রাম', 'সাতকানিয়া', 'বাজালিয়া', '4388', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2528, 'Chattogram', 'Chattogram', 'Satkania', 'Satkania', '4386', 'চট্টগ্রাম', 'চট্টগ্রাম', 'সাতকানিয়া', 'সাতকানিয়া', '4386', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2529, 'Chattogram', 'Chattogram', 'Sitakunda', 'Barabkunda', '4312', 'চট্টগ্রাম', 'চট্টগ্রাম', 'সীতাকুন্ড', 'বরফকুণ্ড', '4312', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2530, 'Chattogram', 'Chattogram', 'Sitakunda', 'Baroidhala', '4311', 'চট্টগ্রাম', 'চট্টগ্রাম', 'সীতাকুন্ড', 'বারোডহালা', '4311', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2531, 'Chattogram', 'Chattogram', 'Sitakunda', 'Bawashbaria', '4313', 'চট্টগ্রাম', 'চট্টগ্রাম', 'সীতাকুন্ড', 'বাওয়াশবাড়িয়া', '4313', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2532, 'Chattogram', 'Chattogram', 'Sitakunda', 'Bhatiari', '4315', 'চট্টগ্রাম', 'চট্টগ্রাম', 'সীতাকুন্ড', 'ভাটিয়ারী', '4315', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2533, 'Chattogram', 'Chattogram', 'Sitakunda', 'Fouzdarhat', '4316', 'চট্টগ্রাম', 'চট্টগ্রাম', 'সীতাকুন্ড', 'ফৌজদারহাট', '4316', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2534, 'Chattogram', 'Chattogram', 'Sitakunda', 'Jafrabad', '4317', 'চট্টগ্রাম', 'চট্টগ্রাম', 'সীতাকুন্ড', 'জাফরাবাদ', '4317', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2535, 'Chattogram', 'Chattogram', 'Sitakunda', 'Kumira', '4314', 'চট্টগ্রাম', 'চট্টগ্রাম', 'সীতাকুন্ড', 'কুমিরা', '4314', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2536, 'Chattogram', 'Chattogram', 'Sitakunda', 'Sitakunda', '4310', 'চট্টগ্রাম', 'চট্টগ্রাম', 'সীতাকুন্ড', 'সীতাকুন্ড', '4310', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2537, 'Chattogram', 'Chattogram', 'Madarbari', 'Madarbari', '3560', 'চট্টগ্রাম', 'চট্টগ্রাম', 'মাদারবাড়ি', 'মাদারবাড়ি', '3560', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2538, 'Chattogram', 'Cumilla', 'Barura', 'Murdafarganj', '3562', 'চট্টগ্রাম', 'কুমিল্লা', 'বরুড়া', 'বরুড়া', '3560', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2539, 'Chattogram', 'Cumilla', 'Barura', 'Poyalgachha', '3561', 'চট্টগ্রাম', 'কুমিল্লা', 'বরুড়া', 'মুদাফফরগঞ্জ', '3562', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2540, 'Chattogram', 'Cumilla', 'Brahmanpara', 'Brahmanpara', '3526', 'চট্টগ্রাম', 'কুমিল্লা', 'বরুড়া', 'পয়ালগাছা', '3561', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2541, 'Chattogram', 'Cumilla', 'Burichang', 'Burichang', '3520', 'চট্টগ্রাম', 'কুমিল্লা', 'ব্রাহ্মণপাড়া', 'ব্রাহ্মণপাড়া', '3526', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2542, 'Chattogram', 'Cumilla', 'Burichang', 'Maynamoti bazar', '3521', 'চট্টগ্রাম', 'কুমিল্লা', 'বুড়িচং', 'বুড়িচং', '3520', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2543, 'Chattogram', 'Cumilla', 'Chandina', 'Chandia', '3510', 'চট্টগ্রাম', 'কুমিল্লা', 'বুড়িচং', 'ময়নামতি বাজার', '3521', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2544, 'Chattogram', 'Cumilla', 'Chandina', 'Madhaiabazar', '3511', 'চট্টগ্রাম', 'কুমিল্লা', 'চান্দিনা', 'চান্দিয়া', '3510', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2545, 'Chattogram', 'Cumilla', 'Chandina', 'Mohichail', '3510', 'চট্টগ্রাম', 'কুমিল্লা', 'চান্দিনা', 'মাধাইয়া বাজার', '3511', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2546, 'Chattogram', 'Cumilla', 'Chouddagram', 'Batisa', '3551', 'চট্টগ্রাম', 'কুমিল্লা', 'চৌদ্দগ্রাম', 'বাতিসা', '3551', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2547, 'Chattogram', 'Cumilla', 'Chouddagram', 'Chiora', '3552', 'চট্টগ্রাম', 'কুমিল্লা', 'চৌদ্দগ্রাম', 'ছিওরা', '3552', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2548, 'Chattogram', 'Cumilla', 'Chouddagram', 'Chouddagram', '3550', 'চট্টগ্রাম', 'কুমিল্লা', 'চৌদ্দগ্রাম', 'চৌদ্দগ্রাম', '3550', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2549, 'Chattogram', 'Cumilla', 'Comilla Sadar', 'Comilla Contoment', '3501', 'চট্টগ্রাম', 'কুমিল্লা', 'কুমিল্লা সদর', 'কুমিল্লা সেনানিবাস', '3501', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2550, 'Chattogram', 'Cumilla', 'Comilla Sadar', 'Comilla Sadar', '3500', 'চট্টগ্রাম', 'কুমিল্লা', 'কুমিল্লা সদর', 'কুমিল্লা সদর', '3500', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2551, 'Chattogram', 'Cumilla', 'Comilla Sadar', 'Courtbari', '3503', 'চট্টগ্রাম', 'কুমিল্লা', 'কুমিল্লা সদর', 'কোটবাড়ী', '3503', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2552, 'Chattogram', 'Cumilla', 'Comilla Sadar', 'Halimanagar', '3502', 'চট্টগ্রাম', 'কুমিল্লা', 'কুমিল্লা সদর', 'হালিমনগর', '3502', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2553, 'Chattogram', 'Cumilla', 'Comilla Sadar', 'Suaganj', '3504', 'চট্টগ্রাম', 'কুমিল্লা', 'কুমিল্লা সদর', 'সুয়াগঞ্জ', '3504', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2554, 'Chattogram', 'Cumilla', 'Daudkandi', 'Dashpara', '3518', 'চট্টগ্রাম', 'কুমিল্লা', 'দাউদকান্দি', 'দাশপাড়া', '3518', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2555, 'Chattogram', 'Cumilla', 'Daudkandi', 'Daudkandi', '3516', 'চট্টগ্রাম', 'কুমিল্লা', 'দাউদকান্দি', 'দাউদকান্দি', '3516', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2556, 'Chattogram', 'Cumilla', 'Daudkandi', 'Eliotganj', '3519', 'চট্টগ্রাম', 'কুমিল্লা', 'দাউদকান্দি', 'ইলিওটগঞ্জ', '3519', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2557, 'Chattogram', 'Cumilla', 'Daudkandi', 'Gouripur', '3517', 'চট্টগ্রাম', 'কুমিল্লা', 'দাউদকান্দি', 'গৌরীপুর', '3517', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2558, 'Chattogram', 'Cumilla', 'Davidhar', 'Barashalghar', '3532', 'চট্টগ্রাম', 'কুমিল্লা', 'দাবিদার', 'বারাশালাঘর', '3532', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2559, 'Chattogram', 'Cumilla', 'Davidhar', 'Davidhar', '3530', 'চট্টগ্রাম', 'কুমিল্লা', 'দাবিদার', 'দাবিদার', '3530', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2560, 'Chattogram', 'Cumilla', 'Davidhar', 'Dhamtee', '3533', 'চট্টগ্রাম', 'কুমিল্লা', 'দাবিদার', 'ধামতি', '3533', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2561, 'Chattogram', 'Cumilla', 'Davidhar', 'Gangamandal', '3531', 'চট্টগ্রাম', 'কুমিল্লা', 'দাবিদার', 'গংগামান্দাল', '3531', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2562, 'Chattogram', 'Cumilla', 'Homna', 'Homna', '3546', 'চট্টগ্রাম', 'কুমিল্লা', 'হোমনা', 'হোমনা', '3546', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2563, 'Chattogram', 'Cumilla', 'Laksam', 'Bipulasar', '3572', 'চট্টগ্রাম', 'কুমিল্লা', 'লাকসাম', 'বিপুলসার', '3572', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2564, 'Chattogram', 'Cumilla', 'Laksam', 'Laksam', '3570', 'চট্টগ্রাম', 'কুমিল্লা', 'লাকসাম', 'লাকসাম', '3570', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2565, 'Chattogram', 'Cumilla', 'Laksam', 'Lakshamanpur', '3571', 'চট্টগ্রাম', 'কুমিল্লা', 'লাকসাম', 'লাকসামপুর', '3571', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2566, 'Chattogram', 'Cumilla', 'Langalkot', 'Chhariabazar', '3582', 'চট্টগ্রাম', 'কুমিল্লা', 'লাঙ্গলকোট', 'চাড়িয়াবাজার', '3582', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2567, 'Chattogram', 'Cumilla', 'Langalkot', 'Dhalua', '3581', 'চট্টগ্রাম', 'কুমিল্লা', 'লাঙ্গলকোট', 'ঢালুয়া', '3581', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2568, 'Chattogram', 'Cumilla', 'Langalkot', 'Gunabati', '3583', 'চট্টগ্রাম', 'কুমিল্লা', 'লাঙ্গলকোট', 'ঘুনাবাটি', '3583', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2569, 'Chattogram', 'Cumilla', 'Langalkot', 'Langalkot', '3580', 'চট্টগ্রাম', 'কুমিল্লা', 'লাঙ্গলকোট', 'লাঙ্গলকোট', '3580', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2570, 'Chattogram', 'Cumilla', 'Muradnagar', 'Bangra', '3543', 'চট্টগ্রাম', 'কুমিল্লা', 'মুরাদনগর', 'বাংগুরা', '3543', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2571, 'Chattogram', 'Cumilla', 'Muradnagar', 'Companyganj', '3542', 'চট্টগ্রাম', 'কুমিল্লা', 'মুরাদনগর', 'কোম্পানীগঞ্জ', '3542', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2572, 'Chattogram', 'Cumilla', 'Muradnagar', 'Muradnagar', '3540', 'চট্টগ্রাম', 'কুমিল্লা', 'মুরাদনগর', 'মুরাদনগর', '3540', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2573, 'Chattogram', 'Cumilla', 'Muradnagar', 'Pantibazar', '3545', 'চট্টগ্রাম', 'কুমিল্লা', 'মুরাদনগর', 'পান্টিবাজার', '3545', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2574, 'Chattogram', 'Cumilla', 'Muradnagar', 'Ramchandarpur', '3541', 'চট্টগ্রাম', 'কুমিল্লা', 'মুরাদনগর', 'রামচন্দ্রপুর', '3541', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2575, 'Chattogram', 'Cumilla', 'Muradnagar', 'Sonakanda', '3544', 'চট্টগ্রাম', 'কুমিল্লা', 'মুরাদনগর', 'সুনাকান্দা', '3544', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2576, 'Chattogram', 'Cox\'s Bazar', 'Chiringga', 'Badarkali', '4742', 'চট্টগ্রাম', 'কক্সবাজার', 'চিরিঙ্গা', 'বাদাড়কালি ', '4742', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2577, 'Chattogram', 'Cox\'s Bazar', 'Chiringga', 'Chiringga', '4740', 'চট্টগ্রাম', 'কক্সবাজার', 'চিরিঙ্গা', 'চিরিঙ্গা', '4740', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2578, 'Chattogram', 'Cox\'s Bazar', 'Chiringga', 'Chiringga S.O', '4741', 'চট্টগ্রাম', 'কক্সবাজার', 'চিরিঙ্গা', 'চিরিঙ্গা এসও', '4741', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2579, 'Chattogram', 'Cox\'s Bazar', 'Chiringga', 'Malumghat', '4743', 'চট্টগ্রাম', 'কক্সবাজার', 'চিরিঙ্গা', 'মালুমঘাট', '4743', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2580, 'Chattogram', 'Cox\'s Bazar', 'Coxs Bazar Sadar', 'Coxs Bazar Sadar', '4700', 'চট্টগ্রাম', 'কক্সবাজার', 'কক্সবাজার সদর', 'কক্সবাজার সদর', '4700', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2581, 'Chattogram', 'Cox\'s Bazar', 'Coxs Bazar Sadar', 'Eidga', '4702', 'চট্টগ্রাম', 'কক্সবাজার', 'কক্সবাজার সদর', 'ঈদগাহ', '4702', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2582, 'Chattogram', 'Cox\'s Bazar', 'Coxs Bazar Sadar', 'Zhilanja', '4701', 'চট্টগ্রাম', 'কক্সবাজার', 'কক্সবাজার সদর', 'ঝিলংজা', '4701', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2583, 'Chattogram', 'Cox\'s Bazar', 'Gorakghat', 'Gorakghat', '4710', 'চট্টগ্রাম', 'কক্সবাজার', 'ঘোড়াঘাট', 'ঘোড়াঘাট', '4710', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2584, 'Chattogram', 'Cox\'s Bazar', 'Kutubdia', 'Kutubdia', '4720', 'চট্টগ্রাম', 'কক্সবাজার', 'কুতুবদিয়া', 'কুতুবদিয়া', '4720', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2585, 'Chattogram', 'Cox\'s Bazar', 'Ramu', 'Ramu', '4730', 'চট্টগ্রাম', 'কক্সবাজার', 'রামু', 'রামু', '4730', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2586, 'Chattogram', 'Cox\'s Bazar', 'Teknaf', 'Hnila', '4761', 'চট্টগ্রাম', 'কক্সবাজার', 'টেকনাফ', 'হ্নীলা', '4761', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2587, 'Chattogram', 'Cox\'s Bazar', 'Teknaf', 'St.Martin', '4762', 'চট্টগ্রাম', 'কক্সবাজার', 'টেকনাফ', 'সেন্ট মার্টিন ', '4762', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2588, 'Chattogram', 'Cox\'s Bazar', 'Teknaf', 'Teknaf', '4760', 'চট্টগ্রাম', 'কক্সবাজার', 'টেকনাফ', 'টেকনাফ', '4760', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2589, 'Chattogram', 'Cox\'s Bazar', 'Ukhia', 'Ukhia', '4750', 'চট্টগ্রাম', 'কক্সবাজার', 'উখিয়া', 'উখিয়া', '4750', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2590, 'Chattogram', 'Feni', 'Chhagalnaia', 'Chhagalnaia', '3910', 'চট্টগ্রাম', 'ফেনী', 'ছাগলনাইয়া', 'ছাগলনাইয়া', '3910', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2591, 'Chattogram', 'Feni', 'Chhagalnaia', 'Daraga Hat', '3912', 'চট্টগ্রাম', 'ফেনী', 'ছাগলনাইয়া', 'দর্গাহাট ', '3912', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2592, 'Chattogram', 'Feni', 'Chhagalnaia', 'Maharajganj', '3911', 'চট্টগ্রাম', 'ফেনী', 'ছাগলনাইয়া', 'মহারাজগঞ্জ', '3911', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2593, 'Chattogram', 'Feni', 'Chhagalnaia', 'Puabashimulia', '3913', 'চট্টগ্রাম', 'ফেনী', 'ছাগলনাইয়া', 'পুবাশিমুলিয়া', '3913', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2594, 'Chattogram', 'Feni', 'Dagonbhuia', 'Silonia', '3922', 'চট্টগ্রাম', 'ফেনী', 'দাগনভূয়া', 'সিলোনিয়া', '3922', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2595, 'Chattogram', 'Feni', 'Dagonbhuia', 'Dagondhuia', '3920', 'চট্টগ্রাম', 'ফেনী', 'দাগনভূয়া', 'দাগনধুয়া', '3920', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2596, 'Chattogram', 'Feni', 'Dagonbhuia', 'Dudmukha', '3921', 'চট্টগ্রাম', 'ফেনী', 'দাগনভূয়া', 'দুদমুখা', '3921', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2597, 'Chattogram', 'Feni', 'Dagonbhuia', 'sindurpur', '3923', 'চট্টগ্রাম', 'ফেনী', 'দাগনভূয়া', 'সিন্দুরপুর', '3923', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2598, 'Chattogram', 'Feni', 'Feni Sadar', 'Fazilpur', '3901', 'চট্টগ্রাম', 'ফেনী', 'ফেনী সদর', 'ফাজেলপুর', '3901', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2599, 'Chattogram', 'Feni', 'Feni Sadar', 'Feni Sadar', '3900', 'চট্টগ্রাম', 'ফেনী', 'ফেনী সদর', 'ফেনী সদর', '3900', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2600, 'Chattogram', 'Feni', 'Feni Sadar', 'Laskarhat', '3903', 'চট্টগ্রাম', 'ফেনী', 'ফেনী সদর', 'লস্করহাট', '3903', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2601, 'Chattogram', 'Feni', 'Feni Sadar', 'Sharshadie', '3902', 'চট্টগ্রাম', 'ফেনী', 'ফেনী সদর', 'শার্শাদি ', '3902', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2602, 'Chattogram', 'Feni', 'Pashurampur', 'Fulgazi', '3942', 'চট্টগ্রাম', 'ফেনী', 'পশুরামপুর', 'ফুলগাজী', '3942', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2603, 'Chattogram', 'Feni', 'Pashurampur', 'Munshirhat', '3943', 'চট্টগ্রাম', 'ফেনী', 'পশুরামপুর', 'মুন্সিরহাট ', '3943', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2604, 'Chattogram', 'Feni', 'Pashurampur', 'Pashurampur', '3940', 'চট্টগ্রাম', 'ফেনী', 'পশুরামপুর', 'পশুরামপুর', '3940', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2605, 'Chattogram', 'Feni', 'Pashurampur', 'Shuarbazar', '3941', 'চট্টগ্রাম', 'ফেনী', 'পশুরামপুর', 'শুয়ারবাজার ', '3941', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2606, 'Chattogram', 'Feni', 'Sonagazi', 'Ahmadpur', '3932', 'চট্টগ্রাম', 'ফেনী', 'সোনাগাজী', 'আহমদপুর', '3932', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2607, 'Chattogram', 'Feni', 'Sonagazi', 'Kazirhat', '3933', 'চট্টগ্রাম', 'ফেনী', 'সোনাগাজী', 'কাজিরহাট ', '3933', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2608, 'Chattogram', 'Feni', 'Sonagazi', 'Motiganj', '3931', 'চট্টগ্রাম', 'ফেনী', 'সোনাগাজী', 'মতিগঞ্জ ', '3931', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2609, 'Chattogram', 'Feni', 'Sonagazi', 'Sonagazi', '3930', 'চট্টগ্রাম', 'ফেনী', 'সোনাগাজী', 'সোনাগাজী', '3930', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2610, 'Chattogram', 'Feni', 'Sonagazi', 'Mangal Kandi', '3937', 'চট্টগ্রাম', 'ফেনী', 'সোনাগাজী', 'মঙ্গলকান্দি', '3937', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2611, 'Chattogram', 'Khagrachari', 'Diginala', 'Diginala', '4420', 'চট্টগ্রাম', 'খাগড়াছড়ি', 'দিগিনালা', 'দিগিনালা', '4420', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2612, 'Chattogram', 'Khagrachari', 'Khagrachari Sadar', 'Khagrachari Sadar', '4400', 'চট্টগ্রাম', 'খাগড়াছড়ি', 'খাগড়াছড়ি সদর', 'খাগড়াছড়ি সদর', '4400', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2613, 'Chattogram', 'Khagrachari', 'Laxmichhari', 'Laxmichhari', '4470', 'চট্টগ্রাম', 'খাগড়াছড়ি', 'লক্ষ্মীছড়ি', 'লক্ষ্মীছড়ি', '4470', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2614, 'Chattogram', 'Khagrachari', 'Mahalchhari', 'Mahalchhari', '4430', 'চট্টগ্রাম', 'খাগড়াছড়ি', 'মহালছড়ি', 'মহালছড়ি', '4430', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2615, 'Chattogram', 'Khagrachari', 'Manikchhari', 'Manikchhari', '4460', 'চট্টগ্রাম', 'খাগড়াছড়ি', 'মানিকছড়ি', 'মানিকছড়ি', '4460', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2616, 'Chattogram', 'Khagrachari', 'Matiranga', 'Matiranga', '4450', 'চট্টগ্রাম', 'খাগড়াছড়ি', 'মাটিরাঙ্গা', 'মাটিরাঙ্গা', '4450', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2617, 'Chattogram', 'Khagrachari', 'Panchhari', 'Panchhari', '4410', 'চট্টগ্রাম', 'খাগড়াছড়ি', 'পানছড়ি', 'পানছড়ি', '4410', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2618, 'Chattogram', 'Khagrachari', 'Ramghar Head Office', 'Ramghar Head Office', '4440', 'চট্টগ্রাম', 'খাগড়াছড়ি', 'রামগড়ে প্রধান কার্যালয়', 'রামগড়ে প্রধান কার্যালয়', '4440', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2619, 'Chattogram', 'Lakshmipur', 'Char Alexgander', 'Char Alexgander', '3730', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'চর আলেক্সজান্ডার', 'চর আলেক্সজান্ডার', '3730', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2620, 'Chattogram', 'Lakshmipur', 'kamalnagar', 'Hazir Hat', '3731', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'চর আলেক্সজান্ডার', 'হাজির হাট', '3731', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2621, 'Chattogram', 'Lakshmipur', 'Char Alexgander', 'Ramgatirhat', '3732', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'চর আলেক্সজান্ডার', 'রামগতিরহাট', '3732', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2622, 'Chattogram', 'Lakshmipur', 'Lakshimpur Sadar', 'Amani Lakshimpur', '3709', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'লক্ষ্মীপুর সদর', 'আমানী লক্ষীপুর', '3709', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2623, 'Chattogram', 'Lakshmipur', 'Lakshimpur Sadar', 'Bhabaniganj', '3702', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'লক্ষ্মীপুর সদর', 'ভবানীগঞ্জ', '3702', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2624, 'Chattogram', 'Lakshmipur', 'Lakshimpur Sadar', 'Chandraganj', '3708', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'লক্ষ্মীপুর সদর', 'চন্দ্রগঞ্জ', '3708', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2625, 'Chattogram', 'Lakshmipur', 'Lakshimpur Sadar', 'Choupalli', '3707', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'লক্ষ্মীপুর সদর', 'চৌপল্লী', '3707', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2626, 'Chattogram', 'Lakshmipur', 'Lakshimpur Sadar', 'Dalal Bazar', '3701', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'লক্ষ্মীপুর সদর', 'দালাল বাজার', '3701', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2627, 'Chattogram', 'Lakshmipur', 'Lakshimpur Sadar', 'Duttapara', '3706', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'লক্ষ্মীপুর সদর', 'দত্তপাড়া', '3706', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2628, 'Chattogram', 'Lakshmipur', 'Lakshimpur Sadar', 'Keramatganj', '3704', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'লক্ষ্মীপুর সদর', 'কেরামতগঞ্জ', '3704', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2629, 'Chattogram', 'Lakshmipur', 'Lakshimpur Sadar', 'Lakshimpur Sadar', '3700', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'লক্ষ্মীপুর সদর', 'লক্ষ্মীপুর সদর', '3700', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2630, 'Chattogram', 'Lakshmipur', 'Lakshimpur Sadar', 'Mandari', '3703', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'লক্ষ্মীপুর সদর', 'মন্দারী', '3703', '2021-07-21 08:43:23', '2021-07-21 08:43:23'),
(2631, 'Chattogram', 'Lakshmipur', 'Lakshimpur Sadar', 'Rupchara', '3705', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'লক্ষ্মীপুর সদর', 'রুপচারা', '3705', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2632, 'Chattogram', 'Lakshmipur', 'Ramganj', 'Alipur', '3721', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'রামগঞ্জ', 'আলীপুর', '3721', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2633, 'Chattogram', 'Lakshmipur', 'Ramganj', 'Dolta', '3725', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'রামগঞ্জ', 'ডল্টা', '3725', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2634, 'Chattogram', 'Lakshmipur', 'Ramganj', 'Kanchanpur', '3723', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'রামগঞ্জ', 'কাঞ্চনপুর', '3723', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2635, 'Chattogram', 'Lakshmipur', 'Ramganj', 'Naagmud', '3724', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'রামগঞ্জ', 'নাগমুদ', '3724', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2636, 'Chattogram', 'Lakshmipur', 'Ramganj', 'Panpara', '3722', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'রামগঞ্জ', 'পানপাড়া', '3722', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2637, 'Chattogram', 'Lakshmipur', 'Ramganj', 'Ramganj', '3720', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'রামগঞ্জ', 'রামগঞ্জ', '3720', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2638, 'Chattogram', 'Lakshmipur', 'Raypur', 'Bhuiyanbari', '3714', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'রায়পুর', 'ভূঁইবাড়ি', '3714', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2639, 'Chattogram', 'Lakshmipur', 'Raypur', 'Haydarganj', '3713', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'রায়পুর', 'হায়দারগঞ্জ', '3713', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2640, 'Chattogram', 'Lakshmipur', 'Raypur', 'Khaser Hat', '3713', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'রায়পুর', 'খাসের হাট', '3712', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2641, 'Chattogram', 'Lakshmipur', 'Raypur', 'Nagerdighirpar', '3712', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'রায়পুর', 'নাগেরদীঘিরপাড়', '3712', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2642, 'Chattogram', 'Lakshmipur', 'Raypur', 'Rakhallia', '3711', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'রায়পুর', 'রাখালিয়া', '3711', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2643, 'Chattogram', 'Lakshmipur', 'Raypur', 'Raypur', '3710', 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'রায়পুর', 'রায়পুর', '3710', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2644, 'Chattogram', 'Noakhali', 'Basurhat', 'Basur Hat', '3850', 'চট্টগ্রাম', 'নোয়াখালী', 'বসুরহাট', 'বসুরহাট', '3850', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2645, 'Chattogram', 'Noakhali', 'Basurhat', 'Charhajari', '3851', 'চট্টগ্রাম', 'নোয়াখালী', 'বসুরহাট', 'চারহাজারী', '3851', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2646, 'Chattogram', 'Noakhali', 'Begumganj', 'Alaiarpur', '3831', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'আলায়ারপুর', '3831', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2647, 'Chattogram', 'Noakhali', 'Sonaimuri', 'Amisha Para', '3847', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'আমিশাপাড়া', '3847', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2648, 'Chattogram', 'Noakhali', 'Sonaimuri', 'Eid Gah Amin Bazar', '3836', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'ঈদগাহ আমিন বাজার ', '3822', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2649, 'Chattogram', 'Noakhali', 'Begumganj', 'Banglabazar', '3822', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'বাংলাবাজার', '3822', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2650, 'Chattogram', 'Noakhali', 'Begumganj', 'Bazra', '3824', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'বজরা', '3824', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2651, 'Chattogram', 'Noakhali', 'Begumganj', 'Begumganj', '3820', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'বেগমগঞ্জ', '3820', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2652, 'Chattogram', 'Noakhali', 'Begumganj', 'Bhabani Jibanpur', '3837', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'ভবানী জীবনপুর', '3837', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2653, 'Chattogram', 'Noakhali', 'Begumganj', 'Choumohani', '3821', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'চৌমুহনি', '3821', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2654, 'Chattogram', 'Noakhali', 'Begumganj', 'Dauti', '3843', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'দৌতি', '3843', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2655, 'Chattogram', 'Noakhali', 'Begumganj', 'Durgapur', '3848', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'দুর্গাপুর', '3848', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2656, 'Chattogram', 'Noakhali', 'Begumganj', 'Gopalpur', '3828', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'গোপালপুর', '3828', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2657, 'Chattogram', 'Noakhali', 'Begumganj', 'Jamidar Hat', '3825', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'জমিদারহাট', '3825', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2658, 'Chattogram', 'Noakhali', 'Begumganj', 'Joyag', '3844', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'জয়াগ', '3844', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2659, 'Chattogram', 'Noakhali', 'Begumganj', 'Joynarayanpur', '3829', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'জয়-নারায়ণপুর', '3829', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2660, 'Chattogram', 'Noakhali', 'Begumganj', 'Khalafat Bazar', '3833', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'খলিফাত বাজার', '3833', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2661, 'Chattogram', 'Noakhali', 'Begumganj', 'Khalishpur', '3842', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'খালিশপুর', '3842', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2662, 'Chattogram', 'Noakhali', 'Begumganj', 'Maheshganj', '3838', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'মহেষগঞ্জ', '3838', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2663, 'Chattogram', 'Noakhali', 'Begumganj', 'Mir Owarishpur', '3823', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'মীরওয়ারিশপুর', '3823', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2664, 'Chattogram', 'Noakhali', 'Begumganj', 'Nadona', '3839', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'নাদোনা', '3839', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2665, 'Chattogram', 'Noakhali', 'Begumganj', 'Nandiapara', '3841', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'নন্দিয়াপাড়া', '3841', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2666, 'Chattogram', 'Noakhali', 'Begumganj', 'Oachhekpur', '3835', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'ওচেকপুর', '3835', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2667, 'Chattogram', 'Noakhali', 'Begumganj', 'Rajganj', '3834', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'রাজগঞ্জ', '3834', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2668, 'Chattogram', 'Noakhali', 'Begumganj', 'Sonaimuri', '3827', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'সোনাইমুড়ি', '3827', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2669, 'Chattogram', 'Noakhali', 'Begumganj', 'Tangirpar', '3832', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'টাঙ্গিরপাড়', '3832', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2670, 'Chattogram', 'Noakhali', 'Begumganj', 'Thanar Hat', '3845', 'চট্টগ্রাম', 'নোয়াখালী', 'বেগমগঞ্জ', 'থানার হাট', '3845', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2671, 'Chattogram', 'Noakhali', 'Chatkhil', 'Bansa Bazar', '3879', 'চট্টগ্রাম', 'নোয়াখালী', 'চাটখিল', 'বনসা বাজার', '3879', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2672, 'Chattogram', 'Noakhali', 'Chatkhil', 'Bodalcourt', '3873', 'চট্টগ্রাম', 'নোয়াখালী', 'চাটখিল', 'বোডালকোর্ট', '3873', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2673, 'Chattogram', 'Noakhali', 'Chatkhil', 'Chatkhil', '3870', 'চট্টগ্রাম', 'নোয়াখালী', 'চাটখিল', 'চাটখিল', '3870', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2674, 'Chattogram', 'Noakhali', 'Chatkhil', 'Dosh Gharia', '3878', 'চট্টগ্রাম', 'নোয়াখালী', 'চাটখিল', 'দোষ ঘড়িয়া', '3878', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2675, 'Chattogram', 'Noakhali', 'Chatkhil', 'Karihati', '3877', 'চট্টগ্রাম', 'নোয়াখালী', 'চাটখিল', 'করিহাতী', '3877', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2676, 'Chattogram', 'Noakhali', 'Chatkhil', 'Khilpara', '3872', 'চট্টগ্রাম', 'নোয়াখালী', 'চাটখিল', 'খিলপাড়া', '3872', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2677, 'Chattogram', 'Noakhali', 'Chatkhil', 'Palla', '3871', 'চট্টগ্রাম', 'নোয়াখালী', 'চাটখিল', 'পাল্লা', '3871', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2678, 'Chattogram', 'Noakhali', 'Chatkhil', 'Rezzakpur', '3874', 'চট্টগ্রাম', 'নোয়াখালী', 'চাটখিল', 'রেজ্জাকপুর', '3874', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2679, 'Chattogram', 'Noakhali', 'Chatkhil', 'Sahapur', '3881', 'চট্টগ্রাম', 'নোয়াখালী', 'চাটখিল', 'সাহাপুর', '3881', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2680, 'Chattogram', 'Noakhali', 'Chatkhil', 'Sampara', '3882', 'চট্টগ্রাম', 'নোয়াখালী', 'চাটখিল', 'শম্পার', '3882', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2681, 'Chattogram', 'Noakhali', 'Chatkhil', 'Shingbahura', '3883', 'চট্টগ্রাম', 'নোয়াখালী', 'চাটখিল', 'শিংবাহুরা', '3883', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2682, 'Chattogram', 'Noakhali', 'Chatkhil', 'Solla', '3875', 'চট্টগ্রাম', 'নোয়াখালী', 'চাটখিল', 'শল্লা', '3875', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2683, 'Chattogram', 'Noakhali', 'Hatiya', 'Afazia', '3891', 'চট্টগ্রাম', 'নোয়াখালী', 'হাতিয়া', 'আফাজিয়া', '3891', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2684, 'Chattogram', 'Noakhali', 'Hatiya', 'Hatiya', '3890', 'চট্টগ্রাম', 'নোয়াখালী', 'হাতিয়া', 'হাতিয়া', '3890', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2685, 'Chattogram', 'Noakhali', 'Hatiya', 'Tamoraddi', '3892', 'চট্টগ্রাম', 'নোয়াখালী', 'হাতিয়া', 'তমোরাদদী', '3892', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2686, 'Chattogram', 'Noakhali', 'Noakhali Sadar', 'Chaprashir Hat', '3811', 'চট্টগ্রাম', 'নোয়াখালী', 'নোয়াখালী সদর', 'চাপড়াশির হাট', '3811', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2687, 'Chattogram', 'Noakhali', 'Noakhali Sadar', 'Char Jabbar', '3812', 'চট্টগ্রাম', 'নোয়াখালী', 'নোয়াখালী সদর', 'চর জব্বার', '3812', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2688, 'Chattogram', 'Noakhali', 'Noakhali Sadar', 'Charam Tua', '3809', 'চট্টগ্রাম', 'নোয়াখালী', 'নোয়াখালী সদর', 'চর টুয়া', '3809', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2689, 'Chattogram', 'Noakhali', 'Noakhali Sadar', 'Din Monir Hat', '3803', 'চট্টগ্রাম', 'নোয়াখালী', 'নোয়াখালী সদর', 'দীন মনির হাট', '3803', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2690, 'Chattogram', 'Noakhali', 'Noakhali Sadar', 'Kabirhat', '3807', 'চট্টগ্রাম', 'নোয়াখালী', 'নোয়াখালী সদর', 'কবিরহাট', '3807', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2691, 'Chattogram', 'Noakhali', 'Noakhali Sadar', 'Khalifar Hat', '3808', 'চট্টগ্রাম', 'নোয়াখালী', 'নোয়াখালী সদর', 'খলিফার হাট', '3808', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2692, 'Chattogram', 'Noakhali', 'Noakhali Sadar', 'Mriddarhat', '3806', 'চট্টগ্রাম', 'নোয়াখালী', 'নোয়াখালী সদর', 'মৃদ্দারহাট', '3806', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2693, 'Chattogram', 'Noakhali', 'Noakhali Sadar', 'Noakhali College', '3801', 'চট্টগ্রাম', 'নোয়াখালী', 'নোয়াখালী সদর', 'নোয়াখালী কলেজ', '3801', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2694, 'Chattogram', 'Noakhali', 'Noakhali Sadar', 'Noakhali Sadar', '3800', 'চট্টগ্রাম', 'নোয়াখালী', 'নোয়াখালী সদর', 'নোয়াখালী সদর', '3800', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2695, 'Chattogram', 'Noakhali', 'Noakhali Sadar', 'Pak Kishoreganj', '3804', 'চট্টগ্রাম', 'নোয়াখালী', 'নোয়াখালী সদর', 'পাক কিশোরগঞ্জ', '3804', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2696, 'Chattogram', 'Noakhali', 'Noakhali Sadar', 'Sonapur', '3802', 'চট্টগ্রাম', 'নোয়াখালী', 'নোয়াখালী সদর', 'সোনাপুর', '3802', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2697, 'Chattogram', 'Noakhali', 'Senbag', 'Beezbag', '3862', 'চট্টগ্রাম', 'নোয়াখালী', 'সেনবাগ', 'বীজবাগ', '3862', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2698, 'Chattogram', 'Noakhali', 'Senbag', 'Chatarpaia', '3864', 'চট্টগ্রাম', 'নোয়াখালী', 'সেনবাগ', 'চাটারপাইয়া', '3864', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2699, 'Chattogram', 'Noakhali', 'Senbag', 'Kallyandi', '3861', 'চট্টগ্রাম', 'নোয়াখালী', 'সেনবাগ', 'কলিয়ান্দি', '3861', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2700, 'Chattogram', 'Noakhali', 'Senbag', 'Kankirhat', '3863', 'চট্টগ্রাম', 'নোয়াখালী', 'সেনবাগ', 'কঙ্কিরহাট', '3863', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2701, 'Chattogram', 'Noakhali', 'Senbag', 'Senbag', '3860', 'চট্টগ্রাম', 'নোয়াখালী', 'সেনবাগ', 'সেনবাগ', '3860', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2702, 'Chattogram', 'Noakhali', 'Senbag', 'T.P. Lamua', '3865', 'চট্টগ্রাম', 'নোয়াখালী', 'সেনবাগ', 'টি.পি. লামুয়া', '3865', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2703, 'Chattogram', 'Rangamati', 'Barakal', 'Barakal', '4570', 'চট্টগ্রাম', 'রাঙামাটি', 'বড়কাল', 'বড়কাল', '4570', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2704, 'Chattogram', 'Rangamati', 'Bilaichhari', 'Bilaichhari', '4550', 'চট্টগ্রাম', 'রাঙামাটি', 'বিলাইছড়ি', 'বিলাইছড়ি', '4550', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2705, 'Chattogram', 'Rangamati', 'Jarachhari', 'Jarachhari', '4560', 'চট্টগ্রাম', 'রাঙামাটি', 'জারাছড়ি', 'জারাছড়ি', '4560', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2706, 'Chattogram', 'Rangamati', 'Kalampati', 'Betbunia', '4511', 'চট্টগ্রাম', 'রাঙামাটি', 'কালামপতি', 'বেতবুনিয়া', '4511', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2707, 'Chattogram', 'Rangamati', 'Kalampati', 'Kalampati', '4510', 'চট্টগ্রাম', 'রাঙামাটি', 'কালামপতি', 'কালামপতি', '4510', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2708, 'Chattogram', 'Rangamati', 'kaptai', 'Chandraghona', '4531', 'চট্টগ্রাম', 'রাঙামাটি', 'কাপ্তাই', 'চন্দ্রঘোনা', '4531', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2709, 'Chattogram', 'Rangamati', 'kaptai', 'Kaptai', '4530', 'চট্টগ্রাম', 'রাঙামাটি', 'কাপ্তাই', 'কাপ্তাই', '4530', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2710, 'Chattogram', 'Rangamati', 'kaptai', 'Kaptai Nuton Bazar', '4533', 'চট্টগ্রাম', 'রাঙামাটি', 'কাপ্তাই', 'কাপ্তাই নিউটন বাজার', '4533', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2711, 'Chattogram', 'Rangamati', 'kaptai', 'Kaptai Project', '4532', 'চট্টগ্রাম', 'রাঙামাটি', 'কাপ্তাই', 'কাপ্তাই প্রকল্প', '4532', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2712, 'Chattogram', 'Rangamati', 'Longachh', 'Longachh', '4580', 'চট্টগ্রাম', 'রাঙামাটি', 'লংগাছ', 'লংগাছ', '4580', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2713, 'Chattogram', 'Rangamati', 'Marishya', 'Marishya', '4590', 'চট্টগ্রাম', 'রাঙামাটি', 'মারিশ্যা', 'মারিশ্যা', '4590', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2714, 'Chattogram', 'Rangamati', 'Naniachhar', 'Nanichhar', '4520', 'চট্টগ্রাম', 'রাঙামাটি', 'নানিয়াছড়', 'নানিচর', '4520', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2715, 'Chattogram', 'Rangamati', 'Rajsthali', 'Rajsthali', '4540', 'চট্টগ্রাম', 'রাঙামাটি', 'রাজস্থালি', 'রাজস্থালি', '4540', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2716, 'Chattogram', 'Rangamati', 'Rangamati Sadar', 'Rangamati Sadar', '4500', 'চট্টগ্রাম', 'রাঙামাটি', 'রাঙামাটি সদর', 'রাঙামাটি সদর', '4500', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2717, 'Rangpur ', 'Dinajpur', 'Bangla Hili', 'Bangla Hili', '5270', 'রংপুর', 'দিনাজপুর', 'বাংলা হিলি', 'বাংলা হিলি', '5270', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2718, 'Rangpur ', 'Dinajpur', 'Biral', 'Biral', '5210', 'রংপুর', 'দিনাজপুর', 'বিরল', 'বিরল', '5210', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2719, 'Rangpur ', 'Dinajpur', 'Birampur', 'Birampur', '5266', 'রংপুর', 'দিনাজপুর', 'বিরামপুর', 'বিরামপুর', '5266', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2720, 'Rangpur ', 'Dinajpur', 'Birganj', 'Birganj', '5220', 'রংপুর', 'দিনাজপুর', 'বীরগঞ্জ', 'বীরগঞ্জ', '5220', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2721, 'Rangpur ', 'Dinajpur', 'Chirirbandar', 'Chirirbandar', '5240', 'রংপুর', 'দিনাজপুর', 'চিরিরবন্দর', 'চিরিরবন্দর', '5240', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2722, 'Rangpur ', 'Dinajpur', 'Chirirbandar', 'Ranirbandar', '5241', 'রংপুর', 'দিনাজপুর', 'চিরিরবন্দর', 'রাণীরবন্দর', '5241', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2723, 'Rangpur ', 'Dinajpur', 'Dinajpur Sadar', 'Dinajpur Rajbari', '5201', 'রংপুর', 'দিনাজপুর', 'দিনাজপুর সদর', 'দিনাজপুর রাজবাড়ী', '5201', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2724, 'Rangpur ', 'Dinajpur', 'Dinajpur Sadar', 'Dinajpur Sadar', '5200', 'রংপুর', 'দিনাজপুর', 'দিনাজপুর সদর', 'দিনাজপুর সদর', '5200', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2725, 'Rangpur ', 'Dinajpur', 'Khansama', 'Khansama', '5230', 'রংপুর', 'দিনাজপুর', 'খানসামা', 'খানসামা', '5230', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2726, 'Rangpur ', 'Dinajpur', 'Khansama', 'Pakarhat', '5231', 'রংপুর', 'দিনাজপুর', 'খানসামা', 'পাকেরহাট', '5231', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2727, 'Rangpur ', 'Dinajpur', 'Maharajganj', 'Maharajganj', '5226', 'রংপুর', 'দিনাজপুর', 'মহারাজগঞ্জ', 'মহারাজগঞ্জ', '5226', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2728, 'Rangpur ', 'Dinajpur', 'Nawabganj', 'Daudpur', '5281', 'রংপুর', 'দিনাজপুর', 'নবাবগঞ্জ', 'দাউদপুর', '5281', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2729, 'Rangpur ', 'Dinajpur', 'Nawabganj', 'Gopalpur', '5282', 'রংপুর', 'দিনাজপুর', 'নবাবগঞ্জ', 'গোপালপুর', '5282', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2730, 'Rangpur ', 'Dinajpur', 'Nawabganj', 'Nawabganj', '5280', 'রংপুর', 'দিনাজপুর', 'নবাবগঞ্জ', 'নবাবগঞ্জ', '5280', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2731, 'Rangpur ', 'Dinajpur', 'Ghoraghat', 'Ghoraghat', '5291', 'রংপুর', 'দিনাজপুর', 'ওসমানপুর', 'ঘোড়াঘাট', '5291', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2732, 'Rangpur ', 'Dinajpur', 'Ghoraghat', 'Osmanpur', '5290', 'রংপুর', 'দিনাজপুর', 'ওসমানপুর', 'ওসমানপুর', '5290', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2733, 'Rangpur ', 'Dinajpur', 'Parbatipur', 'Parbatipur', '5250', 'রংপুর', 'দিনাজপুর', 'পার্বতীপুর', 'পার্বতীপুর', '5250', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2734, 'Rangpur ', 'Dinajpur', 'Phulbari', 'Phulbari', '5260', 'রংপুর', 'দিনাজপুর', 'ফুলবাড়ী', 'ফুলবাড়ী', '5260', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2735, 'Rangpur ', 'Dinajpur', 'Setabganj', 'Setabganj', '5216', 'রংপুর', 'দিনাজপুর', 'সেতাবগঞ্জ', 'সেতাবগঞ্জ', '5216', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2736, 'Rangpur ', 'Gaibandha', 'Bonarpara', 'Bonarpara', '5750', 'রংপুর', 'গাইবান্ধা', 'বোনারপাড়া', 'বোনারপাড়া', '5750', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2737, 'Rangpur ', 'Gaibandha', 'Bonarpara', 'saghata', '5751', 'রংপুর', 'গাইবান্ধা', 'বোনারপাড়া', 'সাঘাটা', '5751', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2738, 'Rangpur ', 'Gaibandha', 'Gaibandha Sadar', 'Gaibandha Sadar', '5700', 'রংপুর', 'গাইবান্ধা', 'গাইবান্ধা সদর', 'গাইবান্ধা সদর', '5700', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2739, 'Rangpur ', 'Gaibandha', 'Gobindaganj', 'Gobindhaganj', '5740', 'রংপুর', 'গাইবান্ধা', 'গোবিন্দগঞ্জ', 'গোবিন্দগঞ্জ', '5740', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2740, 'Rangpur ', 'Gaibandha', 'Gobindaganj', 'Mahimaganj', '5741', 'রংপুর', 'গাইবান্ধা', 'গোবিন্দগঞ্জ', 'মহিমাগঞ্জ', '5741', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2741, 'Rangpur ', 'Gaibandha', 'Palashbari', 'Palashbari', '5730', 'রংপুর', 'গাইবান্ধা', 'পলাশবাড়ী', 'পলাশবাড়ী', '5730', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2742, 'Rangpur ', 'Gaibandha', 'Phulchhari', 'Bharatkhali', '5761', 'রংপুর', 'গাইবান্ধা', 'ফুলছড়ি', 'ভরতখালী', '5761', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2743, 'Rangpur ', 'Gaibandha', 'Phulchhari', 'Phulchhari', '5760', 'রংপুর', 'গাইবান্ধা', 'ফুলছড়ি', 'ফুলছড়ি', '5760', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2744, 'Rangpur ', 'Gaibandha', 'Saadullapur', 'Naldanga', '5711', 'রংপুর', 'গাইবান্ধা', 'সাদুল্লাপুর', 'নলডাঙ্গা', '5711', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2745, 'Rangpur ', 'Gaibandha', 'Saadullapur', 'Saadullapur', '5710', 'রংপুর', 'গাইবান্ধা', 'সাদুল্লাপুর', 'সাদুল্লাপুর', '5710', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2746, 'Rangpur ', 'Gaibandha', 'Sundarganj', 'Bamandanga', '5721', 'রংপুর', 'গাইবান্ধা', 'সুন্দরগঞ্জ', 'বামনডাঙ্গা', '5721', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2747, 'Rangpur ', 'Gaibandha', 'Sundarganj', 'Sundarganj', '5720', 'রংপুর', 'গাইবান্ধা', 'সুন্দরগঞ্জ', 'সুন্দরগঞ্জ', '5720', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2748, 'Rangpur ', 'Kurigram', 'Bhurungamari', 'Bhurungamari', '5670', 'রংপুর', 'কুড়িগ্রাম', 'ভূরুঙ্গামারী', 'ভূরুঙ্গামারী', '5670', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2749, 'Rangpur ', 'Kurigram', 'Chilmari', 'Chilmari', '5630', 'রংপুর', 'কুড়িগ্রাম', 'চিলমারী', 'চিলমারী', '5630', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2750, 'Rangpur ', 'Kurigram', 'Chilmari', 'Jorgachh', '5631', 'রংপুর', 'কুড়িগ্রাম', 'চিলমারী', 'জোড়গাছা', '5631', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2751, 'Rangpur ', 'Kurigram', 'Kurigram Sadar', 'Kurigram Sadar', '5600', 'রংপুর', 'কুড়িগ্রাম', 'কুড়িগ্রাম সদর', 'কুড়িগ্রাম সদর', '5600', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2752, 'Rangpur ', 'Kurigram', 'Kurigram Sadar', 'Pandul', '5601', 'রংপুর', 'কুড়িগ্রাম', 'কুড়িগ্রাম সদর', 'পান্ডুল', '5601', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2753, 'Rangpur ', 'Kurigram', 'Kurigram Sadar', 'Phulbari', '5680', 'রংপুর', 'কুড়িগ্রাম', 'কুড়িগ্রাম সদর', 'ফুলবাড়ী', '5680', '2021-07-21 08:43:24', '2021-07-21 08:43:24');
INSERT INTO `civilinfos` (`id`, `division`, `district`, `thana`, `suboffice`, `postcode`, `division_bn`, `district_bn`, `thana_bn`, `suboffice_bn`, `postcode_bn`, `created_at`, `updated_at`) VALUES
(2754, 'Rangpur ', 'Kurigram', 'Nageshwar', 'Nageshwar', '5660', 'রংপুর', 'কুড়িগ্রাম', 'নাগেশ্বর', 'নাগেশ্বর', '5660', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2755, 'Rangpur ', 'Kurigram', 'Rajarhat', 'Nazimkhan', '5611', 'রংপুর', 'কুড়িগ্রাম', 'রাজারহাট', 'নাজিমখান', '5611', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2756, 'Rangpur ', 'Kurigram', 'Rajarhat', 'Rajarhat', '5610', 'রংপুর', 'কুড়িগ্রাম', 'রাজারহাট', 'রাজারহাট', '5610', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2757, 'Rangpur ', 'Kurigram', 'Rajibpur', 'Rajibpur', '5650', 'রংপুর', 'কুড়িগ্রাম', 'রাজিবপুর', 'রাজিবপুর', '5650', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2758, 'Rangpur ', 'Kurigram', 'Roumari', 'Roumari', '5640', 'রংপুর', 'কুড়িগ্রাম', 'রৌমারী', 'রৌমারী', '5640', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2759, 'Rangpur ', 'Kurigram', 'Ulipur', 'Bozra hat', '5621', 'রংপুর', 'কুড়িগ্রাম', 'উলিপুর', 'বাজারহাট', '5621', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2760, 'Rangpur ', 'Kurigram', 'Ulipur', 'Ulipur', '5620', 'রংপুর', 'কুড়িগ্রাম', 'উলিপুর', 'উলিপুর', '5620', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2761, 'Rangpur ', 'Lalmonirhat', 'Aditmari', 'Aditmari', '5510', 'রংপুর', 'লালমনিরহাট', 'আদিতমারী', 'আদিতমারী', '5510', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2762, 'Rangpur ', 'Lalmonirhat', 'Hatibandha', 'Hatibandha', '5530', 'রংপুর', 'লালমনিরহাট', 'হাতীবান্ধা', 'হাতীবান্ধা', '5530', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2763, 'Rangpur ', 'Lalmonirhat', 'Lalmonirhat Sadar', 'Kulaghat SO', '5502', 'রংপুর', 'লালমনিরহাট', 'লালমনিরহাট সদর', 'কুলাঘাট SO', '5502', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2764, 'Rangpur ', 'Lalmonirhat', 'Lalmonirhat Sadar', 'Lalmonirhat Sadar', '5500', 'রংপুর', 'লালমনিরহাট', 'লালমনিরহাট সদর', 'লালমনিরহাট সদর', '5500', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2765, 'Rangpur ', 'Lalmonirhat', 'Lalmonirhat Sadar', 'Moghalhat', '5501', 'রংপুর', 'লালমনিরহাট', 'লালমনিরহাট সদর', 'মোগলহাট', '5501', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2766, 'Rangpur ', 'Lalmonirhat', 'Patgram', 'Baura', '5541', 'রংপুর', 'লালমনিরহাট', 'পাটগ্রাম', 'বাউরা', '5541', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2767, 'Rangpur ', 'Lalmonirhat', 'Patgram', 'Burimari', '5542', 'রংপুর', 'লালমনিরহাট', 'পাটগ্রাম', 'বুড়িমারী', '5542', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2768, 'Rangpur ', 'Lalmonirhat', 'Patgram', 'Patgram', '5540', 'রংপুর', 'লালমনিরহাট', 'পাটগ্রাম', 'পাটগ্রাম', '5540', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2769, 'Rangpur ', 'Lalmonirhat', 'Tushbhandar', 'Tushbhandar', '5520', 'রংপুর', 'লালমনিরহাট', 'তুষভান্ডার', 'তুষভান্ডার', '5520', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2770, 'Rangpur ', 'Nilphamari', 'Dimla', 'Dimla', '5350', 'রংপুর', 'নীলফামারী', 'ডিমলা', 'ডিমলা', '5350', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2771, 'Rangpur ', 'Nilphamari', 'Dimla', 'Ghaga Kharibari', '5351', 'রংপুর', 'নীলফামারী', 'ডিমলা', 'ঘাগা খড়িবাড়ি', '5351', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2772, 'Rangpur ', 'Nilphamari', 'Domar', 'Chilahati', '5341', 'রংপুর', 'নীলফামারী', 'ডোমার', 'চিলাহাটি', '5341', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2773, 'Rangpur ', 'Nilphamari', 'Domar', 'Domar', '5340', 'রংপুর', 'নীলফামারী', 'ডোমার', 'ডোমার', '5340', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2774, 'Rangpur ', 'Nilphamari', 'Jaldhaka', 'Jaldhaka', '5330', 'রংপুর', 'নীলফামারী', 'জলঢাকা', 'জলঢাকা', '5330', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2775, 'Rangpur ', 'Nilphamari', 'Kishoriganj', 'Kishoriganj', '5320', 'রংপুর', 'নীলফামারী', 'কিশোরীগঞ্জ', 'কিশোরীগঞ্জ', '5320', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2776, 'Rangpur ', 'Nilphamari', 'Nilphamari Sadar', 'Nilphamari Sadar', '5300', 'রংপুর', 'নীলফামারী', 'নীলফামারী সদর', 'নীলফামারী সদর', '5300', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2777, 'Rangpur ', 'Nilphamari', 'Nilphamari Sadar', 'Nilphamari Sugar Mil', '5301', 'রংপুর', 'নীলফামারী', 'নীলফামারী সদর', 'নীলফামারী চিনি মিল', '5301', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2778, 'Rangpur ', 'Nilphamari', 'Saidpur', 'Saidpur', '5310', 'রংপুর', 'নীলফামারী', 'সৈয়দপুর', 'সৈয়দপুর', '5310', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2779, 'Rangpur ', 'Nilphamari', 'Saidpur', 'Saidpur Upashahar', '5311', 'রংপুর', 'নীলফামারী', 'সৈয়দপুর', 'সৈয়দপুর উপশহর', '5311', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2780, 'Rangpur ', 'Panchagarh', 'Boda', 'Boda', '5010', 'রংপুর', 'পঞ্চগড়', 'বোদা', 'বোদা', '5010', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2781, 'Rangpur ', 'Panchagarh', 'Chotto Dab', 'Chotto Dab', '4050', 'রংপুর', 'পঞ্চগড়', 'ছোট্ট ডাবের', 'ছোট্ট ডাবের', '5040', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2782, 'Rangpur ', 'Panchagarh', 'Chotto Dab', 'Mirjapur', '5041', 'রংপুর', 'পঞ্চগড়', 'ছোট্ট ডাবের', 'মির্জাপুর', '5041', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2783, 'Rangpur ', 'Panchagarh', 'Dabiganj', 'Dabiganj', '5020', 'রংপুর', 'পঞ্চগড়', 'দেবীগঞ্জ', 'দেবীগঞ্জ', '5020', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2784, 'Rangpur ', 'Panchagarh', 'Panchagra Sadar', 'Panchagar Sadar', '5000', 'রংপুর', 'পঞ্চগড়', 'পঞ্চগড় সদর', 'পঞ্চগড় সদর', '5000', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2785, 'Rangpur ', 'Panchagarh', 'Tetulia', 'Tetulia', '5030', 'রংপুর', 'পঞ্চগড়', 'তেঁতুলিয়া', 'তেঁতুলিয়া', '5030', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2786, 'Rangpur ', 'Rangpur', 'Taraganj', 'Taraganj', '5420', 'রংপুর', 'রংপুর', 'তারাগঞ্জ', 'তারাগঞ্জ', '5420', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2787, 'Rangpur ', 'Rangpur', 'Badarganj', 'Shyampur', '5431', 'রংপুর', 'রংপুর', 'বদরগঞ্জ', 'শ্যামপুর', '5431', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2788, 'Rangpur ', 'Rangpur', 'Gangachara', 'Gangachara', '5410', 'রংপুর', 'রংপুর', 'গঙ্গাচড়া', 'গঙ্গাচড়া', '5410', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2789, 'Rangpur ', 'Rangpur', 'Kaunia', 'Haragachh', '5441', 'রংপুর', 'রংপুর', 'কাউনিয়া', 'হারাগাছ', '5441', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2790, 'Rangpur ', 'Rangpur', 'Kaunia', 'Kaunia', '5440', 'রংপুর', 'রংপুর', 'কাউনিয়া', 'কাউনিয়া', '5440', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2791, 'Rangpur ', 'Rangpur', 'Pirgachha', 'Pirgachha', '5450', 'রংপুর', 'রংপুর', 'পীরগাছা', 'পীরগাছা', '5450', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2792, 'Rangpur ', 'Rangpur', 'Mithapukur', 'Mithapukur', '5460', 'রংপুর', 'রংপুর', 'মিঠাপুকুর', 'মিঠাপুকুর', '5460', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2793, 'Rangpur ', 'Rangpur', 'Pirgonj', 'Gujjipara', '5470', 'রংপুর', 'রংপুর', 'পিরগঞ্জ', 'গুজজিপাড়া', '5470', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2794, 'Rangpur ', 'Rangpur', 'Rangpur Sadar', 'Alamnagar', '5402', 'রংপুর', 'রংপুর', 'রংপুর সদর', 'আলমনগর', '5402', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2795, 'Rangpur ', 'Rangpur', 'Rangpur Sadar', 'Mahiganj', '5403', 'রংপুর', 'রংপুর', 'রংপুর সদর', 'মাহিগঞ্জ', '5403', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2796, 'Rangpur ', 'Rangpur', 'Rangpur Sadar', 'Rangpur Cadet Colleg', '5404', 'রংপুর', 'রংপুর', 'রংপুর সদর', 'রংপুর ক্যাডেট কলেজ', '5404', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2797, 'Rangpur ', 'Rangpur', 'Rangpur Sadar', 'Rangpur Carmiecal Col', '5405', 'রংপুর', 'রংপুর', 'রংপুর সদর', 'রংপুর কারমিয়াকাল কর্নেল', '5405', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2798, 'Rangpur ', 'Rangpur', 'Rangpur Sadar', 'Rangpur Sadar', '5400', 'রংপুর', 'রংপুর', 'রংপুর সদর', 'রংপুর সদর', '5400', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2799, 'Rangpur ', 'Rangpur', 'Rangpur Sadar', 'Rangpur Upa-Shahar', '5401', 'রংপুর', 'রংপুর', 'রংপুর সদর', 'রংপুর উপজেলা-শাহার', '5401', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2800, 'Rangpur ', 'Rangpur', 'Badarganj', 'Badarganj', '5430', 'রংপুর', 'রংপুর', 'বদরগঞ্জ', 'বদরগঞ্জ', '5430', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2801, 'Rangpur ', 'Thakurgaon', 'Baliadangi', 'Baliadangi', '5140', 'রংপুর', 'ঠাকুরগাঁও', 'বালিয়াডাঙ্গী', 'বালিয়াডাঙ্গী', '5140', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2802, 'Rangpur ', 'Thakurgaon', 'Baliadangi', 'Lahiri', '5141', 'রংপুর', 'ঠাকুরগাঁও', 'বালিয়াডাঙ্গী', 'লাহিড়ি', '5141', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2803, 'Rangpur ', 'Thakurgaon', 'Jibanpur', 'Jibanpur', '5130', 'রংপুর', 'ঠাকুরগাঁও', 'জীবনপুর', 'জীবনপুর', '5130', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2804, 'Rangpur ', 'Thakurgaon', 'Pirganj', 'Pirganj', '5110', 'রংপুর', 'ঠাকুরগাঁও', 'পীরগঞ্জ', 'পীরগঞ্জ', '5110', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2805, 'Rangpur ', 'Thakurgaon', 'Rani Sankail', 'Nekmarad', '5121', 'রংপুর', 'ঠাকুরগাঁও', 'রাণীশংকৈল', 'নেকমরদ', '5121', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2806, 'Rangpur ', 'Thakurgaon', 'Rani Sankail', 'Rani Sankail', '5120', 'রংপুর', 'ঠাকুরগাঁও', 'রাণীশংকৈল', 'রাণীশংকৈল', '5120', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2807, 'Rangpur ', 'Thakurgaon', 'Thakurgaon Sadar', 'Ruhia', '5103', 'রংপুর', 'ঠাকুরগাঁও', 'ঠাকুরগাঁও সদর', 'রুহিয়া', '5103', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2808, 'Rangpur ', 'Thakurgaon', 'Thakurgaon Sadar', 'Shibganj', '5102', 'রংপুর', 'ঠাকুরগাঁও', 'ঠাকুরগাঁও সদর', 'শিবগঞ্জ', '5102', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2809, 'Rangpur ', 'Thakurgaon', 'Thakurgaon Sadar', 'Thakurgaon Road', '5101', 'রংপুর', 'ঠাকুরগাঁও', 'ঠাকুরগাঁও সদর', 'ঠাকুরগাঁও রোড', '5101', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2810, 'Rangpur ', 'Thakurgaon', 'Thakurgaon Sadar', 'Thakurgaon Sadar', '5100', 'রংপুর', 'ঠাকুরগাঁও', 'ঠাকুরগাঁও সদর', 'ঠাকুরগাঁও সদর', '5100', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2811, 'Rajshahi', 'Bogura', 'Adamdighi', 'Adamdighi', '5890', 'রাজশাহী', 'বগুড়া', 'আদমদীঘি', 'আদমদীঘি', '5890', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2812, 'Rajshahi', 'Bogura', 'Adamdighi', 'Nasharatpur', '5892', 'রাজশাহী', 'বগুড়া', 'আদমদীঘি', 'নশরতপুর', '5892', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2813, 'Rajshahi', 'Bogura', 'Adamdighi', 'Santahar', '5891', 'রাজশাহী', 'বগুড়া', 'আদমদীঘি', 'সান্তাহার', '5891', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2814, 'Rajshahi', 'Bogura', 'Bogura Sadar', 'Bogura Canttonment', '5801', 'রাজশাহী', 'বগুড়া', 'বগুড়া সদর', 'বগুড়া সেনানিবাস', '5801', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2815, 'Rajshahi', 'Bogura', 'Bogura Sadar', 'Bogura Sadar', '5800', 'রাজশাহী', 'বগুড়া', 'বগুড়া সদর', 'বগুড়া সদর', '5800', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2816, 'Rajshahi', 'Bogura', 'Dhunat', 'Dhunat', '5850', 'রাজশাহী', 'বগুড়া', 'ধুনট', 'ধুনট', '5850', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2817, 'Rajshahi', 'Bogura', 'Dhunat', 'Gosaibari', '5851', 'রাজশাহী', 'বগুড়া', 'ধুনট', 'গোসাইবাড়ি', '5851', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2818, 'Rajshahi', 'Bogura', 'Dupchanchia', 'Dupchanchia', '5880', 'রাজশাহী', 'বগুড়া', 'দুপচাঁচিয়া', 'দুপচাঁচিয়া', '5880', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2819, 'Rajshahi', 'Bogura', 'Dupchachia', 'Talora', '5881', 'রাজশাহী', 'বগুড়া', 'দুপচাঁচিয়া', 'তালোড়া', '5881', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2820, 'Rajshahi', 'Bogura', 'Gabtoli', '-', '5820', 'রাজশাহী', 'বগুড়া', 'গাবতলী', 'গাবতলী', '5820', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2821, 'Rajshahi', 'Bogura', 'Gabtoli', 'Sukhanpukur', '5821', 'রাজশাহী', 'বগুড়া', 'গাবতলী', 'সুখানপুকুর', '5821', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2822, 'Rajshahi', 'Bogura', 'Kahalu', 'Kahalu', '5870', 'রাজশাহী', 'বগুড়া', 'কাহালু', 'কাহালু', '5870', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2823, 'Rajshahi', 'Bogura', 'Nandigram', 'Nandigram', '5860', 'রাজশাহী', 'বগুড়া', 'নন্দীগ্রাম', 'নন্দীগ্রাম', '5860', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2824, 'Rajshahi', 'Bogura', 'Sariakandi', 'Chandan Baisha', '5831', 'রাজশাহী', 'বগুড়া', 'সারিয়াকান্দি', 'চন্দন বাইশা', '5831', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2825, 'Rajshahi', 'Bogura', 'Sariakandi', 'Sariakandi', '5830', 'রাজশাহী', 'বগুড়া', 'সারিয়াকান্দি', 'সারিয়াকান্দি', '5830', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2826, 'Rajshahi', 'Bogura', 'Sherpur', 'Chandaikona', '5841', 'রাজশাহী', 'বগুড়া', 'শেরপুর', 'চান্দাইকোনা', '5841', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2827, 'Rajshahi', 'Bogura', 'Sherpur', 'Palli Unnyan Accadem', '5842', 'রাজশাহী', 'বগুড়া', 'শেরপুর', 'পল্লী উন্নয়ন একাডেমী', '5842', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2828, 'Rajshahi', 'Bogura', 'Sherpur', 'Sherpur', '5840', 'রাজশাহী', 'বগুড়া', 'শেরপুর', 'শেরপুর', '5840', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2829, 'Rajshahi', 'Bogura', 'Shibganj', 'Shibganj', '5810', 'রাজশাহী', 'বগুড়া', 'শিবগঞ্জ', 'শিবগঞ্জ', '5810', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2830, 'Rajshahi', 'Bogura', 'Sonatola', 'Sonatola', '5826', 'রাজশাহী', 'বগুড়া', 'সোনাতলা', 'সোনাতলা', '5826', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2831, 'Rajshahi', 'Chapai Nawabganj', 'Bholahat', 'Bholahat', '6330', 'রাজশাহী', 'চাঁপাইনবাবগঞ্জ', 'ভোলাহাট', 'ভোলাহাট', '6330', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2832, 'Rajshahi', 'Chapai Nawabganj', 'Chapai Nawabganj Sadar', 'Amnura', '6303', 'রাজশাহী', 'চাঁপাইনবাবগঞ্জ', 'চাঁপাইনবাবগঞ্জ সদর', 'আমনুরা', '6303', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2833, 'Rajshahi', 'Chapai Nawabganj', 'Chapai Nawabganj Sadar', 'Chapai Nawabganj Sadar', '6300', 'রাজশাহী', 'চাঁপাইনবাবগঞ্জ', 'চাঁপাইনবাবগঞ্জ সদর', 'চাঁপাইনবাবগঞ্জ সদর', '6300', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2834, 'Rajshahi', 'Chapai Nawabganj', 'Chapai Nawabganj Sadar', 'Rajarampur', '6301', 'রাজশাহী', 'চাঁপাইনবাবগঞ্জ', 'চাঁপাইনবাবগঞ্জ সদর', 'রাজারামপুর', '6301', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2835, 'Rajshahi', 'Chapai Nawabganj', 'Chapai Nawabganj Sadar', 'Ramchandrapur', '6302', 'রাজশাহী', 'চাঁপাইনবাবগঞ্জ', 'চাঁপাইনবাবগঞ্জ সদর', 'রামচন্দ্রপুর', '6302', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2836, 'Rajshahi', 'Chapai Nawabganj', 'Nachol', 'Mandumala', '6311', 'রাজশাহী', 'চাঁপাইনবাবগঞ্জ', 'নাচোল', 'মন্ডুমালা', '6311', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2837, 'Rajshahi', 'Chapai Nawabganj', 'Nachol', 'Nachol', '6310', 'রাজশাহী', 'চাঁপাইনবাবগঞ্জ', 'নাচোল', 'নাচোল', '6310', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2838, 'Rajshahi', 'Chapai Nawabganj', 'Rohanpur', 'Gomashtapur', '6321', 'রাজশাহী', 'চাঁপাইনবাবগঞ্জ', 'রোহনপুর', 'গোমস্তাপুর', '6321', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2839, 'Rajshahi', 'Chapai Nawabganj', 'Rohanpur', 'Rohanpur', '6320', 'রাজশাহী', 'চাঁপাইনবাবগঞ্জ', 'রোহনপুর', 'রোহনপুর', '6320', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2840, 'Rajshahi', 'Chapai Nawabganj', 'Shibganj U.P.O', 'Kansart', '6341', 'রাজশাহী', 'চাঁপাইনবাবগঞ্জ', 'শিবগঞ্জ ইউপিও', 'কনসার্ট', '6341', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2841, 'Rajshahi', 'Chapai Nawabganj', 'Shibganj U.P.O', 'Manaksha', '6342', 'রাজশাহী', 'চাঁপাইনবাবগঞ্জ', 'শিবগঞ্জ ইউপিও', 'মনাকষা', '6342', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2842, 'Rajshahi', 'Chapai Nawabganj', 'Shibganj U.P.O', 'Shibganj U.P.O', '6340', 'রাজশাহী', 'চাঁপাইনবাবগঞ্জ', 'শিবগঞ্জ ইউপিও', 'শিবগঞ্জ ইউপিও', '6340', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2843, 'Rajshahi', 'Joypurhat', 'Akkelpur', 'Akklepur', '5940', 'রাজশাহী', 'জয়পুরহাট', 'আক্কেলপুর', 'আক্কেলপুর', '5940', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2844, 'Rajshahi', 'Joypurhat', 'Akkelpur', 'jamalganj', '5941', 'রাজশাহী', 'জয়পুরহাট', 'আক্কেলপুর', 'জামালগঞ্জ', '5941', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2845, 'Rajshahi', 'Joypurhat', 'Akkelpur', 'Tilakpur', '5942', 'রাজশাহী', 'জয়পুরহাট', 'আক্কেলপুর', 'তিলকপুর', '5942', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2846, 'Rajshahi', 'Joypurhat', 'Joypurhat Sadar', 'Joypurhat Sadar', '5900', 'রাজশাহী', 'জয়পুরহাট', 'জয়পুরহাট সদর', 'জয়পুরহাট সদর', '5900', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2847, 'Rajshahi', 'Joypurhat', 'kalai', 'kalai', '5930', 'রাজশাহী', 'জয়পুরহাট', 'কালাই', 'কালাই', '5930', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2848, 'Rajshahi', 'Joypurhat', 'Khetlal', 'Khetlal', '5920', 'রাজশাহী', 'জয়পুরহাট', 'ক্ষেতলাল', 'ক্ষেতলাল', '5920', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2849, 'Rajshahi', 'Joypurhat', 'panchbibi', 'Panchbibi', '5910', 'রাজশাহী', 'জয়পুরহাট', 'পাঁচবিবি', 'পাঁচবিবি', '5910', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2850, 'Rajshahi', 'Naogaon', 'Ahsanganj', 'Ahsanganj', '6596', 'রাজশাহী', 'নওগাঁ', 'আহসানগঞ্জ', 'আহসানগঞ্জ', '6596', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2851, 'Rajshahi', 'Naogaon', 'Ahsanganj', 'Bandai', '6597', 'রাজশাহী', 'নওগাঁ', 'আহসানগঞ্জ', 'বান্দাই', '6597', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2852, 'Rajshahi', 'Naogaon', 'Badalgachhi', 'Badalgachhi', '6570', 'রাজশাহী', 'নওগাঁ', 'বদলগাছী', 'বদলগাছী', '6570', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2853, 'Rajshahi', 'Naogaon', 'Dhamuirhat', 'Dhamuirhat', '6580', 'রাজশাহী', 'নওগাঁ', 'ধামুইরহাট', 'ধামুইরহাট', '6580', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2854, 'Rajshahi', 'Naogaon', 'Mahadebpur', 'Mahadebpur', '6530', 'রাজশাহী', 'নওগাঁ', 'মহাদেবপুর', 'মহাদেবপুর', '6530', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2855, 'Rajshahi', 'Naogaon', 'Naogaon Sadar', 'Naogaon Sadar', '6500', 'রাজশাহী', 'নওগাঁ', 'নওগাঁ সদর', 'নওগাঁ সদর', '6500', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2856, 'Rajshahi', 'Naogaon', 'Niamatpur', 'Niamatpur', '6520', 'রাজশাহী', 'নওগাঁ', 'নিয়ামতপুর', 'নিয়ামতপুর', '6520', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2857, 'Rajshahi', 'Naogaon', 'Nitpur', 'Nitpur', '6550', 'রাজশাহী', 'নওগাঁ', 'নিতপুর', 'নিতপুর', '6550', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2858, 'Rajshahi', 'Naogaon', 'Nitpur', 'Panguria', '6552', 'রাজশাহী', 'নওগাঁ', 'নিতপুর', 'পঙ্গুরিয়া', '6552', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2859, 'Rajshahi', 'Naogaon', 'Nitpur', 'Porsa', '6551', 'রাজশাহী', 'নওগাঁ', 'নিতপুর', 'পরসা', '6551', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2860, 'Rajshahi', 'Naogaon', 'Patnitala', 'Patnitala', '6540', 'রাজশাহী', 'নওগাঁ', 'পত্নীতলা', 'পত্নীতলা', '6540', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2861, 'Rajshahi', 'Naogaon', 'Prasadpur', 'Balihar', '6512', 'রাজশাহী', 'নওগাঁ', 'প্রসাদপুর', 'বলিহারের', '6512', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2862, 'Rajshahi', 'Naogaon', 'Prasadpur', 'Manda', '6511', 'রাজশাহী', 'নওগাঁ', 'প্রসাদপুর', 'মান্দা', '6511', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2863, 'Rajshahi', 'Naogaon', 'Prasadpur', 'Prasadpur', '6510', 'রাজশাহী', 'নওগাঁ', 'প্রসাদপুর', 'প্রসাদপুর', '6510', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2864, 'Rajshahi', 'Naogaon', 'Raninagar', 'Kashimpur', '6591', 'রাজশাহী', 'নওগাঁ', 'রানীনগর', 'কাশিমপুর', '6591', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2865, 'Rajshahi', 'Naogaon', 'Raninagar', 'Raninagar', '6590', 'রাজশাহী', 'নওগাঁ', 'রানীনগর', 'রানীনগর', '6590', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2866, 'Rajshahi', 'Naogaon', 'Sapahar', 'Moduhil', '6561', 'রাজশাহী', 'নওগাঁ', 'সাপাহার', 'মদুহিল', '6561', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2867, 'Rajshahi', 'Naogaon', 'Sapahar', 'Sapahar', '6560', 'রাজশাহী', 'নওগাঁ', 'সাপাহার', 'সাপাহার', '6560', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2868, 'Rajshahi', 'Natore', 'Gopalpur UPO', 'Abdulpur', '6422', 'রাজশাহী', 'নাটোর', 'গোপালপুর ইউপিও', 'আব্দুলপুর', '6422', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2869, 'Rajshahi', 'Natore', 'Gopalpur UPO', 'Gopalpur U.P.O', '6420', 'রাজশাহী', 'নাটোর', 'গোপালপুর ইউপিও', 'গোপালপুর ইউপিও', '6420', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2870, 'Rajshahi', 'Natore', 'Gopalpur UPO', 'Lalpur S.O', '6421', 'রাজশাহী', 'নাটোর', 'গোপালপুর ইউপিও', 'লালপুর এস.ও', '6421', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2871, 'Rajshahi', 'Natore', 'Harua', 'Baraigram', '6432', 'রাজশাহী', 'নাটোর', 'হারুয়া', 'বড়াইগ্রামে', '6432', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2872, 'Rajshahi', 'Natore', 'Harua', 'Dayarampur', '6431', 'রাজশাহী', 'নাটোর', 'হারুয়া', 'দয়ারামপুর', '6431', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2873, 'Rajshahi', 'Natore', 'Harua', 'Harua', '6430', 'রাজশাহী', 'নাটোর', 'হারুয়া', 'হারুয়া', '6430', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2874, 'Rajshahi', 'Natore', 'Hatgurudaspur', 'Hatgurudaspur', '6440', 'রাজশাহী', 'নাটোর', 'হাতগুরুদাসপুর', 'হাতগুরুদাসপুর', '6440', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2875, 'Rajshahi', 'Natore', 'Laxman', 'Laxman', '6410', 'রাজশাহী', 'নাটোর', 'লক্ষ্মণ', 'লক্ষ্মণ', '6410', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2876, 'Rajshahi', 'Natore', 'Natore Sadar', 'Baiddyabal Gharia', '6402', 'রাজশাহী', 'নাটোর', 'নাটোর সদর', 'বাইদ্দ্যাবল ঘরিয়া', '6402', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2877, 'Rajshahi', 'Natore', 'Natore Sadar', 'Digapatia', '6401', 'রাজশাহী', 'নাটোর', 'নাটোর সদর', 'দিঘাপাতিয়া', '6401', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2878, 'Rajshahi', 'Natore', 'Natore Sadar', 'Madhnagar', '6403', 'রাজশাহী', 'নাটোর', 'নাটোর সদর', 'মাধনগর', '6403', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2879, 'Rajshahi', 'Natore', 'Natore Sadar', 'Natore Sadar', '6400', 'রাজশাহী', 'নাটোর', 'নাটোর সদর', 'নাটোর সদর', '6400', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2880, 'Rajshahi', 'Natore', 'Singra', 'Singra', '6450', 'রাজশাহী', 'নাটোর', 'সিংড়া', 'সিংড়া', '6450', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2881, 'Rajshahi', 'Pabna', 'Banwarinagar', 'Banwarinagar', '6650', 'রাজশাহী', 'পাবনা', 'বানওয়ারীনগর', 'বানওয়ারীনগর', '6650', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2882, 'Rajshahi', 'Pabna', 'Bera', 'Bera', '6680', 'রাজশাহী', 'পাবনা', 'বেড়া', 'বেড়া', '6680', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2883, 'Rajshahi', 'Pabna', 'Bera', 'Kashinathpur', '6682', 'রাজশাহী', 'পাবনা', 'বেড়া', 'কাশিনাথপুর', '6682', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2884, 'Rajshahi', 'Pabna', 'Bera', 'Nakalia', '6681', 'রাজশাহী', 'পাবনা', 'বেড়া', 'নাকালিয়া', '6681', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2885, 'Rajshahi', 'Pabna', 'Bera', 'Puran Bharenga', '6683', 'রাজশাহী', 'পাবনা', 'বেড়া', 'পুরান ভারেঙ্গা', '6683', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2886, 'Rajshahi', 'Pabna', 'Bhangura', 'Bhangura', '6640', 'রাজশাহী', 'পাবনা', 'ভাঙ্গুরা', 'ভাঙ্গুরা', '6640', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2887, 'Rajshahi', 'Pabna', 'Chatmohar', 'Chatmohar', '6630', 'রাজশাহী', 'পাবনা', 'চাটমোহর', 'চাটমোহর', '6630', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2888, 'Rajshahi', 'Pabna', 'Atghoria', 'Atghoria', '6610', 'রাজশাহী', 'পাবনা', 'দেবোত্তর', 'দেবোত্তর', '6610', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2889, 'Rajshahi', 'Pabna', 'Ishwardi', 'Dhapari', '6621', 'রাজশাহী', 'পাবনা', 'ঈশ্বরদী', 'ধাপারী', '6621', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2890, 'Rajshahi', 'Pabna', 'Ishwardi', 'Ishwardi', '6620', 'রাজশাহী', 'পাবনা', 'ঈশ্বরদী', 'ঈশ্বরদী', '6620', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2891, 'Rajshahi', 'Pabna', 'Ishwardi', 'Pakshi', '6622', 'রাজশাহী', 'পাবনা', 'ঈশ্বরদী', 'পাকশী', '6622', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2892, 'Rajshahi', 'Pabna', 'Ishwardi', 'Rajapur', '6623', 'রাজশাহী', 'পাবনা', 'ঈশ্বরদী', 'রাজাপুর', '6623', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2893, 'Rajshahi', 'Pabna', 'Pabna Sadar', 'Hamayetpur', '6602', 'রাজশাহী', 'পাবনা', 'পাবনা সদর', 'হেমায়েতপুর', '6602', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2894, 'Rajshahi', 'Pabna', 'Pabna Sadar', 'Kaliko Cotton Mills', '6601', 'রাজশাহী', 'পাবনা', 'পাবনা সদর', 'কালিকো কটন মিলস', '6601', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2895, 'Rajshahi', 'Pabna', 'Pabna Sadar', 'Pabna Sadar', '6600', 'রাজশাহী', 'পাবনা', 'পাবনা সদর', 'পাবনা সদর', '6600', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2896, 'Rajshahi', 'Pabna', 'Sathia', 'Sathia', '6670', 'রাজশাহী', 'পাবনা', 'সাঁথিয়া', 'সাঁথিয়া', '6670', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2897, 'Rajshahi', 'Pabna', 'Sujanagar', 'Sagarkandi', '6661', 'রাজশাহী', 'পাবনা', 'সুজানগর', 'সাগরকান্দি', '6661', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2898, 'Rajshahi', 'Pabna', 'Sujanagar', 'Sujanagar', '6660', 'রাজশাহী', 'পাবনা', 'সুজানগর', 'সুজানগর', '6660', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2899, 'Rajshahi', 'Rajshahi', 'Bagha', 'Arani', '6281', 'রাজশাহী', 'রাজশাহী', 'বাঘা', 'আড়ানী', '6281', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2900, 'Rajshahi', 'Rajshahi', 'Bagha', 'Bagha', '6280', 'রাজশাহী', 'রাজশাহী', 'বাঘা', 'বাঘা', '6280', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2901, 'Rajshahi', 'Rajshahi', 'Bagmara', 'Bhabaniganj', '6250', 'রাজশাহী', 'রাজশাহী', 'ভবানীগঞ্জ', 'ভবানীগঞ্জ', '6250', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2902, 'Rajshahi', 'Rajshahi', 'Bagmara', 'Taharpur', '6251', 'রাজশাহী', 'রাজশাহী', 'ভবানীগঞ্জ', 'তাহারপুর', '6251', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2903, 'Rajshahi', 'Rajshahi', 'Charghat', 'Charghat', '6270', 'রাজশাহী', 'রাজশাহী', 'চারঘাট', 'চারঘাট', '6270', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2904, 'Rajshahi', 'Rajshahi', 'Charghat', 'Sarda', '6271', 'রাজশাহী', 'রাজশাহী', 'চারঘাট', 'সারদা', '6271', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2905, 'Rajshahi', 'Rajshahi', 'Durgapur', 'Durgapur', '6240', 'রাজশাহী', 'রাজশাহী', 'দুর্গাপুর', 'দুর্গাপুর', '6240', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2906, 'Rajshahi', 'Rajshahi', 'Godagari', 'Godagari', '6290', 'রাজশাহী', 'রাজশাহী', 'গোদাগাড়ী', 'গোদাগাড়ী', '6290', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2907, 'Rajshahi', 'Rajshahi', 'Godagari', 'Premtoli', '6291', 'রাজশাহী', 'রাজশাহী', 'গোদাগাড়ী', 'প্রেমতলী', '6291', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2908, 'Rajshahi', 'Rajshahi', 'Khod Mohanpur', 'Khodmohanpur', '6220', 'রাজশাহী', 'রাজশাহী', 'খোদমোহনপুর', 'খোদমোহনপুর', '6220', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2909, 'Rajshahi', 'Rajshahi', 'Lalitganj', 'Lalitganj', '6210', 'রাজশাহী', 'রাজশাহী', 'দর্শনপাড়া', 'দর্শনপাড়া', '6210', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2910, 'Rajshahi', 'Rajshahi', 'Lalitganj', 'Rajshahi Sugar Mills', '6211', 'রাজশাহী', 'রাজশাহী', 'লালিতগঞ্জ', 'রাজশাহী চিনিকল', '6211', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2911, 'Rajshahi', 'Rajshahi', 'Lalitganj', 'Shyampur', '6212', 'রাজশাহী', 'রাজশাহী', 'লালিতগঞ্জ', 'শ্যামপুর', '6212', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2912, 'Rajshahi', 'Rajshahi', 'Putia', 'Putia', '6260', 'রাজশাহী', 'রাজশাহী', 'পুঠিয়া', 'পুঠিয়া', '6260', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2913, 'Rajshahi', 'Rajshahi', 'Rajshahi Sadar', 'Binodpur Bazar', '6206', 'রাজশাহী', 'রাজশাহী', 'রাজশাহী সদর', 'বিনোদপুর বাজার', '6206', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2914, 'Rajshahi', 'Rajshahi', 'Rajshahi Sadar', 'Ghuramara', '6100', 'রাজশাহী', 'রাজশাহী', 'রাজশাহী সদর', 'ঘুড়ামারা', '6100', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2915, 'Rajshahi', 'Rajshahi', 'Rajshahi Sadar', 'Kazla', '6204', 'রাজশাহী', 'রাজশাহী', 'রাজশাহী সদর', 'কাজলা', '6204', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2916, 'Rajshahi', 'Rajshahi', 'Rajshahi Sadar', 'Rajshahi Canttonment', '6202', 'রাজশাহী', 'রাজশাহী', 'রাজশাহী সদর', 'রাজশাহী সেনানিবাস', '6202', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2917, 'Rajshahi', 'Rajshahi', 'Rajshahi Sadar', 'Rajshahi Court', '6201', 'রাজশাহী', 'রাজশাহী', 'রাজশাহী সদর', 'রাজশাহী কোর্ট', '6201', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2918, 'Rajshahi', 'Rajshahi', 'Rajshahi Sadar', 'Rajshahi Sadar', '6000', 'রাজশাহী', 'রাজশাহী', 'রাজশাহী সদর', 'রাজশাহী সদর', '6000', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2919, 'Rajshahi', 'Rajshahi', 'Rajshahi Sadar', 'Rajshahi University', '6205', 'রাজশাহী', 'রাজশাহী', 'রাজশাহী সদর', 'রাজশাহী বিশ্ববিদ্যালয়', '6205', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2920, 'Rajshahi', 'Rajshahi', 'Rajshahi Sadar', 'Sapura', '6203', 'রাজশাহী', 'রাজশাহী', 'রাজশাহী সদর', 'সাপুরা', '6203', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2921, 'Rajshahi', 'Rajshahi', 'Tanor', 'Tanor', '6230', 'রাজশাহী', 'রাজশাহী', 'তানোরে', 'তানোরে', '6230', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2922, 'Rajshahi', 'Sirajganj', 'Baiddya Jam Toil', 'Baiddya Jam Toil', '6730', 'রাজশাহী', 'সিরাজগঞ্জ', 'বাইদ্দ্যা জ্যাম তৈল', 'বাইদ্দ্যা জ্যাম তৈল', '6730', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2923, 'Rajshahi', 'Sirajganj', 'Belkuchi', 'Belkuchi', '6740', 'রাজশাহী', 'সিরাজগঞ্জ', 'বেলকুচি', 'বেলকুচি', '6740', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2924, 'Rajshahi', 'Sirajganj', 'Belkuchi', 'Enayetpur', '6751', 'রাজশাহী', 'সিরাজগঞ্জ', 'বেলকুচি', 'এনায়েতপুর', '6751', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2925, 'Rajshahi', 'Sirajganj', 'Belkuchi', 'Rajapur', '6742', 'রাজশাহী', 'সিরাজগঞ্জ', 'বেলকুচি', 'রাজাপুর', '6742', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2926, 'Rajshahi', 'Sirajganj', 'Belkuchi', 'Sohagpur', '6741', 'রাজশাহী', 'সিরাজগঞ্জ', 'বেলকুচি', 'সোহাগপুর', '6741', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2927, 'Rajshahi', 'Sirajganj', 'Belkuchi', 'Sthal', '6752', 'রাজশাহী', 'সিরাজগঞ্জ', 'বেলকুচি', 'স্থল', '6752', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2928, 'Rajshahi', 'Sirajganj', 'Dhangora', 'Dhangora', '6720', 'রাজশাহী', 'সিরাজগঞ্জ', 'ধানগড়া', 'ধানগড়া', '6720', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2929, 'Rajshahi', 'Sirajganj', 'Dhangora', 'Malonga', '6721', 'রাজশাহী', 'সিরাজগঞ্জ', 'ধানগড়া', 'মালঙ্গা', '6721', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2930, 'Rajshahi', 'Sirajganj', 'Kazipur', 'Gandail', '6712', 'রাজশাহী', 'সিরাজগঞ্জ', 'কাজীপুর', 'গান্ধাইল', '6712', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2931, 'Rajshahi', 'Sirajganj', 'Kazipur', 'Kazipur', '6710', 'রাজশাহী', 'সিরাজগঞ্জ', 'কাজীপুর', 'কাজীপুর', '6710', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2932, 'Rajshahi', 'Sirajganj', 'Kazipur', 'Shuvgachha', '6711', 'রাজশাহী', 'সিরাজগঞ্জ', 'কাজীপুর', 'শুভগাছা', '6711', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2933, 'Rajshahi', 'Sirajganj', 'Shahjadpur', 'Jamirta', '6772', 'রাজশাহী', 'সিরাজগঞ্জ', 'শাহজাদপুর', 'জামিরটা', '6772', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2934, 'Rajshahi', 'Sirajganj', 'Shahjadpur', 'Kaijuri', '6773', 'রাজশাহী', 'সিরাজগঞ্জ', 'শাহজাদপুর', 'কৈজুরী', '6773', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2935, 'Rajshahi', 'Sirajganj', 'Shahjadpur', 'Porjana', '6771', 'রাজশাহী', 'সিরাজগঞ্জ', 'শাহজাদপুর', 'পরজানা', '6771', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2936, 'Rajshahi', 'Sirajganj', 'Shahjadpur', 'Shahjadpur', '6770', 'রাজশাহী', 'সিরাজগঞ্জ', 'শাহজাদপুর', 'শাহজাদপুর', '6770', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2937, 'Rajshahi', 'Sirajganj', 'Sirajganj Sadar', 'Raipur', '6701', 'রাজশাহী', 'সিরাজগঞ্জ', 'সিরাজগঞ্জ সদর', 'রায়পুর', '6701', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2938, 'Rajshahi', 'Sirajganj', 'Sirajganj Sadar', 'Rashidabad', '6702', 'রাজশাহী', 'সিরাজগঞ্জ', 'সিরাজগঞ্জ সদর', 'রাশিদাবাদ', '6702', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2939, 'Rajshahi', 'Sirajganj', 'Sirajganj Sadar', 'Sirajganj Sadar', '6700', 'রাজশাহী', 'সিরাজগঞ্জ', 'সিরাজগঞ্জ সদর', 'সিরাজগঞ্জ সদর', '6700', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2940, 'Rajshahi', 'Sirajganj', 'Tarash', 'Tarash', '6780', 'রাজশাহী', 'সিরাজগঞ্জ', 'তাড়াশ', 'তাড়াশ', '6780', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2941, 'Rajshahi', 'Sirajganj', 'Ullapara', 'Lahiri Mohanpur', '6762', 'রাজশাহী', 'সিরাজগঞ্জ', 'উল্লাপাড়া', 'লাহিড়ী মোহনপুর', '6762', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2942, 'Rajshahi', 'Sirajganj', 'Ullapara', 'Salap', '6763', 'রাজশাহী', 'সিরাজগঞ্জ', 'উল্লাপাড়া', 'সালাপ', '6763', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2943, 'Rajshahi', 'Sirajganj', 'Ullapara', 'Ullapara', '6760', 'রাজশাহী', 'সিরাজগঞ্জ', 'উল্লাপাড়া', 'উল্লাপাড়া', '6760', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2944, 'Rajshahi', 'Sirajganj', 'Ullapara', 'Ullapara R.S', '6761', 'রাজশাহী', 'সিরাজগঞ্জ', 'উল্লাপাড়া', 'উল্লাপাড়া R.S', '6761', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2945, 'Rajshahi', 'Sirajganj', 'Kamarkhanda', 'Rasulpur', '6730', 'রাজশাহী', 'সিরাজগঞ্জ', 'কামারখন্দ', 'রসুলপুর', '6730', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2946, 'Barishal', 'Barguna', 'Amtali', 'Amtali', '8710', 'বরিশাল ', 'বরগুনা', 'আমতলী', 'আমতলী', '8710', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2947, 'Barishal', 'Barguna', 'Bamna', 'Bamna', '8730', 'বরিশাল ', 'বরগুনা', 'বামনা', 'বামনা', '8730', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2948, 'Barishal', 'Barguna', 'Barguna Sadar', 'Barguna Sadar', '8700', 'বরিশাল ', 'বরগুনা', 'বরগুনা সদর', 'বরগুনা সদর', '8700', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2949, 'Barishal', 'Barguna', 'Barguna Sadar', 'Nali Bandar', '8701', 'বরিশাল ', 'বরগুনা', 'বরগুনা সদর', 'নালি বান্দর', '8701', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2950, 'Barishal', 'Barguna', 'Betagi', 'Betagi', '8740', 'বরিশাল ', 'বরগুনা', 'বেতাগী', 'বেতাগী', '8740', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2951, 'Barishal', 'Barguna', 'Betagi', 'Darul Ulam', '8741', 'বরিশাল ', 'বরগুনা', 'বেতাগী', 'দারুল উলাম', '8741', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2952, 'Barishal', 'Barguna', 'Patharghata', 'Kakchira', '8721', 'বরিশাল ', 'বরগুনা', 'পাথরঘাটা', 'কাকচিরা', '8721', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2953, 'Barishal', 'Barguna', 'Patharghata', 'Patharghata', '8720', 'বরিশাল ', 'বরগুনা', 'পাথরঘাটা', 'পাথরঘাটা', '8720', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2954, 'Barishal', 'Barishal', 'Agailzhara', 'Agailzhara', '8240', 'বরিশাল ', 'বরিশাল', 'আগাইলঝাড়া', 'আগাইলঝাড়া', '8240', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2955, 'Barishal', 'Barishal', 'Agailzhara', 'Gaila', '8241', 'বরিশাল ', 'বরিশাল', 'আগাইলঝাড়া', 'গায়লা', '8241', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2956, 'Barishal', 'Barishal', 'Agailzhara', 'Paisarhat', '8242', 'বরিশাল ', 'বরিশাল', 'আগাইলঝাড়া', 'পাইসারহাট', '8242', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2957, 'Barishal', 'Barishal', 'Babuganj', 'Babuganj', '8210', 'বরিশাল ', 'বরিশাল', 'বাবুগঞ্জ', 'বাবুগঞ্জ', '8210', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2958, 'Barishal', 'Barishal', 'Babuganj', 'Barishal Cadet', '8216', 'বরিশাল ', 'বরিশাল', 'বাবুগঞ্জ', 'বরিশাল ক্যাডেট', '8216', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2959, 'Barishal', 'Barishal', 'Babuganj', 'Chandpasha', '8212', 'বরিশাল ', 'বরিশাল', 'বাবুগঞ্জ', 'চাঁদপাশা', '8212', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2960, 'Barishal', 'Barishal', 'Babuganj', 'Madhabpasha', '8213', 'বরিশাল ', 'বরিশাল', 'বাবুগঞ্জ', 'মাধবপাশা', '8213', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2961, 'Barishal', 'Barishal', 'Babuganj', 'Nizamuddin College', '8215', 'বরিশাল ', 'বরিশাল', 'বাবুগঞ্জ', 'নিজামুদ্দিন কলেজ', '8215', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2962, 'Barishal', 'Barishal', 'Babuganj', 'Rahamatpur', '8211', 'বরিশাল ', 'বরিশাল', 'বাবুগঞ্জ', 'রহমতপুর', '8211', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2963, 'Barishal', 'Barishal', 'Babuganj', 'Thakur Mallik', '8214', 'বরিশাল ', 'বরিশাল', 'বাবুগঞ্জ', 'ঠাকুর মল্লিক', '8214', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2964, 'Barishal', 'Barishal', 'Barajalia', 'Barajalia', '8260', 'বরিশাল ', 'বরিশাল', 'বড়জালিয়া', 'বড়জালিয়া', '8260', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2965, 'Barishal', 'Barishal', 'Barajalia', 'Osman Manjil', '8261', 'বরিশাল ', 'বরিশাল', 'বড়জালিয়া', 'ওসমান মঞ্জিল', '8261', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2966, 'Barishal', 'Barishal', 'Barishal Sadar', 'Barishal Sadar', '8200', 'বরিশাল ', 'বরিশাল', 'বরিশাল সদর', 'বরিশাল সদর', '8200', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2967, 'Barishal', 'Barishal', 'Barishal Sadar', 'Chandramohon', '8200', 'বরিশাল ', 'বরিশাল', 'বরিশাল সদর', 'চন্দ্রমোহন', '8200', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2968, 'Barishal', 'Barishal', 'Barishal Sadar', 'Bukhainagar', '8201', 'বরিশাল ', 'বরিশাল', 'বরিশাল সদর', 'বুখাইনগর', '8201', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2969, 'Barishal', 'Barishal', 'Barishal Sadar', 'Jaguarhat', '8206', 'বরিশাল ', 'বরিশাল', 'বরিশাল সদর', 'জাগুয়ারহাট', '8206', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2970, 'Barishal', 'Barishal', 'Barishal Sadar', 'Kashipur', '8205', 'বরিশাল ', 'বরিশাল', 'বরিশাল সদর', 'কাশীপুর', '8205', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2971, 'Barishal', 'Barishal', 'Barishal Sadar', 'Patang', '8204', 'বরিশাল ', 'বরিশাল', 'বরিশাল সদর', 'পাতং', '8204', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2972, 'Barishal', 'Barishal', 'Barishal Sadar', 'Saheberhat', '8202', 'বরিশাল ', 'বরিশাল', 'বরিশাল সদর', 'সাহেবেরহাট', '8202', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2973, 'Barishal', 'Barishal', 'Barishal Sadar', 'Sugandia', '8203', 'বরিশাল ', 'বরিশাল', 'বরিশাল সদর', 'সুগান্দিয়া', '8203', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2974, 'Barishal', 'Barishal', 'Gouranadi', 'Batajor', '8233', 'বরিশাল ', 'বরিশাল', 'গৌরনাদি', 'বাতাজোর', '8233', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2975, 'Barishal', 'Barishal', 'Gouranadi', 'Gouranadi', '8230', 'বরিশাল ', 'বরিশাল', 'গৌরনাদি', 'গৌরনাদি', '8230', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2976, 'Barishal', 'Barishal', 'Gouranadi', 'Kashemabad', '8232', 'বরিশাল ', 'বরিশাল', 'গৌরনাদি', 'কাশেমবাদ', '8232', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2977, 'Barishal', 'Barishal', 'Gouranadi', 'Tarki Bandar', '8231', 'বরিশাল ', 'বরিশাল', 'গৌরনাদি', 'তারকি বান্দর', '8231', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2978, 'Barishal', 'Barishal', 'Mahendiganj', 'Langutia', '8274', 'বরিশাল ', 'বরিশাল', 'মহেন্দিগঞ্জ', 'লাঙ্গুটিয়া', '8274', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2979, 'Barishal', 'Barishal', 'Mahendiganj', 'Laskarpur', '8271', 'বরিশাল ', 'বরিশাল', 'মহেন্দিগঞ্জ', 'লস্করপুর', '8271', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2980, 'Barishal', 'Barishal', 'Mahendiganj', 'Mahendiganj', '8270', 'বরিশাল ', 'বরিশাল', 'মহেন্দিগঞ্জ', 'মহেন্দিগঞ্জ', '8270', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2981, 'Barishal', 'Barishal', 'Mahendiganj', 'Nalgora', '8273', 'বরিশাল ', 'বরিশাল', 'মহেন্দিগঞ্জ', 'নলগোড়া', '8273', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2982, 'Barishal', 'Barishal', 'Mahendiganj', 'Ulania', '8272', 'বরিশাল ', 'বরিশাল', 'মহেন্দিগঞ্জ', 'ইউলানিয়া', '8272', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2983, 'Barishal', 'Barishal', 'Muladi', 'Charkalekhan', '8252', 'বরিশাল ', 'বরিশাল', 'মুলাদী', 'চরকলেখান', '8252', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2984, 'Barishal', 'Barishal', 'Muladi', 'Kazirchar', '8251', 'বরিশাল ', 'বরিশাল', 'মুলাদী', 'কাজিরচর', '8251', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2985, 'Barishal', 'Barishal', 'Muladi', 'Muladi', '8250', 'বরিশাল ', 'বরিশাল', 'মুলাদী', 'মুলাদী', '8250', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2986, 'Barishal', 'Barishal', 'Bakerganj', 'Charamandi', '8281', 'বরিশাল ', 'বরিশাল', 'বাকেরগঞ্জ', 'চরমণ্ডি', '8281', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2987, 'Barishal', 'Barishal', 'Bakerganj', 'kalaskati', '8284', 'বরিশাল ', 'বরিশাল', 'বাকেরগঞ্জ', 'কলাসকাটি', '8284', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2988, 'Barishal', 'Barishal', 'Bakerganj', 'Padri Shibpur', '8282', 'বরিশাল ', 'বরিশাল', 'বাকেরগঞ্জ', 'পাদ্রি শিবপুর', '8282', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2989, 'Barishal', 'Barishal', 'Bakerganj', 'Luxmibardhan', '8280', 'বরিশাল ', 'বরিশাল', 'বাকেরগঞ্জ', 'লাক্সমিবার্দন', '8280', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2990, 'Barishal', 'Barishal', 'Bakerganj', 'Shialguni', '8283', 'বরিশাল ', 'বরিশাল', 'বাকেরগঞ্জ', 'শিয়ালগুনি', '8283', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2991, 'Barishal', 'Barishal', 'Uzirpur', 'Dakuarhat', '8223', 'বরিশাল ', 'বরিশাল', 'উজিরপুর', 'ডাকুয়ারহাট', '8223', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2992, 'Barishal', 'Barishal', 'Uzirpur', 'Dhamura', '8221', 'বরিশাল ', 'বরিশাল', 'উজিরপুর', 'ধামুরা', '8221', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2993, 'Barishal', 'Barishal', 'Uzirpur', 'Jugirkanda', '8222', 'বরিশাল ', 'বরিশাল', 'উজিরপুর', 'জুগিরকান্দা', '8222', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2994, 'Barishal', 'Barishal', 'Uzirpur', 'Shikarpur', '8224', 'বরিশাল ', 'বরিশাল', 'উজিরপুর', 'শিকারপুর', '8224', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2995, 'Barishal', 'Barishal', 'Uzirpur', 'Uzirpur', '8220', 'বরিশাল ', 'বরিশাল', 'উজিরপুর', 'উজিরপুর', '8220', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2996, 'Barishal', 'Bhola', 'Bhola Sadar', 'Bhola Sadar', '8300', 'বরিশাল ', 'ভোলা', 'ভোলা সদর', 'ভোলা সদর', '8300', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2997, 'Barishal', 'Bhola', 'Bhola Sadar', 'Joynagar', '8301', 'বরিশাল ', 'ভোলা', 'ভোলা সদর', 'জয়নগর', '8301', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2998, 'Barishal', 'Bhola', 'Borhanuddin UPO', 'Borhanuddin UPO', '8320', 'বরিশাল ', 'ভোলা', 'বোরহানউদ্দিন ইউপিও', 'বোরহানউদ্দিন ইউপিও', '8320', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(2999, 'Barishal', 'Bhola', 'Borhanuddin UPO', 'Mirzakalu', '8321', 'বরিশাল ', 'ভোলা', 'বোরহানউদ্দিন ইউপিও', 'মির্জাকালু', '8321', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3000, 'Barishal', 'Bhola', 'Charfashion', 'Charfashion', '8340', 'বরিশাল ', 'ভোলা', 'চরফ্যাশন', 'চরফ্যাশন', '8340', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3001, 'Barishal', 'Bhola', 'Charfashion', 'Dularhat', '8341', 'বরিশাল ', 'ভোলা', 'চরফ্যাশন', 'দুলারহাট', '8341', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3002, 'Barishal', 'Bhola', 'Charfashion', 'Keramatganj', '8342', 'বরিশাল ', 'ভোলা', 'চরফ্যাশন', 'কেরামতগঞ্জ', '8342', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3003, 'Barishal', 'Bhola', 'Doulatkhan', 'Doulatkhan', '8310', 'বরিশাল ', 'ভোলা', 'দৌলতখান', 'দৌলতখান', '8310', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3004, 'Barishal', 'Bhola', 'Doulatkhan', 'Hajipur', '8311', 'বরিশাল ', 'ভোলা', 'দৌলতখান', 'হাজিপুর', '8311', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3005, 'Barishal', 'Bhola', 'Hajirhat', 'Hajirhat', '8360', 'বরিশাল ', 'ভোলা', 'হাজিরহাট', 'হাজিরহাট', '8360', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3006, 'Barishal', 'Bhola', 'Hatshoshiganj', 'Hatshoshiganj', '8350', 'বরিশাল ', 'ভোলা', 'হাটশোশিগঞ্জ', 'হাটশোশিগঞ্জ', '8350', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3007, 'Barishal', 'Bhola', 'Lalmohan UPO', 'Daurihat', '8331', 'বরিশাল ', 'ভোলা', 'লালমোহন ইউপিও', 'দৌরীহাট', '8331', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3008, 'Barishal', 'Bhola', 'Lalmohan UPO', 'Gazaria', '8332', 'বরিশাল ', 'ভোলা', 'লালমোহন ইউপিও', 'গজারিয়া', '8332', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3009, 'Barishal', 'Bhola', 'Lalmohan UPO', 'Lalmohan UPO', '8330', 'বরিশাল ', 'ভোলা', 'লালমোহন ইউপিও', 'লালমোহন ইউপিও', '8330', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3010, 'Barishal', 'Jhalokati', 'Jhalokati Sadar', 'Baukathi', '8402', 'বরিশাল ', 'ঝালকাঠি', 'ঝালকাঠি সদর', 'বাউকাঠি', '8402', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3011, 'Barishal', 'Jhalokati', 'Jhalokati Sadar', 'Gabha', '8403', 'বরিশাল ', 'ঝালকাঠি', 'ঝালকাঠি সদর', 'গাভা', '8403', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3012, 'Barishal', 'Jhalokati', 'Jhalokati Sadar', 'Jhalokati Sadar', '8400', 'বরিশাল ', 'ঝালকাঠি', 'ঝালকাঠি সদর', 'ঝালকাঠি সদর', '8400', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3013, 'Barishal', 'Jhalokati', 'Jhalokati Sadar', 'Nabagram', '8401', 'বরিশাল ', 'ঝালকাঠি', 'ঝালকাঠি সদর', 'নবগ্রাম', '8401', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3014, 'Barishal', 'Jhalokati', 'Jhalokati Sadar', 'Shekherhat', '8404', 'বরিশাল ', 'ঝালকাঠি', 'ঝালকাঠি সদর', 'শেখেরহাট', '8404', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3015, 'Barishal', 'Jhalokati', 'Kathalia', 'Amua', '8431', 'বরিশাল ', 'ঝালকাঠি', 'কাঠালিয়া', 'আমুয়া', '8431', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3016, 'Barishal', 'Jhalokati', 'Kathalia', 'Kathalia', '8430', 'বরিশাল ', 'ঝালকাঠি', 'কাঠালিয়া', 'কাঠালিয়া', '8430', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3017, 'Barishal', 'Jhalokati', 'Kathalia', 'Niamatee', '8432', 'বরিশাল ', 'ঝালকাঠি', 'কাঠালিয়া', 'নিয়ামতি', '8432', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3018, 'Barishal', 'Jhalokati', 'Kathalia', 'Shoulajalia', '8433', 'বরিশাল ', 'ঝালকাঠি', 'কাঠালিয়া', 'শৈলজালিয়া', '8433', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3019, 'Barishal', 'Jhalokati', 'Nalchhiti', 'Beerkathi', '8421', 'বরিশাল ', 'ঝালকাঠি', 'নলছিটি', 'বিয়ারকাঠি', '8421', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3020, 'Barishal', 'Jhalokati', 'Nalchhiti', 'Nalchhiti', '8420', 'বরিশাল ', 'ঝালকাঠি', 'নলছিটি', 'নলছিটি', '8420', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3021, 'Barishal', 'Jhalokati', 'Rajapur', 'Rajapur', '8410', 'বরিশাল ', 'ঝালকাঠি', 'রাজাপুর', 'রাজাপুর', '8410', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3022, 'Barishal', 'Patuakhali', 'Bauphal', 'Bagabandar', '8621', 'বরিশাল ', 'পটুয়াখালী', 'বাউফল', 'বাগবন্দর', '8621', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3023, 'Barishal', 'Patuakhali', 'Bauphal', 'Bauphal', '8620', 'বরিশাল ', 'পটুয়াখালী', 'বাউফল', 'বাউফল', '8620', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3024, 'Barishal', 'Patuakhali', 'Bauphal', 'Birpasha', '8622', 'বরিশাল ', 'পটুয়াখালী', 'বাউফল', 'বীরপাশা', '8622', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3025, 'Barishal', 'Patuakhali', 'Bauphal', 'Kalaia', '8624', 'বরিশাল ', 'পটুয়াখালী', 'বাউফল', 'কালাইয়া', '8624', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3026, 'Barishal', 'Patuakhali', 'Bauphal', 'Kalishari', '8623', 'বরিশাল ', 'পটুয়াখালী', 'বাউফল', 'কালীশারী', '8623', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3027, 'Barishal', 'Patuakhali', 'Dashmina', 'Dashmina', '8630', 'বরিশাল ', 'পটুয়াখালী', 'দশমিনা', 'দশমিনা', '8630', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3028, 'Barishal', 'Patuakhali', 'Galachipa', 'Galachipa', '8640', 'বরিশাল ', 'পটুয়াখালী', 'গলাচিপা', 'গলাচিপা', '8640', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3029, 'Barishal', 'Patuakhali', 'Galachipa', 'Gazipur Bandar', '8641', 'বরিশাল ', 'পটুয়াখালী', 'গলাচিপা', 'গাজীপুর বান্দর', '8641', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3030, 'Barishal', 'Patuakhali', 'Khepupara', 'Khepupara', '8650', 'বরিশাল ', 'পটুয়াখালী', 'খেপুপাড়া', 'খেপুপাড়া', '8650', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3031, 'Barishal', 'Patuakhali', 'Khepupara', 'Mahipur', '8651', 'বরিশাল ', 'পটুয়াখালী', 'খেপুপাড়া', 'মহিপুর', '8651', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3032, 'Barishal', 'Patuakhali', 'Patuakhali Sadar', 'Dumkee', '8602', 'বরিশাল ', 'পটুয়াখালী', 'পটুয়াখালী সদর', 'ডুমকি', '8602', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3033, 'Barishal', 'Patuakhali', 'Patuakhali Sadar', 'Moukaran', '8601', 'বরিশাল ', 'পটুয়াখালী', 'পটুয়াখালী সদর', 'মৌকরন', '8601', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3034, 'Barishal', 'Patuakhali', 'Patuakhali Sadar', 'Patuakhali Sadar', '8600', 'বরিশাল ', 'পটুয়াখালী', 'পটুয়াখালী সদর', 'পটুয়াখালী সদর', '8600', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3035, 'Barishal', 'Patuakhali', 'Patuakhali Sadar', 'Rahimabad', '8603', 'বরিশাল ', 'পটুয়াখালী', 'পটুয়াখালী সদর', 'রহিমাবাদ', '8603', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3036, 'Barishal', 'Patuakhali', 'Subidkhali', 'Subidkhali', '8610', 'বরিশাল ', 'পটুয়াখালী', 'সুবিদখালী', 'সুবিদখালী', '8610', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3037, 'Barishal', 'Pirojpur', 'Bhandaria', 'Bhandaria', '8550', 'বরিশাল ', 'পিরোজপুর', 'ভান্ডারিয়া', 'ভান্ডারিয়া', '8550', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3038, 'Barishal', 'Pirojpur', 'Bhandaria', 'Dhaoa', '8552', 'বরিশাল ', 'পিরোজপুর', 'ভান্ডারিয়া', 'ধোয়া', '8552', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3039, 'Barishal', 'Pirojpur', 'Bhandaria', 'Kanudashkathi', '8551', 'বরিশাল ', 'পিরোজপুর', 'ভান্ডারিয়া', 'কানুদশকাঠি', '8551', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3040, 'Barishal', 'Pirojpur', 'kaukhali', 'Jolagati', '8513', 'বরিশাল ', 'পিরোজপুর', 'কাউখালী', 'জোলাগাতি', '8513', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3041, 'Barishal', 'Pirojpur', 'kaukhali', 'Joykul', '8512', 'বরিশাল ', 'পিরোজপুর', 'কাউখালী', 'জয়কুল', '8512', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3042, 'Barishal', 'Pirojpur', 'kaukhali', 'Kaukhali', '8510', 'বরিশাল ', 'পিরোজপুর', 'কাউখালী', 'কাউখালী', '8510', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3043, 'Barishal', 'Pirojpur', 'kaukhali', 'Keundia', '8511', 'বরিশাল ', 'পিরোজপুর', 'কাউখালী', 'কেউনিয়া', '8511', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3044, 'Barishal', 'Pirojpur', 'Mathbaria', 'Betmor Natun Hat', '8565', 'বরিশাল ', 'পিরোজপুর', 'মঠবাড়িয়া', 'বেতমোর নাটুন হাট', '8565', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3045, 'Barishal', 'Pirojpur', 'Mathbaria', 'Gulishakhali', '8563', 'বরিশাল ', 'পিরোজপুর', 'মঠবাড়িয়া', 'গুলিশাখালী', '8563', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3046, 'Barishal', 'Pirojpur', 'Mathbaria', 'Halta', '8562', 'বরিশাল ', 'পিরোজপুর', 'মঠবাড়িয়া', 'হালতা', '8562', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3047, 'Barishal', 'Pirojpur', 'Mathbaria', 'Mathbaria', '8560', 'বরিশাল ', 'পিরোজপুর', 'মঠবাড়িয়া', 'মঠবাড়িয়া', '8560', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3048, 'Barishal', 'Pirojpur', 'Mathbaria', 'Shilarganj', '8566', 'বরিশাল ', 'পিরোজপুর', 'মঠবাড়িয়া', 'শিলারগঞ্জ', '8566', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3049, 'Barishal', 'Pirojpur', 'Mathbaria', 'Tiarkhali', '8564', 'বরিশাল ', 'পিরোজপুর', 'মঠবাড়িয়া', 'টিয়ারখালী', '8564', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3050, 'Barishal', 'Pirojpur', 'Mathbaria', 'Tushkhali', '8561', 'বরিশাল ', 'পিরোজপুর', 'মঠবাড়িয়া', 'তুষখালী', '8561', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3051, 'Barishal', 'Pirojpur', 'Nazirpur', 'Nazirpur', '8540', 'বরিশাল ', 'পিরোজপুর', 'নাজিরপুর', 'নাজিরপুর', '8540', '2021-07-21 08:43:24', '2021-07-21 08:43:24');
INSERT INTO `civilinfos` (`id`, `division`, `district`, `thana`, `suboffice`, `postcode`, `division_bn`, `district_bn`, `thana_bn`, `suboffice_bn`, `postcode_bn`, `created_at`, `updated_at`) VALUES
(3052, 'Barishal', 'Pirojpur', 'Nazirpur', 'Sriramkathi', '8541', 'বরিশাল ', 'পিরোজপুর', 'নাজিরপুর', 'শ্রীরামকাঠি', '8541', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3053, 'Barishal', 'Pirojpur', 'Pirojpur Sadar', 'Hularhat', '8501', 'বরিশাল ', 'পিরোজপুর', 'পিরোজপুর সদর', 'হুলারহাট', '8501', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3054, 'Barishal', 'Pirojpur', 'Pirojpur Sadar', 'Parerhat', '8502', 'বরিশাল ', 'পিরোজপুর', 'পিরোজপুর সদর', 'পারেরহাট', '8502', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3055, 'Barishal', 'Pirojpur', 'Pirojpur Sadar', 'Pirojpur Sadar', '8500', 'বরিশাল ', 'পিরোজপুর', 'পিরোজপুর সদর', 'পিরোজপুর সদর', '8500', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3056, 'Barishal', 'Pirojpur', 'Swarupkathi', 'Darus Sunnat', '8521', 'বরিশাল ', 'পিরোজপুর', 'স্বরূপকাঠি', 'দারুস সুন্নাত', '8521', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3057, 'Barishal', 'Pirojpur', 'Swarupkathi', 'Jalabari', '8523', 'বরিশাল ', 'পিরোজপুর', 'স্বরূপকাঠি', 'জালবাড়ি', '8523', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3058, 'Barishal', 'Pirojpur', 'Swarupkathi', 'Kaurikhara', '8522', 'বরিশাল ', 'পিরোজপুর', 'স্বরূপকাঠি', 'কৌরিখারা', '8522', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3059, 'Barishal', 'Pirojpur', 'Swarupkathi', 'Swarupkathi', '8520', 'বরিশাল ', 'পিরোজপুর', 'স্বরূপকাঠি', 'স্বরূপকাঠি', '8520', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3060, 'Barishal', 'Barishal', 'Banaripara', 'Banaripara', '8530', 'বরিশাল ', 'পিরোজপুর', 'বানারীপাড়া', 'বানারীপাড়া', '8530', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3061, 'Barishal', 'Barishal', 'Banaripara', 'Chakhar', '8531', 'বরিশাল ', 'পিরোজপুর', 'বানারীপাড়া', 'চাখার', '8531', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3062, 'Khulna', 'Bagerhat', 'Bagerhat Sadar', 'Bagerhat Sadar', '9300', 'খুলনা', 'বাগেরহাট', 'বাগেরহাট সদর', 'বাগেরহাট সদর', '9300', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3063, 'Khulna', 'Bagerhat', 'Bagerhat Sadar', 'P.C College', '9301', 'খুলনা', 'বাগেরহাট', 'বাগেরহাট সদর', 'পি.সি. কলেজ', '9301', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3064, 'Khulna', 'Bagerhat', 'Bagerhat Sadar', 'Rangdia', '9302', 'খুলনা', 'বাগেরহাট', 'বাগেরহাট সদর', 'রাংদিয়া', '9302', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3065, 'Khulna', 'Bagerhat', 'Chalna Ankorage', 'Chalna Ankorage', '9350', 'খুলনা', 'বাগেরহাট', 'চালনা অ্যাঙ্কোরেজ', 'চালনা অ্যাঙ্কোরেজ', '9350', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3066, 'Khulna', 'Bagerhat', 'Chalna Ankorage', 'Mongla Port', '9351', 'খুলনা', 'বাগেরহাট', 'চালনা অ্যাঙ্কোরেজ', 'মংলা বন্দর', '9351', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3067, 'Khulna', 'Bagerhat', 'Chitalmari', 'Barabaria', '9361', 'খুলনা', 'বাগেরহাট', 'চিতলমারী', 'বড়বাডি়য়া', '9361', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3068, 'Khulna', 'Bagerhat', 'Chitalmari', 'Chitalmari', '9360', 'খুলনা', 'বাগেরহাট', 'চিতলমারী', 'চিতলমারী', '9360', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3069, 'Khulna', 'Bagerhat', 'Fakirhat', 'Bhanganpar Bazar', '9372', 'খুলনা', 'বাগেরহাট', 'ফকিরহাট', 'ভাঙ্গনপার বাজার ', '9372', '2021-07-21 08:43:24', '2021-07-21 08:43:24'),
(3070, 'Khulna', 'Bagerhat', 'Fakirhat', 'Fakirhat', '9370', 'খুলনা', 'বাগেরহাট', 'ফকিরহাট', 'ফকিরহাট', '9370', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3071, 'Khulna', 'Bagerhat', 'Fakirhat', 'Mansa', '9371', 'খুলনা', 'বাগেরহাট', 'ফকিরহাট', 'মানসা', '9371', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3072, 'Khulna', 'Bagerhat', 'Kachua UPO', 'Kachua', '9310', 'খুলনা', 'বাগেরহাট', 'কচুয়া Upo', 'কচুয়া', '9310', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3073, 'Khulna', 'Bagerhat', 'Kachua UPO', 'Sonarkola', '9311', 'খুলনা', 'বাগেরহাট', 'কচুয়া Upo', 'সোনারখোলা ', '9311', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3074, 'Khulna', 'Bagerhat', 'Mollahat', 'Charkulia', '9383', 'খুলনা', 'বাগেরহাট', 'মোল্লাহাট', 'চরকুলিয়া ', '9383', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3075, 'Khulna', 'Bagerhat', 'Mollahat', 'Dariala', '9382', 'খুলনা', 'বাগেরহাট', 'মোল্লাহাট', 'দাড়িয়ালা ', '9382', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3076, 'Khulna', 'Bagerhat', 'Mollahat', 'Kahalpur', '9381', 'খুলনা', 'বাগেরহাট', 'মোল্লাহাট', 'কাহালপুর ', '9381', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3077, 'Khulna', 'Bagerhat', 'Mollahat', 'Mollahat', '9380', 'খুলনা', 'বাগেরহাট', 'মোল্লাহাট', 'মোল্লাহাট', '9380', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3078, 'Khulna', 'Bagerhat', 'Mollahat', 'Nagarkandi', '9384', 'খুলনা', 'বাগেরহাট', 'মোল্লাহাট', 'নগরকান্দি ', '9384', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3079, 'Khulna', 'Bagerhat', 'Mollahat', 'Pak Gangni', '9385', 'খুলনা', 'বাগেরহাট', 'মোল্লাহাট', 'পাক গাংনী', '9385', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3080, 'Khulna', 'Bagerhat', 'Morelganj', 'Morelganj', '9320', 'খুলনা', 'বাগেরহাট', 'মোড়েলগঞ্জ', 'মোড়েলগঞ্জ', '9320', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3081, 'Khulna', 'Bagerhat', 'Morelganj', 'Sannasi Bazar', '9321', 'খুলনা', 'বাগেরহাট', 'মোড়েলগঞ্জ', 'সন্ন্যাসী বাজার', '9321', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3082, 'Khulna', 'Bagerhat', 'Morelganj', 'Teligatee', '9322', 'খুলনা', 'বাগেরহাট', 'মোড়েলগঞ্জ', 'তেলিগাতী', '9322', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3083, 'Khulna', 'Bagerhat', 'Rampal', 'Foylahat', '9341', 'খুলনা', 'বাগেরহাট', 'রামপাল', 'ফয়লাহাট ', '9341', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3084, 'Khulna', 'Bagerhat', 'Rampal', 'Gourambha', '9343', 'খুলনা', 'বাগেরহাট', 'রামপাল', 'গৌরম্ভা', '9343', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3085, 'Khulna', 'Bagerhat', 'Rampal', 'Rampal', '9340', 'খুলনা', 'বাগেরহাট', 'রামপাল', 'রামপাল', '9340', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3086, 'Khulna', 'Bagerhat', 'Rampal', 'Sonatunia', '9342', 'খুলনা', 'বাগেরহাট', 'রামপাল', 'সোনাতুনিয়া', '9342', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3087, 'Khulna', 'Bagerhat', 'Rayenda', 'Rayenda', '9330', 'খুলনা', 'বাগেরহাট', 'রায়েন্দা', 'রায়েন্দা', '9330', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3088, 'Khulna', 'Chuadanga', 'Alamdanga', 'Alamdanga', '7210', 'খুলনা', 'চুয়াডাঙ্গা', 'আলমডাঙ্গা', 'আলমডাঙ্গা', '7210', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3089, 'Khulna', 'Chuadanga', 'Alamdanga', 'Hardi', '7211', 'খুলনা', 'চুয়াডাঙ্গা', 'আলমডাঙ্গা', 'হার্দি', '7211', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3090, 'Khulna', 'Chuadanga', 'Chuadanga Sadar', 'Chuadanga Sadar', '7200', 'খুলনা', 'চুয়াডাঙ্গা', 'চুয়াডাঙ্গা সদর', 'চুয়াডাঙ্গা সদর', '7200', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3091, 'Khulna', 'Chuadanga', 'Chuadanga Sadar', 'Munshiganj', '7201', 'খুলনা', 'চুয়াডাঙ্গা', 'চুয়াডাঙ্গা সদর', 'মুন্সিগঞ্জ', '7201', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3092, 'Khulna', 'Chuadanga', 'Damurhuda', 'Andulbaria', '7222', 'খুলনা', 'চুয়াডাঙ্গা', 'দামুড়হুদা', 'আন্দুলবাড়ীয়া', '7222', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3093, 'Khulna', 'Chuadanga', 'Damurhuda', 'Damurhuda', '7220', 'খুলনা', 'চুয়াডাঙ্গা', 'দামুড়হুদা', 'দামুড়হুদা', '7220', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3094, 'Khulna', 'Chuadanga', 'Damurhuda', 'Darshana', '7221', 'খুলনা', 'চুয়াডাঙ্গা', 'দামুড়হুদা', 'দর্শনা', '7221', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3095, 'Khulna', 'Chuadanga', 'Doulatganj', 'Doulatganj', '7230', 'খুলনা', 'চুয়াডাঙ্গা', 'দৌলতগঞ্জ', 'দৌলতগঞ্জ', '7230', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3096, 'Khulna', 'Jashore', 'Bagharpara', 'Bagharpara', '7470', 'খুলনা', 'যশোর', 'বাঘারপাড়া', 'বাঘারপাড়া', '7470', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3097, 'Khulna', 'Jashore', 'Bagharpara', 'Gouranagar', '7471', 'খুলনা', 'যশোর', 'বাঘারপাড়া', 'গৌড়ানগর ', '7471', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3098, 'Khulna', 'Jashore', 'Chaugachha', 'Chougachha', '7410', 'খুলনা', 'যশোর', 'চৌগাছা', 'চৌগাছা', '7410', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3099, 'Khulna', 'Jashore', 'Jashore Sadar', 'Basundia', '7406', 'খুলনা', 'যশোর', 'যশোর সদর', 'বসুন্দিয়া', '7406', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3100, 'Khulna', 'Jashore', 'Jashore Sadar', 'Chanchra', '7402', 'খুলনা', 'যশোর', 'যশোর সদর', 'চাঞ্চরা ', '7402', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3101, 'Khulna', 'Jashore', 'Jashore Sadar', 'Churamankathi', '7407', 'খুলনা', 'যশোর', 'যশোর সদর', 'চুড়ামনকাঠি', '7407', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3102, 'Khulna', 'Jashore', 'Jashore Sadar', 'Jashore Airbach', '7404', 'খুলনা', 'যশোর', 'যশোর সদর', 'যশোর এয়ারবেস', '7404', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3103, 'Khulna', 'Jashore', 'Jashore Sadar', 'Jashore canttonment', '7403', 'খুলনা', 'যশোর', 'যশোর সদর', 'যশোর ক্যান্টর্মেন্ট ', '7403', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3104, 'Khulna', 'Jashore', 'Jashore Sadar', 'Jashore Sadar', '7400', 'খুলনা', 'যশোর', 'যশোর সদর', 'যশোর সদর', '7400', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3105, 'Khulna', 'Jashore', 'Jashore Sadar', 'Jashore Upa-Shahar', '7401', 'খুলনা', 'যশোর', 'যশোর সদর', 'যশোর ইউপিএ-সাহারের', '7401', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3106, 'Khulna', 'Jashore', 'Jashore Sadar', 'Rupdia', '7405', 'খুলনা', 'যশোর', 'যশোর সদর', 'রূপদিয়া ', '7405', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3107, 'Khulna', 'Jashore', 'Jhikargachha', 'Jhikargachha', '7420', 'খুলনা', 'যশোর', 'ঝিকরগাছা', 'ঝিকরগাছা', '7420', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3108, 'Khulna', 'Jashore', 'Keshabpur', 'Keshobpur', '7450', 'খুলনা', 'যশোর', 'কেশবপুর', 'কেশবপুর', '7450', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3109, 'Khulna', 'Jashore', 'Monirampur', 'Monirampur', '7440', 'খুলনা', 'যশোর', 'মনিরামপুর', 'মনিরামপুর', '7440', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3110, 'Khulna', 'Jashore', 'Noapara', 'Bhugilhat', '7462', 'খুলনা', 'যশোর', 'নোয়াপাড়া', 'ভুগিলহাট ', '7462', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3111, 'Khulna', 'Jashore', 'Noapara', 'Noapara', '7460', 'খুলনা', 'যশোর', 'নোয়াপাড়া', 'নোয়াপাড়া', '7460', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3112, 'Khulna', 'Jashore', 'Noapara', 'Rajghat', '7461', 'খুলনা', 'যশোর', 'নোয়াপাড়া', 'রাজঘাট', '7461', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3113, 'Khulna', 'Jashore', 'Sarsa', 'Bag Achra', '7433', 'খুলনা', 'যশোর', 'শার্শা', 'ব্যাগ আচড়া ', '7433', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3114, 'Khulna', 'Jashore', 'Sarsa', 'Benapole', '7431', 'খুলনা', 'যশোর', 'শার্শা', 'বেনাপোল', '7431', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3115, 'Khulna', 'Jashore', 'Sarsa', 'Jadabpur', '7432', 'খুলনা', 'যশোর', 'শার্শা', 'যাদবপুর ', '7432', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3116, 'Khulna', 'Jashore', 'Sarsa', 'Sarsa', '7430', 'খুলনা', 'যশোর', 'শার্শা', 'শার্শা', '7430', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3117, 'Khulna', 'Jhenaidah', 'Harinakundu', 'Harinakundu', '7310', 'খুলনা', 'ঝিনাইদহ', 'হরিনাকুন্ডু', 'হরিনাকুন্ডু', '7310', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3118, 'Khulna', 'Jhenaidah', 'Jhenaidah Sadar', 'Jhenaidah Cadet College', '7301', 'খুলনা', 'ঝিনাইদহ', 'ঝিনাইদহ সদর', 'ঝিনাইদহ ক্যাডেট কলেজ', '7301', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3119, 'Khulna', 'Jhenaidah', 'Jhenaidah Sadar', 'Jhenaidah Sadar', '7300', 'খুলনা', 'ঝিনাইদহ', 'ঝিনাইদহ সদর', 'ঝিনাইদহ সদর', '7300', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3120, 'Khulna', 'Jhenaidah', 'Kotchandpur', 'Kotchandpur', '7330', 'খুলনা', 'ঝিনাইদহ', 'কোটচাঁদপুর', 'কোটচাঁদপুর', '7330', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3121, 'Khulna', 'Jhenaidah', 'Maheshpur', 'Maheshpur', '7340', 'খুলনা', 'ঝিনাইদহ', 'মহেশপুর', 'মহেশপুর', '7340', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3122, 'Khulna', 'Jhenaidah', 'Naldanga', 'Hatbar Bazar', '7351', 'খুলনা', 'ঝিনাইদহ', 'নলডাঙ্গা', 'হাট বারোবাজার', '7351', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3123, 'Khulna', 'Jhenaidah', 'Naldanga', 'Naldanga', '7350', 'খুলনা', 'ঝিনাইদহ', 'নলডাঙ্গা', 'নলডাঙ্গা', '7350', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3124, 'Khulna', 'Jhenaidah', 'Shailakupa', 'Kumiradaha', '7321', 'খুলনা', 'ঝিনাইদহ', 'শৈলকুপা', 'কুমিরাধা ', '7321', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3125, 'Khulna', 'Jhenaidah', 'Shailakupa', 'Shailakupa', '7320', 'খুলনা', 'ঝিনাইদহ', 'শৈলকুপা', 'শৈলকুপা', '7320', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3126, 'Khulna', 'Khulna', 'Alaipur', 'Alaipur', '9240', 'খুলনা', 'খুলনা', 'আলাইপুর', 'আলাইপুর', '9240', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3127, 'Khulna', 'Khulna', 'Alaipur', 'Belphulia', '9242', 'খুলনা', 'খুলনা', 'আলাইপুর', 'বেলফুলিয়া ', '9242', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3128, 'Khulna', 'Khulna', 'Alaipur', 'Rupsha', '9241', 'খুলনা', 'খুলনা', 'আলাইপুর', 'রূপসা', '9241', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3129, 'Khulna', 'Khulna', 'Batiaghat', 'Batiaghat', '9260', 'খুলনা', 'খুলনা', 'বটিয়াঘাট ', 'বটিয়াঘাট ', '9260', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3130, 'Khulna', 'Khulna', 'Batiaghat', 'Surkalee', '9261', 'খুলনা', 'খুলনা', 'বটিয়াঘাট ', 'সুরখালী', '9261', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3131, 'Khulna', 'Khulna', 'Chalna Bazar', 'Bajua', '9272', 'খুলনা', 'খুলনা', 'চালনা বাজার', 'বাজুয়া ', '9272', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3132, 'Khulna', 'Khulna', 'Chalna Bazar', 'Chalna Bazar', '9270', 'খুলনা', 'খুলনা', 'চালনা বাজার', 'চালনা বাজার', '9270', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3133, 'Khulna', 'Khulna', 'Chalna Bazar', 'Dakup', '9271', 'খুলনা', 'খুলনা', 'চালনা বাজার', 'ডাকুপ ', '9271', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3134, 'Khulna', 'Khulna', 'Chalna Bazar', 'Nalian', '9273', 'খুলনা', 'খুলনা', 'চালনা বাজার', 'নালিয়ান', '9273', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3135, 'Khulna', 'Khulna', 'Digalia', 'Chandni Mahal', '9221', 'খুলনা', 'খুলনা', 'দিগালিয়া', 'চাঁদনি মহল', '9221', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3136, 'Khulna', 'Khulna', 'Digalia', 'Digalia', '9220', 'খুলনা', 'খুলনা', 'দিগালিয়া', 'দিগালিয়া', '9220', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3137, 'Khulna', 'Khulna', 'Digalia', 'Gazirhat', '9224', 'খুলনা', 'খুলনা', 'দিগালিয়া', 'গাজিরহাট', '9224', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3138, 'Khulna', 'Khulna', 'Digalia', 'Ghoshghati', '9223', 'খুলনা', 'খুলনা', 'দিগালিয়া', 'ঘোষঘাটি', '9223', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3139, 'Khulna', 'Khulna', 'Digalia', 'Senhati', '9222', 'খুলনা', 'খুলনা', 'দিগালিয়া', 'সেনহাটি', '9222', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3140, 'Khulna', 'Khulna', 'Khulna Sadar', 'Atra Shilpa Area', '9207', 'খুলনা', 'খুলনা', 'খুলনা সদর', 'আতরা শিল্পা ফোন', '9207', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3141, 'Khulna', 'Khulna', 'Khulna Sadar', 'BIT Khulna', '9203', 'খুলনা', 'খুলনা', 'খুলনা সদর', 'বিআইটি খুলনা', '9203', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3142, 'Khulna', 'Khulna', 'Khulna Sadar', 'Doulatpur', '9202', 'খুলনা', 'খুলনা', 'খুলনা সদর', 'দৌলতপুর', '9202', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3143, 'Khulna', 'Khulna', 'Khulna Sadar', 'Jahanabad Canttonmen', '9205', 'খুলনা', 'খুলনা', 'খুলনা সদর', 'জাহানাবাদ ক্যান্টনম্যান', '9205', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3144, 'Khulna', 'Khulna', 'Khulna Sadar', 'Khulna Sadar', '9100', 'খুলনা', 'খুলনা', 'খুলনা সদর', ' সখুলনাদর', '9100', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3145, 'Khulna', 'Khulna', 'Khulna Sadar', 'Khulna G.P.O', '9000', 'খুলনা', 'খুলনা', 'খুলনা সদর', 'খুলনা জি.পি.ও', '9000', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3146, 'Khulna', 'Khulna', 'Khulna Sadar', 'Khulna Shipyard', '9201', 'খুলনা', 'খুলনা', 'খুলনা সদর', 'খুলনা শিপইয়ার্ড', '9201', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3147, 'Khulna', 'Khulna', 'Khulna Sadar', 'Khulna University', '9208', 'খুলনা', 'খুলনা', 'খুলনা সদর', 'খুলনা বিশ্ববিদ্যালয়ের', '9208', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3148, 'Khulna', 'Khulna', 'Khulna Sadar', 'Siramani', '9204', 'খুলনা', 'খুলনা', 'খুলনা সদর', 'সিরামনি', '9204', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3149, 'Khulna', 'Khulna', 'Khulna Sadar', 'Sonali Jute Mills', '9206', 'খুলনা', 'খুলনা', 'খুলনা সদর', 'সোনালী জুট মিলস', '9206', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3150, 'Khulna', 'Khulna', 'Koyra', 'Amadee', '9291', 'খুলনা', 'খুলনা', 'কয়রা', 'আমাদে', '9291', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3151, 'Khulna', 'Khulna', 'Koyra', 'Koyra', '9290', 'খুলনা', 'খুলনা', 'কয়রা', 'কয়রা', '9290', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3152, 'Khulna', 'Khulna', 'Paikgachha', 'Chandkhali', '9284', 'খুলনা', 'খুলনা', 'পাইকগাছা', 'চাঁদখালী', '9284', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3153, 'Khulna', 'Khulna', 'Paikgachha', 'Garaikhali', '9285', 'খুলনা', 'খুলনা', 'পাইকগাছা', 'গড়াইখালী', '9285', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3154, 'Khulna', 'Khulna', 'Paikgachha', 'Godaipur', '9281', 'খুলনা', 'খুলনা', 'পাইকগাছা', 'গোদাইপুর', '9281', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3155, 'Khulna', 'Khulna', 'Paikgachha', 'Kapilmoni', '9282', 'খুলনা', 'খুলনা', 'পাইকগাছা', 'কপিলমনি', '9282', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3156, 'Khulna', 'Khulna', 'Paikgachha', 'Katipara', '9283', 'খুলনা', 'খুলনা', 'পাইকগাছা', 'কাটিপাড়া', '9283', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3157, 'Khulna', 'Khulna', 'Paikgachha', 'Paikgachha', '9280', 'খুলনা', 'খুলনা', 'পাইকগাছা', 'পাইকগাছা', '9280', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3158, 'Khulna', 'Khulna', 'Phultala', 'Phultala', '9210', 'খুলনা', 'খুলনা', 'ফুলতলা', 'ফুলতলা', '9210', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3159, 'Khulna', 'Khulna', 'Sajiara', 'Chuknagar', '9252', 'খুলনা', 'খুলনা', 'সাজিয়ারা', 'চুকনগর', '9252', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3160, 'Khulna', 'Khulna', 'Sajiara', 'Ghonabanda', '9251', 'খুলনা', 'খুলনা', 'সাজিয়ারা', 'ঘোনাবান্দা', '9251', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3161, 'Khulna', 'Khulna', 'Sajiara', 'Sajiara', '9250', 'খুলনা', 'খুলনা', 'সাজিয়ারা', 'সাজিয়ারা', '9250', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3162, 'Khulna', 'Khulna', 'Sajiara', 'Shahapur', '9253', 'খুলনা', 'খুলনা', 'সাজিয়ারা', 'শাহাপুর', '9253', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3163, 'Khulna', 'Khulna', 'Terakhada', 'Pak Barasat', '9231', 'খুলনা', 'খুলনা', 'তেরখাদা', 'পাক বারাসত', '9231', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3164, 'Khulna', 'Khulna', 'Terakhada', 'Terakhada', '9230', 'খুলনা', 'খুলনা', 'তেরখাদা', 'তেরখাদা', '9230', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3165, 'Khulna', 'Kushtia', 'Daulatpur', 'Allardarga', '7042', 'খুলনা', 'কুষ্টিয়া', 'ভেড়ামারা', 'আল্লারদর্গা', '7042', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3166, 'Khulna', 'Kushtia', 'Bheramara', 'Bheramara', '7040', 'খুলনা', 'কুষ্টিয়া', 'ভেড়ামারা', 'ভেড়ামারা', '7040', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3167, 'Khulna', 'Kushtia', 'Bheramara', 'Ganges Bheramara', '7041', 'খুলনা', 'কুষ্টিয়া', 'ভেড়ামারা', 'গঙ্গা ভেড়ামারা', '7041', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3168, 'Khulna', 'Kushtia', 'Janipur', 'Janipur', '7020', 'খুলনা', 'কুষ্টিয়া', 'জনিপুর', 'জনিপুর', '7020', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3169, 'Khulna', 'Kushtia', 'Janipur', 'Khoksa', '7021', 'খুলনা', 'কুষ্টিয়া', 'জনিপুর', 'খোকসা', '7021', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3170, 'Khulna', 'Kushtia', 'Kumarkhali', 'Kumarkhali', '7010', 'খুলনা', 'কুষ্টিয়া', 'কুমারখালী', 'কুমারখালী', '7010', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3171, 'Khulna', 'Kushtia', 'Kumarkhali', 'Panti', '7011', 'খুলনা', 'কুষ্টিয়া', 'কুমারখালী', 'পান্টি', '7011', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3172, 'Khulna', 'Kushtia', 'Kushtia Sadar', 'Islami University', '7003', 'খুলনা', 'কুষ্টিয়া', 'কুষ্টিয়া সদর', 'ইসলামী বিশ্ববিদ্যালয়', '7003', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3173, 'Khulna', 'Kushtia', 'Kushtia Sadar', 'Jagati', '7002', 'খুলনা', 'কুষ্টিয়া', 'কুষ্টিয়া সদর', 'জগতি', '7002', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3174, 'Khulna', 'Kushtia', 'Kushtia Sadar', 'Kushtia Mohini', '7001', 'খুলনা', 'কুষ্টিয়া', 'কুষ্টিয়া সদর', 'কুষ্টিয়া মোহিনী', '7001', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3175, 'Khulna', 'Kushtia', 'Kushtia Sadar', 'Kushtia Sadar', '7000', 'খুলনা', 'কুষ্টিয়া', 'কুষ্টিয়া সদর', 'কুষ্টিয়া সদর', '7000', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3176, 'Khulna', 'Kushtia', 'Mirpur', 'Amla Sadarpur', '7032', 'খুলনা', 'কুষ্টিয়া', 'মিরপুর', 'আমলা সদরপুর', '7032', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3177, 'Khulna', 'Kushtia', 'Mirpur', 'Mirpur', '7030', 'খুলনা', 'কুষ্টিয়া', 'মিরপুর', 'মিরপুর', '7030', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3178, 'Khulna', 'Kushtia', 'Mirpur', 'Poradaha', '7031', 'খুলনা', 'কুষ্টিয়া', 'মিরপুর', 'পোড়াদহ', '7031', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3179, 'Khulna', 'Kushtia', 'Rafayetpur', 'Khasmathurapur', '7052', 'খুলনা', 'কুষ্টিয়া', 'রাফায়েতপুর', 'খাসমথুরাপুর', '7052', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3180, 'Khulna', 'Kushtia', 'Rafayetpur', 'Rafayetpur', '7050', 'খুলনা', 'কুষ্টিয়া', 'রাফায়েতপুর', 'রাফায়েতপুর', '7050', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3181, 'Khulna', 'Kushtia', 'Rafayetpur', 'Taragunia', '7051', 'খুলনা', 'কুষ্টিয়া', 'রাফায়েতপুর', 'তারাগুনিয়া', '7051', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3182, 'Khulna', 'Magura', 'Arpara', 'Arpara', '7620', 'খুলনা', 'মাগুরা', 'আড়পাড়া', 'আড়পাড়া', '7620', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3183, 'Khulna', 'Magura', 'Magura Sadar', 'Magura Sadar', '7600', 'খুলনা', 'মাগুরা', 'মাগুরা সদর', 'মাগুরা সদর', '7600', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3184, 'Khulna', 'Magura', 'Mohammadpur', 'Binodpur', '7631', 'খুলনা', 'মাগুরা', 'মোহাম্মদপুর', 'বিনোদপুর', '7631', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3185, 'Khulna', 'Magura', 'Mohammadpur', 'Mohammadpur', '7630', 'খুলনা', 'মাগুরা', 'মোহাম্মদপুর', 'মোহাম্মদপুর', '7630', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3186, 'Khulna', 'Magura', 'Mohammadpur', 'Nahata', '7632', 'খুলনা', 'মাগুরা', 'মোহাম্মদপুর', 'নহতা', '7632', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3187, 'Khulna', 'Magura', 'Shripur', 'Langalbadh', '7611', 'খুলনা', 'মাগুরা', 'শ্রীপুর', 'লাঙ্গলবাদ', '7611', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3188, 'Khulna', 'Magura', 'Shripur', 'Nachol', '7612', 'খুলনা', 'মাগুরা', 'শ্রীপুর', 'নাচোল', '7612', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3189, 'Khulna', 'Magura', 'Shripur', 'Shripur', '7610', 'খুলনা', 'মাগুরা', 'শ্রীপুর', 'শ্রীপুর', '7610', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3190, 'Khulna', 'Meherpur', 'Gangni', 'Gangni', '7110', 'খুলনা', 'মেহেরপুর', 'গাংনী', 'গাংনী', '7110', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3191, 'Khulna', 'Meherpur', 'Meherpur Sadar', 'Amjhupi', '7101', 'খুলনা', 'মেহেরপুর', 'মেহেরপুর সদর', 'আমঝুপি', '7101', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3192, 'Khulna', 'Meherpur', 'Meherpur Sadar', 'Amjhupi', '7152', 'খুলনা', 'মেহেরপুর', 'মেহেরপুর সদর', 'আমঝুপি', '7152', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3193, 'Khulna', 'Meherpur', 'Meherpur Sadar', 'Meherpur Sadar', '7100', 'খুলনা', 'মেহেরপুর', 'মেহেরপুর সদর', 'মেহেরপুর সদর', '7100', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3194, 'Khulna', 'Meherpur', 'Meherpur Sadar', 'Mujib Nagar Complex', '7102', 'খুলনা', 'মেহেরপুর', 'মেহেরপুর সদর', 'মুজিব নগর কমপ্লেক্স', '7102', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3195, 'Khulna', 'Narail', 'Kalia', 'Kalia', '7520', 'খুলনা', 'নড়াইল', 'কালিয়া', 'কালিয়া', '7520', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3196, 'Khulna', 'Narail', 'Laxmipasha', 'Baradia', '7514', 'খুলনা', 'নড়াইল', 'লক্ষ্মীপাশা', 'বড়দিয়া', '7514', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3197, 'Khulna', 'Narail', 'Laxmipasha', 'Itna', '7512', 'খুলনা', 'নড়াইল', 'লক্ষ্মীপাশা', 'ইটনা', '7512', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3198, 'Khulna', 'Narail', 'Laxmipasha', 'Laxmipasha', '7510', 'খুলনা', 'নড়াইল', 'লক্ষ্মীপাশা', 'লক্ষ্মীপাশা', '7510', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3199, 'Khulna', 'Narail', 'Laxmipasha', 'Lohagora', '7511', 'খুলনা', 'নড়াইল', 'লক্ষ্মীপাশা', 'লোহাগড়া', '7511', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3200, 'Khulna', 'Narail', 'Laxmipasha', 'Naldi', '7513', 'খুলনা', 'নড়াইল', 'লক্ষ্মীপাশা', 'নলদি', '7513', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3201, 'Khulna', 'Narail', 'Mohajan', 'Mohajan', '7521', 'খুলনা', 'নড়াইল', 'মহাজন', 'মহাজন', '7521', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3202, 'Khulna', 'Narail', 'Narail Sadar', 'Narail Sadar', '7500', 'খুলনা', 'নড়াইল', 'নড়াইল সদর', 'নড়াইল সদর', '7500', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3203, 'Khulna', 'Narail', 'Narail Sadar', 'Ratanganj', '7501', 'খুলনা', 'নড়াইল', 'নড়াইল সদর', 'রতনগঞ্জ', '7501', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3204, 'Khulna', 'Satkhira', 'Ashashuni', 'Ashashuni', '9460', 'খুলনা', 'সাতক্ষীরা', 'আশাশুনির', 'আশাশুনির', '9460', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3205, 'Khulna', 'Satkhira', 'Ashashuni', 'Baradal', '9461', 'খুলনা', 'সাতক্ষীরা', 'আশাশুনির', 'বড়দল', '9461', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3206, 'Khulna', 'Satkhira', 'Debbhata', 'Debbhata', '9430', 'খুলনা', 'সাতক্ষীরা', 'দেবভাতা', 'দেবভাতা', '9430', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3207, 'Khulna', 'Satkhira', 'Debbhata', 'Gurugram', '9431', 'খুলনা', 'সাতক্ষীরা', 'দেবভাতা', 'গুরুগ্রাম', '9431', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3208, 'Khulna', 'Satkhira', 'kalaroa', 'Chandanpur', '9415', 'খুলনা', 'সাতক্ষীরা', 'কলারোয়া', 'চন্দনপুর', '9415', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3209, 'Khulna', 'Satkhira', 'kalaroa', 'Hamidpur', '9413', 'খুলনা', 'সাতক্ষীরা', 'কলারোয়া', 'হামিদপুর', '9413', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3210, 'Khulna', 'Satkhira', 'kalaroa', 'Jhaudanga', '9412', 'খুলনা', 'সাতক্ষীরা', 'কলারোয়া', 'ঝাউডাঙ্গা', '9412', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3211, 'Khulna', 'Satkhira', 'kalaroa', 'kalaroa', '9410', 'খুলনা', 'সাতক্ষীরা', 'কলারোয়া', 'কলারোয়া', '9410', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3212, 'Khulna', 'Satkhira', 'kalaroa', 'Khordo', '9414', 'খুলনা', 'সাতক্ষীরা', 'কলারোয়া', 'খোরডো', '9414', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3213, 'Khulna', 'Satkhira', 'kalaroa', 'Murarikati', '9410', 'খুলনা', 'সাতক্ষীরা', 'কলারোয়া', 'মুরারীকাঠী', '9411', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3214, 'Khulna', 'Satkhira', 'Kaliganj UPO', 'Kaliganj UPO', '9440', 'খুলনা', 'সাতক্ষীরা', 'কালীগঞ্জ Upo', 'কালীগঞ্জ ইউপিও', '9440', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3215, 'Khulna', 'Satkhira', 'Kaliganj UPO', 'Nalta Mubaroknagar', '9441', 'খুলনা', 'সাতক্ষীরা', 'কালীগঞ্জ Upo', 'নলতা মুবারোকনগর', '9441', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3216, 'Khulna', 'Satkhira', 'Kaliganj UPO', 'Ratanpur', '9442', 'খুলনা', 'সাতক্ষীরা', 'কালীগঞ্জ Upo', 'রতনপুর', '9442', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3217, 'Khulna', 'Satkhira', 'Nakipur', 'Buri Goalini', '9453', 'খুলনা', 'সাতক্ষীরা', 'নকিপুর', 'বুড়ি গোলিনী', '9453', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3218, 'Khulna', 'Satkhira', 'Nakipur', 'Gabura', '9454', 'খুলনা', 'সাতক্ষীরা', 'নকিপুর', 'গাবুরা', '9454', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3219, 'Khulna', 'Satkhira', 'Nakipur', 'Habinagar', '9455', 'খুলনা', 'সাতক্ষীরা', 'নকিপুর', 'হাবিনগর', '9455', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3220, 'Khulna', 'Satkhira', 'Nakipur', 'Nakipur', '9450', 'খুলনা', 'সাতক্ষীরা', 'নকিপুর', 'নকিপুর', '9450', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3221, 'Khulna', 'Satkhira', 'Nakipur', 'Naobeki', '9452', 'খুলনা', 'সাতক্ষীরা', 'নকিপুর', 'নওবেকি', '9452', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3222, 'Khulna', 'Satkhira', 'Nakipur', 'Noornagar', '9451', 'খুলনা', 'সাতক্ষীরা', 'নকিপুর', 'নূরনগর', '9451', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3223, 'Khulna', 'Satkhira', 'Satkhira Sadar', 'Budhhat', '9403', 'খুলনা', 'সাতক্ষীরা', 'সাতক্ষীরা সদর', 'বুধহাত', '9403', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3224, 'Khulna', 'Satkhira', 'Satkhira Sadar', 'Gunakar kati', '9402', 'খুলনা', 'সাতক্ষীরা', 'সাতক্ষীরা সদর', 'গুনাকর কাটি', '9402', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3225, 'Khulna', 'Satkhira', 'Satkhira Sadar', 'Satkhira Islamia Acc', '9401', 'খুলনা', 'সাতক্ষীরা', 'সাতক্ষীরা সদর', 'সাতক্ষীরা ইসলামিয়া অ্যাক', '9401', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3226, 'Khulna', 'Satkhira', 'Satkhira Sadar', 'Satkhira Sadar', '9400', 'খুলনা', 'সাতক্ষীরা', 'সাতক্ষীরা সদর', 'সাতক্ষীরা সদর', '9400', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3227, 'Khulna', 'Satkhira', 'Taala', 'Patkelghata', '9421', 'খুলনা', 'সাতক্ষীরা', 'তালা', 'পাটকেলঘাটা', '9421', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3228, 'Khulna', 'Satkhira', 'Taala', 'Taala', '9420', 'খুলনা', 'সাতক্ষীরা', 'তালা', 'তালা', '9420', '2021-07-21 08:43:25', '2021-07-21 08:43:25'),
(3229, 'Dhaka', 'Dhaka', 'Vatara', 'Gulshan', '1212', 'ঢাকা ', 'ঢাকা ', 'ভাটারা', 'গুলশান ', '১২১২', NULL, NULL),
(3230, 'Mymensingh', 'Mymensingh', 'Nandail', 'Outer Shathi', '2290', 'ময়মনসিংহ', 'ময়মনসিংহ', 'নান্দাইল', 'আউটার সাথী', '২২৯০', NULL, NULL),
(3231, 'Rangpur', 'Gaibandha', 'Sundarganj', 'Banglabazar', '5720', 'রংপুর ', 'গাইবান্ধা', 'সুন্দরগঞ্জ', 'বাংলাবাজার', '৫৭২০', NULL, NULL),
(3232, 'Mymensingh', 'Mymensingh', 'Nandail', 'Outer Shathi', '2290', 'ময়মনসিংহ', 'ময়মনসিংহ', 'নান্দাইল', 'আউটার সাথী', '২২৯০', NULL, NULL),
(3233, 'Rangpur', 'Gaibandha', 'Sundarganj', 'Banglabazar', '5720', 'রংপুর ', 'গাইবান্ধা', 'সুন্দরগঞ্জ', 'বাংলাবাজার', '৫৭২০', NULL, NULL),
(3234, 'Dhaka', 'Tangail', 'Kalihati', 'Chinamura', '1974', 'ঢাকা', 'টাঙ্গাইল', 'কালিহাতী', 'চিনামুড়া', '১৯৭৪', NULL, NULL),
(3235, 'Dhaka', 'Tangail', 'Kalihati', 'F. Kuchuti', '1974', 'ঢাকা', 'টাঙ্গাইল', 'কালিহাতী', 'এফ. কুচটি', '১৯৭৪', NULL, NULL),
(3236, 'Dhaka', 'Tangail', 'Kalihati', 'Palima', '1974', 'ঢাকা', 'টাঙ্গাইল', 'কালিহাতী', 'পালিমা', '১৯৭৪', NULL, NULL),
(3237, 'Dhaka', 'Tangail', 'Kalihati', 'Rosulpur', '1974', 'ঢাকা', 'টাঙ্গাইল', 'কালিহাতী', 'রসুলপুর', '১৯৭৪', NULL, NULL),
(3238, 'Dhaka', 'Tangail', 'Kalihati', 'Boro Bashaliya', '1974', 'ঢাকা', 'টাঙ্গাইল', 'কালিহাতী', 'বড় বাশালিয়া', '১৯৭৪', NULL, NULL),
(3239, 'Dhaka', 'Tangail', 'Kalihati', 'Chinamura', '1974', 'ঢাকা', 'টাঙ্গাইল', 'কালিহাতী', 'চিনামুড়া', '১৯৭৪', NULL, NULL),
(3240, 'Dhaka', 'Tangail', 'Kalihati', 'F. Kuchuti', '1974', 'ঢাকা', 'টাঙ্গাইল', 'কালিহাতী', 'এফ. কুচটি', '১৯৭৪', NULL, NULL),
(3241, 'Dhaka', 'Tangail', 'Kalihati', 'Palima', '1974', 'ঢাকা', 'টাঙ্গাইল', 'কালিহাতী', 'পালিমা', '১৯৭৪', NULL, NULL),
(3242, 'Dhaka', 'Tangail', 'Kalihati', 'Rosulpur', '1974', 'ঢাকা', 'টাঙ্গাইল', 'কালিহাতী', 'রসুলপুর', '১৯৭৪', NULL, NULL),
(3243, 'Dhaka', 'Tangail', 'Kalihati', 'Boro Bashaliya', '1974', 'ঢাকা', 'টাঙ্গাইল', 'কালিহাতী', 'বড় বাশালিয়া', '১৯৭৪', NULL, NULL),
(3244, 'Dhaka', 'Tangail', 'Kalihati', 'Dokkhin Chamuria', '1974', 'ঢাকা ', 'টাঙ্গাইল ', 'কালিহাতী ', 'দক্ষিন চামুরিয়া', '১৯৭৪', NULL, NULL),
(3245, 'Dhaka', 'Tangail', 'Kalihati', 'Dokkhin Chamuria', '1974', 'ঢাকা ', 'টাঙ্গাইল ', 'কালিহাতী ', 'দক্ষিন চামুরিয়া', '১৯৭৪', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

CREATE TABLE `classrooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classrooms`
--

INSERT INTO `classrooms` (`id`, `room_no`, `capacity`, `created_at`, `updated_at`) VALUES
(1, '101', '40', '2022-01-09 00:58:06', '2022-01-09 00:58:06'),
(3, '102', '40', '2022-01-09 00:58:37', '2022-01-09 00:58:37'),
(4, '201', '30', '2022-01-09 00:58:48', '2022-01-09 00:58:48');

-- --------------------------------------------------------

--
-- Table structure for table `class_routines`
--

CREATE TABLE `class_routines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sreni_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_routines`
--

INSERT INTO `class_routines` (`id`, `subject_id`, `time`, `room`, `date`, `day`, `department_id`, `sreni_id`, `section_id`, `teacher_id`, `created_at`, `updated_at`) VALUES
(7, 'English', NULL, '201', '9.00 am - 9.30 am', 'Same class all week', '1', '4', '2', '1', '2022-01-10 00:20:13', '2022-01-10 00:20:13'),
(14, 'Bangla', NULL, '101', '8.00 am - 8.30am', 'Saturday', '0', '2', '1', '2', '2022-01-15 23:29:38', '2022-01-15 23:29:38'),
(15, 'English', NULL, '101', '8.30 am - 9.00 am', 'Sunday', '0', '2', '1', '1', '2022-01-15 23:30:01', '2022-01-15 23:30:01'),
(16, 'English', NULL, '101', '9.00 am - 9.30 am', 'Saturday', '0', '2', '1', '0', '2022-01-16 00:12:38', '2022-01-16 00:12:38');

-- --------------------------------------------------------

--
-- Table structure for table `class_shedules`
--

CREATE TABLE `class_shedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_shedules`
--

INSERT INTO `class_shedules` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, '8.00 am - 8.30am', 1, '2022-01-09 02:24:55', '2022-01-09 02:24:55'),
(2, '8.30 am - 9.00 am', 1, '2022-01-09 02:25:15', '2022-01-09 02:25:15'),
(3, '9.00 am - 9.30 am', 1, '2022-01-09 02:25:33', '2022-01-09 02:25:33'),
(4, '9.30 am - 10.00 am', 1, '2022-01-09 02:25:55', '2022-01-09 02:25:55'),
(5, '10.00 am  - 10.30 am', 1, '2022-01-09 02:26:42', '2022-01-09 02:26:42'),
(6, '10.30 am -11.00 am', 1, '2022-01-09 02:27:02', '2022-01-09 02:27:02');

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `com_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `action_taken` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assigned` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`id`, `com_type`, `source`, `com_by`, `phone`, `date`, `des`, `action_taken`, `assigned`, `note`, `document`, `created_at`, `updated_at`) VALUES
(1, 'Fees', 'Front Office', 'wwe', '1234756789', '2022-01-22', 'wertert', 'rrtyr', 'eytry', 'yty', 'm_demo.jpg', '2022-01-26 00:59:54', '2022-01-26 00:59:54');

-- --------------------------------------------------------

--
-- Table structure for table `complain_types`
--

CREATE TABLE `complain_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complain_types`
--

INSERT INTO `complain_types` (`id`, `name`, `des`, `created_at`, `updated_at`) VALUES
(1, 'Fees', 'Fees', '2022-01-26 00:25:12', '2022-01-26 00:25:12'),
(2, 'Teacher', 'Teacher', '2022-01-26 00:25:33', '2022-01-26 00:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `custome_fields`
--

CREATE TABLE `custome_fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `belongs_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_group` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `database_colomn_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tb_data` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `validation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `visibility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_order` int(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custome_fields`
--

INSERT INTO `custome_fields` (`id`, `belongs_to`, `field_group`, `field_type`, `field_value`, `field_name`, `database_colomn_name`, `tb_data`, `validation`, `visibility`, `field_order`, `created_at`, `updated_at`) VALUES
(29, '1', 'Student information', 'text', NULL, 'Admission No', 'admission_no', '1', '1', '1', 0, '2022-01-20 00:26:44', '2022-01-23 06:17:10'),
(30, '1', 'Student information', 'text', NULL, 'Roll Number', 'roll_number', '1', '0', '1', 1, '2022-01-20 00:28:04', '2022-01-23 06:17:10'),
(31, '1', 'Student information', 'select', NULL, 'Class', 'class', '1', '1', '1', 2, '2022-01-20 00:28:38', '2022-01-23 06:17:10'),
(32, '1', 'Student information', 'select', NULL, 'Section', 'section', '1', '1', '1', 4, '2022-01-20 00:29:24', '2022-01-23 04:25:45'),
(33, '1', 'Student information', 'text', NULL, 'First Name', 'first_name', '1', '1', '1', 5, '2022-01-20 00:30:01', '2022-01-23 04:25:45'),
(34, '1', 'Student information', 'text', NULL, 'Last Name', 'last_name', '1', '0', '1', 6, '2022-01-20 00:30:26', '2022-01-23 04:25:45'),
(35, '1', 'Student information', 'select', 'Select,Male,Female', 'Gender', 'gender', '1', '1', '1', 7, '2022-01-20 00:31:24', '2022-01-23 04:25:45'),
(36, '1', 'Student information', 'date', NULL, 'Date Of Birth', 'date_of_birth', '1', '1', '1', 8, '2022-01-20 00:32:02', '2022-01-23 04:25:45'),
(37, '1', 'Student information', 'select', NULL, 'Category', 'category', '0', '0', '1', 9, '2022-01-20 00:33:18', '2022-01-20 03:19:18'),
(38, '1', 'Student information', 'text', NULL, 'Religion', 'religion', '0', '0', '1', 10, '2022-01-20 00:51:33', '2022-01-20 03:19:18'),
(39, '1', 'Student information', 'text', NULL, 'Caste', 'caste', '0', '0', '1', 11, '2022-01-20 00:52:24', '2022-01-20 03:19:18'),
(40, '1', 'Student information', 'text', NULL, 'Mobile Number', 'mobile_number', '0', '0', '1', 12, '2022-01-20 00:53:05', '2022-01-20 03:19:18'),
(41, '1', 'Student information', 'email', NULL, 'Email', 'email', '0', '0', '1', 13, '2022-01-20 00:53:47', '2022-01-20 03:19:18'),
(42, '1', 'Student information', 'date', NULL, 'Admission Date', 'admission_date', '0', '0', '1', 14, '2022-01-20 00:54:54', '2022-01-20 03:19:18'),
(43, '1', 'Student information', 'file', NULL, 'Student Photo', 'student_photo', '0', '0', '1', 15, '2022-01-20 00:55:18', '2022-01-20 03:19:18'),
(44, '1', 'Student information', 'select', 'Select,O+,A+,B+,AB+,AB-,O-,A-,B-', 'Blood Group', 'blood_group', '0', '0', '1', 16, '2022-01-20 00:56:45', '2022-01-20 04:49:03'),
(45, '1', 'Student information', 'select', NULL, 'Student House', 'student_house', '1', '0', '1', 17, '2022-01-20 00:57:08', '2022-01-23 04:25:45'),
(46, '1', 'Student information', 'text', NULL, 'Height', 'height', '0', '0', '1', 18, '2022-01-20 00:57:29', '2022-01-20 03:19:19'),
(47, '1', 'Student information', 'text', NULL, 'Weight', 'weight', '0', '0', '1', 19, '2022-01-20 00:57:50', '2022-01-20 03:19:19'),
(48, '1', 'Student information', 'date', NULL, 'As on Date', 'as_on_date', '0', '0', '1', 20, '2022-01-20 00:58:29', '2022-01-20 03:19:19'),
(49, '1', 'Student information', 'textarea', NULL, 'Medical History', 'medical_history', '0', '0', '1', 21, '2022-01-20 00:58:52', '2022-01-20 03:19:19'),
(50, '1', 'Parent Guardian Detail', 'text', NULL, 'Father Name', 'father_name', '0', '0', '1', 22, '2022-01-20 00:59:55', '2022-01-20 03:19:19'),
(51, '1', 'Parent Guardian Detail', 'text', NULL, 'Father Phone', 'father_phone', '0', '0', '1', 23, '2022-01-20 01:00:28', '2022-01-20 03:19:19'),
(52, '1', 'Parent Guardian Detail', 'text', NULL, 'Father Occupation', 'father_occupation', '0', '0', '1', 24, '2022-01-20 01:01:58', '2022-01-20 03:19:19'),
(53, '1', 'Parent Guardian Detail', 'text', NULL, 'Father Yearly Incme', 'father_yearly_incme', '0', '0', '1', 25, '2022-01-20 01:02:44', '2022-01-20 03:19:19'),
(54, '1', 'Parent Guardian Detail', 'file', NULL, 'Father Photo', 'father_photo', '0', '0', '1', 26, '2022-01-20 01:03:16', '2022-01-20 03:19:19'),
(55, '1', 'Parent Guardian Detail', 'text', NULL, 'Mother Name', 'mother_name', '0', '0', '1', 27, '2022-01-20 01:04:39', '2022-01-20 03:19:19'),
(56, '1', 'Parent Guardian Detail', 'text', NULL, 'Mother Phone', 'mother_phone', '0', '0', '1', 28, '2022-01-20 01:05:00', '2022-01-20 03:19:19'),
(57, '1', 'Parent Guardian Detail', 'text', NULL, 'Mother Occupation', 'mother_occupation', '0', '0', '1', 29, '2022-01-20 01:05:57', '2022-01-20 03:19:19'),
(58, '1', 'Parent Guardian Detail', 'text', NULL, 'Mother Yearly Income', 'mother_yearly_income', '0', '0', '1', 30, '2022-01-20 01:06:32', '2022-01-20 03:19:19'),
(59, '1', 'Parent Guardian Detail', 'file', NULL, 'Mother Photo', 'mother_photo', '0', '0', '1', 31, '2022-01-20 01:07:24', '2022-01-20 03:19:19'),
(60, '1', 'Parent Guardian Detail', 'radio', 'Father,Mother,Other', 'If Guardian Is', 'if_guardian_is', '0', '1', '1', 32, '2022-01-20 01:09:03', '2022-01-20 03:19:19'),
(61, '1', 'Parent Guardian Detail', 'text', NULL, 'Guardian Name', 'guardian_name', '0', '1', '1', 33, '2022-01-20 01:09:43', '2022-01-20 03:19:19'),
(62, '1', 'Parent Guardian Detail', 'text', NULL, 'Guardian Relation', 'guardian_relation', '0', '0', '1', 34, '2022-01-20 01:10:14', '2022-01-20 03:19:19'),
(63, '1', 'Parent Guardian Detail', 'text', NULL, 'Guardian Email', 'guardian_email', '0', '0', '1', 35, '2022-01-20 01:11:03', '2022-01-20 03:19:19'),
(64, '1', 'Parent Guardian Detail', 'file', NULL, 'Guardian Photo', 'guardian_photo', '0', '0', '1', 36, '2022-01-20 01:11:35', '2022-01-20 03:19:19'),
(65, '1', 'Parent Guardian Detail', 'text', NULL, 'Guardian Phone', 'guardian_phone', '0', '1', '1', 37, '2022-01-20 01:12:00', '2022-01-20 03:19:19'),
(66, '1', 'Parent Guardian Detail', 'text', NULL, 'Guardian Occupation', 'guardian_occupation', '0', '0', '1', 38, '2022-01-20 01:12:29', '2022-01-20 03:19:19'),
(67, '1', 'Parent Guardian Detail', 'textarea', NULL, 'Guardian Address', 'guardian_address', '0', '0', '1', 39, '2022-01-20 01:12:57', '2022-01-20 03:19:19'),
(68, '1', 'Student Address Details', 'checkbox', '1', 'If Guardian Address is Current Address', 'if_guardian_address_is_current_address', '0', '0', '1', 40, '2022-01-20 01:15:01', '2022-01-20 03:19:19'),
(69, '1', 'Student Address Details', 'checkbox', '1', 'If Permanent Address is Current Address', 'if_permanent_address_is_current_address', '0', '0', '1', 41, '2022-01-20 01:15:29', '2022-01-20 03:19:19'),
(70, '1', 'Student Address Details', 'textarea', NULL, 'Current Address', 'current_address', '0', '0', '1', 42, '2022-01-20 01:16:02', '2022-01-20 03:19:19'),
(71, '1', 'Student Address Details', 'textarea', NULL, 'Permanent Address', 'permanent_address', '0', '0', '1', 43, '2022-01-20 01:16:21', '2022-01-20 03:19:20'),
(72, '1', 'Transport Details', 'select', NULL, 'Route List', 'route_list', '0', '0', '1', 44, '2022-01-20 01:17:15', '2022-01-20 03:19:20'),
(73, '1', 'Hostel Details', 'select', NULL, 'Hostel', 'hostel', '0', '0', '1', 45, '2022-01-20 01:21:28', '2022-01-20 03:19:20'),
(74, '1', 'Hostel Details', 'select', NULL, 'Room No', 'room_no', '0', '0', '1', 46, '2022-01-20 01:21:57', '2022-01-20 03:19:20'),
(75, '1', 'Miscellaneous Details', 'text', NULL, 'Bank Account Number', 'bank_account_number', '0', '0', '1', 47, '2022-01-20 01:22:27', '2022-01-20 03:19:20'),
(76, '1', 'Miscellaneous Details', 'text', NULL, 'Bank Name', 'bank_name', '0', '0', '1', 48, '2022-01-20 01:23:40', '2022-01-20 03:19:20'),
(77, '1', 'Miscellaneous Details', 'text', NULL, 'IFSC Code', 'ifsc_code', '0', '0', '1', 49, '2022-01-20 01:24:12', '2022-01-20 03:19:20'),
(78, '1', 'Miscellaneous Details', 'text', NULL, 'National Identification Number', 'national_identification_number', '0', '0', '1', 50, '2022-01-20 01:24:43', '2022-01-20 03:19:20'),
(79, '1', 'Miscellaneous Details', 'text', NULL, 'Birth Certificate Number', 'birth_certificate_number', '0', '0', '1', 51, '2022-01-20 01:25:53', '2022-01-20 03:19:20'),
(80, '1', 'Miscellaneous Details', 'radio', 'Yes,No', 'RTE', 'rte', '0', '0', '1', 52, '2022-01-20 01:26:38', '2022-01-20 03:19:20'),
(81, '1', 'Miscellaneous Details', 'textarea', NULL, 'Previous School Details', 'previous_school_details', '0', '0', '1', 53, '2022-01-20 01:27:16', '2022-01-20 03:19:20'),
(82, '1', 'Miscellaneous Details', 'textarea', NULL, 'Note', 'note', '0', '0', '1', 54, '2022-01-20 01:27:50', '2022-01-20 03:19:20'),
(83, '1', 'Upload Documents', 'text', NULL, 'Document Title', 'document_title', '0', '0', '1', 55, '2022-01-20 01:28:51', '2022-01-20 03:19:20'),
(84, '1', 'Upload Documents', 'file', NULL, 'Documents', 'documents', '0', '0', '1', 56, '2022-01-20 01:29:25', '2022-01-20 03:19:20'),
(85, '1', 'Sibling Details', 'text', NULL, 'Sibling Name', 'sibling_name', '0', '0', '1', 57, '2022-01-20 01:39:25', '2022-01-23 04:26:51'),
(87, '1', 'Student information', 'select', NULL, 'Department', 'department', '1', '0', '1', 3, '2022-01-20 01:46:27', '2022-01-23 06:17:10');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `class_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, '4', 'Science', 1, '2022-01-05 23:45:19', '2022-01-05 23:45:19'),
(2, '4', 'Humanities', 1, '2022-01-05 23:45:45', '2022-01-05 23:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `disable_reasons`
--

CREATE TABLE `disable_reasons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `disable_reasons`
--

INSERT INTO `disable_reasons` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Regular Absent', '2022-01-20 00:24:32', '2022-01-20 00:24:32');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(2) NOT NULL,
  `division_id` int(1) NOT NULL,
  `name` varchar(25) NOT NULL,
  `bn_name` varchar(25) NOT NULL,
  `lat` varchar(15) DEFAULT NULL,
  `lon` varchar(15) DEFAULT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `name`, `bn_name`, `lat`, `lon`, `url`) VALUES
(1, 1, 'Comilla', 'কুমিল্লা', '23.4682747', '91.1788135', 'www.comilla.gov.bd'),
(2, 1, 'Feni', 'ফেনী', '23.023231', '91.3840844', 'www.feni.gov.bd'),
(3, 1, 'Brahmanbaria', 'ব্রাহ্মণবাড়িয়া', '23.9570904', '91.1119286', 'www.brahmanbaria.gov.bd'),
(4, 1, 'Rangamati', 'রাঙ্গামাটি', NULL, NULL, 'www.rangamati.gov.bd'),
(5, 1, 'Noakhali', 'নোয়াখালী', '22.869563', '91.099398', 'www.noakhali.gov.bd'),
(6, 1, 'Chandpur', 'চাঁদপুর', '23.2332585', '90.6712912', 'www.chandpur.gov.bd'),
(7, 1, 'Lakshmipur', 'লক্ষ্মীপুর', '22.942477', '90.841184', 'www.lakshmipur.gov.bd'),
(8, 1, 'Chattogram', 'চট্টগ্রাম', '22.335109', '91.834073', 'www.chittagong.gov.bd'),
(9, 1, 'Coxsbazar', 'কক্সবাজার', NULL, NULL, 'www.coxsbazar.gov.bd'),
(10, 1, 'Khagrachhari', 'খাগড়াছড়ি', '23.119285', '91.984663', 'www.khagrachhari.gov.bd'),
(11, 1, 'Bandarban', 'বান্দরবান', '22.1953275', '92.2183773', 'www.bandarban.gov.bd'),
(12, 2, 'Sirajganj', 'সিরাজগঞ্জ', '24.4533978', '89.7006815', 'www.sirajganj.gov.bd'),
(13, 2, 'Pabna', 'পাবনা', '23.998524', '89.233645', 'www.pabna.gov.bd'),
(14, 2, 'Bogura', 'বগুড়া', '24.8465228', '89.377755', 'www.bogra.gov.bd'),
(15, 2, 'Rajshahi', 'রাজশাহী', NULL, NULL, 'www.rajshahi.gov.bd'),
(16, 2, 'Natore', 'নাটোর', '24.420556', '89.000282', 'www.natore.gov.bd'),
(17, 2, 'Joypurhat', 'জয়পুরহাট', NULL, NULL, 'www.joypurhat.gov.bd'),
(18, 2, 'Chapainawabganj', 'চাঁপাইনবাবগঞ্জ', '24.5965034', '88.2775122', 'www.chapainawabganj.gov.bd'),
(19, 2, 'Naogaon', 'নওগাঁ', NULL, NULL, 'www.naogaon.gov.bd'),
(20, 3, 'Jashore', 'যশোর', '23.16643', '89.2081126', 'www.jessore.gov.bd'),
(21, 3, 'Satkhira', 'সাতক্ষীরা', NULL, NULL, 'www.satkhira.gov.bd'),
(22, 3, 'Meherpur', 'মেহেরপুর', '23.762213', '88.631821', 'www.meherpur.gov.bd'),
(23, 3, 'Narail', 'নড়াইল', '23.172534', '89.512672', 'www.narail.gov.bd'),
(24, 3, 'Chuadanga', 'চুয়াডাঙ্গা', '23.6401961', '88.841841', 'www.chuadanga.gov.bd'),
(25, 3, 'Kushtia', 'কুষ্টিয়া', '23.901258', '89.120482', 'www.kushtia.gov.bd'),
(26, 3, 'Magura', 'মাগুরা', '23.487337', '89.419956', 'www.magura.gov.bd'),
(27, 3, 'Khulna', 'খুলনা', '22.815774', '89.568679', 'www.khulna.gov.bd'),
(28, 3, 'Bagerhat', 'বাগেরহাট', '22.651568', '89.785938', 'www.bagerhat.gov.bd'),
(29, 3, 'Jhenaidah', 'ঝিনাইদহ', '23.5448176', '89.1539213', 'www.jhenaidah.gov.bd'),
(30, 4, 'Jhalakathi', 'ঝালকাঠি', NULL, NULL, 'www.jhalakathi.gov.bd'),
(31, 4, 'Patuakhali', 'পটুয়াখালী', '22.3596316', '90.3298712', 'www.patuakhali.gov.bd'),
(32, 4, 'Pirojpur', 'পিরোজপুর', NULL, NULL, 'www.pirojpur.gov.bd'),
(33, 4, 'Barisal', 'বরিশাল', NULL, NULL, 'www.barisal.gov.bd'),
(34, 4, 'Bhola', 'ভোলা', '22.685923', '90.648179', 'www.bhola.gov.bd'),
(35, 4, 'Barguna', 'বরগুনা', NULL, NULL, 'www.barguna.gov.bd'),
(36, 5, 'Sylhet', 'সিলেট', '24.8897956', '91.8697894', 'www.sylhet.gov.bd'),
(37, 5, 'Moulvibazar', 'মৌলভীবাজার', '24.482934', '91.777417', 'www.moulvibazar.gov.bd'),
(38, 5, 'Habiganj', 'হবিগঞ্জ', '24.374945', '91.41553', 'www.habiganj.gov.bd'),
(39, 5, 'Sunamganj', 'সুনামগঞ্জ', '25.0658042', '91.3950115', 'www.sunamganj.gov.bd'),
(40, 6, 'Narsingdi', 'নরসিংদী', '23.932233', '90.71541', 'www.narsingdi.gov.bd'),
(41, 6, 'Gazipur', 'গাজীপুর', '24.0022858', '90.4264283', 'www.gazipur.gov.bd'),
(42, 6, 'Shariatpur', 'শরীয়তপুর', NULL, NULL, 'www.shariatpur.gov.bd'),
(43, 6, 'Narayanganj', 'নারায়ণগঞ্জ', '23.63366', '90.496482', 'www.narayanganj.gov.bd'),
(44, 6, 'Tangail', 'টাঙ্গাইল', NULL, NULL, 'www.tangail.gov.bd'),
(45, 6, 'Kishoreganj', 'কিশোরগঞ্জ', '24.444937', '90.776575', 'www.kishoreganj.gov.bd'),
(46, 6, 'Manikganj', 'মানিকগঞ্জ', NULL, NULL, 'www.manikganj.gov.bd'),
(47, 6, 'Dhaka', 'ঢাকা', '23.7115253', '90.4111451', 'www.dhaka.gov.bd'),
(48, 6, 'Munshiganj', 'মুন্সিগঞ্জ', NULL, NULL, 'www.munshiganj.gov.bd'),
(49, 6, 'Rajbari', 'রাজবাড়ী', '23.7574305', '89.6444665', 'www.rajbari.gov.bd'),
(50, 6, 'Madaripur', 'মাদারীপুর', '23.164102', '90.1896805', 'www.madaripur.gov.bd'),
(51, 6, 'Gopalganj', 'গোপালগঞ্জ', '23.0050857', '89.8266059', 'www.gopalganj.gov.bd'),
(52, 6, 'Faridpur', 'ফরিদপুর', '23.6070822', '89.8429406', 'www.faridpur.gov.bd'),
(53, 7, 'Panchagarh', 'পঞ্চগড়', '26.3411', '88.5541606', 'www.panchagarh.gov.bd'),
(54, 7, 'Dinajpur', 'দিনাজপুর', '25.6217061', '88.6354504', 'www.dinajpur.gov.bd'),
(55, 7, 'Lalmonirhat', 'লালমনিরহাট', NULL, NULL, 'www.lalmonirhat.gov.bd'),
(56, 7, 'Nilphamari', 'নীলফামারী', '25.931794', '88.856006', 'www.nilphamari.gov.bd'),
(57, 7, 'Gaibandha', 'গাইবান্ধা', '25.328751', '89.528088', 'www.gaibandha.gov.bd'),
(58, 7, 'Thakurgaon', 'ঠাকুরগাঁও', '26.0336945', '88.4616834', 'www.thakurgaon.gov.bd'),
(59, 7, 'Rangpur', 'রংপুর', '25.7558096', '89.244462', 'www.rangpur.gov.bd'),
(60, 7, 'Kurigram', 'কুড়িগ্রাম', '25.805445', '89.636174', 'www.kurigram.gov.bd'),
(61, 8, 'Sherpur', 'শেরপুর', '25.0204933', '90.0152966', 'www.sherpur.gov.bd'),
(62, 8, 'Mymensingh', 'ময়মনসিংহ', '24.7465670', '90.4072093', 'www.mymensingh.gov.bd'),
(63, 8, 'Jamalpur', 'জামালপুর', '24.937533', '89.937775', 'www.jamalpur.gov.bd'),
(64, 8, 'Netrokona', 'নেত্রকোণা', '24.870955', '90.727887', 'www.netrokona.gov.bd');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(1) NOT NULL,
  `name` varchar(25) NOT NULL,
  `bn_name` varchar(25) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `bn_name`, `url`) VALUES
(1, 'Chattagram', 'চট্টগ্রাম', 'www.chittagongdiv.gov.bd'),
(2, 'Rajshahi', 'রাজশাহী', 'www.rajshahidiv.gov.bd'),
(3, 'Khulna', 'খুলনা', 'www.khulnadiv.gov.bd'),
(4, 'Barisal', 'বরিশাল', 'www.barisaldiv.gov.bd'),
(5, 'Sylhet', 'সিলেট', 'www.sylhetdiv.gov.bd'),
(6, 'Dhaka', 'ঢাকা', 'www.dhakadiv.gov.bd'),
(7, 'Rangpur', 'রংপুর', 'www.rangpurdiv.gov.bd'),
(8, 'Mymensingh', 'ময়মনসিংহ', 'www.mymensinghdiv.gov.bd');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documents` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `student_id`, `document_title`, `documents`, `created_at`, `updated_at`) VALUES
(1, '4', '33', 'public/uploads/663328.png', '2022-01-23 04:13:25', '2022-01-23 04:13:25'),
(2, '4', '55', 'public/uploads/2022_01_20_04-56-18_am.pdf', '2022-01-23 04:13:25', '2022-01-23 04:13:25'),
(3, '6', 'birth certificate photo copy', 'sample.pdf', '2022-01-24 22:32:07', '2022-01-24 22:32:07');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exam_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `start_date`, `end_date`, `year`, `exam_name`, `created_at`, `updated_at`) VALUES
(1, '2022-01-01', '2022-01-10', '2022', '1st Term', '2022-01-06 08:00:32', '2022-01-06 08:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `exam_routines`
--

CREATE TABLE `exam_routines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sreni_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `followup_details`
--

CREATE TABLE `followup_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `follow_up_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `next_follow_up_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `response` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `followup_details`
--

INSERT INTO `followup_details` (`id`, `en_id`, `creator_name`, `follow_up_date`, `next_follow_up_date`, `response`, `note`, `created_at`, `updated_at`) VALUES
(28, '3', 'superadmin', '2022-01-13', '2022-01-27', 'fgfge', 'fdgdfg', '2022-01-27 05:32:26', '2022-01-27 05:32:26'),
(30, '3', 'superadmin', '2022-02-02', '2022-02-04', 'fdsfdf', 'fdsfsd', '2022-01-27 05:43:57', '2022-01-27 05:43:57'),
(31, '3', 'superadmin', '2022-01-13', '2022-01-27', 'dfds', 'dsd', '2022-01-27 05:45:41', '2022-01-27 05:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hostel_infos`
--

CREATE TABLE `hostel_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `intake` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hostel_infos`
--

INSERT INTO `hostel_infos` (`id`, `name`, `type`, `address`, `intake`, `des`, `created_at`, `updated_at`) VALUES
(2, 'bb101', 'Boys', '22', 'ewq', '22', '2022-01-19 05:08:21', '2022-01-19 05:08:21');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_rooms`
--

CREATE TABLE `hostel_rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number_or_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hostel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_bed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost_per_bed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hostel_rooms`
--

INSERT INTO `hostel_rooms` (`id`, `number_or_name`, `hostel`, `room_type`, `number_of_bed`, `cost_per_bed`, `des`, `created_at`, `updated_at`) VALUES
(2, '12', 'bb101', 'Two Bed AC', '22', '234', '4hhgh', '2022-01-19 05:29:53', '2022-01-19 05:29:53');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_room_types`
--

CREATE TABLE `hostel_room_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hostel_room_types`
--

INSERT INTO `hostel_room_types` (`id`, `room_type`, `des`, `created_at`, `updated_at`) VALUES
(2, 'Two Bed AC', 'wewe', '2022-01-19 04:39:20', '2022-01-19 04:39:20');

-- --------------------------------------------------------

--
-- Table structure for table `institute_information`
--

CREATE TABLE `institute_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_start_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institute_information`
--

INSERT INTO `institute_information` (`id`, `logo`, `name`, `code`, `address`, `phone`, `email`, `session`, `session_start_month`, `created_at`, `updated_at`) VALUES
(1, 'public/upload/360_F_449577153_bOSDZbYXIZZ138OGsWE33ffvyrKRkJh4.jpg', 'XYZ School', 'XYZ-123', 'Rajshahi', '01646735100', 'kkajol428@gmail.com', '2021-22', 'January', '2022-01-07 00:53:37', '2022-01-07 00:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sreni_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lesson` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `sreni_id`, `section_id`, `department_id`, `subject_id`, `lesson`, `created_at`, `updated_at`) VALUES
(2, '2', '1', '0', '2', NULL, '2022-01-13 04:51:54', '2022-01-13 04:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `lesson_lists`
--

CREATE TABLE `lesson_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lesson_table_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lesson_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lesson_lists`
--

INSERT INTO `lesson_lists` (`id`, `lesson_table_id`, `lesson_name`, `created_at`, `updated_at`) VALUES
(11, '2', 'Lesson 1', '2022-01-13 04:51:54', '2022-01-13 04:51:54'),
(12, '2', 'Lesson 2', '2022-01-13 04:51:54', '2022-01-13 04:51:54'),
(13, '2', 'Lesson 3', '2022-01-13 04:51:54', '2022-01-13 04:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `lesson_plans`
--

CREATE TABLE `lesson_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lesson_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teaching_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `general_objectives` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `previous_knnowledge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comprehensive_question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_students`
--

CREATE TABLE `main_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admission_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roll_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caste` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admission_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `as_on_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medical_history` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_yearly_incme` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_yearly_income` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `if_guardian_is` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `if_guardian_address_is_current_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `if_permanent_address_is_current_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route_list` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hostel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifsc_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `national_identification_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_certificate_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rte` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_school_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disable_reason` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_students`
--

INSERT INTO `main_students` (`id`, `admission_no`, `roll_number`, `class`, `section`, `department`, `first_name`, `last_name`, `gender`, `date_of_birth`, `category`, `religion`, `caste`, `mobile_number`, `email`, `admission_date`, `student_photo`, `blood_group`, `student_house`, `height`, `weight`, `as_on_date`, `medical_history`, `father_name`, `father_phone`, `father_occupation`, `father_yearly_incme`, `father_photo`, `mother_name`, `mother_phone`, `mother_occupation`, `mother_yearly_income`, `mother_photo`, `if_guardian_is`, `guardian_name`, `guardian_relation`, `guardian_email`, `guardian_photo`, `guardian_phone`, `guardian_occupation`, `guardian_address`, `if_guardian_address_is_current_address`, `if_permanent_address_is_current_address`, `current_address`, `permanent_address`, `route_list`, `hostel`, `room_no`, `bank_account_number`, `bank_name`, `ifsc_code`, `national_identification_number`, `birth_certificate_number`, `rte`, `previous_school_details`, `note`, `disable_reason`, `created_at`, `updated_at`) VALUES
(9, 'Omar', 'Ginger', 'Class One', 'A', 'not available', 'Orlando', 'Thor', 'Female', '1979-09-30', 'Special', 'Randall', 'Lacy', 'Uta', 'ruqyhi@mailinator.com', '2007-01-02', NULL, 'B-', 'Red', 'Georgia', 'Lester', '1994-06-03', 'Libero dignissimos e', 'Illiana Harrell', '+1 (583) 269-8344', 'Quos quaerat enim co', 'Ifeoma', NULL, 'Melanie Walker', '+1 (221) 936-5548', 'Aut quo cillum quae', 'Erin', NULL, 'Father', 'Laith Benjamin', 'Dolor aute quae cum', 'Darryl', NULL, '+1 (621) 365-4046', 'Iusto sed amet sed', 'Aliquam similique qu', NULL, NULL, NULL, NULL, '----Please Select ----', '----Please Select ----', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Regular Absent', '2022-01-25 05:22:22', '2022-01-25 05:43:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2021_03_18_095906_create_permission_tables', 1),
(13, '2021_03_24_112406_create_admins_table', 2),
(14, '2021_04_19_145459_create_certificatenames_table', 3),
(15, '2021_04_19_145710_create_certificate_details_table', 3),
(16, '2021_04_19_145817_create_people_table', 3),
(17, '2021_04_19_145929_create_admin_notices_table', 3),
(18, '2021_04_22_061049_create_wards_table', 4),
(19, '2021_04_22_063921_create_payments_table', 5),
(20, '2021_04_22_140659_create_families_table', 6),
(21, '2021_04_22_141020_create_inheritances_table', 6),
(22, '2021_04_22_141156_create_incomes_table', 6),
(23, '2021_04_22_165442_create_emergenies_table', 7),
(24, '2021_04_22_165544_create_plantiffs_table', 7),
(25, '2021_04_22_165828_create_defends_table', 7),
(26, '2021_04_23_081802_create_second_merrages_table', 8),
(27, '2021_04_23_082109_create_merrages_table', 8),
(28, '2021_04_23_082135_create_appwhoms_table', 8),
(29, '2021_04_23_082224_create_applications_table', 9),
(30, '2021_04_23_105440_create_certificate_histories_table', 10),
(31, '2021_04_23_112800_create_certificate_histories_table', 11),
(32, '2021_05_08_083153_create_payment_histories_table', 12),
(33, '2021_07_06_061728_create_other_certificates_table', 12),
(34, '2021_07_06_080950_create_death_certificates_table', 13),
(35, '2021_07_12_183054_create_civilinfos_table', 14),
(36, '2021_07_12_183504_create_civilinfobans_table', 14),
(37, '2021_07_27_161729_create_news_categories_table', 15),
(38, '2021_07_27_162128_create_news_lists_table', 15),
(39, '2021_07_27_162400_create_repoter_names_table', 15),
(40, '2021_07_27_162437_create_event_lists_table', 15),
(41, '2021_07_29_111907_create_guestlists_table', 16),
(42, '2021_08_16_053724_create_pdfdesigns_table', 17),
(43, '2021_08_16_061819_create_pdfdesignones_table', 17),
(44, '2021_08_16_061910_create_pdfdesigntwos_table', 17),
(45, '2021_11_23_044906_create_parental_permits_table', 18),
(46, '2021_12_21_060328_create_cer_print_counts_table', 19),
(47, '2022_01_05_102749_create_sranis_table', 20),
(48, '2022_01_05_103017_create_departments_table', 20),
(49, '2022_01_05_103115_create_sections_table', 20),
(50, '2022_01_05_103208_create_subjects_table', 20),
(51, '2022_01_05_103319_create_students_table', 20),
(52, '2022_01_05_103404_create_teachers_table', 20),
(53, '2022_01_05_103458_create_noticeboards_table', 20),
(54, '2022_01_05_103555_create_events_table', 20),
(55, '2022_01_05_103643_create_holidays_table', 20),
(56, '2022_01_05_103719_create_results_table', 20),
(57, '2022_01_05_111512_create_exams_table', 20),
(58, '2022_01_05_111840_create_assaign_teacher_to_classes_table', 21),
(59, '2022_01_05_112143_create_assaign_teacher_to_subjects_table', 21),
(60, '2022_01_05_112343_create_assign_class_to_teachers_table', 21),
(61, '2022_01_05_112431_create_assignteacher_to_exans_table', 21),
(62, '2022_01_05_112522_create_assaign_teacher_to_events_table', 21),
(63, '2022_01_05_112638_create_parents_table', 21),
(64, '2022_01_05_112902_create_assign_teacher_to_addresuls_table', 21),
(65, '2022_01_05_113004_create_exam_routines_table', 21),
(66, '2022_01_05_113325_create_class_routines_table', 21),
(67, '2022_01_05_113412_create_attendences_table', 21),
(68, '2022_01_06_140418_create_institute_information_table', 22),
(69, '2022_01_09_062348_create_classrooms_table', 23),
(70, '2022_01_09_081105_create_class_shedules_table', 24),
(71, '2022_01_13_044242_create_sources_table', 25),
(72, '2022_01_13_044345_create_complain_types_table', 25),
(73, '2022_01_13_044418_create_purposes_table', 25),
(74, '2022_01_13_044618_create_references_table', 25),
(75, '2022_01_13_044650_create_complains_table', 26),
(76, '2022_01_13_044816_create_postal_receives_table', 26),
(77, '2022_01_13_044907_create_postal_dispatches_table', 26),
(78, '2022_01_13_045103_create_phone_call_logs_table', 26),
(79, '2022_01_13_045127_create_visitors_table', 26),
(80, '2022_01_13_045249_create_admission_enquiries_table', 26),
(81, '2022_01_13_065744_create_topics_table', 27),
(82, '2022_01_13_070003_create_lessons_table', 27),
(83, '2022_01_13_070143_create_lesson_plans_table', 27),
(84, '2022_01_13_080116_create_lesson_lists_table', 28),
(85, '2022_01_13_080147_create_topic_lists_table', 28),
(86, '2022_01_16_092455_create_custome_fields_table', 29),
(87, '2022_01_18_111229_create_teststudents_table', 30),
(88, '2022_01_19_075813_create_vehicles_table', 31),
(89, '2022_01_19_080009_create_vechile_routes_table', 31),
(90, '2022_01_19_080941_create_hostel_rooms_table', 31),
(91, '2022_01_19_081013_create_hostel_room_types_table', 31),
(92, '2022_01_19_081056_create_hostel_infos_table', 31),
(93, '2022_01_20_050002_create_student_categories_table', 32),
(94, '2022_01_20_050305_create_student_houses_table', 32),
(95, '2022_01_20_050408_create_disable_reasons_table', 32),
(96, '2022_01_20_093839_create_main_students_table', 33),
(97, '2022_01_20_094111_create_documents_table', 33),
(98, '2022_01_20_094227_create_siblings_table', 33),
(99, '2022_01_25_103106_create_assign_reasons_table', 34),
(100, '2022_01_27_085831_create_followup_details_table', 35);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Admin', 1),
(1, 'App\\User', 1),
(2, 'App\\Models\\Admin', 2),
(2, 'App\\Models\\Admin', 9),
(8, 'App\\Models\\Admin', 8),
(8, 'App\\Models\\Admin', 10),
(8, 'App\\Models\\Admin', 13),
(8, 'App\\Models\\Admin', 16);

-- --------------------------------------------------------

--
-- Table structure for table `noticeboards`
--

CREATE TABLE `noticeboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pdfdesignones`
--

CREATE TABLE `pdfdesignones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid/birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wife_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `daughter_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resident` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pdfdesigns`
--

CREATE TABLE `pdfdesigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qr_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `counsilor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pdfdesigntwos`
--

CREATE TABLE `pdfdesigntwos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `certificate_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allformate` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard.view', 'admin', 'dashboard', '2021-03-24 02:04:15', '2021-03-24 02:04:15'),
(2, 'dashboard.edit', 'admin', 'dashboard', '2021-03-24 02:04:15', '2021-03-24 02:04:15'),
(8, 'admin.create', 'admin', 'admin', '2021-03-24 02:04:16', '2021-03-24 02:04:16'),
(9, 'admin.view', 'admin', 'admin', '2021-03-24 02:04:16', '2021-03-24 02:04:16'),
(10, 'admin.edit', 'admin', 'admin', '2021-03-24 02:04:16', '2021-03-24 02:04:16'),
(11, 'admin.delete', 'admin', 'admin', '2021-03-24 02:04:16', '2021-03-24 02:04:16'),
(12, 'admin.approve', 'admin', 'admin', '2021-03-24 02:04:16', '2021-03-24 02:04:16'),
(13, 'role.create', 'admin', 'role', '2021-03-24 02:04:16', '2021-03-24 02:04:16'),
(14, 'role.view', 'admin', 'role', '2021-03-24 02:04:16', '2021-03-24 02:04:16'),
(15, 'role.edit', 'admin', 'role', '2021-03-24 02:04:17', '2021-03-24 02:04:17'),
(16, 'role.delete', 'admin', 'role', '2021-03-24 02:04:17', '2021-03-24 02:04:17'),
(17, 'role.approve', 'admin', 'role', '2021-03-24 02:04:17', '2021-03-24 02:04:17'),
(18, 'profile.view', 'admin', 'profile', '2021-03-24 02:04:17', '2021-03-24 02:04:17'),
(19, 'profile.edit', 'admin', 'profile', '2021-03-24 02:04:17', '2021-03-24 02:04:17'),
(20, 'permission.create', 'admin', 'permission', NULL, NULL),
(21, 'permission.view', 'admin', 'permission', NULL, NULL),
(22, 'permission.edit', 'admin', 'permission', NULL, NULL),
(23, 'permission.delete', 'admin', 'permission', NULL, NULL),
(29, 'user.create', 'admin', 'User', NULL, NULL),
(30, 'user.view', 'admin', 'User', NULL, NULL),
(31, 'user.edit', 'admin', 'User', NULL, NULL),
(32, 'user.delete', 'admin', 'User', NULL, NULL),
(33, 'user.print', 'admin', 'User', NULL, NULL),
(50, 'notice.create', 'admin', 'Notice', NULL, NULL),
(51, 'notice.view', 'admin', 'Notice', NULL, NULL),
(52, 'notice.delete', 'admin', 'Notice', NULL, NULL),
(53, 'notice.edit', 'admin', 'Notice', NULL, NULL),
(55, 'profile.test', 'admin', 'profile', NULL, NULL),
(72, 'data.add', 'admin', 'DataInsert', NULL, NULL),
(73, 'nc.create', 'admin', 'Newscategory', NULL, NULL),
(74, 'nc.view', 'admin', 'Newscategory', NULL, NULL),
(75, 'nc.delete', 'admin', 'Newscategory', NULL, NULL),
(76, 'nc.edit', 'admin', 'Newscategory', NULL, NULL),
(81, 'news.create', 'admin', 'News List', NULL, NULL),
(82, 'news.view', 'admin', 'News List', NULL, NULL),
(83, 'news.delete', 'admin', 'News List', NULL, NULL),
(84, 'news.edit', 'admin', 'News List', NULL, NULL),
(86, 'event.view', 'admin', 'Event List', NULL, NULL),
(87, 'event.delete', 'admin', 'Event List', NULL, NULL),
(92, 'class_create', 'admin', 'Class', NULL, NULL),
(93, 'class_store', 'admin', 'Class', NULL, NULL),
(94, 'class_update', 'admin', 'Class', NULL, NULL),
(95, 'class_delete', 'admin', 'Class', NULL, NULL),
(96, 'dp_create', 'admin', 'Department', NULL, NULL),
(97, 'dp_store', 'admin', 'Department', NULL, NULL),
(98, 'dp_update', 'admin', 'Department', NULL, NULL),
(99, 'dp_delete', 'admin', 'Department', NULL, NULL),
(100, 'section_create', 'admin', 'Section', NULL, NULL),
(101, 'section_store', 'admin', 'Section', NULL, NULL),
(102, 'section_update', 'admin', 'Section', NULL, NULL),
(103, 'section_delete', 'admin', 'Section', NULL, NULL),
(104, 'subject_create', 'admin', 'Subject', NULL, NULL),
(105, 'subject_store', 'admin', 'Subject', NULL, NULL),
(106, 'subject_update', 'admin', 'Subject', NULL, NULL),
(107, 'subject_delete', 'admin', 'Subject', NULL, NULL),
(108, 'student_create', 'admin', 'Student', NULL, NULL),
(109, 'student_store', 'admin', 'Student', NULL, NULL),
(110, 'student_update', 'admin', 'Student', NULL, NULL),
(111, 'student_delete', 'admin', 'Student', NULL, NULL),
(112, 'teacher_create', 'admin', 'Teacher', NULL, NULL),
(113, 'teacher_store', 'admin', 'Teacher', NULL, NULL),
(114, 'teacher_update', 'admin', 'Teacher', NULL, NULL),
(115, 'teacher_delete', 'admin', 'Teacher', NULL, NULL),
(116, 'student_view', 'admin', 'Student', NULL, NULL),
(117, 'exam_create', 'admin', 'Exam', NULL, NULL),
(118, 'exam_store', 'admin', 'Exam', NULL, NULL),
(119, 'exam_update', 'admin', 'Exam', NULL, NULL),
(120, 'exam_delete', 'admin', 'Exam', NULL, NULL),
(121, 'ins_create', 'admin', 'Institute', NULL, NULL),
(122, 'ins_view', 'admin', 'Institute', NULL, NULL),
(123, 'ins_update', 'admin', 'Institute', NULL, NULL),
(124, 'ins_delete', 'admin', 'Institute', NULL, NULL),
(125, 'result_view', 'admin', 'Result', NULL, NULL),
(126, 'result_create', 'admin', 'Result', NULL, NULL),
(127, 'result_edit', 'admin', 'Result', NULL, NULL),
(128, 'result_delete', 'admin', 'Result', NULL, NULL),
(129, 'academic_view', 'admin', 'Academic', NULL, NULL),
(130, 'ct_add', 'admin', 'Class_teacher', NULL, NULL),
(131, 'ct_view', 'admin', 'Class_teacher', NULL, NULL),
(132, 'ct_update', 'admin', 'Class_teacher', NULL, NULL),
(133, 'ct_delete', 'admin', 'Class_teacher', NULL, NULL),
(134, 'cr_view', 'admin', 'Class Room', NULL, NULL),
(135, 'cr_add', 'admin', 'Class Room', NULL, NULL),
(136, 'cr_update', 'admin', 'Class Room', NULL, NULL),
(137, 'cr_delete', 'admin', 'Class Room', NULL, NULL),
(138, 'clr_add', 'admin', 'class_routine', NULL, NULL),
(139, 'clr_view', 'admin', 'class_routine', NULL, NULL),
(140, 'clr_delete', 'admin', 'class_routine', NULL, NULL),
(141, 'clr_update', 'admin', 'class_routine', NULL, NULL),
(142, 'cs_create', 'admin', 'Class_schedule', NULL, NULL),
(143, 'cs_view', 'admin', 'Class_schedule', NULL, NULL),
(144, 'cs_delete', 'admin', 'Class_schedule', NULL, NULL),
(145, 'cs_update', 'admin', 'Class_schedule', NULL, NULL),
(146, 'sta_add', 'admin', 'Student_Attendance', NULL, NULL),
(147, 'sta_view', 'admin', 'Student_Attendance', NULL, NULL),
(148, 'sta_update', 'admin', 'Student_Attendance', NULL, NULL),
(149, 'sta_delete', 'admin', 'Student_Attendance', NULL, NULL),
(150, 'pur_create', 'admin', 'Purpose', NULL, NULL),
(151, 'pur_store', 'admin', 'Purpose', NULL, NULL),
(152, 'pur_update', 'admin', 'Purpose', NULL, NULL),
(153, 'pur_delete', 'admin', 'Purpose', NULL, NULL),
(157, 'cot_create', 'admin', 'Complain Type', NULL, NULL),
(158, 'cot_store', 'admin', 'Complain Type', NULL, NULL),
(159, 'cot_update', 'admin', 'Complain Type', NULL, NULL),
(160, 'cot_delete', 'admin', 'Complain Type', NULL, NULL),
(161, 'ss_create', 'admin', 'Source', NULL, NULL),
(162, 'ss_store', 'admin', 'Source', NULL, NULL),
(163, 'ss_update', 'admin', 'Source', NULL, NULL),
(164, 'ss_delete', 'admin', 'Source', NULL, NULL),
(165, 'rr_create', 'admin', 'Reference', NULL, NULL),
(166, 'rr_store', 'admin', 'Reference', NULL, NULL),
(167, 'rr_update', 'admin', 'Reference', NULL, NULL),
(168, 'rr_delete', 'admin', 'Reference', NULL, NULL),
(169, 'cc_create', 'admin', 'Complain', NULL, NULL),
(170, 'cc_store', 'admin', 'Complain', NULL, NULL),
(171, 'cc_update', 'admin', 'Complain', NULL, NULL),
(172, 'cc_delete', 'admin', 'Complain', NULL, NULL),
(173, 'psr_create', 'admin', 'Postal Receive', NULL, NULL),
(174, 'psr_store', 'admin', 'Postal Receive', NULL, NULL),
(175, 'psr_update', 'admin', 'Postal Receive', NULL, NULL),
(176, 'psr_delete', 'admin', 'Postal Receive', NULL, NULL),
(182, 'pod_create', 'admin', 'Postal Dispatch', NULL, NULL),
(183, 'pod_store', 'admin', 'Postal Dispatch', NULL, NULL),
(184, 'pod_update', 'admin', 'Postal Dispatch', NULL, NULL),
(185, 'pod_delete', 'admin', 'Postal Dispatch', NULL, NULL),
(186, 'pcl_create', 'admin', 'Phone Call Log', NULL, NULL),
(187, 'pcl_store', 'admin', 'Phone Call Log', NULL, NULL),
(188, 'pcl_update', 'admin', 'Phone Call Log', NULL, NULL),
(189, 'pcl_delete', 'admin', 'Phone Call Log', NULL, NULL),
(190, 'visitor_create', 'admin', 'Visitor Book', NULL, NULL),
(191, 'visitor_store', 'admin', 'Visitor Book', NULL, NULL),
(192, 'visitor_update', 'admin', 'Visitor Book', NULL, NULL),
(193, 'visitor_delete', 'admin', 'Visitor Book', NULL, NULL),
(194, 'ae_create', 'admin', 'Admission Enquiry', NULL, NULL),
(195, 'ae_store', 'admin', 'Admission Enquiry', NULL, NULL),
(196, 'ae_delete', 'admin', 'Admission Enquiry', NULL, NULL),
(197, 'ae_update', 'admin', 'Admission Enquiry', NULL, NULL),
(198, 'les_create', 'admin', 'Lesson', NULL, NULL),
(199, 'les_store', 'admin', 'Lesson', NULL, NULL),
(200, 'les_update', 'admin', 'Lesson', NULL, NULL),
(201, 'les_delete', 'admin', 'Lesson', NULL, NULL),
(202, 'topic_create', 'admin', 'Topic', NULL, NULL),
(203, 'topic_store', 'admin', 'Topic', NULL, NULL),
(204, 'topic_update', 'admin', 'Topic', NULL, NULL),
(205, 'topic_delete', 'admin', 'Topic', NULL, NULL),
(206, 'lep_create', 'admin', 'Lesson_plan', NULL, NULL),
(207, 'lep_store', 'admin', 'Lesson_plan', NULL, NULL),
(208, 'lep_update', 'admin', 'Lesson_plan', NULL, NULL),
(209, 'lep_delete', 'admin', 'Lesson_plan', NULL, NULL),
(210, 'sy_status_view', 'admin', 'Syllabus Status', NULL, NULL),
(211, 'sy_status_update', 'admin', 'Syllabus Status', NULL, NULL),
(212, 'cusf_add', 'admin', 'Custome Field', NULL, NULL),
(213, 'cusf_store', 'admin', 'Custome Field', NULL, NULL),
(214, 'cusf_update', 'admin', 'Custome Field', NULL, NULL),
(215, 'cusf_delete', 'admin', 'Custome Field', NULL, NULL),
(216, 'sysf_view', 'admin', 'System Field', NULL, NULL),
(217, 'sysf_update', 'admin', 'System Field', NULL, NULL),
(218, 'route_add', 'admin', 'Route', NULL, NULL),
(219, 'route_view', 'admin', 'Route', NULL, NULL),
(220, 'route_update', 'admin', 'Route', NULL, NULL),
(221, 'route_delete', 'admin', 'Route', NULL, NULL),
(222, 'vehicle_add', 'admin', 'Vehicle', NULL, NULL),
(223, 'vehicle_view', 'admin', 'Vehicle', NULL, NULL),
(224, 'vehicle_update', 'admin', 'Vehicle', NULL, NULL),
(225, 'vehicle_delete', 'admin', 'Vehicle', NULL, '2022-01-19 02:21:26'),
(226, 'hostel_add', 'admin', 'Hostel', NULL, NULL),
(227, 'hostel_view', 'admin', 'Hostel', NULL, NULL),
(228, 'hostel_update', 'admin', 'Hostel', NULL, NULL),
(229, 'hostel_delete', 'admin', 'Hostel', NULL, NULL),
(230, 'hostel_room_add', 'admin', 'Hostel Room', NULL, NULL),
(231, 'hostel_room_view', 'admin', 'Hostel Room', NULL, NULL),
(232, 'hostel_room_update', 'admin', 'Hostel Room', NULL, NULL),
(233, 'hostel_room_delete', 'admin', 'Hostel Room', NULL, NULL),
(234, 'hostel_room_type_add', 'admin', 'Hostel Room Type', NULL, NULL),
(235, 'hostel_room_type_view', 'admin', 'Hostel Room Type', NULL, NULL),
(236, 'hostel_room_type_update', 'admin', 'Hostel Room Type', NULL, NULL),
(237, 'hostel_room_type_delete', 'admin', 'Hostel Room Type', NULL, NULL),
(238, 'student_category_add', 'admin', 'Student Category', NULL, NULL),
(239, 'student_category_view', 'admin', 'Student Category', NULL, NULL),
(240, 'student_category_update', 'admin', 'Student Category', NULL, NULL),
(241, 'student_category_delete', 'admin', 'Student Category', NULL, NULL),
(242, 'student_house_add', 'admin', 'Student House', NULL, NULL),
(243, 'student_house_view', 'admin', 'Student House', NULL, NULL),
(244, 'student_house_update', 'admin', 'Student House', NULL, NULL),
(245, 'student_house_delete', 'admin', 'Student House', NULL, NULL),
(246, 'disable_reason_add', 'admin', 'Disable Reason', NULL, NULL),
(247, 'disable_reason_view', 'admin', 'Disable Reason', NULL, NULL),
(248, 'disable_reason_update', 'admin', 'Disable Reason', NULL, NULL),
(249, 'disable_reason_delete', 'admin', 'Disable Reason', NULL, NULL),
(250, 'student_bulk_delete.view', 'admin', 'student_bulk_delete', NULL, NULL),
(251, 'student_bulk_delete.update', 'admin', 'student_bulk_delete', NULL, NULL),
(252, 'student_disable.view', 'admin', 'student_disable', NULL, NULL),
(253, 'student_disable.update', 'admin', 'student_disable', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `phone_call_logs`
--

CREATE TABLE `phone_call_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `next_follow_up_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `call_duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `call_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phone_call_logs`
--

INSERT INTO `phone_call_logs` (`id`, `name`, `phone`, `date`, `des`, `next_follow_up_date`, `call_duration`, `note`, `call_type`, `created_at`, `updated_at`) VALUES
(1, 'Electricity Office', '45646421', '2022-01-22', 'ewrwer', '2022-01-22', '00:45:00', 'ergfter', 'Outgoing', '2022-01-26 03:39:28', '2022-01-26 03:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `postal_dispatches`
--

CREATE TABLE `postal_dispatches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `to_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refrence_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `postal_dispatches`
--

INSERT INTO `postal_dispatches` (`id`, `to_title`, `refrence_no`, `address`, `note`, `from_title`, `date`, `document`, `created_at`, `updated_at`) VALUES
(2, 'Pre Board Exam', '25412', 'Delhi', 'ghfgh', 'Private School,', '2022-01-14', '1643105066 (1).pdf', '2022-01-26 02:16:59', '2022-01-26 02:16:59');

-- --------------------------------------------------------

--
-- Table structure for table `postal_receives`
--

CREATE TABLE `postal_receives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refrence_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `postal_receives`
--

INSERT INTO `postal_receives` (`id`, `from_title`, `refrence_no`, `address`, `note`, `to_title`, `date`, `document`, `created_at`, `updated_at`) VALUES
(1, 'ICSE Department', '34564', 'Central Delhi', 'ddd', 'NCRT Publication', '2022-01-29', '1643105066.pdf', '2022-01-26 02:02:21', '2022-01-26 02:02:21');

-- --------------------------------------------------------

--
-- Table structure for table `purposes`
--

CREATE TABLE `purposes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purposes`
--

INSERT INTO `purposes` (`id`, `name`, `des`, `created_at`, `updated_at`) VALUES
(1, 'Marketing', 'Marketing', '2022-01-26 00:04:36', '2022-01-26 00:04:36'),
(2, 'Parent Teacher Meeting', 'Parent Teacher Meeting', '2022-01-26 00:04:48', '2022-01-26 00:04:48');

-- --------------------------------------------------------

--
-- Table structure for table `references`
--

CREATE TABLE `references` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `references`
--

INSERT INTO `references` (`id`, `name`, `des`, `created_at`, `updated_at`) VALUES
(1, 'Staff', 'Staff', '2022-01-25 23:54:46', '2022-01-25 23:54:46'),
(3, 'Parent', 'Parent', '2022-01-25 23:55:35', '2022-01-25 23:55:35');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sreni_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `students_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exam_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `com` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roll` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exam_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `written_exam` int(11) DEFAULT 0,
  `prac_exam` int(11) DEFAULT 0,
  `mcq_exam` int(11) DEFAULT 0,
  `1st_tuto_exam` int(11) DEFAULT 0,
  `2nd_tuto_exam` int(11) DEFAULT 0,
  `3rd_tuto_exam` int(11) DEFAULT 0,
  `tuto_per` int(11) NOT NULL DEFAULT 0,
  `tuto_total` int(11) DEFAULT 0,
  `viva` int(11) DEFAULT 0,
  `behave` int(11) DEFAULT NULL,
  `main_total` int(11) NOT NULL DEFAULT 0,
  `all_total` int(11) DEFAULT 0,
  `grade_point` int(11) NOT NULL DEFAULT 0,
  `grade_letter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `sreni_id`, `department_id`, `section_id`, `subject_id`, `students_id`, `exam_id`, `com`, `roll`, `exam_name`, `written_exam`, `prac_exam`, `mcq_exam`, `1st_tuto_exam`, `2nd_tuto_exam`, `3rd_tuto_exam`, `tuto_per`, `tuto_total`, `viva`, `behave`, `main_total`, `all_total`, `grade_point`, `grade_letter`, `status`, `created_at`, `updated_at`) VALUES
(2, '2', '0', '1', '1', '1', '1', NULL, '1', NULL, 55, NULL, NULL, 0, 0, 0, 0, 0, 0, NULL, 55, 0, 3, 'B', 1, '2022-01-07 03:41:42', '2022-01-07 11:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'admin', '2021-03-24 02:04:14', '2021-03-24 02:04:14'),
(2, 'admin', 'admin', '2021-03-24 02:04:14', '2021-03-24 02:04:14');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(15, 1),
(16, 1),
(17, 1),
(17, 2),
(18, 1),
(18, 2),
(19, 1),
(19, 2),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(55, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(86, 1),
(87, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(109, 1),
(110, 1),
(111, 1),
(112, 1),
(113, 1),
(114, 1),
(115, 1),
(116, 1),
(117, 1),
(118, 1),
(119, 1),
(120, 1),
(121, 1),
(122, 1),
(123, 1),
(124, 1),
(125, 1),
(126, 1),
(127, 1),
(128, 1),
(129, 1),
(130, 1),
(131, 1),
(132, 1),
(133, 1),
(134, 1),
(135, 1),
(136, 1),
(137, 1),
(138, 1),
(139, 1),
(140, 1),
(141, 1),
(142, 1),
(143, 1),
(144, 1),
(145, 1),
(146, 1),
(147, 1),
(148, 1),
(149, 1),
(150, 1),
(151, 1),
(152, 1),
(153, 1),
(157, 1),
(158, 1),
(159, 1),
(160, 1),
(161, 1),
(162, 1),
(163, 1),
(164, 1),
(165, 1),
(166, 1),
(167, 1),
(168, 1),
(169, 1),
(170, 1),
(171, 1),
(172, 1),
(173, 1),
(174, 1),
(175, 1),
(176, 1),
(182, 1),
(183, 1),
(184, 1),
(185, 1),
(186, 1),
(187, 1),
(188, 1),
(189, 1),
(190, 1),
(191, 1),
(192, 1),
(193, 1),
(194, 1),
(195, 1),
(196, 1),
(197, 1),
(198, 1),
(199, 1),
(200, 1),
(201, 1),
(202, 1),
(203, 1),
(204, 1),
(205, 1),
(206, 1),
(207, 1),
(208, 1),
(209, 1),
(210, 1),
(211, 1),
(212, 1),
(213, 1),
(214, 1),
(215, 1),
(216, 1),
(217, 1),
(218, 1),
(219, 1),
(220, 1),
(221, 1),
(222, 1),
(223, 1),
(224, 1),
(225, 1),
(226, 1),
(227, 1),
(228, 1),
(229, 1),
(230, 1),
(231, 1),
(232, 1),
(233, 1),
(234, 1),
(235, 1),
(236, 1),
(237, 1),
(238, 1),
(239, 1),
(240, 1),
(241, 1),
(242, 1),
(243, 1),
(244, 1),
(245, 1),
(246, 1),
(247, 1),
(248, 1),
(249, 1),
(250, 1),
(251, 1),
(252, 1),
(253, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `department_id`, `class_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, '--- Select Department ---', '2', 'A', 1, '2022-01-06 00:39:00', '2022-01-06 00:39:00'),
(2, '1', '4', 'Z', 1, '2022-01-06 00:39:18', '2022-01-06 00:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `siblings`
--

CREATE TABLE `siblings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sibling_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sibling_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sibling_section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sibling_department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siblings`
--

INSERT INTO `siblings` (`id`, `student_id`, `sibling_name`, `sibling_class`, `sibling_section`, `sibling_department`, `created_at`, `updated_at`) VALUES
(3, '4', '44', '44', NULL, NULL, '2022-01-24 02:28:25', '2022-01-24 02:28:25'),
(4, '4', '55', '55', NULL, NULL, '2022-01-24 02:28:25', '2022-01-24 02:28:25'),
(9, '7', 'kk', 'class two', NULL, NULL, '2022-01-24 22:49:52', '2022-01-24 22:49:52'),
(10, '7', 'ff', 'class four', NULL, NULL, '2022-01-24 22:49:52', '2022-01-24 22:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `sources`
--

CREATE TABLE `sources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sources`
--

INSERT INTO `sources` (`id`, `name`, `des`, `created_at`, `updated_at`) VALUES
(1, 'Front Office', 'Front Office', '2022-01-26 00:17:23', '2022-01-26 00:17:23'),
(2, 'Online Front Site', 'Online Front Site', '2022-01-26 00:17:36', '2022-01-26 00:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `sranis`
--

CREATE TABLE `sranis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sranis`
--

INSERT INTO `sranis` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Class One', 1, '2022-01-05 22:58:43', '2022-01-05 22:58:43'),
(3, 'Class Two', 1, '2022-01-05 22:58:57', '2022-01-05 22:58:57'),
(4, 'Class Nine', 1, '2022-01-05 22:59:26', '2022-01-05 22:59:26'),
(5, 'Class Three', 1, '2022-01-08 21:07:30', '2022-01-08 21:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sreni_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moher_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_roll` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `sreni_id`, `department_id`, `section_id`, `student_name`, `father_name`, `moher_name`, `student_phone`, `gender`, `student_email`, `student_address`, `student_dob`, `student_image`, `student_roll`, `status`, `year`, `month`, `created_at`, `updated_at`) VALUES
(1, '2', '0', '1', 'kkajol428@gmail.com', 'ff', 'fff', '01646735100', 'Male', 'kkajol428@gmail.com', 'Rajshahi', '2022-01-15', 'public/upload/map-marker.png', '1', 1, '2022', '01', '2022-01-06 05:51:43', '2022-01-06 05:51:43'),
(2, '4', '1', '2', 'm@gmail.com', 'ff', 'fff', '01646735100', 'Male', 'kkajol428@gmail.com', 'Rajshahi', '2022-01-13', 'public/upload/favicon.png', '1', 1, '2022', '01', '2022-01-06 05:54:08', '2022-01-06 05:54:08'),
(4, '2', '0', '1', 'ty', 'jtyuyti', 'iyu', 'tryt', 'Male', 'try@gmail.com', 'wetewt', '2022-01-12', 'public/upload/dabur-logo-1C73F58A2E-seeklogo.com.png', '2', 1, '2022', '01', '2022-01-10 05:34:22', '2022-01-10 05:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `student_categories`
--

CREATE TABLE `student_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_categories`
--

INSERT INTO `student_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'General', '2022-01-20 00:11:15', '2022-01-20 00:11:15'),
(3, 'Special', '2022-01-20 00:11:27', '2022-01-20 00:11:27');

-- --------------------------------------------------------

--
-- Table structure for table `student_houses`
--

CREATE TABLE `student_houses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_houses`
--

INSERT INTO `student_houses` (`id`, `name`, `des`, `created_at`, `updated_at`) VALUES
(1, 'Blue', NULL, '2022-01-20 00:16:46', '2022-01-20 00:16:46'),
(3, 'Red', 'best', '2022-01-20 00:17:29', '2022-01-20 00:17:29');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `class_id`, `department_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', '0', 'Bangla', 1, '2022-01-06 02:32:30', '2022-01-13 02:27:03'),
(2, '2', '0', 'English', 1, '2022-01-06 02:32:44', '2022-01-13 02:26:51'),
(3, '4', '1', 'Higher Math', 1, '2022-01-06 02:33:23', '2022-01-06 02:33:23'),
(4, '3', '0', 'Bangla', 1, '2022-01-06 02:35:25', '2022-01-13 02:26:37');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `phone`, `email`, `address`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Kamruzzaman kajol', '01646735100', 'kkajol428@gmail.com', 'Rajshahi', NULL, '2022-01-06 03:27:48', '2022-01-06 03:27:48'),
(2, 'rafa', '01646735100', 'rafa@gmail.com', 'Rajshahi_new', NULL, '2022-01-06 03:28:17', '2022-01-06 03:28:17');

-- --------------------------------------------------------

--
-- Table structure for table `teststudents`
--

CREATE TABLE `teststudents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roll_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teststudents`
--

INSERT INTO `teststudents` (`id`, `roll_number`, `first_name`, `last_name`, `mobile_number`, `email`, `created_at`, `updated_at`) VALUES
(1, '1', 'r', 'r', '34', 'superadmin@gmail.com', '2022-01-18 05:22:19', '2022-01-18 05:22:19');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sreni_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lesson_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `sreni_id`, `section_id`, `department_id`, `subject_id`, `lesson_id`, `topic`, `created_at`, `updated_at`) VALUES
(2, '2', '1', '0', '2', 'Lesson 1', NULL, '2022-01-18 01:25:43', '2022-01-18 01:25:43');

-- --------------------------------------------------------

--
-- Table structure for table `topic_lists`
--

CREATE TABLE `topic_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic_table_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lesson_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `topic_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topic_lists`
--

INSERT INTO `topic_lists` (`id`, `topic_table_id`, `lesson_id`, `topic_name`, `created_at`, `updated_at`) VALUES
(12, '2', NULL, '1', '2022-01-18 01:25:43', '2022-01-18 01:25:43'),
(13, '2', NULL, '1', '2022-01-18 01:25:43', '2022-01-18 01:25:43');

-- --------------------------------------------------------

--
-- Table structure for table `upazilas`
--

CREATE TABLE `upazilas` (
  `id` int(3) NOT NULL,
  `district_id` int(2) NOT NULL,
  `name` varchar(25) NOT NULL,
  `bn_name` varchar(25) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upazilas`
--

INSERT INTO `upazilas` (`id`, `district_id`, `name`, `bn_name`, `url`) VALUES
(1, 1, 'Debidwar', 'দেবিদ্বার', 'debidwar.comilla.gov.bd'),
(2, 1, 'Barura', 'বরুড়া', 'barura.comilla.gov.bd'),
(3, 1, 'Brahmanpara', 'ব্রাহ্মণপাড়া', 'brahmanpara.comilla.gov.bd'),
(4, 1, 'Chandina', 'চান্দিনা', 'chandina.comilla.gov.bd'),
(5, 1, 'Chauddagram', 'চৌদ্দগ্রাম', 'chauddagram.comilla.gov.bd'),
(6, 1, 'Daudkandi', 'দাউদকান্দি', 'daudkandi.comilla.gov.bd'),
(7, 1, 'Homna', 'হোমনা', 'homna.comilla.gov.bd'),
(8, 1, 'Laksam', 'লাকসাম', 'laksam.comilla.gov.bd'),
(9, 1, 'Muradnagar', 'মুরাদনগর', 'muradnagar.comilla.gov.bd'),
(10, 1, 'Nangalkot', 'নাঙ্গলকোট', 'nangalkot.comilla.gov.bd'),
(11, 1, 'Comilla Sadar', 'কুমিল্লা সদর', 'comillasadar.comilla.gov.bd'),
(12, 1, 'Meghna', 'মেঘনা', 'meghna.comilla.gov.bd'),
(13, 1, 'Monohargonj', 'মনোহরগঞ্জ', 'monohargonj.comilla.gov.bd'),
(14, 1, 'Sadarsouth', 'সদর দক্ষিণ', 'sadarsouth.comilla.gov.bd'),
(15, 1, 'Titas', 'তিতাস', 'titas.comilla.gov.bd'),
(16, 1, 'Burichang', 'বুড়িচং', 'burichang.comilla.gov.bd'),
(17, 1, 'Lalmai', 'লালমাই', 'lalmai.comilla.gov.bd'),
(18, 2, 'Chhagalnaiya', 'ছাগলনাইয়া', 'chhagalnaiya.feni.gov.bd'),
(19, 2, 'Feni Sadar', 'ফেনী সদর', 'sadar.feni.gov.bd'),
(20, 2, 'Sonagazi', 'সোনাগাজী', 'sonagazi.feni.gov.bd'),
(21, 2, 'Fulgazi', 'ফুলগাজী', 'fulgazi.feni.gov.bd'),
(22, 2, 'Parshuram', 'পরশুরাম', 'parshuram.feni.gov.bd'),
(23, 2, 'Daganbhuiyan', 'দাগনভূঞা', 'daganbhuiyan.feni.gov.bd'),
(24, 3, 'Brahmanbaria Sadar', 'ব্রাহ্মণবাড়িয়া সদর', 'sadar.brahmanbaria.gov.bd'),
(25, 3, 'Kasba', 'কসবা', 'kasba.brahmanbaria.gov.bd'),
(26, 3, 'Nasirnagar', 'নাসিরনগর', 'nasirnagar.brahmanbaria.gov.bd'),
(27, 3, 'Sarail', 'সরাইল', 'sarail.brahmanbaria.gov.bd'),
(28, 3, 'Ashuganj', 'আশুগঞ্জ', 'ashuganj.brahmanbaria.gov.bd'),
(29, 3, 'Akhaura', 'আখাউড়া', 'akhaura.brahmanbaria.gov.bd'),
(30, 3, 'Nabinagar', 'নবীনগর', 'nabinagar.brahmanbaria.gov.bd'),
(31, 3, 'Bancharampur', 'বাঞ্ছারামপুর', 'bancharampur.brahmanbaria.gov.bd'),
(32, 3, 'Bijoynagar', 'বিজয়নগর', 'bijoynagar.brahmanbaria.gov.bd    '),
(33, 4, 'Rangamati Sadar', 'রাঙ্গামাটি সদর', 'sadar.rangamati.gov.bd'),
(34, 4, 'Kaptai', 'কাপ্তাই', 'kaptai.rangamati.gov.bd'),
(35, 4, 'Kawkhali', 'কাউখালী', 'kawkhali.rangamati.gov.bd'),
(36, 4, 'Baghaichari', 'বাঘাইছড়ি', 'baghaichari.rangamati.gov.bd'),
(37, 4, 'Barkal', 'বরকল', 'barkal.rangamati.gov.bd'),
(38, 4, 'Langadu', 'লংগদু', 'langadu.rangamati.gov.bd'),
(39, 4, 'Rajasthali', 'রাজস্থলী', 'rajasthali.rangamati.gov.bd'),
(40, 4, 'Belaichari', 'বিলাইছড়ি', 'belaichari.rangamati.gov.bd'),
(41, 4, 'Juraichari', 'জুরাছড়ি', 'juraichari.rangamati.gov.bd'),
(42, 4, 'Naniarchar', 'নানিয়ারচর', 'naniarchar.rangamati.gov.bd'),
(43, 5, 'Noakhali Sadar', 'নোয়াখালী সদর', 'sadar.noakhali.gov.bd'),
(44, 5, 'Companiganj', 'কোম্পানীগঞ্জ', 'companiganj.noakhali.gov.bd'),
(45, 5, 'Begumganj', 'বেগমগঞ্জ', 'begumganj.noakhali.gov.bd'),
(46, 5, 'Hatia', 'হাতিয়া', 'hatia.noakhali.gov.bd'),
(47, 5, 'Subarnachar', 'সুবর্ণচর', 'subarnachar.noakhali.gov.bd'),
(48, 5, 'Kabirhat', 'কবিরহাট', 'kabirhat.noakhali.gov.bd'),
(49, 5, 'Senbug', 'সেনবাগ', 'senbug.noakhali.gov.bd'),
(50, 5, 'Chatkhil', 'চাটখিল', 'chatkhil.noakhali.gov.bd'),
(51, 5, 'Sonaimori', 'সোনাইমুড়ী', 'sonaimori.noakhali.gov.bd'),
(52, 6, 'Haimchar', 'হাইমচর', 'haimchar.chandpur.gov.bd'),
(53, 6, 'Kachua', 'কচুয়া', 'kachua.chandpur.gov.bd'),
(54, 6, 'Shahrasti', 'শাহরাস্তি	', 'shahrasti.chandpur.gov.bd'),
(55, 6, 'Chandpur Sadar', 'চাঁদপুর সদর', 'sadar.chandpur.gov.bd'),
(56, 6, 'Matlab South', 'মতলব দক্ষিণ', 'matlabsouth.chandpur.gov.bd'),
(57, 6, 'Hajiganj', 'হাজীগঞ্জ', 'hajiganj.chandpur.gov.bd'),
(58, 6, 'Matlab North', 'মতলব উত্তর', 'matlabnorth.chandpur.gov.bd'),
(59, 6, 'Faridgonj', 'ফরিদগঞ্জ', 'faridgonj.chandpur.gov.bd'),
(60, 7, 'Lakshmipur Sadar', 'লক্ষ্মীপুর সদর', 'sadar.lakshmipur.gov.bd'),
(61, 7, 'Kamalnagar', 'কমলনগর', 'kamalnagar.lakshmipur.gov.bd'),
(62, 7, 'Raipur', 'রায়পুর', 'raipur.lakshmipur.gov.bd'),
(63, 7, 'Ramgati', 'রামগতি', 'ramgati.lakshmipur.gov.bd'),
(64, 7, 'Ramganj', 'রামগঞ্জ', 'ramganj.lakshmipur.gov.bd'),
(65, 8, 'Rangunia', 'রাঙ্গুনিয়া', 'rangunia.chittagong.gov.bd'),
(66, 8, 'Sitakunda', 'সীতাকুন্ড', 'sitakunda.chittagong.gov.bd'),
(67, 8, 'Mirsharai', 'মীরসরাই', 'mirsharai.chittagong.gov.bd'),
(68, 8, 'Patiya', 'পটিয়া', 'patiya.chittagong.gov.bd'),
(69, 8, 'Sandwip', 'সন্দ্বীপ', 'sandwip.chittagong.gov.bd'),
(70, 8, 'Banshkhali', 'বাঁশখালী', 'banshkhali.chittagong.gov.bd'),
(71, 8, 'Boalkhali', 'বোয়ালখালী', 'boalkhali.chittagong.gov.bd'),
(72, 8, 'Anwara', 'আনোয়ারা', 'anwara.chittagong.gov.bd'),
(73, 8, 'Chandanaish', 'চন্দনাইশ', 'chandanaish.chittagong.gov.bd'),
(74, 8, 'Satkania', 'সাতকানিয়া', 'satkania.chittagong.gov.bd'),
(75, 8, 'Lohagara', 'লোহাগাড়া', 'lohagara.chittagong.gov.bd'),
(76, 8, 'Hathazari', 'হাটহাজারী', 'hathazari.chittagong.gov.bd'),
(77, 8, 'Fatikchhari', 'ফটিকছড়ি', 'fatikchhari.chittagong.gov.bd'),
(78, 8, 'Raozan', 'রাউজান', 'raozan.chittagong.gov.bd'),
(79, 8, 'Karnafuli', 'কর্ণফুলী', 'karnafuli.chittagong.gov.bd'),
(80, 9, 'Coxsbazar Sadar', 'কক্সবাজার সদর', 'sadar.coxsbazar.gov.bd'),
(81, 9, 'Chakaria', 'চকরিয়া', 'chakaria.coxsbazar.gov.bd'),
(82, 9, 'Kutubdia', 'কুতুবদিয়া', 'kutubdia.coxsbazar.gov.bd'),
(83, 9, 'Ukhiya', 'উখিয়া', 'ukhiya.coxsbazar.gov.bd'),
(84, 9, 'Moheshkhali', 'মহেশখালী', 'moheshkhali.coxsbazar.gov.bd'),
(85, 9, 'Pekua', 'পেকুয়া', 'pekua.coxsbazar.gov.bd'),
(86, 9, 'Ramu', 'রামু', 'ramu.coxsbazar.gov.bd'),
(87, 9, 'Teknaf', 'টেকনাফ', 'teknaf.coxsbazar.gov.bd'),
(88, 10, 'Khagrachhari Sadar', 'খাগড়াছড়ি সদর', 'sadar.khagrachhari.gov.bd'),
(89, 10, 'Dighinala', 'দিঘীনালা', 'dighinala.khagrachhari.gov.bd'),
(90, 10, 'Panchari', 'পানছড়ি', 'panchari.khagrachhari.gov.bd'),
(91, 10, 'Laxmichhari', 'লক্ষীছড়ি', 'laxmichhari.khagrachhari.gov.bd'),
(92, 10, 'Mohalchari', 'মহালছড়ি', 'mohalchari.khagrachhari.gov.bd'),
(93, 10, 'Manikchari', 'মানিকছড়ি', 'manikchari.khagrachhari.gov.bd'),
(94, 10, 'Ramgarh', 'রামগড়', 'ramgarh.khagrachhari.gov.bd'),
(95, 10, 'Matiranga', 'মাটিরাঙ্গা', 'matiranga.khagrachhari.gov.bd'),
(96, 10, 'Guimara', 'গুইমারা', 'guimara.khagrachhari.gov.bd'),
(97, 11, 'Bandarban Sadar', 'বান্দরবান সদর', 'sadar.bandarban.gov.bd'),
(98, 11, 'Alikadam', 'আলীকদম', 'alikadam.bandarban.gov.bd'),
(99, 11, 'Naikhongchhari', 'নাইক্ষ্যংছড়ি', 'naikhongchhari.bandarban.gov.bd'),
(100, 11, 'Rowangchhari', 'রোয়াংছড়ি', 'rowangchhari.bandarban.gov.bd'),
(101, 11, 'Lama', 'লামা', 'lama.bandarban.gov.bd'),
(102, 11, 'Ruma', 'রুমা', 'ruma.bandarban.gov.bd'),
(103, 11, 'Thanchi', 'থানচি', 'thanchi.bandarban.gov.bd'),
(104, 12, 'Belkuchi', 'বেলকুচি', 'belkuchi.sirajganj.gov.bd'),
(105, 12, 'Chauhali', 'চৌহালি', 'chauhali.sirajganj.gov.bd'),
(106, 12, 'Kamarkhand', 'কামারখন্দ', 'kamarkhand.sirajganj.gov.bd'),
(107, 12, 'Kazipur', 'কাজীপুর', 'kazipur.sirajganj.gov.bd'),
(108, 12, 'Raigonj', 'রায়গঞ্জ', 'raigonj.sirajganj.gov.bd'),
(109, 12, 'Shahjadpur', 'শাহজাদপুর', 'shahjadpur.sirajganj.gov.bd'),
(110, 12, 'Sirajganj Sadar', 'সিরাজগঞ্জ সদর', 'sirajganjsadar.sirajganj.gov.bd'),
(111, 12, 'Tarash', 'তাড়াশ', 'tarash.sirajganj.gov.bd'),
(112, 12, 'Ullapara', 'উল্লাপাড়া', 'ullapara.sirajganj.gov.bd'),
(113, 13, 'Sujanagar', 'সুজানগর', 'sujanagar.pabna.gov.bd'),
(114, 13, 'Ishurdi', 'ঈশ্বরদী', 'ishurdi.pabna.gov.bd'),
(115, 13, 'Bhangura', 'ভাঙ্গুড়া', 'bhangura.pabna.gov.bd'),
(116, 13, 'Pabna Sadar', 'পাবনা সদর', 'pabnasadar.pabna.gov.bd'),
(117, 13, 'Bera', 'বেড়া', 'bera.pabna.gov.bd'),
(118, 13, 'Atghoria', 'আটঘরিয়া', 'atghoria.pabna.gov.bd'),
(119, 13, 'Chatmohar', 'চাটমোহর', 'chatmohar.pabna.gov.bd'),
(120, 13, 'Santhia', 'সাঁথিয়া', 'santhia.pabna.gov.bd'),
(121, 13, 'Faridpur', 'ফরিদপুর', 'faridpur.pabna.gov.bd'),
(122, 14, 'Kahaloo', 'কাহালু', 'kahaloo.bogra.gov.bd'),
(123, 14, 'Bogra Sadar', 'বগুড়া সদর', 'sadar.bogra.gov.bd'),
(124, 14, 'Shariakandi', 'সারিয়াকান্দি', 'shariakandi.bogra.gov.bd'),
(125, 14, 'Shajahanpur', 'শাজাহানপুর', 'shajahanpur.bogra.gov.bd'),
(126, 14, 'Dupchanchia', 'দুপচাচিঁয়া', 'dupchanchia.bogra.gov.bd'),
(127, 14, 'Adamdighi', 'আদমদিঘি', 'adamdighi.bogra.gov.bd'),
(128, 14, 'Nondigram', 'নন্দিগ্রাম', 'nondigram.bogra.gov.bd'),
(129, 14, 'Sonatala', 'সোনাতলা', 'sonatala.bogra.gov.bd'),
(130, 14, 'Dhunot', 'ধুনট', 'dhunot.bogra.gov.bd'),
(131, 14, 'Gabtali', 'গাবতলী', 'gabtali.bogra.gov.bd'),
(132, 14, 'Sherpur', 'শেরপুর', 'sherpur.bogra.gov.bd'),
(133, 14, 'Shibganj', 'শিবগঞ্জ', 'shibganj.bogra.gov.bd'),
(134, 15, 'Paba', 'পবা', 'paba.rajshahi.gov.bd'),
(135, 15, 'Durgapur', 'দুর্গাপুর', 'durgapur.rajshahi.gov.bd'),
(136, 15, 'Mohonpur', 'মোহনপুর', 'mohonpur.rajshahi.gov.bd'),
(137, 15, 'Charghat', 'চারঘাট', 'charghat.rajshahi.gov.bd'),
(138, 15, 'Puthia', 'পুঠিয়া', 'puthia.rajshahi.gov.bd'),
(139, 15, 'Bagha', 'বাঘা', 'bagha.rajshahi.gov.bd'),
(140, 15, 'Godagari', 'গোদাগাড়ী', 'godagari.rajshahi.gov.bd'),
(141, 15, 'Tanore', 'তানোর', 'tanore.rajshahi.gov.bd'),
(142, 15, 'Bagmara', 'বাগমারা', 'bagmara.rajshahi.gov.bd'),
(143, 16, 'Natore Sadar', 'নাটোর সদর', 'natoresadar.natore.gov.bd'),
(144, 16, 'Singra', 'সিংড়া', 'singra.natore.gov.bd'),
(145, 16, 'Baraigram', 'বড়াইগ্রাম', 'baraigram.natore.gov.bd'),
(146, 16, 'Bagatipara', 'বাগাতিপাড়া', 'bagatipara.natore.gov.bd'),
(147, 16, 'Lalpur', 'লালপুর', 'lalpur.natore.gov.bd'),
(148, 16, 'Gurudaspur', 'গুরুদাসপুর', 'gurudaspur.natore.gov.bd'),
(149, 16, 'Naldanga', 'নলডাঙ্গা', 'naldanga.natore.gov.bd'),
(150, 17, 'Akkelpur', 'আক্কেলপুর', 'akkelpur.joypurhat.gov.bd'),
(151, 17, 'Kalai', 'কালাই', 'kalai.joypurhat.gov.bd'),
(152, 17, 'Khetlal', 'ক্ষেতলাল', 'khetlal.joypurhat.gov.bd'),
(153, 17, 'Panchbibi', 'পাঁচবিবি', 'panchbibi.joypurhat.gov.bd'),
(154, 17, 'Joypurhat Sadar', 'জয়পুরহাট সদর', 'joypurhatsadar.joypurhat.gov.bd'),
(155, 18, 'Chapainawabganj Sadar', 'চাঁপাইনবাবগঞ্জ সদর', 'chapainawabganjsadar.chapainawabganj.gov.bd'),
(156, 18, 'Gomostapur', 'গোমস্তাপুর', 'gomostapur.chapainawabganj.gov.bd'),
(157, 18, 'Nachol', 'নাচোল', 'nachol.chapainawabganj.gov.bd'),
(158, 18, 'Bholahat', 'ভোলাহাট', 'bholahat.chapainawabganj.gov.bd'),
(159, 18, 'Shibganj', 'শিবগঞ্জ', 'shibganj.chapainawabganj.gov.bd'),
(160, 19, 'Mohadevpur', 'মহাদেবপুর', 'mohadevpur.naogaon.gov.bd'),
(161, 19, 'Badalgachi', 'বদলগাছী', 'badalgachi.naogaon.gov.bd'),
(162, 19, 'Patnitala', 'পত্নিতলা', 'patnitala.naogaon.gov.bd'),
(163, 19, 'Dhamoirhat', 'ধামইরহাট', 'dhamoirhat.naogaon.gov.bd'),
(164, 19, 'Niamatpur', 'নিয়ামতপুর', 'niamatpur.naogaon.gov.bd'),
(165, 19, 'Manda', 'মান্দা', 'manda.naogaon.gov.bd'),
(166, 19, 'Atrai', 'আত্রাই', 'atrai.naogaon.gov.bd'),
(167, 19, 'Raninagar', 'রাণীনগর', 'raninagar.naogaon.gov.bd'),
(168, 19, 'Naogaon Sadar', 'নওগাঁ সদর', 'naogaonsadar.naogaon.gov.bd'),
(169, 19, 'Porsha', 'পোরশা', 'porsha.naogaon.gov.bd'),
(170, 19, 'Sapahar', 'সাপাহার', 'sapahar.naogaon.gov.bd'),
(171, 20, 'Manirampur', 'মণিরামপুর', 'manirampur.jessore.gov.bd'),
(172, 20, 'Abhaynagar', 'অভয়নগর', 'abhaynagar.jessore.gov.bd'),
(173, 20, 'Bagherpara', 'বাঘারপাড়া', 'bagherpara.jessore.gov.bd'),
(174, 20, 'Chougachha', 'চৌগাছা', 'chougachha.jessore.gov.bd'),
(175, 20, 'Jhikargacha', 'ঝিকরগাছা', 'jhikargacha.jessore.gov.bd'),
(176, 20, 'Keshabpur', 'কেশবপুর', 'keshabpur.jessore.gov.bd'),
(177, 20, 'Jessore Sadar', 'যশোর সদর', 'sadar.jessore.gov.bd'),
(178, 20, 'Sharsha', 'শার্শা', 'sharsha.jessore.gov.bd'),
(179, 21, 'Assasuni', 'আশাশুনি', 'assasuni.satkhira.gov.bd'),
(180, 21, 'Debhata', 'দেবহাটা', 'debhata.satkhira.gov.bd'),
(181, 21, 'Kalaroa', 'কলারোয়া', 'kalaroa.satkhira.gov.bd'),
(182, 21, 'Satkhira Sadar', 'সাতক্ষীরা সদর', 'satkhirasadar.satkhira.gov.bd'),
(183, 21, 'Shyamnagar', 'শ্যামনগর', 'shyamnagar.satkhira.gov.bd'),
(184, 21, 'Tala', 'তালা', 'tala.satkhira.gov.bd'),
(185, 21, 'Kaliganj', 'কালিগঞ্জ', 'kaliganj.satkhira.gov.bd'),
(186, 22, 'Mujibnagar', 'মুজিবনগর', 'mujibnagar.meherpur.gov.bd'),
(187, 22, 'Meherpur Sadar', 'মেহেরপুর সদর', 'meherpursadar.meherpur.gov.bd'),
(188, 22, 'Gangni', 'গাংনী', 'gangni.meherpur.gov.bd'),
(189, 23, 'Narail Sadar', 'নড়াইল সদর', 'narailsadar.narail.gov.bd'),
(190, 23, 'Lohagara', 'লোহাগড়া', 'lohagara.narail.gov.bd'),
(191, 23, 'Kalia', 'কালিয়া', 'kalia.narail.gov.bd'),
(192, 24, 'Chuadanga Sadar', 'চুয়াডাঙ্গা সদর', 'chuadangasadar.chuadanga.gov.bd'),
(193, 24, 'Alamdanga', 'আলমডাঙ্গা', 'alamdanga.chuadanga.gov.bd'),
(194, 24, 'Damurhuda', 'দামুড়হুদা', 'damurhuda.chuadanga.gov.bd'),
(195, 24, 'Jibannagar', 'জীবননগর', 'jibannagar.chuadanga.gov.bd'),
(196, 25, 'Kushtia Sadar', 'কুষ্টিয়া সদর', 'kushtiasadar.kushtia.gov.bd'),
(197, 25, 'Kumarkhali', 'কুমারখালী', 'kumarkhali.kushtia.gov.bd'),
(198, 25, 'Khoksa', 'খোকসা', 'khoksa.kushtia.gov.bd'),
(199, 25, 'Mirpur', 'মিরপুর', 'mirpurkushtia.kushtia.gov.bd'),
(200, 25, 'Daulatpur', 'দৌলতপুর', 'daulatpur.kushtia.gov.bd'),
(201, 25, 'Bheramara', 'ভেড়ামারা', 'bheramara.kushtia.gov.bd'),
(202, 26, 'Shalikha', 'শালিখা', 'shalikha.magura.gov.bd'),
(203, 26, 'Sreepur', 'শ্রীপুর', 'sreepur.magura.gov.bd'),
(204, 26, 'Magura Sadar', 'মাগুরা সদর', 'magurasadar.magura.gov.bd'),
(205, 26, 'Mohammadpur', 'মহম্মদপুর', 'mohammadpur.magura.gov.bd'),
(206, 27, 'Paikgasa', 'পাইকগাছা', 'paikgasa.khulna.gov.bd'),
(207, 27, 'Fultola', 'ফুলতলা', 'fultola.khulna.gov.bd'),
(208, 27, 'Digholia', 'দিঘলিয়া', 'digholia.khulna.gov.bd'),
(209, 27, 'Rupsha', 'রূপসা', 'rupsha.khulna.gov.bd'),
(210, 27, 'Terokhada', 'তেরখাদা', 'terokhada.khulna.gov.bd'),
(211, 27, 'Dumuria', 'ডুমুরিয়া', 'dumuria.khulna.gov.bd'),
(212, 27, 'Botiaghata', 'বটিয়াঘাটা', 'botiaghata.khulna.gov.bd'),
(213, 27, 'Dakop', 'দাকোপ', 'dakop.khulna.gov.bd'),
(214, 27, 'Koyra', 'কয়রা', 'koyra.khulna.gov.bd'),
(215, 28, 'Fakirhat', 'ফকিরহাট', 'fakirhat.bagerhat.gov.bd'),
(216, 28, 'Bagerhat Sadar', 'বাগেরহাট সদর', 'sadar.bagerhat.gov.bd'),
(217, 28, 'Mollahat', 'মোল্লাহাট', 'mollahat.bagerhat.gov.bd'),
(218, 28, 'Sarankhola', 'শরণখোলা', 'sarankhola.bagerhat.gov.bd'),
(219, 28, 'Rampal', 'রামপাল', 'rampal.bagerhat.gov.bd'),
(220, 28, 'Morrelganj', 'মোড়েলগঞ্জ', 'morrelganj.bagerhat.gov.bd'),
(221, 28, 'Kachua', 'কচুয়া', 'kachua.bagerhat.gov.bd'),
(222, 28, 'Mongla', 'মোংলা', 'mongla.bagerhat.gov.bd'),
(223, 28, 'Chitalmari', 'চিতলমারী', 'chitalmari.bagerhat.gov.bd'),
(224, 29, 'Jhenaidah Sadar', 'ঝিনাইদহ সদর', 'sadar.jhenaidah.gov.bd'),
(225, 29, 'Shailkupa', 'শৈলকুপা', 'shailkupa.jhenaidah.gov.bd'),
(226, 29, 'Harinakundu', 'হরিণাকুন্ডু', 'harinakundu.jhenaidah.gov.bd'),
(227, 29, 'Kaliganj', 'কালীগঞ্জ', 'kaliganj.jhenaidah.gov.bd'),
(228, 29, 'Kotchandpur', 'কোটচাঁদপুর', 'kotchandpur.jhenaidah.gov.bd'),
(229, 29, 'Moheshpur', 'মহেশপুর', 'moheshpur.jhenaidah.gov.bd'),
(230, 30, 'Jhalakathi Sadar', 'ঝালকাঠি সদর', 'sadar.jhalakathi.gov.bd'),
(231, 30, 'Kathalia', 'কাঠালিয়া', 'kathalia.jhalakathi.gov.bd'),
(232, 30, 'Nalchity', 'নলছিটি', 'nalchity.jhalakathi.gov.bd'),
(233, 30, 'Rajapur', 'রাজাপুর', 'rajapur.jhalakathi.gov.bd'),
(234, 31, 'Bauphal', 'বাউফল', 'bauphal.patuakhali.gov.bd'),
(235, 31, 'Patuakhali Sadar', 'পটুয়াখালী সদর', 'sadar.patuakhali.gov.bd'),
(236, 31, 'Dumki', 'দুমকি', 'dumki.patuakhali.gov.bd'),
(237, 31, 'Dashmina', 'দশমিনা', 'dashmina.patuakhali.gov.bd'),
(238, 31, 'Kalapara', 'কলাপাড়া', 'kalapara.patuakhali.gov.bd'),
(239, 31, 'Mirzaganj', 'মির্জাগঞ্জ', 'mirzaganj.patuakhali.gov.bd'),
(240, 31, 'Galachipa', 'গলাচিপা', 'galachipa.patuakhali.gov.bd'),
(241, 31, 'Rangabali', 'রাঙ্গাবালী', 'rangabali.patuakhali.gov.bd'),
(242, 32, 'Pirojpur Sadar', 'পিরোজপুর সদর', 'sadar.pirojpur.gov.bd'),
(243, 32, 'Nazirpur', 'নাজিরপুর', 'nazirpur.pirojpur.gov.bd'),
(244, 32, 'Kawkhali', 'কাউখালী', 'kawkhali.pirojpur.gov.bd'),
(245, 32, 'Zianagar', 'জিয়ানগর', 'zianagar.pirojpur.gov.bd'),
(246, 32, 'Bhandaria', 'ভান্ডারিয়া', 'bhandaria.pirojpur.gov.bd'),
(247, 32, 'Mathbaria', 'মঠবাড়ীয়া', 'mathbaria.pirojpur.gov.bd'),
(248, 32, 'Nesarabad', 'নেছারাবাদ', 'nesarabad.pirojpur.gov.bd'),
(249, 33, 'Barisal Sadar', 'বরিশাল সদর', 'barisalsadar.barisal.gov.bd'),
(250, 33, 'Bakerganj', 'বাকেরগঞ্জ', 'bakerganj.barisal.gov.bd'),
(251, 33, 'Babuganj', 'বাবুগঞ্জ', 'babuganj.barisal.gov.bd'),
(252, 33, 'Wazirpur', 'উজিরপুর', 'wazirpur.barisal.gov.bd'),
(253, 33, 'Banaripara', 'বানারীপাড়া', 'banaripara.barisal.gov.bd'),
(254, 33, 'Gournadi', 'গৌরনদী', 'gournadi.barisal.gov.bd'),
(255, 33, 'Agailjhara', 'আগৈলঝাড়া', 'agailjhara.barisal.gov.bd'),
(256, 33, 'Mehendiganj', 'মেহেন্দিগঞ্জ', 'mehendiganj.barisal.gov.bd'),
(257, 33, 'Muladi', 'মুলাদী', 'muladi.barisal.gov.bd'),
(258, 33, 'Hizla', 'হিজলা', 'hizla.barisal.gov.bd'),
(259, 34, 'Bhola Sadar', 'ভোলা সদর', 'sadar.bhola.gov.bd'),
(260, 34, 'Borhan Sddin', 'বোরহান উদ্দিন', 'borhanuddin.bhola.gov.bd'),
(261, 34, 'Charfesson', 'চরফ্যাশন', 'charfesson.bhola.gov.bd'),
(262, 34, 'Doulatkhan', 'দৌলতখান', 'doulatkhan.bhola.gov.bd'),
(263, 34, 'Monpura', 'মনপুরা', 'monpura.bhola.gov.bd'),
(264, 34, 'Tazumuddin', 'তজুমদ্দিন', 'tazumuddin.bhola.gov.bd'),
(265, 34, 'Lalmohan', 'লালমোহন', 'lalmohan.bhola.gov.bd'),
(266, 35, 'Amtali', 'আমতলী', 'amtali.barguna.gov.bd'),
(267, 35, 'Barguna Sadar', 'বরগুনা সদর', 'sadar.barguna.gov.bd'),
(268, 35, 'Betagi', 'বেতাগী', 'betagi.barguna.gov.bd'),
(269, 35, 'Bamna', 'বামনা', 'bamna.barguna.gov.bd'),
(270, 35, 'Pathorghata', 'পাথরঘাটা', 'pathorghata.barguna.gov.bd'),
(271, 35, 'Taltali', 'তালতলি', 'taltali.barguna.gov.bd'),
(272, 36, 'Balaganj', 'বালাগঞ্জ', 'balaganj.sylhet.gov.bd'),
(273, 36, 'Beanibazar', 'বিয়ানীবাজার', 'beanibazar.sylhet.gov.bd'),
(274, 36, 'Bishwanath', 'বিশ্বনাথ', 'bishwanath.sylhet.gov.bd'),
(275, 36, 'Companiganj', 'কোম্পানীগঞ্জ', 'companiganj.sylhet.gov.bd'),
(276, 36, 'Fenchuganj', 'ফেঞ্চুগঞ্জ', 'fenchuganj.sylhet.gov.bd'),
(277, 36, 'Golapganj', 'গোলাপগঞ্জ', 'golapganj.sylhet.gov.bd'),
(278, 36, 'Gowainghat', 'গোয়াইনঘাট', 'gowainghat.sylhet.gov.bd'),
(279, 36, 'Jaintiapur', 'জৈন্তাপুর', 'jaintiapur.sylhet.gov.bd'),
(280, 36, 'Kanaighat', 'কানাইঘাট', 'kanaighat.sylhet.gov.bd'),
(281, 36, 'Sylhet Sadar', 'সিলেট সদর', 'sylhetsadar.sylhet.gov.bd'),
(282, 36, 'Zakiganj', 'জকিগঞ্জ', 'zakiganj.sylhet.gov.bd'),
(283, 36, 'Dakshinsurma', 'দক্ষিণ সুরমা', 'dakshinsurma.sylhet.gov.bd'),
(284, 36, 'Osmaninagar', 'ওসমানী নগর', 'osmaninagar.sylhet.gov.bd'),
(285, 37, 'Barlekha', 'বড়লেখা', 'barlekha.moulvibazar.gov.bd'),
(286, 37, 'Kamolganj', 'কমলগঞ্জ', 'kamolganj.moulvibazar.gov.bd'),
(287, 37, 'Kulaura', 'কুলাউড়া', 'kulaura.moulvibazar.gov.bd'),
(288, 37, 'Moulvibazar Sadar', 'মৌলভীবাজার সদর', 'moulvibazarsadar.moulvibazar.gov.bd'),
(289, 37, 'Rajnagar', 'রাজনগর', 'rajnagar.moulvibazar.gov.bd'),
(290, 37, 'Sreemangal', 'শ্রীমঙ্গল', 'sreemangal.moulvibazar.gov.bd'),
(291, 37, 'Juri', 'জুড়ী', 'juri.moulvibazar.gov.bd'),
(292, 38, 'Nabiganj', 'নবীগঞ্জ', 'nabiganj.habiganj.gov.bd'),
(293, 38, 'Bahubal', 'বাহুবল', 'bahubal.habiganj.gov.bd'),
(294, 38, 'Ajmiriganj', 'আজমিরীগঞ্জ', 'ajmiriganj.habiganj.gov.bd'),
(295, 38, 'Baniachong', 'বানিয়াচং', 'baniachong.habiganj.gov.bd'),
(296, 38, 'Lakhai', 'লাখাই', 'lakhai.habiganj.gov.bd'),
(297, 38, 'Chunarughat', 'চুনারুঘাট', 'chunarughat.habiganj.gov.bd'),
(298, 38, 'Habiganj Sadar', 'হবিগঞ্জ সদর', 'habiganjsadar.habiganj.gov.bd'),
(299, 38, 'Madhabpur', 'মাধবপুর', 'madhabpur.habiganj.gov.bd'),
(300, 39, 'Sunamganj Sadar', 'সুনামগঞ্জ সদর', 'sadar.sunamganj.gov.bd'),
(301, 39, 'South Sunamganj', 'দক্ষিণ সুনামগঞ্জ', 'southsunamganj.sunamganj.gov.bd'),
(302, 39, 'Bishwambarpur', 'বিশ্বম্ভরপুর', 'bishwambarpur.sunamganj.gov.bd'),
(303, 39, 'Chhatak', 'ছাতক', 'chhatak.sunamganj.gov.bd'),
(304, 39, 'Jagannathpur', 'জগন্নাথপুর', 'jagannathpur.sunamganj.gov.bd'),
(305, 39, 'Dowarabazar', 'দোয়ারাবাজার', 'dowarabazar.sunamganj.gov.bd'),
(306, 39, 'Tahirpur', 'তাহিরপুর', 'tahirpur.sunamganj.gov.bd'),
(307, 39, 'Dharmapasha', 'ধর্মপাশা', 'dharmapasha.sunamganj.gov.bd'),
(308, 39, 'Jamalganj', 'জামালগঞ্জ', 'jamalganj.sunamganj.gov.bd'),
(309, 39, 'Shalla', 'শাল্লা', 'shalla.sunamganj.gov.bd'),
(310, 39, 'Derai', 'দিরাই', 'derai.sunamganj.gov.bd'),
(311, 40, 'Belabo', 'বেলাবো', 'belabo.narsingdi.gov.bd'),
(312, 40, 'Monohardi', 'মনোহরদী', 'monohardi.narsingdi.gov.bd'),
(313, 40, 'Narsingdi Sadar', 'নরসিংদী সদর', 'narsingdisadar.narsingdi.gov.bd'),
(314, 40, 'Palash', 'পলাশ', 'palash.narsingdi.gov.bd'),
(315, 40, 'Raipura', 'রায়পুরা', 'raipura.narsingdi.gov.bd'),
(316, 40, 'Shibpur', 'শিবপুর', 'shibpur.narsingdi.gov.bd'),
(317, 41, 'Kaliganj', 'কালীগঞ্জ', 'kaliganj.gazipur.gov.bd'),
(318, 41, 'Kaliakair', 'কালিয়াকৈর', 'kaliakair.gazipur.gov.bd'),
(319, 41, 'Kapasia', 'কাপাসিয়া', 'kapasia.gazipur.gov.bd'),
(320, 41, 'Gazipur Sadar', 'গাজীপুর সদর', 'sadar.gazipur.gov.bd'),
(321, 41, 'Sreepur', 'শ্রীপুর', 'sreepur.gazipur.gov.bd'),
(322, 42, 'Shariatpur Sadar', 'শরিয়তপুর সদর', 'sadar.shariatpur.gov.bd'),
(323, 42, 'Naria', 'নড়িয়া', 'naria.shariatpur.gov.bd'),
(324, 42, 'Zajira', 'জাজিরা', 'zajira.shariatpur.gov.bd'),
(325, 42, 'Gosairhat', 'গোসাইরহাট', 'gosairhat.shariatpur.gov.bd'),
(326, 42, 'Bhedarganj', 'ভেদরগঞ্জ', 'bhedarganj.shariatpur.gov.bd'),
(327, 42, 'Damudya', 'ডামুড্যা', 'damudya.shariatpur.gov.bd'),
(328, 43, 'Araihazar', 'আড়াইহাজার', 'araihazar.narayanganj.gov.bd'),
(329, 43, 'Bandar', 'বন্দর', 'bandar.narayanganj.gov.bd'),
(330, 43, 'Narayanganj Sadar', 'নারায়নগঞ্জ সদর', 'narayanganjsadar.narayanganj.gov.bd'),
(331, 43, 'Rupganj', 'রূপগঞ্জ', 'rupganj.narayanganj.gov.bd'),
(332, 43, 'Sonargaon', 'সোনারগাঁ', 'sonargaon.narayanganj.gov.bd'),
(333, 44, 'Basail', 'বাসাইল', 'basail.tangail.gov.bd'),
(334, 44, 'Bhuapur', 'ভুয়াপুর', 'bhuapur.tangail.gov.bd'),
(335, 44, 'Delduar', 'দেলদুয়ার', 'delduar.tangail.gov.bd'),
(336, 44, 'Ghatail', 'ঘাটাইল', 'ghatail.tangail.gov.bd'),
(337, 44, 'Gopalpur', 'গোপালপুর', 'gopalpur.tangail.gov.bd'),
(338, 44, 'Madhupur', 'মধুপুর', 'madhupur.tangail.gov.bd'),
(339, 44, 'Mirzapur', 'মির্জাপুর', 'mirzapur.tangail.gov.bd'),
(340, 44, 'Nagarpur', 'নাগরপুর', 'nagarpur.tangail.gov.bd'),
(341, 44, 'Sakhipur', 'সখিপুর', 'sakhipur.tangail.gov.bd'),
(342, 44, 'Tangail Sadar', 'টাঙ্গাইল সদর', 'tangailsadar.tangail.gov.bd'),
(343, 44, 'Kalihati', 'কালিহাতী', 'kalihati.tangail.gov.bd'),
(344, 44, 'Dhanbari', 'ধনবাড়ী', 'dhanbari.tangail.gov.bd'),
(345, 45, 'Itna', 'ইটনা', 'itna.kishoreganj.gov.bd'),
(346, 45, 'Katiadi', 'কটিয়াদী', 'katiadi.kishoreganj.gov.bd'),
(347, 45, 'Bhairab', 'ভৈরব', 'bhairab.kishoreganj.gov.bd'),
(348, 45, 'Tarail', 'তাড়াইল', 'tarail.kishoreganj.gov.bd'),
(349, 45, 'Hossainpur', 'হোসেনপুর', 'hossainpur.kishoreganj.gov.bd'),
(350, 45, 'Pakundia', 'পাকুন্দিয়া', 'pakundia.kishoreganj.gov.bd'),
(351, 45, 'Kuliarchar', 'কুলিয়ারচর', 'kuliarchar.kishoreganj.gov.bd'),
(352, 45, 'Kishoreganj Sadar', 'কিশোরগঞ্জ সদর', 'kishoreganjsadar.kishoreganj.gov.bd'),
(353, 45, 'Karimgonj', 'করিমগঞ্জ', 'karimgonj.kishoreganj.gov.bd'),
(354, 45, 'Bajitpur', 'বাজিতপুর', 'bajitpur.kishoreganj.gov.bd'),
(355, 45, 'Austagram', 'অষ্টগ্রাম', 'austagram.kishoreganj.gov.bd'),
(356, 45, 'Mithamoin', 'মিঠামইন', 'mithamoin.kishoreganj.gov.bd'),
(357, 45, 'Nikli', 'নিকলী', 'nikli.kishoreganj.gov.bd'),
(358, 46, 'Harirampur', 'হরিরামপুর', 'harirampur.manikganj.gov.bd'),
(359, 46, 'Saturia', 'সাটুরিয়া', 'saturia.manikganj.gov.bd'),
(360, 46, 'Manikganj Sadar', 'মানিকগঞ্জ সদর', 'sadar.manikganj.gov.bd'),
(361, 46, 'Gior', 'ঘিওর', 'gior.manikganj.gov.bd'),
(362, 46, 'Shibaloy', 'শিবালয়', 'shibaloy.manikganj.gov.bd'),
(363, 46, 'Doulatpur', 'দৌলতপুর', 'doulatpur.manikganj.gov.bd'),
(364, 46, 'Singiar', 'সিংগাইর', 'singiar.manikganj.gov.bd'),
(365, 47, 'Savar', 'সাভার', 'savar.dhaka.gov.bd'),
(366, 47, 'Dhamrai', 'ধামরাই', 'dhamrai.dhaka.gov.bd'),
(367, 47, 'Keraniganj', 'কেরাণীগঞ্জ', 'keraniganj.dhaka.gov.bd'),
(368, 47, 'Nawabganj', 'নবাবগঞ্জ', 'nawabganj.dhaka.gov.bd'),
(369, 47, 'Dohar', 'দোহার', 'dohar.dhaka.gov.bd'),
(370, 48, 'Munshiganj Sadar', 'মুন্সিগঞ্জ সদর', 'sadar.munshiganj.gov.bd'),
(371, 48, 'Sreenagar', 'শ্রীনগর', 'sreenagar.munshiganj.gov.bd'),
(372, 48, 'Sirajdikhan', 'সিরাজদিখান', 'sirajdikhan.munshiganj.gov.bd'),
(373, 48, 'Louhajanj', 'লৌহজং', 'louhajanj.munshiganj.gov.bd'),
(374, 48, 'Gajaria', 'গজারিয়া', 'gajaria.munshiganj.gov.bd'),
(375, 48, 'Tongibari', 'টংগীবাড়ি', 'tongibari.munshiganj.gov.bd'),
(376, 49, 'Rajbari Sadar', 'রাজবাড়ী সদর', 'sadar.rajbari.gov.bd'),
(377, 49, 'Goalanda', 'গোয়ালন্দ', 'goalanda.rajbari.gov.bd'),
(378, 49, 'Pangsa', 'পাংশা', 'pangsa.rajbari.gov.bd'),
(379, 49, 'Baliakandi', 'বালিয়াকান্দি', 'baliakandi.rajbari.gov.bd'),
(380, 49, 'Kalukhali', 'কালুখালী', 'kalukhali.rajbari.gov.bd'),
(381, 50, 'Madaripur Sadar', 'মাদারীপুর সদর', 'sadar.madaripur.gov.bd'),
(382, 50, 'Shibchar', 'শিবচর', 'shibchar.madaripur.gov.bd'),
(383, 50, 'Kalkini', 'কালকিনি', 'kalkini.madaripur.gov.bd'),
(384, 50, 'Rajoir', 'রাজৈর', 'rajoir.madaripur.gov.bd'),
(385, 51, 'Gopalganj Sadar', 'গোপালগঞ্জ সদর', 'sadar.gopalganj.gov.bd'),
(386, 51, 'Kashiani', 'কাশিয়ানী', 'kashiani.gopalganj.gov.bd'),
(387, 51, 'Tungipara', 'টুংগীপাড়া', 'tungipara.gopalganj.gov.bd'),
(388, 51, 'Kotalipara', 'কোটালীপাড়া', 'kotalipara.gopalganj.gov.bd'),
(389, 51, 'Muksudpur', 'মুকসুদপুর', 'muksudpur.gopalganj.gov.bd'),
(390, 52, 'Faridpur Sadar', 'ফরিদপুর সদর', 'sadar.faridpur.gov.bd'),
(391, 52, 'Alfadanga', 'আলফাডাঙ্গা', 'alfadanga.faridpur.gov.bd'),
(392, 52, 'Boalmari', 'বোয়ালমারী', 'boalmari.faridpur.gov.bd'),
(393, 52, 'Sadarpur', 'সদরপুর', 'sadarpur.faridpur.gov.bd'),
(394, 52, 'Nagarkanda', 'নগরকান্দা', 'nagarkanda.faridpur.gov.bd'),
(395, 52, 'Bhanga', 'ভাঙ্গা', 'bhanga.faridpur.gov.bd'),
(396, 52, 'Charbhadrasan', 'চরভদ্রাসন', 'charbhadrasan.faridpur.gov.bd'),
(397, 52, 'Madhukhali', 'মধুখালী', 'madhukhali.faridpur.gov.bd'),
(398, 52, 'Saltha', 'সালথা', 'saltha.faridpur.gov.bd'),
(399, 53, 'Panchagarh Sadar', 'পঞ্চগড় সদর', 'panchagarhsadar.panchagarh.gov.bd'),
(400, 53, 'Debiganj', 'দেবীগঞ্জ', 'debiganj.panchagarh.gov.bd'),
(401, 53, 'Boda', 'বোদা', 'boda.panchagarh.gov.bd'),
(402, 53, 'Atwari', 'আটোয়ারী', 'atwari.panchagarh.gov.bd'),
(403, 53, 'Tetulia', 'তেতুলিয়া', 'tetulia.panchagarh.gov.bd'),
(404, 54, 'Nawabganj', 'নবাবগঞ্জ', 'nawabganj.dinajpur.gov.bd'),
(405, 54, 'Birganj', 'বীরগঞ্জ', 'birganj.dinajpur.gov.bd'),
(406, 54, 'Ghoraghat', 'ঘোড়াঘাট', 'ghoraghat.dinajpur.gov.bd'),
(407, 54, 'Birampur', 'বিরামপুর', 'birampur.dinajpur.gov.bd'),
(408, 54, 'Parbatipur', 'পার্বতীপুর', 'parbatipur.dinajpur.gov.bd'),
(409, 54, 'Bochaganj', 'বোচাগঞ্জ', 'bochaganj.dinajpur.gov.bd'),
(410, 54, 'Kaharol', 'কাহারোল', 'kaharol.dinajpur.gov.bd'),
(411, 54, 'Fulbari', 'ফুলবাড়ী', 'fulbari.dinajpur.gov.bd'),
(412, 54, 'Dinajpur Sadar', 'দিনাজপুর সদর', 'dinajpursadar.dinajpur.gov.bd'),
(413, 54, 'Hakimpur', 'হাকিমপুর', 'hakimpur.dinajpur.gov.bd'),
(414, 54, 'Khansama', 'খানসামা', 'khansama.dinajpur.gov.bd'),
(415, 54, 'Birol', 'বিরল', 'birol.dinajpur.gov.bd'),
(416, 54, 'Chirirbandar', 'চিরিরবন্দর', 'chirirbandar.dinajpur.gov.bd'),
(417, 55, 'Lalmonirhat Sadar', 'লালমনিরহাট সদর', 'sadar.lalmonirhat.gov.bd'),
(418, 55, 'Kaliganj', 'কালীগঞ্জ', 'kaliganj.lalmonirhat.gov.bd'),
(419, 55, 'Hatibandha', 'হাতীবান্ধা', 'hatibandha.lalmonirhat.gov.bd'),
(420, 55, 'Patgram', 'পাটগ্রাম', 'patgram.lalmonirhat.gov.bd'),
(421, 55, 'Aditmari', 'আদিতমারী', 'aditmari.lalmonirhat.gov.bd'),
(422, 56, 'Syedpur', 'সৈয়দপুর', 'syedpur.nilphamari.gov.bd'),
(423, 56, 'Domar', 'ডোমার', 'domar.nilphamari.gov.bd'),
(424, 56, 'Dimla', 'ডিমলা', 'dimla.nilphamari.gov.bd'),
(425, 56, 'Jaldhaka', 'জলঢাকা', 'jaldhaka.nilphamari.gov.bd'),
(426, 56, 'Kishorganj', 'কিশোরগঞ্জ', 'kishorganj.nilphamari.gov.bd'),
(427, 56, 'Nilphamari Sadar', 'নীলফামারী সদর', 'nilphamarisadar.nilphamari.gov.bd'),
(428, 57, 'Sadullapur', 'সাদুল্লাপুর', 'sadullapur.gaibandha.gov.bd'),
(429, 57, 'Gaibandha Sadar', 'গাইবান্ধা সদর', 'gaibandhasadar.gaibandha.gov.bd'),
(430, 57, 'Palashbari', 'পলাশবাড়ী', 'palashbari.gaibandha.gov.bd'),
(431, 57, 'Saghata', 'সাঘাটা', 'saghata.gaibandha.gov.bd'),
(432, 57, 'Gobindaganj', 'গোবিন্দগঞ্জ', 'gobindaganj.gaibandha.gov.bd'),
(433, 57, 'Sundarganj', 'সুন্দরগঞ্জ', 'sundarganj.gaibandha.gov.bd'),
(434, 57, 'Phulchari', 'ফুলছড়ি', 'phulchari.gaibandha.gov.bd'),
(435, 58, 'Thakurgaon Sadar', 'ঠাকুরগাঁও সদর', 'thakurgaonsadar.thakurgaon.gov.bd'),
(436, 58, 'Pirganj', 'পীরগঞ্জ', 'pirganj.thakurgaon.gov.bd'),
(437, 58, 'Ranisankail', 'রাণীশংকৈল', 'ranisankail.thakurgaon.gov.bd'),
(438, 58, 'Haripur', 'হরিপুর', 'haripur.thakurgaon.gov.bd'),
(439, 58, 'Baliadangi', 'বালিয়াডাঙ্গী', 'baliadangi.thakurgaon.gov.bd'),
(440, 59, 'Rangpur Sadar', 'রংপুর সদর', 'rangpursadar.rangpur.gov.bd'),
(441, 59, 'Gangachara', 'গংগাচড়া', 'gangachara.rangpur.gov.bd'),
(442, 59, 'Taragonj', 'তারাগঞ্জ', 'taragonj.rangpur.gov.bd'),
(443, 59, 'Badargonj', 'বদরগঞ্জ', 'badargonj.rangpur.gov.bd'),
(444, 59, 'Mithapukur', 'মিঠাপুকুর', 'mithapukur.rangpur.gov.bd'),
(445, 59, 'Pirgonj', 'পীরগঞ্জ', 'pirgonj.rangpur.gov.bd'),
(446, 59, 'Kaunia', 'কাউনিয়া', 'kaunia.rangpur.gov.bd'),
(447, 59, 'Pirgacha', 'পীরগাছা', 'pirgacha.rangpur.gov.bd'),
(448, 60, 'Kurigram Sadar', 'কুড়িগ্রাম সদর', 'kurigramsadar.kurigram.gov.bd'),
(449, 60, 'Nageshwari', 'নাগেশ্বরী', 'nageshwari.kurigram.gov.bd'),
(450, 60, 'Bhurungamari', 'ভুরুঙ্গামারী', 'bhurungamari.kurigram.gov.bd'),
(451, 60, 'Phulbari', 'ফুলবাড়ী', 'phulbari.kurigram.gov.bd'),
(452, 60, 'Rajarhat', 'রাজারহাট', 'rajarhat.kurigram.gov.bd'),
(453, 60, 'Ulipur', 'উলিপুর', 'ulipur.kurigram.gov.bd'),
(454, 60, 'Chilmari', 'চিলমারী', 'chilmari.kurigram.gov.bd'),
(455, 60, 'Rowmari', 'রৌমারী', 'rowmari.kurigram.gov.bd'),
(456, 60, 'Charrajibpur', 'চর রাজিবপুর', 'charrajibpur.kurigram.gov.bd'),
(457, 61, 'Sherpur Sadar', 'শেরপুর সদর', 'sherpursadar.sherpur.gov.bd'),
(458, 61, 'Nalitabari', 'নালিতাবাড়ী', 'nalitabari.sherpur.gov.bd'),
(459, 61, 'Sreebordi', 'শ্রীবরদী', 'sreebordi.sherpur.gov.bd'),
(460, 61, 'Nokla', 'নকলা', 'nokla.sherpur.gov.bd'),
(461, 61, 'Jhenaigati', 'ঝিনাইগাতী', 'jhenaigati.sherpur.gov.bd'),
(462, 62, 'Fulbaria', 'ফুলবাড়ীয়া', 'fulbaria.mymensingh.gov.bd'),
(463, 62, 'Trishal', 'ত্রিশাল', 'trishal.mymensingh.gov.bd'),
(464, 62, 'Bhaluka', 'ভালুকা', 'bhaluka.mymensingh.gov.bd'),
(465, 62, 'Muktagacha', 'মুক্তাগাছা', 'muktagacha.mymensingh.gov.bd'),
(466, 62, 'Mymensingh Sadar', 'ময়মনসিংহ সদর', 'mymensinghsadar.mymensingh.gov.bd'),
(467, 62, 'Dhobaura', 'ধোবাউড়া', 'dhobaura.mymensingh.gov.bd'),
(468, 62, 'Phulpur', 'ফুলপুর', 'phulpur.mymensingh.gov.bd'),
(469, 62, 'Haluaghat', 'হালুয়াঘাট', 'haluaghat.mymensingh.gov.bd'),
(470, 62, 'Gouripur', 'গৌরীপুর', 'gouripur.mymensingh.gov.bd'),
(471, 62, 'Gafargaon', 'গফরগাঁও', 'gafargaon.mymensingh.gov.bd'),
(472, 62, 'Iswarganj', 'ঈশ্বরগঞ্জ', 'iswarganj.mymensingh.gov.bd'),
(473, 62, 'Nandail', 'নান্দাইল', 'nandail.mymensingh.gov.bd'),
(474, 62, 'Tarakanda', 'তারাকান্দা', 'tarakanda.mymensingh.gov.bd'),
(475, 63, 'Jamalpur Sadar', 'জামালপুর সদর', 'jamalpursadar.jamalpur.gov.bd'),
(476, 63, 'Melandah', 'মেলান্দহ', 'melandah.jamalpur.gov.bd'),
(477, 63, 'Islampur', 'ইসলামপুর', 'islampur.jamalpur.gov.bd'),
(478, 63, 'Dewangonj', 'দেওয়ানগঞ্জ', 'dewangonj.jamalpur.gov.bd'),
(479, 63, 'Sarishabari', 'সরিষাবাড়ী', 'sarishabari.jamalpur.gov.bd'),
(480, 63, 'Madarganj', 'মাদারগঞ্জ', 'madarganj.jamalpur.gov.bd'),
(481, 63, 'Bokshiganj', 'বকশীগঞ্জ', 'bokshiganj.jamalpur.gov.bd'),
(482, 64, 'Barhatta', 'বারহাট্টা', 'barhatta.netrokona.gov.bd'),
(483, 64, 'Durgapur', 'দুর্গাপুর', 'durgapur.netrokona.gov.bd'),
(484, 64, 'Kendua', 'কেন্দুয়া', 'kendua.netrokona.gov.bd'),
(485, 64, 'Atpara', 'আটপাড়া', 'atpara.netrokona.gov.bd'),
(486, 64, 'Madan', 'মদন', 'madan.netrokona.gov.bd'),
(487, 64, 'Khaliajuri', 'খালিয়াজুরী', 'khaliajuri.netrokona.gov.bd'),
(488, 64, 'Kalmakanda', 'কলমাকান্দা', 'kalmakanda.netrokona.gov.bd'),
(489, 64, 'Mohongonj', 'মোহনগঞ্জ', 'mohongonj.netrokona.gov.bd'),
(490, 64, 'Purbadhala', 'পূর্বধলা', 'purbadhala.netrokona.gov.bd'),
(491, 64, 'Netrokona Sadar', 'নেত্রকোণা সদর', 'netrokonasadar.netrokona.gov.bd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_bangla` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fh_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name_ban` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name_eng` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name_ban` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name_eng` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthcer` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address_present_english` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_present_bangla` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `village_present_bangla` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `village_present_englishh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pollice_present_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pollice_present_ban` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `div_present_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `div_present_ban` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dis_present_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dis_present_ban` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_office_present_ban` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_office_present_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode_present_ban` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode_present_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_per_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_per_ban` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `villlage_per_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `village_per_ban` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pollice_per_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pollice_per_ban` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `div_per_ban` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `div_per_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dis_per_ban` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dis_per_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postoffice_per_ban` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postoffice_per_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code_ban` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ward_id` int(11) DEFAULT NULL,
  `nid_photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ebill_photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `name_bangla`, `fh_id`, `father_name_ban`, `father_name_eng`, `mother_name_ban`, `mother_name_eng`, `blood_group`, `gender`, `birthdate`, `phone`, `nid`, `birthcer`, `image`, `remember_token`, `created_at`, `updated_at`, `address_present_english`, `address_present_bangla`, `village_present_bangla`, `village_present_englishh`, `pollice_present_eng`, `pollice_present_ban`, `div_present_eng`, `div_present_ban`, `dis_present_eng`, `dis_present_ban`, `post_office_present_ban`, `post_office_present_eng`, `postcode_present_ban`, `postcode_present_eng`, `address_per_eng`, `address_per_ban`, `villlage_per_eng`, `village_per_ban`, `pollice_per_eng`, `pollice_per_ban`, `div_per_ban`, `div_per_eng`, `dis_per_ban`, `dis_per_eng`, `postoffice_per_ban`, `postoffice_per_eng`, `post_code_ban`, `post_code_eng`, `ward_id`, `nid_photo`, `ebill_photo`) VALUES
(1, 'kamruzzaman Kajol', 'kajol@gmail.com', NULL, '$2y$10$9GlZ6UZHjKS9qCpZRRiRReZHGINPxKnjd1W0C4Rx8sneI.VIHgiCS', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '2021-03-24 02:04:14', '2021-03-24 02:04:14', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'sadasdd', 'superadmin@gmail.com', NULL, '$2y$10$dvOwwlCKQE1PJnio//B2j.Qy/MjbkM1gF5K8RIXXJNqoxoUtqxuL6', 'sadsdsa', '', '', '', '', '', 'A-', 'Male', '2021-07-14', '42343243', '2222222222', NULL, NULL, NULL, '2021-07-31 04:45:10', '2021-07-31 04:45:10', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Kamruzzaman kajol', 'kajol23@gmail.com', NULL, '$2y$10$UbXXvxSLwZEcDbqa3Qf9b.lLcWBfXoolTC97UrDRazaKVpluakc3C', 'Kamruzzaman kajol', '', '', '', '', '', 'B+', 'Male', '2021-07-15', '01646735100', '222222222234', NULL, NULL, NULL, '2021-07-31 05:13:34', '2021-07-31 05:13:34', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Kamruzzaman kajol', 'mizan@gmail.com', NULL, '$2y$10$eAviaWFlIJwq5EkP1.Z3PO1Y7lnzgt2iJhRluaTPUPOXTEtqP80Zq', 'Kamruzzaman kajol', '', '', '', '', '', 'B+', 'Male', '2021-08-21', '01646735100', '3232323232323', NULL, NULL, NULL, '2021-08-01 02:28:48', '2021-08-01 02:28:48', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'rahat', 'kk@gmail.com', NULL, '$2y$10$7XzUWf.Y.4r.QUVNHm.wB.gesSkwrVEjir.9..QXUfiWO65Xin2BS', 'কাজল', '', '', '', '', '', 'B+', 'Male', '2021-08-15', '01646735100', '2121212121', NULL, NULL, NULL, '2021-08-02 00:14:44', '2021-08-02 00:14:44', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'rerrwer', 'rr@gmail.com', NULL, '$2y$10$7E/iytYfvHOHUtirVK7ZZOYyYvjbxzBHnAW6UvIH4gTSEg39z83ie', 'ewrwerw', '', '', '', '', '', 'B+', 'Male', '2021-08-13', '345345', '23232222222', NULL, NULL, NULL, '2021-08-02 02:06:45', '2021-08-02 02:06:45', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'kajol', 'r4@gmail.com', NULL, '$2y$10$ydI4G34nhJWwrEiXWph/reeEVrJumADCg.lx7yLVGWHd90g.sa6lu', 'rewrw', '', '', '', '', '', 'B+', 'Male', '2021-08-19', '444444', '323232232321321', NULL, NULL, NULL, '2021-08-02 02:08:01', '2021-08-02 02:08:01', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'test', 'r5@gmail.com', NULL, '$2y$10$5C9RDPJ4.Ybko16McgfYzOECAXzlZmSEHTfYyf/2TUpR5SUEbfayW', 'test bangla', '', '', '', '', '', 'A+', 'Male', '2021-08-21', '01646735100', '212121212121212', NULL, NULL, NULL, '2021-08-07 21:19:02', '2021-08-07 21:19:02', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'new test', 're4@gmail.com', NULL, '$2y$10$D381ZYjNcpEYj3wVoAEGheH0RqwT0Sdm5DHLd6xJu7r9pDbwmuTg.', 'test bb', '', '', '', '', '', 'B+', 'Male', '2021-08-14', '01646735100', '3221213213212', NULL, NULL, NULL, '2021-08-07 22:07:43', '2021-08-07 22:07:43', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'sddfsd', 'rre4@gmail.com', NULL, '$2y$10$bpYz/.dIgogRbIAtbXJjQ.on0GzDP3GSjI4.f7YgAeL85fAR4GH2C', 'sdfsdf', '', '', '', '', '', 'B+', 'Male', '2021-08-14', '01646735100', '45454523432412', NULL, NULL, NULL, '2021-08-07 22:19:39', '2021-08-07 22:19:39', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'final test 2', 'newtest2@gmail.com', NULL, '$2y$10$t0BoJW/uNLog5WSWVfKlZ.mvpng.q7.aK/PiFY3X9jSeChPNw5xf6', 'final test 2', 'Father', 'qas', 'asas', 'qweqwe', 'qeqwe', 'B+', 'Male', '2021-08-28', '01646735100', '3214312431232', NULL, NULL, NULL, '2021-08-14 03:00:38', '2021-08-14 03:05:18', 'sefrewr', 'erterte', 'tretert', 'terter', 'Nalitabari', 'নালিতাবাড়ী', 'Mymensingh', 'ময়মনসিংহ', 'Sherpur', 'শেরপুর', 'নালিতাবাড়ী', 'Nalitabari', '2110', '2110', 'sefrewr', 'erterte', 'terter', 'retet', 'Nalitabari', 'নালিতাবাড়ী', 'ময়মনসিংহ', 'Mymensingh', 'শেরপুর', 'Sherpur', 'ডেমরা', 'Demra', NULL, NULL, 2, NULL, NULL),
(17, 'kamruzzaman kajol', 'admintest@gmail.com', NULL, '$2y$10$U.xxYPyzS6Ax5TaegOXOh.yEKaxU84V/CHEJU4g/hCXWLGK0Ut/dC', 'কাজল', 'Father', 'রেযাউল', 'rezaul Alam', 'কোহিনুর', 'kohinoor', 'B+', 'Male', '2021-08-06', '01646735100', '21233342345232', NULL, 'public/upload/peopleimage/demo_image.jpg', NULL, '2021-08-14 03:29:24', '2021-08-14 03:32:05', 'sokar', 'dfgd', 'werwe', 'werwe', 'Parbatipur', 'পার্বতীপুর', 'Rangpur ', 'রংপুর', 'Dinajpur', 'দিনাজপুর', 'পার্বতীপুর', 'Parbatipur', '৫২৫০', '5250', 'sokar', 'dfgd', 'werwe', 'erwer', 'Parbatipur', 'পার্বতীপুর', 'রংপুর', 'Rangpur ', 'দিনাজপুর', 'Dinajpur', 'ডেমরা', 'Demra', '৫২৫০', '5250', 2, 'public/upload/peopleimage/demo_image.jpg', 'public/upload/peopleimage/demo_image.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vechile_routes`
--

CREATE TABLE `vechile_routes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `route_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fare` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vechile_routes`
--

INSERT INTO `vechile_routes` (`id`, `route_title`, `fare`, `created_at`, `updated_at`) VALUES
(2, 'Mirpur', '112', '2022-01-19 03:46:32', '2022-01-19 03:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `route_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_made` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `driver_license` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `route_id`, `v_number`, `v_model`, `year_made`, `driver_name`, `driver_license`, `driver_contact`, `note`, `created_at`, `updated_at`) VALUES
(2, 'Mirpur', '2345', 'volvo', '2020', 'ee', '2345342', '435', '213e23', '2022-01-19 04:26:59', '2022-01-19 04:26:59');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_card` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `out_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ward_no_ban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(110) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward_no_eng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_cor_name_ban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_cor_name_eng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_ban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_eng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `div_eng` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `div_ban` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code_ban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code_eng` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_office_ban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_office_eng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `police_station_ban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `police_station_eng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_address_ban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_address_eng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(20) DEFAULT 0,
  `border_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blong` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`id`, `ward_no_ban`, `gender`, `personal_id`, `ward_no_eng`, `city_cor_name_ban`, `city_cor_name_eng`, `district_ban`, `district_eng`, `div_eng`, `div_ban`, `postal_code_ban`, `postal_code_eng`, `post_office_ban`, `post_office_eng`, `police_station_ban`, `police_station_eng`, `office_address_ban`, `office_address_eng`, `phone`, `email`, `status`, `border_image`, `blong`, `logo`, `created_at`, `updated_at`) VALUES
(2, 'মিরপুর -১', NULL, 'mirpur-19613', '16', 'ঢাকা উত্তর', 'North City Corporation', 'ঢাকা', 'Dhakas', '', '', '৬ ৫৪', '654', 'মিরপুর', 'mirpur', 'সাহ আলি', 'sah ali', 'মিরপুর', 'mirpur', '016467351000', 'm@gmail.com', 1, 'public/upload/borderimage/1616340133.png', 'public/upload/borderimage/1617611227.jpg', 'public/upload/1620459916.png', '2021-02-06 02:47:04', '2021-05-08 01:45:16'),
(4, '৩৯', NULL, '393098', '39', 'ঢাকা উত্তর সিটি কর্পোরেশন', 'Dhaka North City Corporation', 'ঢাকা', 'Dhaka', '', '', '১২১২', '1212', 'ঢাকা', 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'Dhaka', '01794627390', '39@gmail.com', 1, 'public/upload/borderimage/dncc.png', 'public/upload/borderimage/dncc.png', NULL, '2021-04-27 12:49:27', '2021-04-27 12:49:27'),
(6, '২০', NULL, '205498', '20', 'ডিনসিসি', 'DNCC', 'ঢাকা', 'Dhaka', '', '', '১২১২', '1212', 'ভাটারা', 'Khilbaritek', 'ভাটারা', 'Vatara', 'খিলবাড়িরটেক', 'Khilbaritek', '0134578879', '39ward@mail.com', 1, 'public/upload/borderimage/235-2356823_images-of-certificate-borders-elegant-border-for-certificate-png.png', 'public/upload/borderimage/972-9725581_certificate-border-transparent-background-picture-frame.png', NULL, '2021-05-06 01:53:18', '2021-05-06 01:53:18'),
(15, '২১', NULL, '217327', '21', 'ঢাকা উত্তর সিটি কর্পোরেশন', 'Dhaka North City Corporation', 'ঢাকা', 'Dhaka', '', '', '১২১২', '1212', 'ঢাকা', 'Dhaka', 'ঢাকা', 'Dhaka', '১০৯৩, খিলবাড়িরটেক, ভাটারা, গুলশান-১২১২', '1093, Khilbarirtek, Vatara, Gulshan-1212', '1123456789', '21test@gmail.com', 1, 'public/upload/borderimage/1620542945.png', 'public/upload/borderimage/1620542945.png', 'public/upload/unnamed.png', '2021-05-09 00:37:53', '2021-05-09 00:49:05'),
(16, '১৫১', NULL, '1512493', '151', 'ঢাকা দক্ষিণ সিটি কর্পোরেশন', 'Dhaka South City Corporation', 'ঢাকা', 'Dhaka', '', '', '৩৪২৫৬', '34256', 'ধানমন্ডি', 'Dhanmondi R. A.', 'ধানমন্ডি', 'Dhanmondi', 'রায় বাজার', 'Purbo Royer Bazar', '01646735100', 'south@gmail.com', 1, 'public/upload/borderimage/1620542945yy.png', 'public/upload/borderimage/1620542945.png', 'public/upload/676.png', '2021-05-09 01:39:46', '2021-05-09 01:39:46'),
(17, '0', NULL, '391671', '0', 'এলেঙ্গা পৌরসভা কার্যালয়', 'Elenga Municipality Office', 'টাঙ্গাইল', 'Tangail', 'Dhaka', 'ঢাকা', '১৯৭৪', '1974', 'দক্ষিণ চামুরিয়া ', 'Dokkin Chamuria', 'কালিহাতী', 'Kalihati', 'কালিহাতী ,টাঙ্গাইল', 'Kalihati, Tangail', '01234567981', '39dncc@gmail.com', 1, 'public/upload/borderimage/1637480337.PNG', 'public/upload/borderimage/1637480337.PNG', 'public/upload/1638339234.png', '2021-08-17 10:41:38', '2021-12-01 11:13:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `admin_notices`
--
ALTER TABLE `admin_notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_enquiries`
--
ALTER TABLE `admission_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assaign_teacher_to_classes`
--
ALTER TABLE `assaign_teacher_to_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assaign_teacher_to_events`
--
ALTER TABLE `assaign_teacher_to_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assaign_teacher_to_subjects`
--
ALTER TABLE `assaign_teacher_to_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignteacher_to_exans`
--
ALTER TABLE `assignteacher_to_exans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_class_to_teachers`
--
ALTER TABLE `assign_class_to_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_reasons`
--
ALTER TABLE `assign_reasons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_teacher_to_addresuls`
--
ALTER TABLE `assign_teacher_to_addresuls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendences`
--
ALTER TABLE `attendences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `civilinfos`
--
ALTER TABLE `civilinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_routines`
--
ALTER TABLE `class_routines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_shedules`
--
ALTER TABLE `class_shedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain_types`
--
ALTER TABLE `complain_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custome_fields`
--
ALTER TABLE `custome_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disable_reasons`
--
ALTER TABLE `disable_reasons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `division_id` (`division_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_routines`
--
ALTER TABLE `exam_routines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followup_details`
--
ALTER TABLE `followup_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostel_infos`
--
ALTER TABLE `hostel_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostel_rooms`
--
ALTER TABLE `hostel_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostel_room_types`
--
ALTER TABLE `hostel_room_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institute_information`
--
ALTER TABLE `institute_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesson_lists`
--
ALTER TABLE `lesson_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesson_plans`
--
ALTER TABLE `lesson_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_students`
--
ALTER TABLE `main_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `noticeboards`
--
ALTER TABLE `noticeboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pdfdesignones`
--
ALTER TABLE `pdfdesignones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdfdesigns`
--
ALTER TABLE `pdfdesigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdfdesigntwos`
--
ALTER TABLE `pdfdesigntwos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `phone_call_logs`
--
ALTER TABLE `phone_call_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postal_dispatches`
--
ALTER TABLE `postal_dispatches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postal_receives`
--
ALTER TABLE `postal_receives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purposes`
--
ALTER TABLE `purposes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `references`
--
ALTER TABLE `references`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siblings`
--
ALTER TABLE `siblings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sources`
--
ALTER TABLE `sources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sranis`
--
ALTER TABLE `sranis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_categories`
--
ALTER TABLE `student_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_houses`
--
ALTER TABLE `student_houses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teststudents`
--
ALTER TABLE `teststudents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topic_lists`
--
ALTER TABLE `topic_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `district_id` (`district_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vechile_routes`
--
ALTER TABLE `vechile_routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `admin_notices`
--
ALTER TABLE `admin_notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admission_enquiries`
--
ALTER TABLE `admission_enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assaign_teacher_to_classes`
--
ALTER TABLE `assaign_teacher_to_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assaign_teacher_to_events`
--
ALTER TABLE `assaign_teacher_to_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assaign_teacher_to_subjects`
--
ALTER TABLE `assaign_teacher_to_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assignteacher_to_exans`
--
ALTER TABLE `assignteacher_to_exans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assign_class_to_teachers`
--
ALTER TABLE `assign_class_to_teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assign_reasons`
--
ALTER TABLE `assign_reasons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assign_teacher_to_addresuls`
--
ALTER TABLE `assign_teacher_to_addresuls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendences`
--
ALTER TABLE `attendences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `civilinfos`
--
ALTER TABLE `civilinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3246;

--
-- AUTO_INCREMENT for table `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class_routines`
--
ALTER TABLE `class_routines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `class_shedules`
--
ALTER TABLE `class_shedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complain_types`
--
ALTER TABLE `complain_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `custome_fields`
--
ALTER TABLE `custome_fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `disable_reasons`
--
ALTER TABLE `disable_reasons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exam_routines`
--
ALTER TABLE `exam_routines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `followup_details`
--
ALTER TABLE `followup_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostel_infos`
--
ALTER TABLE `hostel_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hostel_rooms`
--
ALTER TABLE `hostel_rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hostel_room_types`
--
ALTER TABLE `hostel_room_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `institute_information`
--
ALTER TABLE `institute_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lesson_lists`
--
ALTER TABLE `lesson_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `lesson_plans`
--
ALTER TABLE `lesson_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_students`
--
ALTER TABLE `main_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `noticeboards`
--
ALTER TABLE `noticeboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pdfdesignones`
--
ALTER TABLE `pdfdesignones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pdfdesigns`
--
ALTER TABLE `pdfdesigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pdfdesigntwos`
--
ALTER TABLE `pdfdesigntwos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT for table `phone_call_logs`
--
ALTER TABLE `phone_call_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `postal_dispatches`
--
ALTER TABLE `postal_dispatches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `postal_receives`
--
ALTER TABLE `postal_receives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purposes`
--
ALTER TABLE `purposes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `references`
--
ALTER TABLE `references`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `siblings`
--
ALTER TABLE `siblings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sources`
--
ALTER TABLE `sources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sranis`
--
ALTER TABLE `sranis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_categories`
--
ALTER TABLE `student_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_houses`
--
ALTER TABLE `student_houses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teststudents`
--
ALTER TABLE `teststudents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `topic_lists`
--
ALTER TABLE `topic_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `upazilas`
--
ALTER TABLE `upazilas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=492;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `vechile_routes`
--
ALTER TABLE `vechile_routes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_ibfk_2` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
