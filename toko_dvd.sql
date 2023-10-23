-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Mar 2022 pada 12.39
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_dvd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dvd`
--

CREATE TABLE `dvd` (
  `id_film` int(6) NOT NULL,
  `judul` char(100) DEFAULT NULL,
  `jenis` char(20) DEFAULT NULL,
  `nama_gmb` char(200) DEFAULT NULL,
  `sutradara` char(30) DEFAULT NULL,
  `pemain_utama` char(30) DEFAULT NULL,
  `harga` int(6) DEFAULT NULL,
  `thn_terbit` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dvd`
--

INSERT INTO `dvd` (`id_film`, `judul`, `jenis`, `nama_gmb`, `sutradara`, `pemain_utama`, `harga`, `thn_terbit`) VALUES
(1, 'Habibie dan Ainun', 'Romantis', 'Habibie&Ainun.jpg', 'Hanung Bramantyo', 'Reza Rahadian', 10000, 2012),
(2, 'Koala Kumal', 'Komedi', 'KoalaKumal.jpg', 'Raditya Dika', 'Raditya Dika', 17500, 2016),
(3, 'Magic Hour', 'Romantis', 'MagicHour.jpg', 'Asep Kusdinar', 'Michelle Ziudith', 6000, 2015),
(4, 'Ghost Buser', 'Horor', 'GhostBuser.jpg', 'Tora Sudiro', 'Tora Sudiro', 10000, 2021),
(5, 'Agen Dunia', 'Komedi', 'AgenDunia.jpg', 'Herwin Novianto', 'Baim Wong', 10000, 2021),
(6, 'Radio Galau FM', 'Romantis', 'RadioGalau.jpg', 'Iqbal Rais', 'Dimas Anggara', 6000, 2012);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'athaya', 'tayo'),
(2, 'fitri', '123'),
(5, 'rizqia', 'arf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`id_film`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dvd`
--
ALTER TABLE `dvd`
  MODIFY `id_film` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
