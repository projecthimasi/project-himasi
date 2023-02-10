-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Feb 2023 pada 18.09
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
-- Struktur dari tabel `invoice`
--

CREATE TABLE `invoice` (
  `no_invoice` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `id_seminar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `invoice`
--

INSERT INTO `invoice` (`no_invoice`, `status`, `id_peserta`, `id_seminar`) VALUES
('8451792063', 'pandding', 21, 0);

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
(21, '12210792', 'jaja royana', 'muhammadjajaroyana3@gmail.com', '1', 'sistem', 'karawang', '+6281389931321');

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
(0, 'Cybersecurity: Menjaga Keamanan Informasi di Era D', 'membahas tentang pentingnya keamanan informasi dalam era digital saat ini. Dalam era digital yang semakin berkembang, ancaman cyber juga semakin tinggi dan sering terjadi. Oleh karena itu, penting untuk memahami bagaimana cara menjaga keamanan informasi dan melindungi data pribadi dan bisnis. Seminar ini akan membahas topik seperti pengenalan ancaman cyber, cara mencegah serangan cyber, metode pemantauan dan deteksi keamanan, dan bagaimana memastikan bahwa sistem informasi dan data Anda tetap aman dan terlindungi. Seminar ini dapat memberikan informasi dan pengetahuan tentang cara menjaga keamanan informasi dan melindungi data pribadi dan bisnis dalam era digital saat ini.', 'Eko Budi Rahardian - CEO dan Founder dari PT Neta Cyber Security Indonesia', 'Silivia Setiawati & Arlan Maulana', 35000, 'defaul.jpg', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`no_invoice`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
