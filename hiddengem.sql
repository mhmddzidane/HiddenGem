-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2022 pada 11.52
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
-- Struktur dari tabel `bukutamu`
--

CREATE TABLE `bukutamu` (
  `id_tamu` int(50) NOT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `nim_tamu` varchar(100) NOT NULL,
  `pesan_tamu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bukutamu`
--

INSERT INTO `bukutamu` (`id_tamu`, `nama_tamu`, `nim_tamu`, `pesan_tamu`) VALUES
(1, 'Zidane', '41519010103', 'Aplikasi Yang Bagus'),
(2, 'Jake', '', 'good'),
(3, 'tes', 'tes', 'tes'),
(4, 'Andi', '1234', 'Web yang bagus');

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
  `desc_post` varchar(10000) NOT NULL,
  `id_user` int(10) NOT NULL,
  `maps` varchar(500) NOT NULL,
  `range_harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `postingan`
--

INSERT INTO `postingan` (`id_postingan`, `judul_post`, `foto_post`, `desc_post`, `id_user`, `maps`, `range_harga`) VALUES
(9, 'Hotel Sentosa', '1649054416_d64ec8975611546e4f6a.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p', 7, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15864.98707644674!2d106.7116703!3d-6.23116425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fa0422d12303%3A0xf285a79aab0b3ece!2sHari%20Hari%20Swalayan%20Ciledug!5e0!3m2!1sid!2sid!4v1649054275932!5m2!1sid!2sid', '50k - 100k'),
(11, 'Tempat Liburan Tersembunyi di Bogor', '1649135886_df98267793d37df33057.webp', 'Tempat yang sangat menarik namun sepi pengunjung, bisa datang kesini bersama keluarga', 5, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126829.33497357341!2d106.72185096768533!3d-6.595018082386405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c44a0cd6aab5%3A0x301576d14feb9a0!2sBogor%2C%20Kp.%20Parung%20Jambu%2C%20Kota%20Bogor%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1649135857786!5m2!1sid!2sid', 'Rp30 ribu – Rp 40 ribu'),
(12, 'Gunung Sindoro', '1649600497_f219f08eff01f7db6dd7.jpg', 'SALAH satu kegiatan yang sudah berjalan dikawasan Gunung ini adalah wisata pegunungan. Pendakian Sindoro-Sumbing biasanya dimulai dari kledung, yang terletak diantara kedua Gunung. Ditempat ini, para pendaki juga bisa menyaksikan matahari terbit dan terbenam. Jalur pendakian yang menantang, ritual setiap malam 1 sura (1 muharam) dan malem selikuran (21 Ramadhan), hamparan perkebunan teh, aneka ladang sayur, deretan pohon pinus, dan jalur berliku-liku dilembah kedua gunung itu membuat banyak oran', 7, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15829.826740310997!2d109.98707852027219!3d-7.302478481923667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70757555351a43%3A0x6e1fd0eaed14acb5!2sGn.%20Sindoro!5e0!3m2!1sid!2sid!4v1649600467589!5m2!1sid!2sid', '50K - 75K'),
(13, 'Curug Lontar', '1649604796_d3efd530287e902d11a8.jpg', 'Teman Traveler yang hendak ke Curug Lontar bisa menggunakan kendaraan roda empat atau roda dua. Perjalanan bisa mulai dari kota menuju langsung ke Leuwiliang. Setelah melewati Jembatan Sungai Cianten, dilanjutkan menuju PLTA unit Kracak sejauh kurang lebih 7 Km. Jika menggunakan kendaraan umum dari Stasiun Bogor, bisa menggunakan angkot 02 atau 03 ke Bubulak. Kemudian, dilanjutkan angkot 05 Jasinga-Leuwiliang. Seterusnya, berhenti di pertigaan Kracak dan gunakan angkot 57 Kracak-Puraseda.  Jika bingung, bisa meminta petunjuk kepada warga sekitar. Pada umumnya mereka tahu persis, terlebih jika mendengar nama PLTA Kracak. Jalan menuju Curug Lontar Leuwiliang lumayan sulit. Teman Traveler yang hendak liburan ke sini bisa meminta bantuan warga sekitar. Jalan setapak yang licin dan curam akan menjadi drama perjalanan tersendiri. Ditambah minimnya fasilitas yang tersedia.  Curug Lontar yang ada di Bogor ini belum memberlakukan harga tiket masuk yang paten. Jadi Teman Traveler bisa memberikan', 5, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.0825881408564!2d106.63691571434465!3d-6.636665466722344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69d1f5203fdd51%3A0x47547000d72546a5!2sCurug%20Lontar%2C%20Karyasari%20Leuwiliang%2C%20Bgr%20rno!5e0!3m2!1sid!2sid!4v1649604726233!5m2!1sid!2sid', '20K - 30K'),
(14, 'Hutan Kota BSD', '1649605462_a45267c7a4f0c61ca376.jpg', 'Wisata Hutan kota Bsd di Serpong Tangerang Banten adalah salah satu tempat wisata yang berada di Jalan Letnan Sutopo, Desa Lengkong Gudang Timur, Kecamatan Serpong, Kabupaten Tangerang, Banten, Indonesia. Wisata Hutan kota Bsd di Serpong Tangerang Banten adalah tempat wisata yang ramai dengan wisatawan pada hari biasa maupun hari liburan. Tempat ini sangat indah dan bisa memberikan sensasi yang berbeda dengan aktivitas kita sehari hari.  Wisata Hutan kota Bsd di Serpong Tangerang Banten memiliki pesona keindahan yang sangat menarik untuk dikunjungi. Sangat di sayangkan jika anda berada di kota Tangerang tidak mengunjungi Wisata Hutan kota Bsd di Serpong Tangerang Banten yang mempunyai keindahan yang tiada duanya tersebut.  Wisata Hutan kota Bsd di Serpong Tangerang Banten sangat cocok untuk mengisi kegiatan liburan anda, apalagi saat liburan panjang seperti libur nasional, ataupun hari libur lainnya. Keindahan Wisata Hutan kota Bsd di Serpong Tangerang Banten ini sangatlah baik bagi anda semua yang berada di dekat atau di kejauhan untuk merapat mengunjungi tempat Wisata Hutan kota Bsd di kota Tangerang.', 8, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.499536086298!2d106.68108331400438!3d-6.329258595419585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fad8a505ebbd%3A0x3026f51e304d728c!2sTaman%20Kota%202%20BSD!5e0!3m2!1sid!2sid!4v1649605413831!5m2!1sid!2sid', '20K - 40K'),
(15, 'Pink Beach, Pulau Komodo, Nusa Tenggara Timur', '1649689052_abd10f1eb7169994383c.jpg', 'Pink beach merupakan salah satu pulau yang berada di Pulau Komodo, Flores Barat, Nusa Tenggara Timur. Untuk datang kemari kamu harus menempuh perjalanan darat dan laut karena letaknya yang ada di Pulau Komodo. Pantai ini berjarak 82 kilometer dari Kota Mataram.  Nggak usah khawatir Bela, pemandangan yang akan kamu dapati akan sebanding dengan perjalanan yang kamu tempuh.  Di sinilah saatnya kamu mulai browsing dan memilih kapal yang memiliki kredibilitas baik, untuk berlayar di sekitar Labuan Bajo. Mulai dari pulau Rinca, pulau Komodo, hingga pink beach. Kamu juga bisa menyesuaikan budget kamu, apakah ingin kunjungan pulang pergi, atau menginap di kapal, sesuai jumlah hari yang kamu inginkan.', 9, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15769.040697840259!2d116.55349502055249!3d-8.855352796243425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc4e8b7d3e1b23%3A0xf558da0a9b5eef39!2sPink%20Beach%20Lombok!5e0!3m2!1sid!2sid!4v1649689020272!5m2!1sid!2sid', '50K - 75K');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `password`, `foto`) VALUES
(5, 'Reiner Braun', 'reiner@gmail.com', 'MTIz', ''),
(6, 'Geralt of Rivia', 'geralt@gmail.com', 'MTIz', ''),
(7, 'Muhammad Zidane', 'muhammadzidane633@gmail.com', 'bGVvMDUwODAx', ''),
(8, 'Budi', 'budi@gmail.com', 'MTIz', ''),
(9, 'Andi', 'andi@gmail.com', 'MTIz', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bukutamu`
--
ALTER TABLE `bukutamu`
  ADD PRIMARY KEY (`id_tamu`);

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
-- AUTO_INCREMENT untuk tabel `bukutamu`
--
ALTER TABLE `bukutamu`
  MODIFY `id_tamu` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id_postingan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
