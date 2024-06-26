-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2024 pada 05.18
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_trashissue`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `konfirmasi_password` varchar(255) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `username`, `email`, `password`, `konfirmasi_password`, `no_telepon`, `created_at`, `updated_at`) VALUES
(1, 'Aldi', 'k@gio', '$2y$10$Infq4jlF1KyqqfEAsgcaBuGJAvTlA3CpMkmhngbceRDME2Ac7qmdi', '', '22222', '2024-06-24 17:20:04', '2024-06-24 17:20:04'),
(4, 'Who?', 'kaada@gio', '$2y$10$ETlgv2PiR3bR8VLebwVXb.c9PmQQAB2.wtvs363BrRzDaJS/LG9xS', '', '22222', '2024-06-24 17:23:39', '2024-06-24 17:23:39'),
(5, 'Whaao?', 'kaafda@gio', '$2y$10$.xbBZTdYRaV2enXVKlWOiu2zPIDB6wpruzlIIgV7hCkDV7uubt4E6', '', '22222', '2024-06-24 17:24:41', '2024-06-24 17:24:41'),
(6, 'Whartuao?', 'kaafdaadad@gio', '$2y$10$GSxIntRPF.wUWtXnN7xQ3eZVmJJ46/2/BL0vJrcjHKhkYuTp1ldQW', '', '22222', '2024-06-24 17:25:24', '2024-06-24 17:25:24'),
(7, 'Siapa', 'Siapa@gmail.com', '$2y$10$Qfzc4oU.DD3tgCbZQSz3J..yuw2F2yUKm68Ghml2q.cdUqTVJrKcm', '', '12345', '2024-06-24 18:45:12', '2024-06-24 18:45:12'),
(8, 'Ohaa', 'Oha@gmail.com', '$2y$10$g6DuJw38AYzKPO5mbm1sku/4VER4a8vmZeejKYa.O/FwicEpCiht6', '', '1221212', '2024-06-24 19:08:50', '2024-06-24 19:08:50'),
(9, 'Ohsa', 'Ohsa@gmail.com', '$2y$10$DKax/Uj1p6gUOkrRjm0jguB.4l3exwIHswXjDnWxzRKIeoqmhmmka', '', '1221212', '2024-06-24 19:11:21', '2024-06-24 19:11:21'),
(10, 'fauzan', 'fauzan@gmail.com', '$2y$10$xdedRdUNZBLA/ZYkvQmBAu5JKNknxrlVK1yRiJBc2Ms0tNXtmUSe.', '', '0811', '2024-06-25 15:26:52', '2024-06-25 15:26:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_foto`
--

CREATE TABLE `laporan_foto` (
  `id` int(11) NOT NULL,
  `laporan_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laporan_foto`
--

INSERT INTO `laporan_foto` (`id`, `laporan_id`, `photo`) VALUES
(1, 1, '1719296612_73ffd8bb87f1240dac66.jpeg'),
(2, 2, '1719296743_5b8f022c7379c89d5bfa.jpeg'),
(3, 3, '1719297673_307dda5add800e96cbf7.jpg'),
(4, 3, '1719297673_0003835a0c2ce73b8a83.jpeg'),
(5, 3, '1719297673_090ac99519ab3f661f61.jpeg'),
(6, 3, '1719297673_b2971ef28bf4bd512b6f.jpeg'),
(7, 3, '1719297673_f3d5819de523f4727996.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_sampah`
--

CREATE TABLE `laporan_sampah` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `status_laporan` enum('menunggu','diproses','ditolak','diterima') NOT NULL DEFAULT 'menunggu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laporan_sampah`
--

INSERT INTO `laporan_sampah` (`id`, `user_id`, `title`, `description`, `location`, `created_at`, `status_laporan`) VALUES
(1, 9, 'penumpukan sampah di selokanddss', 'terjadi penumpukan sampah di selokan sekitaran kingstreet akibatnya lokasi sekitar memiliki bau yang saangat busuk dan menyengat.', 'kingstreetdaa', '2024-06-25 06:23:31', 'diterima'),
(2, 9, 'penumpukan sampah di selokanddss', 'terjadi penumpukan sampah di selokan sekitaran kingstreet akibatnya lokasi sekitar memiliki bau yang saangat busuk dan menyengat.', 'kingstreetdaa', '2024-06-25 06:25:43', 'menunggu'),
(3, 9, 'adadad', 'adawdwdqwafdafaf', 'efefef', '2024-06-25 06:41:13', 'menunggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `leaderboard`
--

CREATE TABLE `leaderboard` (
  `id_user` int(11) NOT NULL,
  `poin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `laporan_foto`
--
ALTER TABLE `laporan_foto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laporan_id` (`laporan_id`);

--
-- Indeks untuk tabel `laporan_sampah`
--
ALTER TABLE `laporan_sampah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `laporan_foto`
--
ALTER TABLE `laporan_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `laporan_sampah`
--
ALTER TABLE `laporan_sampah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `laporan_foto`
--
ALTER TABLE `laporan_foto`
  ADD CONSTRAINT `fk_laporan_id` FOREIGN KEY (`laporan_id`) REFERENCES `laporan_sampah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `laporan_sampah`
--
ALTER TABLE `laporan_sampah`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD CONSTRAINT `leaderboard_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `akun` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
