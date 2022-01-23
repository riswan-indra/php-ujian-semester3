-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 23 Jan 2022 pada 21.21
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dsn`
--

CREATE TABLE `dsn` (
  `id` int(11) NOT NULL,
  `nidn` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dsn`
--

INSERT INTO `dsn` (`id`, `nidn`, `nama`, `alamat`, `email`) VALUES
(5, 71263761, 'victor panggabean', 'bekasi', 'simboloni288@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `id` int(11) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jurusan` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `semester` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`id`, `nim`, `nama`, `jurusan`, `alamat`, `semester`) VALUES
(1, '191301007', 'Fransiskus Riswan Indra Simbolon', 'Teknik Informatika', 'Parluasan', '5'),
(2, '12341234', 'Parlindungan', 'Teknik Informatika', 'Jl.Kartini', '3'),
(5, '121212', 'stefanus sitanggang', 'mesin', 'sidikkalang', '5'),
(6, '191301008', 'wahyu sinaga', 'informatika', 'sosa', '5'),
(11, '12121245', 'fiki', 'mesin', 'sosa', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `nim` varchar(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jurusan` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `semester` varchar(250) NOT NULL,
  `kd_nilai` varchar(250) NOT NULL,
  `quiz` varchar(250) NOT NULL,
  `tugas` varchar(250) NOT NULL,
  `uts` varchar(250) NOT NULL,
  `uas` varchar(250) NOT NULL,
  `rata_rata` varchar(250) NOT NULL,
  `n_huruf` varchar(255) NOT NULL,
  `keterangan` enum('lulus','tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`nim`, `nama`, `jurusan`, `alamat`, `semester`, `kd_nilai`, `quiz`, `tugas`, `uts`, `uas`, `rata_rata`, `n_huruf`, `keterangan`) VALUES
('191301007', 'Fransiskus Riswan Indra Simbolon', 'Teknik Informatika', 'Parluasan', '5', '10', '80', '80', '80', '80', '80', 'A', 'lulus'),
('12341234', 'Parlindungan', 'Teknik Informatika', 'Jl.Kartini', '3', '10', '80', '80', '80', '80', '80', 'B', 'lulus'),
('191301008', 'wahyu sinaga', 'informatika', 'sosa', '5', '10', '80', '80', '80', '80', '80', 'D', 'lulus'),
('12121245', 'fiki', 'mesin', 'sosa', '5', '10', '90', '90', '90', '90', '90', 'A', 'lulus');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dsn`
--
ALTER TABLE `dsn`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dsn`
--
ALTER TABLE `dsn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
