-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2018 at 10:16 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_education`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `nama`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin Super', 'admin', '6129f02e068926066318cdf764d03b24', '2018-02-06 17:00:00', '2018-02-06 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

CREATE TABLE `datas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipk` float NOT NULL,
  `skripsi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `web` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sosmed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kegiatan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lainnya` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_kerja` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posisi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sertifikat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lomba` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prestasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minat_dosen` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datas`
--

INSERT INTO `datas` (`id`, `nama`, `angkatan`, `jurusan`, `prodi`, `ipk`, `skripsi`, `no_telp`, `email`, `instagram`, `web`, `sosmed`, `alamat`, `kegiatan`, `lainnya`, `tempat_kerja`, `posisi`, `jabatan`, `sertifikat`, `lomba`, `prestasi`, `minat_dosen`, `created_at`, `updated_at`) VALUES
(4, 'John Doe', '2017', 'teknik informatika dan komputer', 'TI', 3.75, 'Implementasi algoritma mesin pencari', '080000000000', 'admin@admin.com', '@admin', 'admin.com', 'twitter: @admin', 'jl. Kenanga V no. 30', 'bekerja', NULL, 'PT Bijaksana', 'Programmer', 'Staff', NULL, 'Web design', NULL, 'ya', '2018-02-07 13:08:06', '2018-02-07 13:08:06'),
(5, 'a', '2016', 'a', 'a', 1, 'a', 'aa', 'a', 'a', NULL, NULL, 'a', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'a', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_02_06_184838_create_data_table', 2),
(4, '2018_02_07_093221_modify_data_table', 3),
(5, '2018_02_07_111025_update_datas_table', 4),
(6, '2018_02_07_165019_create_admins_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datas`
--
ALTER TABLE `datas`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `datas`
--
ALTER TABLE `datas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
