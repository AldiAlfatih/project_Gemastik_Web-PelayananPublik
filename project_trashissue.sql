-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2024 at 10:21 AM
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
-- Database: `project_trashissue`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
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
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `email`, `password`, `konfirmasi_password`, `no_telepon`, `created_at`, `updated_at`) VALUES
(1, 'Aldi', 'k@gio', '$2y$10$Infq4jlF1KyqqfEAsgcaBuGJAvTlA3CpMkmhngbceRDME2Ac7qmdi', '', '22222', '2024-06-24 17:20:04', '2024-06-24 17:20:04'),
(4, 'Who?', 'kaada@gio', '$2y$10$ETlgv2PiR3bR8VLebwVXb.c9PmQQAB2.wtvs363BrRzDaJS/LG9xS', '', '22222', '2024-06-24 17:23:39', '2024-06-24 17:23:39'),
(5, 'Whaao?', 'kaafda@gio', '$2y$10$.xbBZTdYRaV2enXVKlWOiu2zPIDB6wpruzlIIgV7hCkDV7uubt4E6', '', '22222', '2024-06-24 17:24:41', '2024-06-24 17:24:41'),
(6, 'Whartuao?', 'kaafdaadad@gio', '$2y$10$GSxIntRPF.wUWtXnN7xQ3eZVmJJ46/2/BL0vJrcjHKhkYuTp1ldQW', '', '22222', '2024-06-24 17:25:24', '2024-06-24 17:25:24'),
(7, 'Siapa', 'Siapa@gmail.com', '$2y$10$Qfzc4oU.DD3tgCbZQSz3J..yuw2F2yUKm68Ghml2q.cdUqTVJrKcm', '', '12345', '2024-06-24 18:45:12', '2024-06-24 18:45:12'),
(8, 'Ohaa', 'Oha@gmail.com', '$2y$10$g6DuJw38AYzKPO5mbm1sku/4VER4a8vmZeejKYa.O/FwicEpCiht6', '', '1221212', '2024-06-24 19:08:50', '2024-06-24 19:08:50'),
(9, 'Ohsa', 'Ohsa@gmail.com', '$2y$10$DKax/Uj1p6gUOkrRjm0jguB.4l3exwIHswXjDnWxzRKIeoqmhmmka', '', '1221212', '2024-06-24 19:11:21', '2024-06-24 19:11:21'),
(10, 'Poki', 'ss@sss', '$2y$10$8KrxfazJEylHu4PCxcFwluVIlaIX6j08Kt2fbrCdY6b5.RDdSB6xK', '', '123345', '2024-06-28 07:18:15', '2024-06-28 07:18:15');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `kuantitas_barang` int(11) NOT NULL,
  `gambar_barang` longblob NOT NULL,
  `metode_penyerahan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_foto`
--

CREATE TABLE `laporan_foto` (
  `id` int(11) NOT NULL,
  `laporan_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan_foto`
--

INSERT INTO `laporan_foto` (`id`, `laporan_id`, `photo`) VALUES
(1, 1, '1719296612_73ffd8bb87f1240dac66.jpeg'),
(2, 2, '1719296743_5b8f022c7379c89d5bfa.jpeg'),
(3, 3, '1719297673_307dda5add800e96cbf7.jpg'),
(4, 3, '1719297673_0003835a0c2ce73b8a83.jpeg'),
(5, 3, '1719297673_090ac99519ab3f661f61.jpeg'),
(6, 3, '1719297673_b2971ef28bf4bd512b6f.jpeg'),
(7, 3, '1719297673_f3d5819de523f4727996.jpeg'),
(8, 4, '1719559182_099234f737251d544296.jpg'),
(9, 4, '1719559182_f96e56b9de295cab86d8.jpeg'),
(10, 4, '1719559182_f8d1494c22eeb7139836.png'),
(11, 4, '1719559182_ab1a8664b832c4f65991.jpg'),
(12, 4, '1719559182_7b8e467412ee02ae684d.png');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_sampah`
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
-- Dumping data for table `laporan_sampah`
--

INSERT INTO `laporan_sampah` (`id`, `user_id`, `title`, `description`, `location`, `created_at`, `status_laporan`) VALUES
(1, 9, 'penumpukan sampah di selokanddss', 'terjadi penumpukan sampah di selokan sekitaran kingstreet akibatnya lokasi sekitar memiliki bau yang saangat busuk dan menyengat.', 'kingstreetdaa', '2024-06-25 06:23:31', 'menunggu'),
(2, 9, 'penumpukan sampah di selokanddss', 'terjadi penumpukan sampah di selokan sekitaran kingstreet akibatnya lokasi sekitar memiliki bau yang saangat busuk dan menyengat.', 'kingstreetdaa', '2024-06-25 06:25:43', 'menunggu'),
(3, 9, 'adadad', 'adawdwdqwafdafaf', 'efefef', '2024-06-25 06:41:13', 'menunggu'),
(4, 10, 'Kenapa kambing bau?', 'karena....', '206', '2024-06-28 07:19:42', 'menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `leaderboard`
--

CREATE TABLE `leaderboard` (
  `id` int(11) NOT NULL,
  `poin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leaderboard`
--

INSERT INTO `leaderboard` (`id`, `poin`) VALUES
(10, 1000),
(9, 1255);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_foto`
--
ALTER TABLE `laporan_foto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laporan_id` (`laporan_id`);

--
-- Indexes for table `laporan_sampah`
--
ALTER TABLE `laporan_sampah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan_foto`
--
ALTER TABLE `laporan_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `laporan_sampah`
--
ALTER TABLE `laporan_sampah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan_foto`
--
ALTER TABLE `laporan_foto`
  ADD CONSTRAINT `fk_laporan_id` FOREIGN KEY (`laporan_id`) REFERENCES `laporan_sampah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `laporan_sampah`
--
ALTER TABLE `laporan_sampah`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD CONSTRAINT `leaderboard_ibfk_1` FOREIGN KEY (`id`) REFERENCES `akun` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
