-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Sep 2025 pada 16.36
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_arsip_surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`) VALUES
(1, 'Undangan', '2025-09-03 06:53:16'),
(2, 'Pengumuman', '2025-09-03 06:53:16'),
(3, 'Nota Dinas', '2025-09-03 06:53:16'),
(4, 'Pemberitahuan', '2025-09-03 06:53:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `letters`
--

CREATE TABLE `letters` (
  `id` int(11) NOT NULL,
  `number` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `origin` varchar(150) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `original_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `letters`
--

INSERT INTO `letters` (`id`, `number`, `title`, `origin`, `category_id`, `file_name`, `original_name`, `created_at`) VALUES
(6, '2025/PD01/TU/001', 'Undangan Rapat', '', 1, '1757307490_5258957918495f1d92a0.pdf', 'Undangan.pdf', '2025-09-08 04:58:10'),
(8, '2025/PD03/TU/003', 'Kerja Bakti', '', 2, '1757311705_5acaac627f847f39a375.pdf', 'Pengumuman (1).pdf', '2025-09-08 06:08:25'),
(9, '2025/PD02/TU/002', 'Perjalanan Dinas', '', 3, '1757311791_81e1b72f6106a03f8168.pdf', 'Nota Dinas.pdf', '2025-09-08 06:09:51'),
(10, '2025/PD04/TU/004', 'Pelayanan Administrasi ditutup', '', 4, '1757311867_8d73d44e6afa00da3d75.pdf', 'Pemberitahuan.pdf', '2025-09-08 06:11:07');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `letters`
--
ALTER TABLE `letters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cat` (`category_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `letters`
--
ALTER TABLE `letters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `letters`
--
ALTER TABLE `letters`
  ADD CONSTRAINT `fk_cat` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
