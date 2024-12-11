-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for pplprak
DROP DATABASE IF EXISTS `pplprak`;
CREATE DATABASE IF NOT EXISTS `pplprak` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `pplprak`;

-- Dumping structure for table pplprak.dosen
DROP TABLE IF EXISTS `dosen`;
CREATE TABLE IF NOT EXISTS `dosen` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_kantor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang_keahlian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dosen_nip_unique` (`nip`),
  UNIQUE KEY `dosen_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pplprak.dosen: ~10 rows (approximately)
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

-- Dumping structure for table pplprak.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pplprak.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table pplprak.jadwal_konsultasis
DROP TABLE IF EXISTS `jadwal_konsultasis`;
CREATE TABLE IF NOT EXISTS `jadwal_konsultasis` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `tanggal_konsultasi` date NOT NULL,
  `waktu_konsultasi` time NOT NULL,
  `topik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Approved','Revised','Waiting Approval','') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Waiting Approval',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hasil_bimbingan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumentasi_bimbingan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `jadwal_konsultasis_user_id_foreign` (`user_id`),
  CONSTRAINT `jadwal_konsultasis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pplprak.jadwal_konsultasis: ~0 rows (approximately)
INSERT INTO `jadwal_konsultasis` (`id`, `user_id`, `tanggal_konsultasi`, `waktu_konsultasi`, `topik`, `status`, `created_at`, `updated_at`, `hasil_bimbingan`, `dokumentasi_bimbingan`) VALUES
	(1, 1, '2024-11-12', '00:00:00', 'dddd', 'Revised', '2024-11-12 07:43:05', '2024-11-25 18:13:57', 'hasil_bimbingan/KqsjpJNmJ73Z4XNtgAbp6h1PSJ2V4Wx7hUkpdKej.png', NULL);

-- Dumping structure for table pplprak.koordinators
DROP TABLE IF EXISTS `koordinators`;
CREATE TABLE IF NOT EXISTS `koordinators` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_kantor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang_keahlian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `koordinators_nip_unique` (`nip`),
  UNIQUE KEY `koordinators_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pplprak.koordinators: ~0 rows (approximately)
INSERT INTO `koordinators` (`id`, `name`, `nip`, `email`, `password`, `tanggal_lahir`, `alamat_kantor`, `no_hp`, `bidang_keahlian`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'nania', '187221051', 'nania@gmail.com', '$2y$10$arUzE.x0Y9KkkwG/KwCWgeHZO6zUefnoYdDVlTluApcm0.ty9d6fi', '2024-11-16', 'UNAIR', '082141788027', 'science', NULL, NULL, '2024-11-16 09:38:24');

-- Dumping structure for table pplprak.logbooks
DROP TABLE IF EXISTS `logbooks`;
CREATE TABLE IF NOT EXISTS `logbooks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `kegiatan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumentasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `logbooks_user_id_foreign` (`user_id`),
  CONSTRAINT `logbooks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pplprak.logbooks: ~3 rows (approximately)
INSERT INTO `logbooks` (`id`, `tanggal`, `kegiatan`, `dokumentasi`, `created_at`, `updated_at`, `user_id`) VALUES
	(1, '2024-11-12', 'sssssss', '1731424222.png', '2024-11-12 08:10:22', '2024-11-12 08:10:22', 1),
	(2, '2024-11-12', 'punya alis', '1731424222.png', '2024-11-12 08:10:22', '2024-11-12 08:10:22', 3),
	(3, '2024-11-12', 'punya user id 2', '1731424222.png', '2024-11-12 08:10:22', '2024-11-12 08:10:22', 2);

-- Dumping structure for table pplprak.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pplprak.migrations: ~17 rows (approximately)
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
	(14, '2024_11_14_102107_add_user_id_to_seminar_applications_table', 5),
	(27, '2024_11_20_164332_create_seminars_table', 6),
	(28, '2024_11_29_013606_create_surats_table', 6),
	(29, '2024_11_29_015832_create_surat_users_table', 6);

-- Dumping structure for table pplprak.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pplprak.password_resets: ~0 rows (approximately)

-- Dumping structure for table pplprak.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pplprak.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table pplprak.seminars
DROP TABLE IF EXISTS `seminars`;
CREATE TABLE IF NOT EXISTS `seminars` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pplprak.seminars: ~0 rows (approximately)

-- Dumping structure for table pplprak.seminar_applications
DROP TABLE IF EXISTS `seminar_applications`;
CREATE TABLE IF NOT EXISTS `seminar_applications` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `judul_pkl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_pkl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosen_pembimbing` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_seminar` date NOT NULL,
  `laporan_pkl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_persetujuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `seminar_applications_user_id_foreign` (`user_id`),
  CONSTRAINT `seminar_applications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pplprak.seminar_applications: ~0 rows (approximately)
INSERT INTO `seminar_applications` (`id`, `user_id`, `judul_pkl`, `tempat_pkl`, `dosen_pembimbing`, `tanggal_seminar`, `laporan_pkl`, `bukti_persetujuan`, `created_at`, `updated_at`) VALUES
	(1, 1, 'PKL', 'UNAIR', '1', '2024-11-16', 'nnnn', 'nnn', NULL, NULL);

-- Dumping structure for table pplprak.surats
DROP TABLE IF EXISTS `surats`;
CREATE TABLE IF NOT EXISTS `surats` (
  `id_surat` bigint unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filepath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doswal_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wkt_start` date DEFAULT NULL,
  `wkt_end` date DEFAULT NULL,
  `koprodi_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koprodi_nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dosbing_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surat_ditujukan_kepada` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_lembaga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keperluan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_surat`)
) ENGINE=InnoDB AUTO_INCREMENT=1817468067861190 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pplprak.surats: ~0 rows (approximately)
INSERT INTO `surats` (`id_surat`, `filename`, `filepath`, `creator`, `prodi`, `doswal_name`, `wkt_start`, `wkt_end`, `koprodi_name`, `koprodi_nip`, `dosbing_name`, `surat_ditujukan_kepada`, `nama_lembaga`, `alamat`, `keperluan`, `created_at`, `updated_at`) VALUES
	(1817468067861189, 'proposal_1817468067861189.pdf', '../storage/app/public/proposal_1817468067861189.pdf', '187221053', 'Teknik Informatika', 'Pak Eto', '2023-03-21', '2023-03-21', 'Pak Hendra', '198505152010121002', 'Billy Alexander Sugiyanti', 'HRD BCA', 'BCA', 'Alamatnya BCA', 'PKL Magang', '2024-12-03 17:36:57', '2024-12-03 17:37:51');

-- Dumping structure for table pplprak.surat_users
DROP TABLE IF EXISTS `surat_users`;
CREATE TABLE IF NOT EXISTS `surat_users` (
  `id_surat` bigint unsigned NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  KEY `surat_users_id_surat_foreign` (`id_surat`),
  KEY `surat_users_nim_foreign` (`nim`),
  CONSTRAINT `surat_users_id_surat_foreign` FOREIGN KEY (`id_surat`) REFERENCES `surats` (`id_surat`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `surat_users_nim_foreign` FOREIGN KEY (`nim`) REFERENCES `users` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pplprak.surat_users: ~1 rows (approximately)
INSERT INTO `surat_users` (`id_surat`, `nim`, `is_active`) VALUES
	(1817468067861189, '1234567801', 1),
	(1817468067861189, '187221053', 1);

-- Dumping structure for table pplprak.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `dosen_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_studi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_nim_unique` (`nim`),
  KEY `users_dosen_id_foreign` (`dosen_id`),
  CONSTRAINT `users_dosen_id_foreign` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pplprak.users: ~10 rows (approximately)
INSERT INTO `users` (`id`, `dosen_id`, `name`, `email`, `password`, `nim`, `program_studi`, `alamat`, `no_hp`, `tanggal_lahir`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 1, 'John Doe', 'user1@example.com', '$2y$10$VQ8k9o2M/Uv/g2XFrnbVGOIibZQet0.T1GDY4/Dkk3mvyfmmexU7K', '187221053', 'Informatika', 'Jalan A No. 1, Kota XYZ', '081234567800', '1990-01-15', 'ubLcxMFpj5wMJOa0q7EAxRWMsP5eroQDtVK4zkn3Up4hWcBTj1BwPMO3Nb3w', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
	(2, 2, 'Jane Smith', 'user2@example.com', '$2y$10$VQ8k9o2M/Uv/g2XFrnbVGOIibZQet0.T1GDY4/Dkk3mvyfmmexU7K', '1234567801', 'Sistem Informasi', 'Jalan B No. 2, Kota XYZ', '081234567801', '1991-02-15', 's5fvu74UxbEj4ifYsFbUrYLVtLJX71Zf0P6Pi9K5oChCKO2cINcEyZPb1wmA', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
	(3, 1, 'Alice Brown', 'user3@example.com', '$2y$10$VQ8k9o2M/Uv/g2XFrnbVGOIibZQet0.T1GDY4/Dkk3mvyfmmexU7K', '1234567802', 'Teknik Komputer', 'Jalan C No. 3, Kota XYZ', '081234567802', '1992-03-15', 'ghi34567', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
	(4, 3, 'Bob White', 'user4@example.com', '$2y$10$VQ8k9o2M/Uv/g2XFrnbVGOIibZQet0.T1GDY4/Dkk3mvyfmmexU7K', '1234567803', 'Teknik Elektro', 'Jalan D No. 4, Kota XYZ', '081234567803', '1993-04-15', 'jkl45678', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
	(5, 5, 'Charlie Green', 'user5@example.com', '$2y$10$VQ8k9o2M/Uv/g2XFrnbVGOIibZQet0.T1GDY4/Dkk3mvyfmmexU7K', '1234567804', 'Manajemen Informatika', 'Jalan E No. 5, Kota XYZ', '081234567804', '1994-05-15', 'mno56789', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
	(6, 8, 'Daisy Black', 'user6@example.com', '$2y$10$VQ8k9o2M/Uv/g2XFrnbVGOIibZQet0.T1GDY4/Dkk3mvyfmmexU7K', '1234567805', 'Teknik Informatika', 'Jalan F No. 6, Kota XYZ', '081234567805', '1995-06-15', 'pqr67890', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
	(7, 1, 'Eve Blue', 'user7@example.com', '$2y$10$VQ8k9o2M/Uv/g2XFrnbVGOIibZQet0.T1GDY4/Dkk3mvyfmmexU7K', '1234567806', 'Komputer Akuntansi', 'Jalan G No. 7, Kota XYZ', '081234567806', '1996-07-15', 'stu78901', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
	(8, 1, 'Frank Yellow', 'user8@example.com', '$2y$10$VQ8k9o2M/Uv/g2XFrnbVGOIibZQet0.T1GDY4/Dkk3mvyfmmexU7K', '1234567807', 'Teknik Sipil', 'Jalan H No. 8, Kota XYZ', '081234567807', '1997-08-15', 'vwx89012', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
	(9, 2, 'Grace Pink', 'user9@example.com', '$2y$10$VQ8k9o2M/Uv/g2XFrnbVGOIibZQet0.T1GDY4/Dkk3mvyfmmexU7K', '1234567808', 'Teknik Mesin', 'Jalan I No. 9, Kota XYZ', '081234567808', '1998-09-15', 'yz012345', '2024-01-01 03:00:00', '2024-01-01 03:00:00'),
	(10, 2, 'Henry Purple', 'user10@example.com', '$2y$10$VQ8k9o2M/Uv/g2XFrnbVGOIibZQet0.T1GDY4/Dkk3mvyfmmexU7K', '1234567809', 'Matematika', 'Jalan J No. 10, Kota XYZ', '081234567809', '1999-10-15', 'abc23456', '2024-01-01 03:00:00', '2024-01-01 03:00:00');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
