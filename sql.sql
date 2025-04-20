-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Apr 2025 pada 12.33
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
-- Database: `donezo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` enum('Belum Selesai','Selesai') DEFAULT 'Belum Selesai',
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `phone`, `username`, `password`) VALUES
(1, '2424', 'ajdwud@gmail.com', '242424', '2424', '$2y$10$pk.oiuXcmpZei6csDsS4K.I5cTHTX05qqYqkaWvxK0xU/EABmBf9e'),
(2, 'josha', 'josha@gmail.com', '78787878', 'josha', '$2y$10$syBT2RA1WFlSU2mUlM.tMe3jZhKZlEKcjW.VYoCGhxHS7ma5bdjEK'),
(3, 'majid', 'huhu@gmail.com', '787878', 'majid', '123123123123'),
(4, 'aku', 'aku@gmail.com', '0989898', '0989898', '123456'),
(7, 'eqe', 'e1e13@gmail.com', '1313', '13131', '131313'),
(8, 'jiddd', 'jiddd@gmail.com', '787878', 'jiddd', '12345678'),
(9, 'pisss', 'pisss@gmail.com', '878787', 'pisss', '12341234'),
(10, 'huhuhu', 'huhuhu@gmail.com', '876876876', 'huhuhu', '123123123'),
(11, 'ian', 'ian@gmail.com', '767676', 'ian', '1234512345'),
(12, 'yuhuu', 'yuhuu@gmail.com', '545454', 'yuhuu', '756756756'),
(13, 'yuhu', 'yuhu@gmail.com', '9898', 'yuhu', '898989'),
(16, 'messs', 'messs@gmail.com', '656565', 'messs', '565656'),
(17, 'kon', 'tol@gmail.com', '989898', 'kon', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
