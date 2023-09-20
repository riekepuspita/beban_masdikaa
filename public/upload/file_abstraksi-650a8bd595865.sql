-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Sep 2023 pada 02.40
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
  `id_tahun` int(11) NOT NULL,
  `id_tipe` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `badan_pengarang` varchar(150) NOT NULL,
  `no_peraturan` int(11) NOT NULL,
  `no_panggil` varchar(100) NOT NULL,
  `jenis_bentuk_peraturan` varchar(100) NOT NULL,
  `singkatan_jenis` varchar(100) NOT NULL,
  `cetakan_edisi` varchar(100) NOT NULL,
  `tempat_terbit` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tanggal_penetapan` date NOT NULL,
  `deskripsi_fisik` varchar(255) NOT NULL,
  `sumber` varchar(100) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `id_status` smallint(6) NOT NULL,
  `bahasa` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `abstraksi` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `file_peraturan` text NOT NULL DEFAULT 'kosong',
  `file_abstraksi` text NOT NULL DEFAULT 'kosong'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produk_hukum`
--

INSERT INTO `produk_hukum` (`id`, `created_at`, `updated_at`, `id_tahun`, `id_tipe`, `judul`, `badan_pengarang`, `no_peraturan`, `no_panggil`, `jenis_bentuk_peraturan`, `singkatan_jenis`, `cetakan_edisi`, `tempat_terbit`, `penerbit`, `tanggal_penetapan`, `deskripsi_fisik`, `sumber`, `subjek`, `isbn`, `id_status`, `bahasa`, `lokasi`, `abstraksi`, `catatan`, `file_peraturan`, `file_abstraksi`) VALUES
(21, NULL, NULL, 3, 3, 'Penyelenggaraan Kabupaten Layak Anak', 'drwe4', 4, 'ref', 'frve', 'frev', 'refrf', 'fre', 'rewf', '2023-09-12', 'regwsr', 'sfbz', 'gvdfs', 'vfdsv', 7, 'fvdzsv', 'vfds', 'vdfzsbf', 'vfdbsvz', 'kosong', 'kosong'),
(22, NULL, NULL, 3, 7, 'Pertanggungjawaban Pelaksanaan Anggaran Pendapatan dan Belanja Daerah Tahun Anggaran 2021', 'jsdkfekhbsbugakfiulsegkhe', 5, 'gfsherbtrsj4strh', 'gdfsbesfvzga', 'fdsegvfgdb', 'gfszfdre', 'bdfzxvdbfbdf', 'bfdsbzbfbs', '2023-09-05', 'fdsjndtykjz', 'fvdsfas', 'vdfsbsed', 'fsdavgrgrw', 6, 'vdsedvsfdsg', 'fsdvgrdsgft', 'djxgrsdh', 'dfhxjtytgfc', 'kosong', 'kosong'),
(23, '2023-09-12 18:59:14', '2023-09-12 18:59:14', 3, 4, 'Perubahan Anggaran Pendapatan dan Belanja Daerah Kabupaten Magetan Tahun Anggaran 2022', 'ush', 5, 'dhs', 's', 's', 's', 's', 's,;ll;', '2023-09-29', 's', 's', 'ss', 's', 8, 's', 's', 'nd', 's', 'kosong', 'kosong'),
(24, NULL, NULL, 3, 5, 'Penyertaan Modal Daerah Kepada Perusahaan Daerah Bank Pembiayaan Rakyat Syariah Magetan', 'efdscdf', 3, 'dsvfdvfdsvz', 'cdsvfd', 'fdvsfd', 'tbdgb', 'gfdsfgf', 'vfdv fb', '2023-09-05', 'bfd gbd', 'grbfdvr', 'rsvfvr', 'gfvrevr', 8, 'grfvfd', 'rbervgr', 'erfcd', 'fefefwe', 'kosong', 'kosong'),
(25, NULL, NULL, 3, 8, 'Penyertaan Modal Daerah Pada Perseroan Terbatas Bank Perkreditan Rakyat Jawa Timur Bank Usaha Mikro Kecil dan Menengah Jawa Timur', 'dsbdgb', 4, 'gtresvg', 'gtrevgt', 'brdvfrs', 'vfrge', 'vfrbtr', 'bvtrbr', '2023-09-05', 'gvrtbevrf', 'vtresr', 'vtrsvf', 'vrsf', 9, 'fres', 'vresv', 'vrsv', 'trbgbt', 'kosong', 'kosong'),
(26, NULL, NULL, 3, 1, 'Anggaran Pendapatan dan Belanja Daerah Kabupaten Magetan Tahun Anggaran 2023', 'refbvfv', 45, 'vresf', 'gesvd', 'vefdv', 'berr', 'bsevv', 'vfvrsr', '2023-09-15', 'ferwvest', 'vresvf', 'vrfeswt', 'vewbre', 10, 'gtrewrf', 'tgtrh', 'htrdb', 'gbfrdgt', 'kosong', 'kosong'),
(27, '2023-09-17 21:34:52', '2023-09-17 21:34:52', 6, 4, 'dgdshehrf', 'fdb', 3, 'gdsag', 'sgzv', 'vds', 'ewgw', 'ewgew', 'dvsf', '2023-09-28', 'ewfsd', 'fef', 'fewf', 'grgsd', 7, 'fsdf', 'fdf', 'fdafaw', 'feawfwq', 'C:\\fakepath\\213307053_Rieke Puspita Sari_Laporan Pertemuan 11.pdf', 'C:\\fakepath\\213307053_Rieke Puspita Sari_Tugas Pertemuan 2.pdf'),
(28, '2023-09-17 21:39:24', '2023-09-17 21:39:24', 6, 1, 's', 'ww', 66, 'w', 'd', 'd', 'd', 'd', 'd', '2023-09-09', 'd', 'd', 'd', 'd', 8, 'd', 'd', 'd', 'd', 'C:\\fakepath\\RUNDOWN PENGAJIAN HIMATIF 2023.pdf', 'C:\\fakepath\\213307031_Adamyasin_AUTOPSY.pdf'),
(29, '2023-09-18 00:56:20', '2023-09-18 00:56:20', 7, 6, 'gdzfs', 'dsag', 78, 'dfdf', 'dsfs', 'vfsv', 'vdsv', 'bfd', 'sd', '2023-09-20', 'dhthr', 'ersg', 'gre', 'grae', 7, 'graeg', 'res', 'ger', 'dfstr', 'C:\\fakepath\\092_Permohonan Izin TICM_ (1).docx', 'C:\\fakepath\\LPJ BAGI TAKJIL DAN BUKBER HIMATIF 2023.docx'),
(30, '2023-09-18 01:10:02', '2023-09-18 01:10:02', 3, 6, 'd', 'd', 98, 'jk', 'dh', 'd', 'd', 'd', 'd', '2023-09-19', 'd', 'd', 'd', 'd', 8, 'd', 'd', 's', 'd', 'C:\\fakepath\\092_Permohonan Izin TICM_ (1).docx', 'C:\\fakepath\\LPJ SOSMA 2023.docx'),
(31, '2023-09-18 21:46:42', '2023-09-18 21:46:42', 6, 6, 'hfdxhdfx', 'dffd', 543, 'dfs', 'dfh', 'greg', 'dfgv', 'dvsvd', 'bgb', '2023-09-21', 'fdxbdfxb', 'ff', 'gfg', 'hmg', 7, 'tttttth', 'fd', 'ergfb', 'bgtr', 'C:\\fakepath\\092_Permohonan Izin TICM_ (1).docx', 'C:\\fakepath\\Laporan  PKL Masdika 1.0.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` smallint(6) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(6, 'Draft'),
(7, 'Berlaku'),
(8, 'Diubah'),
(9, 'Mengubah'),
(10, 'Dicabut');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` int(10) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tahun`
--

INSERT INTO `tahun` (`id_tahun`, `tahun`) VALUES
(1, 2020),
(2, 2021),
(3, 2022),
(4, 2023),
(5, 2024),
(6, 2025),
(7, 2026),
(8, 2027),
(9, 2028),
(10, 2029),
(11, 2030),
(12, 2031),
(13, 2032),
(14, 2033),
(15, 2034),
(16, 2035);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `relasi_id_tipe` (`id_tipe`),
  ADD KEY `relasi_id_status` (`id_status`),
  ADD KEY `relasi_id_tahun` (`id_tahun`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id_tahun`);

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
  MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id_status` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id_tahun` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `produk_hukum`
--
ALTER TABLE `produk_hukum`
  ADD CONSTRAINT `relasi_id_status` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relasi_id_tahun` FOREIGN KEY (`id_tahun`) REFERENCES `tahun` (`id_tahun`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relasi_id_tipe` FOREIGN KEY (`id_tipe`) REFERENCES `tipe_dokumen` (`id_tipe`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
