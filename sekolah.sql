-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 10 Jun 2026 pada 03.47
-- Versi server: 5.7.24
-- Versi PHP: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL,
  `mata_pelajaran` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `deadline` date NOT NULL,
  `status` enum('Belum Selesai','Selesai') DEFAULT 'Belum Selesai'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id`, `mata_pelajaran`, `deskripsi`, `deadline`, `status`) VALUES
(1, 'MTK', 'REMEDD', '2026-06-09', 'Belum Selesai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
