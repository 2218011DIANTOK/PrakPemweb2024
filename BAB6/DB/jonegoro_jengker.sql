-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Bulan Mei 2024 pada 04.58
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
-- Database: `jonegoro_jengker`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `input`
--

CREATE TABLE `input` (
  `id_input` int(11) NOT NULL,
  `id_petisi` int(11) NOT NULL,
  `Judul_Gagasan` varchar(255) NOT NULL,
  `Narasi_Gagasan` text NOT NULL,
  `tgl_dibuat` datetime NOT NULL DEFAULT current_timestamp(),
  `tgl_update` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jonegoro_jengker`
--

CREATE TABLE `jonegoro_jengker` (
  `id_Gagasan` int(11) NOT NULL,
  `judul_Gagasan` varchar(255) NOT NULL,
  `Narasi_Gagasan` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  `tgl_dibuat` datetime NOT NULL DEFAULT current_timestamp(),
  `tgl_update` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `petisi`
--

CREATE TABLE `petisi` (
  `id_petisi` int(11) NOT NULL,
  `id_Gagasan` int(11) NOT NULL,
  `Judul_Gagasan` varchar(255) NOT NULL,
  `Narasi_Gagasan` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  `tgl_dibuat` datetime NOT NULL DEFAULT current_timestamp(),
  `tgl_update` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `input`
--
ALTER TABLE `input`
  ADD PRIMARY KEY (`id_input`),
  ADD UNIQUE KEY `Judul_Gagasan` (`Judul_Gagasan`),
  ADD KEY `id_petisi` (`id_petisi`);

--
-- Indeks untuk tabel `jonegoro_jengker`
--
ALTER TABLE `jonegoro_jengker`
  ADD PRIMARY KEY (`id_Gagasan`),
  ADD UNIQUE KEY `judul_Gagasan` (`judul_Gagasan`);

--
-- Indeks untuk tabel `petisi`
--
ALTER TABLE `petisi`
  ADD PRIMARY KEY (`id_petisi`),
  ADD UNIQUE KEY `id_Gagasan` (`id_Gagasan`),
  ADD UNIQUE KEY `Judul_Gagasan` (`Judul_Gagasan`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `input`
--
ALTER TABLE `input`
  ADD CONSTRAINT `input_ibfk_1` FOREIGN KEY (`id_petisi`) REFERENCES `petisi` (`id_petisi`);

--
-- Ketidakleluasaan untuk tabel `petisi`
--
ALTER TABLE `petisi`
  ADD CONSTRAINT `petisi_ibfk_1` FOREIGN KEY (`id_Gagasan`) REFERENCES `jonegoro_jengker` (`id_Gagasan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
