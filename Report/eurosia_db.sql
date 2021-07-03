-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 10:20 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eurosia_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `agreements`
--

CREATE TABLE `agreements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agreement_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agreement_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proposal_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agreements`
--

INSERT INTO `agreements` (`id`, `agreement_no`, `agreement_date`, `company_id`, `company_name`, `proposal_no`, `invoice_no`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'AGG-VNO-00', '2021-07-03', '1', 'Eurosia', 'PSL-NO-00', 'INV-VNO-00', 'Super Admin', '2021-07-02 20:54:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `con_per_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `con_per_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `company_name`, `company_phone`, `company_owner`, `company_address`, `company_email`, `company_website`, `con_per_name`, `con_per_phone`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Eurosia', '01705645150', 'oli', 'dhaka', 'oli@gmail.com', NULL, 'shuvo', '01788838386', 'Super Admin', '2021-07-01 12:37:56', '2021-07-02 14:49:37');

-- --------------------------------------------------------

--
-- Table structure for table `companyinfos`
--

CREATE TABLE `companyinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_md` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_licence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companyinfos`
--

INSERT INTO `companyinfos` (`id`, `company_name`, `company_phone`, `company_owner`, `company_md`, `company_address`, `company_licence`, `company_email`, `company_website`, `company_facebook`, `company_instagram`, `company_whatsapp`, `company_logo`, `company_icon`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Eurosia', '01879186653', 'Eurosia', 'Eurosia', 'Dhanmondi-32, Dhaka-1205', '123456789', 'eurosia@gmail.com', 'www.veracioussltd.com', 'https://laravel.com/docs/6.x/migrations', 'https://laravel.com/docs/6.x/migrations', 'https://laravel.com/docs/6.x/migrations', 'upload/Admin/Company/1704108059714765.png', 'upload/Admin/Company/1704108059716222.png', '', '2021-07-01 12:28:09', '2021-07-01 12:28:09');

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
-- Table structure for table `invoicebreakdowns`
--

CREATE TABLE `invoicebreakdowns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proposal_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale_tax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoicebreakdowns`
--

INSERT INTO `invoicebreakdowns` (`id`, `invoice`, `proposal_no`, `service_no`, `service_name`, `sale_tax`, `others`, `entry_date`, `s_price`, `quantity`, `price`, `total_price`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'INV-VNO-00', 'PSL-NO-00', 'Environment test 2', 'Environment test 2', '10', '5', '2021-07-01', '100', '10', '1000', '1045', 'Super Admin', '2021-07-02 12:48:46', '2021-07-02 12:48:46'),
(3, 'INV-VNO-00', 'PSL-NO-00', 'Environment test 2', 'Environment test 2', '8', '3', '2021-07-01', '500', '2', '1000', '1047.6', 'Super Admin', '2021-07-02 14:31:03', '2021-07-02 14:31:03'),
(4, 'INV-VNO-00', 'PSL-NO-00', 'Environment test', 'Environment test', '8', '3', '2021-07-01', '2000', '1', '2000', '3142.8', 'Super Admin', '2021-07-02 14:31:03', '2021-07-02 14:31:03'),
(5, 'INV-VNO-005', 'PSL-NO-00', NULL, 'Environment test 2', '10', '6', '2021-07-04', '200', '50', '1000', '1034', 'Super Admin', '2021-07-03 14:02:33', '2021-07-03 14:02:33'),
(6, 'INV-VNO-005', 'PSL-NO-00', NULL, 'Environment test', '10', '6', '2021-07-04', '100', '90', '9000', '10340', 'Super Admin', '2021-07-03 14:02:33', '2021-07-03 14:02:33');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proposal_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entry_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale_tax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `invoice`, `proposal_no`, `entry_date`, `sale_tax`, `others`, `total_price`, `created_by`, `created_at`, `updated_at`) VALUES
(5, 'INV-VNO-00', 'PSL-NO-00', '2021-07-01', '8', '3', '3142.8', 'Super Admin', '2021-07-02 14:31:03', '2021-07-02 14:31:03'),
(6, 'INV-VNO-005', 'PSL-NO-00', '2021-07-04', '10', '6', '10340', 'Super Admin', '2021-07-03 14:02:33', '2021-07-03 14:02:33');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_28_170100_create_companyinfos_table', 1),
(5, '2021_06_28_175829_create_clients_table', 1),
(6, '2021_06_29_183357_create_proposals_table', 1),
(7, '2021_06_29_192120_create_services_table', 1),
(8, '2021_07_01_175108_create_invoices_table', 2),
(9, '2021_07_01_175348_create_invoicebreakdowns_table', 2),
(10, '2021_07_02_202341_create_agreements_table', 3),
(11, '2021_07_03_191202_create_reports_table', 4);

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
-- Table structure for table `proposals`
--

CREATE TABLE `proposals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `proposal_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proposal_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proposal_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proposals`
--

INSERT INTO `proposals` (`id`, `proposal_no`, `proposal_date`, `company_id`, `proposal_status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'PSL-NO-00', '2021-07-02', '1', 'Environment Test', NULL, '2021-07-01 12:38:37', '2021-07-01 12:38:37');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proposal_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `report` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `invoice_no`, `proposal_no`, `report`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'INV-VNO-00', 'PSL-NO-00', 'upload/Reports/1704292176797941.pdf', 'Super Admin', '2021-07-03 13:14:36', '2021-07-03 13:14:36');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `price`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Environment test', '100', NULL, '2021-07-01 12:36:08', '2021-07-01 12:36:08'),
(2, 'Environment test 2', '200', NULL, '2021-07-01 12:36:20', '2021-07-01 12:36:20');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'eurosia@audit.com', NULL, '$2y$10$gUZSDbEk1knbdEXy6RuH/.1W95FNnHatdacfzT9gmaSKBx9c2EKAe', NULL, '0000-00-00 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agreements`
--
ALTER TABLE `agreements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companyinfos`
--
ALTER TABLE `companyinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoicebreakdowns`
--
ALTER TABLE `invoicebreakdowns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agreements`
--
ALTER TABLE `agreements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `companyinfos`
--
ALTER TABLE `companyinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoicebreakdowns`
--
ALTER TABLE `invoicebreakdowns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
