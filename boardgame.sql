-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2022 pada 06.56
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boardgame`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `boardgame`
--

CREATE TABLE `boardgame` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `boardgame_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `boardgame_harga_beli` int(11) NOT NULL,
  `boardgame_harga_jual` int(11) NOT NULL,
  `boardgame_stok` int(11) NOT NULL,
  `boardgame_gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `boardgame_genre` int(11) NOT NULL,
  `boardgame_deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `boardgame`
--

INSERT INTO `boardgame` (`id`, `boardgame_nama`, `boardgame_harga_beli`, `boardgame_harga_jual`, `boardgame_stok`, `boardgame_gambar`, `boardgame_genre`, `boardgame_deskripsi`) VALUES
(1, 'MONOPOLY', 250000, 40000, 20, 'images/Boardgame/02-05-2022/02052022041408.jpg', 1, 'ini deksprisi'),
(2, 'MONOPOLY2', 250000, 400000, 20, 'images/Boardgame/02-05-2022/02052022045436.jpg', 2, 'ini deksprisi'),
(3, 'MONOPOLY3', 250000, 400000, 30, 'images/Boardgame/02-05-2022/02052022045454.jpg', 3, 'ini deksprisi'),
(4, 'MONOPOLY4', 250000, 400000, 12, 'images/Boardgame/02-05-2022/02052022045515.jpg', 4, 'ini deksprisi'),
(5, 'MONOPOLY5', 250000, 400000, 12, 'images/Boardgame/02-05-2022/02052022045538.jpg', 5, 'ini deksprisi'),
(6, 'MONOPOLY', 2500000, 400000, 12, 'images/Boardgame/02-05-2022/02052022045622.jpg', 1, 'ini gambar'),
(7, 'Mahjong', 50000, 500000, 20, 'images/Boardgame/02-05-2022/02052022050430.jpg', 2, 'ini deksprisi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `boardgame_genre`
--

CREATE TABLE `boardgame_genre` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `boardgame_genre`
--

INSERT INTO `boardgame_genre` (`id`, `nama_genre`, `created_at`, `updated_at`) VALUES
(1, 'Table Top', NULL, NULL),
(2, 'Abstract', NULL, NULL),
(3, 'Bluffing', NULL, NULL),
(4, 'Children Game', NULL, NULL),
(5, 'Card Games', NULL, NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--

CREATE TABLE `invoice` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_tanggal` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `boardgame_id` int(11) NOT NULL,
  `boargame_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `boargame_harga_jual` int(11) NOT NULL,
  `jumlah_boardgame` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `grandtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(23, '2022_04_05_104757_rating', 1),
(24, '2022_04_05_105954_invoice', 1),
(25, '2022_04_05_110012_boardgame', 1),
(26, '2022_04_05_110025_refund', 1),
(27, '2022_04_15_072436_boardgame_genre', 1),
(28, '2022_05_02_032031_change_boardgame_genre_on_boardgame_table', 2);

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
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `boardgame_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `boardgame_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `boargame_harga_beli` int(11) NOT NULL,
  `boargame_harga_jual` int(11) NOT NULL,
  `boargame_stok` int(11) NOT NULL,
  `boardgame_gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `boardgame_genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `boardgame_deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `refund`
--

CREATE TABLE `refund` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `refund_tanggal` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `boardgame_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `boardgame_harga_beli` int(11) NOT NULL,
  `refund_jumlah` int(11) NOT NULL,
  `refund_subtotal` int(11) NOT NULL,
  `refund_grandtotal` int(11) NOT NULL,
  `refund_alasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refund_status` enum('proces','done') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'proces'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','customer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `alamat`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'novand', '$2y$10$O.unalKB8vTX7MxMJzH8H.cMVr94BNmfDsMuPkNi.6RJgirhGGlZ2', 'admin', 'admin@gmail.com', 'Blimbing', 'admin', NULL, '2022-04-28 22:35:38', '2022-04-28 22:35:38'),
(2, 'novanda', '$2y$10$rIF.PsuBvAGqZxxHQMNWQeoncXTJx1kKrLWfJEyPckbKkbYNZkCua', 'novanda', 'novandkensela@gmail.com', 'Blimbing', 'customer', NULL, '2022-05-01 21:18:07', '2022-05-01 21:18:07');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `boardgame`
--
ALTER TABLE `boardgame`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `boardgame_genre`
--
ALTER TABLE `boardgame_genre`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `invoice`
--
ALTER TABLE `invoice`
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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `refund`
--
ALTER TABLE `refund`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `boardgame`
--
ALTER TABLE `boardgame`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `boardgame_genre`
--
ALTER TABLE `boardgame_genre`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rating`
--
ALTER TABLE `rating`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `refund`
--
ALTER TABLE `refund`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
