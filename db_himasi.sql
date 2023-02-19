-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Feb 2023 pada 11.50
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_himasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `htm`
--

CREATE TABLE `htm` (
  `id_seminar` int(11) NOT NULL,
  `harga` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `htm`
--

INSERT INTO `htm` (`id_seminar`, `harga`) VALUES
(1, '30000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--

CREATE TABLE `invoice` (
  `no_invoice` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `id_seminar` int(11) NOT NULL,
  `token_snap` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `no_invoice` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `id_seminar` int(11) NOT NULL,
  `nominal` double NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pandding',
  `token_snap` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`no_invoice`, `id_peserta`, `id_seminar`, `nominal`, `status`, `token_snap`) VALUES
(1676802801, 33, 1, 30000, 'lunas', 'eac7e10a-d6e3-4bcd-8592-9ffb9c18af94');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `program_studi` varchar(50) NOT NULL,
  `kampus` varchar(20) NOT NULL,
  `no_tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id`, `nim`, `nama`, `email`, `semester`, `program_studi`, `kampus`, `no_tlp`) VALUES
(33, '12210792', 'jaja royana', 'muhammadjajaroyana3@gmail.com', '3', 'Sistem Informasi Akuntansi', 'Karawang', '+6281389931321');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seminar`
--

CREATE TABLE `seminar` (
  `id` int(11) NOT NULL,
  `tema` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `pembicara` varchar(128) NOT NULL,
  `moderator` varchar(128) NOT NULL,
  `htm` double NOT NULL,
  `banner` varchar(128) NOT NULL,
  `waktu` varchar(15) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `tempat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `seminar`
--

INSERT INTO `seminar` (`id`, `tema`, `deskripsi`, `pembicara`, `moderator`, `htm`, `banner`, `waktu`, `tanggal`, `tempat`) VALUES
(1, 'Cybersecurity: Menjaga Keamanan Informasi di Era D', 'membahas tentang pentingnya keamanan informasi dalam era digital saat ini. Dalam era digital yang semakin berkembang, ancaman cyber juga semakin tinggi dan sering terjadi. Oleh karena itu, penting untuk memahami bagaimana cara menjaga ', 'Eko Budi Rahardian - CEO dan Founder dari PT Neta Cyber Security Indonesia', 'Silivia Setiawati & Arlan Maulana', 35000, 'defaul.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `locale`, `picture`, `link`, `created`, `modified`) VALUES
(1, 'google', '103460336921819080601', 'MJ', 'Royana', 'muhammadjajaroyana3@gmail.com', '', 'id', 'https://lh3.googleusercontent.com/a/AEdFTp5EKuL2_1ONxiGPaOGJ-4M-MVUPS2wTFeKIzLje3Q=s96-c', '', '2023-02-07 04:24:43', '2023-02-07 09:02:36'),
(2, 'google', '104190925795247494721', 'Muhammad', 'Jaja Royana', 'muhammadjajaroyana4@gmail.com', '', 'id', 'https://lh3.googleusercontent.com/a/AEdFTp6g2rx-8ETDpUQZ03voMfWAboM0YU87i2XV-9Cgwg=s96-c', '', '2023-02-07 09:03:13', '2023-02-07 09:06:41');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `htm`
--
ALTER TABLE `htm`
  ADD UNIQUE KEY `id_seminar` (`id_seminar`);

--
-- Indeks untuk tabel `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`no_invoice`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`no_invoice`),
  ADD UNIQUE KEY `id_peserta` (`id_peserta`,`id_seminar`),
  ADD KEY `id_seminar` (`id_seminar`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `seminar`
--
ALTER TABLE `seminar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `seminar`
--
ALTER TABLE `seminar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `htm`
--
ALTER TABLE `htm`
  ADD CONSTRAINT `htm_ibfk_1` FOREIGN KEY (`id_seminar`) REFERENCES `seminar` (`id`);

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_seminar`) REFERENCES `htm` (`id_seminar`),
  ADD CONSTRAINT `pembayaran_ibfk_3` FOREIGN KEY (`id_peserta`) REFERENCES `peserta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
