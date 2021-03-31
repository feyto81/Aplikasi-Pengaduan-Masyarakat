-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 31 Mar 2021 pada 19.28
-- Versi server: 5.7.24
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pengaduan_masyarakat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `complaint`
--

CREATE TABLE `complaint` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_complaint` date NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contents_of_the_report` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','process','finished') COLLATE utf8mb4_unicode_ci NOT NULL,
  `society_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `complaint`
--

INSERT INTO `complaint` (`id`, `date_complaint`, `nik`, `contents_of_the_report`, `photo`, `status`, `society_id`, `created_at`, `updated_at`) VALUES
(1, '2021-03-31', '3320090507890001', 'Contoh', '1617197684_wkwkwkw.png', 'finished', 3, '2021-03-31 06:34:44', '2021-03-31 10:06:38'),
(6, '2021-03-31', '3320090507890001', 'sasasasasasasasa', '1617213291_si.png', '0', 3, '2021-03-31 10:54:51', '2021-03-31 10:54:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '2021-03-27 20:16:57', '2021-03-27 20:16:57'),
(2, 'Officer', '2021-03-27 20:16:57', '2021-03-27 20:16:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_03_28_031232_create_level_table', 1),
(4, '2021_03_28_031306_create_users_table', 1),
(5, '2021_03_31_055245_create_society_table', 2),
(6, '2021_03_31_064228_create_complaint_table', 3),
(7, '2021_03_31_073053_create_users_table', 4),
(8, '2021_03_31_074550_create_complaint_table', 5),
(9, '2021_03_31_074755_create_society_table', 6),
(10, '2021_03_31_074925_create_complaint_table', 7),
(11, '2021_03_31_155350_create_response_table', 8),
(12, '2021_03_31_160001_create_response_table', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `response`
--

CREATE TABLE `response` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `complaint_id` bigint(20) UNSIGNED DEFAULT NULL,
  `response_date` date DEFAULT NULL,
  `response` text COLLATE utf8mb4_unicode_ci,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `response`
--

INSERT INTO `response` (`id`, `complaint_id`, `response_date`, `response`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-03-31', 'jshdjhsjdhshgd', 1, '2021-03-31 16:43:24', '2021-03-31 16:43:24'),
(4, 6, '2021-03-31', 'dsdsadsadadas', 1, '2021-03-31 10:54:51', '2021-03-31 10:57:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `society`
--

CREATE TABLE `society` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `society`
--

INSERT INTO `society` (`id`, `nik`, `name`, `username`, `photo`, `password`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, '23723654635465', 'gsfagfsg', 'sashags', '1617177284_Foto formal.jpg', '$2y$10$KSC.8qWGyclU09AsWwrXUupGGpQE.mcGR/XAe5x.wijTaTYQLDmXu', '2362365', 'sasgahgs', '2021-03-31 00:54:44', '2021-03-31 00:54:44'),
(2, '6463435463546', 'feyto', 'feyto', '1617183923_si.png', '$2y$10$3uaecEENfmjgr/czPb4cleX9lM5zohwPnJsPFFCHm/m39JIla7l9a', '028323728738', 'Jepara', '2021-03-31 02:45:23', '2021-03-31 02:45:23'),
(3, '3320090507890001', 'Aan Febriyan', 'admin@gmail.com', '1617187306_pikri.png', '$2y$10$zo1/l3yyn934nPh9azcUXe/j9yb5FZ/vU6B/78e/7VRDBRxThMaIq', '08058848239', 'K', '2021-03-31 03:41:46', '2021-03-31 03:41:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `officer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `officer_name`, `email`, `username`, `password`, `phone_number`, `photo`, `level_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'Administrator', '$2y$10$bc5l5Is.lMXEDgfAchOrCOEVcNOw8HHmaFXWiNXzlUTlqe4lJJcLi', '088228740010', '1617176493_Foto formal.jpg', 1, NULL, '2021-03-31 00:32:59', '2021-03-31 00:41:33'),
(2, 'officer', 'officer@gmail.com', 'Officer', '$2y$10$kiRzS3jVWoBguVNHUG8nj.Du3rXyPMplnxYHFPgbZKLNCB3IlPZom', '088228740010', '1617176393_09597c6863c22f68cc63cbb2c6b42a72.jpg', 2, NULL, '2021-03-31 00:33:00', '2021-03-31 00:39:53');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`),
  ADD KEY `complaint_society_id_foreign` (`society_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id`),
  ADD KEY `response_complaint_id_foreign` (`complaint_id`),
  ADD KEY `response_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `society`
--
ALTER TABLE `society`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_level_id_foreign` (`level_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `response`
--
ALTER TABLE `response`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `society`
--
ALTER TABLE `society`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_society_id_foreign` FOREIGN KEY (`society_id`) REFERENCES `society` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `response`
--
ALTER TABLE `response`
  ADD CONSTRAINT `response_complaint_id_foreign` FOREIGN KEY (`complaint_id`) REFERENCES `complaint` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `response_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `level` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
