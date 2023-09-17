-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Sep 2023 pada 16.54
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jdih`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `informasi_hukum`
--

CREATE TABLE `informasi_hukum` (
  `id` smallint(5) NOT NULL,
  `tipe_informasi` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `informasi_hukum`
--

INSERT INTO `informasi_hukum` (`id`, `tipe_informasi`, `judul`, `status`, `created_at`, `updated_at`) VALUES
(13, 'Artikel Hukum', 'Penyelenggaraan Kabupaten Layak Anak', 'Terbit', NULL, NULL),
(14, 'Monografi Hukum', 'Pertanggungjawaban Pelaksanaan Anggaran Pendapatan dan Belanja Daerah Tahun Anggaran 2021', 'Draft', NULL, NULL),
(15, 'Yurisprudensi', 'Perubahan Anggaran Pendapatan dan Belanja Daerah Kabupaten Magetan Tahun Anggaran 2022', 'Terbit', NULL, NULL),
(16, 'Perjanjian', 'Penyertaan Modal Daerah Kepada Perusahaan Daerah Bank Pembiayaan Rakyat Syariah Magetan', 'Terbit', NULL, NULL),
(17, 'Berita Hukum', 'Penyertaan Modal Daerah Pada Perseroan Terbatas Bank Perkreditan Rakyat Jawa Timur Bank Usaha Mikro Kecil dan Menengah Jawa Timur', 'Draft', NULL, NULL),
(18, 'Berita Hukum', 'Anggaran Pendapatan dan Belanja Daerah Kabupaten Magetan Tahun Angagaran 2023', 'Draft', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan_hukum`
--

CREATE TABLE `kegiatan_hukum` (
  `id` smallint(5) NOT NULL,
  `tipe_kegiatan` varchar(50) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kegiatan_hukum`
--

INSERT INTO `kegiatan_hukum` (`id`, `tipe_kegiatan`, `judul`, `status`) VALUES
(1, 'Sosialisasi Produk Hukum', 'Penyelenggaraan Kabupaten Layak Anak', 'Terbit'),
(2, 'Konsultasi Publik', 'Pertanggungjawaban Pelaksanaan Anggaran Pendapatan dan Belanja Daerah Tahun Anggaran 2021', 'Draft'),
(3, 'Pembinaan/ Penyuluhan', 'Perubahan Anggaran Pendapatan dan Belanja Daerah Kabupaten Magetan Tahun Anggaran 2022', 'Terbit'),
(4, 'Rapat', 'Penyertaan Modal Daerah Kepada Perusahaan Daerah Bank Pembiayaan Rakyat Syariah Magetan', 'Terbit'),
(5, 'Lain - lain', 'Penyertaan Modal Daerah Pada Perseroan Terbatas Bank Perkreditan Rakyat Jawa Timur Bank Usaha Mikro Kecil dan Menengah Jawa Timur', 'Draft'),
(6, 'Lain - lain', 'Anggaran Pendapatan dan Belanja Daerah Kabupaten Magetan Tahun Anggaran 2023', 'Draft');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_30_133447_create_informasi_hukum_table', 1),
(6, '2023_08_31_022349_create_produk_hukum_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `produk_hukum`
--

CREATE TABLE `produk_hukum` (
  `id` smallint(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tahun` int(11) NOT NULL,
  `tipe_informasi` varchar(255) NOT NULL,
  `id_tipe` int(10) NOT NULL,
  `judul_informasi` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produk_hukum`
--

INSERT INTO `produk_hukum` (`id`, `created_at`, `updated_at`, `tahun`, `tipe_informasi`, `id_tipe`, `judul_informasi`, `status`) VALUES
(2, NULL, NULL, 2022, 'Berita', 0, 'Penyelenggaraan Kabupaten Layak Anak ', 'Berlaku'),
(3, NULL, NULL, 2022, 'Artikel', 0, 'Pertanggungjawaban Pelaksanaan Anggaran Pendapatan dan Belanja Daerah Tahun Anggaran 2021', 'Draft'),
(4, NULL, NULL, 2022, 'Artikel', 0, 'Perubahan Anggaran Pendapatan dan Belanja Daerah Kabupaten Magetan Tahun Anggaran 2022', 'Terbit'),
(5, NULL, NULL, 2022, 'Sosialisasi Produk Hukum', 0, 'Penyertaan Modal Daerah Kepada Perusahaan Daerah Bank Pembiayaan Rakyat Syariah Magetan', 'Diubah'),
(6, NULL, NULL, 2022, 'Sosialisasi Produk Hukum', 0, 'Penyertaan Modal Daerah Pada Perseroan Terbatas Bank Perkreditan Rakyat Jawa Timur Bank Usaha Mikro Kecil dan Menengah Jawa Timur', 'Mengubah'),
(8, NULL, NULL, 2022, 'Peraturan Daerah', 0, 'Anggaran Pendapatan dan Belanja Daerah Kabupaten Magetan Tahun Anggaran 2023', 'Dicabut');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_dokumen`
--

CREATE TABLE `tipe_dokumen` (
  `id_tipe` int(10) NOT NULL,
  `nama_tipe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tipe_dokumen`
--

INSERT INTO `tipe_dokumen` (`id_tipe`, `nama_tipe`) VALUES
(1, 'Peraturan Daerah'),
(2, 'Peraturan Bupati'),
(3, 'Keputusan Bupati'),
(4, 'Intruksi Bupati'),
(5, 'Peraturan Desa'),
(6, 'Peraturan Bersama Bupati'),
(7, 'Peraturan Bersama Kepala Desa'),
(8, 'Peraturan Kepala Desa'),
(9, 'Rancangan Peraturan Daerah'),
(10, 'Rancangan Peraturan Bupati');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `informasi_hukum`
--
ALTER TABLE `informasi_hukum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatan_hukum`
--
ALTER TABLE `kegiatan_hukum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `produk_hukum`
--
ALTER TABLE `produk_hukum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tipe_dokumen`
--
ALTER TABLE `tipe_dokumen`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `informasi_hukum`
--
ALTER TABLE `informasi_hukum`
  MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `kegiatan_hukum`
--
ALTER TABLE `kegiatan_hukum`
  MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk_hukum`
--
ALTER TABLE `produk_hukum`
  MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tipe_dokumen`
--
ALTER TABLE `tipe_dokumen`
  MODIFY `id_tipe` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
