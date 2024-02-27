-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2024 at 12:32 PM
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
-- Database: `new_school_software`
--

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custome_fields`
--
ALTER TABLE `custome_fields`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custome_fields`
--
ALTER TABLE `custome_fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
