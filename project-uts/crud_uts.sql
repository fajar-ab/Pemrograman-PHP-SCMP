-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jul 2022 pada 17.33
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `hari` enum('senin','selasa','rabu','kamis','jumat','sabtu','minggu') NOT NULL,
  `id_mata_kuliah` varchar(100) NOT NULL,
  `pukul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `hari`, `id_mata_kuliah`, `pukul`) VALUES
(9, 'senin', 'MKBK63113', '12:45 - 15:00'),
(10, 'selasa', 'MPPK62103', '12:45 - 14:15'),
(12, 'rabu', 'MKBK62115', '10:30 - 12:45'),
(13, 'rabu', 'MKBK63125', '13:00 - 14:31'),
(14, 'selasa', 'MKBK82119', '11:15 - 12:45'),
(20, 'sabtu', 'MKBK63124', '09:00 - 11:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mata_kuliah`
--

CREATE TABLE `tb_mata_kuliah` (
  `id_mata_kuliah` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `dosen` varchar(200) NOT NULL,
  `ruangan` varchar(10) NOT NULL,
  `sks` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mata_kuliah`
--

INSERT INTO `tb_mata_kuliah` (`id_mata_kuliah`, `nama`, `dosen`, `ruangan`, `sks`, `semester`) VALUES
('MKBK62115', 'Sistem Penunjang Keputusan', 'Sri Dewi, S.Kom., M.Kom', 'LABOR01', 3, 6),
('MKBK63113', 'Testing & Implementasi SI', 'Ahmad Indra Harahap M.Kom', 'RUANG02', 3, 6),
('MKBK63124', 'Bahasa Pemrograman VB.Net 2', 'Muhammad Kifli Hutagalung', 'LABOR01', 3, 6),
('MKBK63125', 'Metodelogi Penelitian 2', 'Riska Damayanti M.Pd', 'RUANG02', 2, 6),
('MKBK82119', 'Kecakapan Antar Personal', 'Ali Akbar M.pd', 'RUANG01', 2, 8),
('MKKK63119', 'Bahasa Pemrograman Web 1', 'Muhammad Kifli Hutagalung', 'LABOR01', 3, 6),
('MKKK83133', 'Pemrograman Mobile', 'Irhandi Ferianto M.Kom', 'LABOR01', 3, 8),
('MKPK82109', 'Kewirausahaan', 'Selvia Djasmayena M.Kom', 'RUANG02', 2, 8),
('MPPK62103', 'Manajement Proyek SI', 'Oktopanda M.Kom', 'RUANG01', 2, 6);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_mata_kuliah` (`id_mata_kuliah`);

--
-- Indeks untuk tabel `tb_mata_kuliah`
--
ALTER TABLE `tb_mata_kuliah`
  ADD PRIMARY KEY (`id_mata_kuliah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD CONSTRAINT `tb_jadwal_ibfk_1` FOREIGN KEY (`id_mata_kuliah`) REFERENCES `tb_mata_kuliah` (`id_mata_kuliah`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
