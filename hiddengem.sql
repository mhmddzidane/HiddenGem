-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Mar 2022 pada 14.50
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hiddengem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `postingan`
--

CREATE TABLE `postingan` (
  `id_postingan` int(50) NOT NULL,
  `judul_post` varchar(100) NOT NULL,
  `foto_post` varchar(100) NOT NULL,
  `desc_post` varchar(100) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `postingan`
--

INSERT INTO `postingan` (`id_postingan`, `judul_post`, `foto_post`, `desc_post`, `id_user`) VALUES
(3, 'dasda', '1648383632_00fa4f16d39deb9fd74c.jpg', 'dasds', 7),
(4, 'Tempat Liburan Tersembunyi di Bogor', '1648383721_84cbdf7f758d4519bc78.png', 'Tempat yang sangat menarik namun sepi pengunjung, bisa datang kesini bersama keluarga', 7),
(5, 'Pantai Anyer', '1648438666_6816de367548c5832355.jpg', 'Bersih dan Indah', 7),
(6, 'Pantai Losari', '1648438718_53eaf6feaee0fa53cfc0.png', 'Indah dan sejuk', 5),
(7, 'Gunung', '1648440957_5b2139f6ebfcc402a4d0.png', 'Anime', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `password`) VALUES
(5, 'eren', 'eren@gmail.com', 'MTIz'),
(6, 'Geralt of Rivia', 'geralt@gmail.com', 'MTIz'),
(7, 'Muhammad Zidane', 'muhammadzidane633@gmail.com', 'bGVvMDUwODAx');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`id_postingan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id_postingan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
