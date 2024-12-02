-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2024 at 03:30 AM
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
-- Database: `pplprak_katalis`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_kantor` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `bidang_keahlian` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `name`, `nip`, `email`, `password`, `tanggal_lahir`, `alamat_kantor`, `no_hp`, `bidang_keahlian`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Alan Walker', '9876543210', 'dosen1@example.com', '$2y$10$/66gYwMnYWTOQdyBrt6FMeDzNewLh0WyJ8HYfk.U8nk.vVt2YnHj2', '1980-01-20', 'Jalan Kantor A No. 1, Kampus XYZ', '089876543210', 'Kecerdasan Buatan', 'xyz12345', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
(2, 'Prof. Sarah Johnson', '9876543211', 'dosen2@example.com', '$2y$10$/66gYwMnYWTOQdyBrt6FMeDzNewLh0WyJ8HYfk.U8nk.vVt2YnHj2', '1985-02-25', 'Jalan Kantor B No. 2, Kampus XYZ', '089876543211', 'Sistem Komputer', 'abc12345', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
(3, 'Dr. Michael Brown', '9876543212', 'dosen3@example.com', '$2y$10$/66gYwMnYWTOQdyBrt6FMeDzNewLh0WyJ8HYfk.U8nk.vVt2YnHj2', '1983-03-15', 'Jalan Kantor C No. 3, Kampus XYZ', '089876543212', 'Rekayasa Perangkat Lunak', 'def23456', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
(4, 'Dr. Emily White', '9876543213', 'dosen4@example.com', '$2y$10$/66gYwMnYWTOQdyBrt6FMeDzNewLh0WyJ8HYfk.U8nk.vVt2YnHj2', '1987-04-10', 'Jalan Kantor D No. 4, Kampus XYZ', '089876543213', 'Jaringan Komputer', 'ghi34567', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
(5, 'Prof. Olivia Green', '9876543214', 'dosen5@example.com', '$2y$10$/66gYwMnYWTOQdyBrt6FMeDzNewLh0WyJ8HYfk.U8nk.vVt2YnHj2', '1990-05-30', 'Jalan Kantor E No. 5, Kampus XYZ', '089876543214', 'Teknik Informatika', 'jkl45678', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
(6, 'Dr. James Black', '9876543215', 'dosen6@example.com', '$2y$10$/66gYwMnYWTOQdyBrt6FMeDzNewLh0WyJ8HYfk.U8nk.vVt2YnHj2', '1992-06-12', 'Jalan Kantor F No. 6, Kampus XYZ', '089876543215', 'Teori Komputasi', 'pqr67890', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
(7, 'Dr. Linda Blue', '9876543216', 'dosen7@example.com', '$2y$10$/66gYwMnYWTOQdyBrt6FMeDzNewLh0WyJ8HYfk.U8nk.vVt2YnHj2', '1993-07-19', 'Jalan Kantor G No. 7, Kampus XYZ', '089876543216', 'Sistem Informasi', 'stu78901', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
(8, 'Prof. Robert Yellow', '9876543217', 'dosen8@example.com', '$2y$10$/66gYwMnYWTOQdyBrt6FMeDzNewLh0WyJ8HYfk.U8nk.vVt2YnHj2', '1995-08-25', 'Jalan Kantor H No. 8, Kampus XYZ', '089876543217', 'Matematika Terapan', 'vwx89012', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
(9, 'Dr. Charles Pink', '9876543218', 'dosen9@example.com', '$2y$10$/66gYwMnYWTOQdyBrt6FMeDzNewLh0WyJ8HYfk.U8nk.vVt2YnHj2', '1996-09-18', 'Jalan Kantor I No. 9, Kampus XYZ', '089876543218', 'Kecerdasan Buatan dan Pembelajaran Mesin', 'yz012345', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
(10, 'Prof. David Purple', '9876543219', 'dosen10@example.com', '$2y$10$/66gYwMnYWTOQdyBrt6FMeDzNewLh0WyJ8HYfk.U8nk.vVt2YnHj2', '1999-10-05', 'Jalan Kantor J No. 10, Kampus XYZ', '089876543219', 'Teori Algoritma', 'abc23456', '2024-01-01 03:00:00', '2024-01-01 03:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_konsultasis`
--

CREATE TABLE `jadwal_konsultasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_konsultasi` date NOT NULL,
  `waktu_konsultasi` time NOT NULL,
  `topik` varchar(255) NOT NULL,
  `status` enum('Approved','Revised','Waiting Approval','') NOT NULL DEFAULT 'Waiting Approval',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hasil_bimbingan` varchar(255) DEFAULT NULL,
  `dokumentasi_bimbingan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal_konsultasis`
--

INSERT INTO `jadwal_konsultasis` (`id`, `user_id`, `tanggal_konsultasi`, `waktu_konsultasi`, `topik`, `status`, `created_at`, `updated_at`, `hasil_bimbingan`, `dokumentasi_bimbingan`) VALUES
(1, 1, '2024-11-12', '00:00:00', 'dddd', 'Revised', '2024-11-12 07:43:05', '2024-11-25 18:13:57', 'hasil_bimbingan/KqsjpJNmJ73Z4XNtgAbp6h1PSJ2V4Wx7hUkpdKej.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `koordinators`
--

CREATE TABLE `koordinators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_kantor` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `bidang_keahlian` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `koordinators`
--

INSERT INTO `koordinators` (`id`, `name`, `nip`, `email`, `password`, `tanggal_lahir`, `alamat_kantor`, `no_hp`, `bidang_keahlian`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nania', '187221051', 'nania@gmail.com', '$2y$10$arUzE.x0Y9KkkwG/KwCWgeHZO6zUefnoYdDVlTluApcm0.ty9d6fi', '2024-11-16', 'UNAIR', '082141788027', 'science', NULL, NULL, '2024-11-16 09:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `logbooks`
--

CREATE TABLE `logbooks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `kegiatan` text NOT NULL,
  `dokumentasi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logbooks`
--

INSERT INTO `logbooks` (`id`, `tanggal`, `kegiatan`, `dokumentasi`, `created_at`, `updated_at`, `user_id`) VALUES
(1, '2024-11-12', 'sssssss', '1731424222.png', '2024-11-12 08:10:22', '2024-11-12 08:10:22', 1),
(2, '2024-11-12', 'punya alis', '1731424222.png', '2024-11-12 08:10:22', '2024-11-12 08:10:22', 3),
(3, '2024-11-12', 'punya user id 2', '1731424222.png', '2024-11-12 08:10:22', '2024-11-12 08:10:22', 2);

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2024_10_11_022432_create_logbooks_table', 1),
(5, '2024_10_11_032027_create_seminar_applications_table', 1),
(6, '2024_10_11_035256_create_users_table', 1),
(7, '2024_11_01_083109_create_jadwal_konsultasis_table', 1),
(8, '2024_11_07_101631_create_dosen_table', 1),
(9, '2024_11_07_102013_create_koordinator_table', 1),
(10, '2024_11_11_234950_create_mhs_table', 1),
(11, '2024_11_12_141518_add_user_id_to_jadwal_konsultasis_table', 2),
(12, '2024_11_12_150222_add_user_id_to_logbooks_table', 3),
(13, '2024_11_12_153800_add_dosen_id_to_users_table', 4),
(14, '2024_11_14_102107_add_user_id_to_seminar_applications_table', 5);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seminar_applications`
--

CREATE TABLE `seminar_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `judul_pkl` varchar(255) NOT NULL,
  `tempat_pkl` varchar(255) NOT NULL,
  `dosen_pembimbing` varchar(255) NOT NULL,
  `tanggal_seminar` date NOT NULL,
  `laporan_pkl` varchar(255) NOT NULL,
  `bukti_persetujuan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seminar_applications`
--

INSERT INTO `seminar_applications` (`id`, `user_id`, `judul_pkl`, `tempat_pkl`, `dosen_pembimbing`, `tanggal_seminar`, `laporan_pkl`, `bukti_persetujuan`, `created_at`, `updated_at`) VALUES
(1, 1, 'PKL', 'UNAIR', '1', '2024-11-16', 'nnnn', 'nnn', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dosen_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `program_studi` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `dosen_id`, `name`, `email`, `password`, `nim`, `program_studi`, `alamat`, `no_hp`, `tanggal_lahir`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'John Doe', 'user1@example.com', '$2y$10$VQ8k9o2M/Uv/g2XFrnbVGOIibZQet0.T1GDY4/Dkk3mvyfmmexU7K', '187221053', 'Informatika', 'Jalan A No. 1, Kota XYZ', '081234567800', '1990-01-15', 'yCEqN0j9IRVusqfQpnvpjbqte8Ud4WTvW46gnJZoFG9DsGdS352FZvz4MbzE', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
(2, 2, 'Jane Smith', 'user2@example.com', '$2y$10$VQ8k9o2M/Uv/g2XFrnbVGOIibZQet0.T1GDY4/Dkk3mvyfmmexU7K', '1234567801', 'Sistem Informasi', 'Jalan B No. 2, Kota XYZ', '081234567801', '1991-02-15', 's5fvu74UxbEj4ifYsFbUrYLVtLJX71Zf0P6Pi9K5oChCKO2cINcEyZPb1wmA', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
(3, 1, 'Alice Brown', 'user3@example.com', '$2y$10$VQ8k9o2M/Uv/g2XFrnbVGOIibZQet0.T1GDY4/Dkk3mvyfmmexU7K', '1234567802', 'Teknik Komputer', 'Jalan C No. 3, Kota XYZ', '081234567802', '1992-03-15', 'ghi34567', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
(4, 3, 'Bob White', 'user4@example.com', '$2y$10$VQ8k9o2M/Uv/g2XFrnbVGOIibZQet0.T1GDY4/Dkk3mvyfmmexU7K', '1234567803', 'Teknik Elektro', 'Jalan D No. 4, Kota XYZ', '081234567803', '1993-04-15', 'jkl45678', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
(5, 5, 'Charlie Green', 'user5@example.com', '$2y$10$VQ8k9o2M/Uv/g2XFrnbVGOIibZQet0.T1GDY4/Dkk3mvyfmmexU7K', '1234567804', 'Manajemen Informatika', 'Jalan E No. 5, Kota XYZ', '081234567804', '1994-05-15', 'mno56789', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
(6, 8, 'Daisy Black', 'user6@example.com', '$2y$10$VQ8k9o2M/Uv/g2XFrnbVGOIibZQet0.T1GDY4/Dkk3mvyfmmexU7K', '1234567805', 'Teknik Informatika', 'Jalan F No. 6, Kota XYZ', '081234567805', '1995-06-15', 'pqr67890', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
(7, 1, 'Eve Blue', 'user7@example.com', '$2y$10$VQ8k9o2M/Uv/g2XFrnbVGOIibZQet0.T1GDY4/Dkk3mvyfmmexU7K', '1234567806', 'Komputer Akuntansi', 'Jalan G No. 7, Kota XYZ', '081234567806', '1996-07-15', 'stu78901', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
(8, 1, 'Frank Yellow', 'user8@example.com', '$2y$10$VQ8k9o2M/Uv/g2XFrnbVGOIibZQet0.T1GDY4/Dkk3mvyfmmexU7K', '1234567807', 'Teknik Sipil', 'Jalan H No. 8, Kota XYZ', '081234567807', '1997-08-15', 'vwx89012', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
(9, 2, 'Grace Pink', 'user9@example.com', '$2y$10$VQ8k9o2M/Uv/g2XFrnbVGOIibZQet0.T1GDY4/Dkk3mvyfmmexU7K', '1234567808', 'Teknik Mesin', 'Jalan I No. 9, Kota XYZ', '081234567808', '1998-09-15', 'yz012345', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
(10, 2, 'Henry Purple', 'user10@example.com', '$2y$10$VQ8k9o2M/Uv/g2XFrnbVGOIibZQet0.T1GDY4/Dkk3mvyfmmexU7K', '1234567809', 'Matematika', 'Jalan J No. 10, Kota XYZ', '081234567809', '1999-10-15', 'abc23456', '2024-01-01 03:00:00', '2024-01-01 03:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dosen_nip_unique` (`nip`),
  ADD UNIQUE KEY `dosen_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jadwal_konsultasis`
--
ALTER TABLE `jadwal_konsultasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwal_konsultasis_user_id_foreign` (`user_id`);

--
-- Indexes for table `koordinators`
--
ALTER TABLE `koordinators`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `koordinators_nip_unique` (`nip`),
  ADD UNIQUE KEY `koordinators_email_unique` (`email`);

--
-- Indexes for table `logbooks`
--
ALTER TABLE `logbooks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logbooks_user_id_foreign` (`user_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `seminar_applications`
--
ALTER TABLE `seminar_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seminar_applications_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nim_unique` (`nim`),
  ADD KEY `users_dosen_id_foreign` (`dosen_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal_konsultasis`
--
ALTER TABLE `jadwal_konsultasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `koordinators`
--
ALTER TABLE `koordinators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logbooks`
--
ALTER TABLE `logbooks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seminar_applications`
--
ALTER TABLE `seminar_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal_konsultasis`
--
ALTER TABLE `jadwal_konsultasis`
  ADD CONSTRAINT `jadwal_konsultasis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `logbooks`
--
ALTER TABLE `logbooks`
  ADD CONSTRAINT `logbooks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `seminar_applications`
--
ALTER TABLE `seminar_applications`
  ADD CONSTRAINT `seminar_applications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_dosen_id_foreign` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
