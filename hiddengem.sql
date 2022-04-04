-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Apr 2022 pada 09.10
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
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `isi_komentar` varchar(100) NOT NULL,
  `id_postingan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `isi_komentar`, `id_postingan`, `id_user`) VALUES
(1, 'Bagus', 4, 5),
(2, 'WOW', 4, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `postingan`
--

CREATE TABLE `postingan` (
  `id_postingan` int(50) NOT NULL,
  `judul_post` varchar(100) NOT NULL,
  `foto_post` varchar(100) NOT NULL,
  `desc_post` varchar(500) NOT NULL,
  `id_user` int(10) NOT NULL,
  `maps` varchar(500) NOT NULL,
  `range_harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `postingan`
--

INSERT INTO `postingan` (`id_postingan`, `judul_post`, `foto_post`, `desc_post`, `id_user`, `maps`, `range_harga`) VALUES
(9, 'Hotel Sentosa', '1649054416_d64ec8975611546e4f6a.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p', 7, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15864.98707644674!2d106.7116703!3d-6.23116425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fa0422d12303%3A0xf285a79aab0b3ece!2sHari%20Hari%20Swalayan%20Ciledug!5e0!3m2!1sid!2sid!4v1649054275932!5m2!1sid!2sid', '50k - 100k'),
(10, 'Pink Beach, Pulau Komodo, Nusa Tenggara Timur', '1649056173_c79f7f4d0b1aeaaf0694.jpg', 'Pink beach merupakan salah satu pulau yang berada di Pulau Komodo, Flores Barat, Nusa Tenggara Timur. Untuk datang kemari kamu harus menempuh perjalanan darat dan laut karena letaknya yang ada di Pulau Komodo. Pantai ini berjarak 82 kilometer dari Kota Mataram.  Nggak usah khawatir Bela, pemandangan yang akan kamu dapati akan sebanding dengan perjalanan yang kamu tempuh.  Di sinilah saatnya kamu mulai browsing dan memilih kapal yang memiliki kredibilitas baik, untuk berlayar di sekitar Labuan Ba', 7, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15769.040697840259!2d116.55349502055249!3d-8.855352796243425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc4e8b7d3e1b23%3A0xf558da0a9b5eef39!2sPink%20Beach%20Lombok!5e0!3m2!1sid!2sid!4v1649056053503!5m2!1sid!2sid', 'Rp30 ribu – Rp 40 ribu');

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
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

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
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id_postingan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
