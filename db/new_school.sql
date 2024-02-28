-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 07:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ward_id` int(100) DEFAULT NULL,
  `staff_id` varchar(100) DEFAULT NULL,
  `staff_main_id` varchar(100) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `status` int(20) DEFAULT 1,
  `cstatus` int(11) DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `ward_id`, `staff_id`, `staff_main_id`, `name`, `email`, `phone`, `username`, `email_verified_at`, `password`, `image`, `status`, `cstatus`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, '4004', NULL, 'superadmin', 'superadmin@gmail.com', NULL, 'superadmin', NULL, '$2y$10$P7XKbcdy.V46KeuF1PljgOoXXfAQvqjuZkPg71AyMlNUkdcWbBXjS', 'public/upload/adminimage/1619130946.png', 1, 5, 'v7zZ4fuTadXkah22gxX3V9q13TEJT3FYFxjAOx6OnyxSjccpA5rcQjLd0Eqh', '2021-03-24 05:29:53', '2021-04-19 13:25:50'),
(2, NULL, NULL, NULL, 'admin', 'admin@gmail.com', NULL, NULL, NULL, '$2y$10$oKyZWZD/FsdnA47iBH36hO6pWRTwXVf.kQiOUyaPlu.xY7ZE4beW6', NULL, 1, 5, NULL, '2021-03-24 06:14:00', '2021-03-24 06:14:00'),
(8, 2, NULL, NULL, 'kajol4', 'testc@gmail.com', '543', 'কাজল', NULL, '$2y$10$irpBgjwv./j6U9.yRzhTHOL/qeJR/AtCIaSHBRu8nHtGZcSOQvzqK', 'public/upload/adminimage/1619130946.png', 1, 1, NULL, '2021-04-22 16:35:46', '2021-05-08 13:48:49'),
(9, 2, NULL, NULL, 'Kamruzzaman', 'm@gmail.com', '01646735100', NULL, NULL, '$2y$10$7PobtDIJGyOslRzgnkuGTOEsbPkdi5XXVrO47W6pmZUwQ18.Yv.4O', NULL, 1, 0, NULL, '2021-04-25 04:26:21', '2022-01-17 22:29:03'),
(10, 4, NULL, NULL, 'Kalam', 'kalam@gmail.com', '01794627390', 'কালাম', NULL, '$2y$10$7pbApvEwt114NGingABq6eFkhqhcWdfAMHjn0M6Hyh6AXI80hQZoW', 'public/upload/adminimage/1619549656.PNG', 1, 1, NULL, '2021-04-27 12:54:16', '2021-04-27 12:54:16'),
(13, 10, NULL, NULL, 'test', 'testnew1@gmail.com', '01646735100', 'kajol', NULL, '$2y$10$cCBuOhRYZ4M3Buy9T3Rvf.o1mKnqnIdOQTqLbe0glvD9rXhmx9mFy', 'public/upload/adminimage/1620461064.jpg', 1, 1, NULL, '2021-05-08 02:04:24', '2021-05-08 02:04:24'),
(16, 16, NULL, NULL, 'South_Counsilor', 'sco@gmail.com', '34324324', 'করিম আলি খান', NULL, '$2y$10$YTeQOwZ0EWyxBb4xIVkpm.DmR4mOhEccSautmzvs6VU1LVv5FzzK6', 'public/upload/adminimage/1620546325.png', 1, 1, NULL, '2021-05-09 01:45:25', '2021-05-09 01:45:25'),
(23, NULL, NULL, NULL, 'mr.student', 'mstudent@gmail.com', '11111111111', NULL, NULL, '$2y$10$EeQxt0RHTHrNKjsb5RpyaOXHAsfq.NiVjWM4vMlz7o3Vdw2YFXr72', 'public/upload/adminimage/1709099438.png', 1, 0, NULL, '2024-02-27 23:50:38', '2024-02-27 23:50:38'),
(24, NULL, NULL, NULL, 'mr.teacher', 'mteacher@gmail.com', '11111111111', NULL, NULL, '$2y$10$inYqTOU1K/vUgxBY/r4Hk.AM4ZQMJP0tE0p6NA0g6UyIJvNC/LUCq', NULL, 1, 0, NULL, '2024-02-27 23:52:27', '2024-02-27 23:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `admin_notices`
--

CREATE TABLE `admin_notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ward_id` varchar(255) NOT NULL,
  `sender_id` varchar(255) NOT NULL,
  `admin_id` varchar(255) DEFAULT NULL,
  `all_id` varchar(20) DEFAULT '0',
  `date` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `status` varchar(255) DEFAULT '0',
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
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `des` text NOT NULL,
  `note` text NOT NULL,
  `next_follow_up_date` varchar(255) NOT NULL,
  `last_follow_up_date` varchar(200) DEFAULT NULL,
  `date` varchar(255) NOT NULL,
  `assigned` varchar(255) NOT NULL,
  `refrence` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `number_of_child` varchar(255) NOT NULL,
  `status` varchar(100) DEFAULT 'Active',
  `creator_name` varchar(100) DEFAULT NULL,
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
-- Table structure for table `alumini_events`
--

CREATE TABLE `alumini_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(200) DEFAULT NULL,
  `section` varchar(200) DEFAULT NULL,
  `event_for` varchar(255) DEFAULT NULL,
  `event_title` varchar(255) DEFAULT NULL,
  `from_date` varchar(255) DEFAULT NULL,
  `to_date` varchar(255) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `event_notification_msg` text DEFAULT NULL,
  `type_noti` varchar(255) DEFAULT NULL,
  `pass_out_session` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumini_events`
--

INSERT INTO `alumini_events` (`id`, `class`, `section`, `event_for`, `event_title`, `from_date`, `to_date`, `note`, `event_notification_msg`, `type_noti`, `pass_out_session`, `created_at`, `updated_at`) VALUES
(2, '2', 'A,B', 'Class', 'cc', '2022-03-01', '2022-03-01', 'tert', 'erte', 'Sms,Email', '2021-22', '2022-02-28 23:10:40', '2022-03-01 02:02:50');

-- --------------------------------------------------------

--
-- Table structure for table `apply_leaves`
--

CREATE TABLE `apply_leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` varchar(255) NOT NULL,
  `role_id` varchar(20) DEFAULT NULL,
  `apply_date` varchar(255) NOT NULL,
  `total_days` varchar(100) DEFAULT NULL,
  `available_leave` varchar(255) NOT NULL,
  `from_date` varchar(255) DEFAULT NULL,
  `to_date` varchar(255) DEFAULT NULL,
  `from_month` varchar(100) DEFAULT NULL,
  `to_month` varchar(100) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `doc` varchar(255) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `status` varchar(100) DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apply_leaves`
--

INSERT INTO `apply_leaves` (`id`, `staff_id`, `role_id`, `apply_date`, `total_days`, `available_leave`, `from_date`, `to_date`, `from_month`, `to_month`, `reason`, `doc`, `note`, `status`, `created_at`, `updated_at`) VALUES
(9, '20', NULL, '2022-02-05', '36', 'Maternity Leave', '2022-02-27', '2022-04-03', '2', '4', 'sdsad', '1629038334483_CATEC resource requirement (2).pdf', 'sdsad', 'Pending', '2022-02-05 01:26:36', '2022-02-05 05:18:27'),
(10, '21', NULL, '2022-02-05', '5', 'Medical Leave', '2022-02-07', '2022-02-11', '2', '2', 'aSAs', '1629038334483_CATEC resource requirement (2).pdf', 'asa', 'Approve', '2022-02-05 01:27:33', '2022-02-05 01:33:58');

-- --------------------------------------------------------

--
-- Table structure for table `assaign_class_to_exams`
--

CREATE TABLE `assaign_class_to_exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` varchar(255) DEFAULT NULL,
  `exam_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assaign_class_to_exams`
--

INSERT INTO `assaign_class_to_exams` (`id`, `class_id`, `exam_id`, `created_at`, `updated_at`) VALUES
(11, '2', '3', '2022-03-06 00:59:24', '2022-03-06 00:59:24'),
(12, '3', '3', '2022-03-06 00:59:24', '2022-03-06 00:59:24'),
(13, '4', '1', '2022-03-06 00:59:35', '2022-03-06 00:59:35'),
(14, '5', '1', '2022-03-06 00:59:35', '2022-03-06 00:59:35');

-- --------------------------------------------------------

--
-- Table structure for table `assaign_home_work_to_sections`
--

CREATE TABLE `assaign_home_work_to_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_id` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assaign_teacher_to_classes`
--

CREATE TABLE `assaign_teacher_to_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` varchar(255) DEFAULT NULL,
  `section_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assaign_teacher_to_events`
--

CREATE TABLE `assaign_teacher_to_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` varchar(255) DEFAULT NULL,
  `event_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assaign_teacher_to_subjects`
--

CREATE TABLE `assaign_teacher_to_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` varchar(255) DEFAULT NULL,
  `subject_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assignteacher_to_exans`
--

CREATE TABLE `assignteacher_to_exans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` varchar(255) DEFAULT NULL,
  `exam_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assign_class_to_teachers`
--

CREATE TABLE `assign_class_to_teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` varchar(11) DEFAULT NULL,
  `section_id` varchar(11) DEFAULT NULL,
  `teacher_id` varchar(255) DEFAULT NULL,
  `class_id` varchar(255) DEFAULT NULL,
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
  `student_id` varchar(255) NOT NULL,
  `reason_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assign_student_to_fee_groups`
--

CREATE TABLE `assign_student_to_fee_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` varchar(255) DEFAULT NULL,
  `department_id` varchar(100) DEFAULT NULL,
  `fee_group_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_student_to_fee_groups`
--

INSERT INTO `assign_student_to_fee_groups` (`id`, `class_id`, `department_id`, `fee_group_id`, `created_at`, `updated_at`) VALUES
(1, '2', '0', '3', '2022-03-02 01:24:18', '2022-03-02 01:24:18'),
(2, '4', '1', '3', '2022-03-02 01:24:27', '2022-03-02 01:24:27'),
(3, '4', NULL, '3', '2024-02-27 08:54:08', '2024-02-27 08:54:08');

-- --------------------------------------------------------

--
-- Table structure for table `assign_teacher_to_addresuls`
--

CREATE TABLE `assign_teacher_to_addresuls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` varchar(255) DEFAULT NULL,
  `subject_id` varchar(255) DEFAULT NULL,
  `sreni_id` varchar(255) DEFAULT NULL,
  `department_id` varchar(255) NOT NULL,
  `section_id` varchar(255) NOT NULL,
  `exam_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendences`
--

CREATE TABLE `attendences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roll` varchar(255) DEFAULT NULL,
  `student_name` varchar(255) DEFAULT NULL,
  `sreni_id` varchar(255) DEFAULT NULL,
  `department_id` varchar(255) DEFAULT NULL,
  `section_id` varchar(255) DEFAULT NULL,
  `student_id` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `present_status` varchar(255) DEFAULT NULL,
  `subject22` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendences`
--

INSERT INTO `attendences` (`id`, `roll`, `student_name`, `sreni_id`, `department_id`, `section_id`, `student_id`, `date`, `present_status`, `subject22`, `note`, `created_at`, `updated_at`, `subject`) VALUES
(12, NULL, 'Mizan Islam', '3', NULL, NULL, '17', '2024-02-27', 'Present', NULL, NULL, '2024-02-27 08:39:05', '2024-02-27 08:39:05', '4'),
(13, NULL, 'Md . Karim Ali Khan', '4', NULL, NULL, '12', '2024-02-27', 'Present', NULL, NULL, '2024-02-27 08:40:18', '2024-02-27 08:40:18', '1');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_number` varchar(255) DEFAULT NULL,
  `isbn_number` varchar(255) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `rack_number` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `available_quantity` varchar(200) DEFAULT NULL,
  `book_price` varchar(255) DEFAULT NULL,
  `post_date` varchar(255) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_title`, `book_number`, `isbn_number`, `publisher`, `author`, `subject`, `rack_number`, `quantity`, `available_quantity`, `book_price`, `post_date`, `des`, `created_at`, `updated_at`) VALUES
(3, 'George Knapp', 'Aidan Decker', 'Akeem Holloway', 'Dawn Peters', 'Preston Estes', 'Judith Alston', 'Glenna Goodwin', '369', '739', 'Rhonda Giles', '1989-08-15', 'Quidem nobis in repu', '2022-02-26 02:27:49', '2022-02-27 02:42:20');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header_left_text` varchar(255) NOT NULL,
  `header_center_text` varchar(255) DEFAULT NULL,
  `header_right_text` varchar(255) DEFAULT NULL,
  `body_text` varchar(255) DEFAULT NULL,
  `footer_left_text` varchar(255) DEFAULT NULL,
  `footer_center_text` varchar(255) DEFAULT NULL,
  `footer_right_text` varchar(255) DEFAULT NULL,
  `header_height` varchar(255) DEFAULT NULL,
  `footer_height` varchar(255) DEFAULT NULL,
  `body_height` varchar(255) DEFAULT NULL,
  `body_width` varchar(255) DEFAULT NULL,
  `student_photo` varchar(255) DEFAULT NULL,
  `background_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

CREATE TABLE `classrooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `capacity` varchar(255) NOT NULL,
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
  `subject_id` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `room` varchar(255) DEFAULT NULL,
  `date` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `department_id` varchar(255) NOT NULL,
  `sreni_id` varchar(255) NOT NULL,
  `section_id` varchar(255) NOT NULL,
  `teacher_id` varchar(255) NOT NULL,
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
(16, 'English', NULL, '101', '9.00 am - 9.30 am', 'Saturday', '0', '2', '1', '0', '2022-01-16 00:12:38', '2022-01-16 00:12:38'),
(17, 'Higher Math', NULL, '201', '10.30 am -11.00 am', 'Monday', '1', '4', '2', '1', '2024-02-13 22:19:06', '2024-02-13 22:19:06');

-- --------------------------------------------------------

--
-- Table structure for table `class_shedules`
--

CREATE TABLE `class_shedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
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
-- Table structure for table `collect_fees`
--

CREATE TABLE `collect_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) DEFAULT NULL,
  `payment_id` varchar(100) DEFAULT NULL,
  `account_money` varchar(255) DEFAULT NULL,
  `fee_id` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `due` varchar(100) DEFAULT '0',
  `discount_type` varchar(200) DEFAULT NULL,
  `fine_amount` varchar(100) DEFAULT '0',
  `discount_amount` varchar(100) DEFAULT '0',
  `payment_mode` varchar(100) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collect_fees`
--

INSERT INTO `collect_fees` (`id`, `student_id`, `payment_id`, `account_money`, `fee_id`, `status`, `date`, `due`, `discount_type`, `fine_amount`, `discount_amount`, `payment_mode`, `note`, `created_at`, `updated_at`) VALUES
(3, '9', '9-9', '500', '5', 'Paid', '2022-03-05', '0', 'none', '0', '0', 'Cash', 'good', '2022-03-05 04:21:15', '2022-03-05 04:21:15'),
(4, '12', '12-1', '500', '5', 'Paid', '2024-02-27', '0', 'none', '0', '0', 'Cash', NULL, '2024-02-27 09:09:06', '2024-02-27 09:09:06'),
(5, '12', '12-7', '1000', '7', 'Paid', '2024-02-27', '0', 'none', '0', '0', 'Cash', NULL, '2024-02-27 09:09:31', '2024-02-27 09:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `com_type` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `com_by` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `action_taken` varchar(255) NOT NULL,
  `assigned` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `document` varchar(255) DEFAULT NULL,
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
  `name` varchar(255) NOT NULL,
  `des` varchar(255) DEFAULT NULL,
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
  `belongs_to` varchar(255) NOT NULL,
  `field_group` varchar(100) DEFAULT NULL,
  `field_type` varchar(255) NOT NULL,
  `field_value` varchar(255) DEFAULT NULL,
  `field_name` varchar(255) NOT NULL,
  `database_colomn_name` varchar(255) DEFAULT NULL,
  `tb_data` varchar(10) DEFAULT '0',
  `validation` varchar(255) DEFAULT '0',
  `visibility` varchar(255) NOT NULL,
  `field_order` int(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custome_fields`
--

INSERT INTO `custome_fields` (`id`, `belongs_to`, `field_group`, `field_type`, `field_value`, `field_name`, `database_colomn_name`, `tb_data`, `validation`, `visibility`, `field_order`, `created_at`, `updated_at`) VALUES
(29, '1', 'Student information', 'text', NULL, 'Admission No', 'admission_no', '0', '1', '1', 0, '2022-01-20 00:26:44', '2022-01-23 06:17:10'),
(30, '1', 'Student information', 'text', NULL, 'Roll Number', 'roll_number', '0', '0', '1', 1, '2022-01-20 00:28:04', '2022-01-23 06:17:10'),
(31, '1', 'Student information', 'select', NULL, 'Class', 'class', '0', '1', '1', 2, '2022-01-20 00:28:38', '2022-01-23 06:17:10'),
(32, '1', 'Student information', 'select', NULL, 'Section', 'section', '0', '1', '1', 4, '2022-01-20 00:29:24', '2022-01-23 04:25:45'),
(33, '1', 'Student information', 'text', NULL, 'First Name', 'first_name', '1', '1', '1', 5, '2022-01-20 00:30:01', '2022-01-23 04:25:45'),
(34, '1', 'Student information', 'text', NULL, 'Last Name', 'last_name', '0', '0', '1', 6, '2022-01-20 00:30:26', '2022-01-23 04:25:45'),
(35, '1', 'Student information', 'select', 'Select,Male,Female', 'Gender', 'gender', '0', '1', '1', 7, '2022-01-20 00:31:24', '2022-01-23 04:25:45'),
(36, '1', 'Student information', 'date', NULL, 'Date Of Birth', 'date_of_birth', '1', '1', '1', 8, '2022-01-20 00:32:02', '2022-01-23 04:25:45'),
(37, '1', 'Student information', 'select', NULL, 'Category', 'category', '0', '0', '1', 9, '2022-01-20 00:33:18', '2022-01-20 03:19:18'),
(38, '1', 'Student information', 'text', NULL, 'Religion', 'religion', '0', '0', '1', 10, '2022-01-20 00:51:33', '2022-01-20 03:19:18'),
(39, '1', 'Student information', 'text', NULL, 'Caste', 'caste', '0', '0', '1', 11, '2022-01-20 00:52:24', '2022-01-20 03:19:18'),
(40, '1', 'Student information', 'text', NULL, 'Mobile Number', 'mobile_number', '1', '0', '1', 12, '2022-01-20 00:53:05', '2022-01-20 03:19:18'),
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
(87, '1', 'Student information', 'select', NULL, 'Department', 'department', '0', '0', '1', 3, '2022-01-20 01:46:27', '2022-01-23 06:17:10'),
(88, '0', 'Basic information', 'text', NULL, 'Staff Id', 'staff_id', '1', '1', '1', NULL, '2022-01-30 05:07:12', '2022-01-30 21:33:07'),
(89, '0', 'Basic information', 'select', NULL, 'Role', 'role', '1', '1', '1', NULL, '2022-01-30 05:08:09', '2022-01-30 21:33:07'),
(90, '0', 'Basic information', 'select', NULL, 'Designation', 'designation', '1', '1', '1', NULL, '2022-01-30 05:08:47', '2022-01-30 21:33:07'),
(91, '0', 'Basic information', 'select', NULL, 'Department', 'department', '1', '1', '1', NULL, '2022-01-30 05:09:23', '2022-01-30 21:33:07'),
(92, '0', 'Basic information', 'text', NULL, 'First Name', 'first_name', '1', '1', '1', NULL, '2022-01-30 05:10:09', '2022-01-30 21:33:07'),
(93, '0', 'Basic information', 'text', NULL, 'Last Name', 'last_name', '1', '1', '1', NULL, '2022-01-30 05:10:33', '2022-01-30 21:33:07'),
(94, '0', 'Basic information', 'text', NULL, 'Father Name', 'father_name', '0', '0', '1', NULL, '2022-01-30 05:11:43', '2022-01-30 21:33:07'),
(95, '0', 'Basic information', 'text', NULL, 'Mother Name', 'mother_name', '0', '0', '1', NULL, '2022-01-30 05:12:03', '2022-01-30 21:33:07'),
(96, '0', 'Basic information', 'email', NULL, 'Email', 'email', '0', '0', '1', NULL, '2022-01-30 05:13:25', '2022-01-30 21:33:08'),
(97, '0', 'Basic information', 'select', 'Select,Male,Female', 'Gender', 'gender', '0', '1', '1', NULL, '2022-01-30 05:14:31', '2022-01-30 21:33:08'),
(98, '0', 'Basic information', 'date', NULL, 'Date of Birth', 'date_of_birth', '0', '1', '1', NULL, '2022-01-30 05:15:29', '2022-01-30 21:33:08'),
(99, '0', 'Basic information', 'date', NULL, 'Date Of Joining', 'date_of_joining', '0', '1', '1', NULL, '2022-01-30 05:16:03', '2022-01-30 21:33:08'),
(100, '0', 'Basic information', 'number', NULL, 'Phone', 'phone', '1', '1', '1', NULL, '2022-01-30 05:16:41', '2022-01-30 21:33:08'),
(101, '0', 'Basic information', 'number', NULL, 'Emergency Contact Number', 'emergency_contact_number', '0', '1', '1', NULL, '2022-01-30 05:17:27', '2022-01-30 21:33:08'),
(102, '0', 'Basic information', 'select', 'Select,Single,Married,Widowed,Separated,Not Specified', 'Marital Status', 'marital_status', '0', '0', '1', NULL, '2022-01-30 05:19:03', '2022-01-30 21:33:08'),
(103, '0', 'Basic information', 'file', NULL, 'Photo', 'photo', '0', '0', '1', NULL, '2022-01-30 05:19:25', '2022-01-30 21:33:08'),
(104, '0', 'Basic information', 'textarea', NULL, 'Current Address', 'current_address', '0', '0', '1', NULL, '2022-01-30 05:20:09', '2022-01-30 21:33:08'),
(105, '0', 'Basic information', 'textarea', NULL, 'Permanent Address', 'permanent_address', '0', '0', '1', NULL, '2022-01-30 05:20:27', '2022-01-30 21:33:08'),
(106, '0', 'Basic information', 'textarea', NULL, 'Qualification', 'qualification', '0', '0', '1', NULL, '2022-01-30 05:20:47', '2022-01-30 21:33:08'),
(107, '0', 'Basic information', 'textarea', NULL, 'Work Experience', 'work_experience', '0', '0', '1', NULL, '2022-01-30 05:21:15', '2022-01-30 21:33:08'),
(108, '0', 'Basic information', 'textarea', NULL, 'Note', 'note', '0', '0', '1', NULL, '2022-01-30 05:21:40', '2022-01-30 21:33:08'),
(109, '0', 'Basic information', 'text', NULL, 'PAN Number', 'pan_number', '0', '0', '1', NULL, '2022-01-30 05:21:57', '2022-01-30 21:33:08'),
(110, '0', 'Payroll', 'text', NULL, 'EPF No', 'epf_no', '0', '0', '1', NULL, '2022-01-30 05:22:33', '2022-01-30 21:33:08'),
(111, '0', 'Payroll', 'text', NULL, 'Basic Salary', 'basic_salary', '0', '1', '1', NULL, '2022-01-30 05:23:14', '2022-01-30 21:33:08'),
(112, '0', 'Payroll', 'select', 'Select,Permanent,Probation', 'Contract Type', 'contract_type', '0', '0', '1', NULL, '2022-01-30 05:23:59', '2022-01-30 21:33:08'),
(113, '0', 'Payroll', 'text', NULL, 'Work Shift', 'work_shift', '0', '0', '1', NULL, '2022-01-30 05:24:23', '2022-01-30 21:33:08'),
(114, '0', 'Payroll', 'text', NULL, 'Location', 'location', '0', '0', '1', NULL, '2022-01-30 05:24:40', '2022-01-30 21:33:08'),
(115, '0', 'Leaves', 'text', NULL, 'Medical Leave', 'medical_leave', '0', '0', '1', NULL, '2022-01-30 05:25:05', '2022-01-30 21:33:08'),
(116, '0', 'Leaves', 'text', NULL, 'Casual Leave', 'casual_leave', '0', '0', '1', NULL, '2022-01-30 05:25:23', '2022-01-30 21:33:08'),
(117, '0', 'Leaves', 'text', NULL, 'Maternity Leave', 'maternity_leave', '0', '0', '1', NULL, '2022-01-30 05:25:42', '2022-01-30 21:33:08'),
(118, '0', 'Bank Account Details', 'text', NULL, 'Account Title', 'account_title', '0', '0', '1', NULL, '2022-01-30 05:26:19', '2022-01-30 21:33:08'),
(119, '0', 'Bank Account Details', 'text', NULL, 'Bank Account Number', 'bank_account_number', '0', '0', '1', NULL, '2022-01-30 05:26:38', '2022-01-30 21:33:08'),
(120, '0', 'Bank Account Details', 'text', NULL, 'Bank Name', 'bank_name', '0', '0', '1', NULL, '2022-01-30 05:26:54', '2022-01-30 21:33:09'),
(121, '0', 'Bank Account Details', 'text', NULL, 'IFSC Code', 'ifsc_code', '0', '0', '1', NULL, '2022-01-30 05:27:14', '2022-01-30 21:33:09'),
(122, '0', 'Bank Account Details', 'text', NULL, 'Bank Branch Name', 'bank_branch_name', '0', '0', '1', NULL, '2022-01-30 05:27:34', '2022-01-30 21:33:09'),
(123, '0', 'Social Media Link', 'text', NULL, 'Facebook URL', 'facebook_url', '0', '0', '1', NULL, '2022-01-30 05:27:54', '2022-01-30 21:33:09'),
(124, '0', 'Social Media Link', 'text', NULL, 'Twitter URL', 'twitter_url', '0', '0', '1', NULL, '2022-01-30 05:28:11', '2022-01-30 21:33:09'),
(125, '0', 'Social Media Link', 'text', NULL, 'Linkedin URL', 'linkedin_url', '0', '0', '1', NULL, '2022-01-30 05:28:27', '2022-01-30 21:33:09'),
(126, '0', 'Social Media Link', 'text', NULL, 'Instagram URL', 'instagram_url', '0', '0', '1', NULL, '2022-01-30 05:29:09', '2022-01-30 21:33:09'),
(127, '0', 'Upload Documents', 'file', NULL, 'Resume', 'resume', '0', '0', '1', NULL, '2022-01-30 05:29:34', '2022-01-30 21:33:09'),
(128, '0', 'Upload Documents', 'file', NULL, 'Joining Letter', 'joining_letter', '0', '0', '1', NULL, '2022-01-30 05:30:06', '2022-01-30 21:33:09'),
(129, '0', 'Upload Documents', 'file', NULL, 'Other Documents', 'other_documents', '0', '0', '1', NULL, '2022-01-30 05:30:31', '2022-01-30 21:33:09');

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE `deductions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `money` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deductions`
--

INSERT INTO `deductions` (`id`, `staff_id`, `type`, `money`, `created_at`, `updated_at`) VALUES
(13, '2', 'd_type', '20', '2022-02-21 04:07:28', '2022-02-21 04:07:28'),
(14, '2', 'd_type', '12', '2022-02-21 04:07:28', '2022-02-21 04:07:28'),
(15, '3', NULL, NULL, '2022-02-21 04:46:31', '2022-02-21 04:46:31'),
(16, '3', 'd_type', '34', '2022-02-22 01:24:10', '2022-02-22 01:24:10');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
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
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Faculty', 1, '2022-01-30 01:31:18', '2022-01-30 01:31:18'),
(2, 'Accountant', 1, '2022-01-30 01:31:36', '2022-01-30 01:31:36');

-- --------------------------------------------------------

--
-- Table structure for table `design_admins`
--

CREATE TABLE `design_admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `design_admits`
--

CREATE TABLE `design_admits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `template` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `exam_name` varchar(255) DEFAULT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `exam_center` varchar(255) DEFAULT NULL,
  `footer_text` varchar(255) DEFAULT NULL,
  `left_logo` text DEFAULT NULL,
  `right_logo` text DEFAULT NULL,
  `sign` text DEFAULT NULL,
  `backfround_image` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `admission_no` varchar(255) DEFAULT NULL,
  `roll_no` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `design_admits`
--

INSERT INTO `design_admits` (`id`, `template`, `heading`, `title`, `exam_name`, `school_name`, `exam_center`, `footer_text`, `left_logo`, `right_logo`, `sign`, `backfround_image`, `name`, `father_name`, `mother_name`, `date_of_birth`, `admission_no`, `roll_no`, `address`, `gender`, `photo`, `class`, `section`, `created_at`, `updated_at`) VALUES
(5, 'admin card', 'Admit Card', NULL, '3', NULL, NULL, 'good', NULL, NULL, 'public/uploads/download.png', '#1263a1', '1', '1', '1', '1', '1', NULL, NULL, '1', NULL, '1', '1', '2022-03-12 03:25:35', '2022-03-12 05:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `design_mark_sheets`
--

CREATE TABLE `design_mark_sheets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `template` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `exam_name` varchar(255) DEFAULT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `exam_center` varchar(255) DEFAULT NULL,
  `body_text` text DEFAULT NULL,
  `footer_text` varchar(255) DEFAULT NULL,
  `printing_date` varchar(255) DEFAULT NULL,
  `left_logo` text DEFAULT NULL,
  `right_logo` text DEFAULT NULL,
  `left_sign` text DEFAULT NULL,
  `right_sign` text DEFAULT NULL,
  `middle_sign` text DEFAULT NULL,
  `backfround_image` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `admission_no` varchar(255) DEFAULT NULL,
  `roll_no` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `exam_session` varchar(255) DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `division` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `design_mark_sheets`
--

INSERT INTO `design_mark_sheets` (`id`, `template`, `heading`, `title`, `exam_name`, `school_name`, `exam_center`, `body_text`, `footer_text`, `printing_date`, `left_logo`, `right_logo`, `left_sign`, `right_sign`, `middle_sign`, `backfround_image`, `name`, `father_name`, `mother_name`, `date_of_birth`, `admission_no`, `roll_no`, `address`, `gender`, `photo`, `class`, `section`, `exam_session`, `remark`, `division`, `created_at`, `updated_at`) VALUES
(1, 'Mark Sheet', 'Mark Sheet', NULL, '3', NULL, NULL, NULL, 'Footer Text', '2022-03-14', NULL, NULL, 'public/uploads/download.png', 'public/uploads/download.png', 'public/uploads/download.png', '#100ea0', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '1', '1', '1', NULL, NULL, '2022-03-13 22:43:36', '2022-03-13 23:07:42');

-- --------------------------------------------------------

--
-- Table structure for table `disable_reasons`
--

CREATE TABLE `disable_reasons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
  `student_id` varchar(255) NOT NULL,
  `document_title` varchar(255) NOT NULL,
  `documents` varchar(255) NOT NULL,
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
-- Table structure for table `earnings`
--

CREATE TABLE `earnings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `money` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `earnings`
--

INSERT INTO `earnings` (`id`, `staff_id`, `type`, `money`, `created_at`, `updated_at`) VALUES
(13, '2', 'etype_one', '20', '2022-02-21 04:07:27', '2022-02-21 04:07:27'),
(14, '2', 'etype_two', '30', '2022-02-21 04:07:27', '2022-02-21 04:07:27'),
(15, '3', NULL, NULL, '2022-02-21 04:46:30', '2022-02-21 04:46:30'),
(16, '3', 'etype_one', '1055', '2022-02-22 01:24:10', '2022-02-22 01:24:10');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `footer` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `des` varchar(100) NOT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `exam_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `des`, `start_date`, `end_date`, `year`, `exam_name`, `created_at`, `updated_at`) VALUES
(1, 'good', '2022-01-01', '2022-01-10', '2022-23', '1st Term Exam', '2022-01-06 08:00:32', '2022-03-06 00:05:36'),
(3, 'good', '2022-03-08', '2022-03-11', '2022-23', 'Half Yearly Exam', '2022-03-06 00:05:11', '2022-03-06 00:05:11');

-- --------------------------------------------------------

--
-- Table structure for table `exam_routines`
--

CREATE TABLE `exam_routines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `room` varchar(255) DEFAULT NULL,
  `date` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `department_id` varchar(255) NOT NULL,
  `sreni_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_schedules`
--

CREATE TABLE `exam_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` varchar(200) DEFAULT NULL,
  `department_id` varchar(200) DEFAULT NULL,
  `exam_id` varchar(255) DEFAULT NULL,
  `subject_id` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `main_time` varchar(100) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `room_no` varchar(255) DEFAULT NULL,
  `mark_max` varchar(255) DEFAULT NULL,
  `mark_min` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_schedules`
--

INSERT INTO `exam_schedules` (`id`, `class_id`, `department_id`, `exam_id`, `subject_id`, `date`, `time`, `main_time`, `duration`, `room_no`, `mark_max`, `mark_min`, `created_at`, `updated_at`) VALUES
(7, '2', '0', '3', '1', '2022-03-14', '11:20:00 am', '11:20', '2', '102', '100', '33', '2022-03-13 23:20:12', '2022-03-13 23:20:12'),
(8, '2', '0', '3', '2', '2022-03-14', '11:20:00 am', '11:20', '2', '102', '100', '33', '2022-03-13 23:20:12', '2022-03-13 23:20:12');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expense_head` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `invoice_number` varchar(255) DEFAULT NULL,
  `date` varchar(255) NOT NULL,
  `month` varchar(100) DEFAULT NULL,
  `year` varchar(100) DEFAULT NULL,
  `amount` varchar(255) NOT NULL,
  `doc` text DEFAULT NULL,
  `des` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `expense_head`, `name`, `invoice_number`, `date`, `month`, `year`, `amount`, `doc`, `des`, `created_at`, `updated_at`) VALUES
(1, 'Electricity Bill', 'Soap', '3434', '2022-01-20', 'January', '2022', '343', '1643105066 (1).pdf', '34234', '2022-01-29 01:35:03', '2022-01-29 01:35:03'),
(2, 'Stationery Purchase', 'bb101', '444', '2022-01-29', 'January', '2022', '444', '1643105066 (1).pdf', '4543543', '2022-01-29 01:35:44', '2022-01-29 01:35:44'),
(3, 'Electricity Bill', 'kamruzzaman', '43543', '2022-01-29', 'January', '2022', '45', '1643106441.pdf', '435345', '2022-01-29 01:36:00', '2022-01-29 01:36:00');

-- --------------------------------------------------------

--
-- Table structure for table `expense_heads`
--

CREATE TABLE `expense_heads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expense_head` varchar(255) NOT NULL,
  `des` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expense_heads`
--

INSERT INTO `expense_heads` (`id`, `expense_head`, `des`, `created_at`, `updated_at`) VALUES
(1, 'Stationery Purchase', 'r', '2022-01-29 00:45:50', '2022-01-29 00:45:50'),
(4, 'Electricity Bill', 's', '2022-01-29 00:48:59', '2022-01-29 00:48:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fee_amounts`
--

CREATE TABLE `fee_amounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fee_group` varchar(255) DEFAULT NULL,
  `fee_type` varchar(255) DEFAULT NULL,
  `due_date` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `fine_type` varchar(255) DEFAULT NULL,
  `percen` varchar(255) DEFAULT NULL,
  `fine_amount` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_amounts`
--

INSERT INTO `fee_amounts` (`id`, `fee_group`, `fee_type`, `due_date`, `amount`, `fine_type`, `percen`, `fine_amount`, `created_at`, `updated_at`) VALUES
(5, '3', '1st Installment Fees', '2022-03-10', '500', 'Fix Amount', NULL, '4', '2022-03-02 00:20:00', '2022-03-02 00:20:00'),
(7, '3', 'Admission Fees', '2022-03-05', '1000', 'None', NULL, NULL, '2022-03-02 00:26:47', '2022-03-02 00:26:47');

-- --------------------------------------------------------

--
-- Table structure for table `fee_discounts`
--

CREATE TABLE `fee_discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `discount_code` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_discounts`
--

INSERT INTO `fee_discounts` (`id`, `name`, `discount_code`, `amount`, `des`, `created_at`, `updated_at`) VALUES
(2, 'Sibling Discount', 'sibling-disc', '500', 'Good', '2022-03-01 21:51:27', '2022-03-01 21:51:27'),
(3, 'Handicapped Discount', 'handicap-disc', '1000', 'good', '2022-03-01 21:52:21', '2022-03-01 21:52:21');

-- --------------------------------------------------------

--
-- Table structure for table `fee_groups`
--

CREATE TABLE `fee_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_groups`
--

INSERT INTO `fee_groups` (`id`, `name`, `des`, `created_at`, `updated_at`) VALUES
(2, 'Class 1 General', 'good', '2022-03-01 21:50:21', '2022-03-01 21:50:21'),
(3, 'Class 1- I Installment', 'good', '2022-03-01 21:50:43', '2022-03-01 21:50:43');

-- --------------------------------------------------------

--
-- Table structure for table `fee_types`
--

CREATE TABLE `fee_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `fee_code` varchar(255) DEFAULT NULL,
  `des` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_types`
--

INSERT INTO `fee_types` (`id`, `name`, `fee_code`, `des`, `created_at`, `updated_at`) VALUES
(2, 'Admission Fees', 'admission-fees', 'good', '2022-03-01 21:49:23', '2022-03-01 21:49:23'),
(3, '1st Installment Fees', '1-installment-fees', 'good', '2022-03-01 21:49:51', '2022-03-01 21:49:51');

-- --------------------------------------------------------

--
-- Table structure for table `followup_details`
--

CREATE TABLE `followup_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en_id` varchar(200) DEFAULT NULL,
  `creator_name` varchar(200) DEFAULT NULL,
  `follow_up_date` varchar(255) NOT NULL,
  `next_follow_up_date` varchar(255) NOT NULL,
  `response` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
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
-- Table structure for table `grade_marks`
--

CREATE TABLE `grade_marks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grader_name` varchar(255) DEFAULT NULL,
  `grader_point` varchar(255) DEFAULT NULL,
  `lower_mark` varchar(255) DEFAULT NULL,
  `upper_mark` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grade_marks`
--

INSERT INTO `grade_marks` (`id`, `grader_name`, `grader_point`, `lower_mark`, `upper_mark`, `created_at`, `updated_at`) VALUES
(1, 'F', '0.00', '0', '32', '2022-03-05 22:43:58', '2022-03-05 22:43:58'),
(2, 'D', '1.00', '33', '39', '2022-03-05 22:45:06', '2022-03-05 22:45:06'),
(3, 'C', '2.00', '40', '49', '2022-03-05 22:45:32', '2022-03-05 22:45:32'),
(4, 'B', '3.00', '50', '59', '2022-03-05 22:46:09', '2022-03-05 22:46:09'),
(5, 'A-', '3.50', '60', '69', '2022-03-05 22:46:36', '2022-03-05 22:46:36'),
(6, 'A', '4.00', '70', '79', '2022-03-05 22:47:13', '2022-03-05 22:48:16'),
(7, 'A+', '5.00', '80', '100', '2022-03-05 22:49:10', '2022-03-05 22:49:10');

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `holiday_data`
--

CREATE TABLE `holiday_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` varchar(255) NOT NULL,
  `leave_id` varchar(100) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `totalday` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `holiday_data`
--

INSERT INTO `holiday_data` (`id`, `staff_id`, `leave_id`, `month`, `totalday`, `created_at`, `updated_at`) VALUES
(13, '20', '9', '2', '2', '2022-02-05 05:48:46', '2022-02-05 05:48:46'),
(14, '20', '9', '4', '3', '2022-02-05 05:48:47', '2022-02-05 05:48:47'),
(15, '20', '9', '3', '31', '2022-02-05 05:48:47', '2022-02-05 05:48:47');

-- --------------------------------------------------------

--
-- Table structure for table `homework`
--

CREATE TABLE `homework` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(255) NOT NULL,
  `section` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `homework_date` varchar(255) DEFAULT NULL,
  `submission_date` varchar(255) DEFAULT NULL,
  `doc` text DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `evaluation_date` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homework`
--

INSERT INTO `homework` (`id`, `class`, `section`, `subject`, `department`, `homework_date`, `submission_date`, `doc`, `des`, `evaluation_date`, `created_at`, `created_by`, `status`, `updated_at`) VALUES
(5, '4', NULL, '1', NULL, '2024-02-28', '2024-03-09', 'uploads/চালান.pdf', 'test purpose', NULL, '2024-02-27 23:35:27', 'superadmin', 'HW', '2024-02-27 23:48:24'),
(6, '3', NULL, '4', NULL, '2024-02-28', '2024-03-09', 'uploads/dummy.pdf', 'good', NULL, '2024-02-27 23:36:00', 'superadmin', 'CW', '2024-02-27 23:48:14');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_infos`
--

CREATE TABLE `hostel_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `intake` varchar(255) DEFAULT NULL,
  `des` text NOT NULL,
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
  `number_or_name` varchar(255) NOT NULL,
  `hostel` varchar(255) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `number_of_bed` varchar(255) NOT NULL,
  `cost_per_bed` varchar(255) NOT NULL,
  `des` text NOT NULL,
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
  `room_type` varchar(255) NOT NULL,
  `des` text NOT NULL,
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
-- Table structure for table `hr_departments`
--

CREATE TABLE `hr_departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hr_departments`
--

INSERT INTO `hr_departments` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Academic', 1, '2022-01-30 01:32:42', '2022-01-30 01:32:42'),
(2, 'Library', 1, '2022-01-30 01:32:56', '2022-01-30 01:32:56'),
(3, 'Finance', 1, '2022-01-30 01:33:11', '2022-01-30 01:33:11');

-- --------------------------------------------------------

--
-- Table structure for table `incomes`
--

CREATE TABLE `incomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `income_head` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `invoice_number` varchar(255) DEFAULT NULL,
  `date` varchar(255) NOT NULL,
  `month` varchar(100) DEFAULT NULL,
  `year` varchar(100) DEFAULT NULL,
  `amount` varchar(255) NOT NULL,
  `doc` text DEFAULT NULL,
  `des` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `incomes`
--

INSERT INTO `incomes` (`id`, `income_head`, `name`, `invoice_number`, `date`, `month`, `year`, `amount`, `doc`, `des`, `created_at`, `updated_at`) VALUES
(1, 'Uniform Sale', 'Kajolf', '444', '2022-01-29', 'January', '2022', '212', NULL, '876878', '2022-01-29 04:33:10', '2022-01-29 04:33:10'),
(2, 'Donation', 'Kajolf', '7878', '2022-01-13', 'January', '2022', '787', NULL, '878', '2022-01-29 04:33:29', '2022-01-29 04:33:29');

-- --------------------------------------------------------

--
-- Table structure for table `income_heads`
--

CREATE TABLE `income_heads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `income_head` varchar(255) NOT NULL,
  `des` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `income_heads`
--

INSERT INTO `income_heads` (`id`, `income_head`, `des`, `created_at`, `updated_at`) VALUES
(1, 'Donation', 'Donation', '2022-01-29 04:32:27', '2022-01-29 04:32:27'),
(2, 'Uniform Sale', 'Uniform Sale', '2022-01-29 04:32:47', '2022-01-29 04:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `institute_information`
--

CREATE TABLE `institute_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `icon` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `session_start_month` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institute_information`
--

INSERT INTO `institute_information` (`id`, `logo`, `icon`, `name`, `code`, `address`, `phone`, `email`, `session`, `session_start_month`, `created_at`, `updated_at`) VALUES
(1, 'public/upload/1707763128.png', 'public/upload/1707763128.png', 'Resnova School', 'Resnova-123', '110/A Road 2, Niketan, Dhaka, Bangladesh', '01738-300022', 'info@resnova.dev', '2023-24', 'January', '2022-01-07 00:53:37', '2024-02-12 23:41:10');

-- --------------------------------------------------------

--
-- Table structure for table `issue_books`
--

CREATE TABLE `issue_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` varchar(255) DEFAULT NULL,
  `issue_date` varchar(255) DEFAULT NULL,
  `return_date` varchar(255) DEFAULT NULL,
  `mainreturn` varchar(100) DEFAULT NULL,
  `member_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `issue_books`
--

INSERT INTO `issue_books` (`id`, `book_id`, `issue_date`, `return_date`, `mainreturn`, `member_id`, `created_at`, `updated_at`) VALUES
(1, '3', '2022-02-27', '2022-02-27', '2022-02-27', '9', '2022-02-27 01:55:04', '2022-02-27 02:42:20');

-- --------------------------------------------------------

--
-- Table structure for table `issue_items`
--

CREATE TABLE `issue_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `issue_to` varchar(255) DEFAULT NULL,
  `issue_by` varchar(255) DEFAULT NULL,
  `issue_date` varchar(255) DEFAULT NULL,
  `return_date` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `item_category` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `available_quantity` varchar(100) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `category`, `unit`, `available_quantity`, `des`, `created_at`, `updated_at`) VALUES
(2, 'Bat', '1', '3', '1027', 'good', '2022-02-23 01:05:25', '2022-02-23 05:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `itemstores`
--

CREATE TABLE `itemstores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `itemstores`
--

INSERT INTO `itemstores` (`id`, `name`, `code`, `des`, `created_at`, `updated_at`) VALUES
(3, 'Science Store', 'SCP02', 'good', '2022-02-23 00:06:12', '2022-02-23 00:06:12'),
(4, 'Sports Store', 'SS2', 'good', '2022-02-23 00:34:13', '2022-02-23 00:34:13');

-- --------------------------------------------------------

--
-- Table structure for table `item_categories`
--

CREATE TABLE `item_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_categories`
--

INSERT INTO `item_categories` (`id`, `name`, `des`, `created_at`, `updated_at`) VALUES
(1, 'Sports', 'good', '2022-02-22 23:52:41', '2022-02-22 23:52:41'),
(2, 'Furniture', 'good', '2022-02-22 23:52:58', '2022-02-22 23:52:58'),
(3, 'Books Stationery', 'good', '2022-02-22 23:53:19', '2022-02-22 23:53:19');

-- --------------------------------------------------------

--
-- Table structure for table `item_stocks`
--

CREATE TABLE `item_stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_category` varchar(255) NOT NULL,
  `item` varchar(255) DEFAULT NULL,
  `supplier` varchar(255) DEFAULT NULL,
  `store` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `purchase_price` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `doc` varchar(255) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_stocks`
--

INSERT INTO `item_stocks` (`id`, `item_category`, `item`, `supplier`, `store`, `quantity`, `purchase_price`, `date`, `doc`, `des`, `created_at`, `updated_at`) VALUES
(1, '1', '2', '2', '4', '300', '222', '2022-02-26', NULL, 'fg', '2022-02-23 02:13:30', '2022-02-23 02:13:30');

-- --------------------------------------------------------

--
-- Table structure for table `item_suppliers`
--

CREATE TABLE `item_suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact_person_name` varchar(255) DEFAULT NULL,
  `contact_person_phone` varchar(255) DEFAULT NULL,
  `contact_person_email` varchar(255) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_suppliers`
--

INSERT INTO `item_suppliers` (`id`, `name`, `phone`, `email`, `address`, `contact_person_name`, `contact_person_phone`, `contact_person_email`, `des`, `created_at`, `updated_at`) VALUES
(2, 'hirajywy@mailinator.com', 'zysybate@mailinator.com', 'mozifekicu@mailinator.com', 'Et quae quo tempor e', 'jeqyq@mailinator.com', 'divofidy@mailinator.com', 'sahi@mailinator.com', 'Eos sint et eos con', '2022-02-23 00:32:55', '2022-02-23 00:32:55');

-- --------------------------------------------------------

--
-- Table structure for table `leave_types`
--

CREATE TABLE `leave_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_types`
--

INSERT INTO `leave_types` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Medical Leave', 1, '2022-01-30 01:34:46', '2022-01-30 01:34:46'),
(2, 'Casual Leave', 1, '2022-01-30 01:35:04', '2022-01-30 01:35:04'),
(3, 'Maternity Leave', 1, '2022-01-30 01:35:20', '2022-01-30 01:35:20');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sreni_id` varchar(255) NOT NULL,
  `section_id` varchar(255) NOT NULL,
  `department_id` varchar(255) NOT NULL,
  `subject_id` varchar(255) DEFAULT NULL,
  `lesson` varchar(255) DEFAULT NULL,
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
  `lesson_table_id` varchar(255) NOT NULL,
  `lesson_name` varchar(255) NOT NULL,
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
  `subject_id` varchar(255) NOT NULL,
  `lesson_id` varchar(255) NOT NULL,
  `topic_id` varchar(255) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `doc` varchar(255) DEFAULT NULL,
  `teaching_method` varchar(255) NOT NULL,
  `general_objectives` varchar(255) NOT NULL,
  `previous_knnowledge` varchar(255) NOT NULL,
  `comprehensive_question` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `library_infos`
--

CREATE TABLE `library_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_type` text DEFAULT NULL,
  `card_no` varchar(255) DEFAULT NULL,
  `member_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `library_infos`
--

INSERT INTO `library_infos` (`id`, `member_type`, `card_no`, `member_id`, `created_at`, `updated_at`) VALUES
(1, 'staff', '097', '3', '2022-02-26 05:11:15', '2022-02-26 05:11:15'),
(2, 'student', '098', '9', '2022-02-26 05:11:51', '2022-02-26 05:11:51');

-- --------------------------------------------------------

--
-- Table structure for table `main_students`
--

CREATE TABLE `main_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `library_id` varchar(100) DEFAULT NULL,
  `library_card_status` varchar(100) DEFAULT '0',
  `admission_no` varchar(255) DEFAULT NULL,
  `roll_number` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `caste` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `admission_date` varchar(255) DEFAULT NULL,
  `student_photo` text DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `student_house` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `as_on_date` varchar(255) DEFAULT NULL,
  `medical_history` text DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `father_phone` varchar(255) DEFAULT NULL,
  `father_occupation` varchar(255) DEFAULT NULL,
  `father_yearly_incme` varchar(255) DEFAULT NULL,
  `father_photo` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `mother_phone` varchar(255) DEFAULT NULL,
  `mother_occupation` varchar(255) DEFAULT NULL,
  `mother_yearly_income` varchar(255) DEFAULT NULL,
  `mother_photo` varchar(255) DEFAULT NULL,
  `if_guardian_is` varchar(255) DEFAULT NULL,
  `guardian_name` varchar(255) DEFAULT NULL,
  `guardian_relation` varchar(255) DEFAULT NULL,
  `guardian_email` varchar(255) DEFAULT NULL,
  `guardian_photo` varchar(255) DEFAULT NULL,
  `guardian_phone` varchar(255) DEFAULT NULL,
  `guardian_occupation` varchar(255) DEFAULT NULL,
  `guardian_address` text DEFAULT NULL,
  `if_guardian_address_is_current_address` varchar(255) DEFAULT NULL,
  `if_permanent_address_is_current_address` varchar(255) DEFAULT NULL,
  `current_address` text DEFAULT NULL,
  `permanent_address` text DEFAULT NULL,
  `route_list` varchar(255) DEFAULT NULL,
  `hostel` varchar(255) DEFAULT NULL,
  `room_no` varchar(255) DEFAULT NULL,
  `bank_account_number` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `ifsc_code` varchar(255) DEFAULT NULL,
  `national_identification_number` varchar(255) DEFAULT NULL,
  `birth_certificate_number` varchar(255) DEFAULT NULL,
  `rte` varchar(255) DEFAULT NULL,
  `previous_school_details` text DEFAULT NULL,
  `note` text DEFAULT NULL,
  `disable_reason` varchar(200) DEFAULT NULL,
  `session_year` varchar(100) DEFAULT NULL,
  `alumini_status` varchar(100) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_students`
--

INSERT INTO `main_students` (`id`, `library_id`, `library_card_status`, `admission_no`, `roll_number`, `class`, `section`, `department`, `first_name`, `last_name`, `gender`, `date_of_birth`, `category`, `religion`, `caste`, `mobile_number`, `email`, `admission_date`, `student_photo`, `blood_group`, `student_house`, `height`, `weight`, `as_on_date`, `medical_history`, `father_name`, `father_phone`, `father_occupation`, `father_yearly_incme`, `father_photo`, `mother_name`, `mother_phone`, `mother_occupation`, `mother_yearly_income`, `mother_photo`, `if_guardian_is`, `guardian_name`, `guardian_relation`, `guardian_email`, `guardian_photo`, `guardian_phone`, `guardian_occupation`, `guardian_address`, `if_guardian_address_is_current_address`, `if_permanent_address_is_current_address`, `current_address`, `permanent_address`, `route_list`, `hostel`, `room_no`, `bank_account_number`, `bank_name`, `ifsc_code`, `national_identification_number`, `birth_certificate_number`, `rte`, `previous_school_details`, `note`, `disable_reason`, `session_year`, `alumini_status`, `created_at`, `updated_at`) VALUES
(12, NULL, '0', '20240226075857', NULL, 'Class One', 'A', '0', 'Md . Karim Ali', 'Khan', 'Male', '2024-02-26', 'General', NULL, NULL, '01646735100', NULL, NULL, 'public/upload/about_14.png', 'B+', 'BKBSC', NULL, NULL, NULL, NULL, 'Rezaul Alam', '01646735100', NULL, NULL, NULL, 'Kohinur Bgum', '01646735100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-24', '0', '2024-02-26 08:00:50', '2024-02-26 08:00:50'),
(16, NULL, '0', '20240226094233', NULL, 'Class One', 'A', '0', 'Raihanul', 'Islam', 'Male', '2024-02-26', 'General', NULL, NULL, '3598895107', NULL, NULL, 'public/upload/about_3.png', 'B+', 'ROUTES', NULL, NULL, NULL, NULL, 'Rezaul Alam', '5937175107', NULL, NULL, NULL, 'Kohinur Bgum', '0856708112', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-24', '0', '2024-02-26 09:43:52', '2024-02-26 09:43:52'),
(17, NULL, '0', '20240226094519', NULL, 'Class Two', 'A', '0', 'Mizan', 'Islam', 'Male', '2024-02-26', 'General', NULL, NULL, '9683619873', NULL, NULL, 'public/upload/about_2.png', 'B+', 'TA', NULL, NULL, NULL, NULL, 'Rezaul Alam', '1804934342', NULL, NULL, NULL, 'Kohinur Bgum', '0312240213', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-24', '0', '2024-02-26 09:46:07', '2024-02-26 09:46:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(100, '2022_01_27_085831_create_followup_details_table', 35),
(101, '2022_01_29_054936_create_expense_heads_table', 36),
(102, '2022_01_29_055144_create_expenses_table', 36),
(103, '2022_01_29_055730_create_income_heads_table', 37),
(104, '2022_01_29_055754_create_incomes_table', 37),
(105, '2022_01_30_055509_create_hr_departments_table', 38),
(106, '2022_01_30_055920_create_designations_table', 38),
(107, '2022_01_30_060201_create_teachers_ratings_table', 38),
(108, '2022_01_30_060254_create_leave_types_table', 38),
(109, '2022_01_30_060406_create_apply_leaves_table', 38),
(110, '2022_01_31_033555_create_staff_table', 39),
(111, '2022_01_31_092824_create_staff_attandences_table', 40),
(112, '2022_02_03_052623_create_payrolls_table', 41),
(113, '2022_02_03_055410_create_earnings_table', 41),
(114, '2022_02_03_055846_create_deductions_table', 41),
(115, '2022_02_05_084046_create_holiday_data_table', 42),
(116, '2022_02_21_092052_create_salaries_table', 43),
(117, '2022_02_22_052258_create_transections_table', 43),
(118, '2022_02_22_074020_create_item_suppliers_table', 44),
(119, '2022_02_22_074207_create_items_table', 44),
(120, '2022_02_22_074245_create_item_categories_table', 44),
(121, '2022_02_22_074357_create_itemstores_table', 44),
(122, '2022_02_22_074456_create_item_stocks_table', 44),
(123, '2022_02_22_074617_create_issue_items_table', 44),
(124, '2022_02_24_041555_create_books_table', 45),
(125, '2022_02_24_044707_create_issue_books_table', 46),
(126, '2022_02_24_044931_create_library_infos_table', 46),
(127, '2022_02_27_084935_create_session_years_table', 47),
(128, '2022_02_28_030947_create_homework_table', 48),
(129, '2022_02_28_033005_create_upload_contents_table', 48),
(130, '2022_02_28_033152_create_certificates_table', 48),
(131, '2022_02_28_033230_create_student_ids_table', 48),
(132, '2022_02_28_033308_create_staff_ids_table', 48),
(133, '2022_02_28_033547_create_alumini_events_table', 48),
(134, '2022_02_28_034401_create_reminder_types_table', 48),
(135, '2022_02_28_034604_create_fee_discounts_table', 48),
(136, '2022_02_28_034706_create_fee_types_table', 48),
(137, '2022_02_28_034805_create_fee_amounts_table', 48),
(138, '2022_02_28_034904_create_print_headers_table', 48),
(139, '2022_02_28_035915_create_assaign_home_work_to_sections_table', 48),
(140, '2022_02_28_042639_create_fee_groups_table', 48),
(141, '2022_02_28_043345_create_collect_fees_table', 48),
(142, '2022_03_02_070039_create_assign_student_to_fee_groups_table', 49),
(143, '2022_03_06_035405_create_grade_marks_table', 50),
(144, '2022_03_06_060834_create_assaign_class_to_exams_table', 51),
(145, '2022_03_06_070250_create_exam_schedules_table', 52),
(146, '2022_03_06_102412_create_teacher_remarks_table', 53),
(147, '2022_03_10_060530_create_design_admins_table', 54),
(148, '2022_03_10_062818_create_design_admits_table', 54),
(149, '2022_03_10_064439_create_design_mark_sheets_table', 54),
(150, '2022_03_10_065955_create_student_certificates_table', 54),
(151, '2022_03_10_070705_create_student_id_cards_table', 54),
(152, '2022_03_10_070800_create_staff_id_cards_table', 54);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
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
(8, 'App\\Models\\Admin', 16),
(10, 'App\\Models\\Admin', 24),
(11, 'App\\Models\\Admin', 23);

-- --------------------------------------------------------

--
-- Table structure for table `noticeboards`
--

CREATE TABLE `noticeboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `footer` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `relation` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payrolls`
--

CREATE TABLE `payrolls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` varchar(255) NOT NULL,
  `year` varchar(100) DEFAULT NULL,
  `month` varchar(100) DEFAULT NULL,
  `digit_month` varchar(100) DEFAULT NULL,
  `basic_salary` varchar(255) DEFAULT NULL,
  `total_earning` varchar(255) DEFAULT NULL,
  `total_deduction` varchar(255) DEFAULT NULL,
  `gross_salary` varchar(255) DEFAULT NULL,
  `tax` varchar(255) DEFAULT NULL,
  `netsalary` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'Genarated',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payrolls`
--

INSERT INTO `payrolls` (`id`, `staff_id`, `year`, `month`, `digit_month`, `basic_salary`, `total_earning`, `total_deduction`, `gross_salary`, `tax`, `netsalary`, `status`, `created_at`, `updated_at`) VALUES
(2, '2', '2022', 'February', '02', '20000', '50', '32', '30', '5', '20043', 'Paid', '2022-02-21 04:07:28', '2022-02-21 04:07:28'),
(4, '3', '2022', 'February', '02', '24000', '1055', '34', '30', '500', '24551', 'Genarated', '2022-02-22 01:24:10', '2022-02-22 01:24:10');

-- --------------------------------------------------------

--
-- Table structure for table `pdfdesignones`
--

CREATE TABLE `pdfdesignones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `nid/birth` varchar(255) NOT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `husband_name` varchar(255) DEFAULT NULL,
  `wife_name` varchar(255) DEFAULT NULL,
  `daughter_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `present_address` varchar(255) DEFAULT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `resident` varchar(255) NOT NULL,
  `certificate_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pdfdesigns`
--

CREATE TABLE `pdfdesigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qr_code` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `certificate_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `counsilor` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pdfdesigntwos`
--

CREATE TABLE `pdfdesigntwos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `certificate_id` varchar(255) NOT NULL,
  `allformate` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
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
(104, 'subject_create', 'admin', 'Subject', NULL, NULL),
(105, 'subject_store', 'admin', 'Subject', NULL, NULL),
(106, 'subject_update', 'admin', 'Subject', NULL, NULL),
(107, 'subject_delete', 'admin', 'Subject', NULL, NULL),
(108, 'student_create', 'admin', 'Student', NULL, NULL),
(109, 'student_store', 'admin', 'Student', NULL, NULL),
(110, 'student_update', 'admin', 'Student', NULL, NULL),
(111, 'student_delete', 'admin', 'Student', NULL, NULL),
(116, 'student_view', 'admin', 'Student', NULL, NULL),
(121, 'ins_create', 'admin', 'Institute', NULL, NULL),
(122, 'ins_view', 'admin', 'Institute', NULL, NULL),
(123, 'ins_update', 'admin', 'Institute', NULL, NULL),
(124, 'ins_delete', 'admin', 'Institute', NULL, NULL),
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
(253, 'student_disable.update', 'admin', 'student_disable', NULL, NULL),
(352, 'session_add', 'admin', 'session', NULL, NULL),
(353, 'session_view', 'admin', 'session', NULL, NULL),
(354, 'session_delete', 'admin', 'session', NULL, NULL),
(355, 'session_update', 'admin', 'session', NULL, NULL),
(356, 'home_work_add', 'admin', 'home_work', NULL, NULL),
(357, 'home_work_view', 'admin', 'home_work', NULL, NULL),
(358, 'home_work_delete', 'admin', 'home_work', NULL, NULL),
(359, 'home_work_update', 'admin', 'home_work', NULL, NULL),
(360, 'upload_content_add', 'admin', 'upload_content', NULL, NULL),
(361, 'upload_content_view', 'admin', 'upload_content', NULL, NULL),
(362, 'upload_content_delete', 'admin', 'upload_content', NULL, NULL),
(363, 'upload_content_update', 'admin', 'upload_content', NULL, NULL),
(384, 'fee_discount_add', 'admin', 'fee_discount', NULL, NULL),
(385, 'fee_discount_view', 'admin', 'fee_discount', NULL, NULL),
(386, 'fee_discount_delete', 'admin', 'fee_discount', NULL, NULL),
(387, 'fee_discount_update', 'admin', 'fee_discount', NULL, NULL),
(388, 'fee_type_add', 'admin', 'fee_type', NULL, NULL),
(389, 'fee_type_view', 'admin', 'fee_type', NULL, NULL),
(390, 'fee_type_delete', 'admin', 'fee_type', NULL, NULL),
(391, 'fee_type_update', 'admin', 'fee_type', NULL, NULL),
(392, 'fee_amount_add', 'admin', 'fee_amount', NULL, NULL),
(393, 'fee_amount_view', 'admin', 'fee_amount', NULL, NULL),
(394, 'fee_amount_delete', 'admin', 'fee_amount', NULL, NULL),
(395, 'fee_amount_update', 'admin', 'fee_amount', NULL, NULL),
(400, 'fee_group_add', 'admin', 'fee_group', NULL, NULL),
(401, 'fee_group_view', 'admin', 'fee_group', NULL, NULL),
(402, 'fee_group_delete', 'admin', 'fee_group', NULL, NULL),
(403, 'fee_group_update', 'admin', 'fee_group', NULL, NULL),
(404, 'collect_fee_add', 'admin', 'collect_fee', NULL, NULL),
(405, 'collect_fee_view', 'admin', 'collect_fee', NULL, NULL),
(406, 'collect_fee_delete', 'admin', 'collect_fee', NULL, NULL),
(407, 'collect_fee_update', 'admin', 'collect_fee', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `phone_call_logs`
--

CREATE TABLE `phone_call_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `next_follow_up_date` varchar(255) NOT NULL,
  `call_duration` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `call_type` text NOT NULL,
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
  `to_title` varchar(255) NOT NULL,
  `refrence_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `from_title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `document` varchar(255) NOT NULL,
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
  `from_title` varchar(255) NOT NULL,
  `refrence_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `to_title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `document` varchar(255) NOT NULL,
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
-- Table structure for table `print_headers`
--

CREATE TABLE `print_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header_image` text DEFAULT NULL,
  `footer` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `print_headers`
--

INSERT INTO `print_headers` (`id`, `header_image`, `footer`, `status`, `created_at`, `updated_at`) VALUES
(1, 'public/uploads/header_image (1).jpg', '@2022', '1', '2022-02-28 01:15:07', '2022-02-28 01:17:58');

-- --------------------------------------------------------

--
-- Table structure for table `purposes`
--

CREATE TABLE `purposes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` varchar(255) DEFAULT NULL,
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
  `name` varchar(255) NOT NULL,
  `des` varchar(255) DEFAULT NULL,
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
-- Table structure for table `reminder_types`
--

CREATE TABLE `reminder_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reminder_type` varchar(255) DEFAULT NULL,
  `days` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sreni_id` varchar(255) DEFAULT NULL,
  `department_id` varchar(255) DEFAULT NULL,
  `section_id` varchar(255) DEFAULT NULL,
  `subject_id` varchar(255) DEFAULT NULL,
  `students_id` varchar(255) DEFAULT NULL,
  `exam_id` varchar(255) DEFAULT NULL,
  `com` varchar(255) DEFAULT NULL,
  `roll` varchar(255) DEFAULT NULL,
  `exam_name` varchar(255) DEFAULT NULL,
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
  `grade_letter` varchar(255) NOT NULL DEFAULT '0',
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `session_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `sreni_id`, `department_id`, `section_id`, `subject_id`, `students_id`, `exam_id`, `com`, `roll`, `exam_name`, `written_exam`, `prac_exam`, `mcq_exam`, `1st_tuto_exam`, `2nd_tuto_exam`, `3rd_tuto_exam`, `tuto_per`, `tuto_total`, `viva`, `behave`, `main_total`, `all_total`, `grade_point`, `grade_letter`, `status`, `created_at`, `updated_at`, `session_id`) VALUES
(6, '2', '0', '1', '2', '9', '3', NULL, 'Ginger', NULL, 44, 0, 44, 0, 0, 0, 0, 0, 0, NULL, 88, 0, 5, 'A+', 1, '2022-03-07 05:17:46', '2022-03-13 22:03:48', NULL),
(7, '2', '0', '1', '1', '9', '3', NULL, 'Ginger', NULL, 30, 0, 30, 0, 0, 0, 0, 0, 0, NULL, 60, 0, 4, 'A-', 1, '2022-03-13 22:04:56', '2022-03-13 22:04:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'admin', '2021-03-24 02:04:14', '2021-03-24 02:04:14'),
(2, 'admin', 'admin', '2021-03-24 02:04:14', '2021-03-24 02:04:14'),
(10, 'Teacher', 'admin', '2022-01-30 22:59:56', '2022-01-30 22:59:56'),
(11, 'Student', 'admin', '2022-01-30 23:00:33', '2024-02-27 23:53:58');

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
(1, 10),
(1, 11),
(2, 1),
(2, 2),
(2, 10),
(2, 11),
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
(18, 10),
(18, 11),
(19, 1),
(19, 2),
(19, 10),
(19, 11),
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
(253, 1),
(254, 1),
(255, 1),
(256, 1),
(257, 1),
(258, 1),
(259, 1),
(260, 1),
(261, 1),
(262, 1),
(263, 1),
(264, 1),
(265, 1),
(266, 1),
(267, 1),
(268, 1),
(269, 1),
(270, 1),
(271, 1),
(272, 1),
(273, 1),
(274, 1),
(275, 1),
(276, 1),
(277, 1),
(278, 1),
(279, 1),
(280, 1),
(281, 1),
(282, 1),
(283, 1),
(284, 1),
(285, 1),
(286, 1),
(287, 1),
(288, 1),
(289, 1),
(290, 1),
(291, 1),
(292, 1),
(293, 1),
(294, 1),
(295, 1),
(296, 1),
(297, 1),
(298, 1),
(299, 1),
(300, 1),
(301, 1),
(302, 1),
(303, 1),
(304, 1),
(305, 1),
(306, 1),
(307, 1),
(308, 1),
(309, 1),
(310, 1),
(311, 1),
(312, 1),
(313, 1),
(314, 1),
(315, 1),
(316, 1),
(317, 1),
(318, 1),
(319, 1),
(320, 1),
(321, 1),
(322, 1),
(323, 1),
(324, 1),
(325, 1),
(326, 1),
(327, 1),
(328, 1),
(329, 1),
(330, 1),
(331, 1),
(332, 1),
(333, 1),
(334, 1),
(335, 1),
(336, 1),
(338, 1),
(339, 1),
(340, 1),
(341, 1),
(342, 1),
(343, 1),
(344, 1),
(345, 1),
(346, 1),
(347, 1),
(348, 1),
(349, 1),
(350, 1),
(351, 1),
(352, 1),
(352, 10),
(353, 1),
(353, 10),
(354, 1),
(354, 10),
(355, 1),
(355, 10),
(356, 1),
(356, 10),
(357, 1),
(357, 10),
(357, 11),
(358, 1),
(358, 10),
(359, 1),
(359, 10),
(360, 1),
(361, 1),
(362, 1),
(363, 1),
(364, 1),
(365, 1),
(366, 1),
(367, 1),
(368, 1),
(369, 1),
(370, 1),
(371, 1),
(372, 1),
(373, 1),
(374, 1),
(375, 1),
(376, 1),
(377, 1),
(378, 1),
(379, 1),
(380, 1),
(381, 1),
(382, 1),
(383, 1),
(384, 1),
(385, 1),
(386, 1),
(387, 1),
(388, 1),
(389, 1),
(390, 1),
(391, 1),
(392, 1),
(393, 1),
(394, 1),
(395, 1),
(396, 1),
(397, 1),
(398, 1),
(399, 1),
(400, 1),
(401, 1),
(402, 1),
(403, 1),
(404, 1),
(405, 1),
(406, 1),
(407, 1),
(408, 1),
(409, 1),
(410, 1),
(411, 1),
(412, 1),
(413, 1),
(414, 1),
(415, 1),
(416, 1),
(417, 1),
(418, 1),
(419, 1),
(420, 1),
(421, 1),
(423, 1),
(424, 1),
(425, 1),
(426, 1),
(427, 1),
(428, 1),
(429, 1),
(430, 1),
(431, 1),
(432, 1),
(433, 1),
(434, 1),
(435, 1),
(436, 1),
(437, 1),
(438, 1),
(439, 1),
(440, 1),
(441, 1),
(442, 1),
(443, 1),
(444, 1),
(445, 1),
(446, 1),
(447, 1),
(448, 1),
(449, 1),
(450, 1),
(451, 1),
(452, 1),
(453, 1),
(454, 1);

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` varchar(255) DEFAULT NULL,
  `class_id` varchar(100) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `department_id`, `class_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, '--- Select Department ---', '2', 'A', 1, '2022-01-06 00:39:00', '2022-01-06 00:39:00'),
(2, '1', '4', 'Z', 1, '2022-01-06 00:39:18', '2022-01-06 00:39:18'),
(4, '0', '2', 'B', 1, '2022-02-28 22:53:10', '2022-02-28 22:53:10'),
(5, '0', '2', 'C', 1, '2022-03-01 00:42:54', '2022-03-01 00:42:54'),
(6, '0', '3', 'A', 1, '2024-02-26 09:45:10', '2024-02-26 09:45:10');

-- --------------------------------------------------------

--
-- Table structure for table `session_years`
--

CREATE TABLE `session_years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `session_years`
--

INSERT INTO `session_years` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, '2020-21', NULL, '2022-02-27 03:54:15', '2022-02-27 03:54:15'),
(2, '2021-22', NULL, '2022-02-27 03:54:42', '2022-02-27 03:54:42'),
(3, '2022-23', 0, '2022-02-27 03:54:58', '2024-02-12 23:52:18'),
(4, '2023-24', 1, '2024-02-12 23:52:11', '2024-02-12 23:52:24');

-- --------------------------------------------------------

--
-- Table structure for table `siblings`
--

CREATE TABLE `siblings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `sibling_name` varchar(255) NOT NULL,
  `sibling_class` varchar(255) NOT NULL,
  `sibling_section` varchar(255) DEFAULT NULL,
  `sibling_department` varchar(255) DEFAULT NULL,
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
  `name` varchar(255) NOT NULL,
  `des` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sources`
--

INSERT INTO `sources` (`id`, `name`, `des`, `created_at`, `updated_at`) VALUES
(1, 'Front Office', 'Front Office', '2022-01-26 00:17:23', '2022-01-26 00:17:23'),
(2, 'Online Front Site', 'Online Front Site', '2022-01-26 00:17:36', '2022-01-26 00:17:36'),
(4, 'Channing Martin', 'Id aut consectetur', '2022-03-11 23:25:27', '2022-03-11 23:25:27');

-- --------------------------------------------------------

--
-- Table structure for table `sranis`
--

CREATE TABLE `sranis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
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
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` varchar(255) NOT NULL,
  `library_id` varchar(200) DEFAULT NULL,
  `library_card_status` varchar(100) DEFAULT '0',
  `role` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `date_of_joining` varchar(255) DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `emergency_contact_number` varchar(255) DEFAULT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `current_address` varchar(255) DEFAULT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `work_experience` text DEFAULT NULL,
  `pan_number` varchar(255) DEFAULT NULL,
  `epf_no` varchar(255) DEFAULT NULL,
  `basic_salary` varchar(255) DEFAULT NULL,
  `contract_type` varchar(255) DEFAULT NULL,
  `work_shift` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `medical_leave` varchar(255) DEFAULT NULL,
  `casual_leave` varchar(255) DEFAULT NULL,
  `maternity_leave` varchar(255) DEFAULT NULL,
  `account_title` varchar(255) DEFAULT NULL,
  `bank_account_number` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `ifsc_code` varchar(255) DEFAULT NULL,
  `bank_branch_name` varchar(255) DEFAULT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `joining_letter` varchar(255) DEFAULT NULL,
  `other_documents` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staff_id`, `library_id`, `library_card_status`, `role`, `designation`, `department`, `first_name`, `last_name`, `father_name`, `mother_name`, `email`, `gender`, `date_of_birth`, `date_of_joining`, `phone`, `emergency_contact_number`, `marital_status`, `photo`, `current_address`, `permanent_address`, `qualification`, `note`, `work_experience`, `pan_number`, `epf_no`, `basic_salary`, `contract_type`, `work_shift`, `location`, `medical_leave`, `casual_leave`, `maternity_leave`, `account_title`, `bank_account_number`, `bank_name`, `ifsc_code`, `bank_branch_name`, `facebook_url`, `twitter_url`, `linkedin_url`, `instagram_url`, `resume`, `joining_letter`, `other_documents`, `status`, `created_at`, `updated_at`) VALUES
(2, 'McKenzie', '', '0', 'Teacher', 'Accountant', 'Library', 'Chelsea', 'Thaddeus', 'Christen', 'Sean', 'pexamat@mailinator.com', 'Male', '1994-09-02', '1989-05-22', '557', '609', 'Married', 'public/upload/f_demo.png', 'Nihil lorem qui vel', 'Eu omnis debitis sol', 'Consequatur Qui obc', 'Sit ut aliquam volu', 'Laudantium dolores', 'Tad', 'Talon', '20000', 'Probation', 'Clio', 'Danielle', 'Danielle', 'Karen', 'Palmer', 'Margaret', 'Kristen', 'Desirae', 'Murphy', 'Guy', 'Steven', 'Tatum', 'Cheryl', 'Cameron', 'sample (1) (3).pdf', 'sample (1).pdf', 'sample (1).pdf', '1', '2022-01-31 01:00:47', '2022-02-26 05:10:40'),
(3, 'Ann', '097', '1', 'Teacher', 'Faculty', 'Finance', 'Zia', 'Mariko', 'Justine', 'James', 'raza@mailinator.com', 'Female', '2013-05-24', '2001-04-11', '919', '197', 'Not Specified', NULL, 'Facilis ullamco eum', 'Molestiae iste volup', 'Dolorem reiciendis d', 'Nostrum aspernatur v', 'Non ipsam qui distin', 'Ahmed', 'Latifah', '24000', 'Permanent', 'Akeem', 'Felix', 'Skyler', 'Clio', 'Nomlanga', 'Kelly', 'Tobias', 'Rina', 'Kasper', 'Leo', 'Thane', 'Gisela', 'Frances', 'Brock', NULL, NULL, NULL, '1', '2022-01-31 03:26:17', '2022-02-26 05:11:15'),
(4, '20240226102654', NULL, '0', 'Teacher', 'Faculty', 'Academic', 'Kamruzzaman', 'kajol', 'Rezaul Alam', 'Kohinur Bgum', 'kk450@gmail.com', 'Male', '2024-02-26', '2024-02-26', '01646735100', '01646735100', 'Married', 'public/upload/about_3.png', 'Rajshahi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2024-02-26 10:27:57', '2024-02-26 10:27:57');

-- --------------------------------------------------------

--
-- Table structure for table `staff_attandences`
--

CREATE TABLE `staff_attandences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `staff_id` varchar(255) NOT NULL,
  `staff_main_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `attandences` varchar(255) DEFAULT NULL,
  `year` varchar(100) DEFAULT NULL,
  `month` varchar(100) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_attandences`
--

INSERT INTO `staff_attandences` (`id`, `date`, `staff_id`, `staff_main_id`, `name`, `role`, `attandences`, `year`, `month`, `note`, `created_at`, `updated_at`) VALUES
(11, '2022-02-03', 'McKenzie', '2', 'ChelseaChelsea', 'Teacher', 'holiday', '2022', 'February', NULL, '2022-02-03 04:44:12', '2022-02-03 04:44:12'),
(12, '2022-02-03', 'Ann', '3', 'ZiaZia', 'Teacher', 'holiday', '2022', 'February', NULL, '2022-02-03 04:44:12', '2022-02-03 04:44:12'),
(13, '2022-01-31', 'McKenzie', '2', 'ChelseaChelsea', 'Teacher', 'Present', '2022', 'January', NULL, '2022-02-03 05:13:37', '2022-02-03 05:13:37'),
(14, '2022-01-31', 'Ann', '10', 'ZiaZia', 'Teacher', 'Present', '2022', 'January', 's', '2022-02-03 05:13:38', '2022-02-03 05:13:38'),
(15, '2022-02-05', 'McKenzie', '2', 'ChelseaChelsea', 'Teacher', 'Present', '2022', 'February', NULL, '2022-02-05 01:25:12', '2022-02-05 01:25:12'),
(16, '2022-02-05', 'Ann', '3', 'ZiaZia', 'Teacher', 'Late', '2022', 'February', NULL, '2022-02-05 01:25:12', '2022-02-05 01:25:12');

-- --------------------------------------------------------

--
-- Table structure for table `staff_ids`
--

CREATE TABLE `staff_ids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `background_image` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `address_phone_email` varchar(255) DEFAULT NULL,
  `id_card_title` varchar(255) DEFAULT NULL,
  `header_color` varchar(255) DEFAULT NULL,
  `staff_name` varchar(255) DEFAULT NULL,
  `staff_id` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `current_address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `design_type` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `date_of_joinimg` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff_id_cards`
--

CREATE TABLE `staff_id_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `background_image` varchar(255) DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `signature` text DEFAULT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `address/phone/email` text DEFAULT NULL,
  `id_card_title` text DEFAULT NULL,
  `header_color` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `admission_no` varchar(255) DEFAULT NULL,
  `roll_no` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `desi` varchar(255) DEFAULT NULL,
  `depart` varchar(255) DEFAULT NULL,
  `date_of_joining` varchar(255) DEFAULT NULL,
  `exam_session` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_id_cards`
--

INSERT INTO `staff_id_cards` (`id`, `background_image`, `logo`, `signature`, `school_name`, `address/phone/email`, `id_card_title`, `header_color`, `name`, `father_name`, `mother_name`, `date_of_birth`, `admission_no`, `roll_no`, `address`, `gender`, `photo`, `desi`, `depart`, `date_of_joining`, `exam_session`, `blood_group`, `phone`, `created_at`, `updated_at`) VALUES
(1, '#0fdb42', 'public/uploads/download.png', 'Template one', NULL, NULL, 'STAFF ID CARD', '#e1dbdb', '1', NULL, NULL, NULL, '1', NULL, '1', NULL, '1', '1', '1', '1', NULL, NULL, '1', '2022-03-15 00:17:02', '2022-03-15 00:20:55');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `library_id` varchar(100) DEFAULT NULL,
  `library_card_status` varchar(10) DEFAULT '0',
  `sreni_id` varchar(255) DEFAULT NULL,
  `department_id` varchar(255) DEFAULT NULL,
  `section_id` varchar(255) DEFAULT NULL,
  `student_name` varchar(255) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `moher_name` varchar(100) DEFAULT NULL,
  `student_phone` varchar(255) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `student_email` varchar(255) DEFAULT NULL,
  `student_address` text DEFAULT NULL,
  `student_dob` varchar(255) DEFAULT NULL,
  `student_image` varchar(255) DEFAULT NULL,
  `student_roll` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `year` varchar(255) DEFAULT NULL,
  `month` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `library_id`, `library_card_status`, `sreni_id`, `department_id`, `section_id`, `student_name`, `father_name`, `moher_name`, `student_phone`, `gender`, `student_email`, `student_address`, `student_dob`, `student_image`, `student_roll`, `status`, `year`, `month`, `created_at`, `updated_at`) VALUES
(1, NULL, '0', '2', '0', '1', 'kkajol428@gmail.com', 'ff', 'fff', '01646735100', 'Male', 'kkajol428@gmail.com', 'Rajshahi', '2022-01-15', 'public/upload/map-marker.png', '1', 1, '2022', '01', '2022-01-06 05:51:43', '2022-01-06 05:51:43'),
(2, NULL, '0', '4', '1', '2', 'm@gmail.com', 'ff', 'fff', '01646735100', 'Male', 'kkajol428@gmail.com', 'Rajshahi', '2022-01-13', 'public/upload/favicon.png', '1', 1, '2022', '01', '2022-01-06 05:54:08', '2022-01-06 05:54:08'),
(4, NULL, '0', '2', '0', '1', 'ty', 'jtyuyti', 'iyu', 'tryt', 'Male', 'try@gmail.com', 'wetewt', '2022-01-12', 'public/upload/dabur-logo-1C73F58A2E-seeklogo.com.png', '2', 1, '2022', '01', '2022-01-10 05:34:22', '2022-01-10 05:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `student_categories`
--

CREATE TABLE `student_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
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
-- Table structure for table `student_certificates`
--

CREATE TABLE `student_certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `certificate_name` varchar(255) DEFAULT NULL,
  `header_text_left` varchar(255) DEFAULT NULL,
  `header_center_text` varchar(255) DEFAULT NULL,
  `header_right_text` varchar(255) DEFAULT NULL,
  `header_color` varchar(255) DEFAULT NULL,
  `body_text` text DEFAULT NULL,
  `footer_left_text` varchar(255) DEFAULT NULL,
  `footer_center_text` text DEFAULT NULL,
  `footer_right_text` varchar(255) DEFAULT NULL,
  `header_height` varchar(255) DEFAULT NULL,
  `footer_height` text DEFAULT NULL,
  `body_height` text DEFAULT NULL,
  `body_width` text DEFAULT NULL,
  `backfround_image` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_certificates`
--

INSERT INTO `student_certificates` (`id`, `certificate_name`, `header_text_left`, `header_center_text`, `header_right_text`, `header_color`, `body_text`, `footer_left_text`, `footer_center_text`, `footer_right_text`, `header_height`, `footer_height`, `body_height`, `body_width`, `backfround_image`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'certificate one', 'text left', 'text center', '2022-04-05', '#810404', '<p>hi {{$student_name}} .you {{$dob_student}} .all.</p>', 'footer left text', 'footer center text', 'footer right text', NULL, NULL, NULL, NULL, 'public/uploads/back_img1.png', '1', '2022-04-03 20:38:44', '2022-04-03 20:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `student_houses`
--

CREATE TABLE `student_houses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_houses`
--

INSERT INTO `student_houses` (`id`, `name`, `des`, `created_at`, `updated_at`) VALUES
(1, 'ROUTES', NULL, '2022-01-20 00:16:46', '2024-02-26 07:49:52'),
(3, 'TA', 'best', '2022-01-20 00:17:29', '2024-02-26 07:49:27'),
(4, 'BKBSC', NULL, '2024-02-26 07:50:25', '2024-02-26 07:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `student_ids`
--

CREATE TABLE `student_ids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `background_image` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `address_phone_email` varchar(255) DEFAULT NULL,
  `id_card_title` varchar(255) DEFAULT NULL,
  `header_color` varchar(255) DEFAULT NULL,
  `admission_no` varchar(255) DEFAULT NULL,
  `student_name` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `student_address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `design_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_id_cards`
--

CREATE TABLE `student_id_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `background_image` varchar(255) DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `signature` text DEFAULT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `address/phone/email` text DEFAULT NULL,
  `id_card_title` text DEFAULT NULL,
  `header_color` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `admission_no` varchar(255) DEFAULT NULL,
  `roll_no` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `exam_session` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_id_cards`
--

INSERT INTO `student_id_cards` (`id`, `background_image`, `logo`, `signature`, `school_name`, `address/phone/email`, `id_card_title`, `header_color`, `name`, `father_name`, `mother_name`, `date_of_birth`, `admission_no`, `roll_no`, `address`, `gender`, `photo`, `class`, `section`, `exam_session`, `blood_group`, `phone`, `created_at`, `updated_at`) VALUES
(3, '#d01b1b', 'public/uploads/download.png', 'Template one', '+880232466', NULL, 'STUDENT ID CARD', '#e9e2e2', '1', NULL, NULL, '1', '1', NULL, NULL, NULL, '1', '1', '1', NULL, NULL, NULL, '2022-03-14 23:34:55', '2022-03-14 23:36:12');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` varchar(100) DEFAULT NULL,
  `department_id` varchar(100) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `class_id`, `department_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, '4', NULL, 'Bangla', 1, '2022-01-06 02:32:30', '2024-02-27 08:23:18'),
(2, '4', NULL, 'English', 1, '2022-01-06 02:32:44', '2024-02-27 08:23:11'),
(3, '4', '1', 'Higher Math', 1, '2022-01-06 02:33:23', '2022-01-06 02:33:23'),
(4, '3', '0', 'Bangla', 1, '2022-01-06 02:35:25', '2022-01-13 02:26:37');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(255) DEFAULT NULL,
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
-- Table structure for table `teachers_ratings`
--

CREATE TABLE `teachers_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ratting` varchar(255) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_remarks`
--

CREATE TABLE `teacher_remarks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` varchar(255) DEFAULT NULL,
  `session` varchar(200) DEFAULT NULL,
  `student_id` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_remarks`
--

INSERT INTO `teacher_remarks` (`id`, `exam_id`, `session`, `student_id`, `comment`, `created_at`, `updated_at`) VALUES
(3, '3', '2022-23', '9', '234', '2022-03-06 05:02:35', '2022-03-06 05:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `teststudents`
--

CREATE TABLE `teststudents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roll_number` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
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
  `sreni_id` varchar(255) NOT NULL,
  `section_id` varchar(255) NOT NULL,
  `department_id` varchar(255) NOT NULL,
  `subject_id` varchar(255) DEFAULT NULL,
  `lesson_id` varchar(255) DEFAULT NULL,
  `topic` varchar(255) DEFAULT NULL,
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
  `topic_table_id` varchar(255) NOT NULL,
  `lesson_id` varchar(255) DEFAULT NULL,
  `topic_name` varchar(255) NOT NULL,
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
-- Table structure for table `transections`
--

CREATE TABLE `transections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `payment_amount` varchar(255) DEFAULT NULL,
  `month_year` varchar(255) DEFAULT NULL,
  `payment_mode` varchar(255) DEFAULT NULL,
  `payment_date` varchar(255) DEFAULT NULL,
  `text_note` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transections`
--

INSERT INTO `transections` (`id`, `staff_name`, `payment_amount`, `month_year`, `payment_mode`, `payment_date`, `text_note`, `created_at`, `updated_at`) VALUES
(1, '2', '20043', 'February - 2022', 'Cash', '2022-02-22', 'e', '2022-02-22 01:19:53', '2022-02-22 01:19:53');

-- --------------------------------------------------------

--
-- Table structure for table `upload_contents`
--

CREATE TABLE `upload_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content_type` varchar(255) DEFAULT NULL,
  `assaign_section` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `upload_date` varchar(255) DEFAULT NULL,
  `doc` text DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upload_contents`
--

INSERT INTO `upload_contents` (`id`, `title`, `content_type`, `assaign_section`, `class`, `section`, `department`, `upload_date`, `doc`, `des`, `created_at`, `updated_at`) VALUES
(4, 'hh', 'Assignments', 'All Super Admin,All Student', '4', '2', '1', '2022-02-28', 'sample (1).pdf', 'trytr', '2022-02-28 05:48:19', '2022-02-28 05:48:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `name_bangla` varchar(100) NOT NULL,
  `fh_id` varchar(100) DEFAULT NULL,
  `father_name_ban` varchar(100) DEFAULT NULL,
  `father_name_eng` varchar(100) DEFAULT NULL,
  `mother_name_ban` varchar(100) DEFAULT NULL,
  `mother_name_eng` varchar(100) DEFAULT NULL,
  `blood_group` varchar(20) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `birthdate` varchar(70) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `nid` varchar(50) DEFAULT NULL,
  `birthcer` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address_present_english` text DEFAULT NULL,
  `address_present_bangla` text DEFAULT NULL,
  `village_present_bangla` text DEFAULT NULL,
  `village_present_englishh` text DEFAULT NULL,
  `pollice_present_eng` text DEFAULT NULL,
  `pollice_present_ban` text DEFAULT NULL,
  `div_present_eng` text DEFAULT NULL,
  `div_present_ban` text DEFAULT NULL,
  `dis_present_eng` text DEFAULT NULL,
  `dis_present_ban` text DEFAULT NULL,
  `post_office_present_ban` text DEFAULT NULL,
  `post_office_present_eng` text DEFAULT NULL,
  `postcode_present_ban` text DEFAULT NULL,
  `postcode_present_eng` text DEFAULT NULL,
  `address_per_eng` text DEFAULT NULL,
  `address_per_ban` text DEFAULT NULL,
  `villlage_per_eng` text DEFAULT NULL,
  `village_per_ban` text DEFAULT NULL,
  `pollice_per_eng` text DEFAULT NULL,
  `pollice_per_ban` text DEFAULT NULL,
  `div_per_ban` text DEFAULT NULL,
  `div_per_eng` text DEFAULT NULL,
  `dis_per_ban` text DEFAULT NULL,
  `dis_per_eng` text DEFAULT NULL,
  `postoffice_per_ban` text DEFAULT NULL,
  `postoffice_per_eng` text DEFAULT NULL,
  `post_code_ban` text DEFAULT NULL,
  `post_code_eng` text DEFAULT NULL,
  `ward_id` int(11) DEFAULT NULL,
  `nid_photo` text DEFAULT NULL,
  `ebill_photo` text DEFAULT NULL
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
  `route_title` varchar(255) NOT NULL,
  `fare` varchar(255) NOT NULL,
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
  `route_id` varchar(255) NOT NULL,
  `v_number` varchar(255) NOT NULL,
  `v_model` varchar(255) NOT NULL,
  `year_made` varchar(255) NOT NULL,
  `driver_name` varchar(255) DEFAULT NULL,
  `driver_license` varchar(255) NOT NULL,
  `driver_contact` varchar(255) NOT NULL,
  `note` text NOT NULL,
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
  `purpose` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `id_card` text NOT NULL,
  `number_of_person` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `in_time` varchar(255) NOT NULL,
  `out_time` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `doc` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ward_no_ban` varchar(255) NOT NULL,
  `gender` varchar(110) DEFAULT NULL,
  `personal_id` varchar(255) NOT NULL,
  `ward_no_eng` varchar(255) NOT NULL,
  `city_cor_name_ban` varchar(255) NOT NULL,
  `city_cor_name_eng` varchar(255) NOT NULL,
  `district_ban` varchar(255) NOT NULL,
  `district_eng` varchar(255) NOT NULL,
  `div_eng` varchar(100) NOT NULL,
  `div_ban` varchar(100) NOT NULL,
  `postal_code_ban` varchar(255) NOT NULL,
  `postal_code_eng` text NOT NULL,
  `post_office_ban` varchar(255) NOT NULL,
  `post_office_eng` varchar(255) NOT NULL,
  `police_station_ban` varchar(255) NOT NULL,
  `police_station_eng` varchar(255) NOT NULL,
  `office_address_ban` varchar(255) NOT NULL,
  `office_address_eng` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(20) DEFAULT 0,
  `border_image` varchar(255) NOT NULL,
  `blong` text DEFAULT NULL,
  `logo` text DEFAULT NULL,
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
-- Indexes for table `alumini_events`
--
ALTER TABLE `alumini_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply_leaves`
--
ALTER TABLE `apply_leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assaign_class_to_exams`
--
ALTER TABLE `assaign_class_to_exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assaign_home_work_to_sections`
--
ALTER TABLE `assaign_home_work_to_sections`
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
-- Indexes for table `assign_student_to_fee_groups`
--
ALTER TABLE `assign_student_to_fee_groups`
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
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
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
-- Indexes for table `collect_fees`
--
ALTER TABLE `collect_fees`
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
-- Indexes for table `deductions`
--
ALTER TABLE `deductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design_admins`
--
ALTER TABLE `design_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design_admits`
--
ALTER TABLE `design_admits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design_mark_sheets`
--
ALTER TABLE `design_mark_sheets`
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
-- Indexes for table `earnings`
--
ALTER TABLE `earnings`
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
-- Indexes for table `exam_schedules`
--
ALTER TABLE `exam_schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_heads`
--
ALTER TABLE `expense_heads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_amounts`
--
ALTER TABLE `fee_amounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_discounts`
--
ALTER TABLE `fee_discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_groups`
--
ALTER TABLE `fee_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_types`
--
ALTER TABLE `fee_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followup_details`
--
ALTER TABLE `followup_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_marks`
--
ALTER TABLE `grade_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holiday_data`
--
ALTER TABLE `holiday_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homework`
--
ALTER TABLE `homework`
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
-- Indexes for table `hr_departments`
--
ALTER TABLE `hr_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incomes`
--
ALTER TABLE `incomes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income_heads`
--
ALTER TABLE `income_heads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institute_information`
--
ALTER TABLE `institute_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_books`
--
ALTER TABLE `issue_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_items`
--
ALTER TABLE `issue_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itemstores`
--
ALTER TABLE `itemstores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_categories`
--
ALTER TABLE `item_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_stocks`
--
ALTER TABLE `item_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_suppliers`
--
ALTER TABLE `item_suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_types`
--
ALTER TABLE `leave_types`
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
-- Indexes for table `library_infos`
--
ALTER TABLE `library_infos`
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
-- Indexes for table `payrolls`
--
ALTER TABLE `payrolls`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `print_headers`
--
ALTER TABLE `print_headers`
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
-- Indexes for table `reminder_types`
--
ALTER TABLE `reminder_types`
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
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session_years`
--
ALTER TABLE `session_years`
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
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_attandences`
--
ALTER TABLE `staff_attandences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_ids`
--
ALTER TABLE `staff_ids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_id_cards`
--
ALTER TABLE `staff_id_cards`
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
-- Indexes for table `student_certificates`
--
ALTER TABLE `student_certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_houses`
--
ALTER TABLE `student_houses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_ids`
--
ALTER TABLE `student_ids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_id_cards`
--
ALTER TABLE `student_id_cards`
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
-- Indexes for table `teachers_ratings`
--
ALTER TABLE `teachers_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_remarks`
--
ALTER TABLE `teacher_remarks`
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
-- Indexes for table `transections`
--
ALTER TABLE `transections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_contents`
--
ALTER TABLE `upload_contents`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
-- AUTO_INCREMENT for table `alumini_events`
--
ALTER TABLE `alumini_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `apply_leaves`
--
ALTER TABLE `apply_leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `assaign_class_to_exams`
--
ALTER TABLE `assaign_class_to_exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `assaign_home_work_to_sections`
--
ALTER TABLE `assaign_home_work_to_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `assign_student_to_fee_groups`
--
ALTER TABLE `assign_student_to_fee_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assign_teacher_to_addresuls`
--
ALTER TABLE `assign_teacher_to_addresuls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendences`
--
ALTER TABLE `attendences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class_routines`
--
ALTER TABLE `class_routines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `class_shedules`
--
ALTER TABLE `class_shedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `collect_fees`
--
ALTER TABLE `collect_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `deductions`
--
ALTER TABLE `deductions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `design_admins`
--
ALTER TABLE `design_admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `design_admits`
--
ALTER TABLE `design_admits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `design_mark_sheets`
--
ALTER TABLE `design_mark_sheets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `earnings`
--
ALTER TABLE `earnings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exam_routines`
--
ALTER TABLE `exam_routines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_schedules`
--
ALTER TABLE `exam_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `expense_heads`
--
ALTER TABLE `expense_heads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_amounts`
--
ALTER TABLE `fee_amounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fee_discounts`
--
ALTER TABLE `fee_discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fee_groups`
--
ALTER TABLE `fee_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fee_types`
--
ALTER TABLE `fee_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `followup_details`
--
ALTER TABLE `followup_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `grade_marks`
--
ALTER TABLE `grade_marks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `holiday_data`
--
ALTER TABLE `holiday_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `homework`
--
ALTER TABLE `homework`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `hr_departments`
--
ALTER TABLE `hr_departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `incomes`
--
ALTER TABLE `incomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `income_heads`
--
ALTER TABLE `income_heads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `institute_information`
--
ALTER TABLE `institute_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `issue_books`
--
ALTER TABLE `issue_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `issue_items`
--
ALTER TABLE `issue_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `itemstores`
--
ALTER TABLE `itemstores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `item_categories`
--
ALTER TABLE `item_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `item_stocks`
--
ALTER TABLE `item_stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item_suppliers`
--
ALTER TABLE `item_suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leave_types`
--
ALTER TABLE `leave_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `library_infos`
--
ALTER TABLE `library_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `main_students`
--
ALTER TABLE `main_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

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
-- AUTO_INCREMENT for table `payrolls`
--
ALTER TABLE `payrolls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=455;

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
-- AUTO_INCREMENT for table `print_headers`
--
ALTER TABLE `print_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `reminder_types`
--
ALTER TABLE `reminder_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `session_years`
--
ALTER TABLE `session_years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `siblings`
--
ALTER TABLE `siblings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sources`
--
ALTER TABLE `sources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sranis`
--
ALTER TABLE `sranis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff_attandences`
--
ALTER TABLE `staff_attandences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `staff_ids`
--
ALTER TABLE `staff_ids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_id_cards`
--
ALTER TABLE `staff_id_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `student_certificates`
--
ALTER TABLE `student_certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_houses`
--
ALTER TABLE `student_houses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_ids`
--
ALTER TABLE `student_ids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_id_cards`
--
ALTER TABLE `student_id_cards`
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
-- AUTO_INCREMENT for table `teachers_ratings`
--
ALTER TABLE `teachers_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher_remarks`
--
ALTER TABLE `teacher_remarks`
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
-- AUTO_INCREMENT for table `transections`
--
ALTER TABLE `transections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `upload_contents`
--
ALTER TABLE `upload_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
